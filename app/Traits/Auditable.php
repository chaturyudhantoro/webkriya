<?php

namespace App\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

trait Auditable
{
    public static function bootAuditable()
    {
        static::created(function ($model) {
            self::logActivity($model, 'CREATE');
        });

        static::updated(function ($model) {
            self::logActivity($model, 'UPDATE');
        });

        static::deleted(function ($model) {
            self::logActivity($model, 'DELETE');
        });
    }

    protected static function logActivity($model, string $action)
    {
        // Avoid infinite loop if logging itself
        if ($model->getTable() === 'audit_trails') {
            return;
        }

        $oldValues = null;
        $newValues = null;

        if ($action === 'CREATE') {
            $newValues = json_encode($model->getAttributes());
        } elseif ($action === 'UPDATE') {
            $oldValues = json_encode(array_intersect_key($model->getOriginal(), $model->getDirty()));
            $newValues = json_encode($model->getDirty());
        } elseif ($action === 'DELETE') {
            $oldValues = json_encode($model->getAttributes());
        }

        DB::table('audit_trails')->insert([
            'id' => (string) Str::uuid(),
            'user_id' => auth()->id(),
            'auditable_type' => get_class($model),
            'auditable_id' => (string) $model->getKey(),
            'action' => $action,
            'old_values' => $oldValues,
            'new_values' => $newValues,
            'ip_address' => request()->ip(),
            'user_agent' => request()->userAgent(),
            'created_at' => now(),
        ]);
    }
}

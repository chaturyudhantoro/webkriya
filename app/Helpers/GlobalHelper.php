<?php

if (!function_exists('format_indonesian_date')) {
    /**
     * Format a date into Indonesian readable format.
     *
     * @param  mixed  $date
     * @param  bool  $withTime
     * @return string
     */
    function format_indonesian_date($date, bool $withTime = false): string
    {
        if (!$date) {
            return '';
        }

        $datetime = $date instanceof \Carbon\Carbon 
            ? $date 
            : \Carbon\Carbon::parse($date);

        $months = [
            1 => 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni',
            'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];

        $day = $datetime->format('d');
        $month = $months[(int) $datetime->format('m')];
        $year = $datetime->format('Y');

        $formatted = "{$day} {$month} {$year}";

        if ($withTime) {
            $time = $datetime->format('H:i');
            $formatted .= " pukul {$time}";
        }

        return $formatted;
    }
}

if (!function_exists('school_setting')) {
    /**
     * Get a school setting by key, cached as an array or retrieved from the database.
     *
     * @param string $key
     * @param mixed $default
     * @return mixed
     */
    function school_setting(string $key, $default = null)
    {
        static $settings = null;
        
        if ($settings === null) {
            $settings = \Illuminate\Support\Facades\Cache::rememberForever('school_settings', function() {
                try {
                    $model = \App\Models\SchoolSetting::first();
                    return $model ? $model->toArray() : [];
                } catch (\Exception $e) {
                    return [];
                }
            });
        }
        
        // Handle corrupted object cache from previous implementation
        if (is_object($settings)) {
            if ($settings instanceof \__PHP_Incomplete_Class) {
                \Illuminate\Support\Facades\Cache::forget('school_settings');
                $settings = [];
            } else {
                $settings = (array) $settings;
            }
        }
        
        if (!is_array($settings)) {
            $settings = [];
        }
        
        return $settings[$key] ?? $default;
    }
}

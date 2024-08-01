<?php

use App\Providers\RouteServiceProvider;
use Carbon\Carbon;

// function flash($message)
// {
//     session()->flash('message', $message);
// }

// function dropMenu($table, array $columns)
// {
//     $menu = DB::table($table);
//     //dd($menu);
//     return $menu;
// }

if (! function_exists('activeClass')) {
    /**
     * Get the active class if the condition is not falsy.
     *
     * @param        $condition
     * @param string $activeClass
     * @param string $inactiveClass
     *
     * @return string
     */
    function activeClass($condition, $activeClass = 'active', $inactiveClass = '')
    {
        return $condition ? $activeClass : $inactiveClass;
    }
}

if (! function_exists('htmlLang')) {
    /**
     * Access the htmlLang helper.
     */
    function htmlLang()
    {
        return str_replace('_', '-', app()->getLocale());
    }
}

if (! function_exists('appName')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function appName()
    {
        return config('app.name', 'Laravel Boilerplate');
    }
}

/**
 * Calculate how much a profile is completed
 *
 * @param $profile
 * @return float|int
 */
if (! function_exists('appName')) {
    function calculate_profile($profile)
    {
        if ( ! $profile) {
            return 0;
        }
        $columns    = preg_grep('/(.+ed_at)|(.*id)/', array_keys($profile->toArray()), PREG_GREP_INVERT);
        $per_column = 100 / count($columns);
        $total      = 0;

        foreach ($profile->toArray() as $key => $value) {
            if ($value !== NULL && $value !== [] && in_array($key, $columns)) {
                $total += $per_column;
            }
        }

        return $total;
    }
}

if (! function_exists('homeRoute')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function homeRoute()
    {
        if (auth()->check()) {
            if (auth()->user()->hasRole(['Administrator', 'Superadmin'])) {
                return route('admin.dashboard');
            }
        }
        return route('dash');
    }
}

if (! function_exists('carbon')) {
    /**
     * Create a new Carbon instance from a time.
     *
     * @param $time
     * @return Carbon
     *
     * @throws Exception
     */
    function carbon($time)
    {
        return new Carbon($time);
    }
}



if (! function_exists('readCSV')) {
    function readCSV($filename = '', $delimiter = ',')
    {
        // Read the file
        $file = fopen($filename, 'r');

        // Iterate over it to get every line
        while (($line = fgetcsv($file)) !== false) {
            // Store every line in an array
            $data[] = $line;
        }
        fclose($file);

        return $data;
    }
}

if (! function_exists('writeCSV')) {
    function writeCSV($filename = '', $data = [])
    {
        $file = fopen($filename, 'w');

        // Write remaining lines to file
        foreach ($data as $fields) {
            fputcsv($file, $fields);
        }
        fclose($file);
    }
}



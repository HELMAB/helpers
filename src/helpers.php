<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Log;

if (!function_exists('to_khmer_number')) {
    function to_khmer_number($str)
    {
        return preg_replace_callback('/[0-9]/', function ($matches) {
            return [
                '0' => '០',
                '1' => '១',
                '2' => '២',
                '3' => '៣',
                '4' => '៤',
                '5' => '៥',
                '6' => '៦',
                '7' => '៧',
                '8' => '៨',
                '9' => '៩',
            ][$matches[0]];
        }, $str);
    }
}

if (!function_exists('to_standard_number')) {
    function to_standard_number($str)
    {
        $standard_numbers = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
        $devanagari_numbers = array("០", "១", "២", "៣", "៤", "៥", "៦", "៧", "៨", "៩");

        return str_replace($devanagari_numbers, $standard_numbers, $str);
    }
}

if (!function_exists('get_random_str')) {
    function get_random_str($length = 7)
    {
        $mixed_number_and_string = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        return substr(str_shuffle(str_repeat($mixed_number_and_string, ceil($length / strlen($mixed_number_and_string)))), 1, $length);
    }
}

if (!function_exists('message_success')) {
    function message_success($data, $message = null)
    {
        return response()->json([
            'data' => $data,
            'message' => $message
        ]);
    }
}

if (!function_exists('message_error')) {
    function message_error($message, $code = 400)
    {
        if ($message instanceof Exception) {
            $message = [
                'message_en' => $message->getMessage(),
                'message_km' => $message->getMessage(),
                'line' => $message->getLine(),
            ];
        }
        return response()->json([
            'message' => $message
        ], $code);
    }
}

if (!function_exists('message_pagination')) {
    function message_pagination($paginate, $number_per_page)
    {
        return response()->json([
            'total_items' => $paginate->total(),
            'current_page' => $paginate->currentPage(),
            'has_more_page' => $paginate->hasMorePages(),
            'total_pages' => ceil($paginate->total() / $number_per_page),
            'data' => $paginate->items(),
            'message' => null
        ]);
    }
}

if (!function_exists('in_development')) {
    function in_development()
    {
        return App::environment('local');
    }
}

if (!function_exists('is_production')) {
    function is_production()
    {
        return App::environment('production');
    }
}

if (!function_exists('get_phone_with_country_code')) {
    function get_phone_with_country_code($phone)
    {
        return substr_replace(str_replace(" ", "", $phone), "855", 0, 1);
    }
}

if (!function_exists('get_phone_without_country_code')) {
    function get_phone_without_country_code($phone)
    {
        return str_replace(' ', '', preg_replace('/855/', '0', trim($phone), 1));
    }
}

if (!function_exists('my_logs')) {
    function my_logs($error, Exception $exception)
    {
        Log::error($error, [
            'Message' => $exception->getMessage(),
            'Line' => $exception->getLine(),
            'File' => $exception->getFile(),
        ]);
    }
}

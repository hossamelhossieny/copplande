<?php

use Carbon\Carbon;

/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('convertYmdToMdy')) {
    function convertYmdToMdy($date)
    {
        return Carbon::createFromFormat('Y-m-d', $date)->format('m-d-Y');
    }
}

/**
 * Write code on Method
 *
 * @return response()
 */
if (! function_exists('convertMdyToYmd')) {
    function convertMdyToYmd($date)
    {
        return Carbon::createFromFormat('m-d-Y', $date)->format('Y-m-d');
    }
}

function numbers($str)
{
    if (app()->getLocale() == 'en')
        return $str;
    $arabic_eastern = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
    $arabic_western = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
    //dd(app()->getLocale());
    return str_replace( $arabic_western, $arabic_eastern, $str);
}

function translated_date_mini($date)
{
    $new_date = Carbon\Carbon::parse($date)->translatedFormat('d M');

    if (app()->getLocale() == 'en'){
        return $new_date;
    }else{
        $arabic_eastern = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
        $arabic_western = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        return str_replace( $arabic_western, $arabic_eastern, $new_date);
    }
}

function translated_date_full($date)
{
    $new_date = Carbon\Carbon::parse($date)->translatedFormat('l j F Y');
    if (app()->getLocale() == 'en'){
        return $new_date;
    }else{
        $arabic_eastern = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
        $arabic_western = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9');
        return str_replace( $arabic_western, $arabic_eastern, $new_date);
    }
}

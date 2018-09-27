<?php

if(!function_exists('section_is_active')) {
    function section_is_active($section, $current){
        if($current == $section){
            return 'active';
        } else {
            return '';
        }
    }
}

if(!function_exists('date_to_YMD_format_00')) {
    function date_to_YMD_format_00($date){
        $ex = explode("/", $date);
        $date = $ex[2] . "-" . $ex[1] . "-" . $ex[0] . " 00:00:00";
        return $date;
    }
}

if(!function_exists('date_to_YMD_format_23')) {
    function date_to_YMD_format_23($date){
        $ex = explode("/", $date);
        $date = $ex[2] . "-" . $ex[1] . "-" . $ex[0] . " 23:59:59";
        return $date;
    }
}

if(!function_exists('date_to_YMD_pretty')) {
    function date_to_YMD_pretty($date){
        $ex = explode(" ", $date);
        $ex_ = explode("-", $ex[0]);
        $date = $ex_[2] . "/" . $ex_[1] . "/" . $ex_[0];
        return $date;
    }
}
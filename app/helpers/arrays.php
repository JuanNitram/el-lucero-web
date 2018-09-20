<?php

if(!function_exists('array_forma_pago')) {
    function array_forma_pago($value){
        $data = [
            '0' => 'Presencial',
            '1' => 'Transferencia',
        ];

        return $data[$value];
    }
}

if(!function_exists('array_talleres')) {
    function array_talleres($value){
        $data = [
            '0' => 'Taller Colonia',
            '1' => 'Taller Mercedes',
            '2' => 'Taller Paysandu',
        ];

        return $data[$value];
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
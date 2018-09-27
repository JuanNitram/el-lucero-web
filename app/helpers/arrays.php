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
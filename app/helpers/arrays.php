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
<?php

class OperacionesconArray{

    public function OperacionesconArrayenphp(){
        echo <<<'EOT'
        <pre>
            array — Crea un array
            array_all — Checks if all array elements satisfy a callback function
            array_any — Checks if at least one array element satisfies a callback function
            array_change_key_case — Cambia a mayúsculas o minúsculas todas las claves en un array
            array_chunk — Divide un array en fragmentos
            array_column — Devuelve los valores de una sola columna del array de entrada
            array_combine — Crea un nuevo array, usando una matriz para las claves y otra para sus valores
            array_count_values — Cuenta todos los valores de un array
            array_diff — Calcula la diferencia entre arrays
            array_diff_assoc — Calcula la diferencia entre arrays con un chequeo adicional de índices
            array_diff_key — Calcula la diferencia entre arrays empleando las claves para la comparación            
        </pre>
        EOT;
    }
}
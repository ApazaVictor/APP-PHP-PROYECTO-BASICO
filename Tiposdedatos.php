<?php


class Tiposdedatos{

    public function tiposdedatosenphp(){
        echo <<<'EOT'
        <pre>
            null.
            bool.
            int.
            float (número de punto flotante, también conocido como double)
            string.
            array.
            object.
            callable.               
        </pre>
        EOT;
    }
}
<?php

class OperacionesAritmeticos{


    public function funcionesAritmeticas(){
        echo <<<'EOT'
        <pre>
            Abs:El valor absoluto (un número positivo) de un número.
            Ceiling:Un número redondeado hacia arriba hasta el siguiente entero.
            Combination:El número de veces para elegir de forma única un número especificado de elementos desde un conjunto de un tamaño especificado.
            Div:Un entero del número especificado dividido por el divisor.
            Exp:El valor de la constante e (la base del logaritmo natural, igual a 2,7182818) elevado a la potencia de un número especificado.
            Factorial:El factorial de un número especificado terminando en 1 o tras un número de factores especificado.
            Floor:Un número redondeado hacia abajo hasta el siguiente entero inferior.
            Int:La parte numérica entera del valor que especifique, sin redondeo.
            Lg:El logaritmo en base 2 del número especificado, que puede ser cualquier valor positivo.
            Ln:El logaritmo en base e (natural) del número especificado.
            Log:El logaritmo natural (en base 10) del número especificado, que puede ser cualquier valor positivo.
            Mod:El resto después de dividir un número especificado por un divisor.
            Random:Un número aleatorio entre cero y uno.
            Round:Un número redondeado con la precisión especificada (número de decimales).
            SetPrecision:Cualquier función matemática contenida dentro de la expresión especificada hasta los dígitos de precisión especificados, si la función matemática admite la precisión extendida.
            Sign:Un valor de tres posibles: -1 si el número especificado es negativo, 0 si es cero y 1 si es positivo.
            Sqrt:La raíz cuadrada de un número.
            Truncate:Un número truncado hasta la precisión especificada (número de decimales), sin tener en cuenta el valor de los dígitos eliminados.
            </pre>
        EOT;
    }
}

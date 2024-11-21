<?php

class Condicionales {

    public function Condicionalesenphp(){
        echo <<<'EOT'
        <pre>
            >	es mayor que	if (1 > 0)
            <	es menor que	if (1 < 0)
            &&	y	if (1 > 0 && 67 > 0)
            ||	o	if (1 > 10 || 67 > 0)
            !	no	if (!(1 > 0))
            ==	es igual en valor	if ('3' == 3)
            ===	es igual en valor y tipo	if ('3' === '3')
            !=	no es igual	if ('Doctor' != 'Who')
            !==	no es igual en valor o tipo	if ('Doctor' !== 'Who')
            >=	es mayor o igual que	if (10 >= 10)
            <=	es menor o igual que	if (10 <= 20)
            <=>	-1, 0 y 1 dependiendo de los valores si son superados	(10 <=> 20) // 1
            True	Verdad	if (True)
            False	Falso	if (False)           
        </pre>
        EOT;
    }
}
<?php

class Calculator
{
    public function sumar(...$numeros)
    {
        $suma[] = $numeros;
        $result = null;

        foreach ($suma as $value) {
            foreach ($value as $num) {
                $result += $num;
            }
        }

        return $result;
    }

    public function restar(...$numeros)
    {

        $lenght = count($numeros);
        $result = $numeros[0];
        $i = 0;

        if (count($numeros) < 2) {
            return $result = "Se necesitan minimo dos numeros para operar la resta";
        }

        for ($i = 1; $i <= $lenght; $i++) {

            if ($i >= $lenght) {

                $result = $result;
                break;
            }
            $result -= $numeros[$i];
        }

        return $result;
    }

    public function multiplicar(...$numeros)
    {
        $result = $numeros[0];
        $lenght = count($numeros);
        $i = 0;
        $reset = 0;

        for ($i = 1; $i <= $lenght; $i++) {

            if ($i >= $lenght) {
                $result = $result;
                break;
            }

            $result = $result * $numeros[$i];

            $result = $result;
        }

        return $result;
    }

    public function dividir(...$numeros)
    {
        $result = $numeros[0];

        for ($i = 1; $i <= count($numeros) - 1; $i++) {

            if ($numeros[$i] == 0) {
                $result = "Error: División por cero no permitida";
            }

            $result = $result / $numeros[$i];

            $result = $result;
        }

        return $result;
    }
}

$c = new Calculator;
echo $c->sumar(8, 2, 2);

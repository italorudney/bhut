<?php
namespace Api\Controller;


class Multiplos
{
    private const Resultados = [
        '<strong>BHUT</strong>',
        '<strong>IT</strong>',
        '<strong>BHUT TI</strong>'
    ];


    public function mostraNumeros(int $maximo)
    {
        $inicial = 1;
        for ($i = $inicial; $i <= $maximo; $i++) {
            print "{$this->validaNumero($i)}|";
        }
    }


    public function validaNumero(int $n): string
    {
        $mod3 = intval(bcmod($n, 3));
        $mod5 = intval(bcmod($n, 5));
        $arrayMod = [$mod3, $mod5, ($mod3 + $mod5)];

        for ($i = 0; $i < count(self::Resultados); $i++) {
            if ($arrayMod[$i] === 0) {
                $n = self::Resultados[$i];
            }
        }

        return (string) $n;
    }
}
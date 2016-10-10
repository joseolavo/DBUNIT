<?php

 
/**
 * Simples classe para calculo do soma
 */
class Calculo
{
 
        /**
         * Retorna a soma dos valores passados como argumento para funcao
         */
        function soma()
        {
                $soma = 0;
                $args = func_get_args();
                foreach($args as $value) {
                        $soma += $value;
                }
 
                return $soma;
        }
}
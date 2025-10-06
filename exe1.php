<?php
    //Função para converter uma string para binário 
    function stringParaBinario($string){
        //A função str_split divide a string em um array de caracteres
        //A função ord pega o valor ASCII de cada caractere
        //A função decbin converte o valor ASCII em binário
        $binario = ' ';
        foreach(str_split($string) as $char){
            //converte o caractere para o valor binario de 8 bits
            $binario .= str_pad(decbin(ord($char)), 8, '0', STR_PAD_LEFT).' ';
        }
        return $binario;
    }

    //exemplo de uso
    $frase = "Olá, mundo!";
    $fraseBinario = stringParaBinario($frase);

    //exibindo a frase original e sua versão binaria
    echo "Frase original: " . $frase . "<br>";
    echo"Frase em binario: " . $fraseBinario . "<br>";
?>
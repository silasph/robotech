<?php
function converteData($formato, $data) {
    $replace = array('/','_');

    return date($formato, strtotime(str_replace($replace, '-', $data)));
}

function converteValor($valor) {
    return str_replace(',', '.', str_replace('.', '', $valor));
}

function randomName() {
    $lmin = 'abcdefghijklmnopqrstuvwxyz';
    $lmai = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $num = '1234567890';
    $retorno = '';
    $caracteres = '';

    $caracteres .= $lmin;
    $caracteres .= $lmai;
    $caracteres .= $num;

    $len = strlen($caracteres);

    for ($n = 1; $n <= 10; $n++) {
        $rand = mt_rand(1, $len);
        $retorno .= $caracteres[$rand-1];
    }

    return $retorno;
}

function presentMoney($value) {
    $ret = number_format($value, 2, ",", ".");
    return "R\$ $ret";
}

function normalizaUrl($str){
    $str = strtolower(utf8_decode($str)); $i=1;
    $str = strtr($str, utf8_decode('àáâãäåæçèéêëìíîïñòóôõöøùúûýýÿ'), 'aaaaaaaceeeeiiiinoooooouuuyyy');
    $str = preg_replace("/([^a-z0-9])/",'-',utf8_encode($str));
    while($i>0) $str = str_replace('--','-',$str,$i);
    if (substr($str, -1) == '-') $str = substr($str, 0, -1);
    return $str;
}

function utf8Fix($msg){
    $accents = array("á", "à", "â", "ã", "ä", "é", "è", "ê", "ë", "í", "ì", "î", "ï", "ó", "ò", "ô", "õ", "ö", "ú", "ù", "û", "ü", "ç", "Á", "À", "Â", "Ã", "Ä", "É", "È", "Ê", "Ë", "Í", "Ì", "Î", "Ï", "Ó", "Ò", "Ô", "Õ", "Ö", "Ú", "Ù", "Û", "Ü", "Ç");
    $utf8 = array("Ã¡","Ã ","Ã¢","Ã£","Ã¤","Ã©","Ã¨","Ãª","Ã«","Ã­","Ã¬","Ã®","Ã¯","Ã³","Ã²","Ã´","Ãµ","Ã¶","Ãº","Ã¹","Ã»","Ã¼","Ã§","Ã","Ã€","Ã‚","Ãƒ","Ã„","Ã‰","Ãˆ","ÃŠ","Ã‹","Ã","ÃŒ","ÃŽ","Ã","Ã“","Ã’","Ã”","Ã•","Ã–","Ãš","Ã™","Ã›","Ãœ","Ã‡");
    $fix = str_replace($utf8, $accents, $msg);
    return $fix;
}

function recursive_escape(&$value) {
    if (is_array($value)) {
        array_map('recursive_escape', $value);
    } else {
        $value = addslashes($value);
    }
}
?>
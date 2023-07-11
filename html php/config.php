<?php
//error_reporting(-1);
Class dbConfig extends PDO {

    protected $dbConfig = array();

    protected function createConfig() {
        $this->dbConfig['host'] = 'localhost';
        $this->dbConfig['username'] = 'root';
        $this->dbConfig['password'] = '';
        $this->dbConfig['dbname'] = 'dosya';
    }

}
setlocale(LC_TIME,"Turkish");
$bugun = date("Y.m.d");
$bugun2 = date("Y.m.d H:i:s");

function sifrele($sifre)
{
    $birlestir="";
    $artirim=0;
    $kelimeuzunlugu=strlen($sifre);
    for ($i=0; $i<=$kelimeuzunlugu-1 ; $i++)
    {
        $artirim++;
        $a=substr(strrev($sifre),$i,1);
        $a=ord($a);
        $a=$a+$artirim;
        $birlestir.=chr($a);
    }
    return $birlestir;
}
?>
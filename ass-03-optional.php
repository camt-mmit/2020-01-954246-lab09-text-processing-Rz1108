<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
if ($argc != 3) printf("Please input right file!!");
else{
$namelist=fopen($_SERVER['argv'][2],'r');
while(!feof($namelist)){
     $name[]=trim(fgets($namelist));
}

$inputf=fopen($_SERVER['argv'][1],'r');
    while(!feof($inputf)){
    $text[]=fgets($inputf);
    }

    foreach($name as $names){
     $text=str_ireplace($names,ucwords(strtolower($names)),$text);}
foreach($text as $texts) {
     if ($texts==null) echo"\n";
    else echo $texts;}}
    

    
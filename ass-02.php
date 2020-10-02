<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */
$pattern=$argv[1];
$number=substr($pattern,2);
$character=substr($pattern,0,2);

$file=fopen($_SERVER['argv'][2],'r');
fscanf($file,"%d",$n);
for($i=0;$i<$n;$i++){
    $product=fgets($file);
    $num=str_pad($number+$i,strlen($pattern)-2,"0",STR_PAD_LEFT);
    printf("%s%s %s",$character,$num,$product);
}




<?php
/**
     * ID:602110198
     * Name: Jingrong Zhuang
     * WeChat: Rz
     */

$file=fopen($_SERVER['argv'][1],'r');
fscanf($file,"%s %s",$firstname,$lastname);
printf("Transaction for:\n");
echo str_pad('First name:',strlen("Transaction for:")," ",STR_PAD_LEFT)." ".$firstname."\n";
echo str_pad('Last name:',strlen("Transaction for:")," ",STR_PAD_LEFT)." ".$lastname."\n";
fscanf($file,"%d",$n);
printf("Number of transactions: %d\n",$n);

for($i=0;$i<$n;$i++){
    fscanf($file,"%s %f",$code,$value);
    if (strcasecmp($code,"deposit") ==0||strcasecmp($code,"transfer")== 0) $values[]=$value;
    if (strcasecmp($code,"withdraw")== 0) $values[]=-$value;
    echo str_pad($code,strlen("Transaction for:")," ",STR_PAD_LEFT);
    echo str_pad(number_format($value,2,".",","),20," ",STR_PAD_LEFT)."\n";
}

echo "\n";

$total=array_sum($values);
printf("Account Balance:%20.2f",$total);

fclose($file);



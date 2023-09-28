<?php

$a=rand(1,10);
$b=rand(1,10);
switch($a<=>$b){
    case -1:
        echo $a."<".$b;
        break;
        case 0:
            echo $a."=".$b;
            break;
            case 1:
                echo $a.">".$b;
               
}






?>
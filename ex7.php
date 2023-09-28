<?php

$a=rand();
$b=rand();
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
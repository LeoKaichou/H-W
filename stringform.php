<?php
    if(isset($_POST["s"])){
        $a=$_POST['txt'];
        $b=$_POST['txt2'];
        $d=$_POST['txt3'];
        $c=$_POST['sel'];
        $e=$_POST['num'];
        switch($c){
            case 'ToLowerCase':
                echo strtolower($a);
                break;
            case 'ToUpperCase':
                echo strtoupper($a);
                break;
            case 'UcWords':
                echo ucwords($a);
                break;
            case 'Lcfirst':
                echo lcfirst($a);
                break;
            case 'Ucfirst':
                echo ucfirst($a);
                break;
            case 'StringLength':
                echo strlen($a);
                break;
            case 'StringReverse':
                echo strrev($a);
                break;
            case 'WordCount':
                echo str_word_count($a);
                break;
            case 'StringPosition':
                echo strpos($a,$b);
                break;
            case 'StringLastPosition':
                echo strrpos($a,$b);
                break;
            case 'StringReplace':
                echo str_replace($b, $d,$a);
                break;
            case 'SubString':
                echo substr($a, $b);
                break;
            case 'Trim':
                echo trim($a);
                break;
            case 'StringCompare':
                echo strcmp($a, $b);
                break;
            case 'StringNCompare':
                echo strncmp($a,$b,$e);
                break;
            case 'StringString':
                echo strstr($a, $b);
                break;
            default:
                echo "Invalid Input";
        }
    }
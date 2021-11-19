<?php
function check($str){
    $stack = new SplStack();

    for ($i = 0; $i < strlen($str); $i++){
        if ($str[$i] == "("){
            $stack->push("(");
        }elseif ($str[$i] == ")"){
            if ($stack->isEmpty()){
                return false;
            }
           $stack->pop();
        }
    }
    if ($stack->isEmpty()){
        return true;
    }else {
        return false;
    }
}

function display($str){
    if (check($str)){
        echo true;
    } else{
        echo false;
    }
}

//$string = "s * (s – a) * (s – b * (s – c)";
//display($string);
//$string1 = "s * (s – a) * s – b) * (s – c) ";
//display($string1);
$string2 = "(– b + (b^2 – 4*a*c)^(0.5/ 2*a))";
display($string2);



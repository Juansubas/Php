<?php

function contador($inicial, $hasta){
    if($inicial > $hasta){
        return [];
    }
    $result = contador($inicial, $hasta - 1);
    array_push($result, $hasta);
    return $result;
}

function contadorAtras($inicial, $hasta){
    if($inicial > $hasta){
        return [];
    }
    $result = contador($inicial, $hasta - 1);
    array_unshift($result, $hasta);
    return $result;
}

print_r(contador(1, 5));
echo "<br/>";
print_r(contadorAtras(1, 5));
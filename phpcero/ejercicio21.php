<?php 

    $array = array("fresa", "pera", "manzana");

    print_r($array);

    //ARREGLO ASOCIATIVO personalizando indices
    $arrayAsociativo = array("f" => "fresa", "p" => "pera", "m" => "manzana");

    print_r($arrayAsociativo);

    // ACCEDIENDO AL ARREGLO PARA OBTENER EL VALOR 
    echo $array[2]. '<br/>';
    echo $arrayAsociativo['f'].'<br/>';

    //Recorriendo el arreglo
    for( $indice = 0; $indice < 3 ; $indice++){
        echo $array[$indice]."<br/>";
    }

    //foreach
    foreach($arrayAsociativo as $indice=>$valor){
        echo $valor . "<br/>";
    }

    //ingresando nuevo valor al array con  la funcion array_push
    array_push($array, "new elemento");

    print_r($array);





?>
<?php
    

    /**fopen abre un archivo o una url 
    // fopen(
    //     string $filename,
    //     string $mode,
    //     bool $use_include_path = false,
    //     resource $context = ?
    // ): resource

    mode especifica el tipo de acceso que necesita para el flujo.
        *r : solo lectura
        *r+: lectura y escritura
        *w : escritura
        *w+: solo escritura
        *a, a+, x, x+, 
        *c : abre para solo escritura, si el archivo no existe se crea,
        *e :establece la bandera 'close-on.exec' en el descriptor de fichero abierto.


    */
    // SOLO LECTURA
    $archivo = "contenido.txt";
    // se indica el archivo que sera bierto ademas de otorgarle los permisos necesarios dependiendo del uso en su caso lectura y escritura
    $openFile = fopen($archivo,"r+");
    
    //indica el tamaño del archivo (caracteres)
    $size = filesize($archivo);

    // el size indica hasta que caracter se desea leer en su caso el archivo el size debe ser mayor a cero por lo contrario marcara un error 
    $read = fread($openFile, $size);

    //permite ingresar nuevo texto en el archivo 
    $write = fwrite($openFile, '<br/> trabajando con archivos <br/>');
    //imprimi en pantalla la nueva informacion
    echo $read;


    // creando contador para actualizar informacion en pantalla
    function contador(){
        $file = "archivo_contador.txt";
        $open = fopen($file, 'r+');
        $size = filesize($file);

        $read = fread($open, $size);
        
        $nuevotxt = 'agregando contenido mas nuevo contenido sin eliminarlo ';

        // lo que contenga el archivo se le ira sumando uno o podemos concatenar una nueva cadena y el archivo se actualizara sin perder la informacion original contenida inicialmente
        $content = $read . $nuevotxt ;
        // $content = $read + 1;

        //indicamos donde esta ubicado el puntero con ftell
        $puntero = ftell($open);

        if($puntero == $size){
            //fseek permite mover el puntero a la posicion inicial 
            fseek($open,0);

        }

        fwrite($open, $content);
        //cerrar el archivo
        fclose($open);
        //retornando el contenido
        return $content;
    }

    echo contador();

    /** crendo un archivo txt*/
    $nameFile = "creadopdf.pdf";

    $contentFile = "PDF";

    // para crear el archivo de primera instancia debemos abrir el archivo en modo escritura, esto nos permitira crear el archivo con contenido inicial
    $newFile = fopen($nameFile, "w");

    fwrite($newFile, $contentFile);

    fclose($newFile);





?>
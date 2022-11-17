isset para determinar si una varianle esta declarada y si tiene un valor diferente a null 
devuelve true

empty se una para determinar si la variable existe y si su vlaor no se evalua como false

is null esta duncion se usa para verificar si una variable tiene el valor null

codigo embebido se refiere a la integracion, de un lenguaje dentro de otro en nuestro programa.

enctype="multipart/form-data" se usa para poder enviar algun archivo atraves de un formulario, por lo tanto se recibe el archivo para procesar con $_FILE equivalente a $_POST

move_uploand_file recibe dos parametros: nombre temporal del archivo cargado y el nombre del archivo original el cual sera guardado en nuestro servidor

mkdir crea un directorio que se especifica por ruta que se pasa como parámetro. El valor de retorno esperado es true o false.

ejemplo : mkdir ($path, $mode, $recursive, $context); donde
    -$path directorio o ruta para crear
    -$mode(opcional) permiso de directorio o archivo. por defecto suele ser 0777(acceso lo mas amplio posible)
        *1st siempre establecido en 0
        *2do especifica el permiso del propietario del directorio o archivo
        *3rd especifica el persmiso del grupo de usuarios del propietario
        *4th especifica el permiso de todos los demas.

        OTROS POSIBLES VALORES DEL MODE
        *1 = execute permissions
        *2 = write permissions
        *4 = read permissions
    -$recursivo true o false: para crear la estructura anidada se debe establecer en true.
 
JSON
se puede enviar informacion a traves de archivos json estos pueden ser de tipo string o arreglos 
    *json_decode: string a json, muestra los objetos
    *json_encode: arreglo a json, muestra array retornado como objeto


FUNCION INCLUDE:
permite integrar archivos especificos donde son requeridos, heredando variables y metodos(no todas las clases y funciones son globales).

FUNCION INCLUDE_once: el fichero sera incluido solo una vez si existe solo los mostrara una sola vez

FUNCION REQUIRE:
es identico al include excepto que en caso de fallo producira un error fatal de nivel e-compile-error es decir detiene el "script" mientras que include solo emitira una advertencia lo cual permite continuar con el "script"

FUNCION require_once: el fichero sera incluido solo una vez 

INCLUDE VS REQUIRE
1 - "require" and "require_once"  throw a fatal error if the file is not
       existing  and stop the script execution

2 - "include" and "include_once" throw a warning and the execution
       continues

3 - "require_once" and "include_once" as their names suggests ,
      they will not include the file if the file was already included with
      "require", "require_once", "include" or "include_once"
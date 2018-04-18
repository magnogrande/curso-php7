
<?php
// Cookie - Utilizando um Cookie

if (isset($_COOKIE["NOME_DO_COOKIE"])) {
    # code...
    // var_dump($_COOKIE["NOME_DO_COOKIE"]);
    // var_dump(json_encode($_COOKIE["NOME_DO_COOKIE"]));
    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);
    echo $obj->empresa . "<br>";
}
echo "OK - Cookie usado. <br>";

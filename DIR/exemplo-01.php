<?php

// Manipulando arquivos e diretórios

$name = "imagens";

if (!is_dir("imagens")) {
    # code...
    mkdir("imagens");
    echo "Já existe o diretório $name, criado com sucesso";
} else {
    rmdir("imagens");
    echo "Já existe o diretório: $name. Mas já foi removido";
}

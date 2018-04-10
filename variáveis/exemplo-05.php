<?php

$nome = "Magno";

function teste()
{
    global $nome;
    echo $nome;
}

function teste2()
{
    echo $nome;
}

teste();

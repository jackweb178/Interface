<?php
//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667174-les-interfaces#/id/r-1670395

interface iInterface
{
    const MA_CONSTANT='hello<br/>';
}

echo iInterface::MA_CONSTANT;//affiche hello

class  MaClasse implements iInterface
{

}
echo MaClasse::MA_CONSTANT;//affiche hello
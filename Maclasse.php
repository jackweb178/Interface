<?php

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667174-les-interfaces#/id/r-1670422
class Maclasse implements Iterator
{
    private $position=0;
    private $tableau=['element 1','element 2','element 3','element 4'];

    /**
     * retourne l'element courant
     */
    public function current()
    {
        return $this->tableau[$this->position];
    }

    /**
     * Deplace le curseur vers lelement suivant
     */
    public function next()
    {
        $this->position++;
    }

    /**
     * reutourne la cle actuelle == $position
     */
    public function key()
    {
        return $this->position;
    }

    /**
     * Permet de verifier si la position actuelle es valide
     */
    public function valid()
    {
        return isset($this->tableau[$this->position]);
    }

    /**
     * remet la position a 0
     */
    public function rewind()
    {
        $this->position=0;
    }
}

$object=new MaClasse();

foreach ($object as $key =>$value)
{
    echo  $key,' => ',$value,'<br/>';
}
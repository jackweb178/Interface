<?php

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667174-les-interfaces#/id/r-2649370
class Maclasse implements SeekableIterator
{
    private $position=0;
    private $tableau=['element 1','element 2','element 3','element 4'];

    /**
     * retourne l'element courant de lindex ou de la position
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

    /**
     * Deplacer le cursseur interne a une position precise
     */
    public function seek($position)
    {
        $anciennePosition=$this->position;
        $this->position=$position;

        if (!$this->valid())
        {
            trigger_error("La position specifier n'est pas valide",E_USER_WARNING);
            $this->position=$anciennePosition;
        }
    }
}

$object=new MaClasse();

foreach ($object as $key =>$value)
{
    echo  $key,' => ',$value,'<br/>';
}

//appelle de la methode seek()
$object->seek(3);
echo '<br/>',$object->current();



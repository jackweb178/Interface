<?php

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667174-les-interfaces#/id/r-1670450
class Maclasse implements SeekableIterator, ArrayAccess
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

    /**
     * @inheritDoc
     */
    public function offsetExists($offset)
    {
        return isset($this->tableau[$offset]);
    }

    /**
     * @inheritDoc
     */
    public function offsetGet($offset)
    {
        return $this->tableau[$offset];
    }

    /**
     * @inheritDoc
     */
    public function offsetSet($offset, $value)
    {
        return $this->tableau[$offset]= $value;
    }

    /**
     * @inheritDoc
     */
    public function offsetUnset($offset)
    {
        unset($this->tableau[$offset]);
    }
}

$object=new MaClasse();

foreach ($object as $key =>$value)
{
    echo  $key,' => ',$value,'<br/>';
}

//appelle de la methode seek()
echo  "<br/>Remise du curseur a la 4 eme positions ! <br/>";
$object->seek(3);
echo '<br/> Lelement courant est : ',$object->current(),'<br/>';

//appelle de la methode offsetGet()
echo "<br/> Affichage du 3emme element  : ",$object[2]," <br/>";

//appelle de la methode offsetSet()
echo  "<br/> Modifions le 3eme element  : <br/>";
$object[2]="bonjours tous le monde";
echo "La nouvelle valeur de la position 3 est : <strong> ",$object[2]," </strong>";

//appelle de la methode offsetUnset()
echo  " <br/><br>Destruction du 4 eme element : <br/>";
unset($object[3]);

//appelle de la methode offsetExists()
if (isset($object[3]))
{
    echo '$object[3] exixte  toujours .....bizzar.......';
}else
{
    echo 'Tous ce passe bien $object[3] nexiste plus !';
}
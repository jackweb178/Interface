<?php
//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667174-les-interfaces#/id/r-1667096
/*Quand une interface herite dune autre interface Vous ne pouvez réécrire ni une méthode ni une constante qui a déjà été listée dans l'interface parente.*/
interface iA
{
    public  function test1();
}

interface iD
{
    public function test2();
}

interface iB extends iA
{
    public function test1($param1,$param2);//fatal error , impossible de reecrire cette methode
}

interface  iC extends  iA
{
    public  function test3();
}

class A implements iC
{
    //pour ne generer aucune erreur , on doit ecrire les methodes de iC et aussi de iA

    public function test1()
    {
        // TODO: Implement test1() method.
    }

    public function test3()
    {
        // TODO: Implement test2() method.
    }
}

//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667174-les-interfaces#/id/r-1670398
/*Contrairement aux classes, les interfaces peuvent hériter de plusieurs interfaces à la fois. Il vous suffit de séparer leur nom par une virgule*/

interface iE extends iA,iD
{
    public function test4();
}
class  E implements iE
{

    public function test1()
    {
        // TODO: Implement test1() method.
    }

    public function test2()
    {
        // TODO: Implement test2() method.
    }

    public function test4()
    {
        // TODO: Implement test4() method.
    }
}





















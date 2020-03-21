<?php
//https://openclassrooms.com/fr/courses/1665806-programmez-en-oriente-objet-en-php/1667174-les-interfaces#/id/r-1670390

interface iA
{
    public  function test1();
}

interface iB
{
    public function test2();
}

class A implements iA,iB
{
    public function test1()
    {
        // TODO: Implement test1() method.
    }

    public function test2()
    {
        // TODO: Implement test2() method.
    }
}
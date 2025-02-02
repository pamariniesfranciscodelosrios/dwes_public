<?php
//************************************************************************************************
//**************           CLASE  Libro (metodos encadenados)     ********************************
//*************************************************************************************************


class Libro {

    private string $nombre;
    private string $autor;

    public function getNombre() : string {
        return $this->nombre;
    }
    public function setNombre(string $nombre) : Libro { 
        $this->nombre = $nombre;
        return $this; //Para poder realizar un método encadenado.
    }

    public function getAutor() : string {
        return $this->autor;
    }
    public function setAutor(string $autor) : Libro {
        $this->autor = $autor;
        return $this;
    }

    public function __toString() : string {
        return $this->nombre." de ".$this->autor;
    }
}

//Sigue el planteamiento de la programación funcional, y también se conoce como method chaining. Plantea que sobre un objeto se realizan varias llamadas.

$p1 = new Libro();
$p1->setNombre("Harry Potter");
$p1->setAutor("JK Rowling");
echo $p1 ."<br/>";

// Method chaining
$p2 = new Libro();
$p2->setNombre("Patria")->setAutor("Aramburu");
echo $p2;


/*Para facilitarlo, vamos a modificar todos sus métodos mutadores
(que modifican datos, setters, ...) 
para que devuelvan una referencia a $this:*/

?>
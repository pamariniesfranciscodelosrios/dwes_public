<?php
//************************************************************************************************
//**************           CLASE  Libro (metodos encadenados)     ********************************
//****************** Uso clase Libro del ejemplo 12 para probar  *********************************
//*************************************************************************************************


class Libro {


    private string $nombre;
    private string $autor;
    public $verdad;

    public function getNombre() : string {
        return $this->nombre;
    }
    public function setNombre(string $nombre) : Libro { 
        $this->nombre = $nombre;
        return $this;
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
//echo $p1 ."<br/>";  //Si no está redefinida el método mágico __to String, dará error.

// Method chaining
$p2 = new Libro();
$p2->setNombre("Patria")->setAutor("Aramburu");
//echo $p2;


//************************************************************************************************
//*******************           Test de los metodos mágicos     **********************************
//*************************************************************************************************
echo "<h2>Metodos Mágicos</h2>";
echo "<h3>To String:  <br/></h3>";

echo $p1->__toString(); //No es necesario llamar a la función mágica _toString
echo $p1;


?>
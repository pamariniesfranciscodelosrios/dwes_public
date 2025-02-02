<?php
/*Una de las grandes novedades que ofrece PHP 8 es la simplificación de los constructores con parámetros, lo que se conoce como promoción de las propiedades del constructor.

Para ello, en vez de tener que declarar las propiedades como privadas o protegidas, y luego dentro del constructor tener que asignar los parámetros a estás propiedades, el propio constructor promociona las propiedades.
*/

//Imaginemos una clase Punto donde queramos almacenar sus coordenadas:

class Punto {
    protected float $x;
    protected float $y;
    protected float $z;

    public function __construct( // constructor que recibe coordenadas
        float $x = 0.0,
        float $y = 0.0,
        float $z = 0.0
    ) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
}

//+ corto desde PHP 8, mayor facilidad
class Punto {
    public function __construct(
        protected float $x = 0.0,
        protected float $y = 0.0,
        protected float $z = 0.0,
    ) {}
}
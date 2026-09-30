<?php

declare(strict_types= 1);

namespace App\Modelos;

use App\Enums\Tamano;


class Bebidas extends Producto{
    public function __construct(string $nombre, float $precioBase,  public readonly string $tamano)
    {
        parent::__construct($nombre, $precioBase);
    }

    
    public function precioFinal(int $cantidad): float
    {
        return ($this->precioBase + $this->tamano * $cantidad);
    }
}


?>
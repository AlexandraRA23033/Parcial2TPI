<?php

declare(strict_types= 1);

namespace App\Enums;

enum Tamano: string{
    case Pequeno = "P";
    case Mediano = "M";
    case Grande = "G";

    public function recargar(): float{
        return match ($this) {
            self::Pequeno => 0.00,
            self::Mediano => 0.25,
            self::Grande => 0.50
       };
    }

}


?>
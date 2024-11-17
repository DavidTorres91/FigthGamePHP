<?php

class Fighter {
    private string $id;
    private string $nombre;
    private int $fuerza;
    private int $resistencia;
    private int $agilidad;
    private int $inteligencia;
    private int $mana;

    private array $nombres = ["Pedro", "Juan", "Luis", "Adam", "David", "Lorenzo"];

    public function __construct() {
        $this->id = uniqid();
        $this->nombre = $this->nombres[array_rand($this->nombres)];
        $this->fuerza = rand(1, 5);
        $this->resistencia = rand(1, 5);
        $this->agilidad = rand(1, 5);
        $this->inteligencia = rand(1, 5);
        $this->mana = rand(1, 5);
    }

    public function getFighterDetails(): string {
        return "Se ha creado un nuevo luchador\n" .
               "Nombre: {$this->nombre} ({$this->id})\n" .
               "Fuerza: {$this->fuerza}\n" .
               "Resistencia: {$this->resistencia}\n" .
               "Agilidad: {$this->agilidad}\n" .
               "Inteligencia: {$this->inteligencia}\n" .
               "Mana: {$this->mana}\n";
    }

    public function getId(): string {
        return $this->id;
    }

    public function getNombre(): string {
        return $this->nombre;
    }

    public function total(): int {
        return $this->fuerza + $this->resistencia + $this->agilidad + $this->inteligencia + $this->mana;
    }
}
?>

 # FightGame

**FightGame** es un sencillo juego de combate escrito en PHP. En este juego, se crean dos luchadores con atributos aleatorios, y luego se enfrentan en una batalla para determinar al ganador. Los atributos del luchador se suman, y quien tenga el puntaje más alto gana.

## Estructura del Proyecto

El proyecto tiene la siguiente estructura:

FightGame/
├── combat.php
├── figther.php
└── play.php

## Descripción de Archivos

1. **`figther.php`**  
   Define la clase `Fighter`, que representa a un luchador con los siguientes atributos:
   - Nombre
   - Fuerza
   - Resistencia
   - Agilidad
   - Inteligencia
   - Mana

   También incluye métodos para generar detalles del luchador, calcular su puntuación total y acceder a su información.

2. **`combat.php`**  
   Archivo actualmente vacío, reservado para lógica de combate futura.

3. **`play.php`**  
   Ejecuta el juego. Crea dos luchadores, muestra sus detalles y calcula el ganador basándose en la puntuación total de los atributos.

## Requisitos

- PHP 7.4 o superior.

## Instrucciones de Uso

1. Clona este repositorio o descarga los archivos.
2. Asegúrate de tener PHP instalado en tu sistema.
3. Ejecuta el archivo `play.php` desde la terminal:
   ```bash
   php play.php

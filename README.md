KataBowling (3rd kata)
==========================
21 de Febrero de 2012.


## ¿Qué es esto?
Una tarde en la que @el_y0rtx y @txurdi decidimos empezar a cambiar nuestra forma de programar. Queremos hacer las cosas bien, 
queremos aprender a usar TDD y que mejor que empezar con una kata. La idea la sacamos de [Katayunos](http://katayunos.com/)

## Kata elegida: KataBowling
Dada una secuencia de juego de Bowling, calcular la puntuación obtenida.
Se usará X para los plenos, / para semiplenos, - para nulos o ceros.
[Kata en codingdojo.org](http://codingdojo.org/cgi-bin/wiki.pl?KataBowling)

## División del problema en pequeñas soluciones: (test)
- Si nos dan 1 devolvemos 1
- Si nos dan 2 devolvemos 2
- Si nos dan 12 devolvemos 3
- Si nos dan -3 devolvemos 3
- ...
- Si nos dan "XXXXXXXXXXXX" devolvemos 300
- ...
- Creamos una batería de pruebas con las combinaciones que nos pueden parecer conflictivas.

## Conclusiones:
- El último test no lo hemos pasado por desconocimiento del algoritmo de la última jugada de bowling (lo dejamos TO-DO)
- Hemos guardado los diferentes test en comits separados

## Autores
- En [@SocSoft](http://twitter.com/SocSoft):
- Jorge García [@el_y0rtx](http://twitter.com/el_y0rtx)
- Igor Ormaetxebarria [@txurdi](http://twitter.com/txurdi)


## Katas anteriores
- [1st Kata en GitHub](https://github.com/txurdi/KataRomanNumeralsPHP)
- [2nd Kata en GitHub](https://github.com/txurdi/kataMinesweeper)

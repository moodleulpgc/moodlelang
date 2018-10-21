<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
/**
 * The language strings for component 'qtype_gapfill', language 'en'
 *
 * @copyright &copy; 2012 Marcus Green
 * @author marcusavgreen@gmail.com
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package qtype
 * @subpackage gapfill
 */


$string['answerdisplay'] = 'Mostrar Respuestas como';
$string['answerdisplay_help'] = 'Modo de mostrar las opciones de respuesta.

* Arrastrar y soltar: muestra una lista de palabras que pueden ser arrastradas hacia los huecos. 
* Rellenar espacio:  muestra simples huecos sin opciones de palabras, para que se escriba una palabra sin pistas. 
* Menú  desplegable: muestra una lista con todas las posibles opciones, la misma lista de respuestas para todos los huecos, (correctas e incorrectas) para cada campo.
';
$string['delimitchars_help'] = 'Cambia los caracteres que delimitan un campo de palabra oculta (hueco), del predeterminado [ ] a otras opciones.
Se suele utilizar para preguntas relacionadas con lenguajes de programación y otros contextos en los que los cochetes son usados normalmente.';
$string['delimitset_text'] = 'Configura los delimitadores para los huecos, de forma tal que Usted podría añadir % % para Tres tristes %tigres% tragan  %trigo% en el trigal.';
$string['disableregex_help'] = 'Deshabilitar el procesamiento de Expresiones Regulares y realizar una comparación estándar de cadenas. Esto puede ser útil para preguntas HTML en donde las marcas  (&lt; and &gt;)  deberían de tratarse literalmente, y en matemáticas, en donde los símbolos como * o + deberían de ser tratados literalmente en lugar de verlos como expresiones';
$string['displaydragdrop'] = 'Arrastrar y soltar';
$string['displaydropdown'] = 'Menú desplegable';
$string['displaygapfill'] = 'Rellenar espacio';
$string['gapfill'] = 'Rellenar huecos tipo Cloze';
$string['duplicatepartialcredit'] = 'La puntuación es parcial  parcial porque existen respuestas duplicadas';
$string['fixedgapsize_help'] = 'Al intentar contestar las preguntas, todos los huecos se configurarán al mismo tamaño que el hueco mayor. Esto remueve el tamaño del hueco como una posible pista para adivinar la respuesta correcta. Por ejemplo, si los huecos fueran [rojo] y [amarillo], sería muy evidente que la palabra \'amarillo\' iría en el hueco más grande.';
$string['fixedgapsizeset_text'] = 'Configura el tamaño de todos los huecos al tamaño del hueco mayor';
$string['noduplicates_help'] = 'Cuando está seleccionado, cada respuesta debe ser única. Es práctico cuando cada campo tiene un operador | , por ejemplo:  “¿Cuáles son los colores de la medallas olímpicas?” y cada campo tiene [oro|plata|bronce], si un estudiante escribe oro en cada campo solamente el primero obtendrá una puntuación (aunque los otros también obtendrán un visto). Es usado más bien para descartar las respuestas duplicadas al calificar';
$string['pluginname'] = 'Rellenar espacio en blanco';
$string['pluginnamesummary'] = 'El enunciado consiste en un texto con huecos (palabras ocultas) que deben ser rellenados.
. Menos funciones que las clásicas de tipo Cloze, pero con una sintaxis más simple. Todas las posibles opciones se muestran en una única lista.';
$string['moreoptions'] = 'Configuración avanzada.';
$string['wronganswers'] = 'Distractores.';
$string['wronganswers_help'] = 'Lista de palabras incorrectas diseñadas para distraer de las respuestas correctas. Cada palabra está separada por comas, solamente aplica en modo de arrastrarysoltar/desplegable.';
$string['yougotnrightcount'] = 'Su número de huecos llenados correctamente es {$a->num}.';

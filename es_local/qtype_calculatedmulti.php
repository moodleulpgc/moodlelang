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
 * Strings for component 'qtype_calculatedmulti', language 'es', moodle ULPGC
 *
 * @package   qtype_calculatedmulti
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['answeroptions'] = 'Selección de opciones';
$string['answeroptions_help'] = 'La expresión para el resultado debe estar contenida entre llaves y empezar con igual: <br />
   ...<strong>{={x}+..}</strong>... <br />
Se puede combinar con cualquier texto anterior y posterior y con los comodines del enunciado. El conjunto {=(expresión)} actúa como un comodín más.

';
$string['pluginname'] = 'Calculada opción múltiple';
$string['pluginnameadding'] = 'Añafir una pregunta Calculada de opción múltiple';
$string['pluginnameediting'] = 'Editar una pregunta Calculada de opción múltiple ';
$string['pluginname_help'] = 'Las preguntas Calculadas de opción múltiple son similares a las preguntas de opción múltiple, en cuyos elementos a elegir pueden incluirse resultados de aplicar una fórmula a variables (comodines) entre llaves que son sustituídas con valores cuando se formula la pregunta. Por ejemplo, en la pregunta "¿Cual es el área de un rectangulo de longitud {l} y ancho {w}?, una de las opciones es {={l}*{w}} (donde * indica multiplicación)';
$string['pluginnamesummary'] = 'Las preguntas Calculadas de opción múltiple son similares a las preguntas de opción múltiple, en cuyos  elementos a elegir pueden incluirse resultados obtenidos al aplicar una fórmula a valores numéricos seleccionados aleatoriamente de un grupo de valores cuando se formula la pregunta. ';

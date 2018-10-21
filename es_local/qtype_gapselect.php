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
 * Language strings for the gap-select question type.
 *
 * @package    qtype_gapselect
 * @copyright  2015 Enrique CAstro
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmorechoiceblanks'] = 'Agregar {no} opciones más';
$string['answer'] = 'Opción';
$string['choices'] = 'Respuestas';
$string['choicex'] = 'Respuesta {no}';
$string['combinedcontrolnamegapselect'] = 'Menú desplegable';
$string['combinedcontrolnamegapselectplural'] = 'Menús desplegables';
$string['correctansweris'] = 'La respuesta correcta es: {$a}';
$string['errorblankchoice'] = 'Por favor, revise las respuestas: la opción {$a} está vacía.';
$string['errormissingchoice'] = 'Por favor, revise el enunciado: {$a} no se encuentra entre las Respuestas.
Solo los números del campo Sitio y los indicadores de posición en el texto deben corresponderse. No se deben usar sitios no existentes en el texto como [[n]].';
$string['errornoslots'] = 'El enunciado de la pregunta debe contener indicadores de palabras ocultas,
con el formato  [[n]], para marcar en qué posiciones colocar cada menú desplegable de palabra oculta.';
$string['errorquestiontextblank'] = 'Debe introducir algún texto een l enunciado, y establecer las posiciones ocultas con [[n]].';
$string['group'] = 'Sitio';
$string['pleaseputananswerineachbox'] = 'Por favor, coloque una respuesta en cada caja.';
$string['pluginname'] = 'Seleccionar palabra oculta';
$string['pluginname_help'] = 'Un tipo de pregunta de rellenar Huecos con un intrefaz sencillo.';
$string['pluginname_link'] = 'question/type/gapselect';
$string['pluginnameadding'] = 'Agregando una pregunta de tipo Seleccionar palabra oculta';
$string['pluginnameediting'] = 'Editando una pregunta de tipo Seleccionar palabra oculta';
$string['pluginnamesummary'] = 'El enunciado consiste en un texto en el que algunas palabras están ocultas.
El estudiante debe seleccionar a palabra correcta a partir de un menú desplegable.';
$string['shuffle'] = 'Barajar';
$string['tagsnotallowed'] = 'La etiqueta HTML {$a->tag} no está permitida. (Sólo las etiquetas {$a->allowed} pueden usarse.)';
$string['tagsnotallowedatall'] = 'La etiqueta HTML {$a->tag} no está permitida. (No se acepta ninguna marca HTML en este texto.)';

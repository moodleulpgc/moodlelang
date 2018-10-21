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
 * Strings for component 'qtype_kprime', language 'es_mx', branch 'MOODLE_34_STABLE'
 *
 * @package   qtype_kprime
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configintro'] = 'Valores por defecto para preguntas K-primo.';
$string['configscoringmethod'] = 'Método de puntuación por defecto para preguntas K-primo.';
$string['configshuffleoptions'] = 'Método de aleatorización de opciones por defecto en preguntas K-primo.';
$string['correctresponse'] = 'Respuesta Correcta';
$string['enterfeedbackhere'] = 'Escriba aquí la retroalimentación.';
$string['entergeneralfeedbackhere'] = 'Escriba aquí la retroalimentación general.';
$string['enteroptionhere'] = '';
$string['enterstemhere'] = 'Escriba aquí el enuenciado de la pregunta o una parte de una oración.';
$string['false'] = 'Falso';
$string['feedbackforoption'] = 'Retroalimentación para Opción {$a}';
$string['generalfeedback'] = 'Retroalimentación general.';
$string['generalfeedback_help'] = 'Se muestra la misma retroalimentación general sin importar la respuesta elegida.';
$string['maxpoints'] = 'Puntos Máx.';
$string['mustsupplyresponses'] = 'Usted debe proporcionar valores para todas las respuestas.';
$string['mustsupplyvalue'] = 'Usted debe proporcionar un valor aquí.';
$string['optionno'] = 'Opción {$a}';
$string['optionsandfeedback'] = 'Opciones y Retroalimentación';
$string['pluginname'] = 'K-primo(ETH)';
$string['pluginnameadding'] = 'Añadiendo una pregunta K-primo';
$string['pluginnameediting'] = 'Editando una pregunta K-primo';
$string['pluginname_help'] = 'Las preguntas K-primo consisten de un enuneciado y cuatro opciones correspondientes. 
Por cada opción, los estudiantes tienen que decidir si es "cierta" o "falsa".';
$string['pluginnamesummary'] = '
Un tipo de pregunta verdadero/falso múltiple de 4 opciones, según el diseño de Krebs(1997). 

Cada pregunta tiene un enunciado y cuatro opciones que el estudiante debe marcar como verdadero o falso. 
Están disponibles tres métodos de calificación:  

 * K-primo: un punto si todas las respuestas son correctas, medio punto si todas excepto una son correctas, y cero punto en los demás casos. 
 * K-primo 1/0: un punto si todas las respuestas están correctas, y cero puntos en otros casos.
 * subpoints: se otorgan puntos parciales para cada respuesta correcta. La suma es el total.
';
$string['responsedesc'] = 'El texto usado como valor por defecto para respuesta {$a}.';
$string['responseno'] = 'Respuesta {$a}';
$string['responsetext'] = 'Texto de Respuesta {$a}';
$string['responsetext1'] = 'Cierto';
$string['responsetext2'] = 'Falso';
$string['responsetexts'] = 'Opciones de juicio';
$string['save'] = 'Guardar';
$string['scoringkprime'] = 'K-primo';
$string['scoringkprimeonezero'] = 'K-primo1/0';
$string['scoringmethod'] = 'Método de puntuación';
$string['scoringmethod_help'] = '<strong>K-primo:</strong> El estudiante recibe un punto si todas las respuestas son correctas, 
medio punto si todas excepto una están correctas, y cero punto en los demás casos.<br/>
<strong>K-primo 1/0:</strong> El estudiante recibe un punto si todas las respuestas están correctas, y cero puntos en otros casos.
<br/><strong>Subpuntos:</strong> Al estudiante se le otorgan puntos para cada respuesta correcta.';
$string['scoringsubpoints'] = 'Subpuntos';
$string['shuffleoptions'] = 'Opciones de ordenamiento';
$string['shuffleoptions_help'] = 'Si se habilita, el orden de las opciones es barajado aleatoriamente para cada intento, siempre y cuando también este habilitada la opción para "Barajar dentro de las preguntas".';
$string['stem'] = 'Enunciado';
$string['tasktitle'] = 'Título de la tarea';
$string['true'] = 'Cierto';

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
 * Local language pack from http://localhost/moodle25ulpgc
 *
 * @package    mod
 * @subpackage quiz
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addaquestion'] = 'Crear pregunta nueva';
$string['addasection'] = 'Nueva sección';
$string['addnewgroupoverride'] = 'Agregar Excepción de grupo';
$string['addnewuseroverride'] = 'Agregar Excepción de usuario';
$string['addquestionfrombankatend'] = 'Agregar del banco de preguntas al final';
$string['addrandomquestionatend'] = 'Agregar una pregunta al azar al final';
$string['addrandomquestiontopage'] = 'Agregar una pregunta al azar a la página {$a}';
$string['addselectedquestionstoquiz'] = 'Añadir preguntas seleccionadas';
$string['anytags'] = 'Cualquier etiqueta';
$string['canredoquestions'] = 'Permitir re-contestar dentro de un intento';
$string['completionattemptsexhausted'] = 'o realizados todos los intentos';
$string['confirmremovesectionheading'] = 'Ha solicitado eliminar la sección \'{$a}\'. <br />¿Desea proceder?';
$string['confirmsectionempty'] =  'Ha solicitado vaciar de preguntas las sección \'{$a}\'. <br /> Esto borrará todas la preguntas del listado de la sección. <br />  ¿Desea proceder?';
$string['downloadexam'] = 'Descargar el examen';
$string['downloadwithanswers'] = 'Descargar examen con respuestas';
$string['editmaxmark'] = 'Cambiar puntuación máxima';
$string['editoverride'] = 'Editar Excepción';
$string['examanswers_help'] = '
Si se activa esta opción la respuesta correcta para cada pregunta será incluida a continuación del enunciado de la misma, de forma separada y distintiva.


Si la hoja de respuestas también está activa, se generará una plantilla que incluya las casillas marcadas correctamente para cada pregunta.';
$string['examanswers'] = 'Incluir las respuestas correctas';
$string['examcourse_help'] = '
El curso o asignatura correspondiente a este examen';
$string['examcourse'] = 'Asignatura';
$string['examdate'] = 'Fecha del examen';
$string['examdegree_help'] = '
La titulación y el curso al que corresponde este examen.

Por ejemplo "1º de Enfermería" o "3º de Ingeniería Industrial" ';
$string['examdegree'] = 'Titulación';
$string['examgrid_help'] = '
La hoja de respuestas es una tabla con los números de las preguntas y casillas para marcar las opciones respondidas.';
$string['examgrid'] = 'Incluir hoja de respuestas';
$string['examgridrows_help'] = '
En máximo número de opciones (casillas) que se incluirán en la hoja de respuestas para cada pregunta.';
$string['examgridrows'] = 'Número de opciones';
$string['examissue_help'] = '
Moodle puede generar varias vesiones aleatorias del mismo examen (barajando las preguntas y dentro de las opciones).
En este caso, aquí puede introducir una letra o código que identificará esta versión a efectos de la plantilla para su corrección.';
$string['examissue'] = 'Versión del examen';
$string['examname_help'] = '
El nombre de este examen en concreto.
Por ejemplo "Parcial adelantado" o "Examen Final, Convocatoria Ordinaria". ';
$string['examname'] = 'Examen';
$string['exportcolumns_help'] = '
El número de columnas de texto en la lista de preguntas.

Esta opción sólo se aplica en el caso de exportación a PDF.
';
$string['exportcolumns'] = 'Columnas';
$string['exportdoc'] = 'como DOC (html)';
$string['exportdocx'] = 'como DOCX';
$string['exportdownload'] = 'Descarga de la Exportación';
$string['exporthtml'] = 'como HTML';
$string['exportnoattempt'] = 'No hay una Vista previa que exportar. <br />
Debe realizar una Vista previa del cuestionario, y validarla mediante su finalización, para poder exportar dicha Vista previa.';
$string['exportodt'] = 'como ODT (html)';
$string['exportoptions'] = 'Opciones de exportación';
$string['exportpdf'] = 'como PDF';
$string['exportquiz'] = 'Exportar cuestionario';
$string['exporttype_help'] = '
Tipo de documento que se desea exportar.
El formato PDF preserva las imágenes y los enlaces, pero no es editable.
La exportación a MS-Word doc y a OpenDocument odt está basada en una conversión desde HTML
y puede no ser exacta y necesitar ajustes posteriores, incluyendo la revisión de las imágenes, que se enlazan, no se incluyen.';
$string['exporttype'] = 'Tipo de exportación';
$string['groupoverrides'] = 'Excepciones para grupos';
$string['invalidoverrideid'] = 'ID de Excepción no válido';
$string['marks_help'] = 'Los puntuación numérica de cada pregunta, y la calificación total del intento.';
$string['maxmark'] = 'Puntuación máxima';
$string['navigatenext'] = 'Siguiente página';
$string['override'] = 'Excepción';
$string['overridegroup'] = 'Aplicar al grupo';
$string['overrides'] = 'Excepciones';
$string['overrideuser'] = 'Usuario afectado';
$string['overrideusereventname'] = '{$a->quiz} - Excepción';
$string['questiondependencyadd'] = 'Sin restricción al ir a contestar esta pregunta • Pinche para cambiar';
$string['questiondependencyfree'] = 'Sin restricción en esta pregunta';
$string['questiondependencyremove'] = 'Esta pregunta no se puede contestar hasta que la pregunta previa se haya completado • Pinche para cambiar';
$string['questiondependsonprevious'] = 'Esta pregunta no se puede responder hasta que la pregunta previa se haya completado.';
$string['quiz:manageoverrides'] = 'Gestionar cuestionarios con Excepciones';
$string['quiznavigation'] = 'Explorar el cuestionario';
$string['randomquestion_help'] = 'Una pregunta aleatoria es una manera de insertar una pregunta elegida aleatoriamente desde una categoría especificada o por una etiqueta especificada dentro de una actividad.';
$string['randomquestiontags'] = 'Etiquetas';
$string['randomquestiontags_help'] = 'Usted puede restringir aun más el criterio de selección al especificar algunas etiquetas de pregunta aquí.

Las preguntas "aleatorias" serán seleccionadas de entre las preguntas que tengan todas estas etiquetas.';

$string['reviewclosed'] = 'Tras el cierre del cuestionario';
$string['reviewimmediately'] = 'Inmediatamente tras el envío de un intento';
$string['reviewopen'] = 'Mientras el cuestionario está abierto';
$string['reviewoptionsheading'] = 'Opciones de revisión (Información al estudiante)';
$string['saveoverrideandstay'] = 'Guardar e introducir otra Excepción';
$string['sectionemptied'] = 'Sección vaciada. Borradas {$a} preguntas';
$string['sectionempty'] = 'Vaciar la sección';
$string['sectionheadingdefault'] = 'Nombre de la sección ...';
$string['sectionheadingedit'] = 'Editar el nombre de la sección \'{$a}\'';
$string['sectionheadingremove'] = 'Eliminar la sección \'{$a}\'';
$string['settingsoverrides'] = 'Configuración de excepciones';
$string['shufflequestions'] = 'Ordenar al azar';
$string['shufflequestions_help'] = '
Si marca esta opción, las preguntas de esta sección del Cuestionario se ordenarán al azar
cada vez que un estudiante comience un nuevo intento de contestar el cuestionario.

Esto puede hacer más complicado para los estduiantes el copiar las respuestas y compartirlas,
pero también hace más difícil el que puedan discutir con usted una pregunta particular.

La mejor forma de identificar una pregunta para eso es que el estudiante indique el nº del intento y el nº de la pregunta dentro de su intento.
';
$string['startnewpreview'] = 'Nueva vista previa';
$string['totalmarksx'] = 'Total de puntuaciones: {$a}';
$string['useroverrides'] = 'Excepciones para usuarios';

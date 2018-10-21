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
 * Strings for component 'studentquiz', language 'es', branch 'MOODLE_35_STABLE'
 *
 * @package   studentquiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['approveselectedscheck'] = '¿Está seguro de querer invertir el estado las preguntas siguientes?<br /><br />{$a}';
$string['approve_toggle'] = 'Invertir estado';
$string['emailapprovedbody'] = 'Estimado/a  {$a->recepientname},

Su pregunta \'{$a->questionname}\' en el curso \'{$a->coursename}\' en la actividad Cuestionario de Estudiantes \'{$a->modulename}\' ha sido aprobada por \'{$a->actorname}\' en \'{$a->timestamp}\'.

Puede revisar esta pregunta en: {$a->questionurl}.';
$string['emailchangedbody'] = 'Estimado/a  {$a->recepientname},

Su pregunta \'{$a->questionname}\' en el curso \'{$a->coursename}\' en la actividad Cuestionario de Estudiantes \'{$a->modulename}\' ha sido modificada por \'{$a->actorname}\' en \'{$a->timestamp}\'.

Puede revisar esta pregunta en: {$a->questionurl}.';
$string['emailcommentaddedbody'] = 'Estimado/a  {$a->recepientname},

Su pregunta \'{$a->questionname}\' en la actividad Cuestionario de Estudiantes \'{$a->modulename}\' en el curso \'{$a->coursename}\' ha sido comentada por \'{$a->actorname}\' en \'{$a->timestamp}\'.

El comentario es: \'{$a->commenttext}\'

Puede revisar esta pregunta en: {$a->questionurl}.';
$string['emailcommentdeletedbody'] = 'Estimado/a {$a->recepientname},

El comentario con fecha \'{$a->commenttime}\' a su pregunta \'{$a->questionname}\' en la actividad Cuestionario de Estudiantes \'{$a->modulename}\' en el curso \'{$a->coursename}\' ha sido eliminado por \'{$a->actorname}\' en \'{$a->timestamp}\'.

El comentario era: \'{$a->commenttext}\'

Puede revisar esta pregunta en: {$a->questionurl}.';
$string['emaildeletedbody'] = 'Estimado/a {$a->recepientname},

Su pregunta \'{$a->questionname}\' en la actividad Cuestionario de Estudiantes \'{$a->modulename}\' en el curso \'{$a->coursename}\' ha sido eliminada por \'{$a->actorname}\' en \'{$a->timestamp}\'.';
$string['emailminecommentdeletedbody'] = 'Estimado/a {$a->recepientname},

Su comentario con fecha \'{$a->commenttime}\' a la pregunta \'{$a->questionname}\' en la actividad Cuestionario de Estudiantes \'{$a->modulename}\' en el curso \'{$a->coursename}\' ha sido eliminado por \'{$a->actorname}\' en \'{$a->timestamp}\'.

El comentario era: \'{$a->commenttext}\'

Puede revisar esta pregunta en: : {$a->questionurl}.';
$string['emailunapprovedbody'] = 'Estimado/a {$a->recepientname},

La aprobación de su pregunta \'{$a->questionname}\' en la actividad Cuestionario de Estudiantes \'{$a->modulename}\' en el curso \'{$a->coursename}\' ha sido revocada por \'{$a->actorname}\' en \'{$a->timestamp}\'.

Usted puede revisar esta pregunta en: {$a->questionurl}.';
$string['modulename'] = 'Cuestionario de Estudiantes';
$string['modulename_help'] = 'La actividad Cuestionario de Estudiantes permite a los estudiantes crear y generar preguntas y cuestionarios que responder en común para practicar. 
En la vista general del Cuestionario de Estudiantes, los estudiantes pueden generar nuevas preguntas, filtrarlas y organizarlas en categorías. 
También pueden usar las preguntas filtradas en cuestionarios comunes para practicar. Los estudiantes pueden ponderar las preguntas según su grado de dificultad. 
<br><br>La actividad de Cuestionario de Estudiantes otorga a los estudiantes puntos para motivarlos a que añadan preguntas y a que practiquen. 
Los puntos están listados en una tabla de ranking.
<br><br>Para más información lea el documento en idioma inglés  <a href="https://studentquiz.hsr.ch/docs/">StudentQuiz documentation</a>.';
$string['modulenameplural'] = 'Cuestionarios de Estudiantes';
$string['no_questions_add'] = 'No hay preguntas en este Cuestionario de Estudiantes. Siéntase con libertad de añadir algunas preguntas.';
$string['pluginadministration'] = 'Administración de Cuestionario de Estudiantes';
$string['pluginname'] = 'Cuestionario de Estudiantes';
$string['progress_bar_caption'] = 'Su progreso en la actividad Cuestionario de Estudiantes';
$string['questions'] = 'Preguntas';

$string['ranking_block_title'] = 'Clasificación';
$string['rankingsettingsdescription'] = 'Los valores que configure aquí definen los valores de ranking por defecto que son usados cuando usted crea un nuevo Cuestionario de Estudiantes.';

$string['reportquiz_stats_all_questions_approved_help'] = 'Los profesores pueden aprobar las preguntas para verificar que sean correctas. Este es el número de todas las preguntas aprobadas dentro de este Cuestionario de Estudiantes.';
$string['reportquiz_stats_all_questions_created'] = 'Número de preguntas en este Cuestionario de Estudiantes';
$string['reportquiz_stats_own_percentage_correct_answers_help'] = 'Porcentaje de todas sus respuestas correctas del conjunto de todas sus respuestas dadas en este Cuestionario de Estudiantes. Las parcialmente correctas cuentan como respuestas incorrectas.';

$string['reportquiz_stats_own_progress_help'] = 'Porcentaje de sus últimas respuestas correctas del conjunto de todas sus preguntas dentro de este Cuestionario de Estudiantes. Las respuestas parcialmente correctas cuentan como respuestas incorrectas.';
$string['reportquiz_stats_own_questions_answered_help'] = 'Número de todas sus respuestas dadas dentro de este Cuestionario de Estudiantes.';

$string['reportquiz_stats_own_questions_approved_help'] = 'Los profesores pueden aprobar manualmente las preguntas para verificar que sean correctas. Este es el número de sus preguntas aprobadas dentro de este Cuestionario de Estudiantes.';

$string['reportquiz_stats_own_questions_created_help'] = 'Número de preguntas a las que ha contribuido a este Cuestionario de Estudiantes.';
$string['settings_removeqbehavior'] = 'Quitar plugin de comportamiento de pregunta Cuestionario de Estudiantes';
$string['settings_removeqbehavior_help'] = 'Esta información debería de aparecer solamente una vez durante la actualización. Nosotros le informamos de que hemos detectado que su plugin de comportamiento de pregunta Cuestionario de Estudiantes está instalado. Este plugin ya no es necesario, por lo que trataremos de eliminarlo automáticamente. Si todavía ve esta configuración, por favor desinstale manualmente el plugin de comportamiento de pregunta Cuestionario de Estudiantes <a href="{$a}">aquí</a>.';
$string['settings_removeqbehavior_label'] = 'Quitar plugin de comportamiento de pregunta Cuestionario de Estudiantes';
$string['studentquiz'] = 'Cuestionario de Estudiantes (studentquiz)';
$string['studentquiz:addinstance'] = 'Añadir nueva instancia de Cuestionario de Estudiantes';
$string['studentquiz:manage'] = 'Moderar preguntas en Cuestionario de Estudiantes';
$string['studentquizname'] = 'Nombre del Cuestionario de Estudiantes';
$string['studentquizname_help'] = 'Nombre de este Cuestionario de Estudiantes';
$string['studentquiz:previewothers'] = 'Previsualizar preguntas de otros en Cuestionario de Estudiantes';
$string['studentquiz:submit'] = 'Enviar preguntas en Cuestionario de Estudiantes';
$string['studentquiz:view'] = 'Ver preguntas en Cuestionario de Estudiantes';
$string['tags'] = 'Etiquetas';
$string['unapprove'] = 'Rechazar';

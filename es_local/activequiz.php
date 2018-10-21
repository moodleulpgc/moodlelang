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
 * Strings for component 'activequiz', language 'es_mx', branch 'MOODLE_29_STABLE'
 *
 * @package   activequiz
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anonymousresponses'] = 'Hacer anónimas las respuestas del estudiante';
$string['anonymousresponses_help'] = 'Hacer anónimas las respuestas del estudiante para la vista del instructor, de forma tal que si se mostraran sus pantallas, no se verán los nombres de los estudiantes ni los nombres de sus grupos';
$string['editpage_opensession_error'] = 'Usted no puede editar una pregunta de cuestionario mientras está abierta una sesión.';
$string['instructorquizinst'] = '<p>Por favor, espere en esta página hasta que los estudiantes se hayan conectado. Una vez que se haga click en <b>iniciar cuestionario</b>, el cuestionario iniciará con la primera pregunta</p>
<p>
<p>Controles:</p>
<ul>
<li>
Re-preguntar pregunta
<ul>
<li>
Le permite al instructor re-preguntar la pregunta actual o la anterior (disponible durante la revisión de una pregunta).
</li>
</ul>
</li>
<li>
Siguiente pregunta
<ul>
<li>
Continuar a la siguiente pregunta (disponible durante la revisión de una pregunta).
</li>
</ul>
</li>
<li>
Terminar pregunta
<ul>
<li>
Terminar con la pregunta actual. También le permite al instructor terminar tempranamente una pregunta cronometrada (disponible mientras está corriendo una pregunta). <i>Si la pregunta no tiene límite de tiempo, el instructor necesitará hacer click en <b>terminar pregunta.</b></i>
</li>
</ul>
</li>
<li>
Ir a pregunta
<ul>
<li>
Abre una caja de diálogo para dirigir a todos los usuarios hacia una pregunta específica del cuestionario (disponible durante la revisión de una pregunta).
</li>
</ul>
</li>
<li>
Cerrar sesión
<ul>
<li>
Cierra la sesión actual, y también todos los intentos de los estudiantes. Esto calificará automáticamente todos los intentos (disponible en cualquier momento).
</li>
</ul>
</li>
<li>
Re-cargar resultados
<ul>
<li>
Re-cargar las respuestas del estudiante en la caja de información. Le permite al instructor que pueda ver cuantos estudiantes o equipos han respondido y cuanto todavía faltan de responder (disponible durante la revisión de una pregunta).
</li>
</ul>
</li>
<li>
Ocultar/Mostrar los que no-respondieron
<ul>
<li>
Ocultar o mostrar la caja de información que muestra cuantos estudiantes o equipos han respondido y cuales estudiantes o grupos aún faltan de responder (disponible cuando se está preguntando una pregunta).
</li>
</ul>
</li>
<li>
Mostrar la respuesta correcta
<ul>
<li>
Le da la instructor una vista de la pregunta con la respuesta correcta seleccionada (disponible durante la revisión de una pregunta). Esto no mostrará la respuesta correcta para los tipos de pregunta con calificación manual, como los ensayos o preguntas de dibujar.
</li>
</ul>
</li>
</ul>
</p>';
$string['instructorsessionsgoing'] = 'Hay una sesión en progreso. Por favor, haga click en el botón inferior apara ir a la sesión';
$string['invalidattemptaccess'] = 'Usted no tiene permiso para acceder a este intento';
$string['invalid_indvquestiontime'] = 'El tiempo para la pregunta debe ser un número entero igual o mayor a 0';
$string['invalid_numberoftries'] = 'El número de intentos debe de ser un número entero igual o mayor a 1';
$string['invalid_points'] = 'Los puntos son necesarios y deben de ser un número mayor de 0';
$string['loading'] = 'Inicializando Cuestionario';
$string['manualcomment_help'] = 'El comentario que los instructores pueden añadir al calificar un intento';
$string['marks_help'] = 'La calificación numérica para cada pregunta, y el puntaje general del intento';
$string['modulename'] = 'Cuestionario Activo';
$string['modulename_help'] = '<p>La actividad de Cuestionario Activo le permite a un instructor crear y administrar cuestionarios en tiempo-real. Pueden usarse todos los tipos normales de preguntas dentro del Cuestionario Activo.</p>
<p>Cuestionario Activo permite la participación individual o en equipos. Es posible la concurrencia (participación) en equipos, por lo que los puntos dados durante el Cuestionario Activo solamente serán aplicados a los participantes que concurrieron (asistieron) a la sesión. Las preguntas pueden configurarse para permitir intentos múltiples. Puede configurarse un límite de tiempo para que se termine la pregunta automáticamente, o el instructor puede terminar la pregunta manualmente y avanzar a la siguiente. El instructor también tiene la habilidad para saltar a diferentes  preguntas mientras corre la sesión. El instructor puede monitorear al grupo o a una participación individual, las respuestas de los participantes en tiempo-real  y la pregunta que se está preguntando. </p>
<p>Cada intento del cuestionario es calificado automáticamente en forma similar a un cuestionario normal (con la excepción de las preguntas de tipo Ensayo y PoodLL) y la calificación es grabada en el Libro de Calificaciones. Se puede hacer la calificación automática para la participación en equipo al transferirle la calificación desde el respondente individual a los otros miembros del equipo. </p>
<p>El instructor tiene opciones para mostrar pistas, dar retroalimentación y mostrar las respuestas correctas a los estudiantes cuando se termine el cuestionario.</p>
<p>Los Cuestionarios Activos pueden usarse como un vehículo para implementar el Aprendizaje Basado en Equipo dentro de Moodle.</p>';
$string['nofeedback'] = 'No hay retroalimentación para esta pregunta';
$string['no_questions'] = 'No hay preguntas que se hayan añadido a este cuestionario.';
$string['notime_help'] = 'Elija este campo para que no haya cronómetro en esta pregunta. <p>Entonces se le pedirá al instructor que haga click sobre el botón de \'terminar la pregunta\' para que se termine la pregunta</p>';
$string['notresponded'] = 'Número de no-respondentes del total de intentos';
$string['numberoftries_help'] = 'Número de intentos de pregunta que intentará el usuario. Los estudiantes continúan limitados por el límite de tiempo para la pregunta';
$string['overallgrade'] = 'Calificación promedio: {$a->overallgrade} / {$a->scale}';
$string['percentagedatasetlabel'] = 'Porcentaje de respuestas totales';
$string['pluginadministration'] = 'Adminsitración del Cuestionario Activo';
$string['questionlist'] = 'Lista de Preguntas';
$string['quiznotrunning'] = 'El cuestionario de momento no está corriendo - espere a que su profesor lo inicie. Use el botón de \'Recargar\' para recargar la página para revisar nuevamente';
$string['regradeallgrades'] = 'Re-calificar todas las calificaciones';
$string['reload_results'] = 'Re-cargar Resultados';
$string['repollquestion'] = 'Re-preguntar pregunta';
$string['reviewafter'] = 'Después de que las sesiones hayan cerrado';
$string['reviewoptionsettings'] = 'Opciones para revisar';
$string['scale'] = 'Calificación Máxima';
$string['scale_help'] = 'Este valor (número entero) escalará los puntos que hubiera recibido en el cuestionario a este valor.';
$string['select_group'] = 'Seleccione su equipo';
$string['selectsession'] = 'Seleccionar sesión para verla:&nbsp;&nbsp;&nbsp;&nbsp;';
$string['sessionaverage'] = 'Promedio de la sesión';
$string['sessionname_required'] = 'Se requiere el nombre de la sesión';
$string['show_correct_answer'] = 'Mostrar respuesta correcta';
$string['showhistoryduringquiz'] = 'Mostrar historia de respuesta';
$string['showhistoryduringquiz_help'] = 'Mostrar la historia de respuesta del estudiante/grupo para esta pregunta al revisar las respuestas a una pregunta durante un cuestionario.';
$string['shownotresponded'] = 'Mostrar los que no-respondieron';
$string['startedon'] = 'Iniciado en';
$string['startquiz'] = 'Iniciar cuestionario';
$string['start_session'] = 'Iniciar sesión';
$string['studentquizinst'] = '<p>Por favor, espere a que el instructor inicie el cuestionario. Una vez que haya iniciado Usted verá un cronómetro descendiente para la primera pregunta</p>';
$string['successregrade'] = 'Cuestionario re-calificado exitosamente';
$string['teacherjoinquizinstruct'] = 'Use esto si Usted mismo quiere intentar hacer un cuestionario<br />(Usted también necesitará iniciar el cuestionario en una ventana separada)';
$string['teacherstartinstruct'] = 'Use esto para iniciar un cuestionario para que lo contesten los estudiantes<br />Use la caja-de-texto para definir un nombre para esta sesión (para ayudarle cuando busque los resultados después).';
$string['theattempt_help'] = 'Si es que el estudiante puede o no revisar el intento en absoluto.';
$string['timecompleted'] = 'Tiempo finalizado';
$string['timertext'] = 'Su pregunta terminará y se auto-enviará en :';
$string['trycount'] = 'A Usted le quedan {$a->tries} intentos más.';
$string['unabletocreate_session'] = 'No se puede crear sesión';
$string['waitforquestion'] = 'Esperando a que se envíe la pregunta en:';
$string['waitforquestiontime'] = 'Tiempo para esperar la pregunta';
$string['waitforquestiontime_help'] = 'El tiempo a esperar para que una pregunta inicie/antes_de_iniciar.';
$string['waitforrevewingend'] = 'El instructor ahorita está revisando la pregunta anterior. Por favor, espere a que inicie la siguiente pregunta';
$string['waitstudent'] = 'Esperando a que se conecten los estudiantes';
$string['workedingroups'] = 'Se trabajará en equipos.';
$string['workedingroups_help'] = 'Active esta casilla para indicar que los estudiantes trabajarán en equipos. Asegúrese de seleccionar un grupo debajo.';

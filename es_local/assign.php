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
 * @subpackage assign
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['activityoverview'] = 'Tiene Tareas que requieren su atención';
$string['addattempt'] = 'Permitir otra entrega';
$string['allowsubmissions'] = 'Permitir al usuario continuar haciendo entregas en esta Tarea';
$string['assignfeedback'] = 'Extensión de Corrección';
$string['assignfeedbackpluginname'] = 'Extensión de Corrección';
$string['assignmentmailhtml'] = '{$a->grader} ha realizado una corrección en su entrega a la tarea de \'<i>{$a->assignment<7i>\'<br></br>\' Usted puede verla añadida a su entrega: <a href="{$a->url}"';
$string['assignmentmailsmall'] = '{$a->grader} ha realizado una corrección en su entrega a la tarea de \'{$a->assignment}\' Usted puede verla añadida a su entrega';
$string['assignmentsperpage'] = 'Entregas por página';
$string['attemptheading'] = 'Entrega {$a->attemptnumber}: {$a->submissionsummary}';
$string['attempthistory'] = 'Historial de entregas';
$string['attemptnumber'] = 'Número de la entrega';
$string['attemptreopenmethod'] = 'Permitir re-envío';
$string['attemptreopenmethod_help'] = 'Determina cómo se configura el re-envío de intentos de entrega de la tarea a los estudiantes.
Las opciones disponibles son las siguientes: <ul>
<li> Nunca - No se permite el reenvío </li>
<li> Manual - El profesor puede permitir manualmente el reenvío </li>
<li> Automático hasta aprobar - el envío del estudiante se vuelve a abrir automáticamente para que pueda re-enviar, hasta que alcance la calificación para aprobar.
Este valor se establece en el libro de calificaciones accediendo a la pestaña "Categorías e ítems" dentro de la opción  "Calificación para aprobar" de esta tarea. </li>
</ul>
</br>Asimismo, puede establecerse un máximo de intentos o entregas para esta tarea.';
$string['batchoperationconfirmsetmarkingallocation'] = '¿Asignar Evaluador para todas las entregas seleccionadas?';
$string['batchoperationconfirmsetmarkingworkflowstate'] = '¿Establecer estado de Evaluación supervisada para todas las entregas seleccionadas?';
$string['batchsetallocatedmarker'] = 'Asignar Evaluador para {$a} usuario(s) seleccionado(s)';
$string['batchsetmarkingworkflowstateforusers'] = 'Establecer estado de Evaluación supervisada para {$a} usuario(s) seleccionado(s)';
$string['cutoffdate'] = 'Fecha de vencimiento';
$string['cutoffdate_help'] = 'Si se activa, se podrán realizar envíos después del plazo de entrega y hasta la fecha de vencimiento. Estos envíos serán marcados como "entregas tardías". Después de la fecha de vencimiento no se puede realizar ningún envío (salvo ampliaciones de plazos).';
$string['cutoffdatefromdatevalidation'] = 'La fecha de vencimiento debe ser posterior a la fecha de apertura.';
$string['cutoffdatevalidation'] = 'La fecha de vencimiento debe ser posterior a la fecha de entrega.';
$string['duplicateoverride'] = 'Duplicar excepción';
$string['editoverride'] = 'Modificar excepción';
$string['editsubmission'] = 'Editar la entrega';
$string['eventoverridecreated'] = 'Creada Excepción en Tarea';
$string['eventoverridedeleted'] = 'Borrada Excepción en Tarea';
$string['eventoverrideupdated'] = 'Actualizada Excepción en Tarea';
$string['extensionduedate'] = 'Extensión de plazo';
$string['extensionnotafterduedate'] = 'la fecha de extensión debe ser posterior al pazo de vencimiento';
$string['extensionscount'] = '{$a} usuarios con plazos extendidos';
$string['feedback'] = 'Corrección';
$string['feedbackavailablehtml'] = '{$a->username} ha aportado alguna corrección en su entrega de la tarea \'<i>{$a->assignment}</i>\'<br /><br /> Puede verla añadida a su entrega en <a href="{$a->url}"></a>.';
$string['feedbackavailablesmall'] = '{$a->username} ha hecho un comentario de corrección en la tarea {$a->assignment}';
$string['feedbackavailabletext'] = '{$a->username} ha aportado un comentario de corrección en su entrega de la tarea {$a->assignment}. Puede verla añadida a su entrega en {$a->url}"';
$string['feedbackplugin'] = 'Extensión de Corrección';
$string['feedbackpluginforgradebook'] = 'Extensión de corrección que sube los comentarios al libro de calificaciones';
$string['feedbackpluginforgradebook_help'] = 'Solo una extensión de corrección de la tarea puede introducir los comentarios en el libro de calificaciones.';
$string['feedbackplugins'] = 'Extensiones de Corrección';
$string['feedbacksettings'] = 'Opciones de Corrección';
$string['feedbacktypes'] = 'Tipos de Corrección';
$string['filterblocked'] = 'Bloqueadas';
$string['filterdraft'] = 'Borradores';
$string['filterdueextended'] = 'Plazo ampliado';
$string['filtered'] = 'Mostrando estudiantes filtrados por: ';
$string['filteredout'] = 'Hay {$a} estudiantes no mostrados por este filtro';
$string['filtergraded'] = 'Calificadas';
$string['filternotgraded'] = 'No calificadas';
$string['filternotsubmitted'] = 'No enviadas';
$string['filtersubmitted'] = 'Enviadas';
$string['filtersubmittedlate'] = 'Retrasadas';
$string['gradebelowzero'] = 'La calificación debe ser mayor o igual cero';
$string['gradedon'] = 'Fecha de calificación';
$string['invalidoverrideid'] = 'ID de Excepción no válida';
$string['lastmodifiedgrade'] = 'Fecha de Calificación';
$string['lastmodifiedsubmission'] = 'Fecha de entrega';
$string['latesubmissionsaccepted'] = 'Los estudiantes pueden entregar hasta la fecha de vencimiento, pero esas entregas aparecerán indicadas como retrasadas';
$string['manageassignfeedbackplugins'] = 'Gestionar extensiones de Corrección de tareas';
$string['markerfilter'] = 'Filtro de Evaluadores';
$string['markingallocation'] = 'Usar asignación de Evaluadores';
$string['markingallocation_help'] = 'Si está habilitado, se puede designar un Evaluador específico para un estudiante (o para todos). <br />
Los evaluadores pueden usar un filtro específico para listar solo sus estudiantes asignados en la tabla de entregas de la Tarea.';
$string['markingworkflow'] = 'Usar Evaluación por etapas supervisada';
$string['markingworkflowstateinmarking'] = 'Evaluando';
$string['markingworkflowstatenotmarked'] = 'No evaluada';
$string['markingworkflowstatereadyforrelease'] = 'Para Publicar';
$string['markingworkflowstatereadyforreview'] = 'Para revisar';
$string['markingworkflow_help'] = 'Si está habilitado, entonces el proceso de calificación se realizará por etapas, definidas por un estado de Evaluación supervisada.
Las calificaciones finales no son visibles por los estudiantes hasta que se publican las evaluaciones (estado Publicadas). <br />
Diferentes grupos de Profesores pueden controlar el pase de una etapa o estado a otra.';
$string['maxattempts'] = 'Nº máximo de entregas';
$string['nomoresubmissionsaccepted'] = 'No se aceptan más envíos. Sólo los estudiantes con una ampliación del plazo pueden entregar la Tarea';
$string['noonlinesubmissions'] = 'Esta tarea no requiere que usted entregue nada vía web';
$string['nooverridedata'] = 'debe modificar al menos uno de los parámetros de entrega de la Tarea.';
$string['offline'] = 'No se requieren entregas vía web';
$string['overdue'] = '<font color="red">{$a} de retraso</font>';
$string['overridedeletegroupsure'] = 'Está seguro de que desea eliminar la excepción para el grupo {$a}?';
$string['overridedeleteusersure'] = 'Está seguro de que desea eliminar la excepción para el usuario {$a}?';
$string['overridegroup'] = 'Excepción para grupo';
$string['overrideuser'] = 'Excepción para usuario';
$string['reopensubmission'] = 'Archivar entrega para re-enviar';
$string['reopensubmission_help'] = 'La Tarea permite múltiples intentos. <br />Para re-enviar debe primero archivar la entrega actual en su Historial.';
$string['requireallteammemberssubmit'] = 'Requiere confirmación por todos';
$string['requireallteammemberssubmit_help'] = 'Si se activa, todos y cada uno de los miembros del equipo deberán confirmar el envío realizado por uno de ellos presionando el botón "enviar para calificar" en su propia página. Mientras alguno reste por enviar la entrega colectivo no se considerará enviada válidamente. Si está inactivo, la entrega colectiva se considerará válida (y ya no se podrá modificar) en cuanto uno cualquiera de los miembros el equipo realice su envío individual.';
$string['requiresubmissionstatement'] = 'Requiere aceptación de términos';
$string['requiresubmissionstatement_help'] = '
Si se activa, se mostrará una declaración de términos y condiciones que los estudiantes deben aceptar cuando realizan la entrega de su tarea.
Los Términos y Condiciones son genéricos para todo el sitio, no configurables por asignatura. Se declara ser autor original y respetar las normas académicas respecto al plagio.';
$string['submissionstatus_draft'] = 'Borrador (no enviado)';
$string['revealidentitiesconfirm'] = 'Ha solicitado revelar las identidades de los estudiantes. Esta operación NO tiene marcha atrás. Una vez identificados los usuarios sus puntuaciones se enviarán al Libro de Calificaciones.';
$string['reverttodefaults'] = 'Volver a opciones generales';
$string['reverttodraft'] = 'Revertir la entrega al estado de borrador';
$string['reverttodraftforstudent'] = 'Revertir la entrega al estado de borrador para el estudiante: (id={$a->id}, nombre: {$a->fullname}).';
$string['saveallquickgradingchanges'] = 'Guardar todas las puntuaciones';
$string['saveoverrideandstay'] = 'Guardar y crear otra excepción';
$string['sendlatenotifications'] = 'Notificación de entregas fuera de plazo';
$string['sendnotifications'] = 'Notificación de entregas';
$string['setmarkingallocation'] = 'Asignar Evaluador';
$string['setmarkingworkflowstate'] = 'Establecer estado de Evaluación supervisada';
$string['submissiondrafts'] = 'Requiere confirmación de entrega';
$string['submissiondrafts_help'] = 'Si está habilitado, los estudiantes tendrán que pulsar un botón de "Enviado para calificar"  para declarar que es su entrega definitiva. Esto permite que los estudiantes puedan tener una versión borrador de su entrega en el sistema.';
$string['submissionstatementacceptedlog'] = 'Términos y Condiciones de entrega aceptados por el usuario  {$a}';
$string['submissionteam'] = 'Grupo';
$string['submitaction'] = 'Entregar';
$string['submitassignment'] = 'Enviar para Calificar';
$string['submittedlateshort'] = '{$a} de retraso';
$string['teamsubmission'] = 'Envío por equipos';
$string['teamsubmission_help'] = '
Si se activa los estudiantes (organizados en equipos correspondientes a los grupos de un agrupamiento definido) enviarán sus trabajos como equipo, no individualmente.

El envío colectivo como equipo será compartido por todos los miembros del mismo.
Todos los estudiantes del equipo ven el mismo envío (el último realizado por uno cualquiera de ellos) y pueden modificarlo (si procede).';
$string['teamsubmissiongroupingid'] = 'Agrupamiento para equipos';
$string['teamsubmissiongroupingid_help'] = '
Esta es el agrupamiento que la Tarea utilizará para establecer los equipos de estudiantes: cada equipo es un grupo de ese agrupamiento. Aquellos estudiantes que NO pertenezcan a ninguno de estos grupos quedarán englobados en una categoría "Sin equipo".

Si no se determina, se emplearán los grupos definidos en el curso..';
$string['teamsubmissionstatus'] = 'Estado de la entrega de grupo';
$string['userextensiondate'] = 'Plazo ampliado';
$string['viewfeedback'] = 'Ver Correcciones';
$string['viewfeedbackforuser'] = 'Ver corrección del usuario: {$a}';
$string['viewfullgradingpage'] = 'Abrir la página de calificación global para incluir corrección';
$string['viewownsubmissionstatus'] = 'Ver página de estado de las entregas propias.';
$string['workflowfilter'] = 'Filtro de Estado de evaluación';

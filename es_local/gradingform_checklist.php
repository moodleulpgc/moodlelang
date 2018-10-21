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
 * @package    gradingform
 * @subpackage checklist
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addgroup'] = 'Agregar grupo';
$string['alwaysshowdefinition'] = 'Permitir a los usuarios pre-visualizar la Lista de Verificación empleada en el módulo antes de la evaluación (en caso contrario sólo se mostrará después de la calificación)';
$string['backtoediting'] = 'Volver a edición';
$string['checked'] = 'Marcado';
$string['checkitem'] = 'Marcar este item';
$string['checklist'] = 'Lista de Verificación';
$string['checklistmapping'] = 'Reglas de conversión para la calificación';
$string['checklistmappingexplained'] = 'La puntuación mínima en esta Lista es de <b>{$a->minscore} puntos</b> y será convertida en la calificación mínima disponible en el módulo (que es cero si no se ha cambiado a una escala personalizada). 
La puntuación máxima, <b>{$a->maxscore} puntos</b>,  será convertida en la calificación máxima. Las puntuaciones intermedias serán interpoladas. Es decir, se realiza una normalización del intervalo [{$a->minscore} - {$a->maxscore} ]  al intervalo [0% - 100%] y se calcula la calificación final de ahí.
Si se usa una escala discreta, las puntuaciones se normalizan a enteros en el intervalo de índices de la escala (5 niveles, intervalo [0-4]).';
$string['checklistoptions'] = 'Opciones de la Lista de Verificación';
$string['checkliststatus'] = 'Estado actual de la Lista de Verificación';
$string['confirmdeletegroup'] = '¿Seguro que desea borrar este grupo?';
$string['confirmdeleteitem'] = '¿Seguro que desea borrar este item?';
$string['definechecklist'] = 'Definir la Lista de Verificación';
$string['description'] = 'Descripción';
$string['enablegroupremarks'] = 'Permitir al calificador añadir comentarios a cada grupo de la Lista';
$string['enableitemremarks'] = 'Permitir al calificador añadir comentarios a cada item de la Lista';
$string['err_definitionmax'] = 'La definición del item debe ser menor de 255 caracteres';
$string['err_descriptionmax'] = 'La descripción del Grupo debe ser menor de 255 caracteres';
$string['err_nodefinition'] = 'La definición del Item no puede quedar vacía';
$string['err_nodescription'] = 'La descripción del Grupo no puede quedar vacía';
$string['err_nogroups'] = 'La Lista de Verificación debe contener al menos un Grupo de items';
$string['err_scoreformat'] = 'En número de puntos de cada item debe ser un número válido no negativo';
$string['err_scoremax'] = 'La puntuación de cada item no debe ser mayor de 1000';
$string['err_totalscore'] = 'La puntuación máxima al utilizar la evaluación por Lista de Verificación debe ser mayor de cero.';
$string['gradingof'] = 'Lista de Verificación';
$string['groupadditem'] = 'Añadir Item';
$string['groupdelete'] = 'Borrar grupo';
$string['groupdescription'] = 'Descripción del grupo';
$string['groupempty'] = 'Pinchar para editar el grupo';
$string['groupfeedback'] = 'Retroalimentación del grupo';
$string['groupmovedown'] = 'Bajar';
$string['groupmoveup'] = 'Subir';
$string['grouppoints'] = 'Puntuación del Grupo';
$string['groupremark'] = 'Comentario del Grupo';
$string['itemdefinition'] = 'definición del Item';
$string['itemdelete'] = 'Borrar item';
$string['itemempty'] = 'Pinchar para editar el Item';
$string['itemfeedback'] = 'Retroalimentación';
$string['itemremark'] = 'Comentario del Item';
$string['itemscore'] = 'Puntuación del Item';
$string['name'] = 'Nombre';
$string['needregrademessage'] = 'La definición de la Lista de Verificación se ha modificado después de que este estudiante haya sido calificado. El estudiante NO puede ver esta Lista de Verificación hasta que el profesor revise y actualice la Lista.';
$string['overallpoints'] = 'Puntuación total';
$string['pluginname'] = 'Lista de Verificación';
$string['previewchecklist'] = 'Vista previa la Lista de Verificación';
$string['regrademessage1'] = 'Ha solicitado guardar cambios en una Lista de verificación que ya ha sido usada para calificar a estudiantes. Por favor, especifique si las calificaciones existentes deben ser revisadas. Si se confirma, la Lista será ocultada a los estudiantes hasta que los items sean re-calificados.';
$string['regrademessage5'] = 'Ha solicitado el realizar cambios importantes en una Lista de verificación que ya ha sido usada para calificar a estudiantes.  El libro de calificaciones NO se modificará con nuevas puntuaciones y la Lista estará oculta a los estudiante hasta que la valide y re-califique los items modificados.';
$string['regradeoption0'] = 'No etiquetar para re-evaluación';
$string['regradeoption1'] = 'Etiquetar para re-evaluación';
$string['restoredfromdraft'] = 'NOTA: El último intento de calificar a esta persona no se guardó adecuadamente, por lo que se han restaurado calificaciones provisionales. Si desea anular estos cambios use el botón \'Cancelar\'  de más abajo.';
$string['save'] = 'Guardar';
$string['savechecklist'] = 'Guardar la Lista de Verificación para uso';
$string['savechecklistdraft'] = 'Guardar como borrador';
$string['scorepostfix'] = '{$a} puntos';
$string['showitempointseval'] = 'Mostrar puntos de cada item durante la evaluación';
$string['showitempointstudent'] = 'Mostrar puntos de cada item  a aquellos que son evaluados';
$string['showremarksstudent'] = 'Mostrar todos los comentarios a aquellos que son evaluados';
$string['unchecked'] = 'No marcado';

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
 * Strings for component 'assignsubmission_mahara', language 'es_mx', branch 'MOODLE_31_STABLE'
 *
 * @package   assignsubmission_mahara
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['assign_submission_mahara_description'] = 'Funciones de Mahara usadas en el plugin para Envío de Tarea de Portafolio Mahara.<br />El publicar este servicio en un sitio Moodle no tiene efecto. Suscríbase a este servicio si Usted quiere poder usar Tareas con {$a}.<br />';
$string['assign_submission_mahara_name'] = 'Servicios Mahara de Envío de Tarea';
$string['collectionsby'] = 'Colecciones por {$a}';
$string['defaultlockpages_help'] = 'Configuración por defecto para usarse para la configuración de "{$a}" en nuievas Tareas Mahara..';
$string['defaulton'] = 'Habilitado por defecto';
$string['defaulton_help'] = 'Si se configura, este método de envío será habilitado por defecto para todas las tareas nuevas.';
$string['defaultsite_help'] = 'Configuraciones por defecto a usar para la configuración de  "{$a}" en nuevas Tareas Mahara.';
$string['emptysubmission'] = 'Usted no ha elegido la página a enviar.';
$string['enabled_help'] = 'Si se habilita, los estudiantes pueden integrar con su portafolio de Mahara';
$string['errorinvalidhost'] = 'ID del host seleccionada inválida';
$string['errorinvalidstatus'] = 'Error para el desarrollador: Estatus de envío inválido enviado a assign_submission_mahara::set_mahara_submission_status()';
$string['errormnetrequest'] = 'El intento para enviar solicitud Mnet resultó en error: {$a}';
$string['errorvieworcollectionalreadysubmitted'] = 'La vista o colección de ULPGCePortafolios seleccionada no pudo enviarse. Por favor escoja otra.';
$string['eventassessableuploaded'] = 'Se ha entregado una página o colección de ULPGCePortafolios.';
$string['lockpages'] = 'Bloquear páginas enviadas';
$string['lockpages_help'] = 'Si se selecciona "Si, mantener bloqueado", las colecciones y páginas Mahara enviadas estarán bloqueadas para evitar su edición en Mahara y permanecerán bloqueadas después de calificar. SI se selecciona "SI, pero desbloquear después de calificar", la página o colección será desbloqueada después de la calificación del envío, o, si se ha usado flujograma de calificación, serán desbloqueadas cuando se liberen los puntajes a los estudiantes.';
$string['nomaharahostsfound'] = 'No se encontraron servidores Mahara.';
$string['noneselected'] = 'Ninguno seleccionado';
$string['noviewscreated'] = 'No hay Vistas o colecciones disponibles en su portafolios <strong>personal</strong> de <a target="_blank" href="{$a->jumpurl}">{$a->name}</a>. <br>Por favor, pinche en ese enlace para visiatr su portafolios y crear una.';
$string['pluginname'] = 'Portafolios Mahara';
$string['mahara'] = 'ULPGCePortafolios';
$string['previousattemptsnotvisible'] = 'Los intentos anteriores con el plugin para envíos Mahara no son visibles.';
$string['selectmaharaview'] = 'Seleccione una de sus Vista o Colecciones en {$a->name} de esta lista completa, o <a href="{$a->jumpurl}">pinche aquí</a> para visitar {$a->name} y crear una página ahora mismo.';
$string['site'] = 'ULPGCePortafolios';
$string['site_help'] = 'Esta configuración le permite a Usted seleccionar a cual sitio Mahara deberían de enviar sus páginas sus estudiantes. (El sitio Mahara ya debe de estar configurado para red MNet con este sitio Moodle).';
$string['yeskeeplocked'] = 'Si, mantener bloqueado';
$string['yesunlock'] = 'Si, pero des-bloquear después de calificar';

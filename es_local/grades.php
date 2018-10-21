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
 * @package    core
 * @subpackage grades
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configscaledisplaymode'] = 'El modo Detallado muestra el número de veces que un participante ha obtenido cada uno de los valores de la escala en las actividades de tipo foro y los glosario (estos son los tipos de actividades que permiten que un participante tenga varias calificaciones al mismo tiempo). Por ejemplo, si la escala es \\"Mal,Normal,Muy bien\\" un valor \\"0/3/1\\" indica que un participante tiene 0 elementos calificados con Mal, 3 elementos calificados con Normal y 1 elemento calificado con Muy bien';
$string['coursesiamtaking'] = 'Asignaturas que estoy cursando';
$string['coursesiamteaching'] = 'Asignaturas que estoy impartiendo';
$string['detailedscaledisplay'] = 'Detallado';
$string['defaultprev'] = 'Valor por defecto ({$a})';
$string['finalgrade'] = 'Cal. final';
$string['gradebooksetup'] = 'Configuración del Libro de Calificaciones';
$string['gradegrademinmax'] = 'Calificaciones mín y máx iniciales';
$string['gradeitemminmax'] = 'Calificaciones mín y máx iniciales como se especificaron en las configuraciones del ítem de calificación';
$string['incorrectminmax'] = 'El mínimo debe ser menor que el máximo';
$string['minmaxtouse'] = 'Calificaciones mín y máx usadas en el cálculo';
$string['minmaxtouse_desc'] = 'Esta configuración determina si es que se usan las calificaciones mínimas y máximas iniciales de cuando se dió la calificación, o las calificaciones mínimas y máximas como se especificaron en las configuraciones para el ítem de calificación, al calcular la calificación mostrada en el Libro de Calificaciones. Se recomienda que esta configuración sea modificada fuera de las horas pico, porque todas las calificaciones serán re-calculadas, lo que podría resultar en una alta carga del servidor.';
$string['minmaxtouse_help'] = 'Esta configuración determina si es que se usan las calificaciones mínimas y máximas iniciales de cuando se dió la calificación, o las calificaciones mínimas y máximas como se especificaron en las configuraciones para el ítem de calificación, al calcular la calificación mostrada en el Libro de Calificaciones.';
$string['minmaxupgradedgrades'] = 'Nota: Algunas calificaciones han sido cambiadas para poder resolver una inconsistencia en el Libro de Calificaciones causada por un cambio en las calificaciones mínima y máxima usadas al calcular la calificación mostrada. Se recomienda revisar y aceptar los cambios.';
$string['minmaxupgradefixbutton'] = 'Resolver inconsistencias';
$string['minmaxupgradewarning'] = 'Nota: Se ha detectado una inconsistencia con algunas calificaciones debido a un cambio en las calificaciones mínima y máxima usadas al calcular la calificación mostrada en el Libro de Calificaciones. Se recomienda que se resuelva la inconsistencia al hacer click en el botón inferior, aunque esto causdará que se cambien algunas calificaciones.';
$string['settings'] = 'Configuración';

/// START DETAILED SCALE GRADES
$string['scaledisplaymode'] = 'Modo de mostrar escalas';
$string['scaledisplaymode_help'] = 'El modo Detallado muestra el número de veces que un participante ha obtenido cada uno de los valores de la escala en las actividades de tipo foro y los glosario (estos son los tipos de actividades que permiten que un participante tenga varias calificaciones al mismo tiempo). Por ejemplo, si la escala es "Mal,Normal,Muy bien" un valor "0/3/1" indica que un participante tiene 0 elementos calificados con Mal, 3 elementos calificados con Normal y 1 elemento calificado con Muy bien';
$string['normalscaledisplay'] = 'Normal';
$string['detailedscaledisplay'] = 'Detallado';
$string['configscaledisplaymode'] = 'El modo Detallado muestra el número de veces que un participante ha obtenido cada uno de los valores de la escala en las actividades de tipo foro y los glosario (estos son los tipos de actividades que permiten que un participante tenga varias calificaciones al mismo tiempo). Por ejemplo, si la escala es \"Mal,Normal,Muy bien\" un valor \"0/3/1\" indica que un participante tiene 0 elementos calificados con Mal, 3 elementos calificados con Normal y 1 elemento calificado con Muy bien';
/// END DETAILED SCALE GRADES

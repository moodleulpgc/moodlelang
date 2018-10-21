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
 * @subpackage group
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['anygrouping'] = 'Cualquier agrupamiento';
$string['controlledgroupalert'] = 'Grupo gestionado por una rutina externa. Los miembros con nombre en color no pueden ser borrados. Puede añadir y eliminar otros miembros.';
$string['controlledgroups'] = 'Los grupos y usuarios con nombre en color son gestionados por el sistema. Esos ítems no se pueden borrar.';
$string['deletenotallowed'] = 'Este grupo está gestionado por una rutina externa. El borrado no está permitido.';
$string['emptygroup'] = 'Vaciar este grupo';
$string['enrol'] = 'Método de enrolado';
$string['exclusivegroupingconflict'] = 'Usuario en varios grupos: {$a}';
$string['forceexclusive'] = 'Forzar pertenencia a un único grupo en el Agrupamiento:';
$string['groupby'] = 'Generación basada en';
$string['groupfrom'] = 'Grupo padre (sólo usuarios de este grupo)';
$string['groupingsection'] = 'Acceso por Agrupamientos';
$string['groupingsection_help'] = 'Un agrupamiento es una colección de grupos dentro de un curso. Se se selecciona aquí un agrupamiento, sólo los estudiantes asignados a algún grupo perteneciente a este Agrupamiento podrán acceder a la sección y su contenido';
$string['importgroups'] = 'Importar grupos';
$string['importgroups_help'] = 'Los grupos pueden ser importados mediante un archivo de texto CSV. El formato del archivo debe como sigue:

* Cada línea del archivo contiene un registro
* Cada registro es una serie de datos separados por comas
* El primer registro contiene una lista de nombres de campos que definen el formato del resto del archivo
* Es obligatorio el campo de "groupname", que identifica al grupo
* Son opcionales los campos "groupidnumber" (Código del grupo), "description" (Descripción), "enrolmentkey"(Clave de auto-adición al grupo), "groupingname" (agrupamiento) y "user" (DNI del usuario)

Si existe el campo "user" el usuario identificado por el DNAI especificado se asignará al grupo.
Si se requiere importar varios usuarios al mismo grupo basta añadir una línea idéntica para cada usuario, cambiando sólo el valor del campo "user".

El archivo debe tener codificación UTF-8 para importar bien caracteres no-ASCII.
Si un campo contiene comas, deben ser reemplazadas por el código "&#44;"


Por ejemplo, un archivo válido sería:

groupname, description, groupidnumber, groupingname, user

Grupo A, descripción del grupo A, Trabajos, 12345678

Grupo B, descripción del grupo B, Trabajos, 12345679

Grupo C, descripción del grupo C, Trabajos, 12345670

Lab01,  Prácticas de Laboratorio A01, Laboratorio,

Lab02,  Prácticas de Laboratorio A02, Laboratorio,

';
$string['newgrouping'] = 'Nuevo agrupamiento';
$string['nogroupusers'] = 'Usuarios sin grupo asignado';
$string['notingroup'] = 'Ignorar usuarios ya en otros grupos';
$string['notingrouping'] = 'Fuera de un Agrupamiento';
$string['nousersinrole'] = 'No existen usuarios disponibles con el rol seleccionado';
$string['removenotallowed'] = 'Grupo gestionado por rutina externa. No está permitido quitar a este usuario.';
$string['removeuser'] = 'Quitar este miembro';
$string['selectfromrole'] = 'Seleccionar miembros con el rol';
$string['sourcegroup'] = 'Mostrar únicamente miembros del grupo:';
$string['usercount'] = 'Nº de miembros';
$string['userorder'] = 'Nombres de usuarios por:';
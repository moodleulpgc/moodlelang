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
 * @package    assignfeedback
 * @subpackage file
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['batchoperationconfirmuploadfiles'] = '¿Cargar ficheros de corrección para los estudiantes seleccionados?';
$string['batchuploadfiles'] = 'Cargar ficheros de corrección para varios estudaintes';
$string['batchuploadfilesforusers'] = 'Enviar el fichero de corrección a los {$a} estudiantes seleccionados';
$string['confirmuploadzip'] = 'Confirmación de la carga de ZIP';
$string['enabled'] = 'Archivo de Corrección';
$string['enabled_help'] = 'Si está habilitado, el profesor, cuando evalúe las tareas, podrá subir archivos con sus correcciones. Estos archivos pueden ser  documentos de texto (.doc,  .odt, .pdf) o archivos de audio, vídeo, sin estar limitados a estos ejemplos,.';
$string['feedbackfileadded'] = 'Nuevo archivo de correcciones "{$a->filename}" para el estudiante "{$a->student}"';
$string['feedbackfileupdated'] = 'Archivo de correcciones "{$a->filename}", modificado para el estudiante "{$a->student}"';
$string['feedbackzip'] = 'Genere ZIP de archivos de correcciones';
$string['feedbackzip_help'] = 'Un archivo ZIP conteniendo ficheros de corrección para uno o más estudiantes. Los archivos se asignan a cada usuario en función de su código ID que es la segunda parte del nombre del archivo.
Si descarga todas las entregas se crearán ficheros usando este código ID en el nombre. Sólo tiene que editar esos mismos ficheros para introducir sus correcciones re-empaquetar en ZIP y subir.';
$string['file'] = 'Archivos de Corrección';
$string['filesadded'] = 'Archivos de corrección añadidos: {$a}';
$string['filesupdated'] = 'Archivos de corrección actualizados: {$a}';
$string['importfeedbackfiles'] = 'Importar archivo de corrección';
$string['pluginname'] = 'Archivo de Corrección';
$string['uploadfiles'] = 'Enviar archivos de correcciones';
$string['uploadzip'] = 'Cargar varios archivos de correcciones en un ZIP';
$string['uploadzipsummary'] = 'Archivos de corrección importados de un ZIP';
$string['userswithnewfeedback'] = 'Estudiantes con correcciones actualizadas: {$a}';

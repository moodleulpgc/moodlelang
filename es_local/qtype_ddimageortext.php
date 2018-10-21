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
 *
 * @package    qtype
 * @subpackage ddimageortext
 * @copyright  2011 The Open University
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoredropzones'] = 'Agregar {no} zonas diana más';
$string['addmoreimages'] = 'Agregar {no} ítems arrastrables más';
$string['answer'] = 'Respuesta';
$string['bgimage'] = 'Imagen de fondo';
$string['correctansweris'] = 'La respuesta correcta es: {$a}';
$string['draggableimage'] = 'Imagen arrastrable';
$string['draggableitem'] = 'Ítem';
$string['draggableitemheader'] = 'Ítem arrastrable {$a}';
$string['draggableitems'] = 'Ítems arrastables';
$string['draggableitemtype'] = 'Tipo';
$string['draggableword'] = 'Texto arrastrable';
$string['dropbackground'] = 'Imagen de fondo encima de la cual se arrastran y sueltan los marcadores';
$string['dropzone'] = 'Zona diana {$a}';
$string['dropzoneheader'] = 'Zonas diana (como [x,y] de esquina superior izquierda)';
$string['formerror_disallowedtags'] = 'Ha usado etiquetas HTML que no están permitidas en un ítem de texto arrastrable.';
$string['formerror_multipledraginstance'] = 'Ha colocado la misma imagen {$a} como correcta en más de una zona diana,
pero esa imagen no es un ítem arrastrable marcado como "reusable" en su configuración.';
$string['formerror_multipledraginstance2'] = 'Ha colocado esta imagen como correcta en más de una zona diana,
pero esa imagen no es un ítem arrastrable marcado como "reusable" en su configuración.';
$string['formerror_noallowedtags'] = 'No se permite ninguna etiqueta HTML en este texto, cuyo propósito es servir como texto alt, visible al pasar el ratón o en navegadores de texto, para una imagen arrastrable.';
$string['formerror_nobgimage'] = 'Debe especificar una imagen para servir de fondo a la zona de arrastrar y soltar.';
$string['formerror_nofile'] = 'Debe seleccionar o subir un archivo de imagen para usarlo aquí.';
$string['formerror_nofile3'] = 'Debe especificar un archivo de imagen aquí,
o bien borrar la etiqueta alt asociada y desmarcar la casilla "Reusable".';
$string['formerror_noimageselected'] = 'Debe seleccionar el ítem arrastrable correcto que corresponde a esta zona diana.';
$string['formerror_notintxleft'] = 'La coordenada X debe ser un número entero.';
$string['formerror_notintytop'] = 'La coordenada Y debe ser un número entero.';
$string['formerror_noxleft'] = 'Debe indicar un valor para la coordenada X de la esquina superior izquierda.
Debe especifircar primero uno de los ítems arrastrables, eso lo mostrará en la vista previa.
Puede arrastrar y soltar el ítem el el área de vista previa de arriba para establecer aquí la coordenada o puede introducirla manualmente aquí.';
$string['formerror_noytop'] = 'Debe indicar un valor para la coordenada Y de la esquina superior izquierda.
Debe especifircar primero uno de los ítems arrastrables, eso lo mostrará en la vista previa.
Puede arrastrar y soltar el ítem el el área de vista previa de arriba para establecer aquí la coordenada o puede introducirla manualmente aquí.';
$string['infinite'] = 'Reusable';
$string['label'] = 'Texto alt';
$string['nolabel'] = 'No hay etiqueta de texto';
$string['pleasedraganimagetoeachdropregion'] = 'Su respuesta no está completa.
Por favor, arrastre un ítem en cada zona diana.';
$string['pluginname'] = 'Arrastrar y soltar en Imagen';
$string['pluginname_help'] = 'Defina una imagen grande como fondo, especifique unas zonas diana dentro de esa imagen e
indique unos ítems (texto o imánes pequeñas) que pueden ser arrastrados a cada zona diana. Cada ítem colocado correctamente contribuye a la puntuación.';
$string['pluginname_link'] = 'question/type/ddimageortext';
$string['pluginnameadding'] = 'Agregando pregunta de tipo Arrastrar y soltar en Imagen';
$string['pluginnameediting'] = 'Editando pregunta de tipo Arrastrar y soltar en Imagen';
$string['pluginnamesummary'] = 'Textos o imágenes pequeñas se pueden arrastrar y soltar en zonas diana sobrr una imagen grande de fondo.';
$string['previewareaheader'] = 'Vista previa';
$string['previewareamessage'] = 'Seleccione un archivo de imagen para actuar como fondo así como otros archivos para servir de imágenes arrastrables, o simplemente escriba un texto que podrá ser arrastrado.
Entonces establezca unas "zonas diana" en la imagen de fondo e indique qué ítem arrastrable corresponde a cada diana: dónde debe arrastrar y soltar un estudiante cada ítem para obtener la puntuación correcta..';
$string['refresh'] = 'Actualizar vista previa';
$string['shuffleimages'] = 'Barajar ítems arrastrables cada vez que se intenta responder la pregunta';
$string['summarisechoice'] = '{$a->no}. {$a->text}';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summarisechoiceno'] = 'Ítem {$a}';
$string['summariseplaceno'] = 'Zona diana {$a}';
$string['xleft'] = 'Izquierda (X)';
$string['ytop'] = 'Arriba (Y)';

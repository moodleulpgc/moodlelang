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
 * Strings for component 'qtype_ddmarker', language 'es_mx', branch 'MOODLE_29_STABLE'
 *
 * @package   qtype_ddmarker
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addmoreitems'] = 'Agregar {no} marcadores más';
$string['alttext'] = 'Texto alterno';
$string['answer'] = 'Respuesta';
$string['bgimage'] = 'Imagen de fondo';
$string['clearwrongparts'] = 'Mover marcadores colocados incorrectamente de regreso a su posición inicial por defecto debajo de imagen';
$string['confirmimagetargetconversion'] = 'Usted está a punto de convertir las preguntas destino de imágenes de arriba hacia tipos de preguntas de Arrastrar y soltar marcadores.';
$string['convertingimagetargetquestion'] = 'Pregunta convertida "{$a->name}"';
$string['coords'] = 'Coordenadas';
$string['correctansweris'] = 'La respuesta correcta es: {$a}';
$string['draggableimage'] = 'Imagen arrastrable';
$string['draggableitem'] = 'Item arrastrable';
$string['draggableitemheader'] = 'Item arrastrable {$a}';
$string['draggableitemtype'] = 'Tipo';
$string['draggableword'] = 'Texto arrastrable';
$string['dropbackground'] = 'Imagen de fondo sobre la que arrastrar los marcadores';
$string['dropzone'] = 'Zona diana {$a}';
$string['dropzoneheader'] = 'Zonas diana (áreas donde soltar marcadores)';
$string['dropzones'] = 'Zonas diana';
$string['dropzones_help'] = 'Las zonas diana se definen escribiendo unas coordenadas. Cuando escriba,
la vista previa superior es actualizada inmediantamente, para que pueda verificar la posición las zonas con precisión y refinar, en su caso.

* Círculo: Se especifica el centro y radio. En formato x, y; r  <br>por ejemplo: <code>80, 100; 50</code>
* Polígono: Se especifican una serie de puntos como x,y. El último punto se une al primero. <br />El formato es x1, y1; x2, y2; ...; xn, yn<br>por ejemplo: <code>20, 60; 100, 60; 20, 100</code>
* Rectángulo: Se especifica la esquina superior izquierda, el ancho y alto. El formato es x,y;w,h (izquierda, superior; ancho, alto) <br>por ejemplo: <code>20, 60; 80, 40</code>';
$string['followingarewrong'] = 'Los siguientes marcadores han sido colocados en el área equivocada : {$a}.';
$string['followingarewrongandhighlighted'] = 'Los siguientes marcadores fueron colocados equivocadamente: {$a}. Marcador(es) resaltado(s) se muestra(n) con la localización correcta.<br /> Elija el marcador para resaltar el área permitida..';
$string['formerror_nobgimage'] = 'Usted necesita seleccionar una imagen para usar como fondo para el área de arrastrar y colocar.';
$string['formerror_noitemselected'] = 'Usted ha especificado una zona diana, pero no eligió al marcador que debe arrastrarse a esa zona.';
$string['formerror_nosemicolons'] = 'No hay punto y coma en su cadena de coordenadas. Sus coordenadas para un(a)  {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['formerror_onlysometagsallowed'] = 'Solamente se permiten etiquetas (tags)  "{$a}" en una etiqueta (label) para un marcador';
$string['formerror_onlyusewholepositivenumbers'] = 'Por favor solamente use números enteros positivos para especificar coordenadas x,y y/o  ancho y alto de formas. Sus coordenadas para un(a) {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['formerror_polygonmusthaveatleastthreepoints'] = 'Para una forma de polígono, Usted debe especificar al menos 3 puntos. Sus coordenadas para un(a) {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['formerror_repeatedpoint'] = 'Usted ha dado el mismo punto dos veces. Por favor, quite el duplicado. Sus coordenadas para un(a)  {$a->shape} deberían de expresarse como - {$a->coordsstring}.';
$string['formerror_shapeoutsideboundsofbgimage'] = 'La forma que Usted ha definido se sale de los límites de la imagen de fondo';
$string['formerror_toomanysemicolons'] = 'Existen demasiadas partes separadas por punto y coma en las coordenadas que Usted ha especificado. Sus coordenadas para un(a) {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['formerror_unrecognisedwidthheightpart'] = 'No reconocemos el alto y ancho que Usted ha especificado. Sus coordenadas para un(a) {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['formerror_unrecognisedxypart'] = 'No reconocemos las coordenadas x,y que Usted ha especificado. Sus coordenadas para un(a) {$a->shape} deberían expresarse como - {$a->coordsstring}.';
$string['imagetargetconverter'] = 'Convertir preguntas de imagen destino a arrastrar y soltar marcador';
$string['infinite'] = 'Ilimitado';
$string['listitemconfirmcategory'] = 'A punto de convertir todas las preguntas de destino imagen de la categoría "{$a->name}" (contiene {$a->qcount} preguntas destinoimagen)';
$string['listitemconfirmcontext'] = 'A punto de convertir todas las preguntas de destino imagen en el contexto "{$a->name}" (contiene {$a->qcount} preguntas destinoimagen)';
$string['listitemconfirmquestion'] = 'A punto de convertir la pregunta "{$a->name}"';
$string['listitemlistallcategory'] = 'Seleccionar todas las preguntas de destinoimagen en la categoría "{$a->name}" (contiene {$a->qcount} preguntas destinoimagen)';
$string['listitemlistallcontext'] = 'Seleccionar todas las preguntas de destinoimagen en el contexto "{$a->name}" (contiene {$a->qcount} preguntas destinoimagen)';
$string['listitemlistallquestion'] = 'Elegir pregunta "{$a->name}"';
$string['listitemprocessingcategory'] = 'Convirtiendo todas las preguntas de destinoimagen en la categoría "{$a->name}" (contiene {$a->qcount} preguntas destinoimagen)';
$string['listitemprocessingcontext'] = 'Convirtiendo todas las preguntas de destinoimagen en el contexto "{$a->name}" (contiene {$a->qcount} preguntas destinoimagen)';
$string['listitemprocessingquestion'] = 'Pregunta convertida "{$a->name}"';
$string['marker'] = 'Marcador';
$string['marker_n'] = 'Marcador {no}';
$string['markers'] = 'Marcadores';
$string['nolabel'] = 'No texto de etiqueta';
$string['noofdrags'] = 'Nº de usos';
$string['noquestionsfound'] = 'No se encontraron preguntas para convertir aquí';
$string['pleasedragatleastonemarker'] = 'Su respuesta no está completa. Usted debe poner al menos un marcador sobre la imagen.';
$string['pluginname'] = 'Arrastrar y soltar marcadores';
$string['pluginnameadding'] = 'Agregando pregunta de tipo Arrastrar y soltar marcadores';
$string['pluginnameediting'] = 'Editando pregunta de tipo Arrastrar y soltar marcadores';
$string['pluginname_help'] = 'Establezca una imagen de fondo como lienzo y defina unas etiquetas de texto como marcadores así como unas zonas diana en la imagen de fondo.
Los marcadores deben arrastrarse y soltarse cada uno en su zona diana correcta para puntuar.';
$string['pluginnamesummary'] = 'Una serie de marcadores se arrastran y sueltan sobre unas zonas diana de una imagen de fondo que sirve de lienzo.';
$string['previewareaheader'] = 'Vista previa';
$string['previewareamessage'] = 'Elija un archivo de imagen de fondo, escriba etiquetas de texto para los marcadores y defina las zonas diana sobre la imagen de fondo en donde deberán arrastrarse.';
$string['refresh'] = 'Refrescar vista previa';
$string['shape'] = 'Forma';
$string['shape_circle'] = 'Círculo';
$string['shape_circle_coords'] = 'x,y;r (donde x,y son las coordenadas xy del centro del círculo y r es el radio)';
$string['shape_circle_lowercase'] = 'círculo';
$string['shape_polygon'] = 'Polígono';
$string['shape_polygon_coords'] = 'x1,y1;x2,y2;x3,y3;x4,y4....(donde x1, y1 son las coordenadas x,y del primer vértice, x2, y2 son las coordenadas x,y del segundo, etc. Usted no necesita repetir las coordenadas del primer vértice para cerrar el polígono)';
$string['shape_polygon_lowercase'] = 'polígono';
$string['shape_rectangle'] = 'Rectángulo';
$string['shape_rectangle_coords'] = 'x,y;w,h (donde x,y son las coordenadas x,y de la esquina superior izquierda del rectángulo mientras que w y h son el ancho y alto del rectángulo)';
$string['shape_rectangle_lowercase'] = 'rectángulo';
$string['showmisplaced'] = 'Resaltar las zonas diana en donde no se han colocado los marcadores correctos';
$string['shuffleimages'] = 'Barajar items para arrastrar cada vez que se intente la pregunta';
$string['stateincorrectlyplaced'] = 'Mostrar cuales marcadores están colocados incorrectamente';
$string['summariseplace'] = '{$a->no}. {$a->text}';
$string['summariseplaceno'] = 'Zona diana {$a}';
$string['ytop'] = 'Superior';

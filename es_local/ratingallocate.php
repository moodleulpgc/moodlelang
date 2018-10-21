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
 * Strings for component 'ratingallocate', language 'es_mx', branch 'MOODLE_29_STABLE'
 *
 * @package   ratingallocate
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['algorithm_already_running'] = 'Ya está en ejecución otra instancia del algoritmo de distribución. Por favor espere al menos 30 min y refresque la página.';
$string['algorithm_scheduled_for_cron'] = 'El algoritmo de distribución está programado para ejecución automática en la próxima ronda. Por favor espere al menos 30 minutos y refresque la página.';
$string['algorithmtimeout'] = 'Caducó el tiempo del algoritmo';
$string['allocation_manual_explain_all'] = 'Marque el ítem asignado a cada usuario.';
$string['allocation_manual_explain_only_raters'] = 'Marque el ítem asignado a cada usuario. Sólo se muestran los usuarios que han realizado alguna valoración.';
$string['allocation_statistics'] = 'Estadísticas de distribución';
$string['allocation_statistics_description'] = 'Esta tabla permite estimar el grado general de cumplimiento de los criterios de distribución.
Muestra la frecuencia de Adscripciones según la valoración expresada por el usuario para cada Ítem. <br />
En este caso {$a->users} de {$a->total} usuarios fueron adscritos a un ítem que habían valorado con "{$a->rating}".
Para {$a->unassigned} usuarios no se ha asignado un ítem todavía.';
$string['choice_active'] = 'Visible';
$string['choice_active_help'] = 'El Ítem es mostrado a los usuarios solo si está visible/activo. Los ítems invisibles no se mostraran todavía.';
$string['choice_explanation'] = 'Descripción (adicional)';
$string['choice_maxsize_display'] = 'Máximo nº de usuarios';
$string['choice_maxsize'] = 'Máximo nº de Adscripciones';
$string['choice_title_help'] = 'Título del Ítem. Nombre que se mostrará a los usuarios. <br/>
Todos los ítems disponibles estarán dispuestos por orden del título.';
$string['choice_title'] = 'Título';
$string['choicestatusheading'] = 'Estado';
$string['create_moodle_groups'] = 'Crear grupos según Ïtems y adscripciones';
$string['create_moodle_groups'] = 'Crear grupos según Ïtems y adscripciones';
$string['deletechoice'] = 'Eliminar Ítem';
$string['distribution_algorithm'] = 'Algoritmo de la Distribución';
$string['distribution_published'] = 'La distribución ha sido publicada.';
$string['distribution_table'] = 'Tabla de Distribución';
$string['download_problem_mps_format'] = 'Descargar ecuación en formato mps (txt)';
$string['download_votetest_allocation'] = 'Descargar valoraciones como CSV';
$string['edit_choice'] = 'Editar Ítem "{$a}"';
$string['edit_rating'] = 'Editar Valoración';
$string['err_required'] = 'Usted necesita proporcionar un valor para este campo.';
$string['export_options'] = 'Exportar ítems';
$string['invalid_publishdate'] = 'La Fecha de publicación no es valida. Debe de ser después del cierre de la fase de ponderación.';
$string['last_algorithm_run_date'] = 'Última ejecución del algoritmo';
$string['last_algorithm_run_status_-1'] = 'Fallo';
$string['last_algorithm_run_status_0'] = 'No iniciado';
$string['last_algorithm_run_status_1'] = 'En ejecución';
$string['last_algorithm_run_status_2'] = 'Éxito';
$string['log_allocation_published'] = 'Adscripción publicada';
$string['log_allocation_table_viewed'] = 'Tabla de adscripciones vista';
$string['log_manual_allocation_saved'] = 'Adscripción manual guardada';
$string['log_rating_saved'] = 'Valoración de usuario guardada';
$string['log_rating_viewed'] = 'Valoración de usuario vista';
$string['manual_allocation'] = 'Adscripción Manual';
$string['manual_allocation_filter_all'] = 'Mostrar todos los usuarios.';
$string['manual_allocation_filter_only_raters'] = 'Mostrar solamente usuarios con valoraciones.';
$string['manual_allocation_form'] = 'Distribución Manual';
$string['manual_allocation_saved'] = 'Su Distribución manual se ha guardado.';
$string['modify_allocation_group'] = 'Modificar Distribución';
$string['modify_allocation_group_desc_ready_alloc_started'] = 'La fase de valoraciones ha terminado. Se han creado algunas adscripciones. <br />
Volver a ejecutar el algoritmo de distribución borrará <strong>todas</strong> las adscripciones existentes. <br />
Puede revisar y modificar la distribución manualmente o proceder a la publicación de las adscripciones.';
$string['modify_allocation_group_desc_too_early'] = 'La fase de ponderación están en curso. Podrá realizar la distribución después de que la fase de ponderación haya terminado.';
$string['modulename'] = 'Adscripción ponderada';
$string['modulenameplural'] = 'Adscripciones ponderadas';
$string['modulename_help'] = 'El modulo de Adscripción ponderada permite distribuir a los usuarios entre una serie de Ítems de forma ponderada,
según sus repuestas a una serie de preguntas y valoraciones de una serie de criterios. <br />
El profesor establece las ítems o elementos elegibles por los usuarios. Y al mismo tiempo define una serie de preguntas y criterios a responder y valorar por los usuarios.
El módulo permite un reparto de los usuarios entre las diferentes ítems, adscribiendo cada uno a un Ítem según sus respuestas, que maximiza la satisfacción (concordancia con las respuestas y valoraciones previas) según un criterio algorítmico.';
$string['moodlegroups_created'] = 'Los Grupos y Agrupamientos correspondientes de Moodle han sido creados.';
$string['newchoice'] = 'Agrega un nuevo Ítem.';
$string['newchoicetitle'] = 'Nueva Opción {$a}';
$string['no_choice_to_rate'] = '¡No hay Ítems para valorar!';
$string['no_rating_given'] = 'no valorada';
$string['no_user_to_allocate'] = 'No hay usuario que pueda asignar';
$string['pluginadministration'] = 'Administración de Adscripción ponderada';
$string['pluginname'] = 'Adscripción ponderada';
$string['publishdate'] = 'Fecha de publicación';
$string['publishdate_estimated'] = 'Fecha de publicación estimada';
$string['publish_allocation'] = 'Publicar adscripciones';
$string['publish_allocation_group'] = 'Publicar distribución de adscripciones';
$string['publish_allocation_group_desc_published'] = 'Las adscripciones han sido publicadas. <br />
Puede crear grupos a partir de los Ítems y la distribución de adscripciones. Si ya se han creado, serán vaciados y repoblados.';
$string['publish_allocation_group_desc_ready_alloc_started'] = 'Las adscripciones pueden ser publicadas. Después de la publicación la distribución no puede ser modificada, ni automática ni manualmente. <br />
Puede revisar la distribución usando el botón "Distribución Manual" o el enlace disponible en el apartado "Informes". <br/>
Puede crear grupos a partir de los Ítems y la distribución de adscripciones. Si ya se han creado, serán vaciados y repoblados.';
$string['publish_allocation_group_desc_ready_alloc_started'] = 'Las adscripciones pueden ser publicadas. Después de la publicación la distribución no puede ser modificada, ni automática ni manualmente. <br />
Puede revisar la distribución usando el botón "Distribución Manual" o el enlace disponible en el apartado "Informes". <br/>
Puede crear grupos a partir de los Ítems y la distribución de adscripciones. Si ya se han creado, serán vaciados y repoblados.';
$string['publish_allocation_group_desc_too_early'] = 'No se han realizado adscripciones todavía. Por favor, revise el apartado "Modificar Distribución".';
$string['rateable_choices'] = 'ítems que se pueden valorar';
$string['rated'] = 'valorado';
$string['rating_begintime'] = 'Inicio de fase de ponderación';
$string['rating_endtime'] = 'Fin de fase de ponderación';
$string['rating_is_over'] = 'La valoración se termino';
$string['rating_raw'] = '{$a}';
$string['ratingallocate:export_ratings'] = 'Exportar valoraciones de usuarios';
$string['ratingallocate:give_rating'] = 'Crear/editar valoraciones propias';
$string['ratingallocate:start_distribution'] = 'Ejecutar distribución automática';
$string['ratingallocate:view'] = 'Ver instancias de Adscripción ponderada';
$string['ratingallocate'] = 'Adscripción ponderada';
$string['ratingallocatename_help'] = 'El contenido de la herramienta de ayuda asociada con el campo de ratingallocatename. La sintaxis \'\'Markdown\'\' está permitida.';
$string['ratingallocatename'] = 'Nombre de esta Adcripción';
$string['ratings_saved'] = 'Sus valoraciones se han guardado.';
$string['ratings_table'] = 'Tabla de valoraciones';
$string['reports_group'] = 'Informes';
$string['results_not_yet_published'] = 'Los resultados aun no se han publicado';
$string['runalgorithmbycron'] = 'Distribución automática tras Fin de ponderaciones';
$string['select_strategy'] = 'Estrategia de ponderación.';
$string['select_strategy_help'] = 'La Estrategia de ponderación determina qué tipo de preguntas se presentarán al usuario para expresar sus preferencias por una u otra opción.
En consecuencia, determina también el algorito usado después en la distribución de usuarios entre las ítems. <br >
Las estrategias disponibles son:

* <strong>Dicotómica Si/No</strong>: El usuario puede ponderar cada opción entre dos valores (Si/No o equivalente).

* <strong>Triestado Si-Quizás-No</strong>: El usuario puede ponderar cada opción entre tres valores (Si/Quizás/No o equivalente).

* <strong>Escala likert</strong>: El usuario puede utilizar una escala múltiple tipo Likert desde "Excluir" hasta "Altamente apreciado".

* <strong>Puntuar numéricamente</strong>: El usuario expresa sus preferencias otorgando unos puntos a cada opción.

* <strong>Ordenar preferencias</strong>: El usuario expresa sus preferencias indicando el orden de prioridad en las ítems.

* <strong>Aceptación expresa</strong>: El usuario marca algunas ítems como aceptables, y otras no.

En todos los casos, las palabras usadas en la redacción de la pregunta se pueden definir en las otras ítems de configuración.
';
$string['show_allocation_statistics'] = 'Mostrar estadísticas de distribución.';
$string['show_table'] = 'Mostrar Tabla';
$string['start_distribution_explanation'] = 'Un algoritmo intentará distribuir automaticamente a los usuarios
de una forma justa según las ponderaciones y preferencias expresadas.';
$string['start_distribution'] = 'Comenzar la distribución automática';
$string['strategy_lickert_max_no'] = 'Puede darle de 0 puntos a un maximo de {$a} Ítems.';
$string['strategy_lickert_name'] = 'Escala likert';
$string['strategy_lickert_rating_biggestwish'] = 'Altamente apreciado';
$string['strategy_lickert_rating_exclude'] = 'Excluir';
$string['strategy_lickert_setting_maxlickert'] = 'Número de niveles Likert (excluyendo 0)';
$string['strategy_lickert_setting_maxno'] = 'Maximo Nº de ítems valorados con 0';
$string['strategy_not_specified'] = 'Debe seleccionar una estrategia';
$string['strategy_order_explain_choices'] = 'Seleccione una opción en cada cuadro de Ítems. El primer Ítem tiene la prioridad mas alta, etc.';
$string['strategy_order_name'] = 'Ordenar preferencias';
$string['strategy_order_no_choice'] = '{$a}. Opción';
$string['strategy_order_setting_countoptions'] = 'Nº de ítems a ordenar';
$string['strategy_order_use_only_once'] = 'Las ítems no pueden ser seleccionadas dos veces y deben ser únicas.';
$string['strategy_points_explain_distribute_points'] = 'Darle puntos a cada opción, Usted tiene un total de {$a} Puntos para distribuir. Debe priorizar la mejor opción con la mayor cantidad de puntos';
$string['strategy_points_explain_max_zero'] = 'Puede darle 0 puntos a como maximo {$a} ítems';
$string['strategy_points_incorrect_totalpoints'] = 'Número incorrecto de puntos. La suma de todos debe ser {$a}';
$string['strategy_points_max_count_zero'] = 'Debe asignarle más de 0 puntos a por lo menos {$a} ítems';
$string['strategy_points_name'] = 'Puntuar numéricamente';
$string['strategy_points_setting_maxzero'] = 'Máximo nº de ítems puntuados con 0';
$string['strategy_points_setting_totalpoints'] = 'Total de puntos otorgables';
$string['strategy_settings_label'] = 'Palabra para';
$string['strategy_tickyes_accept'] = 'Aceptar';
$string['strategy_tickyes_error_mintickyes'] = 'Debe seleccionar al menos {$a} cajas';
$string['strategy_tickyes_explain_mintickyes'] = 'Debe seleccionar un mínimo de {$a} cajas.';
$string['strategy_tickyes_name'] = 'Aceptación expresa';
$string['strategy_tickyes_not_accept'] = '-';
$string['strategy_tickyes_setting_mintickyes'] = 'Nº mínimo de ítems que aceptar';
$string['strategy_yesmaybeno_max_count_no'] = 'Solamente puede elegir No para un maximo de {$a} ítems.';
$string['strategy_yesmaybeno_max_no'] = 'Solamente puede asignar "No" a {$a} ítems';
$string['strategy_yesmaybeno_name'] = 'Triestado Si-Quizás-No';
$string['strategy_yesmaybeno_rating_maybe'] = 'Quizás';
$string['strategy_yesmaybeno_rating_no'] = 'No';
$string['strategy_yesmaybeno_rating_yes'] = 'Si';
$string['strategy_yesmaybeno_setting_maxno'] = 'Maximo nº de rechazos';
$string['strategy_yesno_max_no'] = 'Solamente puede asignarle "No" a {$a} ítems';
$string['strategy_yesno_maximum_crossout'] = 'Usted solamente puede rechazar (asignar "No" o equivalente) a un maximo de {$a} ítems';
$string['strategy_yesno_name'] = 'Dicotómica Si/No';
$string['strategy_yesno_rating_choose'] = 'Si';
$string['strategy_yesno_rating_crossout'] = 'No';
$string['strategy_yesno_setting_crossout'] = 'Maximo nº de rechazos';
$string['strategyname'] = 'La Estrategia es "{$a}"';
$string['strategyoptions_for_strategy'] = 'Opciones para Estrategia "{$a}"';
$string['timeremaining'] = 'Tiempo restante';
$string['too_early_to_distribute'] = 'Demasiado pronto para distribuir';
$string['too_early_to_rate'] = 'Demasiado pronto para calificar';
$string['unassigned_users'] = 'Usuarios sin asignar';
$string['your_allocated_choice'] = 'Su Adscripción';
$string['your_rating'] = 'Su Valoración.';

<?php slot('title') ?>
  Videos
<?php end_slot() ?>

<?php slot('subtitle') ?>
  Lista de Videos
<?php end_slot() ?>

<?php include_component('Crud', 'list', array
      (
        'pager'              => $pager,  
        'uri'                => '@video_list?filter_by=filter_by&filter=filter&order_by=order_by&order=order&max=max&page=page',
                                
        'edit_field'         => 'title_str',
        'filter_fields'      => array
                                (
                                  'title_str'     => 'Nombre'
                                ),
        'columns'            => array
                                (
                                  array('2' , ''              , ''              , ''                ),
                                  array('10', 'code'          , 'C&oacute;digo' , 'getCode'         ),
                                  array('20', 'title_str'     , 'Titulo'        , 'getTitleStr'     ),                                  
                                  array('15', 'category_name' , 'Categoria'     , 'getCategoryName' ),
                                  array('10', 'type'          , 'Formato'       , 'getTypeStr'      ),
                                  array('10', 'time'          , 'Duración'      , 'getTime'         ),
                                  array('10', 'new'           , 'Nuevo'         , 'getNewStr'       ),
                                  array('10', 'live'          , 'En Vivo'       , 'getLiveStr'      ),
                                  array('10', 'created_at'    , 'Fecha Creaci&oacute;n' , 'getFormattedDatetime'    ),
                                  array('6' , 'disable_image' , 'Activo'        , 'getDisableImage', 'center', false),
                                  array('2' , ''              , ''              , 'checkbox'       ),
                                )                                
      ))
?>
<?php slot('title') ?>
  Categorias
<?php end_slot() ?>

<?php slot('subtitle') ?>
  Lista de Categorias
<?php end_slot() ?>

<?php include_component('Crud', 'list', array
      (
        'pager'              => $pager,
        'sort'               => true,
        'sort_uri'           => '@category_sort',  
        'uri'                => '@category_list?filter_by=filter_by&filter=filter&order_by=order_by&order=order&max=max&page=page',
                                
        'edit_field'         => 'name_str',
        'filter_fields'      => array
                                (
                                  'name_str' => 'Nombre',  
                                ),
        'columns'            => array
                                (
                                  array('2' , ''              , ''        , ''               ),
                                  array('30', 'name_str'      , 'Nombre'  , 'getNameStr'        ),
                                  array('30', 'parent_str'    , 'Categoria Padre' , 'getCategoryNames'    ),
                                  array('30', 'created_at'    , 'Fecha Creaci&oacute;n' , 'getFormattedDatetime'    ),
                                  array('6' , 'disable_image' , 'Activo'  , 'getDisableImage', 'center', false),
                                  array('2' , ''              , ''        , 'checkbox'       ),
                                )                                
      ))
?>
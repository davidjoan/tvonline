<?php $menus = Doctrine::getTable('Category')->getMenu($sf_user->getCulture()); ?>
<script>
    function changeCategory(id)
    {
        $.ajax
        ({
            url:      '/load/category/'+id,
            type:     "GET",
            success:  function(feedback)
            {
                $('#videos').empty();
                $('#videos').html(feedback);
            },
            error:    function()
            {
            }
        });
        
        
    }
</script>
<div id="colorinchis">
    <?php foreach ($menus as $key => $menu): ?>
        <div class="txtfdocolor<?php echo $key + 1; ?>">
            <?php echo link_to_function($menu->Translation[$sf_user->getCulture()]->name, 'changeCategory("' . $menu->getId() . '")'); ?>
        </div>
    <?php endforeach; ?>
</div>
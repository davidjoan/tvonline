<div id="header">
    <div id="banderas" class="izquierda"> 
        <?php echo link_to(image_tag('frontend/banderitas_03.jpg', array('border' => 0, 'width' => 23, 'height' => 15)), '@homepage?sf_culture=es', array('title' => 'Peru TV online')) ?>&nbsp;&nbsp;
        <?php echo link_to(image_tag('frontend/banderitas_05.jpg', array('border' => 0, 'width' => 23, 'height' => 15)), '@homepage?sf_culture=en', array('title' => 'Peru TV online')) ?>&nbsp;&nbsp;
        <?php echo link_to(image_tag('frontend/banderitas_07.jpg', array('border' => 0, 'width' => 23, 'height' => 15)), '@homepage?sf_culture=pt', array('title' => 'Peru TV online')) ?>
    </div>
    <div id="logo" class="izquierda">
        <?php echo link_to(image_tag('frontend/logo',array('border' => 0, 'width' => 380, 'height' => 66, 'alt' => 'Perú TV Online' )), '@homepage?sf_culture='.$sf_user->getCulture());?>
    </div>
</div>


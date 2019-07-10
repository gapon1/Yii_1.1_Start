<?php



    $script = "
     $('p').on('click', function(){
     $('.showMassage').toggle();
     })
    ";
Yii::app()->clientScript->registerScript('helloscript',$script,CClientScript::POS_READY);

?>


<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. excepturi expedita facere facilis fuga illum labore laboriosam maiores, modi odio odit officiis placeat praesentium quas quia quod saepe vel vero voluptas. Ab debitis laborum quaerat ratione soluta. Labore, possimus, praesentium.</p>

<div class="showMassage" style="display:none">
    <?php
    foreach (Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-'.$key.'">'.$message."</div>\n";
    }
    ?>
</div>
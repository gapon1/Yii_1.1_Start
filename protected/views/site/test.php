<?php

    $script = "
     $('p').on('click', function(){
     $('.showMassage').toggle();
     })
    ";

Yii::app()->clientScript->registerScript('helloscript',$script,CClientScript::POS_READY);


echo "This is test 88";

?>


<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam asperiores autem blanditiis corporis delectus deleniti earum error eum excepturi expedita facere facilis fuga illum labore laboriosam maiores, modi odio odit officiis placeat praesentium quas quia quod saepe vel vero voluptas. Ab debitis laborum quaerat ratione soluta. Labore, possimus, praesentium.</p>

<div class="showMassage" style="display:none">
    <?php

    foreach (Yii::app()->user->getFlashes() as $key => $message) {
        echo '<div class="flash-'.$key.'">'.$message."</div>\n";
    }
    ?>
</div>
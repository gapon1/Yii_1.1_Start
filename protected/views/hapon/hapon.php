<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<button class="btn btn-success">send</button>

<div>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet doloremque ipsam libero tempore veniam! Alias
    aperiam consectetur facilis. Et, repudiandae.
</div>

<?php
$this->widget(
    'zii.widgets.jui.CJuiDatePicker',
    array(
        'name' => 'datepicker',
        // additional javascript options for the date picker plugin
        'options' => array(
            'showAnim' => 'slide',//'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
        ),
        'htmlOptions' => array(
            'style' => 'height:20px;background-color:green;color:white;',
        ),
    )
);
?>


</body>
</html>
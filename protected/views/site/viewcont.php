<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.lazyloadxt.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.lazyloadxt.script.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.lazyloadxt.srcset.js"></script>
    <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/test.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>

<div class="card__thumbnail">
    <img class="card__img lazy" data-src="../../../requirements/image/botstrap4.jpeg" alt="test">
</div>



<?php foreach ($model as $item) : ?>
<div class="card">
    <img class="card-img-top" src="../../../requirements/image/<?= $item['image']?>" alt="Card image cap">
    <div class="card-body">
        <p><?= $item['id']?></p>
        <h5 class="card-title"><?= $item['title']?></h5>
        <p class="card-text"><?= $item['description']?></p>
        <a href="#" class="btn btn-primary"><?= $item['date']?></a>
    </div>
</div>
    <br/>
<?php endforeach; ?>




</body>
</html>

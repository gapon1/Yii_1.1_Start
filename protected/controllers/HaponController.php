<?php


class HaponController extends CController
{

    public function actionIndex()
    {
        $this->render('hapon');

    }

    public function actionTest()
    {
        $this->render('test');
    }

}
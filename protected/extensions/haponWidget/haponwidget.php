<?php

class haponwidget extends CWidget
{
    public function run()
    {
        $hapon= TblContent::model()->findAll(array(
            'select' => 'id, title, description, image, date',
        ));

        $this->render('haponwidget_view',
            ['test' => $hapon]
        );
    }

}
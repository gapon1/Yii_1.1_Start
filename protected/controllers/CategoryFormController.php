<?php


class CategoryFormController extends CController
{

    public function actionIndex()
    {
        print  "test category";
    }

    public function actionCategoryform()
    {
        $model=new Category;

        // uncomment the following code to enable ajax-based validation
        /*
        if(isset($_POST['ajax']) && $_POST['ajax']==='category-categoryform-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
        */

        if(isset($_POST['Category']))
        {
            $model->attributes=$_POST['Category'];
            if($model->validate())
            {
                // form inputs are valid, do something here
                Yii::app()->user->setFlash('category_form','Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('categoryform',array('model'=>$model));
    }
}
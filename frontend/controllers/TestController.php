<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Test;
use Yii;

class TestController extends Controller {

    //put your code here
    public function actionIndex() {
        // $max = Yii::$app->params['maxNewsInList'];
        $list = Test::getNewList();

        return $this->render('index', [
                    'list' => $list,
        ]);
    }

    public function actionView($id) {
        $item = Test::getItem($id);

        return $this->render('view', [
            'item' => $item,
        ]);
    }
    
    public function actionMail() {
        $result = Yii::$app->mailer->compose()
                ->setFrom('dmkaspar68@gmail.com')
                ->setTo('dmkaspar68@gmail.com')
                ->setSubject('theme_message')
                ->setTextBody('tex_message')
                ->setHtmlBody('text_HTML')
                ->send();
        var_dump($result);die();
        
    }

}

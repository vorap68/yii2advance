<?php


namespace frontend\models;

use Yii;
use frontend\components\StringHelper;
/**
 * Description of Test
 *
 * @author dimon
 */
class Test {
    
    /**
     * @param integer
     * @return array
     */
    public static function getNewList() {
       
        $sql ='SELECT * FROM news ';
       // echo $sql;
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        $helper = new StringHelper;
        if(!empty($result) && is_array($result)){
        foreach ($result as &$item){
            $item['content'] = $helper->getShort( $item['content'],30);
        }
        }
        return $result;
    }
    
    public static function getItem($id){
        $id = intval($id);
        $sql = "SELECT * FROM news WHERE id=$id";
        $result = Yii::$app->db->createCommand($sql)->queryOne();
        return $result;
        
    }
    
}
 
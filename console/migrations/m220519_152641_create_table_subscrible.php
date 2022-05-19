<?php

use yii\db\Migration;

/**
 * Class m220519_152641_create_table_subscrible
 */
class m220519_152641_create_table_subscrible extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $sql = "CREATE TABLE subscrible (id INT(11) AUTO_INCREMENT PRIMARY KEY ,email VARCHAR(255) UNIQUE )";
        Yii::$app->db->createCommand($sql)->execute();
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $sql = "DROP TABLE subscrible";
        Yii::$app->db->createCommand($sql)->execute();
    }

   
}

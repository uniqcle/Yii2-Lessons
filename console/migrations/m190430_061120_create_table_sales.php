<?php

use yii\db\Migration;

/**
 * Class m190430_061120_create_table_sales
 */
class m190430_061120_create_table_sales extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('sale', [
            'id'=>$this->integer().' AUTO_INCREMENT PRIMARY KEY',
            'date'=>$this->date(),
            'value'=>$this->float()->defaultValue(0)
        ]);

 
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('sale');
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190430_061120_create_table_sales cannot be reverted.\n";

        return false;
    }
    */
}

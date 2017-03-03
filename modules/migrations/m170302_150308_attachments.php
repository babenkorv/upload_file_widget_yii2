<?php

use yii\db\Migration;

class m170302_150308_attachments extends Migration
{
    public function up()
    {
        $this->createTable('attachment', [
            'id' => $this->primaryKey(),
            'link_on_file' => $this->string(60)->notNull(),
            'size' => $this->integer()->notNull(),
            'mime_type' => $this->string(20)->notNull(),
        ]);
    }

    public function down()
    {
        echo "m170302_150308_attachments cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}

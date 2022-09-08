<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%candidates}}`.
 */
class m220907_094805_create_candidates_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('candidates', [
            'id' => $this->primaryKey(),
            'fullname' => $this->string(255)->unique()->notNull(),
            'address' => $this->string(255)->notNull(),
            'email' => $this->string(255)->unique()->NotNull(),
            'images' => $this->string(255)->null(),
            'website_link' => $this->string(255)->notNull(),
            'phone' => $this->string(255)->notNull(),
            'school' => $this->string(255)->notNull(),
            'university' => $this->string(255)->notNull(),
            'degree' => $this->string(255)->notNull(),
            'experience_title' => $this->string(255)->notNull(),
            'company' => $this->string(255)->notNull(),
            'from_year' => $this->dateTime()->notNull(),
            'to_year' => $this->dateTime()->notNull(),
            'skill_first' => $this->string(255)->notNull(),
            'skill_second' => $this->string(255)->notNull(),
            'skill_third' => $this->string(255)->notNull(),
            'telegram_link' => $this->string(255)->null(),
            'instagram_link' => $this->string(255)->null(),
            'facebook_link' => $this->string(255)->null(),
            'tweetter_link' => $this->string(255)->null(),
            'status' => $this->integer()->defaultValue(1) ,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('candidates');
    }
}

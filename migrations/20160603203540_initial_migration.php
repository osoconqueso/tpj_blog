<?php

use Phinx\Migration\AbstractMigration;

class InitialMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function up()
    {

        $article = $this->table('article');
        $article->addColumn('title', 'string', array('limit' => 255))
            ->addColumn('author', 'string', array('limit' => 255))
            ->addColumn('img_url', 'text')
            ->addColumn('ext_url', 'text')
            ->addColumn('content', 'text')
            ->addColumn('date_updated', 'timestamp', array('default' => 'CURRENT_TIMESTAMP'))
            ->addColumn('date_created', 'datetime')
            ->save();

        $label = $this->table('label');
        $label->addColumn('label_name', 'string', array('limit' => 25))
            ->save();

        $articleLabel = $this->table('article_label');
        $articleLabel->addColumn('article_id', 'integer')
            ->addColumn('label_id', 'integer')
            ->save();
    }
}
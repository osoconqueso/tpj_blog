<?php

use Phinx\Migration\AbstractMigration;

class InsertLabels extends AbstractMigration
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
        $rows = [
            [
                'label_name'  => 'press releases'
            ],
            [
                'label_name'  => 'Ken Paxton'
            ],
            [
                'label_name'  => 'lobby watch'
            ],
            [
                'label_name'  => 'ethics complaints'
            ],
            [
                'label_name'  => 'Greg Abbott'
            ],
            ];

        $this->insert('label', $rows);

        $label_rows = [
            [
                'article_id'    => 2,
                'label_id'  => 1
            ],[
                'article_id'    => 2,
                'label_id'  => 2
            ],[
                'article_id'    => 3,
                'label_id'  => 2
            ],[
                'article_id'    => 4,
                'label_id'  => 2
            ],
            [
                'article_id'    => 4,
                'label_id'  => 3
            ],
            [
                'article_id'    => 5,
                'label_id'  => 2
            ],
        ];

            $this->insert('article_label', $label_rows);
    }

    public function down()
    {
//        $this->execute("truncate label");
//        $this->execute("truncate article_label");
    }
}

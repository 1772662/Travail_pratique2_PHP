<?php
use Migrations\AbstractMigration;

class VillPays extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
     public $autoId = false;

       public function up()
       {

            $this->table('pays')
               ->addColumn('id', 'integer', [
                   'autoIncrement' => true,
                   'default' => null,
                   'limit' => 10,
                   'null' => false,
                   'signed' => false,
               ])
               ->addPrimaryKey(['id'])
               ->addColumn('name', 'string', [
                   'default' => null,
                   'limit' => 60,
                   'null' => true,
               ])
               ->create();

           $this->table('villes')
               ->addColumn('id', 'integer', [
                   'autoIncrement' => true,
                   'default' => null,
                   'limit' => 10,
                   'null' => false,
                   'signed' => false,
               ])
               ->addPrimaryKey(['id'])
               ->addColumn('pays_id', 'integer', [
                   'default' => null,
                   'limit' => 10,
                   'null' => true,
                   'signed' => false,
               ])
               ->addColumn('name', 'string', [
                   'default' => null,
                   'limit' => 60,
                   'null' => true,
               ])
               ->create();
       }

       public function down()
       {
           $this->dropTable('pays');
           $this->dropTable('villes');
       }

}

<?php
use Migrations\AbstractMigration;

class Classification extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change() {

        // create the table
        $table = $this->table('classification');
        $table->addColumn('name', 'string', ['limit' => 200])
                ->addColumn('created', 'datetime')
                ->addColumn('modified', 'datetime')
                ->create();
    }
}

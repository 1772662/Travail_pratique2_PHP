<?php
use Migrations\AbstractSeed;

/**
 * Files seed.
 */
class FilesSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'id' => '3',
                'name' => 'hotelSheraton.jpg',
                'path' => 'Files/',
                'created' => '2019-10-08 17:28:51',
                'modified' => '2019-10-08 17:28:51',
                'status' => '1',
            ],
            [
                'id' => '4',
                'name' => 'hotelDubai.jpeg',
                'path' => 'Files/',
                'created' => '2019-10-09 16:17:54',
                'modified' => '2019-10-09 16:17:54',
                'status' => '1',
            ],
        ];

        $table = $this->table('files');
        $table->insert($data)->save();
    }
}

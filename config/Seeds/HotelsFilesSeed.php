<?php
use Migrations\AbstractSeed;

/**
 * HotelsFiles seed.
 */
class HotelsFilesSeed extends AbstractSeed
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
                'id' => '1',
                'hotel_id' => '5',
                'file_id' => '4',
            ],
            [
                'id' => '2',
                'hotel_id' => '6',
                'file_id' => '4',
            ],
        ];

        $table = $this->table('hotels_files');
        $table->insert($data)->save();
    }
}

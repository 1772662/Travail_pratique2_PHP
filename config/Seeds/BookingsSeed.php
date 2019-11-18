<?php
use Migrations\AbstractSeed;

/**
 * Bookings seed.
 */
class BookingsSeed extends AbstractSeed
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
                'user_id' => '20',
                'date_debut_sejour' => '2019-05-02',
                'date_fin_sejour' => '2019-05-09',
                'created' => '2019-10-11 04:03:37',
                'modified' => '2019-10-11 04:03:37',
            ],
        ];

        $table = $this->table('bookings');
        $table->insert($data)->save();
    }
}

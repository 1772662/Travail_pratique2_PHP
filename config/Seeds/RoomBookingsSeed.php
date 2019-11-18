<?php
use Migrations\AbstractSeed;

/**
 * RoomBookings seed.
 */
class RoomBookingsSeed extends AbstractSeed
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
                'booking_id' => '1',
                'hotel_id' => '4',
                'number_room' => '4',
                'room_type' => 'Lit simple',
                'created' => '2019-10-11 04:04:12',
                'modified' => '2019-10-11 04:04:12',
            ],
        ];

        $table = $this->table('room_bookings');
        $table->insert($data)->save();
    }
}

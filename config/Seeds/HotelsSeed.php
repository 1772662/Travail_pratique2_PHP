<?php
use Migrations\AbstractSeed;

/**
 * Hotels seed.
 */
class HotelsSeed extends AbstractSeed
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
                'id' => '4',
                'hotel_name' => 'Sheraton Hotels & Resorts',
                'hotel_address' => '2440 Autoroute des Laurentides, Laval, QC',
                'hotel_postcode' => 'H7T 1X5',
                'url' => 'https://www.marriott.com/hotels/travel/yulls-sheraton-laval-hotel/?scid=bb1a189a-fec3-4d19-a255-54ba596febe2',
                'created' => '2019-10-06 18:05:51',
                'modified' => '2019-10-06 18:05:51',
            ],
            [
                'id' => '5',
                'hotel_name' => 'Le St-Martin Hotel & Suites',
                'hotel_address' => '1400 Rue Maurice-Gauvin, Laval, QC',
                'hotel_postcode' => 'H7S 2P1',
                'url' => 'https://lestmartinlaval.com/fr/',
                'created' => '2019-10-06 18:08:15',
                'modified' => '2019-10-06 18:08:15',
            ],
            [
                'id' => '6',
                'hotel_name' => 'Sheraton Hotels LAVAL',
                'hotel_address' => '2440 Autoroute des Laurentides, Laval, QC',
                'hotel_postcode' => 'H7T 1X5',
                'url' => 'https://www.marriott.com/hotels/travel/yulls-sheraton-laval-hotel/?scid=bb1a189a-fec3-4d19-a255-54ba596febe2',
                'created' => '2019-10-11 03:05:49',
                'modified' => '2019-10-11 03:05:49',
            ],
        ];

        $table = $this->table('hotels');
        $table->insert($data)->save();
    }
}

<?php
use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
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
                'id' => '19',
                'username' => 'Caramel Ola',
                'role' => '',
                'address' => '9863 rue laval',
                'phone' => '(438) 221-7654',
                'email' => 'caramelola@gmail.com',
                'password' => '$2y$10$ovG8iuMY2lo0CM0.Qs.umOFpZWrrEQ85e8raJuKPqYfPmtPv5HH72',
                'created' => '2019-10-06 22:24:54',
                'modified' => '2019-10-06 22:24:54',
            ],
            [
                'id' => '20',
                'username' => 'Amina Atm',
                'role' => '',
                'address' => '9 rue Saint-Hubert',
                'phone' => '(514) 123-7772',
                'email' => 'aminaatm16@gmail.com',
                'password' => '$2y$10$Yo3YA4haPjK7lxTfWLfz8u42WFrOnEOCa6hBCGFzsFY3KSQrEgPTq',
                'created' => '2019-10-06 22:27:55',
                'modified' => '2019-10-06 22:27:55',
            ],
            [
                'id' => '21',
                'username' => 'admin ad',
                'role' => '',
                'address' => '78 rue Saint-Francois,Laval,QC',
                'phone' => '(438) 779-9012',
                'email' => 'admin.ad@gmail.com',
                'password' => '$2y$10$aCel60siP8eyGYXNEs9fvO8ezrQpr7NY6LavRwa67lbHkmw1okxc2',
                'created' => '2019-10-06 22:40:33',
                'modified' => '2019-10-06 22:43:58',
            ],
            [
                'id' => '22',
                'username' => 'Charlottee',
                'role' => '',
                'address' => '9 rue Saint-Hubert',
                'phone' => '(438) 123-0967',
                'email' => 'charlotte@gmail.com',
                'password' => '$2y$10$Wg0kduiikycX6icebvvQLOyGE33ZE2BLPJq73tyMUkoQnW50OSWoi',
                'created' => '2019-10-07 12:21:59',
                'modified' => '2019-10-07 12:26:59',
            ],
            [
                'id' => '24',
                'username' => 'Amina At',
                'role' => '',
                'address' => '9801 rue Saint-Leonard,Montreal,QC',
                'phone' => '(438) 779-1111',
                'email' => 'amina.atmane@hotmail.com',
                'password' => '$2y$10$dIycwDkNQlESzWI.WjzIxuKTrQYWivgpgP6OGoeB4aORdU.jjWnAC',
                'created' => '2019-10-08 13:27:47',
                'modified' => '2019-10-08 13:30:37',
            ],
            [
                'id' => '25',
                'username' => 'amina2',
                'role' => 'admin',
                'address' => '9863 rue laval',
                'phone' => '(438) 779-1111',
                'email' => 'amina2@hotmail.com',
                'password' => '$2y$10$B7sEkeAIuxpIrDy7q19RAOZ0/fJ.nxgQmcnH2D0LHzisCprkJYOPm',
                'created' => '2019-10-11 03:04:27',
                'modified' => '2019-10-11 03:04:27',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}

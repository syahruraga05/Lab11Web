<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
        $model->insert([
            'username' => 'syahru',
            'usermail' => 'syahruragaramdhani@gmail.com',
            'userpassword' => password_hash('kepodih', PASSWORD_DEFAULT),
        ]);
    }
}

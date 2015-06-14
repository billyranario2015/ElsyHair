<?php

    use Illuminate\Database\Seeder;
    use Illuminate\Database\Eloquent\Model;
     
    use App\User;

    class UserTableSeeder extends Seeder{

        public function run()
        {

            $now = date('Y-m-d H:i:s');

            $users = array(
                [
                    'username'      => 'codegap',
                    'role_id'       => '10',
                    'name'          => 'Web Admin',
                    'email'         => 'info@codegap.co.uk',
                    'password'      => Hash::make('pa55w0rd'),
                    'created_at'    => $now,
                    'updated_at'    => $now,
                    
                ],
                [
                    'username'      => 'codegapmod',
                    'role_id'       => '5',
                    'name'          => 'Moderator',
                    'email'         => 'default@codegap.co.uk',
                    'password'      => Hash::make('pa55word'),
                    'created_at'    => $now,
                    'updated_at'    => $now,
                    
                ],
                [
                    'username'      => 'codegapuser',
                    'role_id'       => '1',
                    'name'          => 'User',
                    'email'         => 'user@codegap.co.uk',
                    'password'      => Hash::make('pa55w0rd'),
                    'created_at'    => $now,
                    'updated_at'    => $now,
                    
                ]
            );
            User::insert($users);
        }
    }
?>
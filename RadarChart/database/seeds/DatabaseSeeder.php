<?php
use app\Models\Users;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->updateOrInsert(
            [
            	'email' => 'linhnn1@kaopiz.com',
                'name' => 'admin',
                'password' => bcrypt('12345678'),
            ]);
       	DB::table('users')->updateOrInsert(
            [
            	'email' => 'ngoclinh11021998.hmh@gmail.com',
                'name' => 'Linh',
                'password' => bcrypt('12345678'),
            ]);
    }
}

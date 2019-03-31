<?php

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
        $this->call(UserSheed::class);
    }
}

class UserSheed extends Seeder
{
	public function run(){
		DB::table('users')->insert([
			['name'=>'Ngan','email'=>str_random(10).'@gmail.com','password'=>bcrypt("hello")],
			['name'=>'Lam','email'=>str_random(10).'@gmail.com','password'=>bcrypt("hello")],
			['name'=>'Phuong','email'=>str_random(10).'@gmail.com','password'=>bcrypt("hello")],
			['name'=>'Hong','email'=>str_random(10).'@gmail.com','password'=>bcrypt("hello")]
		]);
	}
}
<?php

use Illuminate\Database\Seeder;
use App\PostUser;
class PostUserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pu = new PostUser();
        $pu->user_id = '4';
        $pu->post_id = '1';
        $pu->save();

        $pu = new PostUser();
        $pu->user_id = '4';
        $pu->post_id = '3';
        $pu->save();
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Post;

class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post();
        $post->title = 'Prueba1';
        $post->excerpt = 'Este es el primer post';
        $post->body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non eros nec quam facilisis vulputate id quis augue. Donec faucibus dignissim lobortis. Donec scelerisque elementum tellus, et eleifend ligula tempor sed. Aliquam erat volutpat. Aliquam fermentum mattis maximus. Nam consequat luctus nulla, et tempus lectus sollicitudin rhoncus. Aliquam erat volutpat. Duis ut luctus sapien. Nam et lobortis sapien, et gravida magna. Nunc convallis dapibus sem at suscipit. Quisque at mollis justo, at tincidunt massa. Proin a lacinia massa. Duis commodo ut est sed vestibulum. Nullam euismod elementum pharetra.a';
        $post->user_id = '3';
        $post->category_id = '1';
        $post->grade_id = '2';
        $post->save();

        $post = new Post();
        $post->title = 'Prueba2';
        $post->excerpt = 'Este es el segundo post';
        $post->body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non eros nec quam facilisis vulputate id quis augue. Donec faucibus dignissim lobortis. Donec scelerisque elementum tellus, et eleifend ligula tempor sed. Aliquam erat volutpat. Aliquam fermentum mattis maximus. Nam consequat luctus nulla, et tempus lectus sollicitudin rhoncus. Aliquam erat volutpat. Duis ut luctus sapien. Nam et lobortis sapien, et gravida magna. Nunc convallis dapibus sem at suscipit. Quisque at mollis justo, at tincidunt massa. Proin a lacinia massa. Duis commodo ut est sed vestibulum. Nullam euismod elementum pharetra. ';
        $post->user_id = '3';
        $post->category_id = '4';
        $post->grade_id = '3';
        $post->save();

        $post = new Post();
        $post->title = 'Prueba3';
        $post->excerpt = 'Este es el tercer post';
        $post->body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non eros nec quam facilisis vulputate id quis augue. Donec faucibus dignissim lobortis. Donec scelerisque elementum tellus, et eleifend ligula tempor sed. Aliquam erat volutpat. Aliquam fermentum mattis maximus. Nam consequat luctus nulla, et tempus lectus sollicitudin rhoncus. Aliquam erat volutpat. Duis ut luctus sapien. Nam et lobortis sapien, et gravida magna. Nunc convallis dapibus sem at suscipit. Quisque at mollis justo, at tincidunt massa. Proin a lacinia massa. Duis commodo ut est sed vestibulum. Nullam euismod elementum pharetra. ';
        $post->user_id = '3';
        $post->category_id = '2';
        $post->grade_id = '1';
        $post->save();
    }
}

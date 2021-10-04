<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

use \Hillel\Models\Category;
use \Hillel\Models\Tag;
use \Hillel\Models\Post;

//$categories = [];
//for($i =1 ; $i <=5; $i++) {
//    $categories[] = [
//        'title' => 'Category' . $i,
//        'slug' => 'Categor-'. $i,
//        'created_at' => date('Y-m-d H:i:s'),
//        'updated_at' => date('Y-m-d H:i:s')
//    ];
//}
//Category::insert($categories);
//
//$tags = [];
//for ($i = 1; $i <= 10; $i++) {
//    $tags[] = [
//        'title' => 'Tag' . $i,
//        'slug' => 'Tag-' . $i,
//        'created_at' => date('Y-m-d H:i:s'),
//        'updated_at' => date('Y-m-d H:i:s')
//    ];
//}
//Tag::insert($tags);
//
//$categories = Category::all();
//$posts = [];
//for ($i = 1; $i <= 10; $i++) {
//    $posts[] = [
//        'title' => 'Post' . $i,
//        'slug' => 'Post-' . $i,
//        'body' => 'Post-body' . $i,
//        'category_id' => $categories->random()->id,
//        'created_at' => date('Y-m-d H:i:s'),
//        'updated_at' => date('Y-m-d H:i:s')
//    ];
//}
//Post::insert($posts);
//
//$posts = Post::all();
//$tags = Tag::all();
//foreach ($posts as $post) {
//    $tagsIds = $tags->pluck('id')->random(3);
//    $post->tags()->sync($tagsIds);
//}

//$data = Post::find(1);
//foreach($data->tags as $d) {
//    echo $d->title;
//}
//var_dump($data->tags()->pluck('id')->toArray());
//$post = Post::where('id',1)->leftJoin('post_tags', 'posts.id', '=', 'post_tags.post_id')->get();
//    ->get();
//var_dump($post);
//echo $post;
//$game = Game::where('id',1)->with('platforms')->get();

//$categories = Category::table('categories')
//    ->leftJoin('posts', 'category.id', '=', 'id')
//    ->get();

///** @var $blade \Illuminate\View\Factory */
//echo $blade->make('categories.index', ['categories' => $categories])->render();

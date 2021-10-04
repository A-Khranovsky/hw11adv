<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

use \Hillel\Models\Category;
use \Hillel\Models\Tag;
use \Hillel\Models\Post;

//To fill DB uncomment under
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


/** @var $blade \Illuminate\View\Factory */
echo $blade->make('pages.home', ['title' => 'Sandbox DB'])->render();

<?php

require_once '../../vendor/autoload.php';
require_once '../../config/eloquent.php';
require_once '../../config/blade.php';

$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!isset($_POST['id'])) {
        \Hillel\Models\Category::create([
            'title' => $_POST['title'],
            'slug' => $_POST['slug'],
        ]);
    } else {
        $category = \Hillel\Models\Category::find($_POST['id']);
        $category->update([
            'title' => $_POST['title'],
            'slug' => $_POST['slug'],
        ]);
    }

    header('Location: /categories');
}

if (!empty($_GET['id'])) {
    $data['category'] = \Hillel\Models\Category::find($_GET['id']);
    $post = \Hillel\Models\Post::where('category_id',1)->get();
    $selected_posts = \Hillel\Models\Post::where('category_id','=',$_GET['id'])->get();
    $data['selected_posts'] = $selected_posts->pluck('id')->toArray();
}

$data['posts'] = \Hillel\Models\Post::All();
/** @var $blade \Illuminate\View\Factory */
echo $blade->make('categories.form', $data)->render();

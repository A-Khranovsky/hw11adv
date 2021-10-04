<?php

require_once '../../vendor/autoload.php';
require_once '../../config/eloquent.php';
require_once '../../config/blade.php';

$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!isset($_POST['id'])) {
        \Hillel\Models\Post::create([
            'title' => $_POST['title'],
            'slug' => $_POST['slug'],
            'body' => $_POST['body'],
            'category_id' => array_shift($_POST['Categories'])
        ]);
    } else {
        $posts = \Hillel\Models\Post::find($_POST['id']);
        $posts->update([
            'title' => $_POST['title'],
            'slug' => $_POST['slug'],
            'body' => $_POST['body'],
            'category_id' => array_shift($_POST['Categories'])
        ]);
    }

    header('Location: /posts');
}

if (!empty($_GET['id'])) {
    $data['post'] = \Hillel\Models\Post::find($_GET['id']);
}

$data['categories'] = \Hillel\Models\Category::All();

/** @var $blade \Illuminate\View\Factory */
echo $blade->make('posts.form', $data)->render();

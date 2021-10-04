<?php

require_once '../../vendor/autoload.php';
require_once '../../config/eloquent.php';
require_once '../../config/blade.php';

$data = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!isset($_POST['id'])) {
        $post = \Hillel\Models\Post::create([
            'title' => $_POST['title'],
            'slug' => $_POST['slug'],
            'body' => $_POST['body'],
            'category_id' => array_shift($_POST['Categories'])
        ]);
        $post->tags()->sync($_POST['Tags']);
    } else {
        $post = \Hillel\Models\Post::find($_POST['id']);
        $post->update([
            'title' => $_POST['title'],
            'slug' => $_POST['slug'],
            'body' => $_POST['body'],
            'category_id' => array_shift($_POST['Categories'])
        ]);
        $post->tags()->sync($_POST['Tags']);
    }

    header('Location: /posts');
}

if (!empty($_GET['id'])) {
    $data['post'] = \Hillel\Models\Post::find($_GET['id']);
    foreach ($data['post']->tags as $tag){
        $data['tags_selected'][] = $tag->id;
    }
}

$data['categories'] = \Hillel\Models\Category::All();
$data['tags'] = \Hillel\Models\Tag::All();
/** @var $blade \Illuminate\View\Factory */
echo $blade->make('posts.form', $data)->render();

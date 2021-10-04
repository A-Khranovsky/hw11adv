<?php

require_once '../vendor/autoload.php';
require_once '../config/eloquent.php';
require_once '../config/blade.php';

use \Hillel\Models\Post;


$posts = Post::all();

/** @var $blade \Illuminate\View\Factory */
echo $blade->make('categories.posts', [])->render();

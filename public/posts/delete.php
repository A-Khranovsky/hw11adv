<?php

require_once '../../vendor/autoload.php';
require_once '../../config/eloquent.php';
require_once '../../config/blade.php';

$posts = \Hillel\Models\Post::find($_GET['id']);
$posts->delete();

header('Location: /posts');
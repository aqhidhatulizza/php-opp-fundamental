<?php

//Require psr-0 autoloader
require'autoload.php';

//Work with the RSS implementation of PostRepositoryInterface
$postRepository = new Acme\App\Repositories\PostRssRepository();
$posts = $postRepository->All();
echo'<ul>';
foreach($post as $post) {
    echo'<li>' . $post->title. '</li>';
}
echo '</ul>';
$postrepository->find(2);
echo '<h1>' . $post->titl .'</h1>';
echo'<p>' .$post->body .'</p>';
//  Work with the json implementation of PostrepositoryInterface
$posts = $potstrepository->All();
echo'<ul>';
foreach($post as $post){
    echo '<li>' . $post->title. '</li>';
}
echo'</ul>';
$post = $postrepository->find(2);
echo '<h1>' . $post->title. '</h1>';
echo'<p>'. $post->body. '</p>';
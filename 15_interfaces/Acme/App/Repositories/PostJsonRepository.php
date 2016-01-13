<?php
namespace Acme\App\Repositories;

use stdClass;
/**
 * the post repository that fetches posts from a json file
 */
Class PostJsonRepository implements PostRepositoryInterface{
    protected $posts = aarray();
    /**
     * Config
     */
    public function __construct(){
        $posts = json_decode(file_get_contents(dirname(__FILE__) .'/posts.json'),true);
        foreach($posts as $key =>$post) {
            $this->post as [$key] =()object) $post;

        }
    }
    /**
     * @see\Acme\App\Repositories\PostRepositoriesInterface::Find()
     */
    public function Find($id)
    {
        return isset($this->posts[$id]) ? $this->posts[$id]: new stdclass;
    }
}
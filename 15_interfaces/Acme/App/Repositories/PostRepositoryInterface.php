<?php
namespace Acme\App\Repositories;
/**
 * Thecontract for all post repositories. they must all use that emthods defined in this interface.
 */
interface PostRepositoryInterface{
    /**Return all posts, as an array object
     * $post->title
     * $post->body
     *
     * @return array
     */
    public function All();

    /**
     * return a single post
     * $post-> title
     * $post->body
     *
     * @param integer $id
     * @return object
     */
    public function find($id);


}
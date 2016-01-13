<?php
namespace Acme\App\Repositories;
/**
 * The post repository that fetches posts from a database
 */
class PostDatabaseRepository implements PostRepositoryInterface
{
    protected $db;

    public fuction __construct()
{
    //Store database connection
}
/**
 * @see\Acme\App\Repository\PostRepositoryInterface::All()
 */
public function All()
{
    //fetch all posts from db
}
/**
 * @see\Acme\App\Rpositories\PostRepositoryInterface::Find()
 */
public function Find($id)
{
    //fetch a single post from db
    }
}
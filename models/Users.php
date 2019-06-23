<?php
class Users extends Queries
{
    private $id;

    // public function __construct($id)
    // {
    //     $this->id = $id;
    // }

    public function get()
    {
        $users = $this->findAll('users');
        return $users;
    }

    public function showById($id)
    {
        $users = $this->findBy('users', 'id', $id);
        return $users;
    }

    public function create()
    {
        //method to create
        $create = $this->insert([
            'name', 'email', 'password', 'role'
        ], [
            'shola', 'abcs@gmail.com', 'jjjss', 'user'
        ], 'users');
    }
}

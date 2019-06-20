<?php
class Venues extends Queries
{
    private $id;

    // public function __construct($id)
    // {
    //     $this->id = $id;
    // }

    public function get()
    {
        $venues = $this->findAll('venues');
        return $venues;
    }

    public function showById($id)
    {
        $venues = $this->findBy('venues', 'id', $id);
        return $venues;
    }

    public function create()
    {
        //method to create
        $create = $this->insert([
            'venue',
        ], [
            'lt018',
        ], 'venues');
    }
}

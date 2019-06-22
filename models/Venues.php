<?php
class Venues extends Queries
{


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

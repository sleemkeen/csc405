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

    public function create($venue)
    {
        //method to create
        $create = $this->insert([
            'venue',
        ], [
            $venue,
        ], 'venues');

        return $create;
    }
}

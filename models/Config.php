<?php
class Config extends Queries
{


    public function get()
    {
        $config = $this->findAll('rules');
        return $config;
    }



    public function showById($id)
    {
        $config = $this->findBy('rules', 'rulesId', $id);
        return $config;
    }

    public function create($venue, $close)
    {
        //method to create
        $create = $this->insert([
            'title', 'closeTime'
        ], [
            $venue, $close
        ], 'rules');

        return $create;
    }
}

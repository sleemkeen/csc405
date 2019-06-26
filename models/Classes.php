<?php
require_once('Links.php');
class Classes extends Queries
{


    public function get()
    {
        $classes = $this->findAll('classes');
        return $classes;
    }

    public function getWithVenue()
    {
        $sql = 'SELECT * FROM venues
        INNER JOIN classes ON Venues.venueId=classes.classVenueId';
        $venues = $this->query($sql);
        return $venues;
    }

    public function showById($id)
    {
        $classes = $this->findBy('classes', 'classId', $id);
        return $classes;
    }

    public function isRegistered($id)
    {
        $action = new Links();
        $checkifregistered = $action->showByUserId($id);

        if (empty($checkifregistered)) {
            return true;
        } else {
            return false;
        }
    }

    public function create($classdate, $classperiod, $classmax, $classvenue, $classcode, $classtitle)
    {
        //method to create
        $create = $this->insert([
            'classDate', 'classPeriod', 'classMax', 'classVenueId', 'classCode', 'classTitle'
        ], [
            $classdate, $classperiod, $classmax, $classvenue, $classcode, $classtitle

        ], 'classes');

        return $create;
    }
}

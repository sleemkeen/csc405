<?php
class Links extends Queries
{


    public function get()
    {
        $venues = $this->findAll('links');
        return $venues;
    }


    public function showById($id)
    {
        $venues = $this->findBy('links', '', $id);
        return $venues;
    }

    public function showByUserId($id)
    {
        $venues = $this->findBy('links', 'linkUserId', $id);
        return $venues;
    }

    public function create($linkId, $linkClassId)
    {
        //method to create
        $create = $this->insert([
            'linkUserId', 'linkClassId'
        ], [
            $linkId, $linkClassId
        ], 'links');

        return $create;
    }

    public function showUserCourses()
    {
        $sql = 'SELECT * FROM classes
        INNER JOIN links ON classes.classId=links.linkClassId
        INNER JOIN venues ON classes.classVenueId=venues.venueId 
        Where links.linkUserId =' . $_SESSION['user_id'] . '';
        $showUserWithCourses  = $this->query($sql);
        return $showUserWithCourses;
    }
}

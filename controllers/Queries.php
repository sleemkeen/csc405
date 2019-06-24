<?php

class Queries extends Conn
{

    public function findAll($table)
    {
        $sql = 'SELECT * FROM ' . $table;
        $pdosql = $this->connect()->prepare($sql);
        $pdosql->execute();
        $result = $pdosql->fetchAll();
        return $result;
    }
    public function findBy($table, $by, $val)
    {
        $sql = 'SELECT * FROM ' . $table . ' WHERE ' . $by . ' = ' . '"' . $val . '"' . ' LIMIT 1';

        // return $sql;
        $pdosql = $this->connect()->prepare($sql);
        $pdosql->execute();
        $result = $pdosql->fetch();
        return $result;
    }

    public function selectall($pick = [], $table)
    {

        $picks = implode(',', $pick);

        $sql = 'SELECT ' . $picks . ' FROM ' . $table . '';

        $pdosql = $this->connect()->prepare($sql);
        $pdosql->execute();
        $result = $pdosql->fetchAll();
        return $result;
    }

    public function selectby($pick = [], $table, $by, $val)
    {

        $picks = implode(',', $pick);

        $sql = 'SELECT ' . $picks . ' FROM ' . $table . ' WHERE ' . $by . ' = ' . '"' . $val . '"' . '';

        // return $sql;

        $pdosql = $this->connect()->prepare($sql);
        $pdosql->execute();
        $result = $pdosql->fetchAll();
        return $result;
    }



    public function query($sql)
    {

        $pdoStatement = $this->connect()->prepare($sql);
        $status = $pdoStatement->execute();
        $result = $pdoStatement->fetchAll();
        return $result;
    }

    public function insert($attrArray = [], $valueArray = [], $table)
    {

        $attr = implode("`,`", $attrArray);


        $value = implode("','", $valueArray);

        if (count($attrArray) != count($valueArray)) {
            return 'Incorrect input';
        }

        $stringinsert = 'INSERT INTO ' . $table . '(' . '`' . $attr . '`' . ') VALUES (' . "'" . $value . "'" . ')';


        $pdoStatement = $this->connect()->prepare($stringinsert);
        $status = $pdoStatement->execute();

        return $stringinsert;

        if ($status) {
            return true;
        } else {
            return false;
        }
    }
}


$tt = new Queries();


// print_r($tt->findAll('venues'));

// print_r($tt->findBy('users', 'id', 1));

// print_r($tt->selectby(['name', 'id'], 'users', 'email', 'akhmadharuna@gmail.com'));

// print_r($tt->selectall(['name', 'id'], 'users'));

// print_r($tt->query('select * from users'));

// print_r($tt->insert([
//     'name', 'email', 'password', 'role'
// ], [
//     'shola', 'abllcs@gmail.com', 'jjjss', 'user'
// ], 'users'));


// print_r($tt->insert([
//     'classDate', 'classMax', 'classVenueId'
// ], [
//     '12/01/2019', 30, 3

// ], 'classes'));


// print_r($tt->insert([
//     'venue',
// ], [
//     'lt018',
// ], 'venues'));

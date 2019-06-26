<?php
require_once('../controllers/Conn.php');
require_once('../controllers/Queries.php');
require_once('../models/Config.php');


$getlinkid = $_GET['linkId'];

$sql = 'DELETE FROM links WHERE linkId =' . $getlinkid;

$action = new Queries();

$validate = new Config();
$getdate = strtotime($validate->showById(1)['closeTime']);
$presentdate = time();

if ($getdate > $presentdate) {

    $delete =  $action->actionQuery($sql);

    $_SESSION['success'] = "Delete successfully";
    header('Location: /portal');
} else {

    echo 'Editing of course closed';
}

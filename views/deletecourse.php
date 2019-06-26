<?php
require_once('../controllers/Conn.php');
require_once('../controllers/Queries.php');


 $getlinkid = $_GET['linkId'];

 $sql = 'DELETE FROM links WHERE linkId ='.$getlinkid;

 $action = new Queries();

$delete =  $action->actionQuery($sql);

$_SESSION['error'] = "Delete successfully";
header('Location: /portal');
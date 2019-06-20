<html>
<h1> welcome to portal </h1>

<?php $jj  =  new Users();
foreach ($jj->get() as $key => $value) {
    echo $value['name']
        . '<br>';
}
?>

</html>
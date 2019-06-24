<?php

require_once('interface/MiddlewareRule.php');

class Middleware implements MiddlewareRule
{

    private $req;
    private $protected = [];
    public function __construct($req, $protected)
    {

        $this->req = $req;
        $this->protected = $protected;
    }


    public function handle()
    {
        $protectedRoute = $this->protected;
        $req = $this->req;

        // $_SESSION['user_id'] = 4;

        for ($i = 0; $i < count($protectedRoute); $i++) {
            if ($protectedRoute[$i] == $req && !isset($_SESSION['user_id'])) {
                header('Location: /');
                echo '1';
            }
        }
    }
}

<?php
class Middleware
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
        $getsession = @$_SESSION['user_id'];


        for ($i = 0; $i < count($protectedRoute); $i++) {
            if ($protectedRoute[$i] == $req && is_null($getsession)) {
                header('Location: /');
            }
        }
    }
}

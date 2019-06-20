<?php
class Auth extends Conn
{
    private $email;
    private $password;
    public function __construct($email, $password)
    {
        $this->email = $email;
        $this->password = $password;
    }

    public function authregister()
    {

        $sql = "SELECT COUNT(email) AS num FROM users WHERE email = :email";
        $stmt = $this->connect()->prepare($sql);

        //Bind the provided username to our prepared statement.
        $stmt->bindValue(':email', $email);

        //Execute.
        $stmt->execute();

        //Fetch the row.
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        //If the provided email already exists - display error.
        //TO ADD - Your own method of handling this error. For example purposes,
        //I'm just going to kill the script completely, as error handling is outside
        //the scope of this tutorial.


        if ($row['num'] > 0) {
            die('That email already exists!');
        }

        //Hash the password as we do NOT want to store our passwords in plain text.
        $passwordHash = password_hash($this->password, PASSWORD_BCRYPT, array("cost" => 12));

        //Prepare our INSERT statement.
        //Remember: We are inserting a new row into our users table.
        $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
        $stmt = $this->connect()->prepare($sql);

        //Bind our variables.
        $stmt->bindValue(':email', $this->email);
        $stmt->bindValue(':password', $passwordHash);

        //Execute the statement and insert the new account.
        $result = $stmt->execute();

        //If the signup process is successful.
        if ($result) {
            //What you do here is up to you!
            echo 'Thank you for registering with our website.';
        }
    }
}

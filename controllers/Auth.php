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

    public function authlogin()
    {

        $email = !empty($this->email) ? trim($this->email) : null;
        $passwordAttempt = !empty($this->password) ? trim($this->password) : null;
        $sql = "SELECT id, email, password FROM users WHERE email = :email";
        $stmt = $this->connect()->prepare($sql);

        //Bind value.
        $stmt->bindValue(':email', $email);

        //Execute.
        $stmt->execute();

        //Fetch row.
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user === false) {
            //Could not find a user with that email!
            //PS: You might want to handle this error in a more user-friendly manner!
            return false;
        } else {
            //User account found. Check to see if the given password matches the
            //password hash that we stored in our users table.

            //Compare the passwords.
            $validPassword = password_verify($passwordAttempt, $user['password']);

            //If $validPassword is TRUE, the login has been successful.
            if ($validPassword) {
                return false;
                exit;
            } else {
                //$validPassword was FALSE. Passwords do not match.
                return false;
            }
        }
    }
}

<!-- create un nuovo snack

Creiamo due classi, una per rappresentare un Utente ed una per l'utente PremiumUser. Aggiungiamo una classe Membership da passare nel costruttore della sottoclasse PremiumUser.

Cerchiamo di usare il piu' possibile getter e setter per accedere e modificare i dati. -->

<?php

class User
{
    private $username;
    private $email;

    public function __construct($username, $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }
}

class Membership
{
    private $type;
    private $age;

    public function __construct($type, $age)
    {
        $this->type = $type;
        $this->age = $age;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}

?>
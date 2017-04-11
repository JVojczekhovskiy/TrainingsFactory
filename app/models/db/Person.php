<?php
namespace app\models\db;

use ao\php\framework\models\db\Entiteit;

class Person extends Entiteit
{
    protected $id;
    protected $firstname;
    protected $preprovision;
    protected $lastname;
    protected $dateofbirth;
    protected $email;
    protected $gender;
    protected $recht;
    protected $hiringdate;
    protected $salary;
    protected $adres;
    protected $postalcode;
    protected $place;
    protected $loginname;
    protected $password;

    public function getNaam()
    {
        return "$this->firstname. $this->preprovision $this->lastname";
    }
}

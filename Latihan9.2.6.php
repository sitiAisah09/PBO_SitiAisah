<?php 
class Address 
{
    public $streat;
    public $city
}
class phpversion
{
    public $namme;
    public $address;
    public function__construct($name)
    {
        $this->name = $name;
        $this->address = new Address();
    }
    public function__clone()
    {
        $this->address = clone $this->address
    }
}
$bob = new person('Bob');
$bob->address->streat = 'North 1st streat';
$bob->address->city = 'San Jose';

$alex = clone $bob;
$alex->name = 'Alex';
$alex->address->sterat = '1 Apple park way';
$alex->address->city = 'cupertino';

var_dump($bob);
var_dump($alex);
?>
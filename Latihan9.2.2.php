<?php
class BankAccount
{
    private $accountNumber;
    private $balance;
    public function__construct($accountNumber, $balance){
        $this->accountNumber = $accountNumber;
        $this->balance = $balance;
    }
    public function__toString()
    {
        return "Bank Account: $this->accountNumber.<br /> Balance: $$this->balance";
    }
}
$accountNumber = new BankAccount('123456789', 100);
echo $account;
<?php

/*
4. Write a PHP a class called "BankAccount". Implement methods to deposit and withdraw money from the account.

BankAccount properties:
  accountNumber
  balance

BankAccount methods:
  withdraw(ammount)
  deposit(ammount)
*/


class BankAccount {
    
    private $accountNumber;
    private $balance;

    public function __construct($accountNumber) {
        $this->accountNumber = $accountNumber;
        $this->balance = 0;
    }

    public function getAccountNumber() {
        return $this->accountNumber;
    }

    public function getBalance() {
        return $this->balance;
    }

    public function deposit($amount) {
        $this->balance += $amount;
        echo "Deposited $amount into account $this->accountNumber. New balance: $this->balance</br>";
    }

    public function withdraw($amount) {
        if ($this->balance >= $amount) {
            $this->balance -= $amount;
            echo "Withdrawn $amount from account $this->accountNumber. New balance: $this->balance</br>";
        }
        else
        {
           echo "Want to withdrawn $amount?</br>";
           echo "Insufficient balance in account $this->accountNumber. Current balance: $this->balance</br>";
        }
    }
}

$account = new BankAccount("BDO-1234567890");
echo "Account Number: " . $account->getAccountNumber() . "</br>";
echo "Initial Balance: " . $account->getBalance() . "</br>";

$account->deposit(2500);
$account->withdraw(1900);
$account->withdraw(700);
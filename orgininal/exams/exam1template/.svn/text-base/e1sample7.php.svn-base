<?php
  class BankAccount {

    private $balance = 0;

    function makeDeposit($amount) {
      $this->balance += $amount;   
      echo '<br>Deposited: $'. number_format($amount, 2);
    }
    function makeWithdrawal($amount) {
      $this->balance -= $amount;
      echo '<br>Withdrew: $'. number_format($amount, 2);
    }
    final function getBalance() {
      echo '<br>Current Balance: $'. number_format($this->balance, 2);
    }
  }

  $myAccount = new BankAccount();
  $myAccount->makeDeposit(1000.00);
  $myAccount->makeWithdrawal(120.00);
  $myAccount->getBalance();
?>

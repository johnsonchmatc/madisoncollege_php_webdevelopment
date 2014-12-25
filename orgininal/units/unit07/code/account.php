<?php
  class BankAccount {

    private $balance = 0;

    function makeDeposit($amount) {
      // Add to the current balance
      $this->balance += $amount;   
      echo '<br>Deposited: $'. number_format($amount, 2);
    }
    function makeWithdrawal($amount) {
      // Subtract from the current balance
      $this->balance -= $amount;
      echo '<br>Withdrew: $'. number_format($amount, 2);
    }
    function getBalance() {
      echo '<br>Current Balance: $'. number_format(
           $this->balance, 2);
    }
  }

  $myAccount = new BankAccount();
  $myAccount->makeDeposit(100.00);
  $myAccount->makeWithdrawal(40.00);
  $myAccount->getBalance();
?>

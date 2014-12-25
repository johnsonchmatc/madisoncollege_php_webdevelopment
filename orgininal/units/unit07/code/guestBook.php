<?php
  class GuestBook {
    protected $name;
    protected $address;
    protected $phone;
    protected $birthday;
    private $file;
    
    // Setters
    function setName($name) {
      $this->name = $name;
    }
    function setAddress($address) {
      $this->address = $address;
    }
    function setPhone($phone) {
      $this->phone = $phone;
    }
    function setBirthday($birthday) {
      $this->birthday = $birthday;
    }
    function setFile($file) {
      $this->file = $file;
    }
    
    // Getters
    function getName($name) {
      return $this->name;
    }
    function getAddress($address) {
      return $this->address;
    }
    function getPhone($phone) {
      return $this->phone;
    }
    function getBirthday($birthday) {
      return $this->birthday;
    }
    function getFile($file) {
      return $this->file;
    }
      
    function showGuest() {
      echo "$this->name<br>";
      echo "$this->address<br>";
      echo "$this->phone<br>";
      echo "$this->birthday<br>";
    }
    function saveGuest() {
      $outputstring = $this->name . ":". $this->address .":"
                    . $this->phone.":". $this->birthday ."\n";
      $path = "$_SERVER[DOCUMENT_ROOT]/../guests/$this->file";
      @ $fh = fopen($path,"ab");
      if (! $fh) {
        $fh = fopen($path,"wb");
      }
      fwrite($fh, $outputstring, strlen($outputstring));
      fclose($fh);
      echo "<br>Data saved in $path<br>";
    }
  }
?>

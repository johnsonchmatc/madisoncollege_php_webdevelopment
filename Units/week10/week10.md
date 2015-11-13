footer:@johnsonch :: Chris Johnson :: Web Development with PHP and MySQL :: Week 10
autoscale: true

#Web Development with PHP and MySQL
##Object Oriented PHP
###Week 10
---
##What is an object?

* A data structure
* Represents 'real world' concepts

---
##What is a class?

* A container to hold chunks of code that are related to an object.

---
##How do you define a class?

```php
class Car{
  public owner = 'CJ';
  public make = 'BMW';
  public function drive(){
    echo 'Go Fast';
  }
}
```

---
##How do you create an object from a class?

* By instantiating it

```php
$bmw = new Car;
```

^ The difference between an object and a class is that a class is conceptual and an object is real. The ```new``` keyword creates an instance of the class.

---
##How do you change properties on a class instance?

```php
$bmw = new Car;
$bmw->owner = 'Laura';
```

---
##What is $this?

* When a class is defined, the object is created later, making it impossible for the class writer to know what the user of the class will name his or her objects.
* To reference an object, PHP provides a pseudo-variable, named $this , which references the current object.

---
##What is $this?

```php
class Car{
  ...
  public function whoOwns(){
    echo $this->owner; 
  }
  ...
}
$bmw = new Car;
$bmw->owner = 'Laura';
$bwm->whoOwns();//Laura
```

---
##Debugging Help!
* Sometimes we need to figure out what context we're in

```php
class Car{
  ...
  public function whoOwns(){
    echo "This is a type of", gettype($this);
    echo "This is a class of", get_class($this);
  }
  ...
}
$bmw = new Car;
$bmw->owner = 'Laura';
```

---
##Debugging Help!
* Sometimes we need to see the object

```php
class Car{
  ...
  public function whoOwns(){
   echo "<pre>";
   print_r($this);
   echo "</pre>";
   /*
      Car object
      (
        [owner] => Laura
        [make] => BMW
      )
   */
  }
  ...
}
$bmw = new Car;
$bmw->owner = 'Laura';
```

---
##Properties and Methods

* Properties == Variables
* Methods == Functions
* Together they are knows as 'members'

---
##What is encapsulation?

> In basic terms, it't the way we define the visibility of our properties and methods. -Jasko Koyn

---
##What is encapsulation?

```php
class Employee{
  public function birthday(){
    $birthday = dateOfBirth();
    unset($birthday['year']);
    return $birthday;
  }

  public function ableToBarTend(){
    $birthday_array = dateOfBirth();
    $birthday = strtotime("$birthday_array['month']-$birthday_array['day']-$birthday_array['year']");  
    $birthday_plus_18_years = strtotime('+18 years', $birthday);
    $today =  time();
    $over_18 = ($birthday_plus_18_years < $today ? true : false);
    return $over_18;
  }
  
  private function dateOfBirth(){
    return array("month" => $this->month,
                 "day" => $this->day,
                 "year" => $this->year);
  }

}
```

^ Here we don't want want other code to return the date of birth but it's OK to share the employee's birthday

---
##What are private, public and protected properties?

* Scopes of members of a class
* Determines what has access to the member

---
##What are private, public and protected properties?
* **Public**: Default scope and allows access from everywhere
* **Private**: Only accessible inside the class
* **Protected**:  Only accessible inside the class and to it's sub classes

---
##How do you define private, public and protected properties?

```php
class Car{
  public $owner;
  public $make;
  private $owner_address;
  protected $vin;
}
```

---
##What are 'magic' methods?
* PHP provides special methods that are invoked automatically based on what the program is doing such as:
  * creating an object,
  * setting a property value,
  * retrieving a value, or
  * destroying an object.
* [http://php.net/manual/en/language.oop5.magic.php](http://php.net/manual/en/language.oop5.magic.php)

---
## What are constructors and destructors?
* A constructor, as the term implies, is a builder or creator. When you assign values to properties in a class, PHP will automatically build or construct a new object when "new" is called by the user of the class.
  * You can create a custom constructor: ```function __construct($owner, $make)```

---
## What are constructors and destructors?
* A destructor method is called right before the object is released. Releasing an object means that all references to the object have been unset or the object has gone out of scope.

---
##Constructors
```php
class Car{
  ...
  function __construct($specified_owner,$specified_make){
    $this->owner = $specified_owner;
    $this->make = $specified_make;
  }

  public function whoOwns(){
    echo $this->owner; 
  }
  ...
}
$bmw = new Car('Laura','Kia');
$bwm->whoOwns();//Laura
```

---
##What are getters and setters?

* A.K.A. Accessor Methods
* A setter is a method used to assign a value to a class variable, and a getter is a method used to retrieve the value of a class variable. Simply said, "Put something in, set it; take something out, get it."

^ User-Defined Setters and Getters:  You can make public methods that let the function caller get or set properties of the object.

---
##What are getters and setters?
```php
class Person{
  private $first_name;
  private $last_name;

  public function setFirstName($name){
    $this->first_name = $name;
  }

  public function getFirstName(){
    return $this->first_name;
  }

}

$me = new Person;
$me->setFirstName('CJ');
echo $me->getFirstName(); // CJ
```

---
##What are getters and setters?
* PHP has two 'magic' methods ```__set``` and ```__get```
* When you make a property public these are used anytime you access that property.

---
##What are static properties and methods?
* They are properties and methods that don't require an instance of an object
* A.K.A. class members, because they are created by and for the class

---
##What are final methods?
* Methods that can be used in a subclass but not overrridden

---
##Going further

* [http://phpenthusiast.com/object-oriented-php-tutorials](http://phpenthusiast.com/object-oriented-php-tutorials)

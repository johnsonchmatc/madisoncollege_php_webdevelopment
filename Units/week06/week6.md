#Arrays
##Chapter 8
###Week 6

---
#What is an array?

---
#An array is:
* a variable that can store a collection of scalars.
* 'an ordered map', simply a collection of key-value pairs

---
#What are the two types of arrays?

---
#What are the two types of arrays?
* Numeric

```php
$products = array('bacon','hamburgers','tomatoes','buns');
echo $products[0]; //bacon
echo $products[3]; //buns
```

* Associative

```php
$ages = array('bob' => 34, 'kim' => 31, 'todd' => 62);
echo $ages['bob']; //34
echo $ages['kim']; //31
echo $ages['todd'];//62
```

---
#Functions to create an array
##array()

---
#Functions to create an array
##array\_combine()
* Turn 2 different arrays into one Associative array

```php
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c); //Array ( [green] => avocado [red] => apple [yellow] => banana )
```

* Must be equal sizes

---
#Functions to create an array
##compact()
^ * Takes a variable number of parameters. 
  * Each parameter can be either a string containing the name of the variable, or an array of variable names
  * The array can contain other arrays of variable names inside it

```php
$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";

$location_vars = array("city", "state");

$result = compact("event", "nothing_here", $location_vars);
print_r($result); //Array ( [event] => SIGGRAPH [city] => San Francisco [state] => CA )
```

---
#Adding items to an array

```php
$cars = array();
$cars[] = 'windstar';
array_push($cars, "cavalier");
$cars[] = "sorento";
array_push($cars, "cabrio");

print_r($cars);
```

---
#Accessing items from an array

```php
$ages = array('bob' => 34, 'kim' => 31, 'todd' => 62);
echo $ages['bob']; //34
echo $ages['kim']; //31
echo $ages['todd'];//62
```

* ```$variable```[```'key/index'```]

---
#Working with loops

```php
$cars = array("windstar","cavalier","sorento","cabrio");

for($i = 0; $i < count($cars); $i++){
  echo $cars[$i];
}

foreach($cars as $car){
  echo $car;
}

while($i < count($cars)){
  echo $cars[$i];
  $i++;
}

```

---
#Checking Arrays
```php
$ages = array('bob' => 34, 'kim' => 31, 'todd' => 62);

array_key_exists('bob', $ages); // true
in_array(25, $ages); //false
is_array($ages); //true
```

---
#Strings to Arrays 
```php
$array = explode(",","bob,kim,todd"); 
print_r($array) //Array ( [0] => bob [1] => kim [2] => todd )
```

---
#Arrays to Strings
```php
$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);
echo $comma_separated; // lastname,email,phone
```

---
#Finding Size
```php
$ages = array('bob' => 34, 
              'kim' => 31, 
              'todd' => 62, 
              'jeff' => 31);

$count_values = array_count_values($ages);
print_r($count_values); // Array ( [34] => 1 [31] => 2 [62] => 1 )

$count = count($ages);
print_r($count); // 4

$sizeof = sizeof($ages);
print_r($sizeof); // 4

```

---
#Extracting Keys
```php
$ages = array('bob' => 34, 
              'kim' => 31, 
              'todd' => 62, 
              'jeff' => 31);
$keys = array_keys($ages);

print_r($keys); 
// Array ( [0] => bob [1] => kim [2] => todd [3] => jeff )

```


---
#Multidimensional Arrays
```php
$numbers = array(array(10,12,14,16),
                 array(15,18,21,24),
                 array(20,25,30,35)
                );
echo "<table border='1'><caption><font size='-2'>Rows and Columns</font></caption>";
for($i=0; $i < 3; $i++) { // 3 rows
  echo "<tr>";
  for($j=0; $j<4; $j++){ // 4 columns
    echo "<td><b>". $numbers[$i][$j];
  }
  echo "</td></tr>";
}
echo "</table>";
```


---
#Multidimensional Arrays

```php
$teachers = array(
  array('Name' => "John Doe", 'Subjects' => array('Government','English'), 'Salary'=> 56000,),
  array('Name' => "Steven Lee", 'Subjects' => array("Math","Science","PE"), 'Salary'=> 65000,),
  array('Name' => "Jean Perot", 'Subjects' => array("French", "Literature"), 'Salary'=> 57000,),
                  );
foreach($teachers as $value) {
  echo "<hr>";
  foreach($value as $key => $val) {
    if ($key == "Subjects") {
      echo "$key: ";
      foreach($val as $subjects) {
        echo "$subjects ";
      }
    }
    else {
      echo "<br />$key: $val<br />";
    }
  }
}
```

---
#Sorting
###Alphabetic
```php
$animals = array('dog','cat','horse','monkey',
                 'gorilla','zebra');
sort($animals);
print_r($animals);
/*Array ( [0] => cat 
          [1] => dog 
          [2] => gorilla 
          [3] => horse 
          [4] => monkey 
          [5] => zebra )
 */
```

---
#Sorting
###Numeric
```php
$animals = array('5 dogs','15 cats','10 horses','1 monkey',
                '1 gorilla','2 zebras');
sort($animals, SORT_NUMERIC);
print_r($animals);
/*Array ( [0] => 1 gorilla 
          [1] => 1 monkey 
          [2] => 2 zebras 
          [3] => 5 dogs 
          [4] => 10 horses 
          [5] => 15 cats )
 */
```

---
#Modifying Arrays
* ```array_pop()``` function removes the last elment of an array and returns it
* ```array_shift()``` function removes the first element from an array and returns it
* ```array_unshift()``` function prepends one or more elements onto the beginning of an array
* ```array_push()``` function pushes one or more elements onto the end of an array

---

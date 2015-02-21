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
```php
$a = array('green', 'red', 'yellow');
$b = array('avocado', 'apple', 'banana');
$c = array_combine($a, $b);
print_r($c); //Array ( [green] => avocado [red] => apple [yellow] => banana )
```

* Must be equal sizes

---
#Functions to create an array
##array\_fill()


---
#Functions to create an array
##array\_pad()

---
#Functions to create an array
##compact()

---
#Functions to create an array
##range()

---

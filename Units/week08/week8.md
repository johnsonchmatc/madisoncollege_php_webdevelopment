footer:@johnsonch :: Chris Johnson :: Web Development with PHP and MySQL :: Week 8
autoscale: true

#Web Development with PHP and MySQL
##Chapter 9
###Week 8

---
* https://codecaster.io -> johnsonch
* https://beta.socrative.com -> johnsonchmatc

---
#Vote
On the socrative site there will be a "quick question"
  A. Longer lecture with Lab Rat refactoring into functions
  B. Time to ask questions as a group about the exam code samples
  C. Time to ask individual questions, work on lab or projects

---
###Functions

```php
<?php
    function reverse($variable)
    {
        return strrev($variable);
    }
?>

<?= reverse("some long string") ?>
```

^ Functions always need to be implemented before they are called

---
###Functions

```php
<?php
    function sendSubscribeEmailToUser($name, $email, $from )
    {
        $subject = "Welcome to newsletter";
        $msg = <<<EOD
Dear $name,
Thank you for subscribing to our awesome newsletter.
EOD;
        mail($email, $subject, $msg, 'From:' . $from);
    }


  ...

  while ($row = mysqli_fetch_array($result))
  {
    sendSubscribeEmailToUser($row['name'], $row['email'], 'noreply@awesomeco.com');
  }
?>
```

^ Note the indenting on the herdoc, we need to have it all the way over for things to work right.

---
### Allowing form more flexible database searches

* When searching a database, the matches so far have been exact
* When building a web application that allows for users to search, it would be good to have more flexibility
* ```LIKE``` is added to the ```WHERE``` clause of an ```SQL``` query which provides greater flexibility

~~~sql
SELECT column_name [, column_name] 
	FROM table_name 
	WHERE column_name 
	LIKE ‘%search_term%
~~~

---

![inline left](http://flibbertigiblets.com/phpWebDevMySQL/images/SQL-LIKE-01.png)
![inline](http://flibbertigiblets.com/phpWebDevMySQL/images/SQL-LIKE-02.png)

---

* ```%``` are wildcards and represent 0 or more characters before or after the search term
* Another wildcard character that can be used is ```_``` 
* ```LIKE '____fighter%'``` means: find the string “fighter” with any four characters in front of it and any number of characters after it.


---

### Breaking up a string into multiple words

#### How will our search work when a user enters several words in the search box together? What if they enter 'bottles jars'?

* Matching phrases exactly as entered is not a very effective way to search through a database
* A better way is to break up the phrase into multiple words
* Break up a string into an array of words using [`explode()`](http://php.net/manual/en/function.explode.php)
    
   
~~~php
$search_words = explode(' ', 'bottles jars'); 
print_r($search_words); //Array([0] => bottles [1] => jars)
~~~

^ Splits a string into individual words, contained in an array based on a delimiter that separates each word

---

* In PHP when getting the search term from the user:

~~~php
$user_search = $_GET['usersearch']; 
$search_words = explode(' ', $user_search);
~~~

* So, if a user wants to search the `Products` table in the `northwind` database, and they want a listing of all items that are in bottles and jars, the search would look like this:

~~~sql
SELECT ProductName, QuantityPerUnit, UnitPrice, UnitsInStock 
  FROM Products
  WHERE QuantityPerUnit LIKE '%bottles%'
  OR QuantityPerUnit LIKE '%jars%';
~~~

---
![inline](http://flibbertigiblets.com/phpWebDevMySQL/images/SQL-LIKE-OR-01.png)

---
##Let's refactor some of our Lab Rat code to functions



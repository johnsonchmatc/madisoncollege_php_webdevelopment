#Cookies and Session Control in PHP
##Chapter 16 and Appendix D
##Week 15

---
#What Are Cookies?

> A cookie is a small packet of information stored on the browser, and it is persistent, meaning it is maintained between browser sessions

---
![fill](http://www.rottitude.com/wp-content/uploads/2013/11/cookie.jpg)

---
#The ```$_COOKIE``` Global Array

```php
setcookie('usr','Ellie Quigley');
setcookie('color','blue');

if (! empty($_COOKIE['color'])) {
  echo '<pre>';
  print_r($_COOKIE);
  echo '</pre>';
}
```

[setcookie.php](./samples/setcookie.php)

---
#Serialization - Because one cookie isn't enough

```php
$info = array('ellie','yellow', 22);
setcookie('usr', serialize($info));

if (! empty($_COOKIE['usr'])) {
  $cookie_data = $_COOKIE['usr'];
  $cookie_data = stripslashes($cookie_data);
  $cookie_data = unserialize($cookie_data);
  echo 'What\'s in the cookie array?<br /><pre>';
  print_r($_COOKIE);
  echo '</pre>Unserialized \'usr\' data:<br /><pre>';
  print_r($cookie_data);
  echo '</pre>';
}
```

[serialize.php](./samples/serialize.php)

---
#What are cookies good for?

* Storing user preference
* Storing session token

---
#What are cookies bad for?

* Storing sensitive information
* Storing large amounts of data (max size 4k)

---
#What is a session

* A way to make statelessness applications hold state

---
#```session_start()``` 

> creates a session or resumes the current one based on a session identifier passed via a GET or POST request, or passed via a cookie.

---
#Example - Auth Page
```php
  session_start();
  // User is logging in
  if (isset($_POST['login'])) {
    if (isset($_POST['username'])
        && ($_POST['username'] == 'phpbee')
        && isset($_POST['password'])
        && ($_POST['password'] == 'phpbee')) {
       $_SESSION['Authenticated'] = 1;
     }
     else {
       $_SESSION['Authenticated'] = 0;
     }
     session_write_close();
     header('Location: protected.php');
   }
   // User is logging out
   if (isset($_GET['logout'])) {
     session_destroy();
     header('Location: login.html');
   }
```

---
#Example -- Protected Page
```php
    if (isset($_SESSION['Authenticated']) && ($_SESSION['Authenticated'] == 1)) {
      echo "Authenticated";
    }else{
      echo "Not Authenticated";
    }
```

---
#Security

* Know your input
  * Use ```addslashes()``` to prevent simple SQL injection
* Use SSL
* Don't store senstive information, if you can avoid it
* Encrypt data in the database


#Exercise 1

Today we'll be implementing a simple database backed login system.  You'll need 
to use the following two statements to add Username and Password fields to your 
database:

```
ALTER TABLE Employees ADD Username varchar(255);
ALTER TABLE Employees ADD Password mediumtext;
```

Next you'll want to copy the following 4 files to your nitrous box:

* [auth.php](auth.php)
* [login.html](login.html)
* [protected.php](protected.php)
* [password_generator.php](password_generator.php)

Then you'll need add usernames and passwords to each of the employees, the
password can be the same.  Use the script provided called 'password_generator.php' 
to generate password hashes for all the users in your database.

Now you'll need to implement the following workflow in 'auth.php' to log a user
in via your database.

If the form posted a username and password
  * select from Employees table where the username equals the username passed in
  * if a result is found in the database, generate a hash using the password 
  provided and date of birth, the 'password_generator' script shows the algorithm 
  used to generate password hashes
  * compare the generated hash to the one pulled from the ```Password``` field
  in the database
  * if the hashes are equal log the user in by using the following code 
  ```$_SESSION['Authenticated'] = 0;```


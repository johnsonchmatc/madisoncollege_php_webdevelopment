#Exercise 1 - Log in to MySQL and view some data

Log in to your nitrous server.

Use a command line similar to the following to log in to MySQL. Use the user name given to you by your instructor rather than the one used here.

```
mysql -u root 
```

Again you will be prompted for a password. Use the password provided by your instructor.

Enter the following series of commands in MySQL, and answer the questions below:

```
USE winestore;
SHOW TABLES;
SELECT * FROM region;
```

How many tables are there in the winestore database? \_\_\_\_\_\_\_\_\_\_

What is the name of region number 7? \_\_\_\_\_\_\_\_\_\_\_\_ 


#Exercise 2 - Create a table in your own database schema

Change to your personal database (called a schema in some DBMSs) by entering a command similar to the following. Your instructor will tell you the database name to use:

use djefferson;
Create a table named test using the following statement.

```
CREATE TABLE test ( pk integer NOT NULL, val varchar(20) );
```

Insert a row into the table test by issuing this statement.

```
INSERT INTO test (pk, val) VALUES (1, 'one');
```

Insert two more rows into the table using the same syntax as above. Use any values you wish.

Run the statement below and show your instructor the results.

``` SELECT * FROM test; ```

Enter the MySQL command: ``` exit; ``` to quit MySQL.

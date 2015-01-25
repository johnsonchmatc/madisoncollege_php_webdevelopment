#Exercise 1 - Log in to MySQL and view some data

Log in to your nitrous server.

Go to [https://code.google.com/p/northwindextended/downloads/detail?name=Northwind.MySQL5.sql&can=2&q=](https://code.google.com/p/northwindextended/downloads/detail?name=Northwind.MySQL5.sql&can=2&q=) to download the Northwind Database.

Upload the file you downloaded to your Nitrous server.
![](https://dl.dropboxusercontent.com/s/0wnukop87hyfdw1/2015-01-24%20at%202.38%20PM%202x.png?dl=0)

Next note were your database was uploaded to.  You can verify by using the console

```
$ ls

```

How many tables are there in the northwind database? \_\_\_\_\_\_\_\_\_\_

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

#Exercise 1 - Log in to MySQL and view some data

Log in to your nitrous server.

Use wget fromt he console portion of your Nitrous.io (as shown in class) to get the .sql file.

```
$ wget files.johnsonch.com/northwind.sql
```

Next note were your database was downloaded to.  You can verify by using the console
```
$ ls
```

Then import the database file with the following command
```
$ mysql -u root northwind < northwind.sql
```

Log into your mysql server ```$ mysql -u root```

Next direct your mysql client to use the northwind database
```
> use northwind;
```

Then list out all the databases
```
> show tables;
```

How many tables are there in the northwind database? \_\_\_\_\_\_\_\_\_\_

How many products are in the Products table? \_\_\_\_\_\_\_\_\_\_\_\_ 

What is the unit price for the row whith a ProductName of 'Chai'? \_\_\_\_\_\_\_\_\_\_\_\_ 


#Exercise 2 - Create a table in your own database schema

Log in to your nitrous server and then onto your MySQL server.

Create a database named your MadisonCollege username
```
> create database <insert your username>;
> use <insert your username>;
```

Create a table named test using the following statement.

```
CREATE TABLE test ( pk integer NOT NULL, val varchar(20) );
```

Insert a row into the table test by issuing this statement.

```
INSERT INTO test (pk, val) VALUES (1, 'one');
```

Insert two more rows into the table using the same syntax as above. Use any values you wish.

Run the statement below and **show your instructor the results**.

``` SELECT * FROM test; ```

Enter the MySQL command: ``` exit; ``` to quit MySQL.

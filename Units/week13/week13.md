#Introduction to the MySQL DBMS
##Chapter 12
###Week 12

----
#About Databases
* A way of organizing and storing data
* Many are considered "Relational" in that each table's data relates to another
* Relational Database Management Systems (RDBMS) work well with OOP languages
* MySQL is the most commonly used database program for developing database-driven Web sites with PHP.

----
#About Databases - MySQL
PHP and MySQL fit very well together, and share the following traits:
* Ease of use
* Scalable
* Battle tested

----
#About Databases - MySQL
Note:
Although PHP can be used with any database through its set of ODBC functions, it comes loaded with MySQL specific functions. This set of specific functions makes for a tight integration between the PHP language and the MySQL database.

---
#Talking to the Database

To communicate with the MySQL server, you will need a language, and SQL (Structured Query Language) is the language of choice for most modern multiuser, relational databases.

SQL provides the syntax and language constructs needed to talk to relational databases in a standardized, cross-platform structured way.

---
#Talking to the Database

Like the English language with a variety of dialects (British, American, Australian, etc.), there are many different versions of the SQL language.

The version of SQL used by MySQL follows the ANSI (American National Standards Institute) standard, meaning that it must support the major keywords (e.g. SELECT, UPDATE, DELETE, INSERT, WHERE) as defined in the standard.


---
#MySQL Strengths and Weaknesses

MySQL runs on more than 20 platforms including Linux, Windows, OS/X, HP-UX, AIX, Netware, giving you the kind of flexibility that puts you in control.

Having said that, like any tool, MySQL is right for certain types of applications and not as suitable for others. Let's look at what the strengths and weaknesses of MySQL are.

---
#Easy to Use

MySQL is a relatively easy to use and administer database system. Large database systems with all the bells and whistles often require a knowledgable database administrator (DBA) to set up and administer it.

MySQL is a database built for programmers with very little overhead in terms of maintenance.

---
#Large Community of Developers

What makes MySQL so appealing is the large community of other developers who are building applications around it. This makes it a relatively safe choice.

If you ever need anything, chances are that someone already experienced that issue and has it resolved. You can often find the solutions with a little searching online.

---
#Open Source License

MySQL is free to use as long as you do not bundle it with your commercial product. As an application provider, you can always tell your customers to download and set up their own MySQL database to which your application will connect.

This is a fairly easy procedure and there is no license cost involved, making it an attractive choice for application developers.

---
#The Anatomy of a Relational Database
##The main components of an RDBMS are:

* The database server
* The database
* Tables
* Records and fields
* Schema


---
#The Database Server

The database server is the actual server process running the databases. It controls the storage of the data, grants access to users, updates and deletes records, and communicates with other servers.

The database server is normally on a dedicated host computer, serving and managing multiple clients over a network, but can also be used as a standalone server on the local host machine to serve a single client.

---
#The Database

A database is a collection of related data elements, usually corresponding to a specific application. 

```
+------------+
| Database   |
+------------+
| mysql      |
| northwind  |
| phpmyadmin |
| test       |
+------------+
```

---
#Tables
##Each database consists of two-dimensional tables. 

```> show tables;```

```
+----------------------+
| Tables_in_northwind  |
+----------------------+
| Categories           | 
| CustomerCustomerDemo | 
| CustomerDemographics | 
| Customers            | 
| EmployeeTerritories  | 
| Employees            | 
| Order_Details        | 
| Orders               | 
| Products             | 
| Region               | 
| Shippers             | 
| Suppliers            | 
| Territories          | 
| USStates             | 
+----------------------+
```

---
#Rows and Columns (Records and Fields)

A table has a name and consists of a set of rows and columns. It resembles a spreadsheet where each row, also called a record, is comprised of vertical columns, also called fields.

```
+-----------+------------------+----------------+
| ShipperID | CompanyName      | Phone          |
+-----------+------------------+----------------+
|         1 | Speedy Express   | (503) 555-9831 | 
|         2 | United Package   | (503) 555-3199 | 
|         3 | Federal Shipping | (503) 555-9931 | 
+-----------+------------------+----------------+
```

---
#Rows and Columns (Records and Fields)
There are two basic operations you can perform on a relational table. You can retrieve a subset of its columns and you can retrieve a subset of its rows. The following figures are samples of the two operations.


```mysql> select companyname from shippers;```

```
+------------------+
| companyname      |
+------------------+
| Speedy Express   | 
| United Package   | 
| Federal Shipping | 
+------------------+
```

---
#Rows and Columns (Records and Fields)

```mysql> select * from shippers where companyname = 'Federal Shipping';```

```
+-----------+------------------+----------------+
| ShipperID | CompanyName      | Phone          |
+-----------+------------------+----------------+
|         3 | Federal Shipping | (503) 555-9931 | 
+-----------+------------------+----------------+
```

---
#Columns/Fields

* Columns are also known as fields or attributes.

```
+-------------+-------------+------+-----+---------+----------------+
| Field       | Type        | Null | Key | Default | Extra          |
+-------------+-------------+------+-----+---------+----------------+
| ShipperID   | int(11)     | NO   | PRI | NULL    | auto_increment | 
| CompanyName | varchar(40) | NO   |     |         |                | 
| Phone       | varchar(24) | YES  |     | NULL    |                | 
+-------------+-------------+------+-----+---------+----------------+
```

---
#Rows/Records

* A record is a row in the table. 

```mysql> select * from region;```

```
+----------+-------------------+
| RegionID | RegionDescription |
+----------+-------------------+
|        1 | Eastern           | 
|        2 | Western           | 
|        3 | Northern          | 
|        4 | Southern          | 
+----------+-------------------+
4 rows in set (0.00 sec)
```

---
#Primary Key and Indexes

* A primary key is a unique identifier for each record. 

```mysql> describe categories;```

```
+--------------+-------------+------+-----+---------+----------------+
| Field        | Type        | Null | Key | Default | Extra          |
+--------------+-------------+------+-----+---------+----------------+
| CategoryID   | int(11)     | NO   | PRI | NULL    | auto_increment | 
| CategoryName | varchar(15) | NO   | MUL |         |                | 
| Description  | longtext    | YES  |     | NULL    |                | 
| Picture      | longblob    | YES  |     | NULL    |                | 
+--------------+-------------+------+-----+---------+----------------+
```

---
#Primary Key and Indexes

* Indexes are like the indexes in the back of a book that help you find a specific topic more quickly than searching through the entire book.

---
#The Database Schema

* Designing a very small database is not difficult, but designing one for a large Web-based application can be daunting.
* Database design is both an art and a science 

^ When discussing the design of the database, you will encounter the term "database schema", which refers to the structure of the database. It describes the design of the database similar to a template or blueprint.

^ It describes all the tables, and their layout, but does not contain the actual data in the database. In MySQL, we use the "show tables" command to list all the tables in a particular schema. Note that MySQL uses the term database to refer to what other database vendors may call a schema.

---
#The Database Schema

```mysql> show tables;```

```
+----------------------+
| Tables_in_northwind  |
+----------------------+
| Categories           | 
| CustomerCustomerDemo | 
| CustomerDemographics | 
| Customers            | 
| EmployeeTerritories  | 
| Employees            | 
| Order_Details        | 
| Orders               | 
| Products             | 
| Region               | 
| Shippers             | 
| Suppliers            | 
| Territories          | 
| USStates             | 
+----------------------+
14 rows in set (0.00 sec)
```

---
#The Database Schema

```
mysql> describe Employees;                                                                                                                                                             
```

```
+-----------------+--------------+------+-----+---------+----------------+                                                                                                             
| Field           | Type         | Null | Key | Default | Extra          |                                                                                                             
+-----------------+--------------+------+-----+---------+----------------+                                                                                                             
| EmployeeID      | int(11)      | NO   | PRI | NULL    | auto_increment |                                                                                                             
| LastName        | varchar(20)  | NO   | MUL | NULL    |                |                                                                                                             
| FirstName       | varchar(10)  | NO   |     | NULL    |                |                                                                                                             
| Title           | varchar(30)  | YES  |     | NULL    |                |                                                                                                             
...
| ReportsTo       | int(11)      | YES  | MUL | NULL    |                |                                                                                                             
| PhotoPath       | varchar(255) | YES  |     | NULL    |                |                                                                                                             
| Salary          | float        | YES  |     | NULL    |                |                                                                                                             
+-----------------+--------------+------+-----+---------+----------------+ 
```

---
#Connecting to the Database

```
$ mysql
Welcome to the MySQL monitor. Commands end with ; or \g.
Your MySQL connection id is 3 to server version: 4.1.8-nt-log

Type 'help;' or '\h' for help. Type '\c' to clear the buffer.

mysql>
```

---
#Connecting to the Database

* Regardless of the type of client you choose, you will always need to specify the username, and the host you are connecting to (unless it is "localhost").

* Most configurations expect you to have a password, although MySQL accounts may be configured to not require one. You have the option to specify a database to use as well.

---
#MySQL Command-Line Options

To connect to a database using this client, you will enter information similar to the following lines:

```mysql --user=root --password=my_password --host=localhost```

or

```mysql -u root -p my_password -h localhost```


---
#Let's play with some queries

^ ```
select e.FirstName, e.LastName, t.TerritoryDescription from Employees as e, EmployeeTerritories as et,Territories as t WHERE e.EmployeeID = et.EmployeeID and t.TerritoryID = et.TerritoryID ORDER BY TerritoryDescription ASC;
```

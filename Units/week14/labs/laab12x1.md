#Exercise 1
* Create Guestbook table in your Northwind database with the following script from your MySQL prompt:

```
create TABLE Guestbook ( id INT NOT NULL AUTO_INCREMENT , subject VARCHAR(150), email VARCHAR(150), body TEXT , PRIMARY KEY(id));
```
NOTE: to get to the mysql propmt use ```$ mysql -u root``` from your nitrous command line

* Create a form that can post with a spot for a subject, email and message.
* Process the post from the form and save the entry to the database.
* Create a page that shows all guest book entries.
* Bonus on your own, add the ability to delete an entry. (not required for the lab)

Show the results and code to your instructor.

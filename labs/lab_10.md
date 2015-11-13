#Lab 10
###Due Date: 11/23/2015

##Directions:
* Try to work on this ahead of class, but you may pair on this in class.
* I'll demo part of this in class but again give it a shot before class.
* Create a folder called ```lab_10``` in your ```php_course_work``` folder 
  * Create a web application that simulates adding different types of products to a database using OOP and inheritance
  * Create a base class called Product and save it in a PHP script called Product.php
  * Create properties for holding a title, description, and price
  * Create getters and setters for all the properties
  * Create a sub class called Tools that extends Product and save it in a PHP script called Tools.php
  * Create properties for holding a shipper (i.e. UPS, FedEx, USPS), and weight
  * Create getters and setters for all the properties
  * Create a sub class called Electronics that extends Product and save it in a PHP script called Electronics.php
  * Create a property for holding whether the electronic product is recyclable or not
  * Create getters and setters for the property
  * Create a PHP script called addProduct.php that will allow you to enter new product information into a form and save it to a database
  * You might want to have a selection control that will display a different form based on whether you are adding a generic product, a tool, or electronics to the database
  * Although you have a lot of flexibility, consider adding methods to the appropriate classes for handling the specific database insertions depending upon the product type
  * Although not required, you could even create separate methods in the different classes that handle the form entry depending upon the product type

* Add and commit the files along your way. 
* Remember to push frequently to github as a backup.
```$ git push origin master```


##Turn in instructions
* Go to blackboard and submit your github username and the repository url, or 
show the code to your instructor.

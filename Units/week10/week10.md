#Using HTML Forms with PHP
##Week 9
###Chapter 10

---
#Forms

^ Forms are just HTML which allows for a user to communicate with a webserver.

---
#The web is stateless

---
#HTTP Verbs
* GET
* POST

---
#HTTP Verbs
##RESTful

* The book doesn't cover REST
* REST == Representational State Transfer
* Additional verbs: PUT and DELETE

---
#HTTP Verbs
##GET

* Appends parameters to the query string (URL)
* Asks the server for some information 

^ Do not put sensitive information in the query string

---
#HTTP Verbs
##POST

* Packages data up into the HTTP header
* Sends the server some information 

---
#So what does the server do with these requests?

^ It uses the verb to figure out what type of request it is and the processes it

---
#The steps to produce a form

* The following steps are essential in producing a form. The next example illustrates how each of these steps is applied.

* START: Start the form with the HTML <form> tag.
* ACTION: The action attribute of the <form> tag is the URL of the PHP script that will process the data input from the form.

---
#The steps to produce a form
* METHOD: Provide an HTTP method on how to process the data input. The default is the GET method, but the POST method is most commonly used with forms.
* CREATE: Create the form with buttons, boxes, and whatever looks attractive using HTML tags and fields.

---
#The steps to produce a form
* SUBMIT: Create a submit button so that the form can be processed. This will launch the program listed in the action attribute.
* END: End the form with the </form> tag. End the HTML document with the </html> tag.

---
#Let's look at some examples

* [samples/getForm.html](samples/getForm.html)
* [samples/postForm.html](samples/postForm.html)

---
#```register_globals``` directive
* This feature has been DEPRECATED as of PHP 5.3.0 and REMOVED as of PHP 5.4.0.

^ When on, register\_globals will inject your scripts with all sorts of variables, like request variables from HTML forms. This coupled with the fact that PHP doesn't require variable initialization means writing insecure code is that much easier. It was a difficult decision, but the PHP community decided to disable this directive by default. When on, people use variables yet really don't know for sure where they come from and can only assume. Internal variables that are defined in the script itself get mixed up with request data sent by users and disabling register\_globals changes this. 

---
#Superglobal Arrays
* The superglobal arrays allow you to specify where the input data came from; that is, what method was used.

---
#Superglobal Arrays

![fit inline](https://dl.dropboxusercontent.com/s/ph2vaomtzhdzlbh/2015-03-30%20at%2010.42%20PM.png)

---
#Magic Quotes

* This feature has been DEPRECATED as of PHP 5.3.0 and REMOVED as of PHP 5.4.0.

^ But we're going to talk about it one more time since the book brought it up and it seems to still cause confusion for folks.

---
#Magic Quotes
##Preparing for old servers

```php
$string_to_escape = 'Fun\\ and\ sun';
if(get_magic_quotes_gpc()){
  //Magic Quotes are on so PHP will handle removing slashes
  $formatted_string = $string_to_escape; 
}else{
  //Magic Quotes are off so we need to handle them
  $formatted_string = stripslashes ($string_to_escape);
}

  echo $formatted_string; //Fun and sun
```

---
#```$_REQUEST```

* You don't need to know where the information is found
* This is O.K. for quick proof of concept applications but should not be used in production
* Always know what data is coming in, how it is coming in and where it is coming from

---
#```$_REQUEST```

* Always use the ```$_GET``` or ```$_POST``` accessors

NOTE: This is an instructor opinion on simple security

---
#```extract()``` function
> The extract() function will create variables from the $_REQUEST associative array. The variables will be named after keys in the array, and their values will be what the user typed into the form field.

* Again know what your data is

---
#Checkboxes
How we were doing things before:
* [samples/checkboxes/old.html](samples/checkboxes/old.html)
* [samples/checkboxes/old.php](samples/checkboxes/old.php)

---
#Multi Select and Checkboxes
A New way:
* [samples/checkboxes/old.html](samples/checkboxes/old.html)
* [samples/checkboxes/old.php](samples/checkboxes/old.php)

---
#Multi Select

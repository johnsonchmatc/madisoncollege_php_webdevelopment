#Lab 9
###Due Date: 11/09/2015

##Directions:
* Create a folder called ```lab_9``` in your ```php_course_work``` folder 
* Use the following sql to create a database for your 

```sql
create database IF NOT EXISTS lab_9_madlibs;

use lab_9_madlibs

CREATE TABLE IF NOT EXISTS `Madlibs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Story` text,
  `Noun` varchar(255) DEFAULT NULL,
  `Verb` varchar(255) DEFAULT NULL,
  `Adjective` varchar(255) DEFAULT NULL,
  `Adverb` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
);
```
* Next create a file called index.php and add the contents from this [gist](https://gist.github.com/johnsonch/26abec9d0d0b843deb99)
* Then create a file called madlibs.php and create the following class class inside of there (make sure it's inside of a ```<?php ?>``` tag).

```php
class Madlib
{
  private $noun;
  private $verb;
  private $adjective;
  private $adverb;
  private $story;
  
}
```

* Next use Object Oriented PHP with the provided code to do the following:
  * Generate and save a madlib story
  * Show all completed madlibs pulled from the provided database
  * Extra: show errors for missing values

* Add and commit the files along your way. 
* Remember to push frequently to github as a backup.
```$ git push origin master```


##Turn in instructions
* Go to blackboard and submit your github username and the repository url, or 
show the code to your instructor.

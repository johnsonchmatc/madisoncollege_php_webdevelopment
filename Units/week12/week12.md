footer:@johnsonch :: Chris Johnson :: Web Development with PHP and MySQL :: Week 12
autoscale: true

#Web Development with PHP and MySQL
##Regular Expressions and Pattern Matching
###Week 12


---
#What is a Regular Expression?

> A sequence of characters that forms a search pattern, mainly for use in pattern matching...

---
> Some people, when confronted with a problem, think
“I know, I'll use regular expressions.”   Now they have two problems.

---
#Validate an email

```
\w*@{1}\w*\.[a-z]{2,}\.*[a-z]{2,}*

cgjohnson1@madisoncollege.edu
cj@company.co.uk
fake@company.c-om
```

Which email is not a match?

---
#Validate an email in PHP

```php
$email = 'cgjohnson1@madisoncollege.edu';
if (preg_match('/\w*@{1}\w*\.[a-z]{2,}\.*[a-z]*/', $email, $matches)) {
  echo 'email is valid';
}
else {
  echo 'email is not valid';
}

```

---
#Let's break regular expressions down a bit

---

* Regular Expressions allow us to match patterns. First some rules on what makes up a regular expression or as is commonly known as regex:
    * All regular expressions must start with a forward slash ```/```, and end with a forward slash ```/```
    * A carat ```^``` means to start matching at the beginning of the string
    * A ```$``` means that the string must end
    * ```\d``` means look for a single digit
    * ```\w``` means look for a single alphanumeric character 0-9, A-Z, a-z
    * ```\s``` means look for a single white-space character
    * ```.``` means to look for any one character except a newline
    * ```{n}``` means to repeat the previous pattern n times. So, ```\d{10}``` means look for 10 digits
* The above expressions are called metacharacters

---
#Regexing a phone number

* Some examples of phone number formats

```
(608) 123-4567
(608)123-4567
608-123-4567
608 123 4567
608.123.4567
```

---
#Regexing a phone number

* If we want to match a 10 digit phone number with dashes - in between the area code, prefix, and the suffix, our regex would look like this:

![fit inline](http://flibbertigiblets.com/phpWebDevMySQL/images/regex-01.png)

---
#How do you expect me to remember this crap?

---
#Don't

---
#Remember one tool!
[http://www.phpliveregex.com/](http://www.phpliveregex.com/)

---
#And Practice

---
#PHP Regex functions (Perl style)
```
Function	                What It Does
preg_grep() (PHP4, PHP5) 	Returns an array of patterns that were matched.
preg_match()	            Performs a regular expression pattern match.
preg_match_all()	        Performs a global regular expression match.
preg_quote()	            Puts a backslash in front of regular expression characters found within a string.
preg_replace()	            Searches for a pattern and replaces it with another.
preg_replace_callback()	    Like preg_replace(), but uses a function for the replacement argument.
preg_split()	            Splits up a string into substrings using a regular expression as the delimiter.
```

^ The table above lists the PHP built-in functions that will be used for performing searches with regular expressions, performing searches and replacements, splitting up strings based on a regular expression delimiter, and so on.

---
#PHP Regex functions (POSIX style)
```
Function	      What It Does
ereg()	          Performs a regular expression pattern match.
eregi()	          Performs a case-insensitive regular expression pattern match.
ereg_replace()	  Searches for a pattern and replaces it with another.
eregi_replace()   Searches for a pattern and replaces it with another, case insensitive.
split()	          Splits a string into an array by using a regular expression as the delimiter.
spliti()	      Splits a string into an array by a regular expression and is case insensitive.
```

^ POSIX => Portable Operating System Interface

---
#Finding a pattern preg\_grep()
```php
$regex = '/Pat/';
$search_array = array('Margaret',
                      'Patsy',
                      'Patrick',
                      'Patricia',
                      'Jim');

$newArray = preg_grep($regex, $search_array );
print '<pre>Found '. count($newArray)." matches\n";
print_r($newArray);
```

* Output

```
Found 3 matches
Array
(
    [1] => Patsy
    [2] => Patrick
    [3] => Patricia
)
```

---
#preg\_match() vs preg\_match\_all()

```php
$regex = '/Pat/';
$search_array = array('Margaret',
                      'Patsy',
                      'Patrick',
                      'Patricia',
                      'Jim');
$search_string = implode(',',$search_array);

print '<h2>preg_match()</h2>';
$preg_match = preg_match($regex, $search_string );
print '<pre>Found '. $preg_match." matches\n"; //What will preg_match return?

print '<h2>preg_match_all()</h2>';
$preg_match_all = preg_match_all($regex, $search_string );
print '<pre>Found '. $preg_match_all." matches\n"; //What will preg_match_all return?
```

---
* Output

```
preg_match()

Found 1 matches
preg_match_all()

Found 3 matches
```

---
#Capturing output
```php
$regex = '/([Pp]at[a-z]*)/';
$search_array = array('Margaret',
                      'Patsy',
                      'Patrick',
                      'Patricia',
                      'Jim');
$search_string = implode(',',$search_array);
$preg_match_all = preg_match_all($regex, $search_string , $matches);

print '<h2>Capture</h2>';
print '<pre>Found ';
print_r($matches);
print " matches\n";
```

----
#Replacing text
```php
$old_string = 'I live in New Orleans.';
print "Original string: <em>$old_string</em><br />";
$new_string = preg_replace('/New Orleans/','Philadelphia', $old_string);
print "New string: <em>$new_string</em><br />";
```

----
#Replacing text
```php
$new_string = preg_replace('/blue/','upbeat', 'I am feeling blue, blue, blue.');
// $new_string: "I am feeling upbeat, upbeat, upbeat."

$new_string = preg_replace('/blue/','upbeat', 'I am feeling blue, blue, blue.', 1);
// $new_string: "I am feeling upbeat, blue, blue"

$new_string = preg_replace('/blue/i','upbeat', 'I am feeling BLue, BLUE.');
// $new_string: "I am feeling upbeat, upbeat.

$new_string = preg_replace('/(Peace) and (War)/i', "$2 and $1",'Peace and War');
// $new_string: "War and Peace"

$new_string = preg_replace('/5/e',"6*7","He gave me 5 dollars.");
// $new_string: "He gave me 42 dollars."
```

---
#Grep
> is a command-line utility for searching plain-text data sets for lines matching a regular expression

![fill](images/99449329.jpg)

---
#preg_grep()
* returns an array of values that match a pattern found in an array instead of a search string

---
#preg_grep()

```php
$regex = '/Pat/';
$search_array = array('Margaret','Patsy','Patrick',
    'Patricia','Jim');
sort($search_array);

$newArray = preg_grep($regex, $search_array );
print '<pre>Found '. count($newArray)." matches\n";
print_r($newArray);

$newArray = preg_grep($regex, $search_array, PREG_GREP_INVERT);
print 'Found '. count($newArray)." that didn't match\n";
print_r($newArray);
print '</pre>';
```
[samples/grep.php](samples/grep.php)

^ When the PREG_GREP_INVERT flag is specified, the preg_grep() function will match and return any elements not found in the original array.

---
#Getting Control - The RegEx Metacharacters

* Regular expression metacharacters are characters that do not represent themselves. They are endowed with special powers to allow you to control the search pattern in some way.
* [http://www.phpliveregex.com/](http://www.phpliveregex.com/) has a good common list

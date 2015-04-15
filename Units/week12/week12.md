#Regular Expressions and Pattern Matching
##Chapter 12
###Week 12

----
#What is a Regular Expression?

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

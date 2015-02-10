#In-class Lab 3.1


##Exercise 1 - Operator Precedence: "and" versus &&

* Create a directory named lab03 under your labs directory, which is under your Nitrous.IO's workspace/www folder. 
* Open a text editor and create a file named: lab03x1.php This file will contain a block of PHP code wrapped in HTML, similar to the examples your instructor has demonstrated in class.
* Create three PHP variables: $ten, $five and $zero Assign them the values: 10, 5 and 0
* Write an assignment statement that "ands" together $ten, $five and $zero, using the && operator, placing the result in variable $answer .
* Then write a print or echo statement using double quotes, that shows what happened in the assignment statement; something similar to:

```
echo "The expression: $ten && $five && $zero yields ". (int) $answer;
```

*  Second, write an assignment statement that "ands" together $ten, $five and $zero, using the and operator, again placing the result in variable $answer .
*  Then write a print or echo statement using double quotes, that shows what happened in this assignment statement.
*  Third, write an assignment statement that "ands" together $ten, $five and $zero, using the and operator, but gives the same result in variable $answer as did the assignment statement using && . What did you do to overcome the lower operator precedence of "and"?
*  Then write a print or echo statement using double quotes, that shows what happened in this assignment statement.
*  Show your instructor the working lab03x1.php script.


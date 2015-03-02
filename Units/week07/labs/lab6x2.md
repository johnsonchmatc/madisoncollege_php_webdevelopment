##Exercise 1 - Write functions to format input strings for display and storage

Create a directory named lab06 under your labs directory, which is under your webserver's document root, if it does not already exist.

Create a script named lab6x2.inc.php and save it into your lab06 directory.

First build a function named ```format_for_db()``` that accepts a string as input and adds "\" characters to it as needed to escape special characters used by MySQL and other databases. Your function should also convert any HTML special characters to their non-HTML character equivalents.

Step 1 in building ```format_for_db()``` is to test whether the ```magic_quotes_gpc``` directive is on, using a PHP built-in function.

If "magic quotes" is on, your ```format_for_db()``` function does not need to modify the string to escape characters, because PHP will have already done so automatically! But, if "magic quotes" is off, your function must call the PHP built-in function ```addslashes()``` to add "\" characters.

Your ```format_for_db()``` function should call the PHP built-in function ```htmlspecialchars_decode()``` to convert any HTML special characters to individual non-HTML characters.

Finally your function must return the (possibly modified) string to the caller.

Now build a function named ```format_for_display()``` that accepts a string as input and removes "\" characters if needed so you can display it with echo or print and not have extra backslashes in the output. Your function should also convert any non-HTML characters that correspond to HTML special characters to their HTML equivalents.

Step 1 in building ```format_for_display()``` is (again) to test whether the magic_quotes_gpc directive is on, using a PHP built-in function.

If "magic quotes" is on, your ```format_for_display()``` function must call the PHP built-in function ```stripslashes()``` to remove "\" characters. But, if "magic quotes" is off, your function does not need to remove any "\" characters.

Your ```format_for_display()``` function should call the PHP built-in function ```htmlspecialchars()``` to convert any non-HTML characters that correspond to HTML special characters to their HTML equivalents.

Finally the ```format_for_display()``` function returns the (possibly modified) string to the caller.

Save your two functions to the lab6x2.inc.php file in your lab06 directory. You will test the functions in Exercise 2.

##Exercise 2 - Test your functions with user input.

Download the files [lab6form.html](lab6form.html) and [lab6x2.php](lab6x2.php) from Github to your lab06 directory.

Add a line to lab6x2.php to ```require()``` the file containing your two functions (lab6x2.inc.php).

Then, add code to lab6x2.php so that for the name, address and email address obtained from the user on lab6form it displays the contents of the variables in three (3) ways:

"As is" - it already does this (try it).
After being processed by your ```format_for_db()``` function.
After being processed by your ```format_for_display()``` function.
Try the modified lab6x2.php script with the name: Shaun O'Brien
Also, try addresses containing characters such as double quotes, single quotes, backslashes, and HTML entities such as &nbsp; , &lt; and &gt; .

Show your instructor the modified lab6x2.php script and the lab6x2.inc.php include file containing your functions.

In which cases did your two functions actually modify the input strings? Why?


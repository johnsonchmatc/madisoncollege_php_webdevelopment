footer:@johnsonch :: Chris Johnson :: Web Development with PHP and MySQL :: Week 13
autoscale: true

#Web Development with PHP and MySQL
##Drawing dynamic graphics
###Week 13

---
#PHP GD Graphics Functions

The PHP GD (Graphics Draw) Library provides dynamic image drawing capabilities. There are many functions in the GD library. They allow you to create and manipulate images in various formats (GIF, PNG, JPEG, WBMP, and XPM).

---
#PHP GD Graphics Functions

* Create a resource using ```imagecreatetruecolor()```. This will create a blank (black) image in memory to be used with other GD functions. When this function is called it will return a reference to the image resource which will be used by other GD functions.
* When we are done creating our image, we can either output it to a file or directly to the browser using ```imagepng()```

---
#PHP GD Graphics Functions

Let's try this code out

```php
$width = 100;
$height = 25;

$img = imagecreatetruecolor($width, $height);

// Output the image as a PNG using a header
header("Content-type: image/png");
imagepng($img);
```

[example1.php](samples/example1.php)

---
#PHP GD Graphics Functions

* To create colors that can be used by the other GD functions, use ```imagecolorallocate()```. The first argument is the image resource, and the last three argmuments are the three numeric values of an RGB (Red-Green-Blue) color value. RGB components are single byte values (0 – 255). This function will return a reference to the color that is used by other GD functions.

```php
// We want a white background, black text and gray graphics
$bg_color = imagecolorallocate($img, 255, 255, 255);    // white
$text_color = imagecolorallocate($img, 0, 0, 0);        // black
$graphic_color = imagecolorallocate($img, 64, 64, 46);  // dark gray
```

---
#PHP GD Graphics Functions

* To create a background color for the whole image, use ```imagefilledrectangle()``` using the image width and height. This function draws a rectangle that is filled in with the given color.

```php
// bool imagefilledrectangle ( resource $image , int $x1 , int $y1 , int $x2 , int $y2 , int $color )
imagefilledrectangle($img, 0, 0, $width, $height, $bg_color);
```

---
#PHP GD Graphics Functions

* To set a specific pixel within the image, we use the ```imagesetpixel()``` function. This function draws a single pixel at a specified coordinate within the image. The coordinate numbering system starts in the upper-left-hand corner of the image as 0,0.

```php
// bool imagesetpixel ( resource $image , int $x , int $y , int $color )
imagesetpixel($img, $x, $y, $graphic_color);
```


---
#PHP GD Graphics Functions

* To draw lines on the image use ```imageline()```. This function allows you to draw lines between two specified coordinates.

```php
//bool imageline ( resource $image , int $x1 , int $y1 , int $x2 , int $y2 , int $color )
imageline($img, 5, 5, $width - 10, $height - 10, $graphic_color);
```

---
#PHP GD Graphics Functions
* To draw an elipse on the image use imageellipse(). This function requires a center point coordinate, a width, a height, and a color.

```php
// bool imageellipse ( resource $image , int $cx , int $cy , int $width , int $height , int $color )
imageellipse($img, $width / 2, $height / 2, $width - 8, $height - 8, $graphic_color);
```

---
#PHP GD Graphics Functions

* To draw a string using PHP’s built-in font, call imagestring(). This function takes a color, a size (1 – 5), the XY coordinate of the upper-left corner of the string, and the string as arguments.

```php
//bool imagestring ( resource $image , int $font , int $x , int $y , string $string , int $color )
imagestring($img, 4, 5, 5, 'some text', $text_color);

```

---
#PHP GD Graphics Functions

* To draw text on the image vertically (rotated 90 degrees counterclockwise) use imagestringup(). The arguments are the same as for imagestring(), except the XY coordinate starts in the lower-left corner of the string.

```php
//bool imagestringup ( resource $image , int $font , int $x , int $y , string $string , int $color )
imagestringup($img, 4, 5, 5, 'vertical!', $text_color);
```


---
#PHP GD Graphics Functions
If you want to rotate an image use imagerotate(). This function requires a rotation angle specified in counterclockwise degrees and a background color to fill in the exposed parts of the image after rotation. This function will return the rotated image as an image resource.

```php
//resource imagerotate ( resource $image , float $angle , int $bgd_color [, int $ignore_transparent = 0 ] )

$rotated_img = imagerotate($img, -5, $bg_color);
```

[example2](samples/example2.php)

---
#reCaptcha

> reCAPTCHA is a free service that protects your website from spam and abuse. reCAPTCHA uses an advanced risk analysis engine and adaptive CAPTCHAs to keep automated software from engaging in abusive activities on your site. It does this while letting your valid users pass through with ease.

> reCAPTCHA offers more than just spam protection. Every time our CAPTCHAs are solved, that human effort helps digitize text, annotate images, and build machine learning datasets. This in turn helps preserve books, improve maps, and solve hard AI problems.

[implement recaptcha tutorial](http://webdesign.tutsplus.com/tutorials/how-to-integrate-no-captcha-recaptcha-in-your-website--cms-23024)

---
#Demo

If you have a gmail account you can easily follow along with your own account, if not your instructor will provide keys via codecaster.io

To get a key go to [https://www.google.com/recaptcha/admin](https://www.google.com/recaptcha/admin)

We're going to create a folder to put this code in, let's call it ```recaptcha```. Inside of the folder we're going to create an ```index.php``` file and add the following:

```php
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>reCaptcha</title>
  </head>
    <body>
        <form action="process.php" method="post">
            <label for="name">Name:</label>
            <input name="name" required><br />

            <label for="email">Email:</label>
            <input name="email" type="email" required><br />

            <input type="submit" value="Submit" />
        </form>
  </body>
</html>
```

Next we'll add at the bottom of our ```index.php``` file right above the closing ```</body>``` tag the javascript to display our captcha widget:

```html
<script src='https://www.google.com/recaptcha/api.js'></script>
```
Then we need to tell the javascript where to place the actual widget on the page, we'll put it between the email field and the submit button:

```html
<div class="g-recaptcha" data-sitekey="6Le29BETAAAAAPPm_jFWs7ls4JeuwXBrTh2y_kkc"></div>
```

Now our form is all setup, let's work on processing and verifying the data. We'll start by creating a file called ```recaptchalib.php``` and adding the contents from: [https://github.com/google/recaptcha/blob/1.0.0/php/recaptchalib.php](https://github.com/google/recaptcha/blob/1.0.0/php/recaptchalib.php) to it.

Then we'll create a file called ```process.php``` to do our processing, and we'll add the following code to it:

```php
<?php
    require_once "recaptchalib.php";
?>
```

With our library required we can use it to validate the form post. To do the actual validation we're going to need our key from Google let's add that, again if you have your own you can use it or use the one provided by the instructor in codecaster.io.

```php
$secret = "";
```

To validate the captcha we'll need a new ```ReCaptcha``` object, let's instanciate one:

```php
$reCaptcha = new ReCaptcha($secret);
```

We're going to use a variable to store our response from Google in, let's declare it and set it to ```null``` so we know it's default state:

```php
$response = null;
```

Next we'll use our object to verify the value from the form if it was sent, we're going to make sure that the key ```g-recaptcha-response``` is present and not empty in the ```$_POST``` super global array.

```php
if (isset($_POST["g-recaptcha-response"]) && !empty($_POST["g-recaptcha-response"]))
{
    $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);
}
else
{
    header('Location: index.php');
}
```

The ```reCaptcha``` object has a method called ```verifyResponse``` which requires the a ```$_SERVER``` superglobal and the value from the form.

Lastly we can check if the response is successful or not:

```php
if ($response != null && $response->success)
{
    echo "Hi " . $_POST["name"] . " (" . $_POST["email"] . "), thanks for submitting the form!";
}
else
{
    header('Location: index.php');
}

Let's test it out!

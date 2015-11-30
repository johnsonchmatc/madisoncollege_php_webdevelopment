footer:@johnsonch :: Chris Johnson :: Web Development with PHP and MySQL :: Week 14
autoscale: true

#Web Development with PHP and MySQL
##Web Services
###Week 14

---
#What is a web service?

---
#What is RSS?

---
#What is XML?

---
#What is JSON?

---
#Let's build something to show the weather

---
#We'll need the following:

* API Key from [openweathermap.org](openweathermap.org)
* PHP Composer, [installation directions](https://laracasts.com/discuss/channels/tips/testing-cloud9-ide-with-composer-laravel)
* [Guzzler](https://github.com/guzzle/guzzle)

#Let's get our API Key

from [openweathermap.org](openweathermap.org).

> An application programming interface key (API key) is a code passed in by
computer programs calling an API (application programming interface) to identify
the calling program, its developer, or its user to the Web site.

We can explore the weather API using a command line tool called curl

```bash
curl 'api.openweathermap.org/data/2.5/weather?zip=53523,us&appid=<INSERT API KEY>'
```

#Now install PHP Composer

Composer is a dependency management tool for PHP, it's what well use to install
Guzzle

First we need open a terminal and cd into the directory where we'll create our
weather app. I've chosen ```weather_app``` to put my code in.

```bash
$ mkdir weather_app
$ cd weather_app
```

To install composer we'll use the following commands

```bash
$ curl -sS https://getcomposer.org/installer | php
$ sudo mv composer.phar /usr/local/bin/composer
```

This downloads composer and then renames it from composer.phar to composer and
moves it into an executable directory. Many libraries that composer can install
reference ```composer.phar``` on Cloud 9 it's recommended to have it be a single
word as the executable so by renaming the app from composer.phar to composer we
we just need to run it using the word composer. (Whew that's a mouth full!)

Next we'll install Guzzle by using the following command:

```bash
$ composer require guzzlehttp/guzzle
```

Now we'll have a folder named ```vendor``` which contains all of the Guzzle code!

Next we'll create a file called ```index.php``` and we can add the contents of
this [gist](https://gist.github.com/johnsonch/14f737293042d1137f82) so we'll have some nice bootstrap theme and a form to take in a postal
code all wired up for us!

Let's start the fun now!

We'll start by creating another file called ```weather.php``` and adding a php code block at the top the file and add some code
to load Guzzle.

```php
<?php
    require_once 'vendor/autoload.php';
    use GuzzleHttp\Client;
    use GuzzleHttp\Post\PostBody;
    use GuzzleHttp\Stream\StreamInterface;
    use GuzzleHttp\Exception\RequestException;
?>
```

This code requires a file that is maintained by Composer and contains the path to
load all the required files.  The ```use``` keyword loads in our classes for us.

Now we can add a guard to not run our API code if there is no postal code in the
```$_POST``` super global. Under our use statements let's add the following check.

```php
if (isset($_POST['submit']) && isset($_POST['postal_code']) && !empty($_POST['postal_code']))
{

}
```

Then we'll extract the ```postal_code``` from the ```$_POST``` super global and
interpolate it into our API url

```php
$postal_code = $_POST['postal_code'];
$api_key = '<YOUR API KEY>';
$url = "api.openweathermap.org/data/2.5/weather?zip=$postal_code,us&appid=$api_key";
```

Next we'll use some of our knowledge from our object oriented weeks and setup our
Guzzle client.

```php
$client = new Client();
```

The web isn't always reliable, so we're going to wrap our request in a try/catch
block.

```php
try{
    $response = $client->request('GET', $url, []);
    $response_body = $response->getBody();
    $decoded_body = json_decode($response_body);

} catch (RequestException $e){
    echo "HTTP Request failed\n";
    echo "<pre>";
    print_r($e->getRequest());
    echo "</pre>";
    if ($e->hasResponse()) {
        echo $e->getResponse();
    }
}
```

First we start by making the call using the ```request()``` method on the
```$client``` object. We pass 3 parameters into that method, first is the HTTP
verb we want to use, the second is the URL to request against and the third is
an array of properties (more for posts).  The result of that which we've assigned
to ```$response``` is an object with a method ```getBody()``` which returns the
body or content of the request.  Lastly we're going to convert the returned JSON
to an object we can get data from.

Lastly we can display our found information down below our form, let's add the
following code:

```php
<?php if($decoded_body): ?>
    <div class="row">
        <?php
            function convert_kelvin_to_fahrenheit($kelvin_temperature)
            {
                return ((((int) $kelvin_temperature - 273.15)* 1.8000) + 32.00);
            }
       ?>

        Current Temperature: <?= convert_kelvin_to_fahrenheit($decoded_body->main->temp) ?> <br />
        Current Humdity: <?= $decoded_body->main->humidity ?>% <br />
        Minimum Temperature: <?= convert_kelvin_to_fahrenheit($decoded_body->main->temp_min) ?> <br />
        Maximum Temperature: <?= convert_kelvin_to_fahrenheit($decoded_body->main->temp_max) ?> <br />

    </div>
<?php endif ?>
```

The basic API returns temperatures in Kelvin so we'll use a function to convert
them to Fahrenheit. This is where the ```json_decode``` works well because we
can access the properties of the JSON data like object properties.

Now to test our our working app!

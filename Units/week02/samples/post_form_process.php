<html>
    <head>
        <title>Process Form using POST</title>
    </head>
    <body bgcolor = "#ADD8E6">
        <h2>Here is the form input:</h2>
        <?php
            extract($_REQUEST);
        ?>

        Welcome to PHP <?= $your_name ?>!<br />
        Can I call you at <?= $your_phone?>?<br />
        Is it ok to send you email at <?= $your_email_addr ?>?<br />
    </body>
</html>

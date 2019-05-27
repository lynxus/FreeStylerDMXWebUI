2019 - V1.0

Installation:
You need a webserver that can access the FreeStyler DMX webserver on port 3332.
The webserver only needs PHP installed. (For example something like XAMPP with just Apache and PHP running)

Place all these files in your webserver document root (if using xampp, this will be something like c:\xampp\htdocs\)

Run the server, connect to index.php in a browser and it SHOULD work

--------------------------

Many files exist here. Dont worry, you only need to care about 3 of them! the rest are just to make the page work properly.

config.php - Set your Freestyler IP address and Port (normally 3332)

index.php - The main controller page. It has a bunch of javascript that calls the api-to-tcp.php page (that then posts the data to the freestyler server and returns data back to index.php

api-to-tcp.php - The main file that calls and sends data to the freestyler webserver. This is where the functions are that the javascript on the index.php file lives.

No formal support exists for this..
Its free, Share, Etc etc,.. Dont sell it!
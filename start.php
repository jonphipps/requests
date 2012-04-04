<?php


// Map Requests
Autoloader::map(array(
    'Requests' => Bundle::path('requests').'/Requests.php'
));


// Next, make sure Requests can load internal classes
Requests::register_autoloader();
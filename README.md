phpqueue -- UNDER CONSTRUCTION
==============================
Queue system in php

## Install

Install via [Composer](http://getcomposer.org)

	{
	    "require": {
	        "juanber84/phpqueue": "dev-master"
	    }
	}

## Autoloading

Composer generates a vendor/autoload.php file. You can simply include this file and you will get autoloading for free.

```php
require 'vendor/autoload.php';
```

## Example of Publisher

```php
<?php
require 'vendor/autoload.php';

use phpqueue\Publisher;

for ($i=0; $i < 10000; $i++) { 
	$messages[] = $i;
}

$publisher = new Publisher();
$publisher->setQueue('123456');    	  	
$publisher->setMessage($messages);
$publisher->publish();
```

## Example of Consumer

```php
<?php
require 'vendor/autoload.php';

use phpqueue\Consumer;

$consumer = new Consumer();
$consumer->setQueue('123456'); 
do {
	echo $consumer->pickup(); 
	// try it out
} while (true);   	
```
# New feature (Panel)

For use it you must put a virtual host in /phpqueue/panel/web
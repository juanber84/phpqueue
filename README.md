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

$data = array(
	'name' 		=> 'juan',
	'surname' 	=> 'berzal',
	'email' 	=> 'juanber84@gmail.com'
);

$messages =json_encode($data);

$publisher = new Publisher();
$publisher->setQueue('123458');         
$publisher->setMessage($messages);
$publisher->setBlock_send(true);   // synchronous send
//$publisher->setBlock_send(false);  // asynchronous send
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

## How configure

Put user, pass and your queue's key in config.json
You must put a virtual host in /panel/web
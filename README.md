# Open Source Codeigniter Authentication.

A complete web sample and template of a secure authentication system using the Codeigniter PHP framework. Very simple configuration, as most of it has been done in this sample.


## Authored by: Nicholas Cerminara

## Demo available at http://stellarfrequency.com/

## Intro and Notes

This is a very simple starter-kit I wrote for Facebook Authentication and Codeigniter. Naturally, Facebook plays very nicely with the Codeigniter framework. This starter kit provides as an example for laying out your controlers and models logic. Enjoy! And all feedback is very welcome!


## Installation Instructions

###	Installing

1.	Unzip package
2.	Upload entire folders to server
3.	Create a database on your server, import stellarfrequency.sql (phpMyAdmin)
4.	Go to application/config/config.php
5.	Change $config['base_url'] to your base URL
6.	Change $config['encryption_key'] to a completely random character string
7.	Go to application/config/database.php and connect to your database
8.  Go to developers.facebook.com and create a Facebook Application (make sure you specify App Domain and Website)
9.  Go to application/config/Facebook.php and put in your APP_SECRET and APP_ID
10. Go to application.com/config/Stellar.php and enter your Facebook Permissions (https://developers.facebook.com/docs/authentication/permissions/)

##	Documentation

Very quickly, you'll notice your models, controllers, libraries, and config folder to have custom scripts. This works the Facebook SDK with codeigniter smoothly.

Normally, you call the facebook API by creating an object and doing $facebook->"function". However, this requires one extra step of $this->facebook->"function". The Facebook library is autoloaded by the Codeigniter framework in this installation.

You'll notice I tied the Facebook libary to the model just for the sake of keeping straight forward MVC convention. This build only implements the PHP SDK.

There are example functions in the Model to demonstrate some good practice for using cURL to call to the Facebook Graph API. The way the functions are setup are meant to provide error handling and return any JSON error information you would like to do additional logging or error handling.

Please feel free to contact me with suggestions, improvements, or questions! Thanks guys, I hope this helps at least one person out there!
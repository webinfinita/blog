Webinfinita Simple Blog for Laravel 5 (BETA)
===================

> **Note:** Don't use this package just yet. Work in progress.

----------
This is a simple blog package for laravel 5, the goal is to provide a starting point to a scalable blog post.


Installation
-------------

First we need to install it through composer

```
composer require "webinfinita/blog"
```

Then we need to add the service provider

```
// config/app.php

<?php

return [
	...
	...
	'providers' => [
		...
		...
        'Webinfinita\Blog\Providers\BlogServiceProvider',
    ],
];
```
Publish the migration and views

```
php artisan vendor:publish
```


We use a Trait to make a User have many Posts

```
// app/User.php

<?php namespace App;

...
use Webinfinita\Blog\Traits\HasManyPosts;

class User extends Model implements ... {

	use Authenticatable, CanResetPassword, HasManyPosts;
	...
```
In order to restrict access to a Post that doesn't belong to a user we need to add a register a Middleware

```
// app/Http/Kernel.php

<?php namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel {
	
	...
	
	protected $routeMiddleware = [
		...
        'post.owner' => 'Webinfinita\Blog\VerifyPostOwner',
	];

}

```


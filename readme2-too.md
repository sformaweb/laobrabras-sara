https://github.com/amranidev/scaffold-interface

https://github.com/amranidev/scaffold-interface

ver: https://dev.to/tutsmake/laravel-8-tutorial-for-beginners-step-by-step-1i30

Reunir laobrabrabra coas migracions ''sol'' de nova obra



Logo empregar scaffold interface

https://github.com/amranidev/scaffold-interface-docs/tree/master/getting_started

``composer require amranidev/scaffold-interface:*``

Installation
Run the following command:
composer require amranidev/scaffold-interface

Add the service providers to config/app.php:
Amranidev\ScaffoldInterface\ScaffoldInterfaceServiceProvider::class,
Amranidev\Ajaxis\AjaxisServiceProvider::class,
Spatie\Permission\PermissionServiceProvider::class,
Pusher\Laravel\PusherServiceProvider::class,
Publish the assets in your application with:
php artisan vendor:publish

Run migrations:
php artisan migrate

Authentication scaffolding:
php artisan make:auth

Add HasRole dependency to app/User.php:
```php
<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;
}
```


https://www.mywebtuts.com/blog/laravel-livewire-fullcalendar-integration-example

https://www.sistekperu.com/blog/aprende-a-usar-procedimientos-almacenados-en-laravel

Plugins:

- Laravel Generator - IntelliJ IDEs Plugin | Marketplace (jetbrains.com)



Laravel Best Practices

- ref: Crear un panel de administración:
    - https://blog.devgenius.io/laravel-create-an-admin-panel-from-scratch-part-1-installation-8c11dae7e684




https://javiergutierrez.trade/crud-con-jetstream-y-twailwind-laravel-8-inertia/#paso-6-crear-rutas-y-protegerlas-con-laravel-sanctum


https://codepen.io/tippingpointdev/pen/QWMvwKx   toltips!!!css
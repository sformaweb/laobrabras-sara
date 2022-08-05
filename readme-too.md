## Crear a app

``laravel new laobrabra --git``

superadmin@example.com

**Ferramentas de desenvolvemento:**
https://postsrc.com/code-snippets/make-phpstorm-smarter-with-laravel-ide-helper

## Engadir primeiras rutas e primeiros contidos

Podemos crear vistas e rutas extáticas duplicando os modelos iniciais que trae Laravel.



## Engadir TailwindCSS

https://tailwindcss.com/docs/guides/laravel

1. Instalamos `tailwindcss`  e as súas dependencias a través de ``npm``. Na acción se vai crear o arquivo `tailwind.config.js`

```bash
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init
```

2. Engadimos Tailwind á configuración de Laravel Mix. No arquivo `webpack.mix.js`, engadimos `tailwindcss` como complemento PostCSS:

```javascript
//webpack.mix.js
mix.js("resources/js/app.js", "public/js")
  .postCss("resources/css/app.css", "public/css", [
    require("tailwindcss"),
  ]);
```

3.  Configuramos os camiños dos modelos. Engadimos os camiños a todos os arquivos de modelos no arquivo `tailwind.config.js` .

```js
   // tailwind.config.js
   
   module.exports = {
     content: [
       "./resources/**/*.blade.php",
       "./resources/**/*.js",
       "./resources/**/*.vue",
     ],
     theme: {
       extend: {},
     },
     plugins: [],
}
```

4. Engadimos as directivas  `@tailwind`   para cada unha das capas de Tailwind ao arquivo. `./resources/css/app.css`

```css
   @tailwind base;
   @tailwind components;
   @tailwind utilities;
```

5. E executámolo proceso de compilación con `npm run watch`.

6. Nos aseguramos de que o CSS compilado estea incluído na ``<head>`` da aplicación:

   ```html
   <!doctype html>
   <html>
   <head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
   </head>
   <body>
     <h1 class="text-3xl font-bold underline">
       Hello world!
     </h1>
   </body>
   </html>
   ```

   

### set Active links

https://aprendible.com/series/laravel-desde-cero/lecciones/activacion-de-links-de-navegacion

Imos a crear unha clase css (na cabeceira da aplicación):

```css
            .active {
                color: #20ccaa;
                text-decoration: none;
            }
```

A través da directiva ``request`` do propio framework podemos comprobar dinamicamente se estamos nunha determinada ruta, en caso afirmativo aplicaremos a nova clase, en caso negativo non ocorrerá nada.

```php+HTML
{{ request()->routeIs('home') ? 'active':'' }}
```





## Engadir breeze!

Só para desenvolvemento, pero imos precisar Breeze. 

Instalamos a dependencia con composer:

``composer require laravel/breeze --dev``

E instalamos os recursos de breeze a continuación:

``php artisan breeze:install``

Este comando publica as vistas, as rutas e os controladores de autenticación necesarios. 

Se comprobou o proxecto despois de executar breeze:install, verá unha morea de ficheiros creados:

- O cartafol ``app/Http/Controllers/Auth`` contén todos os controladores necesarios para as funcións de autenticación.

- O cartafol ``app/View`` contén dous compoñentes baseados en clases para deseños.

- As rutas de autenticación en ``routes/auth.php``

- Os directorios ``resources/views/auth``, ``resources/views/components``, ``resources/views/layouts``.

  

Se o *scaffolding* de Breeze se instala con éxito, executaremos
``npm install`` e 
``npm run dev`` 
para construír os activos necesarios.

Se non o fixemos antes, editamos agora ``.env`` coas credenciais da base de datos que imos a empregar na aplicación.

Instalar migracións de início:

```php artisan migrate```    //





## Crear primeiro usuario

Unha vez instalado o paquete Breeze como dependencia de desenvolvemento e unha vez rematada a tarefa de crear o novo usuario, comprobamos que todo funciona axeitadamente.

Como imos necesitar a figura de *superadministrador* teremos que modificar lixeiramente 

Podemos modificar as táboas en base a migracións creadas cun determinado patrón de nome. Así ao engadir o patrón ``_to_`` 

``php artisan make:migration add_isadmin_to_users_table``



Laravel entenderá que se trata dunha modificación da táboa co nome que segue - `users`:

``$table->boolean('is_admin')->nullable()``



---

Creamos unha sementeira para inserilos datos do primeiro usuario que asemade será o superadministrador:

``php artisan make:seeder CreateUsersSeeder``



```php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\User;  // engadimos o modelo a usar

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // aquí os datos do primeiro usuario
        $user = [
            [
                'name'=>'admin',
                'email'=>'admin@gmail.com',
                'password'=> bcrypt('123456'),
            ],
            [
                'name'=>'user',
                'email'=>'user@gmail.com',
                'password'=> bcrypt('123456'),
            ],
        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

```

?? https://www.autoscripts.net/role-acces-login-in-laravel/#role-acces-login-in-laravel

``php artisan make:middleware IsAdmin``

---

## Roles e permisos

<small>*_ref:_ https://blog.devgenius.io/laravel-user-roles-and-permissions-6dbfd4abfcf8*</small>

Instalamos un paquete para a xestión de permisos:

``composer require spatie/laravel-permission``

Copiamos a configuración a súa nova ubicación:

``php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"``

E corremos as migracións:

``php artisan migrate``

#### ii

**Spatie**

Imos agora a crear tres CRUD para a administración de roles e permisos:.

- Permisos
- Roles
- Usuarios

# Xestión de permisos CRUD

Os seguintes pasos son necesarios para crear o permiso CRUD para o noso panel de administración de Laravel.

- \1. Crea un modelo
- \2. Crea un controlador
- \3. Engadir rutas
- \4. Páxina de índice con ligazóns de acción
- \5. Crear operación
- \6. Operación de actualización
- \7. Ver operación
- \8. Engade unha ligazón á navegación

###### 1. Crea un modelo

En primeiro lugar, imos crear un modelo para o permiso CRUD. Crea o teu modelo usando o seguinte `make:model`comando Artisan creará un `Permission.php`ficheiro no `app/Models`cartafol

Tamén podemos crear os modelos e controladores manualmente. O `make`comando Artisan creará o ficheiro con funcións de esqueleto.

```php artisan make:model Permission```

###### 2

``php artisan make:controller Admin/PermissionController --model=Permission --resource``

A opción `--resource` serve para crear rapidamente un controlador para xestionar operacións de creación, lectura, actualización e eliminación ("CRUD").

...

Create the index.blade.php view file inside the admin/permission folder

``resources/views/admin/permission/index.blade.php``


## Crear ventana de aviso on delete
Engadimos unha dependencia
``npm install sweetalert``
Engadimos unha función -``deleteConfirm``- en ``app.js``

``js/app.js``
```js
import swal from 'sweetalert';
window.deleteConfirm = function (e) {
e.preventDefault();
var form = e.target.form;
swal({
title: "Are you sure you want to delete?",
icon: "warning",
buttons: true,
dangerMode: true,
})
.then((willDelete) => {
if (willDelete) {
form.submit();
}
});
}
```
Agora actualizamos a función ``onClick`` no enlace:
```php
<button class="px-4 py-2 text-white bg-red-600" onclick="deleteConfirm(event)">
   {{ __('Delete') }}
</button>
```
---

``composer require doctrine/dbal``

### Preparar permisos
https://spatie.be/docs/laravel-permission/v5/installation-laravel
``composer require spatie/laravel-permission``
---

```bash
php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"
```

``php artisan db:seed``
Podes executar o db:seedcomando Artisan para sementer a túa base de datos. Por defecto, o db:seedcomando executa a Database\Seeders\DatabaseSeederclase, que á súa vez pode invocar outras clases sementes. Non obstante, pode usar a --classopción para especificar unha clase de sementadora específica para executarse individualmente:

php artisan db:seed

php artisan db:seed --class=UserSeeder

Tamén pode sementer a súa base de datos usando o migrate:freshcomando en combinación coa --seedopción, que eliminará todas as táboas e volverá executar todas as súas migracións. Este comando é útil para reconstruír completamente a súa base de datos:

php artisan migrate:fresh --seed
---

<!-- ### Migrar de Mix a Vite~  NON !!~~~~
ref: https://balajidharma.medium.com/how-to-migrating-from-laravel-mix-to-vite-fbb912237844
Vite é a nova ferramenta de empaquetado de efectivos de Laravel:
``npm install --save-dev vite laravel-vite-plugin``

#### Configurar Vite
Creamos o arquivo ``vite.config.js`` na raíz do proxecto:

```js
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
export default defineConfig({
plugins: [
laravel([
'resources/css/app.css',
'resources/js/app.js',
]),
],
});
```-->
#### Actualizar os scripts NPM
En ``package.json``

```json
"scripts": {
-     "dev": "npm run development",
-     "development": "mix",
-     "watch": "mix watch",
-     "watch-poll": "mix watch -- --watch-options-poll=1000",
-     "hot": "mix watch --hot",
-     "prod": "npm run production",
-     "production": "mix --production"
+     "dev": "vite",
+     "build": "vite build"
  }
```

Crear controladores e modelos:
``php artisan make:controller Admin/EmpresaController --model=Empresa --resource``
``php artisan make:controller Admin/OftraballoController --model=Oftraballo --resource``

Crear migracións:
``php artisan make:migration create_cidadan_table``
``php artisan make:migration create_offormacion_table``


## Manter o ambiente limpo
``php artisan optimize:clear``


#### Easy tooltip                                                              
<!-- Component Start -->
      <div class="relative flex flex-col items-center group">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">                 <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-8-3a1 1 0 00-.867.5 1 1 0 11-1.731-1A3 3 0 0113 8a3.001 3.001 0 01-2 2.83V11a1 1 0 11-2 0v-1a1 1 0 011-1 1 1 0 100-2zm0 8a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
            </svg>
            <div class="absolute bottom-0 flex flex-col items-center hidden mb-6 group-hover:flex">
                 <span class="relative z-10 p-2 text-xs leading-none text-white whitespace-no-wrap bg-black shadow-lg"> {{__('Delete') }}</span>
                 <div class="w-3 h-3 -mt-2 rotate-45 bg-black"></div>
            </div>
      </div>
<!-- Component End  -->

## Axenda básica

https://dev.to/savanihd/laravel-fullcalendar-ajax-crud-48hk

https://www.tutsmake.com/laravel-9-livewire-fullcalendar-integration-example/

Add Livewire:
`composer require livewire/livewire`

Add styles ans scripts


Once you installed livewire, you should able to see livewire commands on php artisan.

``php artisan make:livewire calendar``

This command will create the following components on the following path:

``app/Http/Livewire/Calendar.php``

``resources/views/livewire/calendar.blade.php``
puffff

----
Este me funcionou
https://www.itsolutionstuff.com/post/laravel-8-fullcalendar-with-create-edit-delete-event-exampleexample.html
peron se ve en dashboard

cunha compoñente
https://www.w3adda.com/blog/laravel-8-maddhatter-laravel-fullcalendar-tutorial-with-example

'Calendar' => MaddHatter\LaravelFullcalendar\Facades\Calendar::class,



----

# Laravel Migrations Generator

he recommended way to install this is through composer:

```bash
composer require --dev "kitloong/laravel-migrations-generator"

// para executar
php artisan migrate:generate

// seeder inicial
php artisan db:seed --class=PermissionsDemoSeeder 
```

---

### Outos req

- Un requirimento de interes

  - ```bash
    composer require doctrine/dbal
    ```

- PHPStorm plugin [Laravel Code Generator](https://plugins.jetbrains.com/plugin/15276-laravel-code-generator) necesita este paquete

```bash
composer require googee/entity --dev
```



### Livewire

**``composer require livewire/livewire``**
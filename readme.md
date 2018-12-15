<p align="center">CmsX - Demo</p>

# vytvoření aplikace pro testování package

## Instalace Laravel

```
composer create-project --prefer-dist laravel/laravel <appname>
```

```
git clone git@github.com:c18app/cmsx.git <reponame>
```

- přidat do composeru
```
"repositories": [
    {
        "type": "path",
        "url": "../path/to/your/package",
        "options": {
            "symlink": true
        }
    }
]
```
- zavolat
```
composer require "c18app/cmsx @dev"
```
```
composer update c18app/cmsx --prefer-source
```
Laravel autentikace (doporučuju vždy)
```
php artisan make:auth
```
.env
- APP_NAME
- db connection
- mailtrap

config
- app
    - timezone => Europe/Prague
    - locale => cz
- database
    - charset => utf8
    - collation => utf8_unicode_ci
    - engine => InnoDB
- auth
    - providers/users/model => C18app\Cmsx\Models\User::class    

```
php artisan migrate
#php artisan migrate:fresh
```
vyprázdnit
- public/css/app.css
- public/js/app.css

nainstalovat
```
composer require barryvdh/laravel-debugbar --dev
```

zakomentovat
- routes/web.php... řádek pro GET /

vypublikovat
```
php artisan vendor:publish --tag=c18app_cmsx
#php artisan vendor:publish --tag=c18app_cmsx --force
```

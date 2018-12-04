<p align="center">CmsX - Demo</p>

# vytvoření dev pro vývoj package

## Instalace Laravel

```
composer create-project --prefer-dist laravel/laravel <dev_app_name>
```

## Vytvoření gitu

přepnout se do adresáře <dev_app_name>
```
git init
git add .
git commit -m "initial commit"
```

## Klon repozitáře

```
git clone git@github.com:c18app/cmsx.git <repo_name>
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
- public/js/app.js

nainstalovat
```
composer require barryvdh/laravel-debugbar --dev
```

zakomentovat
- routes/web.php... řádek pro GET /

## Nastavit v PHP Stormu

- Tools/File Watchers/Less

```
File type: Less Style Sheet
Scope: nastavit na cestu <REPO>:src/assets/less/*

Program: nastavit na less.cmd
Arguments: $FileName$ ..\css\admin\$FileNameWithoutExtension$.css --source-map
Output paths to refresh: $FileNameWithoutExtension$.css:$FileNameWithoutExtension$.css.map

Advanced
Auto-save edited files to trigger the watcher: check
Trigger the watcher on external changes: check
ostatní nezaškrtávat
```

- v public vytvořit cestu vendor/c18app/

- spustit WINDOWS konzolu
```
mklink /D <cesta k DEV/public/vendor/c18app/cmsx> <cesta k REPO/src/assets>
```

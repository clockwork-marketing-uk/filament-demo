# Filament Demo App

A demo application to illustrate how Filament works. This has been extended to try out colours for the new GuestNet and GVB admin panels.

![Filament Demo](https://github.com/filamentphp/demo/assets/171715/899161a9-3c85-4dc9-9599-13928d3a4412)

[Open in Gitpod](https://gitpod.io/#https://github.com/filamentphp/demo) to edit it and preview your changes with no setup required.

## Clockwork styling

### Admin panels
There are three admin panels:
- `AdminPanelProvider` (the default Filament demo)
- `GuestNetPanelProvider`
- `GvbPanelProvider`

### Colours and theming
Colours are set in the admin panels and in `AppServiceProvider` base based on brand guidelines.

Use the `tints.dev` tool to play with the colours and add them to App\Support\Colors.

- System colours: https://www.tints.dev/palette/v1:ZGFuZ2VyfDY2MTcyOHw5MDB8cHwwfDB8MTB8OTV8YX53YXJuaW5nfEUwNjc0OHw1MDB8cHwwfDB8MjJ8OTV8YX5zdWNjZXNzfDMwN0E1RXw2MDB8cHwwfDB8MHwxMDB8YQ
- Clockwork colours: https://www.tints.dev/palette/v1:bmF2eXwxQjJBM0N8NzAwfHB8LTF8LTJ8MHwxMDN8bX50ZWFsfDM5NkI3NXw3MDB8cHwtMXwtMnwxNXwxMDB8YX5ncmF5fDQ1NEM1Mnw3MDB8cHwwfDB8MTV8MTAzfG1-cHVycGxlfDlBNzJCMXw3MDB8cHwwfDB8MjB8MTAwfG1-Ymx1ZXwzRDU0NzV8NzAwfHB8MHwwfDB8MTAwfG1-c3VjY2Vzc3wzMDdBNUV8NjAwfHB8MHwwfDE1fDEwMHxhfmRhbmdlcnw2NjE3Mjh8OTAwfHB8MHwwfDEwfDk1fGF-d2FybmluZ3xFMDY3NDh8NTAwfHB8MHwwfDIyfDk1fG0
- GVB colours: https://www.tints.dev/palette/v1:cGlua3xDRjE5NkV8NjAwfHB8MHwwfDIwfDEwMHxh

## Installation

Clone the repo locally:

```sh
git clone https://github.com/laravel-filament/demo.git filament-demo && cd filament-demo
```

Install PHP dependencies:

```sh
composer install
```

Setup configuration:

```sh
cp .env.example .env
```

Generate application key:

```sh
php artisan key:generate
```

Create an SQLite database. You can also use another database (MySQL, Postgres), simply update your configuration accordingly.

```sh
touch database/database.sqlite
```

Run database migrations:

```sh
php artisan migrate
```

Run database seeder:

```sh
php artisan db:seed
```

> **Note**  
> If you get an "Invalid datetime format (1292)" error, this is probably related to the timezone setting of your database.  
> Please see https://dba.stackexchange.com/questions/234270/incorrect-datetime-value-mysql


Create a symlink to the storage:

```sh
php artisan storage:link
```

Run the dev server (the output will give the address):

```sh
php artisan serve
```

Or use Herd and visit the repo-name.test
```sh
herd link
herd init
npm run dev
```

You're ready to go! Visit the url in your browser, and login with:

-   **Username:** admin@filamentphp.com
-   **Password:** password

## Features to explore

### Relations

#### BelongsTo
- ProductResource
- OrderResource
- PostResource

#### BelongsToMany
- CategoryResource\RelationManagers\ProductsRelationManager

#### HasMany
- OrderResource\RelationManagers\PaymentsRelationManager

#### HasManyThrough
- CustomerResource\RelationManagers\PaymentsRelationManager

#### MorphOne
- OrderResource -> Address

#### MorphMany
- ProductResource\RelationManagers\CommentsRelationManager
- PostResource\RelationManagers\CommentsRelationManager

#### MorphToMany
- BrandResource\RelationManagers\AddressRelationManager
- CustomerResource\RelationManagers\AddressRelationManager

# Paint (Ladmin Template)

VIew complete documentation for [Ladmin Package &rarr;](https://github.com/hexters/ladmin)

## Installation

Add the repository by running the command below.

```bash
$ composer require hexters/paint
```

Publish the module by running the command below.

```bash
$ php artisan vendor:publish --tag=paint-module --force
```

Run mix manifest.

```bash
$ cd Modules/Paint && npm install && npm run prod
```

# Vintage Template

Open `config/ladmin.php` file and change template option.

```php
. . .

'template' => [
    'module' => 'paint',
    'framework' => 'vintage'
],

. . .
```

![Vintage Template](https://github.com/hexters/assets/blob/main/ladmin-package/paint/vintage/overview.png?raw=true)
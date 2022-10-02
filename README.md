Standard Sylius project with few extensions, such as:
 - Product entity extended with color field
 - ProductType form extended with ProductTypeExtension
 - Translations
 - Possibility to pick a color for a product in admin panel
 - View of picked color on product site



Installation
------------

```bash

$ git clone <LINK>
$ cd project
$ create .env.local file and fill it up with your db data
$ composer install
$ yarn install
$ yarn build
$ php bin/console doctrine:database:create
$ php bin/console doctrine:schema:create
$ php bin/console sylius:fixtures:load
$ symfony server:start
$ open http://localhost:8000/ and http://localhost:8000/admin
```
Basic Login data (Administrator panel): 

Login: sylius 

Password: sylius


MIT License
-----------

Sylius is completely free and released under the [MIT License](https://github.com/Sylius/Sylius/blob/master/LICENSE).

Authors
-------

Sylius was originally created by [Paweł Jędrzejewski](http://pjedrzejewski.com).
See the list of [contributors from our awesome community](https://github.com/Sylius/Sylius/contributors).



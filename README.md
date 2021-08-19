# open-tour-website-lib

Create a new Symfony project

```
symfony new my-open-tour-website
cd my-open-tour-website
```

Include the library using composer

```
composer require apothan/open-tour-website-lib
composer require symfony/webpack-encore-bundle
composer require symfony/orm-pack
composer require symfony/security-bundle
```

Include the library using yarn

```
yarn add bootstrap
yarn add jquery
yarn add popper.js
```

Edit webpack.config.js 
change ".addEntry('app', './assets/js/app.js')" 
to ".addEntry('app', './vendor/apothan/open-tour-website-lib/assets/js/app.js')" 

Copy the file called apothan_open_tour_lib.yaml located in the 
config folder of the bundle and add it to the config/routes/ directory of your project.

clear cache
```
php bin/console cache:clear
```

access routes in the bundle by adding /OT prefix your site's root URL.

Requires:

Symfony >= 2.0
NodeJS >= 12.13.0

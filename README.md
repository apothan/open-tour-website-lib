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
yarn add @popperjs/core
```

Edit webpack.config.js entry from

```
.addEntry('app', './assets/js/app.js')
```

To 

```
.addEntry('app', './vendor/apothan/open-tour-website-lib/assets/js/app.js')
.addEntry('app', './vendor/apothan/open-tour-website-lib/assets/js/app.js')
.addEntry('tourcategories', './vendor/apothan/open-tour-website-lib/assets/js/tourcategories.js')
.addEntry('tourfeatures', './vendor/apothan/open-tour-website-lib/assets/js/tourfeatures.js')
.addEntry('toursells', './vendor/apothan/open-tour-website-lib/assets/js/toursells.js')
.addEntry('touritinerary', './vendor/apothan/open-tour-website-lib/assets/js/touritinerary.js')
```

Copy the file called apothan_open_tour_lib.yaml located in the 
config folder of the bundle and add it to the config/routes/ directory of your project.

clear cache
```
php bin/console cache:clear
```
Add your DB details in the .env file

Requires:

```
Composer >= 2.0
NodeJS >= 12.13.0
```

# pwapp
school-website

### Composer
Yii2 uses [Composer](https://getcomposer.org/), a dependency manager, to manage all packages required to run a web application.

A **vendor** directory is not included in the application's version control because all packages must be installed via Composer. To install open a console and access your **app** directory then run these commands to install dependencies:

```
sudo composer global require "fxp/composer-asset-plugin:^1.2.0"

sudo composer install
```

IMPORTANT: Do not add the **vendor** directory in version control. If you need to extend a specific package, extend them through your modules. Keep the project repository clean and lean. Likewise, Composer initialization should only be done once.

As soon as Composer made the proper initialization to the app, make sure that the following directories have the correct permissions:

```
chmod 0777 backend/runtime
chmod 0777 backend/web/assets
chmod 0777 frontend/runtime
chmod 0777 frontend/web/assets
chmod 0755 yii
chmod 0755 yii_test
```

When you have finished initialization, succeeding package installations and updates can be made by using this command instead:

```
sudo composer update
```

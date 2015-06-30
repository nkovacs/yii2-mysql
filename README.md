MySQL Schema extension
======================
Replacement MySQL Schema for Yii 2 with fixes.

Currently the only change is that `Schema::TYPE_TEXT` defaults to 'mediumtext'. This can be changed by
setting the `defaultTextType` property of the Schema.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist nkovacs/yii2-mysql "*"
```

or add

```
"nkovacs/yii2-mysql": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, add the following to your configuration file to overwrite the default mysql schema :

```php
Yii::$container->set('yii\db\mysql\Schema', 'nkovacs\mysql\Schema');
```

To change options :

```php
Yii::$container->set('yii\db\mysql\Schema', [
    'class' => 'nkovacs\mysql\Schema',
    'defaultTextType' => 'longtext',
]);
```

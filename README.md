Send SMS by epochtasms
======================
Send SMS by epochtasms

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist pashkinz92/yii2-epochtasms "*"
```

or add

```
"pashkinz92/yii2-epochtasms": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
'components' => [
...
    'epochtasms'=>[
                'class' => 'pashkinz92\git epochtasms\EpochtaClass',
                'sms_key_private' => 'sms_key_private',
                'sms_key_public' => 'sms_key_public',
                'testMode' => false, //Включение тестового режима
            ],
...
],
```

```php
\Yii::$app->epochtasms->sendSMS('USER_FROM', 'MESSAGE', 'USER_PHONE'); ```
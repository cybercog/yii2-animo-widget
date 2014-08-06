yii2-animo-widget
=================

https://github.com/ThrivingKings/animo.js

composer.json
---------
```json
"require": {
    "xj/yii2-animo-widget": "*"
},
```
In View
---------
```php
use xj\animo\AnimoAsset;
AnimoAsset::register($this);
```

In Assets depends
-----------
```php
public $depends = [
    'xj\animo\AnimoAsset',
];
```

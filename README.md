adminUI
=======

Yii2 admin ui based on AdminLTE free template

Status
=======
Its Under Development.

Installation
=======

Using ```composer```

```
"require": {
	...other dependency...	
	"mithun12000/adminui":"*"
},
```

Add as extension. Code:

```php

'adminUi' => 
  [
    'name' => 'adminUi',
    'version' => '1.0',
	'bootstrap' => 'yii\adminUi\AdminUiBootstrap',
    'alias' => 
    [
      '@yii/adminUi' => [EXTENSION_PATH] '/adminUi',
      '@vendor/adminUi/assets/' => [EXTENSION_PATH] '/adminUi/assets',
      '@app/themes/adminui' => [EXTENSION_PATH] '/adminUi/themes/',
    ],
  ],
  
```

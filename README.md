adminUI
=======

Yii2 admin ui based on AdminLTE free template

Status
=======
Its Under Development.

Installation
=======
Add as extension. code

'adminUi' => 
  array (
    'name' => 'adminUi',
    'version' => '1.0',
    'alias' => 
    array (
      '@yii/adminUi' => [EXTENSION_PATH] '/adminUi',
      '@vendor/adminUi/assets/' => [EXTENSION_PATH] '/adminUi/assets',
      '@app/themes/adminui' => [EXTENSION_PATH] '/adminUi/themes/',
    ),
  ),
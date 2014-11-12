<?php
use app\assets\AppAsset;
use yii\adminUi\assetsBundle\AdminUiAsset;
use yii\helpers\Html;
use yii\adminUi\widget\Header;
use yii\adminUi\widget\Nav;
use yii\adminUi\widget\NavBar;
use yii\adminUi\widget\NavBarUser;
use yii\adminUi\widget\NavBarMessage;
use yii\adminUi\widget\NavBarNotification;
use yii\adminUi\widget\NavBarTask;
use yii\widgets\Breadcrumbs;

/**
 * @var \yii\web\View $this
 * @var string $content
 */
AppAsset::register($this);
AdminUiAsset::register($this);
$this->beginPage()
?><!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>"/>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <title><?= Html::encode($this->title) ?></title>
	<?= Html::csrfMetaTags() ?>
    <?php $this->head() ?>
</head>
<body class="bg-black">
    <?php $this->beginBody();?>
    <?= $content ?>
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

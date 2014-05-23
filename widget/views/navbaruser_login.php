<?php
use yii\helpers\Url;
use yii\adminUi\assetsBundle\AdminUiAsset;

$bundle = AdminUiAsset::register($this);
?>
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
	<i class="glyphicon glyphicon-user"></i>
	<span><?php echo Yii::$app->user->identity->username;?> <i class="caret"></i></span>
</a>
<ul class="dropdown-menu">
	<!-- User image -->
	<li class="user-header bg-light-blue">
		<img src="<?php echo $bundle->baseUrl?>/img/avatar3.png" class="img-circle" alt="User Image" />
		<p>
			<?php echo Yii::$app->user->identity->username;?> - Web Developer
			<small>Member since Nov. 2012</small>
		</p>
	</li>
        <?php /*/?>
	<!-- Menu Body -->
	<li class="user-body">
		<div class="col-xs-4 text-center">
			<a href="#">Followers</a>
		</div>
		<div class="col-xs-4 text-center">
			<a href="#">Sales</a>
		</div>
		<div class="col-xs-4 text-center">
			<a href="#">Friends</a>
		</div>
	</li><?php //*/?>
	<!-- Menu Footer-->
	<li class="user-footer">
		<div class="pull-left">
			<a href="#" class="btn btn-default btn-flat">Profile</a>
		</div>
		<div class="pull-right">
                    <a href="<?php echo Url::toRoute('/site/logout');?>" data-method="post" class="btn btn-default btn-flat">Sign out</a>
		</div>
	</li>
</ul>
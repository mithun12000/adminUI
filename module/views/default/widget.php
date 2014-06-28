<?php
use yii\adminUi\widget\Box;
use yii\adminUi\widget\Row;
use yii\adminUi\widget\Column;
use yii\adminUi\widget\SmallBox;

$this->title = 'Widgets';
//$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
/*
Row::begin();
   echo  SmallBox::widget([
        'header' => 150,
        'Icon'  => 'ion ion-bag',
        'caption' => 'New Orders',
        'url'       => '#',
    ]);
   echo  SmallBox::widget([
        'header' => '53<sup style="font-size: 20px">%</sup>',
        'Icon'  => 'ion ion-stats-bars',
        'caption' => 'Bounce Rate',
        'url'       => '#',
       'color'      =>'bg-green'
    ]);
   
   echo  SmallBox::widget([
        'header' => 44,
        'Icon'  => 'ion ion-person-add',
        'caption' => 'User Registrations',
        'url'       => '#',
       'color'      =>'bg-yellow'
    ]);
   
   echo  SmallBox::widget([
        'header' => 65,
        'Icon'  => 'ion ion-pie-graph',
        'caption' => 'Unique Visitors',
        'url'       => '#',
       'color'      =>'bg-red'
    ]);
   
Row::end();
Row::begin();
    Column::begin(['type'=> 'col-xs-12 connectedSortable']);
    Column::end();
Row::end();
//*/
?>
<h4 class="page-header">
                        AdminLTE Small Boxes
                        <small>Small boxes are used for viewing statistics. To create a small box use the class <code>.small-box</code> and mix & match using the <code>bg-*</code> classes.</small>
                    </h4>
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>
                                        150
                                    </h3>
                                    <p>
                                        New Orders
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>
                                        53<sup style="font-size: 20px">%</sup>
                                    </h3>
                                    <p>
                                        Bounce Rate
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>
                                        44
                                    </h3>
                                    <p>
                                        User Registrations
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>
                                        65
                                    </h3>
                                    <p>
                                        Unique Visitors
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-blue">
                                <div class="inner">
                                    <h3>
                                        230
                                    </h3>
                                    <p>
                                        Sales
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios7-cart-outline"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-purple">
                                <div class="inner">
                                    <h3>
                                        80<sup style="font-size: 20px">%</sup>
                                    </h3>
                                    <p>
                                        Conversion Rate
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios7-briefcase-outline"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-teal">
                                <div class="inner">
                                    <h3>
                                        14
                                    </h3>
                                    <p>
                                        Notofications
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios7-alarm-outline"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-maroon">
                                <div class="inner">
                                    <h3>
                                        160
                                    </h3>
                                    <p>
                                        Products
                                    </p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-ios7-pricetag-outline"></i>
                                </div>
                                <a href="#" class="small-box-footer">
                                    More info <i class="fa fa-arrow-circle-right"></i>
                                </a>
                            </div>
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <!-- Widgets as boxes -->
                    <h4 class="page-header">
                        AdminLTE Boxes
                        <small>We use the base class <code>.box</code> to create widgets simply.</small>
                    </h4>
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Default box -->
                            <div class="box">
                                <div class="box-header">
                                    <h3 class="box-title">Default Box (button tooltip)</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-default btn-sm" data-widget="remove" data-toggle="tooltip" title="Remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <code>.box-footer</code>
                                </div><!-- /.box-footer-->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-4">
                            <!-- Primary box -->
                            <div class="box box-primary">
                                <div class="box-header" data-toggle="tooltip" title="Header tooltip">
                                    <h3 class="box-title">Primary Box (header tooltip)</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-primary btn-xs" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-primary btn-xs" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-primary</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <code>.box-footer</code>
                                </div><!-- /.box-footer-->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-4">
                            <!-- Info box -->
                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Info Box</h3>
                                    <div class="box-tools pull-right">
                                        <div class="label bg-aqua">Label</div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-info</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    <code>.box-footer</code>
                                </div><!-- /.box-footer-->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-4">
                            <!-- Danger box -->
                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Danger Box (Loading state)</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-danger btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-danger btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-danger</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>                                    
                                </div><!-- /.box-body -->
                                <!-- Loading (remove the following to stop the loading)-->
                                <div class="overlay"></div>
                                <div class="loading-img"></div>
                                <!-- end loading -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-4">
                            <!-- Success box -->
                            <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Success Box (toggle buttons)</h3>
                                    <div class="box-tools pull-right">
                                        <div class="btn-group" data-toggle="btn-toggle">
                                            <button type="button" class="btn btn-success btn-xs active" data-toggle="on">Left</button>                                            
                                            <button type="button" class="btn btn-success btn-xs" data-toggle="off">Right</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-success</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-4">
                            <!-- Warning box -->
                            <div class="box box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Warning Box</h3>
                                    <div class="box-tools pull-right">
                                        <ul class="pagination pagination-sm inline">
                                            <li><a href="#">&laquo;</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">&raquo;</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-warning</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <h4 class="page-header">
                        AdminLTE Solid Boxes
                        <small>We use the base class <code>.box</code> and <code>.box-solid</code> to create solid boxes that look like this.</small>
                    </h4>
                    <!-- Solid boxes -->
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Default box -->
                            <div class="box box-solid">
                                <div class="box-header">
                                    <h3 class="box-title">Default Solid Box</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-solid</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-4">
                            <!-- Primary box -->
                            <div class="box box-solid box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Primary Solid Box</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-primary btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-primary btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-solid.box-primary</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-4">
                            <!-- Info box -->
                            <div class="box box-solid box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Info Solid Box</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-info btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-info btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-solid.box-info</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-4">
                            <!-- Danger box -->
                            <div class="box box-solid box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Danger Solid Box</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-danger btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-danger btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-solid.box-danger</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-4">
                            <!-- Success box -->
                            <div class="box box-solid box-success">
                                <div class="box-header">
                                    <h3 class="box-title">Success Solid Box</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-success btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-success btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-solid.box-success</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-4">
                            <!-- Warning box -->
                            <div class="box box-solid box-warning">
                                <div class="box-header">
                                    <h3 class="box-title">Warning Solid Box</h3>
                                    <div class="box-tools pull-right">
                                        <button class="btn btn-warning btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                        <button class="btn btn-warning btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-solid.box-warning</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <h4 class="page-header">
                        AdminLTE Tiles
                        <small>To create a tile we create a solid box and a <code>.bg-*</code> class ( * being the name of the color) to the box.</small>
                    </h4>
                    <!-- Solid boxes -->
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Navy tile -->
                            <div class="box box-solid bg-navy">
                                <div class="box-header">
                                    <h3 class="box-title">Navy Tile</h3>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-solid.bg-navy</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-4">
                            <!-- Primary tile -->
                            <div class="box box-solid bg-light-blue">
                                <div class="box-header">
                                    <h3 class="box-title">Primary Tile</h3>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-solid.bg-light-blue</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-4">
                            <!-- Info box -->
                            <div class="box box-solid bg-aqua">
                                <div class="box-header">
                                    <h3 class="box-title">Info Tile</h3>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-solid.bg-aqua</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-4">
                            <!-- Danger box -->
                            <div class="box box-solid bg-red">
                                <div class="box-header">
                                    <h3 class="box-title">Danger Tile</h3>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-solid.bg-red</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-4">
                            <!-- Success box -->
                            <div class="box box-solid bg-green">
                                <div class="box-header">
                                    <h3 class="box-title">Success Tile</h3>                                    
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-solid.bg-green</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-4">
                            <!-- Warning box -->
                            <div class="box box-solid bg-yellow">
                                <div class="box-header">
                                    <h3 class="box-title">Warning Tile</h3>                                    
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-solid.bg-yellow</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Purple tile -->
                            <div class="box box-solid bg-purple">
                                <div class="box-header">
                                    <h3 class="box-title">Purple Tile</h3>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-solid.bg-purple</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-4">
                            <!-- Blue tile -->
                            <div class="box box-solid bg-blue">
                                <div class="box-header">
                                    <h3 class="box-title">Blue Tile</h3>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-solid.bg-blue</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->

                        <div class="col-md-4">
                            <!-- Maroon tile -->
                            <div class="box box-solid bg-maroon">
                                <div class="box-header">
                                    <h3 class="box-title">Maroon Tile</h3>
                                </div>
                                <div class="box-body">
                                    Box class: <code>.box.box-solid.bg-maroon</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->                         
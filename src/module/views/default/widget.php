<?php
use yii\adminUi\widget\Box,
    yii\adminUi\widget\Row,
    yii\adminUi\widget\Column,
    yii\adminUi\widget\SmallBox,
    yii\adminUi\widget\PageHeader;

$this->title = 'Widgets';
//$this->params['breadcrumbs'][] = ['label' => 'Users', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['pagelabel'] = 'Preview page';


PageHeader::begin([
    'type'=>  PageHeader::TYPE_COMPONENT,
]);?>
AdminLTE Small Boxes
                        <small>Small boxes are used for viewing statistics. To create a small box use the class <code>.small-box</code> and mix & match using the <code>bg-*</code> classes.</small>
<?php
PageHeader::end();

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
    Column::begin(['grid'=> [
                                [
                                    'type'=>Column::TYPE_MOBILE,
                                    'size' => Column::SIZE_FULL,
                                ],
                            ],
                   'options' => ['class'=>'connectedSortable']
		]);
    Column::end();
Row::end();

Row::begin();
   echo  SmallBox::widget([
        'header' => 250,
        'Icon'  => 'ion ion-ios7-cart-outline',
        'caption' => 'Sales',
        'url'       => '#',
       'color'      => 'bg-blue'
    ]);
   echo  SmallBox::widget([
        'header' => '80<sup style="font-size: 20px">%</sup>',
        'Icon'  => 'ion ion-ios7-briefcase-outline',
        'caption' => 'Conversion Rate',
        'url'       => '#',
       'color'      =>'bg-purple'
    ]);
   
   echo  SmallBox::widget([
        'header' => 14,
        'Icon'  => 'ion ion-ios7-alarm-outline',
        'caption' => 'Notofications',
        'url'       => '#',
       'color'      =>'bg-teal'
    ]);
   
   echo  SmallBox::widget([
        'header' => 160,
        'Icon'  => 'ion ion-ios7-pricetag-outline',
        'caption' => 'Products',
        'url'       => '#',
       'color'      =>'bg-maroon'
    ]);
   
Row::end();
Row::begin();
    Column::begin(['grid'=> [
                                [
                                    'type'=>Column::TYPE_MOBILE,
                                    'size' => Column::SIZE_FULL,
                                ],
                            ],
                   'options' => ['class'=>'connectedSortable']
		]);
    Column::end();
Row::end();

PageHeader::begin([
    'type'=>  PageHeader::TYPE_COMPONENT,
]);?>
AdminLTE Boxes
    <small>We use the base class <code>.box</code> to create widgets simply.</small>
<?php
PageHeader::end();

Row::begin();    
	Column::begin(['grid'=> [
                                    [
                                        'type'=>Column::TYPE_DESKTOP,
                                        'size' => Column::SIZE_SMALL,
                                    ],
                                ],
                        ]);
    Box::begin([
        'header'=> 'Default Box (button tooltip)',
        'usebutton' => true,
        'buttonoption' => ['class'=>'btn-default btn-sm'],
        'footer'    => '<code>.box-footer</code>',
    ]);?>
    Box class: <code>.box</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
    <?php Box::end();
    Column::end();
    
    Column::begin(['grid'=> [
                                    [
                                        'type'=>Column::TYPE_DESKTOP,
                                        'size' => Column::SIZE_SMALL,
                                    ],
                                ],
                        ]);
    Box::begin([
        'type'  => Box::TYPE_PRIMARY,
        'header'=> 'Primary Box (header tooltip)',
        'headeroption' => ['data-toggle'=>"tooltip", 'title'=>"Header tooltip"],
        'usebutton' => true,
        'buttonoption' => ['class'=>'btn-primary btn-xs','notitle'=>true],
        'footer'    => '<code>.box-footer</code>',
    ]);?>
    Box class: <code>.box.box-primary</code>
                                    <p>
                                        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
                                        berliner weisse wort chiller adjunct hydrometer alcohol aau!
                                        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
                                    </p>
    <?php Box::end();
    Column::end();
    
    Column::begin(['grid'=> [
                                    [
                                        'type'=>Column::TYPE_DESKTOP,
                                        'size' => Column::SIZE_SMALL,
                                    ],
                                ],
                        ]);
    Box::begin([
        'type'  => Box::TYPE_INFO,
        'header'=> 'Info Box',
        'headerButton' => '<div class="label bg-aqua">Label</div>',        
        'footer'    => '<code>.box-footer</code>',
    ]);?>
    Box class: <code>.box.box-info</code>
    <p>
        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
        berliner weisse wort chiller adjunct hydrometer alcohol aau!
        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
    </p>
    <?php Box::end();
    Column::end();
Row::end();


Row::begin();
    Column::begin(['grid'=> [
                                    [
                                        'type'=>Column::TYPE_DESKTOP,
                                        'size' => Column::SIZE_SMALL,
                                    ],
                                ],
                        ]);
    Box::begin([
        'type'  => Box::TYPE_DANGER,
        'header'=> 'Danger Box (Loading state)',
        'usebutton' => true,
        'buttonoption' => ['class'=>'btn-danger btn-sm','notitle'=>true],
        'loading'=>true,
    ]);?>
    Box class: <code>.box.box-danger</code>
    <p>
        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
        berliner weisse wort chiller adjunct hydrometer alcohol aau!
        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
    </p>
    <?php Box::end();
    Column::end();
    
    Column::begin(['grid'=> [
                                    [
                                        'type'=>Column::TYPE_DESKTOP,
                                        'size' => Column::SIZE_SMALL,
                                    ],
                                ],
                        ]);
    Box::begin([
        'type'  => Box::TYPE_SUCCESS,
        'header'=> 'Success Box (toggle buttons)',
        'headerButton' => '<button type="button" class="btn btn-success btn-xs active" data-toggle="on">Left</button>                                            
                                            <button type="button" class="btn btn-success btn-xs" data-toggle="off">Right</button>',
    ]);?>
    Box class: <code>.box.box-success</code>
    <p>
        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
        berliner weisse wort chiller adjunct hydrometer alcohol aau!
        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
    </p>
    <?php Box::end();
    Column::end();
    
    Column::begin(['grid'=> [
                                    [
                                        'type'=>Column::TYPE_DESKTOP,
                                        'size' => Column::SIZE_SMALL,
                                    ],
                                ],
                        ]);
    Box::begin([
        'type'  => Box::TYPE_WARNING,
        'header'=> 'Warning Box',
        'headerButton' => '<ul class="pagination pagination-sm inline"><li><a href="#">&laquo;</a></li><li><a href="#">1</a></li><li><a href="#">2</a></li><li><a href="#">&raquo;</a></li></ul>',
    ]);?>
    Box class: <code>.box.box-warning</code>
    <p>
        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
        berliner weisse wort chiller adjunct hydrometer alcohol aau!
        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
    </p>
    <?php Box::end();
    Column::end();
Row::end();

PageHeader::begin([
    'type'=>  PageHeader::TYPE_COMPONENT,
]);?>
AdminLTE Solid Boxes
    <small>We use the base class <code>.box</code> and <code>.box-solid</code> to create solid boxes that look like this.</small>
<?php
PageHeader::end();

Row::begin();
    Column::begin(['grid'=> [
                                    [
                                        'type'=>Column::TYPE_DESKTOP,
                                        'size' => Column::SIZE_SMALL,
                                    ],
                                ],
                        ]);
    Box::begin([
        'type'  => Box::TYPE_SOLID,
        'header'=> 'Default Solid Box',
        'usebutton' => true,
        'buttonoption' => ['class'=>'btn-default btn-sm','notitle'=>true],
    ]);?>
    Box class: <code>.box.box-solid</code>
    <p>
        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
        berliner weisse wort chiller adjunct hydrometer alcohol aau!
        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
    </p>
    <?php Box::end();
    Column::end();
    
    Column::begin(['grid'=> [
                                    [
                                        'type'=>Column::TYPE_DESKTOP,
                                        'size' => Column::SIZE_SMALL,
                                    ],
                                ],
                        ]);
    Box::begin([
        'type'  => Box::TYPE_SOLID.' '.Box::TYPE_PRIMARY,
        'header'=> 'Primary Solid Box',
        'usebutton' => true,
        'buttonoption' => ['class'=>'btn-primary btn-sm','notitle'=>true],
    ]);?>
    Box class: <code>.box.box-solid.box-primary</code>
    <p>
        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
        berliner weisse wort chiller adjunct hydrometer alcohol aau!
        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
    </p>
    <?php Box::end();
    Column::end();
    
    Column::begin(['grid'=> [
                                    [
                                        'type'=>Column::TYPE_DESKTOP,
                                        'size' => Column::SIZE_SMALL,
                                    ],
                                ],
                        ]);
    Box::begin([
        'type'  => Box::TYPE_SOLID.' '.Box::TYPE_INFO,
        'header'=> 'Info Solid Box',
        'usebutton' => true,
        'buttonoption' => ['class'=>'btn-info btn-sm','notitle'=>true],
    ]);?>
    Box class: <code>.box.box-solid.box-info</code>
    <p>
        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
        berliner weisse wort chiller adjunct hydrometer alcohol aau!
        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
    </p>
    <?php Box::end();
    Column::end();
Row::end();


Row::begin();
    Column::begin(['grid'=> [
                                    [
                                        'type'=>Column::TYPE_DESKTOP,
                                        'size' => Column::SIZE_SMALL,
                                    ],
                                ],
                        ]);
    Box::begin([
        'type'  => Box::TYPE_SOLID.' '.Box::TYPE_DANGER,
        'header'=> 'Danger Solid Box',
        'usebutton' => true,
        'buttonoption' => ['class'=>'btn-default btn-sm','notitle'=>true],
    ]);?>
    Box class: <code>.box.box-solid.box-danger</code>
    <p>
        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
        berliner weisse wort chiller adjunct hydrometer alcohol aau!
        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
    </p>
    <?php Box::end();
    Column::end();
    
    Column::begin(['grid'=> [
                                    [
                                        'type'=>Column::TYPE_DESKTOP,
                                        'size' => Column::SIZE_SMALL,
                                    ],
                                ],
                        ]);
    Box::begin([
        'type'  => Box::TYPE_SOLID.' '.Box::TYPE_SUCCESS,
        'header'=> 'Success Solid Box',
        'usebutton' => true,
        'buttonoption' => ['class'=>'btn-primary btn-sm','notitle'=>true],
    ]);?>
    Box class: <code>.box.box-solid.box-success</code>
    <p>
        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
        berliner weisse wort chiller adjunct hydrometer alcohol aau!
        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
    </p>
    <?php Box::end();
    Column::end();
    
    Column::begin(['grid'=> [
                                    [
                                        'type'=>Column::TYPE_DESKTOP,
                                        'size' => Column::SIZE_SMALL,
                                    ],
                                ],
                        ]);
    Box::begin([
        'type'  => Box::TYPE_SOLID.' '.Box::TYPE_WARNING,
        'header'=> 'Warning Solid Box',
        'usebutton' => true,
        'buttonoption' => ['class'=>'btn-info btn-sm','notitle'=>true],
    ]);?>
    Box class: <code>.box.box-solid.box-warning</code>
    <p>
        amber, microbrewery abbey hydrometer, brewpub ale lauter tun saccharification oxidized barrel.
        berliner weisse wort chiller adjunct hydrometer alcohol aau!
        sour/acidic sour/acidic chocolate malt ipa ipa hydrometer.
    </p>
    <?php Box::end();
    Column::end();
Row::end();

PageHeader::begin([
    'type'=>  PageHeader::TYPE_COMPONENT,
]);?>
AdminLTE Tiles
<small>To create a tile we create a solid box and a <code>.bg-*</code> class ( * being the name of the color) to the box.</small>
<?php
PageHeader::end();
?>

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
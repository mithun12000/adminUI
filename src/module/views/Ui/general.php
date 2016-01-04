<?php
use yii\adminUi\widget\PageHeader,
 yii\adminUi\widget\Alert,
 yii\adminUi\widget\Box,
 yii\adminUi\widget\Row,
 yii\adminUi\widget\Tabs,
 yii\adminUi\widget\Callout,
 yii\adminUi\widget\Carousel,
 yii\adminUi\widget\Collapse,
 yii\adminUi\widget\Progress,
 yii\adminUi\widget\Column;

$this->title = 'General UI';
$this->params['breadcrumbs'][] = ['label' => 'Ui', 'url' => ['#']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['pagelabel'] = 'Preview of UI elements';

PageHeader::begin();
echo 'Alerts and Callouts';
PageHeader::end();

Row::begin();
    Column::begin([
        'grid' => [
            [
                'type' => Column::TYPE_DESKTOP,
                'size' => Column::SIZE_HALF,
            ]
        ]
    ]);
    Box::begin([
        'type'  => Box::TYPE_DANGER,
        'header'=> 'Alerts',
        'headerIcon' => 'fa fa-warning',
    ]);
    Alert::begin([
        'options' => [
            'class' => 'alert-danger alert-dismissable',
        ],
        'icon' => 'fa fa-ban',
        'closeButton' => [],
    ]);
    echo '<b>Alert!</b> Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.';
    Alert::end();
    
    Alert::begin([
        'options' => [
            'class' => 'alert-info alert-dismissable',
        ],
        'icon' => 'fa fa-info',
        'closeButton' => [],
    ]);
    echo '<b>Alert!</b> Info alert preview. This alert is dismissable.';
    Alert::end();
    
    Alert::begin([
        'options' => [
            'class' => 'alert-warning alert-dismissable',
        ],
        'icon' => 'fa fa-warning',
        'closeButton' => [],
    ]);
    echo '<b>Alert!</b> Warning alert preview. This alert is dismissable.';
    Alert::end();
    
    Alert::begin([
        'options' => [
            'class' => 'alert-success alert-dismissable',
        ],
        'icon' => 'fa fa-check',
        'closeButton' => [],
    ]);
    echo '<b>Alert!</b> Success alert preview. This alert is dismissable.';
    Alert::end();
    
    
    Box::end();
    Column::end();
    
    Column::begin([
        'grid' => [
            [
                'type' => Column::TYPE_DESKTOP,
                'size' => Column::SIZE_HALF,
            ]
        ]
    ]);    
    Box::begin([
        'type'  => Box::TYPE_INFO,
        'header'=> 'Callouts',
        'headerIcon' => 'fa fa-bullhorn',
    ]);
    Callout::begin(['options' =>[
                        'class' => 'callout-danger',
                        ],
                     'header' => 'I am a danger callout!',
                    ]);
    echo '<p>There is a problem that we need to fix. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>';
    Callout::end();
    
    Callout::begin(['options' =>[
                        'class' => 'callout-info',
                        ],
                     'header' => 'I am an info callout!',
                    ]);
    echo '<p>Follow the steps to continue to payment.</p>';
    Callout::end();
    
    Callout::begin(['options' =>[
                        'class' => 'callout-warning',
                        ],
                     'header' => 'I am a warning callout!',
                    ]);
    echo '<p>This is a yellow callout.</p>';
    Callout::end();
    
    
    Box::end();
    Column::end();
Row::end();

PageHeader::begin();
echo 'AdminLTE Custom Tabs';
PageHeader::end();

Row::begin();
    Column::begin([
        'grid' => [
            [
                'type' => Column::TYPE_DESKTOP,
                'size' => Column::SIZE_HALF,
            ]
        ]
    ]);
    echo Tabs::widget([
        'encodeLabels' => false,
        'options' => [
            //'class' => 'nav-tabs-custom',
        ],
      'items' => [
          [
              'label' => 'One',
              'content' => '<b>How to use:</b>
                                        <p>Exactly like the original bootstrap tabs except you should use
                                            the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                                        A wonderful serenity has taken possession of my entire soul,
                                        like these sweet mornings of spring which I enjoy with my whole heart.
                                        I am alone, and feel the charm of existence in this spot,
                                        which was created for the bliss of souls like mine. I am so happy,
                                        my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                                        that I neglect my talents. I should be incapable of drawing a single stroke
                                        at the present moment; and yet I feel that I never was a greater artist than now.',
              'active' => true
          ],
          [
              'label' => 'Two',
              'content' => 'The European languages are members of the same family. Their separate existence is a myth.
                                        For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                                        in their grammar, their pronunciation and their most common words. Everyone realizes why a
                                        new common language would be desirable: one could refuse to pay expensive translators. To
                                        achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                                        words. If several languages coalesce, the grammar of the resulting language is more simple
                                        and regular than that of the individual languages.',
              'headerOptions' => [],
              'options' => ['id' => 'myveryownID'],
          ],
          [
              'label' => 'Dropdown',
              'items' => [
                   [
                       'label' => 'DropdownA',
                       'content' => 'DropdownA, Anim pariatur cliche...',
                   ],
                   [
                       'label' => 'DropdownB',
                       'content' => 'DropdownB, Anim pariatur cliche...',
                   ],
              ],
          ],
          [
              'label' => '<i class="fa fa-gear"></i>',
              'headerOptions' => ['class' => 'pull-right'],
              'linkOptions' => ['class' => 'text-muted'],
              'nocontent' => true,              
          ]
      ],
  ]);
    Column::end();
    
    Column::begin([
        'grid' => [
            [
                'type' => Column::TYPE_DESKTOP,
                'size' => Column::SIZE_HALF,
            ]
        ]
    ]);    
    echo Tabs::widget([
        'encodeLabels' => false,
        'options' => [
            'class' => 'pull-right',
        ],
      'items' => [
          [
              'label' => 'One',
              'content' => '<b>How to use:</b>
                                        <p>Exactly like the original bootstrap tabs except you should use
                                            the custom wrapper <code>.nav-tabs-custom</code> to achieve this style.</p>
                                        A wonderful serenity has taken possession of my entire soul,
                                        like these sweet mornings of spring which I enjoy with my whole heart.
                                        I am alone, and feel the charm of existence in this spot,
                                        which was created for the bliss of souls like mine. I am so happy,
                                        my dear friend, so absorbed in the exquisite sense of mere tranquil existence,
                                        that I neglect my talents. I should be incapable of drawing a single stroke
                                        at the present moment; and yet I feel that I never was a greater artist than now.',
              'active' => true
          ],
          [
              'label' => 'Two',
              'content' => 'The European languages are members of the same family. Their separate existence is a myth.
                                        For science, music, sport, etc, Europe uses the same vocabulary. The languages only differ
                                        in their grammar, their pronunciation and their most common words. Everyone realizes why a
                                        new common language would be desirable: one could refuse to pay expensive translators. To
                                        achieve this, it would be necessary to have uniform grammar, pronunciation and more common
                                        words. If several languages coalesce, the grammar of the resulting language is more simple
                                        and regular than that of the individual languages.',
              'headerOptions' => [],
              'options' => ['id' => 'myveryownID'],
          ],
          [
              'label' => 'Dropdown',
              'items' => [
                   [
                       'label' => 'DropdownA',
                       'content' => 'DropdownA, Anim pariatur cliche...',
                   ],
                   [
                       'label' => 'DropdownB',
                       'content' => 'DropdownB, Anim pariatur cliche...',
                   ],
              ],
          ],
          [
              'label' => '<i class="fa fa-th"></i> Custom Tabs',
              'headerOptions' => ['class' => 'pull-left header'],
              'linkOptions' => ['class' => 'text-muted'],
              'nocontent' => true,
              'header' => true,
          ]
      ],
  ]);
    Column::end();
Row::end();

PageHeader::begin();
echo 'Progress Bars';
PageHeader::end();

Row::begin();
    Column::begin([
        'grid' => [
            [
                'type' => Column::TYPE_DESKTOP,
                'size' => Column::SIZE_HALF,
            ]
        ]
    ]);
    
    Box::begin([
        'type'  => Box::TYPE_SOLID,
        'header'=> 'Progress Bars Different Sizes',
    ]);
    
    echo 'No Class';
    echo Progress::widget([
        'options' => [
            'class' => 'progress-striped',            
        ],
        'barOptions' => [
            'class' => 'progress-bar-primary'
        ],
      'percent' => 40,
  ]);
    echo 'Class: <code>.sm</code>';
    echo Progress::widget([
        'options' => [
            'class' => 'sm progress-striped',            
        ],
        'barOptions' => [
            'class' => 'progress-bar-success'
        ],
      'percent' => 20,
  ]);
    
    echo 'Class: <code>.xs</code>';
    echo Progress::widget([
        'options' => [
            'class' => 'xs progress-striped active',            
        ],
        'barOptions' => [
            'class' => 'progress-bar-warning'
        ],
      'percent' => 60,
  ]);
    
    Box::end();
    
    Column::end();
    
    Column::begin([
        'grid' => [
            [
                'type' => Column::TYPE_DESKTOP,
                'size' => Column::SIZE_HALF,
            ]
        ]
    ]);    
    Box::begin([
        'type'  => Box::TYPE_SOLID,
        'header'=> 'Progress bars',
    ]);
    
    
    echo Progress::widget([        
        'barOptions' => [
            'class' => 'progress-bar-green'
        ],
      'percent' => 40,
  ]);
    
    echo Progress::widget([        
        'barOptions' => [
            'class' => 'progress-bar-aqua'
        ],
      'percent' => 20,
  ]);   
    
    echo Progress::widget([
        
        'barOptions' => [
            'class' => 'progress-bar-yellow'
        ],
      'percent' => 60,
  ]);
    
    echo Progress::widget([        
        'barOptions' => [
            'class' => 'progress-bar-red'
        ],
      'percent' => 80,
  ]);    
    Box::end();
    Column::end();
Row::end();
Row::begin();
    Column::begin([
        'grid' => [
            [
                'type' => Column::TYPE_DESKTOP,
                'size' => Column::SIZE_HALF,
            ]
        ]
    ]);
    
    Box::begin([
        'type'  => Box::TYPE_SOLID,
        'header'=> 'Vertical Progress Bars Different Sizes',
        'bodytoption' =>[
            'class' => 'text-center'
        ],
    ]);    
    echo '<p>By adding the class <code>.vertical</code> and <code>.xs</code> or <code>.sm</code> we achieve:</p>';
    echo Progress::widget([
        'options' => [
            'class' => 'progress-striped',            
        ],
        'orientation' => Progress::VERTICLE,
        'barOptions' => [
            'class' => 'progress-bar-primary'
        ],
      'percent' => 40,
        
  ]);
    
    echo Progress::widget([
        'options' => [
            'class' => 'sm progress-striped',
        ],
        'orientation' => Progress::VERTICLE,
        'barOptions' => [
            'class' => 'progress-bar-success'
        ],
      'percent' => 20,
  ]);
    
    
    echo Progress::widget([
        'options' => [
            'class' => 'xs progress-striped active',
        ],
        'orientation' => Progress::VERTICLE,
        'barOptions' => [
            'class' => 'progress-bar-warning'
        ],
      'percent' => 60,
  ]);
    
    Box::end();
    
    Column::end();
    
    Column::begin([
        'grid' => [
            [
                'type' => Column::TYPE_DESKTOP,
                'size' => Column::SIZE_HALF,
            ]
        ]
    ]);    
    Box::begin([
        'type'  => Box::TYPE_SOLID,
        'header'=> 'Progress bars',
        'bodytoption' =>[
            'class' => 'text-center'
        ],
    ]);
    
    echo '<p>By adding the class <code>.vertical</code> we achieve:</p>';
    
    echo Progress::widget([        
        'orientation' => Progress::VERTICLE,
        'barOptions' => [
            'class' => 'progress-bar-green'
        ],
      'percent' => 40,
  ]);
    
    echo Progress::widget([        
        'orientation' => Progress::VERTICLE,
        'barOptions' => [
            'class' => 'progress-bar-aqua'
        ],
      'percent' => 20,
  ]);   
    
    echo Progress::widget([
        'orientation' => Progress::VERTICLE,
        'barOptions' => [
            'class' => 'progress-bar-yellow'
        ],
      'percent' => 60,
  ]);
    
    echo Progress::widget([        
        'orientation' => Progress::VERTICLE,
        'barOptions' => [
            'class' => 'progress-bar-red'
        ],
      'percent' => 80,
  ]);    
    Box::end();
    Column::end();
Row::end();


PageHeader::begin();
echo 'Bootstrap Accordion & Carousel';
PageHeader::end();
Row::begin();
    Column::begin([
        'grid' => [
            [
                'type' => Column::TYPE_DESKTOP,
                'size' => Column::SIZE_HALF,
            ]
        ]
    ]);
    
    Box::begin([
        'type'  => Box::TYPE_SOLID,
        'header'=> 'Collapsible Accordion',
    ]);    
    echo Collapse::widget([
      'items' => [
          // equivalent to the above
          'Collapsible Group Item #1' => [
              'content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.',
              // open its content by default
              'contentOptions' => ['class' => 'in'],
              'options' =>[
                  'class' => 'box-primary',
              ],
          ],
          // another group item
          'Collapsible Group Danger' => [
              'content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.',
              'contentOptions' => [],
              'options' =>[
                  'class' => 'box-danger',
              ],
          ],
          'Collapsible Group Success' => [
              'content' => 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven\'t heard of them accusamus labore sustainable VHS.',
              'contentOptions' => [],
              'options' =>[
                  'class' => 'box-success',
              ],
          ]
      ]
  ]);   
    Box::end();
    
    Column::end();
    
    Column::begin([
        'grid' => [
            [
                'type' => Column::TYPE_DESKTOP,
                'size' => Column::SIZE_HALF,
            ]
        ]
    ]);    
    Box::begin([
        'type'  => Box::TYPE_SOLID,
        'header'=> 'Carousel',
    ]);
    echo Carousel::widget([
      'items' => [
          [
              'content' => '<img src="http://placehold.it/900x500/39CCCC/ffffff&text=I+Love+Bootstrap"/>',
              'caption' => 'First Slide',
          ],
          [
              'content' => '<img src="http://placehold.it/900x500/3c8dbc/ffffff&text=I+Love+Bootstrap"/>',
              'caption' => 'Second Slide',
          ],
          [
              'content' => '<img src="http://placehold.it/900x500/f39c12/ffffff&text=I+Love+Bootstrap"/>',
              'caption' => 'Third Slide',
          ],
      ]
  ]);    
    Box::end();
    Column::end();
Row::end();
?>


                    <!-- START TYPOGRAPHY -->
                    <h2 class="page-header">Typography</h2>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-text-width"></i>
                                    <h3 class="box-title">Headlines</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <h1>h1. Bootstrap heading</h1>
                                    <h2>h2. Bootstrap heading</h2>
                                    <h3>h3. Bootstrap heading</h3>
                                    <h4>h4. Bootstrap heading</h4>
                                    <h5>h5. Bootstrap heading</h5>
                                    <h6>h6. Bootstrap heading</h6>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- ./col -->
                        <div class="col-md-6">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-text-width"></i>
                                    <h3 class="box-title">Text Emphasis</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <p class="lead">Lead to emphasize importance</p>
                                    <p class="text-green">Text green to emphasize success</p>
                                    <p class="text-aqua">Text aqua to emphasize info</p>
                                    <p class="text-light-blue">Text light blue to emphasize info (2)</p>
                                    <p class="text-red">Text red to emphasize danger</p>
                                    <p class="text-yellow">Text yellow to emphasize warning</p>
                                    <p class="text-muted">Text muted to emphasize general</p>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-text-width"></i>
                                    <h3 class="box-title">Block Quotes</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <blockquote>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                    </blockquote>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- ./col -->
                        <div class="col-md-6">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-text-width"></i>
                                    <h3 class="box-title">Block Quotes Pulled Right</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body clearfix">
                                    <blockquote class="pull-right">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                        <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                    </blockquote>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-4">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-text-width"></i>
                                    <h3 class="box-title">Unordered List</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <ul>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit
                                            <ul>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                            </ul>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- ./col -->
                        <div class="col-md-4">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-text-width"></i>
                                    <h3 class="box-title">Ordered Lists</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <ol>
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit
                                            <ol>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                            </ol>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ol>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- ./col -->
                        <div class="col-md-4">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-text-width"></i>
                                    <h3 class="box-title">Unstyled List</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <ul class="list-unstyled">
                                        <li>Lorem ipsum dolor sit amet</li>
                                        <li>Consectetur adipiscing elit</li>
                                        <li>Integer molestie lorem at massa</li>
                                        <li>Facilisis in pretium nisl aliquet</li>
                                        <li>Nulla volutpat aliquam velit
                                            <ul>
                                                <li>Phasellus iaculis neque</li>
                                                <li>Purus sodales ultricies</li>
                                                <li>Vestibulum laoreet porttitor sem</li>
                                                <li>Ac tristique libero volutpat at</li>
                                            </ul>
                                        </li>
                                        <li>Faucibus porta lacus fringilla vel</li>
                                        <li>Aenean sit amet erat nunc</li>
                                        <li>Eget porttitor lorem</li>
                                    </ul>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- ./col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-text-width"></i>
                                    <h3 class="box-title">Description</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <dl>
                                        <dt>Description lists</dt>
                                        <dd>A description list is perfect for defining terms.</dd>
                                        <dt>Euismod</dt>
                                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                        <dt>Malesuada porta</dt>
                                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                    </dl>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- ./col -->
                        <div class="col-md-6">
                            <div class="box box-solid">
                                <div class="box-header">
                                    <i class="fa fa-text-width"></i>
                                    <h3 class="box-title">Description Horizontal</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <dl class="dl-horizontal">
                                        <dt>Description lists</dt>
                                        <dd>A description list is perfect for defining terms.</dd>
                                        <dt>Euismod</dt>
                                        <dd>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</dd>
                                        <dd>Donec id elit non mi porta gravida at eget metus.</dd>
                                        <dt>Malesuada porta</dt>
                                        <dd>Etiam porta sem malesuada magna mollis euismod.</dd>
                                        <dt>Felis euismod semper eget lacinia</dt>
                                        <dd>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>
                                    </dl>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- ./col -->
                    </div><!-- /.row -->
                    <!-- END TYPOGRAPHY -->
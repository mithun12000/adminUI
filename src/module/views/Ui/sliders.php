<?php
use yii\adminUi\assetsBundle\AdminUiPluginSliderAsset,
 yii\adminUi\assetsBundle\AdminUiPluginIonSliderAsset;

AdminUiPluginIonSliderAsset::register($this);
AdminUiPluginSliderAsset::register($this);

$this->title = 'Sliders';
$this->params['breadcrumbs'][] = ['label' => 'Ui', 'url' => ['#']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['pagelabel'] = 'range sliders';
?>
<div class="row">
                        <div class="col-xs-12">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Ion Slider</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row margin">
                                        <div class="col-sm-6">
                                            <input id="range_1" type="text" name="range_1" value="0;5000" class="ionslider form-control" data-type="double" data-step="1" data-prefix="$" data-from="1000" data-to="4000" data-max="5000" data-min="0" data-hasgrid="true" data-prettify="false"  />
                                        </div>

                                        <div class="col-sm-6">
                                            <input id="range_2" type="text" name="range_2" class="ionslider form-control" value="1000;100000" data-type="double" data-step="500" data-postfix=" &euro;" data-from="30000" data-to="90000" data-hasgrid="true" />
                                        </div>
                                    </div>
                                    <div class="row margin">
                                        <div class="col-sm-6">
                                            <input id="range_5" type="text" name="range_5" value="0;10" class="ionslider form-control" data-type="single" data-step="0.1" data-postfix="mm" data-max="10" data-min="0" data-hasgrid="true" data-prettify="false" />
                                        </div>
                                        <div class="col-sm-6">
                                            <input id="range_6" type="text" name="range_6" value="-50;50" class="ionslider form-control" data-type="single" data-step="1" data-postfix="°" data-from="0" data-max="50" data-min="-50" data-hasgrid="true" data-prettify="false" />
                                        </div>
                                    </div>
                                    <div class="row margin">
                                        <div class="col-sm-12">
                                            <input id="range_4" type="text" name="range_4" value="10000;100000" class="ionslider form-control" data-type="single" data-step="100" data-postfix=" light years" data-from="55000" data-hideMinMax="true" data-hideFromTo="false"  />
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Bootstrap Slider</h3>
                                </div><!-- /.box-header -->
                                <div class="box-body">
                                    <div class="row margin">
                                        <div class="col-sm-6">
                                            <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="red">
                                            <p>data-slider-id="red"</p>
                                            <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="blue">
                                            <p>data-slider-id="blue"</p>
                                            <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="green">
                                            <p>data-slider-id="green"</p>
                                            <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="yellow">
                                            <p>data-slider-id="yellow"</p>
                                            <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="aqua">
                                            <p>data-slider-id="aqua"</p>
                                            <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="horizontal" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="purple">
                                            <p style="margin-top: 10px">data-slider-id="purple"</p>
                                        </div>
                                        <div class="col-sm-6 text-center">
                                            <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="red">
                                            <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="blue">
                                            <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="green">
                                            <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="yellow">
                                            <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="aqua">
                                            <input type="text" value="" class="slider form-control" data-slider-min="-200" data-slider-max="200" data-slider-step="5" data-slider-value="[-100,100]" data-slider-orientation="vertical" data-slider-selection="before" data-slider-tooltip="show" data-slider-id="purple">
                                        </div>
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->
                        </div><!-- /.col -->
                    </div><!-- /.row -->
<?php
$this->title = 'Advanced Form Elements';
$this->params['breadcrumbs'][] = ['label' => 'Forms', 'url' => ['#']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['pagelabel'] = 'Preview';
?>
<div class="row">
                        <div class="col-md-6">

                            <div class="box box-danger">
                                <div class="box-header">
                                    <h3 class="box-title">Input masks</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Date dd/mm/yyyy -->
                                    <div class="form-group">
                                        <label>Date masks:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- Date mm/dd/yyyy -->
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>US phone mask:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask='"mask": "(999) 999-9999"' data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- phone mask -->
                                    <div class="form-group">
                                        <label>Intl US phone mask:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-phone"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'mask': ['999-999-9999 [x99999]', '+099 99 99 9999[9]-9999']" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- IP mask -->
                                    <div class="form-group">
                                        <label>IP mask:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-laptop"></i>
                                            </div>
                                            <input type="text" class="form-control" data-inputmask="'alias': 'ip'" data-mask/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <div class="box box-info">
                                <div class="box-header">
                                    <h3 class="box-title">Color & Time Picker</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Color Picker -->
                                    <div class="form-group">
                                        <label>Color picker:</label>                                         
                                        <input type="text" class="form-control my-colorpicker1"/>
                                    </div><!-- /.form group -->

                                    <!-- Color Picker -->
                                    <div class="form-group">
                                        <label>Color picker with addon:</label>
                                        <div class="input-group my-colorpicker2">                                            
                                            <input type="text" class="form-control"/>
                                            <div class="input-group-addon">
                                                <i></i>
                                            </div>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- time Picker -->
                                    <div class="bootstrap-timepicker">
                                        <div class="form-group">
                                            <label>Time picker:</label>
                                            <div class="input-group">                                            
                                                <input type="text" class="form-control timepicker"/>
                                                <div class="input-group-addon">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                            </div><!-- /.input group -->
                                        </div><!-- /.form group -->
                                    </div>
                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                        </div><!-- /.col (left) -->
                        <div class="col-md-6">
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Date picker</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Date range -->
                                    <div class="form-group">
                                        <label>Date range:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="reservation"/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>Date and time range:</label>
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-clock-o"></i>
                                            </div>
                                            <input type="text" class="form-control pull-right" id="reservationtime"/>
                                        </div><!-- /.input group -->
                                    </div><!-- /.form group -->

                                    <!-- Date and time range -->
                                    <div class="form-group">
                                        <label>Date range button:</label>
                                        <div class="input-group">
                                            <button class="btn btn-default pull-right" id="daterange-btn">
                                                <i class="fa fa-calendar"></i> Date range picker
                                                <i class="fa fa-caret-down"></i>
                                            </button>
                                        </div>
                                    </div><!-- /.form group -->

                                </div><!-- /.box-body -->
                            </div><!-- /.box -->

                            <!-- iCheck -->
                            <div class="box box-success">
                                <div class="box-header">
                                    <h3 class="box-title">iCheck - Checkbox & Radio Inputs</h3>
                                </div>
                                <div class="box-body">
                                    <!-- Minimal style -->

                                    <!-- checkbox -->
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" class="minimal" checked/>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="minimal"/>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="minimal" disabled/>
                                            Minimal skin checkbox
                                        </label>
                                    </div>

                                    <!-- radio -->
                                    <div class="form-group">                                    
                                        <label>
                                            <input type="radio" name="r1" class="minimal" checked/>
                                        </label>
                                        <label>
                                            <input type="radio" name="r1" class="minimal"/>                                                    
                                        </label>
                                        <label>
                                            <input type="radio" name="r1" class="minimal" disabled/>
                                            Minimal skin radio
                                        </label>
                                    </div>

                                    <!-- Minimal red style -->

                                    <!-- checkbox -->
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" class="minimal-red" checked/>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="minimal-red"/>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="minimal-red" disabled/>
                                            Minimal red skin checkbox
                                        </label>
                                    </div>

                                    <!-- radio -->
                                    <div class="form-group">                                    
                                        <label>
                                            <input type="radio" name="r2" class="minimal-red" checked/>
                                        </label>
                                        <label>
                                            <input type="radio" name="r2" class="minimal-red"/>                                                    
                                        </label>
                                        <label>
                                            <input type="radio" name="r2" class="minimal-red" disabled/>
                                            Minimal red skin radio
                                        </label>
                                    </div>

                                    <!-- Minimal red style -->

                                    <!-- checkbox -->
                                    <div class="form-group">
                                        <label>
                                            <input type="checkbox" class="flat-red" checked/>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="flat-red"/>
                                        </label>
                                        <label>
                                            <input type="checkbox" class="flat-red" disabled/>
                                            Flat red skin checkbox
                                        </label>
                                    </div>

                                    <!-- radio -->
                                    <div class="form-group">                                    
                                        <label>
                                            <input type="radio" name="r3" class="flat-red" checked/>
                                        </label>
                                        <label>
                                            <input type="radio" name="r3" class="flat-red"/>                                                    
                                        </label>
                                        <label>
                                            <input type="radio" name="r3" class="flat-red" disabled/>
                                            Flat red skin radio
                                        </label>
                                    </div>
                                </div><!-- /.box-body -->
                                <div class="box-footer">
                                    Many more skins available.
                                </div>
                            </div><!-- /.box -->
                        </div><!-- /.col (right) -->
                    </div><!-- /.row -->
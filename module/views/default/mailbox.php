<?php
$this->title = 'Mailbox';
$this->params['breadcrumbs'][] = $this->title;
$this->params['pagelabel'] = '';
?>
<!-- MAILBOX BEGIN -->
                    <div class="mailbox row">
                        <div class="col-xs-12">
                            <div class="box box-solid">
                                <div class="box-body">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-4">
                                            <!-- BOXES are complex enough to move the .box-header around.
                                                 This is an example of having the box header within the box body -->
                                            <div class="box-header">
                                                <i class="fa fa-inbox"></i>
                                                <h3 class="box-title">INBOX</h3>
                                            </div>
                                            <!-- compose message btn -->
                                            <a class="btn btn-block btn-primary" data-toggle="modal" data-target="#compose-modal"><i class="fa fa-pencil"></i> Compose Message</a>
                                            <!-- Navigation - folders-->
                                            <div style="margin-top: 15px;">
                                                <ul class="nav nav-pills nav-stacked">
                                                    <li class="header">Folders</li>
                                                    <li class="active"><a href="#"><i class="fa fa-inbox"></i> Inbox (14)</a></li>
                                                    <li><a href="#"><i class="fa fa-pencil-square-o"></i> Drafts</a></li>
                                                    <li><a href="#"><i class="fa fa-mail-forward"></i> Sent</a></li>
                                                    <li><a href="#"><i class="fa fa-star"></i> Starred</a></li>
                                                    <li><a href="#"><i class="fa fa-folder"></i> Junk</a></li>
                                                </ul>
                                            </div>
                                        </div><!-- /.col (LEFT) -->
                                        <div class="col-md-9 col-sm-8">
                                            <div class="row pad">
                                                <div class="col-sm-6">
                                                    <label style="margin-right: 10px;">
                                                        <input type="checkbox" id="check-all"/>
                                                    </label>
                                                    <!-- Action button -->
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-default btn-sm btn-flat dropdown-toggle" data-toggle="dropdown">
                                                            Action <span class="caret"></span>
                                                        </button>
                                                        <ul class="dropdown-menu" role="menu">
                                                            <li><a href="#">Mark as read</a></li>
                                                            <li><a href="#">Mark as unread</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Move to junk</a></li>
                                                            <li class="divider"></li>
                                                            <li><a href="#">Delete</a></li>
                                                        </ul>
                                                    </div>

                                                </div>
                                                <div class="col-sm-6 search-form">
                                                    <form action="#" class="text-right">
                                                        <div class="input-group">                                                            
                                                            <input type="text" class="form-control input-sm" placeholder="Search">
                                                            <div class="input-group-btn">
                                                                <button type="submit" name="q" class="btn btn-sm btn-primary"><i class="fa fa-search"></i></button>
                                                            </div>
                                                        </div>                                                     
                                                    </form>
                                                </div>
                                            </div><!-- /.row -->

                                            <div class="table-responsive">
                                                <!-- THE MESSAGES -->
                                                <table class="table table-mailbox">
                                                    <tr class="unread">
                                                        <td class="small-col"><input type="checkbox" /></td>
                                                        <td class="small-col"><i class="fa fa-star"></i></td>
                                                        <td class="name"><a href="#">John Doe</a></td>
                                                        <td class="subject"><a href="#">Urgent! Please read</a></td>
                                                        <td class="time">12:30 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="small-col"><input type="checkbox" /></td>
                                                        <td class="small-col"><i class="fa fa-star-o"></i></td>
                                                        <td class="name"><a href="#">John Doe</a></td>
                                                        <td class="subject"><a href="#">Urgent! Please read</a></td>
                                                        <td class="time">12:30 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="small-col"><input type="checkbox" /></td>
                                                        <td class="small-col"><i class="fa fa-star-o"></i></td>
                                                        <td class="name"><a href="#">John Doe</a></td>
                                                        <td class="subject"><a href="#">Urgent! Please read</a></td>
                                                        <td class="time">12:30 PM</td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td class="small-col"><input type="checkbox" /></td>
                                                        <td class="small-col"><i class="fa fa-star-o"></i></td>
                                                        <td class="name"><a href="#">John Doe</a></td>
                                                        <td class="subject"><a href="#">Urgent! Please read</a></td>
                                                        <td class="time">12:30 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="small-col"><input type="checkbox" /></td>
                                                        <td class="small-col"><i class="fa fa-star"></i></td>
                                                        <td class="name"><a href="#">John Doe</a></td>
                                                        <td class="subject"><a href="#">Urgent! Please read</a></td>
                                                        <td class="time">12:30 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="small-col"><input type="checkbox" /></td>
                                                        <td class="small-col"><i class="fa fa-star"></i></td>
                                                        <td class="name"><a href="#">John Doe</a></td>
                                                        <td class="subject"><a href="#">Urgent! Please read</a></td>
                                                        <td class="time">12:30 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="small-col"><input type="checkbox" /></td>
                                                        <td class="small-col"><i class="fa fa-star-o"></i></td>
                                                        <td class="name"><a href="#">John Doe</a></td>
                                                        <td class="subject"><a href="#">Urgent! Please read</a></td>
                                                        <td class="time">12:30 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="small-col"><input type="checkbox" /></td>
                                                        <td class="small-col"><i class="fa fa-star"></i></td>
                                                        <td class="name"><a href="#">John Doe</a></td>
                                                        <td class="subject"><a href="#">Urgent! Please read</a></td>
                                                        <td class="time">12:30 PM</td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td class="small-col"><input type="checkbox" /></td>
                                                        <td class="small-col"><i class="fa fa-star-o"></i></td>
                                                        <td class="name"><a href="#">John Doe</a></td>
                                                        <td class="subject"><a href="#">Urgent! Please read</a></td>
                                                        <td class="time">12:30 PM</td>
                                                    </tr>
                                                    <tr class="unread">
                                                        <td class="small-col"><input type="checkbox" /></td>
                                                        <td class="small-col"><i class="fa fa-star-o"></i></td>
                                                        <td class="name"><a href="#">John Doe</a></td>
                                                        <td class="subject"><a href="#">Urgent! Please read</a></td>
                                                        <td class="time">12:30 PM</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="small-col"><input type="checkbox" /></td>
                                                        <td class="small-col"><i class="fa fa-star-o"></i></td>
                                                        <td class="name"><a href="#">John Doe</a></td>
                                                        <td class="subject"><a href="#">Urgent! Please read</a></td>
                                                        <td class="time">12:30 PM</td>
                                                    </tr>
                                                </table>
                                            </div><!-- /.table-responsive -->
                                        </div><!-- /.col (RIGHT) -->
                                    </div><!-- /.row -->
                                </div><!-- /.box-body -->
                                <div class="box-footer clearfix">
                                    <div class="pull-right">
                                        <small>Showing 1-12/1,240</small>
                                        <button class="btn btn-xs btn-primary"><i class="fa fa-caret-left"></i></button>
                                        <button class="btn btn-xs btn-primary"><i class="fa fa-caret-right"></i></button>
                                    </div>
                                </div><!-- box-footer -->
                            </div><!-- /.box -->
                        </div><!-- /.col (MAIN) -->
                    </div>
                    <!-- MAILBOX END -->

                </section><!-- /.content -->
            </aside><!-- /.right-side -->
        </div><!-- ./wrapper -->
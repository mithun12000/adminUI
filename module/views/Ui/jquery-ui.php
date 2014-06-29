<?php
$this->title = 'Jquery Ui';
$this->params['breadcrumbs'][] = ['label' => 'Ui', 'url' => ['#']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['pagelabel'] = 'Jquery Ui';
?>
<div class='row'>
                        <div class='col-md-6'>
                            <div class='box box-primary'>
                                <div class='box-header'>
                                    <h3 class='box-title'>Accordion</h3>
                                </div>
                                <div class='box-body pad'>
                                    <div id="accordion">
                                        <h3>Section 1</h3>
                                        <div>
                                            <p>
                                                Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                                ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                                amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                                odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                            </p>
                                        </div>
                                        <h3>Section 2</h3>
                                        <div>
                                            <p>
                                                Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                                purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                                velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                                suscipit faucibus urna.
                                            </p>
                                        </div>
                                        <h3>Section 3</h3>
                                        <div>
                                            <p>
                                                Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                                Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                                ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                                lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                            </p>
                                            <ul>
                                                <li>List item one</li>
                                                <li>List item two</li>
                                                <li>List item three</li>
                                            </ul>
                                        </div>
                                        <h3>Section 4</h3>
                                        <div>
                                            <p>
                                                Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                                et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                                faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                                mauris vel est.
                                            </p>
                                            <p>
                                                Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                                                Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                                inceptos himenaeos.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- /.box accordion -->
                        </div><!-- /.col left -->
                        <!-- Right column -->
                        <div class='col-md-6'>
                            <div class='box box-danger'>
                                <div class='box-header'>
                                    <h3 class='box-title'>Date Picker</h3>
                                </div>
                                <div class="box-body">
                                    <p>Date: <input type="text" id="datepicker"></p>
                                    <p>Date range:</p>
                                    <label for="from">From</label>
                                    <input type="text" id="from" name="from">
                                    <label for="to">to</label>
                                    <input type="text" id="to" name="to">
                                </div>                                
                            </div>
                            <div class='box box-info'>
                                <div class='box-header'>
                                    <h3 class='box-title'>Dialog</h3>                                    
                                </div>
                                <div class='box-body'>
                                    <div id="dialog" title="Basic dialog">
                                        <p>This is an animated dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.</p>
                                    </div>

                                    <button id="opener">Open Dialog</button>
                                </div>
                            </div>
                        </div><!-- /.col right -->
                    </div><!-- /.row -->
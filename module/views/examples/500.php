<?php
$this->title = '500 error';
$this->params['breadcrumbs'][] = ['label' => 'Example', 'url' => ['#']];
$this->params['breadcrumbs'][] = $this->title;
$this->params['pagelabel'] = '';
?>                 
                    <div class="error-page">
                        <h2 class="headline">500</h2>
                        <div class="error-content">
                            <h3><i class="fa fa-warning text-yellow"></i> Oops! Something went wrong.</h3>
                            <p>
                                We will work on fixing that right away. 
                                Meanwhile, you may <a href='../../index.html'>return to dashboard</a> or try using the search form.
                            </p>
                            <form class='search-form'>
                                <div class='input-group'>
                                    <input type="text" name="search" class='form-control' placeholder="Search"/>
                                    <div class="input-group-btn">
                                        <button type="submit" name="submit" class="btn btn-info"><i class="fa fa-search"></i></button>
                                    </div>
                                </div><!-- /.input-group -->
                            </form>
                        </div>
                    </div><!-- /.error-page -->
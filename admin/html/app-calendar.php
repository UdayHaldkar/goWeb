<!doctype html>
<html lang="en">

<head>
<title>goWeb | Calendar</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta name="description" content="goWeb Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/vendor/animate-css/vivify.min.css">

<link rel="stylesheet" href="../assets/vendor/fullcalendar/fullcalendar.min.css">

<!-- MAIN CSS -->
<link rel="stylesheet" href="assets/css/site.min.css">

</head>

<?php
 include 'header.php';
 ?>
    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Calendar</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">goWeb</a></li>
                            
                            <li class="breadcrumb-item active" aria-current="page">Calendar</li>
                            </ol>
                        </nav>
                    </div>            
                    <div class="col-md-6 col-sm-12 text-right hidden-xs">
                        <button class="btn btn-sm btn-primary btn-round" title="" data-toggle="modal" data-target="#addevent">Add New Event</button>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12">

                    <div class="card">
                        <div class="body">
                            <table class="table table-calendar mb-0">
                                <tbody>
                                    <tr>
                                        <th>Mo</th>
                                        <th>Tu</th>
                                        <th>We</th>
                                        <th>Th</th>
                                        <th>Fr</th>
                                        <th>Sa</th>
                                        <th>Su</th>
                                    </tr>
                                    <tr>
                                        <td class="text-muted">27</td>
                                        <td class="text-muted">28</td>
                                        <td class="text-muted">29</td>
                                        <td class="text-muted">30</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td><a href="javascript:void(0)" class="table-calendar-link" title="Meeting" data-toggle="tooltip">4</a></td>
                                        <td>5</td>
                                        <td><a href="javascript:void(0)" class="table-calendar-link" title="Event" data-toggle="tooltip">6</a></td>
                                        <td>7</td>
                                        <td>8</td>
                                        <td>9</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>11</td>
                                        <td><a href="javascript:void(0)" class="table-calendar-link" title="Outing with Friends" data-toggle="tooltip">12</a></td>
                                        <td>13</td>
                                        <td>14</td>
                                        <td><a href="javascript:void(0)">15</a></td>
                                        <td>16</td>
                                        <td>17</td>
                                    </tr>
                                    <tr>
                                        <td>18</td>
                                        <td><a href="javascript:void(0)" class="table-calendar-link" title="Product Event" data-toggle="tooltip">19</a></td>
                                        <td><a href="javascript:void(0)" class="table-calendar-link" title="Meeting" data-toggle="tooltip">20</a></td>
                                        <td>21</td>
                                        <td>22</td>
                                        <td>23</td>
                                        <td>24</td>
                                    </tr>
                                    <tr>
                                        <td>25</td>
                                        <td>26</td>
                                        <td>27</td>
                                        <td>28</td>
                                        <td>29</td>
                                        <td>30</td>
                                        <td class="text-muted">1</td>
                                    </tr>
                                </tbody>
                            </table>                            
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Todo List</h2>
                        </div>
                        <div class="body">
                            <ul class="todo_list list-unstyled">
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" checked>
                                        <span>Product Event at New York</span>
                                    </label>
                                    <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" checked>
                                        <span>Meeting with Team</span>
                                    </label>
                                    <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <span>Product Event for new product</span>
                                    </label>
                                    <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" checked>
                                        <span>Lunch friends in Sunday</span>
                                    </label>
                                    <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <span>Meeting with Team</span>
                                    </label>
                                    <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                                </li>
                                <li>
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox">
                                        <span>Product Event for new product</span>
                                    </label>
                                    <a href="javascript:void(0);" class="todo-delete"><i class="icon-trash"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="card">
                        <div class="body">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- Default Size -->
<div class="modal fade" id="addevent" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="title" id="defaultModalLabel">Add Event</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <div class="form-line">
                        <input type="number" class="form-control round" placeholder="Event Date">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <input type="text" class="form-control round" placeholder="Event Title">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-line">
                        <textarea rows="4" class="form-control no-resize" placeholder="Event Description..."></textarea>
                    </div>
                </div>       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-round btn-primary">Add</button>
                <button type="button" class="btn btn-round btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/fullcalendarscripts.bundle.js"></script><!--/ calender javascripts -->

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/calendar.js"></script>
</body>
</html>

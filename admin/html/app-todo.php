<!doctype html>
<html lang="en">

<head>
<title>goWeb | Todo List</title>
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
                        <h2>Todo List</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">goWeb</a></li>
                            
                            <li class="breadcrumb-item active" aria-current="page">Todo List</li>
                            </ol>
                        </nav>
                    </div>            
                    
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table table-hover table-custom spacing5">
                                <thead>
                                    <tr>
                                        <th><a href="javascript:void(0);" class="btn btn-info btn-sm">Add New</a></th>
                                        <th class="w60 text-right">Due</th>
                                        <th class="w100">Priority</th>
                                        <th class="w60"><i class="icon-user"></i></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="checkbox" checked="">
                                                <span>Product Event at New York</span>
                                            </label>
                                        </td>
                                        <td class="text-right">Feb 12-2019</td>
                                        <td><span class="badge badge-danger ml-0 mr-0">HIGH</span></td>
                                        <td>
                                            <div class="avtar-pic w30 bg-red" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"><span>SS</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="checkbox">
                                                <span>Product Event for new product</span>
                                            </label>
                                        </td>
                                        <td class="text-right">Feb 18-2019</td>
                                        <td><span class="badge badge-warning ml-0 mr-0">MED</span></td>
                                        <td>
                                            <img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w30 rounded" data-original-title="Avatar Name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="checkbox" checked="">
                                                <span>Meeting with Team</span>
                                            </label>
                                        </td>
                                        <td class="text-right">March 02-2019</td>
                                        <td><span class="badge badge-success ml-0 mr-0">High</span></td>
                                        <td>
                                            <div class="avtar-pic w30 bg-indigo" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"><span>JK</span></div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="checkbox" checked="">
                                                <span>Product Event for new product</span>
                                            </label>
                                        </td>
                                        <td class="text-right">March 20-2019</td>
                                        <td><span class="badge badge-warning ml-0 mr-0">MED</span></td>
                                        <td>
                                            <img src="../assets/images/xs/avatar1.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w30 rounded" data-original-title="Avatar Name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="checkbox">
                                                <span>Product Event for new product</span>
                                            </label>
                                        </td>
                                        <td class="text-right">March 28-2019</td>
                                        <td><span class="badge badge-success ml-0 mr-0">LOW</span></td>
                                        <td>
                                            <img src="../assets/images/xs/avatar2.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w30 rounded" data-original-title="Avatar Name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="checkbox">
                                                <span>Campaign performance tracking</span>
                                            </label>
                                        </td>
                                        <td class="text-right">Apr 1</td>
                                        <td><span class="badge badge-danger ml-0 mr-0">HIGH</span></td>
                                        <td>
                                            <img src="../assets/images/xs/avatar3.jpg" data-toggle="tooltip" data-placement="top" title="" alt="Avatar" class="w30 rounded" data-original-title="Avatar Name">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <label class="fancy-checkbox">
                                                <input type="checkbox" name="checkbox" checked="">
                                                <span>Campaign Launch!</span>
                                            </label>
                                        </td>
                                        <td class="text-right">May 08</td>
                                        <td><span class="badge badge-warning ml-0 mr-0">MED</span></td>
                                        <td>
                                            <div class="avtar-pic w30 bg-green" data-toggle="tooltip" data-placement="top" title="" data-original-title="Avatar Name"><span>SP</span></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</div>

<!-- Javascript -->
<script src="assets/bundles/libscripts.bundle.js"></script>    
<script src="assets/bundles/vendorscripts.bundle.js"></script>

<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>

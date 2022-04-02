<!doctype html>
<html lang="en">

<head>
<title>goWeb | Form Drag & Drop</title>
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

<link rel="stylesheet" href="../assets/vendor/dropify/css/dropify.min.css">

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
                        <h1>Drag & Drop File Upload</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">goWeb</a></li>
                            <li class="breadcrumb-item"><a href="#">Form</a></li>
                            <li class="breadcrumb-item active" aria-current="page">File Upload</li>
                            </ol>
                        </nav>
                    </div>            
                    <div class="col-md-6 col-sm-12 text-right hidden-xs">
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Create Campaign</a>
                        <a href="https://themeforest.net/item/oculux-bootstrap-4x-admin-dashboard-clean-modern-ui-kit/23091507" class="btn btn-sm btn-success" title="Themeforest"><i class="icon-basket"></i> Buy Now</a>
                    </div>
                </div>
            </div>
           
            <div class="row clearfix">                
                <div class="col-md-12">
                    <div class="card">
                        <div class="body">
                            <input type="file" class="dropify">
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>With event and default file <small>try to remove the image</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" id="dropify-event" data-default-file="../assets/images/image-gallery/1.jpg">
                        </div>
                    </div>                    
                    <div class="card">
                        <div class="header">
                            <h2>Disabled file upload</h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify" disabled="disabled">
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Limit file type <small>try to upload png or pdf only</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify" data-allowed-file-extensions="pdf png">
                        </div>
                    </div>
                    <div class="card">
                        <div class="header">
                            <h2>Limit file size <small>try to upload file larger than 100 KB</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify" data-max-file-size="100K">
                        </div>
                    </div>                    
                    <div class="card">
                        <div class="header">
                            <h2>Custom messages for default <small>replace, remove and error</small></h2>
                        </div>
                        <div class="body">
                            <input type="file" class="dropify-fr">
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

<script src="../assets/vendor/dropify/js/dropify.js"></script>
<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/forms/dropify.js"></script>
</body>
</html>



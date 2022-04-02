<!doctype html>
<html lang="en">

<head>
<title>goWeb | Inbox Compose</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/vendor/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../assets/vendor/animate-css/vivify.min.css">

<link rel="stylesheet" href="../assets/vendor/summernote/dist/summernote.css"/>

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
                        <h2>Inbox</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">goWeb</a></li>
                            
                            <li class="breadcrumb-item active" aria-current="page">Compose Mail</li>
                            </ol>
                        </nav>
                    </div>            

                </div>
            </div>
            <div class="row clearfix">
                <div class="col-md-12">
                    <div class="card">
                        <div class="mail-inbox">
                            <div class="mobile-left">
                                <a href="javascript:void(0);" class="btn btn-primary toggle-email-nav"><i class="fa fa-bars"></i></a>
                            </div>
                            <div class="body mail-left">
                                <div class="mail-compose m-b-20">
                                    <a href="app-compose.html" class="btn btn-danger btn-block btn-round">Compose</a>
                                </div>
                                <div class="mail-side">
                                    <ul class="nav">
                                        <li class="active"><a href="app-inbox.html"><i class="icon-drawer"></i>Inbox<span class="badge badge-primary float-right">6</span></a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-cursor"></i>Sent<span class="badge badge-warning float-right">6</span></a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-envelope-open"></i>Draft</a></li>
                                        <li><a href="javascript:void(0);"><i class="icon-action-redo"></i>Outbox</a></li>                                        
                                        <li><a href="javascript:void(0);"><i class="icon-trash"></i>Trash</a></li>
                                    </ul>
                                    <h3 class="label">Labels</h3>
                                    <ul class="nav">
                                        <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-danger"></i>Workshop</a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-info"></i>Private</a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-dark"></i>Paypal</a></li>
                                        <li><a href="javascript:void(0);"><i class="fa fa-circle-o text-primary"></i>Comapny</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="body mail-right check-all-parent">
                                <div class="mail-compose">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="To">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Subject">
                                        </div>
                                    </form>
                                    <div class="summernote">
                                        Hello!,
                                        <br/>
                                        <br/>
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock,</p>
                                        <p><strong>Note:</strong> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                        <ul>
                                            <li>New code update on GitHub</li>
                                            <li>There are many variations of passages of Lorem Ipsum available</li>
                                        </ul>                                        
                                        <span><strong>Thank you!</strong></span>
                                        <p> Admin</p>
                                    </div>
                                    <div class="m-t-30 text-right">
                                        <button type="button" class="btn btn-success btn-round">Send Message</button>
                                        <button type="button" class="btn btn-outline-secondary btn-round">Draft</button>
                                        <a href="app-inbox.html" class="btn btn-outline-secondary btn-round">Cancel</a>
                                    </div>
                                </div>
                            </div>
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
<script src="../assets/vendor/summernote/dist/summernote.js"></script>
<script>
    $('.toggle-email-nav').on('click', function() {
		$('.mail-left').toggleClass('open');
	});
</script>
</body>
</html>
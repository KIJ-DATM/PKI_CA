<html>
<head>
   <title>PKI-CA </title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.css"); ?>" />
    <style type="text/css">
    #installationForm .tab-content 
    {
    margin-top: 20px;
    }
    </style>
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
    body {
        padding-top: 70px;
    }
    </style>
</head>

<body>
<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">PKI - Certificate Maker</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">Welcome, Admin!</a>
                    </li>
                    <li>
                        <a href="#">Certificate List</a>
                    </li>
                    <li>
                        <a href="#">Logout</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>



<div class="page-header">
<h1>CERTIFICATE DETAILS</h1>
</div>

<table class="table table-hover table-bordered">
    <tbody>
        <tr>
            <td>ID Request</td>
            <td></td>
        </tr>
        <tr>
            <td>Username</td>
            <td></td>
        </tr>
        <tr>
            <td>Organization Name</td>
            <td></td>
        </tr>
        <tr>
            <td>URL</td>
            <td></td>
        </tr>
        <tr>
            <td>Address</td>
            <td></td>
        </tr>
        <tr>
            <td>City</td>
            <td></td>
        </tr>
        <tr>
            <td>Postal Code</td>
            <td></td>
        </tr>
        <tr>
            <td>Country</td>
            <td></td>
        </tr>
         <tr>
            <td>CSR Info</td>
            <td></td>
        </tr>
         <tr>
            <td>Status</td>
            <td></td>
        </tr>
    </tbody>
</table>

<a class="btn btn-success" href="#">Generate Certificate</a>
<a class="btn btn-primary" href="#">Back</a>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="/scripts/jquery.min.js"></script>

</body>

</html>
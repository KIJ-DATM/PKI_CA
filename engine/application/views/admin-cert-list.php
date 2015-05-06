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
<h1>CERTIFICATE LIST</h1>
</div>
<section id="buttons">
<table class="table table-hover table-bordered">
    <thead>
        <tr>
            <th>ID Request</th>
            <th>Username</th>
            <th>Organization Name</th>
            <th>URL</th>
            <th>Status</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <!--README :
            keterangan class :
            success: satu baris tabel warna ijo, kalo misalnya statusnya berhasil
            warning : satu baris table warna kuning, kalo misalnya statusnya pending
            danger : satu baris table warna merah, kalo misalnya statusnya belum diapprove
            keterangan tombol Details:
            Details untuk menampilkan detail certificate request, nanti redirect ke page admin-cert-detail
        -->
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a class="btn btn-info" href="#">Details</a></td>
        </tr>
        <tr class="warning">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a class="btn btn-info" href="#">Details</a></td>
        </tr>
        <tr class="danger">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a class="btn btn-info" href="#">Details</a></td>
        </tr>
    </tbody>
</table>
</section>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="/scripts/jquery.min.js"></script>

</body>

</html>
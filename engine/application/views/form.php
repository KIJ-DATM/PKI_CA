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
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Login</a>
                    </li>
                    <li>
                        <a href="#">Register</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.min.js"></script>

<form id="installationForm" class="form-horizontal">
    <ul class="nav nav-pills">
        <li class="active"><a href="#basic-tab" data-toggle="tab">Basic information</a></li>
        <li><a href="#csr-tab" data-toggle="tab">CSR Information</a></li>
        <li><a href="#login-tab" data-toggle="tab">Login Information</a></li>
    </ul>


    <div class="tab-content">
        <!-- First tab -->
        <div class="tab-pane active" id="basic-tab">
            <div class="form-group">
                <label class="col-xs-3 control-label">Name</label>
                <div class="col-xs-5">
                    <input type="text" class="form-control" name="name" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-3 control-label">Organization name</label>
                <div class="col-xs-5">
                    <input type="text" class="form-control" name="org-name" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-3 control-label">URL</label>
                <div class="col-xs-7">
                    <input type="text" class="form-control" name="url" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-3 control-label">Address</label>
                <div class="col-xs-5">
                    <input type="text" class="form-control" name="address" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-3 control-label">City</label>
                <div class="col-xs-5">
                    <input type="text" class="form-control" name="city" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-3 control-label">Postal Code</label>
                <div class="col-xs-5">
                    <input type="text" class="form-control" name="pos-code" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-3 control-label">Country</label>
                <div class="col-xs-5">
                    <select class="form-control" name="country" />
                        <option><!-- Isi sama database country -->
                        </option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-3 control-label">Description</label>
                <div class="col-xs-7">
                    <textarea class="form-control" name="description" rows="6"></textarea>
                </div>
            </div>
        </div>

        <div class="tab-pane" id="csr-tab">
            <div class="form-group">
                <label class="col-xs-3 control-label">Copy and Paste Your CSR Into Here</label>
                <div class="col-xs-7">
                    <textarea class="form-control" name="csr-info" rows="6"></textarea>
                </div>

            </div>

            <div class="form-group">

            </div>

            <div class="form-group">

            </div>
        </div>
        <!-- Second tab -->
        <div class="tab-pane" id="login-tab">
            <div class="form-group">
                <label class="col-xs-3 control-label">Username</label>
                <div class="col-xs-5">
                    <input type="text" class="form-control" name="User" />
                </div>
            </div>

            <div class="form-group">
                <label class="col-xs-3 control-label">Password</label>
                <div class="col-xs-5">
                    <input type="password" class="form-control" name="Password" />
                </div>
            </div>
        </div>

        <!-- Previous/Next buttons -->
        <ul class="pager wizard">
            <li class="previous"><a href="javascript: void(0);">Previous</a></li>
            <li class="next"><a href="javascript: void(0);">Next</a></li>
        </ul>
    </div>
</form>

<div class="modal fade" id="completeModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Complete</h4>
            </div>

            <div class="modal-body">
                <p class="text-center">The installation is completed</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Visit the website</button>
            </div>
        </div>
    </div>
</div>

<script>
$(document).ready(function() {
    // You don't need to care about this function
    // It is for the specific demo
    function adjustIframeHeight() {
        var $body   = $('body'),
                $iframe = $body.data('iframe.fv');
        if ($iframe) {
            // Adjust the height of iframe
            $iframe.height($body.height());
        }
    }

    $('#installationForm')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            // This option will not ignore invisible fields which belong to inactive panels
            excluded: ':disabled',
            fields: {
                name: {
                    validators: {
                        notEmpty: {
                            message: 'The name is required'
                        }
                    }
                },
                org-name: {
                    validators: {
                        notEmpty: {
                            message: 'The organization name is required'
                        }
                    }
                },
                url: {
                    validators: {
                        notEmpty: {
                            message: 'The URL is required'
                        },
                        uri: {
                            message: 'The URL is not valid'
                        }
                    }
                },
                address: {
                    validators: {
                        notEmpty: {
                            message: 'The address is required'
                        }
                    }
                },
                city: {
                    validators: {
                        notEmpty: {
                            message: 'The city is required'
                        }
                    }
                },
                pos-code: {
                    validators: {
                        notEmpty: {
                            message: 'The postal code is required'
                        }
                    }
                },
                csr-info: {
                    validators: {
                        notEmpty: {
                            message: 'You must specify a CSR!'
                        }
                    }
                },
                Username: {
                    validators: {
                        notEmpty: {
                            message: 'The username is required'
                        }
                    }
                }
            }
        })
        .bootstrapWizard({
            tabClass: 'nav nav-pills',
            onTabClick: function(tab, navigation, index) {
                return validateTab(index);
            },
            onNext: function(tab, navigation, index) {
                var numTabs    = $('#installationForm').find('.tab-pane').length,
                    isValidTab = validateTab(index - 1);
                if (!isValidTab) {
                    return false;
                }

                if (index === numTabs) {
                    // We are at the last tab

                    // Uncomment the following line to submit the form using the defaultSubmit() method
                    // $('#installationForm').formValidation('defaultSubmit');

                    // For testing purpose
                    $('#completeModal').modal();
                }

                return true;
            },
            onPrevious: function(tab, navigation, index) {
                return validateTab(index + 1);
            },
            onTabShow: function(tab, navigation, index) {
                // Update the label of Next button when we are at the last tab
                var numTabs = $('#installationForm').find('.tab-pane').length;
                $('#installationForm')
                    .find('.next')
                        .removeClass('disabled')    // Enable the Next button
                        .find('a')
                        .html(index === numTabs - 1 ? 'Install' : 'Next');

                // You don't need to care about it
                // It is for the specific demo
                adjustIframeHeight();
            }
        });

    function validateTab(index) {
        var fv   = $('#installationForm').data('formValidation'), // FormValidation instance
            // The current tab
            $tab = $('#installationForm').find('.tab-pane').eq(index);

        // Validate the container
        fv.validateContainer($tab);

        var isValidStep = fv.isValidContainer($tab);
        if (isValidStep === false || isValidStep === null) {
            // Do not jump to the target tab
            return false;
        }

        return true;
    }
});
</script>

<script type="text/javascript" src="<?php echo base_url("assets/js/jquery-1.11.2.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.js"); ?>"></script>
<script type="text/javascript" src="<?php echo base_url("assets/js/jquery.bootstrap.wizard.min.js"); ?>"></script>

</body>

</html>


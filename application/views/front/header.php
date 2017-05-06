<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $title; ?></title>

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?php echo base_url(); ?>assets/front/css/style.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/front/css/owl.carousel.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/front/css/owl.theme.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>assets/front/css/owl.transitions.css" rel="stylesheet">
                <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class='alert alert-success' id='success-alert'>
        <strong>Sent Successfully ! </strong>
    </div>
    <div class='alert alert-success' id='success-alert'>
       <strong> Failed, Please try again ! </strong> 
    </div>
    <style type="text/css">
        #failure-alert,#success-alert{
            position: fixed;
            z-index: 12;
            width: 300px;
            top:100px;
            right: 0px;
            display: none;
        }         
    </style>
    <div id='loader'>
        <img src='<?php echo base_url();?>/assets/front/images/reload.gif' height='50' />
    </div>
        <nav class="navbar navbar-default affix">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url(); ?>">Fun <span>Travel</span></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?php echo base_url(); ?>">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="<?php echo base_url('cheapflights'); ?>"><i class='fa fa-plane carrot'></i> Cheap Flights</a></li>
                        <li><a href="<?= base_url('destinations') ?>">Holiday Packages</a></li>
                        <li class="dropdown">
                            <a href="<?php echo base_url('forex-booking');?>" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class='fa fa-exchange green'></i> Foreign Exchange & Money Transfer <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo base_url('forex-booking');?>">Buy Currency <i class='fa fa-money carrot pull-right'> </i></a></li>

                                <li><a href="<?= base_url('money_transfer') ?>">Send Money Online <i class='fa fa-send carrot pull-right'></i></a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#" data-toggle="modal" data-target="#myModal">Checkout the Rates <i class='fa fa-list-alt carrot pull-right'></i></a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="#">Frequently Asked Question <i class='fa fa-question-circle carrot pull-right'></i></a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left" action="<?= base_url('/searchpackage') ?>">
                        <div class="form-group">
                            <input type="text" name="search_package" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default search-fun-btn">Search Fun</button>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><img class='img-responsive flag' src='http://www.asienguiden.se/japan/japanflagga.gif' /> JP/ <img class='img-responsive flag' src='https://kidy.eu/templates/i/lang_en.png' /> EN</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Useful Links <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="<?= base_url('about') ?>">About Us</a></li>
                                <li><a href="<?= base_url('about#companyInformation') ?>">Company Information</a></li>
                                <li><a href="<?= base_url('career') ?>">Career</a></li>
                                <li><a href="<?= base_url('terms') ?>">Terms & Conditions</a></li>
                                <li><a href="<?= base_url('contact') ?>">Enquiry/Complaints</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="<?= base_url('contact') ?>">Contact Us</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <!-- navigation ends here  -->


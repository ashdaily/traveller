<!DOCTYPE html>
<html lang="en" class="wide wow-animation">
    <head>
        <!-- Site Title-->
        <title>Fun Travel</title>
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <link rel="icon" href="images/favicon.html" type="image/x-icon">
        <!-- Stylesheets-->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat:400,700%7CLato%7CRoboto">
        <link rel="stylesheet" href="<?= base_url('homeassets/') ?>css/style.css">
        <!--[if lt IE 10]>
<div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
<script src="js/html5shiv.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <!-- Page-->
        <div class="page">
            <!-- Page Header-->
            <header class="page-head">
                <!-- RD Navbar-->
                <div class="rd-navbar-wrap">
                    <nav data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fullwidth" data-md-layout="rd-navbar-fullwidth" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-sm-stick-up-offset="150px" data-lg-stick-up-offset="150px" class="rd-navbar">
                        <div class="rd-navbar-inner">      
                            <!-- RD Navbar Panel-->
                            <div class="rd-navbar-wrapper">
                                <div class="rd-navbar-panel">
                                    <!-- RD Navbar Toggle-->
                                    <button data-rd-navbar-toggle=".rd-navbar-nav-wrap" class="rd-navbar-toggle"><span></span></button>
                                    <!-- RD Navbar Brand-->
                                    <div class="rd-navbar-brand"><a href="<?= base_url() ?>" class="brand-name">
                                            <div class="logo"><img src="<?= base_url('homeassets/') ?>images/logo.png" alt=""></div></a></div>
                                </div>
                                <div class="rd-navbar-nav-wrap">
                                    <!-- RD Navbar Nav-->
                                    <ul class="rd-navbar-nav">
                                        <li class="active"><a href="<?= base_url() ?>"><span class="material-icons-room icon icon-white icon-lg"></span><span>TRAVEL</span><span class="triangle"></span></a>
                                            <!-- RD Navbar Dropdown-->
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="<?= base_url('family_vacations') ?>">Travels Family</a></li>
                                                <li><a href="<?= base_url('vacations') ?>">Travels Packages</a></li>
                                                <li><a href="<?= base_url('offers') ?>">Best Offers/Hot Travel</a></li>
                                                <li><a href="<?= base_url('vacation') ?>">Travels Detail</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="<?= base_url('destinations') ?>"><span class="material-icons-business icon icon-white icon-lg"></span><span>destinations</span><span class="triangle"></span></a>
                                        </li>
                                        <li><a href="<?= base_url('cruises') ?>"><span class="material-icons-directions_boat icon icon-white icon-lg"></span><span>cruises</span><span class="triangle"></span></a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="<?= base_url('search_cruises') ?>">Cruises Fillter</a></li>
                                                <li><a href="<?= base_url('bahamas_cruises') ?>">Cruises Detail</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?= base_url('about') ?>"><span class="material-icons-group icon icon-white icon-lg"></span><span>about</span><span class="triangle"></span></a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="<?= base_url('testimonials') ?>">Testimonials</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="<?= base_url('contact') ?>"><span class="material-icons-email icon icon-white icon-lg"></span><span>contacts</span><span class="triangle"></span></a>
                                            <ul class="rd-navbar-dropdown">
                                                <li><a href="<?= base_url('bookings') ?>">Booking and Payment</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div><a href="<?= base_url('contact') ?>" class="btn btn-orange-2 btn-lg btn-icon"><span class="icon icon-lg icon-white material-icons-location_on"></span><span>find us</span></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </header>
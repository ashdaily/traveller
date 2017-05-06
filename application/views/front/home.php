
<div class='container-fluid home-0' id='home-0'>

    <div class='col-xs-12 home-1'>
        <h1 class='sans text-center white-text'>CHEAP FLIGHTS, HOTELS, HOLIDAY PACKAGES</h1>	
        <h1 class='sansa text-center white-text'> CURRENCY EXCHANGE & MONEY TRANSFER</h1>	

    </div>
    <style>
        #owl1 .item img{
            display: block;
            width: 100%;
            max-height: 300px;
        }
    </style>
    <div class="col-sm-4">
        <div class="fadeOut owl-carousel owl-theme"  id="owl1">
            <div class="item">
                <img class="img-responsive" src="<?= base_url() ?>assets/front/images/01.jpg" />
            </div>
            <div class="item">
                <img class="img-responsive" src="<?= base_url() ?>assets/front/images/02.jpg" />
            </div>
            <div class="item">
                <img class="img-responsive" src="<?= base_url() ?>assets/front/images/03.jpg" />
            </div>
            <div class="item">
                <img class="img-responsive" src="<?= base_url() ?>assets/front/images/04.jpg" />
            </div>
            <div class="item">
                <img class="img-responsive" src="<?= base_url() ?>assets/front/images/05.jpg" />
            </div>
            <div class="item">
                <img class="img-responsive" src="<?= base_url() ?>assets/front/images/06.jpg" />
            </div>
            <div class="item">
                <img class="img-responsive" src="<?= base_url() ?>assets/front/images/07.jpg" />
            </div>
            <div class="item">
                <img class="img-responsive" src="<?= base_url() ?>assets/front/images/08.jpg" />
            </div>
            <div class="item">
                <img class="img-responsive" src="<?= base_url() ?>assets/front/images/09.jpg" />
            </div>
            <div class="item">
                <img class="img-responsive" src="<?= base_url() ?>assets/front/images/10.jpg" />
            </div>
            <div class="item">
                <img class="img-responsive" src="<?= base_url() ?>assets/front/images/11.jpg" />
            </div>
            <div class="item">
                <img class="img-responsive" src="<?= base_url() ?>assets/front/images/12.jpg" />
            </div>
            <div class="item">
                <img class="img-responsive" src="<?= base_url() ?>assets/front/images/13.jpg" />
            </div>
            <div class="item">
                <img class="img-responsive" src="<?= base_url() ?>assets/front/images/14.jpg" />
            </div>
            <div class="item">
                <img class="img-responsive" src="<?= base_url() ?>assets/front/images/15.jpg" />
            </div>
            <div class="item">
                <img class="img-responsive" src="<?= base_url() ?>assets/front/images/16.jpg" />
            </div>
        </div>
        
    </div>
    <div class='col-xs-12 col-sm-8 home-2'>
        <ul class="nav nav-pills nav-justified" >
            <li class="active"><a data-toggle="tab" href="#home1">Holiday Packages</a></li>
            <li><a data-toggle="tab" href="#home">FLIGHT</a></li>
            <!--           <li><a data-toggle="tab" href="#menu1">HOTEL</a></li>-->
            <li><a data-toggle="tab" href="#menu2" id='forex-booking' >CURRENCY EXCHANGE</a></li>
            <li><a data-toggle="tab" href="#menu3" id='money-transfer-link'>MONEY TRANSFER</a></li>
        </ul>
 
        <div class="tab-content">
            <div id="home1" class="tab-pane fade in active">
                <div class='col-xs-12 col-md-10 col-md-offset-1 flight-form'>
                    <form class='form-group' action="<?= base_url('/searchpackage') ?>">
                        <div class='col-xs-12 input-field'>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class='fa fa-industry'></i></span>
                                <input type="text" name="search_package" class="form-control" placeholder="Search Holiday Packages" aria-describedby="basic-addon1" name='from'>
                            </div>

                        </div>

                        <div class='col-xs-10 col-xs-offset-1 col-md-5 col-md-offset-7'>
                            <button type="submit" class='btn btn-default carrot-btn'><i class='fa fa-rocket'></i> Search Package</button>
                        </div>
                    </form>


                </div>

            </div>
            <div id="home" class="tab-pane fade in">
                <div class='col-xs-12 col-md-10 col-md-offset-1 flight-form'>
                    <form class='form-group' action="<?= base_url('/searchflights') ?>">
                        <div class='col-xs-12 col-md-6 input-field'>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class='fa fa-plane'></i> FROM:</span>
                                <input type="text" class="form-control" placeholder="FLIGHT FROM" aria-describedby="basic-addon1" name='from'>
                            </div>
                        </div>
                        <div class='col-xs-12 col-md-6 input-field'>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class='fa fa-plane invert'></i> TO:</span>
                                <input type="text" class="form-control" placeholder="CITY, COUNTRY" aria-describedby="basic-addon1" name='to'>
                            </div>
                        </div>
                        <!--                        <div class='col-xs-12 col-md-6 input-field'>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i class='fa fa-calendar'></i> ONE WAY:</span>
                                                        <input type="date" class="form-control" placeholder="from" aria-describedby="basic-addon1" name='date1'>
                                                    </div>
                                                </div>
                                                <div class='col-xs-12 col-md-6 input-field'>
                                                    <div class="input-group">
                                                        <span class="input-group-addon" id="basic-addon1"><i class='fa fa-calendar'></i> ROUND WAY:</span>
                                                        <input type="date" class="form-control" placeholder="from" aria-describedby="basic-addon1" name='date2'>
                                                    </div>
                                                </div>-->
                        <div class='col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-8'>
                            <button type="submit" class='btn btn-default'><i class='fa fa-rocket'></i> Cheap Fares</button>
                        </div>
                    </form>
                </div>
            </div>
            <!--        <div id="menu1" class="tab-pane fade"> 
                        <div class='col-xs-12 col-md-10 col-md-offset-1 flight-form'>
                            <form class='form-group'>
                                <div class='col-xs-12 col-md-6 input-field'>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class='fa fa-plane'></i> DESTINATION:</span>
                                        <input type="text" class="form-control" placeholder="CITY, STATE, COUNTRY" aria-describedby="basic-addon1" name='from'>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-md-3 input-field'>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class='fa fa-plane invert'></i>Adults:</span>
                                        <select  class="form-control"  aria-describedby="basic-addon1" name='to'>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                            <option value="4+">Four +</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-md-3 input-field'>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class='fa fa-plane invert'></i>Children:</span>
                                        <select  class="form-control"  aria-describedby="basic-addon1" name='to'>
                                            <option value="0">Zero</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                            <option value="4">Four</option>
                                            <option value="4+">Four +</option>
                                        </select>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-md-6 input-field'>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class='fa fa-calendar'></i> CHECK-OUT:</span>
                                        <input type="date" class="form-control" aria-describedby="basic-addon1" name='date2'>
                                    </div>
                                </div>
                                <div class='col-xs-12 col-md-6 input-field'>
                                    <div class="input-group">
                                        <span class="input-group-addon" id="basic-addon1"><i class='fa fa-calendar'></i> CHECK-OUT:</span>
                                        <input type="date" class="form-control" aria-describedby="basic-addon1" name='date2'>
                                    </div>
                                </div>
                                <div class='col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-8'>
                                    <button class='btn btn-default'><i class='fa fa-hotel'></i> Cheap Hotels</button>
                                </div>
                            </form>
                        </div>
                    </div>-->
            <div id="menu2" class="tab-pane fade">
                <div class='col-xs-12 col-md-10 col-md-offset-1 flight-form'>
                    <form class='form-group'>
                        <div class='col-xs-12 col-md-6 input-field'>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class='fa fa-money'></i> SELECT CURRENCY:</span>
                                <select  class="form-control"  aria-describedby="basic-addon1" name='to'> 
                                    <option value="1">  US Dollar  </option >  
                                    <option value="1">Euro</option>     
                                    <option value="1">British Pound  </option> 
                                    <option value="1"> Indian Rupee   </option> 
                                    <option value="1"> Australian Dollar   </option> 
                                    <option value="1">  Canadian Dollar  </option>
                                    <option value="1"> Singapore Dollar  </option>   
                                    <option value="1"> Swiss Franc   </option> 
                                    <option value="1">  Malaysian Ringgit </option>  
                                    <option value="1"> Chinese Yuan Renminbi  </option>

                                    <option value="1">Argentine Peso   </option>
                                    <option value="1"> Australian Dollar  </option>
                                    <option value="1"> Bahraini Dinar </option>
                                    <option value="1"> Botswana Pula  </option>
                                    <option value="1">Brazilian Real  </option>
                                    <option value="1"> British Pound   </option>
                                    <option value="1"> Bruneian Dollar</option>
                                    <option value="1">  Bulgarian Lev   </option>
                                    <option value="1">  Canadian Dollar </option>
                                    <option value="1"> Chilean Peso    </option>
                                    <option value="1"> Chinese Yuan Renminbi   </option>
                                    <option value="1">  Colombian Peso </option>
                                    <option value="1">Croatian Kuna  </option>
                                    <option value="1"> Czech Koruna   </option>
                                    <option value="1">Danish Krone  </option>
                                    <option value="1"> Emirati Dirham </option>
                                    <option value="1">Euro  </option>
                                    <option value="1">Hong Kong Dollar    </option>
                                    <option value="1">Hungarian Forint   </option>  
                                    <option value="1">Icelandic Krona  </option>
                                    <option value="1">Indian Rupee    </option>
                                    <option value="1"> Indonesian Rupiah  </option>  
                                    <option value="1"> Iranian Rial    </option>
                                    <option value="1"> Israeli Shekel  </option>
                                    <option value="1"> Kazakhstani Tenge   </option> 
                                    <option value="1"> Kuwaiti Dinar</option>    
                                    <option value="1"> Latvian Lat  </option>
                                    <option value="1"> Libyan Dinar   </option>  
                                    <option value="1"> Lithuanian Litas  </option>  
                                    <option value="1"> Malaysian Ringgit  </option> 
                                    <option value="1"> Mauritian Rupee  </option>
                                    <option value="1"> Mexican Peso   </option>  
                                    <option value="1"> Nepalese Rupee  </option> 
                                    <option value="1"> New Zealand Dollar </option>  
                                    <option value="1"> Norwegian Krone </option> 
                                    <option value="1"> Omani Rial   </option>
                                    <option value="1"> Pakistani Rupee</option>  
                                    <option value="1"> Philippine Peso </option> 
                                    <option value="1"> Polish Zloty    </option> 
                                    <option value="1"> Qatari Riyal  </option>  
                                    <option value="1"> Romanian New Leu   </option>  
                                    <option value="1"> Russian Ruble    </option>
                                    <option value="1"> Saudi Arabian Riyal  </option>
                                    <option value="1"> Singapore Dollar  </option>   
                                    <option value="1"> South African Rand </option> 
                                    <option value="1"> South Korean Won </option>    
                                    <option value="1"> Sri Lankan Rupee</option>     
                                    <option value="1"> Swedish Krona   </option> 
                                    <option value="1"> Swiss Franc  </option>
                                    <option value="1"> Taiwan New Dollar  </option>  
                                    <option value="1"> Thai Baht     </option>
                                    <option value="1"> Trinidadian Dollar </option>  
                                    <option value="1"> Turkish Lira  </option>  
                                    <option value="1"> US Dollar   </option>
                                    <option value="1"> Venezuelan Bolivar</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-xs-12 col-md-6 input-field'>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class='fa fa-bank'></i> Amount Of Currency you want:</span>
                                <input type="text" class="form-control" placeholder="Amount " aria-describedby="basic-addon1" name='to'>
                            </div>
                        </div>
                        <div class='col-xs-12 col-md-12 input-field'>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class='fa fa-balance-scale'></i> Amount You Pay in JPY:</span>
                                <input type="text" class="form-control disabled" placeholder="¥" aria-describedby="basic-addon1" name='date1'>
                            </div>
                        </div>

                        <div class='col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-8'>
                            <button class='btn btn-default'> Book Now</button>
                        </div>
                    </form>
                </div>
            </div>
            <div id="menu3" class="tab-pane fade">
                <div class='col-xs-12 col-md-10 col-md-offset-1 flight-form'>
                    <form class='form-group'>

                        <div class='col-xs-12 col-md-12 input-field'>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class='fa fa-bank'></i>Amount to be Transferred in Yen:</span>
                                <input type="text" class="form-control" placeholder="Amount" aria-describedby="basic-addon1" name='to'>
                            </div>
                        </div>
                        <div class='col-xs-12 col-md-6 input-field'>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class='fa fa-money'></i> SELECT CURRENCY OF RECIEVING END:</span>
                                <select  class="form-control"  aria-describedby="basic-addon1" name='to'> 
                                    <option value="1">  US Dollar  </option >  
                                    <option value="1">Euro</option>     
                                    <option value="1">British Pound  </option> 
                                    <option value="1"> Indian Rupee   </option> 
                                    <option value="1"> Australian Dollar   </option> 
                                    <option value="1">  Canadian Dollar  </option>
                                    <option value="1"> Singapore Dollar  </option>   
                                    <option value="1"> Swiss Franc   </option> 
                                    <option value="1">  Malaysian Ringgit </option>  
                                    <option value="1"> Chinese Yuan Renminbi  </option> 
                                    <option value="1">Argentine Peso   </option>
                                    <option value="1"> Australian Dollar  </option>
                                    <option value="1"> Bahraini Dinar </option>
                                    <option value="1"> Botswana Pula  </option>
                                    <option value="1">Brazilian Real  </option>
                                    <option value="1"> British Pound   </option>
                                    <option value="1"> Bruneian Dollar</option>
                                    <option value="1">  Bulgarian Lev   </option>
                                    <option value="1">  Canadian Dollar </option>
                                    <option value="1"> Chilean Peso    </option>
                                    <option value="1"> Chinese Yuan Renminbi   </option>
                                    <option value="1">  Colombian Peso </option>
                                    <option value="1">Croatian Kuna  </option>
                                    <option value="1"> Czech Koruna   </option>
                                    <option value="1">Danish Krone  </option>
                                    <option value="1"> Emirati Dirham </option>
                                    <option value="1">Euro  </option>
                                    <option value="1">Hong Kong Dollar    </option>
                                    <option value="1">Hungarian Forint   </option>  
                                    <option value="1">Icelandic Krona  </option>
                                    <option value="1">Indian Rupee    </option>
                                    <option value="1"> Indonesian Rupiah  </option>  
                                    <option value="1"> Iranian Rial    </option>
                                    <option value="1"> Israeli Shekel  </option>
                                    <option value="1"> Kazakhstani Tenge   </option> 
                                    <option value="1"> Kuwaiti Dinar</option>    
                                    <option value="1"> Latvian Lat  </option>
                                    <option value="1"> Libyan Dinar   </option>  
                                    <option value="1"> Lithuanian Litas  </option>  
                                    <option value="1"> Malaysian Ringgit  </option> 
                                    <option value="1"> Mauritian Rupee  </option>
                                    <option value="1"> Mexican Peso   </option>  
                                    <option value="1"> Nepalese Rupee  </option> 
                                    <option value="1"> New Zealand Dollar </option>  
                                    <option value="1"> Norwegian Krone </option> 
                                    <option value="1"> Omani Rial   </option>
                                    <option value="1"> Pakistani Rupee</option>  
                                    <option value="1"> Philippine Peso </option> 
                                    <option value="1"> Polish Zloty    </option> 
                                    <option value="1"> Qatari Riyal  </option>  
                                    <option value="1"> Romanian New Leu   </option>  
                                    <option value="1"> Russian Ruble    </option>
                                    <option value="1"> Saudi Arabian Riyal  </option>
                                    <option value="1"> Singapore Dollar  </option>   
                                    <option value="1"> South African Rand </option> 
                                    <option value="1"> South Korean Won </option>    
                                    <option value="1"> Sri Lankan Rupee</option>     
                                    <option value="1"> Swedish Krona   </option> 
                                    <option value="1"> Swiss Franc  </option>
                                    <option value="1"> Taiwan New Dollar  </option>  
                                    <option value="1"> Thai Baht     </option>
                                    <option value="1"> Trinidadian Dollar </option>  
                                    <option value="1"> Turkish Lira  </option>  
                                    <option value="1"> US Dollar   </option>
                                    <option value="1"> Venezuelan Bolivar</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-xs-12 col-md-6 input-field'>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class='fa fa-bank'></i>Amount Transferred Will Be:</span>
                                <input type="text" class="form-control" placeholder=" " aria-describedby="basic-addon1" name='to'>
                            </div>
                        </div>


                        <div class='col-xs-10 col-xs-offset-1 col-md-4 col-md-offset-8'>
                            <button class='btn btn-default'> Money Transfer</button>
                        </div>
                    </form>
                </div>
            </div>


        </div>

    </div> 
</div>
<div class="container-fluid flight_home1">
    <div class='row'>
        <div class='col-xs-12' id='quick-links'> 
            <span><a href="<?= base_url('transfers') ?>">Transfers</a> </span>
            <span> <a href="<?= base_url('about#companyInformation') ?> ">Company Information</a></span>
            <span><a href="<?= base_url('career') ?>" >Career</a></span>
            <span><a href="<?= base_url('terms') ?>" >Terms & Conditions</a></span>
            <span><a href="<?= base_url('contact') ?>" >Contact Us</a></span>
            <span><a href="<?= base_url('embassies') ?>">Embassies</a> </span>
            <span><a href="<?= base_url('mileage') ?>">Mileage</a> </span>
            <span><a href="<?= base_url('airlines') ?>">Airlines</a></span>
            <span><a href="<?= base_url('contact') ?>">Enquiry/Complaints</a> </span>   
            <span><a href="<?= base_url('about') ?>" >About Us</a></span>     
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class='row marquee-row'>
                <div class='col-md-2'>
                    <span class='sans'>Selling Rate in JPY (¥)</span>
                </div>
                <div class='col-md-10'>
                    <marquee id='sell_marquee' scrolldelay='0' ></marquee> 
                </div>
                <div class='col-md-2'>
                    <span class='sans'>Buying Rate in JPY (¥)</span>
                </div>
                <div class='col-md-10'>
                    <marquee id='buy_marquee' scrolldelay='0' ></marquee>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                    <h1 class="text-center sans">
                        Cheap Flights
                    </h1>
                </div>
                <div class='col-xs-4'>
                      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                          

                          <!-- Wrapper for slides -->
                          <div class="carousel-inner" role="listbox">
                            <div class="item active">
                              <img src="<?php echo base_url();?>assets/images/cheaptickets.jpg" alt="...">
                               
                            </div>
                            <div class="item">
                              <img src="<?php echo base_url();?>assets/images/cheaptickets2.jpg" alt="...">
                              <div class="carousel-caption">
                                
                              </div>
                            </div>
                            <div class="item">
                              <img src="<?php echo base_url();?>assets/images/tickets-on-sale.jpg" alt="...">
                              <div class="carousel-caption">
                                
                              </div>
                            </div>
                            
                          </div>

                          
                        </div>
                </div>
                <div class="col-xs-8">
                    <?php foreach ($flights as $flight) { ?>
                    <div class="col-sm-4">
                        <div class="flight_home">
                            <p class="sans"><?= $flight->flight_to ?></p>
                            <p class="sans text-right"><?= $flight->flight_price ?>*</p>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<div class='container-fluid'>

    <!-- western union -->
    <div class='row home-3'>
        <div class='col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 '>
            <div class='row'>
                <div class='col-xs-12'>
                    <h1 class='text-center'>Western Union Money Transfer<br>
                        <span>Send Money Overseas to any country just in few minutes</span>
                    </h1>
                </div>
                <div class='col-xs-12 moneytransfer'>

                </div>	
                <div class='col-xs-12 col-md-4 col-md-offset-4'>
                    <a href="<?= base_url('money_transfer') ?>" class='btn btn-default green-btn center-block'> SEND MONEY <i class="fa fa-fighter-jet"></i></a>
                </div>
            </div>
        </div> 
    </div>

    <!-- currency exchange  -->

    <div class='row home-4'>
        <div class='col-xs-12 col-sm-12 col-md-8 col-md-offset-2 col-lg-8 col-lg-offset-2 '> 
            <h1 class='text-center'>Foreign Currency Exchange<br>
                <span> 
                    Best Forex Rates Around You  
                    Funtravel compares exchange rate quotes across hundreds of banks and money changers</span>
            </h1>
        </div>	 
        <div class='col-xs-12 col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 '>

            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="<?php echo base_url(); ?>assets/front/images/currency-exchange.jpg" class='img-responsive center-block' alt="...">

                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>assets/front/images/currency-exchange.png" class='img-responsive center-block' alt="...">

                    </div>

                </div>

                <!-- Controls -->

            </div>

        </div>		 
        <div class='col-xs-12 col-md-4 col-md-offset-4'>
            <a type="button" class="btn btn-default carrot-btn center-block" data-toggle="modal" data-target="#myModal">See Our Rates</a>
        </div> 
    </div>


</div>

<div class='container-fluid'>
    <div class='row home-5'>
        <div class="col-sm-10 col-sm-offset-1 ">
            <h1 class='text-center h1'>Holiday Packages<br>
                <span> 
                    Visit around the world with fun travel</span>
            </h1>
            <div id="owl-demo" class="owl-carousel">
                <?php foreach ($result as $row) { ?>
                    <div class="item">
                        <div id="luxurytrip">
                            <div class="tripbadge"></div>
                            <div class="boxinner_shadow">
                                <div class="trip_pic">
                                    <?php $image = explode(',', $row->package_images); ?>
                                    <img class="lazyOwl" data-src="<?= base_url('/upload/' . $image[0]) ?>" alt="Lazy Owl Image">
                                </div>
                                <h1><?= $row->package_name ?>
                                    <span><?= $row->duration ?></span><br>
                                </h1>
                                <div class="clearfix"></div>
                                <div style="height: 20px; margin: 5px 0;">
                                    <ul class="hierarchy" >
                                        <li class="symbol"><i class="fa fa-spoon"></i></li>
                                        <li class="symbol"><i class="fa fa-eye"></i></li>
                                        <li class="symbol"><i class="fa fa-taxi"></i></li>
                                        <li class="symbol"><i class="fa fa-male"></i></li>
                                    </ul>
                                </div>
                                <span>All Taxes Inclusive</span>
                                <h1>Package Cost  <span>JPY <?= $row->price ?> Per Person</span> </h1>

                                <div class="clearfix"></div>
                                <div class="clearfix"></div>
                                <div class="booknowcont">
                                    <a href="<?= base_url('package/' . url_title($row->package_name, 'underscore')) ?>" class="btn btn-custom pull-left">Go to Details</a>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php } ?>
<!--            <div class="item"><img class="lazyOwl" data-src="assets/images/owl2.jpg" alt="Lazy Owl Image"></div>
        <div class="item"><img class="lazyOwl" data-src="assets/images/owl3.jpg" alt="Lazy Owl Image"></div>
        <div class="item"><img class="lazyOwl" data-src="assets/images/owl4.jpg" alt="Lazy Owl Image"></div>
        <div class="item"><img class="lazyOwl" data-src="assets/images/owl5.jpg" alt="Lazy Owl Image"></div>
        <div class="item"><img class="lazyOwl" data-src="assets/images/owl6.jpg" alt="Lazy Owl Image"></div>
        <div class="item"><img class="lazyOwl" data-src="assets/images/owl7.jpg" alt="Lazy Owl Image"></div>
        <div class="item"><img class="lazyOwl" data-src="assets/images/owl8.jpg" alt="Lazy Owl Image"></div>
        <div class="item"><img class="lazyOwl" data-src="assets/images/owl1.jpg" alt="Lazy Owl Image"></div>
        <div class="item"><img class="lazyOwl" data-src="assets/images/owl2.jpg" alt="Lazy Owl Image"></div>
        <div class="item"><img class="lazyOwl" data-src="assets/images/owl3.jpg" alt="Lazy Owl Image"></div>
        <div class="item"><img class="lazyOwl" data-src="assets/images/owl4.jpg" alt="Lazy Owl Image"></div>
        <div class="item"><img class="lazyOwl" data-src="assets/images/owl5.jpg" alt="Lazy Owl Image"></div>
        <div class="item"><img class="lazyOwl" data-src="assets/images/owl6.jpg" alt="Lazy Owl Image"></div>
        <div class="item"><img class="lazyOwl" data-src="assets/images/owl7.jpg" alt="Lazy Owl Image"></div>
        <div class="item"><img class="lazyOwl" data-src="assets/images/owl8.jpg" alt="Lazy Owl Image"></div>-->
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $.getJSON('<?php echo base_url(); ?>home/getProfit', function (json) {
            var buy = json[0].profit_buy;
            var sell = json[0].profit_sell;
            var html = '';
            var sell_marquee = '';
            var buy_marquee = '';
            var i;
            var j = 1;
            $.getJSON('http://www.apilayer.net/api/live?access_key=94fa203bd4e7c38de4d1cb09de59f7ce', function (data) {
                data = data.quotes;
                console.log(data);

                for (i in data) {
                    var rate = 1 / (data[i] / data['USDJPY']);
                    var sell_rate = (rate + ((rate * sell) / 100));
                    var buy_rate = (rate - ((rate * buy) / 100));
                    var currency_name = 'cut' + i;
                    currency_name = currency_name.replace('cutUSD', '');
                    html += '<tr>' + '<td>' + j + '</td>' + '<td>' + currency_name + '</td>' + '<td> ' + sell_rate + '</td>' + '<td> ' + buy_rate + '</td>' + '</tr>';
                    sell_marquee += '<span>' + currency_name + ' : ' +  sell_rate.toFixed(3) + ' ' + ', </span>';
                    buy_marquee +=  '<span>' + currency_name + ' : ' +  buy_rate.toFixed(3) + ' ' + ', </span>';
                    j++;
                }
                $('#feTable').html(html); 

                $('#sell_marquee').html(sell_marquee);
                $('#buy_marquee').html(buy_marquee);

            });

        });
    });



</script>

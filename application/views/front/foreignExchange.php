<div class='container-fluid'>
	<div class='row'>
		<div class='col-xs-10 col-xs-offset-1'>
			<br>
			 <table class="table table-striped" id='fe-table-wrap'>
    			<thead>
			      <tr>
			        <th>S.No</th>
			        <th>Currency Name</th>
			        <th>We Sell At</th>
                    <th>We Buy At</th>
                    <th>Booking</th>
			      </tr>
			    </thead>
			     
                <tbody id='FETable'>

                </tbody>
			  </table>
		</div>
	</div>
    <div class='row'>
        <div class='col-xs-10 col-xs-offset-1'>
            <h2 class='sans'>Book your Forex Now</h2>
            <form class='form-group' id='forex_form' action='<?php base_url('forex-booking');?>' method='post'>
                        <div class='col-xs-12 col-md-6 input-field'>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class='fa fa-money'></i> SELECT CURRENCY:</span>
                                <select  class="form-control"  aria-describedby="basic-addon1" name='forex_currency_name'> 
                                    <option value="US Dollar">  US Dollar  </option >  
                                    <option value="Euro">Euro</option>     
                                    <option value="British Pound">British Pound  </option> 
                                    <option value="Indian Rupee"> Indian Rupee   </option> 
                                    <option value="Australian Dollar"> Australian Dollar   </option> 
                                    <option value="Canadian Dollar">  Canadian Dollar  </option>
                                    <option value="Singapore Dollar"> Singapore Dollar  </option>   
                                    <option value="Swiss Franc"> Swiss Franc   </option> 
                                    <option value="Malaysian Ringgit">  Malaysian Ringgit </option>  
                                    <option value="Chinese Yuan Renminbi"> Chinese Yuan Renminbi  </option>

                                    <option value="Argentine Peso">Argentine Peso   </option>
                                    <option value="Australian Dollar"> Australian Dollar  </option>
                                    <option value="Bahraini Dinar"> Bahraini Dinar </option>
                                    <option value="Botswana Pula"> Botswana Pula  </option>
                                    <option value="Brazilian Real">Brazilian Real  </option>
                                    <option value="British Pound"> British Pound   </option>
                                    <option value="Bruneian Dollar"> Bruneian Dollar</option>
                                    <option value="Bulgarian Lev">  Bulgarian Lev   </option>
                                    <option value="Canadian Dollar">  Canadian Dollar </option>
                                    <option value="Chilean Peso"> Chilean Peso    </option>
                                    <option value="Chinese Yuan Renminbi"> Chinese Yuan Renminbi   </option>
                                    <option value="Colombian Peso">  Colombian Peso </option>
                                    <option value="Croatian Kuna">Croatian Kuna  </option>
                                    <option value="Czech Koruna"> Czech Koruna   </option>
                                    <option value="Danish Krone">Danish Krone  </option>
                                    <option value="Emirati Dirham"> Emirati Dirham </option>
                                    <option value="Euro">Euro  </option>
                                    <option value="Hong Kong Dollar">Hong Kong Dollar    </option>
                                    <option value="Hungarian Forint">Hungarian Forint   </option>  
                                    <option value="Icelandic Krona">Icelandic Krona  </option>
                                    <option value="Indian Rupee">Indian Rupee    </option>
                                    <option value="Indonesian Rupiah"> Indonesian Rupiah  </option>  
                                    <option value="Iranian Rial"> Iranian Rial    </option>
                                    <option value="Israeli Shekel"> Israeli Shekel  </option>
                                    <option value="Kazakhstani Tenge"> Kazakhstani Tenge   </option> 
                                    <option value="Kuwaiti Dinar"> Kuwaiti Dinar</option>    
                                    <option value="Latvian Lat"> Latvian Lat  </option>
                                    <option value="Libyan Dinar"> Libyan Dinar   </option>  
                                    <option value="Lithuanian Litas"> Lithuanian Litas  </option>  
                                    <option value="Malaysian Ringgit"> Malaysian Ringgit  </option> 
                                    <option value="Mauritian Rupee"> Mauritian Rupee  </option>
                                    <option value="Mexican Peso"> Mexican Peso   </option>  
                                    <option value="Nepalese Rupee"> Nepalese Rupee  </option> 
                                    <option value="New Zealand Dollar"> New Zealand Dollar </option>  
                                    <option value="Norwegian Krone"> Norwegian Krone </option> 
                                    <option value="Omani Rial"> Omani Rial   </option>
                                    <option value="Pakistani Rupee"> Pakistani Rupee</option>  
                                    <option value="Philippine Peso"> Philippine Peso </option> 
                                    <option value="Polish Zloty"> Polish Zloty    </option> 
                                    <option value="Qatari Riyal"> Qatari Riyal  </option>  
                                    <option value="Romanian New Leu"> Romanian New Leu   </option>  
                                    <option value="Russian Ruble"> Russian Ruble    </option>
                                    <option value="Saudi Arabian Riyal"> Saudi Arabian Riyal  </option>
                                    <option value="Singapore Dollar"> Singapore Dollar  </option>   
                                    <option value="South African Rand"> South African Rand </option> 
                                    <option value="South Korean Won"> South Korean Won </option>    
                                    <option value="Sri Lankan Rupee"> Sri Lankan Rupee</option>     
                                    <option value="Swedish Krona"> Swedish Krona   </option> 
                                    <option value="Swiss Franc"> Swiss Franc  </option>
                                    <option value="Taiwan New Dollar"> Taiwan New Dollar  </option>  
                                    <option value="Thai Baht"> Thai Baht     </option>
                                    <option value="Trinidadian Dollar"> Trinidadian Dollar </option>  
                                    <option value="Turkish Lira"> Turkish Lira  </option>  
                                    <option value="US Dollar"> US Dollar   </option>
                                    <option value="Venezuelan Bolivar"> Venezuelan Bolivar</option>
                                </select>
                            </div>
                        </div>
                        <div class='col-xs-12 col-md-6 input-field'>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class='fa fa-bank'></i> FOREX AMOUNT:</span>
                                <input type="text" class="form-control" placeholder="Amount " aria-describedby="basic-addon1" name='forex_amount'>
                            </div>
                        </div>

                        <div class='col-xs-12 col-md-3 input-field'>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class='fa fa-user'></i> YOUR NAME:</span>
                                <input type="text" class="form-control"  aria-describedby="basic-addon1" name='forex_name'>
                            </div>
                        </div>
                        <div class='col-xs-12 col-md-3 input-field'>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class='fa fa-flag'></i> NATIONALITY:</span>
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name='forex_nationality'>
                            </div>
                        </div>
                        <div class='col-xs-12 col-md-3 input-field'>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class='fa fa-phone'></i> PHONE NO:</span>
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name='forex_phoneno'>
                            </div>
                        </div>
                        <div class='col-xs-12 col-md-3 input-field'>
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><i class='fa fa-envelope'></i> EMAIL:</span>
                                <input type="text" class="form-control" aria-describedby="basic-addon1" name='forex_email'>
                            </div>
                        </div>
                        
                        <div class='col-xs-12'>
                            <button class='btn btn-default green-btn center-block book_forex' id='book_forex_btn' type='button' name='submit'> Book Now</button>
                        </div>
                    </form>
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
            var FETable = '' 
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
                    html += '<tr>' + '<td>' + j + '</td>' + '<td>' + currency_name + '</td>' + '<td> ' + sell_rate.toFixed(3) + '</td>' + '<td> ' + buy_rate.toFixed(3) + '</td>' + '</tr>';
                    FETable += '<tr>' + '<td>' + j + '</td>' + '<td>' + currency_name + '</td>' + '<td> ' + sell_rate.toFixed(3) + '</td>' + '<td> ' + buy_rate.toFixed(3) + '</td>' + '<td>'+ '<a href="#forex_form" id="currencyBook" class="btn btn-danger btn-sm">Book</a>'  + '</td>' + '</tr>';
                    sell_marquee += '<span>' + currency_name + ' : ' +  sell_rate.toFixed(3) + ' ' + ', </span>';
                    buy_marquee +=  '<span>' + currency_name + ' : ' +  buy_rate.toFixed(3) + ' ' + ', </span>';
                    j++;
                }
                $('#feTable').html(html); 
                $('#FETable').html(FETable);
                $('#sell_marquee').html(sell_marquee);
                $('#buy_marquee').html(buy_marquee);

            });

        });
    });


       


</script>

<script type="text/javascript">
    // post the currency booking form 
    $('.book_forex').each(function () {
            $(this).on('click', function () {
                
                $('#forex_form')[0].reset();
                
                $('#book_forex_btn').on('click', function () {
                    var url = $('#forex_form').attr('action');
                    var forex_currency_name = $('input[name=forex_currency_name]');

                    var forex_amount = $('input[name=forex_amount]');
                    var forex_name = $('input[name=forex_name]');
                    var forex_phoneno = $('input[name=forex_phoneno]');
                    var forex_email = $('input[name=forex_email]');
                    var forex_nationality = $('input[name=forex_nationality]');
                    var data = $('#forex_form').serialize();
                    var result = 1;
                    if (forex_currency_name.val() === '') {
                        forex_currency_name.parent().addClass('has-error');
                    } else {
                        forex_currency_name.parent().removeClass('has-error');
                        result += 1;
                    }
                    if (forex_amount.val() === '') {
                        forex_amount.parent().addClass('has-error');
                    } else {
                        amount.parent().removeClass('has-error');
                        result += 1;
                    }
                    if (forex_phoneno.val() === '') {
                        forex_phoneno.parent().addClass('has-error');
                    } else {
                        forex_phoneno.parent().removeClass('has-error');
                        result += 1;
                    }
                    if (forex_email.val() === '') {
                        forex_email.parent().addClass('has-error');
                    } else {
                        forex_email.parent().removeClass('has-error');
                        result += 1;
                    }
                    if (forex_nationality.val() === '') {
                        forex_nationality.parent().addClass('has-error');
                    } else {
                        forex_nationality.parent().removeClass('has-error');
                        result += 1;
                    }
                    if (result === 6) {
                        $.ajax({
                            type: 'ajax',
                            method: 'post',
                            url: url,
                            data: data,
                            async: false,
                            dataType: 'json',
                            success: function (response) {
                                if (response.success === true) {
                                    $('#forex_form')[0].reset();
                                    
                                    $('#success-alert').fadeIn().delay(4000).fadeOut('slow');
                                } else {
                                    $('#failure-alert').fadeIn().delay(4000).fadeOut('slow');
                                }
                            },
                            error: function () {
                                $('#failure-alert').fadeIn().delay(4000).fadeOut('slow');
                            }
                        });
                    }
                });
            });
        });



</script>
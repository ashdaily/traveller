<footer class='container-fluid'>
    <div class='col-xs-12'>
        <div class='social-buttons'>
            <a href="https://www.facebook.com/FunTravel-Roppongi-169642149753285" class="btn" ><span class="fa fa-facebook-f"></span></a>
            <a href="https://twitter.com/FunTravelTokyo" class="btn" ><span class="fa fa-twitter"></span></a>
        </div>
        <div class="links sans">
            <a href="<?= base_url() ?>">Home</a>
            <a href="<?= base_url('cheapflights') ?>">Flights</a>
            <a href="<?= base_url('destinations') ?>">Holiday Packages</a>
        </div>
        <div class="custom-links sans">
            <a href="<?= base_url() ?>">Home</a>
            <a href="<?= base_url('about') ?>">About</a>
            <a href="<?= base_url('contact') ?>">Contact</a>
            <a href="<?= base_url('destinations') ?>">Destination</a>
            <a href="<?= base_url('terms') ?>">Terms</a>
        </div>
    </div>
    <div class="clearfix"></div>
    <div class="copyright sansa">
        Copyright 2017 Fun Travel | All Right Reserved
    </div>
</footer> 
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url() ?>assets/front/js/jquery.smartWizard-2.0.min.js"></script>
<script type="text/javascript">
    $('.carousel').carousel({
        interval: 2000
    });

</script>
<script src="<?= base_url() ?>assets/front/js/owl.carousel.js"></script>
<link rel="stylesheet" href="<?= base_url() ?>assets/front/css/animate.css">
<script>
    $(document).ready(function () {
        $('#owl1').owlCarousel({
            items: 1,
            pagination: false,
            autoPlay: 3000,
            transitionStyle: "fade"
        });
        $("#owl-demo").owlCarousel({
            items: 3,
            lazyLoad: true,
            navigation: true
        });
        $("#owl-demo1").owlCarousel({
            navigation: true, // Show next and prev buttons
            slideSpeed: 300,
            paginationSpeed: 400,
            singleItem: true
        });
        $('#book_now').on('click', function () {
            var url = $('#booking').attr('action');
            var data = $('#booking').serialize();
            var c_f_name = $('input[name=c_f_name]');
            var c_l_name = $('input[name=c_l_name]');
            var c_email = $('input[name=c_email]');
            var c_phone = $('input[name=c_phone]');
            var result = 1;
            if (c_f_name.val() === '') {
                c_f_name.parent().addClass('has-error');
            } else {
                c_f_name.parent().removeClass('has-error');
                result += 1;
            }
            if (c_l_name.val() === '') {
                c_l_name.parent().addClass('has-error');
            } else {
                c_l_name.parent().removeClass('has-error');
                result += 1;
            }
            if (c_email.val() === '') {
                c_email.parent().addClass('has-error');
            } else {
                c_email.parent().removeClass('has-error');
                result += 1;
            }
            if (c_phone.val() === '') {
                c_phone.parent().addClass('has-error');
            } else {
                c_phone.parent().removeClass('has-error');
                result += 1;
            }
            if (result === 5) {
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            $('#booking')[0].reset();
                            $('.alert-success').html('Query Sent successfully').fadeIn().delay(4000).fadeOut('slow');
                        } else {
                            alert('Error');
                        }
                    },
                    error: function () {
                        $('.alert-success').html('Could not send Query').fadeIn().delay(4000).fadeOut('slow');
                    }
                });
            }
        });
        $('.flight_booking').each(function () {
            $(this).on('click', function () {
                var id = $(this).attr('rel');
                $('#flight_booking')[0].reset();
                $('input[name=flight_id]').val(id);
                $('#flight_book').on('click', function () {
                    var url = $('#flight_booking').attr('action');
                    var c_f_name = $('input[name=c_f_name]');
                    var c_l_name = $('input[name=c_l_name]');
                    var c_email = $('input[name=c_email]');
                    var c_phone = $('input[name=c_phone]');
                    var data = $('#flight_booking').serialize();
                    var result = 1;
                    if (c_f_name.val() === '') {
                        c_f_name.parent().addClass('has-error');
                    } else {
                        c_f_name.parent().removeClass('has-error');
                        result += 1;
                    }
                    if (c_l_name.val() === '') {
                        c_l_name.parent().addClass('has-error');
                    } else {
                        c_l_name.parent().removeClass('has-error');
                        result += 1;
                    }
                    if (c_email.val() === '') {
                        c_email.parent().addClass('has-error');
                    } else {
                        c_email.parent().removeClass('has-error');
                        result += 1;
                    }
                    if (c_phone.val() === '') {
                        c_phone.parent().addClass('has-error');
                    } else {
                        c_phone.parent().removeClass('has-error');
                        result += 1;
                    }
                    if (result === 5) {
                        $.ajax({
                            type: 'ajax',
                            method: 'post',
                            url: url,
                            data: data,
                            async: false,
                            dataType: 'json',
                            success: function (response) {
                                if (response.success === true) {
                                    $('#flight_booking')[0].reset();
                                    $('#myModal').modal('hide');
                                    $('.alert-success').html('Query Sent successfully').fadeIn().delay(4000).fadeOut('slow');
                                } else {
                                    alert('Error');
                                }
                            },
                            error: function () {
                                $('.alert-success').html('Could not send Query').fadeIn().delay(4000).fadeOut('slow');
                            }
                        });
                    }
                });
            });
        });
        $('#send_money').on('click', function () {
            var url = $('#money_transfer').attr('action');
            var data = $('#money_transfer').serialize();
            var first_name = $('input[name=first_name]');
            var middle_name = $('input[name=middle_name]');
            var last_name = $('input[name=last_name]');
            var phone = $('input[name=phone]');
            var address = $('textarea[name=address]');
            var city = $('input[name=city]');
            var state = $('input[name=state]');
            var country = $('input[name=country]');
            var nationality = $('input[name=nationality]');
            var account_sent = $('input[name=account_sent]');
            var r_first_name = $('input[name=r_first_name]');
            var r_middle_name = $('input[name=r_middle_name]');
            var r_last_name = $('input[name=r_last_name]');
            var r_city = $('input[name=r_city]');
            var r_state = $('input[name=r_state]');
            var r_country = $('input[name=r_country]');
            var transaction_purpose = $('input[name=transaction_purpose]');
            var result = 1;
            if (first_name.val() === '') {
                first_name.parent().addClass('has-error');
            } else {
                first_name.parent().removeClass('has-error');
                result += 1;
            }
            if (middle_name.val() === '') {
                middle_name.parent().addClass('has-error');
            } else {
                middle_name.parent().removeClass('has-error');
                result += 1;
            }
            if (last_name.val() === '') {
                last_name.parent().addClass('has-error');
            } else {
                last_name.parent().removeClass('has-error');
                result += 1;
            }
            if (phone.val() === '') {
                phone.parent().addClass('has-error');
            } else {
                phone.parent().removeClass('has-error');
                result += 1;
            }
            if (address.val() === '') {
                address.parent().addClass('has-error');
            } else {
                address.parent().removeClass('has-error');
                result += 1;
            }
            if (city.val() === '') {
                city.parent().addClass('has-error');
            } else {
                city.parent().removeClass('has-error');
                result += 1;
            }
            if (state.val() === '') {
                state.parent().addClass('has-error');
            } else {
                state.parent().removeClass('has-error');
                result += 1;
            }
            if (country.val() === '') {
                country.parent().addClass('has-error');
            } else {
                country.parent().removeClass('has-error');
                result += 1;
            }
            if (nationality.val() === '') {
                nationality.parent().addClass('has-error');
            } else {
                nationality.parent().removeClass('has-error');
                result += 1;
            }
            if (account_sent.val() === '') {
                account_sent.parent().addClass('has-error');
            } else {
                account_sent.parent().removeClass('has-error');
                result += 1;
            }
            if (r_first_name.val() === '') {
                r_first_name.parent().addClass('has-error');
            } else {
                r_first_name.parent().removeClass('has-error');
                result += 1;
            }
            if (r_middle_name.val() === '') {
                r_middle_name.parent().addClass('has-error');
            } else {
                r_middle_name.parent().removeClass('has-error');
                result += 1;
            }
            if (r_last_name.val() === '') {
                r_last_name.parent().addClass('has-error');
            } else {
                r_last_name.parent().removeClass('has-error');
                result += 1;
            }
            if (r_city.val() === '') {
                r_city.parent().addClass('has-error');
            } else {
                r_city.parent().removeClass('has-error');
                result += 1;
            }
            if (r_state.val() === '') {
                r_state.parent().addClass('has-error');
            } else {
                r_state.parent().removeClass('has-error');
                result += 1;
            }
            if (r_country.val() === '') {
                r_country.parent().addClass('has-error');
            } else {
                r_country.parent().removeClass('has-error');
                result += 1;
            }
            if (transaction_purpose.val() === '') {
                transaction_purpose.parent().addClass('has-error');
            } else {
                transaction_purpose.parent().removeClass('has-error');
                result += 1;
            }
            console.log(result);
            if (result >= 10) {
                $('#btn2').attr('href', '#step2');
            } else {
                $('#btn2').attr('href', '#');
            }
            if (result === 18) {
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            $('#money_transfer')[0].reset();
                            $('.alert-success').html('Query Sent successfully').fadeIn().delay(4000).fadeOut('slow');
                        } else {
                            alert('Error');
                        }
                    },
                    error: function () {
                        $('.alert-success').html('Could not send Query').fadeIn().delay(4000).fadeOut('slow');
                    }
                });
            }
        });
    });

</script>
<!-- script for top page for foreign currency exchange -->

<script>
    // $(document).ready(function(){ 
    //    $.ajax({
    //           type: 'ajax',
    //           url: '<?php echo base_url(); ?>home/foreignExchange',
    //           async: false,
    //           dataType: 'json',
    //           success: function (data) {

    //                $.getJSON('<?php echo base_url(); ?>home/getProfit',function(json){
    //                   var buy = json[0].profit_buy;
    //                   var sell = json[0].profit_sell; 
    //                   var html = '';
    //                   var i,j;  
    //                   var x = data[1];

    //                   for(i = 0,j = 1; i < data.length; i=i+3,j=j+1) { 

    //                       var d = parseFloat(data[i+2]);
    //                       var sell_rate = (d + ((d*sell)/100));
    //                       var buy_rate = (d - ((d*buy)/100)); 
    //                       html += '<tr>' + '<td>' + j + '</td>' + '<td>' + data[i] + '</td>' + '<td>¥ ' + sell_rate.toFixed(3) + '</td>'+ '<td>¥ ' + buy_rate.toFixed(3) + '</td>' +'</tr>';
    //                   }
    //                   $('#feTable').html(html); 
    //               });

    //           },
    //           error: function () {
    //               alert('Something went wrong !');
    //           }
    //       }); 
    // });

    $(document).ready(function () {

        var navListItems = $('div.setup-panel div a'),
                allWells = $('.setup-content'),
                allNextBtn = $('.nextBtn');

        allWells.hide();

        navListItems.click(function (e) {
            e.preventDefault();
            var $target = $($(this).attr('href')),
                    $item = $(this);

            if (!$item.hasClass('disabled')) {
                navListItems.removeClass('btn-primary').addClass('btn-default');
                $item.addClass('btn-primary');
                allWells.hide();
                $target.show();
                $target.find('input:eq(0)').focus();
            }
        });

        allNextBtn.click(function () {
            var curStep = $(this).closest(".setup-content"),
                    curStepBtn = curStep.attr("id"),
                    nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
                    curInputs = curStep.find("input[type='text'],input[type='url']"),
                    isValid = true;

            $(".form-group").removeClass("has-error");
            for (var i = 0; i < curInputs.length; i++) {
                if (!curInputs[i].validity.valid) {
                    isValid = false;
                    $(curInputs[i]).closest(".form-group").addClass("has-error");
                }
            }

            if (isValid)
                nextStepWizard.removeAttr('disabled').trigger('click');
        });

        $('div.setup-panel div a.btn-primary').trigger('click');
    });

</script>
<script>
    $(document).ready(function () {
        $.getJSON('<?php echo base_url(); ?>home/getProfit', function (json) {
            var buy = json[0].profit_buy;
            var sell = json[0].profit_sell;
            var html = '';
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
                    j++;
                }
                $('#feTable').html(html);
            });

        });
    });



</script>

</body>
</html>
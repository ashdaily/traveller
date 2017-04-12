 
<footer class='container-fluid'>
    <div class='col-xs-12'>
        <div class='social-buttons'>
            <a href="#" class="btn" ><span class="fa fa-facebook-f"></span></a>
            <a href="#" class="btn" ><span class="fa fa-pinterest-p"></span></a>
            <a href="#" class="btn" ><span class="fa fa-twitter"></span></a>
            <a href="#" class="btn" ><span class="fa fa-instagram"></span></a>
        </div>
        <div class="links sans">
            <a href="">Home</a>
            <a href="">Flights</a>
            <a href="">Foreign Exchange</a>
            <a href="">Holiday Packages</a>
        </div>
        <div class="custom-links sans">
            <a href="">Home</a>
            <a href="">About</a>
            <a href="">Contact</a>
            <a href="">Destination</a>
            <a href="">Terms</a>
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
 
<script type="text/javascript">
    $('.carousel').carousel({
        interval: 2000
    })

</script>
<script src="<?= base_url() ?>/assets/front/js/owl.carousel.js"></script>
<script>
    $(document).ready(function () {

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
        $('#book_now').on('click', function(){
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
            if (result === 5){
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
    });
 
</script>
<!-- script for top page for foreign currency exchange -->

 <script>
      $(document).ready(function(){ 
         $.ajax({
                type: 'ajax',
                url: '<?php echo base_url(); ?>home/foreignExchange',
                async: false,
                dataType: 'json',
                success: function (data) {
                    
                     $.getJSON('<?php echo base_url();?>home/getProfit',function(json){
                        var buy = json[0].profit_buy;
                        var sell = json[0].profit_sell; 
                        var html = '';
                        var i,j;  
                        var x = data[1];
                         
                        for(i = 0,j = 1; i < data.length; i=i+3,j=j+1) { 
                            
                            var d = parseFloat(data[i+2]);
                            var sell_rate = (d + ((d*sell)/100));
                            var buy_rate = (d - ((d*buy)/100)); 
                            html += '<tr>' + '<td>' + j + '</td>' + '<td>' + data[i] + '</td>' + '<td>¥ ' + sell_rate.toFixed(3) + '</td>'+ '<td>¥ ' + buy_rate.toFixed(3) + '</td>' +'</tr>';
                        }
                        $('#feTable').html(html); 
                    });
                      
                },
                error: function () {
                    alert('Something went wrong !');
                }
            }); 
      });


      
      </script>


</body>
</html>
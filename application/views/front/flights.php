<div class="flights-banner"></div>
<div class="alert alert-success" style="display: none;"></div>
<div class='container-fluid home-0'>
    <section class="product-detail col-xs-12" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row">
                <div class="flights">
                    <h3 class="sans text-green">Showing results <?= count($result) ?></h3>
                    <table class="table table-striped" style="margin-bottom: 200px;">
                        <thead>
                            <tr>
                                <th>Depart</th>
                                <th>Arrive</th>
                                <th>Price</th>
                                <th>Book now</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $row) { ?>
                            <tr>
                                <td><?= $row->flight_from ?></td>
                                <td><?= $row->flight_to ?></td>
                                <td>Starting From $<?= $row->flight_price ?>*</td>
                                <td>
                                    <button id="flight-book" rel="<?= $row->id ?>" class="flight_booking btn carrot-btn btn-sm" data-toggle="modal" data-target="#myModal">Book</button>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog modal-lg">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title sansa">Book Flights</h4>
            </div>
            <div class="modal-body">
                <form action="<?= base_url('flight_booking') ?>" method="POST" id="flight_booking">
                    <fieldset>
                        <span id="msgg"></span>
                        <ul class="formFields list-unstyled">
                            <li class="row">
                                <div class="col-md-6">
                                    <label>First Name <span class="required small">*</span></label>
                                    <input type="text" class="form-control" id="c_name" name="c_f_name" placeholder="First Name *" value="" required="">
                                    <input type="hidden" name="flight_id" value="" />
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name <span class="required small">*</span></label>
                                    <input type="text" class="form-control" id="c_namel" name="c_l_name" placeholder="Last Name *" value="" required="">
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-md-12">
                                    <label>Email <span class="required small">*</span></label>
                                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="Your Email *" value="" required="">
                                </div>

                            </li>
                            <li class="row">
                                <div class="col-md-6">
                                    <label>Phone <span class="required small">*</span></label>
                                    <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone *" value="" required="">
                                </div>
                                <div class="col-md-6">
                                    <label>Adults <span class="required small">*</span></label>
                                    <select class="form-control" id="mySelect" name="adults" >
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </li>
                            <li class="row">
                                <div class="col-md-6">
                                    <label>Children <span class="required small">*</span></label>
                                    <select class="form-control" id="mySelect" name="children">
                                        <option value="0">0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </li>
                            <li class="row">
                                <div class="form-group">
                                    <div class="col-sm-12" style="padding-top: 10px;">
                                        <input type="button" id="flight_book" class="btn form-control btn-primary btn-lg text-upper" name="book_now" value="Book Now" style="background-color:#e74c3c; border:none;">
                                    </div>

<!--<span class="required small">*Your email will never published.</span>-->
                                </div>
                            </li>
                        </ul>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<style>
    #owl-demo1 .item img{
        display: block;
        width: 100%;
        height: 345px;
    }
</style>

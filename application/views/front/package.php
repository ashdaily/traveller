<div class='container-fluid home-0'>
    <section class="product-detail col-xs-12" style="transform: none;">
        <div class="container" style="transform: none;">
            <?php foreach ($result as $row) { ?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="product-detail__info">
                            <div class="product-title">
                                <h2 class='sansa'><?php echo $row->package_name; ?></h2>
                            </div>

                            <div class="product-descriptions">
                                <p><?php echo $row->description; ?></p>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <?php
                        echo $msg;
                        echo validation_errors();
                        $images = explode(',', $row->package_images);
                        if (count($images) > 1) {
                            ?>
                            <div id="owl-demo1" class="owl-carousel owl-theme">
                                <?php foreach ($images as $image) { ?>
                                    <div class="item"><img src="<?= base_url('upload/' . $image) ?>" alt="The Last of us"></div>
                                <?php } ?>
                            </div>
                        <?php } else { ?>
                            <img src="<?= base_url('upload/' . $row->package_images) ?>" class="img-responsive" />
                        <?php } ?>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="alert alert-success" style="display: none;"></div>
                <div class="row" style="transform: none;">
                    <div class="col-md-8">
                        <div class="product-tabs tabs ui-tabs ui-widget ui-widget-content ui-corner-all">
                            <ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
                                <li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-1" aria-selected="true">
                                    <a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-1">Inclusion</a>
                                </li>

                                <!--                            <li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-2" aria-selected="false">
                                                                <a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-2">Itinerary</a>
                                                            </li>-->

                            </ul>
                            <div class="product-tabs__content">
                                <div id="tabs-1" aria-labelledby="ui-id-1" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false">
                                    <table class="good-to-know-table">
                                        <tbody>
                                            <?php if (!($row->duration) == '') { ?>
                                                <tr>
                                                    <th>
                                                        <p>Duration </p>
                                                    </th>
                                                    <td>
                                                        <p><?php echo $row->duration; ?></p>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            <?php if (!($row->utilities) == '') { ?>
                                                <tr>
                                                    <th>
                                                        <p>Utilities</p>
                                                    </th>
                                                    <td>
                                                        <p> <?= $row->utilities ?></p>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            <?php if (!($row->taxi_pickups) == '') { ?>
                                                <tr>
                                                    <th>
                                                        <p>Taxi Pickup</p>
                                                    </th>
                                                    <td>
                                                        <p><?= $row->taxi_pickups ?></p>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            <?php if (!($row->price) == '') { ?>
                                                <tr>
                                                    <th>
                                                        <p>Best Time</p>
                                                    </th>
                                                    <td>
                                                        <p>Rs <?= $row->price ?></p>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            <?php if (!($row->mode_of_travel) == '') { ?>
                                                <tr>
                                                    <th>
                                                        <p>Travel Mode</p>
                                                    </th>
                                                    <td>
                                                        <p><?= $row->mode_of_travel ?></p>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            <?php if (!($row->food) == '') { ?>
                                                <tr>
                                                    <th>
                                                        <p>Meal Plan</p>
                                                    </th>
                                                    <td>
                                                        <p><?= $row->food ?></p>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!--                            <div id="tabs-2" aria-labelledby="ui-id-2" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="false" aria-hidden="true" style="display: none;">
                                                                <table class="facilities-freebies-table"><tbody>
                                                                        <tr>
                                                                            <th>
                                                                                <pre><?php echo $row->day_des; ?></pre>
                                                                            </th>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                        <div class="theiaStickySidebar" style="padding-top: 1px; padding-bottom: 1px; position: static;">
                            <div class="detail-sidebar">
                                <div class="call-to-book">
                                    <i class="awe-icon fa fa-phone awe-icon-phone">
                                    </i> 
                                    <em>Call to book</em> <span>+91 708-784-7494</span>
                                </div>
                                <div class="booking-info"><h3>Booking Information</h3>
                                    <form action="<?= base_url('customer_detail') ?>" method="POST" id="booking">
                                        <fieldset>
                                            <span id="msgg"></span>
                                            <ul class="formFields list-unstyled">
                                                <li class="row">
                                                    <div class="col-md-6">
                                                        <label>First Name <span class="required small">*</span></label>
                                                        <input type="text" class="form-control" id="c_name" name="c_f_name" placeholder="First Name *" value="" required="">
                                                        <input type="hidden" name="package_name" value="<?= $row->package_name ?>" />
                                                        <input type="hidden" name="package_id" value="<?= $row->package_id ?>" />
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
                                                            <input type="button" id="book_now" class="btn form-control btn-primary btn-lg text-upper" name="book_now" value="Book Now" style="background-color:#e74c3c; border:none;">
                                                        </div>
                                                        
                                                        <!--<span class="required small">*Your email will never published.</span>-->
                                                    </div>
                                                </li>
                                                <?php echo validation_errors(); ?>
                                            <?php } ?>
                                        </ul>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
<style>
    #owl-demo1 .item img{
        display: block;
        width: 100%;
        height: 345px;
    }
</style>

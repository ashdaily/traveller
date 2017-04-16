<div class='container-fluid home-0'>
    <section class="product-detail col-xs-12" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row">
                <?php foreach ($result as $row) { ?>
                    <div class="col-sm-4">
                        <div id="luxurytrip">
                            <div class="tripbadge"></div>
                            <div class="boxinner_shadow">
                                <div class="trip_pic">
                                    <?php $image = explode(',', $row->package_images); ?>
                                    <img src="<?= base_url('/upload/' . $image[0]) ?>" alt="Lazy Owl Image">
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
                                    <a href="<?= base_url('home/package/' . url_title($row->package_name, 'underscore')) ?>" class="btn btn-custom pull-left">Go to Details</a>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </div>
                    </div>
                <?php } ?>
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

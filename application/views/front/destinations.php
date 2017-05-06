<div class='container-fluid home-0'>
    <section class="product-detail col-xs-12" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row">
                <?php $i = 1;?>
                <?php foreach ($result as $row) { ?>
                    <div class="col-sm-4">
                        <article class="place-box card">
                            <a href="<?= base_url('/places/'.$row->code) ?>" class="place-link">
                                <header>
                                    <h3 class="entry-title sans"><?= $row->name ?></h3>
                                </header>
                                <div class="entry-thumbnail">
                                    <img src="<?php echo base_url() ?>/assets/front/images/continents/<?php echo $i; $i++;?>.jpg" alt="" />
                                </div>
                            </a>
                        </article>
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

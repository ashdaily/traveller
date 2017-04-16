<div class='container-fluid home-0'>
    <section class="product-detail col-xs-12" style="transform: none;">
        <div class="container" style="transform: none;">
            <div class="row">
                <div class="flights">
                    <table class="table table-striped" style="margin-bottom: 200px;">
                        <thead>
                            <tr>
                                <th>Depart</th>
                                <th>Arrive</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($result as $row) { ?>
                            <tr>
                                <td><?= $row->flight_from ?></td>
                                <td><?= $row->flight_to ?></td>
                                <td>Starting From $<?= $row->flight_price ?>*</td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
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

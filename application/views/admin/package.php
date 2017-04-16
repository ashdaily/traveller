<div class="modal fade" tabindex="-1" role="dialog" id="myModal">
    <div class="modal-dialog" style="width: 70%;" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center">Modal title</h4>
            </div>
            <div class="modal-body">
                <form id="myForm" action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" name="txtId" value="0">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4">Continental</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="continent_code" id="continents"></select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4">Country</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="country_code" id="country"></select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4">City</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="city_id" id="city_id"></select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4">Package Name</label>
                                <div class="col-sm-8">
                                    <input type="text" name="package_name" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4">Duration</label>
                                <div class="col-sm-8">
                                    <input type="text" name="duration" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4">Price</label>
                                <div class="col-sm-8">
                                    <input type="text" name="price" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label class="control-label col-sm-2">Description</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" name="description"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4">Package Images</label>
                                <div class="col-sm-8">
                                    <input type="file" name="package_images" id="package_images" multiple="multiple" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4">Travel By</label>
                                <div class="col-sm-8">
                                    <input type="text" name="mode_of_travel" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4">Utilities</label>
                                <div class="col-sm-8">
                                    <input type="text" name="utilities" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4">Taxi Pickup</label>
                                <div class="col-sm-8">
                                    <select class="form-control" name="taxi_pickups">
                                        <option value="">--Select--</option>
                                        <option value="yes">Yes</option>
                                        <option value="no">No</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4">Food</label>
                                <div class="col-sm-8">
                                    <input type="text" name="food" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4">By Company</label>
                                <div class="col-sm-8">
                                    <input type="text" name="by_company" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4">Company Website</label>
                                <div class="col-sm-8">
                                    <input type="text" name="company_website" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4">Contact Person</label>
                                <div class="col-sm-8">
                                    <input type="text" name="contact_person" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btnSave" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

<div id="deleteModal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Confirm Delete</h4>
            </div>
            <div class="modal-body">
                Do you want to delete this record?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" id="btnDelete" class="btn btn-danger">Delete</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<ol class="breadcrumb bc-3" >
    <li>
        <a href="<?= base_url('admin') ?>"><i class="fa-home"></i>Home</a>
    </li>
    <li class="active">
        <strong>Package</strong>
    </li>
</ol>
<h2>Manage Packages</h2>
<br />
<div class="alert alert-success" style="display: none;"></div>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">
                    Add Package
                    <button id="btnAdd" class="btn btn-greensea">Add New</button>
                </div>

                <div class="panel-options">
                    <a href="#sample-modal" data-toggle="modal" data-target="#sample-modal-dialog-1" class="bg">
                        <i class="entypo-cog"></i>
                    </a>
                    <a href="#" data-rel="collapse">
                        <i class="entypo-down-open"></i>
                    </a>
                    <a href="#" data-rel="reload">
                        <i class="entypo-arrows-ccw"></i>
                    </a>
                    <a href="#" data-rel="close">
                        <i class="entypo-cancel"></i>
                    </a>
                </div>
            </div>
<!--            <script type="text/javascript">
                jQuery(document).ready(function ($) {
                    var $table1 = jQuery('#table-1');
// Initialize DataTable
                    $table1.DataTable({
                        "aLengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                        "bStateSave": true
                    });
// Initalize Select Dropdown after DataTables is created
                    $table1.closest('.dataTables_wrapper').find('select').select2({
                        minimumResultsForSearch: -1
                    });
                });
            </script>-->
            <div class="panel-body">
                <table id="table-1" class="table table-bordered table-striped table-hover datatable table-responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Continent</th>
                            <th>Country</th>
                            <th>City</th>
                            <th>Package Name</th>
                            <th>Duration</th>
                            <th>Mode of Travel</th>
                            <th>Utilities</th>
                            <th>Food</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="showdata">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>




<script>
    $(function () {
        showAllPackage();
        getAllCountry();
        getAllCity();
        getAllContinents();

        //Add New
        $('#btnAdd').click(function () {
            $('#myForm')[0].reset();
            $('#btnSave').show();
            $('#myModal').modal('show');
            $('#myModal').find('.modal-title').text('Add New Package');
            $('#myForm').attr('action', '<?php echo base_url() ?>admin/addPackage');
        });

        $('#btnSave').click(function () {
            var url = $('#myForm').attr('action');
            var data = $('#myForm').serialize();
            var form_data = new FormData();
            var image = $('#package_images')[0].files;
            for (var count = 0; count < image.length; count++) {
                var name = image[count].name;
                form_data.append("files[]", image[count]);
            }
            $('#btnSave').show();
            //validate form
            var continent = $('select[name=continent_code]');
            var country = $('select[name=country_code]');
            var city = $('select[name=city_id]');
            var package_name = $('input[name=package_name]');
            var duration = $('input[name=duration]');
            var description = $('textarea[name=description]');
            var mode_of_travel = $('input[name=mode_of_travel]');
            var price = $('input[name=price]');
            var taxi_pickups = $('select[name=taxi_pickups]');
            var food = $('input[name=food]');
            var utilities = $('input[name=utilities]');
            var result = 1;
            if (continent.val() === '') {
                alert('blank');
                continent.parent().parent().addClass('has-error');
            } else {
                continent.parent().parent().removeClass('has-error');
                result += 1;
            }
            if (country.val() === '') {
                alert('blank');
                country.parent().parent().addClass('has-error');
            } else {
                country.parent().parent().removeClass('has-error');
                result += 1;
            }
            if (city.val() === '') {
                alert('blank');
                city.parent().parent().addClass('has-error');
            } else {
                city.parent().parent().removeClass('has-error');
                result += 1;
            }
            if (package_name.val() === '') {
                alert('blank');
                package_name.parent().parent().addClass('has-error');
            } else {
                package_name.parent().parent().removeClass('has-error');
                result += 1;
            }
            if (duration.val() === '') {
                duration.parent().parent().addClass('has-error');
            } else {
                duration.parent().parent().removeClass('has-error');
                result += 1;
            }
            if (description.val() === '') {
                description.parent().parent().addClass('has-error');
            } else {
                description.parent().parent().removeClass('has-error');
                result += 1;
            }
            if (mode_of_travel.val() === '') {
                mode_of_travel.parent().parent().addClass('has-error');
            } else {
                mode_of_travel.parent().parent().removeClass('has-error');
                result += 1;
            }
            if (price.val() === '') {
                price.parent().parent().addClass('has-error');
            } else {
                price.parent().parent().removeClass('has-error');
                result += 1;
            }
            if (taxi_pickups.val() === '') {
                taxi_pickups.parent().parent().addClass('has-error');
            } else {
                taxi_pickups.parent().parent().removeClass('has-error');
                result += 1;
            }
            if (food.val() === '') {
                food.parent().parent().addClass('has-error');
            } else {
                food.parent().parent().removeClass('has-error');
                result += 1;
            }
            if (utilities.val() === '') {
                utilities.parent().parent().addClass('has-error');
            } else {
                utilities.parent().parent().removeClass('has-error');
                result += 1;
            }
            if (result === 12) {
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    image: image,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            $.ajax({
                                type: 'ajax',
                                method: 'post',
                                url: '<?php echo base_url() ?>admin/addPackageImages',
                                data: form_data,
                                cache: false,
                                contentType: false,
                                processData: false,
                                async: false,
                                dataType: 'json',
                                success: function (response) {
                                    if (response.success === true) {
                                        
                                    } else {
                                        alert('Error');
                                        return false;
                                    }
                                },
                                error: function () {
                                    alert('Could not add data');
                                }
                            });
                            $('#myModal').modal('hide');
                            $('#myForm')[0].reset();
                            if (response.type === 'add') {
                                var type = 'added';
                            } else if (response.type === 'update') {
                                var type = "updated";
                            }
                            $('.alert-success').html('Package ' + type + ' successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAllPackage();
                            getAllCountry();
                            getAllCity();
                            getAllContinents();
                        } else {
                            alert('Error');
                        }
                    },
                    error: function () {
                        alert('Could not add data');
                    }
                });
            }
        });

        //edit
        $('#showdata').on('click', '.item-edit', function () {
            var id = $(this).attr('data');
            $('#myForm')[0].reset();
            $('#btnSave').show();
            $('#myModal').modal('show');
            $('#myModal').find('.modal-title').text('Edit Package');
            $('#myForm').attr('action', '<?php echo base_url() ?>admin/updatePackage');
            var continent = $('select[name=continent_code]');
            var country = $('select[name=country_code]');
            var city = $('select[name=city_id]');
            var package_name = $('input[name=package_name]');
            var duration = $('input[name=duration]');
            var description = $('textarea[name=description]');
            var mode_of_travel = $('input[name=mode_of_travel]');
            var price = $('input[name=price]');
            var taxi_pickups = $('select[name=taxi_pickups]');
            var food = $('input[name=food]');
            var utilities = $('input[name=utilities]');
            var by_company = $('input[name=by_company]');
            var company_website = $('input[name=company_website]');
            var contact_person = $('input[name=contact_person]');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>admin/editPackage',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function (data) {
                    continent.val(data.continent_code);
                    country.val(data.countrycode);
                    city.val(data.city_id);
                    package_name.val(data.package_name);
                    duration.val(data.duration);
                    description.val(data.description);
                    mode_of_travel.val(data.mode_of_travel);
                    price.val(data.price);
                    taxi_pickups.val(data.taxi_pickups);
                    food.val(data.food);
                    utilities.val(data.utilities);
                    by_company.val(data.by_company);
                    company_website.val(data.company_website);
                    contact_person.val(data.contact_person);
                    $('input[name=txtId]').val(data.id);
                },
                error: function () {
                    alert('Could not Edit Data');
                }
            });
        });

        //view
        $('#showdata').on('click', '.item-view', function () {
            var id = $(this).attr('data');
            $('#myModal').modal('show');
            $('#myForm')[0].reset();
            $('#myModal').find('.modal-title').text('View Package');
            $('#myForm').attr('action', '');
            var continent = $('select[name=continent_code]');
            var country = $('select[name=country_code]');
            var city = $('select[name=city_id]');
            var package_name = $('input[name=package_name]');
            var duration = $('input[name=duration]');
            var description = $('textarea[name=description]');
            var mode_of_travel = $('input[name=mode_of_travel]');
            var price = $('input[name=price]');
            var taxi_pickups = $('select[name=taxi_pickups]');
            var food = $('input[name=food]');
            var utilities = $('input[name=utilities]');
            var by_company = $('input[name=by_company]');
            var company_website = $('input[name=company_website]');
            var contact_person = $('input[name=contact_person]');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>admin/editPackage',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function (data) {
                    continent.val(data.continent_code);
                    country.val(data.countrycode);
                    city.val(data.city_id);
                    package_name.val(data.package_name);
                    duration.val(data.duration);
                    description.val(data.description);
                    mode_of_travel.val(data.mode_of_travel);
                    price.val(data.price);
                    taxi_pickups.val(data.taxi_pickups);
                    food.val(data.food);
                    utilities.val(data.utilities);
                    by_company.val(data.by_company);
                    company_website.val(data.company_website);
                    contact_person.val(data.contact_person);
                    $('input[name=txtId]').val(data.id);
                    $('#btnSave').hide();
                },
                error: function () {
                    alert('Could not View Data');
                }
            });
        });

        //delete- 
        $('#showdata').on('click', '.item-delete', function () {
            var id = $(this).attr('data');
            $('#deleteModal').modal('show');
            //prevent previous handler - unbind()
            $('#btnDelete').unbind().click(function () {
                $.ajax({
                    type: 'ajax',
                    method: 'get',
                    async: false,
                    url: '<?php echo base_url() ?>admin/deletePackage',
                    data: {id: id},
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            $('#deleteModal').modal('hide');
                            $('.alert-success').html('Package Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAllPackage();
                            getAllCountry();
                            getAllCity();
                            getAllContinents();
                        } else {
                            alert('Error');
                        }
                    },
                    error: function () {
                        alert('Error deleting');
                    }
                });
            });
        });

        $('#continents').on('change', function () {
            var code = $(this).val();
            if (code !== '') {
                $.ajax({
                    type: 'ajax',
                    method: 'get',
                    url: '<?php echo base_url() ?>admin/getCountry',
                    data: {code: code},
                    async: false,
                    dataType: 'json',
                    success: function (data) {
                        var html = '<option value="">------Select Country-------</option>';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<option value="' + data[i].iso3 + '">' + data[i].name + '</option>';
                        }
                        $('#country').html(html);
                    },
                    error: function () {
                        alert('Could not Edit Data');
                    }
                });
            }
        });

        $('#country').on('change', function () {
            var code = $(this).val();
            if (code !== '') {
                $.ajax({
                    type: 'ajax',
                    method: 'get',
                    url: '<?php echo base_url() ?>admin/getCity',
                    data: {code: code},
                    async: false,
                    dataType: 'json',
                    success: function (data) {
                        var html = '<option value="">------Select City-------</option>';
                        var i;
                        for (i = 0; i < data.length; i++) {
                            html += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
                        }
                        $('#city_id').html(html);
                    },
                    error: function () {
                        alert('Could not Edit Data');
                    }
                });
            }
        });

        //function
        function showAllPackage() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url(); ?>admin/showAllPackage',
                async: false,
                dataType: 'json',
                success: function (data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                                '<td>' + data[i].package_id + '</td>' +
                                '<td>' + data[i].continent_name + '</td>' +
                                '<td>' + data[i].contry_name + '</td>' +
                                '<td>' + data[i].city_name + '</td>' +
                                '<td>' + data[i].package_name + '</td>' +
                                '<td>' + data[i].duration + '</td>' +
                                '<td>' + data[i].mode_of_travel + '</td>' +
                                '<td>' + data[i].utilities + '</td>' +
                                '<td>' + data[i].food + '</td>' +
                                '<td>' + data[i].price + '</td>' +
                                '<td>' +
                                '<a href="javascript:;" class="btn btn-default btn-sm btn-icon icon-left item-edit" data="' +
                                data[i].package_id + '">' +
                                '<i class="entypo-pencil"></i>Edit' +
                                '</a>' +
                                '<a href="javascript:;" class="btn btn-danger btn-sm btn-icon icon-left item-delete" data="' +
                                data[i].package_id + '">' +
                                '<i class="entypo-cancel"></i>Delete' +
                                '</a>' +
                                '<a href="javascript:;" class="btn btn-info btn-sm btn-icon icon-left item-view" data="' +
                                data[i].package_id + '">' +
                                '<i class="entypo-info"></i>View' +
                                '</a>' +
                                '</td>' +
                                '</tr>';
                    }
                    $('#showdata').html(html);
                },
                error: function () {
                    alert('Could not get Data');
                }
            });
        }

        function getAllCountry() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url(); ?>admin/getAllCountry',
                async: false,
                dataType: 'json',
                success: function (data) {
                    var html = '<option value="">------Select Country--------</option>';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option value="' + data[i].iso3 + '">' + data[i].name + '</option>';
                    }
                    $('#country').html(html);
                },
                error: function () {
                    alert('Could not get Data');
                }
            });
        }

        function getAllCity() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url(); ?>admin/getAllCity',
                async: false,
                dataType: 'json',
                success: function (data) {
                    var html = '<option value="">------Select City------</option>';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
                    }
                    $('#city_id').html(html);
                },
                error: function () {
                    alert('Could not get Data');
                }
            });
        }

        function getAllContinents() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url(); ?>admin/getAllContinents',
                async: false,
                dataType: 'json',
                success: function (data) {
                    var html = '<option value="">------Select Continent-----</option>';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<option value="' + data[i].code + '">' + data[i].name + '</option>';
                    }
                    $('#continents').html(html);
                },
                error: function () {
                    alert('Could not get Data');
                }
            });
        }
    });
</script>


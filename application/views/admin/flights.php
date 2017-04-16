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
                                <label class="control-label col-sm-4">From</label>
                                <div class="col-sm-8">
                                    <input type="text" name="flight_from" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4">To</label>
                                <div class="col-sm-8">
                                    <input type="text" name="flight_to" class="form-control" />
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label col-sm-4">Flight Price</label>
                                <div class="col-sm-8">
                                    <input type="text" name="flight_price" class="form-control" />
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
        <strong>Flights</strong>
    </li>
</ol>
<h2>Manage Flights</h2>
<br />
<div class="alert alert-success" style="display: none;"></div>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="panel-title">
                    Add Flights
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
                            <th>Flight From</th>
                            <th>Flight To</th>
                            <th>Flight Price</th>
                            <th>Created Date</th>
                            <th>Update Date</th>
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
        showAllFlights();
        getAllCountry();
        getAllCity();
        getAllContinents();

        //Add New
        $('#btnAdd').click(function () {
            $('#myForm')[0].reset();
            $('#myModal').modal('show');
            $('#myModal').find('.modal-title').text('Add New Flight');
            $('#myForm').attr('action', '<?php echo base_url() ?>admin/addFlight');
            $('#btnSave').show();
        });

        $('#btnSave').click(function () {
            var url = $('#myForm').attr('action');
            var data = $('#myForm').serialize();
            $('#btnSave').show();
            //validate form
            var flight_to = $('input[name=flight_to]');
            var flight_from = $('input[name=flight_from]');
            var flight_price = $('input[name=flight_price]');
            var result = 1;
            if (flight_to.val() === '') {
                alert('blank');
                flight_to.parent().parent().addClass('has-error');
            } else {
                flight_to.parent().parent().removeClass('has-error');
                result += 1;
            }
            if (flight_from.val() === '') {
                alert('blank');
                flight_from.parent().parent().addClass('has-error');
            } else {
                flight_from.parent().parent().removeClass('has-error');
                result += 1;
            }
            if (flight_price.val() === '') {
                alert('blank');
                flight_price.parent().parent().addClass('has-error');
            } else {
                flight_price.parent().parent().removeClass('has-error');
                result += 1;
            }
            if (result === 4) {
                $.ajax({
                    type: 'ajax',
                    method: 'post',
                    url: url,
                    data: data,
                    async: false,
                    dataType: 'json',
                    success: function (response) {
                        if (response.success === true) {
                            $('#myModal').modal('hide');
                            $('#myForm')[0].reset();
                            if (response.type === 'add') {
                                var type = 'added';
                            } else if (response.type === 'update') {
                                var type = "updated";
                            }
                            $('.alert-success').html('Flights ' + type + ' successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAllFlights();
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
            $('#myForm').attr('action', '<?php echo base_url() ?>admin/updateFlight');
            var flight_to = $('input[name=flight_to]');
            var flight_from = $('input[name=flight_from]');
            var flight_price = $('input[name=flight_price]');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>admin/editFlight',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function (data) {
                    flight_to.val(data.flight_to);
                    flight_from.val(data.flight_from);
                    flight_price.val(data.flight_price);
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
            var flight_to = $('input[name=flight_to]');
            var flight_from = $('input[name=flight_from]');
            var flight_price = $('input[name=flight_price]');
            $.ajax({
                type: 'ajax',
                method: 'get',
                url: '<?php echo base_url() ?>admin/editFlight',
                data: {id: id},
                async: false,
                dataType: 'json',
                success: function (data) {
                    flight_to.val(data.flight_to);
                    flight_from.val(data.flight_from);
                    flight_price.val(data.flight_price);
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
                    url: '<?php echo base_url() ?>admin/deleteFlight',
                    data: {id: id},
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            $('#deleteModal').modal('hide');
                            $('.alert-success').html('Flight Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAllFlights();
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

        //function
        function showAllFlights() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url(); ?>admin/showAllFlights',
                async: false,
                dataType: 'json',
                success: function (data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                                '<td>' + data[i].id + '</td>' +
                                '<td>' + data[i].flight_from + '</td>' +
                                '<td>' + data[i].flight_to + '</td>' +
                                '<td>' + data[i].flight_price + '</td>' +
                                '<td>' + data[i].created_at + '</td>' +
                                '<td>' + data[i].updated_at + '</td>' +
                                '<td>' +
                                '<a href="javascript:;" class="btn btn-default btn-sm btn-icon icon-left item-edit" data="' +
                                data[i].id + '">' +
                                '<i class="entypo-pencil"></i>Edit' +
                                '</a>' +
                                '<a href="javascript:;" class="btn btn-danger btn-sm btn-icon icon-left item-delete" data="' +
                                data[i].id + '">' +
                                '<i class="entypo-cancel"></i>Delete' +
                                '</a>' +
                                '<a href="javascript:;" class="btn btn-info btn-sm btn-icon icon-left item-view" data="' +
                                data[i].id + '">' +
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


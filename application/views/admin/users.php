
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
        <strong>Users</strong>
    </li>
</ol>
<h2>Manage Users</h2>
<br />
<div class="alert alert-success" style="display: none;"></div>
<div class="row">
    <div class="col-sm-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
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
                            <th>Package Name</th>
                            <th>User Name</th>
                            <th>User Email</th>
                            <th>User Phone</th>
                            <th>No. of Adults</th>
                            <th>No. of Children's</th>
                            <th>Date</th>
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
        showAllUsers();

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
                    url: '<?php echo base_url() ?>admin/deleteUser',
                    data: {id: id},
                    dataType: 'json',
                    success: function (response) {
                        if (response.success) {
                            $('#deleteModal').modal('hide');
                            $('.alert-success').html('Page Deleted successfully').fadeIn().delay(4000).fadeOut('slow');
                            showAllUsers();
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
        function showAllUsers() {
            $.ajax({
                type: 'ajax',
                url: '<?php echo base_url(); ?>admin/showAllUsers',
                async: false,
                dataType: 'json',
                success: function (data) {
                    var html = '';
                    var i;
                    for (i = 0; i < data.length; i++) {
                        html += '<tr>' +
                                '<td>' + data[i].id + '</td>' +
                                '<td>' + data[i].package_name + '</td>' +
                                '<td>' + data[i].c_f_name + ' ' + data[i].c_l_name + '</td>' +
                                '<td>' + data[i].c_email + '</td>' +
                                '<td>' + data[i].c_phone + '</td>' +
                                '<td>' + data[i].adults + '</td>' +
                                '<td>' + data[i].children + '</td>' +
                                '<td>' + data[i].created_at + '</td>' +
                                '<td>' +
                                '<a href="javascript:;" class="btn btn-danger btn-sm btn-icon icon-left item-delete" data="' +
                                data[i].id + '">' +
                                '<i class="entypo-cancel"></i>Delete' +
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
    });
</script>


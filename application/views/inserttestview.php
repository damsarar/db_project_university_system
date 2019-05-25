<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Learn CURD Operation On Web Preparations</title>
    <link href="<?php echo base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/buttons.bootstrap.min.css')?>" rel="stylesheet">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
</head>
<body>
<div class="container">
    <h1>Learn CURD Operation in CodeIgniter Framework with AJAX and Bootstrap</h1>
    </center>
    <h3>Mobile Store</h3>
    <br />
    <button class="btn btn-success" onclick="professor_insert()"><i class="glyphicon glyphicon-plus"></i> Add Mobile</button>
    <br />
    <br />
    <table id="table_id" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
        <tr>
            <th>Employee No</th>
            <th>Name</th>
            <th>Office</th>
            <th>Phone</th>
            <th>Purpose</th>
            <th>Department ID</th>
            <th style="width:125px;">Action
                </p></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach($h->result() as $row){?>
            <tr>
                <td><?php echo $row->Emp_ID;?></td>
                <td><?php echo $row->Name;?></td>
                <td><?php echo $row->office;?></td>
                <td><?php echo $row->phone;?></td>
                <td><?php echo $row->purpose;?></td>
                <td><?php echo $row->Dept_code;?></td>

                <td>
                    <button class="btn btn-warning" onclick="professor_update(<?php echo $row->id;?>)"><i class="glyphicon glyphicon-pencil"></i></button>
                    <button class="btn btn-danger" onclick="professor_delete(<?php echo $row->id;?>)"><i class="glyphicon glyphicon-remove"></i></button>
                </td>
            </tr>
        <?php }?>
        </tbody>

        <tfoot>
        <tr>
            <th>Employee No</th>
            <th>Name</th>
            <th>Office</th>
            <th>Phone</th>
            <th>Purpose</th>
            <th>Department ID</th>
        </tr>
        </tfoot>
    </table>
</div>
<script src="<?php echo base_url('assets/js/jquery.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/js/dataTables.bootstrap.js')?>"></script>
<script type="text/javascript">
    $(document).ready( function () {
        $('#table_id').DataTable();
    } );
    var save_method; //for save method string
    var table;


    function professor_add()
    {
        save_method = 'add';
        $('#form')[0].reset(); // reset form on modals
        $('#modal_form').modal('show'); // show bootstrap modal
        //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function professor_update(id)
    {
        save_method = 'update';
        $('#form')[0].reset(); // reset form on modals

        //Ajax Load data from ajax
        $.ajax({
            url : "<?php echo site_url('admind/professor/ajax_edit/')?>/" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data)
            {

                $('[name="Emp_ID"]').val(data.id);
                $('[name="Name"]').val(data.model_no);
                $('[name="office"]').val(data.mobile_name);
                $('[name="phone"]').val(data.company);
                $('[name="purpose"]').val(data.mobile_category);


                $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
                $('.modal-title').text('Edit Mobile'); // Set title to Bootstrap modal title

            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error get data from ajax');
            }
        });
    }



    function save()
    {
        var url;
        if(save_method == 'add')
        {
            url = "<?php echo site_url('admind/professor/professor_add')?>";
        }
        else
        {
            url = "<?php echo site_url('admind/professor/professor_update')?>";
        }

        // ajax adding data to database
        $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),
            dataType: "JSON",
            success: function(data)
            {
                //if success close modal and reload ajax table
                $('#modal_form').modal('hide');
                location.reload();// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
            }
        });
    }

    function professor_delete(id)
    {
        if(confirm('Are you sure delete this data?'))
        {
            // ajax delete data from database
            $.ajax({
                url : "<?php echo site_url('admind/professor/professor_delete')?>/"+id,
                type: "POST",
                dataType: "JSON",
                success: function(data)
                {

                    location.reload();
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('Error deleting data');
                }
            });

        }
    }

</script>

<!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title alert alert-info">Mobile Form</h3>
            </div>
            <div class="modal-body form">
                <form action="#" id="form" class="form-horizontal">
                    <input type="hidden" value="" name="mobile_id"/>
                    <div class="form-body">
                        <div class="form-group">
                            <label class="control-label col-md-3">Model No.</label>
                            <div class="col-md-9">
                                <input name="model_no" placeholder="Model No." class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Mobile Name</label>
                            <div class="col-md-9">
                                <input name="mobile_name" placeholder="Mobile Name" class="form-control" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Company</label>
                            <div class="col-md-9">
                                <input name="company" placeholder="Company" class="form-control" type="text">

                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-md-3">Mobile Category</label>
                            <div class="col-md-9">
                                <input name="mobile_category" placeholder="Mobile Category" class="form-control" type="text">

                            </div>
                        </div>

                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnSave" onclick="save()" class="btn btn-success">Save</button>
                <button type="button" class="btn btn-warning" data-dismiss="modal">Cancel</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->

</body>
</html>
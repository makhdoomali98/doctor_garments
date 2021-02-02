@extends('layouts.app')

@section('content')

    <div class="container">
        <div>
            <h2 style="text-align: center;">MANAGE INVENTORY <a href="" type="button"  class="btn btn-primary ;" style="float: right">REPORTS</a> <a href="" type="button" style="float: right" class="btn btn-primary ">CATEGORY PRICING</a></h2>

            {{--    <a href="" type="button" class="btn btn-primary" style="float: right; margin: 10px 0px 10px 0px">ADD</a>--}}
            <button type="button" class=" btn btn-primary" style="float: right; margin-bottom: 10px" data-toggle="modal" data-target="#createInventory" >
                ADD
            </button>

            {{--    create Modal--}}
            <div class="modal fade" id="createInventory" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Add New Category by  </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form action="{{ route('store') }}" id="create" method="post" style="padding-left: 25px;" >
                            @csrf


                            <div class="field">
                                <label class="label" for="neck_shape">NECK SHAPE</label>

                                <div class="control">
                                    <input style="width: 60%" class="input " type="text" name="neck_shape" id="" required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="productType">PRODUCT TYPE</label>

                                <div class="control">
                                    <input style="width: 60%" class="input " name="product_type"  id="" value="">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="fabric">FABRIC</label>
                                <div class="control">
                                    <input style="width: 60%"class="input " name="fabric"  id="" value ="">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="design">DESIGN</label>
                                <div class="control">
                                    <input style="width: 60%"class="input " name="design"  id="" value ="">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="gender">GENDER</label>
                                <div class="control">
                                    <input style="width: 60%"class="input " name="gender"  id="" value ="">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="size">SIZE</label>
                                <div class="control">
                                    <input style="width: 60%"class="input " name="size"  id="" value ="">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="selling">SELLING ?</label>
                                <div class="control">
                                    <input style="width: 60%"class="input " name="selling"  id="" value ="">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="in_stock">IN STOCK</label>
                                <div class="control">
                                    <input style="width: 60%"class="input " name="in_stock"  id="" value ="">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="quantity">QUANTITY</label>
                                <div class="control">
                                    <input style="width: 60%"class="input " name="quantity"  id="" value ="">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">CREATE</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            {{--    Edit modal--}}
            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">UPDATE DATA </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="file1" method="POST" enctype="multipart/form-data" style="padding-left: 25px;" >
                            <input type="hidden" id="inventory_id" name="inventory_id">
                            @csrf


                            <div class="field">
                                <label class="label" for="neck_shape">NECK SHAPE</label>

                                <div class="control">
                                    <input style="width: 60%" class="input " type="text" name="neck_shape" id="neck_shape" required>
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="productType">PRODUCT TYPE</label>

                                <div class="control">
                                    <input style="width: 60%" class="input " name="product_type"  id="product_type" value="">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="fabric">FABRIC </label>
                                <div class="control">
                                    <input style="width: 60%"class="input " name="fabric"  id="fabric" value ="">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="design">DESIGN</label>
                                <div class="control">
                                    <input style="width: 60%"class="input " name="design"  id="design" value ="">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="gender">GENDER</label>
                                <div class="control">
                                    <input style="width: 60%"class="input " name="gender"  id="gender" value ="">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="size">SIZE</label>
                                <div class="control">
                                    <input style="width: 60%"class="input " name="size"  id="size" value ="">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="selling">SELLING ?</label>
                                <div class="control">
                                    <input style="width: 60%"class="input " name="selling"  id="selling" value ="">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="in_stock">IN STOCK</label>
                                <div class="control">
                                    <input style="width: 60%"class="input " name="in_stock"  id="in_stock" value ="">
                                </div>
                            </div>
                            <div class="field">
                                <label class="label" for="quantity">QUANTITY</label>
                                <div class="control">
                                    <input style="width: 60%"class="input " name="quantity"  id="quantity" value ="">
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="submit" id="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="align-content-lg-between">
            <table id="Inventory" class="table table-striped table-bordered" style="width:100% ; margin-top: 40px">
                <thead>
                <tr>
                    <th>NO</th>
                    <th>NECK SHAPE</th>
                    <th>PRODUCT TYPE</th>
                    <th>FABRIC</th>
                    <th>DESIGN</th>
                    <th>GENDER</th>
                    <th>SIZE</th>
                    <th>SELLING</th>
                    <th>IN STOCK</th>
                    <th>QUANTITY</th>
                    <th>RETURNED
                        [auto]</th>
                    <th>PRICE/pc
                        [auto]</th>
                    <th>PRICE/st
                        [auto]</th>
                    <th>ACTION</th>


                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>

                </tbody>
                <tfoot>
                <tr>
                    <th>NO</th>
                    <th>NECK SHAPE</th>
                    <th>PRODUCT TYPE</th>
                    <th>FABRIC</th>
                    <th>DESIGN</th>
                    <th>GENDER</th>
                    <th>SIZE</th>
                    <th>SELLING</th>
                    <th>IN STOCK</th>
                    <th>QUANTITY</th>
                    <th>RETURNED
                        [auto]</th>
                    <th>PRICE/pc
                        [auto]</th>
                    <th>PRICE/st
                        [auto]</th>
                    <th>ACTION</th>

                </tr>
                </tfoot>
            </table>
            <script type="application/javascript">
                $(document).ready(function() {
                    $('#Inventory').DataTable();
                } );

            </script>

        </div>
    </div>



@endsection
@section('js')
    <!-- ajax scripts -->
    <script type="application/javascript">
        $(document).ready(function() {
            load_data();
            $('#create').on('submit', function(event) {

                // $("#butsave").attr("disabled", "disabled");
                event.preventDefault();
                $.ajax({
                    url: "{{ route('store') }}",
                    type: "post",
                    data: {

                        neck_shape : neck_shape,
                        product_type:product_type,
                        fabric:fabric,
                        design:design,
                        gender:gender,
                        size:size,
                        selling:selling,
                        in_stock:in_stock,
                        quantity:quantity,


                        action:'store'
                    },
                    data:new FormData(this),
                    contentType:false,
                    processData:false,
                    cache:false,
                    // cache: false,
                    success:function(response){
                        load_data();
                        $('#createInventory').modal('hide');
                        swal({
                            title: response.status,
                            text: response.message,
                            icon: response.status,
                        });

                    },
                });
            });
            function load_data(){
                $("#Inventory tbody").html('');
                $.ajax({
                    type: "GET",
                    url: "{{ route('getData') }}",
                    dataType : 'json',
                    success: function (response)
                    {

                        if(response.error === false ) {
                            id=1;
                            $.each(response.data , function(key, data){

                                $("#Inventory tbody").append("<tr><td>" +id++ + "</td><td>" + data.neck_shape + "</td><td>" + data.product_type + "</td><td>" + data.fabric + "</td><td>" + data.design + "</td><td>" + data.gender + "</td><td>" + data.size + "</td><td>" + data.selling + "</td><td>" + data.in_stock + "</td><td>" + data.quantity + "</td></td>  <td></td>  <td></td>  <td></td> <td><a name = 'edit' class= 'btn btn-primary' id= "+data.id+">EDIT</a><a name='delete' class ='btn btn-danger' id= "+data.id+" >DELETE </a></td> </tr>");

                            });
                            $(document).on("click","a[name='delete']", function (e) {
                                var id = $(this).attr("id")
                                delete_data(id);
                            });
                            $(document).on("click","a[name='edit']", function (e) {
                                var id = $(this).attr("id")
                                edit_data(id)
                                $('#editModal').modal('show')
                            });


                            // show response from the php script.
                        }

                    }
                });
            }
            function edit_data (id) {

                // document.getElementById("editModal").showModal();
                // $('#editModal').modal('show');
                $.ajax({
                    url: "{{route('getEdit')}}",
                    type: "GET",
                    data: {
                        id: id,
                        action: 'getData'
                    },
                    success:function (response){

                        console.log(response);
                        var x = JSON.stringify(response);

                        // getting data from object
                        var idd = response[0].id;
                        var neck_shape = response[0].neck_shape;
                        var product_type = response[0].product_type;
                        var fabric = response[0].fabric;
                        var design = response[0].design;
                        var gender = response[0].gender;
                        var size = response[0].size;
                        var selling = response[0].selling;
                        var in_stock = response[0].in_stock;
                        var quantity = response[0].quantity;



                        // edit data inserted in modal
                        $('#inventory_id').val(idd);
                        $('#neck_shape').val(neck_shape);
                        $('#product_type').val(product_type);
                        $('#fabric').val(fabric);
                        $('#design').val(design);
                        $('#gender').val(gender);
                        $('#size').val(size);
                        $('#selling').val(selling);
                        $('#in_stock').val(in_stock);
                        $('#quantity').val(quantity);



                    }
                })
            }
            function delete_data(id){

                swal({
                    title: "Are you sure?",
                    text: "Once deleted, you will not be able to recover this imaginary file!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                    .then((willDelete) => {
                        if (willDelete) {
                            $.ajax({
                                url: "{{ route('destroy')}}",
                                type: "GET",
                                data: {
                                    id: id,
                                    action: 'delete'
                                },
                                // cache: false,
                                success:function(post){

                                    swal("Poof! Your imaginary file has been deleted!", {
                                        icon: "success",
                                    });
                                    load_data();

                                    return false;
                                }
                            });
                        } else {
                            swal("Your imaginary file is safe!");
                        }
                    });
            }
            $('#file1').on('submit', function(event) {
                var id =$('#inventory_id').val();
                console.log(id);

                event.preventDefault();
                $.ajax({
                    url: "{{ route('update/id') }}",
                    type: "POST",
                    data: {
                        id:id,
                        neck_shape: neck_shape,
                        product_type: product_type,
                        fabric: fabric,
                        design : design,
                        gender: gender,
                        size: size,
                        selling:selling,
                        in_stock:in_stock,
                        quantity:quantity,

                        action: 'update'
                    },
                    data:new FormData(this),
                    contentType:false,
                    processData:false,
                    cache:false,
                    enctype:"multipart/form-data",
                    cache: false,
                    success:function(response){
                        load_data();
                        $('#editModal').modal('hide')

                        swal({
                            title: response.status,
                            text: response.message,
                            icon: response.status,
                        });
                        console.log(id);
                    }
                });
            });




        });



    </script>
@endsection





@extends('layouts.app')

@section('content')

<div class="container">
<div>	
<h2 style="text-align: center;">MANAGE INVENTORY <a href="" type="button" class="btn btn-primary float-right ;" style="">CATEGORY PRICING</a> <a href="" type="button" class="btn btn-primary float-right">REPORTS</a></h2>

</div>

<div class="align-content-lg-between">
    <table id="example" class="table table-striped table-bordered" style="width:100% ; margin-top: 40px">
            <thead>
                <tr>
                   <th>No</th>
                    <th>Neck Shape</th>
                    <th>Product Type</th>
                    <th>Fabric</th>
                    <th>Design</th>
                    <th>Gender</th>
                    <th>Size</th>
                    <th>Selling</th>
                    <th>In stock</th>
                    <th>Quantity</th>
                    <th>Returned 
                    [auto]</th>
                    <th>Price/pc 
                    [auto]</th>
                    <th>Price/st 
                    [auto]</th>
                    <th>Action</th>


                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                       
                </tr>

            </tbody>
            <tfoot>
                <tr>
                  	<th>No</th>
                    <th>Neck Shape</th>
                    <th>Product Type</th>
                    <th>Fabric</th>
                    <th>Design</th>
                    <th>Gender</th>
                    <th>Size</th>
                    <th>Selling</th>
                    <th>In stock</th>
                    <th>Quantity</th>
                    <th>Returned 
                    [auto]</th>
                    <th>Price/pc 
                    [auto]</th>
                    <th>Price/st 
                    [auto]</th>
                    <th>Action</th> 
                </tr>
            </tfoot>
        </table>
        <script type="application/javascript">
        $(document).ready(function() {
    		$('#example').DataTable();
				} );
        
        </script>

    </div>
</div>

@endsection
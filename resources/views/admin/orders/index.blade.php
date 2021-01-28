@extends('layouts.app')

@section('content')

<div class="container">
<div>   
<h2 style="text-align: center;">ORDERS LIST <a href="" type="button" class="btn btn-primary float-right ;" style="">NEW</a> <a href="" type="button" class="btn btn-primary float-right">REPORTS</a></h2>

</div>

<div class="align-content-lg-between">
    <table id="example" class="table table-striped table-bordered" style="width:100% ; margin-top: 40px">
            <thead>
                <tr>
                   <th>No</th>
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Customer Name</th>
                    <th>Phone Number</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Color</th>
                    <th>Fabric</th>
                    <th>Design</th>
                    <th>Neck</th>
                    <th>Sales Person</th>
                    


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
                    <th>Order Date</th>
                    <th>Status</th>
                    <th>Customer Name</th>
                    <th>Phone Number</th>
                    <th>Size</th>
                    <th>Quantity</th>
                    <th>Color</th>
                    <th>Fabric</th>
                    <th>Design</th>
                    <th>Neck</th>
                    <th>Sales Person</th>
                    
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
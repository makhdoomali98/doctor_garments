@extends('layouts.app')

@section('content')

<div class="container">
<div>	
<h2 style="text-align: center;">MANAGE RAW MATERIAL <a href= "" type="button" style="" class="btn btn-primary float-right">REPORTS</a></h2>

</div>

<div class="align-content-lg-between">
    <table id="example" class="table table-striped table-bordered" style="width:100% ; margin-top: 40px">
            <thead>
                <tr>
                   <th>No</th>
                    <th>Purchase Date</th>
                    <th>Type</th>
                    <th>Season</th>
                    <th>Material</th>
                    <th>Color Name</th>
                    <th>Color Code</th>
                    <th>Price/M</th>
                    <th>SQ Meters</th>
                    <th>Investment Id</th>
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
                    <th>Purchase Date</th>
                    <th>Type</th>
                    <th>Season</th>
                    <th>Material</th>
                    <th>Color Name</th>
                    <th>Color Code</th>
                    <th>Price/M</th>
                    <th>SQ Meters</th>
                    <th>Investment Id</th>
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
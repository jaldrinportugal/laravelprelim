@extends('layout.app')

@section('content')
<br>
<h1 class="text-success">Manage Supplier</h1>
<br>
<div>
  <table class="table table-dark table-striped">
<thread>
    <tr>
        <th>SupplierId</th>
        <th>SupplierName</th>
        <th>ContactInfo</th>
        <th>Address</th>
    </tr>   
</thread>

<tbody>
    <td>asdas</td>
    <td>asdas</td>
    <td>asdasd</td>
    <td>asdasd</td>

</tbody>

<tbody>
    <td>asdas</td>
    <td>asdas</td>
    <td>asdasd</td>
    <td>asdasd</td>

</tbody>
</div>

    <div class="row">
        <form>
            
            <label class="col"><h6>Supllier Name</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">
            
            
            <label class="col"><h6>Contact Info</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">
            
            
            <label class="col" ><h6>Address</h6></label>
            <input class="inputs" type="number" placeholder="Input here..">
           
            <div class="col">
                <select name="type" id="type">
                    <option value="Add" pattern="ADD" >ADD</option>
                    <option value="Remove" pattern="Remove" >REMOVE</option>
                </select>
            </div>
            <div class="col" >
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
        <br>
</div>  


@endsection

@section('title')
    Supplier
@endsection
@extends('layout.app')

@section('content')
<br>
<h1 class="text-success">Manage Products</h1>
<br>
<div>
  <table class="table table-dark table-striped">
<thread>
    <tr>
        <th>ProductId</th>
        <th>ProductName</th>
        <th>Description</th>
        <th>Price</th>
        <th>QuantityInStock</th>
    </tr>   
</thread>

<tbody>
    <td>{{ $products->ProductName; }}</td>
    <td>{{ $products->ProductName; }}</td>
    <td>asdasd</td>
    <td>asdasd</td>
    <td>asdasd</td>
</tbody>
<tbody>
    <td>asdasd</td>
    <td>ss</td>
    <td>asdas</td>
    <td>asdasd</td>
    <td>asdasd</td>
</tbody>
</div>

    <div class="row">
        <form>
            
            <label class="col"><h6>Product Name</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">
            
            
            <label class="col"><h6>Description</h6></label>
            <input class="inputs" type="text" placeholder="Input here..">
            
            
            <label class="col"><h6>Price</h6></label>
            <input class="inputs" type="number" placeholder="Input here..">
            
            <label class="col"><h6>QuantityInStock</h6></label>
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
    Products
@endsection
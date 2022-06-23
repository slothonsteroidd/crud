@extends('layout')  
    @section('content')  
    <h1>Add Product</h1>
    <form method="post" action="{{ route('product.store') }}">  
       @csrf     
              <div class="form-group">      
                  <label for="product_name">Name of Product:</label><br/><br/>  
                  <input type="text" class="form-control" name="product_name"/><br/><br/>  
              </div>  
    <div class="form-group">      
    <label for="product_desc">Product Description :</label><br/><br/>  
                  <input type="text" class="form-control" name="product_desc"/><br/><br/>  
              </div>  
    <br/>  
    <button type="submit" class="btn-btn" >Insert</button>  
    </form>  
    @endsection  
@extends('layout')  
    @section('content')  
    <form method="Post" action="{{route('product.update',$product->id)}}">  
    @method('PATCH')     
     @csrf     
              <div class="form-group">      
                  <label for="product_name">Product Name:</label><br/><br/>  
                  <input type="text" class="form-control" name="product_name" value={{$product->name}}><br/><br/>  
              </div>  
      
    <div class="form-group">      
                  <label for="description">Product Description:</label><br/><br/>  
                  <input type="text" class="form-control" name="product_desc" value={{$product->description}}><br/><br/>  
              </div>   
    <br/>  
      
    <button type="submit" class="btn-btn" >Update</button>  
    </form>  
      
      
    @endsection  
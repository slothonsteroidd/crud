@extends('layout')  
    @section('content')  
    <table border="1px">  
    <thead>  
    <tr> 
    <td>  
    ID </td>      
    <td>  
    Product Name </td>  
    <td>  
    Product Description </td>  

    </tr>  
    </thead>  
    <tbody>  
    @foreach($products as $product)  
            <tr border="none">  
                <td>{{$product->id}}</td>  
                <td>{{$product->name}}</td>  
                <td>{{$product->description}}</td>   
                <td><form action="{{ route('product.edit', $product->id)}}" method="GET">  
                     @csrf  
                      
                     <button class="btn btn-danger" type="submit">Edit</button>  
                   </form>  </td>
                
             </tr>
</td>    
    @endforeach  
    </tbody>  
    </table>  
    @endsection  
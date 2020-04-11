@extends('layouts.admin') 

    @section('content')
    <ol class="breadcrumb">
       <li><a href="/admin/products/product"><<i class="fa fa-list"></i> Danh sách sản phẩm</a></li>
       <li class="active"><i class="fa fa-pencil"></i> Sửa sản phẩm</li>
    </ol>      
    @if ($errors->any())
        <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
      @endif
    {!! Form::model($product, [
          'method' => 'PATCH',
          'url' => ['/admin/products', $product->id],
          'class' =>'f'
          'files' => true
          ])  !!}
     @include ('admin.products.form', ['formMode' => 'edit']) 
     {!! Form::close()  !!}     

@endsection

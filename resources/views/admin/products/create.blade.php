@extends('admin.theme.default')

@section('content')
<style>
li{list-style-type: none}
</style>
<ol class="breadcrumb">
<li><a href="/admin/products"><i class="fa fa-cube"></i> Danh sách sản phẩm </a></li>&nbsp;&nbsp;
<li class="active"><i class="fa fa-plus"></i> Thêm sản phẩm</li>
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
    <form method="post" action="{{ route('products.store') }}">
           @csrf
            @include ('admin.products.form', ['FormMode' => 'create'])
            </form>
@endsection

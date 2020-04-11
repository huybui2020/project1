@extends('layouts\app')

@section('content')
<a style="margin: 19px;" href="{{ route('categories.create')}}" class="btn btn-primary">New Category</a>
<div class="display-3">
    <h1>List of Category</h1>
  </div>
  <div class="row">      
  <table style="text-align:center" class="table table-bordered tbClone" cellspacing="0" cellpadding="0">
        <tr>
          <td>ID</td>
          <td>Category Name</td>
          <td>Category Slug</td>
          <td>Category Parent ID</td>
          <td colspan = 2>Actions</td>
        </tr>
        @foreach($cates as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->cate_name}}</td>
            <td>{{$item->cate_slug}}</td>
            <td>{{$item->cate_parent}}</td>
            <td style="text-align: center">
                <a href="{{ route('categories.edit',$item->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('categories.destroy', $item->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @if(count($item->childs))
          @include('admin/categories/index_child', ['childs' => $item->childs])
        @endif
        @endforeach
  </table>
</div>
@endsection
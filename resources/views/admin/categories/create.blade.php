@extends('admin.theme.default')

@section('content')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a Category</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <!-- {!! Form::open(['url' => "{{ route('categories.store') }}", 'class' => 'form-horizontal clearfix', 'files' => true]) !!}
      @include ('admin.categories.form', ['FormMode' => 'create'])
    {!! Form::close() !!} -->

    <form method="post" action="{{ route('categories.store') }}">
           @csrf
            @include ('admin.categories.form', ['FormMode' => 'create'])
            </form>
  </div>
</div>
</div>
@endsection
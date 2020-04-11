<style>
.f{width: 50%;padding: 5px;}
li{list-style-type: none}
label{width: 205}
.tb{
    width: 50%;
    padding: 5px;
}
</style>
<div>
    <ul>
      <li>
       <div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
        {!! Form::label('product_cate', 'Danh mục sản phẩm', ['class' => 'required']) !!}
        {!! Form::select('product_cate', $cates, null,['placeholder' => '-Danh mục sản phẩm-','class' => 'f tb']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
       </li>
       <li>
       <li>
       <div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
        {!! Form::label('product_name', 'Tên sản phẩm', ['class' => 'required']) !!}
        {!! Form::text('product_name', null,('required' == 'required') ?  ['class' => 'f', 'required' => 'required'] : ['class' => 'f']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
       </li>
       <li>
       <div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
        {!! Form::label('product_code', 'Mã sản phẩm', ['class' => 'required']) !!}
        {!! Form::text('product_code', null,('required' == 'required') ?  ['class' => 'f', 'required' => 'required'] : ['class' => 'f']) !!}
        {!! $errors->first('product_code', '<p class="help-block">:message</p>') !!}
        </div>
       </li>
       </li>
       <li>
       <li>
       <div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
        {!! Form::label('product_teaser', 'Mô tả ngắn gọn', ['class' => 'required']) !!}
        {!! Form::textarea('product_teaser', null,['class' => 'form-control decription'] ) !!}
        {!! $errors->first('product_teaser', '<p class="help-block">:message</p>') !!}
        </div>
        </li>
        <li>
       <div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
        {!! Form::label('product_content', 'Mô tả sản phẩm', ['class' => 'required']) !!}
        {!! Form::textarea('product_content', null,('required' == 'required') ? ['class' => 'form-control decription'] : ['class' => 'form-control']) !!}
        {!! $errors->first('product_content', '<p class="help-block">:message</p>') !!}
        </div>
       </li>
       </li>
       <li>
       <div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
        {!! Form::label('product_price', 'Giá sản phẩm', ['class' => 'required']) !!}
        {!! Form::text('product_price', null,('required' == 'required') ?  ['class' => 'f', 'required' => 'required'] : ['class' => 'f']) !!}
        {!! $errors->first('product_price', '<p class="help-block">:message</p>') !!}
        </div>
       </li>
       <li>
       <div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
        {!! Form::label('product_oldPrice', 'Giá cũ', ['class' => 'required']) !!}
        {!! Form::text('product_oldPrice', null,('required' == 'required') ?  ['class' => 'f', 'required' => 'required'] : ['class' => 'f']) !!}
        {!! $errors->first('product_oldPrice', '<p class="help-block">:message</p>') !!}
        </div>
       </li>
       <li>
       <div class="form-group{{ $errors->has('name') ? 'has-error' : ''}}">
        {!! Form::label('stock_amount', 'Số lượng', ['class' => 'required']) !!}
        {!! Form::text('stock_amount', null,('required' == 'required') ?  ['class' => 'f', 'required' => 'required'] : ['class' => 'f']) !!}
        {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
       </li>
       </ul>
       </div>


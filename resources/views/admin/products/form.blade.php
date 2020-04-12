<style>
    .f {
        width: 50%;
        padding: 5px;
    }

    li {
        list-style-type: none;
    }

    label {
        width: 20%;
    }

    .tb {
        width: 50%;
        padding: 5px;
    }

</style>
<div>
    <ul>
        <li>
            <div
                class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('product_cate', 'Danh mục sản phẩm', ['class' => 'required']) !!}
                {{ Form::select('product_cate', $cates, null,['placeholder' => '-Danh mục sản phẩm-','class' => 'f tb']) }}
                {!! $errors->first('product_cate', '<p class="help-block">:message</p>') !!}
            </div>
        </li>
        <li>
            <div
                class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('product_name', 'Tên sản phẩm', ['class' => 'required']) !!}
                {!! Form::text('product_name', null, ('required' == 'required') ? ['class' => 'f', 'required' =>
                'required'] : ['class' => 'f']) !!}
                {!! $errors->first('product_name', '<p class="help-block">:message</p>') !!}
            </div>
        </li>
        <li>
            <div
                class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('product_code', 'Mã sản phẩm', ['class' => 'required']) !!}
                {!! Form::text('product_code', null, ('required' == 'required') ? ['class' => 'f', 'required' =>
                'required'] : ['class' => 'f']) !!}
                {!! $errors->first('product_code', '<p class="help-block">:mesage</p>') !!}
            </div>
        </li>
        <li>
            <div
                class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('product_teaser', 'Mô tả ngắn gọn', ['class' => 'required']) !!}
                {!! Form::textarea('product_teaser', null, ['class' => 'forn-control description'] ) !!}
                {!! $errors->first('product_teaser', '<p class="help-block">:message</p>') !!}
            </div>
        </li>
        <li>
            <div
                class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('product_content', 'Mô tả sản phẩm', ['class' => 'required']) !!}
                {!! Form::textarea('product_content', null, ('required' == 'required') ? ['class' => 'form-control
                description'] : ['class' => 'form-controll']) !!}
                {!! $errors->first('product_content', '<p class="help-block">:mesage</p>') !!}
            </div>
        </li>
        <li>
            <div
                class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('product_price', 'Giá sản phẩm', ['class' => 'required']) !!}
                {!! Form::text('product_price', null, ('required' == 'required') ? ['class' => 'f', 'required' =>
                'required'] : ['class' => 'f']) !!}
                {!! $errors->first('product_price', '<p class="help-block">:message</p>') !!}
            </div>
        </li>
        <li>
            <div
                class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('oldPrice', 'Giá cũ', ['class' => 'required']) !!}
                {!! Form::text('oldPrice', null, ('required' == 'required') ? ['class' => 'f', 'required' => 'required']
                : ['class' => 'f']) !!}
                {!! $errors->first('oldPrice', '<p class="help-block">:mesage</p>') !!}
            </div>
        </li>
        <li>
            <div
                class="form-group{{ $errors->has('name') ? 'has-error' : '' }}">
                {!! Form::label('stock_amount', 'Số lượng', ['class' => 'required']) !!}
                {!! Form::text('stock_amount', null, ('required' == 'required') ? ['class' => 'f', 'required' =>
                'required'] : ['class' => 'f']) !!}
                {!! $errors->first('stock_amount', '<p class="help-block">:mesage</p>') !!}
            </div>
        </li>
        <li>
            {!! Form::submit('Submit', ['class' => 'name']) !!}
        </li>
    </ul>
</div>

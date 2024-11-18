@extends('layout-admin')
@section('admin-content')
<div class="row">
<div class="col-lg-12">
    <section class="panel">
        <header class="panel-heading">
            Thêm danh mục sản phẩm
        </header>
        @if(session()->has('message'))
			<div class="alert alert-success">
				{{ session()->get('message') }}
			</div>
		@elseif(session()->has('error'))
				<div class="alert alert-danger">
				{{ session()->get('error') }}
			</div>
		@endif
        <div class="panel-body">

            <div class="position-center">
                <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                    {{ csrf_field() }}
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên danh mục</label>
                    <input type="text" name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                    <textarea style="resize: none" rows="8" class="form-control" name="category_product_desc" id="exampleInputPassword1" placeholder="Mô tả danh mục"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Hiển thị</label>
                        <select name="category_product_status" class="form-control input-sm m-bot15">
                            <option value="0">Ẩn</option>
                            <option value="1">Hiển thị</option>
                    </select>
                </div>
                
                <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
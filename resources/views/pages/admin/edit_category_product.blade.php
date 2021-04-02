@extends('pages.admin_layout')
@section('admin_content')
{{--echo"1";--}}
<style>
    .lable-class{font-size: 15px}
</style>
    <div class="row">
        <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
                <div class="x_title">
                    <h2>Cập nhật danh mục mặt hàng</h2>
                    <ul class="nav navbar-right panel_toolbox">
                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                        </li>
                        <li><a class="close-link" href="{{URL::to('/dashboard')}}"><i class="fa fa-close"></i></a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
                <div class="x_content">
                    <?php
                    $msg = Session::get('msg');
                    if($msg){
                        echo '<div class="clearfix"></div>
                                <div class="field form-group"style="margin: auto; align-content: center">
                                    <div class="alert alert-success alert-dismissible  " style="margin: auto; text-align: center" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                        </button>
                                        <strong>'.$msg.'</strong>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <br/>';

                        Session::put("msg",null);
                    }
                    ?>
                    <br />
                    @foreach($category as $key=>$value)
                        <form action="{{URL::to('/update-category-product/'.$value->category_id)}}" method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
{{--                            <div class="field item form-group">--}}
{{--                                <label class="col-form-label col-md-3 col-sm-3  label-align lable-class">Loại mặt hàng (<span class="required" style="color: red">*</span>)</label>--}}
{{--                                <div class="col-md-6 col-sm-6">--}}
{{--                                    <select name="product_type" class="form-control">--}}
{{--                                        <option value="">All</option>--}}
{{--                                        <option value="1">uống</option>--}}
{{--                                        <option value="2">bánh</option>--}}

{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align lable-class" for="first-name">Mã loại mặt hàng (<span class="required" style="color: red">*</span>)
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" value="{{$value->category_code}}" name="category_code" required="required" class="form-control ">
                                </div>
                            </div>

                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align lable-class" for="first-name">Tên loại mặt hàng (<span class="required" style="color: red">*</span>)
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" value="{{$value->category_name}}" name="category_name" required="required" class="form-control ">
                                </div>
                            </div>

{{--                            <div class="field item form-group">--}}
{{--                                <label class="col-form-label col-md-3 col-sm-3  label-align lable-class">Đơn vị tính (<span class="required" style="color: red">*</span>)</label>--}}
{{--                                <div class="col-md-6 col-sm-6">--}}
{{--                                    <select name="product_unit" class="form-control">--}}
{{--                                        <option value="1">cái</option>--}}
{{--                                        <option value="2">cốc</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div class="item form-group">--}}
{{--                                <label class="col-form-label col-md-3 col-sm-3 label-align lable-class" for="first-name">Đơn giá (<span class="required" style="color: red">*</span>)--}}
{{--                                </label>--}}
{{--                                <div class="col-md-6 col-sm-6 ">--}}
{{--                                    <input name="product_price" value="{{$value->product_price}}" type="text" id="first-name" required="required" class="form-control ">--}}
{{--                                </div>--}}
{{--                            </div>--}}

                             <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align lable-class">Trạng thái (<span class="required" style="color: red">*</span>)</label>
                                <div class="col-md-6 col-sm-6">
                                    <select value="{{$value->category_status}}" name="category_status" class="form-control">
                                        <?php
                                            if ($value->category_status == 1) {
                                                echo '<option selected value="1">Active</option>
                                                        <option value="0">Inactive</option>';
                                            }else{
                                                echo '<option  value="1">Active</option>
                                                        <option selected value="0">Inactive</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align lable-class">Mô tả
                                </label>
                                <div class="col-md-12 col-sm-12">
                                    <textarea name="category_description" class="col-md-6 col-sm-6" name='message' >{{$value->category_description}}</textarea></div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button type="submit" class="btn btn-success">Cập nhật</button>
    {{--                                <button class="btn btn-primary" type="button">Cancel</button>--}}
                                    <button class="btn btn-primary" type="reset">Làm mới</button>
                                    <a href="{{URL::to('/all-category-product')}}"><button type="button" class="btn btn-info">Quay lại</button></a>
                                </div>
                            </div>
                        </form>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
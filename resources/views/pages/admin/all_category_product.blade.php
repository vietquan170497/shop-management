@extends('pages.admin_layout')
@section('admin_content')
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Danh sách mặt hàng</h3>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-secondary" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Settings 1</a>
                                        <a class="dropdown-item" href="#">Settings 2</a>
                                    </div>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <p class="text-muted font-13 m-b-30">
{{--                                            DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>--}}
                                        </p>
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
                                        <table id="datatable" class="table table-striped table-bordered" style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>Mã</th>
                                                <th>Tên</th>
                                                <th>Mô tả</th>
                                                <th>Trạng thái</th>
                                                <th style=" text-align: center;">Sửa</th>
                                                <th>Xóa</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($categories as $key=>$category)
                                                <tr>
                                                    <td width="25%">{{$category->category_code}}</td>
                                                    <td width="25%">{{$category->category_name}}</td>
                                                    <td>{{$category->category_description}}</td>
{{--                                                    <td>{{$pro->product_status}}</td>--}}
                                                    <td width="8%"><?php if($category->category_status==0){
                                                            echo '<button type="button" class="btn btn-danger" style="font-size: 12px">Inactive</button>';
                                                        }else{
                                                            echo '<button type="button" class="btn btn-primary" style="font-size: 12px; margin: 0px">Active</button>';
                                                        }?>
                                                    </td>
                                                    <td style=" text-align: center; width: 6%" >
                                                        <a href="{{URL::to('/edit-category-product/'.$category->category_id)}}" >
                                                            <i class="fa fa-edit" style=" font-size: 20px;color:green"></i>
                                                        </a>
                                                    </td>
                                                    <td style=" text-align: center; width: 6%" >
                                                        <a href="{{URL::to('/delete-category-product/'.$category->category_id)}}" onclick="return confirm('Xác nhận xóa danh mục mặt hàng?')">
                                                            <i class="fa fa-close" style=" font-size: 20px; color: red"></i>
                                                        </a>
                                                    </td>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

@endsection
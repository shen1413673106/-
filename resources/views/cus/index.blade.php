@extends('layout.layout')
@section('title','1904商城首页')
@section('content')
<div class="main-content">
    <div class="breadcrumbs" id="breadcrumbs">
        <script type="text/javascript">
            try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
        </script>

        <ul class="breadcrumb">
            <li>
                <i class="icon-home home-icon"></i>
                <a href="#">首页</a>
            </li>
            <li class="active">安居客控制台</li>
            <li class="active">房源管理</li>
            <li class="active">账号设置</li>
            <li class="active">账号记录</li>
        </ul><!-- .breadcrumb -->
    </div>

    <div class="page-content">
        <div class="row">


            <div class="col-xs-12">

                <form action="{{url('cus/index')}}" method="get">
                    <input type="text" name="goods_name" placeholder="商品名称" value="">
                    <input type="text" name="min_price" placeholder="最低价格" value="">-
                    <input type="text" name="max_price" placeholder="最高价格" value="">
                    <input type="submit" value="搜索">
                </form>

                <div class="table-responsive">
                    <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th class="center">
                                    <label>
                                        <input type="checkbox" id="allbox" />
                                        <span class="lbl"></span>
                                    </label>
                                </th>
                                <th>客户id</th>
                                <th>客户名称</th>
                                <th>客户编码</th>
                                <th>客户简称</th>
                                <th>电话</th>
                                <th>网址</th>
                                <th>电子邮件</th>
                                <th>地区</th>
                                <th>邮政编码</th>
                                <th>详细地址</th>
                                <th>客户来源</th>
                                <th>客户类别</th>
                                <th>销售方式</th>
                                <th>行业属性</th>
                                <th>企业性质</th>
                                <th>企业描述</th>
                                <th>备注</th>
                                <th>操作</th>
                            </tr>
                        </thead>

                        <tbody>
                        @foreach($arr as $v)
                            <tr>
                                <td>{{$v->sid}}</td>
                                <td>{{$v->sname}}</td>
                                <td>{{$v->ser}}</td>
                                <td>{{$v->snames}}</td>
                                <td>{{$v->stel}}</td>
                                <td>{{$v->slog}}</td>
                                <td>{{$v->semail}}</td>
                                <td>{{$v->shod}}</td>
                                <td>{{$v->spos}}</td>
                                <td>{{$v->site}}</td>
                                <td>{{$v->scust}}</td>
                                <td>{{$v->scul}}</td>
                                <td>{{$v->sales}}</td>
                                <td>{{$v->busin}}</td>
                                <td>{{$v->bush}}</td>
                                <td>{{$v->busz}}</td>
                                <td>{{$v->sdesc}}</td>

                                <td>
                                    <button class="btn edit">编辑</button>
                                    <button class="btn btn-danger del" >删除</button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {{$arr->links()}}
                    {{--appends($query)->--}}
                </div><!-- /.table-responsive -->
            </div><!-- /span -->
        </div><!-- /row -->

    </div><!-- /.page-content -->
</div>

@endsection('content')
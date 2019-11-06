@extends('layout.layout')
@section('title','1904商城首页')
@section('content')
<script type="text/javascript" charset="utf-8" src="/static/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/static/ueditor/ueditor.all.min.js"> </script>
<!--建议手动加在语言，避免在ie下有时因为加载语言失败导致编辑器加载失败-->
<!--这里加载的语言文件会覆盖你在配置项目里添加的语言类型，比如你在配置项目里配置的是英文，这里加载的中文，那最后就是中文-->
<script type="text/javascript" charset="utf-8" src="/static/ueditor/lang/zh-cn/zh-cn.js"></script>

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
            <li class="active">添加账号</li>
        </ul><!-- .breadcrumb -->
    </div>

    <div class="page-content">
        <div class="row">


            <div class="col-xs-12">

                <form class="form-horizontal" role="form" action="{{url('cus/save')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> 销售员 </label>

                        <div class="col-sm-9">
                            <input type="text" id="form-field-1" name="sreg" placeholder="商品名称" class="col-xs-10 col-sm-5" />
                        </div>
                    </div>


                    <div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> 是否显示 </label>

                        <div class="col-sm-9">
                            <input type="radio" name="scha" value="1" checked/>是
                            <input type="radio" name="scha" value="0"/>否
                        </div>
                    </div>

                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-3"> 客户名称 </label>

                        <div class="col-sm-9">
                            <input type="text" id="form-field-3" name="sname" class="col-xs-10 col-sm-5" />
                        </div>
                    </div>

                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" for="form-field-4"> 客户编码 </label>

                        <div class="col-sm-9">
                            <input type="text" id="form-field-4" name="ser" class="col-xs-10 col-sm-5" />
                        </div>
                    </div>


                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" > 客户简称 </label>

                        <div class="col-sm-9">
                            <input type="text" id="form-field-5"   name="snames" class="col-xs-10 col-sm-5">

                        </div>
                    </div>

                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" > 电话 </label>

                        <div class="col-sm-9">
                            <input type="tel"  id="form-field-6"  name="stel" class="col-xs-10 col-sm-5">

                        </div>
                    </div>


                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" > 传真 </label>

                        <div class="col-sm-9">
                            <input type="text" id="form-field-7" name="sfax" class="col-xs-10 col-sm-5">

                        </div>
                    </div>

                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" >网址 </label>

                        <div class="col-sm-9">
                            <input type="text" id="form-field-8" class="col-xs-10 col-sm-5" name="slog">
                        </div>
                    </div>

                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" > 电子邮件 </label>

                        <div class="col-sm-9">
                            <input type="text" id="form-field-9" class="col-xs-10 col-sm-5" name="semail">
                        </div>
                    </div>

                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" > 地区 </label>

                        <div class="col-sm-9">
                            <select name="shod">
                                <option value="北京">北京</option>
                                <option value="上海">上海</option>
                                <option value="河北">河北</option>
                                <option value="广东">广东</option>
                            </select>

                        </div>
                    </div>

                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" > 邮政编码 </label>

                        <div class="col-sm-9">
                            <input type="text" id="form-field-9" class="col-xs-10 col-sm-5" name="spos">
                        </div>
                    </div>
                    <div class="space-4"></div>

                    <div class="space-4"></div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" > 详细地址 </label>

                        <div class="col-sm-9">
                           <textarea name="site"></textarea>
                        </div>
                    </div>
                    <div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" > 客户来源 </label>

                        <div class="col-sm-9">
                            <select name="scust">
                                <option value="新闻">新闻</option>
                                <option value="娱乐">娱乐</option>
                                <option value="体育">体育</option>
                                <option value="学校">学校</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" > 客户类别</label>

                        <div class="col-sm-9">
                            <select name="scul">
                                <option value="潜在客户">潜在客户</option>
                                <option value="关注客户">关注客户</option>
                                <option value="重要客户">重要客户</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" > 销售方式</label>

                        <div class="col-sm-9">
                            <select name="sales">
                                <option value="零售">零售</option>
                                <option value="批发">批发</option>
                                <option value="清仓">清仓</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" > 行业属性</label>

                        <div class="col-sm-9">
                            <select name="busin">
                                <option value="建筑行业">建筑行业</option>
                                <option value="娱乐行业">娱乐行业</option>
                                <option value="体育行业">体育行业</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" > 企业性质</label>

                        <div class="col-sm-9">
                            <select name="bush">
                                <option value="国家事业单位">国家事业单位</option>
                                <option value="私有公司单位">私有公司单位</option>
                                <option value="教育单位">教育单位</option>

                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" > 企业描述 </label>

                        <div class="col-sm-9">
                            <textarea name="busz"></textarea>
                        </div>
                    </div>
                    <div class="space-4"></div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label no-padding-right" > 备注 </label>

                        <div class="col-sm-9">
                            <textarea name="sdesc"></textarea>
                        </div>
                    </div>
                    <div class="space-4"></div>

                    <div class="clearfix form-actions">
                        <div class="col-md-offset-3 col-md-9">
                            <button class="btn btn-info" type="submit">
                                <i class="icon-ok bigger-110"></i>
                                增加
                            </button>

                            &nbsp; &nbsp; &nbsp;
                            <button class="btn" type="reset">
                                <i class="icon-undo bigger-110"></i>
                                重置
                            </button>
                        </div>
                    </div>

                    <div class="hr hr-24"></div>



                </form>
            </div><!-- /span -->
        </div><!-- /row -->

    </div><!-- /.page-content -->
</div>

<script type="text/javascript">

    //实例化编辑器
    //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
    var ue = UE.getEditor('form-field-6');
</script>
@endsection('content')
<div class="sidebar" id="sidebar">
    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
    </script>

    <div class="sidebar-shortcuts" id="sidebar-shortcuts">

        <div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
            <span class="btn btn-success"></span>

            <span class="btn btn-info"></span>

            <span class="btn btn-warning"></span>

            <span class="btn btn-danger"></span>
        </div>
    </div><!-- #sidebar-shortcuts -->

    <ul class="nav nav-list">
        <li class="active">
            <a href="index.html">
                <i class="icon-dashboard"></i>
                <span class="menu-text"> 后台控制台 </span>
            </a>
        </li>

        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-desktop"></i>
                <span class="menu-text"> 客户信息管理 </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="{{url('cus/create')}}">
                        <i class="icon-double-angle-right"></i>
                        客户信息添加
                    </a>
                </li>

                <li>
                    <a href="{{url('cus/index')}}">
                        <i class="icon-double-angle-right"></i>
                        列表展示
                    </a>
                </li>
            </ul>
        </li>

        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-list"></i>
                <span class="menu-text"> 品牌管理 </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="{:url('Brand/create')}">
                        <i class="icon-double-angle-right"></i>
                        品牌添加
                    </a>
                </li>

                <li>
                    <a href="{:url('Brand/index')}">
                        <i class="icon-double-angle-right"></i>
                        品牌列表
                    </a>
                </li>

            </ul>
        </li>

        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-edit"></i>
                <span class="menu-text"> 分类管理 </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="{:url('Category/create')}">
                        <i class="icon-double-angle-right"></i>
                        分类添加
                    </a>
                </li>

                <li>
                    <a href="{:url('Category/index')}">
                        <i class="icon-double-angle-right"></i>
                        分类列表
                    </a>
                </li>

            </ul>
        </li>

        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-edit"></i>
                <span class="menu-text"> 管理员管理 </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="form-elements.html">
                        <i class="icon-double-angle-right"></i>
                        管理员添加
                    </a>
                </li>

                <li>
                    <a href="form-wizard.html">
                        <i class="icon-double-angle-right"></i>
                        管理员列表
                    </a>
                </li>

            </ul>
        </li>
        <li>
            <a href="#" class="dropdown-toggle">
                <i class="icon-edit"></i>
                <span class="menu-text"> 公告管理 </span>

                <b class="arrow icon-angle-down"></b>
            </a>

            <ul class="submenu">
                <li>
                    <a href="{:url('notice/create')}">
                        <i class="icon-double-angle-right"></i>
                        公告添加
                    </a>
                </li>

                <li>
                    <a href="{:url('notice/index')}">
                        <i class="icon-double-angle-right"></i>
                        公告列表
                    </a>
                </li>

            </ul>
        </li>
    </ul><!-- /.nav-list -->

    <div class="sidebar-collapse" id="sidebar-collapse">
        <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
    </div>

    <script type="text/javascript">
        try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
    </script>
</div>
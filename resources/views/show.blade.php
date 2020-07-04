<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <title>个人博客</title>
    <link rel="stylesheet" type="text/css" href="../res/layui/css/layui.css">
    <link rel="stylesheet" type="text/css" href="../res/css/main.css">
    <!--加载meta IE兼容文件-->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="header">
    <div class="menu-btn">
        <div class="menu"></div>
    </div>
    <h1 class="logo">
        <a href="/">
            <span>MYBLOG</span>
            <img src="../res/img/logo.png">
        </a>
    </h1>
    <div class="nav">
        <a href="/">文章</a>

    </div>
    <ul class="layui-nav header-down-nav">
        <li class="layui-nav-item"><a href="/" class="active">文章</a></li>

    </ul>
    <p class="welcome-text">
        欢迎来到<span class="name">小明</span>的博客~
    </p>
</div>


<div class="content whisper-content leacots-content details-content">
    <div class="cont w1000">
        <div class="whisper-list">
            <div class="item-box">
                <div class="review-version">
                    <div class="form-box">
                        <div class="article-cont">
                            <div class="title">
                                <h3>{{$article->title}}</h3>
                            </div>
                            <p>{{$article->content}}</p>
                            <div class="btn-box">
                                <button class="layui-btn layui-btn-primary">上一篇</button>
                                <button class="layui-btn layui-btn-primary">下一篇</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div id="demo" style="text-align: center;"></div>
    </div>
</div>
<div class="footer-wrap">
    <div class="footer w1000">
    </div>
</div>
<script type="text/javascript" src="../res/layui/layui.js"></script>
{{--<script type="text/html" id="laytplCont">--}}
{{--    <div class="cont">--}}
{{--        <div class="img">--}}
{{--            {{#  if(d.avatar){ }}--}}
{{--            <img src="{{d.avatar}}" alt="">--}}
{{--            {{#  } else { }}--}}
{{--            <img src="../res/img/header.png" alt="">--}}
{{--            {{# } }}--}}
{{--        </div>--}}
{{--        <div class="text">--}}
{{--            <p class="tit"><span class="name">{{d.name}}</span><span class="data">2018/06/06</span></p>--}}
{{--            <p class="ct">{{d.cont}}</p>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</script>--}}
<script type="text/javascript">
    layui.config({
        base: '../res/js/util/'
    }).use(['element','laypage','form','menu'],function(){
        element = layui.element,laypage = layui.laypage,form = layui.form,menu = layui.menu;
        laypage.render({
            elem: 'demo'
            ,count: 70 //数据总数，从服务端得到
        });
        menu.init();
        menu.submit();
    })
</script>
</body>
</html>

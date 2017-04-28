@extends('layouts.app')

@section('content')
    <!-- Static navbar -->
    <nav class="navbar1 navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <img src="/images/logo.png" />
                </a>
                <a class="navbar-brand" href="/">
                    非常有用的家装设计参考网——{{config('app.name')}}
                </a>
            </div>
            {{--<div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another action</a></li>
                            <li><a href="#">Something else here</a></li>
                            <li role="separator" class="divider"></li>
                            <li class="dropdown-header">Nav header</li>
                            <li><a href="#">Separated link</a></li>
                            <li><a href="#">One more separated link</a></li>
                        </ul>
                    </li>
                </ul>--}}
            <ul class="nav navbar-nav navbar-right">
                <li><a href="../navbar/"><i class="icon-about"></i>关于</a></li>
                <li><a href="./"><i class="icon-contact"></i>联系我们</a></li>
                <li><a href=""><i class="icon-submit"></i>投稿</a></li>
            </ul>
        </div><!--/.nav-collapse -->
        </div>
    </nav>

    <link href="{{ asset('css/index/index.css') }}" rel="stylesheet">
    <div class="container menu">
        <div>
            @foreach($menus as $menu)
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                <a href="{{getenv('APP_URL')}}/type/{{$menu->id}}">{{$menu->name}}</a>
            </div>
            @endforeach
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
                <a href="">更多</a>
            </div>
        </div>
    </div>
    <div class="container">
        @foreach($items as $item)
        <div class="container">
            <a class="title" href="{{getenv('APP_URL')}}/show/{{$item->id}}">
                {{$item->name}}
            </a>
            <div class="meta">
                <!-- 如果文章更新时间大于发布时间，那么使用 tooltip 显示更新时间 -->
                <span class="publish-time">{{$item->created_at}}</span>
                <span class="views-count">观看： {{$item->page_view}}次</span>
                {{--<span class="comments-count">评论 15</span>--}}
                <span class="share">
                    <i class="icon-share"></i> 分享
                </span>
            </div>
            <div class="show-content">
                <a id="js-img-border" href="{{getenv('APP_URL')}}/show/{{$item->id}}">
                    <img id="main-img-{{$item->id}}" width="100%" src="{{config("admin.upload.host")}}{{$item->images[0]->url}}">
                </a>
            </div>
            <div class="image-package">
                <a id="js-btn-prevPhoto" href="javascript:;" class="js-btn-changePhoto figure-area-arrow arrow-pre" style="top: 45%; display: block;">上一张</a>
                <a id="js-btn-nextPhoto" href="javascript:;" class="js-btn-changePhoto figure-area-arrow arrow-next arrow-next-hover" style="top: 45%; display: block;">下一张</a>
                <div id="js-thumbList-stage" class="photo_mini_img video-list clearfix" style="overflow: hidden; width: 100%;">
                    <ul id="js-thumbList-ctn" style="margin: 0 auto;">
                        @foreach($item->images as $image)
                        <li id="_slideView_minimapimg_li_0" style="width:190px;height:190px;" data-index="{{$item->id}}" data-pickey="NDR01OogMso841idy70LgwEAAAAAAAA!" class="js-thumb-item on" data-total-index="0">
                            <a href="javascript:void(0);" style="overflow:hidden;position:relative;" class="mini_img_link js_fade_in">
                                <img class="js-thumbNail-img" style="position: absolute; width: 190px;height: 190px; left: 0; top: 0;" id="_slideView_minimapimg_0" data-src="{{config("admin.upload.host")}}{{$image->url}}" src="{{config("admin.upload.host")}}{{$image->url}}">
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        @endforeach
    </div>
@endsection

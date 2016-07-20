
@extends('common.layout')
@section('TitleAndCss')
<title>show.php | トーク詳細</title>

<link rel="stylesheet" href="{{{asset('/assets/bootstrap/css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/font-awesome/css/font-awesome.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/style_pre_index.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/animate.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/style.css')}}}">

<!-- <link href="css/style_pre_index.css" rel="stylesheet"> -->
@stop

@section('content')
<div id="wrapper">
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src="{{{asset('/assets/img/about/1.jpg')}}}" />
                    </span>
                    <a class="dropdown-toggle" href="#">
                        <span class="clear"> 
                            <span class="block m-t-xs"> 
                                <strong class="font-bold">お名前</strong>
                            </span> 
                            <span class="text-muted text-xs block">職業とか自己紹介など。長い文章をここに書いたらどうらなるかな。職業とか自己紹介など。長い文章をここに書いたらどうらなるかな。職業とか自己紹介など。長い文章をここに書いたらどうらなるかな。職業とか自己紹介など。長い文章をここに書いたらどうらなるかな。</span>
                        </span>
                    </a>                        
                </div>
                <div class="dropdown profile-element">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <b class="caret"></b></span></span></a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li><a href="profile.html">プロフィール編集</a></li>
                            <li><a href="profile.html">パスワード編集</a></li>
                            <li><a href="profile.html">Email編集</a></li>
                            <li><a href="contacts.html">メッセージBOX</a></li>   
                            <li class="divider"></li>
                            <li><a href="login.html">ログアウト</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">
                        +ヒト
                    </div>
                </li>
                <li>
                    <a href="add"><i class="fa fa-plus"></i> <span class="nav-label">トーク作成</span></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-pencil"></i> <span class="nav-label">アカウント編集</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="graph_flot.html">プロフィール編集</a></li>
                        <li><a href="graph_morris.html">Email編集</a></li>
                        <li><a href="graph_rickshaw.html">パスワード編集</a></li>                       
                    </ul>
                </li>                
            </ul>
        </div>
    </nav>
    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">トーク詳細ページへようこそ</span>
                    </li>
                    <li>
                        <a href="/">
                            <i class="fa fa-home"></i>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-envelope"></i>  <span class="label label-warning">16</span>
                        </a>
                        <ul class="dropdown-menu dropdown-messages">
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a7.jpg">
                                    </a>
                                    <div class="media-body">
                                        <small class="pull-right">46h ago</small>
                                        <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/a4.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right text-navy">5h ago</small>
                                        <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                        <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="dropdown-messages-box">
                                    <a href="profile.html" class="pull-left">
                                        <img alt="image" class="img-circle" src="img/profile.jpg">
                                    </a>
                                    <div class="media-body ">
                                        <small class="pull-right">23h ago</small>
                                        <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                        <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="mailbox.html">
                                        <i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li>
                                <a href="mailbox.html">
                                    <div>
                                        <i class="fa fa-envelope fa-fw"></i> You have 16 messages
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="profile.html">
                                    <div>
                                        <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                        <span class="pull-right text-muted small">12 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="grid_options.html">
                                    <div>
                                        <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                        <span class="pull-right text-muted small">4 minutes ago</span>
                                    </div>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a href="notifications.html">
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>


                    <li>
                        <a href="login.html">
                            <i class="fa fa-sign-out"></i> Log out
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        <div class="row wrapper border-bottom white-bg page-heading">
            <div class="col-lg-9ƒ">
                <h2>トーク詳細</h2>
                <ol class="breadcrumb">
                    <li>
                        <a href="/">ホーム</a>
                    </li>
                    <li>
                        <a href="/mentor">トーク一覧</a>
                    </li>
                    <li class="active">
                        <strong>トーク詳細</strong>
                    </li>
                </ol>
            </div>
        </div>

        <div class="wrapper wrapper-content">
            <div class="row animated fadeInRight">
                <div class="col-md-4">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>話し手プロフィール</h5>
                        </div>
                        <div>
                            <div class="ibox-content no-padding border-left-right">
                                <img alt="image" class="img-responsive" src="{{{asset('/assets/img/backgrounds/3.jpg')}}}">
                            </div>
                            <div class="ibox-content profile-content">
                                <h4><strong>Monica Smith</strong></h4>
                                <p><i class="fa fa-map-marker"></i> Riviera State 32/106</p>
                                <h5>
                                    About me
                                </h5>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                                </p>

                                <div class="user-button">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-envelope"></i> メッセージを送る</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>トーク詳細</h5>
                        </div>
                        <div class="ibox-content">

                            <div>
                                <div class="feed-activity-list">
                                    <div class="feed-element">
                                        <h6>タイトル</h6>
                                        xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                                        <div class="photos">
                                            <a target="_blank" href="http://24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="{{{asset('/assets/img/p1.jpg')}}}"></a>
                                            <a target="_blank" href="http://37.media.tumblr.com/9afe602b3e624aff6681b0b51f5a062b/tumblr_n4ef69szs71st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="{{{asset('/assets/img/p3.jpg')}}}"></a>
                                        </div>
                                    </div>
                                    <div class="feed-element">
                                        <h6>詳細</h6>
                                        xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                                        xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                                        xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                                    </div>
                                    <div class="feed-element">
                                        <h6>価格</h6>
                                        xxxxxxxxxxxxxxxxxxxxxxxx  
                                    </div>
                                </div>

                                <button class="btn btn-primary btn-block m">予約リクエスト</button>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="footer">                       
                <div>
                    <strong>Copyright</strong> Example Company &copy; 2014-2015
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@stop

@section('Js')
<script src="{{{asset('/assets/js/jquery-2.1.1.js')}}}"></script>
<script src="{{{asset('/assets/bootstrap/js/bootstrap.min.js')}}}"></script>

<script src="{{{asset('/assets/js/plugins/metisMenu/jquery.metisMenu.js')}}}"></script>
<script src="{{{asset('/assets/js/plugins/slimscroll/jquery.slimscroll.min.js')}}}"></script>

<script src="{{{asset('/assets/js/inspinia.js')}}}"></script>
<script src="{{{asset('/assets/js/plugins/pace/pace.min.js')}}}"></script>
@stop

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
                        <img alt="image" class="img-circle" src="img/1.jpg" />
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
                        プロトタイプ
                    </div>
                </li>
<!-- <li>
<a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
<ul class="nav nav-second-level collapse">
<li><a href="index.html">Dashboard v.1</a></li>
<li><a href="dashboard_2.html">Dashboard v.2</a></li>
<li><a href="dashboard_3.html">Dashboard v.3</a></li>
<li><a href="dashboard_4_1.html">Dashboard v.4</a></li>
<li><a href="dashboard_5.html">Dashboard v.5 <span class="label label-primary pull-right">NEW</span></a></li>
</ul>
</li> -->
<li>
    <a href="layouts.html"><i class="fa fa-plus"></i> <span class="nav-label">トーク作成</span></a>
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
<!-- <form role="search" class="navbar-form-custom" action="search_results.html">
<div class="form-group">
<input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
</div>
</form> -->
</div>
<ul class="nav navbar-top-links navbar-right">
    <li>
        <span class="m-r-sm text-muted welcome-message">トーク詳細ページへようこそ</span>
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
        <h2>メンター一覧</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">ホーム</a>
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
                    <h5>Profile Detail</h5>
                </div>
                <div>
                    <div class="ibox-content no-padding border-left-right">
                        <img alt="image" class="img-responsive" src="img/profile_big.jpg">
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
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
                                </div>
                                <div class="col-md-6">
                                    <button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-coffee"></i> Buy a coffee</button>
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
                    <h5>Activites</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <div>
                        <div class="feed-activity-list">

                            <div class="feed-element">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a1.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">1m ago</small>
                                    <strong>Sandra Momot</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
                                    <div class="actions">
                                        <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                        <a class="btn btn-xs btn-danger"><i class="fa fa-heart"></i> Love</a>
                                    </div>
                                </div>
                            </div>

                            <div class="feed-element">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">5m ago</small>
                                    <strong>Monica Smith</strong> posted a new blog. <br>
                                    <small class="text-muted">Today 5:60 pm - 12.06.2014</small>

                                </div>
                            </div>

                            <div class="feed-element">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a2.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">2h ago</small>
                                    <strong>Mark Johnson</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                    <small class="text-muted">Today 2:10 pm - 12.06.2014</small>
                                    <div class="well">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                    </div>
                                    <div class="pull-right">
                                        <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                        <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                        <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                                    </div>
                                </div>
                            </div>
                            <div class="feed-element">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a3.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">2h ago</small>
                                    <strong>Janet Rosowski</strong> add 1 photo on <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 8:30am</small>
                                    <div class="photos">
                                        <a target="_blank" href="http://24.media.tumblr.com/20a9c501846f50c1271210639987000f/tumblr_n4vje69pJm1st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="img/p1.jpg"></a>
                                        <a target="_blank" href="http://37.media.tumblr.com/9afe602b3e624aff6681b0b51f5a062b/tumblr_n4ef69szs71st5lhmo1_1280.jpg"> <img alt="image" class="feed-photo" src="img/p3.jpg"></a>
                                    </div>
                                </div>
                            </div>
                            <div class="feed-element">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a4.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right text-navy">5h ago</small>
                                    <strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
                                    <div class="actions">
                                        <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                        <a class="btn btn-xs btn-white"><i class="fa fa-heart"></i> Love</a>
                                    </div>
                                </div>
                            </div>
                            <div class="feed-element">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a5.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">2h ago</small>
                                    <strong>Kim Smith</strong> posted message on <strong>Monica Smith</strong> site. <br>
                                    <small class="text-muted">Yesterday 5:20 pm - 12.06.2014</small>
                                    <div class="well">
                                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                                        Over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                                    </div>
                                    <div class="pull-right">
                                        <a class="btn btn-xs btn-white"><i class="fa fa-thumbs-up"></i> Like </a>
                                    </div>
                                </div>
                            </div>
                            <div class="feed-element">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/profile.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">23h ago</small>
                                    <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
                                    <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
                                </div>
                            </div>
                            <div class="feed-element">
                                <a href="#" class="pull-left">
                                    <img alt="image" class="img-circle" src="img/a7.jpg">
                                </a>
                                <div class="media-body ">
                                    <small class="pull-right">46h ago</small>
                                    <strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
                                    <small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
                                </div>
                            </div>
                        </div>

                        <button class="btn btn-primary btn-block m"><i class="fa fa-arrow-down"></i> Show More</button>

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

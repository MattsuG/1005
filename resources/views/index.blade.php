@extends('common.layout')
@section('TitleAndCss')
<title>TopPage</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100italic,300,300italic,400,400italic,500,500italic">
<link rel="stylesheet" href="{{{asset('/assets/bootstrap/css/bootstrap.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/font-awesome/css/font-awesome.min.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/animate.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/style.css')}}}">
<link rel="stylesheet" href="{{{asset('/assets/css/media-queries.css')}}}">
@stop

@section('content')
    	<div class="loader">
    		<div class="loader-img"></div>
    	</div>
				
        <!-- Top content -->
        <div class="top-content">
        	
        	<!-- Top menu -->
			<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="index.html">Marco - Bootstrap Landing Page</a>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="top-navbar-1">
						<ul class="nav navbar-nav navbar-right">
							<li><a class="scroll-link" href="#features">プロトタイプについて</a></li>
							<li><a class="scroll-link" href="#pricing">メンター検索</a></li>
							<li><a class="scroll-link" href="#about-us">ログイン</a></li>
							<li><a class="btn btn-link-2" href="#contact">サインアップ</a></li>
						</ul>
					</div>
				</div>
			</nav>
        	
            <div class="inner-bg">
                <div class="container">
                	
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1 class="wow fadeInLeftBig">プロトタイプです</h1>
                            <div class="description wow fadeInLeftBig">
                            	<p>
	                            	想い想いの進路を辿る人達から、具体性と熱量のある情報をそのままに聞けるプロジェクトです。
                            	</p>
                            </div>
                            <div class="subscribe wow fadeInUp">
	                			<form class="form-inline" role="form" action="assets/subscribe.php" method="post">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="subscribe-email">Email address</label>
			                        	<input type="text" name="email" placeholder="Enter your email..." class="subscribe-email form-control" id="subscribe-email">
			                        </div>
			                        <button type="submit" class="btn">Subscribe</button>
			                    </form>
			                    <div class="success-message"></div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
	                	<div class="col-sm-8 col-sm-offset-2 top-video-link medium-paragraph wow fadeInUp">
	                		<!-- <a href="#" class="launch-modal" data-modal-id="modal-how-it-works">
		                		<span class="top-video-link-icon"><i class="fa fa-play"></i></span>
		            			<span class="top-video-link-text">See how it works</span>
	                		</a> -->
	                	</div>
	                </div>
	                
	                <div class="row">
	                	<div class="col-sm-12 top-social wow fadeInUp">
	                		<a href="#"><i class="fa fa-facebook"></i></a> <span class="divider-2"></span> 
							<a href="#"><i class="fa fa-twitter"></i></a> <span class="divider-2"></span> 
							<a href="#"><i class="fa fa-google-plus"></i></a> <span class="divider-2"></span> 
							<a href="#"><i class="fa fa-instagram"></i></a> <span class="divider-2"></span> 
							<a href="#"><i class="fa fa-pinterest"></i></a>
	                	</div>
	                </div>
                    
                </div>
            </div>
        </div>    
        <!-- How it works -->
        <div class="how-it-works-container section-container section-container-image-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 how-it-works section-description wow fadeIn">
	                    <h2>使い方</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>
	            <div class="row">
                	<div class="col-sm-4 col-sm-offset-1 how-it-works-box wow fadeInUp">
	                	<div class="how-it-works-box-icon">
	                		<span aria-hidden="true" class="typcn typcn-pencil"></span>
	                		<span aria-hidden="true" class="how-it-works-step">1</span>
	                	</div>
	                    <h3>サインアップ</h3>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2 how-it-works-box wow fadeInDown">
	                	<div class="how-it-works-box-icon">
	                		<span aria-hidden="true" class="typcn typcn-compass"></span>
	                		<span aria-hidden="true" class="how-it-works-step">2</span>
	                	</div>
	                    <h3>話を聞きたい人を検索</h3>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1 how-it-works-box wow fadeInUp">
	                	<div class="how-it-works-box-icon">
	                		<span aria-hidden="true" class="typcn typcn-calendar"></span>
	                		<span aria-hidden="true" class="how-it-works-step">3</span>
	                	</div>
	                    <h3>日時を予約</h3>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
                    <div class="col-sm-4 col-sm-offset-2 how-it-works-box wow fadeInDown">
	                	<div class="how-it-works-box-icon">
	                		<span aria-hidden="true" class="typcn typcn-headphones"></span>
	                		<span aria-hidden="true" class="how-it-works-step">4</span>
	                	</div>
	                    <h3>話を聞く</h3>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et.</p>
                    </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 section-bottom-button wow fadeInUp">
                        <a class="btn btn-link-1 scroll-link" href="#pricing">詳しい使い方</a>
	            	</div>
	            </div>
	        </div>
        </div>

		<!-- Pricing -->
        <div class="pricing-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 pricing section-description wow fadeIn">
	                    <h2>人気のメンター</h2>
	                </div>
	            </div>
	            <div class="row">              
                    <div class="col-sm-4 pricing-box pricing-box-best wow fadeInDown">
                    	<div class="pricing-box-inner">
		                	<div class="pricing-box-price">
		                	<img src="{{{asset('/assets/img/about/1.jpg')}}}" alt="">
		                	</div>
		                    <h3>タイトル</h3>
		                    <h4>概要を記入。文章が長くなった場合はどうなるか。文章が長くなった場合はどうなるか文章が長くなった場合はどうなるか。</h4>
		                    <div class="pricing-box-features">
		                    	<ul>
		                    		<li>その他箇条書きにできるもの</li>
		                    		<li>その他箇条書きにできるもの</li>		                    	
		                    	</ul>
		                    </div>
		                    <div class="pricing-box-sign-up">
		                    	<a class="btn btn-link-1" href="#">メッセージ</a>
		                    </div>
		                </div>
                    </div>
                    <div class="col-sm-4 pricing-box pricing-box-best wow fadeInDown">
                    	<div class="pricing-box-inner">
		                	<div class="pricing-box-price">
		                	<img src="{{{asset('/assets/img/about/1.jpg')}}}" alt="">
		                	</div>
		                    <h3>タイトル</h3>
		                    <h4>概要を記入。文章が長くなった場合はどうなるか。文章が長くなった場合はどうなるか文章が長くなった場合はどうなるか。</h4>
		                    <div class="pricing-box-features">
		                    	<ul>
		                    		<li>その他箇条書きにできるもの</li>
		                    		<li>その他箇条書きにできるもの</li>		                    	
		                    	</ul>
		                    </div>
		                    <div class="pricing-box-sign-up">
		                    	<a class="btn btn-link-1" href="#">メッセージ</a>
		                    </div>
		                </div>
                    </div>
                    <div class="col-sm-4 pricing-box pricing-box-best wow fadeInDown">
                    	<div class="pricing-box-inner">
		                	<div class="pricing-box-price">
		                	<img src="{{{asset('assets/img/about/1.jpg')}}}" alt="">
		                	</div>
		                    <h3>タイトル</h3>
		                    <h4>概要を記入。文章が長くなった場合はどうなるか。文章が長くなった場合はどうなるか文章が長くなった場合はどうなるか。</h4>
		                    <div class="pricing-box-features">
		                    	<ul>
		                    		<li>その他箇条書きにできるもの</li>
		                    		<li>その他箇条書きにできるもの</li>		                    	
		                    	</ul>
		                    </div>
		                    <div class="pricing-box-sign-up">
		                    	<a class="btn btn-link-1" href="#">メッセージ</a>
		                    </div>
		                </div>
                    </div>
                    <div class="col-sm-4 pricing-box pricing-box-best wow fadeInDown">
                    	<div class="pricing-box-inner">
		                	<div class="pricing-box-price">
		                	<img src="{{{asset('/assets/img/about/1.jpg')}}}" alt="">
		                	</div>
		                    <h3>タイトル</h3>
		                    <h4>概要を記入。文章が長くなった場合はどうなるか。文章が長くなった場合はどうなるか文章が長くなった場合はどうなるか。</h4>
		                    <div class="pricing-box-features">
		                    	<ul>
		                    		<li>その他箇条書きにできるもの</li>
		                    		<li>その他箇条書きにできるもの</li>		                    	
		                    	</ul>
		                    </div>
		                    <div class="pricing-box-sign-up">
		                    	<a class="btn btn-link-1" href="#">メッセージ</a>
		                    </div>
		                </div>
                    </div>
                    <div class="col-sm-4 pricing-box pricing-box-best wow fadeInDown">
                    	<div class="pricing-box-inner">
		                	<div class="pricing-box-price">
		                	<img src="{{{asset('/assets/img/about/1.jpg')}}}" alt="">
		                	</div>
		                    <h3>タイトル</h3>
		                    <h4>概要を記入。文章が長くなった場合はどうなるか。文章が長くなった場合はどうなるか文章が長くなった場合はどうなるか。</h4>
		                    <div class="pricing-box-features">
		                    	<ul>
		                    		<li>その他箇条書きにできるもの</li>
		                    		<li>その他箇条書きにできるもの</li>		                    	
		                    	</ul>
		                    </div>
		                    <div class="pricing-box-sign-up">
		                    	<a class="btn btn-link-1" href="#">メッセージ</a>
		                    </div>
		                </div>
                    </div>
                    <div class="col-sm-4 pricing-box pricing-box-best wow fadeInDown">
                    	<div class="pricing-box-inner">
		                	<div class="pricing-box-price">
		                	<img src="{{{asset('/assets/img/about/1.jpg')}}}" alt="">
		                	</div>
		                    <h3>タイトル</h3>
		                    <h4>概要を記入。文章が長くなった場合はどうなるか。文章が長くなった場合はどうなるか文章が長くなった場合はどうなるか。</h4>
		                    <div class="pricing-box-features">
		                    	<ul>
		                    		<li>その他箇条書きにできるもの</li>
		                    		<li>その他箇条書きにできるもの</li>		                    	
		                    	</ul>
		                    </div>
		                    <div class="pricing-box-sign-up">
		                    	<a class="btn btn-link-1" href="#">もっとみる</a>
		                    </div>
		                </div>
                    </div>
	            </div>
	        </div>
        </div>
        
        <!-- Call to action -->
        <!-- <div class="call-to-action-container section-container section-container-image-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 call-to-action section-description wow fadeInLeftBig">
	                    <h2>Call to action</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                    <p>
	                    	Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut 
	                    	aliquip ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud.
	                    </p>
	                </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-12 section-bottom-button wow fadeInUp">
                        <a class="btn btn-link-1 scroll-link" href="#pricing">Choose your package</a>
	            	</div>
	            </div>
	        </div>
        </div> -->
        
        <!-- About us -->
     <!--    <div class="about-us-container section-container">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 about-us section-description wow fadeIn">
	                    <h2>About us</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-4 about-us-box wow fadeInUp">
		                <div class="about-us-photo">
		                	<img src="{{{asset('/assets/img/about/1.jpg')}}}" alt="" data-at2x="assets/img/about/1.jpg')}}}">
		                	<div class="about-us-role">Marketing</div>
		                </div>
	                    <h3>John Doe</h3>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
	                    <div class="about-us-social">
		                	<a href="#"><span class="typcn typcn-social-facebook"></span></a>
		                	<a href="#"><span class="typcn typcn-social-dribbble"></span></a>
		                    <a href="#"><span class="typcn typcn-social-twitter"></span></a>
		                </div>
	                </div>
	                <div class="col-sm-4 about-us-box wow fadeInDown">
		                <div class="about-us-photo">
		                	<img src="{{{asset('/assets/img/about/2.jpg')}}}" alt="" data-at2x="assets/img/about/2.jpg')}}}">
		                	<div class="about-us-role">Designer</div>
		                </div>
	                    <h3>Tim Brown</h3>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
	                    <div class="about-us-social">
		                	<a href="#"><span class="typcn typcn-social-facebook"></span></a>
		                	<a href="#"><span class="typcn typcn-social-dribbble"></span></a>
		                    <a href="#"><span class="typcn typcn-social-twitter"></span></a>
		                </div>
	                </div>
	                <div class="col-sm-4 about-us-box wow fadeInUp">
		                <div class="about-us-photo">
		                	<img src="{{{asset('/assets/img/about/3.jpg')}}}" alt="" data-at2x="assets/img/about/3.jpg')}}}">
		                	<div class="about-us-role">Developer</div>
		                </div>
	                    <h3>Sarah Red</h3>
	                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</p>
	                    <div class="about-us-social">
		                	<a href="#"><span class="typcn typcn-social-facebook"></span></a>
		                	<a href="#"><span class="typcn typcn-social-dribbble"></span></a>
		                    <a href="#"><span class="typcn typcn-social-twitter"></span></a>
		                </div>
	                </div>
	            </div>
	        </div>
        </div> -->

        <!-- Testimonials -->
        <div class="testimonials-container section-container section-container-image-bg">
	        <div class="container">
	            <div class="row">
	                <div class="col-sm-12 testimonials section-description wow fadeIn">
	                    <h2>コンセプト</h2>
	                    <div class="divider-1 wow fadeInUp"><span></span></div>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1 testimonial-list wow fadeInUp">
	                	<div role="tabpanel">
	                		<!-- Tab panes -->
	                		<div class="tab-content">
	                			<div role="tabpanel" class="tab-pane fade in active" id="tab1">
	                				<div class="testimonial-image">
	                					<img src="{{{asset('/assets/img/testimonials/1.jpg')}}}" alt="" data-at2x="assets/img/testimonials/1.jpg')}}}">
	                					<div class="testimonial-icon">
	                						<span aria-hidden="true" class="typcn typcn-pin"></span>
	                					</div>
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwww"<br>
		                                	<a href="#">wwwwwwwwwwwwww, wwwwww.co.uk</a>
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab2">
	                				<div class="testimonial-image">
	                					<img src="{{{asset('/assets/img/testimonials/2.jpg')}}}" alt="" data-at2x="assets/img/testimonials/2.jpg')}}}">
	                					<div class="testimonial-icon">
	                						<span aria-hidden="true" class="typcn typcn-pin"></span>
	                					</div>
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
		                                	xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
		                                	xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx"<br>
		                                	<a href="#">xxxxxxxxxxx, xxxxxxxxxxxx.com</a>
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab3">
	                				<div class="testimonial-image">
	                					<img src="{{{asset('/assets/img/testimonials/3.jpg')}}}" alt="" data-at2x="assets/img/testimonials/3.jpg')}}}">
	                					<div class="testimonial-icon">
	                						<span aria-hidden="true" class="typcn typcn-pin"></span>
	                					</div>
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
		                                	yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
		                                	yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy"<br>
		                                	<a href="#">yyyyyyyyyy, yyyyyy.co.uk</a>
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab4">
	                				<div class="testimonial-image">
	                					<img src="{{{asset('/assets/img/testimonials/4.jpg')}}}" alt="" data-at2x="assets/img/testimonials/4.jpg')}}}">
	                					<div class="testimonial-icon">
	                						<span aria-hidden="true" class="typcn typcn-pin"></span>
	                					</div>
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz
		                                	zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz
		                                	zzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzzz"<br>
		                                	<a href="#">zzzzzzzzzzzzzzzzzzzzz, zzzzzzzzzzz.com</a>
		                                </p>
	                                </div>
	                			</div>
	                		</div>
	                		<!-- Nav tabs -->
	                		<ul class="nav nav-tabs" role="tablist">
	                			<li role="presentation" class="active">
	                				<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
	                			</li>
	                		</ul>
	                	</div>
	                </div>
	            </div>
	        </div>
        </div>    
        <!-- Footer -->
        <footer>
	        <div class="container">
	        	<div class="row">
	        		<div class="col-sm-4 footer-about wow fadeInUp">
	        			<h3>About Us</h3>
	        			<p>
	        				具体性、現場感、これまでに話すこのとなかった人からの情報。		
	        			</p>
	        			<p>
                    		<a class="scroll-link" href="#about-us">Learn More</a>
                    	</p>
                    </div>
	        		<div class="col-sm-4 footer-contact-info wow fadeInDown">
	        			<h3>Contact Info</h3>
	                	<p><i class="fa fa-map-marker"></i> xxxxxxxxxxxxx</p>
	                	<p><i class="fa fa-envelope"></i> Email: <a href="xxxx@gmail.com">xxxxxxxxx@gmail.</a></p>	             
                    </div>
                    <div class="col-sm-4 footer-social wow fadeInUp">
                    	<h3>We're Social</h3>
                    	<p>
	                    	<a href="#"><i class="fa fa-facebook"></i></a> 
							<a href="#"><i class="fa fa-twitter"></i></a>  
							<a href="#"><i class="fa fa-instagram"></i></a> 							
						</p>
                    </div>
	            </div>
	            <div class="row">
           			<div class="col-sm-6 footer-copyright">
                    	&copy; All right reserved by <a href="">xxxxxxx</a>
                    </div>
           			<div class="col-sm-6 footer-menu">
                    	<ul>
                    		<li><a class="scroll-link" href="#top-content">トップ</a></li>
							<li><a href="#">利用規約</a></li>
							<li><a href="#">個人情報の取扱</a></li>
						</ul>
                    </div>
           		</div>
	        </div>
        </footer>
        
        
        <!-- MODAL: How it works -->
        <div class="modal fade" id="modal-how-it-works" tabindex="-1" role="dialog" aria-labelledby="modal-how-it-works-label" aria-hidden="true">
        	<div class="modal-dialog">
        		<div class="modal-content">
        			<div class="modal-header">
        				<button type="button" class="close" data-dismiss="modal">
        					<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
        				</button>
        			</div>
        			<div class="modal-body">
        				<div class="modal-video">
	        				<div class="embed-responsive embed-responsive-16by9">
			                    <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/84910153?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=42bfc2" 
			                    			webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
			                </div>
		                </div>
        			</div>
        		</div>
        	</div>
        </div>
@stop

@section('Js')
<script src="{{{asset('/assets/js/jquery-1.11.1.min.js')}}}"></script>
<script src="{{{asset('/assets/bootstrap/js/bootstrap.min.js')}}}"></script>
<script src="{{{asset('assets/js/jquery.backstretch.min.js')}}}"></script>
<script src="{{{asset('/assets/js/wow.min.js')}}}"></script>
<script src="{{{asset('/assets/js/retina-1.1.0.min.js')}}}"></script>
<script src="{{{asset('assets/js/scripts.js')}}}"></script>
@stop

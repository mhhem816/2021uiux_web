<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>



    <section id="featured">
      <!-- start slider -->
      <div id="slider" class="sl-slider-wrapper demo-2">
        <div class="sl-slider">
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1">
              </div>
              <h2><strong>채러티</strong> 비즈니스테마</h2>
              <blockquote>
                <p>
                   글로벌 네트워크 기반으로 혁신적인 사업 개발과 발전을 하며 미래성장의 원동력이 되는 기업으로 노력하고 성장하겠습니다. 
                </p>
                <cite>read more</cite>
              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2">
              </div>
              <h2><strong>채러티</strong> 비즈니스테마</h2>
              <blockquote>
                <p>
                   글로벌 네트워크 기반으로 혁신적인 사업 개발과 발전을 하며 미래성장의 원동력이 되는 기업으로 노력하고 성장하겠습니다. 
                </p>
                <cite>read more</cite>
              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3">
              </div>
              <h2><strong>채러티</strong> 비즈니스테마</h2>
              <blockquote>
                <p>
                   글로벌 네트워크 기반으로 혁신적인 사업 개발과 발전을 하며 미래성장의 원동력이 되는 기업으로 노력하고 성장하겠습니다. 
                </p>
                <cite>Aread more</cite>
              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4">
              </div>
              <h2><strong>채러티</strong> 비즈니스테마</h2>
              <blockquote>
                <p>
                   글로벌 네트워크 기반으로 혁신적인 사업 개발과 발전을 하며 미래성장의 원동력이 되는 기업으로 노력하고 성장하겠습니다. 
                </p>
                <cite>read more</cite>
              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5">
              </div>
              <h2><strong>채러티</strong> 비즈니스테마</h2>
              <blockquote>
                <p>
                   글로벌 네트워크 기반으로 혁신적인 사업 개발과 발전을 하며 미래성장의 원동력이 되는 기업으로 노력하고 성장하겠습니다. 
                </p>
                <cite>read more</cite>
              </blockquote>
            </div>
          </div>
        </div>
        <!-- /sl-slider -->
        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>
      </div>
      <!-- /slider-wrapper -->
      <!-- end slider -->
    </section>
    <section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                <h3>그누보드5.4 기반의  <span class="highlight"><strong>반응형</strong></span> 홈페이지 테마!</h3>
              </div>
              <div class="cta floatright">
                <a class="btn btn-large btn-theme btn-rounded" href="#">Request a quote</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="font-icon-grid-large icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>사업영역</h6>
                    <p>
                      간략한 소개글을 입력하세요.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-leaf icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>연혁</h6>
                    <p>
                      지나온 발자취입니다.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-quote-left icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>대표인사말</h6>
                    <p>
                      방문하신 여러분을 환영합니다.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="font-icon-map-marker-2 icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>오시는길</h6>
                    <p>
                      오시는길을 안내합니다.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->


		<section id="content">
		  <div class="container">
			<div class="row">
			<!--  최신글 기본게시판 { -->
			<?php echo latest('theme/cb_basic', 'free', 5, 24); ?>
			<!-- } 최신글 기본게시판 -->  
			<!--  최신글 FAQ { -->
			<?php echo latest('theme/cb_basic', 'qa', 5, 24); ?>
			<!-- } 최신글 FAQ  -->  
			<!--  최신글 QnA { -->
			<?php echo latest('theme/cb_basic', 'qna', 5, 24); ?>
			<!-- } 최신글 QnA -->  
			</div>
			<!-- divider -->
			<div class="row">
			  <div class="span12">
				<div class="solidline">
				</div>
			  </div>
			</div>
			<!-- end divider -->
		  </div>
		</section>


        <!-- Portfolio Projects -->
        <div class="row">
		<!--  최신글 갤러리 { -->
		<?php echo latest('theme/cb_pic_block', 'gallery', 8, 24); ?>
		<!-- } 최신글 갤러리 -->           
        </div>
        <!-- End Portfolio Projects -->


		<!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <!-- Descriptions -->
        <div class="row">
          <div class="span6">
			<!--  최신글 공지사항 { -->
			<?php echo latest('theme/cb_notice', 'free', 5, 24); ?>
			<!-- } 최신글 공지사항 --> 
          </div>
          <!-- Horizontal Description -->
          <div class="span6">
			<!--  최신글 웹진 { -->
			<?php echo latest('theme/cb_webzine', 'webzine', 2, 24); ?>
			<!-- } 최신글 웹진 --> 
          </div>
        </div>




        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <div class="row">
		<!--  최신글 클라이언츠 { -->
		<?php echo latest('theme/cb_clients', 'clients', 8, 24); ?>
		<!-- } 최신글 클라이언츠 --> 
        </div>
      </div>
    </section>
    <section id="bottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div id="twitter-wrapper">
                <div id="twitter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


<?php
include_once(G5_THEME_PATH.'/tail.php');
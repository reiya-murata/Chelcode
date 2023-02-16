<?php get_header();?>
  <!-- 1st-section -->
  <section class="sec-1" id="home">
    <div class="container-1">
      <img src="<?php bloginfo("template_url");?>/img/1353454.jpg" alt="">
      <div class="content">
        <div class="loader">
          <span class="ling1"></span>
          <span class="ling2"></span>
          <span class="ling3"></span>
          <h4 class="nowloading">Now  loading...</h4>
        </div>
        <div class="main">
          <div class="top">
          <h1 class="chelcode">Chel<span  class="purple">Code</span></h1>
          <h2>portfolio site</h2>
          <a href="https://twitter.com/Rachel_hkz"  class="ps-pe-3"><box-icon type="logo"  name="twitter" ></box-icon></a>
          <a href="https://github.com/reiya-murata"><box-icon type="logo"   name="github" ></box-icon></a>
          <br><h3>HP制作・LP制作</h3>
          <h3>コーディング業務</h3>
          <h3>WordPressサイト制作</h3>
          <br><h2>お気軽にお問い合わせください!!</h2>
          <button type="button"><a href="#contact">お問い合わせはこちら➡</a>
          </button>
          <!-- 制作実績 -->
          <section class="work_list">
            <div class="head">制作実績</div>
            <div class="news_list">
              <?php
              $args=array(
                "post_type"=>"works",//投稿タイプスラッグ
                "post_per_page"=>3
              );
              $the_query=new WP_Query($args);
              if($the_queary->have_post()):
              ?>
              <ul>
                <?php while($the_query->have_posts()):$the_query->the_post();?>
                <li>
                <a href="<?php the_parmalink();?>">
                <div class="img"><img src="<?php echo CFS()->get("thumbnail");?>"></div>
                <div class="client">クライアント:<?php echo CFS()->get("client");?></div>
                </a>
                </li>
                <?php endwhile;?>
            </ul>
              <?php wp_reset_postdata();?>
              <?php else:?>
              <?php endif;?>
              <div class="btn_stn"><a href="<?php bloginfo('url');?>/works">一覧を見る</a></div>
            </div>
          </section>

          <!-- お知らせ -->
          <div class="news">
            <ul>

            <?php if (have_post()):while(have_post()):the_post();?>

            <li><a href="<?php the_parmalink();?>">
              <div class="dete"><?php echo get_the_date("Y.m.d");?>  
              </div>
              <div class="ttl"><?php the_title();?>
              </div>
              </a>
            </li>

            <?php endwhile;endif;?>

            </ul>
          </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php get_footer();?>

<section class="section section-banner" href="#">
<!-- <section style="background-image: linear-gradient(rgba(255,255,255,0.5), rgba(255,255,255,0.5)), url(<?=base_url()?>assets_tv/images/banner/banner_tb.png);"> -->
  <!-- <img src="<?=base_url()?>assets_tv/images/banner/foreground-01-1600x310.png" srcset="<?=base_url()?>assets_tv/images/banner/foreground-01-1600x310.png 1x, <?=base_url()?>assets_tv/images/banner/foreground-01-3200x620.png 2x" alt="" width="1600" height="310"> -->
  
        <!-- <div class=""> -->
        <div class="owl-carousel owl-carousel-bio" data-loop="true" data-items="1" data-sm-items="1" data-md-items="2" data-lg-items="2" data-xl-items="3" data-xxl-items="4" data-autoplay="true" data-dots="false" data-nav="true" data-stage-padding="0" data-margin="0" data-nav-text="[&quot;prev&quot;,&quot;next&quot;]">
          
          <!-- <div class="box-bio">
            <div class="box-bio-body">
              <a href="" target="_blank">
                <img class="slide-tb" src="<?=base_url()?>assets_tv/images/slide/banner1.webp" alt="<?=$vbanner->title?>">
              </a>
            </div>
          </div> -->

          <?php
            foreach ($banner as $keyb => $vbanner) {
          ?>

          <div class="box-bio">
            <div class="box-bio-body">
              <a href="<?=$vbanner->link?>" target="<?=$vbanner->target?>">
                <img class="slide-tb" src="<?=$vbanner->image_slide?>" alt="<?=$vbanner->title?>">
              </a>
            </div>
          </div>

          <?php } ?>

        </div>
        <!-- </div> -->

</section>

      <section class="section section-tb bg-default text-center">
        <div id="ctnHeader" class="container">
          <!-- <h6 class="text-gray-600">TV streaming from multiple channels</h6>
          <h2>TV STREAMING</h2> -->

          <style>
            
          </style>

          <div class="tab-column pb-tab">
              <div class="row">
                <div class="column_tb_3">
                  <a id="corner-1" href="javascript:void(0)">
                    <img style="float:left!important" src="<?=base_url()?>assets_tv/images/tv/energy_corner.png" alt=""/>
                  </a>
                </div>
                <div class="column_tb_3">
                  <a id="corner-2" href="javascript:void(0)">
                    <img class="image_center" src="<?=base_url()?>assets_tv/images/tv/mitra_corner.png" alt=""/>
                  </a>
                </div>
                <div class="column_tb_3">
                  <a id="corner-3" href="javascript:void(0)">
                    <img style="float:right!important" src="<?=base_url()?>assets_tv/images/tv/umkm_corner.png" alt=""/>
                  </a>
                </div>
              </div>
            </div>

          <!--Bootstrap tabs-->
          <div class="tabs-custom tabs-vertical tabs-video" id="tabs-2">
            <!--Tab panes-->


            <div class="tab-content">

              <div class="tab-pane show active" id="tabs-2-5">
                <div id="vid-bg" class="entry-video hls-embed-responsive embed-responsive-16by9">
                  <iframe id="frame-1" class="frame-video" width="660" height="365" src="https://www.youtube.com/embed/xI0N1WUk840" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>

              <div class="tab-pane" id="tabs-2-6">
                <div id="vid-bg" class="entry-video hls-embed-responsive embed-responsive-16by9">
                  <iframe id="frame-2" class="frame-video" width="660" height="365" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>

              <div class="tab-pane" id="tabs-2-7">
                <div id="vid-bg" class="entry-video hls-embed-responsive embed-responsive-16by9">
                  <iframe id="frame-3" class="frame-video" width="660" height="365" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>

              <div class="tab-pane" id="tabs-2-24">
                <div id="vid-bg" class="entry-video hls-embed-responsive embed-responsive-16by9">
                  <iframe id="frame-24" class="frame-video" width="660" height="365" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>
              
              <?php
                // $url_host = [];
                foreach ($live_tv as $key => $value) {
                  // $external_url = $value->link_video;
                  // $url_host = substr(strrchr($external_url, "."), 1);

                  // echo $url_host;

                  // if($url_host == 'm3u8'){
              ?>

              <div class="tab-pane fade" id="tabs-2-<?=$value->code_video?>">
                <div id="vid-bg" class="entry-video hls-embed-responsive embed-responsive-16by9">
                    <video
                      id="hls-example-<?=$value->code_video?>"
                      class="video-js vjs-default-skin"
                      width="2000"
                      height="400"
                      controls
                      poster="<?=base_url()?>assets_tv/images/tv/<?=$value->poster_video?>"
                    >
                      <source
                        type="application/x-mpegURL"
                        src="<?=$value->link_video?>"
                      />
                    </video>
                </div>
              </div>

              <?php
                // }else {
              ?>

                <!-- <div class="tab-pane" id="tabs-2-<?=$value->code_video?>">
                  <div id="vid-bg" class="entry-video hls-embed-responsive embed-responsive-16by9">
                    <iframe id="frame-<?=$value->code_video?>" class="frame-video" width="660" height="365" src="<?=$value->link_video?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                  </div>
                </div> -->

              <?php
                //  }
                }
              ?>

              

              <?php
                foreach ($video_tv as $keys => $img_video) {
              ?>

              <div class="tab-pane v-video" id="tabs-2-<?=$img_video->code_video?>" data-cvideo="<?=$img_video->code_video?>">
                <div id="vid-bg" class=" entry-video hls-embed-responsive embed-responsive-16by9">
                  <iframe id="frame-<?=$img_video->code_video?>" class="frame-video" width="660" height="365" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
              </div>

              <?php } ?>

              <!-- <div id="texter"></div> -->

            </div>
          </div>
        </div>
      </section>
      
      <div class="container">
        <div class="text-center" style="padding: 20px 0px 10px 0px;">
          <h6 class="text-gray-600">Live TV</h6>
        </div>
      </div>
      
      <!-- <section class="section" data-lightgallery="group"> -->
        <div class="tab-column">
            <div class="row">

            <?php
              foreach ($live_tv as $keys => $value_tv) {
            ?>  
            
              <div class="column_tb" role="presentation" data-code="<?=$value_tv->code_video?>">
                <div class="nav nav-tabs">
                  <div class="nav-item" role="presentation">
                    <a id="myAnchor-<?=$value_tv->code_video?>" class="nav-link" href="#tabs-2-<?=$value_tv->code_video?>" data-toggle="tab" data-key="<?=$value_tv->code_video?>" data-name="<?=$value_tv->nama_video?>" data-url="<?=$value_tv->link_video?>" data-poster="<?=$value_tv->poster_video?>" data-logo="<?=$value_tv->logo_video?>">
                      <div class="nav-video">
                        <figure class="nav-video-figure">
                          <img src="<?=base_url()?>assets_tv/images/tv/<?=$value_tv->logo_video?>" alt=""/>
                        </figure>
                      </div>
                    </a>
                  </div>
                </div>
              </div>

              <?php
                }
              ?>

            </div>
          </div>
          <!-- </section> -->

          <section id="latest-video">
            <div class="container">
              <div class="text-center" style="padding: 20px 0px 10px 0px;">
                <h6 class="text-gray-600">Latest Video</h6>
              </div>
            </div>

            <div class="tab-column" style="padding-bottom: 80px!important;">
                <div class="row">

                <style> </style>
                
                <?php
                  $no=1;
                  foreach ($video_tv as $keys => $value_videos) {
                    if(fmod($no,2)==1) { $float="right"; }
                    else { $float="left"; }
                ?>

                  <div class="column_tb_2" role="presentation">
                    <div class="tv-video" style="float:<?=$float?>!important;" data-codev="<?=$value_videos->code_video?>">
                      <a id="x-<?=$value_videos->code_video?>" class="click-video" href="javascript:void(0)" data-toggle="tab" data-key="<?=$value_videos->code_video?>" data-name="<?=$value_videos->nama_video?>" data-url="<?=$value_videos->link_video?>" data-embed="<?=$value_videos->link_embed?>" data-poster="<?=$value_videos->poster_video?>" data-logo="<?=$value_videos->logo_video?>">
                        <img class="img_poster" src="<?=$value_videos->poster_video?>" alt="<?=$value_videos->nama_video?>" title="<?=$value_videos->nama_video?>"/>
                      </a>

                      <div class="bottom-desc <?=$class_l?>" style="" title="<?=$value_videos->nama_video?>">
                        <?php
                          $text_videos = $value_videos->nama_video;
                          $segmen_text = explode(" ", $text_videos);
                          $count_seg = count($segmen_text);

                          $data_text = "";
                          for($i=0; $i <= 4; $i++){
                            $data_text .= $segmen_text[$i]." ";
                          }
                        ?>

                        <div class="" style="float:left!important;width:90%;">
                          <a id="x-<?=$value_videos->code_video?>" class="click-video" href="javascript:void(0)" style="color:#222d4f!important" data-toggle="tab" data-key="<?=$value_videos->code_video?>" data-name="<?=$value_videos->nama_video?>" data-url="<?=$value_videos->link_video?>" data-embed="<?=$value_videos->link_embed?>" data-poster="<?=$value_videos->poster_video?>" data-logo="<?=$value_videos->logo_video?>">
                          <?php
                            if($count_seg <= 5){
                              echo ($data_text);
                            }else{
                              echo ($data_text)."...";
                            }
                          ?>
                          </a>
                        </div>
                        
                        <?php
                          $text_link = $value_videos->link_embed;
                          $segmen_link = explode("/", $text_link);
                          
                          $link_embed = base_url('watch/'.$segmen_link[4]);

                          // print_r($segmen_link[4]);
                        ?>

                        <div class="" style="float:right!important;width:8%;text-align:right;"> 
                          <a class="copy_text icon fa-share-square-o" data-action="copy" data-url="<?=$link_embed?>" href="javascript:void(0)" style="color:#f47f1f;" title="share"></a>
                          
                        </div>
                      </div>
                      
                    </div>
                  </div>

                  <?php $no++;} ?>
                  <input type="text" style="position: absolute; left: -1000px; top: -1000px" value="" id="share-url">
                </section>

                <section id="energy-video">

                <?php
                  $total_energy = count($video_energy);

                  if($total_energy != 0) {
                    $avlb_1 = "";
                  }else {
                    $avlb_1 = "no Available";
                  }
                ?>

                  <div class="container">
                    <div class="text-center" style="padding: 20px 0px 10px 0px;">
                      <h6 class="text-gray-600">Video related to Energy Corner <?=$avlb_1?></h6>
                    </div>
                  </div>

                  <div class="tab-column" style="padding-bottom: 80px!important;">
                    <div class="row">
                  
                    <?php
                      $no1=1;
                      foreach ($video_energy as $keys1 => $value_1) {
                        if(fmod($no1,2)==1) { $float1="right"; }
                        else { $float1="left"; }
                    ?>

                    <div class="column_tb_2" role="presentation">
                      <div class="tv-video" style="float:<?=$float1?>!important;" data-codev="<?=$value_1->code_video?>">
                        <a id="x-<?=$value_1->code_video?>" class="click-video" href="javascript:void(0)" data-toggle="tab" data-key="<?=$value_1->code_video?>" data-name="<?=$value_1->nama_video?>" data-url="<?=$value_1->link_video?>" data-embed="<?=$value_1->link_embed?>" data-poster="<?=$value_1->poster_video?>" data-logo="<?=$value_1->logo_video?>">
                          <img class="img_poster" src="<?=$value_1->poster_video?>" alt="<?=$value_1->nama_video?>" title="<?=$value_1->nama_video?>"/>
                        </a>

                        <div class="bottom-desc" title="<?=$value_1->nama_video?>">
                          <?php
                            $text_videos1 = $value_1->nama_video;
                            $segmen_text1 = explode(" ", $text_videos1);
                            $count_seg1 = count($segmen_text1);

                            $data_text1 = "";
                            for($j=0; $j <= 4; $j++){
                              $data_text1 .= $segmen_text1[$j]." ";
                            }
                          ?>

                          <div style="float:left!important;width:90%;">
                            <a id="x-<?=$value_1->code_video?>" class="click-video" href="javascript:void(0)" style="color:#222d4f!important" data-toggle="tab" data-key="<?=$value_1->code_video?>" data-name="<?=$value_1->nama_video?>" data-url="<?=$value_1->link_video?>" data-embed="<?=$value_1->link_embed?>" data-poster="<?=$value_1->poster_video?>" data-logo="<?=$value_1->logo_video?>">
                            <?php
                              if($count_seg1 <= 5){
                                echo ($data_text1);
                              }else{
                                echo ($data_text1)."...";
                              }
                            ?>
                            </a>
                          </div>
                          
                          <?php
                            $text_link1 = $value_1->link_embed;
                            $segmen_link1 = explode("/", $text_link1);
                            $link_embed1 = base_url('embed/'.$segmen_link1[4]);

                            // print_r($segmen_link[4]);
                          ?>

                          <div style="float:right!important;width:8%;text-align:right;"> 
                            <a class="copy_text icon fa-share-square-o" data-action="copy" data-url="<?=$link_embed1?>" href="javascript:void(0)" style="color:#f47f1f;" title="share"></a>
                          </div>
                        </div>
                        
                      </div>
                    </div>

                    <?php $no1++;} ?>
                  <input type="text" style="position: absolute; left: -1000px; top: -1000px" value="" id="share-url">

              </div>
            </div>
          </section>

          <section id="mitra-video">

            <?php
              $total_mitra = count($video_mitra);

              if($total_mitra != 0) {
                $avlb_2 = "";
              }else {
                $avlb_2 = "no Available";
              }
            ?>

            <div class="container">
              <div class="text-center" style="padding: 20px 0px 10px 0px;">
                <h6 class="text-gray-600">Video related to Mitra Corner <?=$avlb_2?></h6>
              </div>
            </div>

            <div class="tab-column" style="padding-bottom: 80px!important;">
              <div class="row">
            
              <?php
                $no2=1;
                foreach ($video_mitra as $keys2 => $value_2) {
                  if(fmod($no2,2)==1) { $float1="right"; }
                  else { $float2="left"; }
              ?>

              <div class="column_tb_2" role="presentation">
                <div class="tv-video" style="float:<?=$float2?>!important;" data-codev="<?=$value_2->code_video?>">
                  <a id="x-<?=$value_2->code_video?>" class="click-video" href="javascript:void(0)" data-toggle="tab" data-key="<?=$value_2->code_video?>" data-name="<?=$value_2->nama_video?>" data-url="<?=$value_2->link_video?>" data-embed="<?=$value_2->link_embed?>" data-poster="<?=$value_2->poster_video?>" data-logo="<?=$value_2->logo_video?>">
                    <img class="img_poster" src="<?=$value_2->poster_video?>" alt="<?=$value_2->nama_video?>" title="<?=$value_2->nama_video?>"/>
                  </a>

                  <div class="bottom-desc" title="<?=$value_2->nama_video?>">
                    <?php
                      $text_videos2 = $value_2->nama_video;
                      $segmen_text2 = explode(" ", $text_videos2);
                      $count_seg2 = count($segmen_text2);

                      $data_text2 = "";
                      for($k=0; $k <= 4; $k++){
                        $data_text2 .= $segmen_text2[$k]." ";
                      }
                    ?>

                    <div style="float:left!important;width:90%;">
                      <a id="x-<?=$value_2->code_video?>" class="click-video" href="javascript:void(0)" style="color:#222d4f!important" data-toggle="tab" data-key="<?=$value_2->code_video?>" data-name="<?=$value_2->nama_video?>" data-url="<?=$value_2->link_video?>" data-embed="<?=$value_2->link_embed?>" data-poster="<?=$value_2->poster_video?>" data-logo="<?=$value_2->logo_video?>">
                      <?php
                        if($count_seg2 <= 5){
                          echo ($data_text2);
                        }else{
                          echo ($data_text2)."...";
                        }
                      ?>
                      </a>
                    </div>
                    
                    <?php
                      $text_link2 = $value_2->link_embed;
                      $segmen_link2 = explode("/", $text_link2);
                      $link_embed2 = base_url('embed/'.$segmen_link2[4]);
                    ?>

                    <div style="float:right!important;width:8%;text-align:right;"> 
                      <a class="copy_text icon fa-share-square-o" data-action="copy" data-url="<?=$link_embed2?>" href="javascript:void(0)" style="color:#f47f1f;" title="share"></a>
                    </div>
                  </div>
                  
                </div>
              </div>

              <?php $no2++;} ?>
              <input type="text" style="position: absolute; left: -1000px; top: -1000px" value="" id="share-url">

              </div>
            </div>
          </section>

          <section id="umkm-video">

            <?php
              $total_umkm = count($video_umkm);

              if($total_umkm != 0) {
                $avlb_3 = "";
              }else {
                $avlb_3 = "no Available";
              }
            ?>

            <div class="container">
              <div class="text-center" style="padding: 20px 0px 10px 0px;">
                <h6 class="text-gray-600">Video related to UMKM Corner <?=$avlb_3?></h6>
              </div>
            </div>

            <div class="tab-column" style="padding-bottom: 80px!important;">
              <div class="row">
            
              <?php
                $no2=1;
                foreach ($video_umkm as $keys3 => $value_3) {
                  if(fmod($no3,2)==1) { $float3="right"; }
                  else { $float3="left"; }
              ?>

              <div class="column_tb_2" role="presentation">
                <div class="tv-video" style="float:<?=$float3?>!important;" data-codev="<?=$value_3->code_video?>">
                  <a id="x-<?=$value_3->code_video?>" class="click-video" href="javascript:void(0)" data-toggle="tab" data-key="<?=$value_3->code_video?>" data-name="<?=$value_3->nama_video?>" data-url="<?=$value_3->link_video?>" data-embed="<?=$value_3->link_embed?>" data-poster="<?=$value_3->poster_video?>" data-logo="<?=$value_3->logo_video?>">
                    <img class="img_poster" src="<?=$value_3->poster_video?>" alt="<?=$value_3->nama_video?>" title="<?=$value_3->nama_video?>"/>
                  </a>

                  <div class="bottom-desc" title="<?=$value_3->nama_video?>">
                    <?php
                      $text_videos3 = $value_3->nama_video;
                      $segmen_text3 = explode(" ", $text_videos3);
                      $count_seg3 = count($segmen_text3);

                      $data_text3 = "";
                      for($l=0; $l <= 4; $l++){
                        $data_text3 .= $segmen_text3[$l]." ";
                      }
                    ?>

                    <div style="float:left!important;width:90%;">
                      <a id="x-<?=$value_3->code_video?>" class="click-video" href="javascript:void(0)" style="color:#222d4f!important" data-toggle="tab" data-key="<?=$value_3->code_video?>" data-name="<?=$value_3->nama_video?>" data-url="<?=$value_3->link_video?>" data-embed="<?=$value_3->link_embed?>" data-poster="<?=$value_3->poster_video?>" data-logo="<?=$value_3->logo_video?>">
                      <?php
                        if($count_seg3 <= 5){
                          echo ($data_text3);
                        }else{
                          echo ($data_text3)."...";
                        }
                      ?>
                      </a>
                    </div>
                    
                    <?php
                      $text_link3 = $value_3->link_embed;
                      $segmen_link3 = explode("/", $text_link3);
                      $link_embed3 = base_url('embed/'.$segmen_link3[4]);
                    ?>

                    <div style="float:right!important;width:8%;text-align:right;"> 
                      <a class="copy_text icon fa-share-square-o" data-action="copy" data-url="<?=$link_embed3?>" href="javascript:void(0)" style="color:#f47f1f;" title="share"></a>
                    </div>
                  </div>
                  
                </div>
              </div>

              <?php $no3++;} ?>
              <input type="text" style="position: absolute; left: -1000px; top: -1000px" value="" id="share-url">

              </div>
            </div>
          </section>

      <!--<section class="section" data-lightgallery="group">-->
      <!--  <div class="row no-gutters">-->
      <!--    <div class="col-lg-3 col-sm-6">-->
      <!--      <div class="thumbnail-classic"><a class="thumbnail-classic-figure" data-lightgallery="item" href="<?= base_url() ?>assets_tv/images/image-original-01-1200x800.jpg"><img src="<?= base_url() ?>assets_tv/images/home1-05-480x350.jpg" alt="" width="480" height="175"/></a>-->
      <!--        <div class="thumbnail-classic-caption">-->
      <!--          <h5 class="thumbnail-classic-title">Dream Village</h5>-->
      <!--          <time class="thumbnail-classic-time" datetime="2019-09-19">Sep 19, 2019</time>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--    <div class="col-lg-3 col-sm-6">-->
      <!--      <div class="thumbnail-classic"><a class="thumbnail-classic-figure" data-lightgallery="item" href="<?= base_url() ?>assets_tv/images/image-original-02-1200x800.jpg"><img src="<?= base_url() ?>assets_tv/images/home1-06-480x350.jpg" alt="" width="480" height="175"/></a>-->
      <!--        <div class="thumbnail-classic-caption">-->
      <!--          <h5 class="thumbnail-classic-title">ULTRA MUSIC FESTIVAL</h5>-->
      <!--          <time class="thumbnail-classic-time" datetime="2019-09-19">Sep 19, 2019</time>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--    <div class="col-lg-3 col-sm-6">-->
      <!--      <div class="thumbnail-classic"><a class="thumbnail-classic-figure" data-lightgallery="item" href="<?= base_url() ?>assets_tv/images/image-original-03-1200x800.jpg"><img src="<?= base_url() ?>assets_tv/images/home1-07-480x350.jpg" alt="" width="480" height="175"/></a>-->
      <!--        <div class="thumbnail-classic-caption">-->
      <!--          <h5 class="thumbnail-classic-title">electric Zoo</h5>-->
      <!--          <time class="thumbnail-classic-time" datetime="2019-09-19">Sep 19, 2019</time>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--    <div class="col-lg-3 col-sm-6">-->
      <!--      <div class="thumbnail-classic"><a class="thumbnail-classic-figure" data-lightgallery="item" href="<?= base_url() ?>assets_tv/images/image-original-04-1200x800.jpg"><img src="<?= base_url() ?>assets_tv/images/home1-08-480x350.jpg" alt="" width="480" height="175"/></a>-->
      <!--        <div class="thumbnail-classic-caption">-->
      <!--          <h5 class="thumbnail-classic-title">life in color festival</h5>-->
      <!--          <time class="thumbnail-classic-time" datetime="2019-09-19">Sep 19, 2019</time>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </div>-->
      <!--  </div>-->
      <!--</section>-->
      

      <!-- breaking news -->
      <!-- <section class="section section-xl bg-default text-center">
        <div class="container">
          <h6 class="text-gray-600">from MitraOne tv news</h6>
          <h2 class="text-gray-600">breaking news</h2>
          <div class="row row-125">
            <div class="col-md-6 col-lg-4">
              <article class="post-classic">
                <figure class="post-classic-figure"><a href="#"><img src="<?=base_url()?>assets_tv/images/breaking_news.png" alt="" width="346" height="130"/></a></figure>
                <div class="post-classic-content">
                  <time class="post-classic-time" datetime="2019-09-19">Aug 17, 2024</time>
                  <h5 class="post-classic-title"><a href="#">Issues Gas National</a></h5><a class="post-classic-link" href="#">read more</a>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <article class="post-classic">
                <figure class="post-classic-figure"><a href="#"><img src="<?=base_url()?>assets_tv/images/breaking_news.png" alt="" width="346" height="130"/></a></figure>
                <div class="post-classic-content">
                  <time class="post-classic-time" datetime="2019-09-19">Aug 17, 2024</time>
                  <h5 class="post-classic-title"><a href="#">Industry gas price polemic</a></h5><a class="post-classic-link" href="#">read more</a>
                </div>
              </article>
            </div>
            <div class="col-md-6 col-lg-4">
              <article class="post-classic">
                <figure class="post-classic-figure"><a href="#"><img src="<?=base_url()?>assets_tv/images/breaking_news.png" alt="" width="346" height="130"/></a></figure>
                <div class="post-classic-content">
                  <time class="post-classic-time" datetime="2019-09-19">Aug 17, 2024</time>
                  <h5 class="post-classic-title"><a href="#">Energy Security for Industry</a></h5><a class="post-classic-link" href="#">read more</a>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section> -->
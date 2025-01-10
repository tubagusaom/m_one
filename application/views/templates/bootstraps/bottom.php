
      
      <footer class="section footer-classic bg-terabytee">
        <div class="container">
          <div class="row row-15">
            <div class="col-sm-12">
              <p class="rights">
                <span>MitraOne TV</span>
                <!-- <span>&nbsp;</span> -->
                <span>&copy;</span>
                <span class="copyright-year"></span>
                <!-- <span>&nbsp;</span> -->
                <!-- <span>&nbsp;-&nbsp;</span>
                <span>Design by <a href="https://www.terabytee.my.id/" target="_blank">terabytee</a></span> -->
                <!-- <a href="https://www.terabytee.my.id/">terabytee</a> -->
                <span style="float: right;">Design by <a href="https://www.terabytee.my.id/" target="_blank">M1TV Developer</a></span>
              </p>
            </div>

            <!-- <div class="col-sm-4">
              <div class="footer-contact">
                <span>&nbsp;-&nbsp;</span>
                <span>Design by <a href="https://www.terabytee.my.id/" target="_blank">terabytee</a></span>
              </div>
            </div> -->
        </div>
      </footer>
    </div>

    <!-- Theme Custom -->
    <script src="<?= base_url() ?>assets_tv/js/core.min.js"></script>
    <script src="<?= base_url() ?>assets_tv/js/script.js"></script>

    <script src="https://vjs.zencdn.net/ie8/ie8-version/videojs-ie8.min.js"></script>
    <!-- <script src="<?php echo base_url() ?>assets_tv/js/videojs-contrib-hls.js"></script> -->
    <script src="<?php echo base_url() ?>assets_tv/js/video.min.js"></script>
    <!-- <script src="<?php echo base_url() ?>assets_tv/js/terabytee.min.js"></script> -->

  </body>

  <script>

$(document).on('click', '[data-action=copy]', function (){

    var dataUrl = $(this).data('url');
    var copyText = $("#share-url").attr("value", dataUrl);

    /* Select the text field */
    copyText.select();

    /* Copy the text inside the text field */
    document.execCommand("copy");
    
    alert("link copied to clipboard");
    // alert(myoutput);
});

// $('.copy_text').each(function() {

// });

    owl = $(".owl-carousel");
      owl.owlCarousel({
        loop:true,
        nav:false,
        autoplay:true,
        // autoplaySpeed:1000,
        autoplayTimeout: 3000,
        autoplaySpeed: 400,
        navSpeed: 400,
        dots:false,
        responsive:{
          0:{
            items:1
          },
          600:{
            items:2
          },
          1000:{
            items:3
          },
          1200:{
            items:3
          }
        }
    });

    var player1 = videojs("hls-example-1");
    var player2 = videojs("hls-example-2");
    var player3 = videojs("hls-example-3");
    var player4 = videojs("hls-example-4");

    $("#energy-video").attr("style", "display:none");
    $("#mitra-video").attr("style", "display:none");
    $("#umkm-video").attr("style", "display:none");

    $('.nav-link').click(function(){
        var myId = $(this).attr('id');
        var keys = $(this).data('key');

        $(window).scrollTop($('#tabs-2').offset().top-300);
        
        // alert(myId);

        $("#frame-1").attr("src","");
        $("#frame-2").attr("src","");
        $("#frame-3").attr("src","");

        $('.v-video').each(function() {
          var cVideos = $(this).data('cvideo');

          $("#frame-" + cVideos).attr("src","");

          $('#tabs-2-' + cVideos).removeClass("active");
          $('#tabs-2-' + cVideos).removeClass("show");
        });
          
        // myId.addClass("active");
        // myId.addClass("show");$("#latest-video").attr("style", "display:none");
        $("#latest-video").attr("style", "display:block");
        $("#energy-video").attr("style", "display:none");
        $("#mitra-video").attr("style", "display:none");
        $("#umkm-video").attr("style", "display:none");

        $('.column_tb').each(function() {
          var codex     = $(this).data('code');
          var myAnchor  = 'myAnchor-'+codex;

          const array = [codex];
          if ((array.includes(keys))) {
            // alert(`${keys} exists in the array.`);
            videojs("hls-example-" + keys).play();
            videojs("hls-example-" + keys).removeClass('video-bg');
          }
          
          if (!(array.includes(keys))) {
            // alert(`${array} does not exist in the array.`);
            videojs("hls-example-" + array).pause();
            $('#myAnchor-'+array).removeClass("active");
            $('#myAnchor-'+array).removeClass("show");
          }

          // alert(codex);
          
        });

      });

    $('#corner-1').click(function(){
        player1.pause();
        player2.pause();
        player3.pause();
        player4.pause();

        $(window).scrollTop($('#tabs-2').offset().top-300);
        
        $("#frame-1").attr("src","https://www.youtube.com/embed/xI0N1WUk840?autoplay=1&mute=1");
        $("#frame-2").attr("src","");
        $("#frame-3").attr("src","");

        $('.v-video').each(function() {
          var codeVideos1 = $(this).data('cvideo');

          $("#frame-" + codeVideos1).attr("src","");

          $('#tabs-2-' + codeVideos1).removeClass("active");
          $('#tabs-2-' + codeVideos1).removeClass("show");
        });

        $("#latest-video").attr("style", "display:none");
        $("#energy-video").attr("style", "display:block");
        $("#mitra-video").attr("style", "display:none");
        $("#umkm-video").attr("style", "display:none");

        $('#tabs-2-5').addClass("active");
        $('#tabs-2-5').addClass("show");

        $('#tabs-2-1').removeClass("active");
        $('#tabs-2-1').removeClass("show");
        $('#tabs-2-2').removeClass("active");
        $('#tabs-2-2').removeClass("show");
        $('#tabs-2-3').removeClass("active");
        $('#tabs-2-3').removeClass("show");
        $('#tabs-2-4').removeClass("active");
        $('#tabs-2-4').removeClass("show");
        $('#tabs-2-6').removeClass("active");
        $('#tabs-2-6').removeClass("show");
        $('#tabs-2-7').removeClass("active");
        $('#tabs-2-7').removeClass("show");
        
        $('#myAnchor-1').removeClass("active");
        $('#myAnchor-1').removeClass("show");
        $('#myAnchor-2').removeClass("active");
        $('#myAnchor-2').removeClass("show");
        $('#myAnchor-3').removeClass("active");
        $('#myAnchor-3').removeClass("show");
        $('#myAnchor-4').removeClass("active");
        $('#myAnchor-4').removeClass("show");
    });

    $('#corner-2').click(function(){
        player1.pause();
        player2.pause();
        player3.pause();
        player4.pause();

        $(window).scrollTop($('#tabs-2').offset().top-300);
        
        $("#frame-1").attr("src","");
        $("#frame-2").attr("src","https://www.youtube.com/embed/nT6XENs5cA8?autoplay=1&mute=1");
        $("#frame-3").attr("src","");

        $('.v-video').each(function() {
          var codeVideos2 = $(this).data('cvideo');

          $("#frame-" + codeVideos2).attr("src","");

          $('#tabs-2-' + codeVideos2).removeClass("active");
          $('#tabs-2-' + codeVideos2).removeClass("show");
        });

        $("#latest-video").attr("style", "display:none");
        $("#energy-video").attr("style", "display:none");
        $("#mitra-video").attr("style", "display:block");
        $("#umkm-video").attr("style", "display:none");

        $('#tabs-2-6').addClass("active");
        $('#tabs-2-6').addClass("show");

        $('#tabs-2-1').removeClass("active");
        $('#tabs-2-1').removeClass("show");
        $('#tabs-2-2').removeClass("active");
        $('#tabs-2-2').removeClass("show");
        $('#tabs-2-3').removeClass("active");
        $('#tabs-2-3').removeClass("show");
        $('#tabs-2-4').removeClass("active");
        $('#tabs-2-4').removeClass("show");
        $('#tabs-2-5').removeClass("active");
        $('#tabs-2-5').removeClass("show");
        $('#tabs-2-7').removeClass("active");
        $('#tabs-2-7').removeClass("show");
        
        $('#myAnchor-1').removeClass("active");
        $('#myAnchor-1').removeClass("show");
        $('#myAnchor-2').removeClass("active");
        $('#myAnchor-2').removeClass("show");
        $('#myAnchor-3').removeClass("active");
        $('#myAnchor-3').removeClass("show");
        $('#myAnchor-4').removeClass("active");
        $('#myAnchor-4').removeClass("show");
    });

    $('#corner-3').click(function(){
        player1.pause();
        player2.pause();
        player3.pause();
        player4.pause();

        $(window).scrollTop($('#tabs-2').offset().top-300);
        
        $("#frame-1").attr("src","");
        $("#frame-2").attr("src","");
        $("#frame-3").attr("src","https://www.youtube.com/embed/xT-2XUfwX7E?autoplay=1&mute=1");

        $('.v-video').each(function() {
          var codeVideos3 = $(this).data('cvideo');

          $("#frame-" + codeVideos3).attr("src","");

          $('#tabs-2-' + codeVideos3).removeClass("active");
          $('#tabs-2-' + codeVideos3).removeClass("show");
        });

        $("#latest-video").attr("style", "display:none");
        $("#energy-video").attr("style", "display:none");
        $("#mitra-video").attr("style", "display:none");
        $("#umkm-video").attr("style", "display:block");

        $('#tabs-2-7').addClass("active");
        $('#tabs-2-7').addClass("show");

        $('#tabs-2-1').removeClass("active");
        $('#tabs-2-1').removeClass("show");
        $('#tabs-2-2').removeClass("active");
        $('#tabs-2-2').removeClass("show");
        $('#tabs-2-3').removeClass("active");
        $('#tabs-2-3').removeClass("show");
        $('#tabs-2-4').removeClass("active");
        $('#tabs-2-4').removeClass("show");
        $('#tabs-2-5').removeClass("active");
        $('#tabs-2-5').removeClass("show");
        $('#tabs-2-6').removeClass("active");
        $('#tabs-2-6').removeClass("show");
        
        $('#myAnchor-1').removeClass("active");
        $('#myAnchor-1').removeClass("show");
        $('#myAnchor-2').removeClass("active");
        $('#myAnchor-2').removeClass("show");
        $('#myAnchor-3').removeClass("active");
        $('#myAnchor-3').removeClass("show");
        $('#myAnchor-4').removeClass("active");
        $('#myAnchor-4').removeClass("show");
    });

    $('.click-video').click(function(){

      player1.pause();
      player2.pause();
      player3.pause();
      player4.pause();

      var keys = $(this).data('key');
      var keys = $(this).data('key');
      var names = $(this).data('name');
      var urls = $(this).data('url');
      var embeds = $(this).data('embed');
      var posters = $(this).data('poster');
      
      // alert(embeds);

      $('#frame-' + keys).attr("src",embeds + "?autoplay=1&mute=0");

      $("#frame-1").attr("src","");
      $("#frame-2").attr("src","");
      $("#frame-3").attr("src","");

      $('#tabs-2-' + keys).addClass("active");
      $('#tabs-2-' + keys).addClass("show");
      
      $('.column_tb').each(function() {
          var codeAnc     = $(this).data('code');
          var myAnchorArr  = '#myAnchor-'+codeAnc;

          $(myAnchorArr).removeClass("active");
          $(myAnchorArr).removeClass("show");

          // alert(myAnchor);
          
        });

      $('.tv-video').each(function() {
        var codes = $(this).data('codev');

        // alert(codes);

        const arrays = [keys];
        if (!(arrays.includes(codes))) {
          // alert("#frame-"+codes);
          $("#frame-"+codes).attr("src","");

          $('#tabs-2-' + codes).removeClass("active");
          $('#tabs-2-' + codes).removeClass("show");

          $('#tabs-2-1').removeClass("active");
          $('#tabs-2-1').removeClass("show");
          $('#tabs-2-2').removeClass("active");
          $('#tabs-2-2').removeClass("show");
          $('#tabs-2-3').removeClass("active");
          $('#tabs-2-3').removeClass("show");
          $('#tabs-2-4').removeClass("active");
          $('#tabs-2-4').removeClass("show");
          $('#tabs-2-5').removeClass("active");
          $('#tabs-2-5').removeClass("show");
          $('#tabs-2-6').removeClass("active");
          $('#tabs-2-6').removeClass("show");
          $('#tabs-2-7').removeClass("active");
          $('#tabs-2-7').removeClass("show");
        };

      });

      $(window).scrollTop($('#tabs-2').offset().top-300);

    });


  </script>


</html>
      
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

    <script src="<?php echo base_url() ?>assets/js/limonte-sweetalert2/sweetalert2.all.min.js"></script>

  </body>

  <script>

$(document).on('click', '[data-action=copy]', function (){

    var dataUrl = $(this).data('url');
    var copyText = $("#share-url").attr("value", dataUrl);

    /* Select the text field */
    copyText.select();

    /* Copy the text inside the text field */
    document.execCommand("copy");
    
    // alert("link copied to clipboard");
    // alert(myoutput);

    Swal.fire({
      type: 'success',
      title: "Success",
      text: 'link copied to clipboard',
      timer: 2500,
      showCancelButton: false,
      showConfirmButton: false,
      showClass: {
        popup: `
          animate__animated
          animate__fadeInUp
          animate__faster
        `
      },
      hideClass: {
        popup: `
          animate__animated
          animate__fadeOutDown
          animate__faster
        `
      }
    });

});



$(document).on('click', '[data-action=copy1]', function (){
var dataUrl1 = $(this).data('url1');
var copyText1 = $("#share-url1").attr("value", dataUrl1);
copyText1.select();
document.execCommand("copy");

  Swal.fire({
    type: 'success',
    title: "Success",
    text: 'link copied to clipboard',
    timer: 2500,
    showCancelButton: false,
    showConfirmButton: false,
    showClass: {
      popup: `
        animate__animated
        animate__fadeInUp
        animate__faster
      `
    },
    hideClass: {
      popup: `
        animate__animated
        animate__fadeOutDown
        animate__faster
      `
    }
  });

});



$(document).on('click', '[data-action=copy2]', function (){
var dataUrl2 = $(this).data('url2');
var copyText2 = $("#share-url2").attr("value", dataUrl2);
copyText2.select();
document.execCommand("copy");

  Swal.fire({
    type: 'success',
    title: "Success",
    text: 'link copied to clipboard',
    timer: 2500,
    showCancelButton: false,
    showConfirmButton: false,
    showClass: {
      popup: `
        animate__animated
        animate__fadeInUp
        animate__faster
      `
    },
    hideClass: {
      popup: `
        animate__animated
        animate__fadeOutDown
        animate__faster
      `
    }
  });

});



$(document).on('click', '[data-action=copy3]', function (){
var dataUrl3 = $(this).data('url3');
var copyText3 = $("#share-url3").attr("value", dataUrl3);
copyText3.select();
document.execCommand("copy");

  Swal.fire({
    type: 'success',
    title: "Success",
    text: 'link copied to clipboard',
    timer: 2500,
    showCancelButton: false,
    showConfirmButton: false,
    showClass: {
      popup: `
        animate__animated
        animate__fadeInUp
        animate__faster
      `
    },
    hideClass: {
      popup: `
        animate__animated
        animate__fadeOutDown
        animate__faster
      `
    }
  });

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

    $('.lives_public').each(function() {
      var codeLive     = $(this).data('code');

      videojs("hls-example-" + codeLive).pause();
      videojs("hls-example-" + codeLive).removeClass('video-bg');

      // alert(codeLive);
          
    });

    $('.lives_group').each(function() {
      var codeLive     = $(this).data('code');

      videojs("hls-example-" + codeLive).pause();
      videojs("hls-example-" + codeLive).removeClass('video-bg');

      // alert(codeLive);
          
    });

    $("#energy-video").attr("style", "display:none");
    $("#mitra-video").attr("style", "display:none");
    $("#umkm-video").attr("style", "display:none");

    $('.nav-link-public').click(function(){
        var myIdP = $(this).attr('id');
        var keysP = $(this).data('key');

        $(window).scrollTop($('#tabs-2').offset().top-300);
        
        // alert(keysP);

        $("#frame-1").attr("src","");
        $("#frame-2").attr("src","");
        $("#frame-3").attr("src","");
          
        // myId.addClass("active");
        // myId.addClass("show");$("#latest-video").attr("style", "display:none");
        $("#latest-video").attr("style", "display:block");
        $("#energy-video").attr("style", "display:none");
        $("#mitra-video").attr("style", "display:none");
        $("#umkm-video").attr("style", "display:none");

        $('.lives_public').each(function() {
          var codexP     = $(this).data('code');
          var myAnchorP  = 'myAnchor-'+codexP;

          const arrayP = [codexP];
          if ((arrayP.includes(keysP))) {
            // alert(`${keys} exists in the array.`);
            videojs("hls-example-" + keysP).play();
            videojs("hls-example-" + keysP).removeClass('video-bg');

            $('#item-public-'+keysP).addClass("playy");
          }
          
          if (!(arrayP.includes(keysP))) {
            // alert(`${array} does not exist in the array.`);
            videojs("hls-example-" + arrayP).pause();
            $('#myAnchor-'+arrayP).removeClass("active");
            $('#myAnchor-'+arrayP).removeClass("show");

            $('#item-public-'+arrayP).removeClass("playy");
          }

          // alert(codex);
          
        });

        $('.lives_group').each(function() {

          var codexG     = $(this).data('code');
          var myAnchorG  = 'myAnchor-'+codexG;

          videojs("hls-example-" + codexG).pause();
          videojs("hls-example-" + codexG).removeClass('video-bg');

          $('#'+myAnchorG).removeClass("active");
          $('#'+myAnchorG).removeClass("show");

          $('#item-public-'+codexG).removeClass("playy");

        });

        $('.v-video').each(function() {
          var cVideosP = $(this).data('cvideo');

          $("#frame-" + cVideosP).attr("src","");

          $('#tabs-2-' + cVideosP).removeClass("active");
          $('#tabs-2-' + cVideosP).removeClass("show");
        });

      });




    $('.nav-link-group').click(function(){
        var myIdG = $(this).attr('id');
        var keysG = $(this).data('key');

        $(window).scrollTop($('#tabs-2').offset().top-100);
        
        // alert(myId);

        $("#frame-1").attr("src","");
        $("#frame-2").attr("src","");
        $("#frame-3").attr("src","");

        $("#latest-video").attr("style", "display:block");
        $("#energy-video").attr("style", "display:none");
        $("#mitra-video").attr("style", "display:none");
        $("#umkm-video").attr("style", "display:none");

        $('.lives_group').each(function() {
          var codexG     = $(this).data('code');
          var myAnchorG  = 'myAnchor-'+codexG;

          const arrayG = [codexG];
          if ((arrayG.includes(keysG))) {
            // alert(`${keys} exists in the array.`);
            videojs("hls-example-" + keysG).play();
            videojs("hls-example-" + keysG).removeClass('video-bg');

            $('#item-public-'+keysG).addClass("playy");
          }
          
          if (!(arrayG.includes(keysG))) {
            // alert(`${array} does not exist in the array.`);
            videojs("hls-example-" + arrayG).pause();
            $('#myAnchor-'+arrayG).removeClass("active");
            $('#myAnchor-'+arrayG).removeClass("show");

            $('#item-public-'+arrayG).removeClass("playy");
          }

          // alert(codex);
          
        });

        $('.lives_public').each(function() {

          var codexP     = $(this).data('code');
          var myAnchorP  = 'myAnchor-'+codexP;

          videojs("hls-example-" + codexP).pause();
          videojs("hls-example-" + codexP).removeClass('video-bg');

          $('#'+myAnchorP).removeClass("active");
          $('#'+myAnchorP).removeClass("show");

            $('#item-public-'+codexP).removeClass("playy");

        });

        $('.v-video').each(function() {
          var cVideosG = $(this).data('cvideo');

          $("#frame-" + cVideosG).attr("src","");

          $('#tabs-2-' + cVideosG).removeClass("active");
          $('#tabs-2-' + cVideosG).removeClass("show");
        });

      });




    $('#corner-1').click(function(){

        $(window).scrollTop($('#tabs-2').offset().top-300);
        
        $("#frame-1").attr("src","https://www.youtube.com/embed/xI0N1WUk840?autoplay=1&playlist=xI0N1WUk840&loop=1&mute=0&controls=0");
        $("#frame-2").attr("src","");
        $("#frame-3").attr("src","");

        $('.v-video').each(function() {
          var codeVideos1 = $(this).data('cvideo');

          $("#frame-" + codeVideos1).attr("src","");

          $('#tabs-2-' + codeVideos1).removeClass("active");
          $('#tabs-2-' + codeVideos1).removeClass("show");
        });

        $('.lives_public').each(function() {
          var codeAnc     = $(this).data('code');
          var myAnchorArr  = '#myAnchor-'+codeAnc;

          $(myAnchorArr).removeClass("active");
          $(myAnchorArr).removeClass("show");

          $('#tabs-2-'+codeAnc).removeClass("active");
          $('#tabs-2-'+codeAnc).removeClass("active");

          $('#item-public-'+codeAnc).removeClass("playy");

          videojs("hls-example-" + codeAnc).pause();
          videojs("hls-example-" + codeAnc).removeClass('video-bg');

          // alert(codeAnc);
          
        });

        $('.lives_group').each(function() {
          var codeAncG     = $(this).data('code');
          var myAnchorArrG  = '#myAnchor-'+codeAncG;

          $(myAnchorArrG).removeClass("active");
          $(myAnchorArrG).removeClass("show");

          $('#tabs-2-'+codeAncG).removeClass("active");
          $('#tabs-2-'+codeAncG).removeClass("active");

          $('#item-public-'+codeAncG).removeClass("playy");

          videojs("hls-example-" + codeAncG).pause();
          videojs("hls-example-" + codeAncG).removeClass('video-bg');

          // alert(codeAnc);
          
        });

        $("#latest-video").attr("style", "display:none");
        $("#energy-video").attr("style", "display:block");
        $("#mitra-video").attr("style", "display:none");
        $("#umkm-video").attr("style", "display:none");

        $('#tabs-2-1').addClass("active");
        $('#tabs-2-1').addClass("show");

        $('#tabs-2-2').removeClass("active");
        $('#tabs-2-2').removeClass("show");
        $('#tabs-2-3').removeClass("active");
        $('#tabs-2-3').removeClass("show");
    });




    $('#corner-2').click(function(){

        $(window).scrollTop($('#tabs-2').offset().top-300);
        
        $("#frame-1").attr("src","");
        $("#frame-2").attr("src","https://www.youtube.com/embed/nT6XENs5cA8?autoplay=1&playlist=nT6XENs5cA8&loop=1&mute=0&controls=0");
        $("#frame-3").attr("src","");

        $('.v-video').each(function() {
          var codeVideos2 = $(this).data('cvideo');

          $("#frame-" + codeVideos2).attr("src","");

          $('#tabs-2-' + codeVideos2).removeClass("active");
          $('#tabs-2-' + codeVideos2).removeClass("show");
        });

        $('.lives_public').each(function() {
          var codeAnc     = $(this).data('code');
          var myAnchorArr  = '#myAnchor-'+codeAnc;

          $(myAnchorArr).removeClass("active");
          $(myAnchorArr).removeClass("show");

          $('#tabs-2-'+codeAnc).removeClass("active");
          $('#tabs-2-'+codeAnc).removeClass("active");

          $('#item-public-'+codeAnc).removeClass("playy");

          videojs("hls-example-" + codeAnc).pause();
          videojs("hls-example-" + codeAnc).removeClass('video-bg');

          // alert(myAnchor);
          
        });

        $('.lives_group').each(function() {
          var codeAncG     = $(this).data('code');
          var myAnchorArrG  = '#myAnchor-'+codeAncG;

          $(myAnchorArrG).removeClass("active");
          $(myAnchorArrG).removeClass("show");

          $('#tabs-2-'+codeAncG).removeClass("active");
          $('#tabs-2-'+codeAncG).removeClass("active");

          $('#item-public-'+codeAncG).removeClass("playy");

          videojs("hls-example-" + codeAncG).pause();
          videojs("hls-example-" + codeAncG).removeClass('video-bg');

          // alert(codeAnc);
          
        });

        $("#latest-video").attr("style", "display:none");
        $("#energy-video").attr("style", "display:none");
        $("#mitra-video").attr("style", "display:block");
        $("#umkm-video").attr("style", "display:none");

        $('#tabs-2-2').addClass("active");
        $('#tabs-2-2').addClass("show");

        $('#tabs-2-1').removeClass("active");
        $('#tabs-2-1').removeClass("show");
        $('#tabs-2-3').removeClass("active");
        $('#tabs-2-3').removeClass("show");
    });





    $('#corner-3').click(function(){

        $(window).scrollTop($('#tabs-2').offset().top-300);
        
        $("#frame-1").attr("src","");
        $("#frame-2").attr("src","");
        $("#frame-3").attr("src","https://www.youtube.com/embed/xT-2XUfwX7E?autoplay=1&playlist=xT-2XUfwX7E&loop=1&loop=1&mute=0&controls=0");

        $('.v-video').each(function() {
          var codeVideos3 = $(this).data('cvideo');

          $("#frame-" + codeVideos3).attr("src","");

          $('#tabs-2-' + codeVideos3).removeClass("active");
          $('#tabs-2-' + codeVideos3).removeClass("show");
        });

        $('.lives_public').each(function() {
          var codeAnc     = $(this).data('code');
          var myAnchorArr  = '#myAnchor-'+codeAnc;

          $(myAnchorArr).removeClass("active");
          $(myAnchorArr).removeClass("show");

          $('#tabs-2-'+codeAnc).removeClass("active");
          $('#tabs-2-'+codeAnc).removeClass("active");

          $('#item-public-'+codeAnc).removeClass("playy");

          videojs("hls-example-" + codeAnc).pause();
          videojs("hls-example-" + codeAnc).removeClass('video-bg');

          // alert(myAnchor);
          
        });

        $('.lives_group').each(function() {
          var codeAncG     = $(this).data('code');
          var myAnchorArrG  = '#myAnchor-'+codeAncG;

          $(myAnchorArrG).removeClass("active");
          $(myAnchorArrG).removeClass("show");

          $('#tabs-2-'+codeAncG).removeClass("active");
          $('#tabs-2-'+codeAncG).removeClass("active");

          $('#item-public-'+codeAncG).removeClass("playy");

          videojs("hls-example-" + codeAncG).pause();
          videojs("hls-example-" + codeAncG).removeClass('video-bg');

          // alert(codeAnc);
          
        });

        $("#latest-video").attr("style", "display:none");
        $("#energy-video").attr("style", "display:none");
        $("#mitra-video").attr("style", "display:none");
        $("#umkm-video").attr("style", "display:block");

        $('#tabs-2-3').addClass("active");
        $('#tabs-2-3').addClass("show");

        $('#tabs-2-1').removeClass("active");
        $('#tabs-2-1').removeClass("show");
        $('#tabs-2-2').removeClass("active");
        $('#tabs-2-2').removeClass("show");

    });





    $('.click-video').click(function(){

      $(window).scrollTop($('#tabs-2').offset().top-300);
      
      var keys = $(this).data('key');
      var names = $(this).data('name');
      var urls = $(this).data('url');
      var embeds = $(this).data('embed');
      var posters = $(this).data('poster');

      var embedarr=embeds.split('/');

      $('#frame-' + keys).attr("src",embeds + "?autoplay=1&playlist=" + embedarr[4] + "&loop=1&mute=0&controls=0");

      $("#frame-1").attr("src","");
      $("#frame-2").attr("src","");
      $("#frame-3").attr("src","");

      $('#tabs-2-' + keys).addClass("active");
      $('#tabs-2-' + keys).addClass("show");
      
      $('.lives_public').each(function() {
          var codeAnc     = $(this).data('code');
          var myAnchorArr  = '#myAnchor-'+codeAnc;

          $(myAnchorArr).removeClass("active");
          $(myAnchorArr).removeClass("show");

          $('#tabs-2-'+codeAnc).removeClass("active");
          $('#tabs-2-'+codeAnc).removeClass("active");

          $('#item-public-'+codeAnc).removeClass("playy");

          videojs("hls-example-" + codeAnc).pause();
          videojs("hls-example-" + codeAnc).removeClass('video-bg');

          // alert(myAnchor);
          
      });

        $('.lives_group').each(function() {
          var codeAncG     = $(this).data('code');
          var myAnchorArrG  = '#myAnchor-'+codeAncG;

          $(myAnchorArrG).removeClass("active");
          $(myAnchorArrG).removeClass("show");

          $('#tabs-2-'+codeAncG).removeClass("active");
          $('#tabs-2-'+codeAncG).removeClass("active");

          $('#item-public-'+codeAncG).removeClass("playy");

          videojs("hls-example-" + codeAncG).pause();
          videojs("hls-example-" + codeAncG).removeClass('video-bg');

          // alert(codeAnc);
          
        });

      $('.tv-video').each(function() {
        var codes = $(this).data('codev');

        // alert(codes);

        const arrays = [keys];
        if (!(arrays.includes(codes))) {

          // alert(idx1arr);

          $("#frame-"+codes).attr("src","");

          $('#tabs-2-' + codes).removeClass("active");
          $('#tabs-2-' + codes).removeClass("show");

          $('#tabs-2-1').removeClass("active");
          $('#tabs-2-1').removeClass("show");
          $('#tabs-2-2').removeClass("active");
          $('#tabs-2-2').removeClass("show");
          $('#tabs-2-3').removeClass("active");
          $('#tabs-2-3').removeClass("show");
        };

      });

    });

    $('.vjs-linx-caps-button').removeClass("vjs-hidden");


  </script>


</html>
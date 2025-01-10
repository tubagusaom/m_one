

        <footer class="section footer-classic bg-terabytee">
            <div class="container">
                <div class="row row-15">
                    <div class="col-sm-12">
                        <p class="rights">
                            <span>MitraOne TV</span>
                            <span>&copy;</span>
                            <span class="copyright-year"></span>
                            <span style="float: right;">Design by <a href="https://www.terabytee.my.id/" target="_blank">M1TV Developer</a></span>
                        </p>
                    </div>
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

    $('.click-video').click(function(){

        var keys = $(this).data('key');
        var keys = $(this).data('key');
        var names = $(this).data('name');
        var urls = $(this).data('url');
        var embeds = $(this).data('embed');
        var posters = $(this).data('poster');

        // alert(embeds);

        $('#frame-' + keys).attr("src",embeds + "?autoplay=1&mute=0");

        $('#tabs-2-' + keys).addClass("active");
        $('#tabs-2-' + keys).addClass("show");

        $('#tabs-2-0').removeClass("active");
        $('#tabs-2-0').removeClass("show");

        $('.tv-video').each(function() {
        var codes = $(this).data('codev');

        // alert(codes);

            const arrays = [keys];
            if (!(arrays.includes(codes))) {
                // alert("#frame-"+codes);
                $("#frame-"+codes).attr("src","");

                $('#tabs-2-' + codes).removeClass("active");
                $('#tabs-2-' + codes).removeClass("show");
            };

        });

        $(window).scrollTop($('.tab-content').offset().top-300);

    });


</script>

</html>
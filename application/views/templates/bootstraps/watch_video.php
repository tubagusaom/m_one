<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>
		<?= $aplikasi->nama_unit ?> - Video Player 
	</title>

    <meta name="keywords" content="TV , TV ONLINE , roadcast. Embed Video" />
	<meta name="description" content="Play Emebd Video">
	<meta name="author" content="terabytee.my.id">

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url() ?>assets_tv/images/logo_mitraone_tv.png" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?= base_url() ?>assets_tv/images/logo_mitraone_tv.png">
	<link rel="icon" href="<?= base_url() ?>assets_tv/images/logo_mitraone_tv.png" type="image/x-icon">

    <style>
        .videoContainer {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            bottom: 0;
            right: 0;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            background-color: #222d4f;
        }

        iframe {
            /* optional */
            width: 95%;
            height: 97%;
            padding: 8px;
            border-radius: 15px;
            /* width: 100%;
            height: 100%; */
        }
    </style>
</head>

<body>
    <div class="videoContainer">
        <!-- <img class="img_poster" src="<?=$value_videos->poster_video?>" alt="<?=$value_videos->nama_video?>" title="<?=$value_videos->nama_video?>"/> -->
        <iframe class="videoContainer__video" width="100%" height="100%" src="https://www.youtube.com/embed/<?=$id_embed?>?autoplay=1&mute=1&modestbranding=1&controls=1&fs=0&loop=1&rel=0&showinfo=0&disablekb=1&playlist=<?=$id_embed?>" frameborder="0">
        </iframe>
        
            
    </div>    
</body>

</html>
<?php
    $titulo = "Tour en Caballos";
    $tag = "tours-caballos";
    $precio = 20;
    
    $keywords = "Baños, Caballos, Tours, Caballos Banos Ecuador, Caballos Ecuador, Top Sport Adventure, deportes";
    $description = "Tenemos rutas para visitar cascadas, miradores de volcán estas cabalgatas se las realiza por zonas de amortiguamiento de los parques Llanganates Sangay en estos lugares conocerás muchos ecosistemas tanto hídricos como naturales con mucha vegetación y fuentes de manantiales de agua natural (GUITING).";
?>
<!doctype html>
<html lang="es">
<head>
    <title><?php echo $titulo; ?> | Top Sport Adventure</title>
    <?php include "lib/css.min.php"; ?>
</head>
<body>
    <?php include "lib/header.php"; ?>
        <div class="ui fluid container wall page">
            <figure>
                <img src="img/<?php echo $tag; ?>/wall.jpg" style="margin-top: -40px;">
            </figure>
            <div class="jumbotron">
                <div class="title animated fadeInUp"><?php echo $titulo; ?></div>
                <p class="subtitle animated fadeInUp">con Top Sport Adventure</p>
            </div>
	    	<div class="down-arrow">
	    		<img src="img/down-arrow.svg">
	    	</div>
        </div>
    <main role="main" class="ui fluid container">
        <div class="ui stackable grid container block first">
            <article class="eleven wide column">
                <div class="fb-share-button fb-like" data-href="<?php echo $host; ?>" data-layout="button" data-size="large" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
                <h1><?php echo $titulo; ?></h1>
                <p>Tenemos rutas para visitar cascadas, miradores de volcán estas cabalgatas se las realiza por zonas de amortiguamiento de los parques Llanganates Sangay en estos lugares conocerás muchos ecosistemas tanto hídricos como naturales con mucha vegetación y fuentes de manantiales de agua natural (GUITING).</p>
				<div class="ui stackable grid">
                    <div class="sixteen wide column">
                        <div class="ui list">
                            <h2>¿Qué llevar?</h2>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Cámara de Fotos</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Bloqueador</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Gafas</div>
                            </div>
                            <div class="item">
                                <i class="check green icon"></i>
                                <div class="content">Gorra</div>
                            </div>
                        </div>
                    </div>
                </div>
                <h2>Precios</h2>
                <div class="ui stackable grid priceTag">
                    <div class="five wide column">
                        <h4 class="title">Nombre</h4>
                        <div class="content"><?php echo $titulo; ?></div>
                    </div>
                    <div class="two wide column">
                        <h4 class="title">Duración:</h4>
                        <div class="content">2 Horas</div>
                    </div>
                    <div class="two wide column">
                        <h4 class="title">Minimo:</h4>
                        <div class="content">1</div>
                    </div>
                    <div class="two wide column">
                        <h4 class="title">Precio:</h4>
                        <div class="content">$ <?php echo $precio; ?> USD</div>
                    </div>
                    <div class="five wide column center aligned priceTag-right">
                        <div class="priceTag-buttons">
                            <a href="/precios" class="ui button">Mas Precios</a>
                            <a href="#" class="ui orange button reservaBtnTag">Resevar</a>
                        </div>
                    </div>
                </div>
                <h2>Galeria</h2>
                <?php include("lib/galeria.php"); ?>
            </article>
            <aside class="five wide column">       
                <?php include('lib/callToActionForm.php'); ?>
            </aside>
        </div>
    </main>
    <?php include 'lib/footer.php'; ?>
    <?php include 'lib/js.min.php'; ?>
    <script type="text/javascript" src="js/semantic/sticky.min.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/datedropper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.1/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.1';
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
</body>
</html>
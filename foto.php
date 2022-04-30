     <html>
	 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	 <style>
	 .cuadro_intro_hover{
    	padding: 0px;
		position: relative;
		overflow: hidden;
		height: 200px;
		float: left;
	}
	.cuadro_intro_hover:hover .caption{
		opacity: 1;
		transform: translateY(-150px);
		-webkit-transform:translateY(-150px);
		-moz-transform:translateY(-150px);
		-ms-transform:translateY(-150px);
		-o-transform:translateY(-150px);
	}
	.cuadro_intro_hover img{
		z-index: 4;
	}
	.cuadro_intro_hover .caption{
		position: absolute;
		top:150px;
		-webkit-transition:all 0.3s ease-in-out;
		-moz-transition:all 0.3s ease-in-out;
		-o-transition:all 0.3s ease-in-out;
		-ms-transition:all 0.3s ease-in-out;
		transition:all 0.3s ease-in-out;
		width: 100%;
	}
	.cuadro_intro_hover .blur{
		background-color: rgba(0,0,0,0.7);
		height: 300px;
		z-index: 5;
		position: absolute;
		width: 100%;
	}
	.cuadro_intro_hover .caption-text{
		z-index: 10;
		color: #fff;
		position: absolute;
		height: 300px;
		text-align: center;
		top:-20px;
		width: 100%;
	}
	</style>
	<script type="text/javascript">
        window.alert = function(){};
        var defaultCSS = document.getElementById('bootstrap-css');
        function changeCSS(css){
            if(css) $('head > link').filter(':first').replaceWith('<link rel="stylesheet" href="'+ css +'" type="text/css" />'); 
            else $('head > link').filter(':first').replaceWith(defaultCSS); 
        }
        $( document ).ready(function() {
          var iframe_height = parseInt($('html').height()); 
          window.parent.postMessage( iframe_height, 'http://localhost');
        });
    </script>
	</head>
	<body>
	<div class="container">
	<div class="row">
		<h2 style="color: #3A6073;">Sobre nós: </h2>
	</div>
    <div class="row">
       
        <div class="col-lg-3">
        			<div class="cuadro_intro_hover " style="background-color:#cccccc; align: center" >
						<p style="text-align:center; margin-top:0px;">
							<img src="img/anna.jpg" class="img-responsive" alt="">
						</p>
						<div class="caption">
							<div class="blur" style="background-color:#FD7FFF"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px; ">Anna Laura Queiroz</h3>
								<p>Virginiana, 16 anos estuda informática no IFSULDEMINAS.  
								RA: 14161000006</p>
								<a href="http://sa.ifsuldeminas.edu.br" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-check"></span> Dar nota 10</a>
							</div>
						</div>
					</div>
				
	    </div>
		
		<div class="col-lg-3">
        			<div class="cuadro_intro_hover " style="background-color:#cccccc; align: center">
						<p style="text-align:center; margin-top:0px;">
							<img src="img/cynthia.jpg" class="img-responsive" alt="">
						</p>
						<div class="caption">
							<div class="blur" style="background-color:FD7FFF"></div>
							<div class="caption-text">
								<h3 style="border-top:2px solid white; border-bottom:2px solid white; padding:10px;">Cynthia Venâncio</h3>
								<p>Estuda informática no IFSULDEMINAS. Virginiana, 17 anos. RA: 14161000008 </p>
								<a href="http://sa.ifsuldeminas.edu.br" class="btn btn-xs btn-info"><span class="glyphicon glyphicon-check"></span> Dar nota 10</a>
								
							</div>
						</div>
					</div>
				
	    </div>
        
    </div>
</div>
        

</body>
</html>
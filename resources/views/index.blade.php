<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pintereso</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type="text/javascript"> (function() { var css = document.createElement('link'); css.href = 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'; css.rel = 'stylesheet'; css.type = 'text/css'; document.getElementsByTagName('head')[0].appendChild(css); })(); </script>
    <link rel="stylesheet" href="../../anasayfa/css/app.css">
    <link rel="stylesheet" href="../../anasayfa/css/theme.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

<body>
  <script>
  AOS.init();
  </script>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
    <a class="navbar-brand font-weight-bolder mr-3" href="index.html"><img src="../anasayfa/img/logo.png"></a>
    <button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsDefault" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarsDefault">
    	<ul class="navbar-nav mr-auto align-items-center">
    		<form class="bd-search hidden-sm-down">
    			<input type="text" class="form-control bg-graylight border-0 font-weight-bold" id="search-input" placeholder="Bir Arama Yapın..." autocomplete="off">
    			<div class="dropdown-menu bd-search-results" id="search-results">
    			</div>
    		</form>
    	</ul>
    	<ul class="navbar-nav ml-auto align-items-center">
    		<li class="nav-item">
    		<a class="nav-link active" href="{{route('anasayfa',1911873)}}">Ana Sayfa</a>
    		</li>
    		<li class="nav-item">
    		<a class="nav-link" href="author.html"><img class="rounded-circle mr-2" src="../anasayfa/img/av.png" width="30"><span class="align-middle">{{Auth()->user()->name}}</span></a>
    		</li>
    		<li class="nav-item dropdown">
    		<a class="nav-link" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    		<svg style="margin-top:10px;" class="_3DJPT" version="1.1" viewbox="0 0 32 32" width="21" height="21" aria-hidden="false" data-reactid="71"><path d="M7 15.5c0 1.9-1.6 3.5-3.5 3.5s-3.5-1.6-3.5-3.5 1.6-3.5 3.5-3.5 3.5 1.6 3.5 3.5zm21.5-3.5c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5zm-12.5 0c-1.9 0-3.5 1.6-3.5 3.5s1.6 3.5 3.5 3.5 3.5-1.6 3.5-3.5-1.6-3.5-3.5-3.5z" data-reactid="22"></path></svg>
    		</a>
    		<div class="dropdown-menu dropdown-menu-right shadow-lg" aria-labelledby="dropdown02">
    			<h4 class="dropdown-header display-4">Download Pintereso<br/> HTML Bootstrap Template</h4>
    			<div class="dropdown-divider">
    			</div>
    			<span class="dropdown-item"><a href="https://github.com/wowthemesnet/template-pintereso-bootstrap-html/archive/master.zip" class="btn btn-primary d-block"><i class="fa fa-download"></i> Download</a></span>
    		</div>
    		</li>
    	</ul>
    </div>
    </nav>
    <main role="main">
    <section class="mt-4 mb-5">
    <div class="container mb-4">
    	<h1 class="font-weight-bold title">Keşfet</h1>
    	<div class="row">
    		<nav class="navbar navbar-expand-lg navbar-light bg-white pl-2 pr-2">
    		<button class="navbar-light navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExplore" aria-controls="navbarsDefault" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
    		</button>
    		<div class="collapse navbar-collapse" id="navbarsExplore" data-aos="zoom-in">
    			<ul class="navbar-nav">
    				<li class="nav-item">
    				<a class="nav-link" href="{{route('anasayfa',3150958)}}">Yaşam</a>
    				</li>
    				<li class="nav-item">
    				<a class="nav-link" href="{{route('anasayfa',1027750)}}">Yemek</a>
    				</li>
    				<li class="nav-item">
    				<a class="nav-link" href="{{route('anasayfa',1424240)}}">Hayvanlar</a>
    				</li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('anasayfa',1988224)}}">Çiçekler</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('anasayfa',3174571)}}">Yaz</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="{{route('anasayfa',9415206)}}">Oyun</a>
            </li>
    			</ul>
    		</div>
    		</nav>
    	</div>
    </div>
    <div class="container-fluid">

    		<div class="card-columns" id="resimkutusu">
    		</div>

        </div>
    </section>

    </main>

    <script src="../../anasayfa/js/app.js"></script>
    <script src="../../anasayfa/js/theme.js"></script>

    <footer class="footer pt-5 pb-5 text-center">

    <div class="container">

          <div class="socials-media">

            <ul class="list-unstyled">
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-facebook"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-twitter"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-instagram"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-google-plus"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-behance"></i></a></li>
              <li class="d-inline-block ml-1 mr-1"><a href="#" class="text-dark"><i class="fa fa-dribbble"></i></a></li>
            </ul>

          </div>

            <!--
              All the links in the footer should remain intact.
              You may remove the links only if you donate:
              https://www.wowthemes.net/freebies-license/
            -->
          <p>©  <span class="credits font-weight-bold">
            <a target="_blank" class="text-dark"><u>Pintereso</u></a>
          </span>
          </p>


        </div>
    </footer>
    <script>


        var randomsayiuret;
        var dizi=[];
        var dedektor=0;

        function getir(numara,id)
        {
          var adres="https://source.unsplash.com/collection/"+id+"/200x400/?sig="+numara+"";
          fetch(adres).then(function(gelendeger)
          {

            var sayi=34;
            var urlid="";
            while(true) {
            if(gelendeger.url[sayi]=="-")
            {
              break;
            }
            else
            {
              urlid=urlid+gelendeger.url[sayi];
              sayi++;
            }
          }
          for (var i = 0; i < dizi.length; i++)
          {
             if(dizi[i]==urlid)
             {

              dedektor++;
             }
          }
          if(dedektor==0)
          {
            var x=dizi.length;

            dizi[x]=urlid;
                console.log(dizi[x]);
            urlid="";
            console.log(gelendeger.url);
            $('#resimkutusu').append(`
              <div class="card card-pin" data-aos="zoom-in">
                <img class="card-img" src=`+gelendeger.url+` alt="Card image" >
                <div class="overlay">
                  <div class="more">
                    <a style="cursor:pointer" onclick="deneme('`+gelendeger.url+`')">
                    <i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i>  Bu Resmi Keşfedin </a>
                  </div>
                </div>
              </div>
            `);
          }
          else {
            dedektor=0;
          }
        });
        //document.getElementById("unsplashImage").src=data.urls.regular;

       }
       var gelenid;
       var kontrol;
       function yurut(gelenid)
       {
       if(kontrol==gelenid)
        {
        }
        else {
         kontrol=gelenid;

         }
       setTimeout(function(){
        for (var i = 0; i <20; i++)
        {
          getir(i,gelenid);
        }
       },1000);
       }
       yurut({{$kategorid}});
       $(window).scroll(function(){
         var maxY = document.documentElement.scrollHeight - document.documentElement.clientHeight;
         //console.log(parseInt(window.pageYOffset) + ' . '+maxY);
         if(parseInt(window.pageYOffset)==maxY)
         {

             yurut({{$kategorid}});

         }
     });

    </script>
<script>
function deneme(url)
{

   var yeniurl="";
   for (var i=28; i < url.length; i++)
   {
    yeniurl=yeniurl+url[i];
    console.log(yeniurl);
   }
   var y=[];
   y[0]=yeniurl;
   window.location.href="{{route('post',[$kategorid,''])}}"+"/"+y;
}
</script>
</body>

</html>

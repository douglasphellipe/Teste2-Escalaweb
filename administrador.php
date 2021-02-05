<?php
session_start();//Inicia a sessão

//Verifica se a sessão email NÃO está criada
if(!isset($_SESSION['email_usuario'])){
//Aqui você faz o redirecionamento ou exibe a mensagem.
echo "<br><script type=\"text/javascript\">alert('Por favor realize o login');window.location.
          href='index.html'</script>";
exit;//Encerra a execução
}
 
    ?>
<!DOCTYPE html>
<html>
<title>Imobiliária vivace</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" href="data:image/png;base64,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" type="image/x-icon">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", Arial, Helvetica, sans-serif}
</style>
<body class="w3-light-grey">
  <div class="w3-bar w3-white w3-large">
  <a href="excluir.html" class="w3-bar-item w3-button w3-red w3-mobile">Excluir Conta</a>
  <a href="sair.html" class="w3-bar-item w3-button w3-mobile">Deslogar</a>
</div>
<form action="contato.html" method="post">
<!-- Page content -->
<div class="w3-content" style="max-width:1532px;">
  <div class="w3-row-padding w3-padding-16">
    <div class="w3-third w3-margin-bottom">
      <img src="https://imagens-revista.vivadecora.com.br/uploads/2019/12/casas-lindas-com-piscina-e-varanda-ampla-Foto-Zozu.jpg" alt="casamogi" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Casa com 200m²</h3>
        <h6 class="w3-opacity" name="valor">Apenas R$899/Mês</h6>
        <p name="quartos">2 quartos</p>
        <p name="cidade">Mogi das Cruzes</p> <p name="estado">SP</p>
        <button class="w3-button w3-block w3-black w3-margin-bottom" type="submit">Me interessei</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
     <img src="https://imagens-revista.vivadecora.com.br/uploads/2019/12/casas-lindas-com-piscina-e-varanda-ampla-Foto-Zozu.jpg" alt="casamogi" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Casa com 150m²</h3>
        <h6 class="w3-opacity" name="valor">Apenas R$699/Mês</h6>
        <p name="quartos">1 quarto</p>
        <p name="cidade">Suzano</p> <p name="estado">SP</p>
        <button class="w3-button w3-block w3-black w3-margin-bottom" type="submit">Me interessei</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="https://imagens-revista.vivadecora.com.br/uploads/2019/12/casas-lindas-com-piscina-e-varanda-ampla-Foto-Zozu.jpg" alt="casamogi" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Casa com 180m²</h3>
        <h6 class="w3-opacity" name="valor">Apenas R$799/Mês</h6>
        <p name="quartos">3 quartos</p>
        <p name="cidade">Poá</p> <p name="estado">SP</p>
        <button class="w3-button w3-block w3-black w3-margin-bottom" type="submit">Me interessei</button>
      </div>
    </div>
    <div class="w3-third w3-margin-bottom">
      <img src="https://imagens-revista.vivadecora.com.br/uploads/2019/12/casas-lindas-com-piscina-e-varanda-ampla-Foto-Zozu.jpg" alt="casamogi" style="width:100%">
      <div class="w3-container w3-white">
        <h3>Casa com 500m²</h3>
        <h6 class="w3-opacity" name="valor">Apenas R$1699/Mês</h6>
        <p name="quartos">3 quartos</p>
        <p name="cidade">Belo Horizonte</p> <p name="estado">MG</p>
        <button class="w3-button w3-block w3-black w3-margin-bottom" type="submit">Me interessei</button>
      </div>
    </div>
  </div>
<footer class="w3-padding-32 w3-black w3-center w3-margin-top">
  <h5>Siga nossas redes sociais</h5>
  <div class="w3-xlarge w3-padding-16">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>

  </div>
</footer>

<!-- Add Google Maps -->
<script>
function myMap() {
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

</body>
</html>
<!-- End page content -->
</div>

<?php
session_start();
error_reporting(0);
$_SESSION['prijavljen']=true;
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  <script>
 
  
  </script>
  
</head>
<body>
<br>
<div class="container">
   <form action="Navigacija.php" method="post" role="form" id="formId">
 <ul class="nav nav-tabs" role="tablist" style="background-color:rgba(248,235,217,1.00)">
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="RadnikID">
      Katedra <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
       <li><a href="O Katedri.html">O Katedri</a> </li>
      <li><a href="Clanovi katedre.html">Clanovi katedre</a> </li>
      <li><a href="Kratka istorija racunarstva.html">Kratka istorija racunarstva.html</a> </li>
      </ul>
    </li>
    
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
      Studije <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="Studijski programi.html">Studijski programi</a> </li>
      <li><a href="Za buduce studente.html">Za buduce studente</a> </li>
      <li><a href="Ispitni rokovi.html">Ispitni rokovi</a> </li>
      <li><a href="Raspored casova.html">Raspored casova</a> </li>
      </ul>
    </li>
    
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown">
      Nauka<span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="Grupa za Metodiku nastave racunarstva.html">Grupa za Metodiku nastave racunarstva</a> </li> 
		<li><a href="Grupa za Informacione sisteme.html">Grupa za Informacione sisteme</a></li>
   		<li><a href="Grupa za istra?ivanje podataka.html">Grupa za Istra?ivanje podataka</a></li>                        
      </ul>
    </li>
    
    <li class="dropdown">
    <a class="dropdown-toggle" data-toggle="dropdown">
      Saradnja <span class="caret"></span></a>
      <ul class="dropdown-menu" role="menu">
        <li><a href="Saradnja sa drugim fakultetima.html">Saradnja sa drugim fakultetima</a></li>   
         <li><a href="Saradnj sa IT kompanijama.html">Saradnj sa IT kompanijama</a></li>                        
      </ul>
    </li> 
       
  </ul>
  <center>
 <img src="image.jpg"  class="img-responsive" style="width:100%"><br>
  </center> <br>
  </form>
</div>
</body>
</html>


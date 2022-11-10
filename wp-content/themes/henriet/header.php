<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="shortcut icon" type="image/png" href=""/>
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<?php wp_head(); ?>
<title>Henriet électricité</title>
<nav class="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/henriet">Accueil</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Nos services
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/henriet/particuliers">Particuliers</a></li>
              <li><a class="dropdown-item" href="/henriet/tertiaire">Tertiaire</a></li>
              <li><a class="dropdown-item" href="/henriet/industrie">Industrie</a></li>
              <li><a class="dropdown-item" href="/henriet/agricole">Secteur agricole</a></li>
              <li>
              </li>
            </ul>
            <li class="nav-item">
            <a class="nav-link" href="/henriet/notre-societe">Notre société</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/henriet/nos-realisations">Nos réalisations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/henriet/contact">Contact</a>
          </li>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>
</head>

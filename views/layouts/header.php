<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ title }}</title>
    <link rel="stylesheet" href="{{asset}}css/main.css">
</head>
<body>
     <nav>
         <header class="nav-container">
            <nav id="nav-bar">
                <picture>
                    <img
                        class="logo-header"
                        src="{{asset}}img/logo-2.webp"
                        alt="logo" />
                </picture>
                <div class="burger-menu">
                    <span> </span>
                    <span> </span>
                    <span> </span>
                </div>
                <div class="nav-links">
                    <a href="{{base}}/user/create">Devenir membre</a>
                    <a href="#">Actualité</a>
                    <a href="#">Enchères</a>
                    <a href="{{base}}/login">Se connecter</a>
                   
                </div>
            </nav>
            <nav id="sub-navbar">
                <div class="subnav-links">
                    <a href="#">À propos de Lord Stampee</a>
                    <a href="#">Language&#9660;</a>
                </div>
                <input
                    class="nav-input"
                    type="text"
                    name="search-bar"
                    placeholder="Rechercher..."
                    aria-label="Rechercher..." />
            </nav>
             
        </header>
     </nav>
     <main>
       
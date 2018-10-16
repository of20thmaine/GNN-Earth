<?php
/**
* Bobby Palmer, CSC-465, GNN-Earth
* Class constructs template for site-wide
* page header.
*/

class Header {

    private $title;
    private $cssLink;

    public function __construct($title, $cssLink) {
        $this->title = $title;
        $this->cssLink = $cssLink;
    }

    /**
    * Function returns header HTML as a HEREDOC String.
    */
    public function getHeader() {
        return  <<<HTML

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>$this->title</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href=$this->cssLink>
    <meta name="theme-color" content="#5F4B8B">
</head>
<body>
    <div id="sidebar-blinds">
        <div id="sidebar">
            <a href=""><img src="./img/logo.png" alt="logo" class="logo-img"></a>
            <div id="main-menu">
                <div class="sb-item" id="sb1">
                    <p class="focus-arrow" id="sb1fa">&#9654;</p><a href=""><h3>Headlines</h3></a>
                    <div class="submenu" id="sb1sm">
                        <a href=""><h4>Earth</h4></a>
                        <a href=""><h4>Galactic</h4></a>
                        <a href=""><h4>Travel</h4></a>
                        <a href=""><h4>Culture</h4></a>
                    </div>
                </div>
                <div class="sb-item" id="sb2">
                    <p class="focus-arrow" id="sb2fa">&#9654;</p><a><h3>Comics</h3></a>
                    <div class="submenu" id="sb2sm">
                        <a href=""><h4>Human Humor</h4></a>
                        <a href=""><h4>Cosmic Tidings</h4></a>
                    </div>
                </div>
                <div class="sb-item" id="sb3">
                    <p class="focus-arrow" id="sb3fa">&#9654;</p><a href=""><h3>Agora</h3></a>
                    <div class="submenu" id="sb3sm">
                        <a href=""><h4>Trending</h4></a>
                        <a href=""><h4>News Review</h4></a>
                    </div>
                </div>
            </div>
            <div id="topstories-header">
                <p>Top Stories:</p>
            </div>
            <div id="topstories">
                <div class ="topstory-headline">
                    <a href="#"><p>Help! My Mom is an Eel</p></a>
                </div>
                <div class ="topstory-headline">
                    <a href="#"><p>Insert Consciousness Here</p></a>
                </div>
                <div class ="topstory-headline">
                    <a href="#"><p>How to Escape a Dangerous Elevator</p></a>
                </div>
                <div class ="topstory-headline">
                    <a href="#"><p>Did he say that? Boris Johnson did.</p></a>
                </div>
                <div class ="topstory-headline">
                    <a href="#"><p>Mistake Not...</p></a>
                </div>
                <div class ="topstory-headline">
                    <a href="#"><p>It's My Party And I'll Sing If I Want Too</p></a>
                </div>
            </div>
            <div id="user-area">
                <p>Are you a member?</p>
                <div id="register-login">
                    <p>Login / Register</p>
                </div>
            </div>
            <div id=sidebar-footer>
                <p>GNN &copy; 2018<br>Contact us:<br><a href="">admin@gnn-earth.com</a></p>
            </div>
        </div>
    </div>
    <div id="mobilenav">
        <ul>
            <li><a href=""><img src="./img/logo.png" alt="logo" class="logo-img"></a></li>
            <li><button id="open-side">Menu</button></li>
        </ul>
    </div>

HTML;
// Must be returned on column 0.
    }
}


<?php
/**
* Bobby Palmer, CSC-465, GNN-Earth
*/

include(dirname(__DIR__).'/htdocs/pages/header.php');
include(dirname(__DIR__).'/htdocs/pages/homepage.php');
include(dirname(__DIR__).'/htdocs/pages/footer.php');

function displayHomePage() {
    $header = new Header('GNN-Earth', '"./css/homepage.css"');
    $page = new HomePage();
    $footer = new Footer();

    echo $header->getHeader();
    echo $page->getHomePage();
    echo $footer->getFooter();
}

displayHomePage();

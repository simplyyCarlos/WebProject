
<?php
function getActiveURL($fileName){
    if($_SERVER['PHP_SELF'] == $fileName){
        echo('active');
    }
};
function getImgFormat(){
    if(preg_match('#image/avif#', $_SERVER['HTTP_ACCEPT'])){
        echo('.avif');
    }
    else if(preg_match('#image/webp#',$_SERVER['HTTP_ACCEPT'])){
        echo('.webp');
    }else{
        echo('.jpg');
    }
    
};

?>
<?php
# Constantes php utilisées dans le bottom.php
const NUM = '04.74.35.45.62';
const MAIL = 'jules.valette2@etu.univ-lyon1.fr';
const ADRESS = '9 Rue Pierre de Coubertin,01250 Ceyzériat'; 

# Variables navbar.php
$logoTitle = 'JulesValette';
$delim = '.io';
$homePage = 'Home';
$contactPage = 'Contact';

# Variables header.php
$pageTitle = 'Jules Valette';
$relCSS = 'style.css';

?>
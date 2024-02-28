<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<!DOCTYPE html>

<html lang="da">
    <head>
        <meta charset="utf-8">
        <title>Ivan Popov - Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <script src="plugins/jquery/jquery-2.2.3.min.js" type="text/javascript"></script>
        <script src="plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
        <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        
        <link href="https://fonts.googleapis.com/css?family=Jura|Righteous" rel="stylesheet">
    </head>
    <body>
        <div id="wrapper">
            <div class="offgrid">
                <a href="#" class="btn-social"><i class="fa fa-facebook"></i></a>
                <a href="#" class="btn-social"><i class="fa fa-linkedin"></i></a>
                <a href="#" class="btn-social"><i class="fa fa-twitter"></i></a>
            </div>
            
            <div class="container-fluid" id="menuwrap">
                
                <nav class="nav navbar-default" data-spy="affix" data-offset-top="500">
                    
                    <ul class="nav navbar-nav">
                        <li><a href="#" onclick="scrollToAnchor(event, 'bio_info')"><i class="fa fa-user"></i> Profil</a></li>
                        <li><a href="#" onclick="scrollToAnchor(event, 'projekter')"><i class="fa fa-image"></i> Projekter</a></li>
                    </ul>
                    
                </nav>
                
            </div>
            
            <div class="container-fluid">
                <div class="jumbotron banner" >
                    <div class="slides" id="slide1" style="background-image: url('img/jumbo1.jpg'); display: none;" ></div>
                    <div class="slides" id="slide2" style="background-image: url('img/jumbo2.jpg');" ></div>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div id="cont_left">
                            <h3>
                                Profil
                            </h3>
                            <p>
                                Ivan Popov er Multimediedesigner studerende på KEA.
                            </p>
                            <a href="#" onclick="scrollToAnchor(event, 'bio_info')">Læs mere...</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div id="cont_right">
                            <h3>
                                Projekter
                            </h3>
                            <p>
                                Her kan du finde de forskellige projekter.
                            </p>
                            <a href="#" onclick="scrollToAnchor(event, 'projekter')">Læs mere...</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                <div class="breaker">
                    <h3>Min KEA Portfolio</h3>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div id="bio_info" class="col-md-6">
                        <p>
                            Hej, mit navn er Ivan Popov, jeg er 38 år og bor i Haslev, er ugift og har ingen børn.
                        </p>
                        <p>
                           Jeg elsker web design - både det grafiske og kodning. Jeg er uddannet som web-integrator på Roskilde Tekniske Skole 
                           og har arbejdet både freelance og i en virksomhed så jeg har noget erfraing med PHP/mySQL, html/css, javascript/jquery, bootstrap, SASS og nogle CMS nemlig Joomla og WordPress, og Adobe produkter nemlig Photoshop og Illustrator.
                           Jeg har et freelance arbejde som tolk hos ViTolker.
                        </p>
                        <p>
                           I min fritid elsker jeg at lave musik, mods til forskellige spil og har prøvet at lave mit eget spil i Unity.
                        </p>
                    </div>
                    <div id="photo_box" class="col-md-6"><img src="img/ivan.png" alt="profil foto" /></div>
                </div>
            </div>
            
            <div class="container-fluid">
                <div class="breaker">
                    <h3>
                        Projekter
                    </h3>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div id="projekter">
                            <p>
                                Under Construction
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <div class="col-lg-12" id="skills">
                        <img src="img/skillsline.png" alt="web technology" />
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                <div class="googlemap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3369.4570165566315!2d12.552192941570256!3d55.691720980743405!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465253abae55267d%3A0x7f06e00bd751130a!2sKEA%20K%C3%B8benhavns%20Erhvervsakademi%20-%20Main%20Campus!5e0!3m2!1sda!2sdk!4v1675714327154!5m2!1sda!2sdk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>    
            
            <div class="container-fluid container-bottom">
                <div class="row">
                    
                    <div class="col-sm-6">
                        <div class="bottom">
                            <h3>Kontakt Info</h3>
                            <p>
                                <i class="fa fa-phone"></i> +45 40 55 74 52
                            </p>
                            <p>
                                <i class="fa fa-envelope"></i> tyrael2101@hotmail.com
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                        <div class="bottom text-right">
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <script type="text/javascript">
            function scrollToAnchor(event, anchor) {
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: $("#" + anchor).offset().top - 50
                }, 800);
            }
            
            $(document).ready(function() {
                
                $(".banner-caption").fadeIn("slow");
                
                function toggleSlider() {
                    $("#slide1").fadeToggle("slow");
                    $("#slide2").fadeToggle("slow");
                }
                
                window.setInterval(toggleSlider, 8000);
            });
            
            $(document).scroll(function() {
                var scroll = $(window).scrollTop();
                
                if(scroll >= 500) {
                    $("#logo").css("width", "100px");
                    $("#logo").css("height", "40px");
                    $("#logo").css("margin-top", "-7px");
                }
                else {
                    $("#logo").css("width", "299px");
                    $("#logo").css("height", "115px");
                    $("#logo").css("margin-top", "-45px");
                }
            });
            
        </script>
        
    </body>
</html>
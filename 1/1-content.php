<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1">
    <div class="container">
        <div class="navHeader"
             style="margin-top: 30px; display: flex; align-items: center">
            <div>
                <img src="images/logo.png"/>
            </div>
            <div class="main-navigation" style="flex: 1; display: flex; justify-content: flex-end; height: 60px;">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav" style="height: 60px; display: flex; align-items: center">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownHome" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">Home</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownHome">
                                    <a class="dropdown-item" href="#">Home Map Vertical</a>
                                    <a class="dropdown-item" href="#">Home Map Horizontal</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownHome" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">Properties</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownHome">
                                    <a class="dropdown-item" href="#">List</a>
                                    <a class="dropdown-item" href="#">Grid</a>
                                    <a class="dropdown-item" href="#">Property Details</a>
                                    <a class="dropdown-item" href="#">Property Details 2</a>

                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownHome" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">Features</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownHome">
                                    <a class="dropdown-item" href="#">Blog</a>
                                    <a class="dropdown-item" href="#">Shortcodes</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownHome" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">Agents</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownHome">
                                    <a class="dropdown-item" href="#">Agent Details</a>
                                    <a class="dropdown-item" href="#">Agent Listings</a>
                                </div>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#">My Properties</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdownContact" data-toggle="dropdown"
                                   aria-haspopup="true" aria-expanded="false">Contact</a>
                                <div class="dropdown-menu" aria-labelledby="dropdownContact">
                                    <a class="dropdown-item" href="#">Contact 1</a>
                                    <a class="dropdown-item" href="#">Contact 2</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div style="display: flex; border-left: 1px solid #e5e5e5">
                <i class="fa fa-mobile" style="font-size: 60px; padding: 0 15px; color: #75b08a;"></i>
                <div>
                    <div style="font-size: 18px; color: #c9c9c9;">Call us now</div>
                    <span style="font-size: 18px; color: #2d313f;">(+01)-793-7938</span>
                </div>
            </div>
        </div>

    </div>
    <div>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div style="position: relative;">
                        <img class="d-block w-100" src="images/bg-slide1.jpg" alt="First slide">
                        <div style=" position: absolute; width: 100% ;background: rgba(0, 0, 0, 0.4); bottom: 40%;">
                            <div style="padding: 50px 0;text-align: center">
                                <h3 style="font-size: 48px; font-weight: bold; text-transform: uppercase; color: white;">
                                    Avenida De La</h3>
                                <div style="font-size: 30px; color: white;">6001 W Alluvial Ave</div>
                            </div>
                            <div style="display: flex; justify-content: space-evenly; padding: 20px 200px;text-align: center; background: rgba(0, 0, 0, 0.4); color: white;">
                                <div>
                                    <img style="padding-right: 40px" src="images/size-icon-2.png"/> 200
                                </div>
                                <div>
                                    <img style="padding-right: 40px" src="images/bathroom-icon-2.png"/> 3
                                </div>
                                <div>
                                    <img style="padding-right: 40px" src="images/bedroom-icon-2.png"/> 3
                                </div>
                                <div style="font-weight: bold">
                                    $ 200,000
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div style="position: relative;">
                        <img class="d-block w-100" src="images/bg-slide2.jpg" alt="Second slide">
                        <div style=" position: absolute; width: 100% ;background: rgba(0, 0, 0, 0.4); bottom: 40%;">
                            <div style="padding: 50px 0;text-align: center">
                                <h3 style="font-size: 48px; font-weight: bold; text-transform: uppercase; color: white;">
                                    Avenida De La</h3>
                                <div style="font-size: 30px; color: white;">6001 W Alluvial Ave</div>
                            </div>
                            <div style="display: flex; justify-content: space-evenly; padding: 20px 200px;text-align: center; background: rgba(0, 0, 0, 0.4); color: white;">
                                <div>
                                    <img style="padding-right: 40px" src="images/size-icon-2.png"/> 200
                                </div>
                                <div>
                                    <img style="padding-right: 40px" src="images/bathroom-icon-2.png"/> 3
                                </div>
                                <div>
                                    <img style="padding-right: 40px" src="images/bedroom-icon-2.png"/> 3
                                </div>
                                <div style="font-weight: bold">
                                    $ 200,000
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="carousel-item">
                    <div style="position: relative;">
                        <img class="d-block w-100" src="images/bg-slide3.jpg" alt="Third slide">
                        <div style=" position: absolute; width: 100% ;background: rgba(0, 0, 0, 0.4); bottom: 40%;">
                            <div style="padding: 50px 0;text-align: center">
                                <h3 style="font-size: 48px; font-weight: bold; text-transform: uppercase; color: white;">
                                    Avenida De La</h3>
                                <div style="font-size: 30px; color: white;">6001 W Alluvial Ave</div>
                            </div>
                            <div style="display: flex; justify-content: space-evenly; padding: 20px 200px;text-align: center; background: rgba(0, 0, 0, 0.4); color: white;">
                                <div>
                                    <img style="padding-right: 40px" src="images/size-icon-2.png"/> 200
                                </div>
                                <div>
                                    <img style="padding-right: 40px" src="images/bathroom-icon-2.png"/> 3
                                </div>
                                <div>
                                    <img style="padding-right: 40px" src="images/bedroom-icon-2.png"/> 3
                                </div>
                                <div style="font-weight: bold">
                                    $ 200,000
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev iconArrow" href="#carouselExampleControls" role="button"
               data-slide="prev">
                <img src="images/prev-icon.png"/>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next iconArrow" href="#carouselExampleControls" role="button"
               data-slide="next">
                <img src="images/next-icon.png"/>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<!--<div class="type-17">-->
<!--    <div class="container">-->
<!--        <div class="nav-menu">-->
<!--            <ul class="menu">-->
<!--                <span class="menu-item"><img src="images/logo.png"></span>-->
<!--                <li class="menu-item">Phone</li>-->
<!--                <li class="menu-item">Home <span class="arrow-icon">></span>-->
<!--                    <div class="sub-menu">-->
<!--                        <div class="sub-item" selected>Home - Light</div>-->
<!--                        <div class="sub-item">Home - Dark</div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="menu-item">About us</li>-->
<!--                <li class="menu-item">Project <span class="arrow-icon">></span>-->
<!--                    <div class="sub-menu">-->
<!--                        <div class="sub-item" selected>Project - List</div>-->
<!--                        <div class="sub-item">Project - Details</div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="menu-item">Blog <span class="arrow-icon">></span>-->
<!--                    <div class="sub-menu">-->
<!--                        <div class="sub-item" selected>Blog - Post</div>-->
<!--                        <div class="sub-item">Blog - List</div>-->
<!--                    </div>-->
<!--                </li>-->
<!--                <li class="menu-item">Contacts</li>-->
<!--                <li class="menu-item"></li>-->
<!--            </ul>-->
<!--            <div class="current-select">-->
<!--                <div class="title-menu">BLOG - LIST</div>-->
<!--                <div class="description"><a href="#">Home/ Blog<span class="load-item">/ Blog -Post</span></a></div>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
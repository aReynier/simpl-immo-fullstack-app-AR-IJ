<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Simpl'immo | Page d'accueil</title>
        <meta name="description" content="Simpl'immo est une agence basée sur Paris">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="/public/favicon.ico" type="image/x-icon">
        <link rel="icon" href="/public/favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/fontello.css">
        <link href="assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
        <link href="assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
        <link href="assets/css/animate.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="assets/css/bootstrap-select.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/icheck.min_all.css">
        <link rel="stylesheet" href="assets/css/price-range.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.css">
        <link rel="stylesheet" href="assets/css/owl.theme.css">
        <link rel="stylesheet" href="assets/css/owl.transitions.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>

        <div id="preloader">
            <div id="status">&nbsp;</div>
        </div>
        <!-- Body content -->

        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">

                    <div class="item"><img src="assets/img/slide1/slider-image-1.jpg" alt="Photo d'une jolichambre"></div>
                    <div class="item"><img src="assets/img/slide1/slider-image-2.jpg" alt="Photo d'une chambre cosy"></div>
                    <div class="item"><img src="assets/img/slide1/slider-image-3.jpg" alt="Photo d'une chambre chaleureuse"></div>

                </div>
            </div>
            <div class="slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2>Votre futur chez vous à portée de clic</h2>
                        <!-- to add on a next version -->
                        <!-- <div class="search-form wow pulse" data-wow-delay="0.8s">
                            <form action="" class=" form-inline">
                                <div class="form-group">
                                    <select id="basic" class="selectpicker show-tick form-control" multiple title="Appartement/Maison">
                                        <option>Appartement</option>
                                        <option>Maison</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Ville">

                                        <option>New york, CA</option>
                                        <option>Paris</option>
                                        <option>Casablanca</option>
                                        <option>Tokyo</option>
                                        <option>Marraekch</option>
                                        <option>kyoto , shibua</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <select id="basic" class="selectpicker show-tick form-control">
                                        <option>Achat/Location</option>
                                        <option>Achat</option>
                                        <option>Location</option>
                                    </select>
                                </div>
                                <button class="btn search-btn" type="submit"><i class="fa fa-search"></i></button>

                                <div style="display: none;" class="search-toggle">

                                    <div class="search-row">

                                        <div class="form-group mar-r-20">
                                            <label for="price-range">Gamme tarifaire:</label>
                                            <input type="text" class="span2" value="" data-slider-min="500"
                                                   data-slider-max="1000000" data-slider-step="5"
                                                   data-slider-value="[500,1000000]" id="price-range" ><br />
                                            <b class="pull-left color">500€</b>
                                            <b class="pull-right color">1000000€</b>
                                        </div>
                                         End of 

                                        <div class="form-group mar-l-20">
                                            <label for="property-geo">Surface:</label>
                                            <input type="text" class="span2" value="" data-slider-min="40"
                                                   data-slider-max="1200" data-slider-step="5"
                                                   data-slider-value="[40,1200]" id="property-geo" ><br />
                                            <b class="pull-left color">40m²</b>
                                            <b class="pull-right color">1200m²</b>
                                        </div>
                                         End of  
                                    </div>

                                    <div class="search-row">

                                        <div class="form-group mar-r-20">
                                            <label for="min-rooms">Nb de pièces :</label>
                                            <input type="text" class="span2" value="" data-slider-min="1"
                                                   data-slider-max="12" data-slider-step="1"
                                                   data-slider-value="[1,412]" id="min-rooms" ><br />
                                            <b class="pull-left color">1</b>
                                            <b class="pull-right color">12</b>
                                        </div>
                                         End of  

                                        <div class="form-group mar-l-20">
                                            <label for="min-bed">Nb de chambres:</label>
                                            <input type="text" class="span2" value="" data-slider-min="1"
                                                   data-slider-max="12" data-slider-step="1"
                                                   data-slider-value="[1,12]" id="min-bed" ><br />
                                            <b class="pull-left color">1</b>
                                            <b class="pull-right color">12</b>
                                        </div>
                                         End of  

                                    </div>

                                    <div class="search-row">

                                        <div class="form-group mar-r-20">
                                            <label for="min-floor">Nb d'étages:</label>
                                            <input type="text" class="span2" value="" data-slider-min="1"
                                                   data-slider-max="5" data-slider-step="1"
                                                   data-slider-value="[1,5]" id="min-floors" ><br />
                                            <b class="pull-left color">1</b>
                                            <b class="pull-right color">5</b>
                                        </div>
                                         End of  

                                        <div class="form-group  mar-l-20">
                                        <label for="heat">Chauffage:</label>
                                            <select id="heat" class="selectpicker show-tick form-control" multiple title="Type">
                                                <option>Electrique</option>
                                                <option>Gaz</option>
                                            </select>
                                        </div>
                                         End of 

                                    </div>
                                    <br>
                                    <div class="search-row">

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Meublé()
                                                </label>
                                            </div>
                                        </div>
                                         End of  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Balcon()
                                                </label>
                                            </div>
                                        </div>
                                         End of  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Piscine()
                                                </label>
                                            </div>
                                        </div>
                                         End of  
                                    </div>

                                    <div class="search-row">

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Grenier()
                                                </label>
                                            </div>
                                        </div>
                                         End of  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Climatisation()
                                                </label>
                                            </div>
                                        </div>
                                        End of 

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Garage()
                                                </label>
                                            </div>
                                        </div>
                                         End of  
                                    </div>

                                    <div class="search-row">

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Jardin()
                                                </label>
                                            </div>
                                        </div>
                                        End of  

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Terrasse()
                                                </label>
                                            </div>
                                        </div>
                                         End of 

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Ascenseur()
                                                </label>
                                            </div>
                                        </div>
                                         End of  

                                    </div>

                                    <div class="search-row">

                                        <div class="form-group">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox"> Concierge()
                                                </label>
                                            </div>
                                        </div>
                                         End of  
                                        <br>
                                        <hr>
                                    </div>
                                    <button class="btn search-btn prop-btm-sheaerch" type="submit"><i class="fa fa-search"></i></button>
                                </div>

                            </form>
                            <button class="btn toggle-btn criteria-btn" type="button"><i class="fa fa-arrow-circle-down"></i> Plus de critères</button>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>

        <!-- property area -->
        <div class="content-area home-area-1 recent-property" style="background-color: #FCFCFC; padding-bottom: 55px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1 col-sm-12 text-center page-title">
                        <!-- /.feature title -->
                        <h2>Derniers logements ajoutés</h2>
                    </div>
                </div>

                <div class="row">
                    <div class="proerty-th">
                        
                    <?php $lastEstastes = array_reverse(array_slice($estates, -7)); ?>
                    <?php foreach ($lastEstastes as $lastEstaste): ?>
                    <div class="col-sm-6 col-md-3 p0">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="" ><img src="assets/img/no-photo-announce.jpg"></a>
                                    <div class="item-entry overflow">
                                        <h5><a href=""><?php echo $lastEstaste->title; ?></a></h5>
                                        <hr class="item-entry-separator my-2"/>
                                        <span class="pull-left"><?php 
                                            if ($lastEstaste->isHouse) {
                                                echo "Maison";
                                            } else {
                                                echo "Appartement";
                                            } ;
                                        ?></span>
                                        <span class="proerty-price pull-right"><?php echo $lastEstaste->type; ?></span><br/>
                                        <span><i class="fa fa-map-marker"></i><?php echo $lastEstaste->city; ?></span>
                                        <div class="">
                                            <img src="assets/img/icon/room-icon.svg" class="property-icon-single" width="20px"> (<?php echo $lastEstaste->roomNumber; ?>)|
                                            <img src="assets/img/icon/bed-icon.svg" class="property-icon-single" width="20px"> (<?php echo $lastEstaste->bedroomNumber; ?>) 
                                        </div>
                                        <span class="pull-right">TTC</span><br/>
                                        <span class="pull-left">Surface <?php echo $lastEstaste->propertySurface; ?>m²</span>
                                        <span class="proerty-price pull-right"><?php echo $lastEstaste->price; ?>€</span><br/>
                                        <a href="mailto:contact@simplimmo.com"><button class="btn item-entry-button pull-right" value="All properties"><i class="fa fa-envelope"> </i> Contacter</button></a>
                                    </div>
                                </div>

                            </div>
                        </div> 
                        <?php endforeach; ?>
   
                            <div class="col-sm-6 col-md-3 p0">
                                <div class="box-tree more-proerty text-center">
                                    <div class="more-entry overflow">
                                        <a href="estates"><button class="btn border-btn more-black" value="All properties">Voir tous les biens</button></a>
                                    </div>
                                </div>
                            </div>

                        </div>

            </div>
        </div>

        </div>

        <script src="assets/js/modernizr-2.6.2.min.js"></script>

        <script src="assets/js/jquery-1.10.2.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
        <script src="assets/js/bootstrap-hover-dropdown.js"></script>

        <script src="assets/js/easypiechart.min.js"></script>
        <script src="assets/js/jquery.easypiechart.min.js"></script>

        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.js"></script>

        <script src="assets/js/icheck.min.js"></script>
        <script src="assets/js/price-range.js"></script>

        <script src="assets/js/main.js"></script>

    </body>
</html>
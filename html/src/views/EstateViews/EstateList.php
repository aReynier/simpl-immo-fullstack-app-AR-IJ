<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> 
<html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Simpl'immo | Liste des logements</title>
        <meta name="description" content="Simpl'immo est une agance basée sur Paris">
        <meta name="author" content="Kimarotec">
        <meta name="keyword" content="html5, css, bootstrap, property, real-estate theme , bootstrap template">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
        <link rel="icon" href="favicon.ico" type="image/x-icon">

        <link rel="stylesheet" href="assets/css/normalize.css">
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

        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Liste des logements</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="properties-area recent-property" style="background-color: #FFF;">
            <div class="container">   
                <div class="row">
                    <div class="col-md-9 padding-top-40 properties-page">
                        <div class="section clear"> 
                            <div class="col-xs-10 page-subheader sorting pl0">
                                <ul class="sort-by-list">
                                <?php $gradedEstastes = array_reverse($estates); ?>
                                <?php $gradedEstastes = usort($estates, fn($a, $b) => $a->price <=> $b->price); ?>
                                    <li class="active">
                                        <a href="" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                            Date d'ajout <i class="fa fa-sort-amount-asc"></i>					
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                            Prix du bien <i class="fa fa-sort-numeric-asc"></i>						
                                        </a>
                                    </li>
                                </ul><!--/ .sort-by-list-->
                            </div>
                        </div>

                        <div class="section clear"> 
                            <div id="list-type" class="d-inline-flex flex-wrap">

                    <?php $gradedEstastes = array_reverse($estates); ?>
                    <?php foreach ($gradedEstastes as $gradedEstaste): ?>
                    <div class="col-sm-6 col-md-4 p0 px-2 py-2">
                            <div class="box-two proerty-item">
                                <div class="item-thumb">
                                    <a href="property-1.html" ><img src="assets/img/demo/property-2.jpg"></a>
                                    <div class="item-entry overflow mx-3 my-3">
                                        <h5><a href="property-1.html"><?php echo $gradedEstaste->title; ?></a></h5>
                                        <hr class="item-entry-separator my-2"/>
                                        <span class="pull-left"><?php 
                                            if ($gradedEstaste->isHouse) {
                                                echo "Maison";
                                            } else {
                                                echo "Appartement";
                                            } ;
                                        ?></span>
                                        <span class="proerty-price pull-right"><?php echo $gradedEstaste->type; ?></span><br/>
                                        <span><i class="fa fa-map-marker"></i><?php echo $gradedEstaste->city; ?></span>
                                        <div class="">
                                            <img src="assets/img/icon/room-icon.svg" class="property-icon-single" width="20px"> (<?php echo $gradedEstaste->roomNumber; ?>)|
                                            <img src="assets/img/icon/bed-icon.svg" class="property-icon-single" width="20px"> (<?php echo $gradedEstaste->bedroomNumber; ?>) 
                                        </div>
                                        <span class="pull-right">TTC</span><br/>
                                        <span class="pull-left">Surface <?php echo $gradedEstaste->propertySurface; ?>m²</span>
                                        <span class="proerty-price pull-right"><?php echo $gradedEstaste->price; ?>€</span>
                                        <button class="btn item-entry-button pull-right" value="All properties"><i class="fa fa-envelope"> </i> Contacter</button>
                                    </div>
                                </div>

                            </div>
                        </div> 
                        <?php endforeach; ?>    

                        <div class="section">
                            <div class="pull-right">
                                <div class="pagination">
                                    <ul>
                                        <li><a href="#">Prev</a></li>
                                        <li><a href="#">1</a></li>
                                        <li><a href="#">2</a></li>
                                        <li><a href="#">3</a></li>
                                        <li><a href="#">4</a></li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> 
            </div>
                    <div class="col-md-3 pl0 padding-top-40">
                        <div class="blog-asside-right pl0">
                            <div class="panel panel-default sidebar-menu wow fadeInRight animated" >
                                <div class="panel-heading">
                                    <h3 class="panel-title">Recherche avancée</h3>
                                </div>
                                <div class="panel-body search-widget">
                                    <form action="" class=" form-inline"> 
                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-12">
                                                <select id="basic" class="selectpicker show-tick form-control" multiple title="Appartement/Maison">
                                                    <option>Appartement</option>
                                                    <option>Maison</option>
                                                </select>                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset>
                                            <div class="row">
                                                <div class="col-xs-6">

                                                    <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Ville">

                                                        <option>New york, CA</option>
                                                        <option>Paris</option>
                                                        <option>Casablanca</option>
                                                        <option>Tokyo</option>
                                                        <option>Marraekch</option>
                                                        <option>kyoto , shibua</option>
                                                    </select>
                                                </div>
                                                <div class="col-xs-6">

                                                <select id="basic" class="selectpicker show-tick form-control">
                                                    <option>Achat/Location</option>
                                                    <option>Achat</option>
                                                    <option>Location</option>
                                                </select>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <label for="price-range">Gamme tarifaire:</label>
                                                <input type="text" class="span2" value="" data-slider-min="500"
                                                    data-slider-max="1000000" data-slider-step="5"
                                                    data-slider-value="[500,1000000]" id="price-range" ><br />
                                                <b class="pull-left color">500€</b>
                                                <b class="pull-right color">1000000€</b>                                              
                                                </div>
                                                <div class="col-xs-6">
                                                <label for="property-geo">Surface:</label>
                                                    <input type="text" class="span2" value="" data-slider-min="40"
                                                        data-slider-max="1200" data-slider-step="5"
                                                        data-slider-value="[40,1200]" id="property-geo" ><br />
                                                    <b class="pull-left color">40m²</b>
                                                    <b class="pull-right color">1200m²</b>                                              
                                                </div>                                            
                                            </div>
                                        </fieldset>                                

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                <label for="min-rooms">Nb de pièces :</label>
                                                    <input type="text" class="span2" value="" data-slider-min="1"
                                                        data-slider-max="12" data-slider-step="1"
                                                        data-slider-value="[1,412]" id="min-rooms" ><br />
                                                    <b class="pull-left color">1</b>
                                                    <b class="pull-right color">12</b>                                                
                                                </div>

                                                <div class="col-xs-6">
                                                <label for="min-bed">Nb de chambres:</label>
                                                    <input type="text" class="span2" value="" data-slider-min="1"
                                                        data-slider-max="12" data-slider-step="1"
                                                        data-slider-value="[1,12]" id="min-bed" ><br />
                                                    <b class="pull-left color">1</b>
                                                    <b class="pull-right color">12</b>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                <label for="min-floor">Nb d'étages:</label>
                                                    <input type="text" class="span2" value="" data-slider-min="1"
                                                        data-slider-max="5" data-slider-step="1"
                                                        data-slider-value="[1,5]" id="min-floors" ><br />
                                                    <b class="pull-left color">1</b>
                                                    <b class="pull-right color">5</b>                                              
                                                </div>

                                                <div class="col-xs-6">
                                                <label for="heat">Chauffage:</label>
                                                    <select id="heat" class="selectpicker show-tick form-control" multiple title="Type">
                                                        <option>Electrique</option>
                                                        <option>Gaz</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6">
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox" > Meublé</label>
                                                    </div> 
                                                </div>

                                                <div class="col-xs-6">
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox"> Balcon</label>
                                                    </div>
                                                </div>                                            
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox" > Piscine</label>
                                                    </div>
                                                </div>  
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox" > Grenier</label>
                                                    </div>
                                                </div>  
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label><input type="checkbox"> Climatisation</label>
                                                    </div>
                                                </div>  
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label> <input type="checkbox"> Jardin</label>
                                                    </div>
                                                </div>  
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label>  <input type="checkbox" > Terrasse</label>
                                                    </div>
                                                </div>  
                                                <div class="col-xs-6"> 
                                                    <div class="checkbox">
                                                        <label>  <input type="checkbox"> Ascenseur</label>
                                                    </div>
                                                </div>  
                                            </div>
                                        </fieldset>

                                        <fieldset class="padding-5">
                                            <div class="row">
                                                <div class="col-xs-12"> 
                                                    <div class="checkbox">
                                                        <label>  <input type="checkbox"> Concierge</label>
                                                    </div>
                                                </div>  
                                            </div>
                                        </fieldset>

                                        <fieldset >
                                            <div class="row">
                                                <div class="col-xs-12">  
                                                    <input class="button btn largesearch-btn" value="Rechercher" type="submit">
                                                </div>  
                                            </div>
                                        </fieldset>                                     
                                    </form>
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
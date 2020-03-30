@extends('layouts.master')
@section('title')
Welcome to 
@stop
@section('content')
<div id="bigWrapper" class="relative">
    <nav id="MobileNav" class="clearfix">
        <div id="get_mobile_nav" class="container">
            <!--#get_mobile_nav is used in shop-->
            <ul id="menu-english-main-menu-1" class="menu">
                <li class="menu-item menu-item-type-post_type menu-item-object-page current-menu-item page_item page-item-19 current_page_item menu-item-1040">
                    <a href="/" aria-current="page">Home</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1014">
                    <a href="/product">Distribution worldwide</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1015">
                    <a href="/company">Company</a>
                </li>
                <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1006">
                    <a href="/contact">Contact</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a class="menu_click shopButtonModalWindow" href="javascript:void(0)">SHOP</a>
                </li>
            </ul>
        </div>
    </nav><!-- /site-nav -->
    <!-- Check if is home page and apply slider -->

    <div id="homeSliderHolder" class="clearfix" style="background: rgb(28, 104, 157); opacity: 0.99;">
        <div id="HomeleftSlider" class="slick-initialized slick-slider" role="toolbar">
            <div aria-live="polite" class="slick-list draggable">
                <div class="slick-track" style="opacity: 1; width: 4047px;" role="listbox">
                    <div class="sliderItem slick-slide slick-current slick-active" style="background-image: url(&quot;https://www.sanosil.com/wp-content/uploads/2015/12/shutterstock_243751723-schmal-1.jpg&quot;); position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1; height: 425px; width: 1349px;"data-slick-index="0" aria-hidden="false" tabindex="0" role="option" aria-describedby="slick-slide00">
                        <div class="container slider_Container">
                            <a class="fancybox-media videoPlay activeVideoPlay" href="http://www.youtube.com/embed/1XTci6in0MM" tabindex="0">
                                <img src="{{asset('web_sanosil/images/slider_playvideo.png')}}" alt="play">
                            </a>
                            <div class="sliderContent">
                                <h2 class="slider_content_title">Sanosil Ltd International</h2>
                                <div class="slider_content_text">
                                    Sanosil Ltd - International, Production &amp; Worldwide Distribution of Sanosil
                                    Disinfectants &amp; Chemicals
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sliderItem slick-slide" style="background-image: url(&quot;https://www.sanosil.com/wp-content/uploads/2015/12/110-1.jpg&quot;); position: relative; left: -1349px; top: 0px; z-index: 998; opacity: 0; height: 425px; transition: opacity 500ms ease 0s; width: 1349px;"data-slick-index="1" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide01">
                        <div class="container slider_Container">
                            <a class="fancybox-media videoPlay activeVideoPlay" href="http://www.youtube.com/embed/1XTci6in0MM" tabindex="-1">
                                <img src="{{ asset('web_sanosil/images/slider_playvideo.png') }}" alt="play">
                            </a>
                            <div class="sliderContent">
                                <h2 class="slider_content_title">Sanosil Ltd International</h2>
                                <div class="slider_content_text"> Home of the Patented Hydrogen Peroxide / Silver Sanosil Disinfectants </div>
                            </div>
                        </div>
                    </div>
                    <div class="sliderItem slick-slide" style="background-image: url(&quot;https://www.sanosil.com/wp-content/uploads/2015/12/shutterstock_263334071-schmal.jpg&quot;); position: relative; left: -2698px; top: 0px; z-index: 998; opacity: 0; height: 425px; transition: opacity 500ms ease 0s; width: 1349px;" data-slick-index="2" aria-hidden="true" tabindex="-1" role="option" aria-describedby="slick-slide02">
                        <div class="container slider_Container">
                            <a class="fancybox-media videoPlay activeVideoPlay"  href="http://www.youtube.com/embed/1XTci6in0MM" tabindex="-1">
                                <img src="{{ asset('web_sanosil/images/slider_playvideo.png') }}" alt="play">
                            </a>
                            <div class="sliderContent">
                                <h2 class="slider_content_title">Sanosil Ltd International</h2>
                                <div class="slider_content_text"> Your reliable partner for disinfectants since 1982 Made in Switzerland- </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <ul class="slick-dots">
                <li class="slick-active" aria-hidden="false">
                    <button type="button" data-role="none" role="button" aria-required="false" tabindex="0">1</button>
                </li>
                <li aria-hidden="true">
                    <button type="button" data-role="none" role="button" aria-required="false" tabindex="0">2</button>
                </li>
                <li aria-hidden="true">
                    <button type="button" data-role="none" role="button" aria-required="false" tabindex="0">3</button>
                </li>
            </ul>
        </div>
    </div>

    
    <div id="home_top_wrapper">
        <div id="home_text">
            <div class="container">
                <h1 class="blue main_title">
                    Welcome to Sanosil AG, the trusted chemical company and one of the premier chemical suppliers of
                    disinfectants and disinfectant solutions </h1>
                    <div id="home_text_wrapper">
                        <p style="text-align: justify;">
                            <strong>Who we are:&nbsp;</strong>
                            Sanosi AG is a Swiss industrial chemical supplier specialized in international production,
                            worldwide distribution
                            and wholesale of Sanosil disinfectant products. The company was established in 1982. as a
                            disinfectant chemical company, and it has been a reliable partner and manufacturer ever
                            since.
                        </p>
                        <p style="text-align: justify;">
                            <strong>What we do:&nbsp;</strong>We are an innovative chemical
                            supplier specialized in the successful production of super-efficient disinfectants for more
                            than 35 years on the international market. Due to devoted research and development of our
                            solutions, our patented applications can be used in various industries like water industry,
                            public health, facility management, food and beverage industry etc. Our unique quality
                            products, broad expertise, competence and client support have made us stand out from the
                            mass of industrial chemical suppliers. Check out our stable solutions and safe applications
                            and see why our customers believe in our long-time experience and expertise.
                        </p>
                        <p style="text-align: justify;">
                            <strong>Our vision for the future:&nbsp;</strong> Our goal is to
                            grow and develop carefully and responsibly in a new and existing environment. Due to our
                            chemical supplier‘s efficient structures, responsiveness and certified partners, we react
                            promptly. We also try to help our clients by providing technical consulting expertise based
                            on considerable knowledge.
                            <br><br><br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<div id="productLines">
    <div class="container">
            <h2 class="bigTitle off TinTitleLine upperCaseText blue">
                <span class="light">Sanosil</span> Product Lines</h2>
            <div class="row">
                
                <div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <a class="section_wrapper circular_spread" href="https://www.sanosil.com/en/productlines/wasserbehandlung/">
                        <div class="pintagram_wrapper">
                            <div class="pintagramIconHolder">
                                <img width="92" height="92" src="https://www.sanosil.com/wp-content/uploads/2016/01/Wasserbehandlung-92x92.png" alt="Logo"/>
                            </div>
                                <div class="pintagramContentHolder">
                                    <h3 class="pintagramTitle white" title="Water Treatment">Water Treatment</h3>
                                    <div class="pintagramContent white">Treatment of cooling -, drinking-, and process water
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                            
                <div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <a class="section_wrapper circular_spread" href="https://www.sanosil.com/en/productlines/oberflachendesinfektion/">
                        <div class="pintagram_wrapper">
                            <div class="pintagramIconHolder white">
                                <img width="92" height="92" src="https://www.sanosil.com/wp-content/uploads/2016/01/Oberflächendesinfektion-92x92.png" alt="Logo"/>
                            </div>
                            <div class="pintagramContentHolder white">
                                <h3 class="pintagramTitle white" title="Surface Disinfection">Surface Disinfection</h3>
                                <div class="pintagramContent">Disinfectants and disinfection cleaners
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <a class="section_wrapper circular_spread" href="https://www.sanosil.com/en/productlines/wasserbehandlung/">
                        <div class="pintagram_wrapper">
                            <div class="pintagramIconHolder">
                                <img width="92" height="92" src="https://www.sanosil.com/wp-content/uploads/2016/01/Wasserbehandlung-92x92.png" alt="Logo"/>
                            </div>
                                <div class="pintagramContentHolder">
                                    <h3 class="pintagramTitle white" title="Water Treatment">Water Treatment</h3>
                                    <div class="pintagramContent white">Treatment of cooling -, drinking-, and process water
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                            
                <div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <a class="section_wrapper circular_spread" href="https://www.sanosil.com/en/productlines/oberflachendesinfektion/">
                        <div class="pintagram_wrapper">
                            <div class="pintagramIconHolder white">
                                <img width="92" height="92" src="https://www.sanosil.com/wp-content/uploads/2016/01/Oberflächendesinfektion-92x92.png" alt="Logo"/>
                            </div>
                            <div class="pintagramContentHolder white">
                                <h3 class="pintagramTitle white" title="Surface Disinfection">Surface Disinfection</h3>
                                <div class="pintagramContent">Disinfectants and disinfection cleaners
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <a class="section_wrapper circular_spread" href="https://www.sanosil.com/en/productlines/wasserbehandlung/">
                        <div class="pintagram_wrapper">
                            <div class="pintagramIconHolder">
                                <img width="92" height="92" src="https://www.sanosil.com/wp-content/uploads/2016/01/Wasserbehandlung-92x92.png" alt="Logo"/>
                            </div>
                                <div class="pintagramContentHolder">
                                    <h3 class="pintagramTitle white" title="Water Treatment">Water Treatment</h3>
                                    <div class="pintagramContent white">Treatment of cooling -, drinking-, and process water
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                            
                <div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6">
                    <a class="section_wrapper circular_spread" href="https://www.sanosil.com/en/productlines/oberflachendesinfektion/">
                        <div class="pintagram_wrapper">
                            <div class="pintagramIconHolder white">
                                <img width="92" height="92" src="https://www.sanosil.com/wp-content/uploads/2016/01/Oberflächendesinfektion-92x92.png" alt="Logo"/>
                            </div>
                            <div class="pintagramContentHolder white">
                                <h3 class="pintagramTitle white" title="Surface Disinfection">Surface Disinfection</h3>
                                <div class="pintagramContent">Disinfectants and disinfection cleaners
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
<!--                 
                <div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6"><a class="section_wrapper circular_spread" href="https://www.sanosil.com/en/productlines/schimmelbekampfung/"><div class="pintagram_wrapper"><div class="pintagramIconHolder"><img width="92" height="92" src="https://www.sanosil.com/wp-content/uploads/2016/01/Schimmelbekämpfung-OK-92x92.png" alt="Logo"/></div><div class="pintagramContentHolder"><h3 class="pintagramTitle blue" title="Mould Control">Mould Control</h3><div class="pintagramContent">Mould control &amp; restoration of living rooms</div></div></div></a></div><div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6"><a class="section_wrapper circular_spread" href="https://www.sanosil.com/en/productlines/raum-luft-aerosoldesinfektion/"><div class="pintagram_wrapper"><div class="pintagramIconHolder"><img width="92" height="92" src="https://www.sanosil.com/wp-content/uploads/2016/01/RaumLuftAerosoldesinfektion-OK-92x92.png" alt="Logo"/></div><div class="pintagramContentHolder"><h3 class="pintagramTitle blue" title="Whole Room Disinfection">Whole Room Disinfection</h3><div class="pintagramContent">Devices and agents for surface and air disinfection by aerosols</div></div></div></a></div><div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6"><a class="section_wrapper circular_spread" href="https://www.sanosil.com/en/productlines/handdesinfektion/"><div class="pintagram_wrapper"><div class="pintagramIconHolder"><img width="92" height="92" src="https://www.sanosil.com/wp-content/uploads/2016/01/Handdesinfektion-92x92.png" alt="Logo"/></div><div class="pintagramContentHolder"><h3 class="pintagramTitle blue" title="Hand Disinfection">Hand Disinfection</h3><div class="pintagramContent">Hand Disinfection</div></div></div></a></div><div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6"><a class="section_wrapper circular_spread" href="https://www.sanosil.com/en/productlines/reinigungsprodukte/"><div class="pintagram_wrapper"><div class="pintagramIconHolder"><img width="92" height="92" src="https://www.sanosil.com/wp-content/uploads/2016/01/Reinigungsprodukte-OK-92x92.png" alt="Logo"/></div><div class="pintagramContentHolder"><h3 class="pintagramTitle blue" title="Cleaning Agents">Cleaning Agents</h3><div class="pintagramContent">Cleaning agents with active foam and/or enzymes</div></div></div></a></div><div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6"><a class="section_wrapper circular_spread" href="https://www.sanosil.com/en/productlines/geruchsbekampfung/"><div class="pintagram_wrapper"><div class="pintagramIconHolder"><img width="92" height="92" src="https://www.sanosil.com/wp-content/uploads/2016/01/Geruchsbekämpfung-92x92.png" alt="Logo"/></div><div class="pintagramContentHolder"><h3 class="pintagramTitle blue" title="Smell Control">Smell Control</h3><div class="pintagramContent">Control of bad smells</div></div></div></a></div><div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6"><a class="section_wrapper circular_spread" href="https://www.sanosil.com/en/productlines/abwasserbehandlung/"><div class="pintagram_wrapper"><div class="pintagramIconHolder"><img width="92" height="92" src="https://www.sanosil.com/wp-content/uploads/2016/03/Abwasserbehandlung-92x92.png" alt="Logo"/></div><div class="pintagramContentHolder"><h3 class="pintagramTitle blue" title="Wastewater Treatment">Wastewater Treatment</h3><div class="pintagramContent">Decomposition of excrements, sink deblocking and smell control by enzymes</div></div></div></a></div><div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6"><a class="section_wrapper circular_spread" href="https://www.sanosil.com/en/productlines/gerate-hilfsmittel/"><div class="pintagram_wrapper"><div class="pintagramIconHolder"><img width="92" height="92" src="https://www.sanosil.com/wp-content/uploads/2016/03/Geräte-und-Hilfsmittel-2-92x92.png" alt="Logo"/></div><div class="pintagramContentHolder"><h3 class="pintagramTitle blue" title="Devices & Utilities">Devices & Utilities</h3><div class="pintagramContent">Dosing Pumps, Spraying Devices, Hygienic Control, Accessories</div></div></div></a></div><div class="pintagramCells col-xs-12 col-sm-6 col-md-6 col-lg-6"><a class="section_wrapper circular_spread" href="https://www.sanosil.com/en/productlines/messgerate/"><div class="pintagram_wrapper"><div class="pintagramIconHolder"><img width="92" height="92" src="https://www.sanosil.com/wp-content/uploads/2016/03/HygienekontrolleLaborbe-92x92.png" alt="Logo"/></div><div class="pintagramContentHolder"><h3 class="pintagramTitle blue" title="Measuring Devices">Measuring Devices</h3><div class="pintagramContent">Measuring devices for the determination of Sanosil in water</div>
                                    </div>
                                    </div>
                                    <a>
                                    </div>
                                    </div> -->
        </div>
    </div>
</div>

<!-- Section ApplicationFields -->
<div id="applicationFields">
    <div class="container">
        <h2 class="bigTitle off TinTitleLine upperCaseText white">
            <span class="light">Application</span> Fields</h2>
        <div class="row">
            
            <div class="appCells col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <h3 class="white upperCaseText" title="Cooling Water">
                    <a href="https://www.sanosil.com/en/applicationfields/kuhlwasser/">Cooling Water</a></h3>
                        <div class="appHolder">
                        <a href="https://www.sanosil.com/en/applicationfields/kuhlwasser/">
                        <img class="app_image" src="https://www.sanosil.com/wp-content/uploads/2016/03/iStock_000006003156Small-2-1-282x204.jpg" alt="app"/>
                        <img class="app_scaller" src="https://www.sanosil.com/wp-content/themes/theme_sanosil/images/app_scaller.png" alt="scaller"/>
                        <div class="appOverLay">
                        <h3 class="white">Cooling Towers & Circuits</h3>
                        </div>
                    </a>
                </div>
            </div>
            
            <div class="appCells col-xs-12 col-sm-6 col-md-4 col-lg-4">
                <h3 class="white upperCaseText" title="Drinking Water">
                    <a href="https://www.sanosil.com/en/applicationfields/trinkwasser/">Drinking Water</a>
                    </h3>
                        <div class="appHolder">
                        <a href="https://www.sanosil.com/en/applicationfields/trinkwasser/">
                        <img class="app_image" src="https://www.sanosil.com/wp-content/uploads/2016/03/iStock_000020643669Medium-282x204.jpg" alt="app"/>
                        <img class="app_scaller" src="https://www.sanosil.com/wp-content/themes/theme_sanosil/images/app_scaller.png" alt="scaller"/>
                        <div class="appOverLay">
                        <h3 class="white">Drinking Water Supply</h3>
                        </div>
                    </a>
                </div>
            </div>
            
            
            <div class="appCells col-xs-12 col-sm-6 col-md-4 col-lg-4">
            <h3 class="white upperCaseText" title="Public Health Sector">
                <a href="https://www.sanosil.com/en/applicationfields/medizin/">Public Health Sector</a>
            </h3>
                <div class="appHolder">
                    <a href="https://www.sanosil.com/en/applicationfields/medizin/">
                        <img class="app_image" src="https://www.sanosil.com/wp-content/uploads/2016/03/medical-small-282x204.jpg" alt="app"/>
                        <img class="app_scaller" src="https://www.sanosil.com/wp-content/themes/theme_sanosil/images/app_scaller.png" alt="scaller"/>
                <div class="appOverLay">
                    <h3 class="white">Healthcare and Pharmaceutical Sector</h3>
                </div>
                    </a>
            </div>
            </div>
                  
                       <!-- 
                  <div class="appCells col-xs-12 col-sm-6 col-md-4 col-lg-4"><h3 class="white upperCaseText" title="Facility Management"><a href="https://www.sanosil.com/en/applicationfields/haustechnik/">Facility Management</a></h3><div class="appHolder"><a href="https://www.sanosil.com/en/applicationfields/haustechnik/"><img class="app_image" src="https://www.sanosil.com/wp-content/uploads/2016/04/shutterstock_149703080-1-282x204.jpg" alt="app"/><img class="app_scaller" src="https://www.sanosil.com/wp-content/themes/theme_sanosil/images/app_scaller.png" alt="scaller"/><div class="appOverLay"><h3 class="white">Buildings &amp; Facility Management</h3></div></a></div></div><div class="appCells col-xs-12 col-sm-6 col-md-4 col-lg-4"><h3 class="white upperCaseText" title="Food & Beverage"><a href="https://www.sanosil.com/en/applicationfields/lebensmittel-getrankeindustrie/">Food & Beverage</a></h3><div class="appHolder"><a href="https://www.sanosil.com/en/applicationfields/lebensmittel-getrankeindustrie/"><img class="app_image" src="https://www.sanosil.com/wp-content/uploads/2016/03/food-industry-small-282x204.jpg" alt="app"/><img class="app_scaller" src="https://www.sanosil.com/wp-content/themes/theme_sanosil/images/app_scaller.png" alt="scaller"/><div class="appOverLay"><h3 class="white">Cleaning &amp; Disinfection</h3></div></a></div></div><div class="appCells col-xs-12 col-sm-6 col-md-4 col-lg-4"><h3 class="white upperCaseText" title="Veterinary Field "><a href="https://www.sanosil.com/en/applicationfields/veterinarbereich/">Veterinary Field </a></h3><div class="appHolder"><a href="https://www.sanosil.com/en/applicationfields/veterinarbereich/"><img class="app_image" src="https://www.sanosil.com/wp-content/uploads/2016/04/shutterstock_181282691-282x204.jpg" alt="app"/><img class="app_scaller" src="https://www.sanosil.com/wp-content/themes/theme_sanosil/images/app_scaller.png" alt="scaller"/><div class="appOverLay"><h3 class="white">Cleaning & Disinfection</h3></div></a></div></div><div class="appCells col-xs-12 col-sm-6 col-md-4 col-lg-4"><h3 class="white upperCaseText" title="Farming"><a href="https://www.sanosil.com/en/applicationfields/landwirtschaft/">Farming</a></h3><div class="appHolder"><a href="https://www.sanosil.com/en/applicationfields/landwirtschaft/"><img class="app_image" src="https://www.sanosil.com/wp-content/uploads/2016/04/shutterstock_140490742-282x204.jpg" alt="app"/><img class="app_scaller" src="https://www.sanosil.com/wp-content/themes/theme_sanosil/images/app_scaller.png" alt="scaller"/><div class="appOverLay"><h3 class="white">Animal &amp; Plant Breeding</h3></div></a></div></div><div class="appCells col-xs-12 col-sm-6 col-md-4 col-lg-4"><h3 class="white upperCaseText" title="Odour Control"><a href="https://www.sanosil.com/en/applicationfields/geruchsbekampfung/">Odour Control</a></h3><div class="appHolder"><a href="https://www.sanosil.com/en/applicationfields/geruchsbekampfung/"><img class="app_image" src="https://www.sanosil.com/wp-content/uploads/2016/03/Gestank-aus-dem-Netz-geklaut-282x204.jpg" alt="app"/><img class="app_scaller" src="https://www.sanosil.com/wp-content/themes/theme_sanosil/images/app_scaller.png" alt="scaller"/><div class="appOverLay"><h3 class="white">Control of Bad Odours</h3></div></a></div></div><div class="appCells col-xs-12 col-sm-6 col-md-4 col-lg-4"><h3 class="white upperCaseText" title="Mould Control"><a href="https://www.sanosil.com/en/applicationfields/schimmelpilzbekampfung/">Mould Control</a></h3><div class="appHolder"><a href="https://www.sanosil.com/en/applicationfields/schimmelpilzbekampfung/"><img class="app_image" src="https://www.sanosil.com/wp-content/uploads/2016/03/DSCF0163-mit-5-e1458319276533-282x204.jpg" alt="app"/><img class="app_scaller" src="https://www.sanosil.com/wp-content/themes/theme_sanosil/images/app_scaller.png" alt="scaller"/><div class="appOverLay"><h3 class="white">Mould Control and Building Refurbishment</h3></div></a></div></div>  -->

        </div>
    </div>
</div>
<!-- Endsection ApplicationFields -->

<!-- Section News -->
<!-- <div id="productLines">
        <div class="container">
            <h2 class="bigTitle off TinTitleLine upperCaseText blue">
                <span class="light">News</span> & Update</h2>
            <div class="row clearfix ">
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class='singleCell'>
                        <div class='pageSliderHolder'>
                        <div id="single_image_wrapper" class="opacityOn"><img width="360" height="200" src="https://www.sanosil.com/wp-content/uploads/2016/01/c-30kg-470x375.jpg" class="attachment-single-product-preview_resize size-single-product-preview_resize wp-post-image" alt=""></div>
                            <div class='cellTitleHolder blue bold'>
                                <div class='headerSquare '>*</div>
                                <h3 class='headerTitle'>News 2019-nCoV / Coronavirus </h3>
                            </div>
                                Today, Sanosil products are exported to more than 40 countries and distributed by professional selling organisations, exclusive as well as non-exclusive agents, joint-venture partners, licensees, or our own subsidiaries. You can find an updated List of our distributors  under &#8220;Distributors Worldwide&#8221;. Every month brings us a step closer to our goal: a global distribution net of Sanosil® products covering all application fields. 
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class='singleCell'>
                        <div class='pageSliderHolder'>
                            <div class='cellTitleHolder blue bold'>
                                <div class='headerSquare '>*</div>
                                <h3 class='headerTitle'>News 2019-nCoV / Coronavirus </h3>
                            </div>
                                Today, Sanosil products are exported to more than 40 countries and distributed by professional selling organisations, exclusive as well as non-exclusive agents, joint-venture partners, licensees, or our own subsidiaries. You can find an updated List of our distributors  under &#8220;Distributors Worldwide&#8221;. Every month brings us a step closer to our goal: a global distribution net of Sanosil® products covering all application fields. 
                        </div>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                    <div class='singleCell'>
                        <div class='pageSliderHolder'>
                            <div class='cellTitleHolder blue bold'>
                                <div class='headerSquare '>*</div>
                                <h3 class='headerTitle'>News 2019-nCoV / Coronavirus </h3>
                            </div>
                                Today, Sanosil products are exported to more than 40 countries and distributed by professional selling organisations, exclusive as well as non-exclusive agents, joint-venture partners, licensees, or our own subsidiaries. You can find an updated List of our distributors  under &#8220;Distributors Worldwide&#8221;. Every month brings us a step closer to our goal: a global distribution net of Sanosil® products covering all application fields. 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
<!-- EndSection News -->

<!-- <div id="distributor" style='background-image: url("https://www.sanosil.com/wp-content/uploads/2019/10/san-bg-1-1.jpg");'>  
    <div class="container clearfix ">
        <div class="inner-distr">
        <div class="row">
                <div class="col-md-6 col-xs-12">
                    <h2 class="bigTitle off TinTitleLine upperCaseText">
                        <span class="light">Sanosil</span> Partners and Distributors                    </h2>
                            <div class="dis-world-wide-desc">
                            <h4>Our partner network is present in more that 40 countries and 6 continents.</h4>
                                <p>Please visit our distribution page to find nearest distributor in your region.</p>
                                <div class="dww-search-btn-cont">
                                    <a class="hp-dww-search" href="https://www.sanosil.com/en/distribution-worldwide/" ><span class="icon_ww-search"></span>Find distributor</a>
                                </div>
                            </div>
                        </div>
                    </div>
        </div>
    </div>
</div> -->
@endsection

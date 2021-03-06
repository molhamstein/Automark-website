<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html  lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
    <title><?php echo $path['namesite']?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="<?php echo $path['template'];?>lib/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $path['template'];?>lib/js/jquery-3.1.1.min.js"></script>

    <link href="<?php echo $path['template'];?>lib/css/font-awesome.css" rel="stylesheet">
    <?php  if($_dir=='rtl'){ ?>
        <link id="cssLink" href="<?php echo $path['template'];?>lib/rtl/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <?php } ?>
    <link rel="stylesheet" type="text/css" href="<?php echo $path['template'];?>lib/css/bootstrap-select.min.css">

    <link id="cssLink" href="<?php echo $path['template'];?>lib/css/docs.min.css" rel="stylesheet" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo $path['template'];?>/lib/js/jScrollPane/jScrollPane.css" />

    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css">
    <link id="cssLink" href="<?php echo $path['template'];?>lib/css/style.css" rel="stylesheet" media="screen" />

    <?php  if($_dir=='ltr'){ ?>
        <link id="cssLink" href="<?php echo $path['template'];?>lib/css/style-ltr.css" rel="stylesheet" media="screen" />
        <link id="cssLink" href="<?php echo $path['template'];?>lib/ltr/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <?php } ?>

    <link rel="stylesheet" type="text/css" href="<?php echo $path['template'];?>lib/css/jquery.ad-gallery.css">
    <link rel="stylesheet" href="<?php echo $path['urlsite']; ?>Public/css/colorbox.css" />
    <link rel="shortcut icon" href="<?php echo $path['template'];?>img/icone.png" />
    <link rel="icon" type="image/gif" href="<?php echo $path['template'];?>img/icone.png">

    <link rel="stylesheet" type="text/css" href="<?php echo $path['template'];?>lib/css/chat.css">

    <link type="text/css" rel="stylesheet" id="arrowchat_css" media="all" href="/arrowchat/external.php?type=css" charset="utf-8" />

    <style>
        #search{
            background: url(<?php echo $path['urlsite']; ?>Public/img/search-white.png) no-repeat 10px 12px #ec3e3d;
            width: 200px;
            padding: 6px 15px 6px 35px;
            font-size:12px;
            -webkit-border-radius: 20px;
            -moz-border-radius: 20px;
            border-radius: 20px;
        }

        #english{
            background-color: #ec3e3d;
            -webkit-border-radius: 30px;
            -moz-border-radius: 30px;
            border-radius: 30px;
            font-size:12px;
            width: 80px;
            margin-top: 10px;
            padding: 6px 20px 6px 5px;
        }

        #search , #english{
            border: #ec3e3d;
            color: white;
            text-shadow: 0 2px 3px rgba(0, 0, 0, 0.1);
            -webkit-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
            -moz-box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.15) inset;
        }

        #social-links{
            position: absolute;
            list-style: none;
            margin-top: 80px;
        }

        #social-links li{
            min-height: 45px;
        }

        .btn-twitter {
            background-color: #3399CC !important;
            width: 51px;
            height: 40px;
            padding-top: 12px;
            color:#FFFFFF!important;
        }

        .btn-facebook {
            background-color: #3D5B96 !important;
            width: 51px;
            height: 40px;
            padding-top: 12px;
            color:#FFFFFF!important;
        }

        .btn-facebook {
            background-color: #3D5B96 !important;
            width: 51px;
            height: 40px;
            padding-top: 12px;
            color:#FFFFFF!important;
        }

        .btn-google {
            background-color: #DD3F34 !important;
            width: 51px;
            height: 40px;
            padding-top: 12px;
            color:#FFFFFF!important;
        }

        .btn-youtube {
            background-color: #cd201f !important;
            width: 51px;
            height: 40px;
            padding-top: 12px;
            color:#FFFFFF!important;
        }

        .btn-instagram {
            background-color: #e4405f !important;
            width: 51px;
            height: 40px;
            padding-top: 12px;
            color:#FFFFFF!important;
        }

        .btn-rss {
            background-color: #FFC90E !important;
            width: 51px;
            height: 40px;
            padding-top: 12px;
            color:#FFFFFF!important;
        }
    </style>

</head>

<?php

$_SESSION['username'] = $_fromuser; // Must be already set
$_SESSION['fromuser'] = $_fromuser;
?>
<body dir="<?php echo $_dir; ?>" style="overflow-x: hidden;" >

<header>
    <div class="bg-top-header">
        <nav class="navbar navbar-static-top margin0">

            <div class="container">

                <div class="row">
                    <div class="col-sm-3 col-xs-6 ">
                        <div class="row">
                            <ul class="nav navbar-nav menu-top menutop menutopContact">
                                <li>
                                    <!-- Language -->
                                    <form method='get' action='' id='form_lang' >
                                        <?php
                                        if(isset($_SESSION['lang']) && $_SESSION['lang'] == 'en'){
                                            ?>
                                            <input type="hidden" name="lang" value="ar"/>
                                            <button type="submit" class="btn btn1" >عربي</button>
                                            <?php
                                        } else{
                                            ?>
                                            <input type="hidden" name="lang" value="en"/>
                                            <button type="submit" class="btn btn1">English</button>
                                            <?php
                                        }
                                        ?>
                                    </form>
                                    <script>
                                        function changeLang(){
                                            document.getElementById('form_lang').submit();
                                        }
                                    </script>

                                </li>
                                <li><a dir="<?php echo $_dir; ?>">info@automark.com  <i class="fa fa-envelope-o" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class=" col-sm-6 col-xs-6 hidden-xs">

                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menunavbartop" aria-expanded="false">
                                <span  style="color:#fff;font-size:16px;"  class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                            </button>
                        </div>
                        <div class="collapse navbar-collapse" id="menunavbartop" style="background:#db2d2e;" >
                            <ul class="nav navbar-nav menu-top menutop pull-right menu_top_header">
                                <?php if(!session::get(system::get("session/session_name"))){?>
                                    <li><a href="<?php echo $path['urlsite'] ?>users/login"><i class="fa fa-unlock-alt" aria-hidden="true"></i> <?php echo _t(_Login);?></a></li>
                                    <li><a href="<?php echo $path['urlsite'] ?>users/register"><i class="fa fa-user-o" aria-hidden="true"></i> <?php echo _t(_Newuser);?></a></li>
                                <?php }else{ ?>
                                    <li><a href="<?php echo $path['urlsite'] ?>cars/mycars/"><?php echo _t(_Managemyads);?> </a> </li>
                                    <li><a href="<?php echo $path['urlsite'] ?>cars/mycars/addfreeads"><?php echo _t(_Addannouncement);?></a> </li>
                                    <li><a href="<?php echo $path['urlsite'] ?>users/"><?php echo _t(_Yourpersonaldata);?></a> </li>
                                    <li><a href="<?php echo $path['urlsite'] ?>users/login/logout/"><?php echo _t(_Signout);?></a> </li>


                                <?php } ?>

                            </ul>

                        </div>
                    </div>
                    <div class="col-xs-2 col-sm-3 col-md-3 hidden-xs">
                        <form action="<?php echo $path['urlsite']?>/cars/search/specific" class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" name="q"  id="search">

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <style>

        .affix {
            top: 0;
            width: 100%;
        }

        .affix  {
            padding-top: 0px;
        }
    </style>
    <div class="header_float" style="z-index: 1000; border-radius: 250px;">
        <nav class="navbar navbar-default affix-top" data-spy="affix" data-offset-top="10" style="border:none;">
            <div class="container">
                <div class="" style="background:#fff;">
                    <div class="row">
                        <div class="col-sm-3 col-xs-7" style="z-index: 10;">
                            <a href="<?=$path['urlsite']?>">
                                <h3 class="pull-left mazalogo"><img class="img-responsive" src="<?php echo $path['template'];?>img/logo.png" alt="" /></h3>
                            </a>
                        </div>
                        <div class="col-sm-9">
                            <div class="navbar-header  hidden-sm hidden-md hidden-lg">
                            
                            	<a class="text-center" href="<?php echo $path['urlsite'] ?>cars/mycars/addfreeads" style="color: #db2d2e;display: inline-block;margin-top: 13px;font-size: 9px;padding: 3px;float: left;margin-left: 10px;">
                                            <i class="fa fa-plus-square-o fa-3x"></i>
                                            <div>
                                                <?php echo _t(_Addyouradforfree);?>
                                            </div>

                                </a>
                            
                                <button type="button" class="navbar-toggle collapsed" style="border:none; margin-left: 0px;" data-toggle="collapse" data-target="#menunavbarh" aria-expanded="false">
                                    <span style="color:#db2d2e;font-size:25px;margin-top:0px" class="glyphicon glyphicon-th-list" aria-hidden="true"></span>

                                </button>

                            </div>

                            <div class="collapse navbar-collapse" id="menunavbarh"  style="background:#fff;z-index:100;" >
                                <ul class="nav navbar-nav menutopLogo pull-right  menu_header">
                                    <li class="active"><a href="<?php echo $path['urlsite'] ?>"><?= _MAIN ?></a></li>
                                    <li><a href="<?php echo $path['urlsite'] ?>cars/index/show/ca/1"><?php echo _t(_Carsforsale);?></a></li>
                                    <li><a href="<?php echo $path['urlsite'] ?>cars/index/show/ca/4"><?php echo _t(_Motorcyclesforsale);?></a></li>
                                    <li><a href="<?php echo $path['urlsite'] ?>cars/index/show/ca/3"><?php echo _t(_Phonenumbers);?></a></li>
                                    <li><a href="<?php echo $path['urlsite'] ?>cars/index/show/ca/2"><?php echo _t(_Carnumbers);?></a></li>
                                    <li><a href="<?php echo $path['urlsite'] ?>cars/index/show/ca/5"><?php echo _t(_Boats);?></a></li>
                                    <li><a href="<?php echo $path['urlsite'] ?>cars/index/showrooms"><?php echo _t(_Shows);?></a></li>
                                    <li style="margin-top: -15px;margin-right:5px">
                                        <a  class="text-center" href="<?php echo $path['urlsite'] ?>cars/mycars/addfreeads"
                                            style="color: white; background-color: #db2d2e;">

                                            <i class="fa fa-plus-square-o fa-3x"></i>

                                            <br>
                                            <?php echo _t(_Addyouradforfree);?>
                                        </a>
                                    </li>
                                </ul>
                                <form action="<?php echo $path['urlsite'] ?>cars/search/index" method="post">
                                    <div class="form-group search-top-menu" style="display:none;">
                                        <input type="text" class="form-control text-left" name="title" id="exampleInputEmail1" placeholder="<?php echo _t(_Searchthesite);?>">
                                        <input type="hidden"  name="search"  value="1">
                                        <input type="submit" value="<?php echo _t(_Search);?>"  class="btn btn-default po" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </div>


</header>


<div class="bg_box_search_index">

    <div class="container">
        <div class="row">
            <div class="col-sm-1 hidden-xs">
                <ul id="social-links" class="pull-left">

                    <li>
                        <a hrea="https://www.facebook.com/Car-sale-UAE-815758745127954" data-original-title="Facebook" rel="tooltip"  href="#" class="btn btn-facebook" data-placement="left">
                            <i class="fa fa-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.instagram.com/automark.ae" data-original-title="Instagram" rel="tooltip"  class="btn btn-instagram" data-placement="left">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-11">
                <div class="text_search_title  text-center">
                    <h1 ><?= _AutoMark?></h1>
                    <h3><?= _ThelargestArabmarketforcarstrucksandspecialfigures?></h3>
                    <p><?= _Searchforyourfavoritevehicle?></p>
                </div>

                <?php
                if($_showFilters) {
                    ?>
                    <form action="<?php echo $path['urlsite'] ?>cars/search/general" method="post">
                        <div class="text_search_bg">
                            <div class="row col-md-12">
                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">
                                        <select class="form-control selectpicker"
                                                onchange="return changeselect(this,'city','#subcitySearch') "
                                                name="country" title=<?= _Country ?> data-style="input_search_style">
                                            <option value="" selected=""><?= _Country ?></option>
                                            <?php foreach ($lib_city->getCountryAll() as $rowscity): ?>
                                                <option
                                                    data-thumbnail="<?php echo $path['public'] . 'img/flags/' . $rowscity['code_c'] . '.png'; ?>"
                                                    value="<?php echo $rowscity['id_c']; ?>"><?php echo language::getLang($rowscity['name_c']); ?></option>
                                            <?php endforeach; ?>
                                            <option><?= _Other ?></option>
                                        </select>

                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">
                                        <select class="form-control selectpicker" data-live-search="true"
                                                id="subcitySearch" name="city" title="<?= _City ?>"
                                                data-style="input_search_style">
                                            <option value="" selected=""><?= _City ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">
                                        <select class="form-control selectpicker" name="category"
                                                title=<?= _Lookfor ?> data-live-search="true"
                                                data-style="input_search_style">
                                            <option value="" selected=""><?= _Lookfor ?></option>
                                            <?php foreach ($db_category->getAll() as $rowsCategory) {
                                                ?>
                                                <?php if (($rowsCategory['code_ss'] != "<!--:ar-->لوحات السيارات<!--:--><!--:en-->Car plate<!--:-->") && ($rowsCategory['code_ss'] != "<!--:ar-->ارقام الجوالات<!--:--><!--:en-->Mobile number<!--:-->")) { ?>
                                                    <option
                                                        value="<?php echo $rowsCategory['id_ss']; ?>"><?php echo language::getLang($rowsCategory['code_ss']); ?></option>
                                                <?php } ?>
                                            <?php } ?>
                                            <option><?= _Other ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">
                                        <select class="form-control selectpicker" data-live-search="true" name="model"
                                                title=<?= _Selectthemodel ?> data-style="input_search_style"
                                                onchange="return changeselect(this,'typecar','#subtype') ">
                                            <option value="" selected=""><?= _Selectthemodel ?></option>
                                            <?php foreach ($lib_typecar->getTypeAll() as $rowstype): ?>
                                                <option
                                                    value="<?php echo $rowstype['id_t']; ?>"><?php echo language::getLang($rowstype['name_t']); ?></option>
                                            <?php endforeach; ?>
                                            <option><?= _Other ?></option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">
                                        <select class="form-control selectpicker" data-live-search="true"
                                                name="yearsemin" title=<?= _Yearof ?> data-style="input_search_style">
                                            <option value="" selected=""><?= _Yearof ?></option>
                                            <<?php for ($i = 2018; $i >= 1990; $i--): ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php endfor ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">
                                        <select class="form-control selectpicker" data-live-search="true"
                                                name="yearsemax" title=<?= _Yearto ?> data-style="input_search_style">
                                            <option value="" selected=""><?= _Yearto ?></option>
                                            <<?php for ($i = 2018; $i >= 1990; $i--): ?>
                                                <option value="<?= $i ?>"><?= $i ?></option>
                                            <?php endfor ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">

                                        <input class="form-control selectpicker input_search_style" name="desemin"
                                               type="text" placeholder="<?= _FromDes ?>"/>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">

                                        <input class="form-control selectpicker input_search_style" name="desemax"
                                               type="text" placeholder="<?= _ToDes ?>"/>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">

                                        <input class="form-control selectpicker input_search_style" name="pricemin"
                                               type="text" placeholder="<?= _FromPrice ?>"/>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">

                                        <input class="form-control selectpicker input_search_style" name="pricemax"
                                               type="text" placeholder="<?= _ToPrice ?>"/>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">
<!--                                        <select class="form-control selectpicker" name="status"-->
<!--                                                title=--><?//= _Selectthevehiclestatus ?><!-- data-style="input_search_style">-->
<!--                                            <option value="" selected="">--><?//= _Selectthevehiclestatus ?><!--</option>-->
<!--                                            <option value="6">--><?//= _Excellent ?><!--</option>-->
<!--                                            <option value="7">--><?//= _Good ?><!--</option>-->
<!--                                            <option value="8">--><?//= _Medium ?><!--</option>-->
<!--                                            <option value="9">--><?//= _Needmaintenance ?><!--</option>-->
<!--                                            <option>--><?//= _Other ?><!--</option>-->
<!---->
<!--                                        </select>-->
                                        <select class="form-control selectpicker" name="submodel"
                                                id="subtype"
                                                title=<?= _SelectVehicleSubModel ?> data-style="input_search_style">
                                            <option value="" selected=""><?= _SelectVehicleSubModel ?></option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-3 col-xs-6">
                                    <div class="form-group">
                                        <button name="general" class="btn btn-default btn_input_search_style"/>
                                        <i class="fa fa-search" aria-hidden="true"
                                           style="position: static; font-size: 16px;"></i></button>
                                        <input type="hidden" name="generalsearch" value="1"/>
                                    </div>
                                </div>
                            </div>
                            <div style="clear:both"></div>
                        </div>
                    </form>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row row-offcanvas row-offcanvas-right">
        <?php  if(isset($_msg) and count($_msg)){
            echo "   <div class='col-sm-12'><h3 class='title'>".$_msg."</h3><br clear='all' /> </div>";
        }?>
    </div>
    <div class="row row-offcanvas row-offcanvas-right">

<!-- 
        <div class="col-sm-12">
            <div class="paddingTop">
                <div class="rows">

                    <div class="col-sm-4">
                        <img class="img-responsive" src="<?php echo $path['template'];?>img/Home-automark-ae_14.png" />
                    </div>
                    <div class="col-sm-4">
                        <img  class="img-responsive" src="<?php echo $path['template'];?>img/Home-automark-ae_12.png" />
                    </div>
                    <div class="col-sm-4">
                        <img class="img-responsive" src="<?php echo $path['template'];?>img/Home-automark-ae_10.png" />
                    </div>

                </div>
            </div>
        </div>
 -->

        <?php
        if($path['act_site']=='off' and !$lib_acl->_permis('admin')){?>

            <div class="col-sm-12">

                <h3 style="padding-top:30px; padding-bottom:30px" class='title'><?php echo $path['message_act'];?></h3><br clear='all' />

            </div>
        <?php
        }else{
            include($dirFile);
        }
        ?>


        <div class="col-sm-12">

            <div class="row">
                <div class="col-sm-12">
                    <img class="img-responsive" src="<?php echo $path['template'];?>img/hhh_22.png" />
                </div>
            </div>
            <br />
            <div class="paddingTop">
                <div class="row">

                    <div class="col-sm-6">
                        <img class="img-responsive" src="<?php echo $path['template'];?>img/Home-automark-ae_31.png" />
                    </div>
                    <div class="col-sm-6">
                        <img  class="img-responsive" src="<?php echo $path['template'];?>img/Home-automark-ae_33.png" />
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<div class="containe rounded-0" style="border-radius:50px;">
    <br><br>
    <h2 class="text-center" style="background-color: #db2d2e;border-radius: 50px;width: 150px;padding: 10px;color: white;margin: 0 auto;"><?=_Shows?></h2>
    <br>
    <div class="paddingTop container">
        <div class="row">
            <?php foreach ($_shows as $show) {?>
                <div class="col-sm-2 col-xs-4">
                    <a style="display:block;height:100%" href="<?php echo $path['urlsite'] ?>cars/index/showsid/<?php echo $show['id_s'];?>">
                        <img class="img-responsive" src="<?php echo $path['thumb'];?>thumb_<?php echo $show['images_s'] ?>" /></a>
                </div>
            <?php } ?>

        </div>
    </div>
</div>





<footer>
    <div class="bg-top-header">
        <div class="container style_mail_box">
            <div class="row">
                <div class="col-sm-8 hidden-xs" style="visibility:collapse">
                    <h4><?=_Subscribetoourmailinglist?></h4>
                    <div class="form-group  col-sm-9 has-feedback">
                        <input  class="form-control"  placeholder="<?=_Enteryouremailaddresshere?>"  />
                        <span class="glyphicon glyphicon-envelope form-control-feedback" style="color:#000; top: 4px; left: 15px;" aria-hidden="true"></span>
                    </div>
                </div>
                <div class="col-sm-4">
                    <h4><?=_Gettheapplicationnow?></h4>
                    <div class="style_app_down">
                        <a href=""><img   src="<?php echo $path['template'];?>img/Home-automark-ae_37.png" alt="" /></a>
                        <a href=""><img  src="<?php echo $path['template'];?>img/Home-automark-ae_39.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row high">
            <div class="col-sm-3">
				<h3><i class='fa fa-tachometer' aria-hidden='true'></i><?=_Sitepages?> </h3>

                <ul class="nav clear clfooterll">
                    <li><a href="<?php echo $path['urlsite'] ?>" style="color: white; "><?=_MAIN?> </a> </li>

                    <li><a href="<?php echo $path['urlsite'] ?>pages/index/contact" style="color: white; "><?=_Contactus?> </a> </li>

                </ul>
            </div>
            <div class="col-sm-3">
                <h3><i class='fa' aria-hidden='true'></i> </h3>

                <ul class="nav clear clfooterll">

                    <li><a href="<?php echo $path['urlsite'] ?>cars/mycars/addfreeads"
                           style="color: white; "><?=_Addannouncement?> </a> </li>
                    <li><a href="<?php echo $path['urlsite'] ?>pages/index/offers" style="color: white; "><?=_OurServices?> </a> </li>
                    <li><a href="<?php echo $path['urlsite'] ?>pages/index/contact" style="color: white; "><?=_Howtopay?> </a> </li>

                </ul>
            </div>
            <div class="col-sm-3">

            </div>
            <div class="col-sm-3">

                <h2 class="logofooter pull-right">
                    <a href="">
                        <img  class="img-responsive" src="<?php echo $path['template'];?>img/logofooter.png" alt="" style="width: 198px;" /></a>
                </h2>
                <div class="faces img-rounded" style="">
                    <a href="<?php echo system::_data("facebook_footer"); ?>"><i class="fa fa-facebook"></i></a>

                    <a href="<?php echo system::_data("twitter_footer"); ?>"><i class="fa fa-twitter"></i></a>
                    <a href="<?php echo system::_data("youtube_footer"); ?>"><i class="fa fa-youtube"></i></a>
                    <a href="<?php echo system::_data("google_footer"); ?>"><i class="fa fa-google-plus"></i></a>
                </div>
            </div>
        </div>
    </div>

    <nav class="navbar navbar-static-top bgcolorfooter">

        <div class="container">
            <div class="row">
                <div class="col-sm-8 pull-left">
                    <h3 ><small><?=_Allrightsreservedautomark?></small></h3>
                </div>
                <div class="col-sm-2 pull-right">
                    <h3 ><small><a style="color:#fff;" href="http://المركاز.com"><?=_DesignoftheAlMarqaz?> </a></small></h3>
                </div>
            </div>
        </div>
    </nav>

</footer>



<script src="//code.jquery.com/ui/1.11.0/jquery-ui.js"></script>
<script src="<?php echo $path['template'];?>lib/rtl/js/bootstrap.js"></script>
<script src="<?php echo $path['template'];?>lib/js/bootstrap-select.js"></script>
<script type="text/javascript" src="<?php echo $path['template'];?>lib/js/jScrollPane/jScrollPane.min.js"></script>
<script type="text/javascript" src="<?php echo $path['template'];?>lib/js/jquery.ad-gallery.js"></script>
<script type="text/javascript" src="<?php echo $path['urlsite']; ?>Public/js/crawler.js"></script>
<script src="<?php echo $path['urlsite'];?>Public/js/upload.js"></script>
<script src="<?php echo $path['urlsite'];?>Public/js/changeselect.js"></script>

<script type="text/javascript">
    $(function() {
        var galleries = $('.ad-gallery').adGallery();

    });
</script>


<script src="<?php echo $path['urlsite']; ?>Public/js/jquery.colorbox.js"></script>

<script>
    $(document).ready(function(){
        //Examples of how to assign the ColorBox event to elements
        $(".group1").colorbox({rel:'group1', width:"50%", height:"70%"});
        $(".iframe").colorbox({iframe:true, width:"50%", height:"70%"});
    });
</script>



<script>
    $(function() {
        $( "#slider-range" ).slider({
            range: true,
            min: 1000,
            max: 250000,
            values: [ 7000, 80000 ],
            slide: function( event, ui ) {
                $( "#amount" ).val( "<?php echo language::getLang(system::_data('default_currency'));?>" + ui.values[ 0 ] + " - <?php echo language::getLang(system::_data('default_currency'));?>" + ui.values[ 1 ] );
                $( "#pricemin" ).val( ui.values[ 0 ]);
                $( "#pricemax" ).val(ui.values[ 1 ] );
            }
        });
        $( "#amount" ).val( "<?php echo language::getLang(system::_data('default_currency'));?>" + $( "#slider-range" ).slider( "values", 0 ) +
        " - <?php echo language::getLang(system::_data('default_currency'));?>" + $( "#slider-range" ).slider( "values", 1 ) );
    });
</script>



<?php  if(isset($_cardSort) and $_cardSort=='adv'){ ?>
    <script type="text/javascript" src="<?php echo $path['template'];?>lib/js/jquery.cookie.js"></script>

    <script>
        $(function(){
            var default_view = 'grid'; // choose the view to show by default (grid/list)

            // check the presence of the cookie, if not create "view" cookie with the default view value
            if($.cookie('view') !== 'undefined'){
                $.cookie('view', default_view, { expires: 7, path: '/' });
            }
            function get_grid(){
                $('.list').removeClass('list-active');
                $('.grid').addClass('grid-active');
                $('.prod-cnt').animate({opacity:0},function(){
                    $('.prod-cnt').removeClass('prod-box-list');
                    $('.prod-cnt').addClass('prod-box');
                    $('.prod-cnt').stop().animate({opacity:1});
                });
            } // end "get_grid" function
            function get_list(){
                $('.grid').removeClass('grid-active');
                $('.list').addClass('list-active');
                $('.prod-cnt').animate({opacity:0},function(){
                    $('.prod-cnt').removeClass('prod-box');
                    $('.prod-cnt').addClass('prod-box-list');
                    $('.prod-cnt').stop().animate({opacity:1});
                });
            } // end "get_list" function

            if($.cookie('view') == 'list'){
                // we dont use the "get_list" function here to avoid the animation
                $('.grid').removeClass('grid-active');
                $('.list').addClass('list-active');
                $('.prod-cnt').animate({opacity:0});
                $('.prod-cnt').removeClass('prod-box');
                $('.prod-cnt').addClass('prod-box-list');
                $('.prod-cnt').stop().animate({opacity:1});
            }

            if($.cookie('view') == 'grid'){
                $('.list').removeClass('list-active');
                $('.grid').addClass('grid-active');
                $('.prod-cnt').animate({opacity:0});
                $('.prod-cnt').removeClass('prod-box-list');
                $('.prod-cnt').addClass('prod-box');
                $('.prod-cnt').stop().animate({opacity:1});
            }

            $('#list').click(function(){
                $.cookie('view', 'list');
                get_list()
            });
            var affixElement = '#navbar-main';

            $(affixElement).affix({
                offset: {
                    // Distance of between element and top page
                    top: function () {
                        return (this.top = $(affixElement).offset().top)
                    },
                    bottom: function () {
                        return (this.bottom = $('#footer').outerHeight(true))
                    }
                }
            });

            $('#grid').click(function(){
                $.cookie('view', 'grid');
                get_grid();
            });

            /* filter */
            $('.category-menu ul li').click(function(){
                var CategoryID = $(this).attr('category');
                $('.category-menu ul li').removeClass('cat-active');
                $(this).addClass('cat-active');
                $.ajax({
                    type: "POST",
                    url: _root_+"cars/index/ShowCarType/ca/",
                    data : {id:CategoryID,view:$.cookie('view')},
                    success: function(response){
                        $('.showCarTypeJ').html(response);
                    }
                });
                /*
                 $('.prod-cnt').each(function(){
                 if(($(this).hasClass(CategoryID)) == false){
                 $(this).css({'display':'none'});
                 };
                 });
                 $('.'+CategoryID).fadeIn();
                 */
            });
        });
    </script>

<?php }   ?>

<script type="text/javascript" src="<?php echo $path['template'];?>lib/js/jquery.magnific-popup.js"></script>
<script type="text/javascript" src="<?php echo $path['template'];?>lib/js/lightslider.js"></script>


<script type="text/javascript">
    var _root_ = '<?php echo $path['urlsite'];?>';
</script>

<script type="text/javascript" src="/arrowchat/external.php?type=djs" charset="utf-8"></script>
<script type="text/javascript" src="/arrowchat/external.php?type=js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo $path['template'];?>lib/js/chat.js"></script>
</body>

</html>

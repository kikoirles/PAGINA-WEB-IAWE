<?php

//Definición de parámetros de acceso a la base de datos

define ("SERVIDOR","localhost");
define ("USUARIO","christian");
define ("PASSWORD","barcelona22");
define ("BASEDATOS","AdministracionPCRS");

function conectarBD(): mysqli | false {
    $conexion = mysqli_connect(SERVIDOR,USUARIO,PASSWORD,BASEDATOS);

    if (!$conexion){
        echo "Se ha producido un error en la conexión";
        return false;
    }

    return $conexion;
}

function desconectarBD ($conexion){
    mysqli_close($conexion);
}

function generarHeader($arrayPestañas){

    echo "
    <!DOCTYPE html>
<html lang='en'>
<head>
<!-- basic -->
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=edge'>
<!-- mobile metas -->
<meta name='viewport' content='width=device-width, initial-scale=1'>
<meta name='viewport' content='initial-scale=1, maximum-scale=1'>
<!-- site metas -->
<title> PCRS Inicio </title>
<meta name='keywords' content=''>
<meta name='description' content=''>
<meta name='author' content=''>
<!-- site icons -->
<link rel='icon' href='images/fevicon/fevicon2.png' type='image/gif' />
<!-- bootstrap css -->
<link rel='stylesheet' href='css/bootstrap.min.css' />
<!-- Site css -->
<link rel='stylesheet' href='css/style.css' />
<!-- responsive css -->
<link rel='stylesheet' href='css/responsive.css' />
<!-- colors css -->
<link rel='stylesheet' href='css/colors1.css' />
<!-- custom css -->
<link rel='stylesheet' href='css/custom.css' />
<!-- wow Animation css -->
<link rel='stylesheet' href='css/animate.css' />
<!-- revolution slider css -->
<link rel='stylesheet' type='text/css' href='revolution/css/settings.css' />
<link rel='stylesheet' type='text/css' href='revolution/css/layers.css' />
<link rel='stylesheet' type='text/css' href='revolution/css/navigation.css' />
<!--[if lt IE 9]>
      <script src='https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js'></script>
      <script src='https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'></script>
      <![endif]-->
</head>
<body id='default_theme' class='it_service'>
<!-- loader -->
<div class='bg_load'> <img class='loader_animation' src='images/loaders/loader_1.png' alt='#' /> </div>
<!-- end loader -->
<!-- header -->
    <header id='default_header' class='header_style_1'>
  <!-- header top -->
  <div class='header_top'>
    <div class='container'>
      <div class='row'>
        <div class='col-md-8'>
          <div class='full'>
            <div class='topbar-left'>
              <ul class='list-inline'>
                <li> <span class='topbar-label'><i class='fa  fa-home'></i></span> <span class='topbar-hightlight'>Avenida Madrid Petrer Alicante 03610</span> </li>
                <li> <span class='topbar-label'><i class='fa fa-envelope-o'></i></span> <span class='topbar-hightlight'><a href='PCRSadmin@pcrsasistant.com<'>PCRSadmin@pcrsasistant.com</a></span> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class='col-md-4 right_section_header_top'>
          <div class='float-left'>
            <div class='social_icon'>
              <ul class='list-inline'>
                <li><a class='fa fa-facebook' href='https://www.facebook.com/' title='Facebook' target='_blank'></a></li>
                <li><a class='fa fa-google-plus' href='https://plus.google.com/' title='Google+' target='_blank'></a></li>
                <li><a class='fa fa-twitter' href='https://twitter.com' title='Twitter' target='_blank'></a></li>
                <li><a class='fa fa-linkedin' href='https://www.linkedin.com' title='LinkedIn' target='_blank'></a></li>
                <li><a class='fa fa-instagram' href='https://www.instagram.com' title='Instagram' target='_blank'></a></li>
              </ul>
            </div>
          </div>
          <div class='float-right'>";

          foreach ($arrayPestañas as $pestanya) {
              echo "<div class='make_appo'> <a class='btn white_btn' href='$pestanya.php'>.$pestanya</a> </div>";
          }


        echo "</div>
        </div>
      </div>
    </div>
  </div>
  <!-- end header top -->
  <!-- header bottom -->
  <div class='header_bottom'>
    <div class='container'>
      <div class='row'>
        <div class='col-lg-3 col-md-12 col-sm-12 col-xs-12'>
          <!-- logo start -->
          <div class='logo'> <a href='it_home.html'><img src='images/logos/logo1.png' alt='logo' /></a> </div>
          <!-- logo end -->
        </div>
        <div class='col-lg-9 col-md-12 col-sm-12 col-xs-12'>
          <!-- menu start -->
          <div class='menu_side'>
            <div id='navbar_menu'>
              <ul class='first-ul'>
                <li> <a class='active' href='index.html'>Home</a>
                </li>
                <li><a href='it_about.html'>About Us</a></li>
                <li> <a href='it_service.html'>Service</a>
                  <ul>
                    <li><a href='it_service_list.html'>Services list</a></li>
                    <li><a href='it_service_detail.html'>Services Detail</a></li>
                  </ul>
                </li>
                <li> <a href='it_contact.html'>Contact</a>
                  <ul>
                    <li><a href='it_contact.html'>Contact Page 1</a></li>
                    <li><a href='it_contact_2.html'>Contact Page 2</a></li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class='search_icon'>
              <ul>
                <li><a href='#' data-toggle='modal' data-target='#search_bar'><i class='fa fa-search' aria-hidden='true'></i></a></li>
              </ul>
            </div>
          </div>
          <!-- menu end -->
        </div>
      </div>
    </div>
  </div>
  <!-- header bottom end -->
</header>
<!-- end header -->";
          
}

function generarCierre (){

    echo "
    <h2 class='center'> Why Choose Us </h2>
            <p class='center' class='large'>Fastest repair service with best price!</p>
          </div>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12'>
        <div class='full text_align_center margin_bottom_30'>
          <div class='center'>
            <div class='icon'> <img src='images/it_service/i1.png' alt='#' /> </div>
          </div>
          <h4 class='theme_color'>Data recovery</h4>
          <p>Perspiciatis eos quos totam cum minima aut!</p>
        </div>
      </div>
      <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12'>
        <div class='full text_align_center margin_bottom_30'>
          <div class='center'>
            <div class='icon'> <img src='images/it_service/i2.png' alt='#' /> </div>
          </div>
          <h4 class='theme_color'>Computer repair</h4>
          <p>Perspiciatis eos quos totam cum minima aut!</p>
        </div>
      </div>
      <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12'>
        <div class='full text_align_center margin_bottom_30'>
          <div class='center'>
            <div class='icon'> <img src='images/it_service/i3.png' alt='#' /> </div>
          </div>
          <h4 class='theme_color'>Mobile service</h4>
          <p>Perspiciatis eos quos totam cum minima aut!</p>
        </div>
      </div>
      <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12'>
        <div class='full text_align_center margin_bottom_30 margin_0'>
          <div class='center'>
            <div class='icon'> <img src='images/it_service/i4.png' alt='#' /> </div>
          </div>
          <h4 class='theme_color'>Network solutions</h4>
          <p>Perspiciatis eos quos totam cum minima aut!</p>
        </div>
      </div>
    </div>
    <div class='row' style='margin-top: 35px'>
      <div class='col-md-8'>
        <div class='full margin_bottom_30'>
          <div class='accordion border_circle'>
            <div class='bs-example'>
              <div class='panel-group' id='accordion'>
                <div class='panel panel-default'>
                  <div class='panel-heading'>
                    <p class='panel-title'> <a data-toggle='collapse' data-parent='#accordion' href='#collapseOne'><i class='fa fa-bar-chart' aria-hidden='true'></i> Complete Recovery from Local & External Drive<i class='fa fa-angle-down'></i></a> </p>
                  </div>
                  <div id='collapseOne' class='panel-collapse collapse in'>
                    <div class='panel-body'>
                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it 
                        over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                        consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                    </div>
                  </div>
                </div>
                <div class='panel panel-default'>
                  <div class='panel-heading'>
                    <p class='panel-title'> <a data-toggle='collapse' data-parent='#accordion' href='#collapseTwo'><i class='fa fa-plane'></i> Recovery Photo, Image, Video and Audio<i class='fa fa-angle-down'></i></a> </p>
                  </div>
                  <div id='collapseTwo' class='panel-collapse collapse'>
                    <div class='panel-body'>
                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it 
                        over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                        consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                    </div>
                  </div>
                </div>
                <div class='panel panel-default'>
                  <div class='panel-heading'>
                    <p class='panel-title'> <a data-toggle='collapse' data-parent='#accordion' href='#collapseThree'><i class='fa fa-star'></i> Mobile Phone Recovery<i class='fa fa-angle-down'></i></a> </p>
                  </div>
                  <div id='collapseThree' class='panel-collapse collapse'>
                    <div class='panel-body'>
                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it 
                        over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                        consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                    </div>
                  </div>
                </div>
                <div class='panel panel-default'>
                  <div class='panel-heading'>
                    <p class='panel-title'> <a data-toggle='collapse' data-parent='#accordion' href='#collapseFour'><i class='fa fa-bar-chart' aria-hidden='true'></i> Complete Recovery from Local & External Drive<i class='fa fa-angle-down'></i></a> </p>
                  </div>
                  <div id='collapseFour' class='panel-collapse collapse in'>
                    <div class='panel-body'>
                      <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it 
                        over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, 
                        consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='col-md-4'>
        <div class='full' style='margin-top: 35px;'>
          <h3>Need file recovery?</h3>
          <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et 
            quasi architecto beatae vitae dicta sunt explicabo.. </p>
          <p><a class='btn main_bt' href='#'>Read More</a></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class='section padding_layout_1 light_silver gross_layout'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <div class='full'>
          <div class='main_heading text_align_left'>
            <h2>Service Process</h2>
            <p class='large'>Easy and effective way to get your device repaired.</p>
          </div>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class='col-md-8'>
        <div class='row'>
          <div class='col-md-4'>
            <div class='full'>
              <div class='service_blog_inner'>
                <div class='icon text_align_left'><img src='images/it_service/si1.png' alt='#' /></div>
                <h4 class='service-heading'>Fast service</h4>
                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
              </div>
            </div>
          </div>
          <div class='col-md-4'>
            <div class='full'>
              <div class='service_blog_inner'>
                <div class='icon text_align_left'><img src='images/it_service/si2.png' alt='#' /></div>
                <h4 class='service-heading'>Secure payments</h4>
                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
              </div>
            </div>
          </div>
          <div class='col-md-4'>
            <div class='full'>
              <div class='service_blog_inner'>
                <div class='icon text_align_left'><img src='images/it_service/si3.png' alt='#' /></div>
                <h4 class='service-heading'>Expert team</h4>
                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
              </div>
            </div>
          </div>
          <div class='col-md-4'>
            <div class='full'>
              <div class='service_blog_inner'>
                <div class='icon text_align_left'><img src='images/it_service/si4.png' alt='#' /></div>
                <h4 class='service-heading'>Affordable services</h4>
                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
              </div>
            </div>
          </div>
          <div class='col-md-4'>
            <div class='full'>
              <div class='service_blog_inner'>
                <div class='icon text_align_left'><img src='images/it_service/si5.png' alt='#' /></div>
                <h4 class='service-heading'>90 Days warranty</h4>
                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
              </div>
            </div>
          </div>
          <div class='col-md-4'>
            <div class='full'>
              <div class='service_blog_inner'>
                <div class='icon text_align_left'><img src='images/it_service/si6.png' alt='#' /></div>
                <h4 class='service-heading'>Award winning</h4>
                <p>Exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class='section padding_layout_1'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <div class='full'>
          <div class='main_heading text_align_center'>
            <h2>Our Products</h2>
            <p class='large'>We package the products with best services to make you a happy customer.</p>
          </div>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all'>
        <div class='product_list'>
          <div class='product_img'> <img class='img-responsive' src='images/it_service/1.jpg' alt=''> </div>
          <div class='product_detail_btm'>
            <div class='center'>
              <h4><a href='it_shop_detail.html'>Norton Internet Security</a></h4>
            </div>
            <div class='starratin'>
              <div class='center'> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star-o' aria-hidden='true'></i> </div>
            </div>
            <div class='product_price'>
              <p><span class='old_price'>$15.00</span> – <span class='new_price'>$25.00</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all'>
        <div class='product_list'>
          <div class='product_img'> <img class='img-responsive' src='images/it_service/2.jpg' alt=''> </div>
          <div class='product_detail_btm'>
            <div class='center'>
              <h4><a href='it_shop_detail.html'>Kaspersky Internet Security</a></h4>
            </div>
            <div class='starratin'>
              <div class='center'> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star-o' aria-hidden='true'></i> </div>
            </div>
            <div class='product_price'>
              <p><span class='old_price'>$24.99</span><span class='new_price'> $12.49</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all'>
        <div class='product_list'>
          <div class='product_img'> <img class='img-responsive' src='images/it_service/3.jpg' alt=''> </div>
          <div class='product_detail_btm'>
            <div class='center'>
              <h4><a href='it_shop_detail.html'>Mcafee Livesafe Antivirus</a></h4>
            </div>
            <div class='starratin'>
              <div class='center'> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star-o' aria-hidden='true'></i> </div>
            </div>
            <div class='product_price'>
              <p><span class='old_price'>$24.99</span><span class='new_price'> $12.49</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all'>
        <div class='product_list'>
          <div class='product_img'> <img class='img-responsive' src='images/it_service/4.jpg' alt=''> </div>
          <div class='product_detail_btm'>
            <div class='center'>
              <h4><a href='it_shop_detail.html'>Norton Internet Security</a></h4>
            </div>
            <div class='starratin'>
              <div class='center'> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star-o' aria-hidden='true'></i> </div>
            </div>
            <div class='product_price'>
              <p><span class='old_price'>$15.00</span> – <span class='new_price'>$25.00</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all'>
        <div class='product_list'>
          <div class='product_img'> <img class='img-responsive' src='images/it_service/5.jpg' alt=''> </div>
          <div class='product_detail_btm'>
            <div class='center'>
              <h4><a href='it_shop_detail.html'>Norton Internet Security</a></h4>
            </div>
            <div class='starratin'>
              <div class='center'> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star-o' aria-hidden='true'></i> </div>
            </div>
            <div class='product_price'>
              <p><span class='old_price'>$15.00</span> – <span class='new_price'>$25.00</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all'>
        <div class='product_list'>
          <div class='product_img'> <img class='img-responsive' src='images/it_service/6.jpg' alt=''> </div>
          <div class='product_detail_btm'>
            <div class='center'>
              <h4><a href='it_shop_detail.html'>Kaspersky Internet Security</a></h4>
            </div>
            <div class='starratin'>
              <div class='center'> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star-o' aria-hidden='true'></i> </div>
            </div>
            <div class='product_price'>
              <p><span class='old_price'>$24.99</span><span class='new_price'> $12.49</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all'>
        <div class='product_list'>
          <div class='product_img'> <img class='img-responsive' src='images/it_service/7.jpg' alt=''> </div>
          <div class='product_detail_btm'>
            <div class='center'>
              <h4><a href='it_shop_detail.html'>Mcafee Livesafe Antivirus</a></h4>
            </div>
            <div class='starratin'>
              <div class='center'> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star-o' aria-hidden='true'></i> </div>
            </div>
            <div class='product_price'>
              <p><span class='old_price'>$24.99</span><span class='new_price'> $12.49</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all'>
        <div class='product_list'>
          <div class='product_img'> <img class='img-responsive' src='images/it_service/8.jpg' alt=''> </div>
          <div class='product_detail_btm'>
            <div class='center'>
              <h4><a href='it_shop_detail.html'>Norton Internet Security</a></h4>
            </div>
            <div class='starratin'>
              <div class='center'> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star-o' aria-hidden='true'></i> </div>
            </div>
            <div class='product_price'>
              <p><span class='old_price'>$15.00</span> – <span class='new_price'>$25.00</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all'>
        <div class='product_list'>
          <div class='product_img'> <img class='img-responsive' src='images/it_service/1.jpg' alt=''> </div>
          <div class='product_detail_btm'>
            <div class='center'>
              <h4><a href='it_shop_detail.html'>Norton Internet Security</a></h4>
            </div>
            <div class='starratin'>
              <div class='center'> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star-o' aria-hidden='true'></i> </div>
            </div>
            <div class='product_price'>
              <p><span class='old_price'>$15.00</span> – <span class='new_price'>$25.00</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all'>
        <div class='product_list'>
          <div class='product_img'> <img class='img-responsive' src='images/it_service/2.jpg' alt=''> </div>
          <div class='product_detail_btm'>
            <div class='center'>
              <h4><a href='it_shop_detail.html'>Kaspersky Internet Security</a></h4>
            </div>
            <div class='starratin'>
              <div class='center'> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star-o' aria-hidden='true'></i> </div>
            </div>
            <div class='product_price'>
              <p><span class='old_price'>$24.99</span><span class='new_price'> $12.49</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all'>
        <div class='product_list'>
          <div class='product_img'> <img class='img-responsive' src='images/it_service/3.jpg' alt=''> </div>
          <div class='product_detail_btm'>
            <div class='center'>
              <h4><a href='it_shop_detail.html'>Mcafee Livesafe Antivirus</a></h4>
            </div>
            <div class='starratin'>
              <div class='center'> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star-o' aria-hidden='true'></i> </div>
            </div>
            <div class='product_price'>
              <p><span class='old_price'>$24.99</span><span class='new_price'> $12.49</span></p>
            </div>
          </div>
        </div>
      </div>
      <div class='col-lg-3 col-md-6 col-sm-6 col-xs-12 margin_bottom_30_all'>
        <div class='product_list'>
          <div class='product_img'> <img class='img-responsive' src='images/it_service/4.jpg' alt=''> </div>
          <div class='product_detail_btm'>
            <div class='center'>
              <h4><a href='it_shop_detail.html'>Norton Internet Security</a></h4>
            </div>
            <div class='starratin'>
              <div class='center'> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star' aria-hidden='true'></i> <i class='fa fa-star-o' aria-hidden='true'></i> </div>
            </div>
            <div class='product_price'>
              <p><span class='old_price'>$15.00</span> – <span class='new_price'>$25.00</span></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class='section padding_layout_1 light_silver gross_layout right_gross_layout'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <div class='full'>
          <div class='main_heading text_align_right'>
            <h2>Our Feedback</h2>
            <p class='large'>Easy and effective way to get your device repaired.</p>
          </div>
        </div>
      </div>
    </div>
    <div class='row counter'>
      <div class='col-md-4'> </div>
      <div class='col-md-8'>
        <div class='row'>
          <div class='col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50'>
            <div class='text_align_right'><i class='fa fa-smile-o'></i></div>
            <div class='text_align_right'>
              <p class='counter-heading text_align_right'>Happy Customers</p>
            </div>
            <h5 class='counter-count'>2150</h5>
          </div>
          <div class='col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50'>
            <div class='text_align_right'><i class='fa fa-laptop'></i></div>
            <div class='text_align_right'>
              <p class='counter-heading text_align_right'>Laptop Repaired</p>
            </div>
            <h5 class='counter-count'>1280</h5>
          </div>
          <div class='col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50'>
            <div class='text_align_right'><i class='fa fa-desktop'></i></div>
            <div class='text_align_right'>
              <p class='counter-heading'>Computer Repaired</p>
            </div>
            <h5 class='counter-count'>848</h5>
          </div>
          <div class='col-lg-6 col-md-6 col-sm-6 col-xs-12 margin_bottom_50'>
            <div class='text_align_right'><i class='fa fa-windows'></i></div>
            <div class='text_align_right'>
              <p class='counter-heading'>OS Installed</p>
            </div>
            <h5 class='counter-count'>450</h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class='section padding_layout_1'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <div class='full'>
          <div class='main_heading text_align_left'>
            <h2>Latest from Our Blog</h2>
          </div>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class='col-md-4'>
        <div class='full blog_colum'>
          <div class='blog_feature_img'> <img src='images/it_service/post-03.jpg' alt='#' /> </div>
          <div class='post_time'>
            <p><i class='fa fa-clock-o'></i> April 16, 2018 ( In Maintenance )</p>
          </div>
          <div class='blog_feature_head'>
            <h4>Why Your Computer Hates You</h4>
          </div>
          <div class='blog_feature_cont'>
            <p>Lorem ipsum dolor sit amet, consectetur quam justo, pretium adipiscing elit. Vestibulum quam justo, pretium eu tempus ut, ...</p>
          </div>
        </div>
      </div>
      <div class='col-md-4'>
        <div class='full blog_colum'>
          <div class='blog_feature_img'> <img src='images/it_service/post-04.jpg' alt='#' /> </div>
          <div class='post_time'>
            <p><i class='fa fa-clock-o'></i> April 16, 2018 ( In Maintenance )</p>
          </div>
          <div class='blog_feature_head'>
            <h4>Easy Tips To Computer Repair</h4>
          </div>
          <div class='blog_feature_cont'>
            <p>Lorem ipsum dolor sit amet, consectetur quam justo, pretium adipiscing elit. Vestibulum quam justo, pretium eu tempus ut, ...</p>
          </div>
        </div>
      </div>
      <div class='col-md-4'>
        <div class='full blog_colum'>
          <div class='blog_feature_img'> <img src='images/it_service/post-06.jpg' alt='#' /> </div>
          <div class='post_time'>
            <p><i class='fa fa-clock-o'></i> April 16, 2018 ( In Maintenance )</p>
          </div>
          <div class='blog_feature_head'>
            <h4>Computer Maintenance 2018</h4>
          </div>
          <div class='blog_feature_cont'>
            <p>Lorem ipsum dolor sit amet, consectetur quam justo, pretium adipiscing elit. Vestibulum quam justo, pretium eu tempus ut, ...</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class='section padding_layout_1 testmonial_section white_fonts'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <div class='full'>
          <div class='main_heading text_align_left'>
            <h2 style='text-transform: none;'>What Clients Say?</h2>
            <p class='large'>Here are testimonials from clients..</p>
          </div>
        </div>
      </div>
    </div>
    <div class='row'>
      <div class='col-sm-7'>
        <div class='full'>
          <div id='testimonial_slider' class='carousel slide' data-ride='carousel'>
            <!-- Indicators -->
            <ul class='carousel-indicators'>
              <li data-target='#testimonial_slider' data-slide-to='0' class='active'></li>
              <li data-target='#testimonial_slider' data-slide-to='1'></li>
              <li data-target='#testimonial_slider' data-slide-to='2'></li>
            </ul>
            <!-- The slideshow -->
            <div class='carousel-inner'>
              <div class='carousel-item active'>
                <div class='testimonial-container'>
                  <div class='testimonial-content'> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                    I am really satisfied with my first laptop service. </div>
                  <div class='testimonial-photo'> <img src='images/it_service/client1.jpg' class='img-responsive' alt='#' width='150' height='150'> </div>
                  <div class='testimonial-meta'>
                    <h4>Maria Anderson</h4>
                    <span class='testimonial-position'>CFO, Tech NY</span> </div>
                </div>
              </div>
              <div class='carousel-item'>
                <div class='testimonial-container'>
                  <div class='testimonial-content'> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                    I am really satisfied with my first laptop service. </div>
                  <div class='testimonial-photo'> <img src='images/it_service/client2.jpg' class='img-responsive' alt='#' width='150' height='150'> </div>
                  <div class='testimonial-meta'>
                    <h4>Maria Anderson</h4>
                    <span class='testimonial-position'>CFO, Tech NY</span> </div>
                </div>
              </div>
              <div class='carousel-item'>
                <div class='testimonial-container'>
                  <div class='testimonial-content'> You guys rock! Thank you for making it painless, pleasant and most of all hassle free! I wish I would have thought of it first. 
                    I am really satisfied with my first laptop service. </div>
                  <div class='testimonial-photo'> <img src='images/it_service/client3.jpg' class='img-responsive' alt='#' width='150' height='150'> </div>
                  <div class='testimonial-meta'>
                    <h4>Maria Anderson</h4>
                    <span class='testimonial-position'>CFO, Tech NY</span> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class='col-sm-5'>
        <div class='full'> </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class='section'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <div class='full'>
          <div class='contact_us_section'>
            <div class='call_icon'> <img src='images/it_service/phone_icon.png' alt='#' /> </div>
            <div class='inner_cont'>
              <h2>REQUEST A FREE QUOTE</h2>
              <p>Get answers and advice from people you want it from.</p>
            </div>
            <div class='button_Section_cont'> <a class='btn dark_gray_bt' href='it_contact.html'>Contact us</a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- section -->
<div class='section padding_layout_1' style='padding: 50px 0;'>
  <div class='container'>
    <div class='row'>
      <div class='col-md-12'>
        <div class='full'>
          <ul class='brand_list'>
            <li><img src='images/it_service/brand_icon1.png' alt='#' /></li>
            <li><img src='images/it_service/brand_icon2.png' alt='#' /></li>
            <li><img src='images/it_service/brand_icon3.png' alt='#' /></li>
            <li><img src='images/it_service/brand_icon4.png' alt='#' /></li>
            <li><img src='images/it_service/brand_icon5.png' alt='#' /></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end section -->
<!-- Modal -->
<div class='modal fade' id='search_bar' role='dialog'>
  <div class='modal-dialog'>
    <!-- Modal content-->
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'><i class='fa fa-close'></i></button>
      </div>
      <div class='modal-body'>
        <div class='row'>
          <div class='col-lg-8 col-md-8 col-sm-8 offset-lg-2 offset-md-2 offset-sm-2 col-xs-10 col-xs-offset-1'>
            <div class='navbar-search'>
              <form action='#' method='get' id='search-global-form' class='search-global'>
                <input type='text' placeholder='Type to search' autocomplete='off' name='s' id='search' value='' class='search-global__input'>
                <button class='search-global__btn'><i class='fa fa-search'></i></button>
                <div class='search-global__note'>Begin typing your search above and press return to search.</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Model search bar -->
<!-- footer -->
<footer class='footer_style_2'>
  <div class='container-fuild'>
    <div class='row'>
      <div class='map_section'>
        <div id='map'></div>
      </div>
      <div class='footer_blog'>
        <div class='row'>
          <div class='col-md-6'>
            <div class='main-heading left_text'>
              <h2>PCRS-Theme</h2>
            </div>
            <p>Empresa dedicada al sector de Tecnologia apliccable a sectores de negocios nuevos en el mercado lavoral</p>
            <ul class='social_icons'>
              <li class='social-icon fb'><a href='#'><i class='fa fa-facebook' aria-hidden='true'></i></a></li>
              <li class='social-icon tw'><a href='#'><i class='fa fa-twitter' aria-hidden='true'></i></a></li>
              <li class='social-icon gp'><a href='#'><i class='fa fa-google-plus' aria-hidden='true'></i></a></li>
            </ul>
          </div>
          <div class='col-md-6'>
            <div class='main-heading left_text'>
              <h2>Additional links</h2>
            </div>
            <ul class='footer-menu'>
              <li><a href='it_about.html'><i class='fa fa-angle-right'></i> About us</a></li>
              <li><a href='it_term_condition.html'><i class='fa fa-angle-right'></i> Terms and conditions</a></li>
              <li><a href='it_privacy_policy.html'><i class='fa fa-angle-right'></i> Privacy policy</a></li>
              <li><a href='it_news.html'><i class='fa fa-angle-right'></i> News</a></li>
              <li><a href='it_contact.html'><i class='fa fa-angle-right'></i> Contact us</a></li>
            </ul>
          </div>
          <div class='col-md-6'>
            <div class='main-heading left_text'>
              <h2>Services</h2>
            </div>
            <ul class='footer-menu'>
              <li><a href='it_data_recovery.html'><i class='fa fa-angle-right'></i> Data recovery</a></li>
              <li><a href='it_computer_repair.html'><i class='fa fa-angle-right'></i> Computer repair</a></li>
              <li><a href='it_mobile_service.html'><i class='fa fa-angle-right'></i> Mobile service</a></li>
              <li><a href='it_network_solution.html'><i class='fa fa-angle-right'></i> Network solutions</a></li>
              <li><a href='it_techn_support.html'><i class='fa fa-angle-right'></i> Technical support</a></li>
            </ul>
          </div>
          <div class='col-md-6'>
            <div class='main-heading left_text'>
              <h2>Contact us</h2>
            </div>
            <p>123 Second Street Fifth Avenue,<br>
              Petrel Alicante<br>
              <span style='font-size:18px;'><a href='tel:+9876543210'>+987 654 3210</a></span></p>
            <div class='footer_mail-section'>
              <form>
                <fieldset>
                <div class='field'>
                  <input placeholder='Email' type='text'>
                  <button class='button_custom'><i class='fa fa-envelope' aria-hidden='true'></i></button>
                </div>
                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class='cprt'>
        <p>PCRS © Copyrights 2021 Design by html.design</p>
      </div>
    </div>
  </div>
</footer>
<!-- end footer -->
<!-- js section -->
<script src='js/jquery.min.js'></script>
<script src='js/bootstrap.min.js'></script>
<!-- menu js -->
<script src='js/menumaker.js'></script>
<!-- wow animation -->
<script src='js/wow.js'></script>
<!-- custom js -->
<script src='js/custom.js'></script>
<!-- revolution js files -->
<script src='revolution/js/jquery.themepunch.tools.min.js'></script>
<script src='revolution/js/jquery.themepunch.revolution.min.js'></script>
<script src='revolution/js/extensions/revolution.extension.actions.min.js'></script>
<script src='revolution/js/extensions/revolution.extension.carousel.min.js'></script>
<script src='revolution/js/extensions/revolution.extension.kenburn.min.js'></script>
<script src='revolution/js/extensions/revolution.extension.layeranimation.min.js'></script>
<script src='revolution/js/extensions/revolution.extension.migration.min.js'></script>
<script src='revolution/js/extensions/revolution.extension.navigation.min.js'></script>
<script src='revolution/js/extensions/revolution.extension.parallax.min.js'></script>
<script src='revolution/js/extensions/revolution.extension.slideanims.min.js'></script>
<script src='revolution/js/extensions/revolution.extension.video.min.js'></script>
<!-- map js -->
<script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 38.47948047850275, lng: -0.7850647850023185},
         styles: [
                  {
                    elementType: 'geometry',
                    stylers: [{color: '#fefefe'}]
                  },
                  {
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                  },
                  {
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    elementType: 'labels.text.stroke',
                    stylers: [{color: '#f5f5f5'}]
                  },
                  {
                    featureType: 'administrative.land_parcel',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#bdbdbd'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'geometry',
                    stylers: [{color: '#eeeeee'}]
                  },
                  {
                    featureType: 'poi',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#757575'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'poi.park',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'road',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.arterial',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#3d3523'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'geometry',
                    stylers: [{color: '#eee'}]
                  },
                  {
                    featureType: 'road.highway',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#616161'}]
                  },
                  {
                    featureType: 'road.local',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#9e9e9e'}]
                  },
                  {
                    featureType: 'transit.line',
                    elementType: 'geometry',
                    stylers: [{color: '#e5e5e5'}]
                  },
                  {
                    featureType: 'transit.station',
                    elementType: 'geometry',
                    stylers: [{color: '#000'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'geometry',
                    stylers: [{color: '#c8d7d4'}]
                  },
                  {
                    featureType: 'water',
                    elementType: 'labels.text.fill',
                    stylers: [{color: '#b1a481'}]
                  }
                ]
         });
         
           var image = 'images/it_service/location_icon_map_cont.png';
           var beachMarker = new google.maps.Marker({
             position: {lat: 38.47948047850275, lng: 0.7850647850023185},
             map: map,  
             icon: image
           });
         }
      </script>
<!-- google map js -->
<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap'></script>
<!-- end google map js -->
</body>
</html>"
}


function comprobarUsuario($usuario,$pass){
    $con = conectarBD();
    $sql = "SELECT pass FROM usuario WHERE nombre = ?";

    //Se prepara la sentencia 
    $sentencia = mysqli_prepare($con,$sql);

    //Se asocian los parámetros a la sentencia y se ejecuta la misma
    mysqli_stmt_bind_param($sentencia,"s",$usuario);
    mysqli_stmt_execute($sentencia);

    //Acceso a los resultados de la ejcución de la consulta
    $pass_cifrado;
    mysqli_stmt_bind_result($sentencia,$pass_cifrado);

    //Se mueve a la siguiente fila del conjunto de resultados, en este caso solamente uno.
    mysqli_stmt_fetch($sentencia);

    //Se comprueba que la contraseña sea correcta
    if (password_verify($pass,$pass_cifrado)){
        return true;
    }else{
        return false;
    }
}
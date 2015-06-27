<!DOCTYPE html>
<html lang="en" ng-app="app">

<head>
  <meta charset="utf-8">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="author" content="">
  <base href="application/views/index.php">
  <title></title>
  <link href="../../assets/css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="../../assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <link href="../../assets/css/animate.css" rel="stylesheet">
  <link href="../../assets/css/style.css" rel="stylesheet">
  <link href="../../assets/css/theme_colors.css" rel="stylesheet">
</head>

<body ng-controller="GlobalController" id="page-top" data-spy="scroll" data-target=".navbar-custom">
  <!-- Preloader -->
  <div id="preloader">
    <div class="loader-logo">
      <img class="svg logo" src="../../assets/img/logo-white.svg"/>
      <h1 class="text-uppercase">{{lang.get('intro.brand')}}</h2>
    </div>
  </div>

  <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header page-scroll">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
          <i class="fa fa-bars"></i>
        </button>
        <a class="navbar-brand" href="index.html">
          <h1>{{lang.get('nav.brand')}}</h1>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#intro">{{lang.get('nav.home')}}</a></li>
          <li><a href="#about">{{lang.get('nav.about')}}</a></li>
          <li><a href="#service">{{lang.get('nav.services')}}</a></li>
          <li><a href="#contact">{{lang.get('nav.contact')}}</a></li>
          <!--<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Example menu</a></li>
              <li><a href="#">Example menu</a></li>
              <li><a href="#">Example menu</a></li>
            </ul>
          </li>-->
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
  </nav>

  <!-- Section: intro -->
  <section ng-Controller="IntroController" id="intro" class="intro">
    <div class="slogan">
      <h2 class="text-uppercase h2-xs">{{title()}}</h2>
      <h4>{{lang.get('intro.subtitle.preswap')}} </span id="intro-swap">{{swap}}</span></h4>
    </div>
    <div class="page-scroll">
      <a href="#service" class="btn btn-circle">
        <i class="fa fa-angle-double-down animated"></i>
      </a>
    </div>
  </section>
  <!-- /Section: intro -->

  <!-- Section: about -->
  <section id="about" class="home-section text-center">
    <div class="heading-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div>
              <div class="section-heading">
                <h2 class="h2-xs">{{lang.get('about.title')}}</h2>
                <i class="fa fa-2x fa-angle-down"></i>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row hidden-xs">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>
      <div class="row">
      <?php
        $offset_employees = true;
        foreach($employees as $employee=>$img){

      ?>
        <div class="col-xs-offset-2 <?= ($offset_employees)?"col-md-offset-1": "" ?> col-xs-8 col-sm-6 col-md-2">
          <div>
            <div class="team boxed-grey">
              <div class="inner">
                <h5>{{lang.get("about.employees.<?=$employee?>.name")}}</h5>
                <p class="subtitle">{{lang.get("about.employees.<?=$employee?>.title")}}</p>
                <div class="avatar">
                  <img src="../../assets/img/team/<?=$img?>.jpg" alt="" class="img-responsive img-circle" />
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php
          $offset_employees = false;
        }
      ?>
      </div>
    </div>
  </section>
  <!-- /Section: about -->


  <!-- Section: services -->
  <section id="service" class="home-section text-center bg-gray">

    <div class="heading-about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div>
              <div class="section-heading">
                <h2 class="h2-xs">{{lang.get('services.title')}}</h2>
                <i class="fa fa-2x fa-angle-down"></i>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row hidden-xs">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>
      <div class="row">
      <?php
        for($i = 0; $i < $COUNT_SERVICES; $i++){
      ?>
          <div class="col-sm-3 col-md-3">
            <div>
              <div class="service-box">
                <div class="service-icon">
                  <span class="glyphicon glyphicon-{{lang.get('services.services[<?=$i?>].glyphicon')}}" aria-hidden="true"></span>
                </div>
                <div class="service-desc">
                  <h5>{{lang.get('services.services[<?=$i?>].title')}}</h5>
                  <p>{{lang.get('services.services[<?=$i?>].desc')}}</p>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      ?>
      </div>
    </div>
  </section>
  <!-- /Section: services -->




  <!-- Section: contact -->
  <section id="contact" class="home-section text-center">
    <div class="heading-contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-lg-offset-2">
            <div>
              <div class="section-heading">
                <h2 class="h2-xs">{{lang.get('contact.title')}}</h2>
                <i class="fa fa-2x fa-angle-down"></i>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">

      <div class="row hidden-xs">
        <div class="col-lg-2 col-lg-offset-5">
          <hr class="marginbot-50">
        </div>
      </div>
      <div class="row">
        <!--<div class="col-lg-8">
          <div class="boxed-grey">
            <form id="contact-form">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">{{lang.get('contact.form.name.label')}}</label>
                    <input type="text" class="form-control" id="name"
                    placeholder="{{lang.get('contact.form.name.placeholder')}}" required="required" />
                  </div>
                  <div class="form-group">
                    <label for="email">{{lang.get('contact.form.email.label')}}</label>
                    <div class="input-group">
                      <span class="input-group-addon">
                        <span class="glyphicon glyphicon-envelope"></span>
                      </span>
                      <input type="email" class="form-control" id="email"
                      placeholder="{{lang.get('contact.form.email.placeholder')}}" required="required" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="subject">{{lang.get('contact.form.subject.label')}}</label>
                    <select id="subject" name="subject" class="form-control" required="required">
                      <option value="na" selected="">{{lang.get('contact.form.subject.select.default_choice')}}</option>
                      <option value="service">{{lang.get('contact.form.subject.select.choices[0]')}}</option>
                      <option value="suggestions">{{lang.get('contact.form.subject.select.choices[1]')}}</option>
                      <option value="product">{{lang.get('contact.form.subject.select.choices[2]')}}</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="name">{{lang.get('contact.form.message.label')}}</label>
                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                    placeholder="{{lang.get('contact.form.message.placeholder')}}"></textarea>
                  </div>
                </div>
                <div class="col-md-12">
                  <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">{{lang.get('contact.form.submit.label')}}</button>
                </div>
              </div>
            </form>
          </div>
        </div>-->

        <div class="col-md-offset-3 col-lg-offset-3 col-xs-12 col-sm-12 col-md-3 col-lg-3">
          <div class="widget-contact">
            <h5>{{lang.get('contact.info.office.title')}}</h5>

            <address>
              <strong>{{lang.get('contact.info.office.company_name')}}</strong>
              <br> {{lang.get('contact.info.office.address.street')}}
              <br> {{lang.get('contact.info.office.address.city_and_country')}}
              <br>
              <!--<abbr title="Phone">P:</abbr> (123) 456-7890-->
            </address>

            <!--
            <address>
              <strong>Email</strong>
              <br>
              <a href="mailto:#">info_at_myselia.com</a>
            </address>
            <address>
              <strong>We're on social networks</strong>
              <br>
              <ul class="company-social">
                <li class="social-facebook"><a href="#" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li class="social-twitter"><a href="#" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li class="social-dribble"><a href="#" target="_blank"><i class="fa fa-dribbble"></i></a></li>
                <li class="social-google"><a href="#" target="_blank"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </address>
            -->
          </div>
        </div>
        <div class="col-md-offset-2 col-lg-offset-2 col-xs-12 col-sm-12 col-md-4 col-lg-4">
          <div class="widget-contact">
            <h5>{{lang.get('contact.info.email.title')}}</h5>
            <address>
              <strong>{{lang.get('contact.info.email.title')}}</strong>
              <br>
              <a href="mailto:#">{{lang.get('contact.info.email.mailto')}}</a>
            </address>
          </div>
        </div>
      </div>

    </div>
  </section>
  <!-- /Section: contact -->

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-12">
          <div>
            <div class="page-scroll marginbot-30">
              <a href="#intro" id="totop" class="btn btn-circle">
                <i class="fa fa-angle-double-up animated"></i>
              </a>
            </div>
          </div>
          <img class="svg logo" src="../../assets/img/logo-white.svg"/>
          <p>{{lang.get('footer.copyright')}}</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Core JavaScript Files -->
  <script src="../../assets/js/jquery-2.1.3.min.js"></script>
  <script src="../../assets/js/angular.min.js"></script>
  <script src="../../assets/js/bootstrap.min.js"></script>
  <script src="../../assets/js/jquery.easing.min.js"></script>
  <script src="../../assets/js/jquery.scrollTo.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="../../assets/js/custom.js"></script>
  <script src="../controllers/controllers.js"></script>
  <script src="../models/services.js"></script>
  <script src="../app.js"></script>
  <script src="../models/json/i18n.js"></script>
</body>

</html>

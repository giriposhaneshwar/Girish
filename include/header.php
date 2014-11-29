<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $std['title']; ?></title>

    <?php
    foreach ($js as $k => $v) {
      echo '<script src="' . $v . '"></script>' . "\n";
    }
    foreach ($css as $k => $v) {
      echo '<link href="' . $v . '" type="text/css" rel="stylesheet" media="all" />' . "\n";
    }
    ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div ng-app="dcapp">

      <div class="headerSection" ng-controller="headerController">
        <div class="headerInner navbar navbar-default navbar-fixed-top" role="navigation">
          <nav>
            <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
            <div class="container-fluid">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-8">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">DC Application</a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->

              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-8">
                <ul class="nav navbar-nav">

                  <?php
                  $url = $_SERVER['PHP_SELF'];
                  $url = substr($url, 0, -4);
                  $urlsplit = explode('/', $url);

                  $urlCount = count($urlsplit);

                  $urlN = $urlsplit[$urlCount - 1];
//                  var_dump($mods);
                  foreach ($mods as $k => $v) {
                    if ($urlN == $k) {
                      if ($k == "index") {
                        $k = "home";
                      }
                      echo '<li class="active"><a href="' . $v . '">' . ucfirst($k) . '</a></li>';
                    } else {
                      if ($k == "index") {
                        $k = "home";
                      }
                      echo '<li><a href="' . $v . '">' . ucfirst($k) . '</a></li>';
                    }
                  }
                  ?>
                </ul>
              </div><!-- /.navbar-collapse -->
            </div>
          </nav>
        </div>
      </div>


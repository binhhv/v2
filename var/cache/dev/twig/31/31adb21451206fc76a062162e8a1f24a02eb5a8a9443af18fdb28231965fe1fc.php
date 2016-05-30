<?php

/* CoreThemeBundle:admin:layout.html.twig */
class __TwigTemplate_c65bb7de994d64585f9c492958762352b14eb852ea01a56c17669f08aedb911f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6890ea2f78346374e5fc9813d37ce86afe650ab02f20410341602d2d30dc4aae = $this->env->getExtension("native_profiler");
        $__internal_6890ea2f78346374e5fc9813d37ce86afe650ab02f20410341602d2d30dc4aae->enter($__internal_6890ea2f78346374e5fc9813d37ce86afe650ab02f20410341602d2d30dc4aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreThemeBundle:admin:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">

    <title>Gentallela Alela! | </title>

    <!-- Bootstrap -->
    <link href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/bootstrap/dist/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- Font Awesome -->
    <link href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- iCheck -->
    <link href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/iCheck/skins/flat/green.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- bootstrap-progressbar -->
    <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
    <!-- jVectorMap -->
    <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/css/maps/jquery-jvectormap-2.0.3.css"), "html", null, true);
        echo "\" rel=\"stylesheet\"/>

    <!-- Custom Theme Style -->
    <link href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/css/custom.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
  </head>

  <body class=\"nav-md\">
    <div class=\"container body\">
      <div class=\"main_container\">
        <div class=\"col-md-3 left_col\">
          <div class=\"left_col scroll-view\">
            <div class=\"navbar nav_title\" style=\"border: 0;\">
              <a href=\"index.html\" class=\"site_title\"><i class=\"fa fa-paw\"></i> <span>Gentellela Alela!</span></a>
            </div>

            <div class=\"clearfix\"></div>

            <!-- menu profile quick info -->
            <div class=\"profile\">
              <div class=\"profile_pic\">
                <img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/images/img.jpg"), "html", null, true);
        echo "\" alt=\"...\" class=\"img-circle profile_img\">
              </div>
              <div class=\"profile_info\">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id=\"sidebar-menu\" class=\"main_menu_side hidden-print main_menu\">
              <div class=\"menu_section\">
                <h3>General</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-home\"></i> Home <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"index.html\">Dashboard</a>
                      </li>
                      <li><a href=\"index2.html\">Dashboard2</a>
                      </li>
                      <li><a href=\"index3.html\">Dashboard3</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-edit\"></i> Forms <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"form.html\">General Form</a>
                      </li>
                      <li><a href=\"form_advanced.html\">Advanced Components</a>
                      </li>
                      <li><a href=\"form_validation.html\">Form Validation</a>
                      </li>
                      <li><a href=\"form_wizards.html\">Form Wizard</a>
                      </li>
                      <li><a href=\"form_upload.html\">Form Upload</a>
                      </li>
                      <li><a href=\"form_buttons.html\">Form Buttons</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-desktop\"></i> UI Elements <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"general_elements.html\">General Elements</a>
                      </li>
                      <li><a href=\"media_gallery.html\">Media Gallery</a>
                      </li>
                      <li><a href=\"typography.html\">Typography</a>
                      </li>
                      <li><a href=\"icons.html\">Icons</a>
                      </li>
                      <li><a href=\"glyphicons.html\">Glyphicons</a>
                      </li>
                      <li><a href=\"widgets.html\">Widgets</a>
                      </li>
                      <li><a href=\"invoice.html\">Invoice</a>
                      </li>
                      <li><a href=\"inbox.html\">Inbox</a>
                      </li>
                      <li><a href=\"calendar.html\">Calendar</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-table\"></i> Tables <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"tables.html\">Tables</a>
                      </li>
                      <li><a href=\"tables_dynamic.html\">Table Dynamic</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-bar-chart-o\"></i> Data Presentation <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"chartjs.html\">Chart JS</a>
                      </li>
                      <li><a href=\"chartjs2.html\">Chart JS2</a>
                      </li>
                      <li><a href=\"morisjs.html\">Moris JS</a>
                      </li>
                      <li><a href=\"echarts.html\">ECharts </a>
                      </li>
                      <li><a href=\"other_charts.html\">Other Charts </a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-clone\"></i>Layouts <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"fixed_sidebar.html\">Fixed Sidebar</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class=\"menu_section\">
                <h3>Live On</h3>
                <ul class=\"nav side-menu\">
                  <li><a><i class=\"fa fa-bug\"></i> Additional Pages <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"e_commerce.html\">E-commerce</a>
                      </li>
                      <li><a href=\"projects.html\">Projects</a>
                      </li>
                      <li><a href=\"project_detail.html\">Project Detail</a>
                      </li>
                      <li><a href=\"contacts.html\">Contacts</a>
                      </li>
                      <li><a href=\"profile.html\">Profile</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-windows\"></i> Extras <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                      <li><a href=\"page_403.html\">403 Error</a>
                      </li>
                      <li><a href=\"page_404.html\">404 Error</a>
                      </li>
                      <li><a href=\"page_500.html\">500 Error</a>
                      </li>
                      <li><a href=\"plain_page.html\">Plain Page</a>
                      </li>
                      <li><a href=\"login.html\">Login Page</a>
                      </li>
                      <li><a href=\"pricing_tables.html\">Pricing Tables</a>
                      </li>
                    </ul>
                  </li>
                  <li><a><i class=\"fa fa-sitemap\"></i> Multilevel Menu <span class=\"fa fa-chevron-down\"></span></a>
                    <ul class=\"nav child_menu\">
                        <li><a href=\"#level1_1\">Level One</a>
                        <li><a>Level One<span class=\"fa fa-chevron-down\"></span></a>
                          <ul class=\"nav child_menu\">
                            <li class=\"sub_menu\"><a href=\"level2.html\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_1\">Level Two</a>
                            </li>
                            <li><a href=\"#level2_2\">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href=\"#level1_2\">Level One</a>
                        </li>
                    </ul>
                  </li>
                  <li><a href=\"javascript:void(0)\"><i class=\"fa fa-laptop\"></i> Landing Page <span class=\"label label-success pull-right\">Coming Soon</span></a>
                  </li>
                </ul>
              </div>

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class=\"sidebar-footer hidden-small\">
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Settings\">
                <span class=\"glyphicon glyphicon-cog\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"FullScreen\">
                <span class=\"glyphicon glyphicon-fullscreen\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Lock\">
                <span class=\"glyphicon glyphicon-eye-close\" aria-hidden=\"true\"></span>
              </a>
              <a data-toggle=\"tooltip\" data-placement=\"top\" title=\"Logout\">
                <span class=\"glyphicon glyphicon-off\" aria-hidden=\"true\"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class=\"top_nav\">

          <div class=\"nav_menu\">
            <nav class=\"\" role=\"navigation\">
              <div class=\"nav toggle\">
                <a id=\"menu_toggle\"><i class=\"fa fa-bars\"></i></a>
              </div>

              <ul class=\"nav navbar-nav navbar-right\">
                <li class=\"\">
                  <a href=\"javascript:;\" class=\"user-profile dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <img src=\"";
        // line 224
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/images/img.jpg"), "html", null, true);
        echo "\" alt=\"\">John Doe
                    <span class=\" fa fa-angle-down\"></span>
                  </a>
                  <ul class=\"dropdown-menu dropdown-usermenu pull-right\">
                    <li><a href=\"javascript:;\">  Profile</a>
                    </li>
                    <li>
                      <a href=\"javascript:;\">
                        <span class=\"badge bg-red pull-right\">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li>
                      <a href=\"javascript:;\">Help</a>
                    </li>
                    <li><a href=\"login.html\"><i class=\"fa fa-sign-out pull-right\"></i> Log Out</a>
                    </li>
                  </ul>
                </li>

                <li role=\"presentation\" class=\"dropdown\">
                  <a href=\"javascript:;\" class=\"dropdown-toggle info-number\" data-toggle=\"dropdown\" aria-expanded=\"false\">
                    <i class=\"fa fa-envelope-o\"></i>
                    <span class=\"badge bg-green\">6</span>
                  </a>
                  <ul id=\"menu1\" class=\"dropdown-menu list-unstyled msg_list\" role=\"menu\">
                    <li>
                      <a>
                        <span class=\"image\">
                                          <img src=\"";
        // line 253
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" />
                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\">
                                          <img src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" />
                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\">
                                          <img src=\"";
        // line 281
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" />
                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class=\"image\">
                                          <img src=\"";
        // line 295
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/images/img.jpg"), "html", null, true);
        echo "\" alt=\"Profile Image\" />
                                      </span>
                        <span>
                                          <span>John Smith</span>
                        <span class=\"time\">3 mins ago</span>
                        </span>
                        <span class=\"message\">
                                          Film festivals used to be do-or-die moments for movie makers. They were where...
                                      </span>
                      </a>
                    </li>
                    <li>
                      <div class=\"text-center\">
                        <a href=\"inbox.html\">
                          <strong>See All Alerts</strong>
                          <i class=\"fa fa-angle-right\"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->


        <!-- page content -->
        <div class=\"right_col\" role=\"main\">
            ";
        // line 327
        $this->displayBlock('body', $context, $blocks);
        // line 329
        echo "        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class=\"pull-right\">
            Gentelella - Bootstrap Admin Template by <a href=\"https://colorlib.com\">Colorlib</a>
          </div>
          <div class=\"clearfix\"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src=\"";
        // line 344
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/jquery/dist/jquery.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Bootstrap -->
    <script src=\"";
        // line 346
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/bootstrap/dist/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <!-- FastClick -->
    <script src=\"";
        // line 348
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/fastclick/lib/fastclick.js"), "html", null, true);
        echo "\"></script>
    <!-- NProgress -->
    <script src=\"";
        // line 350
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/nprogress/nprogress.js"), "html", null, true);
        echo "\"></script>
    <!-- Chart.js -->
    <script src=\"";
        // line 352
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/Chart.js/dist/Chart.min.js"), "html", null, true);
        echo "\"></script>
    <!-- gauge.js -->
    <script src=\"";
        // line 354
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/bernii/gauge.js/dist/gauge.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-progressbar -->
    <script src=\"";
        // line 356
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"), "html", null, true);
        echo "\"></script>
    <!-- iCheck -->
    <script src=\"";
        // line 358
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/iCheck/icheck.min.js"), "html", null, true);
        echo "\"></script>
    <!-- Skycons -->
    <script src=\"";
        // line 360
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/skycons/skycons.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot -->
    <script src=\"";
        // line 362
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/Flot/jquery.flot.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/Flot/jquery.flot.pie.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 364
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/Flot/jquery.flot.time.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 365
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/Flot/jquery.flot.stack.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 366
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/vendors/Flot/jquery.flot.resize.js"), "html", null, true);
        echo "\"></script>
    <!-- Flot plugins -->
    <script src=\"";
        // line 368
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/js/flot/jquery.flot.orderBars.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 369
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/js/flot/date.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 370
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/js/flot/jquery.flot.spline.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 371
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/js/flot/curvedLines.js"), "html", null, true);
        echo "\"></script>
    <!-- jVectorMap -->
    <script src=\"";
        // line 373
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/js/maps/jquery-jvectormap-2.0.3.min.js"), "html", null, true);
        echo "\"></script>
    <!-- bootstrap-daterangepicker -->
    <script src=\"";
        // line 375
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/js/moment/moment.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 376
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/js/datepicker/daterangepicker.js"), "html", null, true);
        echo "\"></script>

    <!-- Custom Theme Scripts -->
    <script src=\"";
        // line 379
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/js/custom.js"), "html", null, true);
        echo "\"></script>

    <!-- Flot -->
    <script>
      \$(document).ready(function() {
        var data1 = [
          [gd(2012, 1, 1), 17],
          [gd(2012, 1, 2), 74],
          [gd(2012, 1, 3), 6],
          [gd(2012, 1, 4), 39],
          [gd(2012, 1, 5), 20],
          [gd(2012, 1, 6), 85],
          [gd(2012, 1, 7), 7]
        ];

        var data2 = [
          [gd(2012, 1, 1), 82],
          [gd(2012, 1, 2), 23],
          [gd(2012, 1, 3), 66],
          [gd(2012, 1, 4), 9],
          [gd(2012, 1, 5), 119],
          [gd(2012, 1, 6), 6],
          [gd(2012, 1, 7), 9]
        ];
        \$(\"#canvas_dahs\").length && \$.plot(\$(\"#canvas_dahs\"), [
          data1, data2
        ], {
          series: {
            lines: {
              show: false,
              fill: true
            },
            splines: {
              show: true,
              tension: 0.4,
              lineWidth: 1,
              fill: 0.4
            },
            points: {
              radius: 0,
              show: true
            },
            shadowSize: 2
          },
          grid: {
            verticalLines: true,
            hoverable: true,
            clickable: true,
            tickColor: \"#d5d5d5\",
            borderWidth: 1,
            color: '#fff'
          },
          colors: [\"rgba(38, 185, 154, 0.38)\", \"rgba(3, 88, 106, 0.38)\"],
          xaxis: {
            tickColor: \"rgba(51, 51, 51, 0.06)\",
            mode: \"time\",
            tickSize: [1, \"day\"],
            //tickLength: 10,
            axisLabel: \"Date\",
            axisLabelUseCanvas: true,
            axisLabelFontSizePixels: 12,
            axisLabelFontFamily: 'Verdana, Arial',
            axisLabelPadding: 10
          },
          yaxis: {
            ticks: 8,
            tickColor: \"rgba(51, 51, 51, 0.06)\",
          },
          tooltip: false
        });

        function gd(year, month, day) {
          return new Date(year, month - 1, day).getTime();
        }
      });
    </script>
    <!-- /Flot -->

    <!-- jVectorMap -->
    <script src=\"";
        // line 458
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/js/maps/jquery-jvectormap-world-mill-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 459
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/js/maps/jquery-jvectormap-us-aea-en.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 460
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/admin/js/maps/gdp-data.js"), "html", null, true);
        echo "\"></script>
   
  </body>
</html>";
        
        $__internal_6890ea2f78346374e5fc9813d37ce86afe650ab02f20410341602d2d30dc4aae->leave($__internal_6890ea2f78346374e5fc9813d37ce86afe650ab02f20410341602d2d30dc4aae_prof);

    }

    // line 327
    public function block_body($context, array $blocks = array())
    {
        $__internal_fdbcab76d4b8a396c38f26be4d2ac2552659188ce6b21267ab459c555bd30bd1 = $this->env->getExtension("native_profiler");
        $__internal_fdbcab76d4b8a396c38f26be4d2ac2552659188ce6b21267ab459c555bd30bd1->enter($__internal_fdbcab76d4b8a396c38f26be4d2ac2552659188ce6b21267ab459c555bd30bd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 328
        echo "            ";
        
        $__internal_fdbcab76d4b8a396c38f26be4d2ac2552659188ce6b21267ab459c555bd30bd1->leave($__internal_fdbcab76d4b8a396c38f26be4d2ac2552659188ce6b21267ab459c555bd30bd1_prof);

    }

    public function getTemplateName()
    {
        return "CoreThemeBundle:admin:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  611 => 328,  605 => 327,  594 => 460,  590 => 459,  586 => 458,  504 => 379,  498 => 376,  494 => 375,  489 => 373,  484 => 371,  480 => 370,  476 => 369,  472 => 368,  467 => 366,  463 => 365,  459 => 364,  455 => 363,  451 => 362,  446 => 360,  441 => 358,  436 => 356,  431 => 354,  426 => 352,  421 => 350,  416 => 348,  411 => 346,  406 => 344,  389 => 329,  387 => 327,  352 => 295,  335 => 281,  318 => 267,  301 => 253,  269 => 224,  83 => 41,  63 => 24,  57 => 21,  52 => 19,  47 => 17,  42 => 15,  37 => 13,  23 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">*/
/*     <!-- Meta, title, CSS, favicons, etc. -->*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/* */
/*     <title>Gentallela Alela! | </title>*/
/* */
/*     <!-- Bootstrap -->*/
/*     <link href="{{ asset('bundles/coretheme/admin/vendors/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">*/
/*     <!-- Font Awesome -->*/
/*     <link href="{{ asset('bundles/coretheme/admin/vendors/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">*/
/*     <!-- iCheck -->*/
/*     <link href="{{ asset('bundles/coretheme/admin/vendors/iCheck/skins/flat/green.css') }}" rel="stylesheet">*/
/*     <!-- bootstrap-progressbar -->*/
/*     <link href="{{ asset('bundles/coretheme/admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css') }}" rel="stylesheet">*/
/*     <!-- jVectorMap -->*/
/*     <link href="{{ asset('bundles/coretheme/admin/css/maps/jquery-jvectormap-2.0.3.css') }}" rel="stylesheet"/>*/
/* */
/*     <!-- Custom Theme Style -->*/
/*     <link href="{{ asset('bundles/coretheme/admin/css/custom.css') }}" rel="stylesheet">*/
/*   </head>*/
/* */
/*   <body class="nav-md">*/
/*     <div class="container body">*/
/*       <div class="main_container">*/
/*         <div class="col-md-3 left_col">*/
/*           <div class="left_col scroll-view">*/
/*             <div class="navbar nav_title" style="border: 0;">*/
/*               <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>*/
/*             </div>*/
/* */
/*             <div class="clearfix"></div>*/
/* */
/*             <!-- menu profile quick info -->*/
/*             <div class="profile">*/
/*               <div class="profile_pic">*/
/*                 <img src="{{ asset('bundles/coretheme/admin/images/img.jpg') }}" alt="..." class="img-circle profile_img">*/
/*               </div>*/
/*               <div class="profile_info">*/
/*                 <span>Welcome,</span>*/
/*                 <h2>John Doe</h2>*/
/*               </div>*/
/*             </div>*/
/*             <!-- /menu profile quick info -->*/
/* */
/*             <br />*/
/* */
/*             <!-- sidebar menu -->*/
/*             <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">*/
/*               <div class="menu_section">*/
/*                 <h3>General</h3>*/
/*                 <ul class="nav side-menu">*/
/*                   <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="index.html">Dashboard</a>*/
/*                       </li>*/
/*                       <li><a href="index2.html">Dashboard2</a>*/
/*                       </li>*/
/*                       <li><a href="index3.html">Dashboard3</a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="form.html">General Form</a>*/
/*                       </li>*/
/*                       <li><a href="form_advanced.html">Advanced Components</a>*/
/*                       </li>*/
/*                       <li><a href="form_validation.html">Form Validation</a>*/
/*                       </li>*/
/*                       <li><a href="form_wizards.html">Form Wizard</a>*/
/*                       </li>*/
/*                       <li><a href="form_upload.html">Form Upload</a>*/
/*                       </li>*/
/*                       <li><a href="form_buttons.html">Form Buttons</a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="general_elements.html">General Elements</a>*/
/*                       </li>*/
/*                       <li><a href="media_gallery.html">Media Gallery</a>*/
/*                       </li>*/
/*                       <li><a href="typography.html">Typography</a>*/
/*                       </li>*/
/*                       <li><a href="icons.html">Icons</a>*/
/*                       </li>*/
/*                       <li><a href="glyphicons.html">Glyphicons</a>*/
/*                       </li>*/
/*                       <li><a href="widgets.html">Widgets</a>*/
/*                       </li>*/
/*                       <li><a href="invoice.html">Invoice</a>*/
/*                       </li>*/
/*                       <li><a href="inbox.html">Inbox</a>*/
/*                       </li>*/
/*                       <li><a href="calendar.html">Calendar</a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="tables.html">Tables</a>*/
/*                       </li>*/
/*                       <li><a href="tables_dynamic.html">Table Dynamic</a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="chartjs.html">Chart JS</a>*/
/*                       </li>*/
/*                       <li><a href="chartjs2.html">Chart JS2</a>*/
/*                       </li>*/
/*                       <li><a href="morisjs.html">Moris JS</a>*/
/*                       </li>*/
/*                       <li><a href="echarts.html">ECharts </a>*/
/*                       </li>*/
/*                       <li><a href="other_charts.html">Other Charts </a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-clone"></i>Layouts <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="fixed_sidebar.html">Fixed Sidebar</a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                 </ul>*/
/*               </div>*/
/*               <div class="menu_section">*/
/*                 <h3>Live On</h3>*/
/*                 <ul class="nav side-menu">*/
/*                   <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="e_commerce.html">E-commerce</a>*/
/*                       </li>*/
/*                       <li><a href="projects.html">Projects</a>*/
/*                       </li>*/
/*                       <li><a href="project_detail.html">Project Detail</a>*/
/*                       </li>*/
/*                       <li><a href="contacts.html">Contacts</a>*/
/*                       </li>*/
/*                       <li><a href="profile.html">Profile</a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                       <li><a href="page_403.html">403 Error</a>*/
/*                       </li>*/
/*                       <li><a href="page_404.html">404 Error</a>*/
/*                       </li>*/
/*                       <li><a href="page_500.html">500 Error</a>*/
/*                       </li>*/
/*                       <li><a href="plain_page.html">Plain Page</a>*/
/*                       </li>*/
/*                       <li><a href="login.html">Login Page</a>*/
/*                       </li>*/
/*                       <li><a href="pricing_tables.html">Pricing Tables</a>*/
/*                       </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>*/
/*                     <ul class="nav child_menu">*/
/*                         <li><a href="#level1_1">Level One</a>*/
/*                         <li><a>Level One<span class="fa fa-chevron-down"></span></a>*/
/*                           <ul class="nav child_menu">*/
/*                             <li class="sub_menu"><a href="level2.html">Level Two</a>*/
/*                             </li>*/
/*                             <li><a href="#level2_1">Level Two</a>*/
/*                             </li>*/
/*                             <li><a href="#level2_2">Level Two</a>*/
/*                             </li>*/
/*                           </ul>*/
/*                         </li>*/
/*                         <li><a href="#level1_2">Level One</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                   </li>*/
/*                   <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>*/
/*                   </li>*/
/*                 </ul>*/
/*               </div>*/
/* */
/*             </div>*/
/*             <!-- /sidebar menu -->*/
/* */
/*             <!-- /menu footer buttons -->*/
/*             <div class="sidebar-footer hidden-small">*/
/*               <a data-toggle="tooltip" data-placement="top" title="Settings">*/
/*                 <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>*/
/*               </a>*/
/*               <a data-toggle="tooltip" data-placement="top" title="FullScreen">*/
/*                 <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>*/
/*               </a>*/
/*               <a data-toggle="tooltip" data-placement="top" title="Lock">*/
/*                 <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>*/
/*               </a>*/
/*               <a data-toggle="tooltip" data-placement="top" title="Logout">*/
/*                 <span class="glyphicon glyphicon-off" aria-hidden="true"></span>*/
/*               </a>*/
/*             </div>*/
/*             <!-- /menu footer buttons -->*/
/*           </div>*/
/*         </div>*/
/* */
/*         <!-- top navigation -->*/
/*         <div class="top_nav">*/
/* */
/*           <div class="nav_menu">*/
/*             <nav class="" role="navigation">*/
/*               <div class="nav toggle">*/
/*                 <a id="menu_toggle"><i class="fa fa-bars"></i></a>*/
/*               </div>*/
/* */
/*               <ul class="nav navbar-nav navbar-right">*/
/*                 <li class="">*/
/*                   <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">*/
/*                     <img src="{{ asset('bundles/coretheme/admin/images/img.jpg') }}" alt="">John Doe*/
/*                     <span class=" fa fa-angle-down"></span>*/
/*                   </a>*/
/*                   <ul class="dropdown-menu dropdown-usermenu pull-right">*/
/*                     <li><a href="javascript:;">  Profile</a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a href="javascript:;">*/
/*                         <span class="badge bg-red pull-right">50%</span>*/
/*                         <span>Settings</span>*/
/*                       </a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a href="javascript:;">Help</a>*/
/*                     </li>*/
/*                     <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/* */
/*                 <li role="presentation" class="dropdown">*/
/*                   <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">*/
/*                     <i class="fa fa-envelope-o"></i>*/
/*                     <span class="badge bg-green">6</span>*/
/*                   </a>*/
/*                   <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">*/
/*                     <li>*/
/*                       <a>*/
/*                         <span class="image">*/
/*                                           <img src="{{ asset('bundles/coretheme/admin/images/img.jpg') }}" alt="Profile Image" />*/
/*                                       </span>*/
/*                         <span>*/
/*                                           <span>John Smith</span>*/
/*                         <span class="time">3 mins ago</span>*/
/*                         </span>*/
/*                         <span class="message">*/
/*                                           Film festivals used to be do-or-die moments for movie makers. They were where...*/
/*                                       </span>*/
/*                       </a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a>*/
/*                         <span class="image">*/
/*                                           <img src="{{ asset('bundles/coretheme/admin/images/img.jpg') }}" alt="Profile Image" />*/
/*                                       </span>*/
/*                         <span>*/
/*                                           <span>John Smith</span>*/
/*                         <span class="time">3 mins ago</span>*/
/*                         </span>*/
/*                         <span class="message">*/
/*                                           Film festivals used to be do-or-die moments for movie makers. They were where...*/
/*                                       </span>*/
/*                       </a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a>*/
/*                         <span class="image">*/
/*                                           <img src="{{ asset('bundles/coretheme/admin/images/img.jpg') }}" alt="Profile Image" />*/
/*                                       </span>*/
/*                         <span>*/
/*                                           <span>John Smith</span>*/
/*                         <span class="time">3 mins ago</span>*/
/*                         </span>*/
/*                         <span class="message">*/
/*                                           Film festivals used to be do-or-die moments for movie makers. They were where...*/
/*                                       </span>*/
/*                       </a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <a>*/
/*                         <span class="image">*/
/*                                           <img src="{{ asset('bundles/coretheme/admin/images/img.jpg') }}" alt="Profile Image" />*/
/*                                       </span>*/
/*                         <span>*/
/*                                           <span>John Smith</span>*/
/*                         <span class="time">3 mins ago</span>*/
/*                         </span>*/
/*                         <span class="message">*/
/*                                           Film festivals used to be do-or-die moments for movie makers. They were where...*/
/*                                       </span>*/
/*                       </a>*/
/*                     </li>*/
/*                     <li>*/
/*                       <div class="text-center">*/
/*                         <a href="inbox.html">*/
/*                           <strong>See All Alerts</strong>*/
/*                           <i class="fa fa-angle-right"></i>*/
/*                         </a>*/
/*                       </div>*/
/*                     </li>*/
/*                   </ul>*/
/*                 </li>*/
/* */
/*               </ul>*/
/*             </nav>*/
/*           </div>*/
/* */
/*         </div>*/
/*         <!-- /top navigation -->*/
/* */
/* */
/*         <!-- page content -->*/
/*         <div class="right_col" role="main">*/
/*             {% block body %}*/
/*             {% endblock %}*/
/*         </div>*/
/*         <!-- /page content -->*/
/* */
/*         <!-- footer content -->*/
/*         <footer>*/
/*           <div class="pull-right">*/
/*             Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>*/
/*           </div>*/
/*           <div class="clearfix"></div>*/
/*         </footer>*/
/*         <!-- /footer content -->*/
/*       </div>*/
/*     </div>*/
/* */
/*     <!-- jQuery -->*/
/*     <script src="{{ asset('bundles/coretheme/admin/vendors/jquery/dist/jquery.min.js') }}"></script>*/
/*     <!-- Bootstrap -->*/
/*     <script src="{{ asset('bundles/coretheme/admin/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>*/
/*     <!-- FastClick -->*/
/*     <script src="{{ asset('bundles/coretheme/admin/vendors/fastclick/lib/fastclick.js') }}"></script>*/
/*     <!-- NProgress -->*/
/*     <script src="{{ asset('bundles/coretheme/admin/vendors/nprogress/nprogress.js') }}"></script>*/
/*     <!-- Chart.js -->*/
/*     <script src="{{ asset('bundles/coretheme/admin/vendors/Chart.js/dist/Chart.min.js') }}"></script>*/
/*     <!-- gauge.js -->*/
/*     <script src="{{ asset('bundles/coretheme/admin/vendors/bernii/gauge.js/dist/gauge.min.js') }}"></script>*/
/*     <!-- bootstrap-progressbar -->*/
/*     <script src="{{ asset('bundles/coretheme/admin/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js') }}"></script>*/
/*     <!-- iCheck -->*/
/*     <script src="{{ asset('bundles/coretheme/admin/vendors/iCheck/icheck.min.js') }}"></script>*/
/*     <!-- Skycons -->*/
/*     <script src="{{ asset('bundles/coretheme/admin/vendors/skycons/skycons.js') }}"></script>*/
/*     <!-- Flot -->*/
/*     <script src="{{ asset('bundles/coretheme/admin/vendors/Flot/jquery.flot.js') }}"></script>*/
/*     <script src="{{ asset('bundles/coretheme/admin/vendors/Flot/jquery.flot.pie.js') }}"></script>*/
/*     <script src="{{ asset('bundles/coretheme/admin/vendors/Flot/jquery.flot.time.js') }}"></script>*/
/*     <script src="{{ asset('bundles/coretheme/admin/vendors/Flot/jquery.flot.stack.js') }}"></script>*/
/*     <script src="{{ asset('bundles/coretheme/admin/vendors/Flot/jquery.flot.resize.js') }}"></script>*/
/*     <!-- Flot plugins -->*/
/*     <script src="{{ asset('bundles/coretheme/admin/js/flot/jquery.flot.orderBars.js') }}"></script>*/
/*     <script src="{{ asset('bundles/coretheme/admin/js/flot/date.js') }}"></script>*/
/*     <script src="{{ asset('bundles/coretheme/admin/js/flot/jquery.flot.spline.js') }}"></script>*/
/*     <script src="{{ asset('bundles/coretheme/admin/js/flot/curvedLines.js') }}"></script>*/
/*     <!-- jVectorMap -->*/
/*     <script src="{{ asset('bundles/coretheme/admin/js/maps/jquery-jvectormap-2.0.3.min.js') }}"></script>*/
/*     <!-- bootstrap-daterangepicker -->*/
/*     <script src="{{ asset('bundles/coretheme/admin/js/moment/moment.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/coretheme/admin/js/datepicker/daterangepicker.js') }}"></script>*/
/* */
/*     <!-- Custom Theme Scripts -->*/
/*     <script src="{{ asset('bundles/coretheme/admin/js/custom.js') }}"></script>*/
/* */
/*     <!-- Flot -->*/
/*     <script>*/
/*       $(document).ready(function() {*/
/*         var data1 = [*/
/*           [gd(2012, 1, 1), 17],*/
/*           [gd(2012, 1, 2), 74],*/
/*           [gd(2012, 1, 3), 6],*/
/*           [gd(2012, 1, 4), 39],*/
/*           [gd(2012, 1, 5), 20],*/
/*           [gd(2012, 1, 6), 85],*/
/*           [gd(2012, 1, 7), 7]*/
/*         ];*/
/* */
/*         var data2 = [*/
/*           [gd(2012, 1, 1), 82],*/
/*           [gd(2012, 1, 2), 23],*/
/*           [gd(2012, 1, 3), 66],*/
/*           [gd(2012, 1, 4), 9],*/
/*           [gd(2012, 1, 5), 119],*/
/*           [gd(2012, 1, 6), 6],*/
/*           [gd(2012, 1, 7), 9]*/
/*         ];*/
/*         $("#canvas_dahs").length && $.plot($("#canvas_dahs"), [*/
/*           data1, data2*/
/*         ], {*/
/*           series: {*/
/*             lines: {*/
/*               show: false,*/
/*               fill: true*/
/*             },*/
/*             splines: {*/
/*               show: true,*/
/*               tension: 0.4,*/
/*               lineWidth: 1,*/
/*               fill: 0.4*/
/*             },*/
/*             points: {*/
/*               radius: 0,*/
/*               show: true*/
/*             },*/
/*             shadowSize: 2*/
/*           },*/
/*           grid: {*/
/*             verticalLines: true,*/
/*             hoverable: true,*/
/*             clickable: true,*/
/*             tickColor: "#d5d5d5",*/
/*             borderWidth: 1,*/
/*             color: '#fff'*/
/*           },*/
/*           colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],*/
/*           xaxis: {*/
/*             tickColor: "rgba(51, 51, 51, 0.06)",*/
/*             mode: "time",*/
/*             tickSize: [1, "day"],*/
/*             //tickLength: 10,*/
/*             axisLabel: "Date",*/
/*             axisLabelUseCanvas: true,*/
/*             axisLabelFontSizePixels: 12,*/
/*             axisLabelFontFamily: 'Verdana, Arial',*/
/*             axisLabelPadding: 10*/
/*           },*/
/*           yaxis: {*/
/*             ticks: 8,*/
/*             tickColor: "rgba(51, 51, 51, 0.06)",*/
/*           },*/
/*           tooltip: false*/
/*         });*/
/* */
/*         function gd(year, month, day) {*/
/*           return new Date(year, month - 1, day).getTime();*/
/*         }*/
/*       });*/
/*     </script>*/
/*     <!-- /Flot -->*/
/* */
/*     <!-- jVectorMap -->*/
/*     <script src="{{ asset('bundles/coretheme/admin/js/maps/jquery-jvectormap-world-mill-en.js') }}"></script>*/
/*     <script src="{{ asset('bundles/coretheme/admin/js/maps/jquery-jvectormap-us-aea-en.js') }}"></script>*/
/*     <script src="{{ asset('bundles/coretheme/admin/js/maps/gdp-data.js') }}"></script>*/
/*    */
/*   </body>*/
/* </html>*/

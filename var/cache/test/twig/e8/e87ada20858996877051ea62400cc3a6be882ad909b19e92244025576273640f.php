<?php

/* CoreThemeBundle:ustora:layout.html.twig */
class __TwigTemplate_adbe9f03b7420daf96ecac71d62e0c9bfae4f19ce6af5096e4bc9ee13a533414 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_caef8b557bdb3adb6fef8fbe6b7f1430155cf2cabebd3636796c40a5a88c8833 = $this->env->getExtension("native_profiler");
        $__internal_caef8b557bdb3adb6fef8fbe6b7f1430155cf2cabebd3636796c40a5a88c8833->enter($__internal_caef8b557bdb3adb6fef8fbe6b7f1430155cf2cabebd3636796c40a5a88c8833_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreThemeBundle:ustora:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
  <head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
    <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel=\"stylesheet\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/css/bootstrap.min.css"), "html", null, true);
        echo "\">
    
    <!-- Font Awesome -->
    <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/css/font-awesome.min.css"), "html", null, true);
        echo "\">
    
    <!-- Custom CSS -->
    <link rel=\"stylesheet\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/css/owl.carousel.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/css/style.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/css/responsive.css"), "html", null, true);
        echo "\">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src=\"https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js\"></script>
      <script src=\"https://oss.maxcdn.com/respond/1.4.2/respond.min.js\"></script>
    <![endif]-->
  </head>
  <body>
    <!-- include header (includes/header.html.twig) -->
    ";
        // line 34
        $this->loadTemplate("@CoreTheme/ustora/includes/header.html.twig", "CoreThemeBundle:ustora:layout.html.twig", 34)->display($context);
        // line 35
        echo "    <!-- end include -->
    <!-- include branding site (includes/branding.html.twig) -->
    ";
        // line 37
        $this->loadTemplate("@CoreTheme/ustora/includes/branding.html.twig", "CoreThemeBundle:ustora:layout.html.twig", 37)->display($context);
        // line 38
        echo "    <!-- end include -->
    
    <!-- include main menu (includes/menu.html.twig) -->
    ";
        // line 41
        $this->loadTemplate("@CoreTheme/ustora/includes/menu.html.twig", "CoreThemeBundle:ustora:layout.html.twig", 41)->display($context);
        // line 42
        echo "    <!-- end include -->
    ";
        // line 43
        $this->displayBlock('content', $context, $blocks);
        // line 45
        echo "    <!-- include (includes/brand.html.twig)-->
    ";
        // line 46
        $this->loadTemplate("@CoreTheme/ustora/includes/brand.html.twig", "CoreThemeBundle:ustora:layout.html.twig", 46)->display($context);
        // line 47
        echo "    <!-- end include -->
    
    <!-- include (includes/widget.html.twig)-->
    ";
        // line 50
        $this->loadTemplate("@CoreTheme/ustora/includes/widget.html.twig", "CoreThemeBundle:ustora:layout.html.twig", 50)->display($context);
        // line 51
        echo "    <!-- end include -->
    
    <div class=\"footer-top-area\">
        <div class=\"zigzag-bottom\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"footer-about-us\">
                        <h2>u<span>Stora</span></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>
                        <div class=\"footer-social\">
                            <a href=\"#\" target=\"_blank\"><i class=\"fa fa-facebook\"></i></a>
                            <a href=\"#\" target=\"_blank\"><i class=\"fa fa-twitter\"></i></a>
                            <a href=\"#\" target=\"_blank\"><i class=\"fa fa-youtube\"></i></a>
                            <a href=\"#\" target=\"_blank\"><i class=\"fa fa-linkedin\"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"footer-menu\">
                        <h2 class=\"footer-wid-title\">User Navigation </h2>
                        <ul>
                            <li><a href=\"#\">My account</a></li>
                            <li><a href=\"#\">Order history</a></li>
                            <li><a href=\"#\">Wishlist</a></li>
                            <li><a href=\"#\">Vendor contact</a></li>
                            <li><a href=\"#\">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"footer-menu\">
                        <h2 class=\"footer-wid-title\">Categories</h2>
                        <ul>
                            <li><a href=\"#\">Mobile Phone</a></li>
                            <li><a href=\"#\">Home accesseries</a></li>
                            <li><a href=\"#\">LED TV</a></li>
                            <li><a href=\"#\">Computer</a></li>
                            <li><a href=\"#\">Gadets</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class=\"col-md-3 col-sm-6\">
                    <div class=\"footer-newsletter\">
                        <h2 class=\"footer-wid-title\">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class=\"newsletter-form\">
                            <form action=\"#\">
                                <input type=\"email\" placeholder=\"Type your email\">
                                <input type=\"submit\" value=\"Subscribe\">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class=\"footer-bottom-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-8\">
                    <div class=\"copyright\">
                        <p>&copy; 2015 uCommerce. All Rights Reserved. <a href=\"http://www.freshdesignweb.com\" target=\"_blank\">freshDesignweb.com</a></p>
                    </div>
                </div>
                
                <div class=\"col-md-4\">
                    <div class=\"footer-card-icon\">
                        <i class=\"fa fa-cc-discover\"></i>
                        <i class=\"fa fa-cc-mastercard\"></i>
                        <i class=\"fa fa-cc-paypal\"></i>
                        <i class=\"fa fa-cc-visa\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src=\"https://code.jquery.com/jquery.min.js\"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src=\"http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
    
    <!-- jQuery sticky menu -->
    <script src=\"";
        // line 140
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/js/owl.carousel.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 141
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/js/jquery.sticky.js"), "html", null, true);
        echo "\"></script>
    
    <!-- jQuery easing -->
    <script src=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/js/jquery.easing.1.3.min.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Main Script -->
    <script src=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/js/main.js"), "html", null, true);
        echo "\"></script>
    
    <!-- Slider -->
    <script type=\"text/javascript\" src=\"";
        // line 150
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/js/bxslider.min.js"), "html", null, true);
        echo "\"></script>
\t<script type=\"text/javascript\" src=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/js/script.slider.js"), "html", null, true);
        echo "\"></script>
  </body>
</html>";
        
        $__internal_caef8b557bdb3adb6fef8fbe6b7f1430155cf2cabebd3636796c40a5a88c8833->leave($__internal_caef8b557bdb3adb6fef8fbe6b7f1430155cf2cabebd3636796c40a5a88c8833_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9283e8c18556d811ffc4aae3698c3e5895294877c9a5d02f78d7a0005fc87f0d = $this->env->getExtension("native_profiler");
        $__internal_9283e8c18556d811ffc4aae3698c3e5895294877c9a5d02f78d7a0005fc87f0d->enter($__internal_9283e8c18556d811ffc4aae3698c3e5895294877c9a5d02f78d7a0005fc87f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Home ";
        
        $__internal_9283e8c18556d811ffc4aae3698c3e5895294877c9a5d02f78d7a0005fc87f0d->leave($__internal_9283e8c18556d811ffc4aae3698c3e5895294877c9a5d02f78d7a0005fc87f0d_prof);

    }

    // line 43
    public function block_content($context, array $blocks = array())
    {
        $__internal_cae25b0e64b0149e20dafe3a2703f611c7d7f297b1f60e7286fd6d99eb510d99 = $this->env->getExtension("native_profiler");
        $__internal_cae25b0e64b0149e20dafe3a2703f611c7d7f297b1f60e7286fd6d99eb510d99->enter($__internal_cae25b0e64b0149e20dafe3a2703f611c7d7f297b1f60e7286fd6d99eb510d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 44
        echo "    ";
        
        $__internal_cae25b0e64b0149e20dafe3a2703f611c7d7f297b1f60e7286fd6d99eb510d99->leave($__internal_cae25b0e64b0149e20dafe3a2703f611c7d7f297b1f60e7286fd6d99eb510d99_prof);

    }

    public function getTemplateName()
    {
        return "CoreThemeBundle:ustora:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 44,  248 => 43,  236 => 7,  226 => 151,  222 => 150,  216 => 147,  210 => 144,  204 => 141,  200 => 140,  109 => 51,  107 => 50,  102 => 47,  100 => 46,  97 => 45,  95 => 43,  92 => 42,  90 => 41,  85 => 38,  83 => 37,  79 => 35,  77 => 34,  63 => 23,  59 => 22,  55 => 21,  49 => 18,  43 => 15,  32 => 7,  24 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html lang="en">*/
/*   <head>*/
/*     <meta charset="utf-8">*/
/*     <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/*     <meta name="viewport" content="width=device-width, initial-scale=1">*/
/*     <title>{% block title %} Home {% endblock %}</title>*/
/*     */
/*     <!-- Google Fonts -->*/
/*     <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>*/
/*     <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>*/
/*     */
/*     <!-- Bootstrap -->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/coretheme/css/bootstrap.min.css') }}">*/
/*     */
/*     <!-- Font Awesome -->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/coretheme/css/font-awesome.min.css') }}">*/
/*     */
/*     <!-- Custom CSS -->*/
/*     <link rel="stylesheet" href="{{ asset('bundles/coretheme/css/owl.carousel.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/coretheme/css/style.css') }}">*/
/*     <link rel="stylesheet" href="{{ asset('bundles/coretheme/css/responsive.css') }}">*/
/* */
/*     <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->*/
/*     <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->*/
/*     <!--[if lt IE 9]>*/
/*       <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>*/
/*       <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>*/
/*     <![endif]-->*/
/*   </head>*/
/*   <body>*/
/*     <!-- include header (includes/header.html.twig) -->*/
/*     {% include "@CoreTheme/ustora/includes/header.html.twig" %}*/
/*     <!-- end include -->*/
/*     <!-- include branding site (includes/branding.html.twig) -->*/
/*     {% include "@CoreTheme/ustora/includes/branding.html.twig" %}*/
/*     <!-- end include -->*/
/*     */
/*     <!-- include main menu (includes/menu.html.twig) -->*/
/*     {% include "@CoreTheme/ustora/includes/menu.html.twig" %}*/
/*     <!-- end include -->*/
/*     {% block content %}*/
/*     {% endblock %}*/
/*     <!-- include (includes/brand.html.twig)-->*/
/*     {% include  "@CoreTheme/ustora/includes/brand.html.twig" %}*/
/*     <!-- end include -->*/
/*     */
/*     <!-- include (includes/widget.html.twig)-->*/
/*     {% include "@CoreTheme/ustora/includes/widget.html.twig" %}*/
/*     <!-- end include -->*/
/*     */
/*     <div class="footer-top-area">*/
/*         <div class="zigzag-bottom"></div>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="footer-about-us">*/
/*                         <h2>u<span>Stora</span></h2>*/
/*                         <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sunt id doloribus vero quam laborum quas alias dolores blanditiis iusto consequatur, modi aliquid eveniet eligendi iure eaque ipsam iste, pariatur omnis sint! Suscipit, debitis, quisquam. Laborum commodi veritatis magni at?</p>*/
/*                         <div class="footer-social">*/
/*                             <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>*/
/*                             <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>*/
/*                             <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>*/
/*                             <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="footer-menu">*/
/*                         <h2 class="footer-wid-title">User Navigation </h2>*/
/*                         <ul>*/
/*                             <li><a href="#">My account</a></li>*/
/*                             <li><a href="#">Order history</a></li>*/
/*                             <li><a href="#">Wishlist</a></li>*/
/*                             <li><a href="#">Vendor contact</a></li>*/
/*                             <li><a href="#">Front page</a></li>*/
/*                         </ul>                        */
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="footer-menu">*/
/*                         <h2 class="footer-wid-title">Categories</h2>*/
/*                         <ul>*/
/*                             <li><a href="#">Mobile Phone</a></li>*/
/*                             <li><a href="#">Home accesseries</a></li>*/
/*                             <li><a href="#">LED TV</a></li>*/
/*                             <li><a href="#">Computer</a></li>*/
/*                             <li><a href="#">Gadets</a></li>*/
/*                         </ul>                        */
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="col-md-3 col-sm-6">*/
/*                     <div class="footer-newsletter">*/
/*                         <h2 class="footer-wid-title">Newsletter</h2>*/
/*                         <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>*/
/*                         <div class="newsletter-form">*/
/*                             <form action="#">*/
/*                                 <input type="email" placeholder="Type your email">*/
/*                                 <input type="submit" value="Subscribe">*/
/*                             </form>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> <!-- End footer top area -->*/
/*     */
/*     <div class="footer-bottom-area">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-8">*/
/*                     <div class="copyright">*/
/*                         <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="col-md-4">*/
/*                     <div class="footer-card-icon">*/
/*                         <i class="fa fa-cc-discover"></i>*/
/*                         <i class="fa fa-cc-mastercard"></i>*/
/*                         <i class="fa fa-cc-paypal"></i>*/
/*                         <i class="fa fa-cc-visa"></i>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> <!-- End footer bottom area -->*/
/*    */
/*     <!-- Latest jQuery form server -->*/
/*     <script src="https://code.jquery.com/jquery.min.js"></script>*/
/*     */
/*     <!-- Bootstrap JS form CDN -->*/
/*     <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>*/
/*     */
/*     <!-- jQuery sticky menu -->*/
/*     <script src="{{ asset('bundles/coretheme/js/owl.carousel.min.js') }}"></script>*/
/*     <script src="{{ asset('bundles/coretheme/js/jquery.sticky.js') }}"></script>*/
/*     */
/*     <!-- jQuery easing -->*/
/*     <script src="{{ asset('bundles/coretheme/js/jquery.easing.1.3.min.js') }}"></script>*/
/*     */
/*     <!-- Main Script -->*/
/*     <script src="{{ asset('bundles/coretheme/js/main.js') }}"></script>*/
/*     */
/*     <!-- Slider -->*/
/*     <script type="text/javascript" src="{{ asset('bundles/coretheme/js/bxslider.min.js') }}"></script>*/
/* 	<script type="text/javascript" src="{{ asset('bundles/coretheme/js/script.slider.js') }}"></script>*/
/*   </body>*/
/* </html>*/

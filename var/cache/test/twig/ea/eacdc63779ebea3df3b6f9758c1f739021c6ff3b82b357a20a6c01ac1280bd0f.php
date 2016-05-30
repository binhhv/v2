<?php

/* AppFrontBundle:Default:index.html.twig */
class __TwigTemplate_ed0c2ad3465f45e2e5e4cc8111acf54013fa18b0df47d00d21e1324efdf08ffc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreThemeBundle:ustora:layout.html.twig", "AppFrontBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreThemeBundle:ustora:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_54bb8f88b0aecfcb2368ab28cc31daf46af7845743d1a6192227d47410588dcb = $this->env->getExtension("native_profiler");
        $__internal_54bb8f88b0aecfcb2368ab28cc31daf46af7845743d1a6192227d47410588dcb->enter($__internal_54bb8f88b0aecfcb2368ab28cc31daf46af7845743d1a6192227d47410588dcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppFrontBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_54bb8f88b0aecfcb2368ab28cc31daf46af7845743d1a6192227d47410588dcb->leave($__internal_54bb8f88b0aecfcb2368ab28cc31daf46af7845743d1a6192227d47410588dcb_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_7814289ee50670a01c02306e0c8b9fd2a05567b946289f33d9640ae4b2880b61 = $this->env->getExtension("native_profiler");
        $__internal_7814289ee50670a01c02306e0c8b9fd2a05567b946289f33d9640ae4b2880b61->enter($__internal_7814289ee50670a01c02306e0c8b9fd2a05567b946289f33d9640ae4b2880b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        echo "\t<!-- include slider (includes/slider.html.twig)-->
    
    <!-- end include -->
    ";
        // line 6
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("common_carousel_homepage"));
        echo "
    <!-- include promo area (includes/promo.html.twig)-->
    ";
        // line 8
        $this->loadTemplate("@CoreTheme/ustora/includes/promo.html.twig", "AppFrontBundle:Default:index.html.twig", 8)->display($context);
        // line 9
        echo "    <!-- end include -->
    <div class=\"maincontent-area\">
        <div class=\"zigzag-bottom\"></div>
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"latest-product\">
                        <h2 class=\"section-title\">Latest Products</h2>
                        <div class=\"product-carousel\">
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/img/product-1.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"single-product.html\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href=\"single-product.html\">Samsung Galaxy s5- 2015</a></h2>
                                
                                <div class=\"product-carousel-price\">
                                    <ins>\$700.00</ins> <del>\$100.00</del>
                                </div> 
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/img/product-2.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"single-product.html\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>Nokia Lumia 1320</h2>
                                <div class=\"product-carousel-price\">
                                    <ins>\$899.00</ins> <del>\$999.00</del>
                                </div> 
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/img/product-3.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"single-product.html\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>LG Leon 2015</h2>

                                <div class=\"product-carousel-price\">
                                    <ins>\$400.00</ins> <del>\$425.00</del>
                                </div>                                 
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/img/product-4.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"single-product.html\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href=\"single-product.html\">Sony microsoft</a></h2>

                                <div class=\"product-carousel-price\">
                                    <ins>\$200.00</ins> <del>\$225.00</del>
                                </div>                            
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/img/product-5.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"single-product.html\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2>iPhone 6</h2>

                                <div class=\"product-carousel-price\">
                                    <ins>\$1200.00</ins> <del>\$1355.00</del>
                                </div>                                 
                            </div>
                            <div class=\"single-product\">
                                <div class=\"product-f-image\">
                                    <img src=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/img/product-6.jpg"), "html", null, true);
        echo "\" alt=\"\">
                                    <div class=\"product-hover\">
                                        <a href=\"#\" class=\"add-to-cart-link\"><i class=\"fa fa-shopping-cart\"></i> Add to cart</a>
                                        <a href=\"single-product.html\" class=\"view-details-link\"><i class=\"fa fa-link\"></i> See details</a>
                                    </div>
                                </div>
                                
                                <h2><a href=\"single-product.html\">Samsung gallaxy note 4</a></h2>

                                <div class=\"product-carousel-price\">
                                    <ins>\$400.00</ins>
                                </div>                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
";
        
        $__internal_7814289ee50670a01c02306e0c8b9fd2a05567b946289f33d9640ae4b2880b61->leave($__internal_7814289ee50670a01c02306e0c8b9fd2a05567b946289f33d9640ae4b2880b61_prof);

    }

    public function getTemplateName()
    {
        return "AppFrontBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 94,  136 => 79,  118 => 64,  100 => 49,  83 => 35,  65 => 20,  52 => 9,  50 => 8,  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CoreThemeBundle:ustora:layout.html.twig" %}*/
/* {% block content %}*/
/* 	<!-- include slider (includes/slider.html.twig)-->*/
/*     */
/*     <!-- end include -->*/
/*     {{ render(path('common_carousel_homepage')) }}*/
/*     <!-- include promo area (includes/promo.html.twig)-->*/
/*     {% include "@CoreTheme/ustora/includes/promo.html.twig" %}*/
/*     <!-- end include -->*/
/*     <div class="maincontent-area">*/
/*         <div class="zigzag-bottom"></div>*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="latest-product">*/
/*                         <h2 class="section-title">Latest Products</h2>*/
/*                         <div class="product-carousel">*/
/*                             <div class="single-product">*/
/*                                 <div class="product-f-image">*/
/*                                     <img src="{{ asset('bundles/coretheme/img/product-1.jpg') }}" alt="">*/
/*                                     <div class="product-hover">*/
/*                                         <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>*/
/*                                         <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                                 <h2><a href="single-product.html">Samsung Galaxy s5- 2015</a></h2>*/
/*                                 */
/*                                 <div class="product-carousel-price">*/
/*                                     <ins>$700.00</ins> <del>$100.00</del>*/
/*                                 </div> */
/*                             </div>*/
/*                             <div class="single-product">*/
/*                                 <div class="product-f-image">*/
/*                                     <img src="{{ asset('bundles/coretheme/img/product-2.jpg') }}" alt="">*/
/*                                     <div class="product-hover">*/
/*                                         <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>*/
/*                                         <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                                 <h2>Nokia Lumia 1320</h2>*/
/*                                 <div class="product-carousel-price">*/
/*                                     <ins>$899.00</ins> <del>$999.00</del>*/
/*                                 </div> */
/*                             </div>*/
/*                             <div class="single-product">*/
/*                                 <div class="product-f-image">*/
/*                                     <img src="{{ asset('bundles/coretheme/img/product-3.jpg') }}" alt="">*/
/*                                     <div class="product-hover">*/
/*                                         <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>*/
/*                                         <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                                 <h2>LG Leon 2015</h2>*/
/* */
/*                                 <div class="product-carousel-price">*/
/*                                     <ins>$400.00</ins> <del>$425.00</del>*/
/*                                 </div>                                 */
/*                             </div>*/
/*                             <div class="single-product">*/
/*                                 <div class="product-f-image">*/
/*                                     <img src="{{ asset('bundles/coretheme/img/product-4.jpg') }}" alt="">*/
/*                                     <div class="product-hover">*/
/*                                         <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>*/
/*                                         <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                                 <h2><a href="single-product.html">Sony microsoft</a></h2>*/
/* */
/*                                 <div class="product-carousel-price">*/
/*                                     <ins>$200.00</ins> <del>$225.00</del>*/
/*                                 </div>                            */
/*                             </div>*/
/*                             <div class="single-product">*/
/*                                 <div class="product-f-image">*/
/*                                     <img src="{{ asset('bundles/coretheme/img/product-5.jpg') }}" alt="">*/
/*                                     <div class="product-hover">*/
/*                                         <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>*/
/*                                         <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                                 <h2>iPhone 6</h2>*/
/* */
/*                                 <div class="product-carousel-price">*/
/*                                     <ins>$1200.00</ins> <del>$1355.00</del>*/
/*                                 </div>                                 */
/*                             </div>*/
/*                             <div class="single-product">*/
/*                                 <div class="product-f-image">*/
/*                                     <img src="{{ asset('bundles/coretheme/img/product-6.jpg') }}" alt="">*/
/*                                     <div class="product-hover">*/
/*                                         <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>*/
/*                                         <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>*/
/*                                     </div>*/
/*                                 </div>*/
/*                                 */
/*                                 <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>*/
/* */
/*                                 <div class="product-carousel-price">*/
/*                                     <ins>$400.00</ins>*/
/*                                 </div>                            */
/*                             </div>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div> <!-- End main content area -->*/
/* {% endblock %}*/

<?php

/* @CoreTheme/ustora/includes/branding.html.twig */
class __TwigTemplate_99207a99c8e1c26450e5300b3022afecc3ef40cade25d4850f9e994331be73a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cc03b56264c675f4b7c2fdf4bbd57a54a2e1a68afddb60d554435af31cd0cbe7 = $this->env->getExtension("native_profiler");
        $__internal_cc03b56264c675f4b7c2fdf4bbd57a54a2e1a68afddb60d554435af31cd0cbe7->enter($__internal_cc03b56264c675f4b7c2fdf4bbd57a54a2e1a68afddb60d554435af31cd0cbe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CoreTheme/ustora/includes/branding.html.twig"));

        // line 1
        echo "<div class=\"site-branding-area\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <div class=\"logo\">
                        <h1><a href=\"./\"><img src=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/coretheme/img/logo.png"), "html", null, true);
        echo "\"></a></h1>
                    </div>
                </div>
                
                <div class=\"col-sm-6\">
                    <div class=\"shopping-item\">
                        <a href=\"cart.html\">Cart - <span class=\"cart-amunt\">\$100</span> <i class=\"fa fa-shopping-cart\"></i> <span class=\"product-count\">5</span></a>
                    </div>
                </div>
            </div>
        </div>
</div> <!-- End site branding area -->";
        
        $__internal_cc03b56264c675f4b7c2fdf4bbd57a54a2e1a68afddb60d554435af31cd0cbe7->leave($__internal_cc03b56264c675f4b7c2fdf4bbd57a54a2e1a68afddb60d554435af31cd0cbe7_prof);

    }

    public function getTemplateName()
    {
        return "@CoreTheme/ustora/includes/branding.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 6,  22 => 1,);
    }
}
/* <div class="site-branding-area">*/
/*         <div class="container">*/
/*             <div class="row">*/
/*                 <div class="col-sm-6">*/
/*                     <div class="logo">*/
/*                         <h1><a href="./"><img src="{{ asset('bundles/coretheme/img/logo.png') }}"></a></h1>*/
/*                     </div>*/
/*                 </div>*/
/*                 */
/*                 <div class="col-sm-6">*/
/*                     <div class="shopping-item">*/
/*                         <a href="cart.html">Cart - <span class="cart-amunt">$100</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* </div> <!-- End site branding area -->*/

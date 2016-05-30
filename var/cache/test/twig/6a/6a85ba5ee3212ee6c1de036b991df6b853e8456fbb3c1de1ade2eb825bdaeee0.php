<?php

/* CommonCarouselBundle:Default:index.html.twig */
class __TwigTemplate_f46d8a3d28682762a9c55242c52716fba3ad8e876cc6cdb1a58b1d8eb17111c2 extends Twig_Template
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
        $__internal_e316dfa20c6ce9df41b775cbb348b212cc435c7d3f691816541f8557e6efa845 = $this->env->getExtension("native_profiler");
        $__internal_e316dfa20c6ce9df41b775cbb348b212cc435c7d3f691816541f8557e6efa845->enter($__internal_e316dfa20c6ce9df41b775cbb348b212cc435c7d3f691816541f8557e6efa845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CommonCarouselBundle:Default:index.html.twig"));

        // line 1
        echo "
<div class=\"slider-area\">
        \t<!-- Slider -->
\t\t\t<div class=\"block-slider block-slider4\">
\t\t\t\t<ul class=\"\" id=\"bxslider-home4\">
\t\t\t\t";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : $this->getContext($context, "slides")));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 7
            echo "\t\t\t\t\t<li>
\t\t\t\t\t\t<img src=\"";
            // line 8
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("images/slides/" . $this->getAttribute($context["slide"], "imageName", array()))), "html", null, true);
            echo "\" alt=\"Slide\" style=\"max-width: 500px;\">
\t\t\t\t\t\t<div class=\"caption-group\">
\t\t\t\t\t\t\t<h2 class=\"caption title\">
\t\t\t\t\t\t\t\t";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "textH2", array()), "html", null, true);
            echo "
\t\t\t\t\t\t\t</h2>
\t\t\t\t\t\t\t<h4 class=\"caption subtitle\">";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "textH4", array()), "html", null, true);
            echo "</h4>
\t\t\t\t\t\t\t<a class=\"caption button-radius\" href=\"#\"><span class=\"icon\"></span>Shop now</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "\t\t\t\t</ul>
\t\t\t</div>
\t\t\t<!-- ./Slider -->
    </div> <!-- End slider area -->";
        
        $__internal_e316dfa20c6ce9df41b775cbb348b212cc435c7d3f691816541f8557e6efa845->leave($__internal_e316dfa20c6ce9df41b775cbb348b212cc435c7d3f691816541f8557e6efa845_prof);

    }

    public function getTemplateName()
    {
        return "CommonCarouselBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 18,  47 => 13,  42 => 11,  36 => 8,  33 => 7,  29 => 6,  22 => 1,);
    }
}
/* */
/* <div class="slider-area">*/
/*         	<!-- Slider -->*/
/* 			<div class="block-slider block-slider4">*/
/* 				<ul class="" id="bxslider-home4">*/
/* 				{% for slide in slides %}*/
/* 					<li>*/
/* 						<img src="{{ asset('images/slides/' ~ slide.imageName) }}" alt="Slide" style="max-width: 500px;">*/
/* 						<div class="caption-group">*/
/* 							<h2 class="caption title">*/
/* 								{{slide.textH2}}*/
/* 							</h2>*/
/* 							<h4 class="caption subtitle">{{slide.textH4}}</h4>*/
/* 							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>*/
/* 						</div>*/
/* 					</li>*/
/* 				{% endfor %}*/
/* 				</ul>*/
/* 			</div>*/
/* 			<!-- ./Slider -->*/
/*     </div> <!-- End slider area -->*/

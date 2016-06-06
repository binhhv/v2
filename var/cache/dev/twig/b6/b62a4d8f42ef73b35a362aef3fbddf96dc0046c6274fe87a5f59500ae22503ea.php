<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_8ebf18c73eb4a8edc3364980459e63915ba48fb9d769ac6e5580139ae46c2a1f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_374d912501694e29c7828390006db8ec81ccff22ca9d61788e738cf25f462b99 = $this->env->getExtension("native_profiler");
        $__internal_374d912501694e29c7828390006db8ec81ccff22ca9d61788e738cf25f462b99->enter($__internal_374d912501694e29c7828390006db8ec81ccff22ca9d61788e738cf25f462b99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_374d912501694e29c7828390006db8ec81ccff22ca9d61788e738cf25f462b99->leave($__internal_374d912501694e29c7828390006db8ec81ccff22ca9d61788e738cf25f462b99_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_5178a46766f595e7035a18bf30e68fd546b99b3312823867fed18dcdb9d529b1 = $this->env->getExtension("native_profiler");
        $__internal_5178a46766f595e7035a18bf30e68fd546b99b3312823867fed18dcdb9d529b1->enter($__internal_5178a46766f595e7035a18bf30e68fd546b99b3312823867fed18dcdb9d529b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_5178a46766f595e7035a18bf30e68fd546b99b3312823867fed18dcdb9d529b1->leave($__internal_5178a46766f595e7035a18bf30e68fd546b99b3312823867fed18dcdb9d529b1_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1cb431d873f7118e8828b2ba61bfb7238121db31ac70de9ce926ceb6645be385 = $this->env->getExtension("native_profiler");
        $__internal_1cb431d873f7118e8828b2ba61bfb7238121db31ac70de9ce926ceb6645be385->enter($__internal_1cb431d873f7118e8828b2ba61bfb7238121db31ac70de9ce926ceb6645be385_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_1cb431d873f7118e8828b2ba61bfb7238121db31ac70de9ce926ceb6645be385->leave($__internal_1cb431d873f7118e8828b2ba61bfb7238121db31ac70de9ce926ceb6645be385_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_45c4841cdd0e8db64eadd2f6ebe46d5309633727c1e865d83e4003721852ce2c = $this->env->getExtension("native_profiler");
        $__internal_45c4841cdd0e8db64eadd2f6ebe46d5309633727c1e865d83e4003721852ce2c->enter($__internal_45c4841cdd0e8db64eadd2f6ebe46d5309633727c1e865d83e4003721852ce2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_45c4841cdd0e8db64eadd2f6ebe46d5309633727c1e865d83e4003721852ce2c->leave($__internal_45c4841cdd0e8db64eadd2f6ebe46d5309633727c1e865d83e4003721852ce2c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

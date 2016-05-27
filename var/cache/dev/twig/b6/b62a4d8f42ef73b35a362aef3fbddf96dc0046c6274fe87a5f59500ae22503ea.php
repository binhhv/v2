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
        $__internal_b6da4dd23f781dc13362491e892800140a4f6bff3ab8d584c71af855bdcb9ac6 = $this->env->getExtension("native_profiler");
        $__internal_b6da4dd23f781dc13362491e892800140a4f6bff3ab8d584c71af855bdcb9ac6->enter($__internal_b6da4dd23f781dc13362491e892800140a4f6bff3ab8d584c71af855bdcb9ac6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6da4dd23f781dc13362491e892800140a4f6bff3ab8d584c71af855bdcb9ac6->leave($__internal_b6da4dd23f781dc13362491e892800140a4f6bff3ab8d584c71af855bdcb9ac6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d6b6d4febf53d6f7262c216707ce9ac0ec834f5b6b83c4fe5f128adb8ec0148b = $this->env->getExtension("native_profiler");
        $__internal_d6b6d4febf53d6f7262c216707ce9ac0ec834f5b6b83c4fe5f128adb8ec0148b->enter($__internal_d6b6d4febf53d6f7262c216707ce9ac0ec834f5b6b83c4fe5f128adb8ec0148b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d6b6d4febf53d6f7262c216707ce9ac0ec834f5b6b83c4fe5f128adb8ec0148b->leave($__internal_d6b6d4febf53d6f7262c216707ce9ac0ec834f5b6b83c4fe5f128adb8ec0148b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a863776dc2e8ee7dd00be8dec418c73a9b4fd327abd33dc47e37ebd176c9f0ee = $this->env->getExtension("native_profiler");
        $__internal_a863776dc2e8ee7dd00be8dec418c73a9b4fd327abd33dc47e37ebd176c9f0ee->enter($__internal_a863776dc2e8ee7dd00be8dec418c73a9b4fd327abd33dc47e37ebd176c9f0ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_a863776dc2e8ee7dd00be8dec418c73a9b4fd327abd33dc47e37ebd176c9f0ee->leave($__internal_a863776dc2e8ee7dd00be8dec418c73a9b4fd327abd33dc47e37ebd176c9f0ee_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_4cb097b5cee1e9487a9f4f078c568d54f26917717b5a97da830b1dbbc13e8a06 = $this->env->getExtension("native_profiler");
        $__internal_4cb097b5cee1e9487a9f4f078c568d54f26917717b5a97da830b1dbbc13e8a06->enter($__internal_4cb097b5cee1e9487a9f4f078c568d54f26917717b5a97da830b1dbbc13e8a06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_4cb097b5cee1e9487a9f4f078c568d54f26917717b5a97da830b1dbbc13e8a06->leave($__internal_4cb097b5cee1e9487a9f4f078c568d54f26917717b5a97da830b1dbbc13e8a06_prof);

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

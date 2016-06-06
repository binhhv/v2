<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_f7a190b9517af21ff045497c8248197af152dd8276bc31cc771288c8888647df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreThemeBundle:ustora:layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreThemeBundle:ustora:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fe335baccb911027f157ffd88680814a92ccd5f3e2d8b9154b9c38b73cf73b0 = $this->env->getExtension("native_profiler");
        $__internal_4fe335baccb911027f157ffd88680814a92ccd5f3e2d8b9154b9c38b73cf73b0->enter($__internal_4fe335baccb911027f157ffd88680814a92ccd5f3e2d8b9154b9c38b73cf73b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fe335baccb911027f157ffd88680814a92ccd5f3e2d8b9154b9c38b73cf73b0->leave($__internal_4fe335baccb911027f157ffd88680814a92ccd5f3e2d8b9154b9c38b73cf73b0_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_b2e31e28fad95da37eea2a4754b97f0e93583291560de295c9f854c8c3a505bf = $this->env->getExtension("native_profiler");
        $__internal_b2e31e28fad95da37eea2a4754b97f0e93583291560de295c9f854c8c3a505bf->enter($__internal_b2e31e28fad95da37eea2a4754b97f0e93583291560de295c9f854c8c3a505bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "
";
        // line 6
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 26
        echo "
";
        
        $__internal_b2e31e28fad95da37eea2a4754b97f0e93583291560de295c9f854c8c3a505bf->leave($__internal_b2e31e28fad95da37eea2a4754b97f0e93583291560de295c9f854c8c3a505bf_prof);

    }

    // line 6
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_772e7d916a5f27d890545ac857b177c72db82dfdb3d7570e9663f60042af711f = $this->env->getExtension("native_profiler");
        $__internal_772e7d916a5f27d890545ac857b177c72db82dfdb3d7570e9663f60042af711f->enter($__internal_772e7d916a5f27d890545ac857b177c72db82dfdb3d7570e9663f60042af711f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 10
        echo "
<form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username"), "html", null, true);
        echo "</label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password"), "html", null, true);
        echo "</label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
    <label for=\"remember_me\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.remember_me"), "html", null, true);
        echo "</label>

    <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit"), "html", null, true);
        echo "\" />
</form>
";
        
        $__internal_772e7d916a5f27d890545ac857b177c72db82dfdb3d7570e9663f60042af711f->leave($__internal_772e7d916a5f27d890545ac857b177c72db82dfdb3d7570e9663f60042af711f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 23,  96 => 21,  89 => 17,  84 => 15,  80 => 14,  75 => 12,  71 => 11,  68 => 10,  62 => 8,  60 => 7,  54 => 6,  46 => 26,  44 => 6,  41 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends "CoreThemeBundle:ustora:layout.html.twig" %}*/
/* */
/* {% block content %}*/
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username">{{ 'security.login.username'|trans }}</label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label for="password">{{ 'security.login.password'|trans }}</label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*     <input type="checkbox" id="remember_me" name="_remember_me" value="on" />*/
/*     <label for="remember_me">{{ 'security.login.remember_me'|trans }}</label>*/
/* */
/*     <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans }}" />*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_62a0e2112d6c140529dc695f7e60852ec1a6bf0f60da4e73d0fcf4b0adea27ab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_949e7c47f9e7865e44dcc71caaaf3322009cd15bee677ac27d4ab99103a4751a = $this->env->getExtension("native_profiler");
        $__internal_949e7c47f9e7865e44dcc71caaaf3322009cd15bee677ac27d4ab99103a4751a->enter($__internal_949e7c47f9e7865e44dcc71caaaf3322009cd15bee677ac27d4ab99103a4751a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_949e7c47f9e7865e44dcc71caaaf3322009cd15bee677ac27d4ab99103a4751a->leave($__internal_949e7c47f9e7865e44dcc71caaaf3322009cd15bee677ac27d4ab99103a4751a_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b3dd935167815f77a5b047dc8524eb8aaf28232832359dd4bdbac1bd636c955b = $this->env->getExtension("native_profiler");
        $__internal_b3dd935167815f77a5b047dc8524eb8aaf28232832359dd4bdbac1bd636c955b->enter($__internal_b3dd935167815f77a5b047dc8524eb8aaf28232832359dd4bdbac1bd636c955b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b3dd935167815f77a5b047dc8524eb8aaf28232832359dd4bdbac1bd636c955b->leave($__internal_b3dd935167815f77a5b047dc8524eb8aaf28232832359dd4bdbac1bd636c955b_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a53232734561891c785e659a6a5906bc11909c3bb03060864a0eacf48cfdf4c1 = $this->env->getExtension("native_profiler");
        $__internal_a53232734561891c785e659a6a5906bc11909c3bb03060864a0eacf48cfdf4c1->enter($__internal_a53232734561891c785e659a6a5906bc11909c3bb03060864a0eacf48cfdf4c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_a53232734561891c785e659a6a5906bc11909c3bb03060864a0eacf48cfdf4c1->leave($__internal_a53232734561891c785e659a6a5906bc11909c3bb03060864a0eacf48cfdf4c1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b324fbfdeb22651816f8ecaeb2c7f2e4d7ee94b6504b49f83008d9efa92f6841 = $this->env->getExtension("native_profiler");
        $__internal_b324fbfdeb22651816f8ecaeb2c7f2e4d7ee94b6504b49f83008d9efa92f6841->enter($__internal_b324fbfdeb22651816f8ecaeb2c7f2e4d7ee94b6504b49f83008d9efa92f6841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b324fbfdeb22651816f8ecaeb2c7f2e4d7ee94b6504b49f83008d9efa92f6841->leave($__internal_b324fbfdeb22651816f8ecaeb2c7f2e4d7ee94b6504b49f83008d9efa92f6841_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

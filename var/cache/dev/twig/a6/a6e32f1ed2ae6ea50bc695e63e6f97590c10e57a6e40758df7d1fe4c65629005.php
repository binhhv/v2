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
        $__internal_f4f0ad48326daa7c7161ee60424b6a313c73de203fb42c99af8a5bb30ff3c88e = $this->env->getExtension("native_profiler");
        $__internal_f4f0ad48326daa7c7161ee60424b6a313c73de203fb42c99af8a5bb30ff3c88e->enter($__internal_f4f0ad48326daa7c7161ee60424b6a313c73de203fb42c99af8a5bb30ff3c88e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4f0ad48326daa7c7161ee60424b6a313c73de203fb42c99af8a5bb30ff3c88e->leave($__internal_f4f0ad48326daa7c7161ee60424b6a313c73de203fb42c99af8a5bb30ff3c88e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b1f2c7fba1161b7085e7df4329fbe00ffa7e4d571d4c5d61846a6063c9ff4ef9 = $this->env->getExtension("native_profiler");
        $__internal_b1f2c7fba1161b7085e7df4329fbe00ffa7e4d571d4c5d61846a6063c9ff4ef9->enter($__internal_b1f2c7fba1161b7085e7df4329fbe00ffa7e4d571d4c5d61846a6063c9ff4ef9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b1f2c7fba1161b7085e7df4329fbe00ffa7e4d571d4c5d61846a6063c9ff4ef9->leave($__internal_b1f2c7fba1161b7085e7df4329fbe00ffa7e4d571d4c5d61846a6063c9ff4ef9_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_edff45f37439ef74db3b4f26cc6ac323e4a0037ab062ae6055be78b11182cb0b = $this->env->getExtension("native_profiler");
        $__internal_edff45f37439ef74db3b4f26cc6ac323e4a0037ab062ae6055be78b11182cb0b->enter($__internal_edff45f37439ef74db3b4f26cc6ac323e4a0037ab062ae6055be78b11182cb0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_edff45f37439ef74db3b4f26cc6ac323e4a0037ab062ae6055be78b11182cb0b->leave($__internal_edff45f37439ef74db3b4f26cc6ac323e4a0037ab062ae6055be78b11182cb0b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_603ebbd0c86c056331d52bddc06c5c6c85e1e70d57d4ca8f1b99da7091b9aedf = $this->env->getExtension("native_profiler");
        $__internal_603ebbd0c86c056331d52bddc06c5c6c85e1e70d57d4ca8f1b99da7091b9aedf->enter($__internal_603ebbd0c86c056331d52bddc06c5c6c85e1e70d57d4ca8f1b99da7091b9aedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_603ebbd0c86c056331d52bddc06c5c6c85e1e70d57d4ca8f1b99da7091b9aedf->leave($__internal_603ebbd0c86c056331d52bddc06c5c6c85e1e70d57d4ca8f1b99da7091b9aedf_prof);

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

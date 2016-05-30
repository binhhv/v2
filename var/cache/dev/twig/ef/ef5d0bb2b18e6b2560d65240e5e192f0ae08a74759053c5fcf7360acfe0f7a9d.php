<?php

/* @CommonCarousel/slide/index.html.twig */
class __TwigTemplate_b309586c1748b593bb4a3262521fc7b985ffe158c733d0c93867c8a49b245edf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@AppBack/Default/index.html.twig", "@CommonCarousel/slide/index.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@AppBack/Default/index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_329132247ec7b94cd1ac11d0f8c33b025579c3dc0f21979f3ba7522384293655 = $this->env->getExtension("native_profiler");
        $__internal_329132247ec7b94cd1ac11d0f8c33b025579c3dc0f21979f3ba7522384293655->enter($__internal_329132247ec7b94cd1ac11d0f8c33b025579c3dc0f21979f3ba7522384293655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@CommonCarousel/slide/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_329132247ec7b94cd1ac11d0f8c33b025579c3dc0f21979f3ba7522384293655->leave($__internal_329132247ec7b94cd1ac11d0f8c33b025579c3dc0f21979f3ba7522384293655_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_2934c4130e89b40edc1fa8c9ccc1cccc445fda76720f3469c3a437238a1aedc6 = $this->env->getExtension("native_profiler");
        $__internal_2934c4130e89b40edc1fa8c9ccc1cccc445fda76720f3469c3a437238a1aedc6->enter($__internal_2934c4130e89b40edc1fa8c9ccc1cccc445fda76720f3469c3a437238a1aedc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    <h1>Slide list</h1>

    <table class=\"table table-striped responsive-utilities jambo_table bulk_action\">
        <thead>
            <tr>
                <th>Id</th>
                <th>Image</th>
                <th>Texth2</th>
                <th>Texth4</th>
                <th>Link</th>
                <th>Enabled</th>
                <th>Startdate</th>
                <th>Enddate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["slides"]) ? $context["slides"] : $this->getContext($context, "slides")));
        foreach ($context['_seq'] as $context["_key"] => $context["slide"]) {
            // line 22
            echo "            <tr>
                <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_slide_show", array("id" => $this->getAttribute($context["slide"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "id", array()), "html", null, true);
            echo "</a></td>
                <td><img src=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("images/slides/" . $this->getAttribute($context["slide"], "imageName", array()))), "html", null, true);
            echo "\" class=\"img-responsive\" width=\"50\" ></td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "textH2", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "textH4", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["slide"], "link", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            if ($this->getAttribute($context["slide"], "enabled", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                <td>";
            // line 29
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["slide"], "startDate", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["slide"], "endDate", array()), "d-m-Y"), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_slide_show", array("id" => $this->getAttribute($context["slide"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_slide_edit", array("id" => $this->getAttribute($context["slide"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['slide'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("admin_slide_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_2934c4130e89b40edc1fa8c9ccc1cccc445fda76720f3469c3a437238a1aedc6->leave($__internal_2934c4130e89b40edc1fa8c9ccc1cccc445fda76720f3469c3a437238a1aedc6_prof);

    }

    public function getTemplateName()
    {
        return "@CommonCarousel/slide/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 48,  125 => 43,  113 => 37,  107 => 34,  100 => 30,  96 => 29,  88 => 28,  84 => 27,  80 => 26,  76 => 25,  72 => 24,  66 => 23,  63 => 22,  59 => 21,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends '@AppBack/Default/index.html.twig' %}*/
/* */
/* {% block content %}*/
/*     <h1>Slide list</h1>*/
/* */
/*     <table class="table table-striped responsive-utilities jambo_table bulk_action">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Image</th>*/
/*                 <th>Texth2</th>*/
/*                 <th>Texth4</th>*/
/*                 <th>Link</th>*/
/*                 <th>Enabled</th>*/
/*                 <th>Startdate</th>*/
/*                 <th>Enddate</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for slide in slides %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('admin_slide_show', { 'id': slide.id }) }}">{{ slide.id }}</a></td>*/
/*                 <td><img src="{{ asset('images/slides/' ~ slide.imageName)}}" class="img-responsive" width="50" ></td>*/
/*                 <td>{{ slide.textH2 }}</td>*/
/*                 <td>{{ slide.textH4 }}</td>*/
/*                 <td>{{ slide.link }}</td>*/
/*                 <td>{% if slide.enabled %}Yes{% else %}No{% endif %}</td>*/
/*                 <td>{{ slide.startDate|date('d-m-Y') }}</td>*/
/*                 <td>{{ slide.endDate|date('d-m-Y') }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_slide_show', { 'id': slide.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('admin_slide_edit', { 'id': slide.id }) }}">edit</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('admin_slide_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */

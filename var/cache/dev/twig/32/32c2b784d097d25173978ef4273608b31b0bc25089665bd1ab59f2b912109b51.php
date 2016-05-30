<?php

/* @AppBack/Default/index.html.twig */
class __TwigTemplate_3ba1d34c61307d2e005d348b484565dc18ad4649f22742fadab4c23cc4efd8b5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreThemeBundle:admin:layout.html.twig", "@AppBack/Default/index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreThemeBundle:admin:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dbce0c7803066f116992fecf7b91634547a2c5776867eba788de91d8eae27249 = $this->env->getExtension("native_profiler");
        $__internal_dbce0c7803066f116992fecf7b91634547a2c5776867eba788de91d8eae27249->enter($__internal_dbce0c7803066f116992fecf7b91634547a2c5776867eba788de91d8eae27249_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AppBack/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbce0c7803066f116992fecf7b91634547a2c5776867eba788de91d8eae27249->leave($__internal_dbce0c7803066f116992fecf7b91634547a2c5776867eba788de91d8eae27249_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9fe4b7ca4e9a17fefb4d69261acb6d1cc5a612d8a7b1c0c5ef3152d1f656927b = $this->env->getExtension("native_profiler");
        $__internal_9fe4b7ca4e9a17fefb4d69261acb6d1cc5a612d8a7b1c0c5ef3152d1f656927b->enter($__internal_9fe4b7ca4e9a17fefb4d69261acb6d1cc5a612d8a7b1c0c5ef3152d1f656927b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "\t";
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_9fe4b7ca4e9a17fefb4d69261acb6d1cc5a612d8a7b1c0c5ef3152d1f656927b->leave($__internal_9fe4b7ca4e9a17fefb4d69261acb6d1cc5a612d8a7b1c0c5ef3152d1f656927b_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_fd0b31138adfc678250b0ce03141507f1a692fab1e24c68e65629b8ccb77412a = $this->env->getExtension("native_profiler");
        $__internal_fd0b31138adfc678250b0ce03141507f1a692fab1e24c68e65629b8ccb77412a->enter($__internal_fd0b31138adfc678250b0ce03141507f1a692fab1e24c68e65629b8ccb77412a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 5
        echo "\t";
        
        $__internal_fd0b31138adfc678250b0ce03141507f1a692fab1e24c68e65629b8ccb77412a->leave($__internal_fd0b31138adfc678250b0ce03141507f1a692fab1e24c68e65629b8ccb77412a_prof);

    }

    public function getTemplateName()
    {
        return "@AppBack/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'CoreThemeBundle:admin:layout.html.twig' %}*/
/* */
/* {% block body %}*/
/* 	{% block content %}*/
/* 	{% endblock %}*/
/* {% endblock %}*/

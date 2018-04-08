<?php

/* expression.twig */
class __TwigTemplate_b14e81b863fb818f5547a729a8f2d22c4f0fe60baa2d0b7b1be754080a4c3022 extends Twig_Template
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
        $__internal_3b04463880abda3d0a835d8e594811d1478f27b4fe60d5dcc98a99eedcf4d9e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b04463880abda3d0a835d8e594811d1478f27b4fe60d5dcc98a99eedcf4d9e9->enter($__internal_3b04463880abda3d0a835d8e594811d1478f27b4fe60d5dcc98a99eedcf4d9e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        
        $__internal_3b04463880abda3d0a835d8e594811d1478f27b4fe60d5dcc98a99eedcf4d9e9->leave($__internal_3b04463880abda3d0a835d8e594811d1478f27b4fe60d5dcc98a99eedcf4d9e9_prof);

    }

    public function getTemplateName()
    {
        return "expression.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{course.id}}";
    }
}

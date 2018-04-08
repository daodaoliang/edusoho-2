<?php

/* expression.twig */
class __TwigTemplate_a1fc48f41d5919e4a59e364ee55bc110a6c7418a8b0a5da7eee31671488edba8 extends Twig_Template
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
        $__internal_05cafe03d1a1af635164a1584482570dcc7f069f4b9ea46882544183e6228c62 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_05cafe03d1a1af635164a1584482570dcc7f069f4b9ea46882544183e6228c62->enter($__internal_05cafe03d1a1af635164a1584482570dcc7f069f4b9ea46882544183e6228c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env,  !$this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "recommended", array()), "html", null, true);
        
        $__internal_05cafe03d1a1af635164a1584482570dcc7f069f4b9ea46882544183e6228c62->leave($__internal_05cafe03d1a1af635164a1584482570dcc7f069f4b9ea46882544183e6228c62_prof);

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
        return "{{ not classroom.recommended }}";
    }
}

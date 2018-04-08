<?php

/* expression.twig */
class __TwigTemplate_af276570bbcc9069a22023a601ed2fdf7e5ae45137b5d08c032682e19ab5cc00 extends Twig_Template
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
        $__internal_d40cd448c508bc56497800d1904c2d818720dd4794a8cb4098aa89f9dcbf7d39 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d40cd448c508bc56497800d1904c2d818720dd4794a8cb4098aa89f9dcbf7d39->enter($__internal_d40cd448c508bc56497800d1904c2d818720dd4794a8cb4098aa89f9dcbf7d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) != "published"), "html", null, true);
        
        $__internal_d40cd448c508bc56497800d1904c2d818720dd4794a8cb4098aa89f9dcbf7d39->leave($__internal_d40cd448c508bc56497800d1904c2d818720dd4794a8cb4098aa89f9dcbf7d39_prof);

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
        return "{{ classroom.status != 'published' }}";
    }
}

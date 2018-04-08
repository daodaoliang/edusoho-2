<?php

/* expression.twig */
class __TwigTemplate_1261a3e7bee6b2df7d56dd7602f0e7f80a647d800e98b7cc1f5e5d1522867e5d extends Twig_Template
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
        $__internal_c3f8b0a0a76196207b1568b1d9fb52d806fd6df8e267e109b8da56d91825d861 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c3f8b0a0a76196207b1568b1d9fb52d806fd6df8e267e109b8da56d91825d861->enter($__internal_c3f8b0a0a76196207b1568b1d9fb52d806fd6df8e267e109b8da56d91825d861_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "normal") &&  !$this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommended", array())), "html", null, true);
        
        $__internal_c3f8b0a0a76196207b1568b1d9fb52d806fd6df8e267e109b8da56d91825d861->leave($__internal_c3f8b0a0a76196207b1568b1d9fb52d806fd6df8e267e109b8da56d91825d861_prof);

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
        return "{{ filter == 'normal' and not course.recommended }}";
    }
}

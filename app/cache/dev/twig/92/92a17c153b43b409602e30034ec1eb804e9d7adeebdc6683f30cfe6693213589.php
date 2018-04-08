<?php

/* expression.twig */
class __TwigTemplate_50212af3a13fd4f7df4f48c39e8f408dd6d6b8f093805b3a4a6c347475866d84 extends Twig_Template
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
        $__internal_5836efd9ac60e6c3c40e05841c5ca5b1959d4b150b14aee4e89221cdc1284b2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5836efd9ac60e6c3c40e05841c5ca5b1959d4b150b14aee4e89221cdc1284b2c->enter($__internal_5836efd9ac60e6c3c40e05841c5ca5b1959d4b150b14aee4e89221cdc1284b2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "promoted", array()) == 0), "html", null, true);
        
        $__internal_5836efd9ac60e6c3c40e05841c5ca5b1959d4b150b14aee4e89221cdc1284b2c->leave($__internal_5836efd9ac60e6c3c40e05841c5ca5b1959d4b150b14aee4e89221cdc1284b2c_prof);

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
        return "{{user.promoted == 0}}";
    }
}

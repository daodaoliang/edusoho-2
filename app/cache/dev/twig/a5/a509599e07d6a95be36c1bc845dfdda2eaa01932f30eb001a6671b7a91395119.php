<?php

/* expression.twig */
class __TwigTemplate_92e0e73391ec2be18fd3f64521f5c747e7eb0e310647559f456d568fbba26c67 extends Twig_Template
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
        $__internal_5ca2b0d402200ae7d8e32d6b35cc849f52caf1058862c93a14425fe1905568bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca2b0d402200ae7d8e32d6b35cc849f52caf1058862c93a14425fe1905568bf->enter($__internal_5ca2b0d402200ae7d8e32d6b35cc849f52caf1058862c93a14425fe1905568bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "locked", array()) == 0), "html", null, true);
        
        $__internal_5ca2b0d402200ae7d8e32d6b35cc849f52caf1058862c93a14425fe1905568bf->leave($__internal_5ca2b0d402200ae7d8e32d6b35cc849f52caf1058862c93a14425fe1905568bf_prof);

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
        return "{{user.locked == 0}}";
    }
}

<?php

/* expression.twig */
class __TwigTemplate_65f533f1cc93abc7012431a102d14210b4df780420339bac160392ef9b1f1658 extends Twig_Template
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
        $__internal_6cda5a1144d07516ae431bf8ecf14ee4724920e739b81b5c27da9c2c38b7cecf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6cda5a1144d07516ae431bf8ecf14ee4724920e739b81b5c27da9c2c38b7cecf->enter($__internal_6cda5a1144d07516ae431bf8ecf14ee4724920e739b81b5c27da9c2c38b7cecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "draft"), "html", null, true);
        
        $__internal_6cda5a1144d07516ae431bf8ecf14ee4724920e739b81b5c27da9c2c38b7cecf->leave($__internal_6cda5a1144d07516ae431bf8ecf14ee4724920e739b81b5c27da9c2c38b7cecf_prof);

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
        return "{{ classroom.status=='draft' }}";
    }
}

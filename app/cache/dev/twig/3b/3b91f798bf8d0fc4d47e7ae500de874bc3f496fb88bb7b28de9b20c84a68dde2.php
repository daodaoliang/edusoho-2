<?php

/* TopxiaAdminBundle:EduCloud/Overview:index.html.twig */
class __TwigTemplate_1a13a1a290a9d8ece6ead3d3cf11a1ab79c1f2d51a043ba236346f2e296ade60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:EduCloud/Overview:index.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ccfd1433a083f8a2c8696ea245003725c56a443f7f14d4e36baba1d514d9f160 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ccfd1433a083f8a2c8696ea245003725c56a443f7f14d4e36baba1d514d9f160->enter($__internal_ccfd1433a083f8a2c8696ea245003725c56a443f7f14d4e36baba1d514d9f160_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:EduCloud/Overview:index.html.twig"));

        // line 3
        $context["menu"] = "admin_my_cloud_overview";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccfd1433a083f8a2c8696ea245003725c56a443f7f14d4e36baba1d514d9f160->leave($__internal_ccfd1433a083f8a2c8696ea245003725c56a443f7f14d4e36baba1d514d9f160_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_994f4a6a08225c17dd3eae7ade6f6982fd79df0b680e4fa0813c7b1c16d9caec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_994f4a6a08225c17dd3eae7ade6f6982fd79df0b680e4fa0813c7b1c16d9caec->enter($__internal_994f4a6a08225c17dd3eae7ade6f6982fd79df0b680e4fa0813c7b1c16d9caec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        if ((($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "error", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["overview"]) ? $context["overview"] : null), "error", array()), "")) : (""))) {
            // line 7
            echo "  ";
            $this->loadTemplate("TopxiaAdminBundle:EduCloud/Overview:not-access.html.twig", "TopxiaAdminBundle:EduCloud/Overview:index.html.twig", 7)->display($context);
        } elseif (($this->getAttribute(        // line 8
(isset($context["overview"]) ? $context["overview"] : $this->getContext($context, "overview")), "enabled", array()) == false)) {
            // line 9
            echo "  ";
            $this->loadTemplate("TopxiaAdminBundle:EduCloud/Overview:disabled.html.twig", "TopxiaAdminBundle:EduCloud/Overview:index.html.twig", 9)->display($context);
        } elseif ((($this->getAttribute(        // line 10
(isset($context["overview"]) ? $context["overview"] : $this->getContext($context, "overview")), "accessCloud", array()) == false) || $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isTrial())) {
            // line 11
            echo "  ";
            $this->loadTemplate("TopxiaAdminBundle:EduCloud/Overview:not-access.html.twig", "TopxiaAdminBundle:EduCloud/Overview:index.html.twig", 11)->display($context);
        } else {
            // line 13
            echo "  ";
            $this->loadTemplate("TopxiaAdminBundle:EduCloud/Overview:normal-use.html.twig", "TopxiaAdminBundle:EduCloud/Overview:index.html.twig", 13)->display($context);
        }
        
        $__internal_994f4a6a08225c17dd3eae7ade6f6982fd79df0b680e4fa0813c7b1c16d9caec->leave($__internal_994f4a6a08225c17dd3eae7ade6f6982fd79df0b680e4fa0813c7b1c16d9caec_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:EduCloud/Overview:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 13,  55 => 11,  53 => 10,  50 => 9,  48 => 8,  45 => 7,  43 => 6,  37 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_my_cloud_overview' %}

{% block main %}
{% if overview.error|default('') %}
  {% include 'TopxiaAdminBundle:EduCloud/Overview:not-access.html.twig' %}
{% elseif overview.enabled == false %}
  {% include 'TopxiaAdminBundle:EduCloud/Overview:disabled.html.twig' %}
{% elseif overview.accessCloud == false or is_trial() %}
  {% include 'TopxiaAdminBundle:EduCloud/Overview:not-access.html.twig' %}
{% else %}
  {% include 'TopxiaAdminBundle:EduCloud/Overview:normal-use.html.twig' %}
{% endif %}
{% endblock %}";
    }
}

<?php

/* expression.twig */
class __TwigTemplate_866026bbb234e5a77566b8a7154a2dce3a8904fed6058c93750b0c7cff74772a extends Twig_Template
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
        $__internal_3156376f20c4c478c65ae74bc3e7c71e26a5c951a2ad5fe810ea15ef830c8328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3156376f20c4c478c65ae74bc3e7c71e26a5c951a2ad5fe810ea15ef830c8328->enter($__internal_3156376f20c4c478c65ae74bc3e7c71e26a5c951a2ad5fe810ea15ef830c8328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "recommended", array()), "html", null, true);
        
        $__internal_3156376f20c4c478c65ae74bc3e7c71e26a5c951a2ad5fe810ea15ef830c8328->leave($__internal_3156376f20c4c478c65ae74bc3e7c71e26a5c951a2ad5fe810ea15ef830c8328_prof);

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
        return "{{ classroom.recommended }}";
    }
}

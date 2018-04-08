<?php

/* expression.twig */
class __TwigTemplate_1097bd5847c2490cc793082427d4c4df0cf1a358bcaefee41376a744923b4312 extends Twig_Template
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
        $__internal_8a0bb77690251b0948b97f8e4187cd727c71f2493933094a979a92cb71cb46d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0bb77690251b0948b97f8e4187cd727c71f2493933094a979a92cb71cb46d7->enter($__internal_8a0bb77690251b0948b97f8e4187cd727c71f2493933094a979a92cb71cb46d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "published"), "html", null, true);
        
        $__internal_8a0bb77690251b0948b97f8e4187cd727c71f2493933094a979a92cb71cb46d7->leave($__internal_8a0bb77690251b0948b97f8e4187cd727c71f2493933094a979a92cb71cb46d7_prof);

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
        return "{{ classroom.status == 'published' }}";
    }
}

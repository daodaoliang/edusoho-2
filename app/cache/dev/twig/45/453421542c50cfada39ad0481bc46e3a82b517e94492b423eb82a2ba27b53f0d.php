<?php

/* expression.twig */
class __TwigTemplate_37cfdaacc8bf55304da99e7aa69f2bad9aa8e121fb6339b478d7e2a55f885b82 extends Twig_Template
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
        $__internal_6a8cee82b6a83a69a186662c1c0d20ad0373398371210993dc665ed0e95f2893 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a8cee82b6a83a69a186662c1c0d20ad0373398371210993dc665ed0e95f2893->enter($__internal_6a8cee82b6a83a69a186662c1c0d20ad0373398371210993dc665ed0e95f2893_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        
        $__internal_6a8cee82b6a83a69a186662c1c0d20ad0373398371210993dc665ed0e95f2893->leave($__internal_6a8cee82b6a83a69a186662c1c0d20ad0373398371210993dc665ed0e95f2893_prof);

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
        return "{{user.id}}";
    }
}

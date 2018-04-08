<?php

/* expression.twig */
class __TwigTemplate_0f75cd828fbd8d8ae2e2b747119af20991053a4b5ada6fdef99fef01374b3c6f extends Twig_Template
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
        $__internal_13e1670284ef62111334e9551b76555096e21a56b7178a6002693f3a25b3394c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13e1670284ef62111334e9551b76555096e21a56b7178a6002693f3a25b3394c->enter($__internal_13e1670284ef62111334e9551b76555096e21a56b7178a6002693f3a25b3394c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "html", null, true);
        
        $__internal_13e1670284ef62111334e9551b76555096e21a56b7178a6002693f3a25b3394c->leave($__internal_13e1670284ef62111334e9551b76555096e21a56b7178a6002693f3a25b3394c_prof);

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
        return "{{classroom.id}}";
    }
}

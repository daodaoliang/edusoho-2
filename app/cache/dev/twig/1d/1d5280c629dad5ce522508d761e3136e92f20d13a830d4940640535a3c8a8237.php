<?php

/* expression.twig */
class __TwigTemplate_d2a519ac2c7db2213b63b359b2abba74d802f93842f1d856c590754ba68cbdf2 extends Twig_Template
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
        $__internal_67a95fb9ab6b0fb6f58a176447b0f5b391c0eb641d319f4c099d08c6baee8fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a95fb9ab6b0fb6f58a176447b0f5b391c0eb641d319f4c099d08c6baee8fdb->enter($__internal_67a95fb9ab6b0fb6f58a176447b0f5b391c0eb641d319f4c099d08c6baee8fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")), "html", null, true);
        
        $__internal_67a95fb9ab6b0fb6f58a176447b0f5b391c0eb641d319f4c099d08c6baee8fdb->leave($__internal_67a95fb9ab6b0fb6f58a176447b0f5b391c0eb641d319f4c099d08c6baee8fdb_prof);

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
        return "{{filter}}";
    }
}

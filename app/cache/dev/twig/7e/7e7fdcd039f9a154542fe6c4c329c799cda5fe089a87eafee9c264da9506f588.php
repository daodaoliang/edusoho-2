<?php

/* expression.twig */
class __TwigTemplate_c1cbe84f212467ee1299bd605083fff1ed6fa97e82277a01ac84d77fe3b8c0c5 extends Twig_Template
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
        $__internal_e5a065a219e732f20a35c47beb049c45479855a454189ca20717a9ddfd8ec842 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5a065a219e732f20a35c47beb049c45479855a454189ca20717a9ddfd8ec842->enter($__internal_e5a065a219e732f20a35c47beb049c45479855a454189ca20717a9ddfd8ec842_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (isset($context["target"]) ? $context["target"] : $this->getContext($context, "target")), "html", null, true);
        
        $__internal_e5a065a219e732f20a35c47beb049c45479855a454189ca20717a9ddfd8ec842->leave($__internal_e5a065a219e732f20a35c47beb049c45479855a454189ca20717a9ddfd8ec842_prof);

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
        return "{{target}}";
    }
}

<?php

/* expression.twig */
class __TwigTemplate_ec492373ad4238886f8d6591dee3e84291d1d435af0e50738486da4813fbdee7 extends Twig_Template
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
        $__internal_f2f414c19dd21317b26bcb7089fc90357587d2135fe4cf048fa75db6698119c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2f414c19dd21317b26bcb7089fc90357587d2135fe4cf048fa75db6698119c0->enter($__internal_f2f414c19dd21317b26bcb7089fc90357587d2135fe4cf048fa75db6698119c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "locked", array()) == 1), "html", null, true);
        
        $__internal_f2f414c19dd21317b26bcb7089fc90357587d2135fe4cf048fa75db6698119c0->leave($__internal_f2f414c19dd21317b26bcb7089fc90357587d2135fe4cf048fa75db6698119c0_prof);

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
        return "{{user.locked == 1}}";
    }
}

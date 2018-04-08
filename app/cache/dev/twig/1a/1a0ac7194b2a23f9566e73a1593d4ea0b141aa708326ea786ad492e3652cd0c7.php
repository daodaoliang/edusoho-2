<?php

/* expression.twig */
class __TwigTemplate_110818d5cbc7491b791a1420d44ac4a21af617bc66c3ee21d5682bc8c5c6171a extends Twig_Template
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
        $__internal_132ef7820b24ad63ba66c98f00b123b2f432bafee9bcfa91fc2ab3121a55816d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_132ef7820b24ad63ba66c98f00b123b2f432bafee9bcfa91fc2ab3121a55816d->enter($__internal_132ef7820b24ad63ba66c98f00b123b2f432bafee9bcfa91fc2ab3121a55816d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "normal") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "parentId", array()) == 0)), "html", null, true);
        
        $__internal_132ef7820b24ad63ba66c98f00b123b2f432bafee9bcfa91fc2ab3121a55816d->leave($__internal_132ef7820b24ad63ba66c98f00b123b2f432bafee9bcfa91fc2ab3121a55816d_prof);

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
        return "{{ course.type == 'normal' and course.parentId == 0 }}";
    }
}

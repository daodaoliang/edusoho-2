<?php

/* expression.twig */
class __TwigTemplate_d49820a578a1588177971dac3b3112cabaffc78a330600baf6c56cacc56064cb extends Twig_Template
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
        $__internal_dedaa5e68b48f89e0029cdd0aa2f3cb42e8b34e578b41731b55c2c61f6951315 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dedaa5e68b48f89e0029cdd0aa2f3cb42e8b34e578b41731b55c2c61f6951315->enter($__internal_dedaa5e68b48f89e0029cdd0aa2f3cb42e8b34e578b41731b55c2c61f6951315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, twig_in_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()), array(0 => "closed", 1 => "draft", 2 => "published")), "html", null, true);
        
        $__internal_dedaa5e68b48f89e0029cdd0aa2f3cb42e8b34e578b41731b55c2c61f6951315->leave($__internal_dedaa5e68b48f89e0029cdd0aa2f3cb42e8b34e578b41731b55c2c61f6951315_prof);

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
        return "{{ course.status in ['closed', 'draft', 'published']}}";
    }
}

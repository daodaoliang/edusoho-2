<?php

/* expression.twig */
class __TwigTemplate_c5ff2b1db745af48486833115d6dcaaaae6367448ab072cbfd7f690f567d3bd8 extends Twig_Template
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
        $__internal_d6263637dd8f92cbc66129ec0a79e4e1ee1000cbf7302c85ac89787d105af25f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6263637dd8f92cbc66129ec0a79e4e1ee1000cbf7302c85ac89787d105af25f->enter($__internal_d6263637dd8f92cbc66129ec0a79e4e1ee1000cbf7302c85ac89787d105af25f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "normal") && $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommended", array())), "html", null, true);
        
        $__internal_d6263637dd8f92cbc66129ec0a79e4e1ee1000cbf7302c85ac89787d105af25f->leave($__internal_d6263637dd8f92cbc66129ec0a79e4e1ee1000cbf7302c85ac89787d105af25f_prof);

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
        return "{{ filter == 'normal' and course.recommended }}";
    }
}

<?php

/* expression.twig */
class __TwigTemplate_a62793a6c54084dccd63e12683c91bf047d40269f479481a02325d2d10197b15 extends Twig_Template
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
        $__internal_be363ee0a9c83c8ea4aab0385c21989a1a03018e873d6d37973a00ad6f8ce2e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be363ee0a9c83c8ea4aab0385c21989a1a03018e873d6d37973a00ad6f8ce2e5->enter($__internal_be363ee0a9c83c8ea4aab0385c21989a1a03018e873d6d37973a00ad6f8ce2e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) == "published"), "html", null, true);
        
        $__internal_be363ee0a9c83c8ea4aab0385c21989a1a03018e873d6d37973a00ad6f8ce2e5->leave($__internal_be363ee0a9c83c8ea4aab0385c21989a1a03018e873d6d37973a00ad6f8ce2e5_prof);

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
        return "{{course.status == 'published'}}";
    }
}

<?php

/* expression.twig */
class __TwigTemplate_6ce953fce44185022b99285f6e05f60fe77e151ed7cc14659a06c4320885a700 extends Twig_Template
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
        $__internal_53fc2c3188649d85898b938e6ad5a8524b38520f10a777c5af1bbbe442bbee38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53fc2c3188649d85898b938e6ad5a8524b38520f10a777c5af1bbbe442bbee38->enter($__internal_53fc2c3188649d85898b938e6ad5a8524b38520f10a777c5af1bbbe442bbee38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) != "published"), "html", null, true);
        
        $__internal_53fc2c3188649d85898b938e6ad5a8524b38520f10a777c5af1bbbe442bbee38->leave($__internal_53fc2c3188649d85898b938e6ad5a8524b38520f10a777c5af1bbbe442bbee38_prof);

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
        return "{{course.status != 'published'}}";
    }
}

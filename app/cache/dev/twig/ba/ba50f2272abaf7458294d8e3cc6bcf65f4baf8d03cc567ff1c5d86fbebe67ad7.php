<?php

/* expression.twig */
class __TwigTemplate_7d199ce9be1aaae1062ca8c49e315010ddcb9498f395320b476bfc27fc87ed35 extends Twig_Template
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
        $__internal_68f6252633eb826b8c1b1be7501e15ee5cdf9d7ace9f55fd87e2feccb53058c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68f6252633eb826b8c1b1be7501e15ee5cdf9d7ace9f55fd87e2feccb53058c7->enter($__internal_68f6252633eb826b8c1b1be7501e15ee5cdf9d7ace9f55fd87e2feccb53058c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()), "html", null, true);
        
        $__internal_68f6252633eb826b8c1b1be7501e15ee5cdf9d7ace9f55fd87e2feccb53058c7->leave($__internal_68f6252633eb826b8c1b1be7501e15ee5cdf9d7ace9f55fd87e2feccb53058c7_prof);

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
        return "{{group.id}}";
    }
}

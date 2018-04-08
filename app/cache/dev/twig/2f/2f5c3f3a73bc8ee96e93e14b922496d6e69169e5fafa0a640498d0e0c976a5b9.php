<?php

/* expression.twig */
class __TwigTemplate_fd9f36c6c7033a60cb1902783390c05383a0f4211a114f786a719fbf12786b82 extends Twig_Template
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
        $__internal_03b540aad713d7692378a08c0e166ab2da74eaf0229c72f006d08cf15ff52e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03b540aad713d7692378a08c0e166ab2da74eaf0229c72f006d08cf15ff52e33->enter($__internal_03b540aad713d7692378a08c0e166ab2da74eaf0229c72f006d08cf15ff52e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "promoted", array()) == 1), "html", null, true);
        
        $__internal_03b540aad713d7692378a08c0e166ab2da74eaf0229c72f006d08cf15ff52e33->leave($__internal_03b540aad713d7692378a08c0e166ab2da74eaf0229c72f006d08cf15ff52e33_prof);

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
        return "{{user.promoted == 1}}";
    }
}

<?php

/* expression.twig */
class __TwigTemplate_86b9d0893fab29e841bb6fb6429d396bc731191d4a69752f3518af3ff6bbfb49 extends Twig_Template
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
        $__internal_c415b084e4dcf91063beb0b4d57b53603e60913080bb91b22a8000fedf9b3803 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c415b084e4dcf91063beb0b4d57b53603e60913080bb91b22a8000fedf9b3803->enter($__internal_c415b084e4dcf91063beb0b4d57b53603e60913080bb91b22a8000fedf9b3803_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.enable_mobile_iap", "0"), "html", null, true);
        
        $__internal_c415b084e4dcf91063beb0b4d57b53603e60913080bb91b22a8000fedf9b3803->leave($__internal_c415b084e4dcf91063beb0b4d57b53603e60913080bb91b22a8000fedf9b3803_prof);

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
        return "{{setting('magic.enable_mobile_iap', '0')}}";
    }
}

<?php

/* expression.twig */
class __TwigTemplate_025aded6616815f5725810c88ebba0319f3b7d2444d2ebbcbd10f9e9b8d228ab extends Twig_Template
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
        $__internal_de7e1b0e01d05fb6a65393644156f4019c7a49bdfc3235cf6e03081b51809cfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de7e1b0e01d05fb6a65393644156f4019c7a49bdfc3235cf6e03081b51809cfb->enter($__internal_de7e1b0e01d05fb6a65393644156f4019c7a49bdfc3235cf6e03081b51809cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getCloudStatus();
        
        $__internal_de7e1b0e01d05fb6a65393644156f4019c7a49bdfc3235cf6e03081b51809cfb->leave($__internal_de7e1b0e01d05fb6a65393644156f4019c7a49bdfc3235cf6e03081b51809cfb_prof);

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
        return "{{cloudStatus()}}";
    }
}

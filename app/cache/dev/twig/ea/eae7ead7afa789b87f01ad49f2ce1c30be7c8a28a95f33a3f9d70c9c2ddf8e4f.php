<?php

/* TopxiaWebBundle:Default:middle-banner.html.twig */
class __TwigTemplate_02e4ee139a52db5e1b1be5f876c2b4debdc7c5b863fb3f1d04b9f3479ac92da0 extends Twig_Template
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
        $__internal_eee2eacc370a895086d5cbae774f6d3fc2fe5728bd6cd9b1adc6825d48bba1b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eee2eacc370a895086d5cbae774f6d3fc2fe5728bd6cd9b1adc6825d48bba1b9->enter($__internal_eee2eacc370a895086d5cbae774f6d3fc2fe5728bd6cd9b1adc6825d48bba1b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Default:middle-banner.html.twig"));

        // line 1
        echo "  <!-- 特性 --> 
  ";
        // line 2
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\BlockExtension')->showBlock("jianmo:middle_banner");
        
        $__internal_eee2eacc370a895086d5cbae774f6d3fc2fe5728bd6cd9b1adc6825d48bba1b9->leave($__internal_eee2eacc370a895086d5cbae774f6d3fc2fe5728bd6cd9b1adc6825d48bba1b9_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:middle-banner.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "  <!-- 特性 --> 
  {{ block_show('jianmo:middle_banner') }}";
    }
}

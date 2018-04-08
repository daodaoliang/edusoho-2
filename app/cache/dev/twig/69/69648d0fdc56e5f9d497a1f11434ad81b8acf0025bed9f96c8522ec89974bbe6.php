<?php

/* TopxiaWebBundle:EsBar:LeftList/wechat-consult.html.twig */
class __TwigTemplate_df10f1c007d02da6ada464d6b973fbd4faa8dda489b6b770978d2f74a052d5f6 extends Twig_Template
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
        $__internal_acabf53a993b557d36ad63d388fd6dd0a1c5db73cc0ec87c1cb9a7f60148d0d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acabf53a993b557d36ad63d388fd6dd0a1c5db73cc0ec87c1cb9a7f60148d0d6->enter($__internal_acabf53a993b557d36ad63d388fd6dd0a1c5db73cc0ec87c1cb9a7f60148d0d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:LeftList/wechat-consult.html.twig"));

        // line 1
        $context["consult"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("consult");
        // line 2
        if ( !twig_test_empty($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "webchatURI", array()))) {
            // line 3
            echo "  <li class=\"popover-btn bar-weixin-btn\" data-container=\".bar-weixin-btn\" data-content-element=\"#bar-weixin-content\">
    <a><i class=\"es-icon es-icon-weixin\"></i></a>
  </li>
";
        }
        
        $__internal_acabf53a993b557d36ad63d388fd6dd0a1c5db73cc0ec87c1cb9a7f60148d0d6->leave($__internal_acabf53a993b557d36ad63d388fd6dd0a1c5db73cc0ec87c1cb9a7f60148d0d6_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/wechat-consult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% set consult = setting('consult') %}
{% if consult.webchatURI is not empty %}
  <li class=\"popover-btn bar-weixin-btn\" data-container=\".bar-weixin-btn\" data-content-element=\"#bar-weixin-content\">
    <a><i class=\"es-icon es-icon-weixin\"></i></a>
  </li>
{% endif %}";
    }
}

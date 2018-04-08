<?php

/* TopxiaWebBundle:EsBar:LeftList/qq-consult.html.twig */
class __TwigTemplate_77c1ee0130916ef605cdbaffc3893e0378340b64944a78355a0c623bf7634546 extends Twig_Template
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
        $__internal_510b0f480c79d819ae8dd355f81c0f835debc0ef36fef165f3ef3247554b7a07 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_510b0f480c79d819ae8dd355f81c0f835debc0ef36fef165f3ef3247554b7a07->enter($__internal_510b0f480c79d819ae8dd355f81c0f835debc0ef36fef165f3ef3247554b7a07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:LeftList/qq-consult.html.twig"));

        // line 1
        $context["consult"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("consult");
        // line 2
        if (( !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qq", array()), 0, array(), "array"), "name", array())) ||  !twig_test_empty($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["consult"]) ? $context["consult"] : $this->getContext($context, "consult")), "qqgroup", array()), 0, array(), "array"), "name", array())))) {
            // line 3
            echo "  <li class=\"popover-btn bar-qq-btn\" data-container=\".bar-qq-btn\" data-title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("QQ客服及QQ群"), "html", null, true);
            echo "\" data-content-element=\"#bar-qq-content\">
    <a><i class=\"es-icon es-icon-qq\"></i></a>
  </li>
";
        }
        
        $__internal_510b0f480c79d819ae8dd355f81c0f835debc0ef36fef165f3ef3247554b7a07->leave($__internal_510b0f480c79d819ae8dd355f81c0f835debc0ef36fef165f3ef3247554b7a07_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/qq-consult.html.twig";
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
{% if consult.qq[0].name is not empty or consult.qqgroup[0].name is not empty %}
  <li class=\"popover-btn bar-qq-btn\" data-container=\".bar-qq-btn\" data-title=\"{{'QQ客服及QQ群'|trans}}\" data-content-element=\"#bar-qq-content\">
    <a><i class=\"es-icon es-icon-qq\"></i></a>
  </li>
{% endif %}";
    }
}

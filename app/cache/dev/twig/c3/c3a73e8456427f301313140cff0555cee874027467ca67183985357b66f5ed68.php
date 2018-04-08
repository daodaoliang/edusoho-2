<?php

/* TopxiaWebBundle:EsBar:left-list.html.twig */
class __TwigTemplate_dd832f7b7bf11cb879a07d3144fc5fae3160f78051678909c35a61364b451f80 extends Twig_Template
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
        $__internal_9177b86a5c525c489ef84f53e121237e2d1fa2574d45d44283596c78a9c5346a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9177b86a5c525c489ef84f53e121237e2d1fa2574d45d44283596c78a9c5346a->enter($__internal_9177b86a5c525c489ef84f53e121237e2d1fa2574d45d44283596c78a9c5346a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:left-list.html.twig"));

        // line 1
        echo "<div class=\"es-bar-menu\">
  <ul class=\"bar-menu-top\">
    ";
        // line 3
        $this->loadTemplate("TopxiaWebBundle:EsBar:LeftList/study-center.html.twig", "TopxiaWebBundle:EsBar:left-list.html.twig", 3)->display($context);
        // line 4
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:EsBar:LeftList/my-learn-result.html.twig", "TopxiaWebBundle:EsBar:left-list.html.twig", 4)->display($context);
        // line 5
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:EsBar:LeftList/my-learn-place.html.twig", "TopxiaWebBundle:EsBar:left-list.html.twig", 5)->display($context);
        // line 6
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:EsBar:LeftList/my-notification.html.twig", "TopxiaWebBundle:EsBar:left-list.html.twig", 6)->display($context);
        // line 7
        echo "  </ul>
  <ul class=\"bar-menu-sns\">
    ";
        // line 9
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("consult.enabled", 0)) {
            // line 10
            echo "      ";
            $this->loadTemplate("TopxiaWebBundle:EsBar:LeftList/qq-consult.html.twig", "TopxiaWebBundle:EsBar:left-list.html.twig", 10)->display($context);
            // line 11
            echo "      ";
            $this->loadTemplate("TopxiaWebBundle:EsBar:LeftList/phone-consult.html.twig", "TopxiaWebBundle:EsBar:left-list.html.twig", 11)->display($context);
            // line 12
            echo "      ";
            $this->loadTemplate("TopxiaWebBundle:EsBar:LeftList/wechat-consult.html.twig", "TopxiaWebBundle:EsBar:left-list.html.twig", 12)->display($context);
            // line 13
            echo "    ";
        }
        // line 14
        echo "
    ";
        // line 15
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("mobile.enabled", 0)) {
            // line 16
            echo "      <li data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("手机端"), "html", null, true);
            echo "\">
        <a href=\"";
            // line 17
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("mobile");
            echo "\" target=\"_blank\"><i class=\"es-icon es-icon-phone1\"></i></a>
      </li>
    ";
        }
        // line 20
        echo "    <li class=\"go-top\" style=\"margin:-10px auto 0 auto;\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回到顶端"), "html", null, true);
        echo "\">
      <a href=\"javascript:;\">
        <i class=\"es-icon es-icon-keyboardarrowup\" style=\"margin-bottom:-8px\"></i>
        <span class=\"text-sm\">TOP</span>
      </a>
    </li>
  </ul>
</div>";
        
        $__internal_9177b86a5c525c489ef84f53e121237e2d1fa2574d45d44283596c78a9c5346a->leave($__internal_9177b86a5c525c489ef84f53e121237e2d1fa2574d45d44283596c78a9c5346a_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:left-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 20,  65 => 17,  60 => 16,  58 => 15,  55 => 14,  52 => 13,  49 => 12,  46 => 11,  43 => 10,  41 => 9,  37 => 7,  34 => 6,  31 => 5,  28 => 4,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"es-bar-menu\">
  <ul class=\"bar-menu-top\">
    {% include 'TopxiaWebBundle:EsBar:LeftList/study-center.html.twig' %}
    {% include 'TopxiaWebBundle:EsBar:LeftList/my-learn-result.html.twig' %}
    {% include 'TopxiaWebBundle:EsBar:LeftList/my-learn-place.html.twig' %}
    {% include 'TopxiaWebBundle:EsBar:LeftList/my-notification.html.twig' %}
  </ul>
  <ul class=\"bar-menu-sns\">
    {% if setting('consult.enabled', 0)  %}
      {% include 'TopxiaWebBundle:EsBar:LeftList/qq-consult.html.twig' %}
      {% include 'TopxiaWebBundle:EsBar:LeftList/phone-consult.html.twig' %}
      {% include 'TopxiaWebBundle:EsBar:LeftList/wechat-consult.html.twig' %}
    {% endif %}

    {% if setting('mobile.enabled', 0) %}
      <li data-toggle=\"tooltip\" data-placement=\"left\" title=\"{{'手机端'|trans}}\">
        <a href=\"{{ path('mobile') }}\" target=\"_blank\"><i class=\"es-icon es-icon-phone1\"></i></a>
      </li>
    {% endif %}
    <li class=\"go-top\" style=\"margin:-10px auto 0 auto;\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"{{'回到顶端'|trans}}\">
      <a href=\"javascript:;\">
        <i class=\"es-icon es-icon-keyboardarrowup\" style=\"margin-bottom:-8px\"></i>
        <span class=\"text-sm\">TOP</span>
      </a>
    </li>
  </ul>
</div>";
    }
}

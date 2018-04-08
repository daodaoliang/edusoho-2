<?php

/* TopxiaWebBundle:EsBar:ListContent/practice.html.twig */
class __TwigTemplate_d49db29abf054e00568faab0dcff72f57836361180d995a5dddf252454f5f5ba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:layout.html.twig", "TopxiaWebBundle:EsBar:ListContent/practice.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
            'myPractice' => array($this, 'block_myPractice'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:EsBar:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b04886daa076dd08a8df4f56996a371966df9b50baafb1c5776a271133ffe67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b04886daa076dd08a8df4f56996a371966df9b50baafb1c5776a271133ffe67->enter($__internal_8b04886daa076dd08a8df4f56996a371966df9b50baafb1c5776a271133ffe67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:ListContent/practice.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b04886daa076dd08a8df4f56996a371966df9b50baafb1c5776a271133ffe67->leave($__internal_8b04886daa076dd08a8df4f56996a371966df9b50baafb1c5776a271133ffe67_prof);

    }

    // line 2
    public function block_esBarTitle($context, array $blocks = array())
    {
        $__internal_2673c7629cf96aebfd40d8f3178c142045611ff13f8c19a15769e1bd426a4935 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2673c7629cf96aebfd40d8f3178c142045611ff13f8c19a15769e1bd426a4935->enter($__internal_2673c7629cf96aebfd40d8f3178c142045611ff13f8c19a15769e1bd426a4935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarTitle"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的考试/作业"), "html", null, true);
        echo "
";
        
        $__internal_2673c7629cf96aebfd40d8f3178c142045611ff13f8c19a15769e1bd426a4935->leave($__internal_2673c7629cf96aebfd40d8f3178c142045611ff13f8c19a15769e1bd426a4935_prof);

    }

    // line 6
    public function block_esBarBody($context, array $blocks = array())
    {
        $__internal_e54e8bc3814743cd263cd41b6b678869e6abd20f64b7c39dd2e600aff5b38099 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e54e8bc3814743cd263cd41b6b678869e6abd20f64b7c39dd2e600aff5b38099->enter($__internal_e54e8bc3814743cd263cd41b6b678869e6abd20f64b7c39dd2e600aff5b38099_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarBody"));

        // line 7
        echo "  <div class=\"text-center\">
    <div class=\"btn-group btn-action\">
      <a href=\"javascript:;\" data-url=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_practice", array("status" => "reviewing"));
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter((isset($context["esBarMenu"]) ? $context["esBarMenu"] : $this->getContext($context, "esBarMenu")), "")) : ("")) != "finished")) {
            echo "active";
        }
        echo "\" id=\"bar-practice-review\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已提交"), "html", null, true);
        echo "</a>
      <a href=\"javascript:;\" data-url=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_practice", array("status" => "finished"));
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter((isset($context["esBarMenu"]) ? $context["esBarMenu"] : $this->getContext($context, "esBarMenu")), "")) : ("")) == "finished")) {
            echo "active";
        }
        echo "\" id=\"bar-practice-finish\"><span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已批阅"), "html", null, true);
        echo "</span></a>
    </div>
  </div>
  <div class=\"bar-homework\">
    ";
        // line 14
        $this->displayBlock('myPractice', $context, $blocks);
        // line 17
        echo "  </div>
";
        
        $__internal_e54e8bc3814743cd263cd41b6b678869e6abd20f64b7c39dd2e600aff5b38099->leave($__internal_e54e8bc3814743cd263cd41b6b678869e6abd20f64b7c39dd2e600aff5b38099_prof);

    }

    // line 14
    public function block_myPractice($context, array $blocks = array())
    {
        $__internal_0647a651bddae5256a7cdd647b791a5e5b4118bfd6999f030760e18a85bad329 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0647a651bddae5256a7cdd647b791a5e5b4118bfd6999f030760e18a85bad329->enter($__internal_0647a651bddae5256a7cdd647b791a5e5b4118bfd6999f030760e18a85bad329_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myPractice"));

        // line 15
        echo "
    ";
        
        $__internal_0647a651bddae5256a7cdd647b791a5e5b4118bfd6999f030760e18a85bad329->leave($__internal_0647a651bddae5256a7cdd647b791a5e5b4118bfd6999f030760e18a85bad329_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/practice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 15,  95 => 14,  87 => 17,  85 => 14,  72 => 10,  62 => 9,  58 => 7,  52 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle:EsBar:layout.html.twig' %}
{% block esBarTitle %}
    {{'我的考试/作业'|trans}}
{% endblock %}

{% block esBarBody %}
  <div class=\"text-center\">
    <div class=\"btn-group btn-action\">
      <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_practice',{status:'reviewing'}) }}\" class=\"btn btn-primary {% if esBarMenu|default('') != 'finished' %}active{% endif %}\" id=\"bar-practice-review\">{{'已提交'|trans}}</a>
      <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_practice',{status:'finished'}) }}\" class=\"btn btn-primary {% if esBarMenu|default('') == 'finished'%}active{% endif %}\" id=\"bar-practice-finish\"><span>{{'已批阅'|trans}}</span></a>
    </div>
  </div>
  <div class=\"bar-homework\">
    {% block myPractice %}

    {% endblock %}
  </div>
{% endblock %}";
    }
}

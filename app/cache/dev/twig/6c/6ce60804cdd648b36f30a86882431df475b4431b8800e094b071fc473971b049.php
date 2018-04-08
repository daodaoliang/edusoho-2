<?php

/* TopxiaWebBundle:EsBar:LeftList/my-learn-result.html.twig */
class __TwigTemplate_e83e420601d7b22e796ddf64f2901cf140a74392462d453a66c93a56da2eb5b2 extends Twig_Template
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
        $__internal_621ed5f05c9ffc16fd40f558245a2d15664646420f22532c5bcdde727582d5cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621ed5f05c9ffc16fd40f558245a2d15664646420f22532c5bcdde727582d5cd->enter($__internal_621ed5f05c9ffc16fd40f558245a2d15664646420f22532c5bcdde727582d5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:LeftList/my-learn-result.html.twig"));

        // line 1
        echo "<li data-id=\"#bar-homework\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的考试/作业"), "html", null, true);
        echo "\"><a href=\"javascript:;\" data-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_practice", array("status" => "reviewing"));
        echo "\"><i class=\"es-icon es-icon-edit\"></i></a></li>";
        
        $__internal_621ed5f05c9ffc16fd40f558245a2d15664646420f22532c5bcdde727582d5cd->leave($__internal_621ed5f05c9ffc16fd40f558245a2d15664646420f22532c5bcdde727582d5cd_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/my-learn-result.html.twig";
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
        return "<li data-id=\"#bar-homework\" data-toggle=\"tooltip\" data-placement=\"left\" title=\"{{'我的考试/作业'|trans}}\"><a href=\"javascript:;\" data-url=\"{{ path('esbar_my_practice',{status:'reviewing'}) }}\"><i class=\"es-icon es-icon-edit\"></i></a></li>";
    }
}

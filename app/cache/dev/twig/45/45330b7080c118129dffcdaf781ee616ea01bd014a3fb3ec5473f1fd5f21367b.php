<?php

/* TopxiaAdminBundle:CourseQuestion:tab.html.twig */
class __TwigTemplate_1d2cd11fa5504c5db670a4c89395bdfbcb33c4285e02290f8c1635ea05cdbb05 extends Twig_Template
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
        $__internal_138a78e1e40c3929fc7fbb2fcadc8e88bc59a1f215be3f791ce62172980d7b3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_138a78e1e40c3929fc7fbb2fcadc8e88bc59a1f215be3f791ce62172980d7b3e->enter($__internal_138a78e1e40c3929fc7fbb2fcadc8e88bc59a1f215be3f791ce62172980d7b3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:CourseQuestion:tab.html.twig"));

        // line 1
        echo "<div class=\"btn-group\">
<a href=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_question", array("postStatus" => "unPosted"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "unPosted")) {
            echo " btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未回复"), "html", null, true);
        echo "</a>

<a href=\" ";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_question", array("postStatus" => "all"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "all")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所有"), "html", null, true);
        echo "</a>
</div>";
        
        $__internal_138a78e1e40c3929fc7fbb2fcadc8e88bc59a1f215be3f791ce62172980d7b3e->leave($__internal_138a78e1e40c3929fc7fbb2fcadc8e88bc59a1f215be3f791ce62172980d7b3e_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseQuestion:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 4,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"btn-group\">
<a href=\"{{ url('admin_question', {postStatus: 'unPosted'}) }}\" type=\"button\" class=\"btn btn-default btn-sm {% if type == 'unPosted'%} btn-primary{% endif %}\">{{'未回复'|trans}}</a>

<a href=\" {{ url('admin_question', {postStatus: 'all'}) }}\" type=\"button\" class=\"btn btn-default btn-sm {% if type == 'all'%}btn-primary{% endif %}\">{{'所有'|trans}}</a>
</div>";
    }
}

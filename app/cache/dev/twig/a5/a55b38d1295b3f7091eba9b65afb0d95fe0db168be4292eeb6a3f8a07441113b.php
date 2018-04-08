<?php

/* TopxiaAdminBundle:Course:tab.html.twig */
class __TwigTemplate_969e036ff99331f0e00c7e1cb9ba2b477a0ffd47a806ac89b6e1f3d63e930543 extends Twig_Template
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
        $__internal_037f03b819faaaabb1492064ef4f47a95933731cdbb050939fbc52dec9dab73f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_037f03b819faaaabb1492064ef4f47a95933731cdbb050939fbc52dec9dab73f->enter($__internal_037f03b819faaaabb1492064ef4f47a95933731cdbb050939fbc52dec9dab73f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Course:tab.html.twig"));

        // line 1
        echo "<div class=\"btn-group\">

\t<a href=\" ";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_course", array("filter" => "normal"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "normal")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("普通课程"), "html", null, true);
        echo "</a>

\t<a href=\" ";
        // line 5
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_course", array("filter" => "classroom"));
        echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "classroom")) {
            echo "btn-primary";
        }
        echo "\">";
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程"), "html", null, true);
        echo "</a>

\t";
        // line 7
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("Vip")) {
            // line 8
            echo "\t\t<a href=\" ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_course", array("filter" => "vip"));
            echo "\" type=\"button\" class=\"btn btn-default btn-sm ";
            if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "vip")) {
                echo "btn-primary";
            }
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员课程"), "html", null, true);
            echo "</a>
\t";
        }
        // line 10
        echo "</div>";
        
        $__internal_037f03b819faaaabb1492064ef4f47a95933731cdbb050939fbc52dec9dab73f->leave($__internal_037f03b819faaaabb1492064ef4f47a95933731cdbb050939fbc52dec9dab73f_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  63 => 10,  51 => 8,  49 => 7,  37 => 5,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"btn-group\">

\t<a href=\" {{ url('admin_course', {filter: 'normal'}) }}\" type=\"button\" class=\"btn btn-default btn-sm {% if filter == 'normal'%}btn-primary{% endif %}\">{{ '普通课程'|trans }}</a>

\t<a href=\" {{ url('admin_course', {filter: 'classroom'}) }}\" type=\"button\" class=\"btn btn-default btn-sm {% if filter == 'classroom' %}btn-primary{% endif %}\">{{setting(\"classroom.name\")|default('班级'|trans)}}{{'课程'|trans}}</a>

\t{% if is_plugin_installed('Vip') %}
\t\t<a href=\" {{ url('admin_course', {filter: 'vip'}) }}\" type=\"button\" class=\"btn btn-default btn-sm {% if filter == 'vip' %}btn-primary{% endif %}\">{{'会员课程'|trans }}</a>
\t{% endif %}
</div>";
    }
}

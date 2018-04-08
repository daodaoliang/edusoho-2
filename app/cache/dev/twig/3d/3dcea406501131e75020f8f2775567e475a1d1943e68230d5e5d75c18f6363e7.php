<?php

/* TopxiaAdminBundle:Category:embed.html.twig */
class __TwigTemplate_44a4f9d86b935038fb92abd36a61e641a538a35a38f44b3a245e4c8d4cae607b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Category:embed.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_209247a4ea0df10a9a16e4a5ba0f7a1031e83dac3514803b266ccc4f248a862b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_209247a4ea0df10a9a16e4a5ba0f7a1031e83dac3514803b266ccc4f248a862b->enter($__internal_209247a4ea0df10a9a16e4a5ba0f7a1031e83dac3514803b266ccc4f248a862b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Category:embed.html.twig"));

        // line 3
        $context["menu"] = ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "admin_course_category_manage")) : ("admin_course_category_manage"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_209247a4ea0df10a9a16e4a5ba0f7a1031e83dac3514803b266ccc4f248a862b->leave($__internal_209247a4ea0df10a9a16e4a5ba0f7a1031e83dac3514803b266ccc4f248a862b_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_ed379c7cfd9b84a36b941cf5825bd7190c0078714bb9f5446b390ab0ccdd3ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed379c7cfd9b84a36b941cf5825bd7190c0078714bb9f5446b390ab0ccdd3ea9->enter($__internal_ed379c7cfd9b84a36b941cf5825bd7190c0078714bb9f5446b390ab0ccdd3ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
  <ul class=\"list-table\" id=\"category-table\" style=\"margin-bottom: 0\">
    <li class=\"th\">
      <div class=\"row\">
        <div class=\"td col-md-7\">";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称"), "html", null, true);
        echo "</div>
        <div class=\"td col-md-2\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编码"), "html", null, true);
        echo "</div>
        <div class=\"td col-md-3\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</div>
      </div>
    </li>
    ";
        // line 15
        $this->loadTemplate("TopxiaAdminBundle:Category:tbody.html.twig", "TopxiaAdminBundle:Category:embed.html.twig", 15)->display($context);
        // line 16
        echo "  </ul>
";
        
        $__internal_ed379c7cfd9b84a36b941cf5825bd7190c0078714bb9f5446b390ab0ccdd3ea9->leave($__internal_ed379c7cfd9b84a36b941cf5825bd7190c0078714bb9f5446b390ab0ccdd3ea9_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Category:embed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 16,  63 => 15,  57 => 12,  53 => 11,  49 => 10,  43 => 6,  37 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = menu|default('admin_course_category_manage') %}

{% block main %}

  <ul class=\"list-table\" id=\"category-table\" style=\"margin-bottom: 0\">
    <li class=\"th\">
      <div class=\"row\">
        <div class=\"td col-md-7\">{{'名称'|trans}}</div>
        <div class=\"td col-md-2\">{{'编码'|trans}}</div>
        <div class=\"td col-md-3\">{{'操作'|trans}}</div>
      </div>
    </li>
    {% include 'TopxiaAdminBundle:Category:tbody.html.twig' %}
  </ul>
{% endblock %}";
    }
}

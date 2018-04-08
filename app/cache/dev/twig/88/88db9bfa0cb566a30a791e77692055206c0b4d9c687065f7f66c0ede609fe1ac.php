<?php

/* TopxiaAdminBundle:Teacher:index.html.twig */
class __TwigTemplate_ada3ee0002d617018cb0eea8096d7c57c18e2d3dc07c5cae38967bedb1a3940e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Teacher:index.html.twig", 1);
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
        $__internal_6b7a0142db152fceb27e0289db4535eac648478b9d8b4f5f10e9121c18d9eeb0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b7a0142db152fceb27e0289db4535eac648478b9d8b4f5f10e9121c18d9eeb0->enter($__internal_6b7a0142db152fceb27e0289db4535eac648478b9d8b4f5f10e9121c18d9eeb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Teacher:index.html.twig"));

        // line 3
        $context["menu"] = "admin_teacher_manage";
        // line 5
        $context["script_controller"] = "teacher/teacher-list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6b7a0142db152fceb27e0289db4535eac648478b9d8b4f5f10e9121c18d9eeb0->leave($__internal_6b7a0142db152fceb27e0289db4535eac648478b9d8b4f5f10e9121c18d9eeb0_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_cfd4396bd4778994e589d9c1638c6a7cbb0308f4fbccdf9978de543ccfa30233 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cfd4396bd4778994e589d9c1638c6a7cbb0308f4fbccdf9978de543ccfa30233->enter($__internal_cfd4396bd4778994e589d9c1638c6a7cbb0308f4fbccdf9978de543ccfa30233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "<form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
  ";
        // line 9
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:Teacher:index.html.twig", 9)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 10
        echo "  
  <div class=\"form-group\">
    <input type=\"text\" name=\"nickname\" class=\"form-control\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名"), "html", null, true);
        echo "\">
  </div>

  <button class=\"btn btn-primary\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>

</form>
<table id=\"teacher-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
  <thead>
    <tr>
      <th>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名"), "html", null, true);
        echo "</th>
      ";
        // line 22
        $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:Teacher:index.html.twig", 22)->display($context);
        // line 23
        echo "      <th width=\"30%\" >";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推荐教师"), "html", null, true);
        echo "</th>
      <th>";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近登录"), "html", null, true);
        echo "</th>
      <th>";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 29
        if ((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users"))) {
            // line 30
            echo "      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 31
                echo "        ";
                $this->loadTemplate("TopxiaAdminBundle:Teacher:tr.html.twig", "TopxiaAdminBundle:Teacher:index.html.twig", 31)->display(array_merge($context, array("user" => $context["user"])));
                // line 32
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 33
            echo "    ";
        } else {
            // line 34
            echo "       <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无教师记录"), "html", null, true);
            echo "</div></td></tr>
    ";
        }
        // line 36
        echo "  </tbody>
</table>
 ";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo " 
";
        
        $__internal_cfd4396bd4778994e589d9c1638c6a7cbb0308f4fbccdf9978de543ccfa30233->leave($__internal_cfd4396bd4778994e589d9c1638c6a7cbb0308f4fbccdf9978de543ccfa30233_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Teacher:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 38,  139 => 36,  133 => 34,  130 => 33,  116 => 32,  113 => 31,  95 => 30,  93 => 29,  86 => 25,  82 => 24,  77 => 23,  75 => 22,  71 => 21,  62 => 15,  54 => 12,  50 => 10,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_teacher_manage' %}

{% set script_controller = 'teacher/teacher-list' %}

{% block main %}
<form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
  {% include 'OrgBundle:Org:org-tree-select.html.twig' with {orgCode: app.request.get('orgCode'), modal: 'list'} %}
  
  <div class=\"form-group\">
    <input type=\"text\" name=\"nickname\" class=\"form-control\" value=\"{{ app.request.query.get('nickname') }}\" placeholder=\"{{'用户名'|trans}}\">
  </div>

  <button class=\"btn btn-primary\">{{'搜索'|trans}}</button>

</form>
<table id=\"teacher-table\" class=\"table table-striped table-hover\" data-search-form=\"#user-search-form\">
  <thead>
    <tr>
      <th>{{'用户名'|trans}}</th>
      {% include 'OrgBundle:Org/Parts:table-thead-tr.html.twig' %}
      <th width=\"30%\" >{{'推荐教师'|trans}}</th>
      <th>{{'最近登录'|trans}}</th>
      <th>{{'操作'|trans}}</th>
    </tr>
  </thead>
  <tbody>
    {% if users %}
      {% for user in users %}
        {% include 'TopxiaAdminBundle:Teacher:tr.html.twig' with {user:user} %}
      {% endfor %}
    {% else %}
       <tr><td colspan=\"20\"><div class=\"empty\">{{'暂无教师记录'|trans}}</div></td></tr>
    {% endif %}
  </tbody>
</table>
 {{ admin_macro.paginator(paginator) }} 
{% endblock %}";
    }
}

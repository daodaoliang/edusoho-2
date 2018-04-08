<?php

/* ClassroomBundle:ClassroomAdmin:index.html.twig */
class __TwigTemplate_584adcfecd243412fe6328a525fa88044f297cabc4b66c77655a6a71d1458238 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 1);
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
        $__internal_b357f70060080a911792ba790845d971bdf3511df00dd61c6795b6f1bb2650b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b357f70060080a911792ba790845d971bdf3511df00dd61c6795b6f1bb2650b7->enter($__internal_b357f70060080a911792ba790845d971bdf3511df00dd61c6795b6f1bb2650b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClassroomBundle:ClassroomAdmin:index.html.twig"));

        // line 3
        $context["menu"] = "admin_classroom_manage";
        // line 5
        $context["script_controller"] = "classroombundle/controller/classroom-admin/classroom";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b357f70060080a911792ba790845d971bdf3511df00dd61c6795b6f1bb2650b7->leave($__internal_b357f70060080a911792ba790845d971bdf3511df00dd61c6795b6f1bb2650b7_prof);

    }

    // line 6
    public function block_main($context, array $blocks = array())
    {
        $__internal_ed65bfae96dad22e71481dee326102066c4ef96d5f30ce3668e7602bb07f93df = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ed65bfae96dad22e71481dee326102066c4ef96d5f30ce3668e7602bb07f93df->enter($__internal_ed65bfae96dad22e71481dee326102066c4ef96d5f30ce3668e7602bb07f93df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 7
        echo "
  <form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    ";
        // line 9
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 9)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 10
        echo "
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%name%名称", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo "\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
    ";
        // line 16
        $this->loadTemplate("TopxiaAdminBundle:Widget:tooltip-widget.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 16)->display(array_merge($context, array("icon" => "glyphicon-question-sign", "content" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级说明Tooltip"), "placement" => "left")));
        // line 17
        echo "
  </form>
  ";
        // line 19
        if ((isset($context["classroomInfo"]) ? $context["classroomInfo"] : $this->getContext($context, "classroomInfo"))) {
            // line 20
            echo "  <table class=\"table table-striped table-hover\" id=\"classroom-table\">
    <thead>
    <tr>
      <th>";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%title%编号", array("%title%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("calssroom.title"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "</th>
      <th width=\"25%\">";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%name%名称", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "</th>
      ";
            // line 25
            $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 25)->display($context);
            // line 26
            echo "      <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程数"), "html", null, true);
            echo "</th>
      <th>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员数"), "html", null, true);
            echo "</th>
      <th width=\"15%\">";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格"), "html", null, true);
            echo "</th>
      <th>";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
            echo "</th>
      <th>";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
            echo "</th>
    </tr>
    </thead>
    <tbody>

   ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["classroomInfo"]) ? $context["classroomInfo"] : $this->getContext($context, "classroomInfo")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["classroom"]) {
                // line 36
                echo "      ";
                $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["classroom"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["classroom"], "categoryId", array()), array(), "array"), null)) : (null));
                // line 37
                echo "      ";
                $this->loadTemplate("ClassroomBundle:ClassroomAdmin:table-tr.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 37)->display(array_merge($context, array("classroom" => $context["classroom"], "category" => (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")))));
                // line 38
                echo "
   ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['classroom'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo "
    </tbody>

  </table>
  ";
        } else {
            // line 45
            echo "    <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无%name%信息!", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
            echo "</div>
  ";
        }
        // line 47
        echo "  ";
        $this->loadTemplate("OrgBundle:Org:batch-update-org-btn.html.twig", "ClassroomBundle:ClassroomAdmin:index.html.twig", 47)->display(array_merge($context, array("module" => "classroom", "formId" => "classroom-table")));
        // line 48
        echo "  <div class=\"pull-right\">
   ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
  </div>


";
        
        $__internal_ed65bfae96dad22e71481dee326102066c4ef96d5f30ce3668e7602bb07f93df->leave($__internal_ed65bfae96dad22e71481dee326102066c4ef96d5f30ce3668e7602bb07f93df_prof);

    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 49,  169 => 48,  166 => 47,  160 => 45,  153 => 40,  138 => 38,  135 => 37,  132 => 36,  115 => 35,  107 => 30,  103 => 29,  99 => 28,  95 => 27,  90 => 26,  88 => 25,  84 => 24,  80 => 23,  75 => 20,  73 => 19,  69 => 17,  67 => 16,  63 => 15,  55 => 12,  51 => 10,  49 => 9,  45 => 7,  39 => 6,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_classroom_manage' %}

{% set script_controller='classroombundle/controller/classroom-admin/classroom' %}
{% block main %}

  <form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    {% include 'OrgBundle:Org:org-tree-select.html.twig' with {orgCode: app.request.get('orgCode'), modal: 'list'} %}

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"{{'%name%名称'|trans({'%name%':setting('classroom.name')|default('班级'|trans)})}}\" name=\"title\" value=\"{{ app.request.get('title') }}\">
    </div>

    <button class=\"btn btn-primary\">{{'搜索'|trans}}</button>
    {% include 'TopxiaAdminBundle:Widget:tooltip-widget.html.twig' with { icon: 'glyphicon-question-sign', content: '班级说明Tooltip'|trans|raw, placement: 'left'} %}

  </form>
  {% if classroomInfo%}
  <table class=\"table table-striped table-hover\" id=\"classroom-table\">
    <thead>
    <tr>
      <th>{{'%title%编号'|trans({'%title%':setting('calssroom.title')|default('班级'|trans)}) }}</th>
      <th width=\"25%\">{{'%name%名称'|trans({'%name%':setting('classroom.name')|default('班级'|trans)})}}</th>
      {% include 'OrgBundle:Org/Parts:table-thead-tr.html.twig' %}
      <th>{{'课程数'|trans}}</th>
      <th>{{'学员数'|trans}}</th>
      <th width=\"15%\">{{'价格'|trans}}</th>
      <th>{{'状态'|trans}}</th>
      <th>{{'操作'|trans}}</th>
    </tr>
    </thead>
    <tbody>

   {% for classroom in classroomInfo %}
      {% set category = categories[classroom.categoryId]|default(null) %}
      {% include 'ClassroomBundle:ClassroomAdmin:table-tr.html.twig' with {classroom:classroom,category:category} %}

   {% endfor %}

    </tbody>

  </table>
  {% else %}
    <div class=\"empty\">{{'暂无%name%信息!'|trans({'%name%':setting('classroom.name')|default('班级'|trans)})}}</div>
  {% endif %}
  {% include 'OrgBundle:Org:batch-update-org-btn.html.twig' with {module:'classroom', formId:'classroom-table'} %}
  <div class=\"pull-right\">
   {{ web_macro.paginator(paginator) }}
  </div>


{% endblock %}";
    }
}

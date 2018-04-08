<?php

/* TopxiaAdminBundle:Course:tr.html.twig */
class __TwigTemplate_ca5967db9f32436141e955fab0c3b966e08b7ee6b579a95ce5f1d6a68c11321d extends Twig_Template
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
        $__internal_a36123bd597912ec77bc047ceafd5aa524485199c5381fd60cee8e102ef6a13a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a36123bd597912ec77bc047ceafd5aa524485199c5381fd60cee8e102ef6a13a->enter($__internal_a36123bd597912ec77bc047ceafd5aa524485199c5381fd60cee8e102ef6a13a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Course:tr.html.twig"));

        // line 1
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Course:tr.html.twig", 1);
        // line 2
        $context["dict_macro"] = $this->loadTemplate("TopxiaWebBundle:Common:data-dict-macro.html.twig", "TopxiaAdminBundle:Course:tr.html.twig", 2);
        // line 3
        $context["target"] = (("" . (isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter"))) . "_index");
        // line 4
        echo "<tr id=\"course-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        echo "\">
  ";
        // line 5
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-checkbox.html.twig", "TopxiaAdminBundle:Course:tr.html.twig", 5)->display($context);
        // line 6
        echo "  <td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        echo "</td>
  <td>
    <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\"><strong>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "</strong></a>
    
    ";
        // line 10
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "live") || ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "liveOpen"))) {
            // line 11
            echo "      <span class=\"label label-success live-label mls\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播"), "html", null, true);
            echo "</span>
    ";
        }
        // line 13
        echo "
    ";
        // line 14
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "classroom")) {
            // line 15
            echo "      ";
            $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), array(), "array"), null)) : (null));
            // line 16
            echo "      ";
            if ( !(isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom"))) {
                // line 17
                echo "        <span class=\"label label-danger live-label mls\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已移除"), "html", null, true);
                echo "</span>
      ";
            }
            // line 19
            echo "    ";
        }
        // line 20
        echo "    <br>
    <span class=\"text-muted text-sm\">";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分类："), "html", null, true);
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "--")) : ("--")), "html", null, true);
        echo "</span>
    ";
        // line 22
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommended", array())) {
            // line 23
            echo "      <span class=\"label label-default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("荐:"), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommendedTime", array()), "Y-m-d"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("序号:"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "recommendedSeq", array()), "html", null, true);
            echo "</span>
    ";
        }
        // line 25
        echo "
  </td>
  <td>";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()), "html", null, true);
        echo "</td>
  ";
        // line 28
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:Course:tr.html.twig", 28)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "orgCode", array()))));
        // line 29
        echo "  ";
        if ((((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) != "open") && ((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) != "liveOpen"))) {
            // line 30
            echo "    <td>
      ";
            // line 31
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "serializeMode", array()) == "none")) {
                // line 32
                echo "      <span class=\"text-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("非连载课程"), "html", null, true);
                echo "</span>
      ";
            } elseif (($this->getAttribute(            // line 33
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "serializeMode", array()) == "serialize")) {
                // line 34
                echo "      <span class=\"text-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("连载中"), "html", null, true);
                echo "</span>
      ";
            } elseif (($this->getAttribute(            // line 35
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "serializeMode", array()) == "finished")) {
                // line 36
                echo "      <span class=\"text-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已完结"), "html", null, true);
                echo "</span>
      ";
            }
            // line 38
            echo "    </td>
    ";
            // line 39
            if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "classroom")) {
                // line 40
                echo "    <td>
      ";
                // line 41
                $context["classroom"] = (($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classrooms"]) ? $context["classrooms"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), array(), "array"), null)) : (null));
                // line 42
                echo "      ";
                if ((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom"))) {
                    // line 43
                    echo "        <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "classroomId", array()))), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "classroomTitle", array()), "html", null, true);
                    echo "</a>
      ";
                }
                // line 45
                echo "    </td>
    ";
            } else {
                // line 47
                echo "      <td>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "studentNum", array()), "html", null, true);
                echo "</td>
    ";
            }
            // line 49
            echo "    ";
            if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "vip")) {
                // line 50
                echo "        ";
                $context["vip"] = (($this->getAttribute((isset($context["vips"]) ? $context["vips"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "vipLevelId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["vips"]) ? $context["vips"] : null), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "vipLevelId", array()), array(), "array"), null)) : (null));
                // line 51
                echo "        <td>";
                if ((isset($context["vip"]) ? $context["vip"] : $this->getContext($context, "vip"))) {
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["vip"]) ? $context["vip"] : $this->getContext($context, "vip")), "name", array()), "html", null, true);
                } else {
                    echo "该会员等级已删除";
                }
                echo "</td>
   
    ";
            }
            // line 54
            echo "  ";
        }
        // line 55
        echo "
  <td> ";
        // line 56
        echo $context["dict_macro"]->getcourseStatus($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()));
        echo "</td>
  <td>
    ";
        // line 58
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        echo "
    <br>
    <span class=\"text-muted text-sm\">";
        // line 60
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "createdTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</span>
  </td>
  <td>
    <div class=\"btn-group\">
      ";
        // line 64
        if ($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->hasPermission("admin_course_content_manage")) {
            // line 65
            echo "        <a class=\"btn btn-default btn-sm\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
            echo "</a>
      ";
        }
        // line 67
        echo "
      ";
        // line 68
        $this->loadTemplate("PermissionBundle:Templates:group-button.html.twig", "TopxiaAdminBundle:Course:tr.html.twig", 68)->display(array_merge($context, array("parentCode" => "admin_course_manage", "group" => "groupButton", "course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")))));
        // line 69
        echo "    </div>
  </td>
</tr>";
        
        $__internal_a36123bd597912ec77bc047ceafd5aa524485199c5381fd60cee8e102ef6a13a->leave($__internal_a36123bd597912ec77bc047ceafd5aa524485199c5381fd60cee8e102ef6a13a_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 69,  218 => 68,  215 => 67,  207 => 65,  205 => 64,  198 => 60,  193 => 58,  188 => 56,  185 => 55,  182 => 54,  171 => 51,  168 => 50,  165 => 49,  159 => 47,  155 => 45,  147 => 43,  144 => 42,  142 => 41,  139 => 40,  137 => 39,  134 => 38,  128 => 36,  126 => 35,  121 => 34,  119 => 33,  114 => 32,  112 => 31,  109 => 30,  106 => 29,  104 => 28,  100 => 27,  96 => 25,  86 => 23,  84 => 22,  79 => 21,  76 => 20,  73 => 19,  67 => 17,  64 => 16,  61 => 15,  59 => 14,  56 => 13,  50 => 11,  48 => 10,  41 => 8,  35 => 6,  33 => 5,  28 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% import \"TopxiaAdminBundle::macro.html.twig\" as admin_macro %}
{% import \"TopxiaWebBundle:Common:data-dict-macro.html.twig\" as dict_macro %}
{% set target = ''~filter~'_index' %}
<tr id=\"course-tr-{{ course.id }}\">
  {% include 'OrgBundle:Org/Parts:table-body-checkbox.html.twig' %}
  <td>{{ course.id }}</td>
  <td>
    <a href=\"{{ path('course_show', {id:course.id}) }}\" target=\"_blank\"><strong>{{ course.title }}</strong></a>
    
    {% if course.type == 'live' or course.type == 'liveOpen' %}
      <span class=\"label label-success live-label mls\">{{'直播'|trans}}</span>
    {% endif %}

    {% if filter == 'classroom' %}
      {% set classroom = classrooms[course.id]|default(null) %}
      {% if not classroom %}
        <span class=\"label label-danger live-label mls\">{{'已移除'|trans}}</span>
      {% endif %}
    {% endif %}
    <br>
    <span class=\"text-muted text-sm\">{{'分类：'|trans}}{{ category.name|default('--') }}</span>
    {% if course.recommended %}
      <span class=\"label label-default\">{{'荐:'|trans}}{{ course.recommendedTime|date('Y-m-d') }} / {{'序号:'|trans}}{{ course.recommendedSeq }}</span>
    {% endif %}

  </td>
  <td>{{ course.originPrice }}</td>
  {% include 'OrgBundle:Org/Parts:table-body-td.html.twig' with {orgCode: course.orgCode}%}
  {% if filter != 'open' and filter != 'liveOpen' %}
    <td>
      {% if  course.serializeMode ==\"none\" %}
      <span class=\"text-info\">{{'非连载课程'|trans}}</span>
      {% elseif course.serializeMode ==\"serialize\" %}
      <span class=\"text-info\">{{'连载中'|trans}}</span>
      {% elseif course.serializeMode ==\"finished\" %}
      <span class=\"text-info\">{{'已完结'|trans}}</span>
      {% endif %}
    </td>
    {% if filter == 'classroom' %}
    <td>
      {% set classroom = classrooms[course.id]|default(null) %}
      {% if classroom %}
        <a href=\"{{path('classroom_show',{id:classroom.classroomId})}}\" target=\"_blank\">{{classroom.classroomTitle}}</a>
      {% endif %}
    </td>
    {% else %}
      <td>{{ course.studentNum }}</td>
    {% endif %}
    {% if filter == 'vip' %}
        {% set vip = vips[course.vipLevelId]|default(null) %}
        <td>{% if vip %}{{ vip.name }}{% else %}该会员等级已删除{% endif %}</td>
   
    {% endif %}
  {% endif %}

  <td> {{ dict_macro.courseStatus( course.status) }}</td>
  <td>
    {{ admin_macro.user_link(user) }}
    <br>
    <span class=\"text-muted text-sm\">{{ course.createdTime|date('Y-n-d H:i') }}</span>
  </td>
  <td>
    <div class=\"btn-group\">
      {% if has_permission('admin_course_content_manage') %}
        <a class=\"btn btn-default btn-sm\" href=\"{{ path('course_manage', {id:course.id}) }}\" target=\"_blank\">{{'管理'|trans}}</a>
      {% endif %}

      {% include 'PermissionBundle:Templates:group-button.html.twig' with {parentCode: 'admin_course_manage', group:'groupButton', course: course} %}
    </div>
  </td>
</tr>";
    }
}

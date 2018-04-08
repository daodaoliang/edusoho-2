<?php

/* TopxiaWebBundle:CourseStudentManage:index.html.twig */
class __TwigTemplate_c762d119baf22f39d0d38364f647e49f5f73e334d875f15ad17dfe62812d3d6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseManage:layout.html.twig", "TopxiaWebBundle:CourseStudentManage:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'main' => array($this, 'block_main'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f818e79bd204db9d730d56c11c57bf68554d8375d51f7f5022c73d1782706ff5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f818e79bd204db9d730d56c11c57bf68554d8375d51f7f5022c73d1782706ff5->enter($__internal_f818e79bd204db9d730d56c11c57bf68554d8375d51f7f5022c73d1782706ff5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:CourseStudentManage:index.html.twig"));

        // line 5
        $context["side_nav"] = "students";
        // line 6
        $context["script_controller"] = "course-manage/students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f818e79bd204db9d730d56c11c57bf68554d8375d51f7f5022c73d1782706ff5->leave($__internal_f818e79bd204db9d730d56c11c57bf68554d8375d51f7f5022c73d1782706ff5_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d08d210a3fd94aebccff01630b934e00099e165ae4e00dc2aaf396fb5a5a9be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d08d210a3fd94aebccff01630b934e00099e165ae4e00dc2aaf396fb5a5a9be->enter($__internal_4d08d210a3fd94aebccff01630b934e00099e165ae4e00dc2aaf396fb5a5a9be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_4d08d210a3fd94aebccff01630b934e00099e165ae4e00dc2aaf396fb5a5a9be->leave($__internal_4d08d210a3fd94aebccff01630b934e00099e165ae4e00dc2aaf396fb5a5a9be_prof);

    }

    // line 8
    public function block_main($context, array $blocks = array())
    {
        $__internal_e67e6ab007619ac0cdaa29b385d9df926ee3be3b07ef1e7475317b07b696c384 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e67e6ab007619ac0cdaa29b385d9df926ee3be3b07ef1e7475317b07b696c384->enter($__internal_e67e6ab007619ac0cdaa29b385d9df926ee3be3b07ef1e7475317b07b696c384_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 9
        echo "  <div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
  ";
        // line 11
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
        }
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
        echo "
  ";
        // line 12
        if (((isset($context["role"]) ? $context["role"] : $this->getContext($context, "role")) == "student")) {
            // line 13
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method") || $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("course.teacher_export_student", false))) {
                // line 14
                echo "      <a class=\"btn btn-info btn-sm pull-right mhs\" id=\"export-students-btn\" href=\"javascript:;\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_student_export_csv", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "role" => "student")), "html", null, true);
                echo "\" data-datas-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_student_export_datas", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\" data-loading-text=\"正在导出\"><i
            class=\"glyphicon glyphicon-export\"></i> ";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("导出"), "html", null, true);
                if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
                }
                // line 16
                echo "      </a>
    ";
            }
            // line 18
            echo "    ";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method") || $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("course.teacher_manage_student", 0))) {
                // line 19
                echo "
      ";
                // line 20
                if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) == "published")) {
                    // line 21
                    echo "        <a class=\"btn btn-info pull-right btn-sm mhs\" data-toggle=\"modal\" data-target=\"#modal\"
           data-url=\"";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("importer_index", array("type" => "course-member", "courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                    echo "\"><i
              class=\"glyphicon glyphicon-import\"></i> ";
                    // line 23
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("批量导入"), "html", null, true);
                    echo "</a>
      ";
                } else {
                    // line 25
                    echo "        <a class=\"btn btn-info pull-right btn-sm mhs\" disabled data-toggle=\"tooltip\" data-placement=\"top\"
           title=\"";
                    // line 26
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程未发布,不可导入学员"), "html", null, true);
                    echo "\"><i class=\"glyphicon glyphicon-import\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("批量导入"), "html", null, true);
                    echo "</a>

      ";
                }
                // line 29
                echo "      <button class=\"btn btn-info btn-sm pull-right mhs\" id=\"student-add-btn\" data-toggle=\"modal\" data-target=\"#modal\"
              data-url=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_student_create", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\"><i
            class=\"glyphicon glyphicon-plus\"></i> ";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加"), "html", null, true);
                if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name")) {
                    echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
                }
                // line 32
                echo "      </button>
    ";
            }
            // line 34
            echo "    </div>

    <div class=\"panel-body\">
      <ul class=\"nav nav-tabs mbl\">
        <li class=\"";
            // line 38
            if ((((array_key_exists("submenu", $context)) ? (_twig_default_filter((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")))) : ("")) == "student")) {
                echo "active";
            }
            echo "\">
          <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_students", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正式学员"), "html", null, true);
            echo "
          </a>
        </li>

        <li class=\"";
            // line 43
            if ((((array_key_exists("submenu", $context)) ? (_twig_default_filter((isset($context["submenu"]) ? $context["submenu"] : $this->getContext($context, "submenu")))) : ("")) == "record")) {
                echo "active";
            }
            echo "\">
          <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_record", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退出记录"), "html", null, true);
            echo "
          </a>
        </li>
      </ul>

      ";
            // line 49
            $this->displayBlock('maincontent', $context, $blocks);
            // line 50
            echo "    </div>
    </div>
  ";
        }
        
        $__internal_e67e6ab007619ac0cdaa29b385d9df926ee3be3b07ef1e7475317b07b696c384->leave($__internal_e67e6ab007619ac0cdaa29b385d9df926ee3be3b07ef1e7475317b07b696c384_prof);

    }

    // line 49
    public function block_maincontent($context, array $blocks = array())
    {
        $__internal_244c9a46b71cdac5cad97e5dc4958b33ab1ab549ae5e311bc591a6824d308af3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_244c9a46b71cdac5cad97e5dc4958b33ab1ab549ae5e311bc591a6824d308af3->enter($__internal_244c9a46b71cdac5cad97e5dc4958b33ab1ab549ae5e311bc591a6824d308af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontent"));

        
        $__internal_244c9a46b71cdac5cad97e5dc4958b33ab1ab549ae5e311bc591a6824d308af3->leave($__internal_244c9a46b71cdac5cad97e5dc4958b33ab1ab549ae5e311bc591a6824d308af3_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 49,  190 => 50,  188 => 49,  178 => 44,  172 => 43,  163 => 39,  157 => 38,  151 => 34,  147 => 32,  140 => 31,  136 => 30,  133 => 29,  125 => 26,  122 => 25,  117 => 23,  113 => 22,  110 => 21,  108 => 20,  105 => 19,  102 => 18,  98 => 16,  91 => 15,  84 => 14,  81 => 13,  79 => 12,  70 => 11,  66 => 9,  60 => 8,  41 => 3,  34 => 1,  32 => 6,  30 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle:CourseManage:layout.html.twig' %}

{% block title %}{% if setting('default.user_name') %}{{ setting('default.user_name')|default('学员'|trans) }}{% else %}{{ '学员'|trans }}{% endif %}{{ '管理'|trans }} - {{ parent() }}{% endblock %}

{% set side_nav = 'students' %}
{% set script_controller = 'course-manage/students' %}

{% block main %}
  <div class=\"panel panel-default panel-col\">
  <div class=\"panel-heading\">
  {% if setting('default.user_name') %}{{ setting('default.user_name')|default('学员'|trans) }}{% else %}{{ '学员'|trans }}{% endif %}{{ '管理'|trans }}
  {% if role == 'student' %}
    {% if app.user.isAdmin() or setting('course.teacher_export_student', false) %}
      <a class=\"btn btn-info btn-sm pull-right mhs\" id=\"export-students-btn\" href=\"javascript:;\" data-url=\"{{ path('course_manage_student_export_csv', {id:course.id,role:'student'}) }}\" data-datas-url=\"{{ path('course_manage_student_export_datas', {id:course.id}) }}\" data-loading-text=\"正在导出\"><i
            class=\"glyphicon glyphicon-export\"></i> {{ '导出'|trans }}{% if setting('default.user_name') %}{{ setting('default.user_name')|default('学员'|trans) }}{% else %}{{ '学员'|trans }}{% endif %}
      </a>
    {% endif %}
    {% if app.user.isAdmin() or setting('course.teacher_manage_student', 0) %}

      {% if course.status == 'published' %}
        <a class=\"btn btn-info pull-right btn-sm mhs\" data-toggle=\"modal\" data-target=\"#modal\"
           data-url=\"{{ path('importer_index', {type: 'course-member', courseId:course.id}) }}\"><i
              class=\"glyphicon glyphicon-import\"></i> {{ '批量导入'|trans }}</a>
      {% else %}
        <a class=\"btn btn-info pull-right btn-sm mhs\" disabled data-toggle=\"tooltip\" data-placement=\"top\"
           title=\"{{ '课程未发布,不可导入学员'|trans }}\"><i class=\"glyphicon glyphicon-import\"></i> {{ '批量导入'|trans }}</a>

      {% endif %}
      <button class=\"btn btn-info btn-sm pull-right mhs\" id=\"student-add-btn\" data-toggle=\"modal\" data-target=\"#modal\"
              data-url=\"{{ path('course_manage_student_create', {id:course.id}) }}\"><i
            class=\"glyphicon glyphicon-plus\"></i> {{ '添加'|trans }}{% if setting('default.user_name') %}{{ setting('default.user_name')|default('学员'|trans) }}{% else %}{{ '学员'|trans }}{% endif %}
      </button>
    {% endif %}
    </div>

    <div class=\"panel-body\">
      <ul class=\"nav nav-tabs mbl\">
        <li class=\"{% if submenu|default() == 'student' %}active{% endif %}\">
          <a href=\"{{ path('course_manage_students',{id:course.id}) }}\">{{ '正式学员'|trans }}
          </a>
        </li>

        <li class=\"{% if submenu|default() == 'record' %}active{% endif %}\">
          <a href=\"{{ path('course_manage_record',{id:course.id}) }}\">{{ '退出记录'|trans }}
          </a>
        </li>
      </ul>

      {% block maincontent %}{% endblock %}
    </div>
    </div>
  {% endif %}
{% endblock %}";
    }
}

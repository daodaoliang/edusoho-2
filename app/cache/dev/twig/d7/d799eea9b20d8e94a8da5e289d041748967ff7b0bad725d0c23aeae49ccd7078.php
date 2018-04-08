<?php

/* TopxiaWebBundle:Course:header.html.twig */
class __TwigTemplate_6700b49c1c38ee67808cda0aa2ebd94be53f88439bd56b139c2cc9782011175c extends Twig_Template
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
        $__internal_7e6fcef60d34ec9aa2ed6680e1c808d4a71e22d78ad5b1ac65f20583bc48ddad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7e6fcef60d34ec9aa2ed6680e1c808d4a71e22d78ad5b1ac65f20583bc48ddad->enter($__internal_7e6fcef60d34ec9aa2ed6680e1c808d4a71e22d78ad5b1ac65f20583bc48ddad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Course:header.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:header.html.twig", 1);
        // line 2
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("course-manage/header"), "html", null, true);
        echo "
<div class=\"es-section course-manage-header clearfix\">
  <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">
    <img class=\"picture\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "largePicture", array()), "course.png"), "html", null, true);
        echo "\" />
  </a>
  <h1 class=\"title\">
    ";
        // line 8
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) != "normal")) {
            // line 9
            echo "      [";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("courseType"), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()), array(), "array"), "html", null, true);
            echo "]
    ";
        }
        // line 11
        echo "    <a class=\"link-dark\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "</a>
    ";
        // line 12
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) == "closed")) {
            // line 13
            echo "      <span class=\"label label-danger \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 14
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) == "draft")) {
            // line 15
            echo "      <span class=\"label label-warning \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 16
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) == "published")) {
            // line 17
            echo "      ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "serializeMode", array()) == "serialize")) {
                // line 18
                echo "        <span class=\"label label-success \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更新中"), "html", null, true);
                echo "</span>
      ";
            } elseif (($this->getAttribute(            // line 19
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "serializeMode", array()) == "finished")) {
                // line 20
                echo "        <span class=\"label label-warning \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已完结"), "html", null, true);
                echo "</span>
      ";
            }
            // line 22
            echo "    ";
        }
        // line 23
        echo "  </h1>

  <div class=\"teachers\">
    ";
        // line 26
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array()), null)) : (null))) {
            // line 27
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教师："), "html", null, true);
            echo "
      ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "teacherIds", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 29
                echo "        ";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $context["id"], array(), "array");
                // line 30
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nickname", array()), "html", null, true);
                echo "</a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
        }
        // line 33
        echo "  </div>

  <div class=\"toolbar hidden-xs\">
    ";
        // line 36
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) == "published")) {
            // line 37
            echo "      <div class=\"btn-group\">
        <a class=\"btn btn-default btn-sm\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("返回课程主页"), "html", null, true);
            echo "</a>
      </div>
    ";
        }
        // line 41
        echo "
    <div class=\"btn-group\">
      <button class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("预览"), "html", null, true);
        echo " <span class=\"caret\"></span></button>
      <ul class=\"dropdown-menu pull-right\">
        <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "previewAs" => "member")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作为 已购买用户"), "html", null, true);
        echo "</a></li>
        <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "previewAs" => "guest")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作为 未购买用户"), "html", null, true);
        echo "</a></li>
      </ul>
    </div>

    ";
        // line 50
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) != "published")) {
            // line 51
            echo "      <div class=\"btn-group\">
        <button class=\"btn btn-success btn-sm course-publish-btn\" data-url=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_publish", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发布课程"), "html", null, true);
            echo "</button>
      </div>
    ";
        }
        // line 55
        echo "  </div>
</div>
";
        // line 57
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "status", array()) == "closed")) {
            // line 58
            echo "<div class=\"alert alert-warning\">课程已关闭，在有效期内的学员仍可正常学习，若不希望学员继续学习，需在【学员管理】中移除学员。</div>
";
        }
        
        $__internal_7e6fcef60d34ec9aa2ed6680e1c808d4a71e22d78ad5b1ac65f20583bc48ddad->leave($__internal_7e6fcef60d34ec9aa2ed6680e1c808d4a71e22d78ad5b1ac65f20583bc48ddad_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 58,  182 => 57,  178 => 55,  170 => 52,  167 => 51,  165 => 50,  156 => 46,  150 => 45,  145 => 43,  141 => 41,  133 => 38,  130 => 37,  128 => 36,  123 => 33,  120 => 32,  109 => 30,  106 => 29,  102 => 28,  97 => 27,  95 => 26,  90 => 23,  87 => 22,  81 => 20,  79 => 19,  74 => 18,  71 => 17,  69 => 16,  64 => 15,  62 => 14,  57 => 13,  55 => 12,  48 => 11,  42 => 9,  40 => 8,  34 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% import \"TopxiaWebBundle::macro.html.twig\" as web_macro %}
 {{ load_script('course-manage/header') }}
<div class=\"es-section course-manage-header clearfix\">
  <a href=\"{{ path('course_show', {id:course.id}) }}\">
    <img class=\"picture\" src=\"{{ filepath(course.largePicture, 'course.png') }}\" />
  </a>
  <h1 class=\"title\">
    {% if course.type != 'normal' %}
      [{{ dict('courseType')[course.type] }}]
    {% endif %}
    <a class=\"link-dark\" href=\"{{ path('course_show', {id:course.id}) }}\">{{ course.title }}</a>
    {% if course.status=='closed' %}
      <span class=\"label label-danger \">{{'已关闭'|trans}}</span>
    {% elseif course.status=='draft' %}
      <span class=\"label label-warning \">{{'未发布'|trans}}</span>
    {% elseif course.status=='published' %}
      {% if course.serializeMode=='serialize' %}
        <span class=\"label label-success \">{{'更新中'|trans}}</span>
      {% elseif course.serializeMode=='finished' %}
        <span class=\"label label-warning \">{{'已完结'|trans}}</span>
      {% endif %}
    {% endif %}
  </h1>

  <div class=\"teachers\">
    {% if course.teacherIds|default(null) %}
      {{'教师：'|trans}}
      {% for id in course.teacherIds %}
        {% set user = users[id] %}
        <a href=\"{{ path('user_show',  {id:user.id}) }}\" >{{ user.nickname }}</a>
      {% endfor %}
    {% endif  %}
  </div>

  <div class=\"toolbar hidden-xs\">
    {% if course.status == 'published' %}
      <div class=\"btn-group\">
        <a class=\"btn btn-default btn-sm\" href=\"{{ path('course_show', {id:course.id}) }}\">{{'返回课程主页'|trans}}</a>
      </div>
    {% endif %}

    <div class=\"btn-group\">
      <button class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">{{'预览'|trans}} <span class=\"caret\"></span></button>
      <ul class=\"dropdown-menu pull-right\">
        <li><a href=\"{{ path('course_show', {id:course.id, previewAs:'member'}) }}\" target=\"_blank\">{{'作为 已购买用户'|trans}}</a></li>
        <li><a href=\"{{ path('course_show', {id:course.id, previewAs:'guest'}) }}\" target=\"_blank\">{{'作为 未购买用户'|trans}}</a></li>
      </ul>
    </div>

    {% if course.status != 'published' %}
      <div class=\"btn-group\">
        <button class=\"btn btn-success btn-sm course-publish-btn\" data-url=\"{{ path('course_manage_publish', {id:course.id}) }}\">{{'发布课程'|trans}}</button>
      </div>
    {% endif %}
  </div>
</div>
{% if course.status == 'closed' %}
<div class=\"alert alert-warning\">课程已关闭，在有效期内的学员仍可正常学习，若不希望学员继续学习，需在【学员管理】中移除学员。</div>
{% endif %}";
    }
}

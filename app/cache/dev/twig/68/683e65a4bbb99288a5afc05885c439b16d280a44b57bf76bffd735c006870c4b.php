<?php

/* TopxiaWebBundle:LiveCourse:live-course-all-list.html.twig */
class __TwigTemplate_79558f5d89422201c0c6e68b2303fb421beaa4dfe91e3483d1be215cad0fd47e extends Twig_Template
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
        $__internal_504ae2bb2160cae656f7591ea40bd47484bf25e4cf415ce5cbd04bb860c21f29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_504ae2bb2160cae656f7591ea40bd47484bf25e4cf415ce5cbd04bb860c21f29->enter($__internal_504ae2bb2160cae656f7591ea40bd47484bf25e4cf415ce5cbd04bb860c21f29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:LiveCourse:live-course-all-list.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:LiveCourse:live-course-all-list.html.twig", 1);
        // line 2
        echo "<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <form id=\"live-search-form\" class=\"form-inline\" action=\"";
        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("live_course_explore");
        echo "\" method=\"get\" novalidate=\"\">
      <div class=\"form-group mrl\">
        <select style=\"width:150px;\" class=\"form-control\" name=\"categoryId\" id=\"categoryId\">
          ";
        // line 7
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "get", array(0 => "categoryId"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程分类"));
        echo "
        </select>
      </div>
      <div class=\"form-group\">
        <select style=\"width:150px;\" class=\"form-control\" name=\"vipCategoryId\" id=\"vipCategoryId\">
          <option value=\"\">";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员课程"), "html", null, true);
        echo "</option>
          ";
        // line 13
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["levels"]) ? $context["levels"] : $this->getContext($context, "levels")));
        foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
            if ($context["level"]) {
                // line 14
                echo "            <option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "id", array()), "html", null, true);
                echo "\" ";
                if (($this->getAttribute($context["level"], "id", array()) == $this->getAttribute($this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "query", array()), "get", array(0 => "vipCategoryId"), "method"))) {
                    echo "selected";
                }
                echo ">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["level"], "name", array()), "html", null, true);
                echo "</option>
          ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "        </select>
      </div>
    </form>
  </div>

  <div class=\"panel-body  es-live-all\">
    ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liveCourses"]) ? $context["liveCourses"] : $this->getContext($context, "liveCourses")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            if ($context["course"]) {
                // line 23
                echo "      <div class=\"media\">
        <div class=\"media-left\">
          ";
                // line 25
                if (((twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute($context["course"], "liveStartTime", array())) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute($context["course"], "liveEndTime", array())))) {
                    // line 26
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_learn", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "#lesson/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "lessonId", array()), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                    echo "\" target=\"_blank\">
          ";
                } else {
                    // line 28
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                    echo "\" target=\"_blank\">
          ";
                }
                // line 30
                echo "            ";
                echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeLazyImg($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute($context["course"], "middlePicture", array()), "course.png"), "img-responsive", $this->getAttribute($context["course"], "title", array()));
                echo "
            ";
                // line 31
                if ($this->getAttribute($context["course"], "recommended", array())) {
                    // line 32
                    echo "              <span class=\"re-live\"></span>
            ";
                }
                // line 34
                echo "            ";
                if (((twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute($context["course"], "liveStartTime", array())) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute($context["course"], "liveEndTime", array())))) {
                    // line 35
                    echo "              <span class=\"re-report\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在直播 今天"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["course"], "liveStartTime", array()), "H:i"), "html", null, true);
                    echo "</span>
            ";
                } elseif (((twig_date_format_filter($this->env, "now", "U") < $this->getAttribute(                // line 36
$context["course"], "liveStartTime", array())) && (twig_date_format_filter($this->env, $this->getAttribute($context["course"], "liveStartTime", array()), "Y-m-d") == twig_date_format_filter($this->env, "now", "Y-m-d")))) {
                    // line 37
                    echo "              <span class=\"re-report\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("即将直播"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["course"], "liveStartTime", array()), "m-d H:i"), "html", null, true);
                    echo "</span>
            ";
                } elseif (((twig_date_format_filter($this->env, "now", "U") < $this->getAttribute(                // line 38
$context["course"], "liveStartTime", array())) && (twig_date_format_filter($this->env, $this->getAttribute($context["course"], "liveStartTime", array()), "Y-m-d") != twig_date_format_filter($this->env, "now", "Y-m-d")))) {
                    // line 39
                    echo "              <span class=\"re-report\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播预告"), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["course"], "liveStartTime", array()), "m-d H:i"), "html", null, true);
                    echo "</span>
            ";
                }
                // line 41
                echo "          </a>
        </div>
        <div class=\"media-body\">
          <div class=\"title mbm\">
            ";
                // line 45
                if (((twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute($context["course"], "liveStartTime", array())) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute($context["course"], "liveEndTime", array())))) {
                    // line 46
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_learn", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "#lesson/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "lessonId", array()), "html", null, true);
                    echo "\" class=\"gray-darker\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 48
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\"  class=\"gray-darker\" title=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                    echo "</a>
            ";
                }
                // line 50
                echo "          </div>


          <div class=\"metas\">
            <span class=\"num prl\"><i class=\"es-icon es-icon-people prm\"></i>";
                // line 54
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "studentNum", array()), "html", null, true);
                echo "</span>
            <span class=\"comment\"><i class=\"es-icon es-icon-textsms prm\"></i>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "ratingNum", array()), "html", null, true);
                echo "</span>
          </div>
          <div class=\"user\">
            ";
                // line 58
                if ((($this->getAttribute($context["course"], "teacherIds", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "teacherIds", array()), null)) : (null))) {
                    // line 59
                    echo "              ";
                    $context["user"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("User", array("userId" => $this->getAttribute($this->getAttribute($context["course"], "teacherIds", array()), 0, array(), "array")));
                    // line 60
                    echo "              ";
                    echo $context["web_macro"]->getuser_avatar((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mrm", "avatar-xs");
                    echo "
              ";
                    // line 61
                    echo $context["web_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "link-light");
                    echo "
            ";
                }
                // line 63
                echo "          </div>
          <div class=\"other\">
            ";
                // line 65
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:LiveCourse:live-course-all-list.html.twig", 65)->display(array_merge($context, array("shows" => "price")));
                // line 66
                echo "
            ";
                // line 67
                if (((twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute($context["course"], "liveStartTime", array())) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute($context["course"], "liveEndTime", array())))) {
                    // line 68
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_learn", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "#lesson/";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "lessonId", array()), "html", null, true);
                    echo "\" class=\"btn btn-warning\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("进入直播"), "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 70
                    echo "              <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-primary\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看回放"), "html", null, true);
                    echo "</a>
            ";
                }
                // line 72
                echo "
          </div>
        </div>
      </div>
    ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 77
            echo "      <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无直播课程"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "
    ";
        // line 80
        echo $context["web_macro"]->getpaginator((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")));
        echo "

  </div>
</div>
";
        // line 84
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("live-course/list");
        
        $__internal_504ae2bb2160cae656f7591ea40bd47484bf25e4cf415ce5cbd04bb860c21f29->leave($__internal_504ae2bb2160cae656f7591ea40bd47484bf25e4cf415ce5cbd04bb860c21f29_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LiveCourse:live-course-all-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 84,  266 => 80,  263 => 79,  254 => 77,  241 => 72,  233 => 70,  223 => 68,  221 => 67,  218 => 66,  216 => 65,  212 => 63,  207 => 61,  202 => 60,  199 => 59,  197 => 58,  191 => 55,  187 => 54,  181 => 50,  171 => 48,  159 => 46,  157 => 45,  151 => 41,  143 => 39,  141 => 38,  134 => 37,  132 => 36,  125 => 35,  122 => 34,  118 => 32,  116 => 31,  111 => 30,  103 => 28,  93 => 26,  91 => 25,  87 => 23,  75 => 22,  67 => 16,  51 => 14,  46 => 13,  42 => 12,  34 => 7,  28 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% import 'TopxiaWebBundle::macro.html.twig' as web_macro %}
<div class=\"panel panel-default\">
  <div class=\"panel-heading\">
    <form id=\"live-search-form\" class=\"form-inline\" action=\"{{ path('live_course_explore') }}\" method=\"get\" novalidate=\"\">
      <div class=\"form-group mrl\">
        <select style=\"width:150px;\" class=\"form-control\" name=\"categoryId\" id=\"categoryId\">
          {{ select_options(category_choices('course'), request.query.get('categoryId'), '课程分类'|trans) }}
        </select>
      </div>
      <div class=\"form-group\">
        <select style=\"width:150px;\" class=\"form-control\" name=\"vipCategoryId\" id=\"vipCategoryId\">
          <option value=\"\">{{'会员课程'|trans}}</option>
          {% for level in levels if level %}
            <option value=\"{{ level.id }}\" {% if level.id == request.query.get('vipCategoryId') %}selected{% endif %}>{{ level.name }}</option>
          {% endfor %}
        </select>
      </div>
    </form>
  </div>

  <div class=\"panel-body  es-live-all\">
    {% for course in liveCourses if course %}
      <div class=\"media\">
        <div class=\"media-left\">
          {% if (\"now\"|date(\"U\") >= course.liveStartTime and \"now\"|date(\"U\") <= course.liveEndTime) %}
            <a href=\"{{ path('course_learn', {id:course.id}) }}#lesson/{{course.lessonId}}\" title=\"{{ course.title }}\" target=\"_blank\">
          {% else %}
            <a href=\"{{ path('course_show',{id:course.id}) }}\" title=\"{{ course.title }}\" target=\"_blank\">
          {% endif %}
            {{ lazy_img(filepath(course.middlePicture, 'course.png'), 'img-responsive', course.title) }}
            {% if course.recommended %}
              <span class=\"re-live\"></span>
            {% endif %}
            {% if \"now\"|date(\"U\") >= course.liveStartTime and \"now\"|date(\"U\") <= course.liveEndTime %}
              <span class=\"re-report\">{{'正在直播 今天'|trans}} {{ course.liveStartTime|date('H:i')}}</span>
            {% elseif \"now\"|date(\"U\") < course.liveStartTime and course.liveStartTime|date('Y-m-d') == \"now\"|date('Y-m-d') %}
              <span class=\"re-report\">{{'即将直播'|trans}} {{ course.liveStartTime|date('m-d H:i')}}</span>
            {% elseif \"now\"|date(\"U\") < course.liveStartTime and course.liveStartTime|date('Y-m-d') != \"now\"|date('Y-m-d') %}
              <span class=\"re-report\">{{'直播预告'|trans}} {{ course.liveStartTime|date('m-d H:i')}}</span>
            {% endif %}
          </a>
        </div>
        <div class=\"media-body\">
          <div class=\"title mbm\">
            {% if (\"now\"|date(\"U\") >= course.liveStartTime and \"now\"|date(\"U\") <= course.liveEndTime) %}
              <a href=\"{{ path('course_learn', {id:course.id}) }}#lesson/{{course.lessonId}}\" class=\"gray-darker\" title=\"{{ course.title }}\" target=\"_blank\">{{ course.title }}</a>
            {% else %}
              <a href=\"{{ path('course_show',{id:course.id}) }}\"  class=\"gray-darker\" title=\"{{ course.title }}\" target=\"_blank\">{{ course.title }}</a>
            {% endif %}
          </div>


          <div class=\"metas\">
            <span class=\"num prl\"><i class=\"es-icon es-icon-people prm\"></i>{{ course.studentNum }}</span>
            <span class=\"comment\"><i class=\"es-icon es-icon-textsms prm\"></i>{{ course.ratingNum }}</span>
          </div>
          <div class=\"user\">
            {% if course.teacherIds|default(null) %}
              {% set user = data('User',{userId:course.teacherIds[0]}) %}
              {{ web_macro.user_avatar(user, 'mrm','avatar-xs') }}
              {{ web_macro.user_link(user, 'link-light') }}
            {% endif %}
          </div>
          <div class=\"other\">
            {% include 'TopxiaWebBundle:Course:Widget/course-price.html.twig' with {shows:'price'} %}

            {% if (\"now\"|date(\"U\") >= course.liveStartTime and \"now\"|date(\"U\") <= course.liveEndTime) %}
              <a href=\"{{ path('course_learn', {id:course.id}) }}#lesson/{{course.lessonId}}\" class=\"btn btn-warning\" target=\"_blank\">{{'进入直播'|trans}}</a>
            {% else %}
              <a href=\"{{ path('course_show',{id:course.id}) }}\" class=\"btn btn-primary\" target=\"_blank\">{{'查看回放'|trans}}</a>
            {% endif %}

          </div>
        </div>
      </div>
    {% else %}
      <div class=\"empty\">{{'暂无直播课程'|trans}}</div>
    {% endfor %}

    {{ web_macro.paginator(paginator) }}

  </div>
</div>
{% do load_script('live-course/list') %}";
    }
}

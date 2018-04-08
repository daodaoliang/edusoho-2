<?php

/* TopxiaAdminBundle:CourseReview:index.html.twig */
class __TwigTemplate_2412d56fc0a93c284b3dc8a71a6eacb28bdb64d5baac117501a4ef2e5e64a258 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:CourseReview:index.html.twig", 1);
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
        $__internal_df31fa7ed25e3aef16f5217114233e01e76ca7084d5af6436ee1769c8940c742 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df31fa7ed25e3aef16f5217114233e01e76ca7084d5af6436ee1769c8940c742->enter($__internal_df31fa7ed25e3aef16f5217114233e01e76ca7084d5af6436ee1769c8940c742_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:CourseReview:index.html.twig"));

        // line 3
        $context["script_controller"] = "review/list";
        // line 5
        $context["menu"] = "admin_course_review_tab";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df31fa7ed25e3aef16f5217114233e01e76ca7084d5af6436ee1769c8940c742->leave($__internal_df31fa7ed25e3aef16f5217114233e01e76ca7084d5af6436ee1769c8940c742_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_bd6beea1914bce4661fa848b1760f4933ae130d26d294e78f6d3ab31bf68e756 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bd6beea1914bce4661fa848b1760f4933ae130d26d294e78f6d3ab31bf68e756->enter($__internal_bd6beea1914bce4661fa848b1760f4933ae130d26d294e78f6d3ab31bf68e756_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
  <form id=\"review-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate> 

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"rating\">
        ";
        // line 13
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions(array(1 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("1星"), 2 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("2星"), 3 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("3星"), 4 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("4星"), 5 => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("5星")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "rating"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评分"));
        echo "
      </select>
    </div>

   ";
        // line 20
        echo "    
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程名"), "html", null, true);
        echo "\" name=\"courseTitle\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "courseTitle"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作者"), "html", null, true);
        echo "\" name=\"author\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "author"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评价内容关键词"), "html", null, true);
        echo "\" name=\"content\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "content"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
  </form>

  <div id=\"review-table-container\">
    <table class=\"table table-striped table-hover\" id=\"review-table\">
      <thead>
        <tr>
          <th width=\"4%\"><input type=\"checkbox\"  data-role=\"batch-select\"></th>
          <th width=\"55%\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评价内容"), "html", null, true);
        echo "</th>
          <th width=\"8\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评分"), "html", null, true);
        echo "</th>
          <th width=\"15%\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作者"), "html", null, true);
        echo "</th>
          <th width=\"10%\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("完成进度"), "html", null, true);
        echo "</th>
          <th width=\"8%\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
        </tr>
      </thead>
      <tbody>
        ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reviews"]) ? $context["reviews"] : $this->getContext($context, "reviews")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["review"]) {
            // line 50
            echo "          ";
            $context["author"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["review"], "userId", array()), array(), "array"), null)) : (null));
            // line 51
            echo "          ";
            $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["review"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["review"], "courseId", array()), array(), "array"), null)) : (null));
            // line 52
            echo "          <tr id=\"review-table-tr-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "id", array()), "html", null, true);
            echo "\" data-role=\"item\">
            <td><input type=\"checkbox\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "id", array()), "html", null, true);
            echo "\" data-role=\"batch-item\"></td>
            <td>
              <div class=\"short-long-text\">
                <div class=\"short-text\">
                  ";
            // line 57
            echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute($context["review"], "content", array()), 60);
            echo " <span class=\"text-muted trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("展开"), "html", null, true);
            echo ")</span>
                </div>
                <div class=\"long-text\">";
            // line 59
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute($context["review"], "content", array()), "html", null, true));
            echo " <span class=\"text-muted trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收起"), "html", null, true);
            echo ")</span></div>
              </div>
              <div class=\"mts\">
                ";
            // line 62
            if ((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))) {
                // line 63
                echo "                  <a class=\"text-success text-sm\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["review"], "courseId", array()))), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")), $this->getAttribute($context["review"], "courseId", array()), array(), "array"), "title", array()), "html", null, true);
                echo "</a>
                ";
            } else {
                // line 65
                echo "                  <span class=\"text-muted text-sm\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程已删除"), "html", null, true);
                echo "</span>
                ";
            }
            // line 67
            echo "              </div>
            </td>
            <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["review"], "rating", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("星"), "html", null, true);
            echo "</td>
            <td>
              ";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "user_link", array(0 => (isset($context["author"]) ? $context["author"] : $this->getContext($context, "author"))), "method"), "html", null, true);
            echo "<br>
              <span class=\"text-muted\">";
            // line 72
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["review"], "createdTime", array()), "Y-n-d H:i"), "html", null, true);
            echo "</span>
            </td>
            <td>";
            // line 74
            if ($this->getAttribute($context["review"], "meta", array())) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["review"], "meta", array()), "learnedNum", array()), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["review"], "meta", array()), "lessonNum", array()), "html", null, true);
                echo " ";
            }
            echo "</td>
            <td>
              <button class=\"btn btn-default btn-sm\" data-role=\"item-delete\" data-name=\"";
            // line 76
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评价"), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_review_delete", array("id" => $this->getAttribute($context["review"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</button>
            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            echo "          <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无评价记录"), "html", null, true);
            echo "</div></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['review'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        echo "      </tbody>
    </table>

    <div>
      <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全选"), "html", null, true);
        echo "</label>
      <button class=\"btn btn-default btn-sm mlm\" data-url=\"";
        // line 87
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_review_batch_delete");
        echo "\" data-role=\"batch-delete\" data-name=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("评价"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
    </div>
  </div>

  ";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
        
        $__internal_bd6beea1914bce4661fa848b1760f4933ae130d26d294e78f6d3ab31bf68e756->leave($__internal_bd6beea1914bce4661fa848b1760f4933ae130d26d294e78f6d3ab31bf68e756_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseReview:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  250 => 91,  239 => 87,  235 => 86,  229 => 82,  220 => 80,  207 => 76,  196 => 74,  191 => 72,  187 => 71,  181 => 69,  177 => 67,  171 => 65,  163 => 63,  161 => 62,  153 => 59,  146 => 57,  139 => 53,  134 => 52,  131 => 51,  128 => 50,  123 => 49,  116 => 45,  112 => 44,  108 => 43,  104 => 42,  100 => 41,  89 => 33,  81 => 30,  72 => 26,  63 => 22,  59 => 20,  52 => 13,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set script_controller = 'review/list' %}

{% set menu = 'admin_course_review_tab' %}

{% block main %}

  <form id=\"review-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate> 

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"rating\">
        {{ select_options({1:'1星'|trans, 2:'2星'|trans, 3:'3星'|trans, 4:'4星'|trans, 5:'5星'|trans}, app.request.get('rating'), '评分'|trans) }}
      </select>
    </div>

   {#  <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"课程编号\" name=\"courseId\" value=\"{{ app.request.get('courseId') }}\">
    </div> #}
    
    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"{{'课程名'|trans}}\" name=\"courseTitle\" value=\"{{ app.request.get('courseTitle') }}\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"{{'作者'|trans}}\" name=\"author\" value=\"{{ app.request.get('author') }}\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"{{'评价内容关键词'|trans}}\" name=\"content\" value=\"{{ app.request.get('content') }}\">
    </div>

    <button class=\"btn btn-primary\">{{'搜索'|trans}}</button>
  </form>

  <div id=\"review-table-container\">
    <table class=\"table table-striped table-hover\" id=\"review-table\">
      <thead>
        <tr>
          <th width=\"4%\"><input type=\"checkbox\"  data-role=\"batch-select\"></th>
          <th width=\"55%\">{{'评价内容'|trans}}</th>
          <th width=\"8\">{{'评分'|trans}}</th>
          <th width=\"15%\">{{'作者'|trans}}</th>
          <th width=\"10%\">{{'完成进度'|trans}}</th>
          <th width=\"8%\">{{'操作'|trans}}</th>
        </tr>
      </thead>
      <tbody>
        {% for review in reviews %}
          {% set author = users[review.userId]|default(null) %}
          {% set course = courses[review.courseId]|default(null) %}
          <tr id=\"review-table-tr-{{review.id}}\" data-role=\"item\">
            <td><input type=\"checkbox\" value=\"{{review.id}}\" data-role=\"batch-item\"></td>
            <td>
              <div class=\"short-long-text\">
                <div class=\"short-text\">
                  {{ review.content|plain_text(60) }} <span class=\"text-muted trigger\">({{'展开'|trans}})</span>
                </div>
                <div class=\"long-text\">{{ review.content|nl2br }} <span class=\"text-muted trigger\">({{'收起'|trans}})</span></div>
              </div>
              <div class=\"mts\">
                {% if course %}
                  <a class=\"text-success text-sm\" href=\"{{ path('course_show', {id:review.courseId}) }}\" target=\"_blank\">{{ courses[review.courseId].title }}</a>
                {% else %}
                  <span class=\"text-muted text-sm\">{{'课程已删除'|trans}}</span>
                {% endif %}
              </div>
            </td>
            <td>{{ review.rating }}{{'星'|trans}}</td>
            <td>
              {{ admin_macro.user_link(author) }}<br>
              <span class=\"text-muted\">{{review.createdTime|date('Y-n-d H:i')}}</span>
            </td>
            <td>{% if review.meta %} {{ review.meta.learnedNum }}/{{ review.meta.lessonNum }} {% endif %}</td>
            <td>
              <button class=\"btn btn-default btn-sm\" data-role=\"item-delete\" data-name=\"{{'评价'|trans}}\" data-url=\"{{ path('admin_review_delete', {id:review.id}) }}\">{{'删除'|trans}}</button>
            </td>
          </tr>
        {% else %}
          <tr><td colspan=\"20\"><div class=\"empty\">{{'暂无评价记录'|trans}}</div></td></tr>
        {% endfor %}
      </tbody>
    </table>

    <div>
      <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> {{'全选'|trans}}</label>
      <button class=\"btn btn-default btn-sm mlm\" data-url=\"{{ path('admin_review_batch_delete') }}\" data-role=\"batch-delete\" data-name=\"{{ '评价'|trans }}\">{{'删除'|trans}}</button>
    </div>
  </div>

  {{ admin_macro.paginator(paginator) }}

{% endblock %}
";
    }
}

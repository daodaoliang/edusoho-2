<?php

/* TopxiaAdminBundle:Course:index.html.twig */
class __TwigTemplate_daca163564a6fa605a08370fa201c80b14b9daa9b7021ab63e91b83ca0c3803a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 1);
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
        $__internal_7929c773f52cd9f476e76fb0c06f8e9e9088c8d8368158d28f239ccdd9ab1fd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7929c773f52cd9f476e76fb0c06f8e9e9088c8d8368158d28f239ccdd9ab1fd1->enter($__internal_7929c773f52cd9f476e76fb0c06f8e9e9088c8d8368158d28f239ccdd9ab1fd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Course:index.html.twig"));

        // line 3
        $context["menu"] = "admin_course_manage";
        // line 5
        $context["script_controller"] = "course/manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7929c773f52cd9f476e76fb0c06f8e9e9088c8d8368158d28f239ccdd9ab1fd1->leave($__internal_7929c773f52cd9f476e76fb0c06f8e9e9088c8d8368158d28f239ccdd9ab1fd1_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_bb9889a894f126b666277e62c388bfa52005ceab9c0c0059752f0d6980637c16 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb9889a894f126b666277e62c388bfa52005ceab9c0c0059752f0d6980637c16->enter($__internal_bb9889a894f126b666277e62c388bfa52005ceab9c0c0059752f0d6980637c16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:Course:tab.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 8)->display($context);
        // line 9
        echo "  <br>
  <div class=\"well well-sm mtl\">
    <form id=\"message-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate>
      ";
        // line 12
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 12)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 13
        echo "
      <div class=\"form-group\">
        <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
          ";
        // line 16
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程分类"));
        echo "
        </select>
      </div>
      <div class=\"form-group\">
        <select class=\"form-control\" name=\"status\">
          ";
        // line 21
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("courseStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "status"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程状态"));
        echo "
        </select>
      </div>
      ";
        // line 24
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "normal")) {
            // line 25
            echo "        <div class=\"form-group\">
          <select style=\"max-width:150px;\" class=\"form-control\" name=\"chargeStatus\">
            ";
            // line 27
            echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions(array("free" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费课程"), "charge" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收费课程")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "chargeStatus"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收费状态"));
            echo "
        </select>
        </div>
      ";
        }
        // line 31
        echo "
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标题"), "html", null, true);
        echo "\" name=\"title\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建者"), "html", null, true);
        echo "\" name=\"creator\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "creator"), "method"), "html", null, true);
        echo "\">
      </div>
      <button class=\"btn btn-primary\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>

      ";
        // line 40
        $this->loadTemplate("TopxiaAdminBundle:Widget:tooltip-widget.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 40)->display(array_merge($context, array("icon" => "glyphicon-question-sign", "content" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程说明Tooltip"), "placement" => "left")));
        // line 41
        echo "    </form>
  </div>
  
  <p class=\"text-muted\">
    <span class=\"mrl\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程："), "html", null, true);
        echo "<strong class=\"inflow-num\">";
        echo twig_escape_filter($this->env, (isset($context["searchCoursesNum"]) ? $context["searchCoursesNum"] : $this->getContext($context, "searchCoursesNum")), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个"), "html", null, true);
        echo "</span>
    <span class=\"mrl\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已发布："), "html", null, true);
        echo "<strong class=\"inflow-num\">";
        echo twig_escape_filter($this->env, (isset($context["publishedCoursesNum"]) ? $context["publishedCoursesNum"] : $this->getContext($context, "publishedCoursesNum")), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个"), "html", null, true);
        echo "</span>
    <span class=\"mrl\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭："), "html", null, true);
        echo "<strong class=\"outflow-num\">";
        echo twig_escape_filter($this->env, (isset($context["closedCoursesNum"]) ? $context["closedCoursesNum"] : $this->getContext($context, "closedCoursesNum")), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个"), "html", null, true);
        echo "</span>
    <span class=\"mrl\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布："), "html", null, true);
        echo "<strong class=\"outflow-num\">";
        echo twig_escape_filter($this->env, (isset($context["unPublishedCoursesNum"]) ? $context["unPublishedCoursesNum"] : $this->getContext($context, "unPublishedCoursesNum")), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个"), "html", null, true);
        echo "</span>
  </p>

  <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
    <thead>
    <tr>
      <th>";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编号"), "html", null, true);
        echo "</th>
      <th width=\"25%\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称"), "html", null, true);
        echo "</th>
      <th>";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格"), "html", null, true);
        echo "</th>
      ";
        // line 57
        $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 57)->display($context);
        // line 58
        echo "      <th width=\"\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("连载状态"), "html", null, true);
        echo "</th>
      ";
        // line 59
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "classroom")) {
            // line 60
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所在"), "html", null, true);
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")), "html", null, true);
            echo "</th>
      ";
        } else {
            // line 62
            echo "        <th>";
            if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name")) {
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
            }
            // line 63
            echo "          数
        </th>

      ";
        }
        // line 67
        echo "      ";
        if (((isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "course")) {
            // line 68
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收入(元)"), "html", null, true);
            echo "</th>
      ";
        } elseif ((        // line 69
(isset($context["filter"]) ? $context["filter"] : $this->getContext($context, "filter")) == "vip")) {
            // line 70
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("会员等级"), "html", null, true);
            echo "</th>
      ";
        }
        // line 72
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</th>
      <th>";
        // line 73
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建者"), "html", null, true);
        echo "</th>
      <th>";
        // line 74
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
    </thead>
    <tbody>
    ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
        $context['_iterated'] = false;
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
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            // line 79
            echo "      ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array"), null)) : (null));
            // line 80
            echo "      ";
            $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array"), null)) : (null));
            // line 81
            echo "      ";
            $this->loadTemplate("TopxiaAdminBundle:Course:tr.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 81)->display($context);
            // line 82
            echo "    ";
            $context['_iterated'] = true;
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        if (!$context['_iterated']) {
            // line 83
            echo "      <tr>
        <td colspan=\"20\">
          <div class=\"empty\">";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无课程记录"), "html", null, true);
            echo "</div>
        </td>
      </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "    </tbody>
  </table>
  ";
        // line 91
        $this->loadTemplate("OrgBundle:Org:batch-update-org-btn.html.twig", "TopxiaAdminBundle:Course:index.html.twig", 91)->display(array_merge($context, array("module" => "course", "formId" => "course-table")));
        // line 92
        echo "  ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
        
        $__internal_bb9889a894f126b666277e62c388bfa52005ceab9c0c0059752f0d6980637c16->leave($__internal_bb9889a894f126b666277e62c388bfa52005ceab9c0c0059752f0d6980637c16_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Course:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  289 => 92,  287 => 91,  283 => 89,  273 => 85,  269 => 83,  256 => 82,  253 => 81,  250 => 80,  247 => 79,  229 => 78,  222 => 74,  218 => 73,  213 => 72,  207 => 70,  205 => 69,  200 => 68,  197 => 67,  191 => 63,  184 => 62,  177 => 60,  175 => 59,  170 => 58,  168 => 57,  164 => 56,  160 => 55,  156 => 54,  143 => 48,  135 => 47,  127 => 46,  119 => 45,  113 => 41,  111 => 40,  106 => 38,  99 => 36,  91 => 33,  87 => 31,  80 => 27,  76 => 25,  74 => 24,  68 => 21,  60 => 16,  55 => 13,  53 => 12,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_course_manage' %}

{% set script_controller = 'course/manage' %}

{% block main %}
  {% include 'TopxiaAdminBundle:Course:tab.html.twig' %}
  <br>
  <div class=\"well well-sm mtl\">
    <form id=\"message-search-form\" class=\"form-inline\" action=\"\" method=\"get\" novalidate>
      {% include 'OrgBundle:Org:org-tree-select.html.twig' with {orgCode: app.request.get('orgCode'), modal: 'list'} %}

      <div class=\"form-group\">
        <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
          {{ select_options(category_choices('course'), app.request.query.get('categoryId'), '课程分类'|trans) }}
        </select>
      </div>
      <div class=\"form-group\">
        <select class=\"form-control\" name=\"status\">
          {{ select_options(dict('courseStatus'), app.request.query.get('status'), '课程状态'|trans) }}
        </select>
      </div>
      {% if filter == 'normal' %}
        <div class=\"form-group\">
          <select style=\"max-width:150px;\" class=\"form-control\" name=\"chargeStatus\">
            {{ select_options({free:'免费课程'|trans,charge:'收费课程'|trans}, app.request.get('chargeStatus'), '收费状态'|trans) }}
        </select>
        </div>
      {% endif %}

      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"{{'标题'|trans}}\" name=\"title\" value=\"{{ app.request.get('title') }}\">
      </div>
      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"{{'创建者'|trans}}\" name=\"creator\" value=\"{{ app.request.get('creator') }}\">
      </div>
      <button class=\"btn btn-primary\">{{'搜索'|trans}}</button>

      {% include 'TopxiaAdminBundle:Widget:tooltip-widget.html.twig' with { icon: 'glyphicon-question-sign', content: '课程说明Tooltip'|trans|raw, placement: 'left'} %}
    </form>
  </div>
  
  <p class=\"text-muted\">
    <span class=\"mrl\">{{'课程：'|trans}}<strong class=\"inflow-num\">{{ searchCoursesNum }}</strong> {{ '个'|trans }}</span>
    <span class=\"mrl\">{{'已发布：'|trans}}<strong class=\"inflow-num\">{{ publishedCoursesNum }}</strong> {{ '个'|trans }}</span>
    <span class=\"mrl\">{{'已关闭：'|trans}}<strong class=\"outflow-num\">{{ closedCoursesNum }}</strong> {{ '个'|trans }}</span>
    <span class=\"mrl\">{{'未发布：'|trans}}<strong class=\"outflow-num\">{{ unPublishedCoursesNum }}</strong> {{ '个'|trans }}</span>
  </p>

  <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
    <thead>
    <tr>
      <th>{{'编号'|trans}}</th>
      <th width=\"25%\">{{'名称'|trans}}</th>
      <th>{{'价格'|trans}}</th>
      {% include 'OrgBundle:Org/Parts:table-thead-tr.html.twig' %}
      <th width=\"\">{{'连载状态'|trans}}</th>
      {% if filter == 'classroom' %}
        <th>{{'所在'|trans}}{{ setting(\"classroom.name\")|default('班级'|trans) }}</th>
      {% else %}
        <th>{% if setting('default.user_name') %}{{ setting('default.user_name')|default('学员'|trans) }}{% else %}{{ '学员'|trans }}{% endif %}
          数
        </th>

      {% endif %}
      {% if filter == 'course' %}
        <th>{{'收入(元)'|trans}}</th>
      {% elseif filter == 'vip' %}
        <th>{{'会员等级'|trans}}</th>
      {% endif %}
      <th>{{'状态'|trans}}</th>
      <th>{{'创建者'|trans}}</th>
      <th>{{'操作'|trans}}</th>
    </tr>
    </thead>
    <tbody>
    {% for course in courses %}
      {% set user = users[course.userId]|default(null) %}
      {% set category = categories[course.categoryId]|default(null) %}
      {% include 'TopxiaAdminBundle:Course:tr.html.twig' %}
    {% else %}
      <tr>
        <td colspan=\"20\">
          <div class=\"empty\">{{'暂无课程记录'|trans}}</div>
        </td>
      </tr>
    {% endfor %}
    </tbody>
  </table>
  {% include 'OrgBundle:Org:batch-update-org-btn.html.twig' with {module:'course', formId:'course-table'} %}
  {{ admin_macro.paginator(paginator) }}

{% endblock %}";
    }
}

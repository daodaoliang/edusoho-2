<?php

/* TopxiaAdminBundle:CourseThread:index.html.twig */
class __TwigTemplate_8bcb5747cc7db51d750cc4e36331399b9b464e9bb026079aae17a7184c91d16a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:CourseThread:index.html.twig", 1);
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
        $__internal_105c1899317a7acbfe64101be4eebecb3d802b6e54126f5edd9af968ec469ee5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_105c1899317a7acbfe64101be4eebecb3d802b6e54126f5edd9af968ec469ee5->enter($__internal_105c1899317a7acbfe64101be4eebecb3d802b6e54126f5edd9af968ec469ee5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:CourseThread:index.html.twig"));

        // line 3
        $context["script_controller"] = "course/threads";
        // line 5
        $context["menu"] = "admin_course_thread_manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_105c1899317a7acbfe64101be4eebecb3d802b6e54126f5edd9af968ec469ee5->leave($__internal_105c1899317a7acbfe64101be4eebecb3d802b6e54126f5edd9af968ec469ee5_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_203a57f21511e19fdb466928f957acb2d8f1ff566957c16d866f6c4f29acbe34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_203a57f21511e19fdb466928f957acb2d8f1ff566957c16d866f6c4f29acbe34->enter($__internal_203a57f21511e19fdb466928f957acb2d8f1ff566957c16d866f6c4f29acbe34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
<div class=\"well well-sm\">
  <form class=\"form-inline\">
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"type\">
        ";
        // line 13
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("threadType"), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "type"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("帖子类型"));
        echo "
      </select>
    </div>
    
    <span class=\"divider\"></span>

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"threadType\">
        ";
        // line 21
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions(array("isStick" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("置顶"), "isElite" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("加精")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "threadType"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("属性"));
        echo "
      </select>
    </div>

    <span class=\"divider\"></span>

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 29
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions(array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标题"), "content" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("内容"), "courseId" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程编号"), "courseTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程名")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keywordType"), "method"));
        echo "
      </select>
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关键词"), "html", null, true);
        echo "\" name=\"keyword\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作者"), "html", null, true);
        echo "\" name=\"author\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "author"), "method"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\" type=\"submit\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
  </form>
</div>

  <div id=\"thread-table-container\">
    <table class=\"table table-striped table-hover\">
      <thead>
        <tr>
          <th width=\"5%\"><input type=\"checkbox\" data-role=\"batch-select\"></th>
          <th width=\"50%\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("帖子"), "html", null, true);
        echo "</th>
          <th width=\"10%\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回复/查看"), "html", null, true);
        echo "</th>
          <th width=\"10%\">";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("属性"), "html", null, true);
        echo "</th>
          <th width=\"15%\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作者"), "html", null, true);
        echo "</th>
          <th width=\"10%\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
        </tr>
      </thead>
      <body>
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["threads"]) ? $context["threads"] : $this->getContext($context, "threads")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["thread"]) {
            // line 59
            echo "          ";
            $context["author"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["thread"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["thread"], "userId", array()), array(), "array"), null)) : (null));
            // line 60
            echo "          ";
            $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["thread"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["thread"], "courseId", array()), array(), "array"), null)) : (null));
            // line 61
            echo "          ";
            $context["lesson"] = (($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["thread"], "lessonId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["thread"], "lessonId", array()), array(), "array"), null)) : (null));
            // line 62
            echo "          <tr data-role=\"item\">
            <td><input value=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\" data-role=\"batch-item\"> </td>
            <td>
              ";
            // line 65
            if (($this->getAttribute($context["thread"], "type", array()) == "question")) {
                // line 66
                echo "                <span class=\"label label-info\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("问"), "html", null, true);
                echo "</span>
              ";
            }
            // line 68
            echo "
              <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_show", array("courseId" => $this->getAttribute($context["thread"], "courseId", array()), "threadId" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "title", array()), "html", null, true);
            echo "</strong></a>

              <div class=\"short-long-text\">
                <div class=\"short-text text-sm text-muted\">";
            // line 72
            echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute($context["thread"], "content", array()), 60);
            echo " <span class=\"trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("展开"), "html", null, true);
            echo ")</span></div>
                <div class=\"long-text\">";
            // line 73
            echo $this->getAttribute($context["thread"], "content", array());
            echo " <span class=\"trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收起"), "html", null, true);
            echo ")</span></div>
              </div>
              
              <div class=\"text-sm mts\">
                ";
            // line 77
            if ((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))) {
                // line 78
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\" class=\"text-success\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
                echo "</a>
                  ";
                // line 79
                if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
                    // line 80
                    echo "                    <span class=\"text-muted mhs\">&raquo;</span>
                    <a class=\"text-success\"  href=\"";
                    // line 81
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_learn", array("id" => $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "courseId", array()))), "html", null, true);
                    echo "#lesson/";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "id", array()), "html", null, true);
                    echo "\" target=\"_blank\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时"), "html", null, true);
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "number", array()), "html", null, true);
                    echo "：";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "title", array()), "html", null, true);
                    echo "</a>
                  ";
                }
                // line 83
                echo "                ";
            }
            // line 84
            echo "              </div>
            </td>
            <td><span class=\"text-sm\">";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "postNum", array()), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["thread"], "hitNum", array()), "html", null, true);
            echo "</span></td>
            <td>
              ";
            // line 88
            if ((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))) {
                // line 89
                echo "                <a href=\"javascript:;\" data-set-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_elite", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "id" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\" data-cancel-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_unelite", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "id" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\" class=\"promoted-label\">
                  <span class=\"label ";
                // line 90
                if ($this->getAttribute($context["thread"], "isElite", array())) {
                    echo "label-success";
                } else {
                    echo "label-default";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("精"), "html", null, true);
                echo "</span>
                </a>
              
                <a href=\"javascript:;\" data-set-url=\"";
                // line 93
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_stick", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "id" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\" data-cancel-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_unstick", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "id" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
                echo "\" class=\"promoted-label\">
                  <span class=\"label ";
                // line 94
                if ($this->getAttribute($context["thread"], "isStick", array())) {
                    echo "label-success";
                } else {
                    echo "label-default";
                }
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("顶"), "html", null, true);
                echo "</span>
                </a>
              ";
            }
            // line 97
            echo "            </td>
            <td>
              ";
            // line 99
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "user_link", array(0 => (isset($context["author"]) ? $context["author"] : $this->getContext($context, "author"))), "method"), "html", null, true);
            echo " <br />
              <span class=\"text-muted text-sm\">";
            // line 100
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["thread"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span>
            </td>
            <td>
              <div class=\"btn-group\">
                <a href=\"javascript:;\" data-role=\"item-delete\" data-url=\"";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_thread_delete", array("id" => $this->getAttribute($context["thread"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default btn-sm\" 
                data-name=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("帖子"), "html", null, true);
            echo "\" >";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</a>
              </div>
            </td>
          </tr>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 110
            echo "          <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无帖子记录"), "html", null, true);
            echo "</div></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['thread'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "      </body>
    </table>

    <div class=\"mbm\">
        <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全选"), "html", null, true);
        echo "</label>
        <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\" data-name=\"";
        // line 117
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("帖子"), "html", null, true);
        echo "\" data-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_thread_batch_delete");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
    </div>

  </div>
    
  ";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_203a57f21511e19fdb466928f957acb2d8f1ff566957c16d866f6c4f29acbe34->leave($__internal_203a57f21511e19fdb466928f957acb2d8f1ff566957c16d866f6c4f29acbe34_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseThread:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  331 => 122,  319 => 117,  315 => 116,  309 => 112,  300 => 110,  288 => 105,  284 => 104,  277 => 100,  273 => 99,  269 => 97,  257 => 94,  251 => 93,  239 => 90,  232 => 89,  230 => 88,  223 => 86,  219 => 84,  216 => 83,  204 => 81,  201 => 80,  199 => 79,  192 => 78,  190 => 77,  181 => 73,  175 => 72,  167 => 69,  164 => 68,  158 => 66,  156 => 65,  151 => 63,  148 => 62,  145 => 61,  142 => 60,  139 => 59,  134 => 58,  127 => 54,  123 => 53,  119 => 52,  115 => 51,  111 => 50,  99 => 41,  91 => 38,  82 => 34,  74 => 29,  63 => 21,  52 => 13,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set script_controller = 'course/threads' %}

{% set menu = 'admin_course_thread_manage' %}

{% block main %}

<div class=\"well well-sm\">
  <form class=\"form-inline\">
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"type\">
        {{ select_options(dict('threadType'), app.request.get('type'), '帖子类型'|trans) }}
      </select>
    </div>
    
    <span class=\"divider\"></span>

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"threadType\">
        {{ select_options({isStick:'置顶'|trans, isElite: '加精'|trans}, app.request.get('threadType'), '属性'|trans) }}
      </select>
    </div>

    <span class=\"divider\"></span>

    <div class=\"form-group\">
      <select class=\"form-control\" name=\"keywordType\">
        {{ select_options({title:'标题'|trans, content: '内容'|trans, courseId:'课程编号'|trans, courseTitle:'课程名'|trans}, app.request.get('keywordType')) }}
      </select>
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"{{'关键词'|trans}}\" name=\"keyword\" value=\"{{ app.request.get('keyword') }}\">
    </div>

    <div class=\"form-group\">
      <input class=\"form-control\" type=\"text\" placeholder=\"{{'作者'|trans}}\" name=\"author\" value=\"{{ app.request.get('author') }}\">
    </div>

    <button class=\"btn btn-primary\" type=\"submit\">{{'搜索'|trans}}</button>
  </form>
</div>

  <div id=\"thread-table-container\">
    <table class=\"table table-striped table-hover\">
      <thead>
        <tr>
          <th width=\"5%\"><input type=\"checkbox\" data-role=\"batch-select\"></th>
          <th width=\"50%\">{{'帖子'|trans}}</th>
          <th width=\"10%\">{{'回复/查看'|trans}}</th>
          <th width=\"10%\">{{'属性'|trans}}</th>
          <th width=\"15%\">{{'作者'|trans}}</th>
          <th width=\"10%\">{{'操作'|trans}}</th>
        </tr>
      </thead>
      <body>
        {% for thread in threads %}
          {% set author = users[thread.userId]|default(null) %}
          {% set course = courses[thread.courseId]|default(null) %}
          {% set lesson = lessons[thread.lessonId]|default(null) %}
          <tr data-role=\"item\">
            <td><input value=\"{{thread.id}}\" type=\"checkbox\" data-role=\"batch-item\"> </td>
            <td>
              {% if thread.type == 'question' %}
                <span class=\"label label-info\">{{'问'|trans}}</span>
              {% endif %}

              <a href=\"{{ path('course_thread_show', {courseId:thread.courseId, threadId:thread.id}) }}\" target=\"_blank\"><strong>{{ thread.title }}</strong></a>

              <div class=\"short-long-text\">
                <div class=\"short-text text-sm text-muted\">{{ thread.content|plain_text(60) }} <span class=\"trigger\">({{'展开'|trans}})</span></div>
                <div class=\"long-text\">{{ thread.content|raw }} <span class=\"trigger\">({{'收起'|trans}})</span></div>
              </div>
              
              <div class=\"text-sm mts\">
                {% if course %}
                  <a href=\"{{ path('course_show', {id:course.id}) }}\" class=\"text-success\" target=\"_blank\">{{ course.title }}</a>
                  {% if lesson %}
                    <span class=\"text-muted mhs\">&raquo;</span>
                    <a class=\"text-success\"  href=\"{{ path('course_learn', {id:lesson.courseId}) }}#lesson/{{lesson.id}}\" target=\"_blank\">{{'课时'|trans}}{{lesson.number}}：{{ lesson.title }}</a>
                  {% endif %}
                {% endif %}
              </div>
            </td>
            <td><span class=\"text-sm\">{{ thread.postNum }} / {{ thread.hitNum }}</span></td>
            <td>
              {% if course %}
                <a href=\"javascript:;\" data-set-url=\"{{ path('course_thread_elite', {courseId:course.id, id:thread.id}) }}\" data-cancel-url=\"{{ path('course_thread_unelite', {courseId:course.id, id:thread.id}) }}\" class=\"promoted-label\">
                  <span class=\"label {% if thread.isElite %}label-success{% else %}label-default{% endif %}\">{{'精'|trans}}</span>
                </a>
              
                <a href=\"javascript:;\" data-set-url=\"{{ path('course_thread_stick', {courseId:course.id, id:thread.id}) }}\" data-cancel-url=\"{{ path('course_thread_unstick', {courseId:course.id, id:thread.id}) }}\" class=\"promoted-label\">
                  <span class=\"label {% if thread.isStick %}label-success{% else %}label-default{% endif %}\">{{'顶'|trans}}</span>
                </a>
              {% endif %}
            </td>
            <td>
              {{ admin_macro.user_link(author) }} <br />
              <span class=\"text-muted text-sm\">{{ thread.createdTime|date('Y-n-d H:i:s') }}</span>
            </td>
            <td>
              <div class=\"btn-group\">
                <a href=\"javascript:;\" data-role=\"item-delete\" data-url=\"{{ path('admin_thread_delete', {id:thread.id}) }}\" class=\"btn btn-default btn-sm\" 
                data-name=\"{{'帖子'|trans}}\" >{{'删除'|trans}}</a>
              </div>
            </td>
          </tr>
        {% else %}
          <tr><td colspan=\"20\"><div class=\"empty\">{{'暂无帖子记录'|trans}}</div></td></tr>
        {% endfor %}
      </body>
    </table>

    <div class=\"mbm\">
        <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> {{'全选'|trans}}</label>
        <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\" data-name=\"{{'帖子'|trans}}\" data-url=\"{{ path('admin_thread_batch_delete') }}\">{{'删除'|trans}}</button>
    </div>

  </div>
    
  {{ admin_macro.paginator(paginator) }}
{% endblock %}
";
    }
}

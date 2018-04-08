<?php

/* TopxiaAdminBundle:CourseQuestion:index.html.twig */
class __TwigTemplate_8d9eb507d88ed878fa5e152def34735dd03ac1cbf66aa934d0ce8ac9f74269cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:CourseQuestion:index.html.twig", 1);
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
        $__internal_4daeac8e2e07a37580e5e5f33dd5c07226c0bdc4fa0b8db4a76fcdb6861401c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4daeac8e2e07a37580e5e5f33dd5c07226c0bdc4fa0b8db4a76fcdb6861401c7->enter($__internal_4daeac8e2e07a37580e5e5f33dd5c07226c0bdc4fa0b8db4a76fcdb6861401c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:CourseQuestion:index.html.twig"));

        // line 3
        $context["script_controller"] = "course/questions";
        // line 5
        $context["menu"] = "admin_course_question_manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4daeac8e2e07a37580e5e5f33dd5c07226c0bdc4fa0b8db4a76fcdb6861401c7->leave($__internal_4daeac8e2e07a37580e5e5f33dd5c07226c0bdc4fa0b8db4a76fcdb6861401c7_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_e98b5d64caea5119077b3d7debac1649750ce95b9d833113bde597de4f46c1ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98b5d64caea5119077b3d7debac1649750ce95b9d833113bde597de4f46c1ee->enter($__internal_e98b5d64caea5119077b3d7debac1649750ce95b9d833113bde597de4f46c1ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
";
        // line 9
        $this->loadTemplate("TopxiaAdminBundle:CourseQuestion:tab.html.twig", "TopxiaAdminBundle:CourseQuestion:index.html.twig", 9)->display($context);
        // line 10
        echo "<br>

  <div class=\"well well-sm mtl\">
    <form class=\"form-inline\">

      <div class=\"form-group\">
        <select class=\"form-control\" name=\"keywordType\">
          ";
        // line 17
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions(array("title" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标题"), "content" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("内容"), "courseId" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程编号"), "courseTitle" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程名")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keywordType"), "method"));
        echo "
        </select>
      </div>

      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关键词"), "html", null, true);
        echo "\" name=\"keyword\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">
      </div>
      
      <span class=\"divider\"></span>

      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作者"), "html", null, true);
        echo "\" name=\"author\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "author"), "method"), "html", null, true);
        echo "\">
      </div>


      <button class=\"btn btn-primary\" type=\"submit\">";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
    </form>
  </div>

  <div id=\"question-table-container\">
    <table id=\"question-table\" class=\"table table-striped table-hover\">
      <thead>
        <tr>
          <th width=\"5%\"><input type=\"checkbox\" data-role=\"batch-select\"></th>
          <th width=\"50%\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("问答"), "html", null, true);
        echo "</th>
          ";
        // line 42
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "unPosted")) {
            // line 43
            echo "            <th width=\"10%\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("查看"), "html", null, true);
            echo "</th>
          ";
        } elseif ((        // line 44
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "all")) {
            // line 45
            echo "            <th width=\"10%\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("回复/查看"), "html", null, true);
            echo "</th>
          ";
        }
        // line 47
        echo "          <th width=\"10%\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作者"), "html", null, true);
        echo "</th>
          <th width=\"10%\">";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建时间"), "html", null, true);
        echo "</th>
          <th width=\"15%\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
        </tr>
      </thead>
      <tbody class=\"tbody\">
        ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["questions"]) ? $context["questions"] : $this->getContext($context, "questions")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["question"]) {
            // line 54
            echo "        
          ";
            // line 55
            $context["author"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["question"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["question"], "userId", array()), array(), "array"), null)) : (null));
            // line 56
            echo "          ";
            $context["course"] = (($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["question"], "courseId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["courses"]) ? $context["courses"] : null), $this->getAttribute($context["question"], "courseId", array()), array(), "array"), null)) : (null));
            // line 57
            echo "          ";
            $context["lesson"] = (($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["question"], "lessonId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["lessons"]) ? $context["lessons"] : null), $this->getAttribute($context["question"], "lessonId", array()), array(), "array"), null)) : (null));
            // line 58
            echo "          <tr data-role=\"item\">
            <td><input value=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "id", array()), "html", null, true);
            echo "\" type=\"checkbox\" data-role=\"batch-item\"> </td>
            <td>
              <a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_thread_show", array("courseId" => $this->getAttribute($context["question"], "courseId", array()), "threadId" => $this->getAttribute($context["question"], "id", array()))), "html", null, true);
            echo "\" target=\"_blank\"><strong>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "title", array()), "html", null, true);
            echo "</strong></a>

              <div class=\"short-long-text\">
                <div class=\"short-text text-sm text-muted\">";
            // line 64
            echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute($context["question"], "content", array()), 60);
            echo " <span class=\"trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("展开"), "html", null, true);
            echo ")</span></div>
                <div class=\"long-text\">";
            // line 65
            echo $this->getAttribute($context["question"], "content", array());
            echo " <span class=\"trigger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收起"), "html", null, true);
            echo ")</span></div>
              </div>
              
              <div class=\"text-sm mts\">
                ";
            // line 69
            if ((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course"))) {
                // line 70
                echo "                  <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "\" class=\"text-success\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
                echo "</a>
                  ";
                // line 71
                if ((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson"))) {
                    // line 72
                    echo "                    <span class=\"text-muted mhs\">&raquo;</span>
                    <a class=\"text-success\"  href=\"";
                    // line 73
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
                // line 75
                echo "                ";
            }
            // line 76
            echo "              </div>
            </td>
            <td>
            <span class=\"text-sm\">
              ";
            // line 80
            if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "unPosted")) {
                // line 81
                echo "               ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "hitNum", array()), "html", null, true);
                echo "
               ";
            } elseif ((            // line 82
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "all")) {
                // line 83
                echo "              ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "postNum", array()), "html", null, true);
                echo " / ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["question"], "hitNum", array()), "html", null, true);
                echo "
                ";
            }
            // line 85
            echo "            </span>
            </td>
            <td>
              ";
            // line 88
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "user_link", array(0 => (isset($context["author"]) ? $context["author"] : $this->getContext($context, "author"))), "method"), "html", null, true);
            echo " <br />
            </td>
            <td>
              ";
            // line 91
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["question"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "
            </td>
            <td>
            ";
            // line 94
            $this->loadTemplate("TopxiaAdminBundle:CourseQuestion:td-operations.html.twig", "TopxiaAdminBundle:CourseQuestion:index.html.twig", 94)->display($context);
            // line 95
            echo "            </td>
          </tr>
        ";
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
            // line 98
            echo "          <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无问答记录"), "html", null, true);
            echo "</div></td></tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['question'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "      </tbody>
    </table>

    <div class=\"mbm\">
        <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
        // line 104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全选"), "html", null, true);
        echo "</label>
        <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\" data-name=\"";
        // line 105
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("问答"), "html", null, true);
        echo "\" data-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_thread_batch_delete");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
    </div>
  </div>
    
  ";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_e98b5d64caea5119077b3d7debac1649750ce95b9d833113bde597de4f46c1ee->leave($__internal_e98b5d64caea5119077b3d7debac1649750ce95b9d833113bde597de4f46c1ee_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseQuestion:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  310 => 109,  299 => 105,  295 => 104,  289 => 100,  280 => 98,  265 => 95,  263 => 94,  257 => 91,  251 => 88,  246 => 85,  238 => 83,  236 => 82,  231 => 81,  229 => 80,  223 => 76,  220 => 75,  208 => 73,  205 => 72,  203 => 71,  196 => 70,  194 => 69,  185 => 65,  179 => 64,  171 => 61,  166 => 59,  163 => 58,  160 => 57,  157 => 56,  155 => 55,  152 => 54,  134 => 53,  127 => 49,  123 => 48,  118 => 47,  112 => 45,  110 => 44,  105 => 43,  103 => 42,  99 => 41,  87 => 32,  78 => 28,  67 => 22,  59 => 17,  50 => 10,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set script_controller = 'course/questions' %}

{% set menu = 'admin_course_question_manage' %}

{% block main %}

{% include 'TopxiaAdminBundle:CourseQuestion:tab.html.twig' %}
<br>

  <div class=\"well well-sm mtl\">
    <form class=\"form-inline\">

      <div class=\"form-group\">
        <select class=\"form-control\" name=\"keywordType\">
          {{ select_options({title:'标题'|trans, content: '内容'|trans, courseId:'课程编号'|trans, courseTitle:'课程名'|trans }, app.request.get('keywordType')) }}
        </select>
      </div>

      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"{{'关键词'|trans}}\" name=\"keyword\" value=\"{{ app.request.get('keyword') }}\">
      </div>
      
      <span class=\"divider\"></span>

      <div class=\"form-group\">
        <input class=\"form-control\" type=\"text\" placeholder=\"{{'作者'|trans}}\" name=\"author\" value=\"{{ app.request.get('author') }}\">
      </div>


      <button class=\"btn btn-primary\" type=\"submit\">{{'搜索'|trans}}</button>
    </form>
  </div>

  <div id=\"question-table-container\">
    <table id=\"question-table\" class=\"table table-striped table-hover\">
      <thead>
        <tr>
          <th width=\"5%\"><input type=\"checkbox\" data-role=\"batch-select\"></th>
          <th width=\"50%\">{{'问答'|trans}}</th>
          {% if type == 'unPosted' %}
            <th width=\"10%\">{{'查看'|trans}}</th>
          {% elseif type == 'all' %}
            <th width=\"10%\">{{'回复/查看'|trans}}</th>
          {% endif %}
          <th width=\"10%\">{{'作者'|trans}}</th>
          <th width=\"10%\">{{'创建时间'|trans}}</th>
          <th width=\"15%\">{{'操作'|trans}}</th>
        </tr>
      </thead>
      <tbody class=\"tbody\">
        {% for question in questions %}
        
          {% set author = users[question.userId]|default(null) %}
          {% set course = courses[question.courseId]|default(null) %}
          {% set lesson = lessons[question.lessonId]|default(null) %}
          <tr data-role=\"item\">
            <td><input value=\"{{question.id}}\" type=\"checkbox\" data-role=\"batch-item\"> </td>
            <td>
              <a href=\"{{ path('course_thread_show', {courseId:question.courseId, threadId:question.id}) }}\" target=\"_blank\"><strong>{{ question.title }}</strong></a>

              <div class=\"short-long-text\">
                <div class=\"short-text text-sm text-muted\">{{ question.content|plain_text(60) }} <span class=\"trigger\">({{'展开'|trans}})</span></div>
                <div class=\"long-text\">{{ question.content|raw }} <span class=\"trigger\">({{'收起'|trans}})</span></div>
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
            <td>
            <span class=\"text-sm\">
              {% if type == 'unPosted' %}
               {{ question.hitNum }}
               {% elseif type == 'all' %}
              {{ question.postNum }} / {{ question.hitNum }}
                {% endif %}
            </span>
            </td>
            <td>
              {{ admin_macro.user_link(author) }} <br />
            </td>
            <td>
              {{ question.createdTime|date('Y-n-d H:i:s') }}
            </td>
            <td>
            {% include 'TopxiaAdminBundle:CourseQuestion:td-operations.html.twig' %}
            </td>
          </tr>
        {% else %}
          <tr><td colspan=\"20\"><div class=\"empty\">{{'暂无问答记录'|trans}}</div></td></tr>
        {% endfor %}
      </tbody>
    </table>

    <div class=\"mbm\">
        <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> {{'全选'|trans}}</label>
        <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\" data-name=\"{{'问答'|trans}}\" data-url=\"{{ path('admin_thread_batch_delete') }}\">{{'删除'|trans}}</button>
    </div>
  </div>
    
  {{ admin_macro.paginator(paginator) }}
{% endblock %}
";
    }
}

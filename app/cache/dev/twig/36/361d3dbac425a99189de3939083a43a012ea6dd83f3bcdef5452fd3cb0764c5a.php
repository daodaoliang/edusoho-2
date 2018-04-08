<?php

/* TopxiaWebBundle:CourseStudentManage:student.html.twig */
class __TwigTemplate_3dc18efb0fa943aeb0cba747ecd7476eff318ae7f00fefaed0407874fa40a850 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:CourseStudentManage:index.html.twig", "TopxiaWebBundle:CourseStudentManage:student.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'maincontent' => array($this, 'block_maincontent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:CourseStudentManage:index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14b72df651b88de4d6b37f540eb9980ab2d9307e9c4c0d99a6cc5e7e9b03b03e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14b72df651b88de4d6b37f540eb9980ab2d9307e9c4c0d99a6cc5e7e9b03b03e->enter($__internal_14b72df651b88de4d6b37f540eb9980ab2d9307e9c4c0d99a6cc5e7e9b03b03e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:CourseStudentManage:student.html.twig"));

        // line 5
        $context["submenu"] = "student";
        // line 7
        $context["script_controller"] = "course-manage/students";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14b72df651b88de4d6b37f540eb9980ab2d9307e9c4c0d99a6cc5e7e9b03b03e->leave($__internal_14b72df651b88de4d6b37f540eb9980ab2d9307e9c4c0d99a6cc5e7e9b03b03e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_37443f6665f83b8c72e51df244a7e09235f540f6bf5288eda3e9b8258d4ab8bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37443f6665f83b8c72e51df244a7e09235f540f6bf5288eda3e9b8258d4ab8bd->enter($__internal_37443f6665f83b8c72e51df244a7e09235f540f6bf5288eda3e9b8258d4ab8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_37443f6665f83b8c72e51df244a7e09235f540f6bf5288eda3e9b8258d4ab8bd->leave($__internal_37443f6665f83b8c72e51df244a7e09235f540f6bf5288eda3e9b8258d4ab8bd_prof);

    }

    // line 9
    public function block_maincontent($context, array $blocks = array())
    {
        $__internal_eaadb5db1c74433dc5038cd31a6d60e9905ffa5bea3b1d8628eff0b78b38f711 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eaadb5db1c74433dc5038cd31a6d60e9905ffa5bea3b1d8628eff0b78b38f711->enter($__internal_eaadb5db1c74433dc5038cd31a6d60e9905ffa5bea3b1d8628eff0b78b38f711_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "maincontent"));

        // line 10
        echo "<form class=\"form-inline well well-sm \" action=\"\" method=\"get\" novalidate>
  <div class=\"form-group col-md-7\">
    <input class=\"form-control \" type=\"text\" style=\"width:45%\" placeholder=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请输入用户名/邮箱/手机号"), "html", null, true);
        echo "\" name=\"keyword\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\">

    <button class=\"btn btn-primary\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
  </div>
  <div class=\"clearfix\"></div>
</form>
<table class=\"table table-striped\" id=\"course-student-list\">
  <thead>
    <tr>
      <th width=\"40%\">";
        // line 21
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name")) {
            echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
        }
        echo "</th>
      <th width=\"30%\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学习进度"), "html", null, true);
        echo "</th>
      <th width=\"30%\">";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["students"]) ? $context["students"] : $this->getContext($context, "students")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 28
            echo "      ";
            $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["student"], "userId", array()), array(), "array");
            // line 29
            echo "      ";
            $context["progress"] = $this->getAttribute((isset($context["progresses"]) ? $context["progresses"] : $this->getContext($context, "progresses")), $this->getAttribute($context["student"], "userId", array()), array(), "array");
            // line 30
            echo "      ";
            $context["isFollowing"] = twig_in_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), (isset($context["followingIds"]) ? $context["followingIds"] : $this->getContext($context, "followingIds")));
            // line 31
            echo "      ";
            $this->loadTemplate("TopxiaWebBundle:CourseStudentManage:tr.html.twig", "TopxiaWebBundle:CourseStudentManage:student.html.twig", 31)->display($context);
            // line 32
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
            // line 33
            echo "      <tr class=\"empty\"><td colspan=\"20\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("无"), "html", null, true);
            if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name")) {
                echo "一个";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), "学员"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员"), "html", null, true);
            }
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("记录"), "html", null, true);
            echo "</td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "  </tbody>
</table>
";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "
";
        
        $__internal_eaadb5db1c74433dc5038cd31a6d60e9905ffa5bea3b1d8628eff0b78b38f711->leave($__internal_eaadb5db1c74433dc5038cd31a6d60e9905ffa5bea3b1d8628eff0b78b38f711_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:student.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 37,  159 => 35,  143 => 33,  130 => 32,  127 => 31,  124 => 30,  121 => 29,  118 => 28,  100 => 27,  93 => 23,  89 => 22,  81 => 21,  71 => 14,  64 => 12,  60 => 10,  54 => 9,  40 => 3,  33 => 1,  31 => 7,  29 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle:CourseStudentManage:index.html.twig' %}

{% block title %}{{'学员管理'|trans}} - {{ parent() }}{% endblock %}

{% set submenu = 'student' %}

{% set script_controller = 'course-manage/students' %}

{% block maincontent %}
<form class=\"form-inline well well-sm \" action=\"\" method=\"get\" novalidate>
  <div class=\"form-group col-md-7\">
    <input class=\"form-control \" type=\"text\" style=\"width:45%\" placeholder=\"{{'请输入用户名/邮箱/手机号'|trans}}\" name=\"keyword\" value=\"{{ app.request.get('keyword') }}\">

    <button class=\"btn btn-primary\">{{'搜索'|trans}}</button>
  </div>
  <div class=\"clearfix\"></div>
</form>
<table class=\"table table-striped\" id=\"course-student-list\">
  <thead>
    <tr>
      <th width=\"40%\">{% if setting('default.user_name') %}{{setting('default.user_name')|default('学员'|trans)}}{% else %}{{'学员'|trans}}{% endif %}</th>
      <th width=\"30%\">{{'学习进度'|trans}}</th>
      <th width=\"30%\">{{'操作'|trans}}</th>
    </tr>
  </thead>
  <tbody>
    {% for student in students %}
      {% set user = users[student.userId] %}
      {% set progress = progresses[student.userId] %}
      {% set isFollowing = user.id in followingIds %}
      {% include 'TopxiaWebBundle:CourseStudentManage:tr.html.twig' %}
    {% else %}
      <tr class=\"empty\"><td colspan=\"20\">{{'无'|trans}}{% if setting('default.user_name') %}一个{{setting('default.user_name')|default('学员')}}{% else %}{{'学员'|trans}}{% endif %}{{'记录'|trans}}</td></tr>
    {% endfor %}
  </tbody>
</table>
{{ web_macro.paginator(paginator) }}
{% endblock %}";
    }
}

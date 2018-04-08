<?php

/* TopxiaAdminBundle:OpenCourse:index.html.twig */
class __TwigTemplate_96b1add20fd73c1dbcf1c4c3affd9f2aafbba1ec1069ad41a16747897618433d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:OpenCourse:index.html.twig", 1);
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
        $__internal_29825e33cd6a264780e3fbc4bd881e060d09c25f39c7002bcc0d0cd6281ea7ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29825e33cd6a264780e3fbc4bd881e060d09c25f39c7002bcc0d0cd6281ea7ac->enter($__internal_29825e33cd6a264780e3fbc4bd881e060d09c25f39c7002bcc0d0cd6281ea7ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:OpenCourse:index.html.twig"));

        // line 3
        $context["menu"] = "admin_open_course";
        // line 5
        $context["script_controller"] = "course/manage";
        // line 7
        $context["script_arguments"] = array("tagMatchUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tag_match"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_29825e33cd6a264780e3fbc4bd881e060d09c25f39c7002bcc0d0cd6281ea7ac->leave($__internal_29825e33cd6a264780e3fbc4bd881e060d09c25f39c7002bcc0d0cd6281ea7ac_prof);

    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        $__internal_68bdf8bed73d7205a8b35e977703971125237e34918863c304a5dec2627f9292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_68bdf8bed73d7205a8b35e977703971125237e34918863c304a5dec2627f9292->enter($__internal_68bdf8bed73d7205a8b35e977703971125237e34918863c304a5dec2627f9292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 12
        echo "  ";
        $this->loadTemplate("TopxiaAdminBundle:OpenCourse:course-search-form.html.twig", "TopxiaAdminBundle:OpenCourse:index.html.twig", 12)->display(array_merge($context, array("actionUrl" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_open_course"), "showStatusSelect" => 1)));
        // line 13
        echo "  
  ";
        // line 14
        if (( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("cloud_sms.sms_enabled", 0) || (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("cloud_sms.sms_enabled", 0) && ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("cloud_sms.sms_live_play_one_day") == "off")) && ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("cloud_sms.sms_live_play_one_hour") == "off")))) {
            // line 15
            echo "    <div class=\"alert alert-warning\">尚未开启云短信的直播通知开关，开启后直播公开课将支持短信提醒功能&nbsp;&nbsp;";
            if (twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                echo "<a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_sms");
                echo "\">去开启</a>";
            }
            echo "</div>
  ";
        }
        // line 17
        echo "
  <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
    <thead>
    <tr>
      <th>编号</th>
      <th width=\"49%\">名称</th>      
      <th>状态</th>
      <th>创建者</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>
      ";
        // line 29
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
            // line 30
            echo "        ";
            $context["user"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["course"], "userId", array()), array(), "array"), null)) : (null));
            // line 31
            echo "        ";
            $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["course"], "categoryId", array()), array(), "array"), null)) : (null));
            // line 32
            echo "        ";
            $this->loadTemplate("TopxiaAdminBundle:OpenCourse:tr.html.twig", "TopxiaAdminBundle:OpenCourse:index.html.twig", 32)->display($context);
            // line 33
            echo "      ";
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
            // line 34
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">暂无课程记录</div></td></tr>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    </tbody>
  </table>

  ";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
        
        $__internal_68bdf8bed73d7205a8b35e977703971125237e34918863c304a5dec2627f9292->leave($__internal_68bdf8bed73d7205a8b35e977703971125237e34918863c304a5dec2627f9292_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OpenCourse:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 39,  126 => 36,  119 => 34,  106 => 33,  103 => 32,  100 => 31,  97 => 30,  79 => 29,  65 => 17,  55 => 15,  53 => 14,  50 => 13,  47 => 12,  41 => 11,  34 => 1,  32 => 7,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_open_course' %}

{% set script_controller = 'course/manage' %}
{%
  set script_arguments = {
    tagMatchUrl: path('tag_match')
  }
%}
{% block main %}
  {% include 'TopxiaAdminBundle:OpenCourse:course-search-form.html.twig' with {actionUrl:path('admin_open_course'),showStatusSelect:1} %}
  
  {% if not setting('cloud_sms.sms_enabled',0) or (setting('cloud_sms.sms_enabled',0) and setting('cloud_sms.sms_live_play_one_day') == 'off' and setting('cloud_sms.sms_live_play_one_hour') == 'off') %}
    <div class=\"alert alert-warning\">尚未开启云短信的直播通知开关，开启后直播公开课将支持短信提醒功能&nbsp;&nbsp;{% if 'ROLE_SUPER_ADMIN' in app.user.roles%}<a href=\"{{ path('admin_edu_cloud_sms') }}\">去开启</a>{% endif %}</div>
  {% endif %}

  <table class=\"table table-striped table-hover\" id=\"course-table\" style=\"word-break:break-all;\">
    <thead>
    <tr>
      <th>编号</th>
      <th width=\"49%\">名称</th>      
      <th>状态</th>
      <th>创建者</th>
      <th>操作</th>
    </tr>
    </thead>
    <tbody>
      {% for course in courses %}
        {% set user = users[course.userId]|default(null) %}
        {% set category = categories[course.categoryId]|default(null) %}
        {% include 'TopxiaAdminBundle:OpenCourse:tr.html.twig' %}
      {% else %}
        <tr><td colspan=\"20\"><div class=\"empty\">暂无课程记录</div></td></tr>
      {% endfor %}
    </tbody>
  </table>

  {{ web_macro.paginator(paginator) }}

{% endblock %}";
    }
}

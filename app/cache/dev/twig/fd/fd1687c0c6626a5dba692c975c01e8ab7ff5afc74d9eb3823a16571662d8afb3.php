<?php

/* TopxiaWebBundle:Teacher:teacher-item.html.twig */
class __TwigTemplate_1a0411c93f31f57d9b7dc40070fae0bf739123f1c968a377a57814a7c9c3c1ec extends Twig_Template
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
        $__internal_050db418e1ec8ac8015040d2daa34ff544393d9819589b7e123d33321b398f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_050db418e1ec8ac8015040d2daa34ff544393d9819589b7e123d33321b398f2b->enter($__internal_050db418e1ec8ac8015040d2daa34ff544393d9819589b7e123d33321b398f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Teacher:teacher-item.html.twig"));

        // line 1
        echo "<div class=\"teacher-item\">
  <div class=\"teacher-top\">
    <a class=\"teacher-img\" href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
        echo "\">
      <img class=\"avatar-lg\" src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "largeAvatar", array()), "avatar.png"), "html", null, true);
        echo "\" alt=\"\">
    </a>
    <h3 class=\"title\">
      <a class=\"link-dark\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "nickname", array()), "html", null, true);
        echo "</a>
    </h3>
    <div class=\"position\">
      ";
        // line 10
        if ($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "title", array())) {
            // line 11
            echo "        ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "title", array()), "html", null, true);
            echo "
      ";
        } else {
            // line 13
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无头衔"), "html", null, true);
            echo "
      ";
        }
        // line 15
        echo "    </div>
  </div>
  <div class=\"teacher-bottom\">
    <div class=\"about\">
      ";
        // line 19
        if ($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "about", array())) {
            // line 20
            echo "        ";
            echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "about", array()), 30);
            echo "
      ";
        } else {
            // line 22
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无简介"), "html", null, true);
            echo "
      ";
        }
        // line 24
        echo "    </div>
    <div class=\"metas\">
      ";
        // line 26
        if (( !$this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) || ($this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())))) {
            // line 27
            echo "        <a class=\"btn btn-primary btn-sm follow-btn\" href=\"javascript:;\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_follow", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
            echo "\" ";
            if ((isset($context["isFollowed"]) ? $context["isFollowed"] : $this->getContext($context, "isFollowed"))) {
                echo " style=\"display:none;\"";
            }
            echo " data-loggedin=";
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isLogin", array(), "method"))) {
                echo "\"1\"";
            } else {
                echo "\"0\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关注"), "html", null, true);
            echo "</a>
        <a class=\"btn btn-default btn-sm unfollow-btn\" href=\"javascript:;\" data-url=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_unfollow", array("id" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
            echo "\" ";
            if ( !(isset($context["isFollowed"]) ? $context["isFollowed"] : $this->getContext($context, "isFollowed"))) {
                echo " style=\"display:none;\" ";
            }
            echo ">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关注"), "html", null, true);
            echo "</a>
        <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\"  data-url=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message_create", array("toId" => $this->getAttribute((isset($context["teacher"]) ? $context["teacher"] : $this->getContext($context, "teacher")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
            echo "</a>
      ";
        }
        // line 31
        echo "    </div>
  </div>
</div>
";
        
        $__internal_050db418e1ec8ac8015040d2daa34ff544393d9819589b7e123d33321b398f2b->leave($__internal_050db418e1ec8ac8015040d2daa34ff544393d9819589b7e123d33321b398f2b_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Teacher:teacher-item.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 31,  111 => 29,  101 => 28,  84 => 27,  82 => 26,  78 => 24,  72 => 22,  66 => 20,  64 => 19,  58 => 15,  52 => 13,  46 => 11,  44 => 10,  36 => 7,  30 => 4,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"teacher-item\">
  <div class=\"teacher-top\">
    <a class=\"teacher-img\" href=\"{{ path('user_show', {id:teacher.id}) }}\">
      <img class=\"avatar-lg\" src=\"{{ filepath(teacher.largeAvatar, 'avatar.png') }}\" alt=\"\">
    </a>
    <h3 class=\"title\">
      <a class=\"link-dark\" href=\"{{ path('user_show', {id:teacher.id}) }}\">{{ teacher.nickname }}</a>
    </h3>
    <div class=\"position\">
      {% if teacher.title %}
        {{ teacher.title }}
      {% else %}
        {{'暂无头衔'|trans}}
      {% endif %}
    </div>
  </div>
  <div class=\"teacher-bottom\">
    <div class=\"about\">
      {% if profile.about %}
        {{ profile.about|plain_text(30) }}
      {% else %}
        {{'暂无简介'|trans}}
      {% endif %}
    </div>
    <div class=\"metas\">
      {% if not app.user or (teacher.id != app.user.id) %}
        <a class=\"btn btn-primary btn-sm follow-btn\" href=\"javascript:;\" data-url=\"{{ path('user_follow', {id:teacher.id}) }}\" {% if isFollowed %} style=\"display:none;\"{% endif %} data-loggedin={% if app.user and app.user.isLogin() %}\"1\"{% else %}\"0\"{% endif %}>{{'关注'|trans}}</a>
        <a class=\"btn btn-default btn-sm unfollow-btn\" href=\"javascript:;\" data-url=\"{{ path('user_unfollow', {id:teacher.id}) }}\" {% if not isFollowed %} style=\"display:none;\" {% endif %}>{{'已关注'|trans}}</a>
        <a class=\"btn btn-default btn-sm\" data-toggle=\"modal\" data-target=\"#modal\" data-backdrop=\"static\"  data-url=\"{{path('message_create', {toId:teacher.id})}}\">{{'私信'|trans}}</a>
      {% endif %}
    </div>
  </div>
</div>
";
    }
}

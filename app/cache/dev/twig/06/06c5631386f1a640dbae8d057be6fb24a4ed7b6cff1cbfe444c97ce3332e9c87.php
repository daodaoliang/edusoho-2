<?php

/* TopxiaAdminBundle:Default:operation-analysis-dashbord.html.twig */
class __TwigTemplate_0409b141b93d5e6e90be9ee20ad6e0fb4d6b2b0fd1ca97bc5e354baaa13e8d34 extends Twig_Template
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
        $__internal_2c33022f0698c6984ea73601619230620a5bfa58c8b6b6be6336b086c1e128c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c33022f0698c6984ea73601619230620a5bfa58c8b6b6be6336b086c1e128c2->enter($__internal_2c33022f0698c6984ea73601619230620a5bfa58c8b6b6be6336b086c1e128c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Default:operation-analysis-dashbord.html.twig"));

        // line 1
        echo "<ul class=\"subfield-list 
  ";
        // line 2
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("Vip") && $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("vip.enabled"))) {
            // line 3
            echo "    five-subfield 
  ";
        } else {
            // line 5
            echo "    four-subfield
  ";
        }
        // line 7
        echo "  clearfix\">
  <li>
    <div class=\"title\">";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录用户"), "html", null, true);
        echo "</div>
    <span class=\"number\">";
        // line 10
        echo twig_escape_filter($this->env, ((array_key_exists("loginCount", $context)) ? (_twig_default_filter((isset($context["loginCount"]) ? $context["loginCount"] : $this->getContext($context, "loginCount")), "0")) : ("0")), "html", null, true);
        echo "</span>
    <p>";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在线总数"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["onlineCount"]) ? $context["onlineCount"] : $this->getContext($context, "onlineCount")), "html", null, true);
        echo "</p>
  </li>
  <li>
    <div class=\"title\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增注册"), "html", null, true);
        echo "</div>
    <span class=\"number\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["todayRegisterNum"]) ? $context["todayRegisterNum"] : $this->getContext($context, "todayRegisterNum")), "html", null, true);
        echo "</span>
    <p>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("总数"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["totalRegisterNum"]) ? $context["totalRegisterNum"] : $this->getContext($context, "totalRegisterNum")), "html", null, true);
        echo "</p>
  </li>
  <li>
    <div class=\"title\">";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增学员"), "html", null, true);
        echo "</div>
    <span class=\"number\"> ";
        // line 20
        echo twig_escape_filter($this->env, ((isset($context["todayCourseMemberNum"]) ? $context["todayCourseMemberNum"] : $this->getContext($context, "todayCourseMemberNum")) + (isset($context["todayClassroomMemberNum"]) ? $context["todayClassroomMemberNum"] : $this->getContext($context, "todayClassroomMemberNum"))), "html", null, true);
        echo "</span>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("总人次"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, ((isset($context["totalCourseMemberNum"]) ? $context["totalCourseMemberNum"] : $this->getContext($context, "totalCourseMemberNum")) + (isset($context["totalClassroomMemberNum"]) ? $context["totalClassroomMemberNum"] : $this->getContext($context, "totalClassroomMemberNum"))), "html", null, true);
        echo "</p>
  </li>
  ";
        // line 23
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("Vip") && $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("vip.enabled"))) {
            // line 24
            echo "    <li>
      <div class=\"title\">";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增会员"), "html", null, true);
            echo "</div>
      <span class=\"number\">";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["todayVipNum"]) ? $context["todayVipNum"] : $this->getContext($context, "todayVipNum")), "html", null, true);
            echo "</span>
      <p>";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("总数"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, (isset($context["totalVipNum"]) ? $context["totalVipNum"] : $this->getContext($context, "totalVipNum")), "html", null, true);
            echo "</p>
    </li>
  ";
        }
        // line 30
        echo "  <li>
    <div class=\"title\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未回复回答"), "html", null, true);
        echo "</div>
    <span class=\"number\">
      ";
        // line 33
        echo twig_escape_filter($this->env, (isset($context["todayThreadUnAnswerNum"]) ? $context["todayThreadUnAnswerNum"] : $this->getContext($context, "todayThreadUnAnswerNum")), "html", null, true);
        echo "
    </span>
    <p>";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("总数"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, (isset($context["totalThreadNum"]) ? $context["totalThreadNum"] : $this->getContext($context, "totalThreadNum")), "html", null, true);
        echo "</p>
  </li>
</ul>";
        
        $__internal_2c33022f0698c6984ea73601619230620a5bfa58c8b6b6be6336b086c1e128c2->leave($__internal_2c33022f0698c6984ea73601619230620a5bfa58c8b6b6be6336b086c1e128c2_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:operation-analysis-dashbord.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 35,  115 => 33,  110 => 31,  107 => 30,  99 => 27,  95 => 26,  91 => 25,  88 => 24,  86 => 23,  79 => 21,  75 => 20,  71 => 19,  63 => 16,  59 => 15,  55 => 14,  47 => 11,  43 => 10,  39 => 9,  35 => 7,  31 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<ul class=\"subfield-list 
  {% if is_plugin_installed('Vip') and setting('vip.enabled') %}
    five-subfield 
  {% else %}
    four-subfield
  {% endif %}
  clearfix\">
  <li>
    <div class=\"title\">{{ '登录用户'|trans }}</div>
    <span class=\"number\">{{ loginCount| default('0') }}</span>
    <p>{{ '在线总数'|trans }}: {{ onlineCount }}</p>
  </li>
  <li>
    <div class=\"title\">{{ '新增注册'|trans }}</div>
    <span class=\"number\">{{ todayRegisterNum }}</span>
    <p>{{ '总数'|trans }}: {{ totalRegisterNum }}</p>
  </li>
  <li>
    <div class=\"title\">{{ '新增学员'|trans }}</div>
    <span class=\"number\"> {{ todayCourseMemberNum + todayClassroomMemberNum }}</span>
    <p>{{ '总人次'|trans }}: {{ totalCourseMemberNum + totalClassroomMemberNum }}</p>
  </li>
  {% if is_plugin_installed('Vip') and setting('vip.enabled') %}
    <li>
      <div class=\"title\">{{ '新增会员'|trans }}</div>
      <span class=\"number\">{{ todayVipNum }}</span>
      <p>{{ '总数'|trans }}: {{ totalVipNum }}</p>
    </li>
  {% endif %}
  <li>
    <div class=\"title\">{{ '未回复回答'|trans }}</div>
    <span class=\"number\">
      {{ todayThreadUnAnswerNum }}
    </span>
    <p>{{ '总数'|trans }}: {{ totalThreadNum }}</p>
  </li>
</ul>";
    }
}

<?php

/* TopxiaAdminBundle:Default:system-status.html.twig */
class __TwigTemplate_305a9c58d031f2401fa48a227f9af98b07289c7ce1779648a6f363ffba8fa011 extends Twig_Template
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
        $__internal_d54539a9115382ab39648fd3b594cd6881f68f57321af99f847369f00eb66481 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d54539a9115382ab39648fd3b594cd6881f68f57321af99f847369f00eb66481->enter($__internal_d54539a9115382ab39648fd3b594cd6881f68f57321af99f847369f00eb66481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Default:system-status.html.twig"));

        // line 1
        echo "<ul class=\"subfield-list four-subfield clearfix\">
  <li>
    <div class=\"title\">系统版本</div>
    <div class=\"info\">
      ";
        // line 5
        if ((isset($context["mainAppUpgrade"]) ? $context["mainAppUpgrade"] : $this->getContext($context, "mainAppUpgrade"))) {
            // line 6
            echo "        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <span class=\"text-lg\">";
            // line 7
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["mainAppUpgrade"]) ? $context["mainAppUpgrade"] : $this->getContext($context, "mainAppUpgrade")), "package", array()), "fromVersion", array()), "html", null, true);
            echo "</span>
        <a class=\"text-lg link-underline text-danger\" href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_upgrades");
            echo "\"> 有更新</a>
      ";
        } else {
            // line 10
            echo "        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">";
            // line 11
            echo twig_escape_filter($this->env, twig_constant("Topxia\\System::VERSION"), "html", null, true);
            echo "</span>
      ";
        }
        // line 13
        echo "    </div>
  </li>
  <li>
    <div class=\"title\">网校应用</div>
    <div class=\"info\">
      ";
        // line 18
        if (((isset($context["upgradeAppCount"]) ? $context["upgradeAppCount"] : $this->getContext($context, "upgradeAppCount")) == 0)) {
            // line 19
            echo "        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">已更新</span>
      ";
        } else {
            // line 22
            echo "        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <a class=\"text-lg link-underline text-danger\" href=\"";
            // line 23
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_app_upgrades");
            echo "\"> ";
            echo twig_escape_filter($this->env, (isset($context["upgradeAppCount"]) ? $context["upgradeAppCount"] : $this->getContext($context, "upgradeAppCount")), "html", null, true);
            echo " 个未更新</a>
      ";
        }
        // line 25
        echo "    </div>
  </li>
  <li>
    <div class=\"title\">教育云服务</div>
    <div class=\"info\">

      <span class=\"status-card-warp\">
        ";
        // line 32
        if (((isset($context["disabledCloudServiceCount"]) ? $context["disabledCloudServiceCount"] : $this->getContext($context, "disabledCloudServiceCount")) > 0)) {
            // line 33
            echo "          <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
          <a class=\"text-lg link-underline text-danger\" href=\"";
            // line 34
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_my_cloud_overview");
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["disabledCloudServiceCount"]) ? $context["disabledCloudServiceCount"] : $this->getContext($context, "disabledCloudServiceCount")), "html", null, true);
            echo "个未开启</a>
        ";
        } else {
            // line 36
            echo "          <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
          <span class=\"text-lg\">已开启</span>
        ";
        }
        // line 39
        echo "        <div class=\"status-card\">
          <ul class=\"open-serve-list\">
            <li>
              <span class=\"key\">云视频</span>
              ";
        // line 43
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("storage.upload_mode") == "cloud")) {
            // line 44
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>已开启</span>
              ";
        } else {
            // line 46
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cloud_video_overview");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>未开启</a>
              ";
        }
        // line 48
        echo "            </li>
            <li>
              <span class=\"key\">云文档</span>
              ";
        // line 51
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("storage.upload_mode") == "cloud")) {
            // line 52
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>已开启</span>
              ";
        } else {
            // line 54
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cloud_video_overview");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>未开启</a>
              ";
        }
        // line 56
        echo "            </li>
            <li>
              <span class=\"key\">云直播</span>
              ";
        // line 59
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("course.live_course_enabled")) {
            // line 60
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>已开启</span>
              ";
        } else {
            // line 62
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_cloud_edulive_overview");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>未开启</a>
              ";
        }
        // line 64
        echo "            </li>
            <li>
              <span class=\"key\">云短信</span>
              ";
        // line 67
        if ((_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("cloud_sms.sms_enabled"), "0") == "1")) {
            // line 68
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>已开启</span>
              ";
        } else {
            // line 70
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_sms");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>未开启</a>
              ";
        }
        // line 72
        echo "            </li>
            <li>
              <span class=\"key\">云搜索</span>
              ";
        // line 75
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("cloud_search.search_enabled")) {
            // line 76
            echo "                <span class=\"value value-success\"><i class=\"dot\"></i>已开启</span>
              ";
        } else {
            // line 78
            echo "                <a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_search");
            echo "\" class=\"value value-danger\"><i class=\"dot\"></i>未开启</a>
              ";
        }
        // line 80
        echo "            </li>
          </ul>
        </div>
      </span>
    </div>
  </li>
  <li>
    <div class=\"title\">移动客户端</div>
    <div class=\"info\">
      ";
        // line 89
        if ((($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("mobile"), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("mobile"), "enabled", array()), null)) : (null))) {
            // line 90
            echo "        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">已开启</span>
      ";
        } else {
            // line 93
            echo "        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <a href=\"";
            // line 94
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_mobile");
            echo "\" class=\"text-lg link-underline text-danger\"> 未开启</a>
      ";
        }
        // line 96
        echo "    </div>
  </li>
</ul>";
        
        $__internal_d54539a9115382ab39648fd3b594cd6881f68f57321af99f847369f00eb66481->leave($__internal_d54539a9115382ab39648fd3b594cd6881f68f57321af99f847369f00eb66481_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:system-status.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 96,  207 => 94,  204 => 93,  199 => 90,  197 => 89,  186 => 80,  180 => 78,  176 => 76,  174 => 75,  169 => 72,  163 => 70,  159 => 68,  157 => 67,  152 => 64,  146 => 62,  142 => 60,  140 => 59,  135 => 56,  129 => 54,  125 => 52,  123 => 51,  118 => 48,  112 => 46,  108 => 44,  106 => 43,  100 => 39,  95 => 36,  88 => 34,  85 => 33,  83 => 32,  74 => 25,  67 => 23,  64 => 22,  59 => 19,  57 => 18,  50 => 13,  45 => 11,  42 => 10,  37 => 8,  33 => 7,  30 => 6,  28 => 5,  22 => 1,);
    }

    public function getSource()
    {
        return "<ul class=\"subfield-list four-subfield clearfix\">
  <li>
    <div class=\"title\">系统版本</div>
    <div class=\"info\">
      {% if mainAppUpgrade %}
        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <span class=\"text-lg\">{{ mainAppUpgrade.package.fromVersion }}</span>
        <a class=\"text-lg link-underline text-danger\" href=\"{{ path(\"admin_app_upgrades\") }}\"> 有更新</a>
      {% else %}
        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">{{ constant('Topxia\\\\System::VERSION') }}</span>
      {% endif %}
    </div>
  </li>
  <li>
    <div class=\"title\">网校应用</div>
    <div class=\"info\">
      {% if upgradeAppCount == 0 %}
        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">已更新</span>
      {% else %}
        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <a class=\"text-lg link-underline text-danger\" href=\"{{ path(\"admin_app_upgrades\") }}\"> {{ upgradeAppCount }} 个未更新</a>
      {% endif %}
    </div>
  </li>
  <li>
    <div class=\"title\">教育云服务</div>
    <div class=\"info\">

      <span class=\"status-card-warp\">
        {% if   disabledCloudServiceCount > 0 %}
          <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
          <a class=\"text-lg link-underline text-danger\" href=\"{{path('admin_my_cloud_overview')}}\">{{ disabledCloudServiceCount }}个未开启</a>
        {% else %}
          <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
          <span class=\"text-lg\">已开启</span>
        {% endif %}
        <div class=\"status-card\">
          <ul class=\"open-serve-list\">
            <li>
              <span class=\"key\">云视频</span>
              {% if setting('storage.upload_mode') == \"cloud\" %}
                <span class=\"value value-success\"><i class=\"dot\"></i>已开启</span>
              {% else %}
                <a href=\"{{ path('admin_cloud_video_overview') }}\" class=\"value value-danger\"><i class=\"dot\"></i>未开启</a>
              {% endif %}
            </li>
            <li>
              <span class=\"key\">云文档</span>
              {% if setting('storage.upload_mode') == \"cloud\" %}
                <span class=\"value value-success\"><i class=\"dot\"></i>已开启</span>
              {% else %}
                <a href=\"{{ path('admin_cloud_video_overview') }}\" class=\"value value-danger\"><i class=\"dot\"></i>未开启</a>
              {% endif %}
            </li>
            <li>
              <span class=\"key\">云直播</span>
              {% if setting('course.live_course_enabled') %}
                <span class=\"value value-success\"><i class=\"dot\"></i>已开启</span>
              {% else %}
                <a href=\"{{ path('admin_cloud_edulive_overview') }}\" class=\"value value-danger\"><i class=\"dot\"></i>未开启</a>
              {% endif %}
            </li>
            <li>
              <span class=\"key\">云短信</span>
              {% if  setting('cloud_sms.sms_enabled')|default('0') == \"1\" %}
                <span class=\"value value-success\"><i class=\"dot\"></i>已开启</span>
              {% else %}
                <a href=\"{{ path('admin_edu_cloud_sms') }}\" class=\"value value-danger\"><i class=\"dot\"></i>未开启</a>
              {% endif %}
            </li>
            <li>
              <span class=\"key\">云搜索</span>
              {% if setting('cloud_search.search_enabled') %}
                <span class=\"value value-success\"><i class=\"dot\"></i>已开启</span>
              {% else %}
                <a href=\"{{ path('admin_edu_cloud_search') }}\" class=\"value value-danger\"><i class=\"dot\"></i>未开启</a>
              {% endif %}
            </li>
          </ul>
        </div>
      </span>
    </div>
  </li>
  <li>
    <div class=\"title\">移动客户端</div>
    <div class=\"info\">
      {% if setting(\"mobile\").enabled|default(null) %}
        <span class=\"glyphicon glyphicon-ok-sign text-success\"></span>
        <span class=\"text-lg\">已开启</span>
      {% else %}
        <span class=\"glyphicon glyphicon-exclamation-sign text-danger\"></span>
        <a href=\"{{ path('admin_setting_mobile') }}\" class=\"text-lg link-underline text-danger\"> 未开启</a>
      {% endif %}
    </div>
  </li>
</ul>";
    }
}

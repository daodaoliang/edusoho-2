<?php

/* TopxiaWebBundle:Default:header.html.twig */
class __TwigTemplate_bd9ebcf98f85afe4bc413adf7f611180883afdc1dd5e13e26c18e456d59bd6f2 extends Twig_Template
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
        $__internal_3f25d1385d056eb7e529c0614e47dc983ca843db5e21f77bcb42a1e328a963c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f25d1385d056eb7e529c0614e47dc983ca843db5e21f77bcb42a1e328a963c6->enter($__internal_3f25d1385d056eb7e529c0614e47dc983ca843db5e21f77bcb42a1e328a963c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Default:header.html.twig"));

        // line 1
        echo "<header class=\"es-header navbar\">
  <div class=\"navbar-header\">
    <div class=\"visible-xs  navbar-mobile\">
      <a href=\"javascript:;\" class=\"navbar-more js-navbar-more\">
        <i class=\"es-icon es-icon-menu\"></i>
      </a>
      <div class=\"html-mask\"></div>
      <div class=\"nav-mobile\">
        <form class=\"navbar-form\" action=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
          <div class=\"form-group\">
            <input class=\"form-control\" placeholder=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "\" name=\"q\">
            <button class=\"button es-icon es-icon-search\"></button>
          </div>
        </form>

        <ul class=\"nav navbar-nav\">
          ";
        // line 17
        $context["navigations"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("NavigationsTree", array());
        // line 18
        echo "          ";
        $this->loadTemplate("TopxiaWebBundle:Default:top-navigation.html.twig", "TopxiaWebBundle:Default:header.html.twig", 18)->display(array_merge($context, array("navigations" => (isset($context["navigations"]) ? $context["navigations"] : $this->getContext($context, "navigations")), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : $this->getContext($context, "siteNav")), null)) : (null)), "isMobile" => true)));
        // line 19
        echo "        </ul>
      </div>
    </div>
    <div class=\"M_header-back js-back\">
      <a><i class=\"es-icon es-icon-chevronleft\"></i></a>
    </div>
    <a href=\"";
        // line 25
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" class=\"navbar-brand\">
      ";
        // line 26
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.logo")) {
            // line 27
            echo "        <img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath(("../" . $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.logo")), ""), "html", null, true);
            echo "\">
      ";
        } else {
            // line 29
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.name", "EDUSOHO"), "html", null, true);
            echo "
      ";
        }
        // line 31
        echo "    </a>
  </div>
  <nav class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\">
      ";
        // line 35
        $this->loadTemplate("TopxiaWebBundle:Default:top-navigation.html.twig", "TopxiaWebBundle:Default:header.html.twig", 35)->display(array_merge($context, array("navigations" => (isset($context["navigations"]) ? $context["navigations"] : $this->getContext($context, "navigations")), "siteNav" => ((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : $this->getContext($context, "siteNav")), null)) : (null)), "isMobile" => false)));
        // line 36
        echo "    </ul>
    <div class=\"navbar-user ";
        // line 37
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0)) {
            echo " left ";
        }
        echo "\">
      <ul class=\"nav user-nav\">
        ";
        // line 39
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 40
            echo "          <li class=\"user-avatar-li nav-hover\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\">
              <img class=\"avatar-xs\" src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "smallAvatar", array()), "avatar.png"), "html", null, true);
            echo "\">
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li role=\"presentation\" class=\"dropdown-header\">";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "nickname", array()), "html", null, true);
            echo "</li>
              <li><a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-person\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人主页"), "html", null, true);
            echo "</a></li>
              <li><a href=\"";
            // line 47
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("settings");
            echo "\"><i class=\"es-icon es-icon-setting\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("个人设置"), "html", null, true);
            echo "</a></li>
              <li class=\"hidden-lg user-nav-li-my\">
                <a href=\"";
            // line 49
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\">
                  <i class=\"es-icon es-icon-eventnote\"></i>";
            // line 50
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的教学"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的学习"), "html", null, true);
            }
            // line 51
            echo "                </a>
              </li>
              <li><a href=\"";
            // line 53
            if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_enabled")) {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_coin");
            } else {
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_bill");
            }
            echo "\"><i class=\"es-icon es-icon-accountwallet\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("账户中心"), "html", null, true);
            echo "</a></li>

              ";
            // line 55
            if ($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->hasPermission("admin")) {
                echo "<li><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin");
                echo "\"><i class=\"es-icon es-icon-dashboard\"></i>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理后台"), "html", null, true);
                echo "</a></li>
              ";
            }
            // line 57
            echo "
              <li class=\"hidden-lg\"><a href=\"";
            // line 58
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
            echo "\"><span class=\"pull-right num\">";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()), "html", null, true);
            }
            echo "</span><i class=\"es-icon es-icon-notificationson\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
            echo "</a></li>
              <li class=\"hidden-lg\"><a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
            echo "\"><span class=\"pull-right num\">";
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()), "html", null, true);
            }
            echo "</span><i class=\"es-icon es-icon-mail\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
            echo "</a></li>
              ";
            // line 60
            if ((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile"))) {
                // line 61
                echo "                <li class=\"mobile-switch js-switch-pc visible-xs\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>";
                // line 62
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("切换电脑版"), "html", null, true);
                echo "</a></li>
              ";
            } elseif (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("wap.enabled") == 1)) {
                // line 64
                echo "                <li class=\"mobile-switch js-switch-mobile visible-xs\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("切换触屏版"), "html", null, true);
                echo "</a></li>
              ";
            }
            // line 67
            echo "              <li class=\"user-nav-li-logout\"><a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("logout");
            echo "\"><i class=\"es-icon es-icon-power\"></i>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("退出登录"), "html", null, true);
            echo "</a></li>
            </ul>
          </li>
          <li class=\"visible-lg\">
            <a href=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my");
            echo "\">
              ";
            // line 72
            if (twig_in_filter("ROLE_TEACHER", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) {
                // line 73
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的教学"), "html", null, true);
                echo "
              ";
            } else {
                // line 75
                echo "                ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的学习"), "html", null, true);
                echo "
              ";
            }
            // line 77
            echo "            </a>
          </li>
          <li class=\"visible-lg nav-hover\">

            ";
            // line 81
            if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0))) {
                // line 82
                echo "              <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
            ";
            } elseif (( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0) && (($this->getAttribute($this->getAttribute(            // line 83
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0) || ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0)))) {
                // line 84
                echo "              <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
            ";
            } else {
                // line 86
                echo "              <a><i class=\"es-icon es-icon-mail\"></i></a>
            ";
            }
            // line 88
            echo "
            <ul class=\"dropdown-menu\" role=\"menu\">
              ";
            // line 90
            if ( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0)) {
                // line 91
                echo "                <li>
                  <a href=\"";
                // line 92
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("notification");
                echo "\">
                    <span class=\"pull-right num\">";
                // line 93
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()) > 0)) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newNotificationNum", array()), "html", null, true);
                }
                echo "</span>
                    <i class=\"es-icon es-icon-notificationson\"></i>";
                // line 94
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
                echo "
                  </a>
                </li>
              ";
            }
            // line 98
            echo "              <li>
                <a href=\"";
            // line 99
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("message");
            echo "\">
                  <span class=\"pull-right num\">";
            // line 100
            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()) > 0)) {
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "newMessageNum", array()), "html", null, true);
            }
            echo "</span>
                  <i class=\"es-icon es-icon-mail\"></i>";
            // line 101
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("私信"), "html", null, true);
            echo "
                </a>
              </li>
            </ul>
          </li>
        ";
        } else {
            // line 107
            echo "          <li class=\"user-avatar-li nav-hover visible-xs\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\">
              <img class=\"avatar-xs\" src=\"";
            // line 109
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/avatar.png"), "html", null, true);
            echo "\">
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li class=\"user-nav-li-login\"><a href=\"";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">
                <i class=\"es-icon es-icon-denglu\"></i>
                ";
            // line 114
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
            echo "</a></li>
              <li class=\"user-nav-li-register\"><a href=\"";
            // line 115
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">
                <i class=\"es-icon es-icon-zhuce\"></i>
                ";
            // line 117
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册"), "html", null, true);
            echo "</a></li>
              ";
            // line 118
            if ((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile"))) {
                // line 119
                echo "                <li class=\"mobile-switch js-switch-pc\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>
                  ";
                // line 121
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("切换电脑版"), "html", null, true);
                echo "</a></li>
              ";
            } elseif (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("wap.enabled") == 1)) {
                // line 123
                echo "                <li class=\"mobile-switch js-switch-mobile\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>              
                  ";
                // line 125
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("切换触屏版"), "html", null, true);
                echo "</a></li>
              ";
            }
            // line 127
            echo "            </ul>
          </li>
          <li class=\"hidden-xs\"><a href=\"";
            // line 129
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录"), "html", null, true);
            echo "</a></li>
          <li class=\"hidden-xs\"><a href=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("register", array("goto" => ((array_key_exists("_target_path", $context)) ? (_twig_default_filter((isset($context["_target_path"]) ? $context["_target_path"] : $this->getContext($context, "_target_path")), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))) : ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "REQUEST_URI"), "method"))))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("注册"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 132
        echo "        ";
        // line 133
        echo "      </ul>
      <form class=\"navbar-form navbar-right hidden-xs hidden-sm\" action=\"";
        // line 134
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("search");
        echo "\" method=\"get\">
        <div class=\"form-group\">
          <input class=\"form-control js-search\" name=\"q\" placeholder=\"";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "\">
          <button class=\"button es-icon es-icon-search\"></button>
        </div>
      </form>
    </div>
  </nav>
</header>
";
        // line 143
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("default/header.js");
        
        $__internal_3f25d1385d056eb7e529c0614e47dc983ca843db5e21f77bcb42a1e328a963c6->leave($__internal_3f25d1385d056eb7e529c0614e47dc983ca843db5e21f77bcb42a1e328a963c6_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  381 => 143,  371 => 136,  366 => 134,  363 => 133,  361 => 132,  354 => 130,  348 => 129,  344 => 127,  339 => 125,  335 => 123,  330 => 121,  326 => 119,  324 => 118,  320 => 117,  315 => 115,  311 => 114,  306 => 112,  300 => 109,  296 => 107,  287 => 101,  281 => 100,  277 => 99,  274 => 98,  267 => 94,  261 => 93,  257 => 92,  254 => 91,  252 => 90,  248 => 88,  244 => 86,  240 => 84,  238 => 83,  235 => 82,  233 => 81,  227 => 77,  221 => 75,  215 => 73,  213 => 72,  209 => 71,  199 => 67,  194 => 65,  191 => 64,  186 => 62,  183 => 61,  181 => 60,  171 => 59,  161 => 58,  158 => 57,  149 => 55,  138 => 53,  134 => 51,  128 => 50,  124 => 49,  117 => 47,  111 => 46,  107 => 45,  101 => 42,  97 => 40,  95 => 39,  88 => 37,  85 => 36,  83 => 35,  77 => 31,  71 => 29,  65 => 27,  63 => 26,  59 => 25,  51 => 19,  48 => 18,  46 => 17,  37 => 11,  32 => 9,  22 => 1,);
    }

    public function getSource()
    {
        return "<header class=\"es-header navbar\">
  <div class=\"navbar-header\">
    <div class=\"visible-xs  navbar-mobile\">
      <a href=\"javascript:;\" class=\"navbar-more js-navbar-more\">
        <i class=\"es-icon es-icon-menu\"></i>
      </a>
      <div class=\"html-mask\"></div>
      <div class=\"nav-mobile\">
        <form class=\"navbar-form\" action=\"{{ path('search') }}\" method=\"get\">
          <div class=\"form-group\">
            <input class=\"form-control\" placeholder=\"{{'搜索'|trans}}\" name=\"q\">
            <button class=\"button es-icon es-icon-search\"></button>
          </div>
        </form>

        <ul class=\"nav navbar-nav\">
          {% set navigations = data('NavigationsTree', {}) %}
          {% include 'TopxiaWebBundle:Default:top-navigation.html.twig' with {navigations: navigations,siteNav: siteNav|default(null), isMobile: true} %}
        </ul>
      </div>
    </div>
    <div class=\"M_header-back js-back\">
      <a><i class=\"es-icon es-icon-chevronleft\"></i></a>
    </div>
    <a href=\"{{ path('homepage') }}\" class=\"navbar-brand\">
      {% if setting('site.logo') %}
        <img src=\"{{ filepath('../' ~ setting('site.logo'),'') }}\">
      {% else %}
        {{ setting('site.name', 'EDUSOHO') }}
      {% endif %}
    </a>
  </div>
  <nav class=\"collapse navbar-collapse\">
    <ul class=\"nav navbar-nav clearfix hidden-xs \" id=\"nav\">
      {% include 'TopxiaWebBundle:Default:top-navigation.html.twig' with {navigations: navigations,siteNav: siteNav|default(null), isMobile: false} %}
    </ul>
    <div class=\"navbar-user {% if setting('esBar.enabled', 0) %} left {% endif %}\">
      <ul class=\"nav user-nav\">
        {% if app.user %}
          <li class=\"user-avatar-li nav-hover\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\">
              <img class=\"avatar-xs\" src=\"{{ filepath(app.user.smallAvatar, 'avatar.png') }}\">
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li role=\"presentation\" class=\"dropdown-header\">{{ app.user.nickname }}</li>
              <li><a href=\"{{ path('user_show', {id:app.user.id}) }}\"><i class=\"es-icon es-icon-person\"></i>{{'个人主页'|trans}}</a></li>
              <li><a href=\"{{ path('settings') }}\"><i class=\"es-icon es-icon-setting\"></i>{{'个人设置'|trans}}</a></li>
              <li class=\"hidden-lg user-nav-li-my\">
                <a href=\"{{ path('my') }}\">
                  <i class=\"es-icon es-icon-eventnote\"></i>{% if 'ROLE_TEACHER' in app.user.roles %}{{'我的教学'|trans}}{% else %}{{'我的学习'|trans}}{% endif %}
                </a>
              </li>
              <li><a href=\"{% if setting('coin.coin_enabled') %}{{path('my_coin')}}{% else %}{{path('my_bill')}}{% endif %}\"><i class=\"es-icon es-icon-accountwallet\"></i>{{'账户中心'|trans}}</a></li>

              {% if has_permission('admin') %}<li><a href=\"{{ path('admin') }}\"><i class=\"es-icon es-icon-dashboard\"></i>{{'管理后台'|trans}}</a></li>
              {% endif %}

              <li class=\"hidden-lg\"><a href=\"{{ path('notification') }}\"><span class=\"pull-right num\">{% if app.user.newNotificationNum > 0 %}{{ app.user.newNotificationNum }}{% endif %}</span><i class=\"es-icon es-icon-notificationson\"></i>{{'通知'|trans}}</a></li>
              <li class=\"hidden-lg\"><a href=\"{{ path('message') }}\"><span class=\"pull-right num\">{% if app.user.newMessageNum > 0 %}{{ app.user.newMessageNum }}{% endif %}</span><i class=\"es-icon es-icon-mail\"></i>{{'私信'|trans}}</a></li>
              {% if mobile %}
                <li class=\"mobile-switch js-switch-pc visible-xs\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>{{'切换电脑版'|trans}}</a></li>
              {% elseif setting('wap.enabled') == 1 %}
                <li class=\"mobile-switch js-switch-mobile visible-xs\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>{{'切换触屏版'|trans}}</a></li>
              {% endif %}
              <li class=\"user-nav-li-logout\"><a href=\"{{ path('logout') }}\"><i class=\"es-icon es-icon-power\"></i>{{'退出登录'|trans}}</a></li>
            </ul>
          </li>
          <li class=\"visible-lg\">
            <a href=\"{{ path('my') }}\">
              {% if 'ROLE_TEACHER' in app.user.roles %}
                {{'我的教学'|trans}}
              {% else %}
                {{'我的学习'|trans}}
              {% endif %}
            </a>
          </li>
          <li class=\"visible-lg nav-hover\">

            {% if setting('esBar.enabled', 0) and app.user.newMessageNum > 0 %}
              <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
            {% elseif ( not setting('esBar.enabled', 0)) and ( app.user.newNotificationNum > 0 or app.user.newMessageNum > 0) %}
              <a class=\"hasmessage\"><i class=\"es-icon es-icon-mail\"></i><span class=\"dot\"></span></a>
            {% else %}
              <a><i class=\"es-icon es-icon-mail\"></i></a>
            {% endif %}

            <ul class=\"dropdown-menu\" role=\"menu\">
              {% if not setting('esBar.enabled', 0) %}
                <li>
                  <a href=\"{{ path('notification') }}\">
                    <span class=\"pull-right num\">{% if app.user.newNotificationNum > 0 %}{{ app.user.newNotificationNum }}{% endif %}</span>
                    <i class=\"es-icon es-icon-notificationson\"></i>{{'通知'|trans}}
                  </a>
                </li>
              {% endif %}
              <li>
                <a href=\"{{ path('message') }}\">
                  <span class=\"pull-right num\">{% if app.user.newMessageNum > 0 %}{{ app.user.newMessageNum }}{% endif %}</span>
                  <i class=\"es-icon es-icon-mail\"></i>{{'私信'|trans}}
                </a>
              </li>
            </ul>
          </li>
        {% else %}
          <li class=\"user-avatar-li nav-hover visible-xs\">
            <a href=\"javascript:;\" class=\"dropdown-toggle\">
              <img class=\"avatar-xs\" src=\"{{ asset('assets/img/default/avatar.png') }}\">
            </a>
            <ul class=\"dropdown-menu\" role=\"menu\">
              <li class=\"user-nav-li-login\"><a href=\"{{ path('login', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">
                <i class=\"es-icon es-icon-denglu\"></i>
                {{'登录'|trans}}</a></li>
              <li class=\"user-nav-li-register\"><a href=\"{{ path('register', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">
                <i class=\"es-icon es-icon-zhuce\"></i>
                {{'注册'|trans}}</a></li>
              {% if mobile %}
                <li class=\"mobile-switch js-switch-pc\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>
                  {{'切换电脑版'|trans}}</a></li>
              {% elseif setting('wap.enabled') == 1  %}
                <li class=\"mobile-switch js-switch-mobile\"><a href=\"javascript:;\">
                  <i class=\"es-icon es-icon-qiehuan\"></i>              
                  {{'切换触屏版'|trans}}</a></li>
              {% endif %}
            </ul>
          </li>
          <li class=\"hidden-xs\"><a href=\"{{ path('login', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">{{'登录'|trans}}</a></li>
          <li class=\"hidden-xs\"><a href=\"{{ path('register', {goto:_target_path|default(app.request.server.get('REQUEST_URI'))}) }}\">{{'注册'|trans}}</a></li>
        {% endif %}
        {# {% include 'TopxiaWebBundle:Default:switch-language.html.twig' %} #}
      </ul>
      <form class=\"navbar-form navbar-right hidden-xs hidden-sm\" action=\"{{ path('search') }}\" method=\"get\">
        <div class=\"form-group\">
          <input class=\"form-control js-search\" name=\"q\" placeholder=\"{{'搜索'|trans}}\">
          <button class=\"button es-icon es-icon-search\"></button>
        </div>
      </form>
    </div>
  </nav>
</header>
{% do load_script('default/header.js') %}";
    }
}

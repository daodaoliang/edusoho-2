<?php

/* TopxiaWebBundle::script_boot.html.twig */
class __TwigTemplate_fed6e7bc16667ecdba87c7d8b76c4fb294ce58d08232e539a6df53ba9629ebb0 extends Twig_Template
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
        $__internal_a23193f6929690e8d4734b41b75fad812513350065aa9662197bb5940670e43f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23193f6929690e8d4734b41b75fad812513350065aa9662197bb5940670e43f->enter($__internal_a23193f6929690e8d4734b41b75fad812513350065aa9662197bb5940670e43f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle::script_boot.html.twig"));

        // line 1
        echo "<script>
  var app = {};
  app.debug = ";
        // line 3
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "debug", array())) {
            echo "true";
        } else {
            echo "false";
        }
        echo ";
  app.version = '";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetsVersion(), "html", null, true);
        echo "';
  app.httpHost = '";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getSchemeAndHttpHost", array(), "method"), "html", null, true);
        echo "';
  app.basePath = '";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getCdn(), "html", null, true);
        echo "';
  app.theme = '";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting(_twig_default_filter("theme.uri", "default")), "html", null, true);
        echo "';
  app.themeGlobalScript = '";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getThemeGlobalScript(), "html", null, true);
        echo "';
  app.jsPaths = ";
        // line 9
        echo twig_jsonencode_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getJsPaths());
        echo ";

  app.crontab = '";
        // line 11
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("common_crontab");
        echo "';
  ";
        // line 12
        $context["crontabNextExecutedTime"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getNextExecutedTime();
        // line 13
        echo "  ";
        $context["disableWebCrontab"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.disable_web_crontab", 0);
        // line 14
        echo "  ";
        if ((((isset($context["crontabNextExecutedTime"]) ? $context["crontabNextExecutedTime"] : $this->getContext($context, "crontabNextExecutedTime")) > 0) && ((isset($context["disableWebCrontab"]) ? $context["disableWebCrontab"] : $this->getContext($context, "disableWebCrontab")) != 1))) {
            // line 15
            echo "    ";
            if ((twig_date_converter($this->env, twig_date_format_filter($this->env, (isset($context["crontabNextExecutedTime"]) ? $context["crontabNextExecutedTime"] : $this->getContext($context, "crontabNextExecutedTime")), "Y-m-d H:i:s")) < twig_date_converter($this->env))) {
                // line 16
                echo "      app.scheduleCrontab = '";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("common_crontab");
                echo "';
    ";
            }
            // line 18
            echo "  ";
        }
        // line 19
        echo "
  var CKEDITOR_BASEPATH = app.basePath + '/assets/libs/ckeditor/4.6.7/';
  var CLOUD_FILE_SERVER = \"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("developer.cloud_file_server", ""), "html", null, true);
        echo "\"; 

  app.config = ";
        // line 23
        echo twig_jsonencode_filter(array("api" => array("weibo" => array("key" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("login_bind.weibo_key", "")), "qq" => array("key" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("login_bind.qq_key", "")), "douban" => array("key" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("login_bind.douban_key", "")), "renren" => array("key" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("login_bind.renren_key", ""))), "cloud" => array("video_player" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getParameter("cloud.video_player"), "video_player_watermark_plugin" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getParameter("cloud.video_player_watermark_plugin"), "video_player_fingerprint_plugin" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getParameter("cloud.video_player_fingerprint_plugin")), "loading_img_path" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/img/default/loading.gif")));
        // line 38
        echo ";

  app.arguments = {};
  ";
        // line 41
        if (array_key_exists("script_controller", $context)) {
            // line 42
            echo "    app.controller = '";
            echo twig_escape_filter($this->env, (isset($context["script_controller"]) ? $context["script_controller"] : $this->getContext($context, "script_controller")), "html", null, true);
            echo "';
  ";
        }
        // line 44
        echo "  ";
        if (array_key_exists("script_arguments", $context)) {
            // line 45
            echo "    app.arguments = ";
            echo twig_jsonencode_filter((isset($context["script_arguments"]) ? $context["script_arguments"] : $this->getContext($context, "script_arguments")));
            echo ";
  ";
        }
        // line 47
        echo "  
  app.scripts = ";
        // line 48
        echo twig_jsonencode_filter(_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->exportScripts(), null));
        echo ";
  
  app.uploadUrl = '";
        // line 50
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_upload");
        echo "';
  app.imgCropUrl = '";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("file_img_crop");
        echo "';
  app.lessonCopyEnabled = '";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("course.copy_enabled", "0"), "html", null, true);
        echo "';
  app.cloudSdkCdn = '";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("developer.cloud_sdk_cdn"), "html", null, true);
        echo "';
  app.mainScript = '";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["script_main"]) ? $context["script_main"] : $this->getContext($context, "script_main")), "html", null, true);
        echo "';
  app.lang = '";
        // line 55
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "html", null, true);
        echo "';
</script>
<script src=\"";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/bazingajstranslation/js/translator.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 58
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("bazinga_jstranslation_js", array("domain" => "js"));
        echo "\"></script>
<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/seajs/seajs/2.2.1/sea.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/seajs/seajs-style/1.0.2/seajs-style.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/seajs/seajs-text/1.1.1/seajs-text.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/seajs-global-config.js"), "html", null, true);
        echo "\"></script>
<script>
  seajs.use(app.mainScript);
</script>";
        
        $__internal_a23193f6929690e8d4734b41b75fad812513350065aa9662197bb5940670e43f->leave($__internal_a23193f6929690e8d4734b41b75fad812513350065aa9662197bb5940670e43f_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::script_boot.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 62,  165 => 61,  161 => 60,  157 => 59,  153 => 58,  149 => 57,  144 => 55,  140 => 54,  136 => 53,  132 => 52,  128 => 51,  124 => 50,  119 => 48,  116 => 47,  110 => 45,  107 => 44,  101 => 42,  99 => 41,  94 => 38,  92 => 23,  87 => 21,  83 => 19,  80 => 18,  74 => 16,  71 => 15,  68 => 14,  65 => 13,  63 => 12,  59 => 11,  54 => 9,  50 => 8,  46 => 7,  42 => 6,  38 => 5,  34 => 4,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<script>
  var app = {};
  app.debug = {% if app.debug %}true{% else %}false{% endif %};
  app.version = '{{ assets_version() }}';
  app.httpHost = '{{ app.request.getSchemeAndHttpHost() }}';
  app.basePath = '{{ cdn() }}';
  app.theme = '{{ setting(\"theme.uri\"|default(\"default\")) }}';
  app.themeGlobalScript = '{{ theme_global_script() }}';
  app.jsPaths = {{ js_paths()|json_encode|raw }};

  app.crontab = '{{ path('common_crontab') }}';
  {% set crontabNextExecutedTime = crontab_next_executed_time() %}
  {% set disableWebCrontab = setting('magic.disable_web_crontab', 0) %}
  {% if crontabNextExecutedTime > 0 and disableWebCrontab != 1 %}
    {% if date(crontabNextExecutedTime|date('Y-m-d H:i:s')) < date() %}
      app.scheduleCrontab = '{{ path('common_crontab') }}';
    {% endif %}
  {% endif %}

  var CKEDITOR_BASEPATH = app.basePath + '/assets/libs/ckeditor/4.6.7/';
  var CLOUD_FILE_SERVER = \"{{ setting('developer.cloud_file_server', '') }}\"; 

  app.config = {{
    {
      api:{
        weibo:{key:setting('login_bind.weibo_key', '')},
        qq:{key:setting('login_bind.qq_key', '')},
        douban:{key:setting('login_bind.douban_key', '')},
        renren:{key:setting('login_bind.renren_key', '')}
      },
      cloud: {
        video_player: parameter('cloud.video_player'),
        video_player_watermark_plugin: parameter('cloud.video_player_watermark_plugin'),
        video_player_fingerprint_plugin: parameter('cloud.video_player_fingerprint_plugin')
      },
      loading_img_path: asset('assets/img/default/loading.gif'),
    }|json_encode|raw
  }};

  app.arguments = {};
  {% if script_controller is defined %}
    app.controller = '{{ script_controller }}';
  {% endif %}
  {% if script_arguments is defined %}
    app.arguments = {{ script_arguments|json_encode|raw }};
  {% endif %}
  
  app.scripts = {{ export_scripts()|default(null)|json_encode|raw }};
  
  app.uploadUrl = '{{path(\"file_upload\")}}';
  app.imgCropUrl = '{{path(\"file_img_crop\")}}';
  app.lessonCopyEnabled = '{{setting(\"course.copy_enabled\",\"0\")}}';
  app.cloudSdkCdn = '{{ setting(\"developer.cloud_sdk_cdn\") }}';
  app.mainScript = '{{ script_main }}';
  app.lang = '{{ app.request.locale }}';
</script>
<script src=\"{{ asset('bundles/bazingajstranslation/js/translator.min.js') }}\"></script>
<script src=\"{{ url('bazinga_jstranslation_js', {'domain': 'js'}) }}\"></script>
<script src=\"{{ asset('assets/libs/seajs/seajs/2.2.1/sea.js') }}\"></script>
<script src=\"{{ asset('assets/libs/seajs/seajs-style/1.0.2/seajs-style.js') }}\"></script>
<script src=\"{{ asset('assets/libs/seajs/seajs-text/1.1.1/seajs-text.min.js') }}\"></script>
<script src=\"{{ asset('assets/libs/seajs-global-config.js') }}\"></script>
<script>
  seajs.use(app.mainScript);
</script>";
    }
}

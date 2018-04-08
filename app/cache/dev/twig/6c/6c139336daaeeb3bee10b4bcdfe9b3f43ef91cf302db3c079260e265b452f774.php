<?php

/* TopxiaWebBundle:Default:stylesheet.html.twig */
class __TwigTemplate_d5a6dc5af0a66b37091a6eb68a6fcae29ae1c603dfb9cff5bb4d339cb2431694 extends Twig_Template
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
        $__internal_507499800de2feaab434f0cd74ef7e3fc4973a14ee7840f3bb015d5506cad17d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507499800de2feaab434f0cd74ef7e3fc4973a14ee7840f3bb015d5506cad17d->enter($__internal_507499800de2feaab434f0cd74ef7e3fc4973a14ee7840f3bb015d5506cad17d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Default:stylesheet.html.twig"));

        // line 1
        if (((array_key_exists("isEditColor", $context)) ? (_twig_default_filter((isset($context["isEditColor"]) ? $context["isEditColor"] : $this->getContext($context, "isEditColor")), 0)) : (0))) {
            // line 2
            echo "\t";
            $context["maincolor"] = (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "config", array(), "any", false, true), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "config", array(), "any", false, true), "maincolor", array()), "default")) : ("default"));
            // line 3
            echo "\t";
            $context["navigationcolor"] = (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "config", array(), "any", false, true), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "config", array(), "any", false, true), "navigationcolor", array()), "default")) : ("default"));
        } else {
            // line 5
            echo "\t";
            $context["maincolor"] = (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "confirmConfig", array(), "any", false, true), "maincolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "confirmConfig", array(), "any", false, true), "maincolor", array()), "default")) : ("default"));
            // line 6
            echo "\t";
            $context["navigationcolor"] = (($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "confirmConfig", array(), "any", false, true), "navigationcolor", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "confirmConfig", array(), "any", false, true), "navigationcolor", array()), "default")) : ("default"));
        }
        // line 8
        echo "
";
        // line 9
        if (((isset($context["maincolor"]) ? $context["maincolor"] : $this->getContext($context, "maincolor")) == "default")) {
            // line 10
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/bootstrap/css/bootstrap.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        } else {
            // line 12
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("assets/v2/bootstrap/css/bootstrap-" . (isset($context["maincolor"]) ? $context["maincolor"] : $this->getContext($context, "maincolor"))) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 14
        echo "
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/common.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/css/font-awesome.min.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/css/es-icon.css"), "html", null, true);
        echo "\" />

";
        // line 19
        if (((isset($context["maincolor"]) ? $context["maincolor"] : $this->getContext($context, "maincolor")) == "default")) {
            // line 20
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/v2/css/main.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        } else {
            // line 22
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("assets/v2/css/main-" . (isset($context["maincolor"]) ? $context["maincolor"] : $this->getContext($context, "maincolor"))) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 24
        echo "
";
        // line 25
        $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method");
        // line 26
        if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) != "zh_CN")) {
            // line 27
            echo "<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("assets/v2/css/i18n/" . (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale"))) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 29
        echo "
";
        // line 30
        if (((isset($context["navigationcolor"]) ? $context["navigationcolor"] : $this->getContext($context, "navigationcolor")) != "default")) {
            // line 31
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("assets/v2/css/header-" . (isset($context["navigationcolor"]) ? $context["navigationcolor"] : $this->getContext($context, "navigationcolor"))) . ".css")), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        // line 33
        echo "
";
        // line 34
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method") == "ug_CN")) {
            // line 35
            echo "\t<link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/rtl/css/rtl.css"), "html", null, true);
            echo "\" rel=\"stylesheet\" />
";
        }
        
        $__internal_507499800de2feaab434f0cd74ef7e3fc4973a14ee7840f3bb015d5506cad17d->leave($__internal_507499800de2feaab434f0cd74ef7e3fc4973a14ee7840f3bb015d5506cad17d_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:stylesheet.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 35,  112 => 34,  109 => 33,  103 => 31,  101 => 30,  98 => 29,  92 => 27,  90 => 26,  88 => 25,  85 => 24,  79 => 22,  73 => 20,  71 => 19,  66 => 17,  62 => 16,  58 => 15,  55 => 14,  49 => 12,  43 => 10,  41 => 9,  38 => 8,  34 => 6,  31 => 5,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if isEditColor|default(0) %}
\t{% set maincolor = config.config.maincolor|default('default') %}
\t{% set navigationcolor = config.config.navigationcolor|default('default') %}
{% else %}
\t{% set maincolor = config.confirmConfig.maincolor|default('default') %}
\t{% set navigationcolor = config.confirmConfig.navigationcolor|default('default') %}
{% endif %}

{% if maincolor == 'default' %}
\t<link href=\"{{ asset('assets/v2/bootstrap/css/bootstrap.css') }}\" rel=\"stylesheet\" />
{% else %}
\t<link href=\"{{ asset('assets/v2/bootstrap/css/bootstrap-' ~ maincolor ~ '.css') }}\" rel=\"stylesheet\" />
{% endif %}

<link rel=\"stylesheet\" media=\"screen\" href=\"{{ asset('assets/css/common.css') }}\" />
<link rel=\"stylesheet\" media=\"screen\" href=\"{{ asset('assets/css/font-awesome.min.css') }}\" />
<link rel=\"stylesheet\" media=\"screen\" href=\"{{ asset('assets/v2/css/es-icon.css') }}\" />

{% if maincolor == 'default' %}
\t<link href=\"{{ asset('assets/v2/css/main.css') }}\" rel=\"stylesheet\" />
{% else %}
\t<link href=\"{{ asset('assets/v2/css/main-' ~ maincolor ~ '.css') }}\" rel=\"stylesheet\" />
{% endif %}

{% set locale = app.request.getLocale() %}
{% if locale != 'zh_CN' %}
<link href=\"{{ asset('assets/v2/css/i18n/' ~ locale ~ '.css') }}\" rel=\"stylesheet\" />
{% endif %}

{% if navigationcolor != 'default' %}
\t<link href=\"{{ asset('assets/v2/css/header-' ~ navigationcolor ~ '.css') }}\" rel=\"stylesheet\" />
{% endif %}

{% if app.request.getLocale() == 'ug_CN' %}
\t<link href=\"{{ asset('assets/rtl/css/rtl.css') }}\" rel=\"stylesheet\" />
{% endif %}
";
    }
}

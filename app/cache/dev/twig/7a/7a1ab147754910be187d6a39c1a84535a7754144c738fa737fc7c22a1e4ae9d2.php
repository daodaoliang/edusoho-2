<?php

/* TopxiaWebBundle:Default:index.html.twig */
class __TwigTemplate_efaf2c11c119ef2c0b48f3ca35b2e36f215beb9f1aa886c7ef09348e6e5b5adc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'full_content' => array($this, 'block_full_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a4e9b54769d7b87c049f2691340b5d9a83d54c8d6b9d764224e7e5d7a0f041e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4e9b54769d7b87c049f2691340b5d9a83d54c8d6b9d764224e7e5d7a0f041e9->enter($__internal_a4e9b54769d7b87c049f2691340b5d9a83d54c8d6b9d764224e7e5d7a0f041e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Default:index.html.twig"));

        // line 6
        $context["appDownload"] = (( !((array_key_exists("custom", $context)) ? (_twig_default_filter((isset($context["custom"]) ? $context["custom"] : $this->getContext($context, "custom")), 0)) : (0)) && $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isESCopyright()) && (($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("mobile"), "enabled", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("mobile"), "enabled", array()), null)) : (null)));
        // line 7
        if ((isset($context["appDownload"]) ? $context["appDownload"] : $this->getContext($context, "appDownload"))) {
            // line 8
            $context["bodyClass"] = "homepage  has-app";
        } else {
            // line 10
            $context["bodyClass"] = "homepage";
        }
        // line 13
        $context["siteNav"] = "/";
        // line 14
        $context["script_controller"] = "index";
        // line 15
        $context["_target_path"] = $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        // line 17
        $context["currentTheme"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\ThemeExtension')->getCurrentTheme();
        // line 18
        $context["themeConfig"] = ((((array_key_exists("isEditColor", $context)) ? (_twig_default_filter((isset($context["isEditColor"]) ? $context["isEditColor"] : $this->getContext($context, "isEditColor")), false)) : (false))) ? ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "config", array())) : ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "confirmConfig", array())));
        // line 19
        $context["allConfig"] = $this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "allConfig", array());
        // line 21
        $context["isIndex"] = true;
        // line 22
        $context["consultDisplay"] = true;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4e9b54769d7b87c049f2691340b5d9a83d54c8d6b9d764224e7e5d7a0f041e9->leave($__internal_a4e9b54769d7b87c049f2691340b5d9a83d54c8d6b9d764224e7e5d7a0f041e9_prof);

    }

    // line 3
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_090eee8a45505f958d5638522528b91b0986461eb9047a6d81af31d8362c5cbd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_090eee8a45505f958d5638522528b91b0986461eb9047a6d81af31d8362c5cbd->enter($__internal_090eee8a45505f958d5638522528b91b0986461eb9047a6d81af31d8362c5cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
        
        $__internal_090eee8a45505f958d5638522528b91b0986461eb9047a6d81af31d8362c5cbd->leave($__internal_090eee8a45505f958d5638522528b91b0986461eb9047a6d81af31d8362c5cbd_prof);

    }

    // line 4
    public function block_description($context, array $blocks = array())
    {
        $__internal_89d2828d16d5a4bd2a9309271951c37ce62dcac9b5869dcf79d9c641dac8a32a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89d2828d16d5a4bd2a9309271951c37ce62dcac9b5869dcf79d9c641dac8a32a->enter($__internal_89d2828d16d5a4bd2a9309271951c37ce62dcac9b5869dcf79d9c641dac8a32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.seo_description"), "html", null, true);
        
        $__internal_89d2828d16d5a4bd2a9309271951c37ce62dcac9b5869dcf79d9c641dac8a32a->leave($__internal_89d2828d16d5a4bd2a9309271951c37ce62dcac9b5869dcf79d9c641dac8a32a_prof);

    }

    // line 24
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_18139ec341deb0358ef76068a091211f34e44fcd4048b7a7284fede558ad163f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18139ec341deb0358ef76068a091211f34e44fcd4048b7a7284fede558ad163f->enter($__internal_18139ec341deb0358ef76068a091211f34e44fcd4048b7a7284fede558ad163f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 25
        echo "  ";
        if ((isset($context["appDownload"]) ? $context["appDownload"] : $this->getContext($context, "appDownload"))) {
            // line 26
            echo "    ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Default:appDownload"));
            echo "
  ";
        }
        // line 28
        echo "    ";
        $asm89CacheStrategy1 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey("jianmo/home/top/banner", 600        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 29
                echo "      ";
                echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\BlockExtension')->showBlock("jianmo:home_top_banner");
                echo "
    ";
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
        // line 31
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["themeConfig"]) ? $context["themeConfig"] : null), "blocks", array(), "any", false, true), "left", array()), array())) : (array())));
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
        foreach ($context['_seq'] as $context["_key"] => $context["config"]) {
            // line 32
            echo "
      ";
            // line 33
            $context["code"] = $this->getAttribute($context["config"], "code", array());
            // line 34
            echo "      ";
            if ((((($this->getAttribute($context["config"], "sortName", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "sortName", array()), "")) : ("")) == "recommended") && ((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")) == "category-course"))) {
                // line 35
                echo "        ";
                $context["code"] = "recommend-course";
                // line 36
                echo "      ";
            }
            // line 37
            echo "
      ";
            // line 38
            $context["category"] = (((($this->getAttribute($context["config"], "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "categoryId", array()), 0)) : (0))) ? ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Category", array("categoryId" => $this->getAttribute($context["config"], "categoryId", array())))) : (null));
            // line 39
            echo "      ";
            if (((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")) == "friend-link")) {
                // line 40
                echo "         ";
                $this->loadTemplate((("TopxiaWebBundle:Default:" . (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"))) . ".html.twig"), "TopxiaWebBundle:Default:index.html.twig", 40)->display(array_merge($context, array("friendlyLinks" => (isset($context["friendlyLinks"]) ? $context["friendlyLinks"] : $this->getContext($context, "friendlyLinks")))));
                // line 41
                echo "      ";
            } elseif (((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")) != "footer-link")) {
                // line 42
                echo "        ";
                if (((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")) != "course-grid-with-condition-index")) {
                    // line 43
                    echo "          ";
                    $asm89CacheStrategy2 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
                    $asm89Key2 = $asm89CacheStrategy2->generateKey(("jianmo/default/" . (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"))), 600                    );
                    $asm89CacheBody2 = $asm89CacheStrategy2->fetchBlock($asm89Key2);
                    if ($asm89CacheBody2 === false) {
                        ob_start();
                            // line 44
                            echo "            ";
                            $this->loadTemplate((("TopxiaWebBundle:Default:" . (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"))) . ".html.twig"), "TopxiaWebBundle:Default:index.html.twig", 44)->display(array_merge($context, array("config" => $context["config"], "category" => (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")))));
                            // line 45
                            echo "          ";
                        
                        $asm89CacheBody2 = ob_get_clean();
                        $asm89CacheStrategy2->saveBlock($asm89Key2, $asm89CacheBody2);
                    }
                    echo $asm89CacheBody2;
                    // line 46
                    echo "        ";
                } else {
                    // line 47
                    echo "          ";
                    $this->loadTemplate((("TopxiaWebBundle:Default:" . (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"))) . ".html.twig"), "TopxiaWebBundle:Default:index.html.twig", 47)->display(array_merge($context, array("config" => $context["config"], "category" => (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")))));
                    // line 48
                    echo "        ";
                }
                // line 49
                echo "      ";
            }
            // line 50
            echo "    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['config'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:Default:Mobile/footer-tool-bar.html.twig", "TopxiaWebBundle:Default:index.html.twig", 51)->display(array_merge($context, array("mobile_tool_bar" => "index")));
        
        $__internal_18139ec341deb0358ef76068a091211f34e44fcd4048b7a7284fede558ad163f->leave($__internal_18139ec341deb0358ef76068a091211f34e44fcd4048b7a7284fede558ad163f_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 51,  197 => 50,  194 => 49,  191 => 48,  188 => 47,  185 => 46,  178 => 45,  175 => 44,  168 => 43,  165 => 42,  162 => 41,  159 => 40,  156 => 39,  154 => 38,  151 => 37,  148 => 36,  145 => 35,  142 => 34,  140 => 33,  137 => 32,  119 => 31,  109 => 29,  102 => 28,  96 => 26,  93 => 25,  87 => 24,  75 => 4,  63 => 3,  56 => 1,  54 => 22,  52 => 21,  50 => 19,  48 => 18,  46 => 17,  44 => 15,  42 => 14,  40 => 13,  37 => 10,  34 => 8,  32 => 7,  30 => 6,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle::layout.html.twig' %}

{% block keywords %}{{ setting('site.seo_keywords') }}{% endblock %}
{% block description %}{{ setting('site.seo_description') }}{% endblock %}

{% set appDownload = ( not custom | default(0) ) and ( is_ES_copyright() ) and ( setting(\"mobile\").enabled|default(null) ) %}
{% if appDownload %}
  {% set bodyClass = 'homepage  has-app' %}
{% else %}
  {% set bodyClass = 'homepage' %}
{% endif %}

{% set siteNav = '/' %}
{% set script_controller = 'index' %}
{% set _target_path = path('homepage') %}

{% set currentTheme = current_theme() %}
{% set themeConfig = isEditColor|default(false) ? currentTheme.config : currentTheme.confirmConfig %}
{% set allConfig = currentTheme.allConfig %}

{% set isIndex = true %}
{% set consultDisplay = true %}

{% block full_content %}
  {% if appDownload  %}
    {{ render(controller('TopxiaWebBundle:Default:appDownload')) }}
  {% endif %}
    {% cache 'jianmo/home/top/banner' 600 %}
      {{ block_show('jianmo:home_top_banner') }}
    {% endcache %}
    {% for config in themeConfig.blocks.left|default([]) %}

      {% set code = config.code %}
      {% if config.sortName|default('') == 'recommended' and code == 'category-course' %}
        {% set code = 'recommend-course' %}
      {% endif %}

      {% set category = config.categoryId|default(0) ? data('Category', {categoryId: config.categoryId})  : null %}
      {% if code == 'friend-link' %}
         {% include 'TopxiaWebBundle:Default:' ~ code ~ '.html.twig' with {friendlyLinks:friendlyLinks} %}
      {% elseif code != 'footer-link'%}
        {% if code != 'course-grid-with-condition-index'%}
          {% cache 'jianmo/default/' ~ code 600 %}
            {% include 'TopxiaWebBundle:Default:' ~ code ~ '.html.twig' with {config:config, category: category} %}
          {% endcache %}
        {% else %}
          {% include 'TopxiaWebBundle:Default:' ~ code ~ '.html.twig' with {config:config, category: category} %}
        {% endif %}
      {% endif %}
    {% endfor %}
    {% include 'TopxiaWebBundle:Default:Mobile/footer-tool-bar.html.twig' with { mobile_tool_bar: 'index' } %}
{% endblock %}
";
    }
}

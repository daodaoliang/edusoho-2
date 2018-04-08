<?php

/* TopxiaWebBundle:Default:footer.html.twig */
class __TwigTemplate_ac65a082b0e2fcb53079f8df34b5311681b0d47e0710c6df27bf9cd2e530742b extends Twig_Template
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
        $__internal_8e2738e9ab8a90515ca3f58317cb5583ff5f32bdcb4897f919c93bfc44826054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e2738e9ab8a90515ca3f58317cb5583ff5f32bdcb4897f919c93bfc44826054->enter($__internal_8e2738e9ab8a90515ca3f58317cb5583ff5f32bdcb4897f919c93bfc44826054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Default:footer.html.twig"));

        // line 1
        $context["currentTheme"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\ThemeExtension')->getCurrentTheme();
        // line 2
        $context["themeConfig"] = ((((array_key_exists("isEditColor", $context)) ? (_twig_default_filter((isset($context["isEditColor"]) ? $context["isEditColor"] : $this->getContext($context, "isEditColor")), false)) : (false))) ? ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "config", array())) : ($this->getAttribute((isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "confirmConfig", array())));
        // line 3
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
            // line 4
            echo "    ";
            $context["code"] = $this->getAttribute($context["config"], "code", array());
            // line 5
            echo "    ";
            if (((isset($context["code"]) ? $context["code"] : $this->getContext($context, "code")) == "footer-link")) {
                // line 6
                echo "      ";
                $context["category"] = (((($this->getAttribute($context["config"], "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["config"], "categoryId", array()), 0)) : (0))) ? ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Category", array("categoryId" => $this->getAttribute($context["config"], "categoryId", array())))) : (null));
                // line 7
                echo "      ";
                $this->loadTemplate((("TopxiaWebBundle:Default:" . (isset($context["code"]) ? $context["code"] : $this->getContext($context, "code"))) . ".html.twig"), "TopxiaWebBundle:Default:footer.html.twig", 7)->display(array_merge($context, array("config" => $context["config"], "category" => (isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")))));
                // line 8
                echo "    ";
            }
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
        // line 10
        echo "
<footer class=\"es-footer\">
  <div class=\"copyright\">
    <div class=\"container\">
      ";
        // line 14
        $this->loadTemplate("TopxiaWebBundle::powered-by.html.twig", "TopxiaWebBundle:Default:footer.html.twig", 14)->display($context);
        // line 15
        echo "      ";
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.analytics");
        echo "
      <a class=\"mlm\" href=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_archive");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程存档"), "html", null, true);
        echo "</a>
      <div class=\"mts\">
        ";
        // line 18
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.copyright")) {
            // line 19
            echo "          ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程内容版权均归"), "html", null, true);
            echo "
          <a href=\"/\">
            ";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.copyright"), "html", null, true);
            echo "
          </a>
          ";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所有"), "html", null, true);
            echo "
        ";
        }
        // line 25
        echo "        ";
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.icp")) {
            // line 26
            echo "          <a class=\"mlm\" href=\"http://www.miibeian.gov.cn/\" target=\"_blank\">
            ";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.icp"), "html", null, true);
            echo "
          </a>
        ";
        }
        // line 30
        echo "      </div>
    </div>
  </div>
</footer>";
        
        $__internal_8e2738e9ab8a90515ca3f58317cb5583ff5f32bdcb4897f919c93bfc44826054->leave($__internal_8e2738e9ab8a90515ca3f58317cb5583ff5f32bdcb4897f919c93bfc44826054_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 30,  114 => 27,  111 => 26,  108 => 25,  103 => 23,  98 => 21,  92 => 19,  90 => 18,  83 => 16,  78 => 15,  76 => 14,  70 => 10,  55 => 8,  52 => 7,  49 => 6,  46 => 5,  43 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% set currentTheme = current_theme() %}
{% set themeConfig = isEditColor|default(false) ? currentTheme.config : currentTheme.confirmConfig %}
{% for config in themeConfig.blocks.left|default([]) %}
    {% set code = config.code %}
    {% if code == 'footer-link' %}
      {% set category = config.categoryId|default(0) ? data('Category', {categoryId: config.categoryId})  : null %}
      {% include 'TopxiaWebBundle:Default:' ~ code ~ '.html.twig' with {config:config, category: category} %}
    {% endif %}
{% endfor %}

<footer class=\"es-footer\">
  <div class=\"copyright\">
    <div class=\"container\">
      {% include \"TopxiaWebBundle::powered-by.html.twig\" %}
      {{ setting('site.analytics')|raw }}
      <a class=\"mlm\" href=\"{{ path('course_archive') }}\">{{'课程存档'|trans}}</a>
      <div class=\"mts\">
        {% if setting('site.copyright') %}
          {{'课程内容版权均归'|trans}}
          <a href=\"/\">
            {{ setting('site.copyright') }}
          </a>
          {{'所有'|trans}}
        {% endif %}
        {% if setting('site.icp') %}
          <a class=\"mlm\" href=\"http://www.miibeian.gov.cn/\" target=\"_blank\">
            {{ setting('site.icp') }}
          </a>
        {% endif %}
      </div>
    </div>
  </div>
</footer>";
    }
}

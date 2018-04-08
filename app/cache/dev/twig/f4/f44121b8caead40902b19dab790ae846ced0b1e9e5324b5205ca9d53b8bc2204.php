<?php

/* TopxiaWebBundle:Course:Widget/course-price.html.twig */
class __TwigTemplate_399dec4fc88681b2cd262bb915e67c6934dea2ac2a1588f6e868006fb1e84aef extends Twig_Template
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
        $__internal_57e46688c6742f9479433fd36507f741010cb45c7eb38faa1e57d37afdfde911 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57e46688c6742f9479433fd36507f741010cb45c7eb38faa1e57d37afdfde911->enter($__internal_57e46688c6742f9479433fd36507f741010cb45c7eb38faa1e57d37afdfde911_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Course:Widget/course-price.html.twig"));

        // line 8
        echo "
";
        // line 9
        $context["shows"] = ((array_key_exists("shows", $context)) ? (_twig_default_filter((isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows")), array(0 => "full"))) : (array(0 => "full")));
        // line 10
        $context["priceType"] = ((($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.price_type") == "Coin"))) ? ("coin") : ("default"));
        // line 11
        echo "
<span class=\"course-price-widget\">

  ";
        // line 14
        if ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discountId", array())) {
            // line 15
            echo "
    ";
            // line 16
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))) || twig_in_filter("price", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))))) {
                // line 17
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "coin")) {
                    // line 18
                    echo "        <span class=\"price\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()) * $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_name", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币")), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 20
                    echo "        <span class=\"price\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%price%元", array("%price%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()))), "html", null, true);
                    echo "</span>
      ";
                }
                // line 22
                echo "    ";
            }
            // line 23
            echo "
    ";
            // line 24
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))) || twig_in_filter("originPrice", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))))) {
                // line 25
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "coin")) {
                    // line 26
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()) * $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_name", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币")), "html", null, true);
                    echo "</del></span>
      ";
                } else {
                    // line 28
                    echo "        <span class=\"origin-price\"><del>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%originPrice%元", array("%originPrice%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()))), "html", null, true);
                    echo "</del></span>
      ";
                }
                // line 30
                echo "    ";
            }
            // line 31
            echo "
    ";
            // line 32
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))) || twig_in_filter("discount", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))))) {
                // line 33
                echo "
      <span class=\"discount\">
        ";
                // line 35
                if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discount", array()) == 0) || (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "coin") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()) == 0))) || (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "default") && ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()) == 0)))) {
                    // line 36
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("限免"), "html", null, true);
                    echo "
        ";
                } else {
                    // line 38
                    echo "          ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%discount%折", array("%discount%" => twig_round($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discount", array()), 2, "common"))), "html", null, true);
                    echo "
        ";
                }
                // line 40
                echo "      </span>

    ";
            }
            // line 43
            echo "
  ";
        } else {
            // line 45
            echo "
    ";
            // line 46
            if ((twig_in_filter("full", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))) || twig_in_filter("price", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows"))))) {
                // line 47
                echo "      <span class=\"price\">
        ";
                // line 48
                if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
                    // line 49
                    echo "          ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()) > 0)) {
                        echo " ";
                        echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()) * $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_name", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币")), "html", null, true);
                        echo " ";
                    } else {
                        echo " <span class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                        echo "</span> ";
                    }
                    // line 50
                    echo "        ";
                } else {
                    // line 51
                    echo "          ";
                    if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()) > 0)) {
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%price%元", array("%price%" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()))), "html", null, true);
                    } else {
                        echo " <span class=\"text-success\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("免费"), "html", null, true);
                        echo "</span> ";
                    }
                    echo " 
        ";
                }
                // line 53
                echo "      </span>
    ";
            }
            // line 55
            echo "
    ";
            // line 56
            if (twig_in_filter("originPrice", (isset($context["shows"]) ? $context["shows"] : $this->getContext($context, "shows")))) {
                // line 57
                echo "      ";
                if (((isset($context["priceType"]) ? $context["priceType"] : $this->getContext($context, "priceType")) == "coin")) {
                    // line 58
                    echo "        <span class=\"origin-price\">";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()) * $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
                    echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_name", $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("虚拟币")), "html", null, true);
                    echo "</span>
      ";
                } else {
                    // line 60
                    echo "        ¥<span class=\"origin-price\">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "originPrice", array()), "html", null, true);
                    echo "</span>
      ";
                }
                // line 62
                echo "    ";
            }
            // line 63
            echo "
  ";
        }
        // line 65
        echo "</span>";
        
        $__internal_57e46688c6742f9479433fd36507f741010cb45c7eb38faa1e57d37afdfde911->leave($__internal_57e46688c6742f9479433fd36507f741010cb45c7eb38faa1e57d37afdfde911_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Widget/course-price.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  187 => 65,  183 => 63,  180 => 62,  174 => 60,  167 => 58,  164 => 57,  162 => 56,  159 => 55,  155 => 53,  143 => 51,  140 => 50,  128 => 49,  126 => 48,  123 => 47,  121 => 46,  118 => 45,  114 => 43,  109 => 40,  103 => 38,  97 => 36,  95 => 35,  91 => 33,  89 => 32,  86 => 31,  83 => 30,  77 => 28,  69 => 26,  66 => 25,  64 => 24,  61 => 23,  58 => 22,  52 => 20,  44 => 18,  41 => 17,  39 => 16,  36 => 15,  34 => 14,  29 => 11,  27 => 10,  25 => 9,  22 => 8,);
    }

    public function getSource()
    {
        return "{#
  mode的取值有：
    full：该模式下显示折扣价、原价、打折
    price: 该模式下如有打折活动则显示折扣价，没有打折活动就显示为原价
    originPrice：该模式下只显示原价
    discount：该模式下只显示折扣
#}

{% set shows = shows|default(['full']) %}
{% set priceType = (setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin') ? 'coin' : 'default'  %}

<span class=\"course-price-widget\">

  {% if course.discountId %}

    {% if 'full' in shows or 'price' in shows %}
      {% if priceType == 'coin' %}
        <span class=\"price\">{{ course.price * setting('coin.cash_rate')}} {{setting('coin.coin_name', '虚拟币'|trans)}}</span>
      {% else %}
        <span class=\"price\">{{'%price%元'|trans({'%price%': course.price})}}</span>
      {% endif %}
    {% endif %}

    {% if 'full' in shows or 'originPrice' in shows %}
      {% if priceType == 'coin' %}
        <span class=\"origin-price\"><del>{{course.originPrice * setting('coin.cash_rate')}} {{setting('coin.coin_name', '虚拟币'|trans)}}</del></span>
      {% else %}
        <span class=\"origin-price\"><del>{{'%originPrice%元'|trans({'%originPrice%': course.originPrice})}}</del></span>
      {% endif %}
    {% endif %}

    {% if 'full' in shows or 'discount' in shows %}

      <span class=\"discount\">
        {% if (course.discount == 0) or (priceType == 'coin' and course.originPrice == 0) or (priceType == 'default' and course.originPrice == 0) %}
          {{'限免'|trans}}
        {% else  %}
          {{'%discount%折'|trans({'%discount%': course.discount|round(2, 'common') })}}
        {% endif %}
      </span>

    {% endif %}

  {% else %}

    {% if 'full' in shows or 'price' in shows %}
      <span class=\"price\">
        {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}
          {% if course.price > 0 %} {{ course.price * setting('coin.cash_rate')}}{{setting('coin.coin_name', '虚拟币'|trans)}} {% else %} <span class=\"text-success\">{{'免费'|trans}}</span> {% endif %}
        {% else %}
          {% if course.price > 0 %}{{'%price%元'|trans({'%price%': course.price})}}{% else %} <span class=\"text-success\">{{'免费'|trans}}</span> {% endif %} 
        {% endif %}
      </span>
    {% endif %}

    {% if 'originPrice' in shows %}
      {% if priceType == 'coin' %}
        <span class=\"origin-price\">{{course.originPrice * setting('coin.cash_rate')}}{{setting('coin.coin_name', '虚拟币'|trans)}}</span>
      {% else %}
        ¥<span class=\"origin-price\">{{course.originPrice}}</span>
      {% endif %}
    {% endif %}

  {% endif %}
</span>";
    }
}

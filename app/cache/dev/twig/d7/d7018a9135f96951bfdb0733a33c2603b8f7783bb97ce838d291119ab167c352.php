<?php

/* @theme/jianmo/block/bottom_info.template.html.twig */
class __TwigTemplate_e04449583736fd0c3628cb1998afc54a4d4f028eb2f8e1192fe3b81218d7da7a extends Twig_Template
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
        $__internal_a0ef851e01b30eb6d9df3e0f2ad90289b0c6de55e118545577fee4e629003836 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0ef851e01b30eb6d9df3e0f2ad90289b0c6de55e118545577fee4e629003836->enter($__internal_a0ef851e01b30eb6d9df3e0f2ad90289b0c6de55e118545577fee4e629003836_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@theme/jianmo/block/bottom_info.template.html.twig"));

        // line 1
        $context["self_macro"] = $this;
        // line 2
        echo "
<div class=\"col-md-8 footer-main clearfix\">
  ";
        // line 4
        echo $context["self_macro"]->getfooter_div(twig_first($this->env, (isset($context["firstColumnText"]) ? $context["firstColumnText"] : $this->getContext($context, "firstColumnText"))), (isset($context["firstColumnLinks"]) ? $context["firstColumnLinks"] : $this->getContext($context, "firstColumnLinks")));
        echo "
  ";
        // line 5
        echo $context["self_macro"]->getfooter_div(twig_first($this->env, (isset($context["secondColumnText"]) ? $context["secondColumnText"] : $this->getContext($context, "secondColumnText"))), (isset($context["secondColumnLinks"]) ? $context["secondColumnLinks"] : $this->getContext($context, "secondColumnLinks")));
        echo "
  ";
        // line 6
        echo $context["self_macro"]->getfooter_div(twig_first($this->env, (isset($context["thirdColumnText"]) ? $context["thirdColumnText"] : $this->getContext($context, "thirdColumnText"))), (isset($context["thirdColumnLinks"]) ? $context["thirdColumnLinks"] : $this->getContext($context, "thirdColumnLinks")));
        echo "
  ";
        // line 7
        echo $context["self_macro"]->getfooter_div(twig_first($this->env, (isset($context["fourthColumnText"]) ? $context["fourthColumnText"] : $this->getContext($context, "fourthColumnText"))), (isset($context["fourthColumnLinks"]) ? $context["fourthColumnLinks"] : $this->getContext($context, "fourthColumnLinks")), "hidden-xs");
        echo "
  ";
        // line 8
        echo $context["self_macro"]->getfooter_div(twig_first($this->env, (isset($context["fifthColumnText"]) ? $context["fifthColumnText"] : $this->getContext($context, "fifthColumnText"))), (isset($context["fifthColumnLinks"]) ? $context["fifthColumnLinks"] : $this->getContext($context, "fifthColumnLinks")), "hidden-xs");
        echo "
</div>

<div class=\"col-md-4 footer-logo hidden-sm hidden-xs\">
  <a class=\"\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["bottomLogo"]) ? $context["bottomLogo"] : null), 0, array(), "array", false, true), "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["bottomLogo"]) ? $context["bottomLogo"] : null), 0, array(), "array", false, true), "href", array()), "")) : ("")), "html", null, true);
        echo "\" target=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["bottomLogo"]) ? $context["bottomLogo"] : null), 0, array(), "array", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["bottomLogo"]) ? $context["bottomLogo"] : null), 0, array(), "array", false, true), "target", array()), "")) : ("")), "html", null, true);
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($this->getAttribute($this->getAttribute((isset($context["bottomLogo"]) ? $context["bottomLogo"] : null), 0, array(), "array", false, true), "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["bottomLogo"]) ? $context["bottomLogo"] : null), 0, array(), "array", false, true), "src", array()), "")) : (""))), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["bottomLogo"]) ? $context["bottomLogo"] : null), 0, array(), "array", false, true), "alt", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["bottomLogo"]) ? $context["bottomLogo"] : null), 0, array(), "array", false, true), "alt", array()), "")) : ("")), "html", null, true);
        echo "\"></a>
  <div class=\"footer-sns\">
    ";
        // line 14
        if ($this->getAttribute($this->getAttribute((isset($context["weibo"]) ? $context["weibo"] : $this->getContext($context, "weibo")), 0, array(), "array"), "href", array())) {
            // line 15
            echo "    <a href=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["weibo"]) ? $context["weibo"] : null), 0, array(), "array", false, true), "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["weibo"]) ? $context["weibo"] : null), 0, array(), "array", false, true), "href", array()), "javascript:;")) : ("javascript:;")), "html", null, true);
            echo "\" target=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["weibo"]) ? $context["weibo"] : null), 0, array(), "array", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["weibo"]) ? $context["weibo"] : null), 0, array(), "array", false, true), "target", array()), "")) : ("")), "html", null, true);
            echo "\"><i class=\"es-icon es-icon-weibo\"></i></a>
    ";
        }
        // line 17
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["weixin"]) ? $context["weixin"] : $this->getContext($context, "weixin")), 0, array(), "array"), "src", array())) {
            // line 18
            echo "    <a class=\"qrcode-popover top\">
      <i class=\"es-icon es-icon-weixin\"></i>
      <div class=\"qrcode-content\">
        <img src=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($this->getAttribute($this->getAttribute((isset($context["weixin"]) ? $context["weixin"] : null), 0, array(), "array", false, true), "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["weixin"]) ? $context["weixin"] : null), 0, array(), "array", false, true), "src", array()), "")) : (""))), "html", null, true);
            echo "\" alt=\"\">  
      </div>
    </a>
    ";
        }
        // line 25
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["apple"]) ? $context["apple"] : $this->getContext($context, "apple")), 0, array(), "array"), "src", array())) {
            // line 26
            echo "    <a class=\"qrcode-popover top\">
      <i class=\"es-icon es-icon-apple\"></i>
      <div class=\"qrcode-content\">
        <img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($this->getAttribute($this->getAttribute((isset($context["apple"]) ? $context["apple"] : null), 0, array(), "array", false, true), "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["apple"]) ? $context["apple"] : null), 0, array(), "array", false, true), "src", array()), "")) : (""))), "html", null, true);
            echo "\" alt=\"\"> 
      </div>
    </a>
    ";
        }
        // line 33
        echo "    ";
        if ($this->getAttribute($this->getAttribute((isset($context["android"]) ? $context["android"] : $this->getContext($context, "android")), 0, array(), "array"), "src", array())) {
            // line 34
            echo "    <a class=\"qrcode-popover top\">
      <i class=\"es-icon es-icon-android\"></i>
      <div class=\"qrcode-content\">
        <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((($this->getAttribute($this->getAttribute((isset($context["android"]) ? $context["android"] : null), 0, array(), "array", false, true), "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["android"]) ? $context["android"] : null), 0, array(), "array", false, true), "src", array()), "")) : (""))), "html", null, true);
            echo "\" alt=\"\"> 
      </div>
    </a>
    ";
        }
        // line 41
        echo "  </div>
</div>


";
        
        $__internal_a0ef851e01b30eb6d9df3e0f2ad90289b0c6de55e118545577fee4e629003836->leave($__internal_a0ef851e01b30eb6d9df3e0f2ad90289b0c6de55e118545577fee4e629003836_prof);

    }

    // line 45
    public function getfooter_div($__title__ = null, $__links__ = null, $__className__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "title" => $__title__,
            "links" => $__links__,
            "className" => $__className__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c1301a967024ba570ad5c35efe1437530cefe69295346cd4badd81d9b8262677 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c1301a967024ba570ad5c35efe1437530cefe69295346cd4badd81d9b8262677->enter($__internal_c1301a967024ba570ad5c35efe1437530cefe69295346cd4badd81d9b8262677_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "footer_div"));

            // line 46
            echo "<div class=\"link-item ";
            if ((isset($context["className"]) ? $context["className"] : $this->getContext($context, "className"))) {
                echo twig_escape_filter($this->env, (isset($context["className"]) ? $context["className"] : $this->getContext($context, "className")), "html", null, true);
            }
            echo "\">
  <h3>";
            // line 47
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["title"]) ? $context["title"] : null), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["title"]) ? $context["title"] : null), "value", array()), "")) : ("")), "html", null, true);
            echo "</h3>
  <ul>
    ";
            // line 49
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(((array_key_exists("links", $context)) ? (_twig_default_filter((isset($context["links"]) ? $context["links"] : $this->getContext($context, "links")), null)) : (null)));
            foreach ($context['_seq'] as $context["_key"] => $context["link"]) {
                // line 50
                echo "      <li>
        <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "href", array()), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "target", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["link"], "value", array()), "html", null, true);
                echo "</a>
      </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['link'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "  </ul>
</div>
";
            
            $__internal_c1301a967024ba570ad5c35efe1437530cefe69295346cd4badd81d9b8262677->leave($__internal_c1301a967024ba570ad5c35efe1437530cefe69295346cd4badd81d9b8262677_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@theme/jianmo/block/bottom_info.template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 54,  164 => 51,  161 => 50,  157 => 49,  152 => 47,  145 => 46,  128 => 45,  117 => 41,  110 => 37,  105 => 34,  102 => 33,  95 => 29,  90 => 26,  87 => 25,  80 => 21,  75 => 18,  72 => 17,  64 => 15,  62 => 14,  51 => 12,  44 => 8,  40 => 7,  36 => 6,  32 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% import _self as self_macro %}

<div class=\"col-md-8 footer-main clearfix\">
  {{ self_macro.footer_div(firstColumnText|first, firstColumnLinks) }}
  {{ self_macro.footer_div(secondColumnText|first, secondColumnLinks) }}
  {{ self_macro.footer_div(thirdColumnText|first, thirdColumnLinks) }}
  {{ self_macro.footer_div(fourthColumnText|first, fourthColumnLinks, 'hidden-xs') }}
  {{ self_macro.footer_div(fifthColumnText|first, fifthColumnLinks, 'hidden-xs') }}
</div>

<div class=\"col-md-4 footer-logo hidden-sm hidden-xs\">
  <a class=\"\" href=\"{{ bottomLogo[0].href|default('') }}\" target=\"{{ bottomLogo[0].target|default('') }}\"><img src=\"{{ asset(bottomLogo[0].src|default('')) }}\" alt=\"{{ bottomLogo[0].alt|default('') }}\"></a>
  <div class=\"footer-sns\">
    {% if (weibo[0].href) %}
    <a href=\"{{ weibo[0].href|default('javascript:;') }}\" target=\"{{ weibo[0].target|default('') }}\"><i class=\"es-icon es-icon-weibo\"></i></a>
    {% endif %}
    {% if (weixin[0].src) %}
    <a class=\"qrcode-popover top\">
      <i class=\"es-icon es-icon-weixin\"></i>
      <div class=\"qrcode-content\">
        <img src=\"{{ asset(weixin[0].src|default('')) }}\" alt=\"\">  
      </div>
    </a>
    {% endif %}
    {% if (apple[0].src) %}
    <a class=\"qrcode-popover top\">
      <i class=\"es-icon es-icon-apple\"></i>
      <div class=\"qrcode-content\">
        <img src=\"{{ asset(apple[0].src|default('')) }}\" alt=\"\"> 
      </div>
    </a>
    {% endif %}
    {% if (android[0].src) %}
    <a class=\"qrcode-popover top\">
      <i class=\"es-icon es-icon-android\"></i>
      <div class=\"qrcode-content\">
        <img src=\"{{ asset(android[0].src|default('')) }}\" alt=\"\"> 
      </div>
    </a>
    {% endif %}
  </div>
</div>


{% macro footer_div(title, links, className) %}
<div class=\"link-item {% if className %}{{className}}{% endif %}\">
  <h3>{{ title.value|default('') }}</h3>
  <ul>
    {% for link in links|default(null) %}
      <li>
        <a href=\"{{ link.href }}\" target=\"{{ link.target }}\">{{ link.value }}</a>
      </li>
    {% endfor %}
  </ul>
</div>
{% endmacro %}";
    }
}

<?php

/* @theme/jianmo/block/middle_banner.template.html.twig */
class __TwigTemplate_285bdfceccbb4f71942ecc8902909e5be014f476fdea41c4c7cd3fcea22decce extends Twig_Template
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
        $__internal_fb9296fcd20a5036a2aa9d38a5c2ca106a0993876a09979ef04b6529a92e9678 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb9296fcd20a5036a2aa9d38a5c2ca106a0993876a09979ef04b6529a92e9678->enter($__internal_fb9296fcd20a5036a2aa9d38a5c2ca106a0993876a09979ef04b6529a92e9678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@theme/jianmo/block/middle_banner.template.html.twig"));

        // line 1
        echo "<section class=\"introduction-section hidden-xs\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 3));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 5
            echo "        ";
            $context["icon"] = $this->getAttribute($context, ("icon" . $context["i"]), array(), "array");
            // line 6
            echo "        ";
            $context["title"] = $this->getAttribute($context, (("icon" . $context["i"]) . "title"), array(), "array");
            // line 7
            echo "        ";
            $context["introduction"] = $this->getAttribute($context, (("icon" . $context["i"]) . "introduction"), array(), "array");
            // line 8
            echo "        <div class=\"col-xs-4 introduction-item\">
          ";
            // line 9
            if ((($this->getAttribute($this->getAttribute((isset($context["icon"]) ? $context["icon"] : null), 0, array(), "array", false, true), "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["icon"]) ? $context["icon"] : null), 0, array(), "array", false, true), "href", array()), false)) : (false))) {
                // line 10
                echo "           <a href=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["icon"]) ? $context["icon"] : null), 0, array(), "array", false, true), "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["icon"]) ? $context["icon"] : null), 0, array(), "array", false, true), "href", array()), "")) : ("")), "html", null, true);
                echo "\" target=\"";
                echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["icon"]) ? $context["icon"] : null), 0, array(), "array", false, true), "target", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["icon"]) ? $context["icon"] : null), 0, array(), "array", false, true), "target", array()), "")) : ("")), "html", null, true);
                echo "\"> 
          ";
            }
            // line 12
            echo "            <img class=\"img-responsive\" src=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["icon"]) ? $context["icon"] : null), 0, array(), "array", false, true), "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["icon"]) ? $context["icon"] : null), 0, array(), "array", false, true), "src", array()), "")) : ("")), "html", null, true);
            echo "\">
          ";
            // line 13
            if ((($this->getAttribute($this->getAttribute((isset($context["icon"]) ? $context["icon"] : null), 0, array(), "array", false, true), "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["icon"]) ? $context["icon"] : null), 0, array(), "array", false, true), "href", array()), false)) : (false))) {
                // line 14
                echo "           </a> 
          ";
            }
            // line 16
            echo "          <h4>";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["title"]) ? $context["title"] : null), 0, array(), "array", false, true), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["title"]) ? $context["title"] : null), 0, array(), "array", false, true), "value", array()), "")) : ("")), "html", null, true);
            echo "</h4>
          <h5>";
            // line 17
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["introduction"]) ? $context["introduction"] : null), 0, array(), "array", false, true), "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["introduction"]) ? $context["introduction"] : null), 0, array(), "array", false, true), "value", array()), "")) : ("")), "html", null, true);
            echo "</h5>
        </div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </div>
  </div>
</section>";
        
        $__internal_fb9296fcd20a5036a2aa9d38a5c2ca106a0993876a09979ef04b6529a92e9678->leave($__internal_fb9296fcd20a5036a2aa9d38a5c2ca106a0993876a09979ef04b6529a92e9678_prof);

    }

    public function getTemplateName()
    {
        return "@theme/jianmo/block/middle_banner.template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 20,  69 => 17,  64 => 16,  60 => 14,  58 => 13,  53 => 12,  45 => 10,  43 => 9,  40 => 8,  37 => 7,  34 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<section class=\"introduction-section hidden-xs\">
  <div class=\"container\">
    <div class=\"row\">
      {% for i in 1..3 %}
        {% set icon = _context['icon' ~ i]%}
        {% set title =_context['icon' ~ i ~ 'title'] %}
        {% set introduction =_context['icon' ~ i ~ 'introduction'] %}
        <div class=\"col-xs-4 introduction-item\">
          {% if icon[0].href|default(false) %}
           <a href=\"{{ (icon[0].href|default(''))}}\" target=\"{{ icon[0].target|default('')}}\"> 
          {% endif %}
            <img class=\"img-responsive\" src=\"{{ icon[0].src|default('') }}\">
          {% if icon[0].href|default(false) %}
           </a> 
          {% endif %}
          <h4>{{ title[0].value|default('') }}</h4>
          <h5>{{ introduction[0].value|default('') }}</h5>
        </div>
      {% endfor %}
    </div>
  </div>
</section>";
    }
}

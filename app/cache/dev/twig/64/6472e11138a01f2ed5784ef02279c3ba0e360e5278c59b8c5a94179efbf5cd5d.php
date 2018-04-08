<?php

/* PermissionBundle:Templates:macro.html.twig */
class __TwigTemplate_c017113242e16ad7fe00208f0c2a8d158f6125bfc3fe83b29e26e0e37f9ff6f1 extends Twig_Template
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
        $__internal_d1b11a4c0f84e325193ce1ea397d6afa889880c954ef62c5cffd291c5ef281ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1b11a4c0f84e325193ce1ea397d6afa889880c954ef62c5cffd291c5ef281ac->enter($__internal_d1b11a4c0f84e325193ce1ea397d6afa889880c954ef62c5cffd291c5ef281ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PermissionBundle:Templates:macro.html.twig"));

        // line 1
        echo "
";
        
        $__internal_d1b11a4c0f84e325193ce1ea397d6afa889880c954ef62c5cffd291c5ef281ac->leave($__internal_d1b11a4c0f84e325193ce1ea397d6afa889880c954ef62c5cffd291c5ef281ac_prof);

    }

    // line 2
    public function getmenu_link_html($___context__ = null, $__menu__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "_context" => $___context__,
            "menu" => $__menu__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0b7d9939bc31283c7c517a3e4acea35f3dcd5c5ab7a8e9604b766c54767411d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0b7d9939bc31283c7c517a3e4acea35f3dcd5c5ab7a8e9604b766c54767411d8->enter($__internal_0b7d9939bc31283c7c517a3e4acea35f3dcd5c5ab7a8e9604b766c54767411d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "menu_link_html"));

            // line 3
            echo "  <a 
    title=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "name", array()), "html", null, true);
            echo "\"
  ";
            // line 5
            if ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) {
                // line 6
                echo "    class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\"
  ";
            }
            // line 8
            echo "
  ";
            // line 9
            if (((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "modal")) {
                // line 10
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
    href=\"#modal\"
  ";
            } elseif (((($this->getAttribute(            // line 14
(isset($context["menu"]) ? $context["menu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "mode", array()), null)) : (null)) == "none")) {
                // line 15
                echo "    data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
    href=\"javascript:;\"
  ";
            } else {
                // line 18
                echo "    href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "html", null, true);
                echo "\"
  ";
            }
            // line 20
            echo "  
  ";
            // line 21
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "blank", array()), false)) : (false))) {
                // line 22
                echo "    target=\"blank\"
  ";
            }
            // line 24
            echo "  >
  ";
            // line 25
            if ((($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["menu"]) ? $context["menu"] : null), "icon", array()), false)) : (false))) {
                echo "<span class=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "icon", array()), "html", null, true);
                echo "\"></span>";
            }
            echo " 
    ";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), "name", array()), "html", null, true);
            echo "
  </a>
";
            
            $__internal_0b7d9939bc31283c7c517a3e4acea35f3dcd5c5ab7a8e9604b766c54767411d8->leave($__internal_0b7d9939bc31283c7c517a3e4acea35f3dcd5c5ab7a8e9604b766c54767411d8_prof);

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
        return "PermissionBundle:Templates:macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 26,  102 => 25,  99 => 24,  95 => 22,  93 => 21,  90 => 20,  84 => 18,  77 => 15,  75 => 14,  67 => 10,  65 => 9,  62 => 8,  56 => 6,  54 => 5,  50 => 4,  47 => 3,  30 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "
{% macro menu_link_html(_context, menu, class) %}
  <a 
    title=\"{{menu.name}}\"
  {% if class %}
    class=\"{{ class }}\"
  {% endif %}

  {% if menu.mode|default(null) == 'modal' %}
    data-url=\"{{ permission_path(menu) }}\"
    data-toggle=\"modal\"
    data-target=\"#modal\"
    href=\"#modal\"
  {% elseif menu.mode|default(null) == 'none' %}
    data-url=\"{{ permission_path(menu) }}\"
    href=\"javascript:;\"
  {% else %}
    href=\"{{ permission_path(menu) }}\"
  {% endif %}
  
  {% if menu.blank|default(false) %}
    target=\"blank\"
  {% endif %}
  >
  {% if menu.icon|default(false) %}<span class=\"{{menu.icon}}\"></span>{% endif %} 
    {{ menu.name }}
  </a>
{% endmacro %}";
    }
}

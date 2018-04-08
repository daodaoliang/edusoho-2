<?php

/* PermissionBundle:Templates:tabs.html.twig */
class __TwigTemplate_1dcfb8b0c7ba055ddbfb5cc7b49df045dd41289257edb561dfd1d7d61d1a5ccd extends Twig_Template
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
        $__internal_a98c29671b60b6793f0a6ae1eeda9d0fb455c1c1f1f7659458dd97de773ed0d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a98c29671b60b6793f0a6ae1eeda9d0fb455c1c1f1f7659458dd97de773ed0d0->enter($__internal_a98c29671b60b6793f0a6ae1eeda9d0fb455c1c1f1f7659458dd97de773ed0d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PermissionBundle:Templates:tabs.html.twig"));

        // line 1
        $context["tabMenus"] = $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getSubPermissions((($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "code", array()), null)) : (null)));
        // line 2
        if ((((array_key_exists("tabMenus", $context)) ? (_twig_default_filter((isset($context["tabMenus"]) ? $context["tabMenus"] : $this->getContext($context, "tabMenus")), null)) : (null)) && (twig_length_filter($this->env, (isset($context["tabMenus"]) ? $context["tabMenus"] : $this->getContext($context, "tabMenus"))) > 1))) {
            // line 3
            echo "  <ul class=\"nav nav-tabs mbm\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["tabMenus"]) ? $context["tabMenus"] : $this->getContext($context, "tabMenus")));
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                // line 5
                echo "
      ";
                // line 6
                if (( !(($this->getAttribute($context["m"], "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "mode", array()), "")) : ("")) == "capsules")) {
                    // line 7
                    echo "        ";
                    $context["path"] = $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionPath($this->env, $context, $context["m"]);
                    // line 8
                    echo "      ";
                } else {
                    // line 9
                    echo "        ";
                    $context["path"] = $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionPath($this->env, $context, $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getFirstChild($context["m"]));
                    // line 10
                    echo "      ";
                }
                // line 11
                echo "
      <li ";
                // line 12
                if (($this->getAttribute($context["m"], "code", array()) == ((array_key_exists("menu", $context)) ? (_twig_default_filter((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu")), null)) : (null)))) {
                    echo "class=\"active\"";
                }
                echo ">
        <a
            title=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                echo "\"
            class=\"";
                // line 15
                echo twig_escape_filter($this->env, (($this->getAttribute($context["m"], "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["m"], "class", array()), "")) : ("")), "html", null, true);
                echo "\"
            href=\"";
                // line 16
                echo twig_escape_filter($this->env, (isset($context["path"]) ? $context["path"] : $this->getContext($context, "path")), "html", null, true);
                echo "\"
        >
          ";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                echo "
        </a>
      </li>

    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "  </ul>
";
        }
        // line 25
        echo "
";
        
        $__internal_a98c29671b60b6793f0a6ae1eeda9d0fb455c1c1f1f7659458dd97de773ed0d0->leave($__internal_a98c29671b60b6793f0a6ae1eeda9d0fb455c1c1f1f7659458dd97de773ed0d0_prof);

    }

    public function getTemplateName()
    {
        return "PermissionBundle:Templates:tabs.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 25,  84 => 23,  73 => 18,  68 => 16,  64 => 15,  60 => 14,  53 => 12,  50 => 11,  47 => 10,  44 => 9,  41 => 8,  38 => 7,  36 => 6,  33 => 5,  29 => 4,  26 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% set tabMenus = sub_permissions(menu|parent_permission.code|default(null)) %}
{% if tabMenus|default(null) and tabMenus|length > 1 %}
  <ul class=\"nav nav-tabs mbm\">
    {% for m in tabMenus %}

      {% if not m.mode|default('') == 'capsules' %}
        {% set path = permission_path(m) %}
      {% else %}
        {% set path = permission_path(first_child_permission(m)) %}
      {% endif %}

      <li {% if m.code == menu|default(null) %}class=\"active\"{% endif %}>
        <a
            title=\"{{ m.name|trans }}\"
            class=\"{{ m.class|default('') }}\"
            href=\"{{ path }}\"
        >
          {{ m.name|trans }}
        </a>
      </li>

    {% endfor %}
  </ul>
{% endif %}

";
    }
}

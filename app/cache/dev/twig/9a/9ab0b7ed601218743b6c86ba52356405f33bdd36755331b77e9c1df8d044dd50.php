<?php

/* PermissionBundle:Templates:side-bar.html.twig */
class __TwigTemplate_d82722a94293c540dd11f6dafd5ade324d12559c851567bc3d3aedaa863208c2 extends Twig_Template
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
        $__internal_e64cf68eb21fa2f173416581d406ba5947cd33f7cb8782d44d3e29b6cd594f4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e64cf68eb21fa2f173416581d406ba5947cd33f7cb8782d44d3e29b6cd594f4d->enter($__internal_e64cf68eb21fa2f173416581d406ba5947cd33f7cb8782d44d3e29b6cd594f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "PermissionBundle:Templates:side-bar.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->groupedPermissions((($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "code", array())), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "code", array())), "code", array()), null)) : (null))));
        foreach ($context['_seq'] as $context["_key"] => $context["groupedPermissions"]) {
            // line 2
            echo "  <div class=\"list-group\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["groupedPermissions"]);
            foreach ($context['_seq'] as $context["_key"] => $context["m"]) {
                if (( !$this->getAttribute($context["m"], "visable", array(), "any", true, true) || ($this->getAttribute($context["m"], "visable", array(), "any", true, true) && $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->evalExpression($this->env, $context, $this->getAttribute($context["m"], "visable", array()))))) {
                    // line 4
                    echo "      ";
                    $context["menuClass"] = ((($this->getAttribute($context["m"], "code", array()) == (($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "code", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getParentPermission((isset($context["menu"]) ? $context["menu"] : $this->getContext($context, "menu"))), "code", array()), null)) : (null)))) ? ("list-group-item active") : ("list-group-item"));
                    // line 5
                    echo "
      ";
                    // line 6
                    $context["tabMenu"] = $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getFirstChild($context["m"]);
                    // line 7
                    echo "      ";
                    if (((($this->getAttribute((isset($context["tabMenu"]) ? $context["tabMenu"] : null), "mode", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["tabMenu"]) ? $context["tabMenu"] : null), "mode", array()), "")) : ("")) == "capsules")) {
                        // line 8
                        echo "        ";
                        $context["tabMenu"] = $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getFirstChild((isset($context["tabMenu"]) ? $context["tabMenu"] : $this->getContext($context, "tabMenu")));
                        // line 9
                        echo "      ";
                    }
                    // line 10
                    echo "
      <a
          title=\"";
                    // line 12
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                    echo "\"
          class=\"";
                    // line 13
                    echo twig_escape_filter($this->env, (isset($context["menuClass"]) ? $context["menuClass"] : $this->getContext($context, "menuClass")), "html", null, true);
                    echo "\"
          href=\"";
                    // line 14
                    echo twig_escape_filter($this->env, $this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->getPermissionPath($this->env, $context, (isset($context["tabMenu"]) ? $context["tabMenu"] : $this->getContext($context, "tabMenu"))), "html", null, true);
                    echo "\"
      >
        ";
                    // line 16
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["m"], "name", array())), "html", null, true);
                    echo "
      </a>
    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['m'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "  </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['groupedPermissions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_e64cf68eb21fa2f173416581d406ba5947cd33f7cb8782d44d3e29b6cd594f4d->leave($__internal_e64cf68eb21fa2f173416581d406ba5947cd33f7cb8782d44d3e29b6cd594f4d_prof);

    }

    public function getTemplateName()
    {
        return "PermissionBundle:Templates:side-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 19,  68 => 16,  63 => 14,  59 => 13,  55 => 12,  51 => 10,  48 => 9,  45 => 8,  42 => 7,  40 => 6,  37 => 5,  34 => 4,  29 => 3,  26 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% for groupedPermissions in grouped_permissions(menu|parent_permission.code|parent_permission.code|default(null)) %}
  <div class=\"list-group\">
    {% for m in groupedPermissions if not m.visable is defined or (m.visable is defined and eval_expression(m.visable)) %}
      {% set menuClass = (m.code == menu|parent_permission.code|default(null) ? 'list-group-item active' : 'list-group-item') %}

      {% set tabMenu = first_child_permission(m) %}
      {% if tabMenu.mode|default('') == 'capsules' %}
        {% set tabMenu = first_child_permission(tabMenu) %}
      {% endif %}

      <a
          title=\"{{ m.name|trans }}\"
          class=\"{{ menuClass }}\"
          href=\"{{ permission_path(tabMenu) }}\"
      >
        {{ m.name|trans }}
      </a>
    {% endfor %}
  </div>
{% endfor %}
";
    }
}

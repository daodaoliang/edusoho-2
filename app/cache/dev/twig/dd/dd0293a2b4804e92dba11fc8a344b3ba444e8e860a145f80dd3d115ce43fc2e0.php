<?php

/* TopxiaAdminBundle:CommonAdmin:main.html.twig */
class __TwigTemplate_207fbe4b530dc0471b546008831a097dba9ce54cf0a7b0e97bea6db93a127f83 extends Twig_Template
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
        $__internal_bcb24e214e12972c54cfb4b5d3c4d3d35cff49f57a67b27713cf2b6fe2e4d958 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcb24e214e12972c54cfb4b5d3c4d3d35cff49f57a67b27713cf2b6fe2e4d958->enter($__internal_bcb24e214e12972c54cfb4b5d3c4d3d35cff49f57a67b27713cf2b6fe2e4d958_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:CommonAdmin:main.html.twig"));

        // line 1
        if (((isset($context["isCollect"]) ? $context["isCollect"] : $this->getContext($context, "isCollect")) == 0)) {
            // line 2
            echo "  <li class=\"shortcut-add\" data-url=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_common_add");
            echo "\"><a href=\"javascript:;\"><i class=\"glyphicon glyphicon-plus\"></i> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加当前页面为常用功能"), "html", null, true);
            echo "</a></li>
";
        } else {
            // line 4
            echo "  <li><a href=\"javascript:;\"><i class=\"glyphicon glyphicon-ok text-muted\"></i> <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("当前页面已添加"), "html", null, true);
            echo "</span></a></li>
";
        }
        // line 6
        echo "
";
        // line 7
        if ((isset($context["admins"]) ? $context["admins"] : $this->getContext($context, "admins"))) {
            // line 8
            echo "  <li role=\"presentation\" class=\"divider\"></li>
";
        }
        // line 10
        echo "
";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["admins"]) ? $context["admins"] : $this->getContext($context, "admins")));
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
        foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
            // line 12
            echo "  ";
            $this->loadTemplate("TopxiaAdminBundle:CommonAdmin:li.html.twig", "TopxiaAdminBundle:CommonAdmin:main.html.twig", 12)->display($context);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        
        $__internal_bcb24e214e12972c54cfb4b5d3c4d3d35cff49f57a67b27713cf2b6fe2e4d958->leave($__internal_bcb24e214e12972c54cfb4b5d3c4d3d35cff49f57a67b27713cf2b6fe2e4d958_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CommonAdmin:main.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  67 => 12,  50 => 11,  47 => 10,  43 => 8,  41 => 7,  38 => 6,  32 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if isCollect == 0 %}
  <li class=\"shortcut-add\" data-url=\"{{path('admin_common_add')}}\"><a href=\"javascript:;\"><i class=\"glyphicon glyphicon-plus\"></i> {{'添加当前页面为常用功能'|trans}}</a></li>
{% else %}
  <li><a href=\"javascript:;\"><i class=\"glyphicon glyphicon-ok text-muted\"></i> <span class=\"text-muted\">{{'当前页面已添加'|trans}}</span></a></li>
{% endif %}

{% if admins %}
  <li role=\"presentation\" class=\"divider\"></li>
{% endif %}

{% for admin in admins %}
  {% include 'TopxiaAdminBundle:CommonAdmin:li.html.twig' %}
{% endfor %}";
    }
}

<?php

/* TopxiaWebBundle:Default:navigation-li.html.twig */
class __TwigTemplate_3351c88a298fc5ed0a5b8e6e965403cd30634582ea6e6932abcf877aaa7b93d0 extends Twig_Template
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
        $__internal_b0f4b3290d4cabe59d8b51ad712a78c3b71ea0a4f59a5e4d075523b8c8d1a9cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b0f4b3290d4cabe59d8b51ad712a78c3b71ea0a4f59a5e4d075523b8c8d1a9cb->enter($__internal_b0f4b3290d4cabe59d8b51ad712a78c3b71ea0a4f59a5e4d075523b8c8d1a9cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Default:navigation-li.html.twig"));

        // line 1
        echo "<li class=\"";
        if ((isset($context["subNavs"]) ? $context["subNavs"] : $this->getContext($context, "subNavs"))) {
            echo "nav-hover";
        }
        if (((isset($context["siteNav"]) ? $context["siteNav"] : $this->getContext($context, "siteNav")) && ((isset($context["siteNav"]) ? $context["siteNav"] : $this->getContext($context, "siteNav")) == $this->getAttribute((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), "url", array())))) {
            echo " active ";
        }
        echo "\">
  <a href=\"";
        // line 2
        if ($this->getAttribute((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), "url", array())) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->navigationUrlFilter($this->getAttribute((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), "url", array())), "html", null, true);
        } else {
            echo "javascript:;";
        }
        echo "\" ";
        if ($this->getAttribute((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), "isNewWin", array())) {
            echo "target=\"_blank\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["nav"]) ? $context["nav"] : $this->getContext($context, "nav")), "name", array()), "html", null, true);
        echo " ";
        if ((isset($context["subNavs"]) ? $context["subNavs"] : $this->getContext($context, "subNavs"))) {
            echo " <b class=\"caret\"></b>";
        }
        echo "</a>
  ";
        // line 3
        if ((isset($context["subNavs"]) ? $context["subNavs"] : $this->getContext($context, "subNavs"))) {
            // line 4
            echo "    <ul class=\"dropdown-menu\" role=\"menu\">
      ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["subNavs"]) ? $context["subNavs"] : $this->getContext($context, "subNavs")));
            foreach ($context['_seq'] as $context["_key"] => $context["subNav"]) {
                if ($this->getAttribute($context["subNav"], "isOpen", array())) {
                    // line 6
                    echo "        <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->navigationUrlFilter($this->getAttribute($context["subNav"], "url", array())), "html", null, true);
                    echo "\"  ";
                    if ($this->getAttribute($context["subNav"], "isNewWin", array())) {
                        echo "target=\"_blank\"";
                    }
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["subNav"], "name", array()), "html", null, true);
                    echo "</a></li>
      ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['subNav'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 8
            echo "    </ul>
  ";
        }
        // line 10
        echo "</li>";
        
        $__internal_b0f4b3290d4cabe59d8b51ad712a78c3b71ea0a4f59a5e4d075523b8c8d1a9cb->leave($__internal_b0f4b3290d4cabe59d8b51ad712a78c3b71ea0a4f59a5e4d075523b8c8d1a9cb_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:navigation-li.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 10,  76 => 8,  60 => 6,  55 => 5,  52 => 4,  50 => 3,  32 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<li class=\"{% if subNavs %}nav-hover{% endif %}{% if siteNav and siteNav == nav.url %} active {% endif %}\">
  <a href=\"{% if nav.url %}{{ nav.url|navigation_url }}{% else %}javascript:;{% endif %}\" {% if nav.isNewWin %}target=\"_blank\"{% endif %}>{{ nav.name }} {% if subNavs %} <b class=\"caret\"></b>{% endif %}</a>
  {% if subNavs %}
    <ul class=\"dropdown-menu\" role=\"menu\">
      {% for subNav in subNavs if subNav.isOpen %}
        <li><a href=\"{{ subNav.url|navigation_url }}\"  {% if subNav.isNewWin %}target=\"_blank\"{% endif %}>{{ subNav.name }}</a></li>
      {% endfor %}
    </ul>
  {% endif %}
</li>";
    }
}

<?php

/* TopxiaWebBundle:Block:live_top_banner.template.html.twig */
class __TwigTemplate_099486cb9a42f32a1647a5da9d6f032a105146fbaf34e4cc6492652e8620a595 extends Twig_Template
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
        $__internal_67a1b0d8993e5787a716f27ead6ffccbe578209cebe94ae80d47a310f26e0564 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67a1b0d8993e5787a716f27ead6ffccbe578209cebe94ae80d47a310f26e0564->enter($__internal_67a1b0d8993e5787a716f27ead6ffccbe578209cebe94ae80d47a310f26e0564_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Block:live_top_banner.template.html.twig"));

        // line 1
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(((array_key_exists("posters", $context)) ? (_twig_default_filter((isset($context["posters"]) ? $context["posters"] : $this->getContext($context, "posters")), null)) : (null)));
        foreach ($context['_seq'] as $context["_key"] => $context["imglink"]) {
            if ((($this->getAttribute($context["imglink"], "src", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["imglink"], "src", array()), "")) : (""))) {
                // line 2
                echo "\t";
                if ((($this->getAttribute($context["imglink"], "status", array()) == 1) && ($this->getAttribute($context["imglink"], "mode", array()) == "img"))) {
                    // line 3
                    echo "\t\t<div class=\"swiper-slide swiper-hidden\" style=\"background: ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["imglink"], "background", array()), "html", null, true);
                    echo ";\">
\t\t  <div ";
                    // line 4
                    if (($this->getAttribute($context["imglink"], "layout", array()) == "limitWide")) {
                        echo "class=\"container\"";
                    }
                    echo ">
\t\t    <a href=\"";
                    // line 5
                    echo twig_escape_filter($this->env, (($this->getAttribute($context["imglink"], "href", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["imglink"], "href", array()), "")) : ("")), "html", null, true);
                    echo "\" target=\"_blank\" ><img class=\"img-responsive\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($context["imglink"], "src", array())), "html", null, true);
                    echo "\">
\t\t    </a>
\t\t  </div>
\t\t</div>
\t";
                }
                // line 9
                echo " 
";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['imglink'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "
";
        
        $__internal_67a1b0d8993e5787a716f27ead6ffccbe578209cebe94ae80d47a310f26e0564->leave($__internal_67a1b0d8993e5787a716f27ead6ffccbe578209cebe94ae80d47a310f26e0564_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Block:live_top_banner.template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 11,  51 => 9,  41 => 5,  35 => 4,  30 => 3,  27 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% for imglink in posters|default(null) if imglink.src|default('') %}
\t{% if imglink.status == 1 and imglink.mode == \"img\" %}
\t\t<div class=\"swiper-slide swiper-hidden\" style=\"background: {{ imglink.background }};\">
\t\t  <div {% if imglink.layout == 'limitWide' %}class=\"container\"{% endif %}>
\t\t    <a href=\"{{ imglink.href|default('') }}\" target=\"_blank\" ><img class=\"img-responsive\" src=\"{{ asset(imglink.src) }}\">
\t\t    </a>
\t\t  </div>
\t\t</div>
\t{% endif %} 
{% endfor %}

";
    }
}

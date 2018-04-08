<?php

/* TopxiaWebBundle::powered-by.html.twig */
class __TwigTemplate_18843775eb31d2f559f275461ef750af768c941fc111063d154acccbccb3e432 extends Twig_Template
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
        $__internal_b4cc51c8b623bd9f964fcf4eed77772d7521a7e5500a8d0f450e854cde5b8b11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4cc51c8b623bd9f964fcf4eed77772d7521a7e5500a8d0f450e854cde5b8b11->enter($__internal_b4cc51c8b623bd9f964fcf4eed77772d7521a7e5500a8d0f450e854cde5b8b11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle::powered-by.html.twig"));

        // line 1
        if (((($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.owned") && (_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.thirdCopyright"), 0) != 2)) && $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.licenseDomains")) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "server", array()), "get", array(0 => "HTTP_HOST"), "method"), twig_split_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.licenseDomains"), ";")))) {
            // line 2
            echo "  ";
            if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.name")) {
                // line 3
                echo "    Powered by <a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.name"), "html", null, true);
                echo "</a>
  ";
            }
        } else {
            // line 6
            echo "  Powered by <a href=\"http://www.edusoho.com/\" target=\"_blank\">EduSoho v";
            echo twig_escape_filter($this->env, twig_constant("\\Topxia\\System::VERSION"), "html", null, true);
            echo "</a>
  ©2014-";
            // line 7
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, null, "Y"), "html", null, true);
            echo " ";
            if (( !_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 2)) {
                echo "<a class=\"mlm\" href=\"http://www.howzhi.com/\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("好知网"), "html", null, true);
                echo "</a>";
            }
        }
        
        $__internal_b4cc51c8b623bd9f964fcf4eed77772d7521a7e5500a8d0f450e854cde5b8b11->leave($__internal_b4cc51c8b623bd9f964fcf4eed77772d7521a7e5500a8d0f450e854cde5b8b11_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::powered-by.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  41 => 7,  36 => 6,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if setting('copyright.owned') and setting('copyright.thirdCopyright')|default(0) != 2 and setting('copyright.licenseDomains') and app.request.server.get('HTTP_HOST') in setting('copyright.licenseDomains')|split(';') %}
  {% if setting('copyright.name') %}
    Powered by <a href=\"{{ path('homepage') }}\" target=\"_blank\">{{ setting('copyright.name') }}</a>
  {% endif %}
{% else %}
  Powered by <a href=\"http://www.edusoho.com/\" target=\"_blank\">EduSoho v{{ constant('\\\\Topxia\\\\System::VERSION') }}</a>
  ©2014-{{ null|date('Y') }} {% if not setting('copyright.thirdCopyright')|default(0) == 2 %}<a class=\"mlm\" href=\"http://www.howzhi.com/\" target=\"_blank\">{{'好知网'|trans}}</a>{% endif %}
{% endif %}
";
    }
}

<?php

/* OrgBundle:Org/Parts:table-body-td.html.twig */
class __TwigTemplate_655b1561ed3a18898744b01fb39d1f6743fca0426bd95af7fceac4b19492c6e7 extends Twig_Template
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
        $__internal_3a7b627a819831b2e7a5bbb8d78e0b64fdf673e409362ab7a84472b219456cdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a7b627a819831b2e7a5bbb8d78e0b64fdf673e409362ab7a84472b219456cdc->enter($__internal_3a7b627a819831b2e7a5bbb8d78e0b64fdf673e409362ab7a84472b219456cdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrgBundle:Org/Parts:table-body-td.html.twig"));

        // line 1
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t<td>
\t    ";
            // line 3
            $context["org"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Org", array("orgCode" => (isset($context["orgCode"]) ? $context["orgCode"] : $this->getContext($context, "orgCode"))));
            // line 4
            echo "\t    ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["org"]) ? $context["org"] : null), "name", array()), "--")) : ("--")), "html", null, true);
            echo "
\t    <br>
\t    <span class=\"text-muted text-sm\">编码：";
            // line 6
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["org"]) ? $context["org"] : $this->getContext($context, "org")), "code", array()), "html", null, true);
            echo "</span>
\t</td>
";
        }
        
        $__internal_3a7b627a819831b2e7a5bbb8d78e0b64fdf673e409362ab7a84472b219456cdc->leave($__internal_3a7b627a819831b2e7a5bbb8d78e0b64fdf673e409362ab7a84472b219456cdc_prof);

    }

    public function getTemplateName()
    {
        return "OrgBundle:Org/Parts:table-body-td.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 6,  29 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if setting('magic.enable_org','0') %}
\t<td>
\t    {% set org = data('Org',{orgCode: orgCode}) %}
\t    {{ org.name|default('--')}}
\t    <br>
\t    <span class=\"text-muted text-sm\">编码：{{ org.code }}</span>
\t</td>
{% endif %}";
    }
}

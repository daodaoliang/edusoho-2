<?php

/* OrgBundle:Org/Parts:table-thead-tr.html.twig */
class __TwigTemplate_5012acbd2f5534fceb43fdf38f3cbbbab4b019e0df12751d1e3e34e0436f90cf extends Twig_Template
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
        $__internal_6f42005d616552148fa2979eff160962213df13c8498a34513ae19f25218b0d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f42005d616552148fa2979eff160962213df13c8498a34513ae19f25218b0d5->enter($__internal_6f42005d616552148fa2979eff160962213df13c8498a34513ae19f25218b0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrgBundle:Org/Parts:table-thead-tr.html.twig"));

        // line 1
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t<th width=\"15%\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("所属组织机构"), "html", null, true);
            echo "</th>
";
        }
        
        $__internal_6f42005d616552148fa2979eff160962213df13c8498a34513ae19f25218b0d5->leave($__internal_6f42005d616552148fa2979eff160962213df13c8498a34513ae19f25218b0d5_prof);

    }

    public function getTemplateName()
    {
        return "OrgBundle:Org/Parts:table-thead-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if setting('magic.enable_org','0') %}
\t<th width=\"15%\">{{ '所属组织机构'|trans }}</th>
{% endif %}";
    }
}

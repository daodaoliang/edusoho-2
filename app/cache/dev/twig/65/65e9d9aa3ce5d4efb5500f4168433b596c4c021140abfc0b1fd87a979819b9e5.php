<?php

/* OrgBundle:Org/Parts:table-body-checkbox.html.twig */
class __TwigTemplate_c9562928a8a1c96c056183ab98ff82415b4986242c45b650efffa57510aadcfc extends Twig_Template
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
        $__internal_cc81cef7418ca1287769d111e5f63b8c19f7b59965473e47e6950d39e4ca46a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc81cef7418ca1287769d111e5f63b8c19f7b59965473e47e6950d39e4ca46a9->enter($__internal_cc81cef7418ca1287769d111e5f63b8c19f7b59965473e47e6950d39e4ca46a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrgBundle:Org/Parts:table-body-checkbox.html.twig"));

        // line 1
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t <td><input type=\"checkbox\"  data-role=\"batch-item\"></td>
";
        }
        
        $__internal_cc81cef7418ca1287769d111e5f63b8c19f7b59965473e47e6950d39e4ca46a9->leave($__internal_cc81cef7418ca1287769d111e5f63b8c19f7b59965473e47e6950d39e4ca46a9_prof);

    }

    public function getTemplateName()
    {
        return "OrgBundle:Org/Parts:table-body-checkbox.html.twig";
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
\t <td><input type=\"checkbox\"  data-role=\"batch-item\"></td>
{% endif %}
";
    }
}

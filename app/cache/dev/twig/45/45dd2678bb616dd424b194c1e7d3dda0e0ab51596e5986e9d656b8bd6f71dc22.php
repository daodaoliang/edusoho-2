<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_82ba5c9e54880573db91f436ca702d66057a40cbb20b1484dc05033f2ac9faa2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_07509f10334aaa2412e5342ccc7210ab8b09f75f037235cdbe7373c12fb8e4ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07509f10334aaa2412e5342ccc7210ab8b09f75f037235cdbe7373c12fb8e4ac->enter($__internal_07509f10334aaa2412e5342ccc7210ab8b09f75f037235cdbe7373c12fb8e4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07509f10334aaa2412e5342ccc7210ab8b09f75f037235cdbe7373c12fb8e4ac->leave($__internal_07509f10334aaa2412e5342ccc7210ab8b09f75f037235cdbe7373c12fb8e4ac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_920a6482c7543a5ff486eeecbb705fe6daac3db4d0150f72fa512b6fede531d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_920a6482c7543a5ff486eeecbb705fe6daac3db4d0150f72fa512b6fede531d5->enter($__internal_920a6482c7543a5ff486eeecbb705fe6daac3db4d0150f72fa512b6fede531d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_920a6482c7543a5ff486eeecbb705fe6daac3db4d0150f72fa512b6fede531d5->leave($__internal_920a6482c7543a5ff486eeecbb705fe6daac3db4d0150f72fa512b6fede531d5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2417601d04cd7f4063e9fd98d977bd791abe8022f8595bfa8d79f3fe2eeba399 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2417601d04cd7f4063e9fd98d977bd791abe8022f8595bfa8d79f3fe2eeba399->enter($__internal_2417601d04cd7f4063e9fd98d977bd791abe8022f8595bfa8d79f3fe2eeba399_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2417601d04cd7f4063e9fd98d977bd791abe8022f8595bfa8d79f3fe2eeba399->leave($__internal_2417601d04cd7f4063e9fd98d977bd791abe8022f8595bfa8d79f3fe2eeba399_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_58b6a26cc56f18f742e7ebc2e7f21f02fa7c4898ccd3d8af7314ed9881099c96 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58b6a26cc56f18f742e7ebc2e7f21f02fa7c4898ccd3d8af7314ed9881099c96->enter($__internal_58b6a26cc56f18f742e7ebc2e7f21f02fa7c4898ccd3d8af7314ed9881099c96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_58b6a26cc56f18f742e7ebc2e7f21f02fa7c4898ccd3d8af7314ed9881099c96->leave($__internal_58b6a26cc56f18f742e7ebc2e7f21f02fa7c4898ccd3d8af7314ed9881099c96_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
";
    }
}

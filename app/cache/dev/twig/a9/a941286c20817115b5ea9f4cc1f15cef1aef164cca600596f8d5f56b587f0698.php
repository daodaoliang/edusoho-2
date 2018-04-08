<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_931f9b4e1ec73d875fe24c2f26dafcacba271b9b613e08c5e2fb7c5878c41654 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d27970cb18280a392746a787641fe79f17ab506d1cc28f860ac3f083a6795e46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d27970cb18280a392746a787641fe79f17ab506d1cc28f860ac3f083a6795e46->enter($__internal_d27970cb18280a392746a787641fe79f17ab506d1cc28f860ac3f083a6795e46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d27970cb18280a392746a787641fe79f17ab506d1cc28f860ac3f083a6795e46->leave($__internal_d27970cb18280a392746a787641fe79f17ab506d1cc28f860ac3f083a6795e46_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_8e4034f9a07762b0264fbdbbfa6140dcea9fef3954b26b3e536f74261710683d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e4034f9a07762b0264fbdbbfa6140dcea9fef3954b26b3e536f74261710683d->enter($__internal_8e4034f9a07762b0264fbdbbfa6140dcea9fef3954b26b3e536f74261710683d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_8e4034f9a07762b0264fbdbbfa6140dcea9fef3954b26b3e536f74261710683d->leave($__internal_8e4034f9a07762b0264fbdbbfa6140dcea9fef3954b26b3e536f74261710683d_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8698816dac70c0f6d9594e41dcc638884e63cedad4f76e59817d2b9f33484027 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8698816dac70c0f6d9594e41dcc638884e63cedad4f76e59817d2b9f33484027->enter($__internal_8698816dac70c0f6d9594e41dcc638884e63cedad4f76e59817d2b9f33484027_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8698816dac70c0f6d9594e41dcc638884e63cedad4f76e59817d2b9f33484027->leave($__internal_8698816dac70c0f6d9594e41dcc638884e63cedad4f76e59817d2b9f33484027_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_76580f446e42e3e2c7ac6e953d950f6b55d7196fce06ff1b516a23cf7b78e9cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_76580f446e42e3e2c7ac6e953d950f6b55d7196fce06ff1b516a23cf7b78e9cd->enter($__internal_76580f446e42e3e2c7ac6e953d950f6b55d7196fce06ff1b516a23cf7b78e9cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_76580f446e42e3e2c7ac6e953d950f6b55d7196fce06ff1b516a23cf7b78e9cd->leave($__internal_76580f446e42e3e2c7ac6e953d950f6b55d7196fce06ff1b516a23cf7b78e9cd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
";
    }
}

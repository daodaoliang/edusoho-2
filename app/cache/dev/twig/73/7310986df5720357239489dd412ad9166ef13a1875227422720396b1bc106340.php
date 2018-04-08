<?php

/* TopxiaWebBundle:EsBar:ListContent/notification.html.twig */
class __TwigTemplate_f36364aae005e4c7bc234c65d7f5bf75e8e626987b2fffa5ab19240403e1405a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:layout.html.twig", "TopxiaWebBundle:EsBar:ListContent/notification.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
            'myMessage' => array($this, 'block_myMessage'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:EsBar:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_902f84fbb53112c09f508734b5c1248ef38340a8299848da78a499b2103d7c4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_902f84fbb53112c09f508734b5c1248ef38340a8299848da78a499b2103d7c4d->enter($__internal_902f84fbb53112c09f508734b5c1248ef38340a8299848da78a499b2103d7c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:ListContent/notification.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_902f84fbb53112c09f508734b5c1248ef38340a8299848da78a499b2103d7c4d->leave($__internal_902f84fbb53112c09f508734b5c1248ef38340a8299848da78a499b2103d7c4d_prof);

    }

    // line 2
    public function block_esBarTitle($context, array $blocks = array())
    {
        $__internal_cd1be29bafaaef5b19b3823994cf147372371c9278a664c9a90caf612adf294c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd1be29bafaaef5b19b3823994cf147372371c9278a664c9a90caf612adf294c->enter($__internal_cd1be29bafaaef5b19b3823994cf147372371c9278a664c9a90caf612adf294c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarTitle"));

        // line 3
        echo "    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("通知"), "html", null, true);
        echo "
";
        
        $__internal_cd1be29bafaaef5b19b3823994cf147372371c9278a664c9a90caf612adf294c->leave($__internal_cd1be29bafaaef5b19b3823994cf147372371c9278a664c9a90caf612adf294c_prof);

    }

    // line 6
    public function block_esBarBody($context, array $blocks = array())
    {
        $__internal_cf9a622ceef7b909161ee70893583307d70b20005ce2d59358001f061b5e1e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf9a622ceef7b909161ee70893583307d70b20005ce2d59358001f061b5e1e2a->enter($__internal_cf9a622ceef7b909161ee70893583307d70b20005ce2d59358001f061b5e1e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarBody"));

        // line 7
        echo "  <ul class=\"bar-message\">
    ";
        // line 8
        $this->displayBlock('myMessage', $context, $blocks);
        // line 11
        echo "  </ul>
";
        
        $__internal_cf9a622ceef7b909161ee70893583307d70b20005ce2d59358001f061b5e1e2a->leave($__internal_cf9a622ceef7b909161ee70893583307d70b20005ce2d59358001f061b5e1e2a_prof);

    }

    // line 8
    public function block_myMessage($context, array $blocks = array())
    {
        $__internal_3bddf5e95be17a63fdccc321e7a06f850cd479ea77cba8ee39840f8bce95bb38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bddf5e95be17a63fdccc321e7a06f850cd479ea77cba8ee39840f8bce95bb38->enter($__internal_3bddf5e95be17a63fdccc321e7a06f850cd479ea77cba8ee39840f8bce95bb38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myMessage"));

        // line 9
        echo "
    ";
        
        $__internal_3bddf5e95be17a63fdccc321e7a06f850cd479ea77cba8ee39840f8bce95bb38->leave($__internal_3bddf5e95be17a63fdccc321e7a06f850cd479ea77cba8ee39840f8bce95bb38_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 9,  71 => 8,  63 => 11,  61 => 8,  58 => 7,  52 => 6,  42 => 3,  36 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle:EsBar:layout.html.twig' %}
{% block esBarTitle %}
    {{'通知'|trans}}
{% endblock %}

{% block esBarBody %}
  <ul class=\"bar-message\">
    {% block myMessage %}

    {% endblock %}
  </ul>
{% endblock %}
";
    }
}

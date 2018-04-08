<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_64205aa2b42070906a8eaf1e6bc6abdf8b61199267f75a4f28340b0fb88faabc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_0bf9534eb7409b1e5f8612b84a864bc14846dd012fd077749389ce8e6a523d74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0bf9534eb7409b1e5f8612b84a864bc14846dd012fd077749389ce8e6a523d74->enter($__internal_0bf9534eb7409b1e5f8612b84a864bc14846dd012fd077749389ce8e6a523d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0bf9534eb7409b1e5f8612b84a864bc14846dd012fd077749389ce8e6a523d74->leave($__internal_0bf9534eb7409b1e5f8612b84a864bc14846dd012fd077749389ce8e6a523d74_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_66232f32196055e18204a6bd12a571d4ff4df0de6cc8c4332242edb88be43ab8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66232f32196055e18204a6bd12a571d4ff4df0de6cc8c4332242edb88be43ab8->enter($__internal_66232f32196055e18204a6bd12a571d4ff4df0de6cc8c4332242edb88be43ab8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_66232f32196055e18204a6bd12a571d4ff4df0de6cc8c4332242edb88be43ab8->leave($__internal_66232f32196055e18204a6bd12a571d4ff4df0de6cc8c4332242edb88be43ab8_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_02e0cc4d498f6600f3a8aa9f6ac208fef95355bfebd66b8409b7b002cb77b3ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02e0cc4d498f6600f3a8aa9f6ac208fef95355bfebd66b8409b7b002cb77b3ec->enter($__internal_02e0cc4d498f6600f3a8aa9f6ac208fef95355bfebd66b8409b7b002cb77b3ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_02e0cc4d498f6600f3a8aa9f6ac208fef95355bfebd66b8409b7b002cb77b3ec->leave($__internal_02e0cc4d498f6600f3a8aa9f6ac208fef95355bfebd66b8409b7b002cb77b3ec_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9e0305844356f826fca4e6b56ba3a294ce69e1b71d1ccd0b6abc17262367ffb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e0305844356f826fca4e6b56ba3a294ce69e1b71d1ccd0b6abc17262367ffb7->enter($__internal_9e0305844356f826fca4e6b56ba3a294ce69e1b71d1ccd0b6abc17262367ffb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_9e0305844356f826fca4e6b56ba3a294ce69e1b71d1ccd0b6abc17262367ffb7->leave($__internal_9e0305844356f826fca4e6b56ba3a294ce69e1b71d1ccd0b6abc17262367ffb7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
";
    }
}

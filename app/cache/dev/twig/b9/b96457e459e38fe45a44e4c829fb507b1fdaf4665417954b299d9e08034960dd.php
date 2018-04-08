<?php

/* OrgBundle:Org:batch-update-org-btn.html.twig */
class __TwigTemplate_f974b03e20619dd4499eef5709540039be56103e3fd6a29e03c97e3ab359f0bf extends Twig_Template
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
        $__internal_86855b67cbd013a81eb41ea2c078b20e8bd50dfaf20f79369e39f3c36e3f127a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_86855b67cbd013a81eb41ea2c078b20e8bd50dfaf20f79369e39f3c36e3f127a->enter($__internal_86855b67cbd013a81eb41ea2c078b20e8bd50dfaf20f79369e39f3c36e3f127a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrgBundle:Org:batch-update-org-btn.html.twig"));

        // line 1
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.enable_org", "0")) {
            // line 2
            echo "\t";
            $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("orgbundle/controller/org/batch-org-btn");
            // line 3
            echo "\t";
            $context["generate"] = (((array_key_exists("generate", $context)) ? (_twig_default_filter((isset($context["generate"]) ? $context["generate"] : $this->getContext($context, "generate")), "generate")) : ("generate")) != "no-generate");
            // line 4
            echo "\t";
            if ((isset($context["generate"]) ? $context["generate"] : $this->getContext($context, "generate"))) {
                // line 5
                echo "\t\t<div>
\t    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
                // line 6
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全选"), "html", null, true);
                echo "</label>
\t";
            }
            // line 8
            echo "  \t<a class=\"btn btn-default btn-sm ";
            if ((isset($context["generate"]) ? $context["generate"] : $this->getContext($context, "generate"))) {
                echo " mlm ";
            }
            echo "\" id=\"batch-update-org\" data-form-id=\"";
            echo twig_escape_filter($this->env, (isset($context["formId"]) ? $context["formId"] : $this->getContext($context, "formId")), "html", null, true);
            echo "\" data-toggle=\"modal\" data-generate=\"";
            echo twig_escape_filter($this->env, ((array_key_exists("generate", $context)) ? (_twig_default_filter((isset($context["generate"]) ? $context["generate"] : $this->getContext($context, "generate")), false)) : (false)), "html", null, true);
            echo "\" data-target=\"#modal\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_batch_update_org", array("module" => (isset($context["module"]) ? $context["module"] : $this->getContext($context, "module")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置组织机构"), "html", null, true);
            echo "</a>
\t";
            // line 9
            if ((isset($context["generate"]) ? $context["generate"] : $this->getContext($context, "generate"))) {
                // line 10
                echo "\t  </div>
\t";
            }
            // line 12
            echo "
";
        }
        
        $__internal_86855b67cbd013a81eb41ea2c078b20e8bd50dfaf20f79369e39f3c36e3f127a->leave($__internal_86855b67cbd013a81eb41ea2c078b20e8bd50dfaf20f79369e39f3c36e3f127a_prof);

    }

    public function getTemplateName()
    {
        return "OrgBundle:Org:batch-update-org-btn.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  62 => 12,  58 => 10,  56 => 9,  41 => 8,  36 => 6,  33 => 5,  30 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if setting('magic.enable_org','0') %}
\t{% do load_script('orgbundle/controller/org/batch-org-btn') %}
\t{% set generate = generate|default('generate') != 'no-generate' %}
\t{% if generate %}
\t\t<div>
\t    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> {{ '全选'|trans }}</label>
\t{% endif %}
  \t<a class=\"btn btn-default btn-sm {% if generate %} mlm {% endif %}\" id=\"batch-update-org\" data-form-id=\"{{formId}}\" data-toggle=\"modal\" data-generate=\"{{generate|default(false)}}\" data-target=\"#modal\" data-url=\"{{path('admin_batch_update_org',{module:module})}}\">{{ '设置组织机构'|trans }}</a>
\t{% if generate %}
\t  </div>
\t{% endif %}

{% endif %}";
    }
}

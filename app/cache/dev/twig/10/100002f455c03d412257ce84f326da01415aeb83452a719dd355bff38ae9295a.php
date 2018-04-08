<?php

/* TopxiaWebBundle::site-hint.html.twig */
class __TwigTemplate_0954f6d40bdcaa7cb5f99377ba7dc6a99de228cc8ea9e512598a726adf866e49 extends Twig_Template
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
        $__internal_a4c813eb3f9d9d65ba8d88caf9c8ed1b170864b1944670ff3b113d4ab23f3e43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c813eb3f9d9d65ba8d88caf9c8ed1b170864b1944670ff3b113d4ab23f3e43->enter($__internal_a4c813eb3f9d9d65ba8d88caf9c8ed1b170864b1944670ff3b113d4ab23f3e43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle::site-hint.html.twig"));

        // line 1
        if (((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "setup", array()) == 0)) && ( !array_key_exists("hideSetupHint", $context) || ((isset($context["hideSetupHint"]) ? $context["hideSetupHint"] : $this->getContext($context, "hideSetupHint")) != true))) &&  !$this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "get", array(0 => "close_set_email_alert"), "method"))) {
            // line 2
            echo "\t";
            $this->loadTemplate("TopxiaWebBundle::email-setting.html.twig", "TopxiaWebBundle::site-hint.html.twig", 2)->display($context);
        } else {
            // line 4
            echo "\t";
            $asm89CacheStrategy1 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
            $asm89Key1 = $asm89CacheStrategy1->generateKey("layout/announcement", 600            );
            $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
            if ($asm89CacheBody1 === false) {
                ob_start();
                    // line 5
                    echo "\t\t";
                    $this->loadTemplate("TopxiaWebBundle:Announcement:announcement.html.twig", "TopxiaWebBundle::site-hint.html.twig", 5)->display($context);
                    // line 6
                    echo "\t";
                
                $asm89CacheBody1 = ob_get_clean();
                $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
            }
            echo $asm89CacheBody1;
        }
        
        $__internal_a4c813eb3f9d9d65ba8d88caf9c8ed1b170864b1944670ff3b113d4ab23f3e43->leave($__internal_a4c813eb3f9d9d65ba8d88caf9c8ed1b170864b1944670ff3b113d4ab23f3e43_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::site-hint.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 6,  35 => 5,  28 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if app.user and app.user.setup == 0 and (hideSetupHint is not defined or hideSetupHint != true) and not app.request.cookies.get('close_set_email_alert') %}
\t{% include 'TopxiaWebBundle::email-setting.html.twig' %}
{% else %}
\t{% cache 'layout/announcement' 600 %}
\t\t{% include 'TopxiaWebBundle:Announcement:announcement.html.twig' %}
\t{% endcache %}
{% endif %}";
    }
}

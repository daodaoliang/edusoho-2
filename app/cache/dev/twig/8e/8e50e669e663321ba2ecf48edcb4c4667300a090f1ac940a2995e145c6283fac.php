<?php

/* TopxiaAdminBundle:Default:domain.html.twig */
class __TwigTemplate_e36b15973f4eb5aaa993763bdef617b9b1a0cffa27acb2d2180b3a1f1e25439a extends Twig_Template
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
        $__internal_b2cc986c73038b462bd1add3dc945a6c7cf838feb46b3d8de137112b3a6f2184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2cc986c73038b462bd1add3dc945a6c7cf838feb46b3d8de137112b3a6f2184->enter($__internal_b2cc986c73038b462bd1add3dc945a6c7cf838feb46b3d8de137112b3a6f2184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Default:domain.html.twig"));

        // line 1
        if ((isset($context["inspectList"]) ? $context["inspectList"] : $this->getContext($context, "inspectList"))) {
            // line 2
            echo "  <div class=\"alert alert-warning\" role=\"alert\">
    ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["inspectList"]) ? $context["inspectList"] : $this->getContext($context, "inspectList")));
            foreach ($context['_seq'] as $context["_key"] => $context["inspectItem"]) {
                // line 4
                echo "      <span>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inspectItem"], "value", array()), "errorMessage", array()), "html", null, true);
                echo "</span>
      <a href='";
                // line 5
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["inspectItem"], "value", array()), "settingUrl", array()), "html", null, true);
                echo "'>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置"), "html", null, true);
                echo "</a>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['inspectItem'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 7
            echo "  </div>
";
        }
        
        $__internal_b2cc986c73038b462bd1add3dc945a6c7cf838feb46b3d8de137112b3a6f2184->leave($__internal_b2cc986c73038b462bd1add3dc945a6c7cf838feb46b3d8de137112b3a6f2184_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:domain.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 7,  36 => 5,  31 => 4,  27 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if inspectList %}
  <div class=\"alert alert-warning\" role=\"alert\">
    {% for inspectItem in inspectList %}
      <span>{{inspectItem.value.errorMessage}}</span>
      <a href='{{inspectItem.value.settingUrl}}'>{{'设置'|trans}}</a>
    {% endfor %}
  </div>
{% endif %}";
    }
}

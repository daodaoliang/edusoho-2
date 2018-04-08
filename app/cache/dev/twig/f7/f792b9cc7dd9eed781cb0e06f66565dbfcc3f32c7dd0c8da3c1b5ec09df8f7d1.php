<?php

/* TopxiaWebBundle:LiveCourse:layout.html.twig */
class __TwigTemplate_3807ad1c1a1717b9d6d8f9ac1fcf49a591f603dc4704cf685ca47d33a35dc2e3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:LiveCourse:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'live_main' => array($this, 'block_live_main'),
            'live_side' => array($this, 'block_live_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f57687caf044edc94dd2e55aef0523f569b6a7252ab8c5209d1e365e879eefb3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f57687caf044edc94dd2e55aef0523f569b6a7252ab8c5209d1e365e879eefb3->enter($__internal_f57687caf044edc94dd2e55aef0523f569b6a7252ab8c5209d1e365e879eefb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:LiveCourse:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f57687caf044edc94dd2e55aef0523f569b6a7252ab8c5209d1e365e879eefb3->leave($__internal_f57687caf044edc94dd2e55aef0523f569b6a7252ab8c5209d1e365e879eefb3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_29df1696732b2b87df437848f1ec3c7c2d05503175608679d73d94be0ad47c46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29df1696732b2b87df437848f1ec3c7c2d05503175608679d73d94be0ad47c46->enter($__internal_29df1696732b2b87df437848f1ec3c7c2d05503175608679d73d94be0ad47c46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_29df1696732b2b87df437848f1ec3c7c2d05503175608679d73d94be0ad47c46->leave($__internal_29df1696732b2b87df437848f1ec3c7c2d05503175608679d73d94be0ad47c46_prof);

    }

    // line 5
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_2c57484663e1d76955a35acfd6929d2deddb49851d24fc4781f3546617536293 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c57484663e1d76955a35acfd6929d2deddb49851d24fc4781f3546617536293->enter($__internal_2c57484663e1d76955a35acfd6929d2deddb49851d24fc4781f3546617536293_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 6
        echo "  ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 7
        echo "  <div id=\"content-container\" class=\"container\">  
    ";
        // line 8
        $this->displayBlock('content', $context, $blocks);
        // line 18
        echo "  </div>
";
        
        $__internal_2c57484663e1d76955a35acfd6929d2deddb49851d24fc4781f3546617536293->leave($__internal_2c57484663e1d76955a35acfd6929d2deddb49851d24fc4781f3546617536293_prof);

    }

    // line 6
    public function block_top_content($context, array $blocks = array())
    {
        $__internal_79984843b626dee26961fa3fce08c68c9efb8970a0be4875aab382d1575a316a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79984843b626dee26961fa3fce08c68c9efb8970a0be4875aab382d1575a316a->enter($__internal_79984843b626dee26961fa3fce08c68c9efb8970a0be4875aab382d1575a316a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content"));

        
        $__internal_79984843b626dee26961fa3fce08c68c9efb8970a0be4875aab382d1575a316a->leave($__internal_79984843b626dee26961fa3fce08c68c9efb8970a0be4875aab382d1575a316a_prof);

    }

    // line 8
    public function block_content($context, array $blocks = array())
    {
        $__internal_34dfaa6c29584721bfdfaa6ec942fac8dc4707dc09e361ee1fb7a0d9d2db0373 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_34dfaa6c29584721bfdfaa6ec942fac8dc4707dc09e361ee1fb7a0d9d2db0373->enter($__internal_34dfaa6c29584721bfdfaa6ec942fac8dc4707dc09e361ee1fb7a0d9d2db0373_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 9
        echo "      <div class=\"live-course-body row\">
        <div class=\"col-md-4\">
          ";
        // line 11
        $this->displayBlock('live_main', $context, $blocks);
        // line 12
        echo "        </div>
        <aside class=\"col-md-8\">
          ";
        // line 14
        $this->displayBlock('live_side', $context, $blocks);
        // line 15
        echo "        </aside>
      </div>
    ";
        
        $__internal_34dfaa6c29584721bfdfaa6ec942fac8dc4707dc09e361ee1fb7a0d9d2db0373->leave($__internal_34dfaa6c29584721bfdfaa6ec942fac8dc4707dc09e361ee1fb7a0d9d2db0373_prof);

    }

    // line 11
    public function block_live_main($context, array $blocks = array())
    {
        $__internal_26fc9352ba96a6c114e61de74859661c4cf13dc947841adf639487f65922451c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26fc9352ba96a6c114e61de74859661c4cf13dc947841adf639487f65922451c->enter($__internal_26fc9352ba96a6c114e61de74859661c4cf13dc947841adf639487f65922451c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "live_main"));

        
        $__internal_26fc9352ba96a6c114e61de74859661c4cf13dc947841adf639487f65922451c->leave($__internal_26fc9352ba96a6c114e61de74859661c4cf13dc947841adf639487f65922451c_prof);

    }

    // line 14
    public function block_live_side($context, array $blocks = array())
    {
        $__internal_a23da5d64a2c286439d6cd3eb41d41c7e49c960906e568d63fed265954a4728f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a23da5d64a2c286439d6cd3eb41d41c7e49c960906e568d63fed265954a4728f->enter($__internal_a23da5d64a2c286439d6cd3eb41d41c7e49c960906e568d63fed265954a4728f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "live_side"));

        
        $__internal_a23da5d64a2c286439d6cd3eb41d41c7e49c960906e568d63fed265954a4728f->leave($__internal_a23da5d64a2c286439d6cd3eb41d41c7e49c960906e568d63fed265954a4728f_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LiveCourse:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 14,  111 => 11,  102 => 15,  100 => 14,  96 => 12,  94 => 11,  90 => 9,  84 => 8,  73 => 6,  65 => 18,  63 => 8,  60 => 7,  57 => 6,  51 => 5,  39 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle::layout.html.twig' %}

{% block title %}{{ parent() }}{% endblock %}

{% block full_content %}
  {% block top_content %}{% endblock %}
  <div id=\"content-container\" class=\"container\">  
    {% block content %}
      <div class=\"live-course-body row\">
        <div class=\"col-md-4\">
          {% block live_main %}{% endblock %}
        </div>
        <aside class=\"col-md-8\">
          {% block live_side %}{% endblock %}
        </aside>
      </div>
    {% endblock %}
  </div>
{% endblock %}";
    }
}

<?php

/* TopxiaWebBundle:EsBar:layout.html.twig */
class __TwigTemplate_2022540c213a01cecf32fce1236e617d9c63530e2190947477befc3e64a4839a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2644a6a2ee0c49e2dd9681539c13c6421b700f42d8c7e621947cc185c1fef5ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2644a6a2ee0c49e2dd9681539c13c6421b700f42d8c7e621947cc185c1fef5ee->enter($__internal_2644a6a2ee0c49e2dd9681539c13c6421b700f42d8c7e621947cc185c1fef5ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:layout.html.twig"));

        // line 1
        echo "<div class=\"bar-main-header\">
  <a href=\"javascript:;\" class=\"js-bar-shrink link-light\"><i class=\"es-icon es-icon-arrowforward\"></i></a>
  ";
        // line 3
        $this->displayBlock('esBarTitle', $context, $blocks);
        // line 6
        echo "</div>

<div class=\"bar-main-body\">
  ";
        // line 9
        $this->displayBlock('esBarBody', $context, $blocks);
        // line 12
        echo "</div>
";
        
        $__internal_2644a6a2ee0c49e2dd9681539c13c6421b700f42d8c7e621947cc185c1fef5ee->leave($__internal_2644a6a2ee0c49e2dd9681539c13c6421b700f42d8c7e621947cc185c1fef5ee_prof);

    }

    // line 3
    public function block_esBarTitle($context, array $blocks = array())
    {
        $__internal_e3d345d1c74c52d594c5d0efae809dde7968485f69ca193d2b78f2a878656765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d345d1c74c52d594c5d0efae809dde7968485f69ca193d2b78f2a878656765->enter($__internal_e3d345d1c74c52d594c5d0efae809dde7968485f69ca193d2b78f2a878656765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarTitle"));

        // line 4
        echo "
  ";
        
        $__internal_e3d345d1c74c52d594c5d0efae809dde7968485f69ca193d2b78f2a878656765->leave($__internal_e3d345d1c74c52d594c5d0efae809dde7968485f69ca193d2b78f2a878656765_prof);

    }

    // line 9
    public function block_esBarBody($context, array $blocks = array())
    {
        $__internal_48204a5bb85d218f9a61a22137ae6faf3e0835386d164579d5b045391b9a5c8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48204a5bb85d218f9a61a22137ae6faf3e0835386d164579d5b045391b9a5c8a->enter($__internal_48204a5bb85d218f9a61a22137ae6faf3e0835386d164579d5b045391b9a5c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarBody"));

        // line 10
        echo "
  ";
        
        $__internal_48204a5bb85d218f9a61a22137ae6faf3e0835386d164579d5b045391b9a5c8a->leave($__internal_48204a5bb85d218f9a61a22137ae6faf3e0835386d164579d5b045391b9a5c8a_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  65 => 10,  59 => 9,  51 => 4,  45 => 3,  37 => 12,  35 => 9,  30 => 6,  28 => 3,  24 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"bar-main-header\">
  <a href=\"javascript:;\" class=\"js-bar-shrink link-light\"><i class=\"es-icon es-icon-arrowforward\"></i></a>
  {% block esBarTitle %}

  {% endblock %}
</div>

<div class=\"bar-main-body\">
  {% block esBarBody %}

  {% endblock %}
</div>
";
    }
}

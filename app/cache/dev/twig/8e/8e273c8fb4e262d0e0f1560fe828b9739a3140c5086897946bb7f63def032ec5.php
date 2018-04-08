<?php

/* TopxiaWebBundle:EsBar:LeftList/my-learn-place.html.twig */
class __TwigTemplate_cea461522dd3ebba93b9663b8618d036a18a1000b10f0d11c7c5fdea0c133666 extends Twig_Template
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
        $__internal_80aa773eade2a70ba16c6a929111ffa226387db8bded05ddfecae19a14347be5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80aa773eade2a70ba16c6a929111ffa226387db8bded05ddfecae19a14347be5->enter($__internal_80aa773eade2a70ba16c6a929111ffa226387db8bded05ddfecae19a14347be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:LeftList/my-learn-place.html.twig"));

        // line 1
        echo "<li data-id=\"#bar-course-list\" data-placement=\"left\" data-toggle=\"tooltip\" title=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的课程/%name%", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo "\">
  <a data-url=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_course");
        echo "\" href=\"javascript:;\">
    <i class=\"es-icon es-icon-book\">
    </i>
  </a>
</li>";
        
        $__internal_80aa773eade2a70ba16c6a929111ffa226387db8bded05ddfecae19a14347be5->leave($__internal_80aa773eade2a70ba16c6a929111ffa226387db8bded05ddfecae19a14347be5_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:LeftList/my-learn-place.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<li data-id=\"#bar-course-list\" data-placement=\"left\" data-toggle=\"tooltip\" title=\"{{'我的课程/%name%'|trans({'%name%': setting('classroom.name')|default('班级'|trans)}) }}\">
  <a data-url=\"{{ path('esbar_my_course') }}\" href=\"javascript:;\">
    <i class=\"es-icon es-icon-book\">
    </i>
  </a>
</li>";
    }
}

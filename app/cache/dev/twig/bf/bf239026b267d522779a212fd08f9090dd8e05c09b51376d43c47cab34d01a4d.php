<?php

/* TopxiaWebBundle:Default:footer-link.html.twig */
class __TwigTemplate_c53a389885cae339fec2c7687b06c4ac2097e7ff65afb0e1fcb35833db75a5d7 extends Twig_Template
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
        $__internal_62177512e49e068301784aaa7de130fe182a5c931ee31ae01a6a7212ef8b3962 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_62177512e49e068301784aaa7de130fe182a5c931ee31ae01a6a7212ef8b3962->enter($__internal_62177512e49e068301784aaa7de130fe182a5c931ee31ae01a6a7212ef8b3962_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Default:footer-link.html.twig"));

        // line 1
        echo "<div class=\"es-footer-link\">
  <div class=\"container\">
    <div class=\"row\">
      ";
        // line 4
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\BlockExtension')->showBlock("jianmo:bottom_info");
        echo "
    </div>
  </div>
</div>";
        
        $__internal_62177512e49e068301784aaa7de130fe182a5c931ee31ae01a6a7212ef8b3962->leave($__internal_62177512e49e068301784aaa7de130fe182a5c931ee31ae01a6a7212ef8b3962_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:footer-link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"es-footer-link\">
  <div class=\"container\">
    <div class=\"row\">
      {{ block_show('jianmo:bottom_info') }}
    </div>
  </div>
</div>";
    }
}

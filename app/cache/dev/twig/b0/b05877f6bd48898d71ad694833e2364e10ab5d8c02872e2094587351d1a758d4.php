<?php

/* TopxiaWebBundle:Default:Mobile/footer-tool-bar.html.twig */
class __TwigTemplate_9850b4013fbc5a7ebe445ddd3f866086922af97153f911078d439c294a8d5285 extends Twig_Template
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
        $__internal_69b8e10ff9c05814e9d78010d0294609555c54400adc9cb69c249229fd84f51a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69b8e10ff9c05814e9d78010d0294609555c54400adc9cb69c249229fd84f51a->enter($__internal_69b8e10ff9c05814e9d78010d0294609555c54400adc9cb69c249229fd84f51a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Default:Mobile/footer-tool-bar.html.twig"));

        // line 1
        echo "<div class=\"footer-tool-bar\">
  <div class=\"";
        // line 2
        if (((isset($context["mobile_tool_bar"]) ? $context["mobile_tool_bar"] : $this->getContext($context, "mobile_tool_bar")) == "index")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\">
      <i class=\"es-icon es-icon-home1\"></i><br>
      首页
    </a>
  </div>
  <div class=\"";
        // line 8
        if (((isset($context["mobile_tool_bar"]) ? $context["mobile_tool_bar"] : $this->getContext($context, "mobile_tool_bar")) == "course")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 9
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_explore");
        echo "\">
      <i class=\"es-icon es-icon-newshot\"></i><br>
      课程
    </a>
  </div>
  <div class=\"";
        // line 14
        if (((isset($context["mobile_tool_bar"]) ? $context["mobile_tool_bar"] : $this->getContext($context, "mobile_tool_bar")) == "learning")) {
            echo "active";
        }
        echo "\">
    <a href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_courses_learning");
        echo "\">
      <i class=\"es-icon es-icon-write\"></i><br>
      学习
    </a>
  </div>
</div>";
        
        $__internal_69b8e10ff9c05814e9d78010d0294609555c54400adc9cb69c249229fd84f51a->leave($__internal_69b8e10ff9c05814e9d78010d0294609555c54400adc9cb69c249229fd84f51a_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:Mobile/footer-tool-bar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 15,  53 => 14,  45 => 9,  39 => 8,  31 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"footer-tool-bar\">
  <div class=\"{% if mobile_tool_bar == 'index' %}active{% endif %}\">
    <a href=\"{{ path('homepage') }}\">
      <i class=\"es-icon es-icon-home1\"></i><br>
      首页
    </a>
  </div>
  <div class=\"{% if mobile_tool_bar == 'course' %}active{% endif %}\">
    <a href=\"{{ path('course_explore') }}\">
      <i class=\"es-icon es-icon-newshot\"></i><br>
      课程
    </a>
  </div>
  <div class=\"{% if mobile_tool_bar == 'learning' %}active{% endif %}\">
    <a href=\"{{ path('my_courses_learning') }}\">
      <i class=\"es-icon es-icon-write\"></i><br>
      学习
    </a>
  </div>
</div>";
    }
}

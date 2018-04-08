<?php

/* TopxiaAdminBundle:Widget:tooltip-widget.html.twig */
class __TwigTemplate_bbcddc351854f070a615d4efcbd3ee3b4347ac740568c3a143d1f4af94a2a35d extends Twig_Template
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
        $__internal_9faa2ba3fc03e07db44243f4bbb804dc00c727ef259692e5c26a3f7ddcbc7b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9faa2ba3fc03e07db44243f4bbb804dc00c727ef259692e5c26a3f7ddcbc7b53->enter($__internal_9faa2ba3fc03e07db44243f4bbb804dc00c727ef259692e5c26a3f7ddcbc7b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Widget:tooltip-widget.html.twig"));

        // line 1
        echo "<div class=\"js-tooltip-twig-widget pull-right mll mts\">
  <span class=\"glyphicon ";
        // line 2
        echo twig_escape_filter($this->env, ((array_key_exists("icon", $context)) ? (_twig_default_filter((isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "glyphicon-question-sign")) : ("glyphicon-question-sign")), "html", null, true);
        echo " text-muted js-twig-widget-tips\" data-placement=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("placement", $context)) ? (_twig_default_filter((isset($context["placement"]) ? $context["placement"] : $this->getContext($context, "placement")), "bottom")) : ("bottom")), "html", null, true);
        echo "\" href=\"javascript:;\">
  </span>
  <div class=\"js-twig-widget-html\" style=\"display:none;\">
    ";
        // line 5
        echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
        echo "
  </div>
</div>

";
        // line 9
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("widget/tooltip-widget");
        
        $__internal_9faa2ba3fc03e07db44243f4bbb804dc00c727ef259692e5c26a3f7ddcbc7b53->leave($__internal_9faa2ba3fc03e07db44243f4bbb804dc00c727ef259692e5c26a3f7ddcbc7b53_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Widget:tooltip-widget.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"js-tooltip-twig-widget pull-right mll mts\">
  <span class=\"glyphicon {{ icon|default('glyphicon-question-sign') }} text-muted js-twig-widget-tips\" data-placement=\"{{ placement|default('bottom') }}\" href=\"javascript:;\">
  </span>
  <div class=\"js-twig-widget-html\" style=\"display:none;\">
    {{ content|raw }}
  </div>
</div>

{% do load_script('widget/tooltip-widget') %}";
    }
}

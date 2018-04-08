<?php

/* expression.twig */
class __TwigTemplate_660322932f834052153812d1be3789b7186c4afd04873d6bfd2ce04a300ceda7 extends Twig_Template
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
        $__internal_f551539a49ecab14e1087de67c1cf7718f0bddd3d4f1c9658ab563ed91c455f6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f551539a49ecab14e1087de67c1cf7718f0bddd3d4f1c9658ab563ed91c455f6->enter($__internal_f551539a49ecab14e1087de67c1cf7718f0bddd3d4f1c9658ab563ed91c455f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()) != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array())) && ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.enable_org", 0) == 1)), "html", null, true);
        
        $__internal_f551539a49ecab14e1087de67c1cf7718f0bddd3d4f1c9658ab563ed91c455f6->leave($__internal_f551539a49ecab14e1087de67c1cf7718f0bddd3d4f1c9658ab563ed91c455f6_prof);

    }

    public function getTemplateName()
    {
        return "expression.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSource()
    {
        return "{{ app.user.id != user.id and setting('magic.enable_org', 0) == 1 }}";
    }
}

<?php

/* expression.twig */
class __TwigTemplate_06314cb74c0e76fdee44653dee95e3dbcaaf10aad15f9b72dadbe38a01f74c5c extends Twig_Template
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
        $__internal_ca5e6ad0c647574c4151b1423bf9d5a76b12f9b7101575845e2da6b6a8e0518d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca5e6ad0c647574c4151b1423bf9d5a76b12f9b7101575845e2da6b6a8e0518d->enter($__internal_ca5e6ad0c647574c4151b1423bf9d5a76b12f9b7101575845e2da6b6a8e0518d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "expression.twig"));

        // line 1
        echo twig_escape_filter($this->env, ( !($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.thirdCopyright", false) == 1) &&  !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isWithoutNetwork()), "html", null, true);
        
        $__internal_ca5e6ad0c647574c4151b1423bf9d5a76b12f9b7101575845e2da6b6a8e0518d->leave($__internal_ca5e6ad0c647574c4151b1423bf9d5a76b12f9b7101575845e2da6b6a8e0518d_prof);

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
        return "{{not (setting('copyright.thirdCopyright', false) == 1) and not is_without_network()}}";
    }
}

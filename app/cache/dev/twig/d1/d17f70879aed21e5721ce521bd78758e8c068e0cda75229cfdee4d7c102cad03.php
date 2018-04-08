<?php

/* TopxiaWebBundle::bootstrap-modal-layout.html.twig */
class __TwigTemplate_18ee806b211738234ee82b647f5c845111efbf7bd45d5b4a0f55ee2301cabd43 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'footer' => array($this, 'block_footer'),
            'script' => array($this, 'block_script'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_747018787175c0d8744d38debdcd1bacb44ffd6183bd8d5cdc2fa5a1018e7324 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_747018787175c0d8744d38debdcd1bacb44ffd6183bd8d5cdc2fa5a1018e7324->enter($__internal_747018787175c0d8744d38debdcd1bacb44ffd6183bd8d5cdc2fa5a1018e7324_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle::bootstrap-modal-layout.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle::bootstrap-modal-layout.html.twig", 1);
        // line 2
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaWebBundle::bootstrap-modal-layout.html.twig", 2);
        // line 3
        echo "
<div class=\"modal-dialog ";
        // line 4
        if (((array_key_exists("modal_class", $context)) ? (_twig_default_filter((isset($context["modal_class"]) ? $context["modal_class"] : $this->getContext($context, "modal_class")), "")) : (""))) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["modal_class"]) ? $context["modal_class"] : $this->getContext($context, "modal_class")), "html", null, true);
        }
        echo "\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</h4>
    </div>
    <div class=\"modal-body\">";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        echo "</div>
    ";
        // line 11
        if ( !((array_key_exists("hide_footer", $context)) ? (_twig_default_filter((isset($context["hide_footer"]) ? $context["hide_footer"] : $this->getContext($context, "hide_footer")), false)) : (false))) {
            // line 12
            echo "      <div class=\"modal-footer\">";
            $this->displayBlock('footer', $context, $blocks);
            echo "</div>
    ";
        }
        // line 14
        echo "    ";
        $this->displayBlock('script', $context, $blocks);
        // line 15
        echo "  </div>
</div>
";
        
        $__internal_747018787175c0d8744d38debdcd1bacb44ffd6183bd8d5cdc2fa5a1018e7324->leave($__internal_747018787175c0d8744d38debdcd1bacb44ffd6183bd8d5cdc2fa5a1018e7324_prof);

    }

    // line 8
    public function block_title($context, array $blocks = array())
    {
        $__internal_d749acf8e1a96ce6a33f5509b804ffc2dad74920594bdce33af4b72aa881339e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d749acf8e1a96ce6a33f5509b804ffc2dad74920594bdce33af4b72aa881339e->enter($__internal_d749acf8e1a96ce6a33f5509b804ffc2dad74920594bdce33af4b72aa881339e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d749acf8e1a96ce6a33f5509b804ffc2dad74920594bdce33af4b72aa881339e->leave($__internal_d749acf8e1a96ce6a33f5509b804ffc2dad74920594bdce33af4b72aa881339e_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_55e1a5208d3b1b17bb92bf6a8d404b0c334d95b9fae94af93c8519d0daea3568 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55e1a5208d3b1b17bb92bf6a8d404b0c334d95b9fae94af93c8519d0daea3568->enter($__internal_55e1a5208d3b1b17bb92bf6a8d404b0c334d95b9fae94af93c8519d0daea3568_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_55e1a5208d3b1b17bb92bf6a8d404b0c334d95b9fae94af93c8519d0daea3568->leave($__internal_55e1a5208d3b1b17bb92bf6a8d404b0c334d95b9fae94af93c8519d0daea3568_prof);

    }

    // line 12
    public function block_footer($context, array $blocks = array())
    {
        $__internal_4db38f72829a2cb4f5b3eeb483d654ff16bf435099ac1d4ee4f30d65459b3662 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4db38f72829a2cb4f5b3eeb483d654ff16bf435099ac1d4ee4f30d65459b3662->enter($__internal_4db38f72829a2cb4f5b3eeb483d654ff16bf435099ac1d4ee4f30d65459b3662_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        
        $__internal_4db38f72829a2cb4f5b3eeb483d654ff16bf435099ac1d4ee4f30d65459b3662->leave($__internal_4db38f72829a2cb4f5b3eeb483d654ff16bf435099ac1d4ee4f30d65459b3662_prof);

    }

    // line 14
    public function block_script($context, array $blocks = array())
    {
        $__internal_6497f45485c12987252626197696baa34ddc8bb86fa1ddf67bca5b178a3ccd2d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6497f45485c12987252626197696baa34ddc8bb86fa1ddf67bca5b178a3ccd2d->enter($__internal_6497f45485c12987252626197696baa34ddc8bb86fa1ddf67bca5b178a3ccd2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "script"));

        
        $__internal_6497f45485c12987252626197696baa34ddc8bb86fa1ddf67bca5b178a3ccd2d->leave($__internal_6497f45485c12987252626197696baa34ddc8bb86fa1ddf67bca5b178a3ccd2d_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 14,  94 => 12,  83 => 10,  72 => 8,  63 => 15,  60 => 14,  54 => 12,  52 => 11,  48 => 10,  43 => 8,  33 => 4,  30 => 3,  28 => 2,  26 => 1,);
    }

    public function getSource()
    {
        return "{% import \"TopxiaWebBundle::macro.html.twig\" as web_macro %}
{% import \"TopxiaAdminBundle::macro.html.twig\" as admin_macro %}

<div class=\"modal-dialog {% if modal_class|default('') %} {{ modal_class }}{% endif %}\">
  <div class=\"modal-content\">
    <div class=\"modal-header\">
      <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
      <h4 class=\"modal-title\">{% block title %}{% endblock %}</h4>
    </div>
    <div class=\"modal-body\">{% block body %}{% endblock %}</div>
    {% if not hide_footer|default(false) %}
      <div class=\"modal-footer\">{% block footer %}{% endblock %}</div>
    {% endif %}
    {% block script %}{% endblock %}
  </div>
</div>
";
    }
}

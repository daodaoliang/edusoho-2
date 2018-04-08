<?php

/* TopxiaWebBundle:EsBar:ListContent/study-place.html.twig */
class __TwigTemplate_f4d6380db35752887bed078a0a76f6845a0150bef80ee769425f177e88829920 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:EsBar:layout.html.twig", "TopxiaWebBundle:EsBar:ListContent/study-place.html.twig", 1);
        $this->blocks = array(
            'esBarTitle' => array($this, 'block_esBarTitle'),
            'esBarBody' => array($this, 'block_esBarBody'),
            'myStudyPlace' => array($this, 'block_myStudyPlace'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:EsBar:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a0c4cbd8079e9e73679b0d18c1cf0faa6b45e973ead7a5beb6cba72730fd15c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0c4cbd8079e9e73679b0d18c1cf0faa6b45e973ead7a5beb6cba72730fd15c9->enter($__internal_a0c4cbd8079e9e73679b0d18c1cf0faa6b45e973ead7a5beb6cba72730fd15c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:EsBar:ListContent/study-place.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a0c4cbd8079e9e73679b0d18c1cf0faa6b45e973ead7a5beb6cba72730fd15c9->leave($__internal_a0c4cbd8079e9e73679b0d18c1cf0faa6b45e973ead7a5beb6cba72730fd15c9_prof);

    }

    // line 3
    public function block_esBarTitle($context, array $blocks = array())
    {
        $__internal_0369508b0695d14e36b889efdd70775ea9e6851c97362e97981d51165ce9783d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0369508b0695d14e36b889efdd70775ea9e6851c97362e97981d51165ce9783d->enter($__internal_0369508b0695d14e36b889efdd70775ea9e6851c97362e97981d51165ce9783d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarTitle"));

        // line 4
        echo "  ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("我的课程/%name%", array("%name%" => _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")))), "html", null, true);
        echo "
";
        
        $__internal_0369508b0695d14e36b889efdd70775ea9e6851c97362e97981d51165ce9783d->leave($__internal_0369508b0695d14e36b889efdd70775ea9e6851c97362e97981d51165ce9783d_prof);

    }

    // line 7
    public function block_esBarBody($context, array $blocks = array())
    {
        $__internal_4bd307647653834094ee82d094f1939b545463e57396750d80f3c0977ffd0f54 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4bd307647653834094ee82d094f1939b545463e57396750d80f3c0977ffd0f54->enter($__internal_4bd307647653834094ee82d094f1939b545463e57396750d80f3c0977ffd0f54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBarBody"));

        // line 8
        echo "  <div class=\"text-center\">
    <div class=\"btn-group btn-action\">
      <a href=\"javascript:;\" data-url=\"";
        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_course");
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter((isset($context["esBarMenu"]) ? $context["esBarMenu"] : $this->getContext($context, "esBarMenu")), "")) : ("")) != "classroom")) {
            echo "active";
        }
        echo "\"
         id=\"bar-course-btn\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程"), "html", null, true);
        echo "</a>
      <a href=\"javascript:;\" data-url=\"";
        // line 12
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esbar_my_classroom");
        echo "\" class=\"btn btn-primary ";
        if ((((array_key_exists("esBarMenu", $context)) ? (_twig_default_filter((isset($context["esBarMenu"]) ? $context["esBarMenu"] : $this->getContext($context, "esBarMenu")), "")) : ("")) == "classroom")) {
            echo "active";
        }
        echo "\"
         id=\"bar-classroom-btn\">";
        // line 13
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("classroom.name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("班级")), "html", null, true);
        echo "</a>
    </div>
  </div>

  <div id=\"bar-my-course\">
    ";
        // line 18
        $this->displayBlock('myStudyPlace', $context, $blocks);
        // line 20
        echo "  </div>
";
        
        $__internal_4bd307647653834094ee82d094f1939b545463e57396750d80f3c0977ffd0f54->leave($__internal_4bd307647653834094ee82d094f1939b545463e57396750d80f3c0977ffd0f54_prof);

    }

    // line 18
    public function block_myStudyPlace($context, array $blocks = array())
    {
        $__internal_74a18c4f7cb6f53af0d879e267679123e9ff05ace9e6b292d8ce87ce15b4a860 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74a18c4f7cb6f53af0d879e267679123e9ff05ace9e6b292d8ce87ce15b4a860->enter($__internal_74a18c4f7cb6f53af0d879e267679123e9ff05ace9e6b292d8ce87ce15b4a860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "myStudyPlace"));

        // line 19
        echo "    ";
        
        $__internal_74a18c4f7cb6f53af0d879e267679123e9ff05ace9e6b292d8ce87ce15b4a860->leave($__internal_74a18c4f7cb6f53af0d879e267679123e9ff05ace9e6b292d8ce87ce15b4a860_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:EsBar:ListContent/study-place.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  106 => 19,  100 => 18,  92 => 20,  90 => 18,  82 => 13,  74 => 12,  70 => 11,  62 => 10,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle:EsBar:layout.html.twig' %}

{% block esBarTitle %}
  {{'我的课程/%name%'|trans({'%name%': setting('classroom.name')|default('班级'|trans)}) }}
{% endblock %}

{% block esBarBody %}
  <div class=\"text-center\">
    <div class=\"btn-group btn-action\">
      <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_course') }}\" class=\"btn btn-primary {% if esBarMenu|default('') != 'classroom' %}active{% endif %}\"
         id=\"bar-course-btn\">{{'课程'|trans}}</a>
      <a href=\"javascript:;\" data-url=\"{{ path('esbar_my_classroom' ) }}\" class=\"btn btn-primary {% if esBarMenu|default('') == 'classroom' %}active{% endif %}\"
         id=\"bar-classroom-btn\">{{ setting('classroom.name')|default('班级'|trans) }}</a>
    </div>
  </div>

  <div id=\"bar-my-course\">
    {% block myStudyPlace%}
    {% endblock %}
  </div>
{% endblock %}";
    }
}

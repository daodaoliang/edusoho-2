<?php

/* TopxiaWebBundle:EsBar:LeftList/my-learn-place.html.twig */
class __TwigTemplate_6a923a6cb6840aa4595c3820d3d94819ef9d11bbdadcbbb3bc57ed349f4445e3 extends Twig_Template
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
        return array (  24 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}

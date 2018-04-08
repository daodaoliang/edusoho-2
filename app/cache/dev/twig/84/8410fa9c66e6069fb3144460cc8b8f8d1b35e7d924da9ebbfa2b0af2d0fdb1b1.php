<?php

/* TopxiaAdminBundle:OpenCourse:course-search-form.html.twig */
class __TwigTemplate_d066fcba219d0a28a1c2bdfb775cf7f2111d5fb9235882dd09a38a366d20fb8e extends Twig_Template
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
        $__internal_5bc966820390ce4b13c4e8c8d769664bc6a4cb1a2822ce7f5066178562478aad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5bc966820390ce4b13c4e8c8d769664bc6a4cb1a2822ce7f5066178562478aad->enter($__internal_5bc966820390ce4b13c4e8c8d769664bc6a4cb1a2822ce7f5066178562478aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:OpenCourse:course-search-form.html.twig"));

        // line 1
        echo "<form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"";
        echo twig_escape_filter($this->env, ((array_key_exists("actionUrl", $context)) ? (_twig_default_filter((isset($context["actionUrl"]) ? $context["actionUrl"] : $this->getContext($context, "actionUrl")), "")) : ("")), "html", null, true);
        echo "\" method=\"get\" novalidate>
  <div class=\"form-group\">
    <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
      ";
        // line 4
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getCategoryChoices("course"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "categoryId"), "method"), "课程分类");
        echo "
    </select>
  </div>
  ";
        // line 7
        if (((array_key_exists("showStatusSelect", $context)) ? (_twig_default_filter((isset($context["showStatusSelect"]) ? $context["showStatusSelect"] : $this->getContext($context, "showStatusSelect")), null)) : (null))) {
            // line 8
            echo "    <div class=\"form-group\">
      <select class=\"form-control\" name=\"status\">
        ";
            // line 10
            echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("courseStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "status"), "method"), "课程状态");
            echo "
      </select>
    </div>
  ";
        }
        // line 14
        echo "  <div class=\"form-group\">
    <input class=\"form-control\" type=\"text\" placeholder=\"标题\" name=\"title\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "title"), "method"), "html", null, true);
        echo "\">
  </div>
  <div class=\"form-group\">
    <input class=\"form-control\" type=\"text\" placeholder=\"创建者\" name=\"creator\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "creator"), "method"), "html", null, true);
        echo "\">
  </div>
  <button class=\"btn btn-primary\">搜索</button>

  ";
        // line 22
        $this->loadTemplate("TopxiaAdminBundle:Widget:tooltip-widget.html.twig", "TopxiaAdminBundle:OpenCourse:course-search-form.html.twig", 22)->display(array_merge($context, array("icon" => "glyphicon-question-sign", "content" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("公开课说明Tooltip"), "placement" => "left")));
        // line 23
        echo "</form>";
        
        $__internal_5bc966820390ce4b13c4e8c8d769664bc6a4cb1a2822ce7f5066178562478aad->leave($__internal_5bc966820390ce4b13c4e8c8d769664bc6a4cb1a2822ce7f5066178562478aad_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:OpenCourse:course-search-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 23,  64 => 22,  57 => 18,  51 => 15,  48 => 14,  41 => 10,  37 => 8,  35 => 7,  29 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<form id=\"message-search-form\" class=\"form-inline well well-sm\" action=\"{{ actionUrl|default('')}}\" method=\"get\" novalidate>
  <div class=\"form-group\">
    <select style=\"max-width:150px;\" class=\"form-control\" name=\"categoryId\">
      {{ select_options(category_choices('course'), app.request.query.get('categoryId'), '课程分类') }}
    </select>
  </div>
  {% if showStatusSelect|default(null) %}
    <div class=\"form-group\">
      <select class=\"form-control\" name=\"status\">
        {{ select_options(dict('courseStatus'), app.request.query.get('status'), '课程状态') }}
      </select>
    </div>
  {% endif %}
  <div class=\"form-group\">
    <input class=\"form-control\" type=\"text\" placeholder=\"标题\" name=\"title\" value=\"{{ app.request.get('title') }}\">
  </div>
  <div class=\"form-group\">
    <input class=\"form-control\" type=\"text\" placeholder=\"创建者\" name=\"creator\" value=\"{{ app.request.get('creator') }}\">
  </div>
  <button class=\"btn btn-primary\">搜索</button>

  {% include 'TopxiaAdminBundle:Widget:tooltip-widget.html.twig' with { icon: 'glyphicon-question-sign', content: '公开课说明Tooltip'|trans|raw, placement: 'left'} %}
</form>";
    }
}

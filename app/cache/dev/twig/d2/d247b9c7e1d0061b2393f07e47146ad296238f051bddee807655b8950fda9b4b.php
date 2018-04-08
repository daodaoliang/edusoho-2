<?php

/* TopxiaWebBundle:CourseStudentManage:import.html.twig */
class __TwigTemplate_bb93f1765b78f158dd7defebd25b965a42c6e9d5873f55957c5037489f0a65a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("TopxiaWebBundle:Importer:importer-layout.html.twig", "TopxiaWebBundle:CourseStudentManage:import.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'form_data' => array($this, 'block_form_data'),
            'load_import_js' => array($this, 'block_load_import_js'),
            'stylesheet' => array($this, 'block_stylesheet'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:Importer:importer-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89046637188b1d9e49af5ff0f3fc04700561666811f3cc0eec795fe88b1b4778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89046637188b1d9e49af5ff0f3fc04700561666811f3cc0eec795fe88b1b4778->enter($__internal_89046637188b1d9e49af5ff0f3fc04700561666811f3cc0eec795fe88b1b4778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:CourseStudentManage:import.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89046637188b1d9e49af5ff0f3fc04700561666811f3cc0eec795fe88b1b4778->leave($__internal_89046637188b1d9e49af5ff0f3fc04700561666811f3cc0eec795fe88b1b4778_prof);

    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        $__internal_74f8037b0fa8ac529a8f2549060644fc8faf44a509e2f2cffea9eb162cb344e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74f8037b0fa8ac529a8f2549060644fc8faf44a509e2f2cffea9eb162cb344e2->enter($__internal_74f8037b0fa8ac529a8f2549060644fc8faf44a509e2f2cffea9eb162cb344e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "批量添加学员";
        
        $__internal_74f8037b0fa8ac529a8f2549060644fc8faf44a509e2f2cffea9eb162cb344e2->leave($__internal_74f8037b0fa8ac529a8f2549060644fc8faf44a509e2f2cffea9eb162cb344e2_prof);

    }

    // line 6
    public function block_form_data($context, array $blocks = array())
    {
        $__internal_2dd4e219173e9b245fe8ff9edab28f278d7e8e67da31938b378792813d2998b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2dd4e219173e9b245fe8ff9edab28f278d7e8e67da31938b378792813d2998b4->enter($__internal_2dd4e219173e9b245fe8ff9edab28f278d7e8e67da31938b378792813d2998b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_data"));

        // line 7
        echo "  <div class=\"form-group\" id=\"teachers-form-group\">
    <label class=\"col-md-3 col-md-offset-1\">
      ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("选择要导入的文件"), "html", null, true);
        echo "
    </label>
    <div class=\"col-md-8 controls\">
      <div class=\"uploader blue\">
        <input type=\"text\" class=\"filename\" readonly=\"readonly\"/>
        <input type=\"button\" name=\"excel\" class=\" button\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("浏览"), "html", null, true);
        echo "...\"/>
        <input type=\"file\" size=\"30\" name=\"excel\"/>
      </div>
      &nbsp;&nbsp;<a
          href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaweb/example/coursemember_import_example.xls"), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("点击下载示例说明文件"), "html", null, true);
        echo "</a>
      <br>
      ";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支持从Excel文件导入"), "html", null, true);
        echo "
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 col-md-offset-1\">
      <label for=\"buy-price\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买价格"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-4 controls\">
      <div class=\"input-group\">
        <input type=\"text\" id=\"buy-price\" name=\"price\" value=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()), "html", null, true);
        echo "\" class=\"form-control\">
        <div class=\"input-group-addon\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元"), "html", null, true);
        echo "</div>
      </div>
      <div class=\"help-block\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("本课程的价格为"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "price", array()), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元"), "html", null, true);
        echo "</div>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 col-md-offset-1\">
      <label for=\"student-remark\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("备注"), "html", null, true);
        echo "</label>
    </div>
    <div class=\"col-md-4 controls\">
      <input type=\"text\" id=\"student-remark\" name=\"remark\" class=\"form-control\">
      <div class=\"help-block\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("选填"), "html", null, true);
        echo "</div>
    </div>
  </div>

  <input type=\"hidden\" name=\"courseId\" value=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "html", null, true);
        echo "\">
";
        
        $__internal_2dd4e219173e9b245fe8ff9edab28f278d7e8e67da31938b378792813d2998b4->leave($__internal_2dd4e219173e9b245fe8ff9edab28f278d7e8e67da31938b378792813d2998b4_prof);

    }

    // line 50
    public function block_load_import_js($context, array $blocks = array())
    {
        $__internal_8f0039380ac4076098aaae9e5e4c3082350aa99b4869f66183dfdd9a048ead34 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8f0039380ac4076098aaae9e5e4c3082350aa99b4869f66183dfdd9a048ead34->enter($__internal_8f0039380ac4076098aaae9e5e4c3082350aa99b4869f66183dfdd9a048ead34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "load_import_js"));

        // line 51
        echo "  app.load('topxiawebbundle/controller/course-manage/student-import');
";
        
        $__internal_8f0039380ac4076098aaae9e5e4c3082350aa99b4869f66183dfdd9a048ead34->leave($__internal_8f0039380ac4076098aaae9e5e4c3082350aa99b4869f66183dfdd9a048ead34_prof);

    }

    // line 54
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_4fb95f2940305896e03d90a0bf30a1120ef9dbf716592a2a711b97042858cf05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fb95f2940305896e03d90a0bf30a1120ef9dbf716592a2a711b97042858cf05->enter($__internal_4fb95f2940305896e03d90a0bf30a1120ef9dbf716592a2a711b97042858cf05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 55
        echo "<style>
  .page-header {
    padding-bottom: 12px;
    margin: 0 0 20px 0;
    padding: 0;
    border-bottom-width: 2px;
  }
  .uploader {
    position: relative;
    display: inline-block;
    overflow: hidden;
    cursor: default;
    padding: 0px;
    margin: 0px 0px;
    -moz-box-shadow: 0px 0px 5px #ddd;
    -webkit-box-shadow: 0px 0px 5px #ddd;
    box-shadow: 0px 0px 5px #ddd;

    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
  }

  .filename {
    float: left;
    display: inline-block;
    outline: 0 none;
    height: 32px;
    width: 180px;
    margin: 0;
    padding: 8px 10px;
    overflow: hidden;
    cursor: default;
    border: 1px solid;
    border-right: 0;
    font: 9pt/100% Arial, Helvetica, sans-serif;
    color: #777;
    text-shadow: 1px 1px 0px #fff;
    text-overflow: ellipsis;
    white-space: nowrap;

    -moz-border-radius: 5px 0px 0px 5px;
    -webkit-border-radius: 5px 0px 0px 5px;
    border-radius: 5px 0px 0px 5px;

    background: #f5f5f5;
    background: -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fafafa), color-stop(100%, #f5f5f5));
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fafafa', endColorstr='#f5f5f5', GradientType=0);
    border-color: #ccc;

    -moz-box-shadow: 0px 0px 1px #fff inset;
    -webkit-box-shadow: 0px 0px 1px #fff inset;
    box-shadow: 0px 0px 1px #fff inset;

    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }

  .button {
    float: left;
    height: 32px;
    display: inline-block;
    outline: 0 none;
    padding: 8px 12px;
    margin: 0;
    cursor: pointer;
    border: 1px solid;
    font: bold 9pt/100% Arial, Helvetica, sans-serif;

    -moz-border-radius: 0px 5px 5px 0px;
    -webkit-border-radius: 0px 5px 5px 0px;
    border-radius: 0px 5px 5px 0px;

    -moz-box-shadow: 0px 0px 1px #fff inset;
    -webkit-box-shadow: 0px 0px 1px #fff inset;
    box-shadow: 0px 0px 1px #fff inset;
  }

  .uploader input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    border: 0;
    padding: 0;
    margin: 0;
    height: 30px;
    cursor: pointer;
    filter: alpha(opacity=0);
    -moz-opacity: 0;
    -khtml-opacity: 0;
    opacity: 0;
  }

  input[type=button]::-moz-focus-inner {
    padding: 0;
    border: 0 none;
    -moz-box-sizing: content-box;
  }

  input[type=button]::-webkit-focus-inner {
    padding: 0;
    border: 0 none;
    -webkit-box-sizing: content-box;
  }

  input[type=text]::-moz-focus-inner {
    padding: 0;
    border: 0 none;
    -moz-box-sizing: content-box;
  }

  input[type=text]::-webkit-focus-inner {
    padding: 0;
    border: 0 none;
    -webkit-box-sizing: content-box;
  }

  .blue .button {
    color: #fff;
    text-shadow: 1px 1px 0px #09365f;
    background: #064884;
    background: -moz-linear-gradient(top, #3b75b4 0%, #064884 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #3b75b4), color-stop(100%, #064884));
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3b75b4', endColorstr='#064884', GradientType=0);
    border-color: #09365f;
  }

  .blue:hover .button {
    background: #3b75b4;
    background: -moz-linear-gradient(top, #064884 0%, #3b75b4 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #064884), color-stop(100%, #3b75b4));
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#064884', endColorstr='#3b75b4', GradientType=0);
  }
  </style>
";
        
        $__internal_4fb95f2940305896e03d90a0bf30a1120ef9dbf716592a2a711b97042858cf05->leave($__internal_4fb95f2940305896e03d90a0bf30a1120ef9dbf716592a2a711b97042858cf05_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseStudentManage:import.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  160 => 55,  154 => 54,  146 => 51,  140 => 50,  131 => 47,  124 => 43,  117 => 39,  106 => 33,  101 => 31,  97 => 30,  90 => 26,  81 => 20,  74 => 18,  67 => 14,  59 => 9,  55 => 7,  49 => 6,  37 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "
{% extends 'TopxiaWebBundle:Importer:importer-layout.html.twig' %}

{% block title %}批量添加学员{% endblock %}

{% block form_data %}
  <div class=\"form-group\" id=\"teachers-form-group\">
    <label class=\"col-md-3 col-md-offset-1\">
      {{ '选择要导入的文件'|trans }}
    </label>
    <div class=\"col-md-8 controls\">
      <div class=\"uploader blue\">
        <input type=\"text\" class=\"filename\" readonly=\"readonly\"/>
        <input type=\"button\" name=\"excel\" class=\" button\" value=\"{{ '浏览'|trans }}...\"/>
        <input type=\"file\" size=\"30\" name=\"excel\"/>
      </div>
      &nbsp;&nbsp;<a
          href=\"{{ asset('bundles/topxiaweb/example/coursemember_import_example.xls') }}\">{{ '点击下载示例说明文件'|trans }}</a>
      <br>
      {{ '支持从Excel文件导入'|trans }}
    </div>
  </div>

  <div class=\"form-group\">
    <div class=\"col-md-3 col-md-offset-1\">
      <label for=\"buy-price\">{{'购买价格'|trans}}</label>
    </div>
    <div class=\"col-md-4 controls\">
      <div class=\"input-group\">
        <input type=\"text\" id=\"buy-price\" name=\"price\" value=\"{{ course.price }}\" class=\"form-control\">
        <div class=\"input-group-addon\">{{'元'|trans}}</div>
      </div>
      <div class=\"help-block\">{{'本课程的价格为'|trans}}{{course.price}}{{'元'|trans}}</div>
    </div>
  </div>

  <div class=\"row form-group\">
    <div class=\"col-md-3 col-md-offset-1\">
      <label for=\"student-remark\">{{'备注'|trans}}</label>
    </div>
    <div class=\"col-md-4 controls\">
      <input type=\"text\" id=\"student-remark\" name=\"remark\" class=\"form-control\">
      <div class=\"help-block\">{{'选填'|trans}}</div>
    </div>
  </div>

  <input type=\"hidden\" name=\"courseId\" value=\"{{ course.id }}\">
{% endblock %}

{% block load_import_js %}
  app.load('topxiawebbundle/controller/course-manage/student-import');
{% endblock %}

{% block stylesheet %}
<style>
  .page-header {
    padding-bottom: 12px;
    margin: 0 0 20px 0;
    padding: 0;
    border-bottom-width: 2px;
  }
  .uploader {
    position: relative;
    display: inline-block;
    overflow: hidden;
    cursor: default;
    padding: 0px;
    margin: 0px 0px;
    -moz-box-shadow: 0px 0px 5px #ddd;
    -webkit-box-shadow: 0px 0px 5px #ddd;
    box-shadow: 0px 0px 5px #ddd;

    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
  }

  .filename {
    float: left;
    display: inline-block;
    outline: 0 none;
    height: 32px;
    width: 180px;
    margin: 0;
    padding: 8px 10px;
    overflow: hidden;
    cursor: default;
    border: 1px solid;
    border-right: 0;
    font: 9pt/100% Arial, Helvetica, sans-serif;
    color: #777;
    text-shadow: 1px 1px 0px #fff;
    text-overflow: ellipsis;
    white-space: nowrap;

    -moz-border-radius: 5px 0px 0px 5px;
    -webkit-border-radius: 5px 0px 0px 5px;
    border-radius: 5px 0px 0px 5px;

    background: #f5f5f5;
    background: -moz-linear-gradient(top, #fafafa 0%, #eee 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #fafafa), color-stop(100%, #f5f5f5));
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#fafafa', endColorstr='#f5f5f5', GradientType=0);
    border-color: #ccc;

    -moz-box-shadow: 0px 0px 1px #fff inset;
    -webkit-box-shadow: 0px 0px 1px #fff inset;
    box-shadow: 0px 0px 1px #fff inset;

    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }

  .button {
    float: left;
    height: 32px;
    display: inline-block;
    outline: 0 none;
    padding: 8px 12px;
    margin: 0;
    cursor: pointer;
    border: 1px solid;
    font: bold 9pt/100% Arial, Helvetica, sans-serif;

    -moz-border-radius: 0px 5px 5px 0px;
    -webkit-border-radius: 0px 5px 5px 0px;
    border-radius: 0px 5px 5px 0px;

    -moz-box-shadow: 0px 0px 1px #fff inset;
    -webkit-box-shadow: 0px 0px 1px #fff inset;
    box-shadow: 0px 0px 1px #fff inset;
  }

  .uploader input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    border: 0;
    padding: 0;
    margin: 0;
    height: 30px;
    cursor: pointer;
    filter: alpha(opacity=0);
    -moz-opacity: 0;
    -khtml-opacity: 0;
    opacity: 0;
  }

  input[type=button]::-moz-focus-inner {
    padding: 0;
    border: 0 none;
    -moz-box-sizing: content-box;
  }

  input[type=button]::-webkit-focus-inner {
    padding: 0;
    border: 0 none;
    -webkit-box-sizing: content-box;
  }

  input[type=text]::-moz-focus-inner {
    padding: 0;
    border: 0 none;
    -moz-box-sizing: content-box;
  }

  input[type=text]::-webkit-focus-inner {
    padding: 0;
    border: 0 none;
    -webkit-box-sizing: content-box;
  }

  .blue .button {
    color: #fff;
    text-shadow: 1px 1px 0px #09365f;
    background: #064884;
    background: -moz-linear-gradient(top, #3b75b4 0%, #064884 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #3b75b4), color-stop(100%, #064884));
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#3b75b4', endColorstr='#064884', GradientType=0);
    border-color: #09365f;
  }

  .blue:hover .button {
    background: #3b75b4;
    background: -moz-linear-gradient(top, #064884 0%, #3b75b4 100%);
    background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #064884), color-stop(100%, #3b75b4));
    filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#064884', endColorstr='#3b75b4', GradientType=0);
  }
  </style>
{% endblock %}


";
    }
}

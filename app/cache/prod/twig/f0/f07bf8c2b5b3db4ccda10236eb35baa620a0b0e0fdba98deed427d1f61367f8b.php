<?php

/* TopxiaWebBundle:CourseStudentManage:import.html.twig */
class __TwigTemplate_a1283bb33a19dd6b24c5ab63024f4be314274c7fe39ed25a14d54d5849b0edc3 extends Twig_Template
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
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "批量添加学员111";
    }

    // line 6
    public function block_form_data($context, array $blocks = array())
    {
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
        echo "\" class=\"form-control\">
        <div class=\"input-group-addon\">";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元"), "html", null, true);
        echo "</div>
      </div>
      <div class=\"help-block\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("本课程的价格为"), "html", null, true);
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "price", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "html", null, true);
        echo "\">
";
    }

    // line 50
    public function block_load_import_js($context, array $blocks = array())
    {
        // line 51
        echo "  app.load('topxiawebbundle/controller/course-manage/student-import');
";
    }

    // line 54
    public function block_stylesheet($context, array $blocks = array())
    {
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
        return array (  133 => 55,  130 => 54,  125 => 51,  122 => 50,  116 => 47,  109 => 43,  102 => 39,  91 => 33,  86 => 31,  82 => 30,  75 => 26,  66 => 20,  59 => 18,  52 => 14,  44 => 9,  40 => 7,  37 => 6,  31 => 4,  11 => 2,);
    }

    public function getSource()
    {
        return "";
    }
}
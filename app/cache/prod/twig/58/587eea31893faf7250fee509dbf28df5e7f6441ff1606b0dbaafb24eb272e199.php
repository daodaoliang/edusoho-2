<?php

/* TopxiaWebBundle:Importer:importer-layout.html.twig */
class __TwigTemplate_b1faafbeba039ba3c454b2cc7c9a9689121692ca0a9a9e66572e50f56f1e9bd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::bootstrap-modal-layout.html.twig", "TopxiaWebBundle:Importer:importer-layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'form_data' => array($this, 'block_form_data'),
            'stylesheet' => array($this, 'block_stylesheet'),
            'load_import_js' => array($this, 'block_load_import_js'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::bootstrap-modal-layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "批量添加新用户";
    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        // line 8
        echo "  <div id=\"importer-app\"
       data-type=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["importerType"]) ? $context["importerType"] : null), "html", null, true);
        echo "\"
       data-check-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("importer_check", array("type" => (isset($context["importerType"]) ? $context["importerType"] : null))), "html", null, true);
        echo "\"
       data-import-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("importer_import", array("type" => (isset($context["importerType"]) ? $context["importerType"] : null))), "html", null, true);
        echo "\"
  >

  </div>

  <script type=\"text/template\" id=\"importer-template\">
    <div class=\"alert js-importer-message hidden\">
    </div>

    <div class=\"page-header clearfix\">
      <h1 class=\"pull-left\">步骤1(注意只能导入已存在于系统中的用户，不存在的用户将会被自动忽略)</h1>
    </div>

    <div class=\"row\">
      <form method=\"post\" id=\"importer-form\" enctype=\"multipart/form-data\" class=\"form-horizontal\">
        ";
        // line 26
        $this->displayBlock('form_data', $context, $blocks);
        // line 29
        echo "        <div class=\"form-group\">
          <div class=\"col-md-3 col-md-offset-1\"></div>
          <div class=\"col-md-8 controls\">
            <button type=\"submit\" class=\"btn btn-primary\" id=\"start-import-btn\">开始校验数据</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">

      </form>
    </div>
  </script>
  ";
        // line 41
        $this->displayBlock('stylesheet', $context, $blocks);
        // line 44
        echo "  <script type=\"text/javascript\">
    seajs.use('topxiawebbundle/controller/importer/importer', function(module) {
      if (\$.isFunction(module.run)) {
        module.run();
        ";
        // line 48
        $this->displayBlock('load_import_js', $context, $blocks);
        // line 50
        echo "      }
    });

  </script>
";
    }

    // line 26
    public function block_form_data($context, array $blocks = array())
    {
        // line 27
        echo "
        ";
    }

    // line 41
    public function block_stylesheet($context, array $blocks = array())
    {
        // line 42
        echo "
  ";
    }

    // line 48
    public function block_load_import_js($context, array $blocks = array())
    {
        // line 49
        echo "        ";
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Importer:importer-layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 49,  126 => 48,  121 => 42,  118 => 41,  113 => 27,  110 => 26,  102 => 50,  100 => 48,  94 => 44,  92 => 41,  84 => 36,  75 => 29,  73 => 26,  55 => 11,  51 => 10,  47 => 9,  44 => 8,  41 => 7,  35 => 5,  31 => 1,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}

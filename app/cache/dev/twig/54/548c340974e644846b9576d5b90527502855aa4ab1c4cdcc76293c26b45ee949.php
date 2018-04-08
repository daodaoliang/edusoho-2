<?php

/* TopxiaWebBundle:Importer:importer-layout.html.twig */
class __TwigTemplate_f55b1215d1eeb4c1d6dbddb031a5f82e222d7b081831bb0f8d6992325b2d3f32 extends Twig_Template
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
        $__internal_d868a47303346ad21feaafd44b985154c61b677c61cf5ff020de3c25a26a37e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d868a47303346ad21feaafd44b985154c61b677c61cf5ff020de3c25a26a37e3->enter($__internal_d868a47303346ad21feaafd44b985154c61b677c61cf5ff020de3c25a26a37e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Importer:importer-layout.html.twig"));

        // line 3
        $context["modal_class"] = "modal-lg";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d868a47303346ad21feaafd44b985154c61b677c61cf5ff020de3c25a26a37e3->leave($__internal_d868a47303346ad21feaafd44b985154c61b677c61cf5ff020de3c25a26a37e3_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_c145de646b84818591a3e9446af99aac68f9babf8cc55754edff6c8eca93110f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c145de646b84818591a3e9446af99aac68f9babf8cc55754edff6c8eca93110f->enter($__internal_c145de646b84818591a3e9446af99aac68f9babf8cc55754edff6c8eca93110f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "批量添加新用户";
        
        $__internal_c145de646b84818591a3e9446af99aac68f9babf8cc55754edff6c8eca93110f->leave($__internal_c145de646b84818591a3e9446af99aac68f9babf8cc55754edff6c8eca93110f_prof);

    }

    // line 7
    public function block_body($context, array $blocks = array())
    {
        $__internal_90274f28642a9cff51318f0d4ff062f8119e2a8b916e28d779d8a6786a468cd0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90274f28642a9cff51318f0d4ff062f8119e2a8b916e28d779d8a6786a468cd0->enter($__internal_90274f28642a9cff51318f0d4ff062f8119e2a8b916e28d779d8a6786a468cd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 8
        echo "  <div id=\"importer-app\"
       data-type=\"";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["importerType"]) ? $context["importerType"] : $this->getContext($context, "importerType")), "html", null, true);
        echo "\"
       data-check-url=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("importer_check", array("type" => (isset($context["importerType"]) ? $context["importerType"] : $this->getContext($context, "importerType")))), "html", null, true);
        echo "\"
       data-import-url=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("importer_import", array("type" => (isset($context["importerType"]) ? $context["importerType"] : $this->getContext($context, "importerType")))), "html", null, true);
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
            <button type=\"submit\" class=\"btn btn-primary\" id=\"start-import-btn\">开始校验数据666</button>
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
        
        $__internal_90274f28642a9cff51318f0d4ff062f8119e2a8b916e28d779d8a6786a468cd0->leave($__internal_90274f28642a9cff51318f0d4ff062f8119e2a8b916e28d779d8a6786a468cd0_prof);

    }

    // line 26
    public function block_form_data($context, array $blocks = array())
    {
        $__internal_54b5981b1a9a02c0a5aad2db04b762482fac7164fc0c94a0b162ba7456b87599 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_54b5981b1a9a02c0a5aad2db04b762482fac7164fc0c94a0b162ba7456b87599->enter($__internal_54b5981b1a9a02c0a5aad2db04b762482fac7164fc0c94a0b162ba7456b87599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_data"));

        // line 27
        echo "
        ";
        
        $__internal_54b5981b1a9a02c0a5aad2db04b762482fac7164fc0c94a0b162ba7456b87599->leave($__internal_54b5981b1a9a02c0a5aad2db04b762482fac7164fc0c94a0b162ba7456b87599_prof);

    }

    // line 41
    public function block_stylesheet($context, array $blocks = array())
    {
        $__internal_d25b24f49e86cb61013b00bd99261045450891daa3e91462dcf578e3ed602aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d25b24f49e86cb61013b00bd99261045450891daa3e91462dcf578e3ed602aa6->enter($__internal_d25b24f49e86cb61013b00bd99261045450891daa3e91462dcf578e3ed602aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheet"));

        // line 42
        echo "
  ";
        
        $__internal_d25b24f49e86cb61013b00bd99261045450891daa3e91462dcf578e3ed602aa6->leave($__internal_d25b24f49e86cb61013b00bd99261045450891daa3e91462dcf578e3ed602aa6_prof);

    }

    // line 48
    public function block_load_import_js($context, array $blocks = array())
    {
        $__internal_7f51c9429a6fa880561c4a0c49ffe8b31e2d858a2a608e1f4d0666d8de38555f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7f51c9429a6fa880561c4a0c49ffe8b31e2d858a2a608e1f4d0666d8de38555f->enter($__internal_7f51c9429a6fa880561c4a0c49ffe8b31e2d858a2a608e1f4d0666d8de38555f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "load_import_js"));

        // line 49
        echo "        ";
        
        $__internal_7f51c9429a6fa880561c4a0c49ffe8b31e2d858a2a608e1f4d0666d8de38555f->leave($__internal_7f51c9429a6fa880561c4a0c49ffe8b31e2d858a2a608e1f4d0666d8de38555f_prof);

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
        return array (  162 => 49,  156 => 48,  148 => 42,  142 => 41,  134 => 27,  128 => 26,  117 => 50,  115 => 48,  109 => 44,  107 => 41,  99 => 36,  90 => 29,  88 => 26,  70 => 11,  66 => 10,  62 => 9,  59 => 8,  53 => 7,  41 => 5,  34 => 1,  32 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"TopxiaWebBundle::bootstrap-modal-layout.html.twig\" %}

{% set modal_class = 'modal-lg' %}

{% block title %}批量添加新用户{% endblock %}

{% block body %}
  <div id=\"importer-app\"
       data-type=\"{{ importerType }}\"
       data-check-url=\"{{ path('importer_check', {type: importerType}) }}\"
       data-import-url=\"{{ path('importer_import', {type: importerType}) }}\"
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
        {% block form_data %}

        {% endblock %}
        <div class=\"form-group\">
          <div class=\"col-md-3 col-md-offset-1\"></div>
          <div class=\"col-md-8 controls\">
            <button type=\"submit\" class=\"btn btn-primary\" id=\"start-import-btn\">开始校验数据666</button>
          </div>
        </div>

        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">

      </form>
    </div>
  </script>
  {% block stylesheet %}

  {% endblock %}
  <script type=\"text/javascript\">
    seajs.use('topxiawebbundle/controller/importer/importer', function(module) {
      if (\$.isFunction(module.run)) {
        module.run();
        {% block load_import_js %}
        {% endblock %}
      }
    });

  </script>
{% endblock %}";
    }
}

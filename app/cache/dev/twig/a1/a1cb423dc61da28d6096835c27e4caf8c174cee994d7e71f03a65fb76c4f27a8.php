<?php

/* TopxiaAdminBundle:Order:manage.html.twig */
class __TwigTemplate_7c0f61207b4f53b701354308f695fcaa2e3a6ba31dbdb3598dcb9b22921a53d5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Order:manage.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c1f792afd63e672547a7717b4abb84e1e8fa440d0e17da7d8a02cee5133183ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c1f792afd63e672547a7717b4abb84e1e8fa440d0e17da7d8a02cee5133183ff->enter($__internal_c1f792afd63e672547a7717b4abb84e1e8fa440d0e17da7d8a02cee5133183ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Order:manage.html.twig"));

        // line 7
        $context["menu"] = (("admin_" . (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType"))) . "_order");
        // line 9
        $context["script_controller"] = "manage/list";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c1f792afd63e672547a7717b4abb84e1e8fa440d0e17da7d8a02cee5133183ff->leave($__internal_c1f792afd63e672547a7717b4abb84e1e8fa440d0e17da7d8a02cee5133183ff_prof);

    }

    // line 11
    public function block_main($context, array $blocks = array())
    {
        $__internal_9a36f13bc3162144644b2fdfa85252bfd6df1f246b88fb181624e69945518134 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a36f13bc3162144644b2fdfa85252bfd6df1f246b88fb181624e69945518134->enter($__internal_9a36f13bc3162144644b2fdfa85252bfd6df1f246b88fb181624e69945518134_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 12
        echo "
  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"mbm\">
    <div class=\"form-group\">
      <label class=\"ptm\" >";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建时间:"), "html", null, true);
        echo "</label>
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "startDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("起始时间"), "html", null, true);
        echo "\">
        -
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "endDateTime"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("结束时间"), "html", null, true);
        echo "\">
    </div>
    </div>
    <div class=\"mbm\">
    <div class=\"form-group\">
      <label class=\"ptm\" >";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("筛选条件:"), "html", null, true);
        echo "</label>
        <select class=\"form-control\" name=\"status\">
          ";
        // line 26
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("orderStatus"), $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "status"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单状态"));
        echo "
        </select>
  
      <select class=\"form-control\" name=\"payment\">
        ";
        // line 30
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("payment"), $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "payment"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支付方式"));
        echo "
      </select>
    </div> 
    <div class=\"form-group\" style=\"display:none;\">
      <input class=\"form-control\" type=\"text\" name=\"paidTimeRange\", placeholder=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("付款时间段"), "html", null, true);
        echo "\">
    </div>


    <div class=\"form-group\">
    <label class=\"ptm\" >";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关键词:"), "html", null, true);
        echo "</label>
      <select class=\"form-control\" name=\"keywordType\">
        ";
        // line 41
        if (((isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")) == "vip")) {
            // line 42
            echo "          ";
            $context["options"] = array("sn" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单号"), "buyer" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者用户名"), "title" => ($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("targetName", (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType"))) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名")));
            // line 43
            echo "        ";
        } else {
            // line 44
            echo "          ";
            $context["options"] = array("sn" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单号"), "buyer" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者用户名"), "targetId" => ($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("targetName", (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType"))) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编号")), "title" => ($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("targetName", (isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType"))) . $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名")), "mobile" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者绑定手机号"), "email" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者邮箱"));
            // line 45
            echo "        ";
        }
        // line 46
        echo "        ";
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "keywordType"), "method"));
        echo "
      </select>

    <input class=\"form-control\" type=\"text\" name=\"keyword\" value=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "keyword"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关键词"), "html", null, true);
        echo "\">
    </div>
    <button class=\"btn btn-primary\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
    <a class=\"btn btn-primary btn-export-csv\" 
    href=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_manage_export_csv", array("targetType" =>         // line 54
(isset($context["targetType"]) ? $context["targetType"] : $this->getContext($context, "targetType")), "startTime" => $this->getAttribute(        // line 55
(isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "startDateTime"), "method"), "endTime" => $this->getAttribute(        // line 56
(isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "endDateTime"), "method"), "status" => $this->getAttribute(        // line 57
(isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "status"), "method"), "payment" => $this->getAttribute(        // line 58
(isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "payment"), "method"), "keywordType" => $this->getAttribute(        // line 59
(isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "keywordType"), "method"), "keyword" => $this->getAttribute(        // line 60
(isset($context["request"]) ? $context["request"] : $this->getContext($context, "request")), "get", array(0 => "keyword"), "method"))), "html", null, true);
        // line 61
        echo "\"
    data-export-count=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getItemCount", array(), "method"), "html", null, true);
        echo "\"
    data-export-count-format=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->numberFilter($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getItemCount", array(), "method")), "html", null, true);
        echo "\"
    data-export-allow-count=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.export_allow_count"), "html", null, true);
        echo "\"
    data-export-allow-count-format=\"";
        // line 65
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->numberFilter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.export_allow_count")), "html", null, true);
        echo "\"
    >";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("导出结果"), "html", null, true);
        echo "</a>
    </div>
  </form>

  <table class=\"table table-striped table-hover\" id=\"order-table\">
    ";
        // line 71
        $this->loadTemplate("TopxiaWebBundle:Order:order-table.html.twig", "TopxiaAdminBundle:Order:manage.html.twig", 71)->display(array_merge($context, array("mode" => "admin")));
        // line 72
        echo "  </table>
  <div class=\"paginator\">
    ";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo " 
  </div>

  <div class=\"alert alert-info\">
    站外支付为该笔订单是通过导入或者手动添加的方式产生的，故为站外支付
  </div>
";
        
        $__internal_9a36f13bc3162144644b2fdfa85252bfd6df1f246b88fb181624e69945518134->leave($__internal_9a36f13bc3162144644b2fdfa85252bfd6df1f246b88fb181624e69945518134_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Order:manage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 74,  175 => 72,  173 => 71,  165 => 66,  161 => 65,  157 => 64,  153 => 63,  149 => 62,  146 => 61,  144 => 60,  143 => 59,  142 => 58,  141 => 57,  140 => 56,  139 => 55,  138 => 54,  137 => 53,  132 => 51,  125 => 49,  118 => 46,  115 => 45,  112 => 44,  109 => 43,  106 => 42,  104 => 41,  99 => 39,  91 => 34,  84 => 30,  77 => 26,  72 => 24,  62 => 19,  55 => 17,  51 => 16,  45 => 12,  39 => 11,  32 => 1,  30 => 9,  28 => 7,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{#
    {% set script_controller = 'trade/index' %}
#}

{% set menu = 'admin_' ~ targetType ~ '_order' %}

{% set script_controller = 'manage/list' %}

{% block main %}

  <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
    <div class=\"mbm\">
    <div class=\"form-group\">
      <label class=\"ptm\" >{{'创建时间:'|trans}}</label>
        <input class=\"form-control\" type=\"text\" id=\"startDate\" name=\"startDateTime\" value=\"{{request.get('startDateTime')}}\" placeholder=\"{{'起始时间'|trans}}\">
        -
        <input class=\"form-control\" type=\"text\" id=\"endDate\" name=\"endDateTime\" value=\"{{request.get('endDateTime')}}\" placeholder=\"{{'结束时间'|trans}}\">
    </div>
    </div>
    <div class=\"mbm\">
    <div class=\"form-group\">
      <label class=\"ptm\" >{{'筛选条件:'|trans}}</label>
        <select class=\"form-control\" name=\"status\">
          {{ select_options(dict('orderStatus'), request.get('status'), '订单状态'|trans) }}
        </select>
  
      <select class=\"form-control\" name=\"payment\">
        {{ select_options(dict('payment'), request.get('payment'), '支付方式'|trans) }}
      </select>
    </div> 
    <div class=\"form-group\" style=\"display:none;\">
      <input class=\"form-control\" type=\"text\" name=\"paidTimeRange\", placeholder=\"{{'付款时间段'|trans}}\">
    </div>


    <div class=\"form-group\">
    <label class=\"ptm\" >{{'关键词:'|trans}}</label>
      <select class=\"form-control\" name=\"keywordType\">
        {% if targetType == 'vip' %}
          {% set options = {sn: '订单号'|trans, buyer:'购买者用户名'|trans, title: dict_text('targetName', targetType) ~ '名'|trans} %}
        {% else %}
          {% set options = {sn: '订单号'|trans, buyer:'购买者用户名'|trans, targetId: dict_text('targetName', targetType) ~ '编号'|trans, title: dict_text('targetName', targetType) ~ '名'|trans, mobile:'购买者绑定手机号'|trans, email:'购买者邮箱'|trans} %}
        {% endif %}
        {{ select_options(options, request.get('keywordType')) }}
      </select>

    <input class=\"form-control\" type=\"text\" name=\"keyword\" value=\"{{ request.get('keyword') }}\" placeholder=\"{{'关键词'|trans}}\">
    </div>
    <button class=\"btn btn-primary\">{{'搜索'|trans}}</button>
    <a class=\"btn btn-primary btn-export-csv\" 
    href=\"{{ path('admin_order_manage_export_csv',
    {targetType:targetType,
    startTime:request.get('startDateTime'),
    endTime:request.get('endDateTime'),
    status:request.get('status'),
    payment:request.get('payment'),
    keywordType:request.get('keywordType'),
    keyword:request.get('keyword')
    })}}\"
    data-export-count=\"{{paginator.getItemCount()}}\"
    data-export-count-format=\"{{paginator.getItemCount()|number_to_human}}\"
    data-export-allow-count=\"{{setting('magic.export_allow_count')}}\"
    data-export-allow-count-format=\"{{setting('magic.export_allow_count')|number_to_human}}\"
    >{{'导出结果'|trans}}</a>
    </div>
  </form>

  <table class=\"table table-striped table-hover\" id=\"order-table\">
    {% include 'TopxiaWebBundle:Order:order-table.html.twig' with {mode:'admin'} %}
  </table>
  <div class=\"paginator\">
    {{ admin_macro.paginator(paginator) }} 
  </div>

  <div class=\"alert alert-info\">
    站外支付为该笔订单是通过导入或者手动添加的方式产生的，故为站外支付
  </div>
{% endblock %}
";
    }
}

<?php

/* TopxiaAdminBundle:Article:index.html.twig */
class __TwigTemplate_fe068c707c89e806150616ff9d16fa406ec21c9d9780f1dc2fd3806611e5a01f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Article:index.html.twig", 1);
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
        $__internal_9ce2b1d187281b80ede363f471fa1007ace208158ef0d4771b7e243fdeeb0b53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ce2b1d187281b80ede363f471fa1007ace208158ef0d4771b7e243fdeeb0b53->enter($__internal_9ce2b1d187281b80ede363f471fa1007ace208158ef0d4771b7e243fdeeb0b53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Article:index.html.twig"));

        // line 3
        $context["script_controller"] = "article/list";
        // line 5
        $context["menu"] = "admin_operation_article_manage";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ce2b1d187281b80ede363f471fa1007ace208158ef0d4771b7e243fdeeb0b53->leave($__internal_9ce2b1d187281b80ede363f471fa1007ace208158ef0d4771b7e243fdeeb0b53_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_f389d9482c20cbdcddfd67be0f5c52497b91f7f67c9f825c141be2c4471ac8a7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f389d9482c20cbdcddfd67be0f5c52497b91f7f67c9f825c141be2c4471ac8a7->enter($__internal_f389d9482c20cbdcddfd67be0f5c52497b91f7f67c9f825c141be2c4471ac8a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "<form class=\"well well-sm form-inline\" action=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article");
        echo "\">

     ";
        // line 10
        $this->loadTemplate("OrgBundle:Org:org-tree-select.html.twig", "TopxiaAdminBundle:Article:index.html.twig", 10)->display(array_merge($context, array("orgCode" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "orgCode"), "method"), "modal" => "list")));
        // line 11
        echo "     
  <div class=\"form-group\">
    <select style=\"width:150px;\" class=\"form-control\" name=\"categoryId\">
            <option value=\"0\">";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--所属栏目--"), "html", null, true);
        echo "</option>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoryTree"]) ? $context["categoryTree"] : $this->getContext($context, "categoryTree")));
        foreach ($context['_seq'] as $context["_key"] => $context["tree"]) {
            // line 16
            echo "                <option value=";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "id", array()), "html", null, true);
            echo " ";
            if (($this->getAttribute($context["tree"], "id", array()) == (isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")))) {
                echo "selected";
            }
            echo ">";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($this->getAttribute($context["tree"], "depth", array()) - 1)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                if (($this->getAttribute($context["tree"], "depth", array()) > 1)) {
                    echo "　";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo twig_escape_filter($this->env, $this->getAttribute($context["tree"], "name", array()), "html", null, true);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tree'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </select>
  </div>
  <div class=\"form-group\">
    <input class=\"form-control\" name=\"keywords\" type=\"text\" placeholder=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("标题关键词"), "html", null, true);
        echo "\" value=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "keywords"), "method"), "html", null, true);
        echo "\">
  </div>
  <div class=\"form-group\">
    <select class=\"form-control\" name=\"property\">
      ";
        // line 25
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("articleProperty"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "property"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--属性--"));
        echo "
    </select>
  </div>
  <div class=\"form-group\">
    <select class=\"form-control\" name=\"status\">
      ";
        // line 30
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("articleStatus"), $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "status"), "method"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("--发布状态--"));
        echo "
    </select>
  </div>
  <button class=\"btn btn-primary\" type=\"submit\">";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
</form>

<div id=\"aticle-table-container\">

  <table class=\"table table-hover table-striped\" id=\"article-table\">
    <thead>
      <tr>
        <th><input type=\"checkbox\"  data-role=\"batch-select\" id=\"batch-select\"> ID</th>
        <th width=\"25%\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("资讯标题"), "html", null, true);
        echo "</th>
        ";
        // line 43
        $this->loadTemplate("OrgBundle:Org/Parts:table-thead-tr.html.twig", "TopxiaAdminBundle:Article:index.html.twig", 43)->display($context);
        // line 44
        echo "        <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("栏目"), "html", null, true);
        echo "</th>
        <th>";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更新时间"), "html", null, true);
        echo "</th>
        <th>";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("属性"), "html", null, true);
        echo "
          <a class=\"glyphicon glyphicon-question-sign text-muted pull-center \" id=\"article-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\"></a>
          <div id=\"article-property-tips-html\" style=\"display:none;\">
          \t";
        // line 49
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("资讯属性Tooltip");
        echo "
          </div>
        </th>
        <th>";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</th>
        <th width=\"10%\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
      </tr>
    </thead>
    <tbody>
      ";
        // line 57
        if ((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles"))) {
            // line 58
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 59
                echo "          ";
                $context["category"] = (($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["article"], "categoryId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["categories"]) ? $context["categories"] : null), $this->getAttribute($context["article"], "categoryId", array()), array(), "array"), null)) : (null));
                // line 60
                echo "          ";
                $this->loadTemplate("TopxiaAdminBundle:Article:article-tr.html.twig", "TopxiaAdminBundle:Article:index.html.twig", 60)->display($context);
                // line 61
                echo "        ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "      ";
        } else {
            // line 63
            echo "        <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无页面记录"), "html", null, true);
            echo "</div></td></tr>
      ";
        }
        // line 65
        echo "    </tbody>
  </table>
  <div>
    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> ";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全选"), "html", null, true);
        echo "</label>
    <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("资讯"), "html", null, true);
        echo "\" data-url=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_delete");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
    ";
        // line 70
        $this->loadTemplate("OrgBundle:Org:batch-update-org-btn.html.twig", "TopxiaAdminBundle:Article:index.html.twig", 70)->display(array_merge($context, array("module" => "article", "formId" => "article-table", "generate" => "no-generate")));
        // line 71
        echo "  </div>
</div>

";
        // line 74
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "

";
        
        $__internal_f389d9482c20cbdcddfd67be0f5c52497b91f7f67c9f825c141be2c4471ac8a7->leave($__internal_f389d9482c20cbdcddfd67be0f5c52497b91f7f67c9f825c141be2c4471ac8a7_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 74,  237 => 71,  235 => 70,  227 => 69,  223 => 68,  218 => 65,  212 => 63,  209 => 62,  195 => 61,  192 => 60,  189 => 59,  171 => 58,  169 => 57,  162 => 53,  158 => 52,  152 => 49,  146 => 46,  142 => 45,  137 => 44,  135 => 43,  131 => 42,  119 => 33,  113 => 30,  105 => 25,  96 => 21,  91 => 18,  66 => 16,  62 => 15,  58 => 14,  53 => 11,  51 => 10,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set script_controller = 'article/list' %}

{% set menu = 'admin_operation_article_manage' %}

{% block main %}
<form class=\"well well-sm form-inline\" action=\"{{ path('admin_article') }}\">

     {% include 'OrgBundle:Org:org-tree-select.html.twig' with {orgCode: app.request.get('orgCode'), modal: 'list'} %}
     
  <div class=\"form-group\">
    <select style=\"width:150px;\" class=\"form-control\" name=\"categoryId\">
            <option value=\"0\">{{'--所属栏目--'|trans}}</option>
            {% for tree in categoryTree %}
                <option value={{ tree.id }} {% if tree.id == categoryId  %}selected{% endif%}>{% for i in 1..(tree.depth-1) if tree.depth > 1 %}　{% endfor %}{{ tree.name }}</option>
            {% endfor %}
    </select>
  </div>
  <div class=\"form-group\">
    <input class=\"form-control\" name=\"keywords\" type=\"text\" placeholder=\"{{'标题关键词'|trans}}\" value=\"{{ app.request.query.get('keywords') }}\">
  </div>
  <div class=\"form-group\">
    <select class=\"form-control\" name=\"property\">
      {{ select_options(dict('articleProperty'), app.request.query.get('property'), '--属性--'|trans) }}
    </select>
  </div>
  <div class=\"form-group\">
    <select class=\"form-control\" name=\"status\">
      {{ select_options(dict('articleStatus'), app.request.query.get('status'), '--发布状态--'|trans) }}
    </select>
  </div>
  <button class=\"btn btn-primary\" type=\"submit\">{{'搜索'|trans}}</button>
</form>

<div id=\"aticle-table-container\">

  <table class=\"table table-hover table-striped\" id=\"article-table\">
    <thead>
      <tr>
        <th><input type=\"checkbox\"  data-role=\"batch-select\" id=\"batch-select\"> ID</th>
        <th width=\"25%\">{{'资讯标题'|trans}}</th>
        {% include 'OrgBundle:Org/Parts:table-thead-tr.html.twig' %}
        <th>{{'栏目'|trans}}</th>
        <th>{{'更新时间'|trans}}</th>
        <th>{{'属性'|trans}}
          <a class=\"glyphicon glyphicon-question-sign text-muted pull-center \" id=\"article-property-tips\" data-toggle=\"tooltip\" data-placement=\"bottom\" href=\"javascript:\" title=\"\"></a>
          <div id=\"article-property-tips-html\" style=\"display:none;\">
          \t{{ '资讯属性Tooltip'|trans|raw }}
          </div>
        </th>
        <th>{{'状态'|trans}}</th>
        <th width=\"10%\">{{'操作'|trans}}</th>
      </tr>
    </thead>
    <tbody>
      {% if articles %}
        {% for article in articles %}
          {% set category = categories[article.categoryId]|default(null) %}
          {% include 'TopxiaAdminBundle:Article:article-tr.html.twig' %}
        {% endfor %}
      {% else %}
        <tr><td colspan=\"20\"><div class=\"empty\">{{'暂无页面记录'|trans}}</div></td></tr>
      {% endif %}
    </tbody>
  </table>
  <div>
    <label class=\"checkbox-inline\"><input type=\"checkbox\" data-role=\"batch-select\"> {{'全选'|trans}}</label>
    <button class=\"btn btn-default btn-sm mlm\" data-role=\"batch-delete\"  data-name=\"{{'资讯'|trans}}\" data-url=\"{{ path('admin_article_delete') }}\">{{'删除'|trans}}</button>
    {% include 'OrgBundle:Org:batch-update-org-btn.html.twig' with {module:'article', formId:'article-table', generate:\"no-generate\"} %}
  </div>
</div>

{{ admin_macro.paginator(paginator) }}

{% endblock %}";
    }
}

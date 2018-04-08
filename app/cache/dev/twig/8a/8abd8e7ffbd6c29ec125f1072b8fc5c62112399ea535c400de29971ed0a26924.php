<?php

/* TopxiaAdminBundle:Article:article-tr.html.twig */
class __TwigTemplate_2ac5ee0a2eac3c8a794cdb2ac8cb3fc5e7223c758ec9b7dfbea2a64e8b0fc60f extends Twig_Template
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
        $__internal_e37f8b9004965584dd30f83a5b991117ebbaff41132fd54cd36eb6512b230ee9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e37f8b9004965584dd30f83a5b991117ebbaff41132fd54cd36eb6512b230ee9->enter($__internal_e37f8b9004965584dd30f83a5b991117ebbaff41132fd54cd36eb6512b230ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Article:article-tr.html.twig"));

        // line 1
        $context["dict_macro"] = $this->loadTemplate("TopxiaWebBundle:Common:data-dict-macro.html.twig", "TopxiaAdminBundle:Article:article-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"article-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "\">
  <td><input value=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "\" type=\"checkbox\" data-role=\"batch-item\"> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "html", null, true);
        echo "</td>
  <td>
    <span class=\"text-muted\">
      <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_detail", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array()), 0, 22), "html", null, true);
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "title", array())) > 22)) {
            echo "...";
        }
        echo "</a>
    </span>
  </td>
  ";
        // line 9
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:Article:article-tr.html.twig", 9)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "orgCode", array()))));
        // line 10
        echo "  <td>
    ";
        // line 11
        if ((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category"))) {
            // line 12
            echo "      <span class=\"text-muted\"><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("article_category", array("categoryCode" => $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "code", array()))), "html", null, true);
            echo "\" target=\"_blank\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["category"]) ? $context["category"] : $this->getContext($context, "category")), "name", array()), "html", null, true);
            echo "</a></span>
    ";
        } else {
            // line 14
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未分类"), "html", null, true);
            echo "</span>
    ";
        }
        // line 16
        echo "  </td>
  <td>";
        // line 17
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "publishedTime", array()), "Y-n-d H:i"), "html", null, true);
        echo "</td>
  <td>
    <a href=\"javascript:;\" class=\"featured-label\" data-toggle=\"tooltip\" data-placement=\"top\"
       title=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置为头条"), "html", null, true);
        echo "\"
       data-set-url=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_set_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "property" => "featured")), "html", null, true);
        echo "\"
       data-cancel-url=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_cancel_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "property" => "featured")), "html", null, true);
        echo "\">
      <span class=\"label ";
        // line 23
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "featured", array()) == 1)) {
            echo "label-success";
        } else {
            echo "label-default";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("头"), "html", null, true);
        echo "</span></a>
    <a href=\"javascript:;\" class=\"promoted-label\" data-toggle=\"tooltip\" data-placement=\"top\"
       title=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推荐该资讯"), "html", null, true);
        echo "\"
       data-set-url=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_set_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "property" => "promoted")), "html", null, true);
        echo "\"
       data-cancel-url=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_cancel_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "property" => "promoted")), "html", null, true);
        echo "\">
      <span class=\"label ";
        // line 28
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "promoted", array()) == 1)) {
            echo "label-success";
        } else {
            echo "label-default";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("荐"), "html", null, true);
        echo "</span></a>

    <a href=\"javascript:;\" class=\"sticky-label\" data-toggle=\"tooltip\" data-placement=\"top\"
       title=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("置顶该资讯"), "html", null, true);
        echo "\"
       data-set-url=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_set_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "property" => "sticky")), "html", null, true);
        echo "\"
       data-cancel-url=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_cancel_property", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()), "property" => "sticky")), "html", null, true);
        echo "\">
      <span class=\"label ";
        // line 34
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "sticky", array()) == 1)) {
            echo "label-success";
        } else {
            echo "label-default";
        }
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("顶"), "html", null, true);
        echo "</span></a>

  </td>

  <td>";
        // line 38
        echo $context["dict_macro"]->getarticleStatus($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "status", array()));
        echo "</td>

  <td>
    <div class=\"btn-group\">
      <a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_edit", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-default btn-sm\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
        echo "</a>
      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu\">
        ";
        // line 47
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "status", array()) != "published")) {
            // line 48
            echo "          <li><a href=\"javascript:\" data-role=\"publish-item\"
                 data-url=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_publish", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发布"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 51
        echo "        ";
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "status", array()) == "published")) {
            // line 52
            echo "          <li><a href=\"javascript:\" data-role=\"unpublish-item\"
                 data-url=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_unpublish", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消发布"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 55
        echo "        ";
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "status", array()) != "trash")) {
            // line 56
            echo "          <li><a href=\"javascript:\" data-role=\"trash-item\"
                 data-url=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_trash", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("移至回收站"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 59
        echo "        ";
        if (($this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "status", array()) == "trash")) {
            // line 60
            echo "          <li><a href=\"javascript:\" data-role=\"delete-item\"
                 data-url=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_article_delete", array("id" => $this->getAttribute((isset($context["article"]) ? $context["article"] : $this->getContext($context, "article")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("永久删除"), "html", null, true);
            echo "</a></li>
        ";
        }
        // line 63
        echo "      </ul>
    </div>
  </td>
</tr>";
        
        $__internal_e37f8b9004965584dd30f83a5b991117ebbaff41132fd54cd36eb6512b230ee9->leave($__internal_e37f8b9004965584dd30f83a5b991117ebbaff41132fd54cd36eb6512b230ee9_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Article:article-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 63,  211 => 61,  208 => 60,  205 => 59,  198 => 57,  195 => 56,  192 => 55,  185 => 53,  182 => 52,  179 => 51,  172 => 49,  169 => 48,  167 => 47,  157 => 42,  150 => 38,  137 => 34,  133 => 33,  129 => 32,  125 => 31,  113 => 28,  109 => 27,  105 => 26,  101 => 25,  90 => 23,  86 => 22,  82 => 21,  78 => 20,  72 => 17,  69 => 16,  63 => 14,  55 => 12,  53 => 11,  50 => 10,  48 => 9,  37 => 6,  29 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% import \"TopxiaWebBundle:Common:data-dict-macro.html.twig\" as dict_macro %}
<tr id=\"article-{{ article.id }}\">
  <td><input value=\"{{ article.id }}\" type=\"checkbox\" data-role=\"batch-item\"> {{ article.id }}</td>
  <td>
    <span class=\"text-muted\">
      <a href=\"{{ path('article_detail',{id:article.id}) }}\" target=\"_blank\">{{ article.title | slice(0,22) }}{% if article.title|length >22 %}...{% endif %}</a>
    </span>
  </td>
  {% include 'OrgBundle:Org/Parts:table-body-td.html.twig' with {orgCode: article.orgCode}%}
  <td>
    {% if category %}
      <span class=\"text-muted\"><a href=\"{{ path('article_category',{categoryCode:category.code}) }}\" target=\"_blank\">{{ category.name }}</a></span>
    {% else %}
      <span class=\"text-muted\">{{'未分类'|trans}}</span>
    {% endif %}
  </td>
  <td>{{ article.publishedTime|date('Y-n-d H:i') }}</td>
  <td>
    <a href=\"javascript:;\" class=\"featured-label\" data-toggle=\"tooltip\" data-placement=\"top\"
       title=\"{{ '设置为头条'|trans }}\"
       data-set-url=\"{{ path('admin_article_set_property', {id:article.id,property:'featured'}) }}\"
       data-cancel-url=\"{{ path('admin_article_cancel_property', {id:article.id,property:'featured'}) }}\">
      <span class=\"label {% if article.featured == 1 %}label-success{% else %}label-default{% endif %}\">{{'头'|trans}}</span></a>
    <a href=\"javascript:;\" class=\"promoted-label\" data-toggle=\"tooltip\" data-placement=\"top\"
       title=\"{{ '推荐该资讯'|trans }}\"
       data-set-url=\"{{ path('admin_article_set_property', {id:article.id,property:'promoted'}) }}\"
       data-cancel-url=\"{{ path('admin_article_cancel_property', {id:article.id,property:'promoted'}) }}\">
      <span class=\"label {% if article.promoted == 1 %}label-success{% else %}label-default{% endif %}\">{{'荐'|trans}}</span></a>

    <a href=\"javascript:;\" class=\"sticky-label\" data-toggle=\"tooltip\" data-placement=\"top\"
       title=\"{{ '置顶该资讯'|trans }}\"
       data-set-url=\"{{ path('admin_article_set_property', {id:article.id,property:'sticky'}) }}\"
       data-cancel-url=\"{{ path('admin_article_cancel_property', {id:article.id,property:'sticky'}) }}\">
      <span class=\"label {% if article.sticky == 1 %}label-success{% else %}label-default{% endif %}\">{{'顶'|trans}}</span></a>

  </td>

  <td>{{ dict_macro.articleStatus(article.status) }}</td>

  <td>
    <div class=\"btn-group\">
      <a href=\"{{ path('admin_article_edit',{id:article.id}) }}\" class=\"btn btn-default btn-sm\">{{'编辑'|trans}}</a>
      <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
        <span class=\"caret\"></span>
      </a>
      <ul class=\"dropdown-menu\">
        {% if article.status != 'published' %}
          <li><a href=\"javascript:\" data-role=\"publish-item\"
                 data-url=\"{{ path('admin_article_publish', {id:article.id}) }}\">{{'发布'|trans}}</a></li>
        {% endif %}
        {% if article.status == 'published' %}
          <li><a href=\"javascript:\" data-role=\"unpublish-item\"
                 data-url=\"{{ path('admin_article_unpublish', {id:article.id}) }}\">{{'取消发布'|trans}}</a></li>
        {% endif %}
        {% if article.status != 'trash' %}
          <li><a href=\"javascript:\" data-role=\"trash-item\"
                 data-url=\"{{ path('admin_article_trash', {id:article.id}) }}\">{{'移至回收站'|trans}}</a></li>
        {% endif %}
        {% if article.status == 'trash' %}
          <li><a href=\"javascript:\" data-role=\"delete-item\"
                 data-url=\"{{ path('admin_article_delete', {id:article.id}) }}\">{{'永久删除'|trans}}</a></li>
        {% endif %}
      </ul>
    </div>
  </td>
</tr>";
    }
}

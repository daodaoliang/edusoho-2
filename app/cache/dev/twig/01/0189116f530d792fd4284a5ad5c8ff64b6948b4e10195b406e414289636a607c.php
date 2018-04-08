<?php

/* TopxiaAdminBundle:Teacher:tr.html.twig */
class __TwigTemplate_b669b1bc28f07a4b0e00448b157ac3fde0b90a4f30c9386094a4b0b3a6a9cbc6 extends Twig_Template
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
        $__internal_8cf31b21dfa4ba3771a1a243573085d7e306617afc4ed9b33a030b38904ce6c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8cf31b21dfa4ba3771a1a243573085d7e306617afc4ed9b33a030b38904ce6c1->enter($__internal_8cf31b21dfa4ba3771a1a243573085d7e306617afc4ed9b33a030b38904ce6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Teacher:tr.html.twig"));

        // line 1
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Teacher:tr.html.twig", 1);
        // line 2
        echo "<tr id=\"user-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\">
  <td>
    <strong>";
        // line 4
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        echo "</strong>
    ";
        // line 5
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "locked", array())) {
            // line 6
            echo "      <label class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("禁"), "html", null, true);
            echo "</label>
    ";
        }
        // line 8
        echo "  </td>
   ";
        // line 9
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:Teacher:tr.html.twig", 9)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "orgCode", array()))));
        // line 10
        echo "  <td>
    ";
        // line 11
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "promoted", array())) {
            // line 12
            echo "      <span class=\"label label-default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("荐:"), "html", null, true);
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "promotedTime", array()), "Y-m-d"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("序号:"), "html", null, true);
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "promotedSeq", array()), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 14
            echo "      <span class=\"text-muted\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("否"), "html", null, true);
            echo "</span>
    ";
        }
        // line 16
        echo "  </td>
  <td>
    <span class=\"text-sm\">";
        // line 18
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loginTime", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loginTime", array()), "Y-n-d H:i:s"), "html", null, true);
        } else {
            echo "--";
        }
        echo "</span>
    <br>
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loginIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loginIp", array()), "html", null, true);
        echo "</a>
  </td>
  <td>
    <div class=\"btn-group\">
      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
      ";
        // line 25
        $this->loadTemplate("PermissionBundle:Templates:group-button.html.twig", "TopxiaAdminBundle:Teacher:tr.html.twig", 25)->display(array_merge($context, array("parentCode" => "admin_teacher_manage", "group" => "groupButton", "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))));
        // line 26
        echo "    </div>
  </td>
</tr>";
        
        $__internal_8cf31b21dfa4ba3771a1a243573085d7e306617afc4ed9b33a030b38904ce6c1->leave($__internal_8cf31b21dfa4ba3771a1a243573085d7e306617afc4ed9b33a030b38904ce6c1_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Teacher:tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 26,  94 => 25,  90 => 24,  81 => 20,  72 => 18,  68 => 16,  62 => 14,  52 => 12,  50 => 11,  47 => 10,  45 => 9,  42 => 8,  36 => 6,  34 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% import 'TopxiaAdminBundle::macro.html.twig' as admin_macro %}
<tr id=\"user-table-tr-{{ user.id }}\">
  <td>
    <strong>{{ admin_macro.user_link(user) }}</strong>
    {% if user.locked %}
      <label class=\"label label-danger\">{{'禁'|trans}}</label>
    {% endif %}
  </td>
   {% include 'OrgBundle:Org/Parts:table-body-td.html.twig' with {orgCode: user.orgCode}%}
  <td>
    {% if user.promoted %}
      <span class=\"label label-default\">{{'荐:'|trans}}{{ user.promotedTime|date('Y-m-d') }} / {{'序号:'|trans}}{{ user.promotedSeq }}</span>
    {% else %}
      <span class=\"text-muted\">{{'否'|trans}}</span>
    {% endif %}
  </td>
  <td>
    <span class=\"text-sm\">{% if user.loginTime %}{{ user.loginTime|date('Y-n-d H:i:s') }}{% else %}--{% endif %}</span>
    <br>
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd={{ user.loginIp }}\" target=\"_blank\">{{ user.loginIp }}</a>
  </td>
  <td>
    <div class=\"btn-group\">
      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"{{ path('admin_user_show', {id:user.id}) }}\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
      {% include 'PermissionBundle:Templates:group-button.html.twig' with {parentCode: 'admin_teacher_manage', group:'groupButton', user: user} %}
    </div>
  </td>
</tr>";
    }
}

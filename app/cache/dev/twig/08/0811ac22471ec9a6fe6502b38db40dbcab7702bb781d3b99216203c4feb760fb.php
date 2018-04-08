<?php

/* TopxiaAdminBundle:User:user-table-tr.html.twig */
class __TwigTemplate_569ca211aac8cfe75a79987cc6786a3f812b41fcf5d05d0d5d355ecc54963685 extends Twig_Template
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
        $__internal_88f480653a866f6c9ab57532581481e8f0899bcbcb6092d80004fb0cb2634bff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f480653a866f6c9ab57532581481e8f0899bcbcb6092d80004fb0cb2634bff->enter($__internal_88f480653a866f6c9ab57532581481e8f0899bcbcb6092d80004fb0cb2634bff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:User:user-table-tr.html.twig"));

        // line 1
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:User:user-table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"user-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
        echo "\">
  ";
        // line 3
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-checkbox.html.twig", "TopxiaAdminBundle:User:user-table-tr.html.twig", 3)->display($context);
        // line 4
        echo "  <td>
    <strong>";
        // line 5
        echo $context["admin_macro"]->getuser_link((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")));
        echo "</strong>
    ";
        // line 6
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "locked", array())) {
            // line 7
            echo "      <label class=\"label label-danger\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("禁"), "html", null, true);
            echo "</label>
    ";
        }
        // line 9
        echo "
    <br>
    <span class=\"text-muted text-sm\">
      ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "roles", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 13
            echo "        ";
            $context["userRole"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Role", array("code" => $context["role"]));
            // line 14
            echo "        ";
            if (((array_key_exists("userRole", $context)) ? (_twig_default_filter((isset($context["userRole"]) ? $context["userRole"] : $this->getContext($context, "userRole")), false)) : (false))) {
                // line 15
                echo "          ";
                echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["userRole"]) ? $context["userRole"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["userRole"]) ? $context["userRole"] : null), "name", array()), "")) : ("")), "html", null, true);
                echo "
        ";
            } else {
                // line 17
                echo "          ";
                echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("userRole", $context["role"]);
                echo "
        ";
            }
            // line 19
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "    </span>
  </td>
 ";
        // line 22
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "TopxiaAdminBundle:User:user-table-tr.html.twig", 22)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "orgCode", array()))));
        // line 23
        echo "  <td>
    ";
        // line 24
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "verifiedMobile", array())) {
            // line 25
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "verifiedMobile", array()), "html", null, true);
            echo "<span class=\"text-success\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已绑定"), "html", null, true);
            echo ")</span>
    ";
        } elseif ($this->getAttribute(        // line 26
(isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "mobile", array())) {
            // line 27
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["profile"]) ? $context["profile"] : $this->getContext($context, "profile")), "mobile", array()), "html", null, true);
            echo "<span class=\"text-danger\">(";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未绑定"), "html", null, true);
            echo ")</span>
    ";
        } else {
            // line 29
            echo "       -- 
    ";
        }
        // line 31
        echo "  </td>

  <td>
    ";
        // line 34
        $context["emailArr"] = twig_split_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "@");
        // line 35
        echo "    ";
        if (($this->getAttribute((isset($context["emailArr"]) ? $context["emailArr"] : $this->getContext($context, "emailArr")), 1, array(), "array") != "edusoho.net")) {
            // line 36
            echo "      ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
            echo "
    ";
        } else {
            // line 38
            echo "      --
    ";
        }
        // line 40
        echo "    
    <br>
    ";
        // line 42
        if ($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "emailVerified", array())) {
            // line 43
            echo "      <label class=\"label label-success\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("该Email地址已验证"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已验证"), "html", null, true);
            echo "</label>
    ";
        }
        // line 45
        echo "  </td>

  <td>
    <span class=\"text-sm\">";
        // line 48
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
        echo "</span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdIp", array()), "html", null, true);
        echo "</a>
    ";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getConvertIP($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "createdIp", array())), "html", null, true);
        echo "
  </span>
    <span></span>
  </td>
  <td>
    <span class=\"text-sm\">
      ";
        // line 58
        if (($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loginTime", array()) == 0)) {
            // line 59
            echo "       --
      ";
        } else {
            // line 61
            echo "        ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loginTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "
      ";
        }
        // line 63
        echo "    </span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd=";
        // line 66
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loginIp", array()), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loginIp", array()), "html", null, true);
        echo "</a>
    ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getConvertIP($this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "loginIp", array())), "html", null, true);
        echo "
  </span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
      ";
        // line 73
        $this->loadTemplate("PermissionBundle:Templates:group-button.html.twig", "TopxiaAdminBundle:User:user-table-tr.html.twig", 73)->display(array_merge($context, array("parentCode" => "admin_user_manage", "group" => "groupButton", "user" => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")))));
        // line 74
        echo "    </div>
  </td>
</tr>

";
        
        $__internal_88f480653a866f6c9ab57532581481e8f0899bcbcb6092d80004fb0cb2634bff->leave($__internal_88f480653a866f6c9ab57532581481e8f0899bcbcb6092d80004fb0cb2634bff_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:User:user-table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  208 => 74,  206 => 73,  202 => 72,  194 => 67,  188 => 66,  183 => 63,  177 => 61,  173 => 59,  171 => 58,  162 => 52,  156 => 51,  150 => 48,  145 => 45,  137 => 43,  135 => 42,  131 => 40,  127 => 38,  121 => 36,  118 => 35,  116 => 34,  111 => 31,  107 => 29,  99 => 27,  97 => 26,  90 => 25,  88 => 24,  85 => 23,  83 => 22,  79 => 20,  73 => 19,  67 => 17,  61 => 15,  58 => 14,  55 => 13,  51 => 12,  46 => 9,  40 => 7,  38 => 6,  34 => 5,  31 => 4,  29 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% import 'TopxiaAdminBundle::macro.html.twig' as admin_macro %}
<tr id=\"user-table-tr-{{ user.id }}\">
  {% include 'OrgBundle:Org/Parts:table-body-checkbox.html.twig' %}
  <td>
    <strong>{{ admin_macro.user_link(user) }}</strong>
    {% if user.locked %}
      <label class=\"label label-danger\">{{'禁'|trans}}</label>
    {% endif %}

    <br>
    <span class=\"text-muted text-sm\">
      {% for role in user.roles %}
        {% set userRole = data('Role', {code: role}) %}
        {% if userRole|default(false) %}
          {{userRole.name|default('')}}
        {% else %}
          {{ dict_text('userRole', role) }}
        {% endif %}
      {% endfor %}
    </span>
  </td>
 {% include 'OrgBundle:Org/Parts:table-body-td.html.twig' with {orgCode: user.orgCode}%}
  <td>
    {% if user.verifiedMobile %}
      {{ user.verifiedMobile }}<span class=\"text-success\">({{'已绑定'|trans}})</span>
    {% elseif profile.mobile %}
      {{ profile.mobile }}<span class=\"text-danger\">({{'未绑定'|trans}})</span>
    {% else %}
       -- 
    {% endif %}
  </td>

  <td>
    {% set emailArr = user.email|split('@') %}
    {% if emailArr[1] != 'edusoho.net' %}
      {{ user.email }}
    {% else %}
      --
    {% endif %}
    
    <br>
    {% if user.emailVerified %}
      <label class=\"label label-success\" title=\"{{'该Email地址已验证'|trans}}\">{{'已验证'|trans}}</label>
    {% endif %}
  </td>

  <td>
    <span class=\"text-sm\">{{ user.createdTime|date('Y-n-d H:i:s') }}</span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd={{ user.createdIp }}\" target=\"_blank\">{{ user.createdIp }}</a>
    {{convertIP(user.createdIp)}}
  </span>
    <span></span>
  </td>
  <td>
    <span class=\"text-sm\">
      {% if user.loginTime == 0 %}
       --
      {% else %}
        {{ user.loginTime|date('Y-n-d H:i:s') }}
      {% endif %}
    </span>
    <br>
    <span class=\"text-muted text-sm\">
    <a class=\"text-muted text-sm\" href=\"http://www.baidu.com/s?wd={{ user.loginIp }}\" target=\"_blank\">{{ user.loginIp }}</a>
    {{convertIP(user.loginIp)}}
  </span>
  </td>
  <td>
    <div class=\"btn-group\">
      <a href=\"#modal\" data-toggle=\"modal\" data-url=\"{{ path('admin_user_show', {id:user.id}) }}\" data-url=\"\" class=\"btn btn-default btn-sm\">查看</a>
      {% include 'PermissionBundle:Templates:group-button.html.twig' with {parentCode: 'admin_user_manage', group:'groupButton', user: user} %}
    </div>
  </td>
</tr>

";
    }
}

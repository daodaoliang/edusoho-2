<?php

/* ClassroomBundle:ClassroomAdmin:table-tr.html.twig */
class __TwigTemplate_343ee539203e8719458676fbdacc584cbc823c2041bf99036a0ff237fd1fabc3 extends Twig_Template
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
        $__internal_b8fef4bae2f5e830c243be1fc95d86b9f8ce944fc6e8d204809e9cef32a4a02a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8fef4bae2f5e830c243be1fc95d86b9f8ce944fc6e8d204809e9cef32a4a02a->enter($__internal_b8fef4bae2f5e830c243be1fc95d86b9f8ce944fc6e8d204809e9cef32a4a02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ClassroomBundle:ClassroomAdmin:table-tr.html.twig"));

        // line 1
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "ClassroomBundle:ClassroomAdmin:table-tr.html.twig", 1);
        // line 2
        echo "<tr id=\"classroom-table-tr-";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "html", null, true);
        echo "\">
  ";
        // line 3
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-checkbox.html.twig", "ClassroomBundle:ClassroomAdmin:table-tr.html.twig", 3)->display($context);
        // line 4
        echo "    <td>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), "html", null, true);
        echo "</td>

    <td>
    <strong>  
      <a target=\"_blank\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "title", array()), "html", null, true);
        echo "</a>
    </strong>
    <br>
    <span class=\"text-muted text-sm\">";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("分类"), "html", null, true);
        echo "：";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["category"]) ? $context["category"] : null), "name", array()), "--")) : ("--")), "html", null, true);
        echo "</span>
    ";
        // line 12
        if ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "recommended", array())) {
            // line 13
            echo "      <span class=\"label label-default\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("荐"), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "recommendedTime", array()), "Y-m-d"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("序号"), "html", null, true);
            echo ":";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "recommendedSeq", array()), "html", null, true);
            echo "</span>
    ";
        }
        // line 15
        echo "    </td>
    ";
        // line 16
        $this->loadTemplate("OrgBundle:Org/Parts:table-body-td.html.twig", "ClassroomBundle:ClassroomAdmin:table-tr.html.twig", 16)->display(array_merge($context, array("orgCode" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "orgCode", array()))));
        // line 17
        echo "    <td>
    ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroomCoursesNum"]) ? $context["classroomCoursesNum"] : $this->getContext($context, "classroomCoursesNum")), $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), array(), "array"), "html", null, true);
        echo "

    ";
        // line 20
        if (($this->getAttribute((isset($context["classroomCoursesNum"]) ? $context["classroomCoursesNum"] : $this->getContext($context, "classroomCoursesNum")), $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()), array(), "array") > 0)) {
            // line 21
            echo "    <strong>  
      <a target=\"_blank\" href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage_courses", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("详情"), "html", null, true);
            echo "</a>
    </strong>
    ";
        }
        // line 25
        echo "    </td>

    <td>
    ";
        // line 28
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "studentNum", array()), "html", null, true);
        echo "
    </td>

    <td>
    <span style=\"color: #F40; \">
            ";
        // line 33
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
            // line 34
            echo "               ";
            echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()) * $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.cash_rate")), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_name"), "html", null, true);
            echo "
            ";
        } else {
            // line 36
            echo "                ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "price", array()), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元"), "html", null, true);
            echo "
            ";
        }
        // line 38
        echo "     </span>
    &nbsp;


    <span style=\"font-size: 13px;color: #666;\">
      ";
        // line 43
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_enabled") && ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.price_type") == "Coin"))) {
            // line 44
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("原价 %coinPriceAll% %coinname%", array("%coinPriceAll%" => $this->getAttribute((isset($context["coinPriceAll"]) ? $context["coinPriceAll"] : $this->getContext($context, "coinPriceAll")), (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), 0)) : (0)), array(), "array"), "%coinname%" => $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("coin.coin_name"))), "html", null, true);
            echo "
      ";
        } else {
            // line 46
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("原价 %priceAll%元", array("%priceAll%" => $this->getAttribute((isset($context["priceAll"]) ? $context["priceAll"] : $this->getContext($context, "priceAll")), (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : null), "id", array()), 0)) : (0)), array(), "array"))), "html", null, true);
            echo "
      ";
        }
        // line 48
        echo "    </span>


    </td>

    <td>
    ";
        // line 54
        if (($this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "published")) {
            // line 55
            echo "    <span style=\"color: #090;\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已发布"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 56
(isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "status", array()) == "closed")) {
            // line 57
            echo "    
    <span style=\"color: #900;\">";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭"), "html", null, true);
            echo "</span>
    ";
        } else {
            // line 60
            echo "    ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布"), "html", null, true);
            echo "
    ";
        }
        // line 62
        echo "    </td>

    <td>

  <div class=\"btn-group\">
      ";
        // line 67
        if ($this->env->getExtension('Permission\PermissionBundle\TwigExtension\PermissionExtension')->hasPermission("admin_classroom_content_manage")) {
            // line 68
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_manage", array("id" => $this->getAttribute((isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")), "id", array()))), "html", null, true);
            echo "\" target=\"_blank\" class=\"btn btn-default btn-sm\">管理</a>
      ";
        }
        // line 70
        echo "
      ";
        // line 71
        $this->loadTemplate("PermissionBundle:Templates:group-button.html.twig", "ClassroomBundle:ClassroomAdmin:table-tr.html.twig", 71)->display(array_merge($context, array("parentCode" => "admin_classroom_manage", "group" => "groupButton", "classroom" => (isset($context["classroom"]) ? $context["classroom"] : $this->getContext($context, "classroom")))));
        // line 72
        echo "  </div>
 </td>
</tr>";
        
        $__internal_b8fef4bae2f5e830c243be1fc95d86b9f8ce944fc6e8d204809e9cef32a4a02a->leave($__internal_b8fef4bae2f5e830c243be1fc95d86b9f8ce944fc6e8d204809e9cef32a4a02a_prof);

    }

    public function getTemplateName()
    {
        return "ClassroomBundle:ClassroomAdmin:table-tr.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 72,  193 => 71,  190 => 70,  184 => 68,  182 => 67,  175 => 62,  169 => 60,  164 => 58,  161 => 57,  159 => 56,  154 => 55,  152 => 54,  144 => 48,  138 => 46,  132 => 44,  130 => 43,  123 => 38,  116 => 36,  108 => 34,  106 => 33,  98 => 28,  93 => 25,  85 => 22,  82 => 21,  80 => 20,  75 => 18,  72 => 17,  70 => 16,  67 => 15,  55 => 13,  53 => 12,  47 => 11,  39 => 8,  31 => 4,  29 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% import 'TopxiaAdminBundle::macro.html.twig' as admin_macro %}
<tr id=\"classroom-table-tr-{{ classroom.id }}\">
  {% include 'OrgBundle:Org/Parts:table-body-checkbox.html.twig' %}
    <td>{{ classroom.id }}</td>

    <td>
    <strong>  
      <a target=\"_blank\" href=\"{{ path('classroom_manage', {id:classroom.id}) }}\">{{ classroom.title}}</a>
    </strong>
    <br>
    <span class=\"text-muted text-sm\">{{'分类'|trans}}：{{ category.name|default('--') }}</span>
    {% if classroom.recommended %}
      <span class=\"label label-default\">{{'荐'|trans}}:{{ classroom.recommendedTime|date('Y-m-d') }} / {{'序号'|trans}}:{{ classroom.recommendedSeq }}</span>
    {% endif %}
    </td>
    {% include 'OrgBundle:Org/Parts:table-body-td.html.twig' with {orgCode: classroom.orgCode}%}
    <td>
    {{ classroomCoursesNum[classroom.id] }}

    {% if classroomCoursesNum[classroom.id] > 0 %}
    <strong>  
      <a target=\"_blank\" href=\"{{ path('classroom_manage_courses', {id:classroom.id}) }}\">{{'详情'|trans}}</a>
    </strong>
    {% endif %}
    </td>

    <td>
    {{ classroom.studentNum }}
    </td>

    <td>
    <span style=\"color: #F40; \">
            {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}
               {{classroom.price * setting('coin.cash_rate') }} {{setting('coin.coin_name')}}
            {% else %}
                {{ classroom.price }}{{'元'|trans}}
            {% endif %}
     </span>
    &nbsp;


    <span style=\"font-size: 13px;color: #666;\">
      {% if setting('coin.coin_enabled') and setting('coin.price_type') == 'Coin' %}
        {{'原价 %coinPriceAll% %coinname%'|trans({'%coinPriceAll%':coinPriceAll[classroom.id|default(0)],'%coinname%':setting('coin.coin_name')})}}
      {% else %}
        {{'原价 %priceAll%元'|trans({'%priceAll%':priceAll[classroom.id|default(0)]})}}
      {% endif %}
    </span>


    </td>

    <td>
    {% if classroom.status=='published' %}
    <span style=\"color: #090;\">{{'已发布'|trans}}</span>
    {% elseif classroom.status=='closed'%}
    
    <span style=\"color: #900;\">{{'已关闭'|trans}}</span>
    {% else %}
    {{'未发布'|trans}}
    {% endif %}
    </td>

    <td>

  <div class=\"btn-group\">
      {% if has_permission('admin_classroom_content_manage') %}
        <a href=\"{{ path('classroom_manage', {id:classroom.id}) }}\" target=\"_blank\" class=\"btn btn-default btn-sm\">管理</a>
      {% endif %}

      {% include 'PermissionBundle:Templates:group-button.html.twig' with {parentCode: 'admin_classroom_manage', group:'groupButton', classroom: classroom} %}
  </div>
 </td>
</tr>";
    }
}

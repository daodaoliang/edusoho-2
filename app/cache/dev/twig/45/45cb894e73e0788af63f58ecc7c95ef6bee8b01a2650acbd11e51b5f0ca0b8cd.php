<?php

/* TopxiaAdminBundle:Coin:cash-bill.html.twig */
class __TwigTemplate_1e92b7c7f77f01d69046926d1ce715ee9a281c78a4cffffdf6d13d3c4ae80b68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Coin:cash-bill.html.twig", 1);
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
        $__internal_4d16112977071942960aa3852867f4aca351d428c8c774b3f6cc54714d94cd49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d16112977071942960aa3852867f4aca351d428c8c774b3f6cc54714d94cd49->enter($__internal_4d16112977071942960aa3852867f4aca351d428c8c774b3f6cc54714d94cd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Coin:cash-bill.html.twig"));

        // line 3
        $context["menu"] = "admin_bill";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4d16112977071942960aa3852867f4aca351d428c8c774b3f6cc54714d94cd49->leave($__internal_4d16112977071942960aa3852867f4aca351d428c8c774b3f6cc54714d94cd49_prof);

    }

    // line 5
    public function block_main($context, array $blocks = array())
    {
        $__internal_b8676612a9c296c1dc782ec4627ce860731f183b348456ff62c608fed155e5c5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8676612a9c296c1dc782ec4627ce860731f183b348456ff62c608fed155e5c5->enter($__internal_b8676612a9c296c1dc782ec4627ce860731f183b348456ff62c608fed155e5c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 6
        echo "
    <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
      <div class=\"form-group\">
        <select class=\"form-control\" name=\"lastHowManyMonths\"  onchange=\"submit();\">
          ";
        // line 10
        $context["options"] = array("" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部记录"), "oneWeek" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近一周"), "twoWeeks" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近两周"), "oneMonth" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近一个月"), "twoMonths" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近两个月"), "threeMonths" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近三个月"));
        // line 11
        echo "          ";
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->selectOptions((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "lastHowManyMonths"), "method"));
        echo "
        </select>
      </div>
    <div class=\"form-group\">
        <input type=\"text\" id=\"nickname\" name=\"nickname\" class=\"form-control\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"), "html", null, true);
        echo "\" placeholder=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名"), "html", null, true);
        echo "\">
    </div>

    <button class=\"btn btn-primary\">";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("搜索"), "html", null, true);
        echo "</button>
    <a class=\"btn btn-primary\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_bill_export_csv", array("lastHowManyMonths" => $this->getAttribute($this->getAttribute(        // line 20
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "lastHowManyMonths"), "method"), "cashType" =>         // line 21
(isset($context["cashType"]) ? $context["cashType"] : $this->getContext($context, "cashType")), "nickname" => $this->getAttribute($this->getAttribute($this->getAttribute(        // line 22
(isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "nickname"), "method"))), "html", null, true);
        // line 23
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("导出结果"), "html", null, true);
        echo "</a>

    </form>

    <p class=\"text-muted\">
      <span class=\"mrl\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收入："), "html", null, true);
        echo "<strong class=\"inflow-num\">";
        echo twig_escape_filter($this->env, (isset($context["amountInflow"]) ? $context["amountInflow"] : $this->getContext($context, "amountInflow")), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元"), "html", null, true);
        echo "</span>
      <span class=\"mrl\">";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支出："), "html", null, true);
        echo "<strong class=\"outflow-num\">";
        echo twig_escape_filter($this->env, (isset($context["amountOutflow"]) ? $context["amountOutflow"] : $this->getContext($context, "amountOutflow")), "html", null, true);
        echo "</strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("元"), "html", null, true);
        echo "</span>
    </p>

    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        ";
        // line 34
        if ((isset($context["cashes"]) ? $context["cashes"] : $this->getContext($context, "cashes"))) {
            // line 35
            echo "        <tr>
          <th><span class=\"text-sm\">";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("流水号"), "html", null, true);
            echo "</span></th>
          <th><span class=\"text-sm\">";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("名称"), "html", null, true);
            echo "</span></th>  
          <th><span class=\"text-sm\">";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户名"), "html", null, true);
            echo "</span></th>             
          <th><span class=\"text-sm\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("成交时间"), "html", null, true);
            echo "</span></th>
          <th class=\"text-right\" style=\"padding-right: 60px;\"><span class=\"text-sm\">";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("收支"), "html", null, true);
            echo "</span></th>
          
          <th><span class=\"text-sm\">";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支付方式"), "html", null, true);
            echo "</span></th>
        </tr>
        ";
            // line 44
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["cashes"]) ? $context["cashes"] : $this->getContext($context, "cashes")));
            foreach ($context['_seq'] as $context["_key"] => $context["cash"]) {
                // line 45
                echo "           <tr>
            <td><span class=\"text-sm\">";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "sn", array()), "html", null, true);
                echo "</span></td>
            <td><span class=\"text-sm\">";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "name", array()), "html", null, true);
                echo "</span><br>
                <span class=\"text-muted text-sm\">";
                // line 48
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单号："), "html", null, true);
                echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "orderSn", array()), "html", null, true);
                echo "</span></td>
            <td><span class=\"text-sm\"><a href=\"";
                // line 49
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute($context["cash"], "userId", array()))), "html", null, true);
                echo "\">
            ";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")), $this->getAttribute($context["cash"], "userId", array()), array(), "array"), "nickname", array()), "html", null, true);
                echo "</a></span></td>            
            <td><span class=\"text-sm\">";
                // line 51
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cash"], "createdTime", array()), "Y-m-d H:i:s"), "html", null, true);
                echo "</span></td>

            ";
                // line 53
                if (($this->getAttribute($context["cash"], "type", array()) == "inflow")) {
                    // line 54
                    echo "            <td class=\"text-right\" style=\"color:#1bb974;padding-right: 50px;\">
               ";
                    // line 55
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                    echo " 
            </td>
            ";
                }
                // line 58
                echo "            ";
                if (($this->getAttribute($context["cash"], "type", array()) == "outflow")) {
                    // line 59
                    echo "            <td  class=\"text-right\" style=\"color:#ff7b0e;padding-right: 50px;\">
               -&nbsp;";
                    // line 60
                    echo twig_escape_filter($this->env, $this->getAttribute($context["cash"], "amount", array()), "html", null, true);
                    echo "               
            </td>
            ";
                }
                // line 63
                echo "           
            <td>
              <span class=\"text-sm\">
                ";
                // line 66
                if (($this->getAttribute($context["cash"], "type", array()) == "inflow")) {
                    // line 67
                    echo "                  ";
                    echo $this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("payment", $this->getAttribute($context["cash"], "payment", array()));
                    echo "
                ";
                } else {
                    // line 69
                    echo "                  ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网校支付"), "html", null, true);
                    echo "
                ";
                }
                // line 71
                echo "              </span>
            </td> 
          </tr>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cash'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 75
            echo "        ";
        } else {
            // line 76
            echo "        <div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无记录"), "html", null, true);
            echo "</div>
        ";
        }
        // line 78
        echo "      </table>
    </div>
 ";
        // line 80
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_macro"]) ? $context["admin_macro"] : $this->getContext($context, "admin_macro")), "paginator", array(0 => (isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator"))), "method"), "html", null, true);
        echo "


";
        
        $__internal_b8676612a9c296c1dc782ec4627ce860731f183b348456ff62c608fed155e5c5->leave($__internal_b8676612a9c296c1dc782ec4627ce860731f183b348456ff62c608fed155e5c5_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Coin:cash-bill.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 80,  229 => 78,  223 => 76,  220 => 75,  211 => 71,  205 => 69,  199 => 67,  197 => 66,  192 => 63,  186 => 60,  183 => 59,  180 => 58,  174 => 55,  171 => 54,  169 => 53,  164 => 51,  160 => 50,  156 => 49,  151 => 48,  147 => 47,  143 => 46,  140 => 45,  136 => 44,  131 => 42,  126 => 40,  122 => 39,  118 => 38,  114 => 37,  110 => 36,  107 => 35,  105 => 34,  93 => 29,  85 => 28,  76 => 23,  74 => 22,  73 => 21,  72 => 20,  71 => 19,  67 => 18,  59 => 15,  51 => 11,  49 => 10,  43 => 6,  37 => 5,  30 => 1,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_bill' %}

{% block main %}

    <form id=\"user-search-form\" class=\"form-inline well well-sm\" action=\"\" method=\"get\" novalidate>
      <div class=\"form-group\">
        <select class=\"form-control\" name=\"lastHowManyMonths\"  onchange=\"submit();\">
          {% set options = {'':'全部记录'|trans,'oneWeek':'最近一周'|trans,'twoWeeks':'最近两周'|trans,'oneMonth':'最近一个月'|trans,'twoMonths':'最近两个月'|trans,'threeMonths':'最近三个月'|trans} %}
          {{ select_options(options, app.request.get('lastHowManyMonths')) }}
        </select>
      </div>
    <div class=\"form-group\">
        <input type=\"text\" id=\"nickname\" name=\"nickname\" class=\"form-control\" value=\"{{ app.request.query.get('nickname') }}\" placeholder=\"{{'用户名'|trans}}\">
    </div>

    <button class=\"btn btn-primary\">{{'搜索'|trans}}</button>
    <a class=\"btn btn-primary\" href=\"{{ path('admin_bill_export_csv',{
    lastHowManyMonths:app.request.get('lastHowManyMonths'),
    cashType:cashType,
    nickname:app.request.query.get('nickname'),
    })}}\">{{'导出结果'|trans}}</a>

    </form>

    <p class=\"text-muted\">
      <span class=\"mrl\">{{'收入：'|trans}}<strong class=\"inflow-num\">{{ amountInflow }}</strong> {{ '元'|trans }}</span>
      <span class=\"mrl\">{{'支出：'|trans}}<strong class=\"outflow-num\">{{ amountOutflow }}</strong> {{ '元'|trans }}</span>
    </p>

    <div class=\"table-responsive\">
      <table class=\"table table-striped\">
        {% if cashes %}
        <tr>
          <th><span class=\"text-sm\">{{'流水号'|trans}}</span></th>
          <th><span class=\"text-sm\">{{'名称'|trans}}</span></th>  
          <th><span class=\"text-sm\">{{'用户名'|trans}}</span></th>             
          <th><span class=\"text-sm\">{{'成交时间'|trans}}</span></th>
          <th class=\"text-right\" style=\"padding-right: 60px;\"><span class=\"text-sm\">{{'收支'|trans}}</span></th>
          
          <th><span class=\"text-sm\">{{'支付方式'|trans}}</span></th>
        </tr>
        {% for cash in cashes %}
           <tr>
            <td><span class=\"text-sm\">{{cash.sn}}</span></td>
            <td><span class=\"text-sm\">{{cash.name}}</span><br>
                <span class=\"text-muted text-sm\">{{'订单号：'|trans}}{{cash.orderSn}}</span></td>
            <td><span class=\"text-sm\"><a href=\"{{ path('user_show', {id:cash.userId}) }}\">
            {{users[cash.userId].nickname}}</a></span></td>            
            <td><span class=\"text-sm\">{{cash.createdTime|date('Y-m-d H:i:s')}}</span></td>

            {% if cash.type ==\"inflow\" %}
            <td class=\"text-right\" style=\"color:#1bb974;padding-right: 50px;\">
               {{cash.amount}} 
            </td>
            {% endif %}
            {% if cash.type ==\"outflow\" %}
            <td  class=\"text-right\" style=\"color:#ff7b0e;padding-right: 50px;\">
               -&nbsp;{{cash.amount}}               
            </td>
            {% endif %}
           
            <td>
              <span class=\"text-sm\">
                {% if cash.type ==\"inflow\" %}
                  {{ dict_text('payment', cash.payment) }}
                {% else %}
                  {{'网校支付'|trans}}
                {% endif %}
              </span>
            </td> 
          </tr>
        {% endfor %}
        {% else %}
        <div class=\"empty\">{{'暂无记录'|trans}}</div>
        {% endif %}
      </table>
    </div>
 {{ admin_macro.paginator(paginator) }}


{% endblock %}";
    }
}

<?php

/* TopxiaWebBundle:Order:order-table.html.twig */
class __TwigTemplate_679ba8439b6d06e1196aa56250aa6937f37c3c02bd1c89597567b35d0eae2797 extends Twig_Template
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
        $__internal_8e52dcb79ed99005bd26798444d53b75b2531fb6bf06e09ec9c6f929640fe21c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e52dcb79ed99005bd26798444d53b75b2531fb6bf06e09ec9c6f929640fe21c->enter($__internal_8e52dcb79ed99005bd26798444d53b75b2531fb6bf06e09ec9c6f929640fe21c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Order:order-table.html.twig"));

        // line 7
        $context["dict_macro"] = $this->loadTemplate("TopxiaWebBundle:Common:data-dict-macro.html.twig", "TopxiaWebBundle:Order:order-table.html.twig", 7);
        // line 8
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Order:order-table.html.twig", 8);
        // line 9
        echo "
";
        // line 10
        $context["mode"] = ((array_key_exists("mode", $context)) ? (_twig_default_filter((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), array(0 => "my"))) : (array(0 => "my")));
        // line 11
        echo "  <thead>
    <tr>
      <th>";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单名称"), "html", null, true);
        echo "</th>
      <th>";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("创建时间"), "html", null, true);
        echo "</th>
      <th>";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态"), "html", null, true);
        echo "</th>
      <th>";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("实付(元)"), "html", null, true);
        echo "</th>
      ";
        // line 17
        if (twig_in_filter((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), array(0 => "course", 1 => "admin"))) {
            // line 18
            echo "        <th>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("购买者"), "html", null, true);
            echo "</th>
      ";
        }
        // line 20
        echo "      <th>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("支付方式"), "html", null, true);
        echo "
      <span data-toggle=\"popover\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-pay-way-popover\"></span>
        <div class=\"popover-content hidden\"  style=\"width:100px;\">
          <div class=\"popover-item\">
            <div class=\"content\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("站外支付为该笔订单是通过导入或者手动添加的方式产生的，故为站外支付"), "html", null, true);
        echo "</div>
          </div>
        </div></th>
      <th style=\"min-width:100px\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("操作"), "html", null, true);
        echo "</th>
    </tr>
  </thead>
  <tbody>
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["orders"]) ? $context["orders"] : $this->getContext($context, "orders")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["order"]) {
            // line 32
            echo "      ";
            $context["buyer"] = (($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["order"], "userId", array()), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["users"]) ? $context["users"] : null), $this->getAttribute($context["order"], "userId", array()), array(), "array"), null)) : (null));
            // line 33
            echo "        <tr id=\"order-table-";
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "id", array()), "html", null, true);
            echo "\" style=\"word-break: break-all;word-wrap: break-word;\">
          <td>
            ";
            // line 35
            if (($this->getAttribute($context["order"], "targetType", array()) == "course")) {
                // line 36
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } elseif (($this->getAttribute(            // line 37
$context["order"], "targetType", array()) == "vip")) {
                // line 38
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("vip", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } elseif (($this->getAttribute(            // line 39
$context["order"], "targetType", array()) == "classroom")) {
                // line 40
                echo "              <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("classroom_show", array("id" => $this->getAttribute($context["order"], "targetId", array()))), "html", null, true);
                echo "\" target=\"_blank\"><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong></a>
            ";
            } else {
                // line 42
                echo "              <strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "title", array()), "html", null, true);
                echo "</strong>
            ";
            }
            // line 44
            echo "            <br>
            <span class=\"text-muted text-sm\">";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单号：%sn%", array("%sn%" => $this->getAttribute($context["order"], "sn", array()))), "html", null, true);
            echo "</span>
          </td>
          <td><span class=\"text-muted text-sm\">";
            // line 47
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "createdTime", array()), "Y-n-d H:i:s"), "html", null, true);
            echo "</span></td>
          <td>";
            // line 48
            echo $context["dict_macro"]->getorderStatus($this->getAttribute($context["order"], "status", array()));
            echo "</td>
          <td><span class=\"money-text\">";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["order"], "amount", array()), "html", null, true);
            echo "</span></td>
          ";
            // line 50
            if (twig_in_filter((isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")), array(0 => "admin", 1 => "course"))) {
                // line 51
                echo "            <td>
              ";
                // line 52
                echo $context["web_macro"]->getuser_link((isset($context["buyer"]) ? $context["buyer"] : $this->getContext($context, "buyer")));
                echo "
            </td>
          ";
            }
            // line 55
            echo "          <td>
            ";
            // line 56
            if (($this->getAttribute($context["order"], "paidTime", array()) > 0)) {
                // line 57
                echo "              ";
                echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDictText("payment", $this->getAttribute($context["order"], "payment", array())), "--"), "html", null, true);
                echo "
              <br>
              <span class=\"text-muted text-sm\">";
                // line 59
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["order"], "paidTime", array()), "Y-n-d H:i:s"), "html", null, true);
                echo "</span>
            ";
            } else {
                // line 61
                echo "              --
            ";
            }
            // line 63
            echo "          </td>
          <td>
            ";
            // line 65
            if (("admin" == (isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")))) {
                // line 66
                echo "                <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("详情"), "html", null, true);
                echo "</a>
              ";
            }
            // line 68
            echo "            ";
            if (("course" == (isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")))) {
                // line 69
                echo "            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("详情"), "html", null, true);
                echo "</a>
            ";
            }
            // line 71
            echo "
            ";
            // line 72
            if (("my" == (isset($context["mode"]) ? $context["mode"] : $this->getContext($context, "mode")))) {
                // line 73
                echo "              <div class=\"btn-group\">
                <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("web_user_order_detail", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("详情"), "html", null, true);
                echo "</a>
                ";
                // line 75
                if ((($this->getAttribute($context["order"], "status", array()) == "refunding") || ($this->getAttribute($context["order"], "status", array()) == "created"))) {
                    // line 76
                    echo "                  <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                  <span class=\"caret\"></span>
                  </a>
                  <ul class=\"dropdown-menu pull-right ";
                    // line 79
                    echo "\" style=\"min-width: 120px;\" >

                  ";
                    // line 82
                    echo "                    ";
                    if (($this->getAttribute($context["order"], "status", array()) == "refunding")) {
                        // line 83
                        echo "                      <li><a href=\"javascript:;\" class=\"cancel-refund\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_order_cancel_refund", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消退款"), "html", null, true);
                        echo "</a></li>
                    ";
                    }
                    // line 85
                    echo "                    ";
                    if (($this->getAttribute($context["order"], "status", array()) == "created")) {
                        // line 86
                        echo "
                      <li>
                        <a href=\"";
                        // line 88
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("pay_center_show", array("sn" => $this->getAttribute($context["order"], "sn", array()), "targetType" => $this->getAttribute($context["order"], "targetType", array()))), "html", null, true);
                        echo "\"  style=\"display:block\" >";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("去支付"), "html", null, true);
                        echo "</a>
                      </li>
                      <li><a href=\"javascript:;\" class=\" cancel\" style=\"display:block\" data-url=\"";
                        // line 90
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("my_order_cancel", array("id" => $this->getAttribute($context["order"], "id", array()))), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("取消订单"), "html", null, true);
                        echo "</a></li>

                    ";
                    }
                    // line 93
                    echo "                   ";
                    // line 94
                    echo "                  </ul>
                ";
                }
                // line 96
                echo "              </div>
            ";
            }
            // line 98
            echo "          </td>
        </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 101
            echo "      <tr><td colspan=\"20\"><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无订单记录"), "html", null, true);
            echo "</div></td></tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['order'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 103
        echo "  </tbody>
";
        
        $__internal_8e52dcb79ed99005bd26798444d53b75b2531fb6bf06e09ec9c6f929640fe21c->leave($__internal_8e52dcb79ed99005bd26798444d53b75b2531fb6bf06e09ec9c6f929640fe21c_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Order:order-table.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  288 => 103,  279 => 101,  272 => 98,  268 => 96,  264 => 94,  262 => 93,  254 => 90,  247 => 88,  243 => 86,  240 => 85,  232 => 83,  229 => 82,  225 => 79,  220 => 76,  218 => 75,  212 => 74,  209 => 73,  207 => 72,  204 => 71,  196 => 69,  193 => 68,  185 => 66,  183 => 65,  179 => 63,  175 => 61,  170 => 59,  164 => 57,  162 => 56,  159 => 55,  153 => 52,  150 => 51,  148 => 50,  144 => 49,  140 => 48,  136 => 47,  131 => 45,  128 => 44,  122 => 42,  114 => 40,  112 => 39,  105 => 38,  103 => 37,  96 => 36,  94 => 35,  88 => 33,  85 => 32,  80 => 31,  73 => 27,  67 => 24,  59 => 20,  53 => 18,  51 => 17,  47 => 16,  43 => 15,  39 => 14,  35 => 13,  31 => 11,  29 => 10,  26 => 9,  24 => 8,  22 => 7,);
    }

    public function getSource()
    {
        return "{#
    mode的取值有:
      my:该模式下不显示购买者
      admin:该模式下详情无下拉菜单
      course:该模式下详情无下拉菜单
#}
{% import \"TopxiaWebBundle:Common:data-dict-macro.html.twig\" as dict_macro %}
{% import \"TopxiaWebBundle::macro.html.twig\" as web_macro %}

{% set mode = mode|default(['my']) %}
  <thead>
    <tr>
      <th>{{'订单名称'|trans}}</th>
      <th>{{'创建时间'|trans}}</th>
      <th>{{'状态'|trans}}</th>
      <th>{{'实付(元)'|trans}}</th>
      {% if mode in ['course', 'admin'] %}
        <th>{{'购买者'|trans}}</th>
      {% endif %}
      <th>{{'支付方式'|trans}}
      <span data-toggle=\"popover\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-pay-way-popover\"></span>
        <div class=\"popover-content hidden\"  style=\"width:100px;\">
          <div class=\"popover-item\">
            <div class=\"content\">{{'站外支付为该笔订单是通过导入或者手动添加的方式产生的，故为站外支付'|trans}}</div>
          </div>
        </div></th>
      <th style=\"min-width:100px\">{{'操作'|trans}}</th>
    </tr>
  </thead>
  <tbody>
    {% for order in orders %}
      {% set buyer = users[order.userId]|default(null) %}
        <tr id=\"order-table-{{order.id}}\" style=\"word-break: break-all;word-wrap: break-word;\">
          <td>
            {% if order.targetType == 'course' %}
              <a href=\"{{ path('course_show', {id:order.targetId}) }}\" target=\"_blank\"><strong>{{order.title}}</strong></a>
            {% elseif order.targetType == 'vip' %}
              <a href=\"{{ path('vip', {id:order.targetId}) }}\" target=\"_blank\"><strong>{{order.title}}</strong></a>
            {% elseif order.targetType == 'classroom' %}
              <a href=\"{{ path('classroom_show', {id:order.targetId}) }}\" target=\"_blank\"><strong>{{order.title}}</strong></a>
            {% else %}
              <strong>{{order.title}}</strong>
            {% endif %}
            <br>
            <span class=\"text-muted text-sm\">{{'订单号：%sn%'|trans({'%sn%':order.sn})}}</span>
          </td>
          <td><span class=\"text-muted text-sm\">{{ order.createdTime|date('Y-n-d H:i:s') }}</span></td>
          <td>{{ dict_macro.orderStatus(order.status) }}</td>
          <td><span class=\"money-text\">{{order.amount}}</span></td>
          {% if mode in ['admin', 'course'] %}
            <td>
              {{ web_macro.user_link(buyer) }}
            </td>
          {% endif %}
          <td>
            {% if order.paidTime > 0 %}
              {{ dict_text('payment', order.payment)|default('--') }}
              <br>
              <span class=\"text-muted text-sm\">{{ order.paidTime |date('Y-n-d H:i:s') }}</span>
            {% else %}
              --
            {% endif %}
          </td>
          <td>
            {% if 'admin' == mode  %}
                <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{ path('admin_order_detail', {id:order.id}) }}\">{{'详情'|trans}}</a>
              {% endif %}
            {% if 'course' == mode %}
            <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{ path('course_order_detail', {id:order.id}) }}\">{{'详情'|trans}}</a>
            {% endif %}

            {% if 'my' == mode %}
              <div class=\"btn-group\">
                <a href=\"javascript:;\" class=\"btn btn-sm btn-default\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{ path('web_user_order_detail', {id:order.id}) }}\">{{'详情'|trans}}</a>
                {% if order.status == 'refunding' or  order.status == 'created' %}
                  <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
                  <span class=\"caret\"></span>
                  </a>
                  <ul class=\"dropdown-menu pull-right {# text-right #}\" style=\"min-width: 120px;\" >

                  {# <div class=\"actions\"> #}
                    {% if order.status == 'refunding' %}
                      <li><a href=\"javascript:;\" class=\"cancel-refund\" data-url=\"{{ path('my_order_cancel_refund', {id:order.id}) }}\">{{'取消退款'|trans}}</a></li>
                    {% endif %}
                    {% if order.status == 'created' %}

                      <li>
                        <a href=\"{{path('pay_center_show', {sn:order.sn,targetType:order.targetType})}}\"  style=\"display:block\" >{{'去支付'|trans}}</a>
                      </li>
                      <li><a href=\"javascript:;\" class=\" cancel\" style=\"display:block\" data-url=\"{{ path('my_order_cancel', {id:order.id}) }}\">{{'取消订单'|trans}}</a></li>

                    {% endif %}
                   {#  </div> #}
                  </ul>
                {% endif %}
              </div>
            {% endif %}
          </td>
        </tr>
    {% else %}
      <tr><td colspan=\"20\"><div class=\"empty\">{{'暂无订单记录'|trans}}</div></td></tr>
    {% endfor %}
  </tbody>
";
    }
}

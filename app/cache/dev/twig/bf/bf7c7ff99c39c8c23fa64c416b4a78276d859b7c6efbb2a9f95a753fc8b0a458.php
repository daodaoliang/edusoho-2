<?php

/* TopxiaAdminBundle:Default:cloud-notice.html.twig */
class __TwigTemplate_2340419ae63d70a267de101af7ebbae591ef35c24453a92a926c5379080f3f90 extends Twig_Template
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
        $__internal_1ee6ef824860a28ffaec4481694c6c6b9399510ad113b6aca162707015141474 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ee6ef824860a28ffaec4481694c6c6b9399510ad113b6aca162707015141474->enter($__internal_1ee6ef824860a28ffaec4481694c6c6b9399510ad113b6aca162707015141474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Default:cloud-notice.html.twig"));

        // line 1
        $context["admin_macro"] = $this->loadTemplate("TopxiaAdminBundle::macro.html.twig", "TopxiaAdminBundle:Default:cloud-notice.html.twig", 1);
        // line 2
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isTrial()) {
            // line 3
            echo "  <script>
    var _hmt = _hmt || [];
  </script>
  <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>
  <div class=\"col-md-12\">
    <div class=\"alert alert-warning\">
      <p>
        &nbsp;&nbsp;";
            // line 10
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("欢迎使用，试用将于"), "html", null, true);
            echo " 
        <span style=\"color:#fed032;\"> 
          ";
            // line 12
            if ($this->getAttribute((isset($context["trialTime"]) ? $context["trialTime"] : null), "endTime", array(), "any", true, true)) {
                // line 13
                echo "            ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["trialTime"]) ? $context["trialTime"] : $this->getContext($context, "trialTime")), "endTime", array()), "Y-m-d"), "html", null, true);
                echo " 
          ";
            } else {
                // line 14
                echo " 
            ";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未知时间"), "html", null, true);
                echo "
          ";
            }
            // line 17
            echo "        </span> 
        ";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("到期,剩余"), "html", null, true);
            echo " 
        <span style=\"color:#fed032;\">
          ";
            // line 20
            if ($this->getAttribute((isset($context["trialTime"]) ? $context["trialTime"] : null), "remainDays", array(), "any", true, true)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["trialTime"]) ? $context["trialTime"] : $this->getContext($context, "trialTime")), "remainDays", array()), "html", null, true);
                echo " ";
            } else {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未知"), "html", null, true);
            }
            // line 21
            echo "        </span> ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("天。"), "html", null, true);
            echo "
      </p>
      <p>
        &nbsp; ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您可以联系销售人员购买授权版本，或者延长试用期限。"), "html", null, true);
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("电话："), "html", null, true);
            echo "4008041114 ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("或"), "html", null, true);
            echo "
        <span>
          <a id=\"BizQQWPA\" href=\"javascript:\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\" style='text-decoration:none;'>QQ：800023860 </a>。
        </span>
      </p>
    </div>
  </div>

  <script type=\"text/javascript\">
    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
  </script>
";
        } else {
            // line 36
            echo "    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-150\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("站长公告"), "html", null, true);
            echo "</h3>
        </div>
        <div class=\"panel-body\">
          <ul class=\"admin-notice-list\">
          ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["notices"]) ? $context["notices"] : $this->getContext($context, "notices")));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["notice"]) {
                // line 44
                echo "            <li>
              <a class=\"link-primary\" href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "detailUrl", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["notice"], "content", array()), "html", null, true);
                echo "</a>
              ";
                // line 47
                echo "            </li>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 49
                echo "              <div class=\"empty\"> 暂无公告</div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['notice'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 51
            echo "          </ul>
        </div>
      </div>
    </div>
";
        }
        
        $__internal_1ee6ef824860a28ffaec4481694c6c6b9399510ad113b6aca162707015141474->leave($__internal_1ee6ef824860a28ffaec4481694c6c6b9399510ad113b6aca162707015141474_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:cloud-notice.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  136 => 51,  129 => 49,  123 => 47,  117 => 45,  114 => 44,  109 => 43,  102 => 39,  97 => 36,  79 => 24,  72 => 21,  64 => 20,  59 => 18,  56 => 17,  51 => 15,  48 => 14,  42 => 13,  40 => 12,  35 => 10,  26 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% import \"TopxiaAdminBundle::macro.html.twig\" as admin_macro %}
{% if is_trial() %}
  <script>
    var _hmt = _hmt || [];
  </script>
  <script charset=\"utf-8\" src=\"http://wpa.b.qq.com/cgi/wpa.php\"></script>
  <div class=\"col-md-12\">
    <div class=\"alert alert-warning\">
      <p>
        &nbsp;&nbsp;{{'欢迎使用，试用将于'|trans}} 
        <span style=\"color:#fed032;\"> 
          {% if trialTime.endTime is defined %}
            {{trialTime.endTime|date(\"Y-m-d\")}} 
          {% else %} 
            {{'未知时间'|trans}}
          {% endif %}
        </span> 
        {{'到期,剩余'|trans}} 
        <span style=\"color:#fed032;\">
          {% if trialTime.remainDays is defined %} {{ trialTime.remainDays }} {% else %}{{'未知'|trans}}{% endif %}
        </span> {{'天。'|trans}}
      </p>
      <p>
        &nbsp; {{'您可以联系销售人员购买授权版本，或者延长试用期限。'|trans}}{{'电话：'|trans}}4008041114 {{'或'|trans}}
        <span>
          <a id=\"BizQQWPA\" href=\"javascript:\" onclick=\"_hmt.push(['_trackEvent', 'advisory', 'click', 'qq'])\" style='text-decoration:none;'>QQ：800023860 </a>。
        </span>
      </p>
    </div>
  </div>

  <script type=\"text/javascript\">
    BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800023860, selector: 'BizQQWPA'}); 
  </script>
{% else %}
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-150\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">{{'站长公告'|trans}}</h3>
        </div>
        <div class=\"panel-body\">
          <ul class=\"admin-notice-list\">
          {% for notice in notices %}
            <li>
              <a class=\"link-primary\" href=\"{{notice.detailUrl}}\" target=\"_blank\">{{notice.content}}</a>
              {# <span>{{notice.createdTime|date(\"Y-m-d H:i:s\")}}</span>#}
            </li>
            {% else %}
              <div class=\"empty\"> 暂无公告</div>
          {% endfor %}
          </ul>
        </div>
      </div>
    </div>
{% endif %}";
    }
}

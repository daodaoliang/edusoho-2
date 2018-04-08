<?php

/* TopxiaAdminBundle:Default:index.html.twig */
class __TwigTemplate_d37708dab667ef5cb340e9eba5f7a4f7dc31eea4ff48c71b5f59e1dd3fcb691d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'container' => array($this, 'block_container'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_97715c083fad97149a1d902f2643bc44f9b92bb74df982abeb9be3c053f46d51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97715c083fad97149a1d902f2643bc44f9b92bb74df982abeb9be3c053f46d51->enter($__internal_97715c083fad97149a1d902f2643bc44f9b92bb74df982abeb9be3c053f46d51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Default:index.html.twig"));

        // line 3
        $context["panel"] = "dashboard";
        // line 4
        $context["script_controller"] = "default/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_97715c083fad97149a1d902f2643bc44f9b92bb74df982abeb9be3c053f46d51->leave($__internal_97715c083fad97149a1d902f2643bc44f9b92bb74df982abeb9be3c053f46d51_prof);

    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        $__internal_4fca46ce200c24f72f44d19b1ff7173a22b4bf0e6d8f8fa2bfbd4eb9e5e30eff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4fca46ce200c24f72f44d19b1ff7173a22b4bf0e6d8f8fa2bfbd4eb9e5e30eff->enter($__internal_4fca46ce200c24f72f44d19b1ff7173a22b4bf0e6d8f8fa2bfbd4eb9e5e30eff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理后台"), "html", null, true);
        
        $__internal_4fca46ce200c24f72f44d19b1ff7173a22b4bf0e6d8f8fa2bfbd4eb9e5e30eff->leave($__internal_4fca46ce200c24f72f44d19b1ff7173a22b4bf0e6d8f8fa2bfbd4eb9e5e30eff_prof);

    }

    // line 5
    public function block_container($context, array $blocks = array())
    {
        $__internal_057ec96011c5113a2b1c7bf77e7cf91075c8bdc7760a5a22ecdabdcceef70611 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_057ec96011c5113a2b1c7bf77e7cf91075c8bdc7760a5a22ecdabdcceef70611->enter($__internal_057ec96011c5113a2b1c7bf77e7cf91075c8bdc7760a5a22ecdabdcceef70611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "container"));

        // line 6
        echo "  ";
        // line 7
        echo "  ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaAdminBundle:Default:validateDomain"));
        echo "
  <div class=\"row\">
    ";
        // line 9
        if ( !(_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 1)) {
            // line 10
            echo "      ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaAdminBundle:Default:getCloudNotices"));
            echo "
    ";
        }
        // line 12
        echo "
    <div class=\"
      ";
        // line 14
        if ( !(_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 1)) {
            // line 15
            echo "        col-md-6
      ";
        } else {
            // line 17
            echo "        col-md-12
      ";
        }
        // line 19
        echo "      \">
      <div class=\"panel panel-default panel-150\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("状态栏"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\" id=\"system-status\" data-url=\"";
        // line 24
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_system_status");
        echo "\">
          <div class=\"empty\">";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在载入数据，请稍等。"), "html", null, true);
        echo "</div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"panel panel-default\">
    <div class=\"panel-heading clearfix\">
      <h3 class=\"panel-title\">
        ";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("今日数据"), "html", null, true);
        echo " 
        <span data-toggle=\"popover\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-today-data-popover\"></span>
        <div class=\"popover-content hidden\">
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("登录用户"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("15分钟内活动的登录用户"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("在线总数"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("15分钟内活动用户数，包括登录用户及未登录用户"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增注册"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("平台新增用户数，包括自主注册、第三方注册及导入"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增学员人次"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("今日加入课程和班级的总人次，1个学员加入2个课程，算2人次"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增会员"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 55
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("今日购买会员的人数"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未回复问答"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("今日新产生问题中未回答的数量"), "html", null, true);
        echo "</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未回复总数"), "html", null, true);
        echo "</div>
            <div class=\"content\">";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("到目前为止，未回答问题总数"), "html", null, true);
        echo "</div>
          </div>
        </div>
      </h3>

    </div>
    <div class=\"panel-body\" id=\"site-overview-table\" data-url=\"";
        // line 69
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_operation_analysis");
        echo "\">
      <div class=\"empty\">";
        // line 70
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在载入数据，请稍等。"), "html", null, true);
        echo "</div>
    </div>
  </div>
  ";
        // line 109
        echo "
  <div class=\"row\">
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 115
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-study-switch-button\"
                      data-time=\"";
        // line 118
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 119
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_study_statistic", array("period" => "week"));
        echo "\">最近7天
              </button>
              <button type=\"button\" class=\"btn btn-default js-study-switch-button\"
                      data-time=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 123
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_study_statistic", array("period" => "month"));
        echo "\">最近30天
              </button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 127
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("订单统计"), "html", null, true);
        echo "
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            <div class=\"popover-content hidden\">
              <div class=\"popover-item\">
                <div class=\"title\">";
        // line 132
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("新增订单"), "html", null, true);
        echo "</div>
                <div class=\"content\">";
        // line 133
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("平台当日产生的所有订单，包括免费和付费"), "html", null, true);
        echo "</div>
              </div>
              <div class=\"popover-item\">
                <div class=\"title\">";
        // line 136
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("付费订单"), "html", null, true);
        echo "</div>
                <div class=\"content\">";
        // line 137
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("平台当日产生的订单价格大于0元的订单"), "html", null, true);
        echo "</div>
              </div>
            </div>
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-count-statistic\"
             data-url=\"";
        // line 143
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_study_statistic", array("period" => "week"));
        echo "\" style=\"height:320px;\">

        </div>
      </div>
    </div>
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 152
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-order-switch-button\"
                      data-time=\"";
        // line 155
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 156
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_statistic", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近7天"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default js-order-switch-button\"
                      data-time=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 159
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_statistic", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近30天"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("付费订单统计"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"pay-order-statistic\"
             data-url=\"";
        // line 165
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_order_statistic", array("period" => "week"));
        echo "\" style=\"height:320px;\">

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">";
        // line 177
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo " </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-lesson-switch-button\"
                      data-time=\"";
        // line 180
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 181
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_lesson_learn_statistic", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近7天"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default js-lesson-switch-button\"
                      data-time=\"";
        // line 183
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 184
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_lesson_learn_statistic", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近30天"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 187
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时完成数"), "html", null, true);
        echo "
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            <div class=\"popover-content hidden\">
              <div class=\"popover-item\">
                <div class=\"content\">";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("点击\"学过了\"的课时数量"), "html", null, true);
        echo "</div>
              </div>
            </div>
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-lesson-count-statistic\"
             data-url=\"";
        // line 198
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_lesson_learn_statistic", array("period" => "week"));
        echo "\" style=\"height:360px;\">

        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-course-switch-button\"
                      data-time=\"";
        // line 209
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "weekDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_explore", array("period" => "week"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近7天"), "html", null, true);
        echo "</button>
              <button type=\"button\" class=\"btn btn-default  js-course-switch-button\"
                      data-time=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dates"]) ? $context["dates"] : $this->getContext($context, "dates")), "monthDate", array()), "html", null, true);
        echo "~";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y-m-d"), "html", null, true);
        echo "\"
                      data-url=\"";
        // line 213
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_explore", array("period" => "month"));
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近30天"), "html", null, true);
        echo "</button>
            </div>
          </div>
          <h3 class=\"panel-title\">";
        // line 216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程排行榜"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"course-explore-list\"
             data-url=\"";
        // line 219
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_course_explore", array("period" => "week"));
        echo "\">

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-4\">

      <div class=\"panel panel-default panel-420 js-course-question-list\">
        <div class=\"panel-heading\">
          <a class=\"pull-right\" href=\"";
        // line 231
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_question", array("postStatus" => "unPosted"));
        echo "\"
          >";
        // line 232
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
        echo "</a>
          <h3 class=\"panel-title\">";
        // line 233
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新问答"), "html", null, true);
        echo "</h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 236
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaAdminBundle:Default:unsolvedQuestionsBlock"));
        echo "
        </div>
      </div>

    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <a href=\"";
        // line 244
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_review");
        echo "\" class=\"pull-right\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多"), "html", null, true);
        echo "</a>
          <h3 class=\"panel-title\">
            ";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新评价"), "html", null, true);
        echo "
          </h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 250
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaAdminBundle:Default:courseReview"));
        echo "
        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default search-panel panel-420\">
        <div class=\"panel-heading\">
          ";
        // line 258
        echo "          <h3 class=\"panel-title\">
            ";
        // line 259
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("热门搜索"), "html", null, true);
        echo "
            <small>";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最近7天"), "html", null, true);
        echo "</small>
          </h3>
        </div>
        <div class=\"panel-body\">
          ";
        // line 264
        if ( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("cloud_search.search_enabled")) {
            // line 265
            echo "            <div class=\"empty\">
              <a target=\"_blank\" href=\"";
            // line 266
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_edu_cloud_search");
            echo "\">免费接入云搜索获取热门搜索关键词</a>
            </div>
          ";
        } else {
            // line 269
            echo "            ";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaAdminBundle:Default:cloudSearchRanking"));
            echo "
          ";
        }
        // line 271
        echo "        </div>
      </div>
    </div>
  </div>
";
        
        $__internal_057ec96011c5113a2b1c7bf77e7cf91075c8bdc7760a5a22ecdabdcceef70611->leave($__internal_057ec96011c5113a2b1c7bf77e7cf91075c8bdc7760a5a22ecdabdcceef70611_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  538 => 271,  532 => 269,  526 => 266,  523 => 265,  521 => 264,  514 => 260,  510 => 259,  507 => 258,  497 => 250,  490 => 246,  483 => 244,  472 => 236,  466 => 233,  462 => 232,  458 => 231,  443 => 219,  437 => 216,  429 => 213,  423 => 212,  416 => 210,  410 => 209,  396 => 198,  387 => 192,  379 => 187,  371 => 184,  365 => 183,  358 => 181,  352 => 180,  344 => 177,  329 => 165,  323 => 162,  315 => 159,  309 => 158,  302 => 156,  296 => 155,  288 => 152,  276 => 143,  267 => 137,  263 => 136,  257 => 133,  253 => 132,  245 => 127,  238 => 123,  232 => 122,  226 => 119,  220 => 118,  212 => 115,  204 => 109,  198 => 70,  194 => 69,  185 => 63,  181 => 62,  175 => 59,  171 => 58,  165 => 55,  161 => 54,  155 => 51,  151 => 50,  145 => 47,  141 => 46,  135 => 43,  131 => 42,  125 => 39,  121 => 38,  114 => 34,  102 => 25,  98 => 24,  93 => 22,  88 => 19,  84 => 17,  80 => 15,  78 => 14,  74 => 12,  68 => 10,  66 => 9,  60 => 7,  58 => 6,  52 => 5,  40 => 2,  33 => 1,  31 => 4,  29 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}
{% block title %}{{ '管理后台'|trans }}{% endblock %}
{% set panel = 'dashboard' %}
{% set script_controller = 'default/index' %}
{% block container %}
  {# 域名检查提示#}
  {{ render(controller('TopxiaAdminBundle:Default:validateDomain')) }}
  <div class=\"row\">
    {% if not (setting('copyright.thirdCopyright')|default(0) == 1) %}
      {{ render(controller('TopxiaAdminBundle:Default:getCloudNotices')) }}
    {% endif %}

    <div class=\"
      {% if not (setting('copyright.thirdCopyright')|default(0) == 1) %}
        col-md-6
      {% else %}
        col-md-12
      {% endif %}
      \">
      <div class=\"panel panel-default panel-150\">
        <div class=\"panel-heading\">
          <h3 class=\"panel-title\">{{ '状态栏'|trans }}</h3>
        </div>
        <div class=\"panel-body\" id=\"system-status\" data-url=\"{{ path('admin_system_status') }}\">
          <div class=\"empty\">{{ '正在载入数据，请稍等。'|trans }}</div>
        </div>
      </div>
    </div>
  </div>

  <div class=\"panel panel-default\">
    <div class=\"panel-heading clearfix\">
      <h3 class=\"panel-title\">
        {{ '今日数据'|trans }} 
        <span data-toggle=\"popover\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-today-data-popover\"></span>
        <div class=\"popover-content hidden\">
          <div class=\"popover-item\">
            <div class=\"title\">{{ '登录用户'|trans }}</div>
            <div class=\"content\">{{ '15分钟内活动的登录用户'|trans }}</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">{{ '在线总数'|trans }}</div>
            <div class=\"content\">{{ '15分钟内活动用户数，包括登录用户及未登录用户'|trans }}</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">{{ '新增注册'|trans }}</div>
            <div class=\"content\">{{ '平台新增用户数，包括自主注册、第三方注册及导入'|trans }}</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">{{ '新增学员人次'|trans }}</div>
            <div class=\"content\">{{ '今日加入课程和班级的总人次，1个学员加入2个课程，算2人次'|trans }}</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">{{ '新增会员'|trans }}</div>
            <div class=\"content\">{{ '今日购买会员的人数'|trans }}</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">{{ '未回复问答'|trans }}</div>
            <div class=\"content\">{{ '今日新产生问题中未回答的数量'|trans }}</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">{{ '未回复总数'|trans }}</div>
            <div class=\"content\">{{ '到目前为止，未回答问题总数'|trans }}</div>
          </div>
        </div>
      </h3>

    </div>
    <div class=\"panel-body\" id=\"site-overview-table\" data-url=\"{{ path('admin_operation_analysis') }}\">
      <div class=\"empty\">{{ '正在载入数据，请稍等。'|trans }}</div>
    </div>
  </div>
  {#
  <div class=\"panel panel-default panel-380\">
    <div class=\"panel-heading\">
      <div class=\"pull-right\">
        <span class=\"mrl text-sm js-data-switch-time\">{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}</span>
        <div class=\"btn-group btn-group-xs\">
          <button type=\"button\" class=\"btn btn-primary js-user-switch-button\"
                  data-time=\"{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}\"
                  data-url=\"{{ path('admin_user_statistic', {period: 'week'}) }}\">最近7天
          </button>
          <button type=\"button\" class=\"btn btn-default js-user-switch-button\"
                  data-time=\"{{ dates.monthDate }}~{{ 'now'|date('Y-m-d') }}\"
                  data-url=\"{{ path('admin_user_statistic', {period: 'month'}) }}\">最近30天
          </button>
        </div>
      </div>
      <h3 class=\"panel-title\">{{ '用户统计'|trans }}
        <span data-toggle=\"popover\" class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
        <div class=\"popover-content hidden\">
          <div class=\"popover-item\">
            <div class=\"title\">{{ '活跃用户数'|trans }}</div>
            <div class=\"content\">{{ '在30天内登录过系统的用户即为活跃用户'|trans }}</div>
          </div>
          <div class=\"popover-item\">
            <div class=\"title\">{{ '流失用户数'|trans }}</div>
            <div class=\"content\">{{ '在30天内没有登录过系统的注册用户即为流失用户'|trans }}</div>
          </div>
        </div>
      </h3>
    </div>
    <div class=\"panel-body js-statistic-areas\" id=\"user-statistic\"
         data-url=\"{{ path('admin_user_statistic', {period: 'week'}) }}\" style=\"height:320px;\">
      <div class=\"empty\">{{ '正在载入数据，请稍等。'|trans }}</div>
    </div>
  </div>
  #}

  <div class=\"row\">
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }} </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-study-switch-button\"
                      data-time=\"{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_study_statistic', {period: 'week'}) }}\">最近7天
              </button>
              <button type=\"button\" class=\"btn btn-default js-study-switch-button\"
                      data-time=\"{{ dates.monthDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_study_statistic', {period: 'month'}) }}\">最近30天
              </button>
            </div>
          </div>
          <h3 class=\"panel-title\">{{ '订单统计'|trans }}
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            <div class=\"popover-content hidden\">
              <div class=\"popover-item\">
                <div class=\"title\">{{ '新增订单'|trans }}</div>
                <div class=\"content\">{{ '平台当日产生的所有订单，包括免费和付费'|trans }}</div>
              </div>
              <div class=\"popover-item\">
                <div class=\"title\">{{ '付费订单'|trans }}</div>
                <div class=\"content\">{{ '平台当日产生的订单价格大于0元的订单'|trans }}</div>
              </div>
            </div>
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-count-statistic\"
             data-url=\"{{ path('admin_study_statistic', {period: 'week'}) }}\" style=\"height:320px;\">

        </div>
      </div>
    </div>
    <div class=\"col-md-6\">
      <div class=\"panel panel-default panel-380\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }} </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-order-switch-button\"
                      data-time=\"{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_order_statistic', {period: 'week'}) }}\">{{ '最近7天'|trans }}</button>
              <button type=\"button\" class=\"btn btn-default js-order-switch-button\"
                      data-time=\"{{ dates.monthDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_order_statistic',{period: 'month'}) }}\">{{ '最近30天'|trans }}</button>
            </div>
          </div>
          <h3 class=\"panel-title\">{{ '付费订单统计'|trans }}</h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"pay-order-statistic\"
             data-url=\"{{ path('admin_order_statistic', {period: 'week'}) }}\" style=\"height:320px;\">

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-8\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <span class=\"mrl text-sm js-data-switch-time\">{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }} </span>
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-lesson-switch-button\"
                      data-time=\"{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_lesson_learn_statistic', {period: 'week'}) }}\">{{ '最近7天'|trans }}</button>
              <button type=\"button\" class=\"btn btn-default js-lesson-switch-button\"
                      data-time=\"{{ dates.monthDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_lesson_learn_statistic', {period: 'month'}) }}\">{{ '最近30天'|trans }}</button>
            </div>
          </div>
          <h3 class=\"panel-title\">{{ '课时完成数'|trans }}
            <span data-toggle=\"popover\"
                  class=\"glyphicon glyphicon-question-sign color-gray text-sm js-data-popover\"></span>
            <div class=\"popover-content hidden\">
              <div class=\"popover-item\">
                <div class=\"content\">{{ '点击\"学过了\"的课时数量'|trans }}</div>
              </div>
            </div>
          </h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"study-lesson-count-statistic\"
             data-url=\"{{ path('admin_lesson_learn_statistic', {period: 'week'}) }}\" style=\"height:360px;\">

        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <div class=\"pull-right\">
            <div class=\"btn-group btn-group-xs\">
              <button type=\"button\" class=\"btn btn-primary js-course-switch-button\"
                      data-time=\"{{ dates.weekDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_course_explore', {period: 'week'}) }}\">{{ '最近7天'|trans }}</button>
              <button type=\"button\" class=\"btn btn-default  js-course-switch-button\"
                      data-time=\"{{ dates.monthDate }}~{{ 'now'|date('Y-m-d') }}\"
                      data-url=\"{{ path('admin_course_explore', {period: 'month'}) }}\">{{ '最近30天'|trans }}</button>
            </div>
          </div>
          <h3 class=\"panel-title\">{{ '课程排行榜'|trans }}</h3>
        </div>
        <div class=\"panel-body js-statistic-areas\" id=\"course-explore-list\"
             data-url=\"{{ path('admin_course_explore', {period: 'week'}) }}\">

        </div>
      </div>
    </div>
  </div>

  <div class=\"row\">
    <div class=\"col-md-4\">

      <div class=\"panel panel-default panel-420 js-course-question-list\">
        <div class=\"panel-heading\">
          <a class=\"pull-right\" href=\"{{ url('admin_question', {postStatus: 'unPosted'}) }}\"
          >{{ '更多'|trans }}</a>
          <h3 class=\"panel-title\">{{ '最新问答'|trans }}</h3>
        </div>
        <div class=\"panel-body\">
          {{ render(controller('TopxiaAdminBundle:Default:unsolvedQuestionsBlock')) }}
        </div>
      </div>

    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default panel-420\">
        <div class=\"panel-heading\">
          <a href=\"{{ path('admin_review') }}\" class=\"pull-right\">{{ '更多'|trans }}</a>
          <h3 class=\"panel-title\">
            {{ '最新评价'|trans }}
          </h3>
        </div>
        <div class=\"panel-body\">
          {{ render(controller('TopxiaAdminBundle:Default:courseReview')) }}
        </div>
      </div>
    </div>
    <div class=\"col-md-4\">
      <div class=\"panel panel-default search-panel panel-420\">
        <div class=\"panel-heading\">
          {# <a href=\"\" class=\"pull-right\">{{ '更多'|trans }}</a>#}
          <h3 class=\"panel-title\">
            {{ '热门搜索'|trans }}
            <small>{{ '最近7天'|trans }}</small>
          </h3>
        </div>
        <div class=\"panel-body\">
          {% if not setting('cloud_search.search_enabled') %}
            <div class=\"empty\">
              <a target=\"_blank\" href=\"{{ path('admin_edu_cloud_search') }}\">免费接入云搜索获取热门搜索关键词</a>
            </div>
          {% else %}
            {{ render(controller('TopxiaAdminBundle:Default:cloudSearchRanking')) }}
          {% endif %}
        </div>
      </div>
    </div>
  </div>
{% endblock %}";
    }
}

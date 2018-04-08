<?php

/* TopxiaWebBundle:LiveCourse:live-tab.html.twig */
class __TwigTemplate_cfe5085fa78a33c7fce6f3cbd3c209eb9fd87687dd538f6fc65564c312d46648 extends Twig_Template
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
        $__internal_93d145a60d003af09246b51f3c3410091976a87eefe668d260f8753f3d1d83e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_93d145a60d003af09246b51f3c3410091976a87eefe668d260f8753f3d1d83e7->enter($__internal_93d145a60d003af09246b51f3c3410091976a87eefe668d260f8753f3d1d83e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:LiveCourse:live-tab.html.twig"));

        // line 1
        echo "<div class=\"panel panel-default es-live-list\">
    <div class=\"panel-body\">
      <ul class=\"clearfix\">
      \t";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dateTabs"]) ? $context["dateTabs"] : $this->getContext($context, "dateTabs")));
        foreach ($context['_seq'] as $context["_key"] => $context["dateTab"]) {
            // line 5
            echo "\t        <li ";
            if (($context["dateTab"] == "today")) {
                echo "class=\"active\"";
            }
            echo ">
\t          <a href=\"#";
            // line 6
            echo twig_escape_filter($this->env, $context["dateTab"], "html", null, true);
            echo "\" data-toggle=\"tab\">";
            if (($context["dateTab"] == "today")) {
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("今日直播"), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $context["dateTab"], "html", null, true);
            }
            echo "</a>
\t        </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dateTab'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "        
      </ul>
      <div class=\"tab-content\">
      \t";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liveTabs"]) ? $context["liveTabs"] : $this->getContext($context, "liveTabs")));
        foreach ($context['_seq'] as $context["date"] => $context["liveList"]) {
            // line 13
            echo "\t        <div class=\"tab-pane ";
            if (($context["date"] == "today")) {
                echo "active";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $context["date"], "html", null, true);
            echo "\">
\t        \t";
            // line 14
            if (( !(($this->getAttribute($context["liveList"], "current", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["liveList"], "current", array()), null)) : (null)) &&  !(($this->getAttribute($context["liveList"], "future", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["liveList"], "future", array()), null)) : (null)))) {
                // line 15
                echo "\t\t\t\t\t\t\t<div class=\"empty\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("今日暂无直播"), "html", null, true);
                echo "</div>
\t\t\t\t\t\t";
            } else {
                // line 17
                echo "\t\t\t\t\t\t\t<div class=\"es-live-item\">
\t          \t";
                // line 18
                if (($context["date"] == "today")) {
                    // line 19
                    echo "\t\t           \t<div class=\"live-content living mbl\">
\t\t\t\t\t\t\t\t\t";
                    // line 20
                    if ((($this->getAttribute($context["liveList"], "current", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["liveList"], "current", array()), null)) : (null))) {
                        // line 21
                        echo "\t\t\t              <div class=\"timeline\">
\t\t\t               <span class=\"time-icon\"><em></em></span>
\t\t\t               <span class=\"label label-success\">";
                        // line 23
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在直播课时"), "html", null, true);
                        echo "</span>
\t\t\t              </div>
\t\t\t              <ul class=\"live-courses\">
\t\t\t              \t";
                        // line 26
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["liveList"], "current", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
                            // line 27
                            echo "\t\t\t                \t<li><a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_learn", array("id" => $this->getAttribute($context["list"], "courseId", array()))), "html", null, true);
                            echo "#lesson/";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "id", array()), "html", null, true);
                            echo "\"><span>";
                            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["list"], "startTime", array()), "H:i"), "html", null, true);
                            echo "</span>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "title", array()), "html", null, true);
                            echo "</a></li>
\t\t\t                ";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 29
                        echo "\t\t\t              </ul>
\t\t\t            ";
                    }
                    // line 31
                    echo "\t\t            </div>
\t\t          ";
                }
                // line 33
                echo "
\t            <div class=\"live-content live\">
\t            \t";
                // line 35
                if ((($this->getAttribute($context["liveList"], "future", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["liveList"], "future", array()), null)) : (null))) {
                    // line 36
                    echo "\t\t              <div class=\"timeline\">
\t\t                <span class=\"time-icon\"><em></em></span>
\t\t                ";
                    // line 38
                    if (($context["date"] == "today")) {
                        // line 39
                        echo "\t\t               \t\t<span class=\"label label-info\">";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("即将直播课时"), "html", null, true);
                        echo "</span>
\t\t                ";
                    }
                    // line 41
                    echo "\t\t              </div>
\t\t              <ul class=\"live-courses\">
\t\t                ";
                    // line 43
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["liveList"], "future", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
                        // line 44
                        echo "\t\t                \t<li><a href=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_learn", array("id" => $this->getAttribute($context["list"], "courseId", array()))), "html", null, true);
                        echo "#lesson/";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "id", array()), "html", null, true);
                        echo "\" target=\"_blank\"><span>";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["list"], "startTime", array()), "H:i"), "html", null, true);
                        echo "</span>";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "title", array()), "html", null, true);
                        echo "</a></li>
\t\t                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 46
                    echo "\t\t              </ul>
\t\t            ";
                }
                // line 48
                echo "\t            </div>
\t          </div>
\t        \t";
            }
            // line 51
            echo "\t          
\t        </div>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['date'], $context['liveList'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "
      </div>
    </div>
  </div>
";
        
        $__internal_93d145a60d003af09246b51f3c3410091976a87eefe668d260f8753f3d1d83e7->leave($__internal_93d145a60d003af09246b51f3c3410091976a87eefe668d260f8753f3d1d83e7_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LiveCourse:live-tab.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  184 => 54,  176 => 51,  171 => 48,  167 => 46,  152 => 44,  148 => 43,  144 => 41,  138 => 39,  136 => 38,  132 => 36,  130 => 35,  126 => 33,  122 => 31,  118 => 29,  103 => 27,  99 => 26,  93 => 23,  89 => 21,  87 => 20,  84 => 19,  82 => 18,  79 => 17,  73 => 15,  71 => 14,  62 => 13,  58 => 12,  53 => 9,  38 => 6,  31 => 5,  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"panel panel-default es-live-list\">
    <div class=\"panel-body\">
      <ul class=\"clearfix\">
      \t{% for dateTab in dateTabs %}
\t        <li {% if dateTab == 'today' %}class=\"active\"{% endif %}>
\t          <a href=\"#{{ dateTab }}\" data-toggle=\"tab\">{% if dateTab == 'today' %}{{'今日直播'|trans}}{% else %}{{ dateTab }}{% endif %}</a>
\t        </li>
        {% endfor %}
        
      </ul>
      <div class=\"tab-content\">
      \t{% for date,liveList in liveTabs %}
\t        <div class=\"tab-pane {% if date == 'today' %}active{% endif %}\" id=\"{{ date }}\">
\t        \t{% if not liveList.current|default(null) and not liveList.future|default(null) %}
\t\t\t\t\t\t\t<div class=\"empty\">{{'今日暂无直播'|trans}}</div>
\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t<div class=\"es-live-item\">
\t          \t{% if date == 'today' %}
\t\t           \t<div class=\"live-content living mbl\">
\t\t\t\t\t\t\t\t\t{% if liveList.current|default(null) %}
\t\t\t              <div class=\"timeline\">
\t\t\t               <span class=\"time-icon\"><em></em></span>
\t\t\t               <span class=\"label label-success\">{{'正在直播课时'|trans}}</span>
\t\t\t              </div>
\t\t\t              <ul class=\"live-courses\">
\t\t\t              \t{% for list in liveList.current %}
\t\t\t                \t<li><a href=\"{{ path('course_learn', {id:list.courseId}) }}#lesson/{{ list.id }}\"><span>{{ list.startTime|date('H:i') }}</span>{{ list.title }}</a></li>
\t\t\t                {% endfor %}
\t\t\t              </ul>
\t\t\t            {% endif %}
\t\t            </div>
\t\t          {% endif %}

\t            <div class=\"live-content live\">
\t            \t{% if liveList.future|default(null) %}
\t\t              <div class=\"timeline\">
\t\t                <span class=\"time-icon\"><em></em></span>
\t\t                {% if date == 'today' %}
\t\t               \t\t<span class=\"label label-info\">{{'即将直播课时'|trans}}</span>
\t\t                {% endif %}
\t\t              </div>
\t\t              <ul class=\"live-courses\">
\t\t                {% for list in liveList.future %}
\t\t                \t<li><a href=\"{{ path('course_learn', {id:list.courseId}) }}#lesson/{{ list.id }}\" target=\"_blank\"><span>{{ list.startTime|date('H:i') }}</span>{{ list.title }}</a></li>
\t\t                {% endfor %}
\t\t              </ul>
\t\t            {% endif %}
\t            </div>
\t          </div>
\t        \t{% endif %}
\t          
\t        </div>
\t\t{% endfor %}

      </div>
    </div>
  </div>
";
    }
}

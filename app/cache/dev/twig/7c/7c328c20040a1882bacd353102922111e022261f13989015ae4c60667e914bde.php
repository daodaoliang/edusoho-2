<?php

/* TopxiaWebBundle:Default:live-course.html.twig */
class __TwigTemplate_cec44c8c2c141d2ccce4fc0c16af0a760c1f6ab8e6744896288d675b676d2f12 extends Twig_Template
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
        $__internal_acacb00fea488d34d66902e99efe63b1ac9f7dbaa87e9ef23d3dcfd13d0d9a6c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_acacb00fea488d34d66902e99efe63b1ac9f7dbaa87e9ef23d3dcfd13d0d9a6c->enter($__internal_acacb00fea488d34d66902e99efe63b1ac9f7dbaa87e9ef23d3dcfd13d0d9a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Default:live-course.html.twig"));

        // line 1
        $context["RecentLiveCourses"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("RecentLiveCourses", array("count" => 4));
        // line 2
        if ((isset($context["RecentLiveCourses"]) ? $context["RecentLiveCourses"] : $this->getContext($context, "RecentLiveCourses"))) {
            // line 3
            echo "  <section class=\"live-course-section ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")), "html", null, true);
            echo "\">
    <div class=\"container\">
      <div class=\"text-line gray\">
        <h5><span>";
            // line 6
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultTitle", array()))), "html", null, true);
            echo "</span><div class=\"line\"></div></h5>
        <div class=\"subtitle\">";
            // line 7
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultSubTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultSubTitle", array()))), "html", null, true);
            echo "</div>
      </div>
      <div class=\"course-list\"> 
        <div class=\"row\"> 
          ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["RecentLiveCourses"]) ? $context["RecentLiveCourses"] : $this->getContext($context, "RecentLiveCourses")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
                echo " 
            <div class=\"col-lg-3 col-md-4 col-xs-6\">
              ";
                // line 13
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Default:live-course.html.twig", 13)->display(array_merge($context, array("course" => $context["course"])));
                echo " 

              ";
                // line 15
                $context["lesson"] = (($this->getAttribute($context["course"], "lesson", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($context["course"], "lesson", array(), "array"), null)) : (null));
                // line 16
                echo "              ";
                if ((((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")) && (twig_date_format_filter($this->env, "now", "U") >= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "startTime", array()))) && (twig_date_format_filter($this->env, "now", "U") <= $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "endTime", array())))) {
                    // line 17
                    echo "                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-live  btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    ";
                    // line 22
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("正在直播"), "html", null, true);
                    echo "
                  </div>
                </div>
              ";
                } else {
                    // line 26
                    echo "                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    ";
                    // line 31
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["lesson"]) ? $context["lesson"] : $this->getContext($context, "lesson")), "startTime", array()), "n月j日 H:i"), "html", null, true);
                    echo "
                  </div>
                </div>
              ";
                }
                // line 35
                echo "
            </div>
          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 38
            echo "
          ";
            // line 39
            $context["emptyCourseNum"] = (4 - twig_length_filter($this->env, (isset($context["RecentLiveCourses"]) ? $context["RecentLiveCourses"] : $this->getContext($context, "RecentLiveCourses"))));
            // line 40
            echo "          ";
            if (((isset($context["emptyCourseNum"]) ? $context["emptyCourseNum"] : $this->getContext($context, "emptyCourseNum")) > 0)) {
                // line 41
                echo "            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["emptyCourseNum"]) ? $context["emptyCourseNum"] : $this->getContext($context, "emptyCourseNum"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 42
                    echo "              <div class=\"col-lg-3 col-md-4 col-sm-6 visible-lg\">
                <div class=\"course-item course-default\">
                  <i class=\"es-icon es-icon-videocam\"></i>
                  <br>
                  ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("敬请期待"), "html", null, true);
                    echo "
                </div>
                <div class=\"course-date\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-accesstime\"></i>
                  </div>
                </div>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 55
                echo "          ";
            }
            // line 56
            echo "        </div>
      </div>
      <div class=\"section-more-btn\">
        <a href=\"";
            // line 59
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("live_course_explore");
            echo "\" class=\"btn btn-default btn-lg\">
          ";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多直播"), "html", null, true);
            echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
        </a>
      </div>
    </div>
  </section>
";
        }
        
        $__internal_acacb00fea488d34d66902e99efe63b1ac9f7dbaa87e9ef23d3dcfd13d0d9a6c->leave($__internal_acacb00fea488d34d66902e99efe63b1ac9f7dbaa87e9ef23d3dcfd13d0d9a6c_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:live-course.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 60,  160 => 59,  155 => 56,  152 => 55,  137 => 46,  131 => 42,  126 => 41,  123 => 40,  121 => 39,  118 => 38,  102 => 35,  95 => 31,  88 => 26,  81 => 22,  74 => 17,  71 => 16,  69 => 15,  64 => 13,  44 => 11,  37 => 7,  33 => 6,  26 => 3,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% set RecentLiveCourses = data('RecentLiveCourses',{ 'count':4}) %}
{% if RecentLiveCourses %}
  <section class=\"live-course-section {{config.background|default(\"\")}}\">
    <div class=\"container\">
      <div class=\"text-line gray\">
        <h5><span>{{ config.title|default(config.defaultTitle) }}</span><div class=\"line\"></div></h5>
        <div class=\"subtitle\">{{ config.subTitle|default(config.defaultSubTitle) }}</div>
      </div>
      <div class=\"course-list\"> 
        <div class=\"row\"> 
          {% for course in RecentLiveCourses %} 
            <div class=\"col-lg-3 col-md-4 col-xs-6\">
              {% include 'TopxiaWebBundle:Course:Widget/course-grid.html.twig' with {course:course} %} 

              {% set lesson = course['lesson']|default(null) %}
              {% if lesson and \"now\"|date(\"U\") >= lesson.startTime and \"now\"|date(\"U\") <= lesson.endTime %}
                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-live  btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    {{'正在直播'|trans}}
                  </div>
                </div>
              {% else %}
                <div class=\"course-date visible-lg\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-videocam\"></i>
                  </div>
                  <div class=\"date\">
                    {{ lesson.startTime|date('n月j日 H:i') }}
                  </div>
                </div>
              {% endif %}

            </div>
          {% endfor %}

          {% set emptyCourseNum = 4 - RecentLiveCourses|length %}
          {% if emptyCourseNum > 0 %}
            {% for i in range(1, emptyCourseNum) %}
              <div class=\"col-lg-3 col-md-4 col-sm-6 visible-lg\">
                <div class=\"course-item course-default\">
                  <i class=\"es-icon es-icon-videocam\"></i>
                  <br>
                  {{'敬请期待'|trans}}
                </div>
                <div class=\"course-date\">
                  <div class=\"btn-circle btn-circle-md\">
                    <i class=\"es-icon es-icon-accesstime\"></i>
                  </div>
                </div>
              </div>
            {% endfor %}
          {% endif %}
        </div>
      </div>
      <div class=\"section-more-btn\">
        <a href=\"{{ path('live_course_explore') }}\" class=\"btn btn-default btn-lg\">
          {{'更多直播'|trans}} <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
        </a>
      </div>
    </div>
  </section>
{% endif %}
";
    }
}

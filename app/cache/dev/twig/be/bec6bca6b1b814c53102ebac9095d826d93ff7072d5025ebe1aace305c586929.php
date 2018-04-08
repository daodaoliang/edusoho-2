<?php

/* TopxiaWebBundle:LiveCourse:recommend-course-list.html.twig */
class __TwigTemplate_ce5adea3421a0df9c2fa16c6c05aaf5b743642e9ee50a39c7213f9a405295e94 extends Twig_Template
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
        $__internal_bf27f99c012dc0b5ca4b927e83be6a8a89c478e1dcb41578609d24f2c75416c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf27f99c012dc0b5ca4b927e83be6a8a89c478e1dcb41578609d24f2c75416c7->enter($__internal_bf27f99c012dc0b5ca4b927e83be6a8a89c478e1dcb41578609d24f2c75416c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:LiveCourse:recommend-course-list.html.twig"));

        // line 1
        $context["recommendCourses"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("RecommendCourses", array("type" => "live", "count" => 5));
        // line 2
        echo "<div class=\"panel panel-default es-live-recommend\">
  <div class=\"panel-heading\">
    <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_explore", array("filter" => array("type" => "live", "price" => "", "currentLevelId" => "all"), "orderBy" => "recommendedSeq")), "html", null, true);
        echo " \" class=\"more\">
      <i class=\"es-icon es-icon-morehoriz\"></i>
    </a> 
    <h3 class=\"panel-title\">";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推荐课程"), "html", null, true);
        echo "</h3>
  </div>
  
  <div class=\"panel-body\">
  \t";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["recommendCourses"]) ? $context["recommendCourses"] : $this->getContext($context, "recommendCourses")));
        $context['_iterated'] = false;
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        foreach ($context['_seq'] as $context["_key"] => $context["course"]) {
            if ($context["course"]) {
                // line 12
                echo "\t    <div class=\"media\">
\t      <div class=\"media-left\">
\t      \t<a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\" target=\"_blank\">
            <img src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute($context["course"], "smallPicture", array()), "course.png"), "html", null, true);
                echo "\" class=\"img-responsive\">
          </a>
\t        
\t      </div>
\t      <div class=\"media-body\">
\t        <div class=\"title\">
\t          <a href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute($context["course"], "id", array()))), "html", null, true);
                echo "\" class=\"gray-darker\" title=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["course"], "title", array()), "html", null, true);
                echo "\" target=\"_blank\">";
                echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->plainTextFilter($this->getAttribute($context["course"], "title", array()), 20);
                echo "</a>
\t        </div>
\t        <div class=\"metas\">
\t        \t";
                // line 24
                $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:LiveCourse:recommend-course-list.html.twig", 24)->display(array_merge($context, array("shows" => "price")));
                // line 25
                echo "\t        </div>
\t      </div>
\t    </div>
    ";
                $context['_iterated'] = true;
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
            }
        }
        if (!$context['_iterated']) {
            // line 29
            echo "    \t<div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无推荐课程"), "html", null, true);
            echo "</div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['course'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "
  </div>
  
</div>";
        
        $__internal_bf27f99c012dc0b5ca4b927e83be6a8a89c478e1dcb41578609d24f2c75416c7->leave($__internal_bf27f99c012dc0b5ca4b927e83be6a8a89c478e1dcb41578609d24f2c75416c7_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LiveCourse:recommend-course-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 31,  96 => 29,  84 => 25,  82 => 24,  72 => 21,  63 => 15,  57 => 14,  53 => 12,  41 => 11,  34 => 7,  28 => 4,  24 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "{% set recommendCourses = data('RecommendCourses',{type:'live',count:5}) %}
<div class=\"panel panel-default es-live-recommend\">
  <div class=\"panel-heading\">
    <a href=\"{{ path('course_explore', {filter: {type: 'live',price: '',currentLevelId: 'all'},orderBy: 'recommendedSeq'}) }} \" class=\"more\">
      <i class=\"es-icon es-icon-morehoriz\"></i>
    </a> 
    <h3 class=\"panel-title\">{{'推荐课程'|trans}}</h3>
  </div>
  
  <div class=\"panel-body\">
  \t{% for course in recommendCourses if course %}
\t    <div class=\"media\">
\t      <div class=\"media-left\">
\t      \t<a href=\"{{ path('course_show',{id:course.id}) }}\" title=\"{{ course.title }}\" target=\"_blank\">
            <img src=\"{{ filepath(course.smallPicture, 'course.png') }}\" class=\"img-responsive\">
          </a>
\t        
\t      </div>
\t      <div class=\"media-body\">
\t        <div class=\"title\">
\t          <a href=\"{{ path('course_show',{id:course.id}) }}\" class=\"gray-darker\" title=\"{{ course.title }}\" target=\"_blank\">{{ course.title|plain_text(20) }}</a>
\t        </div>
\t        <div class=\"metas\">
\t        \t{% include 'TopxiaWebBundle:Course:Widget/course-price.html.twig' with {shows:'price'} %}
\t        </div>
\t      </div>
\t    </div>
    {% else %}
    \t<div class=\"empty\">{{'暂无推荐课程'|trans}}</div>
    {% endfor %}

  </div>
  
</div>";
    }
}

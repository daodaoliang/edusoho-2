<?php

/* TopxiaWebBundle:LiveCourse:index.html.twig */
class __TwigTemplate_5fe6860bcf9a8d697bca9ee44904b7295e1f3d682e3865147ea4107a14f56eb2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle:LiveCourse:layout.html.twig", "TopxiaWebBundle:LiveCourse:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'top_content' => array($this, 'block_top_content'),
            'live_main' => array($this, 'block_live_main'),
            'live_side' => array($this, 'block_live_side'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle:LiveCourse:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6ac3ede282222d2f8f148c4bd95a6c3c30378e7a3adafc5ae8e4e8bace4eedef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ac3ede282222d2f8f148c4bd95a6c3c30378e7a3adafc5ae8e4e8bace4eedef->enter($__internal_6ac3ede282222d2f8f148c4bd95a6c3c30378e7a3adafc5ae8e4e8bace4eedef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:LiveCourse:index.html.twig"));

        // line 5
        $context["script_controller"] = "live-course/index";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6ac3ede282222d2f8f148c4bd95a6c3c30378e7a3adafc5ae8e4e8bace4eedef->leave($__internal_6ac3ede282222d2f8f148c4bd95a6c3c30378e7a3adafc5ae8e4e8bace4eedef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_67cfe8b2035e59d601ebad33e09b101566f7dbf1bc2f7c34ed5927b79b0e843c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67cfe8b2035e59d601ebad33e09b101566f7dbf1bc2f7c34ed5927b79b0e843c->enter($__internal_67cfe8b2035e59d601ebad33e09b101566f7dbf1bc2f7c34ed5927b79b0e843c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_67cfe8b2035e59d601ebad33e09b101566f7dbf1bc2f7c34ed5927b79b0e843c->leave($__internal_67cfe8b2035e59d601ebad33e09b101566f7dbf1bc2f7c34ed5927b79b0e843c_prof);

    }

    // line 7
    public function block_top_content($context, array $blocks = array())
    {
        $__internal_1ceab99638beadd75c0ee34fd6bd389bafa3d0ecfca0090114dd82693f918da8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ceab99638beadd75c0ee34fd6bd389bafa3d0ecfca0090114dd82693f918da8->enter($__internal_1ceab99638beadd75c0ee34fd6bd389bafa3d0ecfca0090114dd82693f918da8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content"));

        // line 8
        echo "    ";
        $asm89CacheStrategy1 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key1 = $asm89CacheStrategy1->generateKey("live/top/banner", 600        );
        $asm89CacheBody1 = $asm89CacheStrategy1->fetchBlock($asm89Key1);
        if ($asm89CacheBody1 === false) {
            ob_start();
                // line 9
                echo "      ";
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) == 1)) {
                    // line 10
                    echo "          <section class=\"es-live-poster swiper-container\">
            <div class=\"swiper-wrapper\">
              ";
                    // line 12
                    echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\BlockExtension')->showBlock("live_top_banner");
                    echo "
            </div>
            <div class=\"swiper-pager\"></div>
          </section>
      ";
                }
                // line 17
                echo "    ";
            
            $asm89CacheBody1 = ob_get_clean();
            $asm89CacheStrategy1->saveBlock($asm89Key1, $asm89CacheBody1);
        }
        echo $asm89CacheBody1;
        // line 18
        echo "  ";
        
        $__internal_1ceab99638beadd75c0ee34fd6bd389bafa3d0ecfca0090114dd82693f918da8->leave($__internal_1ceab99638beadd75c0ee34fd6bd389bafa3d0ecfca0090114dd82693f918da8_prof);

    }

    // line 19
    public function block_live_main($context, array $blocks = array())
    {
        $__internal_d9908435076977bec8e0c21028505fbd73970612043c813a1edb52db21b32051 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9908435076977bec8e0c21028505fbd73970612043c813a1edb52db21b32051->enter($__internal_d9908435076977bec8e0c21028505fbd73970612043c813a1edb52db21b32051_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "live_main"));

        // line 20
        echo "  ";
        $asm89CacheStrategy2 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key2 = $asm89CacheStrategy2->generateKey("live/liveTab", 600        );
        $asm89CacheBody2 = $asm89CacheStrategy2->fetchBlock($asm89Key2);
        if ($asm89CacheBody2 === false) {
            ob_start();
                // line 21
                echo "    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:LiveCourse:liveTab"));
                echo "
  ";
            
            $asm89CacheBody2 = ob_get_clean();
            $asm89CacheStrategy2->saveBlock($asm89Key2, $asm89CacheBody2);
        }
        echo $asm89CacheBody2;
        // line 23
        echo "
  ";
        // line 24
        $asm89CacheStrategy3 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key3 = $asm89CacheStrategy3->generateKey("live/recommend/course/list", 600        );
        $asm89CacheBody3 = $asm89CacheStrategy3->fetchBlock($asm89Key3);
        if ($asm89CacheBody3 === false) {
            ob_start();
                // line 25
                echo "    ";
                $this->loadTemplate("TopxiaWebBundle:LiveCourse:recommend-course-list.html.twig", "TopxiaWebBundle:LiveCourse:index.html.twig", 25)->display($context);
                // line 26
                echo "  ";
            
            $asm89CacheBody3 = ob_get_clean();
            $asm89CacheStrategy3->saveBlock($asm89Key3, $asm89CacheBody3);
        }
        echo $asm89CacheBody3;
        // line 27
        echo "
  ";
        // line 28
        $asm89CacheStrategy4 = $this->env->getExtension('asm89_cache')->getCacheStrategy();
        $asm89Key4 = $asm89CacheStrategy4->generateKey("live/recommend/course/replay/list", 600        );
        $asm89CacheBody4 = $asm89CacheStrategy4->fetchBlock($asm89Key4);
        if ($asm89CacheBody4 === false) {
            ob_start();
                // line 29
                echo "    ";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:LiveCourse:replayList"));
                echo "
  ";
            
            $asm89CacheBody4 = ob_get_clean();
            $asm89CacheStrategy4->saveBlock($asm89Key4, $asm89CacheBody4);
        }
        echo $asm89CacheBody4;
        // line 31
        echo "  ";
        
        $__internal_d9908435076977bec8e0c21028505fbd73970612043c813a1edb52db21b32051->leave($__internal_d9908435076977bec8e0c21028505fbd73970612043c813a1edb52db21b32051_prof);

    }

    // line 33
    public function block_live_side($context, array $blocks = array())
    {
        $__internal_366c54b6e54801860c2f287a7dc7a9a19d3747d74cf30098421cf15d74f4e017 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_366c54b6e54801860c2f287a7dc7a9a19d3747d74cf30098421cf15d74f4e017->enter($__internal_366c54b6e54801860c2f287a7dc7a9a19d3747d74cf30098421cf15d74f4e017_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "live_side"));

        // line 34
        echo "
    ";
        // line 35
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:LiveCourse:liveCourseList", array("request" => $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()))));
        echo "

  ";
        
        $__internal_366c54b6e54801860c2f287a7dc7a9a19d3747d74cf30098421cf15d74f4e017->leave($__internal_366c54b6e54801860c2f287a7dc7a9a19d3747d74cf30098421cf15d74f4e017_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LiveCourse:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  173 => 35,  170 => 34,  164 => 33,  157 => 31,  147 => 29,  141 => 28,  138 => 27,  131 => 26,  128 => 25,  122 => 24,  119 => 23,  109 => 21,  102 => 20,  96 => 19,  89 => 18,  82 => 17,  74 => 12,  70 => 10,  67 => 9,  60 => 8,  54 => 7,  40 => 3,  33 => 1,  31 => 5,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle:LiveCourse:layout.html.twig' %}

{% block title %}{{'直播'|trans}} - {{ parent() }}{% endblock %}

{% set script_controller = 'live-course/index' %}

  {% block top_content %}
    {% cache 'live/top/banner' 600 %}
      {% if paginator.currentPage == 1 %}
          <section class=\"es-live-poster swiper-container\">
            <div class=\"swiper-wrapper\">
              {{ block_show('live_top_banner') }}
            </div>
            <div class=\"swiper-pager\"></div>
          </section>
      {% endif  %}
    {% endcache %}
  {% endblock %}
  {% block live_main %}
  {% cache 'live/liveTab' 600 %}
    {{ render(controller('TopxiaWebBundle:LiveCourse:liveTab')) }}
  {% endcache %}

  {% cache 'live/recommend/course/list' 600 %}
    {% include 'TopxiaWebBundle:LiveCourse:recommend-course-list.html.twig' %}
  {% endcache %}

  {% cache 'live/recommend/course/replay/list' 600 %}
    {{ render(controller('TopxiaWebBundle:LiveCourse:replayList')) }}
  {% endcache %}
  {% endblock %}

  {% block live_side %}

    {{ render(controller('TopxiaWebBundle:LiveCourse:liveCourseList',{request:app.request})) }}

  {% endblock %}

";
    }
}

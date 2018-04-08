<?php

/* TopxiaWebBundle:Course:Widget/course-grid.html.twig */
class __TwigTemplate_974311bdb656c7fb354e2dc94c4bee67a7e71ee955249e86f6b2fb552e0efe63 extends Twig_Template
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
        $__internal_d1d44fc5b8cccfff6aa860193e56ec7028eb0ee211dcd6f03f41a3afa3abc98a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d1d44fc5b8cccfff6aa860193e56ec7028eb0ee211dcd6f03f41a3afa3abc98a->enter($__internal_d1d44fc5b8cccfff6aa860193e56ec7028eb0ee211dcd6f03f41a3afa3abc98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Course:Widget/course-grid.html.twig"));

        // line 1
        echo "<div class=\"course-item\">
  <div class=\"course-img\">
    <a href=\"";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">
      ";
        // line 4
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discountId", array()) > 0)) {
            // line 5
            echo "        ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "discount", array()) == 0)) {
                // line 6
                echo "          <!-- 限免 -->
          <span class=\"tag-discount free\"></span>
        ";
            } else {
                // line 9
                echo "          <!-- 折扣 -->
          <span class=\"tag-discount\"></span>
        ";
            }
            // line 12
            echo "      ";
        }
        // line 13
        echo "      ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "serializeMode", array()) == "serialize")) {
            // line 14
            echo "        <span class=\"tags\"><span class=\"tag-serialing\"></span></span>
      ";
        } elseif (($this->getAttribute(        // line 15
(isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "serializeMode", array()) == "finished")) {
            // line 16
            echo "        <span class=\"tags\"><span class=\"tag-finished\"></span></span>
      ";
        }
        // line 18
        echo "      ";
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "live")) {
            // line 19
            echo "        <span class=\"tags\">
          <span class=\"tag-live\"></span>
        </span>
      ";
        }
        // line 23
        echo "      ";
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeLazyImg($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "middlePicture", array()), "course.png"), "img-responsive", $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()));
        echo "
    </a>
  </div>
  <div class=\"course-info\">
    <div class=\"title\">
      <a class=\"link-dark\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\" target=\"_blank\">
        ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "title", array()), "html", null, true);
        echo "
      </a>
    </div>
    <div class=\"metas clearfix\">
      ";
        // line 33
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("course.show_student_num_enabled", "1") == 1)) {
            // line 34
            echo "      <span class=\"num\"><i class=\"es-icon es-icon-people\"></i>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "studentNum", array()), "html", null, true);
            echo "</span>
      ";
        }
        // line 36
        echo "      <span class=\"comment\"><i class=\"es-icon es-icon-textsms\"></i>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "ratingNum", array()), "html", null, true);
        echo "</span>
      ";
        // line 37
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->canTryLook($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()))) {
            // line 38
            echo "        <span class=\"comment\"><i class=\"es-icon es-icon-playcircleoutline\"></i>试看</span>
      ";
        }
        // line 40
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-price.html.twig", "TopxiaWebBundle:Course:Widget/course-grid.html.twig", 40)->display(array_merge($context, array("shows" => "price")));
        // line 41
        echo "    </div>
  </div>
</div>";
        
        $__internal_d1d44fc5b8cccfff6aa860193e56ec7028eb0ee211dcd6f03f41a3afa3abc98a->leave($__internal_d1d44fc5b8cccfff6aa860193e56ec7028eb0ee211dcd6f03f41a3afa3abc98a_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:Widget/course-grid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 41,  108 => 40,  104 => 38,  102 => 37,  97 => 36,  91 => 34,  89 => 33,  82 => 29,  78 => 28,  69 => 23,  63 => 19,  60 => 18,  56 => 16,  54 => 15,  51 => 14,  48 => 13,  45 => 12,  40 => 9,  35 => 6,  32 => 5,  30 => 4,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"course-item\">
  <div class=\"course-img\">
    <a href=\"{{ path('course_show', {id:course.id}) }}\" target=\"_blank\">
      {% if course.discountId > 0 %}
        {% if course.discount == 0 %}
          <!-- 限免 -->
          <span class=\"tag-discount free\"></span>
        {% else %}
          <!-- 折扣 -->
          <span class=\"tag-discount\"></span>
        {% endif %}
      {% endif %}
      {% if course.serializeMode == 'serialize' %}
        <span class=\"tags\"><span class=\"tag-serialing\"></span></span>
      {% elseif course.serializeMode == 'finished' %}
        <span class=\"tags\"><span class=\"tag-finished\"></span></span>
      {% endif %}
      {% if course.type == 'live' %}
        <span class=\"tags\">
          <span class=\"tag-live\"></span>
        </span>
      {% endif %}
      {{ lazy_img(filepath(course.middlePicture, 'course.png'), 'img-responsive', course.title) }}
    </a>
  </div>
  <div class=\"course-info\">
    <div class=\"title\">
      <a class=\"link-dark\" href=\"{{ path('course_show', {id:course.id}) }}\" target=\"_blank\">
        {{ course.title }}
      </a>
    </div>
    <div class=\"metas clearfix\">
      {% if setting('course.show_student_num_enabled', '1') == 1  %}
      <span class=\"num\"><i class=\"es-icon es-icon-people\"></i>{{ course.studentNum }}</span>
      {% endif %}
      <span class=\"comment\"><i class=\"es-icon es-icon-textsms\"></i>{{ course.ratingNum }}</span>
      {% if can_try_look(course.id, course.type) %}
        <span class=\"comment\"><i class=\"es-icon es-icon-playcircleoutline\"></i>试看</span>
      {% endif %}
      {% include 'TopxiaWebBundle:Course:Widget/course-price.html.twig' with {shows:'price'} %}
    </div>
  </div>
</div>";
    }
}

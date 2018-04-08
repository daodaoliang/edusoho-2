<?php

/* TopxiaWebBundle:Default:course-grid-with-condition-index.html.twig */
class __TwigTemplate_caf3a3637e5c9e8da46a5e47439b4ee32a8cf7720a6514c9df9969c7ff4356c1 extends Twig_Template
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
        $__internal_1a9d7170922ce53d6e5459b21b8a96c32a51d6e1d30e4b5a563aa63d53deb023 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1a9d7170922ce53d6e5459b21b8a96c32a51d6e1d30e4b5a563aa63d53deb023->enter($__internal_1a9d7170922ce53d6e5459b21b8a96c32a51d6e1d30e4b5a563aa63d53deb023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:Default:course-grid-with-condition-index.html.twig"));

        // line 1
        echo "<section class=\"course-list-section ";
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "background", array()), "")) : ("")), "html", null, true);
        echo "\" id=\"course-list-section\">

  ";
        // line 3
        $context["count"] = (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "count", array()), 12)) : (12));
        // line 4
        echo "  ";
        $context["categoryId"] = (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryId", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryId", array()), 0)) : (0));
        // line 5
        echo "  ";
        $context["orderBy"] = (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "orderBy", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "orderBy", array()), "latest")) : ("latest"));
        // line 6
        echo "  ";
        if (((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")) == "latest")) {
            // line 7
            echo "    ";
            $context["courses"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("LatestCourses", array("count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "categoryId" => (isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId"))));
            // line 8
            echo "  ";
        } elseif (((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")) == "recommendedSeq")) {
            // line 9
            echo "    ";
            $context["courses"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("RecommendCourses", array("count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "categoryId" => (isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId"))));
            // line 10
            echo "  ";
        } elseif (((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")) == "studentNum")) {
            // line 11
            echo "    ";
            $context["courses"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("PopularCourses", array("count" => (isset($context["count"]) ? $context["count"] : $this->getContext($context, "count")), "categoryId" => (isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), "type" => "studentNum"));
            // line 12
            echo "  ";
        }
        // line 13
        echo "  ";
        $context["categoriesFirst"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("Categories", array("group" => "course", "parentId" => 0));
        // line 14
        echo "  ";
        $context["moreCategories"] = twig_slice($this->env, (isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : $this->getContext($context, "categoriesFirst")), (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryCount", array()), 4)) : (4)), null);
        // line 15
        echo "  <div class=\"container\">
    <div class=\"text-line\">
      <h5><span>";
        // line 17
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "title", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultTitle", array()))), "html", null, true);
        echo "</span><div class=\"line\"></div></h5>
      <div class=\"subtitle\">";
        // line 18
        echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "subTitle", array()), $this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultSubTitle", array()))) : ($this->getAttribute((isset($context["config"]) ? $context["config"] : $this->getContext($context, "config")), "defaultSubTitle", array()))), "html", null, true);
        echo "</div>
    </div>
    <div class=\"course-filter\" id=\"course-filter\">
      <ul class=\"nav nav-pills hidden-xs\" role=\"tablist\">
        <li role=\"presentation\" class=\"";
        // line 22
        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)) == 0)) {
            echo "active ";
        }
        echo " js-course-filter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
        echo "\" data-type=\"course\"><a href=\"javascript:;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部课程"), "html", null, true);
        echo "</a></li>
        ";
        // line 23
        if ((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : $this->getContext($context, "categoriesFirst"))) {
            // line 24
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : $this->getContext($context, "categoriesFirst")));
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
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 25
                echo "            ";
                if (($this->getAttribute($context["loop"], "index0", array()) < (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryCount", array()), 4)) : (4)))) {
                    // line 26
                    echo "              <li role=\"presentation\" class=\"";
                    if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)) == $this->getAttribute($context["category"], "id", array()))) {
                        echo "active ";
                    }
                    echo " js-course-filter\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
                    echo "\" data-type=\"course\"><a href=\"javascript:;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "</a></li>
            ";
                }
                // line 28
                echo "          ";
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "          ";
            if ((isset($context["moreCategories"]) ? $context["moreCategories"] : $this->getContext($context, "moreCategories"))) {
                // line 30
                echo "          <li class=\"dropdown nav-hover\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"javascript:;\">
              <i class=\"es-icon es-icon-morehoriz\"></i>
            </a>
            <ul class=\"dropdown-menu\">
              ";
                // line 35
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["moreCategories"]) ? $context["moreCategories"] : $this->getContext($context, "moreCategories")));
                foreach ($context['_seq'] as $context["_key"] => $context["moreCategory"]) {
                    // line 36
                    echo "                <li role=\"presentation\" class=\"";
                    if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)) == $this->getAttribute($context["moreCategory"], "id", array()))) {
                        echo "active ";
                    }
                    echo " js-course-filter\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["moreCategory"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
                    echo "\" data-type=\"course\"><a href=\"javascript:;\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["moreCategory"], "name", array()), "html", null, true);
                    echo "</a></li>
              ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['moreCategory'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 38
                echo "            </ul>
          </li>
          ";
            }
            // line 41
            echo "        ";
        }
        // line 42
        echo "      </ul>
      <div class=\"btn-group visible-xs\">
        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部课程"), "html", null, true);
        echo " <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\" class=\"js-course-filter ";
        // line 46
        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)) == 0)) {
            echo "active ";
        }
        echo "\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
        echo "\" data-type=\"course\"><a href=\"javascript:;\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("全部课程"), "html", null, true);
        echo "</a></li>
          ";
        // line 47
        if ((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : $this->getContext($context, "categoriesFirst"))) {
            // line 48
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categoriesFirst"]) ? $context["categoriesFirst"] : $this->getContext($context, "categoriesFirst")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                if (($this->getAttribute($context["category"], "parentId", array()) == 0)) {
                    // line 49
                    echo "              ";
                    if (($this->getAttribute($context["loop"], "index0", array()) < (($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryCount", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "categoryCount", array()), 4)) : (4)))) {
                        // line 50
                        echo "                <li role=\"presentation\" class = \"js-course-filter ";
                        if ((((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)) == $this->getAttribute($context["category"], "id", array()))) {
                            echo "active ";
                        }
                        echo "\" data-url=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => $this->getAttribute($context["category"], "id", array()), "orderBy" => ((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "latest")) : ("latest")))), "html", null, true);
                        echo "\" data-type=\"course\"><a href=\"javascript:;\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                        echo "</a></li>
              ";
                    }
                    // line 52
                    echo "            ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "            ";
            if ((isset($context["moreCategories"]) ? $context["moreCategories"] : $this->getContext($context, "moreCategories"))) {
                // line 54
                echo "              <li role=\"presentation\" class = \"js-course-filteractive\" data-type=\"course\"><a href=\"";
                echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_explore");
                echo "\">更多</a></li>
            ";
            }
            // line 56
            echo "          ";
        }
        // line 57
        echo "        </ul>
      </div>
      <div class=\"course-sort btn-group\">
        <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 60
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "latest")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "latest")), "html", null, true);
        echo "\" data-type='course'>
          ";
        // line 61
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最新"), "html", null, true);
        echo "
        </a>
        <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 63
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "studentNum")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "studentNum")), "html", null, true);
        echo "\" data-type='course'>
          ";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("最热"), "html", null, true);
        echo "
        </a>
        <a href=\"javascript:;\" class=\"btn btn-default ";
        // line 66
        if ((((array_key_exists("orderBy", $context)) ? (_twig_default_filter((isset($context["orderBy"]) ? $context["orderBy"] : $this->getContext($context, "orderBy")), "recommendedSeq")) : ("recommendedSeq")) == "recommendedSeq")) {
            echo " active ";
        }
        echo "js-course-filter\" data-url=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage_category", array("categoryId" => ((array_key_exists("categoryId", $context)) ? (_twig_default_filter((isset($context["categoryId"]) ? $context["categoryId"] : $this->getContext($context, "categoryId")), 0)) : (0)), "orderBy" => "recommendedSeq")), "html", null, true);
        echo "\" data-type='course'>
          ";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("推荐"), "html", null, true);
        echo "
        </a>
      </div>
    </div>
    <div class=\"course-list\">
      <div class=\"row\">
        ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["courses"]) ? $context["courses"] : $this->getContext($context, "courses")));
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
            // line 74
            echo "          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            ";
            // line 75
            $this->loadTemplate("TopxiaWebBundle:Course:Widget/course-grid.html.twig", "TopxiaWebBundle:Default:course-grid-with-condition-index.html.twig", 75)->display($context);
            // line 76
            echo "          </div>
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
        // line 78
        echo "      </div>
    </div>
    <div class=\"section-more-btn\">
      <a href=\"";
        // line 81
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_explore");
        echo "\" class=\"btn btn-default btn-lg\">
        ";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更多课程"), "html", null, true);
        echo " <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
      </a>
    </div>
  </div>
</section>";
        
        $__internal_1a9d7170922ce53d6e5459b21b8a96c32a51d6e1d30e4b5a563aa63d53deb023->leave($__internal_1a9d7170922ce53d6e5459b21b8a96c32a51d6e1d30e4b5a563aa63d53deb023_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Default:course-grid-with-condition-index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  338 => 82,  334 => 81,  329 => 78,  314 => 76,  312 => 75,  309 => 74,  292 => 73,  283 => 67,  275 => 66,  270 => 64,  262 => 63,  257 => 61,  249 => 60,  244 => 57,  241 => 56,  235 => 54,  232 => 53,  222 => 52,  210 => 50,  207 => 49,  195 => 48,  193 => 47,  183 => 46,  178 => 44,  174 => 42,  171 => 41,  166 => 38,  151 => 36,  147 => 35,  140 => 30,  137 => 29,  123 => 28,  111 => 26,  108 => 25,  90 => 24,  88 => 23,  78 => 22,  71 => 18,  67 => 17,  63 => 15,  60 => 14,  57 => 13,  54 => 12,  51 => 11,  48 => 10,  45 => 9,  42 => 8,  39 => 7,  36 => 6,  33 => 5,  30 => 4,  28 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<section class=\"course-list-section {{config.background|default(\"\")}}\" id=\"course-list-section\">

  {% set count = config.count|default(12) %}
  {% set categoryId = config.categoryId|default(0) %}
  {% set orderBy = config.orderBy|default('latest')%}
  {% if orderBy == 'latest'%}
    {% set courses = data('LatestCourses',{'count':count, 'categoryId':categoryId}) %}
  {% elseif orderBy == 'recommendedSeq'%}
    {% set courses = data('RecommendCourses',{'count':count, 'categoryId':categoryId}) %}
  {% elseif orderBy == 'studentNum'%}
    {% set courses = data('PopularCourses',{'count':count, 'categoryId':categoryId,'type':'studentNum'}) %}
  {% endif %}
  {% set categoriesFirst = data('Categories',{'group':'course', 'parentId':0})%}
  {% set moreCategories =  categoriesFirst[config.categoryCount|default(4):]%}
  <div class=\"container\">
    <div class=\"text-line\">
      <h5><span>{{ config.title|default(config.defaultTitle) }}</span><div class=\"line\"></div></h5>
      <div class=\"subtitle\">{{ config.subTitle|default(config.defaultSubTitle) }}</div>
    </div>
    <div class=\"course-filter\" id=\"course-filter\">
      <ul class=\"nav nav-pills hidden-xs\" role=\"tablist\">
        <li role=\"presentation\" class=\"{% if (categoryId|default(0) == 0) %}active {% endif %} js-course-filter\" data-url=\"{{path('homepage_category',{orderBy : orderBy|default('latest')}) }}\" data-type=\"course\"><a href=\"javascript:;\">{{'全部课程'|trans}}</a></li>
        {% if categoriesFirst%}
          {% for category in categoriesFirst %}
            {% if ( loop.index0 < config.categoryCount|default(4) ) %}
              <li role=\"presentation\" class=\"{% if (categoryId|default(0) == category.id) %}active {% endif %} js-course-filter\" data-url=\"{{path('homepage_category',{categoryId : category.id, orderBy : orderBy|default('latest')}) }}\" data-type=\"course\"><a href=\"javascript:;\">{{ category.name }}</a></li>
            {% endif %}
          {% endfor %}
          {% if  moreCategories %}
          <li class=\"dropdown nav-hover\">
            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"javascript:;\">
              <i class=\"es-icon es-icon-morehoriz\"></i>
            </a>
            <ul class=\"dropdown-menu\">
              {% for moreCategory in moreCategories %}
                <li role=\"presentation\" class=\"{% if (categoryId|default(0) == moreCategory.id) %}active {% endif %} js-course-filter\" data-url=\"{{path('homepage_category',{categoryId : moreCategory.id, orderBy : orderBy|default('latest')}) }}\" data-type=\"course\"><a href=\"javascript:;\">{{ moreCategory.name }}</a></li>
              {% endfor %}
            </ul>
          </li>
          {% endif %}
        {% endif %}
      </ul>
      <div class=\"btn-group visible-xs\">
        <button type=\"button\" class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\">{{'全部课程'|trans}} <span class=\"caret\"></span></button>
        <ul class=\"dropdown-menu\" role=\"menu\">
          <li role=\"presentation\" class=\"js-course-filter {% if (categoryId|default(0) == 0) %}active {% endif %}\" data-url=\"{{path('homepage_category',{orderBy : orderBy|default('latest')}) }}\" data-type=\"course\"><a href=\"javascript:;\">{{'全部课程'|trans}}</a></li>
          {% if categoriesFirst%}
            {% for category in categoriesFirst  if (category.parentId == 0) %}
              {% if ( loop.index0 < config.categoryCount|default(4) ) %}
                <li role=\"presentation\" class = \"js-course-filter {% if (categoryId|default(0) == category.id) %}active {% endif %}\" data-url=\"{{path('homepage_category',{categoryId : category.id, orderBy : orderBy|default('latest')}) }}\" data-type=\"course\"><a href=\"javascript:;\">{{ category.name }}</a></li>
              {% endif %}
            {% endfor %}
            {% if  moreCategories %}
              <li role=\"presentation\" class = \"js-course-filteractive\" data-type=\"course\"><a href=\"{{ path('course_explore') }}\">更多</a></li>
            {% endif %}
          {% endif %}
        </ul>
      </div>
      <div class=\"course-sort btn-group\">
        <a href=\"javascript:;\" class=\"btn btn-default {% if (orderBy|default('recommendedSeq') == 'latest') %} active {% endif %}js-course-filter\" data-url=\"{{path('homepage_category',{categoryId : categoryId|default(0), orderBy : 'latest'}) }}\" data-type='course'>
          {{'最新'|trans}}
        </a>
        <a href=\"javascript:;\" class=\"btn btn-default {% if (orderBy|default('recommendedSeq') == 'studentNum') %} active {% endif %}js-course-filter\" data-url=\"{{path('homepage_category',{categoryId : categoryId|default(0), orderBy : 'studentNum'}) }}\" data-type='course'>
          {{'最热'|trans}}
        </a>
        <a href=\"javascript:;\" class=\"btn btn-default {% if (orderBy|default('recommendedSeq') == 'recommendedSeq') %} active {% endif %}js-course-filter\" data-url=\"{{path('homepage_category',{categoryId : categoryId|default(0), orderBy : 'recommendedSeq'}) }}\" data-type='course'>
          {{'推荐'|trans}}
        </a>
      </div>
    </div>
    <div class=\"course-list\">
      <div class=\"row\">
        {% for course in courses %}
          <div class=\"col-lg-3 col-md-4 col-xs-6\">
            {% include 'TopxiaWebBundle:Course:Widget/course-grid.html.twig' %}
          </div>
        {% endfor %}
      </div>
    </div>
    <div class=\"section-more-btn\">
      <a href=\"{{ path('course_explore') }}\" class=\"btn btn-default btn-lg\">
        {{'更多课程'|trans}} <i class=\"mrs-o es-icon es-icon-chevronright\"></i>
      </a>
    </div>
  </div>
</section>";
    }
}

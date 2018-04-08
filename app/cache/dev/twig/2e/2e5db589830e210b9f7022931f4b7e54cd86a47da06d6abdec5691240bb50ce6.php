<?php

/* TopxiaWebBundle:CourseManage:layout.html.twig */
class __TwigTemplate_b7c82bbd5bd5cfcc46b3e9204f373df95e982426370c99575524b60dd5cf6859 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaWebBundle::layout.html.twig", "TopxiaWebBundle:CourseManage:layout.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
            'side' => array($this, 'block_side'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f2e96d355c1f295dcbcc56760bcaaea3259ac93a59e28e98f3ad0cf51045cd2f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2e96d355c1f295dcbcc56760bcaaea3259ac93a59e28e98f3ad0cf51045cd2f->enter($__internal_f2e96d355c1f295dcbcc56760bcaaea3259ac93a59e28e98f3ad0cf51045cd2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:CourseManage:layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f2e96d355c1f295dcbcc56760bcaaea3259ac93a59e28e98f3ad0cf51045cd2f->leave($__internal_f2e96d355c1f295dcbcc56760bcaaea3259ac93a59e28e98f3ad0cf51045cd2f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_777ee5329115175584a5ad5a4b84cda15811c39ce1ec30c8dbed232ea8fc4008 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_777ee5329115175584a5ad5a4b84cda15811c39ce1ec30c8dbed232ea8fc4008->enter($__internal_777ee5329115175584a5ad5a4b84cda15811c39ce1ec30c8dbed232ea8fc4008_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程管理"), "html", null, true);
        echo " - ";
        $this->displayParentBlock("title", $context, $blocks);
        
        $__internal_777ee5329115175584a5ad5a4b84cda15811c39ce1ec30c8dbed232ea8fc4008->leave($__internal_777ee5329115175584a5ad5a4b84cda15811c39ce1ec30c8dbed232ea8fc4008_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_3e58fb34844f71372706eeb2ae9d3f82fee22bc00f998ce208bdf20cbb2d40dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e58fb34844f71372706eeb2ae9d3f82fee22bc00f998ce208bdf20cbb2d40dd->enter($__internal_3e58fb34844f71372706eeb2ae9d3f82fee22bc00f998ce208bdf20cbb2d40dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "<style>
.locked li a{
  padding:10px 15px 10px 0px !important;
}
.locked li a>span{
  display:inline-block;
  width:35px;
  padding:0px 10px;
}
</style>
  ";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->controller("TopxiaWebBundle:Course:header", array("course" => (isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "manage" => true)));
        echo "

<div class=\"row\">
  <div class=\"col-md-3\">
    ";
        // line 20
        $this->displayBlock('side', $context, $blocks);
        // line 159
        echo "  </div>
  <div class=\"col-md-9\">
    ";
        // line 161
        $this->displayBlock('main', $context, $blocks);
        // line 162
        echo "  </div>
</div>
";
        
        $__internal_3e58fb34844f71372706eeb2ae9d3f82fee22bc00f998ce208bdf20cbb2d40dd->leave($__internal_3e58fb34844f71372706eeb2ae9d3f82fee22bc00f998ce208bdf20cbb2d40dd_prof);

    }

    // line 20
    public function block_side($context, array $blocks = array())
    {
        $__internal_c52e96a2bb9ed2a1b420e28e1b06237e4164b58c2d5dbc5baadedc80f3d6cf27 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52e96a2bb9ed2a1b420e28e1b06237e4164b58c2d5dbc5baadedc80f3d6cf27->enter($__internal_c52e96a2bb9ed2a1b420e28e1b06237e4164b58c2d5dbc5baadedc80f3d6cf27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "side"));

        // line 21
        echo "      ";
        $context["side_nav"] = ((array_key_exists("side_nav", $context)) ? (_twig_default_filter((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")), null)) : (null));
        // line 22
        echo "      <div class=\"sidenav locked\">
        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程信息"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 25
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "base")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 26
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 27
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => "base")), "html", null, true);
        } else {
            // line 28
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_base", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 29
        echo "\">
              <span ";
        // line 30
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("基本信息"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 33
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "detail")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 34
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 35
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => "detail")), "html", null, true);
        } else {
            // line 36
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_detail", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 37
        echo "\">
              <span ";
        // line 38
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("详细信息"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 41
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "picture")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 42
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 43
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => "picture")), "html", null, true);
        } else {
            // line 44
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_picture", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 45
        echo "\">
              <span ";
        // line 46
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程图片"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 49
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "lesson")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 50
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 51
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => "lesson")), "html", null, true);
        } else {
            // line 52
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_lesson", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 53
        echo "\">
              <span ";
        // line 54
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课时管理"), "html", null, true);
        echo "
            </a>
          </li>
          ";
        // line 57
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "type", array()) == "live")) {
            // line 58
            echo "            <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "replay")) {
                echo "active";
            }
            echo "\" >
              <a href=\"";
            // line 59
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                // line 60
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => "replay")), "html", null, true);
            } else {
                // line 61
                echo "            ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("live_course_manage_replay", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
                echo "
            ";
            }
            // line 62
            echo "\"><span ";
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo "></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("录播管理"), "html", null, true);
            echo "</a>
            </li>
          ";
        }
        // line 65
        echo "          <li class=\"list-group-item ";
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "files")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 66
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 67
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => "files")), "html", null, true);
        } else {
            // line 68
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_files", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 69
        echo "\">
              <span ";
        // line 70
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo " ></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程文件"), "html", null, true);
        echo "
            </a>
          </li>
        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程设置"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 77
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "price")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 78
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 79
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => "price")), "html", null, true);
        } else {
            // line 80
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_price", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 81
        echo "\">
              <span ";
        // line 82
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("价格设置"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 85
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "teachers")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 86
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 87
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => "teachers")), "html", null, true);
        } else {
            // line 88
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_teachers", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 89
        echo "\">
              <span ";
        // line 90
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教师设置"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 93
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "students")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_students", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">
              <span></span>";
        // line 95
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("default.user_name"), $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("学员")), "html", null, true);
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理"), "html", null, true);
        echo "
            </a>
          </li>
        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题库"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 102
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "question")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 103
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 104
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => "question")), "html", null, true);
        } else {
            // line 105
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_question", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 106
        echo "\">
              <span ";
        // line 107
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目管理"), "html", null, true);
        echo "
            </a>
          </li>

          ";
        // line 111
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("QuestionPlus") && $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("question_plus.enabled"))) {
            // line 112
            echo "            <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "question_plumber")) {
                echo "active";
            }
            echo "\">
              <a href=\"";
            // line 113
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                // line 114
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => "question_plumber")), "html", null, true);
            } else {
                // line 115
                echo "              ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_question_plumber", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => "import")), "html", null, true);
                echo "
              ";
            }
            // line 116
            echo "\">
                <span ";
            // line 117
            if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
                echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
            }
            echo "></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("题目导入/导出"), "html", null, true);
            echo "
              </a>
            </li>
          ";
        }
        // line 121
        echo "
          <!-- <li class=\"list-group-item ";
        // line 122
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "question_category")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 123
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_question_category", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">题目类别管理</a>
          </li> -->

          <li class=\"list-group-item ";
        // line 126
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "testpaper")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 127
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            // line 128
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_course_sync", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "type" => "testpaper")), "html", null, true);
        } else {
            // line 129
            echo "            ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_testpaper", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "
            ";
        }
        // line 130
        echo "\">
              <span ";
        // line 131
        if (((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "locked", array()), 0)) : (0)) == 1)) {
            echo "class=\"es-icon es-icon-lock\" aria-hidden=\"true\" ";
        }
        echo "></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷管理"), "html", null, true);
        echo "
            </a>
          </li>
          <li class=\"list-group-item ";
        // line 134
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "testCheck")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 135
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_test_check", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "status" => "reviewing")), "html", null, true);
        echo "\"><span></span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("试卷批阅"), "html", null, true);
        echo "</a>
          </li>
          ";
        // line 137
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isPluginInstalled("Homework")) {
            // line 138
            echo "            <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "homeworkCheck")) {
                echo "active";
            }
            echo "\">
              <a href=\"";
            // line 139
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_homework_check_list", array("courseId" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()), "status" => "reviewing")), "html", null, true);
            echo "\"><span></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作业批改"), "html", null, true);
            echo "</a>
            </li>
          ";
        }
        // line 142
        echo "        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程运营"), "html", null, true);
        echo "</li>
          <li class=\"list-group-item ";
        // line 146
        if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "course_manage_dashboard")) {
            echo "active";
        }
        echo "\">
            <a href=\"";
        // line 147
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_course_dashboard", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
        echo "\">
              <span></span>";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程学习数据"), "html", null, true);
        echo "</a>
          </li>

          ";
        // line 151
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "isAdmin", array(), "method") || ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("course.teacher_search_order") == 1))) {
            // line 152
            echo "            <li class=\"list-group-item ";
            if (((isset($context["side_nav"]) ? $context["side_nav"] : $this->getContext($context, "side_nav")) == "course_manage_order")) {
                echo "active";
            }
            echo "\">
              <a href=\"";
            // line 153
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_order", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : $this->getContext($context, "course")), "id", array()))), "html", null, true);
            echo "\"><span></span>";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程订单查询"), "html", null, true);
            echo "</a>
            </li>
          ";
        }
        // line 156
        echo "        </ul>
      </div>
    ";
        
        $__internal_c52e96a2bb9ed2a1b420e28e1b06237e4164b58c2d5dbc5baadedc80f3d6cf27->leave($__internal_c52e96a2bb9ed2a1b420e28e1b06237e4164b58c2d5dbc5baadedc80f3d6cf27_prof);

    }

    // line 161
    public function block_main($context, array $blocks = array())
    {
        $__internal_4cbd7a0990288fec71733c802b966d4f6408116b9ff4078cbf5359711881ec65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4cbd7a0990288fec71733c802b966d4f6408116b9ff4078cbf5359711881ec65->enter($__internal_4cbd7a0990288fec71733c802b966d4f6408116b9ff4078cbf5359711881ec65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_4cbd7a0990288fec71733c802b966d4f6408116b9ff4078cbf5359711881ec65->leave($__internal_4cbd7a0990288fec71733c802b966d4f6408116b9ff4078cbf5359711881ec65_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:CourseManage:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  585 => 161,  576 => 156,  568 => 153,  561 => 152,  559 => 151,  553 => 148,  549 => 147,  543 => 146,  539 => 145,  534 => 142,  526 => 139,  519 => 138,  517 => 137,  510 => 135,  504 => 134,  494 => 131,  491 => 130,  485 => 129,  481 => 128,  479 => 127,  473 => 126,  467 => 123,  461 => 122,  458 => 121,  447 => 117,  444 => 116,  438 => 115,  434 => 114,  432 => 113,  425 => 112,  423 => 111,  412 => 107,  409 => 106,  403 => 105,  399 => 104,  397 => 103,  391 => 102,  387 => 101,  377 => 95,  373 => 94,  367 => 93,  357 => 90,  354 => 89,  348 => 88,  344 => 87,  342 => 86,  336 => 85,  326 => 82,  323 => 81,  317 => 80,  313 => 79,  311 => 78,  305 => 77,  301 => 76,  288 => 70,  285 => 69,  279 => 68,  275 => 67,  273 => 66,  266 => 65,  255 => 62,  249 => 61,  245 => 60,  243 => 59,  236 => 58,  234 => 57,  224 => 54,  221 => 53,  215 => 52,  211 => 51,  209 => 50,  203 => 49,  193 => 46,  190 => 45,  184 => 44,  180 => 43,  178 => 42,  172 => 41,  162 => 38,  159 => 37,  153 => 36,  149 => 35,  147 => 34,  141 => 33,  131 => 30,  128 => 29,  122 => 28,  118 => 27,  116 => 26,  110 => 25,  106 => 24,  102 => 22,  99 => 21,  93 => 20,  84 => 162,  82 => 161,  78 => 159,  76 => 20,  69 => 16,  57 => 6,  51 => 5,  37 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaWebBundle::layout.html.twig' %}

{% block title %}{{'课程管理'|trans}} - {{ parent() }}{% endblock %}

{% block content %}
<style>
.locked li a{
  padding:10px 15px 10px 0px !important;
}
.locked li a>span{
  display:inline-block;
  width:35px;
  padding:0px 10px;
}
</style>
  {{ render(controller('TopxiaWebBundle:Course:header', {course:course, manage: true})) }}

<div class=\"row\">
  <div class=\"col-md-3\">
    {% block side %}
      {% set side_nav = side_nav|default(null) %}
      <div class=\"sidenav locked\">
        <ul class=\"list-group\">
          <li class=\"list-group-heading\">{{'课程信息'|trans}}</li>
          <li class=\"list-group-item {% if side_nav == 'base' %}active{% endif %}\">
            <a href=\"{% if course.locked|default(0) == 1 %}
            {{ path('course_manage_course_sync', {id:course.id,type:'base'}) }}{% else %}
            {{ path('course_manage_base', {id:course.id}) }}
            {% endif %}\">
              <span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %} ></span>{{'基本信息'|trans}}
            </a>
          </li>
          <li class=\"list-group-item {% if side_nav == 'detail' %}active{% endif %}\">
            <a href=\"{% if course.locked|default(0) == 1 %}
            {{ path('course_manage_course_sync', {id:course.id,type:'detail'}) }}{% else %}
            {{ path('course_manage_detail', {id:course.id}) }}
            {% endif %}\">
              <span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %} ></span>{{'详细信息'|trans}}
            </a>
          </li>
          <li class=\"list-group-item {% if side_nav == 'picture' %}active{% endif %}\">
            <a href=\"{% if course.locked|default(0) == 1 %}
            {{ path('course_manage_course_sync', {id:course.id,type:'picture'}) }}{% else %}
            {{ path('course_manage_picture', {id:course.id}) }}
            {% endif %}\">
              <span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %} ></span>{{'课程图片'|trans}}
            </a>
          </li>
          <li class=\"list-group-item {% if side_nav == 'lesson' %}active{% endif %}\">
            <a href=\"{% if course.locked|default(0) == 1 %}
            {{ path('course_manage_course_sync', {id:course.id,type:'lesson'}) }}{% else %}
            {{ path('course_manage_lesson', {id:course.id}) }}
            {% endif %}\">
              <span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %} ></span>{{'课时管理'|trans}}
            </a>
          </li>
          {% if course.type == 'live' %}
            <li class=\"list-group-item {% if side_nav == 'replay' %}active{% endif %}\" >
              <a href=\"{% if course.locked|default(0) == 1 %}
            {{ path('course_manage_course_sync', {id:course.id,type:'replay'}) }}{% else %}
            {{ path('live_course_manage_replay', {id:course.id}) }}
            {% endif %}\"><span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %}></span>{{'录播管理'|trans}}</a>
            </li>
          {% endif %}
          <li class=\"list-group-item {% if side_nav == 'files' %}active{% endif %}\">
            <a href=\"{% if course.locked|default(0) == 1 %}
            {{ path('course_manage_course_sync', {id:course.id,type:'files'}) }}{% else %}
            {{ path('course_manage_files', {id:course.id}) }}
            {% endif %}\">
              <span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %} ></span>{{'课程文件'|trans}}
            </a>
          </li>
        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">{{'课程设置'|trans}}</li>
          <li class=\"list-group-item {% if side_nav == 'price' %}active{% endif %}\">
            <a href=\"{% if course.locked|default(0) == 1 %}
            {{ path('course_manage_course_sync', {id:course.id,type:'price'}) }}{% else %}
            {{ path('course_manage_price', {id:course.id}) }}
            {% endif %}\">
              <span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %}></span>{{'价格设置'|trans}}
            </a>
          </li>
          <li class=\"list-group-item {% if side_nav == 'teachers' %}active{% endif %}\">
            <a href=\"{% if course.locked|default(0) == 1 %}
            {{ path('course_manage_course_sync', {id:course.id,type:'teachers'}) }}{% else %}
            {{ path('course_manage_teachers', {id:course.id}) }}
            {% endif %}\">
              <span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %}></span>{{'教师设置'|trans}}
            </a>
          </li>
          <li class=\"list-group-item {% if side_nav == 'students' %}active{% endif %}\">
            <a href=\"{{ path('course_manage_students', {id:course.id}) }}\">
              <span></span>{{setting('default.user_name')|default('学员'|trans)}}{{'管理'|trans}}
            </a>
          </li>
        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">{{'题库'|trans}}</li>
          <li class=\"list-group-item {% if side_nav == 'question' %}active{% endif %}\">
            <a href=\"{% if course.locked|default(0) == 1 %}
            {{ path('course_manage_course_sync', {id:course.id,type:'question'}) }}{% else %}
            {{ path('course_manage_question', {courseId:course.id}) }}
            {% endif %}\">
              <span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %}></span>{{'题目管理'|trans}}
            </a>
          </li>

          {% if is_plugin_installed('QuestionPlus') and setting('question_plus.enabled') %}
            <li class=\"list-group-item {% if side_nav == 'question_plumber' %}active{% endif %}\">
              <a href=\"{% if course.locked|default(0) == 1 %}
              {{ path('course_manage_course_sync', {id:course.id,type:'question_plumber'}) }}{% else %}
              {{ path('course_question_plumber', {courseId:course.id, type:'import'}) }}
              {% endif %}\">
                <span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %}></span>{{'题目导入/导出'|trans}}
              </a>
            </li>
          {% endif %}

          <!-- <li class=\"list-group-item {% if side_nav == 'question_category' %}active{% endif %}\">
            <a href=\"{{ path('course_manage_question_category', {courseId:course.id}) }}\">题目类别管理</a>
          </li> -->

          <li class=\"list-group-item {% if side_nav == 'testpaper' %}active{% endif %}\">
            <a href=\"{% if course.locked|default(0) == 1 %}
            {{ path('course_manage_course_sync', {id:course.id,type:'testpaper'}) }}{% else %}
            {{ path('course_manage_testpaper', {courseId:course.id}) }}
            {% endif %}\">
              <span {% if course.locked|default(0) == 1 %}class=\"es-icon es-icon-lock\" aria-hidden=\"true\" {% endif %}></span>{{'试卷管理'|trans}}
            </a>
          </li>
          <li class=\"list-group-item {% if side_nav == 'testCheck' %}active{% endif %}\">
            <a href=\"{{ path('course_manage_test_check', {id:course.id, status:'reviewing'}) }}\"><span></span>{{'试卷批阅'|trans}}</a>
          </li>
          {% if is_plugin_installed('Homework') %}
            <li class=\"list-group-item {% if side_nav == 'homeworkCheck' %}active{% endif %}\">
              <a href=\"{{ path('course_homework_check_list', {courseId:course.id,status:'reviewing'}) }}\"><span></span>{{'作业批改'|trans}}</a>
            </li>
          {% endif %}
        </ul>

        <ul class=\"list-group\">
          <li class=\"list-group-heading\">{{'课程运营'|trans}}</li>
          <li class=\"list-group-item {% if side_nav == 'course_manage_dashboard' %}active{% endif %}\">
            <a href=\"{{path('course_manage_course_dashboard',{id:course.id})}}\">
              <span></span>{{'课程学习数据'|trans}}</a>
          </li>

          {% if app.user.isAdmin() or setting('course.teacher_search_order') == 1 %}
            <li class=\"list-group-item {% if side_nav == 'course_manage_order' %}active{% endif %}\">
              <a href=\"{{path('course_manage_order',{id:course.id})}}\"><span></span>{{'课程订单查询'|trans}}</a>
            </li>
          {% endif %}
        </ul>
      </div>
    {% endblock %}
  </div>
  <div class=\"col-md-9\">
    {% block main %}{% endblock %}
  </div>
</div>
{% endblock %}";
    }
}

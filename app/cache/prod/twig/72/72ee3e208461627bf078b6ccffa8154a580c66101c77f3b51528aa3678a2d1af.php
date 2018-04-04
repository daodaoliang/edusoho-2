<?php

/* TopxiaWebBundle:Course:header.html.twig */
class __TwigTemplate_b3f7622148298c322dffeed9e5f129d13fd2a590703deb4eabc8b99cc0e622d6 extends Twig_Template
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
        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle:Course:header.html.twig", 1);
        // line 2
        echo " ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("course-manage/header"), "html", null, true);
        echo "
<div class=\"es-section course-manage-header clearfix\">
  <a href=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">
    <img class=\"picture\" src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "largePicture", array()), "course.png"), "html", null, true);
        echo "\" />
  </a>
  <h1 class=\"title\">
    ";
        // line 8
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()) != "normal")) {
            // line 9
            echo "      [";
            echo twig_escape_filter($this->env, $this->getAttribute($this->env->getExtension('Codeages\PluginBundle\Twig\DictExtension')->getDict("courseType"), $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "type", array()), array(), "array"), "html", null, true);
            echo "]
    ";
        }
        // line 11
        echo "    <a class=\"link-dark\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "title", array()), "html", null, true);
        echo "</a>
    ";
        // line 12
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "closed")) {
            // line 13
            echo "      <span class=\"label label-danger \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已关闭"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 14
(isset($context["course"]) ? $context["course"] : null), "status", array()) == "draft")) {
            // line 15
            echo "      <span class=\"label label-warning \">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("未发布"), "html", null, true);
            echo "</span>
    ";
        } elseif (($this->getAttribute(        // line 16
(isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 17
            echo "      ";
            if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "serialize")) {
                // line 18
                echo "        <span class=\"label label-success \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("更新中"), "html", null, true);
                echo "</span>
      ";
            } elseif (($this->getAttribute(            // line 19
(isset($context["course"]) ? $context["course"] : null), "serializeMode", array()) == "finished")) {
                // line 20
                echo "        <span class=\"label label-warning \">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("已完结"), "html", null, true);
                echo "</span>
      ";
            }
            // line 22
            echo "    ";
        }
        // line 23
        echo "  </h1>

  <div class=\"teachers\">
    ";
        // line 26
        if ((($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array()), null)) : (null))) {
            // line 27
            echo "      ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("教师："), "html", null, true);
            echo "
      ";
            // line 28
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "teacherIds", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["id"]) {
                // line 29
                echo "        ";
                $context["user"] = $this->getAttribute((isset($context["users"]) ? $context["users"] : null), $context["id"], array(), "array");
                // line 30
                echo "        <a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "id", array()))), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : null), "nickname", array()), "html", null, true);
                echo "</a>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['id'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "    ";
        }
        // line 33
        echo "  </div>

  <div class=\"toolbar hidden-xs\">
    ";
        // line 36
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "published")) {
            // line 37
            echo "      <div class=\"btn-group\">
        <a class=\"btn btn-default btn-sm\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("返回课程主页"), "html", null, true);
            echo "</a>
      </div>
    ";
        }
        // line 41
        echo "
    <div class=\"btn-group\">
      <button class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("预览"), "html", null, true);
        echo " <span class=\"caret\"></span></button>
      <ul class=\"dropdown-menu pull-right\">
        <li><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "member")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作为 已购买用户"), "html", null, true);
        echo "</a></li>
        <li><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_show", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()), "previewAs" => "guest")), "html", null, true);
        echo "\" target=\"_blank\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("作为 未购买用户"), "html", null, true);
        echo "</a></li>
      </ul>
    </div>

    ";
        // line 50
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) != "published")) {
            // line 51
            echo "      <div class=\"btn-group\">
        <button class=\"btn btn-success btn-sm course-publish-btn\" data-url=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_manage_publish", array("id" => $this->getAttribute((isset($context["course"]) ? $context["course"] : null), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("发布课程"), "html", null, true);
            echo "</button>
      </div>
    ";
        }
        // line 55
        echo "  </div>
</div>
";
        // line 57
        if (($this->getAttribute((isset($context["course"]) ? $context["course"] : null), "status", array()) == "closed")) {
            // line 58
            echo "<div class=\"alert alert-warning\">课程已关闭，在有效期内的学员仍可正常学习，若不希望学员继续学习，需在【学员管理】中移除学员。</div>
";
        }
    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:Course:header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 58,  179 => 57,  175 => 55,  167 => 52,  164 => 51,  162 => 50,  153 => 46,  147 => 45,  142 => 43,  138 => 41,  130 => 38,  127 => 37,  125 => 36,  120 => 33,  117 => 32,  106 => 30,  103 => 29,  99 => 28,  94 => 27,  92 => 26,  87 => 23,  84 => 22,  78 => 20,  76 => 19,  71 => 18,  68 => 17,  66 => 16,  61 => 15,  59 => 14,  54 => 13,  52 => 12,  45 => 11,  39 => 9,  37 => 8,  31 => 5,  27 => 4,  21 => 2,  19 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}

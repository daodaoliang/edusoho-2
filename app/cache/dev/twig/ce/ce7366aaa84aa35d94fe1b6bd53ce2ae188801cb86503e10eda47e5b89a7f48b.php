<?php

/* TopxiaAdminBundle:CourseQuestion:td-operations.html.twig */
class __TwigTemplate_67f672f042e50e840c0c41b356300a150e74ed24db69c57cf153fd99272d8b56 extends Twig_Template
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
        $__internal_f35a62bc9b0d3895cc9b4387f59130225ac21a9848051c6f61650acf471a05f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f35a62bc9b0d3895cc9b4387f59130225ac21a9848051c6f61650acf471a05f0->enter($__internal_f35a62bc9b0d3895cc9b4387f59130225ac21a9848051c6f61650acf471a05f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:CourseQuestion:td-operations.html.twig"));

        // line 1
        echo "
";
        // line 2
        if (((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "unPosted")) {
            // line 3
            echo "
      <div class=\"btn-group\">
        <a class=\"btn btn-default btn-sm remind-teachers\" title=\"";
            // line 5
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提醒教师"), "html", null, true);
            echo "\" 
        data-url=\"";
            // line 6
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_question_remind_teachers", array("courseId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "courseId", array()), "questionId" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()))), "html", null, true);
            echo "\"
          <span class=\"glyphicon glyphicon-bell\"></span>";
            // line 7
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提醒教师"), "html", null, true);
            echo "
        </a>
        <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
          <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu pull-right\">
          <li>
            <a class=\"btn\" data-role=\"item-delete\" data-name=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除问答"), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_thread_delete", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()))), "html", null, true);
            echo "\">
              <span class=\"glyphicon glyphicon-trash\"></span> ";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除问答"), "html", null, true);
            echo "</a>
          </li>
        </ul>

      </div>

";
        } elseif ((        // line 21
(isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")) == "all")) {
            // line 22
            echo "
      <button class=\"btn btn-default btn-sm\" data-role=\"item-delete\" data-name=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除问答"), "html", null, true);
            echo "\" data-url=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_thread_delete", array("id" => $this->getAttribute((isset($context["question"]) ? $context["question"] : $this->getContext($context, "question")), "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
            echo "</button>
      
";
        }
        
        $__internal_f35a62bc9b0d3895cc9b4387f59130225ac21a9848051c6f61650acf471a05f0->leave($__internal_f35a62bc9b0d3895cc9b4387f59130225ac21a9848051c6f61650acf471a05f0_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:CourseQuestion:td-operations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  69 => 23,  66 => 22,  64 => 21,  55 => 15,  49 => 14,  39 => 7,  35 => 6,  31 => 5,  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "
{% if type == 'unPosted'%}

      <div class=\"btn-group\">
        <a class=\"btn btn-default btn-sm remind-teachers\" title=\"{{'提醒教师'|trans}}\" 
        data-url=\"{{ path('admin_question_remind_teachers', {courseId:question.courseId, questionId:question.id}) }}\"
          <span class=\"glyphicon glyphicon-bell\"></span>{{'提醒教师'|trans}}
        </a>
        <a href=\"#\" type=\"button\" class=\"btn btn-default btn-sm dropdown-toggle\" data-toggle=\"dropdown\">
          <span class=\"caret\"></span>
        </a>
        <ul class=\"dropdown-menu pull-right\">
          <li>
            <a class=\"btn\" data-role=\"item-delete\" data-name=\"{{'删除问答'|trans}}\" data-url=\"{{ path('admin_thread_delete', {id:question.id}) }}\">
              <span class=\"glyphicon glyphicon-trash\"></span> {{'删除问答'|trans}}</a>
          </li>
        </ul>

      </div>

{% elseif type == \"all\" %}

      <button class=\"btn btn-default btn-sm\" data-role=\"item-delete\" data-name=\"{{'删除问答'|trans}}\" data-url=\"{{ path('admin_thread_delete', {id:question.id}) }}\">{{'删除'|trans}}</button>
      
{% endif %}";
    }
}

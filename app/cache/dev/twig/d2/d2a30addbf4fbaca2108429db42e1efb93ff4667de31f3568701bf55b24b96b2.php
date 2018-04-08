<?php

/* TopxiaWebBundle:LiveCourse:live-replay-list.html.twig */
class __TwigTemplate_263cb71a84da99bc78047532f635b7f411c6d76f25854edf24b690265be100d7 extends Twig_Template
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
        $__internal_bdb6d7c600e322fdd545634316caa97de8c739c409c4c5d81c02a2a05dbb0268 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdb6d7c600e322fdd545634316caa97de8c739c409c4c5d81c02a2a05dbb0268->enter($__internal_bdb6d7c600e322fdd545634316caa97de8c739c409c4c5d81c02a2a05dbb0268_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle:LiveCourse:live-replay-list.html.twig"));

        // line 1
        echo "<div class=\"panel panel-default es-live-back\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">";
        // line 3
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("直播回放"), "html", null, true);
        echo "</h3>
  </div>
  <div class=\"panel-body\">
    <ul>
    \t";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["liveReplayList"]) ? $context["liveReplayList"] : $this->getContext($context, "liveReplayList")));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            if ($context["list"]) {
                // line 8
                echo "      \t<li class=\"text-sm\">
      \t\t<a href=\"";
                // line 9
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("course_learn", array("id" => $this->getAttribute($context["list"], "courseId", array()))), "html", null, true);
                echo "#lesson/";
                echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "id", array()), "html", null, true);
                echo "\" target=\"_blank\"><i class=\"dat\"></i><span class=\"color-gray\">";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["list"], "startTime", array()), "m-d H:i"), "html", null, true);
                echo "</span>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "title", array()), "html", null, true);
                echo "</a>
      \t</li>
      ";
                $context['_iterated'] = true;
            }
        }
        if (!$context['_iterated']) {
            // line 12
            echo "      \t<li><div class=\"empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无回放直播"), "html", null, true);
            echo "</div></li>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    </ul>
  </div>
</div> ";
        
        $__internal_bdb6d7c600e322fdd545634316caa97de8c739c409c4c5d81c02a2a05dbb0268->leave($__internal_bdb6d7c600e322fdd545634316caa97de8c739c409c4c5d81c02a2a05dbb0268_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle:LiveCourse:live-replay-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 14,  57 => 12,  42 => 9,  39 => 8,  33 => 7,  26 => 3,  22 => 1,);
    }

    public function getSource()
    {
        return "<div class=\"panel panel-default es-live-back\">
  <div class=\"panel-heading\">
    <h3 class=\"panel-title\">{{'直播回放'|trans}}</h3>
  </div>
  <div class=\"panel-body\">
    <ul>
    \t{% for list in liveReplayList if list %}
      \t<li class=\"text-sm\">
      \t\t<a href=\"{{ path('course_learn', {id:list.courseId}) }}#lesson/{{ list.id }}\" target=\"_blank\"><i class=\"dat\"></i><span class=\"color-gray\">{{ list.startTime|date(\"m-d H:i\") }}</span>{{ list.title }}</a>
      \t</li>
      {% else %}
      \t<li><div class=\"empty\">{{'暂无回放直播'|trans}}</div></li>
      {% endfor %}
    </ul>
  </div>
</div> ";
    }
}

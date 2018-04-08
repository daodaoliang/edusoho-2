<?php

/* OrgBundle:Org:org-tree-select.html.twig */
class __TwigTemplate_065e48b694e9774b18f083bd51b35620fbf37d77932c07c01f77de36667d1566 extends Twig_Template
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
        $__internal_a81585df34661f9738379877fa0bf2508513359f0ead37cfb4cf7fb8277cde8a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a81585df34661f9738379877fa0bf2508513359f0ead37cfb4cf7fb8277cde8a->enter($__internal_a81585df34661f9738379877fa0bf2508513359f0ead37cfb4cf7fb8277cde8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OrgBundle:Org:org-tree-select.html.twig"));

        // line 1
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("magic.enable_org", "0")) {
            echo " 
  
  ";
            // line 4
            echo "  ";
            // line 5
            echo "
  ";
            // line 6
            $context["modal"] = ((array_key_exists("modal", $context)) ? (_twig_default_filter((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")), null)) : (null));
            // line 7
            echo "
  ";
            // line 8
            if (((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")) == "modal")) {
                // line 9
                echo "    <script>app.load('topxiawebbundle/controller/widget/category-select')</script>
  ";
            } else {
                // line 11
                echo "    ";
                $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("topxiawebbundle/controller/widget/category-select");
                // line 12
                echo "  ";
            }
            // line 13
            echo "
  ";
            // line 14
            $context["colmd"] = ((array_key_exists("colmd", $context)) ? (_twig_default_filter((isset($context["colmd"]) ? $context["colmd"] : $this->getContext($context, "colmd")), 8)) : (8));
            // line 15
            echo "  ";
            $context["lablecolmd"] = ((array_key_exists("lablecolmd", $context)) ? (_twig_default_filter((isset($context["lablecolmd"]) ? $context["lablecolmd"] : $this->getContext($context, "lablecolmd")), 2)) : (2));
            // line 16
            echo "  ";
            $context["nocolmd"] = ((array_key_exists("nocolmd", $context)) ? (_twig_default_filter((isset($context["nocolmd"]) ? $context["nocolmd"] : $this->getContext($context, "nocolmd")), false)) : (false));
            // line 17
            echo "  ";
            $context["inputClass"] = ((array_key_exists("inputClass", $context)) ? (_twig_default_filter((isset($context["inputClass"]) ? $context["inputClass"] : $this->getContext($context, "inputClass")), "")) : (""));
            echo " 

  ";
            // line 19
            $context["currentOrgCode"] = ((array_key_exists("orgCode", $context)) ? (_twig_default_filter((isset($context["orgCode"]) ? $context["orgCode"] : $this->getContext($context, "orgCode")), $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "orgCode", array()))) : ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "orgCode", array())));
            // line 20
            echo "  ";
            $context["currentOrgTree"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\DataExtension')->getData("OrgTree", array("orgCode" => ((twig_in_filter("ROLE_SUPER_ADMIN", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()))) ? (null) : ((isset($context["currentOrgCode"]) ? $context["currentOrgCode"] : $this->getContext($context, "currentOrgCode"))))));
            // line 21
            echo "  
    <div class=\"form-group ";
            // line 22
            if (((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")) == "list")) {
                echo "controls";
            }
            echo "\">
      ";
            // line 23
            if (((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")) != "list")) {
                // line 24
                echo "      <label class=\"";
                if ( !(isset($context["nocolmd"]) ? $context["nocolmd"] : $this->getContext($context, "nocolmd"))) {
                    echo " col-md-";
                    echo twig_escape_filter($this->env, (isset($context["lablecolmd"]) ? $context["lablecolmd"] : $this->getContext($context, "lablecolmd")), "html", null, true);
                }
                echo " control-label\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("组织机构"), "html", null, true);
                echo "</label>
      <div class=\"";
                // line 25
                if ( !(isset($context["nocolmd"]) ? $context["nocolmd"] : $this->getContext($context, "nocolmd"))) {
                    echo " col-md-";
                    echo twig_escape_filter($this->env, (isset($context["colmd"]) ? $context["colmd"] : $this->getContext($context, "colmd")), "html", null, true);
                    echo " ";
                }
                echo "  controls\">
      ";
            }
            // line 27
            echo "      
      <select data-role=\"tree-select\" name=\"orgCode\" class=\"form-control tree-select ";
            // line 28
            echo twig_escape_filter($this->env, (isset($context["inputClass"]) ? $context["inputClass"] : $this->getContext($context, "inputClass")), "html", null, true);
            echo "\">
        ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["currentOrgTree"]) ? $context["currentOrgTree"] : $this->getContext($context, "currentOrgTree")));
            foreach ($context['_seq'] as $context["_key"] => $context["org"]) {
                // line 30
                echo "          <option value=";
                echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "orgCode", array()), "html", null, true);
                echo " ";
                if (($this->getAttribute($context["org"], "orgCode", array()) == (isset($context["currentOrgCode"]) ? $context["currentOrgCode"] : $this->getContext($context, "currentOrgCode")))) {
                    echo "selected";
                }
                echo ">";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, ($this->getAttribute($context["org"], "depth", array()) - 1)));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    if (($this->getAttribute($context["org"], "depth", array()) > 1)) {
                        echo "　";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo twig_escape_filter($this->env, $this->getAttribute($context["org"], "name", array()), "html", null, true);
                echo "</option>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['org'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 32
            echo "      </select>

      ";
            // line 34
            if (((isset($context["modal"]) ? $context["modal"] : $this->getContext($context, "modal")) != "list")) {
                // line 35
                echo "      </div>
      ";
            }
            // line 37
            echo "    </div>
 ";
        }
        
        $__internal_a81585df34661f9738379877fa0bf2508513359f0ead37cfb4cf7fb8277cde8a->leave($__internal_a81585df34661f9738379877fa0bf2508513359f0ead37cfb4cf7fb8277cde8a_prof);

    }

    public function getTemplateName()
    {
        return "OrgBundle:Org:org-tree-select.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 37,  143 => 35,  141 => 34,  137 => 32,  112 => 30,  108 => 29,  104 => 28,  101 => 27,  92 => 25,  82 => 24,  80 => 23,  74 => 22,  71 => 21,  68 => 20,  66 => 19,  60 => 17,  57 => 16,  54 => 15,  52 => 14,  49 => 13,  46 => 12,  43 => 11,  39 => 9,  37 => 8,  34 => 7,  32 => 6,  29 => 5,  27 => 4,  22 => 1,);
    }

    public function getSource()
    {
        return "{% if setting('magic.enable_org', '0') %} 
  
  {# formType: normal/horizontal/inline #}
  {# isModal: true/false #}

  {% set modal = modal|default(null) %}

  {% if modal == 'modal' %}
    <script>app.load('topxiawebbundle/controller/widget/category-select')</script>
  {% else %}
    {% do load_script('topxiawebbundle/controller/widget/category-select') %}
  {% endif %}

  {% set colmd = colmd|default(8) %}
  {% set lablecolmd = lablecolmd|default(2) %}
  {% set nocolmd = nocolmd|default(false) %}
  {% set inputClass = inputClass|default('') %} 

  {% set currentOrgCode = orgCode|default(app.user.orgCode) %}
  {% set currentOrgTree = data('OrgTree',{orgCode: ('ROLE_SUPER_ADMIN' in app.user.roles) ? null : currentOrgCode }) %}
  
    <div class=\"form-group {% if modal == 'list' %}controls{% endif %}\">
      {% if modal != 'list' %}
      <label class=\"{% if not nocolmd %} col-md-{{lablecolmd}}{% endif %} control-label\">{{'组织机构'|trans}}</label>
      <div class=\"{% if not nocolmd %} col-md-{{colmd}} {% endif %}  controls\">
      {% endif %}
      
      <select data-role=\"tree-select\" name=\"orgCode\" class=\"form-control tree-select {{inputClass}}\">
        {% for org in currentOrgTree %}
          <option value={{ org.orgCode }} {% if org.orgCode == currentOrgCode  %}selected{% endif %}>{% for i in 1..(org.depth-1) if org.depth > 1 %}　{% endfor %}{{ org.name }}</option>
        {% endfor %}
      </select>

      {% if modal != 'list' %}
      </div>
      {% endif %}
    </div>
 {% endif %}";
    }
}

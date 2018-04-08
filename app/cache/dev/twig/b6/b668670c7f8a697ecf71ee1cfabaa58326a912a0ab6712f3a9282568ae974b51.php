<?php

/* TopxiaAdminBundle::macro.html.twig */
class __TwigTemplate_7e139b2ac099a94839547b7f41bf03168890c7b7b5dd0cc29c270ac483e75d48 extends Twig_Template
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
        $__internal_c53a4fd61d70e5b108960c859fad684aa93cfed3b89673fc4ad5ed3c7845ad32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c53a4fd61d70e5b108960c859fad684aa93cfed3b89673fc4ad5ed3c7845ad32->enter($__internal_c53a4fd61d70e5b108960c859fad684aa93cfed3b89673fc4ad5ed3c7845ad32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle::macro.html.twig"));

        // line 8
        echo "
";
        // line 31
        echo "
";
        
        $__internal_c53a4fd61d70e5b108960c859fad684aa93cfed3b89673fc4ad5ed3c7845ad32->leave($__internal_c53a4fd61d70e5b108960c859fad684aa93cfed3b89673fc4ad5ed3c7845ad32_prof);

    }

    // line 1
    public function getuser_link($__user__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_39c3a3588a50dbb91e7f52fd30a903eb4abaca1329cdf23a300053084c8a5fcc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_39c3a3588a50dbb91e7f52fd30a903eb4abaca1329cdf23a300053084c8a5fcc->enter($__internal_39c3a3588a50dbb91e7f52fd30a903eb4abaca1329cdf23a300053084c8a5fcc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "user_link"));

            // line 2
            echo "  ";
            if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
                // line 3
                echo "\t\t<a ";
                if ((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class"))) {
                    echo "class=\"";
                    echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                    echo "\"";
                }
                echo " href=\"javascript:;\" role=\"show-user\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("admin_user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nickname", array()), "html", null, true);
                echo "</a>
\t";
            } else {
                // line 5
                echo "\t  <span class=\"text-muted\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户已删除"), "html", null, true);
                echo "</span>
\t";
            }
            
            $__internal_39c3a3588a50dbb91e7f52fd30a903eb4abaca1329cdf23a300053084c8a5fcc->leave($__internal_39c3a3588a50dbb91e7f52fd30a903eb4abaca1329cdf23a300053084c8a5fcc_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 9
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5b74eef20d2e14405e1bb03bfa6271c8cb691da7e313cd8bb8b7a455fa6f0a21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5b74eef20d2e14405e1bb03bfa6271c8cb691da7e313cd8bb8b7a455fa6f0a21->enter($__internal_5b74eef20d2e14405e1bb03bfa6271c8cb691da7e313cd8bb8b7a455fa6f0a21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "bytesToSize"));

            // line 10
            echo "\t";
            ob_start();
            // line 11
            echo "\t    
\t    ";
            // line 12
            $context["kilobyte"] = 1024;
            // line 13
            echo "\t    ";
            $context["megabyte"] = ((isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte")) * 1024);
            // line 14
            echo "\t    ";
            $context["gigabyte"] = ((isset($context["megabyte"]) ? $context["megabyte"] : $this->getContext($context, "megabyte")) * 1024);
            // line 15
            echo "\t    ";
            $context["terabyte"] = ((isset($context["gigabyte"]) ? $context["gigabyte"] : $this->getContext($context, "gigabyte")) * 1024);
            // line 16
            echo "
\t    ";
            // line 17
            if (((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte")))) {
                // line 18
                echo "\t        ";
                echo twig_escape_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) . " B"), "html", null, true);
                echo "
\t    ";
            } elseif ((            // line 19
(isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["megabyte"]) ? $context["megabyte"] : $this->getContext($context, "megabyte")))) {
                // line 20
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte"))), 2, ".") . " KB"), "html", null, true);
                echo "
\t    ";
            } elseif ((            // line 21
(isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["gigabyte"]) ? $context["gigabyte"] : $this->getContext($context, "gigabyte")))) {
                // line 22
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["megabyte"]) ? $context["megabyte"] : $this->getContext($context, "megabyte"))), 2, ".") . " MB"), "html", null, true);
                echo "
\t    ";
            } elseif ((            // line 23
(isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["terabyte"]) ? $context["terabyte"] : $this->getContext($context, "terabyte")))) {
                // line 24
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["gigabyte"]) ? $context["gigabyte"] : $this->getContext($context, "gigabyte"))), 2, ".") . " GB"), "html", null, true);
                echo "
\t    ";
            } else {
                // line 26
                echo "\t        ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["terabyte"]) ? $context["terabyte"] : $this->getContext($context, "terabyte"))), 2, ".") . " TB"), "html", null, true);
                echo "
\t    ";
            }
            // line 28
            echo "
\t";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_5b74eef20d2e14405e1bb03bfa6271c8cb691da7e313cd8bb8b7a455fa6f0a21->leave($__internal_5b74eef20d2e14405e1bb03bfa6271c8cb691da7e313cd8bb8b7a455fa6f0a21_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 32
    public function getpaginator($__paginator__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_fe952df1bc4da3631f726327e0bd7fd6c34c79930e605932fa2827b5afd68e15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_fe952df1bc4da3631f726327e0bd7fd6c34c79930e605932fa2827b5afd68e15->enter($__internal_fe952df1bc4da3631f726327e0bd7fd6c34c79930e605932fa2827b5afd68e15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "paginator"));

            // line 33
            echo "  ";
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "lastPage", array()) > 1)) {
                // line 34
                echo "    <nav class=\"admin-pagination ";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination\">
        ";
                // line 36
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "firstPage", array()))) {
                    // line 37
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "firstPage", array())), "method"), "html", null, true);
                    echo "\">首页</a></li>
          <li><a  href=\"";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "previousPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
        ";
                }
                // line 40
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 41
                    echo "          <li ";
                    if (($context["page"] == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()))) {
                        echo "class=\"active\"";
                    }
                    echo "><a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 43
                echo "
        ";
                // line 44
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "lastPage", array()))) {
                    // line 45
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nextPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
          <li><a  href=\"";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getLastPage", array(), "method")), "method"), "html", null, true);
                    echo "\">尾页</a></li>
        ";
                }
                // line 48
                echo "      </ul>
      <span class=\"page-num\">
\t\t\t\t";
                // line 50
                echo twig_escape_filter($this->env, ((($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) - 1) * $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "perPageCount", array())) + 1), "html", null, true);
                echo "
      \t-
\t      ";
                // line 52
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "lastPage", array()))) {
                    // line 53
                    echo "\t        ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "itemCount", array()), "html", null, true);
                    echo "
\t      ";
                } else {
                    // line 55
                    echo "\t        ";
                    echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) * $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "perPageCount", array())), "html", null, true);
                    echo "
\t      ";
                }
                // line 57
                echo "\t      / ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "itemCount", array()), "html", null, true);
                echo "
\t    </span>
    </nav>
    
  ";
            }
            
            $__internal_fe952df1bc4da3631f726327e0bd7fd6c34c79930e605932fa2827b5afd68e15->leave($__internal_fe952df1bc4da3631f726327e0bd7fd6c34c79930e605932fa2827b5afd68e15_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  273 => 57,  267 => 55,  261 => 53,  259 => 52,  254 => 50,  250 => 48,  245 => 46,  240 => 45,  238 => 44,  235 => 43,  220 => 41,  215 => 40,  210 => 38,  205 => 37,  203 => 36,  197 => 34,  194 => 33,  178 => 32,  158 => 28,  152 => 26,  146 => 24,  144 => 23,  139 => 22,  137 => 21,  132 => 20,  130 => 19,  125 => 18,  123 => 17,  120 => 16,  117 => 15,  114 => 14,  111 => 13,  109 => 12,  106 => 11,  103 => 10,  88 => 9,  66 => 5,  52 => 3,  49 => 2,  33 => 1,  25 => 31,  22 => 8,);
    }

    public function getSource()
    {
        return "{% macro user_link(user, class) %}
  {% if user %}
\t\t<a {% if class %}class=\"{{ class }}\"{% endif %} href=\"javascript:;\" role=\"show-user\" data-toggle=\"modal\" data-target=\"#modal\" data-url=\"{{ url('admin_user_show', {id:user.id}) }}\">{{ user.nickname }}</a>
\t{% else %}
\t  <span class=\"text-muted\">{{'用户已删除'|trans}}</span>
\t{% endif %}
{% endmacro %}

{% macro bytesToSize(bytes) %}
\t{% spaceless %}
\t    
\t    {% set kilobyte = 1024 %}
\t    {% set megabyte = kilobyte * 1024 %}
\t    {% set gigabyte = megabyte * 1024 %}
\t    {% set terabyte = gigabyte * 1024 %}

\t    {% if bytes < kilobyte %}
\t        {{ bytes ~ ' B' }}
\t    {% elseif bytes < megabyte %}
\t        {{ (bytes / kilobyte)|number_format(2, '.') ~ ' KB' }}
\t    {% elseif bytes < gigabyte %}
\t        {{ (bytes / megabyte)|number_format(2, '.') ~ ' MB' }}
\t    {% elseif bytes < terabyte %}
\t        {{ (bytes / gigabyte)|number_format(2, '.') ~ ' GB' }}
\t    {% else %}
\t        {{ (bytes / terabyte)|number_format(2, '.') ~ ' TB' }}
\t    {% endif %}

\t{% endspaceless %}
{% endmacro %}

{% macro paginator(paginator, class) %}
  {% if paginator.lastPage > 1 %}
    <nav class=\"admin-pagination {{ class|default('text-center') }}\">
      <ul class=\"pagination\">
        {% if paginator.currentPage != paginator.firstPage %}
          <li><a  href=\"{{ paginator.getPageUrl(paginator.firstPage) }}\">首页</a></li>
          <li><a  href=\"{{ paginator.getPageUrl(paginator.previousPage) }}\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
        {% endif %}
        {% for page in paginator.pages %}
          <li {% if page == paginator.currentPage %}class=\"active\"{% endif %}><a href=\"{{ paginator.getPageUrl(page) }}\">{{ page }}</a></li>
        {% endfor %}

        {% if paginator.currentPage != paginator.lastPage %}
          <li><a  href=\"{{ paginator.getPageUrl(paginator.nextPage) }}\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
          <li><a  href=\"{{ paginator.getPageUrl(paginator.getLastPage()) }}\">尾页</a></li>
        {% endif %}
      </ul>
      <span class=\"page-num\">
\t\t\t\t{{ (paginator.currentPage - 1) * paginator.perPageCount + 1 }}
      \t-
\t      {% if paginator.currentPage == paginator.lastPage %}
\t        {{ paginator.itemCount }}
\t      {% else %}
\t        {{ paginator.currentPage * paginator.perPageCount }}
\t      {% endif %}
\t      / {{ paginator.itemCount }}
\t    </span>
    </nav>
    
  {% endif %}
{% endmacro %}
";
    }
}

<?php

/* TopxiaAdminBundle:Category:tbody.html.twig */
class __TwigTemplate_f341bafbf4b88f69eb33869b22d6568b79d0c137d0937a9afcc7946107a38679 extends Twig_Template
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
        $__internal_bb562910bd9504caf602a84f3cd84ff6f4ab912e011c24d726d9cac87523948d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb562910bd9504caf602a84f3cd84ff6f4ab912e011c24d726d9cac87523948d->enter($__internal_bb562910bd9504caf602a84f3cd84ff6f4ab912e011c24d726d9cac87523948d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:Category:tbody.html.twig"));

        // line 1
        echo "
<li id=\"category-table-body\" data-sort-url=\"";
        // line 2
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_sort");
        echo "\">
    ";
        // line 3
        if ( !twig_test_empty((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")))) {
            // line 4
            echo "        ";
            echo $this->getAttribute($this, "showCategoryTree", array(0 => (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), 1 => (isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), 2 => false), "method");
            echo "
    ";
        } else {
            // line 6
            echo "        <div class=\"row empty\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("暂无分类记录"), "html", null, true);
            echo "</div>
    ";
        }
        // line 8
        echo "</li>

";
        // line 10
        $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->loadScript("category/tbody");
        // line 11
        echo "
";
        
        $__internal_bb562910bd9504caf602a84f3cd84ff6f4ab912e011c24d726d9cac87523948d->leave($__internal_bb562910bd9504caf602a84f3cd84ff6f4ab912e011c24d726d9cac87523948d_prof);

    }

    // line 12
    public function getshowCategoryTree($__categories__ = null, $__group__ = null, $__isCollapseChildren__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "categories" => $__categories__,
            "group" => $__group__,
            "isCollapseChildren" => $__isCollapseChildren__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0009ace1188e49d5608ecfee4ddb8068fae304bd16ad8b9318e00e19ea6e29a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_0009ace1188e49d5608ecfee4ddb8068fae304bd16ad8b9318e00e19ea6e29a8->enter($__internal_0009ace1188e49d5608ecfee4ddb8068fae304bd16ad8b9318e00e19ea6e29a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "showCategoryTree"));

            // line 13
            echo "    <ul class=\"list-table sortable-list\" data-group-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), 0, array(), "array"), "parentId", array(), "array"), "html", null, true);
            echo "\">
        ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 15
                echo "            ";
                $context["isParent"] =  !twig_test_empty((($this->getAttribute($context["category"], "children", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["category"], "children", array()), null)) : (null)));
                // line 16
                echo "            ";
                $context["isRoot"] = ($this->getAttribute($context["category"], "depth", array()) == 1);
                // line 17
                echo "            <li id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" class=\"tr\" data-name=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "\" data-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "id", array()), "html", null, true);
                echo "\" data-parent-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "parentId", array()), "html", null, true);
                echo "\" style=\"display: ";
                echo ((( !(isset($context["isRoot"]) ? $context["isRoot"] : $this->getContext($context, "isRoot")) && (isset($context["isCollapseChildren"]) ? $context["isCollapseChildren"] : $this->getContext($context, "isCollapseChildren")))) ? ("none") : ("block"));
                echo "\">
                <div class=\"row";
                // line 18
                echo ((((isset($context["isParent"]) ? $context["isParent"] : $this->getContext($context, "isParent")) && (isset($context["isCollapseChildren"]) ? $context["isCollapseChildren"] : $this->getContext($context, "isCollapseChildren")))) ? (" row-collapse") : (" row-expand"));
                echo "\">
                    <div class=\"td col-md-7 name sort-handle\" style=\"padding-left: ";
                // line 19
                echo twig_escape_filter($this->env, (24 * ($this->getAttribute($context["category"], "depth", array()) - 1)), "html", null, true);
                echo "px; overflow: hidden\">
                        ";
                // line 20
                if ((isset($context["isParent"]) ? $context["isParent"] : $this->getContext($context, "isParent"))) {
                    // line 21
                    echo "                            <i class=\"list-table-tree-icon glyphicon glyphicon-chevron-";
                    echo (((isset($context["isCollapseChildren"]) ? $context["isCollapseChildren"] : $this->getContext($context, "isCollapseChildren"))) ? ("right") : ("down"));
                    echo "\"></i>
                        ";
                } else {
                    // line 23
                    echo "                            <i class=\"list-table-tree-icon\"></i>
                        ";
                }
                // line 25
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "
                    </div>
                    <div class=\"td col-md-2 code\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "code", array()), "html", null, true);
                echo "</div>
                    <div class=\"td col-md-3 operation\">
                        <a href=\"javascript:;\" class=\"btn btn-default btn-sm \" data-url=\"";
                // line 29
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_edit", array("id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
                echo "\" data-toggle=\"modal\" data-target=\"#modal\">
                            <i class=\"glyphicon glyphicon-edit\"></i> ";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("编辑"), "html", null, true);
                echo "
                        </a>
                        ";
                // line 32
                if (($this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "depth", array()) > $this->getAttribute($context["category"], "depth", array()))) {
                    // line 33
                    echo "                            <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-url=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_category_create", array("parentId" => $this->getAttribute($context["category"], "id", array()), "groupId" => $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "id", array()))), "html", null, true);
                    echo "\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-plus\"></i> ";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("添加子分类"), "html", null, true);
                    echo "</a>
                        ";
                }
                // line 35
                echo "
                    </div>
                </div>
                ";
                // line 38
                if ((isset($context["isParent"]) ? $context["isParent"] : $this->getContext($context, "isParent"))) {
                    // line 39
                    echo "                    ";
                    echo $this->getAttribute($this, "showCategoryTree", array(0 => $this->getAttribute($context["category"], "children", array()), 1 => (isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), 2 => (isset($context["isCollapseChildren"]) ? $context["isCollapseChildren"] : $this->getContext($context, "isCollapseChildren"))), "method");
                    echo "
                ";
                }
                // line 41
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "    </ul>
";
            
            $__internal_0009ace1188e49d5608ecfee4ddb8068fae304bd16ad8b9318e00e19ea6e29a8->leave($__internal_0009ace1188e49d5608ecfee4ddb8068fae304bd16ad8b9318e00e19ea6e29a8_prof);

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
        return "TopxiaAdminBundle:Category:tbody.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  172 => 43,  165 => 41,  159 => 39,  157 => 38,  152 => 35,  144 => 33,  142 => 32,  137 => 30,  133 => 29,  128 => 27,  122 => 25,  118 => 23,  112 => 21,  110 => 20,  106 => 19,  102 => 18,  89 => 17,  86 => 16,  83 => 15,  79 => 14,  74 => 13,  57 => 12,  49 => 11,  47 => 10,  43 => 8,  37 => 6,  31 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }

    public function getSource()
    {
        return "
<li id=\"category-table-body\" data-sort-url=\"{{ path('admin_category_sort') }}\">
    {% if categories is not empty %}
        {{ _self.showCategoryTree(categories, group, false) }}
    {% else %}
        <div class=\"row empty\">{{'暂无分类记录'|trans}}</div>
    {% endif %}
</li>

{% do load_script('category/tbody') %}

{% macro showCategoryTree(categories, group, isCollapseChildren) %}
    <ul class=\"list-table sortable-list\" data-group-id=\"{{ categories[0]['parentId'] }}\">
        {% for category in categories %}
            {% set isParent = category.children|default(null) is not empty %}
            {% set isRoot = category.depth == 1 %}
            <li id=\"{{ category.id }}\" class=\"tr\" data-name=\"{{ category.name }}\" data-id=\"{{ category.id }}\" data-parent-id=\"{{ category.parentId }}\" style=\"display: {{ (not isRoot and isCollapseChildren) ? 'none' : 'block' }}\">
                <div class=\"row{{ (isParent and isCollapseChildren) ? ' row-collapse' : ' row-expand' }}\">
                    <div class=\"td col-md-7 name sort-handle\" style=\"padding-left: {{ 24 * (category.depth - 1 ) }}px; overflow: hidden\">
                        {% if isParent %}
                            <i class=\"list-table-tree-icon glyphicon glyphicon-chevron-{{ isCollapseChildren ? 'right' : 'down' }}\"></i>
                        {% else %}
                            <i class=\"list-table-tree-icon\"></i>
                        {% endif %}
                        {{ category.name }}
                    </div>
                    <div class=\"td col-md-2 code\">{{ category.code }}</div>
                    <div class=\"td col-md-3 operation\">
                        <a href=\"javascript:;\" class=\"btn btn-default btn-sm \" data-url=\"{{ path('admin_category_edit', {id:category.id}) }}\" data-toggle=\"modal\" data-target=\"#modal\">
                            <i class=\"glyphicon glyphicon-edit\"></i> {{'编辑'|trans}}
                        </a>
                        {% if group.depth > category.depth %}
                            <a href=\"javascript:;\" class=\"btn btn-default btn-sm\" data-url=\"{{ path('admin_category_create', {parentId:category.id, groupId:group.id}) }}\" data-toggle=\"modal\" data-target=\"#modal\"><i class=\"glyphicon glyphicon-plus\"></i> {{'添加子分类'|trans}}</a>
                        {% endif %}

                    </div>
                </div>
                {% if isParent %}
                    {{ _self.showCategoryTree(category.children, group, isCollapseChildren) }}
                {% endif %}
            </li>
        {% endfor %}
    </ul>
{% endmacro %}
";
    }
}

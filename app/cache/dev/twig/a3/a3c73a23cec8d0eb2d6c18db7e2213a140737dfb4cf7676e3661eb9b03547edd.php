<?php

/* TopxiaWebBundle::macro.html.twig */
class __TwigTemplate_3a19c64e6a087383c75345af1917dbab917a76ea7a76efb3bdd4cca57515057a extends Twig_Template
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
        $__internal_48343d92e248c0c5bae1d4f6bf5759ecfa52e1b1dd5af8e01783776f422c3a71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_48343d92e248c0c5bae1d4f6bf5759ecfa52e1b1dd5af8e01783776f422c3a71->enter($__internal_48343d92e248c0c5bae1d4f6bf5759ecfa52e1b1dd5af8e01783776f422c3a71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle::macro.html.twig"));

        // line 73
        echo "
";
        // line 96
        echo "
";
        // line 117
        echo "
";
        // line 139
        echo "
";
        
        $__internal_48343d92e248c0c5bae1d4f6bf5759ecfa52e1b1dd5af8e01783776f422c3a71->leave($__internal_48343d92e248c0c5bae1d4f6bf5759ecfa52e1b1dd5af8e01783776f422c3a71_prof);

    }

    // line 2
    public function getuser_avatar($__user__ = null, $__class__ = null, $__imgClass__ = null, $__card__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "imgClass" => $__imgClass__,
            "card" => $__card__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5bee905a80383970872fe655ceea95a905aa393627416c988375663153925ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_5bee905a80383970872fe655ceea95a905aa393627416c988375663153925ef8->enter($__internal_5bee905a80383970872fe655ceea95a905aa393627416c988375663153925ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "user_avatar"));

            // line 3
            if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
                // line 4
                echo "  <a class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo " ";
                if ((isset($context["card"]) ? $context["card"] : $this->getContext($context, "card"))) {
                    echo "js-user-card";
                }
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\" data-card-url=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_card_show", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\" data-user-id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
                echo "\">
    ";
                // line 5
                if (((isset($context["imgClass"]) ? $context["imgClass"] : $this->getContext($context, "imgClass")) == "avatar-md")) {
                    // line 6
                    echo "      ";
                    $context["userAvatar"] = $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "mediumAvatar", array());
                    // line 7
                    echo "    ";
                } elseif (((isset($context["imgClass"]) ? $context["imgClass"] : $this->getContext($context, "imgClass")) == "avatar-lg")) {
                    // line 8
                    echo "      ";
                    $context["userAvatar"] = $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "largeAvatar", array());
                    // line 9
                    echo "    ";
                } else {
                    // line 10
                    echo "      ";
                    $context["userAvatar"] = $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "smallAvatar", array());
                    // line 11
                    echo "    ";
                }
                // line 12
                echo "    <img class=\"";
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter((isset($context["imgClass"]) ? $context["imgClass"] : $this->getContext($context, "imgClass")), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\" src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath((isset($context["userAvatar"]) ? $context["userAvatar"] : $this->getContext($context, "userAvatar")), "avatar.png"), "html", null, true);
                echo "\">

  </a>
  ";
            } else {
                // line 16
                echo "    <a class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\" href=\"javascript:;\">
      <img class=\"";
                // line 17
                echo twig_escape_filter($this->env, ((array_key_exists("imgClass", $context)) ? (_twig_default_filter((isset($context["imgClass"]) ? $context["imgClass"] : $this->getContext($context, "imgClass")), "avatar-sm")) : ("avatar-sm")), "html", null, true);
                echo "\"  src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath("", "avatar.png"), "html", null, true);
                echo "\">
    </a>
  ";
            }
            
            $__internal_5bee905a80383970872fe655ceea95a905aa393627416c988375663153925ef8->leave($__internal_5bee905a80383970872fe655ceea95a905aa393627416c988375663153925ef8_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 23
    public function getuser_avatar_link($__user__ = null, $__size__ = null, $__options__ = array(), ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "size" => $__size__,
            "options" => $__options__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_f044dba80ba484d34664d0a28e808a1477c9087e1cc65e33bd70409377c51fd5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_f044dba80ba484d34664d0a28e808a1477c9087e1cc65e33bd70409377c51fd5->enter($__internal_f044dba80ba484d34664d0a28e808a1477c9087e1cc65e33bd70409377c51fd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "user_avatar_link"));

            // line 24
            if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
                // line 25
                echo "    <a
      class=\"avatar-link-{size} ";
                // line 26
                if (twig_in_filter("card", (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")))) {
                    echo "js-user-card";
                }
                echo "\"
      ";
                // line 27
                if (twig_in_filter("_blank", (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")))) {
                    // line 28
                    echo "        target=\"_blank\"
      ";
                }
                // line 30
                echo "      href=\"";
                if (twig_in_filter("null_link", (isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")))) {
                    echo "javascript:;";
                } else {
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                }
                echo "\"
      data-card-url=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_card_show", array("userId" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\"
      data-user-id=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()), "html", null, true);
                echo "\">
      ";
                // line 33
                echo $this->getAttribute($this, "user_avater_img", array(0 => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 1 => (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size"))), "method");
                echo "
    </a>
  ";
            } else {
                // line 36
                echo "    <a class=\"avatar-link-{size}\" href=\"javascript:;\">
      ";
                // line 37
                echo $this->getAttribute($this, "user_avater_img", array(0 => (isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), 1 => (isset($context["size"]) ? $context["size"] : $this->getContext($context, "size"))), "method");
                echo "
    </a>
  ";
            }
            
            $__internal_f044dba80ba484d34664d0a28e808a1477c9087e1cc65e33bd70409377c51fd5->leave($__internal_f044dba80ba484d34664d0a28e808a1477c9087e1cc65e33bd70409377c51fd5_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 42
    public function getuser_avater_img($__user__ = null, $__size__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "size" => $__size__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c409b71ba9e121705f0341b65111baba5cb80fa1169e41bdadf211497fd7229b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_c409b71ba9e121705f0341b65111baba5cb80fa1169e41bdadf211497fd7229b->enter($__internal_c409b71ba9e121705f0341b65111baba5cb80fa1169e41bdadf211497fd7229b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "user_avater_img"));

            // line 43
            $context["userAvatar"] = (($this->getAttribute((isset($context["user"]) ? $context["user"] : null), ((isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")) . "Avatar"), array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["user"]) ? $context["user"] : null), ((isset($context["size"]) ? $context["size"] : $this->getContext($context, "size")) . "Avatar"), array(), "array"), "")) : (""));
            // line 44
            echo "  <img class=\"avatar-{size}\"  src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getFpath((isset($context["userAvatar"]) ? $context["userAvatar"] : $this->getContext($context, "userAvatar")), "avatar.png", "user"), "html", null, true);
            echo "\">";
            
            $__internal_c409b71ba9e121705f0341b65111baba5cb80fa1169e41bdadf211497fd7229b->leave($__internal_c409b71ba9e121705f0341b65111baba5cb80fa1169e41bdadf211497fd7229b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 58
    public function getuser_link($__user__ = null, $__class__ = null, $__card__ = true, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "user" => $__user__,
            "class" => $__class__,
            "card" => $__card__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_067d480d14fcacf3952c6994fd3216444713da7d941debd533bfcf9c63cb0bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_067d480d14fcacf3952c6994fd3216444713da7d941debd533bfcf9c63cb0bf0->enter($__internal_067d480d14fcacf3952c6994fd3216444713da7d941debd533bfcf9c63cb0bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "user_link"));

            // line 59
            if ((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user"))) {
                // line 60
                echo "    <a class=\"link-dark ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("user_show", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "nickname", array()), "html", null, true);
                echo "</a>
  ";
            } else {
                // line 62
                echo "    <a class=\"link-dark ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\" href=\"javascript:;\"><del>";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("用户不存在"), "html", null, true);
                echo "</del></a>
  ";
            }
            
            $__internal_067d480d14fcacf3952c6994fd3216444713da7d941debd533bfcf9c63cb0bf0->leave($__internal_067d480d14fcacf3952c6994fd3216444713da7d941debd533bfcf9c63cb0bf0_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 66
    public function getflash_messages(...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_260cd105fbc6fa8593db00aa7b0c1c7ef6320cac1f3b98e0a1aafaf315dfd11b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_260cd105fbc6fa8593db00aa7b0c1c7ef6320cac1f3b98e0a1aafaf315dfd11b->enter($__internal_260cd105fbc6fa8593db00aa7b0c1c7ef6320cac1f3b98e0a1aafaf315dfd11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "flash_messages"));

            // line 67
            echo "  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["flashMessages"]) {
                // line 68
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["flashMessages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                    // line 69
                    echo "      <div class=\"alert alert-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">";
                    echo $context["flashMessage"];
                    echo "</div>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 71
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['flashMessages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_260cd105fbc6fa8593db00aa7b0c1c7ef6320cac1f3b98e0a1aafaf315dfd11b->leave($__internal_260cd105fbc6fa8593db00aa7b0c1c7ef6320cac1f3b98e0a1aafaf315dfd11b_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 74
    public function getbytesToSize($__bytes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "bytes" => $__bytes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_ca9d83b6bbbbe0e5ee8a854a3a37e06c60ad240d4bf1c9ed4d5fab54f267c6e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_ca9d83b6bbbbe0e5ee8a854a3a37e06c60ad240d4bf1c9ed4d5fab54f267c6e8->enter($__internal_ca9d83b6bbbbe0e5ee8a854a3a37e06c60ad240d4bf1c9ed4d5fab54f267c6e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "bytesToSize"));

            // line 75
            echo "  ";
            ob_start();
            // line 76
            echo "      
      ";
            // line 77
            $context["kilobyte"] = 1024;
            // line 78
            echo "      ";
            $context["megabyte"] = ((isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte")) * 1024);
            // line 79
            echo "      ";
            $context["gigabyte"] = ((isset($context["megabyte"]) ? $context["megabyte"] : $this->getContext($context, "megabyte")) * 1024);
            // line 80
            echo "      ";
            $context["terabyte"] = ((isset($context["gigabyte"]) ? $context["gigabyte"] : $this->getContext($context, "gigabyte")) * 1024);
            // line 81
            echo "
      ";
            // line 82
            if (((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte")))) {
                // line 83
                echo "          ";
                echo twig_escape_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) . " B"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 84
(isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["megabyte"]) ? $context["megabyte"] : $this->getContext($context, "megabyte")))) {
                // line 85
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["kilobyte"]) ? $context["kilobyte"] : $this->getContext($context, "kilobyte"))), 2, ".") . " KB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 86
(isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["gigabyte"]) ? $context["gigabyte"] : $this->getContext($context, "gigabyte")))) {
                // line 87
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["megabyte"]) ? $context["megabyte"] : $this->getContext($context, "megabyte"))), 2, ".") . " MB"), "html", null, true);
                echo "
      ";
            } elseif ((            // line 88
(isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) < (isset($context["terabyte"]) ? $context["terabyte"] : $this->getContext($context, "terabyte")))) {
                // line 89
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["gigabyte"]) ? $context["gigabyte"] : $this->getContext($context, "gigabyte"))), 2, ".") . " GB"), "html", null, true);
                echo "
      ";
            } else {
                // line 91
                echo "          ";
                echo twig_escape_filter($this->env, (twig_number_format_filter($this->env, ((isset($context["bytes"]) ? $context["bytes"] : $this->getContext($context, "bytes")) / (isset($context["terabyte"]) ? $context["terabyte"] : $this->getContext($context, "terabyte"))), 2, ".") . " TB"), "html", null, true);
                echo "
      ";
            }
            // line 93
            echo "
  ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            
            $__internal_ca9d83b6bbbbe0e5ee8a854a3a37e06c60ad240d4bf1c9ed4d5fab54f267c6e8->leave($__internal_ca9d83b6bbbbe0e5ee8a854a3a37e06c60ad240d4bf1c9ed4d5fab54f267c6e8_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 97
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
            $__internal_7719048bcc6f593563d634cef6c9e581a81b53587edd4f9229e80fcae510b83d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_7719048bcc6f593563d634cef6c9e581a81b53587edd4f9229e80fcae510b83d->enter($__internal_7719048bcc6f593563d634cef6c9e581a81b53587edd4f9229e80fcae510b83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "paginator"));

            // line 98
            echo "  ";
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "lastPage", array()) > 1)) {
                // line 99
                echo "    <nav class=\" ";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
      <ul class=\"pagination\">
        ";
                // line 101
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "firstPage", array()))) {
                    // line 102
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "firstPage", array())), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("首页"), "html", null, true);
                    echo "</a></li>
          <li><a  href=\"";
                    // line 103
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "previousPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
        ";
                }
                // line 105
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 106
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
                // line 108
                echo "
        ";
                // line 109
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "lastPage", array()))) {
                    // line 110
                    echo "          <li><a  href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nextPage", array())), "method"), "html", null, true);
                    echo "\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
          <li><a  href=\"";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getLastPage", array(), "method")), "method"), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尾页"), "html", null, true);
                    echo "</a></li>
        ";
                }
                // line 113
                echo "      </ul>
    </nav>
  ";
            }
            
            $__internal_7719048bcc6f593563d634cef6c9e581a81b53587edd4f9229e80fcae510b83d->leave($__internal_7719048bcc6f593563d634cef6c9e581a81b53587edd4f9229e80fcae510b83d_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 118
    public function getstar($__score__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "score" => $__score__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_62adb5064340e7e4640740fd122cc27aebb7d03453d2ba1e248d6baa7d2b80d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_62adb5064340e7e4640740fd122cc27aebb7d03453d2ba1e248d6baa7d2b80d8->enter($__internal_62adb5064340e7e4640740fd122cc27aebb7d03453d2ba1e248d6baa7d2b80d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "star"));

            // line 119
            echo "  ";
            $context["floorScore"] = twig_round((isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")), 0, "floor");
            // line 120
            echo "  ";
            $context["emptyNum"] = (5 - (isset($context["floorScore"]) ? $context["floorScore"] : $this->getContext($context, "floorScore")));
            // line 121
            echo "
  ";
            // line 122
            if (((isset($context["floorScore"]) ? $context["floorScore"] : $this->getContext($context, "floorScore")) > 0)) {
                // line 123
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["floorScore"]) ? $context["floorScore"] : $this->getContext($context, "floorScore"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 124
                    echo "      <i class=\"es-icon es-icon-star color-warning\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 126
                echo "  ";
            }
            // line 127
            echo "
  ";
            // line 128
            if ((((isset($context["score"]) ? $context["score"] : $this->getContext($context, "score")) - (isset($context["floorScore"]) ? $context["floorScore"] : $this->getContext($context, "floorScore"))) >= 0.5)) {
                // line 129
                echo "    ";
                $context["emptyNum"] = ((isset($context["emptyNum"]) ? $context["emptyNum"] : $this->getContext($context, "emptyNum")) - 1);
                // line 130
                echo "    <i class=\"es-icon es-icon-starhalf color-warning\"></i>
  ";
            }
            // line 132
            echo "
  ";
            // line 133
            if (((isset($context["emptyNum"]) ? $context["emptyNum"] : $this->getContext($context, "emptyNum")) > 0)) {
                // line 134
                echo "    ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(range(1, (isset($context["emptyNum"]) ? $context["emptyNum"] : $this->getContext($context, "emptyNum"))));
                foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                    // line 135
                    echo "      <i class=\"es-icon es-icon-star\"></i>
    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 137
                echo "  ";
            }
            
            $__internal_62adb5064340e7e4640740fd122cc27aebb7d03453d2ba1e248d6baa7d2b80d8->leave($__internal_62adb5064340e7e4640740fd122cc27aebb7d03453d2ba1e248d6baa7d2b80d8_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 140
    public function getajax_paginator($__paginator__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "paginator" => $__paginator__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_93914ad7f59d07aa322f2b592c43f07b44c551141264b97460df4bee6d0bc901 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_93914ad7f59d07aa322f2b592c43f07b44c551141264b97460df4bee6d0bc901->enter($__internal_93914ad7f59d07aa322f2b592c43f07b44c551141264b97460df4bee6d0bc901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "ajax_paginator"));

            // line 141
            echo "  <input class=\"js-page\" type=\"hidden\" name=\"page\" value=\"";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : null), "currentPage", array()), 1)) : (1)), "html", null, true);
            echo "\">

  ";
            // line 143
            if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "lastPage", array()) > 1)) {
                // line 144
                echo "  <nav class=\" ";
                echo twig_escape_filter($this->env, ((array_key_exists("class", $context)) ? (_twig_default_filter((isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "text-center")) : ("text-center")), "html", null, true);
                echo "\">
    <ul class=\"pagination\">
      ";
                // line 146
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "firstPage", array()))) {
                    // line 147
                    echo "        <li data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "firstPage", array())), "method"), "html", null, true);
                    echo "\"><a href=\"javascript:;\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("首页"), "html", null, true);
                    echo "</a></li>
        <li data-url=\"";
                    // line 148
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "previousPage", array())), "method"), "html", null, true);
                    echo "\"><a  href=\"javascript:;\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
      ";
                }
                // line 150
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "pages", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
                    // line 151
                    echo "        <li ";
                    if (($context["page"] == $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()))) {
                        echo "class=\"active\"";
                    }
                    echo " data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $context["page"]), "method"), "html", null, true);
                    echo "\"><a href=\"javascript:;\">";
                    echo twig_escape_filter($this->env, $context["page"], "html", null, true);
                    echo "</a></li>
      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 153
                echo "
      ";
                // line 154
                if (($this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "currentPage", array()) != $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "lastPage", array()))) {
                    // line 155
                    echo "        <li data-url=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "nextPage", array())), "method"), "html", null, true);
                    echo "\"><a  href=\"javascript:;\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
        <li data-url=\"";
                    // line 156
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getPageUrl", array(0 => $this->getAttribute((isset($context["paginator"]) ? $context["paginator"] : $this->getContext($context, "paginator")), "getLastPage", array())), "method"), "html", null, true);
                    echo "\"><a  href=\"javascript:;\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("尾页"), "html", null, true);
                    echo "</a></li>
      ";
                }
                // line 158
                echo "    </ul>
  </nav>
  ";
            }
            
            $__internal_93914ad7f59d07aa322f2b592c43f07b44c551141264b97460df4bee6d0bc901->leave($__internal_93914ad7f59d07aa322f2b592c43f07b44c551141264b97460df4bee6d0bc901_prof);

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
        return "TopxiaWebBundle::macro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  719 => 158,  712 => 156,  707 => 155,  705 => 154,  702 => 153,  687 => 151,  682 => 150,  677 => 148,  670 => 147,  668 => 146,  662 => 144,  660 => 143,  654 => 141,  639 => 140,  620 => 137,  613 => 135,  608 => 134,  606 => 133,  603 => 132,  599 => 130,  596 => 129,  594 => 128,  591 => 127,  588 => 126,  581 => 124,  576 => 123,  574 => 122,  571 => 121,  568 => 120,  565 => 119,  550 => 118,  529 => 113,  522 => 111,  517 => 110,  515 => 109,  512 => 108,  497 => 106,  492 => 105,  487 => 103,  480 => 102,  478 => 101,  472 => 99,  469 => 98,  453 => 97,  433 => 93,  427 => 91,  421 => 89,  419 => 88,  414 => 87,  412 => 86,  407 => 85,  405 => 84,  400 => 83,  398 => 82,  395 => 81,  392 => 80,  389 => 79,  386 => 78,  384 => 77,  381 => 76,  378 => 75,  363 => 74,  341 => 71,  330 => 69,  325 => 68,  320 => 67,  306 => 66,  282 => 62,  272 => 60,  270 => 59,  253 => 58,  233 => 44,  231 => 43,  215 => 42,  193 => 37,  190 => 36,  184 => 33,  180 => 32,  176 => 31,  167 => 30,  163 => 28,  161 => 27,  155 => 26,  152 => 25,  150 => 24,  133 => 23,  109 => 17,  104 => 16,  94 => 12,  91 => 11,  88 => 10,  85 => 9,  82 => 8,  79 => 7,  76 => 6,  74 => 5,  59 => 4,  57 => 3,  39 => 2,  31 => 139,  28 => 117,  25 => 96,  22 => 73,);
    }

    public function getSource()
    {
        return "{# user_avater 已废弃，请勿使用 #}
{%- macro user_avatar(user, class, imgClass, card = true) -%}
  {% if user %}
  <a class=\"{{ class }} {% if card %}js-user-card{% endif %}\" href=\"{{ path('user_show', {id:user.id}) }}\" data-card-url=\"{{ path('user_card_show', {userId:user.id}) }}\" data-user-id=\"{{ user.id }}\">
    {% if imgClass == 'avatar-md' %}
      {% set userAvatar = user.mediumAvatar %}
    {% elseif imgClass == 'avatar-lg' %}
      {% set userAvatar = user.largeAvatar %}
    {% else %}
      {% set userAvatar = user.smallAvatar %}
    {% endif %}
    <img class=\"{{ imgClass|default('avatar-sm') }}\" src=\"{{ filepath(userAvatar, 'avatar.png') }}\">

  </a>
  {% else %}
    <a class=\"{{ class }}\" href=\"javascript:;\">
      <img class=\"{{ imgClass|default('avatar-sm') }}\"  src=\"{{ filepath('', 'avatar.png') }}\">
    </a>
  {% endif %}
{%- endmacro -%}

{# options 可以传card(显示卡片), _blank(新开窗口), null_link(空链接) #}
{%- macro user_avatar_link(user, size, options = []) -%}
  {% if user %}
    <a
      class=\"avatar-link-{size} {% if 'card' in options %}js-user-card{% endif %}\"
      {% if '_blank' in options %}
        target=\"_blank\"
      {% endif %}
      href=\"{% if 'null_link' in options %}javascript:;{% else %}{{ path('user_show', {id:user.id}) }}{% endif %}\"
      data-card-url=\"{{ path('user_card_show', {userId:user.id}) }}\"
      data-user-id=\"{{ user.id }}\">
      {{ _self.user_avater_img(user, size) }}
    </a>
  {% else %}
    <a class=\"avatar-link-{size}\" href=\"javascript:;\">
      {{ _self.user_avater_img(user, size) }}
    </a>
  {% endif %}
{%- endmacro -%}

{%- macro user_avater_img(user, size) -%}
  {% set userAvatar = user[size~'Avatar']|default('') %}
  <img class=\"avatar-{size}\"  src=\"{{ filepath(userAvatar, 'avatar.png', 'user') }}\">
{%- endmacro -%}


{# {%- macro user_link(user, class, options = []) -%}
  {% if user %}
    <a
      class=\"{{ class }} {% if 'card' in options %}js-user-card{% endif %}\" {% if '_blank' in options %} target=\"_blank\" {% endif %}href=\"{{ path('user_show', {id:user.id}) }}\">{{ user.nickname }}
    </a>
  {% else %}
    <a class=\"{{ class }}\" href=\"javascript:;\"><del>用户不存在</del></a>
  {% endif %}
{%- endmacro -%} #}

{%- macro user_link(user, class, card = true) -%}
  {% if user %}
    <a class=\"link-dark {{ class }}\" href=\"{{ path('user_show', {id:user.id}) }}\">{{ user.nickname }}</a>
  {% else %}
    <a class=\"link-dark {{ class }}\" href=\"javascript:;\"><del>{{'用户不存在'|trans}}</del></a>
  {% endif %}
{%- endmacro -%}

{% macro flash_messages() %}
  {% for type, flashMessages in app.session.flashbag.all() %}
    {% for flashMessage in flashMessages %}
      <div class=\"alert alert-{{ type }}\">{{ flashMessage|raw }}</div>
    {% endfor %}
  {% endfor %}
{% endmacro %}

{% macro bytesToSize(bytes) %}
  {% spaceless %}
      
      {% set kilobyte = 1024 %}
      {% set megabyte = kilobyte * 1024 %}
      {% set gigabyte = megabyte * 1024 %}
      {% set terabyte = gigabyte * 1024 %}

      {% if bytes < kilobyte %}
          {{ bytes ~ ' B' }}
      {% elseif bytes < megabyte %}
          {{ (bytes / kilobyte)|number_format(2, '.') ~ ' KB' }}
      {% elseif bytes < gigabyte %}
          {{ (bytes / megabyte)|number_format(2, '.') ~ ' MB' }}
      {% elseif bytes < terabyte %}
          {{ (bytes / gigabyte)|number_format(2, '.') ~ ' GB' }}
      {% else %}
          {{ (bytes / terabyte)|number_format(2, '.') ~ ' TB' }}
      {% endif %}

  {% endspaceless %}
{% endmacro %}

{% macro paginator(paginator, class) %}
  {% if paginator.lastPage > 1 %}
    <nav class=\" {{ class|default('text-center') }}\">
      <ul class=\"pagination\">
        {% if paginator.currentPage != paginator.firstPage %}
          <li><a  href=\"{{ paginator.getPageUrl(paginator.firstPage) }}\">{{'首页'|trans}}</a></li>
          <li><a  href=\"{{ paginator.getPageUrl(paginator.previousPage) }}\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
        {% endif %}
        {% for page in paginator.pages %}
          <li {% if page == paginator.currentPage %}class=\"active\"{% endif %}><a href=\"{{ paginator.getPageUrl(page) }}\">{{ page }}</a></li>
        {% endfor %}

        {% if paginator.currentPage != paginator.lastPage %}
          <li><a  href=\"{{ paginator.getPageUrl(paginator.nextPage) }}\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
          <li><a  href=\"{{ paginator.getPageUrl(paginator.getLastPage()) }}\">{{'尾页'|trans}}</a></li>
        {% endif %}
      </ul>
    </nav>
  {% endif %}
{% endmacro %}

{% macro star(score) %}
  {% set floorScore = score|round(0, 'floor') %}
  {% set emptyNum = 5 - floorScore %}

  {% if floorScore > 0 %}
    {% for i in range(1, floorScore) %}
      <i class=\"es-icon es-icon-star color-warning\"></i>
    {% endfor %}
  {% endif %}

  {% if (score - floorScore) >= 0.5 %}
    {% set emptyNum = emptyNum - 1 %}
    <i class=\"es-icon es-icon-starhalf color-warning\"></i>
  {% endif %}

  {% if emptyNum > 0 %}
    {% for i in range(1, emptyNum) %}
      <i class=\"es-icon es-icon-star\"></i>
    {% endfor %}
  {% endif %}
{% endmacro %}

{% macro ajax_paginator(paginator)  %}
  <input class=\"js-page\" type=\"hidden\" name=\"page\" value=\"{{ paginator.currentPage|default(1) }}\">

  {% if paginator.lastPage > 1 %}
  <nav class=\" {{ class|default('text-center') }}\">
    <ul class=\"pagination\">
      {% if paginator.currentPage != paginator.firstPage %}
        <li data-url=\"{{ paginator.getPageUrl(paginator.firstPage) }}\"><a href=\"javascript:;\">{{'首页'|trans}}</a></li>
        <li data-url=\"{{ paginator.getPageUrl(paginator.previousPage) }}\"><a  href=\"javascript:;\"><i class=\"es-icon es-icon-chevronleft\"></i></a></li>
      {% endif %}
      {% for page in paginator.pages %}
        <li {% if page == paginator.currentPage %}class=\"active\"{% endif %} data-url=\"{{ paginator.getPageUrl(page) }}\"><a href=\"javascript:;\">{{ page }}</a></li>
      {% endfor %}

      {% if paginator.currentPage != paginator.lastPage %}
        <li data-url=\"{{ paginator.getPageUrl(paginator.nextPage) }}\"><a  href=\"javascript:;\"><i class=\"es-icon es-icon-chevronright\"></i></a></li>
        <li data-url=\"{{ paginator.getPageUrl(paginator.getLastPage) }}\"><a  href=\"javascript:;\">{{'尾页'|trans}}</a></li>
      {% endif %}
    </ul>
  </nav>
  {% endif %}
{% endmacro %}";
    }
}

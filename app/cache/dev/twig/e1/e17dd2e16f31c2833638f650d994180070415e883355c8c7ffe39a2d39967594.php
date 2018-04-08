<?php

/* TopxiaWebBundle::layout.html.twig */
class __TwigTemplate_ffae3ee6b28e6d9d06bbd2e762e5746f81629b1b78f00a4eeeddb3aabd2c82e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'keywords' => array($this, 'block_keywords'),
            'description' => array($this, 'block_description'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'head_scripts' => array($this, 'block_head_scripts'),
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'full_content' => array($this, 'block_full_content'),
            'top_content' => array($this, 'block_top_content'),
            'content' => array($this, 'block_content'),
            'bottom_content' => array($this, 'block_bottom_content'),
            'footer' => array($this, 'block_footer'),
            'footer_mobile' => array($this, 'block_footer_mobile'),
            'bottom' => array($this, 'block_bottom'),
            'esBar' => array($this, 'block_esBar'),
            'floatConsult' => array($this, 'block_floatConsult'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3476378e7eccc935ebb6be6040cb18a558083905a5d1b15511e27b527ed491f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3476378e7eccc935ebb6be6040cb18a558083905a5d1b15511e27b527ed491f3->enter($__internal_3476378e7eccc935ebb6be6040cb18a558083905a5d1b15511e27b527ed491f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaWebBundle::layout.html.twig"));

        // line 1
        $context["web_macro"] = $this->loadTemplate("TopxiaWebBundle::macro.html.twig", "TopxiaWebBundle::layout.html.twig", 1);
        // line 2
        echo "<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
";
        // line 8
        $context["mobile"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->isShowMobilePage();
        // line 9
        echo "<html lang=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getLocale", array(), "method"), "html", null, true);
        echo "\" ";
        if ((isset($context["mobile"]) ? $context["mobile"] : $this->getContext($context, "mobile"))) {
            echo " class=\"es-mobile\"";
        }
        echo ">
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>";
        // line 16
        $this->displayBlock('title', $context, $blocks);
        // line 19
        echo "</title>
  <meta name=\"keywords\" content=\"";
        // line 20
        ob_start();
        $this->displayBlock('keywords', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\" />
  <meta name=\"description\" content=\"";
        // line 21
        ob_start();
        $this->displayBlock('description', $context, $blocks);
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        echo "\" />
  <meta content=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\" name=\"csrf-token\" />
  <meta content=\"";
        // line 23
        echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "isLogin", array(), "method"), 0)) : (0)), "html", null, true);
        echo "\" name=\"is-login\" />
  <meta content=\"";
        // line 24
        echo twig_escape_filter($this->env, _twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("login_bind.weixinmob_enabled"), 0), "html", null, true);
        echo "\" name=\"is-open\" />
  ";
        // line 25
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("login_bind.verify_code", "");
        echo "
  ";
        // line 26
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.favicon")) {
            // line 27
            echo "  <link rel=\"icon\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" />
  <link rel=\"shortcut icon\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.favicon")), "html", null, true);
            echo "\" type=\"image/x-icon\" media=\"screen\"/>
  ";
        }
        // line 30
        echo "
  ";
        // line 31
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 41
        echo "
  <!--[if lt IE 9]>
    <script src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/html5shiv.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/libs/respond.min.js"), "html", null, true);
        echo "\"></script>
  <![endif]-->

  ";
        // line 47
        $this->displayBlock('head_scripts', $context, $blocks);
        // line 48
        echo "
</head>
<body ";
        // line 50
        if (((array_key_exists("bodyClass", $context)) ? (_twig_default_filter((isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "")) : (""))) {
            echo "class=\"";
            echo twig_escape_filter($this->env, (isset($context["bodyClass"]) ? $context["bodyClass"] : $this->getContext($context, "bodyClass")), "html", null, true);
            echo "\"";
        }
        echo ">

";
        // line 52
        $this->displayBlock('body', $context, $blocks);
        // line 98
        echo "
";
        // line 99
        if (twig_test_empty($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->script())) {
            // line 100
            echo "  ";
            $this->loadTemplate("TopxiaWebBundle::script_boot.html.twig", "TopxiaWebBundle::layout.html.twig", 100)->display(array_merge($context, array("script_main" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/topxiaweb/js/app.js"))));
        } else {
            // line 102
            echo "  ";
            // line 103
            echo "  ";
            $this->loadTemplate("TopxiaWebBundle::script_boot_webpack.html.twig", "TopxiaWebBundle::layout.html.twig", 103)->display($context);
        }
        // line 105
        echo "
</body>
</html>";
        
        $__internal_3476378e7eccc935ebb6be6040cb18a558083905a5d1b15511e27b527ed491f3->leave($__internal_3476378e7eccc935ebb6be6040cb18a558083905a5d1b15511e27b527ed491f3_prof);

    }

    // line 16
    public function block_title($context, array $blocks = array())
    {
        $__internal_1918b53bc6e756cb521fa80362e485116f30fafc62a13a7d712473b7922e08d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1918b53bc6e756cb521fa80362e485116f30fafc62a13a7d712473b7922e08d4->enter($__internal_1918b53bc6e756cb521fa80362e485116f30fafc62a13a7d712473b7922e08d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.name", "EduSoho"), "html", null, true);
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.slogan")) {
            echo " - ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.slogan"), "html", null, true);
        }
        if ((($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.owned", "0") != "1") || (_twig_default_filter($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("copyright.thirdCopyright"), 0) == 2))) {
            echo " - Powered By EduSoho";
        }
        
        $__internal_1918b53bc6e756cb521fa80362e485116f30fafc62a13a7d712473b7922e08d4->leave($__internal_1918b53bc6e756cb521fa80362e485116f30fafc62a13a7d712473b7922e08d4_prof);

    }

    // line 20
    public function block_keywords($context, array $blocks = array())
    {
        $__internal_047e4f982f656977627e5e3b847653e93fc9a041822bbad35bffbee4e40e09c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_047e4f982f656977627e5e3b847653e93fc9a041822bbad35bffbee4e40e09c2->enter($__internal_047e4f982f656977627e5e3b847653e93fc9a041822bbad35bffbee4e40e09c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "keywords"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.seo_keywords"), "html", null, true);
        
        $__internal_047e4f982f656977627e5e3b847653e93fc9a041822bbad35bffbee4e40e09c2->leave($__internal_047e4f982f656977627e5e3b847653e93fc9a041822bbad35bffbee4e40e09c2_prof);

    }

    // line 21
    public function block_description($context, array $blocks = array())
    {
        $__internal_6da7dd18f9229adc728afb17ce5897392b6c18e705b69767cfc1eba5ba28568a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6da7dd18f9229adc728afb17ce5897392b6c18e705b69767cfc1eba5ba28568a->enter($__internal_6da7dd18f9229adc728afb17ce5897392b6c18e705b69767cfc1eba5ba28568a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "description"));

        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("site.seo_description"), "html", null, true);
        
        $__internal_6da7dd18f9229adc728afb17ce5897392b6c18e705b69767cfc1eba5ba28568a->leave($__internal_6da7dd18f9229adc728afb17ce5897392b6c18e705b69767cfc1eba5ba28568a_prof);

    }

    // line 31
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8aa22840c3ae51e8cab3308b34a993e08a3fb468a7cd7b0ecf83600e1baa775 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8aa22840c3ae51e8cab3308b34a993e08a3fb468a7cd7b0ecf83600e1baa775->enter($__internal_f8aa22840c3ae51e8cab3308b34a993e08a3fb468a7cd7b0ecf83600e1baa775_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 32
        echo "    ";
        $context["currentTheme"] = $this->env->getExtension('Topxia\WebBundle\Twig\Extension\ThemeExtension')->getCurrentTheme();
        // line 33
        echo "    ";
        $this->loadTemplate("TopxiaWebBundle:Default:stylesheet.html.twig", "TopxiaWebBundle::layout.html.twig", 33)->display(array_merge($context, array("config" => (isset($context["currentTheme"]) ? $context["currentTheme"] : $this->getContext($context, "currentTheme")), "isEditColor" => ((array_key_exists("isEditColor", $context)) ? (_twig_default_filter((isset($context["isEditColor"]) ? $context["isEditColor"] : $this->getContext($context, "isEditColor")), false)) : (false)))));
        // line 34
        echo "
    ";
        // line 36
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('Codeages\PluginBundle\Twig\HtmlExtension')->css());
        foreach ($context['_seq'] as $context["_key"] => $context["path"]) {
            // line 37
            echo "      <link href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("build/" . $context["path"])), "html", null, true);
            echo "\" rel=\"stylesheet\" />
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['path'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "
  ";
        
        $__internal_f8aa22840c3ae51e8cab3308b34a993e08a3fb468a7cd7b0ecf83600e1baa775->leave($__internal_f8aa22840c3ae51e8cab3308b34a993e08a3fb468a7cd7b0ecf83600e1baa775_prof);

    }

    // line 47
    public function block_head_scripts($context, array $blocks = array())
    {
        $__internal_840d1d20b6de2c9ded7c38d0ef5aab78d0e6553053254453287a082f84ba00e0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_840d1d20b6de2c9ded7c38d0ef5aab78d0e6553053254453287a082f84ba00e0->enter($__internal_840d1d20b6de2c9ded7c38d0ef5aab78d0e6553053254453287a082f84ba00e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_scripts"));

        
        $__internal_840d1d20b6de2c9ded7c38d0ef5aab78d0e6553053254453287a082f84ba00e0->leave($__internal_840d1d20b6de2c9ded7c38d0ef5aab78d0e6553053254453287a082f84ba00e0_prof);

    }

    // line 52
    public function block_body($context, array $blocks = array())
    {
        $__internal_c8a307477d30290177559a4b5b5c54cb752a08ea224b646151080b6a27eb56aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8a307477d30290177559a4b5b5c54cb752a08ea224b646151080b6a27eb56aa->enter($__internal_c8a307477d30290177559a4b5b5c54cb752a08ea224b646151080b6a27eb56aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 53
        echo "  <div class=\"es-wrap\">

    ";
        // line 55
        $this->displayBlock('header', $context, $blocks);
        // line 59
        echo "
    ";
        // line 60
        $this->displayBlock('full_content', $context, $blocks);
        // line 69
        echo "
    ";
        // line 70
        $this->displayBlock('footer', $context, $blocks);
        // line 73
        echo "
    ";
        // line 74
        $this->displayBlock('footer_mobile', $context, $blocks);
        // line 76
        echo "
    ";
        // line 77
        $this->displayBlock('bottom', $context, $blocks);
        // line 78
        echo "  </div>

  ";
        // line 80
        $this->displayBlock('esBar', $context, $blocks);
        // line 85
        echo "
  ";
        // line 86
        $this->displayBlock('floatConsult', $context, $blocks);
        // line 93
        echo "
  <div id=\"login-modal\" class=\"modal\" data-url=\"";
        // line 94
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("login_ajax");
        echo "\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>
";
        
        $__internal_c8a307477d30290177559a4b5b5c54cb752a08ea224b646151080b6a27eb56aa->leave($__internal_c8a307477d30290177559a4b5b5c54cb752a08ea224b646151080b6a27eb56aa_prof);

    }

    // line 55
    public function block_header($context, array $blocks = array())
    {
        $__internal_c75fb014a3a91bbd2e5ea8bd6f4e6eae20d58ff5ded0634f6de24ef36828470c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c75fb014a3a91bbd2e5ea8bd6f4e6eae20d58ff5ded0634f6de24ef36828470c->enter($__internal_c75fb014a3a91bbd2e5ea8bd6f4e6eae20d58ff5ded0634f6de24ef36828470c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 56
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle::site-hint.html.twig", "TopxiaWebBundle::layout.html.twig", 56)->display($context);
        // line 57
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:header.html.twig", "TopxiaWebBundle::layout.html.twig", 57)->display($context);
        // line 58
        echo "    ";
        
        $__internal_c75fb014a3a91bbd2e5ea8bd6f4e6eae20d58ff5ded0634f6de24ef36828470c->leave($__internal_c75fb014a3a91bbd2e5ea8bd6f4e6eae20d58ff5ded0634f6de24ef36828470c_prof);

    }

    // line 60
    public function block_full_content($context, array $blocks = array())
    {
        $__internal_8acc31d50700d6dc3e7836653308298327afd1803dbe38c1dbde1fe65e2246f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8acc31d50700d6dc3e7836653308298327afd1803dbe38c1dbde1fe65e2246f0->enter($__internal_8acc31d50700d6dc3e7836653308298327afd1803dbe38c1dbde1fe65e2246f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "full_content"));

        // line 61
        echo "      ";
        $this->displayBlock('top_content', $context, $blocks);
        // line 62
        echo "
      <div id=\"content-container\" class=\"container\">
        ";
        // line 64
        $this->displayBlock('content', $context, $blocks);
        // line 65
        echo "      </div>

      ";
        // line 67
        $this->displayBlock('bottom_content', $context, $blocks);
        // line 68
        echo "    ";
        
        $__internal_8acc31d50700d6dc3e7836653308298327afd1803dbe38c1dbde1fe65e2246f0->leave($__internal_8acc31d50700d6dc3e7836653308298327afd1803dbe38c1dbde1fe65e2246f0_prof);

    }

    // line 61
    public function block_top_content($context, array $blocks = array())
    {
        $__internal_1de7b109c9ec7114f12962fa5ec0e050c34e051005b45a62b2641e72ee763a87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1de7b109c9ec7114f12962fa5ec0e050c34e051005b45a62b2641e72ee763a87->enter($__internal_1de7b109c9ec7114f12962fa5ec0e050c34e051005b45a62b2641e72ee763a87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "top_content"));

        
        $__internal_1de7b109c9ec7114f12962fa5ec0e050c34e051005b45a62b2641e72ee763a87->leave($__internal_1de7b109c9ec7114f12962fa5ec0e050c34e051005b45a62b2641e72ee763a87_prof);

    }

    // line 64
    public function block_content($context, array $blocks = array())
    {
        $__internal_ec7db32bb5a3a6a23d5f04eb183ac6281047142295d5de352609c82b92584341 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec7db32bb5a3a6a23d5f04eb183ac6281047142295d5de352609c82b92584341->enter($__internal_ec7db32bb5a3a6a23d5f04eb183ac6281047142295d5de352609c82b92584341_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        
        $__internal_ec7db32bb5a3a6a23d5f04eb183ac6281047142295d5de352609c82b92584341->leave($__internal_ec7db32bb5a3a6a23d5f04eb183ac6281047142295d5de352609c82b92584341_prof);

    }

    // line 67
    public function block_bottom_content($context, array $blocks = array())
    {
        $__internal_c729d4fcabf588ad2954072941b338239e541690e5ac78793bca1528d35adada = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c729d4fcabf588ad2954072941b338239e541690e5ac78793bca1528d35adada->enter($__internal_c729d4fcabf588ad2954072941b338239e541690e5ac78793bca1528d35adada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom_content"));

        
        $__internal_c729d4fcabf588ad2954072941b338239e541690e5ac78793bca1528d35adada->leave($__internal_c729d4fcabf588ad2954072941b338239e541690e5ac78793bca1528d35adada_prof);

    }

    // line 70
    public function block_footer($context, array $blocks = array())
    {
        $__internal_507b4a6ee04a29efe96e657c4b0353253f0204a4fd98a39840b8405eefdb3062 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_507b4a6ee04a29efe96e657c4b0353253f0204a4fd98a39840b8405eefdb3062->enter($__internal_507b4a6ee04a29efe96e657c4b0353253f0204a4fd98a39840b8405eefdb3062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 71
        echo "      ";
        $this->loadTemplate("TopxiaWebBundle:Default:footer.html.twig", "TopxiaWebBundle::layout.html.twig", 71)->display($context);
        // line 72
        echo "    ";
        
        $__internal_507b4a6ee04a29efe96e657c4b0353253f0204a4fd98a39840b8405eefdb3062->leave($__internal_507b4a6ee04a29efe96e657c4b0353253f0204a4fd98a39840b8405eefdb3062_prof);

    }

    // line 74
    public function block_footer_mobile($context, array $blocks = array())
    {
        $__internal_9e097b386be355a3976ea03a991be9702c1c3f2d52549a53b4b94eb66f638227 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9e097b386be355a3976ea03a991be9702c1c3f2d52549a53b4b94eb66f638227->enter($__internal_9e097b386be355a3976ea03a991be9702c1c3f2d52549a53b4b94eb66f638227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer_mobile"));

        // line 75
        echo "    ";
        
        $__internal_9e097b386be355a3976ea03a991be9702c1c3f2d52549a53b4b94eb66f638227->leave($__internal_9e097b386be355a3976ea03a991be9702c1c3f2d52549a53b4b94eb66f638227_prof);

    }

    // line 77
    public function block_bottom($context, array $blocks = array())
    {
        $__internal_9674580fe7ff236c10ed3615b8321a21c11b84cfdbdcf4c03cc76c2dd3a0986e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9674580fe7ff236c10ed3615b8321a21c11b84cfdbdcf4c03cc76c2dd3a0986e->enter($__internal_9674580fe7ff236c10ed3615b8321a21c11b84cfdbdcf4c03cc76c2dd3a0986e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "bottom"));

        
        $__internal_9674580fe7ff236c10ed3615b8321a21c11b84cfdbdcf4c03cc76c2dd3a0986e->leave($__internal_9674580fe7ff236c10ed3615b8321a21c11b84cfdbdcf4c03cc76c2dd3a0986e_prof);

    }

    // line 80
    public function block_esBar($context, array $blocks = array())
    {
        $__internal_d05db2a50b859fe57694cf1d412fbb373515e450067a11cc39fa51e8b90d2f05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d05db2a50b859fe57694cf1d412fbb373515e450067a11cc39fa51e8b90d2f05->enter($__internal_d05db2a50b859fe57694cf1d412fbb373515e450067a11cc39fa51e8b90d2f05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "esBar"));

        // line 81
        echo "    ";
        if ($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0)) {
            // line 82
            echo "        ";
            $this->loadTemplate("TopxiaWebBundle:EsBar:index.html.twig", "TopxiaWebBundle::layout.html.twig", 82)->display($context);
            // line 83
            echo "    ";
        }
        // line 84
        echo "  ";
        
        $__internal_d05db2a50b859fe57694cf1d412fbb373515e450067a11cc39fa51e8b90d2f05->leave($__internal_d05db2a50b859fe57694cf1d412fbb373515e450067a11cc39fa51e8b90d2f05_prof);

    }

    // line 86
    public function block_floatConsult($context, array $blocks = array())
    {
        $__internal_b29702f0727c7d932e7b77c9173cadce26e7efc1912067ce40ecc3d688ffd148 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b29702f0727c7d932e7b77c9173cadce26e7efc1912067ce40ecc3d688ffd148->enter($__internal_b29702f0727c7d932e7b77c9173cadce26e7efc1912067ce40ecc3d688ffd148_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "floatConsult"));

        // line 87
        echo "    ";
        if (($this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("consult.enabled", 0) && (((array_key_exists("consultDisplay", $context)) ? (_twig_default_filter((isset($context["consultDisplay"]) ? $context["consultDisplay"] : $this->getContext($context, "consultDisplay")), false)) : (false)) || (((array_key_exists("siteNav", $context)) ? (_twig_default_filter((isset($context["siteNav"]) ? $context["siteNav"] : $this->getContext($context, "siteNav")))) : ("")) == "/")))) {
            // line 88
            echo "      ";
            if ( !$this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->getSetting("esBar.enabled", 0)) {
                // line 89
                echo "        ";
                $this->loadTemplate("TopxiaWebBundle::float-consult.html.twig", "TopxiaWebBundle::layout.html.twig", 89)->display($context);
                // line 90
                echo "      ";
            }
            // line 91
            echo "    ";
        }
        // line 92
        echo "  ";
        
        $__internal_b29702f0727c7d932e7b77c9173cadce26e7efc1912067ce40ecc3d688ffd148->leave($__internal_b29702f0727c7d932e7b77c9173cadce26e7efc1912067ce40ecc3d688ffd148_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaWebBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  480 => 92,  477 => 91,  474 => 90,  471 => 89,  468 => 88,  465 => 87,  459 => 86,  452 => 84,  449 => 83,  446 => 82,  443 => 81,  437 => 80,  426 => 77,  419 => 75,  413 => 74,  406 => 72,  403 => 71,  397 => 70,  386 => 67,  375 => 64,  364 => 61,  357 => 68,  355 => 67,  351 => 65,  349 => 64,  345 => 62,  342 => 61,  336 => 60,  329 => 58,  326 => 57,  323 => 56,  317 => 55,  306 => 94,  303 => 93,  301 => 86,  298 => 85,  296 => 80,  292 => 78,  290 => 77,  287 => 76,  285 => 74,  282 => 73,  280 => 70,  277 => 69,  275 => 60,  272 => 59,  270 => 55,  266 => 53,  260 => 52,  249 => 47,  241 => 39,  232 => 37,  227 => 36,  224 => 34,  221 => 33,  218 => 32,  212 => 31,  200 => 21,  188 => 20,  174 => 17,  168 => 16,  159 => 105,  155 => 103,  153 => 102,  149 => 100,  147 => 99,  144 => 98,  142 => 52,  133 => 50,  129 => 48,  127 => 47,  121 => 44,  117 => 43,  113 => 41,  111 => 31,  108 => 30,  103 => 28,  98 => 27,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  74 => 21,  68 => 20,  65 => 19,  63 => 16,  49 => 9,  47 => 8,  40 => 2,  38 => 1,);
    }

    public function getSource()
    {
        return "{% import \"TopxiaWebBundle::macro.html.twig\" as web_macro %}
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class=\"lt-ie9 lt-ie8 lt-ie7\"> <![endif]-->
<!--[if IE 7]>         <html class=\"lt-ie9 lt-ie8\"> <![endif]-->
<!--[if IE 8]>         <html class=\"lt-ie9\"> <![endif]-->
<!--[if gt IE 8]><!--> <html> <!--<![endif]-->
{# returns app.request.locale if available and app.request.defaultLocale if app.request.locale is not set#}
{% set mobile = is_show_mobile_page() %}
<html lang=\"{{ app.request.getLocale() }}\" {% if mobile %} class=\"es-mobile\"{% endif %}>
<head>
  <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,Chrome=1\">
  <meta name=\"renderer\" content=\"webkit\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no\">
  <title>
    {%- block title -%}
      {{ setting('site.name', 'EduSoho') }}{% if setting('site.slogan') %} - {{ setting('site.slogan') }}{% endif %}{% if  setting('copyright.owned','0') != '1' or setting('copyright.thirdCopyright')|default(0) == 2 %} - Powered By EduSoho{% endif %}
    {%- endblock -%}
  </title>
  <meta name=\"keywords\" content=\"{% spaceless %}{% block keywords %}{{ setting('site.seo_keywords') }}{% endblock %}{% endspaceless %}\" />
  <meta name=\"description\" content=\"{% spaceless %}{% block description %}{{ setting('site.seo_description') }}{% endblock %}{% endspaceless %}\" />
  <meta content=\"{{ csrf_token('site') }}\" name=\"csrf-token\" />
  <meta content=\"{{ app.user.isLogin()|default(0) }}\" name=\"is-login\" />
  <meta content=\"{{ setting('login_bind.weixinmob_enabled')|default(0) }}\" name=\"is-open\" />
  {{ setting('login_bind.verify_code', '')|raw }}
  {% if setting('site.favicon') %}
  <link rel=\"icon\" href=\"{{ asset(setting('site.favicon')) }}\" type=\"image/x-icon\" />
  <link rel=\"shortcut icon\" href=\"{{ asset(setting('site.favicon')) }}\" type=\"image/x-icon\" media=\"screen\"/>
  {% endif %}

  {% block stylesheets %}
    {% set currentTheme = current_theme() %}
    {% include 'TopxiaWebBundle:Default:stylesheet.html.twig' with {config: currentTheme, isEditColor: isEditColor|default(false)} %}

    {# webpack #}
    {% for path in css() %}
      <link href=\"{{ asset('build/' ~ path) }}\" rel=\"stylesheet\" />
    {% endfor %}

  {% endblock %}

  <!--[if lt IE 9]>
    <script src=\"{{ asset('assets/libs/html5shiv.js') }}\"></script>
    <script src=\"{{ asset('assets/libs/respond.min.js') }}\"></script>
  <![endif]-->

  {% block head_scripts %}{% endblock %}

</head>
<body {% if bodyClass|default('') %}class=\"{{ bodyClass }}\"{% endif %}>

{% block body %}
  <div class=\"es-wrap\">

    {% block header %}
      {% include 'TopxiaWebBundle::site-hint.html.twig' %}
      {% include 'TopxiaWebBundle:Default:header.html.twig' %}
    {% endblock %}

    {% block full_content %}
      {% block top_content %}{% endblock %}

      <div id=\"content-container\" class=\"container\">
        {% block content %}{% endblock %}
      </div>

      {% block bottom_content %}{% endblock %}
    {% endblock %}

    {% block footer %}
      {% include 'TopxiaWebBundle:Default:footer.html.twig' %}
    {% endblock %}

    {% block footer_mobile %}
    {% endblock %}

    {% block bottom %}{% endblock %}
  </div>

  {% block esBar %}
    {% if setting('esBar.enabled', 0) %}
        {% include 'TopxiaWebBundle:EsBar:index.html.twig' %}
    {% endif %}
  {% endblock %}

  {% block floatConsult %}
    {% if setting('consult.enabled', 0) and (consultDisplay|default(false) or siteNav|default() == '/' ) %}
      {% if not setting('esBar.enabled',0) %}
        {% include 'TopxiaWebBundle::float-consult.html.twig' %}
      {% endif %}
    {% endif %}
  {% endblock %}

  <div id=\"login-modal\" class=\"modal\" data-url=\"{{ path('login_ajax') }}\"></div>
  <div id=\"modal\" class=\"modal\"></div>
  <div id=\"attachment-modal\" class=\"modal\"></div>
{% endblock %}

{% if script() is empty %}
  {% include 'TopxiaWebBundle::script_boot.html.twig' with {script_main: asset('bundles/topxiaweb/js/app.js')} %}
{% else %}
  {# webpack #}
  {% include 'TopxiaWebBundle::script_boot_webpack.html.twig' %}
{% endif %}

</body>
</html>";
    }
}

<?php

/* TopxiaAdminBundle:System:site.html.twig */
class __TwigTemplate_d3f2ae762535b1d8e25ccc40b1b039c7495f77a6d39e69b06d011c1652016dbb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TopxiaAdminBundle::layout.html.twig", "TopxiaAdminBundle:System:site.html.twig", 1);
        $this->blocks = array(
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TopxiaAdminBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e8f668dabc6dbcfc046961262100f8f2b044c1d012f94edb596ebf788ea5bfee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8f668dabc6dbcfc046961262100f8f2b044c1d012f94edb596ebf788ea5bfee->enter($__internal_e8f668dabc6dbcfc046961262100f8f2b044c1d012f94edb596ebf788ea5bfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TopxiaAdminBundle:System:site.html.twig"));

        // line 3
        $context["menu"] = "admin_setting_message";
        // line 5
        $context["script_controller"] = "setting/site";
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e8f668dabc6dbcfc046961262100f8f2b044c1d012f94edb596ebf788ea5bfee->leave($__internal_e8f668dabc6dbcfc046961262100f8f2b044c1d012f94edb596ebf788ea5bfee_prof);

    }

    // line 7
    public function block_main($context, array $blocks = array())
    {
        $__internal_523de4edf8299e817ab3b8f990cf5f710370e4ac5970fb3d3bcc788680255b5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_523de4edf8299e817ab3b8f990cf5f710370e4ac5970fb3d3bcc788680255b5d->enter($__internal_523de4edf8299e817ab3b8f990cf5f710370e4ac5970fb3d3bcc788680255b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        // line 8
        echo "
";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["web_macro"]) ? $context["web_macro"] : $this->getContext($context, "web_macro")), "flash_messages", array(), "method"), "html", null, true);
        echo "

<form class=\"form-horizontal\" id=\"site-form\" method=\"post\">
  
  <fieldset>
    
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站名称"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "name", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"slogan\">";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站副标题"), "html", null, true);
        echo "</label> 
      </div>
      <div class=\"col-md-8 controls\">
         <input type=\"text\" id=\"slogan\" name=\"slogan\" class=\"form-control\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "slogan", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"url\">";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站域名"), "html", null, true);
        echo "</label> 
      </div>
      <div class=\"col-md-8 controls\">
       <input type=\"text\" id=\"url\" name=\"url\" class=\"form-control\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "url", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\">";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("以\"%http%://\"开头", array("%http%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "getScheme", array(), "method"))), "html", null, true);
        echo "</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"logo\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站LOGO"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-logo-container\">";
        // line 48
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "logo", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "logo", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <a class=\"btn btn-default\" id=\"site-logo-upload\" 
        data-upload-token=\"";
        // line 50
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_logo_upload");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
        <button class=\"btn btn-default\" id=\"site-logo-remove\" type=\"button\" data-url=\"";
        // line 52
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_logo_remove");
        echo "\" ";
        if ( !$this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "logo", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
        <p class=\"help-block\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传png, gif, jpg格式的图片文件。LOGO图片建议不要超过250*50。网校logo设置后显示顶部导航左上角,"), "html", null, true);
        echo "<a href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("homepage");
        echo "\" target=\"_blank\">点击查看</a></p>
        <input type=\"hidden\" name=\"logo\" value=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "logo", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"favicon\">";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("浏览器图标"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-favicon-container\">";
        // line 63
        if ($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "favicon", array())) {
            echo "<img src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "favicon", array())), "html", null, true);
            echo "\">";
        }
        echo "</div>
        <a class=\"btn btn-default\" 
        id=\"site-favicon-upload\" 
        data-upload-token=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('Topxia\WebBundle\Twig\Extension\WebExtension')->makeUpoadToken("system", "image"), "html", null, true);
        echo "\"
        data-goto-url=\"";
        // line 67
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_favicon_upload");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("上传"), "html", null, true);
        echo "</a>
        <button class=\"btn btn-default\" 
        id=\"site-favicon-remove\" 
        type=\"button\" data-url=\"";
        // line 70
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("admin_setting_favicon_remove");
        echo "\" ";
        if ( !$this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "favicon", array())) {
            echo "style=\"display:none;\"";
        }
        echo ">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("删除"), "html", null, true);
        echo "</button>
        <p class=\"help-block\">";
        // line 71
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("请上传ico格式的图标文件, 建议大小16*16或者32*32。"), "html", null, true);
        echo "</p>
        <input type=\"hidden\" name=\"favicon\" value=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "favicon", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_keywords\">";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SEO关键词"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_keywords\" name=\"seo_keywords\" class=\"form-control\" value=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "seo_keywords", array()), "html", null, true);
        echo "\">
        <p class=\"help-block\">";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("设置多个关键词请用半角逗号\",\"隔开。"), "html", null, true);
        echo "</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_description\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("SEO描述信息"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_description\" name=\"seo_description\" class=\"form-control\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "seo_description", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"master_email\">";
        // line 97
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("管理员邮箱地址"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"master_email\" name=\"master_email\" class=\"form-control\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "master_email", array()), "html", null, true);
        echo "\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"copyright\">";
        // line 106
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("课程内容版权方"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"copyright\" name=\"copyright\" class=\"form-control\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "copyright", array()), "html", null, true);
        echo "\">
        <div class=\"help-block\">";
        // line 110
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("您可以填写网站名称或公司名称。"), "html", null, true);
        echo "</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"icp\">";
        // line 116
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("ICP备案号"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"icp\" name=\"icp\" class=\"form-control\" value=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "icp", array()), "html", null, true);
        echo "\">
      </div>
    </div>

  </fieldset>

<br>

  <fieldset>
    <legend>";
        // line 128
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站统计分析代码部署"), "html", null, true);
        echo "</legend>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"analytics\">";
        // line 131
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("统计分析代码"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls\">

        <textarea id=\"analytics\" name=\"analytics\" class=\"form-control\" rows=\"4\">";
        // line 135
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "analytics", array()), "html", null, true);
        echo "</textarea>

        <p class=\"help-block\">统计代码是网站统计软件发布的一段代码，用以统计添加统计代码的网站的数据。</p>
        <p class=\"help-block\">包括网站的访客来源，从哪个网页跳转到此网站，搜索什么关键词到网站，一共有多少人访问，每天多少人多少IP，平均访问时间是多少等等数据。</p>
        <p class=\"help-block\">统计分析工具可以分析网校访问趋势，以及根据数据做推广调整，优化网校资源，建议使用<a href=\"http://tongji.baidu.com\" target=\"_blank\">百度统计</a>、<a href=\"http://ta.qq.com/\" target=\"_blank\">腾讯分析</a>或者<a target=\"_blank\" href=\"http://www.umeng.com/\">CNZZ。</a></p>
      </div>
    </div>
  </fieldset>

  <fieldset style=\"display:none;\">
    <legend>";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("站点状态"), "html", null, true);
        echo "</legend>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label >";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站状态"), "html", null, true);
        echo "</label>
      </div>
      <div class=\"col-md-8 controls radios\">
        ";
        // line 152
        echo $this->env->getExtension('Topxia\WebBundle\Twig\Extension\HtmlExtension')->radios("status", array("open" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("开放"), "closed" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("关闭")), $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "status", array()));
        echo "
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label>";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站关闭公告"), "html", null, true);
        echo "</label>
      </div>
        <div class=\"col-md-8 controls\">
          <textarea id=\"closed_note\" name=\"closed_note\" class=\"form-control\" rows=\"4\">";
        // line 161
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "closed_note", array()), "html", null, true);
        echo "</textarea>
        <p class=\"help-block\">";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("网站处于关闭状态时，用户访问网站将显示此公告，支持HTML代码"), "html", null, true);
        echo "。</p>
      </div>
    </div>
  </fieldset>

  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">";
        // line 169
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("提交"), "html", null, true);
        echo "</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 173
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderCsrfToken("site"), "html", null, true);
        echo "\">
  
</form>

";
        
        $__internal_523de4edf8299e817ab3b8f990cf5f710370e4ac5970fb3d3bcc788680255b5d->leave($__internal_523de4edf8299e817ab3b8f990cf5f710370e4ac5970fb3d3bcc788680255b5d_prof);

    }

    public function getTemplateName()
    {
        return "TopxiaAdminBundle:System:site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 173,  363 => 169,  353 => 162,  349 => 161,  343 => 158,  334 => 152,  328 => 149,  321 => 145,  308 => 135,  301 => 131,  295 => 128,  283 => 119,  277 => 116,  268 => 110,  264 => 109,  258 => 106,  249 => 100,  243 => 97,  234 => 91,  228 => 88,  219 => 82,  215 => 81,  209 => 78,  200 => 72,  196 => 71,  186 => 70,  178 => 67,  174 => 66,  164 => 63,  158 => 60,  149 => 54,  143 => 53,  133 => 52,  127 => 51,  123 => 50,  114 => 48,  108 => 45,  99 => 39,  95 => 38,  89 => 35,  80 => 29,  74 => 26,  65 => 20,  59 => 17,  48 => 9,  45 => 8,  39 => 7,  32 => 1,  30 => 5,  28 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends 'TopxiaAdminBundle::layout.html.twig' %}

{% set menu = 'admin_setting_message' %}

{% set script_controller = 'setting/site' %}

{% block main %}

{{ web_macro.flash_messages() }}

<form class=\"form-horizontal\" id=\"site-form\" method=\"post\">
  
  <fieldset>
    
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"name\">{{'网站名称'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"name\" name=\"name\" class=\"form-control\" value=\"{{site.name}}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"slogan\">{{'网站副标题'|trans}}</label> 
      </div>
      <div class=\"col-md-8 controls\">
         <input type=\"text\" id=\"slogan\" name=\"slogan\" class=\"form-control\" value=\"{{site.slogan}}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\"> 
        <label for=\"url\">{{'网站域名'|trans}}</label> 
      </div>
      <div class=\"col-md-8 controls\">
       <input type=\"text\" id=\"url\" name=\"url\" class=\"form-control\" value=\"{{site.url}}\">
        <p class=\"help-block\">{{'以\"%http%://\"开头'|trans({'%http%':app.request.getScheme()})}}</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"logo\">{{'网站LOGO'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-logo-container\">{% if site.logo %}<img src=\"{{ asset(site.logo) }}\">{% endif %}</div>
        <a class=\"btn btn-default\" id=\"site-logo-upload\" 
        data-upload-token=\"{{ upload_token('system', 'image') }}\"
        data-goto-url=\"{{ path('admin_setting_logo_upload') }}\">{{'上传'|trans}}</a>
        <button class=\"btn btn-default\" id=\"site-logo-remove\" type=\"button\" data-url=\"{{ path('admin_setting_logo_remove') }}\" {% if not site.logo %}style=\"display:none;\"{% endif %}>{{'删除'|trans}}</button>
        <p class=\"help-block\">{{'请上传png, gif, jpg格式的图片文件。LOGO图片建议不要超过250*50。网校logo设置后显示顶部导航左上角,'|trans}}<a href=\"{{ path('homepage') }}\" target=\"_blank\">点击查看</a></p>
        <input type=\"hidden\" name=\"logo\" value=\"{{ site.logo }}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"favicon\">{{'浏览器图标'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <div id=\"site-favicon-container\">{% if site.favicon %}<img src=\"{{ asset(site.favicon) }}\">{% endif %}</div>
        <a class=\"btn btn-default\" 
        id=\"site-favicon-upload\" 
        data-upload-token=\"{{ upload_token('system', 'image') }}\"
        data-goto-url=\"{{ path('admin_setting_favicon_upload') }}\">{{'上传'|trans}}</a>
        <button class=\"btn btn-default\" 
        id=\"site-favicon-remove\" 
        type=\"button\" data-url=\"{{ path('admin_setting_favicon_remove') }}\" {% if not site.favicon %}style=\"display:none;\"{% endif %}>{{'删除'|trans}}</button>
        <p class=\"help-block\">{{'请上传ico格式的图标文件, 建议大小16*16或者32*32。'|trans}}</p>
        <input type=\"hidden\" name=\"favicon\" value=\"{{ site.favicon }}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_keywords\">{{'SEO关键词'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_keywords\" name=\"seo_keywords\" class=\"form-control\" value=\"{{site.seo_keywords}}\">
        <p class=\"help-block\">{{'设置多个关键词请用半角逗号\",\"隔开。'|trans}}</p>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"seo_description\">{{'SEO描述信息'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"seo_description\" name=\"seo_description\" class=\"form-control\" value=\"{{site.seo_description}}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"master_email\">{{'管理员邮箱地址'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"master_email\" name=\"master_email\" class=\"form-control\" value=\"{{site.master_email}}\">
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"copyright\">{{'课程内容版权方'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"copyright\" name=\"copyright\" class=\"form-control\" value=\"{{site.copyright}}\">
        <div class=\"help-block\">{{'您可以填写网站名称或公司名称。'|trans}}</div>
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"icp\">{{'ICP备案号'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">
        <input type=\"text\" id=\"icp\" name=\"icp\" class=\"form-control\" value=\"{{site.icp}}\">
      </div>
    </div>

  </fieldset>

<br>

  <fieldset>
    <legend>{{'网站统计分析代码部署'|trans}}</legend>
    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label for=\"analytics\">{{'统计分析代码'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls\">

        <textarea id=\"analytics\" name=\"analytics\" class=\"form-control\" rows=\"4\">{{site.analytics}}</textarea>

        <p class=\"help-block\">统计代码是网站统计软件发布的一段代码，用以统计添加统计代码的网站的数据。</p>
        <p class=\"help-block\">包括网站的访客来源，从哪个网页跳转到此网站，搜索什么关键词到网站，一共有多少人访问，每天多少人多少IP，平均访问时间是多少等等数据。</p>
        <p class=\"help-block\">统计分析工具可以分析网校访问趋势，以及根据数据做推广调整，优化网校资源，建议使用<a href=\"http://tongji.baidu.com\" target=\"_blank\">百度统计</a>、<a href=\"http://ta.qq.com/\" target=\"_blank\">腾讯分析</a>或者<a target=\"_blank\" href=\"http://www.umeng.com/\">CNZZ。</a></p>
      </div>
    </div>
  </fieldset>

  <fieldset style=\"display:none;\">
    <legend>{{'站点状态'|trans}}</legend>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label >{{'网站状态'|trans}}</label>
      </div>
      <div class=\"col-md-8 controls radios\">
        {{ radios('status', {open:'开放'|trans, closed:'关闭'|trans}, site.status) }}
      </div>
    </div>

    <div class=\"form-group\">
      <div class=\"col-md-2 control-label\">
        <label>{{'网站关闭公告'|trans}}</label>
      </div>
        <div class=\"col-md-8 controls\">
          <textarea id=\"closed_note\" name=\"closed_note\" class=\"form-control\" rows=\"4\">{{site.closed_note}}</textarea>
        <p class=\"help-block\">{{'网站处于关闭状态时，用户访问网站将显示此公告，支持HTML代码'|trans}}。</p>
      </div>
    </div>
  </fieldset>

  <div class=\"row form-group\">
    <div class=\"controls col-md-offset-2 col-md-8\">
      <button type=\"submit\" class=\"btn btn-primary\">{{'提交'|trans}}</button>
    </div>
  </div>

  <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('site') }}\">
  
</form>

{% endblock %}";
    }
}

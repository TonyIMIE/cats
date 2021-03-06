<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_eba3c8af72deb0e5356eafa45d35368d9832264e4477f3c7aa97bccfa39f2160 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_26fb761433a31024b40cde5146e8edeb91f2dc0991e94d49204092e90d6805f6 = $this->env->getExtension("native_profiler");
        $__internal_26fb761433a31024b40cde5146e8edeb91f2dc0991e94d49204092e90d6805f6->enter($__internal_26fb761433a31024b40cde5146e8edeb91f2dc0991e94d49204092e90d6805f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26fb761433a31024b40cde5146e8edeb91f2dc0991e94d49204092e90d6805f6->leave($__internal_26fb761433a31024b40cde5146e8edeb91f2dc0991e94d49204092e90d6805f6_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_e30b8636a4af46056bdfc02cde0c9d4bf2adc37a9665cb0eb9ab029ddb1c5b5f = $this->env->getExtension("native_profiler");
        $__internal_e30b8636a4af46056bdfc02cde0c9d4bf2adc37a9665cb0eb9ab029ddb1c5b5f->enter($__internal_e30b8636a4af46056bdfc02cde0c9d4bf2adc37a9665cb0eb9ab029ddb1c5b5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_e30b8636a4af46056bdfc02cde0c9d4bf2adc37a9665cb0eb9ab029ddb1c5b5f->leave($__internal_e30b8636a4af46056bdfc02cde0c9d4bf2adc37a9665cb0eb9ab029ddb1c5b5f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_5c1b1e87040308b97137fbe630dedfdc795e99cd6005c61a4339b62505de2ab6 = $this->env->getExtension("native_profiler");
        $__internal_5c1b1e87040308b97137fbe630dedfdc795e99cd6005c61a4339b62505de2ab6->enter($__internal_5c1b1e87040308b97137fbe630dedfdc795e99cd6005c61a4339b62505de2ab6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5c1b1e87040308b97137fbe630dedfdc795e99cd6005c61a4339b62505de2ab6->leave($__internal_5c1b1e87040308b97137fbe630dedfdc795e99cd6005c61a4339b62505de2ab6_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_210812df72065e5daa000f68de3a046888194cd025f7d4c78263a6677136977d = $this->env->getExtension("native_profiler");
        $__internal_210812df72065e5daa000f68de3a046888194cd025f7d4c78263a6677136977d->enter($__internal_210812df72065e5daa000f68de3a046888194cd025f7d4c78263a6677136977d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_210812df72065e5daa000f68de3a046888194cd025f7d4c78263a6677136977d->leave($__internal_210812df72065e5daa000f68de3a046888194cd025f7d4c78263a6677136977d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */

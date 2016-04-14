<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_05391b21767608cca186ef7970149748c9bcef53521e4e3423c34bbd3793925d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_31f246579118ab90aeee484bbf2d3d5e2dd0df50a8fac826925d806d4f2fabb4 = $this->env->getExtension("native_profiler");
        $__internal_31f246579118ab90aeee484bbf2d3d5e2dd0df50a8fac826925d806d4f2fabb4->enter($__internal_31f246579118ab90aeee484bbf2d3d5e2dd0df50a8fac826925d806d4f2fabb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_31f246579118ab90aeee484bbf2d3d5e2dd0df50a8fac826925d806d4f2fabb4->leave($__internal_31f246579118ab90aeee484bbf2d3d5e2dd0df50a8fac826925d806d4f2fabb4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5d3421283eecce60e9ad7b8dac7d4de15c28797760989211ca6a730ad1f18d2d = $this->env->getExtension("native_profiler");
        $__internal_5d3421283eecce60e9ad7b8dac7d4de15c28797760989211ca6a730ad1f18d2d->enter($__internal_5d3421283eecce60e9ad7b8dac7d4de15c28797760989211ca6a730ad1f18d2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5d3421283eecce60e9ad7b8dac7d4de15c28797760989211ca6a730ad1f18d2d->leave($__internal_5d3421283eecce60e9ad7b8dac7d4de15c28797760989211ca6a730ad1f18d2d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_44c165f77b61d489b46585604e04fe92f6dc32a41ff06db3a809a97cb5cc75f7 = $this->env->getExtension("native_profiler");
        $__internal_44c165f77b61d489b46585604e04fe92f6dc32a41ff06db3a809a97cb5cc75f7->enter($__internal_44c165f77b61d489b46585604e04fe92f6dc32a41ff06db3a809a97cb5cc75f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_44c165f77b61d489b46585604e04fe92f6dc32a41ff06db3a809a97cb5cc75f7->leave($__internal_44c165f77b61d489b46585604e04fe92f6dc32a41ff06db3a809a97cb5cc75f7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0f5c9fd791043df2ec96ac36a3a291dd00b9736d8690c024239470dcd79793ac = $this->env->getExtension("native_profiler");
        $__internal_0f5c9fd791043df2ec96ac36a3a291dd00b9736d8690c024239470dcd79793ac->enter($__internal_0f5c9fd791043df2ec96ac36a3a291dd00b9736d8690c024239470dcd79793ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0f5c9fd791043df2ec96ac36a3a291dd00b9736d8690c024239470dcd79793ac->leave($__internal_0f5c9fd791043df2ec96ac36a3a291dd00b9736d8690c024239470dcd79793ac_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */

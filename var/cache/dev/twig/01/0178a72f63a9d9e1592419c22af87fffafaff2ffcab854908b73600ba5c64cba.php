<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_7a680ee82bf589b563e86fd1a0191c83fadfb700ff0de184692f045a4818c6db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_7f690bc71d4432da3181d66b1cc56fef5515157081a6c82506164f96681f6e32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f690bc71d4432da3181d66b1cc56fef5515157081a6c82506164f96681f6e32->enter($__internal_7f690bc71d4432da3181d66b1cc56fef5515157081a6c82506164f96681f6e32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_193806789eedace33f46401d2704b7e7b196d2451a9b902e0d1d6562518f21e8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_193806789eedace33f46401d2704b7e7b196d2451a9b902e0d1d6562518f21e8->enter($__internal_193806789eedace33f46401d2704b7e7b196d2451a9b902e0d1d6562518f21e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7f690bc71d4432da3181d66b1cc56fef5515157081a6c82506164f96681f6e32->leave($__internal_7f690bc71d4432da3181d66b1cc56fef5515157081a6c82506164f96681f6e32_prof);

        
        $__internal_193806789eedace33f46401d2704b7e7b196d2451a9b902e0d1d6562518f21e8->leave($__internal_193806789eedace33f46401d2704b7e7b196d2451a9b902e0d1d6562518f21e8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_88828435d62d28ee338b3f2558635c0680a940a289c450f2f979dc216539d8df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_88828435d62d28ee338b3f2558635c0680a940a289c450f2f979dc216539d8df->enter($__internal_88828435d62d28ee338b3f2558635c0680a940a289c450f2f979dc216539d8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_88d6c7833508b125d1f5801e6e592a0f5b13ae4a60f451d6ef32ad67ef5bd1c9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88d6c7833508b125d1f5801e6e592a0f5b13ae4a60f451d6ef32ad67ef5bd1c9->enter($__internal_88d6c7833508b125d1f5801e6e592a0f5b13ae4a60f451d6ef32ad67ef5bd1c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_88d6c7833508b125d1f5801e6e592a0f5b13ae4a60f451d6ef32ad67ef5bd1c9->leave($__internal_88d6c7833508b125d1f5801e6e592a0f5b13ae4a60f451d6ef32ad67ef5bd1c9_prof);

        
        $__internal_88828435d62d28ee338b3f2558635c0680a940a289c450f2f979dc216539d8df->leave($__internal_88828435d62d28ee338b3f2558635c0680a940a289c450f2f979dc216539d8df_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d0852547e47f2c2ba2fdec7d1bea375a62a10febf2b2014c75f03af471f87b8f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0852547e47f2c2ba2fdec7d1bea375a62a10febf2b2014c75f03af471f87b8f->enter($__internal_d0852547e47f2c2ba2fdec7d1bea375a62a10febf2b2014c75f03af471f87b8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_415a4f86ba98fb89df69d6430222d4445566e5af8b1cb877efb0fadab9cc5b52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_415a4f86ba98fb89df69d6430222d4445566e5af8b1cb877efb0fadab9cc5b52->enter($__internal_415a4f86ba98fb89df69d6430222d4445566e5af8b1cb877efb0fadab9cc5b52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_415a4f86ba98fb89df69d6430222d4445566e5af8b1cb877efb0fadab9cc5b52->leave($__internal_415a4f86ba98fb89df69d6430222d4445566e5af8b1cb877efb0fadab9cc5b52_prof);

        
        $__internal_d0852547e47f2c2ba2fdec7d1bea375a62a10febf2b2014c75f03af471f87b8f->leave($__internal_d0852547e47f2c2ba2fdec7d1bea375a62a10febf2b2014c75f03af471f87b8f_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_6be49f2e0082df12932f052d4012f2666a1a230d94e58143a3afbfdb878ab56c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6be49f2e0082df12932f052d4012f2666a1a230d94e58143a3afbfdb878ab56c->enter($__internal_6be49f2e0082df12932f052d4012f2666a1a230d94e58143a3afbfdb878ab56c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1c21a44f1a300b913fcb85c0b929d95d6ee50d979bd70424276adf16f8ed9010 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c21a44f1a300b913fcb85c0b929d95d6ee50d979bd70424276adf16f8ed9010->enter($__internal_1c21a44f1a300b913fcb85c0b929d95d6ee50d979bd70424276adf16f8ed9010_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_1c21a44f1a300b913fcb85c0b929d95d6ee50d979bd70424276adf16f8ed9010->leave($__internal_1c21a44f1a300b913fcb85c0b929d95d6ee50d979bd70424276adf16f8ed9010_prof);

        
        $__internal_6be49f2e0082df12932f052d4012f2666a1a230d94e58143a3afbfdb878ab56c->leave($__internal_6be49f2e0082df12932f052d4012f2666a1a230d94e58143a3afbfdb878ab56c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

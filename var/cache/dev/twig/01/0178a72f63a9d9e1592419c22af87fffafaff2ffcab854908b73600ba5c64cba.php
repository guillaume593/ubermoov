<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_7a680ee82bf589b563e86fd1a0191c83fadfb700ff0de184692f045a4818c6db extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_e3d698d49df6f9c681f08c9e195c5cc843ac9b612c414693f5070dbf1f33f848 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3d698d49df6f9c681f08c9e195c5cc843ac9b612c414693f5070dbf1f33f848->enter($__internal_e3d698d49df6f9c681f08c9e195c5cc843ac9b612c414693f5070dbf1f33f848_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_4827302683598f0b9c664028601c5304b4104a8be4e30f46de7dfd134d510d17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4827302683598f0b9c664028601c5304b4104a8be4e30f46de7dfd134d510d17->enter($__internal_4827302683598f0b9c664028601c5304b4104a8be4e30f46de7dfd134d510d17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3d698d49df6f9c681f08c9e195c5cc843ac9b612c414693f5070dbf1f33f848->leave($__internal_e3d698d49df6f9c681f08c9e195c5cc843ac9b612c414693f5070dbf1f33f848_prof);

        
        $__internal_4827302683598f0b9c664028601c5304b4104a8be4e30f46de7dfd134d510d17->leave($__internal_4827302683598f0b9c664028601c5304b4104a8be4e30f46de7dfd134d510d17_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_68f9711c2b12477c604f014817166f2a3fd5eaebe540f5795ee0cb3c57410488 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_68f9711c2b12477c604f014817166f2a3fd5eaebe540f5795ee0cb3c57410488->enter($__internal_68f9711c2b12477c604f014817166f2a3fd5eaebe540f5795ee0cb3c57410488_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1b5780095d3a3e8c8941abafa4bdbd8ae6323cff590004821cfa09df81c356ce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5780095d3a3e8c8941abafa4bdbd8ae6323cff590004821cfa09df81c356ce->enter($__internal_1b5780095d3a3e8c8941abafa4bdbd8ae6323cff590004821cfa09df81c356ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1b5780095d3a3e8c8941abafa4bdbd8ae6323cff590004821cfa09df81c356ce->leave($__internal_1b5780095d3a3e8c8941abafa4bdbd8ae6323cff590004821cfa09df81c356ce_prof);

        
        $__internal_68f9711c2b12477c604f014817166f2a3fd5eaebe540f5795ee0cb3c57410488->leave($__internal_68f9711c2b12477c604f014817166f2a3fd5eaebe540f5795ee0cb3c57410488_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_efdadab46e506b0fca79f609b32da3210bddd5aa5b2a67ac4d7fa18c64022578 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efdadab46e506b0fca79f609b32da3210bddd5aa5b2a67ac4d7fa18c64022578->enter($__internal_efdadab46e506b0fca79f609b32da3210bddd5aa5b2a67ac4d7fa18c64022578_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_763aba1cdfc03148e4e575d11a93b37acf85ba45e01dfa310bb964421cdd5ea6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_763aba1cdfc03148e4e575d11a93b37acf85ba45e01dfa310bb964421cdd5ea6->enter($__internal_763aba1cdfc03148e4e575d11a93b37acf85ba45e01dfa310bb964421cdd5ea6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_763aba1cdfc03148e4e575d11a93b37acf85ba45e01dfa310bb964421cdd5ea6->leave($__internal_763aba1cdfc03148e4e575d11a93b37acf85ba45e01dfa310bb964421cdd5ea6_prof);

        
        $__internal_efdadab46e506b0fca79f609b32da3210bddd5aa5b2a67ac4d7fa18c64022578->leave($__internal_efdadab46e506b0fca79f609b32da3210bddd5aa5b2a67ac4d7fa18c64022578_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_15684f8e52df2227ee0a8ee686b4361f119b45f1e341c16749a8774c12ac7154 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15684f8e52df2227ee0a8ee686b4361f119b45f1e341c16749a8774c12ac7154->enter($__internal_15684f8e52df2227ee0a8ee686b4361f119b45f1e341c16749a8774c12ac7154_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_8540b89f462ccd9d242ba1f174bc61531e0c84657a8be3ee84fdb7fba0b794cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8540b89f462ccd9d242ba1f174bc61531e0c84657a8be3ee84fdb7fba0b794cf->enter($__internal_8540b89f462ccd9d242ba1f174bc61531e0c84657a8be3ee84fdb7fba0b794cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_8540b89f462ccd9d242ba1f174bc61531e0c84657a8be3ee84fdb7fba0b794cf->leave($__internal_8540b89f462ccd9d242ba1f174bc61531e0c84657a8be3ee84fdb7fba0b794cf_prof);

        
        $__internal_15684f8e52df2227ee0a8ee686b4361f119b45f1e341c16749a8774c12ac7154->leave($__internal_15684f8e52df2227ee0a8ee686b4361f119b45f1e341c16749a8774c12ac7154_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}

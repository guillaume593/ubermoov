<?php

/* WebProfilerBundle:Profiler:info.html.twig */
class __TwigTemplate_0c95bd5a6a08d1db16709f06825b09e747fb619a572c5da4306c924fea1ca8af extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Profiler:info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_622f737c13a1dc939ae093a9243e6fcf48cd17e594051b390915bca22abcce32 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_622f737c13a1dc939ae093a9243e6fcf48cd17e594051b390915bca22abcce32->enter($__internal_622f737c13a1dc939ae093a9243e6fcf48cd17e594051b390915bca22abcce32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        $__internal_f766cbb675beb43c96643891c0bebc5135ebfd7e3c41f95e7d4c6dcbea04c02d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f766cbb675beb43c96643891c0bebc5135ebfd7e3c41f95e7d4c6dcbea04c02d->enter($__internal_f766cbb675beb43c96643891c0bebc5135ebfd7e3c41f95e7d4c6dcbea04c02d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter((isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 7, $this->getSourceContext()); })()), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_622f737c13a1dc939ae093a9243e6fcf48cd17e594051b390915bca22abcce32->leave($__internal_622f737c13a1dc939ae093a9243e6fcf48cd17e594051b390915bca22abcce32_prof);

        
        $__internal_f766cbb675beb43c96643891c0bebc5135ebfd7e3c41f95e7d4c6dcbea04c02d->leave($__internal_f766cbb675beb43c96643891c0bebc5135ebfd7e3c41f95e7d4c6dcbea04c02d_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_4eccc3e62e29e9e520786d5266ca247d6e977394d37ee173a23124972236d49f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eccc3e62e29e9e520786d5266ca247d6e977394d37ee173a23124972236d49f->enter($__internal_4eccc3e62e29e9e520786d5266ca247d6e977394d37ee173a23124972236d49f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_1d6e857b61e65efeb2edfbc0f120d377087119f0cf061e4254d21a554754a4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d6e857b61e65efeb2edfbc0f120d377087119f0cf061e4254d21a554754a4a9->enter($__internal_1d6e857b61e65efeb2edfbc0f120d377087119f0cf061e4254d21a554754a4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 12, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 12, $this->getSourceContext()); })()), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 14, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 14, $this->getSourceContext()); })()), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_1d6e857b61e65efeb2edfbc0f120d377087119f0cf061e4254d21a554754a4a9->leave($__internal_1d6e857b61e65efeb2edfbc0f120d377087119f0cf061e4254d21a554754a4a9_prof);

        
        $__internal_4eccc3e62e29e9e520786d5266ca247d6e977394d37ee173a23124972236d49f->leave($__internal_4eccc3e62e29e9e520786d5266ca247d6e977394d37ee173a23124972236d49f_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a9cd7290fc0cceaff5674008e3ec63d5d0b36606b2ef3ccdce6777898134b492 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9cd7290fc0cceaff5674008e3ec63d5d0b36606b2ef3ccdce6777898134b492->enter($__internal_a9cd7290fc0cceaff5674008e3ec63d5d0b36606b2ef3ccdce6777898134b492_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d349d3f6fd3596f95784dd6e7c4e4e88953365be8fbdd6331ca7d111bf7fe19d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d349d3f6fd3596f95784dd6e7c4e4e88953365be8fbdd6331ca7d111bf7fe19d->enter($__internal_d349d3f6fd3596f95784dd6e7c4e4e88953365be8fbdd6331ca7d111bf7fe19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 20, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 20, $this->getSourceContext()); })()), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["messages"]) || array_key_exists("messages", $context) ? $context["messages"] : (function () { throw new Twig_Error_Runtime('Variable "messages" does not exist.', 21, $this->getSourceContext()); })()), (isset($context["about"]) || array_key_exists("about", $context) ? $context["about"] : (function () { throw new Twig_Error_Runtime('Variable "about" does not exist.', 21, $this->getSourceContext()); })()), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_d349d3f6fd3596f95784dd6e7c4e4e88953365be8fbdd6331ca7d111bf7fe19d->leave($__internal_d349d3f6fd3596f95784dd6e7c4e4e88953365be8fbdd6331ca7d111bf7fe19d_prof);

        
        $__internal_a9cd7290fc0cceaff5674008e3ec63d5d0b36606b2ef3ccdce6777898134b492->leave($__internal_a9cd7290fc0cceaff5674008e3ec63d5d0b36606b2ef3ccdce6777898134b492_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "WebProfilerBundle:Profiler:info.html.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/info.html.twig");
    }
}

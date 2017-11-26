<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_7cbe89159141b689613ae473f588cd986ce4a9e8530d58a0bdc81dc9fc7896d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_08e458f1b628054be4a1639ef8a15057dfeb40472ba1d8aa59e3f1984c1eeebd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08e458f1b628054be4a1639ef8a15057dfeb40472ba1d8aa59e3f1984c1eeebd->enter($__internal_08e458f1b628054be4a1639ef8a15057dfeb40472ba1d8aa59e3f1984c1eeebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_a0eb32b21c3d3608b3434797f8d66648228f95b7409988d28981f16eba80d7e2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0eb32b21c3d3608b3434797f8d66648228f95b7409988d28981f16eba80d7e2->enter($__internal_a0eb32b21c3d3608b3434797f8d66648228f95b7409988d28981f16eba80d7e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08e458f1b628054be4a1639ef8a15057dfeb40472ba1d8aa59e3f1984c1eeebd->leave($__internal_08e458f1b628054be4a1639ef8a15057dfeb40472ba1d8aa59e3f1984c1eeebd_prof);

        
        $__internal_a0eb32b21c3d3608b3434797f8d66648228f95b7409988d28981f16eba80d7e2->leave($__internal_a0eb32b21c3d3608b3434797f8d66648228f95b7409988d28981f16eba80d7e2_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_9a11607e3ec152a19b40dc66ece13a2c6bf2f5f2c133565927e37ca332b0e0e8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a11607e3ec152a19b40dc66ece13a2c6bf2f5f2c133565927e37ca332b0e0e8->enter($__internal_9a11607e3ec152a19b40dc66ece13a2c6bf2f5f2c133565927e37ca332b0e0e8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_170ae2a8b583215fabaf255a46bc7491163f07df2dabb91b22215d2921bb3bf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_170ae2a8b583215fabaf255a46bc7491163f07df2dabb91b22215d2921bb3bf4->enter($__internal_170ae2a8b583215fabaf255a46bc7491163f07df2dabb91b22215d2921bb3bf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_170ae2a8b583215fabaf255a46bc7491163f07df2dabb91b22215d2921bb3bf4->leave($__internal_170ae2a8b583215fabaf255a46bc7491163f07df2dabb91b22215d2921bb3bf4_prof);

        
        $__internal_9a11607e3ec152a19b40dc66ece13a2c6bf2f5f2c133565927e37ca332b0e0e8->leave($__internal_9a11607e3ec152a19b40dc66ece13a2c6bf2f5f2c133565927e37ca332b0e0e8_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "WebProfilerBundle:Collector:ajax.html.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

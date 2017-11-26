<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_7cbe89159141b689613ae473f588cd986ce4a9e8530d58a0bdc81dc9fc7896d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
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
        $__internal_6dfd4c1a959fa867aaa5f4c346473092f04fc96b11a8c4fc9ddd6c13760452f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dfd4c1a959fa867aaa5f4c346473092f04fc96b11a8c4fc9ddd6c13760452f4->enter($__internal_6dfd4c1a959fa867aaa5f4c346473092f04fc96b11a8c4fc9ddd6c13760452f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_6abaae0708e9e71931da7d54e1630ad850012348f04f598b6797d6fd37357161 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6abaae0708e9e71931da7d54e1630ad850012348f04f598b6797d6fd37357161->enter($__internal_6abaae0708e9e71931da7d54e1630ad850012348f04f598b6797d6fd37357161_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6dfd4c1a959fa867aaa5f4c346473092f04fc96b11a8c4fc9ddd6c13760452f4->leave($__internal_6dfd4c1a959fa867aaa5f4c346473092f04fc96b11a8c4fc9ddd6c13760452f4_prof);

        
        $__internal_6abaae0708e9e71931da7d54e1630ad850012348f04f598b6797d6fd37357161->leave($__internal_6abaae0708e9e71931da7d54e1630ad850012348f04f598b6797d6fd37357161_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7f4ba7e2a6e5220033d1f022a82abd50da63777698797b99e284f42f54405323 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f4ba7e2a6e5220033d1f022a82abd50da63777698797b99e284f42f54405323->enter($__internal_7f4ba7e2a6e5220033d1f022a82abd50da63777698797b99e284f42f54405323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c826b08f2175475744f2c8e51d55e7b0ce8c604e1d981a43227e1bb51df754d8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c826b08f2175475744f2c8e51d55e7b0ce8c604e1d981a43227e1bb51df754d8->enter($__internal_c826b08f2175475744f2c8e51d55e7b0ce8c604e1d981a43227e1bb51df754d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_c826b08f2175475744f2c8e51d55e7b0ce8c604e1d981a43227e1bb51df754d8->leave($__internal_c826b08f2175475744f2c8e51d55e7b0ce8c604e1d981a43227e1bb51df754d8_prof);

        
        $__internal_7f4ba7e2a6e5220033d1f022a82abd50da63777698797b99e284f42f54405323->leave($__internal_7f4ba7e2a6e5220033d1f022a82abd50da63777698797b99e284f42f54405323_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
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
", "@WebProfiler/Collector/ajax.html.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}

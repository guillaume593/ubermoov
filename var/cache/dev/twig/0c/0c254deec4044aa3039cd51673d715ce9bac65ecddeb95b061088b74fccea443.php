<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_acbf7a08180f79b61dcaf013df035765a7e3ed8a8b835ff37a9900e84f5b6f99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_a9f2c733f4b882efafb02d8844ff4018057bc9b49d74b00b98430d8a3915de5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9f2c733f4b882efafb02d8844ff4018057bc9b49d74b00b98430d8a3915de5d->enter($__internal_a9f2c733f4b882efafb02d8844ff4018057bc9b49d74b00b98430d8a3915de5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9f2c733f4b882efafb02d8844ff4018057bc9b49d74b00b98430d8a3915de5d->leave($__internal_a9f2c733f4b882efafb02d8844ff4018057bc9b49d74b00b98430d8a3915de5d_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_386efe8b3b7512aba8e704515687bac7209b7bfe2a79f8677bfe091bb3db13c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_386efe8b3b7512aba8e704515687bac7209b7bfe2a79f8677bfe091bb3db13c7->enter($__internal_386efe8b3b7512aba8e704515687bac7209b7bfe2a79f8677bfe091bb3db13c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_386efe8b3b7512aba8e704515687bac7209b7bfe2a79f8677bfe091bb3db13c7->leave($__internal_386efe8b3b7512aba8e704515687bac7209b7bfe2a79f8677bfe091bb3db13c7_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7cc5db1aeaaecf3486e4ceee446c1160ba5a0200ed5dd041b280b811918fb80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7cc5db1aeaaecf3486e4ceee446c1160ba5a0200ed5dd041b280b811918fb80->enter($__internal_c7cc5db1aeaaecf3486e4ceee446c1160ba5a0200ed5dd041b280b811918fb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) || array_key_exists("location", $context) ? $context["location"] : (function () { throw new Twig_Error_Runtime('Variable "location" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_c7cc5db1aeaaecf3486e4ceee446c1160ba5a0200ed5dd041b280b811918fb80->leave($__internal_c7cc5db1aeaaecf3486e4ceee446c1160ba5a0200ed5dd041b280b811918fb80_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Profiler/toolbar_redirect.html.twig");
    }
}

<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_659c979d7cc3d42f4f7b2cace1e91b0f8b1883e18b44d54736adcd7d3c34756f extends Twig_Template
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
        $__internal_785c078f9ec1dd26223b1c295aaecc7dac83a590bd5f5bd67a1248a7d6815709 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_785c078f9ec1dd26223b1c295aaecc7dac83a590bd5f5bd67a1248a7d6815709->enter($__internal_785c078f9ec1dd26223b1c295aaecc7dac83a590bd5f5bd67a1248a7d6815709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_785c078f9ec1dd26223b1c295aaecc7dac83a590bd5f5bd67a1248a7d6815709->leave($__internal_785c078f9ec1dd26223b1c295aaecc7dac83a590bd5f5bd67a1248a7d6815709_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0a4a0ba04253f4f46f6348f7fec528da2eef80e3186b12d08ba7394841e76b8e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a4a0ba04253f4f46f6348f7fec528da2eef80e3186b12d08ba7394841e76b8e->enter($__internal_0a4a0ba04253f4f46f6348f7fec528da2eef80e3186b12d08ba7394841e76b8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0a4a0ba04253f4f46f6348f7fec528da2eef80e3186b12d08ba7394841e76b8e->leave($__internal_0a4a0ba04253f4f46f6348f7fec528da2eef80e3186b12d08ba7394841e76b8e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9636505a65b7781a36ebba782a069f56c1a9b554f3d05edaa240492e7ed1acf1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9636505a65b7781a36ebba782a069f56c1a9b554f3d05edaa240492e7ed1acf1->enter($__internal_9636505a65b7781a36ebba782a069f56c1a9b554f3d05edaa240492e7ed1acf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_9636505a65b7781a36ebba782a069f56c1a9b554f3d05edaa240492e7ed1acf1->leave($__internal_9636505a65b7781a36ebba782a069f56c1a9b554f3d05edaa240492e7ed1acf1_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_434eb9556ced567ff067ab54a187188e7e06863085234ccbad0f530d2a3e52ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_434eb9556ced567ff067ab54a187188e7e06863085234ccbad0f530d2a3e52ef->enter($__internal_434eb9556ced567ff067ab54a187188e7e06863085234ccbad0f530d2a3e52ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_434eb9556ced567ff067ab54a187188e7e06863085234ccbad0f530d2a3e52ef->leave($__internal_434eb9556ced567ff067ab54a187188e7e06863085234ccbad0f530d2a3e52ef_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <link href=\"{{ absolute_url(asset('bundles/framework/css/exception.css')) }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

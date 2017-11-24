<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_26f495c44b35a139efbf6ace157ae33a8817e571b7a4041e50398ffa44d66e08 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_9cbba4b8c50ecb705fc19585bab91de948c383520f61c669b70a3ff4bbd2ab7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9cbba4b8c50ecb705fc19585bab91de948c383520f61c669b70a3ff4bbd2ab7e->enter($__internal_9cbba4b8c50ecb705fc19585bab91de948c383520f61c669b70a3ff4bbd2ab7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cbba4b8c50ecb705fc19585bab91de948c383520f61c669b70a3ff4bbd2ab7e->leave($__internal_9cbba4b8c50ecb705fc19585bab91de948c383520f61c669b70a3ff4bbd2ab7e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_97f8c02e1227874056a3bd9c2eaf0bfb3d3b9ab4d6614c923670208192f7fc0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_97f8c02e1227874056a3bd9c2eaf0bfb3d3b9ab4d6614c923670208192f7fc0d->enter($__internal_97f8c02e1227874056a3bd9c2eaf0bfb3d3b9ab4d6614c923670208192f7fc0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_97f8c02e1227874056a3bd9c2eaf0bfb3d3b9ab4d6614c923670208192f7fc0d->leave($__internal_97f8c02e1227874056a3bd9c2eaf0bfb3d3b9ab4d6614c923670208192f7fc0d_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b480c5ed7b0e8556dac48ba88c26d698c5114973450f3b737b5543836c5aa45a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b480c5ed7b0e8556dac48ba88c26d698c5114973450f3b737b5543836c5aa45a->enter($__internal_b480c5ed7b0e8556dac48ba88c26d698c5114973450f3b737b5543836c5aa45a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b480c5ed7b0e8556dac48ba88c26d698c5114973450f3b737b5543836c5aa45a->leave($__internal_b480c5ed7b0e8556dac48ba88c26d698c5114973450f3b737b5543836c5aa45a_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b3580f109f7ced8400cfd24c4e1ab134549f4e439e2685fbd3d78a16431cc45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b3580f109f7ced8400cfd24c4e1ab134549f4e439e2685fbd3d78a16431cc45b->enter($__internal_b3580f109f7ced8400cfd24c4e1ab134549f4e439e2685fbd3d78a16431cc45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_b3580f109f7ced8400cfd24c4e1ab134549f4e439e2685fbd3d78a16431cc45b->leave($__internal_b3580f109f7ced8400cfd24c4e1ab134549f4e439e2685fbd3d78a16431cc45b_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

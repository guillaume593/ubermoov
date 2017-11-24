<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_3fe42dcbaf34b40ae97f3b9457baffb873a4bfa6b28abc43cdd69b22d8bb2cef extends Twig_Template
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
        $__internal_d6c83f03c839ead5e36b2576c161973e04cdc009437668b5c226ae26f7d04d70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6c83f03c839ead5e36b2576c161973e04cdc009437668b5c226ae26f7d04d70->enter($__internal_d6c83f03c839ead5e36b2576c161973e04cdc009437668b5c226ae26f7d04d70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6c83f03c839ead5e36b2576c161973e04cdc009437668b5c226ae26f7d04d70->leave($__internal_d6c83f03c839ead5e36b2576c161973e04cdc009437668b5c226ae26f7d04d70_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a57de797592dca38b6c1a12683178678f14d11576e084be48bf53884adb5dd29 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a57de797592dca38b6c1a12683178678f14d11576e084be48bf53884adb5dd29->enter($__internal_a57de797592dca38b6c1a12683178678f14d11576e084be48bf53884adb5dd29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a57de797592dca38b6c1a12683178678f14d11576e084be48bf53884adb5dd29->leave($__internal_a57de797592dca38b6c1a12683178678f14d11576e084be48bf53884adb5dd29_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6ff140717aa7d78b406971814a36e6e1524be730755341f42e6b185f99c6afab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ff140717aa7d78b406971814a36e6e1524be730755341f42e6b185f99c6afab->enter($__internal_6ff140717aa7d78b406971814a36e6e1524be730755341f42e6b185f99c6afab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_6ff140717aa7d78b406971814a36e6e1524be730755341f42e6b185f99c6afab->leave($__internal_6ff140717aa7d78b406971814a36e6e1524be730755341f42e6b185f99c6afab_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d957fdc460596357e650106c6b4dcb82de7736d8d350bfad5d227ae0191c668c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d957fdc460596357e650106c6b4dcb82de7736d8d350bfad5d227ae0191c668c->enter($__internal_d957fdc460596357e650106c6b4dcb82de7736d8d350bfad5d227ae0191c668c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpKernelExtension')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d957fdc460596357e650106c6b4dcb82de7736d8d350bfad5d227ae0191c668c->leave($__internal_d957fdc460596357e650106c6b4dcb82de7736d8d350bfad5d227ae0191c668c_prof);

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
", "@WebProfiler/Collector/router.html.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_f680ee6ea4e66336aef94ee7a0c74cb2d9c22302366ef42a1b567818f3f0fb4b extends Twig_Template
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
        $__internal_49bd8a9b9039679964ec8fc53a2e5f63fc58d81cd984c1cdcb6f2e22cc949487 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49bd8a9b9039679964ec8fc53a2e5f63fc58d81cd984c1cdcb6f2e22cc949487->enter($__internal_49bd8a9b9039679964ec8fc53a2e5f63fc58d81cd984c1cdcb6f2e22cc949487_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_58703a3b14a6a662bcb91974f82a0bfb86ccb1fca18235af05aa4d6f3a4214a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_58703a3b14a6a662bcb91974f82a0bfb86ccb1fca18235af05aa4d6f3a4214a0->enter($__internal_58703a3b14a6a662bcb91974f82a0bfb86ccb1fca18235af05aa4d6f3a4214a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_49bd8a9b9039679964ec8fc53a2e5f63fc58d81cd984c1cdcb6f2e22cc949487->leave($__internal_49bd8a9b9039679964ec8fc53a2e5f63fc58d81cd984c1cdcb6f2e22cc949487_prof);

        
        $__internal_58703a3b14a6a662bcb91974f82a0bfb86ccb1fca18235af05aa4d6f3a4214a0->leave($__internal_58703a3b14a6a662bcb91974f82a0bfb86ccb1fca18235af05aa4d6f3a4214a0_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_4ef1bf0ff7856f430981461308d928cae56627056768cfddff0283c8f7488691 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4ef1bf0ff7856f430981461308d928cae56627056768cfddff0283c8f7488691->enter($__internal_4ef1bf0ff7856f430981461308d928cae56627056768cfddff0283c8f7488691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_aec17085beee0a6e488a866ec61127799bc70b6d8655ece99ea409f29dc05d6a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aec17085beee0a6e488a866ec61127799bc70b6d8655ece99ea409f29dc05d6a->enter($__internal_aec17085beee0a6e488a866ec61127799bc70b6d8655ece99ea409f29dc05d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_aec17085beee0a6e488a866ec61127799bc70b6d8655ece99ea409f29dc05d6a->leave($__internal_aec17085beee0a6e488a866ec61127799bc70b6d8655ece99ea409f29dc05d6a_prof);

        
        $__internal_4ef1bf0ff7856f430981461308d928cae56627056768cfddff0283c8f7488691->leave($__internal_4ef1bf0ff7856f430981461308d928cae56627056768cfddff0283c8f7488691_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d7d7095ebcb44be2ad295482b04cdb868854d8e1347e98ac5b7693d6a2f3a29c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d7d7095ebcb44be2ad295482b04cdb868854d8e1347e98ac5b7693d6a2f3a29c->enter($__internal_d7d7095ebcb44be2ad295482b04cdb868854d8e1347e98ac5b7693d6a2f3a29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_f5e8335ec98492d748ef418cc86201070f00068ff9ed3b085dbe3d3ff4413843 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5e8335ec98492d748ef418cc86201070f00068ff9ed3b085dbe3d3ff4413843->enter($__internal_f5e8335ec98492d748ef418cc86201070f00068ff9ed3b085dbe3d3ff4413843_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_f5e8335ec98492d748ef418cc86201070f00068ff9ed3b085dbe3d3ff4413843->leave($__internal_f5e8335ec98492d748ef418cc86201070f00068ff9ed3b085dbe3d3ff4413843_prof);

        
        $__internal_d7d7095ebcb44be2ad295482b04cdb868854d8e1347e98ac5b7693d6a2f3a29c->leave($__internal_d7d7095ebcb44be2ad295482b04cdb868854d8e1347e98ac5b7693d6a2f3a29c_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_949114155ddd295afdd07946e1415ff6914ce32498e87efa399458eae74f36bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_949114155ddd295afdd07946e1415ff6914ce32498e87efa399458eae74f36bd->enter($__internal_949114155ddd295afdd07946e1415ff6914ce32498e87efa399458eae74f36bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_14ea0e735eb530201837e47a3f491af5908f4d7c3fec12ad41d0a08a4675cbeb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_14ea0e735eb530201837e47a3f491af5908f4d7c3fec12ad41d0a08a4675cbeb->enter($__internal_14ea0e735eb530201837e47a3f491af5908f4d7c3fec12ad41d0a08a4675cbeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_14ea0e735eb530201837e47a3f491af5908f4d7c3fec12ad41d0a08a4675cbeb->leave($__internal_14ea0e735eb530201837e47a3f491af5908f4d7c3fec12ad41d0a08a4675cbeb_prof);

        
        $__internal_949114155ddd295afdd07946e1415ff6914ce32498e87efa399458eae74f36bd->leave($__internal_949114155ddd295afdd07946e1415ff6914ce32498e87efa399458eae74f36bd_prof);

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
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

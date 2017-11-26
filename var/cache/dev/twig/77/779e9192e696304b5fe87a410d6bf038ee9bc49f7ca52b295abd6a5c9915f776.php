<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_f680ee6ea4e66336aef94ee7a0c74cb2d9c22302366ef42a1b567818f3f0fb4b extends Twig_Template
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
        $__internal_3637d5f90f685f843a815a9db0de9bf43bd4d8256bcdf2b7a81e19f541c85ae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3637d5f90f685f843a815a9db0de9bf43bd4d8256bcdf2b7a81e19f541c85ae8->enter($__internal_3637d5f90f685f843a815a9db0de9bf43bd4d8256bcdf2b7a81e19f541c85ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $__internal_b868ec640275a7e6d62a556b3fe3b358669386f3d7ca34fbaa259031d5f748ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b868ec640275a7e6d62a556b3fe3b358669386f3d7ca34fbaa259031d5f748ac->enter($__internal_b868ec640275a7e6d62a556b3fe3b358669386f3d7ca34fbaa259031d5f748ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3637d5f90f685f843a815a9db0de9bf43bd4d8256bcdf2b7a81e19f541c85ae8->leave($__internal_3637d5f90f685f843a815a9db0de9bf43bd4d8256bcdf2b7a81e19f541c85ae8_prof);

        
        $__internal_b868ec640275a7e6d62a556b3fe3b358669386f3d7ca34fbaa259031d5f748ac->leave($__internal_b868ec640275a7e6d62a556b3fe3b358669386f3d7ca34fbaa259031d5f748ac_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a970d6d442c93be98c35a5928d685c23f4dcf5502fdc97912b0186c548845a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a970d6d442c93be98c35a5928d685c23f4dcf5502fdc97912b0186c548845a0c->enter($__internal_a970d6d442c93be98c35a5928d685c23f4dcf5502fdc97912b0186c548845a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_a20f67fe06fb54d7e18bee3bc3b6ddc66771de9b7848b0b2db128fdc0a60bbaf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a20f67fe06fb54d7e18bee3bc3b6ddc66771de9b7848b0b2db128fdc0a60bbaf->enter($__internal_a20f67fe06fb54d7e18bee3bc3b6ddc66771de9b7848b0b2db128fdc0a60bbaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a20f67fe06fb54d7e18bee3bc3b6ddc66771de9b7848b0b2db128fdc0a60bbaf->leave($__internal_a20f67fe06fb54d7e18bee3bc3b6ddc66771de9b7848b0b2db128fdc0a60bbaf_prof);

        
        $__internal_a970d6d442c93be98c35a5928d685c23f4dcf5502fdc97912b0186c548845a0c->leave($__internal_a970d6d442c93be98c35a5928d685c23f4dcf5502fdc97912b0186c548845a0c_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_1d084634b8adbdbaf49ac4c5bd1c3f4287dfda437b8c8c12e851373037a4204f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d084634b8adbdbaf49ac4c5bd1c3f4287dfda437b8c8c12e851373037a4204f->enter($__internal_1d084634b8adbdbaf49ac4c5bd1c3f4287dfda437b8c8c12e851373037a4204f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_74ed758ddc617b4bd799e77f705121d1e851073a8994d0aa997c38584d438bad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74ed758ddc617b4bd799e77f705121d1e851073a8994d0aa997c38584d438bad->enter($__internal_74ed758ddc617b4bd799e77f705121d1e851073a8994d0aa997c38584d438bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_74ed758ddc617b4bd799e77f705121d1e851073a8994d0aa997c38584d438bad->leave($__internal_74ed758ddc617b4bd799e77f705121d1e851073a8994d0aa997c38584d438bad_prof);

        
        $__internal_1d084634b8adbdbaf49ac4c5bd1c3f4287dfda437b8c8c12e851373037a4204f->leave($__internal_1d084634b8adbdbaf49ac4c5bd1c3f4287dfda437b8c8c12e851373037a4204f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_15bd3492fe30d127839f5c35cd7b7b170c2fb5c35fbc0e6540b43d73b2455c2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15bd3492fe30d127839f5c35cd7b7b170c2fb5c35fbc0e6540b43d73b2455c2e->enter($__internal_15bd3492fe30d127839f5c35cd7b7b170c2fb5c35fbc0e6540b43d73b2455c2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1c43b9c000c21b11bf439e7a5f498fc16c590d82e85be9481bc7cd66fee82579 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1c43b9c000c21b11bf439e7a5f498fc16c590d82e85be9481bc7cd66fee82579->enter($__internal_1c43b9c000c21b11bf439e7a5f498fc16c590d82e85be9481bc7cd66fee82579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_1c43b9c000c21b11bf439e7a5f498fc16c590d82e85be9481bc7cd66fee82579->leave($__internal_1c43b9c000c21b11bf439e7a5f498fc16c590d82e85be9481bc7cd66fee82579_prof);

        
        $__internal_15bd3492fe30d127839f5c35cd7b7b170c2fb5c35fbc0e6540b43d73b2455c2e->leave($__internal_15bd3492fe30d127839f5c35cd7b7b170c2fb5c35fbc0e6540b43d73b2455c2e_prof);

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
", "WebProfilerBundle:Collector:router.html.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views/Collector/router.html.twig");
    }
}

<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a3c25c24ecec6ba54f8c4beb6953d43e6a1b9719172a8b465dae69b4594dea08 extends Twig_Template
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
        $__internal_c856d826b25c56418a79b6bc8134954c19f3cdf1a753eb9ae5fd75152d491e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c856d826b25c56418a79b6bc8134954c19f3cdf1a753eb9ae5fd75152d491e14->enter($__internal_c856d826b25c56418a79b6bc8134954c19f3cdf1a753eb9ae5fd75152d491e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $__internal_46357925d2e462759afe21b129f6441d02bc7ae0d061949ef1c552a23e858bef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46357925d2e462759afe21b129f6441d02bc7ae0d061949ef1c552a23e858bef->enter($__internal_46357925d2e462759afe21b129f6441d02bc7ae0d061949ef1c552a23e858bef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c856d826b25c56418a79b6bc8134954c19f3cdf1a753eb9ae5fd75152d491e14->leave($__internal_c856d826b25c56418a79b6bc8134954c19f3cdf1a753eb9ae5fd75152d491e14_prof);

        
        $__internal_46357925d2e462759afe21b129f6441d02bc7ae0d061949ef1c552a23e858bef->leave($__internal_46357925d2e462759afe21b129f6441d02bc7ae0d061949ef1c552a23e858bef_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_38fbc6e74a31dbbc682e1f450e59b62d49dffd7012eb2a569afadf666bcfe1c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38fbc6e74a31dbbc682e1f450e59b62d49dffd7012eb2a569afadf666bcfe1c1->enter($__internal_38fbc6e74a31dbbc682e1f450e59b62d49dffd7012eb2a569afadf666bcfe1c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f23e3e31edcbff1b37bed11d378a078fb6a60f5fdc7507da6450e25ab503f7f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f23e3e31edcbff1b37bed11d378a078fb6a60f5fdc7507da6450e25ab503f7f4->enter($__internal_f23e3e31edcbff1b37bed11d378a078fb6a60f5fdc7507da6450e25ab503f7f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_f23e3e31edcbff1b37bed11d378a078fb6a60f5fdc7507da6450e25ab503f7f4->leave($__internal_f23e3e31edcbff1b37bed11d378a078fb6a60f5fdc7507da6450e25ab503f7f4_prof);

        
        $__internal_38fbc6e74a31dbbc682e1f450e59b62d49dffd7012eb2a569afadf666bcfe1c1->leave($__internal_38fbc6e74a31dbbc682e1f450e59b62d49dffd7012eb2a569afadf666bcfe1c1_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c0bb94c8cc1404b4e1e63c458d14f7147ff440c9de3b8f451e74c5f82de1965 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c0bb94c8cc1404b4e1e63c458d14f7147ff440c9de3b8f451e74c5f82de1965->enter($__internal_6c0bb94c8cc1404b4e1e63c458d14f7147ff440c9de3b8f451e74c5f82de1965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ebc205cef959891d1bff3d68c1715e47e6f2a54f42e9c644cf9ce9223748efb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ebc205cef959891d1bff3d68c1715e47e6f2a54f42e9c644cf9ce9223748efb5->enter($__internal_ebc205cef959891d1bff3d68c1715e47e6f2a54f42e9c644cf9ce9223748efb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ebc205cef959891d1bff3d68c1715e47e6f2a54f42e9c644cf9ce9223748efb5->leave($__internal_ebc205cef959891d1bff3d68c1715e47e6f2a54f42e9c644cf9ce9223748efb5_prof);

        
        $__internal_6c0bb94c8cc1404b4e1e63c458d14f7147ff440c9de3b8f451e74c5f82de1965->leave($__internal_6c0bb94c8cc1404b4e1e63c458d14f7147ff440c9de3b8f451e74c5f82de1965_prof);

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
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
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

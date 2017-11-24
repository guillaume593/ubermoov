<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_e707399f8dfb36ba5ec421360d98055b0d4ac128a06b7b638f5529e1245117f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_ab35297f63270eb871431bfbb269108792e7da0573dd880aca7df7ee159dc853 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab35297f63270eb871431bfbb269108792e7da0573dd880aca7df7ee159dc853->enter($__internal_ab35297f63270eb871431bfbb269108792e7da0573dd880aca7df7ee159dc853_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ab35297f63270eb871431bfbb269108792e7da0573dd880aca7df7ee159dc853->leave($__internal_ab35297f63270eb871431bfbb269108792e7da0573dd880aca7df7ee159dc853_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_84b8012b8148ca11c6432cb995c08d5da16adcf1fc02a83ec8a783e855b9a23c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_84b8012b8148ca11c6432cb995c08d5da16adcf1fc02a83ec8a783e855b9a23c->enter($__internal_84b8012b8148ca11c6432cb995c08d5da16adcf1fc02a83ec8a783e855b9a23c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\HttpFoundationExtension')->generateAbsoluteUrl($this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_84b8012b8148ca11c6432cb995c08d5da16adcf1fc02a83ec8a783e855b9a23c->leave($__internal_84b8012b8148ca11c6432cb995c08d5da16adcf1fc02a83ec8a783e855b9a23c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_734e00b10467ccb182686cdff6b4def18c1181edf3184fb4e2935640446f0fd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_734e00b10467ccb182686cdff6b4def18c1181edf3184fb4e2935640446f0fd4->enter($__internal_734e00b10467ccb182686cdff6b4def18c1181edf3184fb4e2935640446f0fd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 8, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 8, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_734e00b10467ccb182686cdff6b4def18c1181edf3184fb4e2935640446f0fd4->leave($__internal_734e00b10467ccb182686cdff6b4def18c1181edf3184fb4e2935640446f0fd4_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_02c85ce4ed370c5c452c2578a5aced1a8e946e54a4b50292452521986b34b6c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02c85ce4ed370c5c452c2578a5aced1a8e946e54a4b50292452521986b34b6c0->enter($__internal_02c85ce4ed370c5c452c2578a5aced1a8e946e54a4b50292452521986b34b6c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_02c85ce4ed370c5c452c2578a5aced1a8e946e54a4b50292452521986b34b6c0->leave($__internal_02c85ce4ed370c5c452c2578a5aced1a8e946e54a4b50292452521986b34b6c0_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

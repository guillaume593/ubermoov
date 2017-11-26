<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_0dbdc485cfd59884c7eb97a8930fcdcf68955c7f26724bce6dadeb6532e1265d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f131c4ef93e6356cc5bfc64495e42155b002a5fa6bb5c0f996659e2705132814 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f131c4ef93e6356cc5bfc64495e42155b002a5fa6bb5c0f996659e2705132814->enter($__internal_f131c4ef93e6356cc5bfc64495e42155b002a5fa6bb5c0f996659e2705132814_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        $__internal_3af0f26d781b750d036f3116247af1d24a16aa13b0a0b89a51f3037ad0df3523 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af0f26d781b750d036f3116247af1d24a16aa13b0a0b89a51f3037ad0df3523->enter($__internal_3af0f26d781b750d036f3116247af1d24a16aa13b0a0b89a51f3037ad0df3523_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()), "exception" => twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()), "toarray", array()))));
        echo "
";
        
        $__internal_f131c4ef93e6356cc5bfc64495e42155b002a5fa6bb5c0f996659e2705132814->leave($__internal_f131c4ef93e6356cc5bfc64495e42155b002a5fa6bb5c0f996659e2705132814_prof);

        
        $__internal_3af0f26d781b750d036f3116247af1d24a16aa13b0a0b89a51f3037ad0df3523->leave($__internal_3af0f26d781b750d036f3116247af1d24a16aa13b0a0b89a51f3037ad0df3523_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "TwigBundle:Exception:exception.json.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.json.twig");
    }
}

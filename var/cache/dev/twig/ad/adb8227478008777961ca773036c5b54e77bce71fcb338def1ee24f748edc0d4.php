<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_460a8dfb2abd51d2608525c04baa1e3c67f3ec7bb2bca771fd76d1c6b2a3616e extends Twig_Template
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
        $__internal_5d85e918706c2ae969e8e75d5996e9dd265b0b02f598567c2a0f13dc9bf454c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d85e918706c2ae969e8e75d5996e9dd265b0b02f598567c2a0f13dc9bf454c6->enter($__internal_5d85e918706c2ae969e8e75d5996e9dd265b0b02f598567c2a0f13dc9bf454c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_5d85e918706c2ae969e8e75d5996e9dd265b0b02f598567c2a0f13dc9bf454c6->leave($__internal_5d85e918706c2ae969e8e75d5996e9dd265b0b02f598567c2a0f13dc9bf454c6_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}
", "TwigBundle:Exception:exception.atom.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.atom.twig");
    }
}

<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_3ed20c9c1a4f71b45edbaea5befdbbeee9254abadeb83ad7a63478f915730d1c extends Twig_Template
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
        $__internal_b113f8da51d1cae42c4c6dbea3c167f64c773cfa536a98c94febf093c8ff075e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b113f8da51d1cae42c4c6dbea3c167f64c773cfa536a98c94febf093c8ff075e->enter($__internal_b113f8da51d1cae42c4c6dbea3c167f64c773cfa536a98c94febf093c8ff075e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_b113f8da51d1cae42c4c6dbea3c167f64c773cfa536a98c94febf093c8ff075e->leave($__internal_b113f8da51d1cae42c4c6dbea3c167f64c773cfa536a98c94febf093c8ff075e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

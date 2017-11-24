<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_f1cfae1480b2dde93094696995ae1c3bc106d29b252ff97dea3c158db91b0517 extends Twig_Template
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
        $__internal_de25949831a03848e2888fd7bff3ffbd61c741a0dee18184dceaa4e7820f65f9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_de25949831a03848e2888fd7bff3ffbd61c741a0dee18184dceaa4e7820f65f9->enter($__internal_de25949831a03848e2888fd7bff3ffbd61c741a0dee18184dceaa4e7820f65f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 1, $this->getSourceContext()); })()))));
        
        $__internal_de25949831a03848e2888fd7bff3ffbd61c741a0dee18184dceaa4e7820f65f9->leave($__internal_de25949831a03848e2888fd7bff3ffbd61c741a0dee18184dceaa4e7820f65f9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
", "TwigBundle:Exception:exception.rdf.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}

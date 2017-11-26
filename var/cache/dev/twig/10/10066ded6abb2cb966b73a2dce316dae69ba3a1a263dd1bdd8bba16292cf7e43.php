<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_62f0e98d0de74a6a0a6c9bbd10c8a20ba7ecd2f2dd7ebaac4b017ec8babe0b57 extends Twig_Template
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
        $__internal_04f64ec87b8a6e03c1452554608b60759476860c73ded61c968ac64ea4d3702c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f64ec87b8a6e03c1452554608b60759476860c73ded61c968ac64ea4d3702c->enter($__internal_04f64ec87b8a6e03c1452554608b60759476860c73ded61c968ac64ea4d3702c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        $__internal_bae12657f7be682149c43e0ecfe6af6d9f68cfe0336f5a12d6a05fe2e464156a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae12657f7be682149c43e0ecfe6af6d9f68cfe0336f5a12d6a05fe2e464156a->enter($__internal_bae12657f7be682149c43e0ecfe6af6d9f68cfe0336f5a12d6a05fe2e464156a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_04f64ec87b8a6e03c1452554608b60759476860c73ded61c968ac64ea4d3702c->leave($__internal_04f64ec87b8a6e03c1452554608b60759476860c73ded61c968ac64ea4d3702c_prof);

        
        $__internal_bae12657f7be682149c43e0ecfe6af6d9f68cfe0336f5a12d6a05fe2e464156a->leave($__internal_bae12657f7be682149c43e0ecfe6af6d9f68cfe0336f5a12d6a05fe2e464156a_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

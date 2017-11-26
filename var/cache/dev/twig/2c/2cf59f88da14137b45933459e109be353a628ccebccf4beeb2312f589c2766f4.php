<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_51fd7ba6399ef1668604853df160e9895b9614b310e7083afab9bab2c7f3b4eb extends Twig_Template
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
        $__internal_13d8c0692e02476bf1d7337bef8f6309e34846b4f60a223be70105b5480957d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_13d8c0692e02476bf1d7337bef8f6309e34846b4f60a223be70105b5480957d3->enter($__internal_13d8c0692e02476bf1d7337bef8f6309e34846b4f60a223be70105b5480957d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        $__internal_6c409036d109512db83da618b75c372075d5e5546e1a545838f8acdce820496a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c409036d109512db83da618b75c372075d5e5546e1a545838f8acdce820496a->enter($__internal_6c409036d109512db83da618b75c372075d5e5546e1a545838f8acdce820496a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })())));
        echo "
*/
";
        
        $__internal_13d8c0692e02476bf1d7337bef8f6309e34846b4f60a223be70105b5480957d3->leave($__internal_13d8c0692e02476bf1d7337bef8f6309e34846b4f60a223be70105b5480957d3_prof);

        
        $__internal_6c409036d109512db83da618b75c372075d5e5546e1a545838f8acdce820496a->leave($__internal_6c409036d109512db83da618b75c372075d5e5546e1a545838f8acdce820496a_prof);

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
        return array (  28 => 2,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "TwigBundle:Exception:exception.js.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.js.twig");
    }
}

<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_4bedf7b29ba719d8683b56908e47582bdec8a723dd046ae90598d792edbac858 extends Twig_Template
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
        $__internal_9d33f118e73f38f8f1cf470e182ae197f30baa551bc21e0bd31cc0a19b4e29db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9d33f118e73f38f8f1cf470e182ae197f30baa551bc21e0bd31cc0a19b4e29db->enter($__internal_9d33f118e73f38f8f1cf470e182ae197f30baa551bc21e0bd31cc0a19b4e29db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 2, $this->getSourceContext()); })()))));
        // line 3
        echo "*/
";
        
        $__internal_9d33f118e73f38f8f1cf470e182ae197f30baa551bc21e0bd31cc0a19b4e29db->leave($__internal_9d33f118e73f38f8f1cf470e182ae197f30baa551bc21e0bd31cc0a19b4e29db_prof);

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
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}
*/
", "TwigBundle:Exception:exception.css.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception.css.twig");
    }
}

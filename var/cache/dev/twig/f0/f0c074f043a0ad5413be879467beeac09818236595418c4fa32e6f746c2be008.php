<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_c2f543058edcd5155fcc1f6bfa24843504f8ce42c66a1def7835402e5d1fd1aa extends Twig_Template
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
        $__internal_a11d4f6ec789d474369c4b0ee38e026223ee0f9efac8e8ad0e6be010a33fd9ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11d4f6ec789d474369c4b0ee38e026223ee0f9efac8e8ad0e6be010a33fd9ba->enter($__internal_a11d4f6ec789d474369c4b0ee38e026223ee0f9efac8e8ad0e6be010a33fd9ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        $__internal_a9db6e10fd9cab8973f8b7b73ca225b1161d2976c347de8c8e80d5e9aca2fcb1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9db6e10fd9cab8973f8b7b73ca225b1161d2976c347de8c8e80d5e9aca2fcb1->enter($__internal_a9db6e10fd9cab8973f8b7b73ca225b1161d2976c347de8c8e80d5e9aca2fcb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 2, $this->getSourceContext()); })()), "js", null, true);
        echo "

*/
";
        
        $__internal_a11d4f6ec789d474369c4b0ee38e026223ee0f9efac8e8ad0e6be010a33fd9ba->leave($__internal_a11d4f6ec789d474369c4b0ee38e026223ee0f9efac8e8ad0e6be010a33fd9ba_prof);

        
        $__internal_a9db6e10fd9cab8973f8b7b73ca225b1161d2976c347de8c8e80d5e9aca2fcb1->leave($__internal_a9db6e10fd9cab8973f8b7b73ca225b1161d2976c347de8c8e80d5e9aca2fcb1_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "TwigBundle:Exception:error.js.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.js.twig");
    }
}

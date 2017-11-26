<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_cb3bbe66549ccdf0a3728fef21bf84495f5a534c827ec0e7a7bdf195b3b7337a extends Twig_Template
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
        $__internal_acdc037470d0ef13114a1080cf1edd57b1a0d854e671a7ff458c4e5125b734c4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acdc037470d0ef13114a1080cf1edd57b1a0d854e671a7ff458c4e5125b734c4->enter($__internal_acdc037470d0ef13114a1080cf1edd57b1a0d854e671a7ff458c4e5125b734c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        $__internal_b15a5db1290b9b9082d32b4f4a9a59b4c1bb36572cba59c9a07f75508c42af70 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b15a5db1290b9b9082d32b4f4a9a59b4c1bb36572cba59c9a07f75508c42af70->enter($__internal_b15a5db1290b9b9082d32b4f4a9a59b4c1bb36572cba59c9a07f75508c42af70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "\" />
";
        
        $__internal_acdc037470d0ef13114a1080cf1edd57b1a0d854e671a7ff458c4e5125b734c4->leave($__internal_acdc037470d0ef13114a1080cf1edd57b1a0d854e671a7ff458c4e5125b734c4_prof);

        
        $__internal_b15a5db1290b9b9082d32b4f4a9a59b4c1bb36572cba59c9a07f75508c42af70->leave($__internal_b15a5db1290b9b9082d32b4f4a9a59b4c1bb36572cba59c9a07f75508c42af70_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?xml version=\"1.0\" encoding=\"{{ _charset }}\" ?>

<error code=\"{{ status_code }}\" message=\"{{ status_text }}\" />
", "TwigBundle:Exception:error.xml.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.xml.twig");
    }
}

<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_3605374172f5c4fe12c12ed29503cbcd841dc520570183d153b071e72f135ad3 extends Twig_Template
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
        $__internal_80eeafd11de1e6ecac16e97486fe38070078d6ba52204d49f4aacfe0e94cdd5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80eeafd11de1e6ecac16e97486fe38070078d6ba52204d49f4aacfe0e94cdd5b->enter($__internal_80eeafd11de1e6ecac16e97486fe38070078d6ba52204d49f4aacfe0e94cdd5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_80eeafd11de1e6ecac16e97486fe38070078d6ba52204d49f4aacfe0e94cdd5b->leave($__internal_80eeafd11de1e6ecac16e97486fe38070078d6ba52204d49f4aacfe0e94cdd5b_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

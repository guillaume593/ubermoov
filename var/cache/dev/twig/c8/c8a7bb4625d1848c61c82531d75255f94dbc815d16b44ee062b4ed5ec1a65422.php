<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_be8ed55c70dc7c441a6d7fc764fa85fc47e3da7bbd50321cf59b50ee8487dd5d extends Twig_Template
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
        $__internal_e8db35360bf55838faa71a35e69db0892470c577b1ded6832d91a6cb9615ba5b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8db35360bf55838faa71a35e69db0892470c577b1ded6832d91a6cb9615ba5b->enter($__internal_e8db35360bf55838faa71a35e69db0892470c577b1ded6832d91a6cb9615ba5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        $__internal_bcac7b0824499134cb7972e6e3ffd41eb2b5f3573af5cc4851e8026a2b25f4bf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcac7b0824499134cb7972e6e3ffd41eb2b5f3573af5cc4851e8026a2b25f4bf->enter($__internal_bcac7b0824499134cb7972e6e3ffd41eb2b5f3573af5cc4851e8026a2b25f4bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo json_encode(array("error" => array("code" => (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 1, $this->getSourceContext()); })()), "message" => (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 1, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_e8db35360bf55838faa71a35e69db0892470c577b1ded6832d91a6cb9615ba5b->leave($__internal_e8db35360bf55838faa71a35e69db0892470c577b1ded6832d91a6cb9615ba5b_prof);

        
        $__internal_bcac7b0824499134cb7972e6e3ffd41eb2b5f3573af5cc4851e8026a2b25f4bf->leave($__internal_bcac7b0824499134cb7972e6e3ffd41eb2b5f3573af5cc4851e8026a2b25f4bf_prof);

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
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "TwigBundle:Exception:error.json.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/error.json.twig");
    }
}

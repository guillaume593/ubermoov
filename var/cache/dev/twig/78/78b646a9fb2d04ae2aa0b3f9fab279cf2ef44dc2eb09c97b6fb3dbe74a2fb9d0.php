<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_18ddf397409f2ae246ce8d31b77576526bf922fc9e3cf2ff8b3ba612941b6c50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dc18894da4601a0877b682166cc4be5494c2f858fc96150a15c6d64942dc02bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dc18894da4601a0877b682166cc4be5494c2f858fc96150a15c6d64942dc02bb->enter($__internal_dc18894da4601a0877b682166cc4be5494c2f858fc96150a15c6d64942dc02bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $__internal_2fbaa84ec2ad3aab409d7d91068dd8f1f5dbb51c8c0186cbf24b307d540d96fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2fbaa84ec2ad3aab409d7d91068dd8f1f5dbb51c8c0186cbf24b307d540d96fa->enter($__internal_2fbaa84ec2ad3aab409d7d91068dd8f1f5dbb51c8c0186cbf24b307d540d96fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dc18894da4601a0877b682166cc4be5494c2f858fc96150a15c6d64942dc02bb->leave($__internal_dc18894da4601a0877b682166cc4be5494c2f858fc96150a15c6d64942dc02bb_prof);

        
        $__internal_2fbaa84ec2ad3aab409d7d91068dd8f1f5dbb51c8c0186cbf24b307d540d96fa->leave($__internal_2fbaa84ec2ad3aab409d7d91068dd8f1f5dbb51c8c0186cbf24b307d540d96fa_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_9bf2533b5c1f73b8ef9f43e612d1ee5749b97065f8da6c939782aede56ce6ea4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9bf2533b5c1f73b8ef9f43e612d1ee5749b97065f8da6c939782aede56ce6ea4->enter($__internal_9bf2533b5c1f73b8ef9f43e612d1ee5749b97065f8da6c939782aede56ce6ea4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_fbf2edadac289ffda147e484570d0c586298c289a45eb49970a52fcea4ce2837 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf2edadac289ffda147e484570d0c586298c289a45eb49970a52fcea4ce2837->enter($__internal_fbf2edadac289ffda147e484570d0c586298c289a45eb49970a52fcea4ce2837_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_fbf2edadac289ffda147e484570d0c586298c289a45eb49970a52fcea4ce2837->leave($__internal_fbf2edadac289ffda147e484570d0c586298c289a45eb49970a52fcea4ce2837_prof);

        
        $__internal_9bf2533b5c1f73b8ef9f43e612d1ee5749b97065f8da6c939782aede56ce6ea4->leave($__internal_9bf2533b5c1f73b8ef9f43e612d1ee5749b97065f8da6c939782aede56ce6ea4_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_5b08dd2ae4d45669d778d2af8dd0729c4bc2e4764dffd0642cb8b6e277492a17 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b08dd2ae4d45669d778d2af8dd0729c4bc2e4764dffd0642cb8b6e277492a17->enter($__internal_5b08dd2ae4d45669d778d2af8dd0729c4bc2e4764dffd0642cb8b6e277492a17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5e99f3d39c26453411627165df58c95fe53170b2ca5b132ae73a68568f46090b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e99f3d39c26453411627165df58c95fe53170b2ca5b132ae73a68568f46090b->enter($__internal_5e99f3d39c26453411627165df58c95fe53170b2ca5b132ae73a68568f46090b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_5e99f3d39c26453411627165df58c95fe53170b2ca5b132ae73a68568f46090b->leave($__internal_5e99f3d39c26453411627165df58c95fe53170b2ca5b132ae73a68568f46090b_prof);

        
        $__internal_5b08dd2ae4d45669d778d2af8dd0729c4bc2e4764dffd0642cb8b6e277492a17->leave($__internal_5b08dd2ae4d45669d778d2af8dd0729c4bc2e4764dffd0642cb8b6e277492a17_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_51e4efdd34425270cbb3ec9ee9a8786af99b25db2c998036abe7774af4bd5f0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51e4efdd34425270cbb3ec9ee9a8786af99b25db2c998036abe7774af4bd5f0e->enter($__internal_51e4efdd34425270cbb3ec9ee9a8786af99b25db2c998036abe7774af4bd5f0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a686cf00e5c7662f8f6004172343e9682b11b31df4083dcd5df0318068f1f272 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a686cf00e5c7662f8f6004172343e9682b11b31df4083dcd5df0318068f1f272->enter($__internal_a686cf00e5c7662f8f6004172343e9682b11b31df4083dcd5df0318068f1f272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 141)->display($context);
        
        $__internal_a686cf00e5c7662f8f6004172343e9682b11b31df4083dcd5df0318068f1f272->leave($__internal_a686cf00e5c7662f8f6004172343e9682b11b31df4083dcd5df0318068f1f272_prof);

        
        $__internal_51e4efdd34425270cbb3ec9ee9a8786af99b25db2c998036abe7774af4bd5f0e->leave($__internal_51e4efdd34425270cbb3ec9ee9a8786af99b25db2c998036abe7774af4bd5f0e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "TwigBundle:Exception:exception_full.html.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views/Exception/exception_full.html.twig");
    }
}

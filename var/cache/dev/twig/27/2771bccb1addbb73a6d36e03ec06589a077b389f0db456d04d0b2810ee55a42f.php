<?php

/* ::base.html.twig */
class __TwigTemplate_0cd00cd357561f8448e72f7f8d457a11abeca367d0c4ba100efbb1ef1edcf94a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_480d36d03b828b3850dcf41c66cb75983edd9165d7aeaf775e999ae2f5d5226a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_480d36d03b828b3850dcf41c66cb75983edd9165d7aeaf775e999ae2f5d5226a->enter($__internal_480d36d03b828b3850dcf41c66cb75983edd9165d7aeaf775e999ae2f5d5226a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
      
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>

    <body>
        ";
        // line 11
        $this->displayBlock('body', $context, $blocks);
        // line 12
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 13
        echo "    </body>
</html>
";
        
        $__internal_480d36d03b828b3850dcf41c66cb75983edd9165d7aeaf775e999ae2f5d5226a->leave($__internal_480d36d03b828b3850dcf41c66cb75983edd9165d7aeaf775e999ae2f5d5226a_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f7895f053137b98de582132d34e95698638d4f597104d3e59c5dc18a7b76d528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7895f053137b98de582132d34e95698638d4f597104d3e59c5dc18a7b76d528->enter($__internal_f7895f053137b98de582132d34e95698638d4f597104d3e59c5dc18a7b76d528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_f7895f053137b98de582132d34e95698638d4f597104d3e59c5dc18a7b76d528->leave($__internal_f7895f053137b98de582132d34e95698638d4f597104d3e59c5dc18a7b76d528_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fe539c518010bcba9270dad8ca922e6d2dd1cd0550660218cffd35cade3067e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5fe539c518010bcba9270dad8ca922e6d2dd1cd0550660218cffd35cade3067e->enter($__internal_5fe539c518010bcba9270dad8ca922e6d2dd1cd0550660218cffd35cade3067e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_5fe539c518010bcba9270dad8ca922e6d2dd1cd0550660218cffd35cade3067e->leave($__internal_5fe539c518010bcba9270dad8ca922e6d2dd1cd0550660218cffd35cade3067e_prof);

    }

    // line 12
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0186eac199c06a704fc46f7024230d385d1359bf062740cf912ec1ea2eacf328 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0186eac199c06a704fc46f7024230d385d1359bf062740cf912ec1ea2eacf328->enter($__internal_0186eac199c06a704fc46f7024230d385d1359bf062740cf912ec1ea2eacf328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_0186eac199c06a704fc46f7024230d385d1359bf062740cf912ec1ea2eacf328->leave($__internal_0186eac199c06a704fc46f7024230d385d1359bf062740cf912ec1ea2eacf328_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  67 => 11,  56 => 6,  47 => 13,  44 => 12,  42 => 11,  34 => 7,  32 => 6,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
      
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>

    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "::base.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/views/base.html.twig");
    }
}

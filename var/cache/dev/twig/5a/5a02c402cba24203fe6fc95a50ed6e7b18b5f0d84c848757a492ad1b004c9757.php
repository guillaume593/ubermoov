<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_be5b3585643e9e416a850db77ce62036c71b759e9d1dc216057926f25214818a extends Twig_Template
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
        $__internal_491344808d0ad1632f5dcfe8bf4ede78eb15d2e6a1faaa2e1a0400818534b391 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491344808d0ad1632f5dcfe8bf4ede78eb15d2e6a1faaa2e1a0400818534b391->enter($__internal_491344808d0ad1632f5dcfe8bf4ede78eb15d2e6a1faaa2e1a0400818534b391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        $__internal_7101954c9236a15159faa845c8b5a0d4a1d6e9762c78dc2e6ffa487a15c54e21 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7101954c9236a15159faa845c8b5a0d4a1d6e9762c78dc2e6ffa487a15c54e21->enter($__internal_7101954c9236a15159faa845c8b5a0d4a1d6e9762c78dc2e6ffa487a15c54e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["group"]) || array_key_exists("group", $context) ? $context["group"] : (function () { throw new Twig_Error_Runtime('Variable "group" does not exist.', 4, $this->getSourceContext()); })()), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_491344808d0ad1632f5dcfe8bf4ede78eb15d2e6a1faaa2e1a0400818534b391->leave($__internal_491344808d0ad1632f5dcfe8bf4ede78eb15d2e6a1faaa2e1a0400818534b391_prof);

        
        $__internal_7101954c9236a15159faa845c8b5a0d4a1d6e9762c78dc2e6ffa487a15c54e21->leave($__internal_7101954c9236a15159faa845c8b5a0d4a1d6e9762c78dc2e6ffa487a15c54e21_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "FOSUserBundle:Group:show_content.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/Group/show_content.html.twig");
    }
}

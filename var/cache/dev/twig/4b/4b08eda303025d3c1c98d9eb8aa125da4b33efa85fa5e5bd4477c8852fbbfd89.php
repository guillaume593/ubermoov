<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_58b676599d3d86c47ddfeae8f28f61108603c6f3690884645ba0bcad404cbdc8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0dbe741f968bae33c4126c270b61ffec2e994db94e7febab6e5f85b692653720 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dbe741f968bae33c4126c270b61ffec2e994db94e7febab6e5f85b692653720->enter($__internal_0dbe741f968bae33c4126c270b61ffec2e994db94e7febab6e5f85b692653720_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dbe741f968bae33c4126c270b61ffec2e994db94e7febab6e5f85b692653720->leave($__internal_0dbe741f968bae33c4126c270b61ffec2e994db94e7febab6e5f85b692653720_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_074022413edd4afa16976701302f1af495453d8192789bfb516dfe48e14c41fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_074022413edd4afa16976701302f1af495453d8192789bfb516dfe48e14c41fb->enter($__internal_074022413edd4afa16976701302f1af495453d8192789bfb516dfe48e14c41fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "

        ";
        // line 5
        if (twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->getSourceContext()); })()), "request", array()), "hasPreviousSession", array())) {
            // line 6
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 6, $this->getSourceContext()); })()), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 7
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 8
                    echo "                    <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                        ";
                    // line 9
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                    </div>

                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 13
                echo "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 14
            echo "        ";
        }
        // line 15
        echo "
        <div>
            ";
        // line 17
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "        </div>
";
        
        $__internal_074022413edd4afa16976701302f1af495453d8192789bfb516dfe48e14c41fb->leave($__internal_074022413edd4afa16976701302f1af495453d8192789bfb516dfe48e14c41fb_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38caa44fa6547a41dd73c4e478c17e8154f27965947597892aa405ccd06adf48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_38caa44fa6547a41dd73c4e478c17e8154f27965947597892aa405ccd06adf48->enter($__internal_38caa44fa6547a41dd73c4e478c17e8154f27965947597892aa405ccd06adf48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "            ";
        
        $__internal_38caa44fa6547a41dd73c4e478c17e8154f27965947597892aa405ccd06adf48->leave($__internal_38caa44fa6547a41dd73c4e478c17e8154f27965947597892aa405ccd06adf48_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  101 => 18,  95 => 17,  87 => 19,  85 => 17,  81 => 15,  78 => 14,  72 => 13,  62 => 9,  57 => 8,  52 => 7,  47 => 6,  45 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '::base.html.twig' %}
{% block body %}


        {% if app.request.hasPreviousSession %}
            {% for type, messages in app.session.flashbag.all() %}
                {% for message in messages %}
                    <div class=\"flash-{{ type }}\">
                        {{ message }}
                    </div>

                {% endfor %}
            {% endfor %}
        {% endif %}

        <div>
            {% block fos_user_content %}
            {% endblock fos_user_content %}
        </div>
{% endblock %}
", "@FOSUser/layout.html.twig", "/Applications/MAMP/htdocs/my_project_name/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}

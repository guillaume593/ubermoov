<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_bd9faae83e3655cba66b24d83e27b99baf0480d5964a40da4aed2c88751fcfaf extends Twig_Template
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
        $__internal_f7d5c247e000e68c434d4441f0feb5064281b24f98925d5570585ffd6ef2c627 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7d5c247e000e68c434d4441f0feb5064281b24f98925d5570585ffd6ef2c627->enter($__internal_f7d5c247e000e68c434d4441f0feb5064281b24f98925d5570585ffd6ef2c627_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f7d5c247e000e68c434d4441f0feb5064281b24f98925d5570585ffd6ef2c627->leave($__internal_f7d5c247e000e68c434d4441f0feb5064281b24f98925d5570585ffd6ef2c627_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c5d1c49befe5dd3c3342d9ff7a26e73b26f7505d3379e4d979666e064e8a692b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5d1c49befe5dd3c3342d9ff7a26e73b26f7505d3379e4d979666e064e8a692b->enter($__internal_c5d1c49befe5dd3c3342d9ff7a26e73b26f7505d3379e4d979666e064e8a692b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "        ";
        }
        // line 16
        echo "
        <div>
            ";
        // line 18
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 21
        echo "        </div>
";
        
        $__internal_c5d1c49befe5dd3c3342d9ff7a26e73b26f7505d3379e4d979666e064e8a692b->leave($__internal_c5d1c49befe5dd3c3342d9ff7a26e73b26f7505d3379e4d979666e064e8a692b_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7a60c80f099ad49cb955e24f219876093c53194b848d9047afdcdedb3b68a264 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a60c80f099ad49cb955e24f219876093c53194b848d9047afdcdedb3b68a264->enter($__internal_7a60c80f099ad49cb955e24f219876093c53194b848d9047afdcdedb3b68a264_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "
            ";
        
        $__internal_7a60c80f099ad49cb955e24f219876093c53194b848d9047afdcdedb3b68a264->leave($__internal_7a60c80f099ad49cb955e24f219876093c53194b848d9047afdcdedb3b68a264_prof);

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
        return array (  102 => 19,  96 => 18,  88 => 21,  86 => 18,  82 => 16,  79 => 15,  72 => 13,  62 => 9,  57 => 8,  52 => 7,  47 => 6,  45 => 5,  41 => 3,  35 => 2,  11 => 1,);
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

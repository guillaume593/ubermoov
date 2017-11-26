<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_8f51e5834c20f71e174d95aa34c7d8bdafd94dd55e6e59bc43d55a5fc40f5278 extends Twig_Template
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
        $__internal_04d0d2386a365ee072a318040ba655bad34b0e67ea34e16da87c03dfded992ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d0d2386a365ee072a318040ba655bad34b0e67ea34e16da87c03dfded992ba->enter($__internal_04d0d2386a365ee072a318040ba655bad34b0e67ea34e16da87c03dfded992ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_e7dd72ea237a004757d24717d15e44e8c7cf717ef6a7563735c850a8a0317cc7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7dd72ea237a004757d24717d15e44e8c7cf717ef6a7563735c850a8a0317cc7->enter($__internal_e7dd72ea237a004757d24717d15e44e8c7cf717ef6a7563735c850a8a0317cc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04d0d2386a365ee072a318040ba655bad34b0e67ea34e16da87c03dfded992ba->leave($__internal_04d0d2386a365ee072a318040ba655bad34b0e67ea34e16da87c03dfded992ba_prof);

        
        $__internal_e7dd72ea237a004757d24717d15e44e8c7cf717ef6a7563735c850a8a0317cc7->leave($__internal_e7dd72ea237a004757d24717d15e44e8c7cf717ef6a7563735c850a8a0317cc7_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_c0ce53e2a558ebbff586c2247b228fc74e003504929103013701dbe1d1f8d8fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0ce53e2a558ebbff586c2247b228fc74e003504929103013701dbe1d1f8d8fc->enter($__internal_c0ce53e2a558ebbff586c2247b228fc74e003504929103013701dbe1d1f8d8fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_c800f90ef31b7ff8637d9b79cfcd8671388b427a309315849b141eae4a33a01c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c800f90ef31b7ff8637d9b79cfcd8671388b427a309315849b141eae4a33a01c->enter($__internal_c800f90ef31b7ff8637d9b79cfcd8671388b427a309315849b141eae4a33a01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c800f90ef31b7ff8637d9b79cfcd8671388b427a309315849b141eae4a33a01c->leave($__internal_c800f90ef31b7ff8637d9b79cfcd8671388b427a309315849b141eae4a33a01c_prof);

        
        $__internal_c0ce53e2a558ebbff586c2247b228fc74e003504929103013701dbe1d1f8d8fc->leave($__internal_c0ce53e2a558ebbff586c2247b228fc74e003504929103013701dbe1d1f8d8fc_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fb86e6c13f10dab439e8841e6bf1aff9ff92a4c51d8bdb95d96ea945ba1df0d3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fb86e6c13f10dab439e8841e6bf1aff9ff92a4c51d8bdb95d96ea945ba1df0d3->enter($__internal_fb86e6c13f10dab439e8841e6bf1aff9ff92a4c51d8bdb95d96ea945ba1df0d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_95d315981459a361705c422849dd05ca162853e0e8fbe65813c5c637b5c7c4f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95d315981459a361705c422849dd05ca162853e0e8fbe65813c5c637b5c7c4f3->enter($__internal_95d315981459a361705c422849dd05ca162853e0e8fbe65813c5c637b5c7c4f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "
            ";
        
        $__internal_95d315981459a361705c422849dd05ca162853e0e8fbe65813c5c637b5c7c4f3->leave($__internal_95d315981459a361705c422849dd05ca162853e0e8fbe65813c5c637b5c7c4f3_prof);

        
        $__internal_fb86e6c13f10dab439e8841e6bf1aff9ff92a4c51d8bdb95d96ea945ba1df0d3->leave($__internal_fb86e6c13f10dab439e8841e6bf1aff9ff92a4c51d8bdb95d96ea945ba1df0d3_prof);

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
        return array (  117 => 19,  108 => 18,  97 => 21,  95 => 18,  91 => 16,  88 => 15,  81 => 13,  71 => 9,  66 => 8,  61 => 7,  56 => 6,  54 => 5,  50 => 3,  41 => 2,  11 => 1,);
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

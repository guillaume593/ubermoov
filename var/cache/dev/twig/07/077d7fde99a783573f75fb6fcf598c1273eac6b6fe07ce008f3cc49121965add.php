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
        $__internal_f388f1896cceb4e1d8a26328c0264484af7d3f2462c14f23e01e5ec5802a9afa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f388f1896cceb4e1d8a26328c0264484af7d3f2462c14f23e01e5ec5802a9afa->enter($__internal_f388f1896cceb4e1d8a26328c0264484af7d3f2462c14f23e01e5ec5802a9afa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_51fe2180c2cda3efcd66a58e94fcf2d77d68b8eac74c4633bf6027c0ecb62b7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51fe2180c2cda3efcd66a58e94fcf2d77d68b8eac74c4633bf6027c0ecb62b7e->enter($__internal_51fe2180c2cda3efcd66a58e94fcf2d77d68b8eac74c4633bf6027c0ecb62b7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f388f1896cceb4e1d8a26328c0264484af7d3f2462c14f23e01e5ec5802a9afa->leave($__internal_f388f1896cceb4e1d8a26328c0264484af7d3f2462c14f23e01e5ec5802a9afa_prof);

        
        $__internal_51fe2180c2cda3efcd66a58e94fcf2d77d68b8eac74c4633bf6027c0ecb62b7e->leave($__internal_51fe2180c2cda3efcd66a58e94fcf2d77d68b8eac74c4633bf6027c0ecb62b7e_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_53ac1d435fb65047f4152e212597174c87a197a28d64fcb3f007cc48234afa05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_53ac1d435fb65047f4152e212597174c87a197a28d64fcb3f007cc48234afa05->enter($__internal_53ac1d435fb65047f4152e212597174c87a197a28d64fcb3f007cc48234afa05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_ca40612d41c15b09b6899483d567b29359ea6eef3bbb05df5e88414f6630f7be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca40612d41c15b09b6899483d567b29359ea6eef3bbb05df5e88414f6630f7be->enter($__internal_ca40612d41c15b09b6899483d567b29359ea6eef3bbb05df5e88414f6630f7be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ca40612d41c15b09b6899483d567b29359ea6eef3bbb05df5e88414f6630f7be->leave($__internal_ca40612d41c15b09b6899483d567b29359ea6eef3bbb05df5e88414f6630f7be_prof);

        
        $__internal_53ac1d435fb65047f4152e212597174c87a197a28d64fcb3f007cc48234afa05->leave($__internal_53ac1d435fb65047f4152e212597174c87a197a28d64fcb3f007cc48234afa05_prof);

    }

    // line 18
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b6490e7e5c8b8f916606261cbbea469c95430263bf4be12ce4851b6e7258e18f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b6490e7e5c8b8f916606261cbbea469c95430263bf4be12ce4851b6e7258e18f->enter($__internal_b6490e7e5c8b8f916606261cbbea469c95430263bf4be12ce4851b6e7258e18f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_cd288eb87a58a22ddcb30bac7416c5c5a4a11e652606b0e71952e26da7bef8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd288eb87a58a22ddcb30bac7416c5c5a4a11e652606b0e71952e26da7bef8b7->enter($__internal_cd288eb87a58a22ddcb30bac7416c5c5a4a11e652606b0e71952e26da7bef8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 19
        echo "
            ";
        
        $__internal_cd288eb87a58a22ddcb30bac7416c5c5a4a11e652606b0e71952e26da7bef8b7->leave($__internal_cd288eb87a58a22ddcb30bac7416c5c5a4a11e652606b0e71952e26da7bef8b7_prof);

        
        $__internal_b6490e7e5c8b8f916606261cbbea469c95430263bf4be12ce4851b6e7258e18f->leave($__internal_b6490e7e5c8b8f916606261cbbea469c95430263bf4be12ce4851b6e7258e18f_prof);

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

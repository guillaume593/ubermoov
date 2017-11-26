<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_48c1b162a21ec41e3f1699006ae8dc386ddcd3cfce3a26153d74f149076bc3ee extends Twig_Template
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
        $__internal_f062a0377e839542e2530ba2fb4a94a73ddf4e813ae278ffa22645d0becd9667 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f062a0377e839542e2530ba2fb4a94a73ddf4e813ae278ffa22645d0becd9667->enter($__internal_f062a0377e839542e2530ba2fb4a94a73ddf4e813ae278ffa22645d0becd9667_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        $__internal_3b4b7d4202ed90582e424b6ba307c41b5b0109218de29b91134b1d17f81f0e2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b4b7d4202ed90582e424b6ba307c41b5b0109218de29b91134b1d17f81f0e2a->enter($__internal_3b4b7d4202ed90582e424b6ba307c41b5b0109218de29b91134b1d17f81f0e2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) || array_key_exists("widget", $context) ? $context["widget"] : (function () { throw new Twig_Error_Runtime('Variable "widget" does not exist.', 1, $this->getSourceContext()); })()), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_f062a0377e839542e2530ba2fb4a94a73ddf4e813ae278ffa22645d0becd9667->leave($__internal_f062a0377e839542e2530ba2fb4a94a73ddf4e813ae278ffa22645d0becd9667_prof);

        
        $__internal_3b4b7d4202ed90582e424b6ba307c41b5b0109218de29b91134b1d17f81f0e2a->leave($__internal_3b4b7d4202ed90582e424b6ba307c41b5b0109218de29b91134b1d17f81f0e2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
        return new Twig_Source("<?php echo str_replace('{{ widget }}', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
", "@Framework/Form/money_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/money_widget.html.php");
    }
}

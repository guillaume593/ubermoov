<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_82ba0e6798a315e346941414fdefa928c1e679bbd0ae090a8d22453b3ab0907e extends Twig_Template
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
        $__internal_d1f373bab71dbe46a0f3d410de0a81b40f77340f91695d7e8f2b956a25a4dd81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f373bab71dbe46a0f3d410de0a81b40f77340f91695d7e8f2b956a25a4dd81->enter($__internal_d1f373bab71dbe46a0f3d410de0a81b40f77340f91695d7e8f2b956a25a4dd81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_19a61e5f9ad8f385ef533029461d2f90943074df6344b4ced7f0337b21f0724a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19a61e5f9ad8f385ef533029461d2f90943074df6344b4ced7f0337b21f0724a->enter($__internal_19a61e5f9ad8f385ef533029461d2f90943074df6344b4ced7f0337b21f0724a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_d1f373bab71dbe46a0f3d410de0a81b40f77340f91695d7e8f2b956a25a4dd81->leave($__internal_d1f373bab71dbe46a0f3d410de0a81b40f77340f91695d7e8f2b956a25a4dd81_prof);

        
        $__internal_19a61e5f9ad8f385ef533029461d2f90943074df6344b4ced7f0337b21f0724a->leave($__internal_19a61e5f9ad8f385ef533029461d2f90943074df6344b4ced7f0337b21f0724a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_simple.html.php");
    }
}

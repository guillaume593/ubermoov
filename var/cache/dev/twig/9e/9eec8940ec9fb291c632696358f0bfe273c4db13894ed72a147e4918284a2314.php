<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_d0802a726c3b6013fd601a22016add055cf2fc497993e709d2d0e700a56619dc extends Twig_Template
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
        $__internal_d58f87fc0ad767c7e5bafef3fb1adb947d01273c6d23f8d4c18ba305b4e2519f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d58f87fc0ad767c7e5bafef3fb1adb947d01273c6d23f8d4c18ba305b4e2519f->enter($__internal_d58f87fc0ad767c7e5bafef3fb1adb947d01273c6d23f8d4c18ba305b4e2519f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_d58f87fc0ad767c7e5bafef3fb1adb947d01273c6d23f8d4c18ba305b4e2519f->leave($__internal_d58f87fc0ad767c7e5bafef3fb1adb947d01273c6d23f8d4c18ba305b4e2519f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/checkbox_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/checkbox_widget.html.php");
    }
}

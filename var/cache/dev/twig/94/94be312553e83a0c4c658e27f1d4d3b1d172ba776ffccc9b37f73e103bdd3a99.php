<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_a891ce73b21bdcec22ae7ba4cbaa376b2d06329818c6888d3a34cbb913ee070e extends Twig_Template
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
        $__internal_9ee55453e125817b2d3ff236e09cacd25e4e2079bd2e37f1f6fda57aec2cbf3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee55453e125817b2d3ff236e09cacd25e4e2079bd2e37f1f6fda57aec2cbf3f->enter($__internal_9ee55453e125817b2d3ff236e09cacd25e4e2079bd2e37f1f6fda57aec2cbf3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_9ee55453e125817b2d3ff236e09cacd25e4e2079bd2e37f1f6fda57aec2cbf3f->leave($__internal_9ee55453e125817b2d3ff236e09cacd25e4e2079bd2e37f1f6fda57aec2cbf3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/radio_widget.html.php");
    }
}

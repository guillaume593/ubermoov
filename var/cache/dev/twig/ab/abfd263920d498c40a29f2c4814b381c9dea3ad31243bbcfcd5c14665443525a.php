<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_48e619ad8c9a862bea765b8e8d5d6d5ff1d677c9dcf315f4856e8a8dd534cea8 extends Twig_Template
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
        $__internal_df9acc083263a9628640286d201aae9f6ceb5c75be740a90e65ce6d0f09781a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df9acc083263a9628640286d201aae9f6ceb5c75be740a90e65ce6d0f09781a5->enter($__internal_df9acc083263a9628640286d201aae9f6ceb5c75be740a90e65ce6d0f09781a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_df9acc083263a9628640286d201aae9f6ceb5c75be740a90e65ce6d0f09781a5->leave($__internal_df9acc083263a9628640286d201aae9f6ceb5c75be740a90e65ce6d0f09781a5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
", "@Framework/Form/textarea_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/textarea_widget.html.php");
    }
}

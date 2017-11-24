<?php

/* @Framework/Form/choice_options.html.php */
class __TwigTemplate_a94ddf572061094465a1f0168d076674451ba607d3720a788f1a11c36ab0f11a extends Twig_Template
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
        $__internal_80d56882482db39e76b4146249eb43cb5538488acb23542676ff99c15199cdd1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80d56882482db39e76b4146249eb43cb5538488acb23542676ff99c15199cdd1->enter($__internal_80d56882482db39e76b4146249eb43cb5538488acb23542676ff99c15199cdd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_options.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
";
        
        $__internal_80d56882482db39e76b4146249eb43cb5538488acb23542676ff99c15199cdd1->leave($__internal_80d56882482db39e76b4146249eb43cb5538488acb23542676ff99c15199cdd1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_options.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'choice_widget_options') ?>
", "@Framework/Form/choice_options.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_options.html.php");
    }
}

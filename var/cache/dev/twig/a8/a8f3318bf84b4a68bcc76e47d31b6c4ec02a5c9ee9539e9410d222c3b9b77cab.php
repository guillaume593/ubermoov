<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_f2f9c011689156ee26f1f083fd6f2bd9a2e3b54117a80be12dbc19966054319f extends Twig_Template
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
        $__internal_ec168879b7cd6f8bc2f080241391831ee7ba334847c3786493258ddddfdd24cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec168879b7cd6f8bc2f080241391831ee7ba334847c3786493258ddddfdd24cf->enter($__internal_ec168879b7cd6f8bc2f080241391831ee7ba334847c3786493258ddddfdd24cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_ec168879b7cd6f8bc2f080241391831ee7ba334847c3786493258ddddfdd24cf->leave($__internal_ec168879b7cd6f8bc2f080241391831ee7ba334847c3786493258ddddfdd24cf_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget.html.php");
    }
}

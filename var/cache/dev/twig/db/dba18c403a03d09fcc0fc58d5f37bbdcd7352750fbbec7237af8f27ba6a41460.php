<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_9b0cb570c83dcd916c72997de0427a31a40bc692cea73623768dc822db0191e0 extends Twig_Template
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
        $__internal_1ee82e2b7740908e049bfe6fd874ac9c020677c31479584f70df11f42b779369 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ee82e2b7740908e049bfe6fd874ac9c020677c31479584f70df11f42b779369->enter($__internal_1ee82e2b7740908e049bfe6fd874ac9c020677c31479584f70df11f42b779369_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_e6748c9332ff8d0718db598d3fae52f736e4b2623957b6edd82647329ee60453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e6748c9332ff8d0718db598d3fae52f736e4b2623957b6edd82647329ee60453->enter($__internal_e6748c9332ff8d0718db598d3fae52f736e4b2623957b6edd82647329ee60453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_1ee82e2b7740908e049bfe6fd874ac9c020677c31479584f70df11f42b779369->leave($__internal_1ee82e2b7740908e049bfe6fd874ac9c020677c31479584f70df11f42b779369_prof);

        
        $__internal_e6748c9332ff8d0718db598d3fae52f736e4b2623957b6edd82647329ee60453->leave($__internal_e6748c9332ff8d0718db598d3fae52f736e4b2623957b6edd82647329ee60453_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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

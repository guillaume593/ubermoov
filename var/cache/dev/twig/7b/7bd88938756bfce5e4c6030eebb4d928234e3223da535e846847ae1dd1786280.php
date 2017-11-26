<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_5e31471f51abd0c7c407278522090dd0e96bb5ca261538b453cd8f4fd465aa17 extends Twig_Template
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
        $__internal_4a994943ebd4eefe3408ab216f5f7a98950af498dc662e64aba29ba5330f1059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a994943ebd4eefe3408ab216f5f7a98950af498dc662e64aba29ba5330f1059->enter($__internal_4a994943ebd4eefe3408ab216f5f7a98950af498dc662e64aba29ba5330f1059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_07704bed4309b7bc204a5773f2b78108fdfb47800810b19be9d129bff64ff6b4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07704bed4309b7bc204a5773f2b78108fdfb47800810b19be9d129bff64ff6b4->enter($__internal_07704bed4309b7bc204a5773f2b78108fdfb47800810b19be9d129bff64ff6b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_4a994943ebd4eefe3408ab216f5f7a98950af498dc662e64aba29ba5330f1059->leave($__internal_4a994943ebd4eefe3408ab216f5f7a98950af498dc662e64aba29ba5330f1059_prof);

        
        $__internal_07704bed4309b7bc204a5773f2b78108fdfb47800810b19be9d129bff64ff6b4->leave($__internal_07704bed4309b7bc204a5773f2b78108fdfb47800810b19be9d129bff64ff6b4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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

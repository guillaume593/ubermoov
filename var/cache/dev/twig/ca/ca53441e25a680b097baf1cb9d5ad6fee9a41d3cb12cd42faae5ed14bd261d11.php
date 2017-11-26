<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_036e9e11349e378d44971891af2db1332feca390f0203e0760027229a6918625 extends Twig_Template
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
        $__internal_389dd860049c5dc169a10874478e1e8007f4ce28b0c958b6293d4d6a468bd9e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_389dd860049c5dc169a10874478e1e8007f4ce28b0c958b6293d4d6a468bd9e6->enter($__internal_389dd860049c5dc169a10874478e1e8007f4ce28b0c958b6293d4d6a468bd9e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_bf0b71569cf0b35dc917f8eda6532c0b1329812340e537817fcc518ab4dd79c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf0b71569cf0b35dc917f8eda6532c0b1329812340e537817fcc518ab4dd79c2->enter($__internal_bf0b71569cf0b35dc917f8eda6532c0b1329812340e537817fcc518ab4dd79c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_389dd860049c5dc169a10874478e1e8007f4ce28b0c958b6293d4d6a468bd9e6->leave($__internal_389dd860049c5dc169a10874478e1e8007f4ce28b0c958b6293d4d6a468bd9e6_prof);

        
        $__internal_bf0b71569cf0b35dc917f8eda6532c0b1329812340e537817fcc518ab4dd79c2->leave($__internal_bf0b71569cf0b35dc917f8eda6532c0b1329812340e537817fcc518ab4dd79c2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_attributes.html.php");
    }
}

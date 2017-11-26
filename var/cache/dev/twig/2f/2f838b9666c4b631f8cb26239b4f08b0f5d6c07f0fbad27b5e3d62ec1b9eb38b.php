<?php

/* @Framework/Form/widget_attributes.html.php */
class __TwigTemplate_ccda895d3352d21e865c8afe3a6231ac42080e92066a3fb59da2f8f2f44d843b extends Twig_Template
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
        $__internal_1b32b4337fb8ba85bf74658311c7f7f38a0e3e36447043bb5fb6e6f0ceb15abb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b32b4337fb8ba85bf74658311c7f7f38a0e3e36447043bb5fb6e6f0ceb15abb->enter($__internal_1b32b4337fb8ba85bf74658311c7f7f38a0e3e36447043bb5fb6e6f0ceb15abb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        $__internal_f4bbc23eba94807f00e22c43c66714657d5d23445364e0d4c9f71f1672daf36e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4bbc23eba94807f00e22c43c66714657d5d23445364e0d4c9f71f1672daf36e->enter($__internal_f4bbc23eba94807f00e22c43c66714657d5d23445364e0d4c9f71f1672daf36e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_1b32b4337fb8ba85bf74658311c7f7f38a0e3e36447043bb5fb6e6f0ceb15abb->leave($__internal_1b32b4337fb8ba85bf74658311c7f7f38a0e3e36447043bb5fb6e6f0ceb15abb_prof);

        
        $__internal_f4bbc23eba94807f00e22c43c66714657d5d23445364e0d4c9f71f1672daf36e->leave($__internal_f4bbc23eba94807f00e22c43c66714657d5d23445364e0d4c9f71f1672daf36e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_attributes.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php if (\$required): ?> required=\"required\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_attributes.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/widget_attributes.html.php");
    }
}

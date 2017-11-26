<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_eecb275d8edb5d0cfa550a57029a1cb38abe70b237842ebeaa2f6e924724e70c extends Twig_Template
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
        $__internal_e425213a79c8f674d17eb3d5d21b466c2893f3bd5e73ac0e7233c0799738d1f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e425213a79c8f674d17eb3d5d21b466c2893f3bd5e73ac0e7233c0799738d1f9->enter($__internal_e425213a79c8f674d17eb3d5d21b466c2893f3bd5e73ac0e7233c0799738d1f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        $__internal_fcd4537397e9e3bc28d4b61d104842e933e8ee7ccb6721c40668a1662267ca51 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd4537397e9e3bc28d4b61d104842e933e8ee7ccb6721c40668a1662267ca51->enter($__internal_fcd4537397e9e3bc28d4b61d104842e933e8ee7ccb6721c40668a1662267ca51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_e425213a79c8f674d17eb3d5d21b466c2893f3bd5e73ac0e7233c0799738d1f9->leave($__internal_e425213a79c8f674d17eb3d5d21b466c2893f3bd5e73ac0e7233c0799738d1f9_prof);

        
        $__internal_fcd4537397e9e3bc28d4b61d104842e933e8ee7ccb6721c40668a1662267ca51->leave($__internal_fcd4537397e9e3bc28d4b61d104842e933e8ee7ccb6721c40668a1662267ca51_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
", "@Framework/Form/form_widget_compound.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_widget_compound.html.php");
    }
}

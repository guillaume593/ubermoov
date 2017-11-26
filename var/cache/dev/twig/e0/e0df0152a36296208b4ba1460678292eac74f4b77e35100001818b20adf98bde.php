<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_5a57ff4c6c77b5be49334b2ee80bcb8f8125df44bdb13034ccdc0602d10819f2 extends Twig_Template
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
        $__internal_12de0b341d86abf59bcb292eb2da1ec19783336ba48bb5a7e99db03eed5bb41a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12de0b341d86abf59bcb292eb2da1ec19783336ba48bb5a7e99db03eed5bb41a->enter($__internal_12de0b341d86abf59bcb292eb2da1ec19783336ba48bb5a7e99db03eed5bb41a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        $__internal_33b28c1d88aa324756ac8dfe0f61bfe53048510b2fa219ce0121a99687645456 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_33b28c1d88aa324756ac8dfe0f61bfe53048510b2fa219ce0121a99687645456->enter($__internal_33b28c1d88aa324756ac8dfe0f61bfe53048510b2fa219ce0121a99687645456_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_12de0b341d86abf59bcb292eb2da1ec19783336ba48bb5a7e99db03eed5bb41a->leave($__internal_12de0b341d86abf59bcb292eb2da1ec19783336ba48bb5a7e99db03eed5bb41a_prof);

        
        $__internal_33b28c1d88aa324756ac8dfe0f61bfe53048510b2fa219ce0121a99687645456->leave($__internal_33b28c1d88aa324756ac8dfe0f61bfe53048510b2fa219ce0121a99687645456_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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

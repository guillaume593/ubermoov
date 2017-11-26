<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_ff3189e16bc9f99c9490ad0fdc842a87fa89ed12b94be16e6ae5b9de324224c0 extends Twig_Template
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
        $__internal_6f71660cfe7dd378bf3e89cd8c0e11a4e085f5f3786a4eeeb863ee998bb1bb98 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6f71660cfe7dd378bf3e89cd8c0e11a4e085f5f3786a4eeeb863ee998bb1bb98->enter($__internal_6f71660cfe7dd378bf3e89cd8c0e11a4e085f5f3786a4eeeb863ee998bb1bb98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        $__internal_c85c6f5561f85e9909fdafb925bce78fc461dfdc955fc42212fc8ea4031564ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c85c6f5561f85e9909fdafb925bce78fc461dfdc955fc42212fc8ea4031564ee->enter($__internal_c85c6f5561f85e9909fdafb925bce78fc461dfdc955fc42212fc8ea4031564ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
";
        
        $__internal_6f71660cfe7dd378bf3e89cd8c0e11a4e085f5f3786a4eeeb863ee998bb1bb98->leave($__internal_6f71660cfe7dd378bf3e89cd8c0e11a4e085f5f3786a4eeeb863ee998bb1bb98_prof);

        
        $__internal_c85c6f5561f85e9909fdafb925bce78fc461dfdc955fc42212fc8ea4031564ee->leave($__internal_c85c6f5561f85e9909fdafb925bce78fc461dfdc955fc42212fc8ea4031564ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes'); ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo \$view['form']->block(\$form, 'form_rows'); ?>
    <?php echo \$view['form']->rest(\$form); ?>
</table>
", "@Framework/FormTable/form_widget_compound.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_widget_compound.html.php");
    }
}

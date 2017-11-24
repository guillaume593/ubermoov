<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_3f46ef2cb784de5d3fb91b24855c1540b96337af89bc0042c2f4e847a9b5eec1 extends Twig_Template
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
        $__internal_df1d1c78e63b1c9df4b8cd16f5833a19035fd6cae5fc3db3fc7241e17a117f5c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df1d1c78e63b1c9df4b8cd16f5833a19035fd6cae5fc3db3fc7241e17a117f5c->enter($__internal_df1d1c78e63b1c9df4b8cd16f5833a19035fd6cae5fc3db3fc7241e17a117f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_df1d1c78e63b1c9df4b8cd16f5833a19035fd6cae5fc3db3fc7241e17a117f5c->leave($__internal_df1d1c78e63b1c9df4b8cd16f5833a19035fd6cae5fc3db3fc7241e17a117f5c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}

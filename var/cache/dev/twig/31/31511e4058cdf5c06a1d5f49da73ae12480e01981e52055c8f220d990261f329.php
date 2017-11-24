<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_43e8081a598b296233b8cb8549b74a9f27239e05b33a0ced3048b6a9f6db0ded extends Twig_Template
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
        $__internal_1aafade4ca1447dd8829de6d276b5a82cbf7589ae003e386a2ff3d528b866bfc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1aafade4ca1447dd8829de6d276b5a82cbf7589ae003e386a2ff3d528b866bfc->enter($__internal_1aafade4ca1447dd8829de6d276b5a82cbf7589ae003e386a2ff3d528b866bfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_1aafade4ca1447dd8829de6d276b5a82cbf7589ae003e386a2ff3d528b866bfc->leave($__internal_1aafade4ca1447dd8829de6d276b5a82cbf7589ae003e386a2ff3d528b866bfc_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_89f695845f31d383a70b1c06ce4470c350ff439309012cdc28a252b156349933 extends Twig_Template
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
        $__internal_31b88364a0e509cf1a875d59c3a3d513ae366e03ffab55e2f49c06bd97a3addf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31b88364a0e509cf1a875d59c3a3d513ae366e03ffab55e2f49c06bd97a3addf->enter($__internal_31b88364a0e509cf1a875d59c3a3d513ae366e03ffab55e2f49c06bd97a3addf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_bf1e50a5d2a50e8f56fb66e72488d4b5d8acd2752c2807bd2eba6abac50a9ff8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf1e50a5d2a50e8f56fb66e72488d4b5d8acd2752c2807bd2eba6abac50a9ff8->enter($__internal_bf1e50a5d2a50e8f56fb66e72488d4b5d8acd2752c2807bd2eba6abac50a9ff8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_31b88364a0e509cf1a875d59c3a3d513ae366e03ffab55e2f49c06bd97a3addf->leave($__internal_31b88364a0e509cf1a875d59c3a3d513ae366e03ffab55e2f49c06bd97a3addf_prof);

        
        $__internal_bf1e50a5d2a50e8f56fb66e72488d4b5d8acd2752c2807bd2eba6abac50a9ff8->leave($__internal_bf1e50a5d2a50e8f56fb66e72488d4b5d8acd2752c2807bd2eba6abac50a9ff8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}

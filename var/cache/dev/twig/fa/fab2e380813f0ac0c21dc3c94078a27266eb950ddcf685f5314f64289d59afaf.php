<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b29d345d9cde752d226fff8a3b60da57a1994de51f2ccf2ee3e9e89ebc207903 extends Twig_Template
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
        $__internal_b83c18facf94b10b16959a18cedcf8c0d98cb581c3fba1ce86a96bda2997db97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b83c18facf94b10b16959a18cedcf8c0d98cb581c3fba1ce86a96bda2997db97->enter($__internal_b83c18facf94b10b16959a18cedcf8c0d98cb581c3fba1ce86a96bda2997db97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        $__internal_446df2484e4412feb2644dcfa979c077dcee19426bbee9dbc31c58e8d430d731 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_446df2484e4412feb2644dcfa979c077dcee19426bbee9dbc31c58e8d430d731->enter($__internal_446df2484e4412feb2644dcfa979c077dcee19426bbee9dbc31c58e8d430d731_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
";
        
        $__internal_b83c18facf94b10b16959a18cedcf8c0d98cb581c3fba1ce86a96bda2997db97->leave($__internal_b83c18facf94b10b16959a18cedcf8c0d98cb581c3fba1ce86a96bda2997db97_prof);

        
        $__internal_446df2484e4412feb2644dcfa979c077dcee19426bbee9dbc31c58e8d430d731->leave($__internal_446df2484e4412feb2644dcfa979c077dcee19426bbee9dbc31c58e8d430d731_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td>
        <?php echo \$view['form']->label(\$form); ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form); ?>
        <?php echo \$view['form']->widget(\$form); ?>
    </td>
</tr>
", "@Framework/FormTable/form_row.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/form_row.html.php");
    }
}

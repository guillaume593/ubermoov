<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_db4c7d5d1f375ba4e68b3a8a15f21c41f4207e51f4615bbcb8a961c4b9fc6a3b extends Twig_Template
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
        $__internal_4b6b907124510a57aa0df6b37ec763fb4a8c3e886407c2101d6dab6b123e0b61 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b6b907124510a57aa0df6b37ec763fb4a8c3e886407c2101d6dab6b123e0b61->enter($__internal_4b6b907124510a57aa0df6b37ec763fb4a8c3e886407c2101d6dab6b123e0b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4b6b907124510a57aa0df6b37ec763fb4a8c3e886407c2101d6dab6b123e0b61->leave($__internal_4b6b907124510a57aa0df6b37ec763fb4a8c3e886407c2101d6dab6b123e0b61_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}

<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_42427693805c63ba7551d3ed47fb392a123030274523435efeede33666274cfa extends Twig_Template
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
        $__internal_11d48afe9de089368fbb0b0842552a218d160062f399d85638418f95d080f6b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d48afe9de089368fbb0b0842552a218d160062f399d85638418f95d080f6b0->enter($__internal_11d48afe9de089368fbb0b0842552a218d160062f399d85638418f95d080f6b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        $__internal_79b37332936327a0a4c0a8a193b05f5d8b9fe8ff920627ac600f46a741dcd0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79b37332936327a0a4c0a8a193b05f5d8b9fe8ff920627ac600f46a741dcd0dd->enter($__internal_79b37332936327a0a4c0a8a193b05f5d8b9fe8ff920627ac600f46a741dcd0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_11d48afe9de089368fbb0b0842552a218d160062f399d85638418f95d080f6b0->leave($__internal_11d48afe9de089368fbb0b0842552a218d160062f399d85638418f95d080f6b0_prof);

        
        $__internal_79b37332936327a0a4c0a8a193b05f5d8b9fe8ff920627ac600f46a741dcd0dd->leave($__internal_79b37332936327a0a4c0a8a193b05f5d8b9fe8ff920627ac600f46a741dcd0dd_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}

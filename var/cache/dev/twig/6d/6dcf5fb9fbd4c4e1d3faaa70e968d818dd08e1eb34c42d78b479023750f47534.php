<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_10b81e34175ab52c398a97ae36a157d8052f72809644c85548548ec895af1563 extends Twig_Template
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
        $__internal_e4e987592c655db69629db76eb0c453a1b5101ae2f55e07582e163cb08d30960 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4e987592c655db69629db76eb0c453a1b5101ae2f55e07582e163cb08d30960->enter($__internal_e4e987592c655db69629db76eb0c453a1b5101ae2f55e07582e163cb08d30960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_e5fd46688c19840df0dd00e8f6f58a9396b4c1f28bd4fec54c20a1aa00ff34f2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5fd46688c19840df0dd00e8f6f58a9396b4c1f28bd4fec54c20a1aa00ff34f2->enter($__internal_e5fd46688c19840df0dd00e8f6f58a9396b4c1f28bd4fec54c20a1aa00ff34f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_e4e987592c655db69629db76eb0c453a1b5101ae2f55e07582e163cb08d30960->leave($__internal_e4e987592c655db69629db76eb0c453a1b5101ae2f55e07582e163cb08d30960_prof);

        
        $__internal_e5fd46688c19840df0dd00e8f6f58a9396b4c1f28bd4fec54c20a1aa00ff34f2->leave($__internal_e5fd46688c19840df0dd00e8f6f58a9396b4c1f28bd4fec54c20a1aa00ff34f2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

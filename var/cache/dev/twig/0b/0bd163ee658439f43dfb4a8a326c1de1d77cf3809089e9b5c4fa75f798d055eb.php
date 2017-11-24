<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_21eb7fc8d76fcf185e1f9900c9b2a0aee36061087f5fb0f0e2f0b8b411c7fcef extends Twig_Template
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
        $__internal_65ec43ad37478ece7ebf14930fd8563c55ba361d3e6ae9a94ee5d7c231e6aa0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_65ec43ad37478ece7ebf14930fd8563c55ba361d3e6ae9a94ee5d7c231e6aa0e->enter($__internal_65ec43ad37478ece7ebf14930fd8563c55ba361d3e6ae9a94ee5d7c231e6aa0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_65ec43ad37478ece7ebf14930fd8563c55ba361d3e6ae9a94ee5d7c231e6aa0e->leave($__internal_65ec43ad37478ece7ebf14930fd8563c55ba361d3e6ae9a94ee5d7c231e6aa0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}

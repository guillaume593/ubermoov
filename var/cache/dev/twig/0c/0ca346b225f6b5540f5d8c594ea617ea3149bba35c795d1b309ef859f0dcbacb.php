<?php

/* @Framework/Form/form_start.html.php */
class __TwigTemplate_4f4c08f96cfd6d071ce6eea0c830097b0d61c89a868ac4ee5a7610ac142f687c extends Twig_Template
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
        $__internal_ad3567bb3aefb41d7e9b08ee26cfc304bb0d48bae5b41aa00e5d1b24a6fcd7aa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad3567bb3aefb41d7e9b08ee26cfc304bb0d48bae5b41aa00e5d1b24a6fcd7aa->enter($__internal_ad3567bb3aefb41d7e9b08ee26cfc304bb0d48bae5b41aa00e5d1b24a6fcd7aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        $__internal_135ea0b97fb5e8e56d368b3656707ca4fcdb11d1b3cd0e961ab4aeedaf877a2a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_135ea0b97fb5e8e56d368b3656707ca4fcdb11d1b3cd0e961ab4aeedaf877a2a->enter($__internal_135ea0b97fb5e8e56d368b3656707ca4fcdb11d1b3cd0e961ab4aeedaf877a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_start.html.php"));

        // line 1
        echo "<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
";
        
        $__internal_ad3567bb3aefb41d7e9b08ee26cfc304bb0d48bae5b41aa00e5d1b24a6fcd7aa->leave($__internal_ad3567bb3aefb41d7e9b08ee26cfc304bb0d48bae5b41aa00e5d1b24a6fcd7aa_prof);

        
        $__internal_135ea0b97fb5e8e56d368b3656707ca4fcdb11d1b3cd0e961ab4aeedaf877a2a->leave($__internal_135ea0b97fb5e8e56d368b3656707ca4fcdb11d1b3cd0e961ab4aeedaf877a2a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_start.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php \$method = strtoupper(\$method) ?>
<?php \$form_method = \$method === 'GET' || \$method === 'POST' ? \$method : 'POST' ?>
<form name=\"<?php echo \$name ?>\" method=\"<?php echo strtolower(\$form_method) ?>\"<?php if (\$action !== ''): ?> action=\"<?php echo \$action ?>\"<?php endif ?><?php foreach (\$attr as \$k => \$v) { printf(' %s=\"%s\"', \$view->escape(\$k), \$view->escape(\$v)); } ?><?php if (\$multipart): ?> enctype=\"multipart/form-data\"<?php endif ?>>
<?php if (\$form_method !== \$method): ?>
    <input type=\"hidden\" name=\"_method\" value=\"<?php echo \$method ?>\" />
<?php endif ?>
", "@Framework/Form/form_start.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_start.html.php");
    }
}

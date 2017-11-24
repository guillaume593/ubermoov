<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_629dc6ffd10862de890dfa739fe03456a2e56320b32c48bdb276fd9fe004a727 extends Twig_Template
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
        $__internal_f4769e4ff49e2e399c745f23b74f72e2237b156f3986dbcb9d3ffdd225a630a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4769e4ff49e2e399c745f23b74f72e2237b156f3986dbcb9d3ffdd225a630a1->enter($__internal_f4769e4ff49e2e399c745f23b74f72e2237b156f3986dbcb9d3ffdd225a630a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_f4769e4ff49e2e399c745f23b74f72e2237b156f3986dbcb9d3ffdd225a630a1->leave($__internal_f4769e4ff49e2e399c745f23b74f72e2237b156f3986dbcb9d3ffdd225a630a1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
", "@Framework/Form/form_rows.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rows.html.php");
    }
}

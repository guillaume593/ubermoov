<?php

/* @Framework/Form/hidden_row.html.php */
class __TwigTemplate_cc6cad10fb3fa2244be8f85799b2c80698f51a5592f7b7eceb453af716c70f5d extends Twig_Template
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
        $__internal_cdacc35e84b87fb638eb9bf50b77c795cd1bc0db1f8f1f1e39ccfd32e741de5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cdacc35e84b87fb638eb9bf50b77c795cd1bc0db1f8f1f1e39ccfd32e741de5a->enter($__internal_cdacc35e84b87fb638eb9bf50b77c795cd1bc0db1f8f1f1e39ccfd32e741de5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->widget(\$form) ?>
";
        
        $__internal_cdacc35e84b87fb638eb9bf50b77c795cd1bc0db1f8f1f1e39ccfd32e741de5a->leave($__internal_cdacc35e84b87fb638eb9bf50b77c795cd1bc0db1f8f1f1e39ccfd32e741de5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->widget(\$form) ?>
", "@Framework/Form/hidden_row.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_row.html.php");
    }
}

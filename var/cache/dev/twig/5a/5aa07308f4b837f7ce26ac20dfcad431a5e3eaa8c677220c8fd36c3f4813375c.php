<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_591561af5d79d9a60fcb919fbed996c7d0eb72f761b072e98334428d98ba562d extends Twig_Template
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
        $__internal_549b0656546af69eaf47b89701c7f8f8ecc40fe49b9755771d562fe2c3bb1e4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_549b0656546af69eaf47b89701c7f8f8ecc40fe49b9755771d562fe2c3bb1e4c->enter($__internal_549b0656546af69eaf47b89701c7f8f8ecc40fe49b9755771d562fe2c3bb1e4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_549b0656546af69eaf47b89701c7f8f8ecc40fe49b9755771d562fe2c3bb1e4c->leave($__internal_549b0656546af69eaf47b89701c7f8f8ecc40fe49b9755771d562fe2c3bb1e4c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_rest.html.php");
    }
}

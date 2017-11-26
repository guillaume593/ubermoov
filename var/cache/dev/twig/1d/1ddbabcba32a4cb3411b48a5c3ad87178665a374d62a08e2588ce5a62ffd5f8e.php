<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_cfe713236a16f2cc881607fae6d273820e663606ed5f03f4bd30244172b3aa8e extends Twig_Template
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
        $__internal_63355b270910fe1f079b20c75bb3a59cb04f89def8384b4a117fe5a9b79a32a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_63355b270910fe1f079b20c75bb3a59cb04f89def8384b4a117fe5a9b79a32a4->enter($__internal_63355b270910fe1f079b20c75bb3a59cb04f89def8384b4a117fe5a9b79a32a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_80f330d6f9b2bc60377df8d694ba36fa6cd9d55e2b855b1e89841f34f4e2b979 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80f330d6f9b2bc60377df8d694ba36fa6cd9d55e2b855b1e89841f34f4e2b979->enter($__internal_80f330d6f9b2bc60377df8d694ba36fa6cd9d55e2b855b1e89841f34f4e2b979_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_63355b270910fe1f079b20c75bb3a59cb04f89def8384b4a117fe5a9b79a32a4->leave($__internal_63355b270910fe1f079b20c75bb3a59cb04f89def8384b4a117fe5a9b79a32a4_prof);

        
        $__internal_80f330d6f9b2bc60377df8d694ba36fa6cd9d55e2b855b1e89841f34f4e2b979->leave($__internal_80f330d6f9b2bc60377df8d694ba36fa6cd9d55e2b855b1e89841f34f4e2b979_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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

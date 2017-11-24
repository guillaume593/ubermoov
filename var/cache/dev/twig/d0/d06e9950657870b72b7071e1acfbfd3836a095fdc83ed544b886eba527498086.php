<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_afecc157fe452932e2f111f042e7b54cb531306bbcab0c97aeed33e5f6ea01bb extends Twig_Template
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
        $__internal_39f59c8309e93143ca0f033aa24f650c5d92153cdba8bde4d5c8a56ddf1ae081 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_39f59c8309e93143ca0f033aa24f650c5d92153cdba8bde4d5c8a56ddf1ae081->enter($__internal_39f59c8309e93143ca0f033aa24f650c5d92153cdba8bde4d5c8a56ddf1ae081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_39f59c8309e93143ca0f033aa24f650c5d92153cdba8bde4d5c8a56ddf1ae081->leave($__internal_39f59c8309e93143ca0f033aa24f650c5d92153cdba8bde4d5c8a56ddf1ae081_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_errors.html.php");
    }
}

<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_eade06dd15740f8ddf4d990eb6a1913d70a6be3472a3010735ef86a68e488507 extends Twig_Template
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
        $__internal_367824ae4e11b0d717eeb51a4d53a6bdc1047d438f419f79537ce2a298c61d3e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_367824ae4e11b0d717eeb51a4d53a6bdc1047d438f419f79537ce2a298c61d3e->enter($__internal_367824ae4e11b0d717eeb51a4d53a6bdc1047d438f419f79537ce2a298c61d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_75d18883bbd933dffd8c4f14ab97606ed15c1f4bb3e7b08e9674adcd4e59810e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_75d18883bbd933dffd8c4f14ab97606ed15c1f4bb3e7b08e9674adcd4e59810e->enter($__internal_75d18883bbd933dffd8c4f14ab97606ed15c1f4bb3e7b08e9674adcd4e59810e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_367824ae4e11b0d717eeb51a4d53a6bdc1047d438f419f79537ce2a298c61d3e->leave($__internal_367824ae4e11b0d717eeb51a4d53a6bdc1047d438f419f79537ce2a298c61d3e_prof);

        
        $__internal_75d18883bbd933dffd8c4f14ab97606ed15c1f4bb3e7b08e9674adcd4e59810e->leave($__internal_75d18883bbd933dffd8c4f14ab97606ed15c1f4bb3e7b08e9674adcd4e59810e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
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

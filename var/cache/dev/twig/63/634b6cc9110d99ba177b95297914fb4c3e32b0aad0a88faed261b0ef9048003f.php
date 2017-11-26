<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_58b5c1dbdeec445cbf80ec3c744d94feeca0da0b9dbfa4fc92c97fe9186a9ae9 extends Twig_Template
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
        $__internal_4d90744da1f6989e1261ce3abbdbd32dd1a1af85e14ccaa49511ff23fe03d234 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4d90744da1f6989e1261ce3abbdbd32dd1a1af85e14ccaa49511ff23fe03d234->enter($__internal_4d90744da1f6989e1261ce3abbdbd32dd1a1af85e14ccaa49511ff23fe03d234_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        $__internal_218e1f0d9c9d6682b7a7345718c0474dff1721caa4500e9e113b11a16e820974 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_218e1f0d9c9d6682b7a7345718c0474dff1721caa4500e9e113b11a16e820974->enter($__internal_218e1f0d9c9d6682b7a7345718c0474dff1721caa4500e9e113b11a16e820974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_4d90744da1f6989e1261ce3abbdbd32dd1a1af85e14ccaa49511ff23fe03d234->leave($__internal_4d90744da1f6989e1261ce3abbdbd32dd1a1af85e14ccaa49511ff23fe03d234_prof);

        
        $__internal_218e1f0d9c9d6682b7a7345718c0474dff1721caa4500e9e113b11a16e820974->leave($__internal_218e1f0d9c9d6682b7a7345718c0474dff1721caa4500e9e113b11a16e820974_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
", "@Framework/Form/choice_widget_expanded.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/choice_widget_expanded.html.php");
    }
}

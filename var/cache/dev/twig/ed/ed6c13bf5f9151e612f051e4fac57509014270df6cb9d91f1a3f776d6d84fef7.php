<?php

/* @Framework/Form/time_widget.html.php */
class __TwigTemplate_76562b1878f8abc0910b977c9b784e6a82699e8ca93c8d8fb9e4fb25722bcf0a extends Twig_Template
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
        $__internal_bc05fb5b2c283be1010e925c100135876bcfcba82ed9fd97aca6e085d4e4f81c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc05fb5b2c283be1010e925c100135876bcfcba82ed9fd97aca6e085d4e4f81c->enter($__internal_bc05fb5b2c283be1010e925c100135876bcfcba82ed9fd97aca6e085d4e4f81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        $__internal_682376f0f9e2360b2d86f8cdb4d8b16695df4f4348bad9a6b0390c3c22598394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_682376f0f9e2360b2d86f8cdb4d8b16695df4f4348bad9a6b0390c3c22598394->enter($__internal_682376f0f9e2360b2d86f8cdb4d8b16695df4f4348bad9a6b0390c3c22598394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/time_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
";
        
        $__internal_bc05fb5b2c283be1010e925c100135876bcfcba82ed9fd97aca6e085d4e4f81c->leave($__internal_bc05fb5b2c283be1010e925c100135876bcfcba82ed9fd97aca6e085d4e4f81c_prof);

        
        $__internal_682376f0f9e2360b2d86f8cdb4d8b16695df4f4348bad9a6b0390c3c22598394->leave($__internal_682376f0f9e2360b2d86f8cdb4d8b16695df4f4348bad9a6b0390c3c22598394_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/time_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <?php \$vars = \$widget == 'text' ? array('attr' => array('size' => 1)) : array() ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php
            // There should be no spaces between the colons and the widgets, that's why
            // this block is written in a single PHP tag
            echo \$view['form']->widget(\$form['hour'], \$vars);

            if (\$with_minutes) {
                echo ':';
                echo \$view['form']->widget(\$form['minute'], \$vars);
            }

            if (\$with_seconds) {
                echo ':';
                echo \$view['form']->widget(\$form['second'], \$vars);
            }
        ?>
    </div>
<?php endif ?>
", "@Framework/Form/time_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/time_widget.html.php");
    }
}

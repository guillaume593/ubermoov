<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_ef9481118443d4be8074f20f0dd9020d2571e8f6464e7d029aee2ea03b1c99ce extends Twig_Template
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
        $__internal_b379aa9082cd109c8f9bc1f28dd3920aa95174b1841ebf8c6de4a1d4fe4e9fe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b379aa9082cd109c8f9bc1f28dd3920aa95174b1841ebf8c6de4a1d4fe4e9fe3->enter($__internal_b379aa9082cd109c8f9bc1f28dd3920aa95174b1841ebf8c6de4a1d4fe4e9fe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_9589c47d5e5eda84e0e9084ccf8f93f5635110b6b9f6333ebb0878087d2d6e60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9589c47d5e5eda84e0e9084ccf8f93f5635110b6b9f6333ebb0878087d2d6e60->enter($__internal_9589c47d5e5eda84e0e9084ccf8f93f5635110b6b9f6333ebb0878087d2d6e60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_b379aa9082cd109c8f9bc1f28dd3920aa95174b1841ebf8c6de4a1d4fe4e9fe3->leave($__internal_b379aa9082cd109c8f9bc1f28dd3920aa95174b1841ebf8c6de4a1d4fe4e9fe3_prof);

        
        $__internal_9589c47d5e5eda84e0e9084ccf8f93f5635110b6b9f6333ebb0878087d2d6e60->leave($__internal_9589c47d5e5eda84e0e9084ccf8f93f5635110b6b9f6333ebb0878087d2d6e60_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/datetime_widget.html.php");
    }
}

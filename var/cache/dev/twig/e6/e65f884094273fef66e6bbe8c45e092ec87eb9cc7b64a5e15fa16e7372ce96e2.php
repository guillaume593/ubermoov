<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_da0471859f0c6395a6352b10513457fe0327a2dba5140c7967809b01b33a18a8 extends Twig_Template
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
        $__internal_cd24303310f8b25652f25e955f00c5f29e380f405d22f5df34f7f056a1803e35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd24303310f8b25652f25e955f00c5f29e380f405d22f5df34f7f056a1803e35->enter($__internal_cd24303310f8b25652f25e955f00c5f29e380f405d22f5df34f7f056a1803e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_cd24303310f8b25652f25e955f00c5f29e380f405d22f5df34f7f056a1803e35->leave($__internal_cd24303310f8b25652f25e955f00c5f29e380f405d22f5df34f7f056a1803e35_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_end.html.php");
    }
}

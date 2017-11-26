<?php

/* form_table_layout.html.twig */
class __TwigTemplate_50b352fcf5ce8ab2c5b03f552ed4734272708bc0a383e47608daa04af30f43c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "form_table_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_row' => array($this, 'block_form_row'),
                'button_row' => array($this, 'block_button_row'),
                'hidden_row' => array($this, 'block_hidden_row'),
                'form_widget_compound' => array($this, 'block_form_widget_compound'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f24e7660fafb3f991088b70ecba50a4979a5a12df1784864a3cf9d088194f4a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f24e7660fafb3f991088b70ecba50a4979a5a12df1784864a3cf9d088194f4a5->enter($__internal_f24e7660fafb3f991088b70ecba50a4979a5a12df1784864a3cf9d088194f4a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_4d9439ae44ed252ef7c78e5dd36932d886bb695077eb711e04036f18e8de233f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d9439ae44ed252ef7c78e5dd36932d886bb695077eb711e04036f18e8de233f->enter($__internal_4d9439ae44ed252ef7c78e5dd36932d886bb695077eb711e04036f18e8de233f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_f24e7660fafb3f991088b70ecba50a4979a5a12df1784864a3cf9d088194f4a5->leave($__internal_f24e7660fafb3f991088b70ecba50a4979a5a12df1784864a3cf9d088194f4a5_prof);

        
        $__internal_4d9439ae44ed252ef7c78e5dd36932d886bb695077eb711e04036f18e8de233f->leave($__internal_4d9439ae44ed252ef7c78e5dd36932d886bb695077eb711e04036f18e8de233f_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_06ecb96db658b38c208261cef5e59529b999fdef155655c1eff90d9e14ca0786 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ecb96db658b38c208261cef5e59529b999fdef155655c1eff90d9e14ca0786->enter($__internal_06ecb96db658b38c208261cef5e59529b999fdef155655c1eff90d9e14ca0786_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_1d62b23063d4a331bd7b1b19cf274b70a30cb3ac6123557268b5228f54779897 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d62b23063d4a331bd7b1b19cf274b70a30cb3ac6123557268b5228f54779897->enter($__internal_1d62b23063d4a331bd7b1b19cf274b70a30cb3ac6123557268b5228f54779897_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 9, $this->getSourceContext()); })()), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 10, $this->getSourceContext()); })()), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_1d62b23063d4a331bd7b1b19cf274b70a30cb3ac6123557268b5228f54779897->leave($__internal_1d62b23063d4a331bd7b1b19cf274b70a30cb3ac6123557268b5228f54779897_prof);

        
        $__internal_06ecb96db658b38c208261cef5e59529b999fdef155655c1eff90d9e14ca0786->leave($__internal_06ecb96db658b38c208261cef5e59529b999fdef155655c1eff90d9e14ca0786_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_4f4507e1f55c038ef2c5a5ecfbe90a850c2be0bb23e992d53e63583a6e72cb43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f4507e1f55c038ef2c5a5ecfbe90a850c2be0bb23e992d53e63583a6e72cb43->enter($__internal_4f4507e1f55c038ef2c5a5ecfbe90a850c2be0bb23e992d53e63583a6e72cb43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_ec701a78f5014e10659a8721c8c42624272927a72838509e57ff4456bd00390c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec701a78f5014e10659a8721c8c42624272927a72838509e57ff4456bd00390c->enter($__internal_ec701a78f5014e10659a8721c8c42624272927a72838509e57ff4456bd00390c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 19, $this->getSourceContext()); })()), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_ec701a78f5014e10659a8721c8c42624272927a72838509e57ff4456bd00390c->leave($__internal_ec701a78f5014e10659a8721c8c42624272927a72838509e57ff4456bd00390c_prof);

        
        $__internal_4f4507e1f55c038ef2c5a5ecfbe90a850c2be0bb23e992d53e63583a6e72cb43->leave($__internal_4f4507e1f55c038ef2c5a5ecfbe90a850c2be0bb23e992d53e63583a6e72cb43_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_832282b4479f59d3fc3d2cda0fc838ff9be23bd457f3878f9b0b1d201168bfd6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_832282b4479f59d3fc3d2cda0fc838ff9be23bd457f3878f9b0b1d201168bfd6->enter($__internal_832282b4479f59d3fc3d2cda0fc838ff9be23bd457f3878f9b0b1d201168bfd6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_823d3e0bdc184f23b1748cd8ef2a99ac9f5963d44517433f7fa243e34199863a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_823d3e0bdc184f23b1748cd8ef2a99ac9f5963d44517433f7fa243e34199863a->enter($__internal_823d3e0bdc184f23b1748cd8ef2a99ac9f5963d44517433f7fa243e34199863a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 27, $this->getSourceContext()); })()), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_823d3e0bdc184f23b1748cd8ef2a99ac9f5963d44517433f7fa243e34199863a->leave($__internal_823d3e0bdc184f23b1748cd8ef2a99ac9f5963d44517433f7fa243e34199863a_prof);

        
        $__internal_832282b4479f59d3fc3d2cda0fc838ff9be23bd457f3878f9b0b1d201168bfd6->leave($__internal_832282b4479f59d3fc3d2cda0fc838ff9be23bd457f3878f9b0b1d201168bfd6_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_3d2bda71eab7989bd03962bd572ab50dcb3f9b72500d24768ee6f61aa581bcc8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d2bda71eab7989bd03962bd572ab50dcb3f9b72500d24768ee6f61aa581bcc8->enter($__internal_3d2bda71eab7989bd03962bd572ab50dcb3f9b72500d24768ee6f61aa581bcc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_594157f55ea553e1af07a879c30d92c6680d1f595db16c420179d60be8b8fbb8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_594157f55ea553e1af07a879c30d92c6680d1f595db16c420179d60be8b8fbb8->enter($__internal_594157f55ea553e1af07a879c30d92c6680d1f595db16c420179d60be8b8fbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((twig_test_empty(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 34, $this->getSourceContext()); })()), "parent", array())) && (twig_length_filter($this->env, (isset($context["errors"]) || array_key_exists("errors", $context) ? $context["errors"] : (function () { throw new Twig_Error_Runtime('Variable "errors" does not exist.', 34, $this->getSourceContext()); })())) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 37, $this->getSourceContext()); })()), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 42, $this->getSourceContext()); })()), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_594157f55ea553e1af07a879c30d92c6680d1f595db16c420179d60be8b8fbb8->leave($__internal_594157f55ea553e1af07a879c30d92c6680d1f595db16c420179d60be8b8fbb8_prof);

        
        $__internal_3d2bda71eab7989bd03962bd572ab50dcb3f9b72500d24768ee6f61aa581bcc8->leave($__internal_3d2bda71eab7989bd03962bd572ab50dcb3f9b72500d24768ee6f61aa581bcc8_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{%- block form_row -%}
    <tr>
        <td>
            {{- form_label(form) -}}
        </td>
        <td>
            {{- form_errors(form) -}}
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock form_row -%}

{%- block button_row -%}
    <tr>
        <td></td>
        <td>
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock button_row -%}

{%- block hidden_row -%}
    <tr style=\"display: none\">
        <td colspan=\"2\">
            {{- form_widget(form) -}}
        </td>
    </tr>
{%- endblock hidden_row -%}

{%- block form_widget_compound -%}
    <table {{ block('widget_container_attributes') }}>
        {%- if form.parent is empty and errors|length > 0 -%}
        <tr>
            <td colspan=\"2\">
                {{- form_errors(form) -}}
            </td>
        </tr>
        {%- endif -%}
        {{- block('form_rows') -}}
        {{- form_rest(form) -}}
    </table>
{%- endblock form_widget_compound -%}
", "form_table_layout.html.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/form_table_layout.html.twig");
    }
}

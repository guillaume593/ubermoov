<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_dc24e08ad0680f18372983b3bf9fc0cc09dfa8f0570fbe342783234d6dfc1c60 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
                'radio_row' => array($this, 'block_radio_row'),
                'checkbox_radio_row' => array($this, 'block_checkbox_radio_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cfc80bc782af06bd425f28ee48f534a1dacb3c74c3debfe938a051d6569eb3c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cfc80bc782af06bd425f28ee48f534a1dacb3c74c3debfe938a051d6569eb3c7->enter($__internal_cfc80bc782af06bd425f28ee48f534a1dacb3c74c3debfe938a051d6569eb3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_d9e5cc686ea417f980c8079ec690162a80cb0832ae252984cdb33acf055ea2ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9e5cc686ea417f980c8079ec690162a80cb0832ae252984cdb33acf055ea2ff->enter($__internal_d9e5cc686ea417f980c8079ec690162a80cb0832ae252984cdb33acf055ea2ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 24
        echo "
";
        // line 26
        echo "
";
        // line 27
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('checkbox_row', $context, $blocks);
        // line 40
        echo "
";
        // line 41
        $this->displayBlock('radio_row', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('checkbox_radio_row', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('submit_row', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('reset_row', $context, $blocks);
        // line 78
        echo "
";
        // line 79
        $this->displayBlock('form_group_class', $context, $blocks);
        
        $__internal_cfc80bc782af06bd425f28ee48f534a1dacb3c74c3debfe938a051d6569eb3c7->leave($__internal_cfc80bc782af06bd425f28ee48f534a1dacb3c74c3debfe938a051d6569eb3c7_prof);

        
        $__internal_d9e5cc686ea417f980c8079ec690162a80cb0832ae252984cdb33acf055ea2ff->leave($__internal_d9e5cc686ea417f980c8079ec690162a80cb0832ae252984cdb33acf055ea2ff_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_23c861122dd0ddf1561c3fc585b996b9e88b7a0739349fcb6181bb127c1e83b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23c861122dd0ddf1561c3fc585b996b9e88b7a0739349fcb6181bb127c1e83b7->enter($__internal_23c861122dd0ddf1561c3fc585b996b9e88b7a0739349fcb6181bb127c1e83b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_7881b834647988a1e5423ae276515260bfe9de7143250ec41af580d3886830af = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7881b834647988a1e5423ae276515260bfe9de7143250ec41af580d3886830af->enter($__internal_7881b834647988a1e5423ae276515260bfe9de7143250ec41af580d3886830af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge((isset($context["attr"]) || array_key_exists("attr", $context) ? $context["attr"] : (function () { throw new Twig_Error_Runtime('Variable "attr" does not exist.', 4, $this->getSourceContext()); })()), array("class" => twig_trim_filter((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_7881b834647988a1e5423ae276515260bfe9de7143250ec41af580d3886830af->leave($__internal_7881b834647988a1e5423ae276515260bfe9de7143250ec41af580d3886830af_prof);

        
        $__internal_23c861122dd0ddf1561c3fc585b996b9e88b7a0739349fcb6181bb127c1e83b7->leave($__internal_23c861122dd0ddf1561c3fc585b996b9e88b7a0739349fcb6181bb127c1e83b7_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_e9cc19fa44107e602b966130b34ae380545542092042d2f9e99fb83e88ec83b0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e9cc19fa44107e602b966130b34ae380545542092042d2f9e99fb83e88ec83b0->enter($__internal_e9cc19fa44107e602b966130b34ae380545542092042d2f9e99fb83e88ec83b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_83ba4c3c816d7355413405bbc3e54e2043e2d719df6d14f3fad263c3166db55f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83ba4c3c816d7355413405bbc3e54e2043e2d719df6d14f3fad263c3166db55f->enter($__internal_83ba4c3c816d7355413405bbc3e54e2043e2d719df6d14f3fad263c3166db55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        if (((isset($context["label"]) || array_key_exists("label", $context) ? $context["label"] : (function () { throw new Twig_Error_Runtime('Variable "label" does not exist.', 12, $this->getSourceContext()); })()) === false)) {
            // line 13
            echo "        <div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>
    ";
        } else {
            // line 15
            echo "        ";
            $context["label_attr"] = twig_array_merge((isset($context["label_attr"]) || array_key_exists("label_attr", $context) ? $context["label_attr"] : (function () { throw new Twig_Error_Runtime('Variable "label_attr" does not exist.', 15, $this->getSourceContext()); })()), array("class" => twig_trim_filter(((((twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter(twig_get_attribute($this->env, $this->getSourceContext(), ($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 16
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_83ba4c3c816d7355413405bbc3e54e2043e2d719df6d14f3fad263c3166db55f->leave($__internal_83ba4c3c816d7355413405bbc3e54e2043e2d719df6d14f3fad263c3166db55f_prof);

        
        $__internal_e9cc19fa44107e602b966130b34ae380545542092042d2f9e99fb83e88ec83b0->leave($__internal_e9cc19fa44107e602b966130b34ae380545542092042d2f9e99fb83e88ec83b0_prof);

    }

    // line 21
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_293636978d0d9a31721374f49a2ec50cb32aa962c7c0f767725aa5ff28dd1a73 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293636978d0d9a31721374f49a2ec50cb32aa962c7c0f767725aa5ff28dd1a73->enter($__internal_293636978d0d9a31721374f49a2ec50cb32aa962c7c0f767725aa5ff28dd1a73_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_7bf73a821a4f74618b38fb291d0c73f1dbca73d1f84acfef14301f290bd4cbaa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bf73a821a4f74618b38fb291d0c73f1dbca73d1f84acfef14301f290bd4cbaa->enter($__internal_7bf73a821a4f74618b38fb291d0c73f1dbca73d1f84acfef14301f290bd4cbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 22
        echo "col-sm-2";
        
        $__internal_7bf73a821a4f74618b38fb291d0c73f1dbca73d1f84acfef14301f290bd4cbaa->leave($__internal_7bf73a821a4f74618b38fb291d0c73f1dbca73d1f84acfef14301f290bd4cbaa_prof);

        
        $__internal_293636978d0d9a31721374f49a2ec50cb32aa962c7c0f767725aa5ff28dd1a73->leave($__internal_293636978d0d9a31721374f49a2ec50cb32aa962c7c0f767725aa5ff28dd1a73_prof);

    }

    // line 27
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b06d92a640ad3675aa3a88af2b6546cfbf4c0efd4bbe5700ac6dffab2a0edce7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06d92a640ad3675aa3a88af2b6546cfbf4c0efd4bbe5700ac6dffab2a0edce7->enter($__internal_b06d92a640ad3675aa3a88af2b6546cfbf4c0efd4bbe5700ac6dffab2a0edce7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3be85f7826b832269ad5871d9bbd59fa800aabf0f973efea8878c0d4166355a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3be85f7826b832269ad5871d9bbd59fa800aabf0f973efea8878c0d4166355a9->enter($__internal_3be85f7826b832269ad5871d9bbd59fa800aabf0f973efea8878c0d4166355a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 28
        echo "<div class=\"form-group";
        if ((( !(isset($context["compound"]) || array_key_exists("compound", $context) ? $context["compound"] : (function () { throw new Twig_Error_Runtime('Variable "compound" does not exist.', 28, $this->getSourceContext()); })()) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter((isset($context["force_error"]) || array_key_exists("force_error", $context) ? $context["force_error"] : (function () { throw new Twig_Error_Runtime('Variable "force_error" does not exist.', 28, $this->getSourceContext()); })()), false)) : (false))) &&  !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 28, $this->getSourceContext()); })()))) {
            echo " has-error";
        }
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 29, $this->getSourceContext()); })()), 'label');
        // line 30
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 31
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 31, $this->getSourceContext()); })()), 'widget');
        // line 32
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 32, $this->getSourceContext()); })()), 'errors');
        // line 33
        echo "</div>
";
        // line 34
        echo "</div>";
        
        $__internal_3be85f7826b832269ad5871d9bbd59fa800aabf0f973efea8878c0d4166355a9->leave($__internal_3be85f7826b832269ad5871d9bbd59fa800aabf0f973efea8878c0d4166355a9_prof);

        
        $__internal_b06d92a640ad3675aa3a88af2b6546cfbf4c0efd4bbe5700ac6dffab2a0edce7->leave($__internal_b06d92a640ad3675aa3a88af2b6546cfbf4c0efd4bbe5700ac6dffab2a0edce7_prof);

    }

    // line 37
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_b2dc026e09bab516e64a8d5a539c4cda9e7ee853fa2a76270505db883ce4dcda = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b2dc026e09bab516e64a8d5a539c4cda9e7ee853fa2a76270505db883ce4dcda->enter($__internal_b2dc026e09bab516e64a8d5a539c4cda9e7ee853fa2a76270505db883ce4dcda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_b13411eb2aac444a8869afaf3078269913c8996c95a576fd9dfa4c953bf95638 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b13411eb2aac444a8869afaf3078269913c8996c95a576fd9dfa4c953bf95638->enter($__internal_b13411eb2aac444a8869afaf3078269913c8996c95a576fd9dfa4c953bf95638_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 38
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_b13411eb2aac444a8869afaf3078269913c8996c95a576fd9dfa4c953bf95638->leave($__internal_b13411eb2aac444a8869afaf3078269913c8996c95a576fd9dfa4c953bf95638_prof);

        
        $__internal_b2dc026e09bab516e64a8d5a539c4cda9e7ee853fa2a76270505db883ce4dcda->leave($__internal_b2dc026e09bab516e64a8d5a539c4cda9e7ee853fa2a76270505db883ce4dcda_prof);

    }

    // line 41
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_6aaed886bcce61121eaae8a7fcdb605bb2f798ec5fbeb4cd6a435e622d74ed0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6aaed886bcce61121eaae8a7fcdb605bb2f798ec5fbeb4cd6a435e622d74ed0b->enter($__internal_6aaed886bcce61121eaae8a7fcdb605bb2f798ec5fbeb4cd6a435e622d74ed0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_f551124ce8d8513e0b72ad9bf0a5471be84d7f99de10aaae5fa9abe56b368e33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f551124ce8d8513e0b72ad9bf0a5471be84d7f99de10aaae5fa9abe56b368e33->enter($__internal_f551124ce8d8513e0b72ad9bf0a5471be84d7f99de10aaae5fa9abe56b368e33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 42
        $this->displayBlock("checkbox_radio_row", $context, $blocks);
        
        $__internal_f551124ce8d8513e0b72ad9bf0a5471be84d7f99de10aaae5fa9abe56b368e33->leave($__internal_f551124ce8d8513e0b72ad9bf0a5471be84d7f99de10aaae5fa9abe56b368e33_prof);

        
        $__internal_6aaed886bcce61121eaae8a7fcdb605bb2f798ec5fbeb4cd6a435e622d74ed0b->leave($__internal_6aaed886bcce61121eaae8a7fcdb605bb2f798ec5fbeb4cd6a435e622d74ed0b_prof);

    }

    // line 45
    public function block_checkbox_radio_row($context, array $blocks = array())
    {
        $__internal_54a64d98b5120cf9a358d319d5ec9cf299357f4b63357654609f0d9f73647a1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_54a64d98b5120cf9a358d319d5ec9cf299357f4b63357654609f0d9f73647a1b->enter($__internal_54a64d98b5120cf9a358d319d5ec9cf299357f4b63357654609f0d9f73647a1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        $__internal_c4ed0a97893e8344429207eaef3f48e04f1779b036aa19e496339881c3969c7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4ed0a97893e8344429207eaef3f48e04f1779b036aa19e496339881c3969c7e->enter($__internal_c4ed0a97893e8344429207eaef3f48e04f1779b036aa19e496339881c3969c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_row"));

        // line 46
        ob_start();
        // line 47
        echo "    <div class=\"form-group";
        if ( !(isset($context["valid"]) || array_key_exists("valid", $context) ? $context["valid"] : (function () { throw new Twig_Error_Runtime('Variable "valid" does not exist.', 47, $this->getSourceContext()); })())) {
            echo " has-error";
        }
        echo "\">
        <div class=\"";
        // line 48
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 49
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 50
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 50, $this->getSourceContext()); })()), 'widget');
        echo "
            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 51, $this->getSourceContext()); })()), 'errors');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_c4ed0a97893e8344429207eaef3f48e04f1779b036aa19e496339881c3969c7e->leave($__internal_c4ed0a97893e8344429207eaef3f48e04f1779b036aa19e496339881c3969c7e_prof);

        
        $__internal_54a64d98b5120cf9a358d319d5ec9cf299357f4b63357654609f0d9f73647a1b->leave($__internal_54a64d98b5120cf9a358d319d5ec9cf299357f4b63357654609f0d9f73647a1b_prof);

    }

    // line 57
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_5818a35b21cc15071c8521be4ae239a591109557e492797e54a62bd79bafa3da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5818a35b21cc15071c8521be4ae239a591109557e492797e54a62bd79bafa3da->enter($__internal_5818a35b21cc15071c8521be4ae239a591109557e492797e54a62bd79bafa3da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_033b38662e3f387c7eeface279276ab16bca76f10e6a1660fb418429117a4cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_033b38662e3f387c7eeface279276ab16bca76f10e6a1660fb418429117a4cef->enter($__internal_033b38662e3f387c7eeface279276ab16bca76f10e6a1660fb418429117a4cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 58
        ob_start();
        // line 59
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 60
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 61
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 62
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 62, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_033b38662e3f387c7eeface279276ab16bca76f10e6a1660fb418429117a4cef->leave($__internal_033b38662e3f387c7eeface279276ab16bca76f10e6a1660fb418429117a4cef_prof);

        
        $__internal_5818a35b21cc15071c8521be4ae239a591109557e492797e54a62bd79bafa3da->leave($__internal_5818a35b21cc15071c8521be4ae239a591109557e492797e54a62bd79bafa3da_prof);

    }

    // line 68
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_0ab1cffcde15f6d05e1211b652fffae6fbf3ac48092d083e46700ec4ae79e499 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0ab1cffcde15f6d05e1211b652fffae6fbf3ac48092d083e46700ec4ae79e499->enter($__internal_0ab1cffcde15f6d05e1211b652fffae6fbf3ac48092d083e46700ec4ae79e499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_f604fda90a1683c3bce9d256b72de9eb98990379702ddc75cf5ae0fc01ee40ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f604fda90a1683c3bce9d256b72de9eb98990379702ddc75cf5ae0fc01ee40ca->enter($__internal_f604fda90a1683c3bce9d256b72de9eb98990379702ddc75cf5ae0fc01ee40ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 69
        ob_start();
        // line 70
        echo "    <div class=\"form-group\">
        <div class=\"";
        // line 71
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>
        <div class=\"";
        // line 72
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">
            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 73, $this->getSourceContext()); })()), 'widget');
        echo "
        </div>
    </div>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_f604fda90a1683c3bce9d256b72de9eb98990379702ddc75cf5ae0fc01ee40ca->leave($__internal_f604fda90a1683c3bce9d256b72de9eb98990379702ddc75cf5ae0fc01ee40ca_prof);

        
        $__internal_0ab1cffcde15f6d05e1211b652fffae6fbf3ac48092d083e46700ec4ae79e499->leave($__internal_0ab1cffcde15f6d05e1211b652fffae6fbf3ac48092d083e46700ec4ae79e499_prof);

    }

    // line 79
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_d501c2e48713f398d34da700ef2dcb3a47be55b497a9070791a4b80bbb46acfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d501c2e48713f398d34da700ef2dcb3a47be55b497a9070791a4b80bbb46acfb->enter($__internal_d501c2e48713f398d34da700ef2dcb3a47be55b497a9070791a4b80bbb46acfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_d35e70e50579c01b9ee59185e08ed09b7444c7f3a63f3b3f82884a0ecac2f469 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d35e70e50579c01b9ee59185e08ed09b7444c7f3a63f3b3f82884a0ecac2f469->enter($__internal_d35e70e50579c01b9ee59185e08ed09b7444c7f3a63f3b3f82884a0ecac2f469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 80
        echo "col-sm-10";
        
        $__internal_d35e70e50579c01b9ee59185e08ed09b7444c7f3a63f3b3f82884a0ecac2f469->leave($__internal_d35e70e50579c01b9ee59185e08ed09b7444c7f3a63f3b3f82884a0ecac2f469_prof);

        
        $__internal_d501c2e48713f398d34da700ef2dcb3a47be55b497a9070791a4b80bbb46acfb->leave($__internal_d501c2e48713f398d34da700ef2dcb3a47be55b497a9070791a4b80bbb46acfb_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  390 => 80,  381 => 79,  366 => 73,  362 => 72,  358 => 71,  355 => 70,  353 => 69,  344 => 68,  329 => 62,  325 => 61,  321 => 60,  318 => 59,  316 => 58,  307 => 57,  292 => 51,  288 => 50,  284 => 49,  280 => 48,  273 => 47,  271 => 46,  262 => 45,  252 => 42,  243 => 41,  233 => 38,  224 => 37,  214 => 34,  211 => 33,  209 => 32,  207 => 31,  203 => 30,  201 => 29,  195 => 28,  186 => 27,  176 => 22,  167 => 21,  155 => 16,  152 => 15,  146 => 13,  143 => 12,  141 => 11,  132 => 10,  122 => 5,  120 => 4,  111 => 3,  101 => 79,  98 => 78,  96 => 68,  93 => 67,  91 => 57,  88 => 56,  86 => 45,  83 => 44,  81 => 41,  78 => 40,  76 => 37,  73 => 36,  71 => 27,  68 => 26,  65 => 24,  63 => 21,  60 => 20,  58 => 10,  55 => 9,  52 => 7,  50 => 3,  47 => 2,  14 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
{% spaceless %}
    {% if label is same as(false) %}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {% else %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) %}
        {{- parent() -}}
    {% endif %}
{% endspaceless %}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block checkbox_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock checkbox_row %}

{% block radio_row -%}
    {{- block('checkbox_radio_row') -}}
{%- endblock radio_row %}

{% block checkbox_radio_row -%}
{% spaceless %}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{% endspaceless %}
{%- endblock checkbox_radio_row %}

{% block submit_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock submit_row %}

{% block reset_row -%}
{% spaceless %}
    <div class=\"form-group\">
        <div class=\"{{ block('form_label_class') }}\"></div>
        <div class=\"{{ block('form_group_class') }}\">
            {{ form_widget(form) }}
        </div>
    </div>
{% endspaceless %}
{% endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}
", "bootstrap_3_horizontal_layout.html.twig", "/Applications/MAMP/htdocs/my_project_name/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form/bootstrap_3_horizontal_layout.html.twig");
    }
}

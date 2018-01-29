<?php

/* bootstrap_4_horizontal_layout.html.twig */
class __TwigTemplate_80b25cf560b284edbfb78d950c3542324b8b064e45f6f9ba2d24fc16f0bf1358 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_4_layout.html.twig", "bootstrap_4_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_4_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'fieldset_form_row' => array($this, 'block_fieldset_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8bfd437796c902e3246932e48cf25b6d36bc0e3c71441e613dc34ea83dc1b560 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8bfd437796c902e3246932e48cf25b6d36bc0e3c71441e613dc34ea83dc1b560->enter($__internal_8bfd437796c902e3246932e48cf25b6d36bc0e3c71441e613dc34ea83dc1b560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        $__internal_585632714ab922a6124f5e0a5bf4d4c0508f0970ff3f106503487cf1a3a82dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_585632714ab922a6124f5e0a5bf4d4c0508f0970ff3f106503487cf1a3a82dc3->enter($__internal_585632714ab922a6124f5e0a5bf4d4c0508f0970ff3f106503487cf1a3a82dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('form_label', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
";
        // line 23
        $this->displayBlock('form_row', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('fieldset_form_row', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('submit_row', $context, $blocks);
        // line 57
        echo "
";
        // line 58
        $this->displayBlock('reset_row', $context, $blocks);
        // line 66
        echo "
";
        // line 67
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_8bfd437796c902e3246932e48cf25b6d36bc0e3c71441e613dc34ea83dc1b560->leave($__internal_8bfd437796c902e3246932e48cf25b6d36bc0e3c71441e613dc34ea83dc1b560_prof);

        
        $__internal_585632714ab922a6124f5e0a5bf4d4c0508f0970ff3f106503487cf1a3a82dc3->leave($__internal_585632714ab922a6124f5e0a5bf4d4c0508f0970ff3f106503487cf1a3a82dc3_prof);

    }

    // line 5
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_50e309b5a0b4afe49a5cc41c7aa4f898fa4f1b0bdb2ae351ab12b09a80a48387 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_50e309b5a0b4afe49a5cc41c7aa4f898fa4f1b0bdb2ae351ab12b09a80a48387->enter($__internal_50e309b5a0b4afe49a5cc41c7aa4f898fa4f1b0bdb2ae351ab12b09a80a48387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_0d28b0a37dd5a57c3952f694a17291d105cc2a8a887e10197490fe6c1a63dfbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0d28b0a37dd5a57c3952f694a17291d105cc2a8a887e10197490fe6c1a63dfbe->enter($__internal_0d28b0a37dd5a57c3952f694a17291d105cc2a8a887e10197490fe6c1a63dfbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 6
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 7
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 9
            if (( !array_key_exists("expanded", $context) ||  !($context["expanded"] ?? $this->getContext($context, "expanded")))) {
                // line 10
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-label"))));
            }
            // line 12
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 13
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_0d28b0a37dd5a57c3952f694a17291d105cc2a8a887e10197490fe6c1a63dfbe->leave($__internal_0d28b0a37dd5a57c3952f694a17291d105cc2a8a887e10197490fe6c1a63dfbe_prof);

        
        $__internal_50e309b5a0b4afe49a5cc41c7aa4f898fa4f1b0bdb2ae351ab12b09a80a48387->leave($__internal_50e309b5a0b4afe49a5cc41c7aa4f898fa4f1b0bdb2ae351ab12b09a80a48387_prof);

    }

    // line 17
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_eca7779c04361deedb90ca5ea49e02abcd6d134ca4f2d6e675acfb74cd54c97c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eca7779c04361deedb90ca5ea49e02abcd6d134ca4f2d6e675acfb74cd54c97c->enter($__internal_eca7779c04361deedb90ca5ea49e02abcd6d134ca4f2d6e675acfb74cd54c97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_3db34ff5831cc0398fcfe4b5d81d2c1756b28b6de5e24142058e7bc534e0edb7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3db34ff5831cc0398fcfe4b5d81d2c1756b28b6de5e24142058e7bc534e0edb7->enter($__internal_3db34ff5831cc0398fcfe4b5d81d2c1756b28b6de5e24142058e7bc534e0edb7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 18
        echo "col-sm-2";
        
        $__internal_3db34ff5831cc0398fcfe4b5d81d2c1756b28b6de5e24142058e7bc534e0edb7->leave($__internal_3db34ff5831cc0398fcfe4b5d81d2c1756b28b6de5e24142058e7bc534e0edb7_prof);

        
        $__internal_eca7779c04361deedb90ca5ea49e02abcd6d134ca4f2d6e675acfb74cd54c97c->leave($__internal_eca7779c04361deedb90ca5ea49e02abcd6d134ca4f2d6e675acfb74cd54c97c_prof);

    }

    // line 23
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_b248b529de8f11a0da9f844f9eddb463e08db6e4cd26a69737222757a9e3142c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b248b529de8f11a0da9f844f9eddb463e08db6e4cd26a69737222757a9e3142c->enter($__internal_b248b529de8f11a0da9f844f9eddb463e08db6e4cd26a69737222757a9e3142c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_50a96edf4797ef4696854f60e07f22f7430592f5c10aec6bae20c6e0af74d15d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_50a96edf4797ef4696854f60e07f22f7430592f5c10aec6bae20c6e0af74d15d->enter($__internal_50a96edf4797ef4696854f60e07f22f7430592f5c10aec6bae20c6e0af74d15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 24
        if ((array_key_exists("expanded", $context) && ($context["expanded"] ?? $this->getContext($context, "expanded")))) {
            // line 25
            $this->displayBlock("fieldset_form_row", $context, $blocks);
        } else {
            // line 27
            echo "<div class=\"form-group row";
            if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
                echo " is-invalid";
            }
            echo "\">";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
            // line 29
            echo "<div class=\"";
            $this->displayBlock("form_group_class", $context, $blocks);
            echo "\">";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
            // line 31
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 32
            echo "</div>
    ";
            // line 33
            echo "</div>";
        }
        
        $__internal_50a96edf4797ef4696854f60e07f22f7430592f5c10aec6bae20c6e0af74d15d->leave($__internal_50a96edf4797ef4696854f60e07f22f7430592f5c10aec6bae20c6e0af74d15d_prof);

        
        $__internal_b248b529de8f11a0da9f844f9eddb463e08db6e4cd26a69737222757a9e3142c->leave($__internal_b248b529de8f11a0da9f844f9eddb463e08db6e4cd26a69737222757a9e3142c_prof);

    }

    // line 37
    public function block_fieldset_form_row($context, array $blocks = array())
    {
        $__internal_c0205421d7d51678d92cf1d0fc387f36e8ef239250dd10b6e4da93971d252b81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c0205421d7d51678d92cf1d0fc387f36e8ef239250dd10b6e4da93971d252b81->enter($__internal_c0205421d7d51678d92cf1d0fc387f36e8ef239250dd10b6e4da93971d252b81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        $__internal_36e1479bedfb8e79f1961363514232236afcb392068771c75abd88a399231d8f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e1479bedfb8e79f1961363514232236afcb392068771c75abd88a399231d8f->enter($__internal_36e1479bedfb8e79f1961363514232236afcb392068771c75abd88a399231d8f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fieldset_form_row"));

        // line 38
        echo "<fieldset class=\"form-group\">
        <div class=\"row";
        // line 39
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " is-invalid";
        }
        echo "\">";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 41
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 44
        echo "</div>
        </div>
";
        // line 46
        echo "</fieldset>";
        
        $__internal_36e1479bedfb8e79f1961363514232236afcb392068771c75abd88a399231d8f->leave($__internal_36e1479bedfb8e79f1961363514232236afcb392068771c75abd88a399231d8f_prof);

        
        $__internal_c0205421d7d51678d92cf1d0fc387f36e8ef239250dd10b6e4da93971d252b81->leave($__internal_c0205421d7d51678d92cf1d0fc387f36e8ef239250dd10b6e4da93971d252b81_prof);

    }

    // line 49
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_1fd37f095ff3c2ffd481c1318a18e81d59f857a9bdb6275bf41491e80e8a35cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1fd37f095ff3c2ffd481c1318a18e81d59f857a9bdb6275bf41491e80e8a35cb->enter($__internal_1fd37f095ff3c2ffd481c1318a18e81d59f857a9bdb6275bf41491e80e8a35cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_8aad19fa28102d73d22f98d86042d8b331b453d51263c9e6b4cfaf6916e34259 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8aad19fa28102d73d22f98d86042d8b331b453d51263c9e6b4cfaf6916e34259->enter($__internal_8aad19fa28102d73d22f98d86042d8b331b453d51263c9e6b4cfaf6916e34259_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 50
        echo "<div class=\"form-group row\">";
        // line 51
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 52
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 54
        echo "</div>";
        // line 55
        echo "</div>";
        
        $__internal_8aad19fa28102d73d22f98d86042d8b331b453d51263c9e6b4cfaf6916e34259->leave($__internal_8aad19fa28102d73d22f98d86042d8b331b453d51263c9e6b4cfaf6916e34259_prof);

        
        $__internal_1fd37f095ff3c2ffd481c1318a18e81d59f857a9bdb6275bf41491e80e8a35cb->leave($__internal_1fd37f095ff3c2ffd481c1318a18e81d59f857a9bdb6275bf41491e80e8a35cb_prof);

    }

    // line 58
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_ce3ee938a9745bbad2008a617f051a6ffc74eec71d2d8b4ad1fa9be75f8ead9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce3ee938a9745bbad2008a617f051a6ffc74eec71d2d8b4ad1fa9be75f8ead9b->enter($__internal_ce3ee938a9745bbad2008a617f051a6ffc74eec71d2d8b4ad1fa9be75f8ead9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_24333b6522539624c550cd5f3b733ed5a66050fa3327132ee7f2ca99a701eff4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_24333b6522539624c550cd5f3b733ed5a66050fa3327132ee7f2ca99a701eff4->enter($__internal_24333b6522539624c550cd5f3b733ed5a66050fa3327132ee7f2ca99a701eff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 59
        echo "<div class=\"form-group row\">";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 61
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_24333b6522539624c550cd5f3b733ed5a66050fa3327132ee7f2ca99a701eff4->leave($__internal_24333b6522539624c550cd5f3b733ed5a66050fa3327132ee7f2ca99a701eff4_prof);

        
        $__internal_ce3ee938a9745bbad2008a617f051a6ffc74eec71d2d8b4ad1fa9be75f8ead9b->leave($__internal_ce3ee938a9745bbad2008a617f051a6ffc74eec71d2d8b4ad1fa9be75f8ead9b_prof);

    }

    // line 67
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_e1f67bcea1b6ec6495f176f3c63f29a7416ba2b4d6ef31c95af9016bb242b022 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1f67bcea1b6ec6495f176f3c63f29a7416ba2b4d6ef31c95af9016bb242b022->enter($__internal_e1f67bcea1b6ec6495f176f3c63f29a7416ba2b4d6ef31c95af9016bb242b022_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_d48b8b1896259ea77801be82d2a09657780861a44af7bc4d00b8b1836d7b157a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d48b8b1896259ea77801be82d2a09657780861a44af7bc4d00b8b1836d7b157a->enter($__internal_d48b8b1896259ea77801be82d2a09657780861a44af7bc4d00b8b1836d7b157a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 68
        echo "col-sm-10";
        
        $__internal_d48b8b1896259ea77801be82d2a09657780861a44af7bc4d00b8b1836d7b157a->leave($__internal_d48b8b1896259ea77801be82d2a09657780861a44af7bc4d00b8b1836d7b157a_prof);

        
        $__internal_e1f67bcea1b6ec6495f176f3c63f29a7416ba2b4d6ef31c95af9016bb242b022->leave($__internal_e1f67bcea1b6ec6495f176f3c63f29a7416ba2b4d6ef31c95af9016bb242b022_prof);

    }

    // line 71
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_44873553b9c231c6f99d744e1e3dccce2f95e28662a79c342df0f0c68fbcfde2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44873553b9c231c6f99d744e1e3dccce2f95e28662a79c342df0f0c68fbcfde2->enter($__internal_44873553b9c231c6f99d744e1e3dccce2f95e28662a79c342df0f0c68fbcfde2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_27ea2ffe327d27748af50eee9b6d74a6fa3e52ffe4df35d3ee348cb3b2aa37cd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27ea2ffe327d27748af50eee9b6d74a6fa3e52ffe4df35d3ee348cb3b2aa37cd->enter($__internal_27ea2ffe327d27748af50eee9b6d74a6fa3e52ffe4df35d3ee348cb3b2aa37cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 72
        echo "<div class=\"form-group row\">";
        // line 73
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 74
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 77
        echo "</div>";
        // line 78
        echo "</div>";
        
        $__internal_27ea2ffe327d27748af50eee9b6d74a6fa3e52ffe4df35d3ee348cb3b2aa37cd->leave($__internal_27ea2ffe327d27748af50eee9b6d74a6fa3e52ffe4df35d3ee348cb3b2aa37cd_prof);

        
        $__internal_44873553b9c231c6f99d744e1e3dccce2f95e28662a79c342df0f0c68fbcfde2->leave($__internal_44873553b9c231c6f99d744e1e3dccce2f95e28662a79c342df0f0c68fbcfde2_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  347 => 78,  345 => 77,  343 => 76,  341 => 75,  337 => 74,  333 => 73,  331 => 72,  322 => 71,  312 => 68,  303 => 67,  293 => 64,  291 => 63,  289 => 62,  285 => 61,  281 => 60,  279 => 59,  270 => 58,  260 => 55,  258 => 54,  256 => 53,  252 => 52,  248 => 51,  246 => 50,  237 => 49,  227 => 46,  223 => 44,  221 => 43,  219 => 42,  215 => 41,  213 => 40,  208 => 39,  205 => 38,  196 => 37,  185 => 33,  182 => 32,  180 => 31,  178 => 30,  174 => 29,  172 => 28,  166 => 27,  163 => 25,  161 => 24,  152 => 23,  142 => 18,  133 => 17,  122 => 13,  120 => 12,  117 => 10,  115 => 9,  110 => 7,  108 => 6,  99 => 5,  89 => 71,  86 => 70,  84 => 67,  81 => 66,  79 => 58,  76 => 57,  74 => 49,  71 => 48,  69 => 37,  66 => 36,  64 => 23,  61 => 22,  58 => 20,  56 => 17,  53 => 16,  51 => 5,  48 => 4,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_4_layout.html.twig\" %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- if expanded is not defined or not expanded -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-label')|trim}) -%}
        {%- endif -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    {%- if expanded is defined and expanded -%}
        {{ block('fieldset_form_row') }}
    {%- else -%}
        <div class=\"form-group row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
    {##}</div>
    {%- endif -%}
{%- endblock form_row %}

{% block fieldset_form_row -%}
    <fieldset class=\"form-group\">
        <div class=\"row{% if (not compound or force_error|default(false)) and not valid %} is-invalid{% endif %}\">
            {{- form_label(form) -}}
            <div class=\"{{ block('form_group_class') }}\">
                {{- form_widget(form) -}}
                {{- form_errors(form) -}}
            </div>
        </div>
{##}</fieldset>
{%- endblock fieldset_form_row %}

{% block submit_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group row\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}
", "bootstrap_4_horizontal_layout.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_4_horizontal_layout.html.twig");
    }
}

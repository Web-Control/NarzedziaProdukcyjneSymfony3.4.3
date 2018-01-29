<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_2a82d64eab75704a3827f78b7499c8f7f22bbdb4b225e24e54727c440f306d4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_80510b1766106c133f52c5dfb73613ecdca4ebbd79cfd53cd45f9906fce6c30c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80510b1766106c133f52c5dfb73613ecdca4ebbd79cfd53cd45f9906fce6c30c->enter($__internal_80510b1766106c133f52c5dfb73613ecdca4ebbd79cfd53cd45f9906fce6c30c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_d21697c3ddbbc1bf0ff29fc095661fd086a3ab066d8d848a4534c8263aea3dce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d21697c3ddbbc1bf0ff29fc095661fd086a3ab066d8d848a4534c8263aea3dce->enter($__internal_d21697c3ddbbc1bf0ff29fc095661fd086a3ab066d8d848a4534c8263aea3dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 120
        echo "
";
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('form_label', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 158
        echo "
";
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('form_row', $context, $blocks);
        // line 171
        echo "
";
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_80510b1766106c133f52c5dfb73613ecdca4ebbd79cfd53cd45f9906fce6c30c->leave($__internal_80510b1766106c133f52c5dfb73613ecdca4ebbd79cfd53cd45f9906fce6c30c_prof);

        
        $__internal_d21697c3ddbbc1bf0ff29fc095661fd086a3ab066d8d848a4534c8263aea3dce->leave($__internal_d21697c3ddbbc1bf0ff29fc095661fd086a3ab066d8d848a4534c8263aea3dce_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_07615735ca55fbdfd6ca125d07afaca980a7a1e4b5b5c70bcc1c8cd3c949365c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_07615735ca55fbdfd6ca125d07afaca980a7a1e4b5b5c70bcc1c8cd3c949365c->enter($__internal_07615735ca55fbdfd6ca125d07afaca980a7a1e4b5b5c70bcc1c8cd3c949365c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_1b2fe43f5258036c1c4f2d5c6b396e83f7dc9cbc18a280341d9e59cbc9aba542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b2fe43f5258036c1c4f2d5c6b396e83f7dc9cbc18a280341d9e59cbc9aba542->enter($__internal_1b2fe43f5258036c1c4f2d5c6b396e83f7dc9cbc18a280341d9e59cbc9aba542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_1b2fe43f5258036c1c4f2d5c6b396e83f7dc9cbc18a280341d9e59cbc9aba542->leave($__internal_1b2fe43f5258036c1c4f2d5c6b396e83f7dc9cbc18a280341d9e59cbc9aba542_prof);

        
        $__internal_07615735ca55fbdfd6ca125d07afaca980a7a1e4b5b5c70bcc1c8cd3c949365c->leave($__internal_07615735ca55fbdfd6ca125d07afaca980a7a1e4b5b5c70bcc1c8cd3c949365c_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_bb6a67658f26ddb66374c04a021437f48a85dc37c5a191b321d00210ef9530fa = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb6a67658f26ddb66374c04a021437f48a85dc37c5a191b321d00210ef9530fa->enter($__internal_bb6a67658f26ddb66374c04a021437f48a85dc37c5a191b321d00210ef9530fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_da43087f5454f260a3c3d74e160097695c46de98bbc098e1c7f34e10874d4f7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da43087f5454f260a3c3d74e160097695c46de98bbc098e1c7f34e10874d4f7c->enter($__internal_da43087f5454f260a3c3d74e160097695c46de98bbc098e1c7f34e10874d4f7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_da43087f5454f260a3c3d74e160097695c46de98bbc098e1c7f34e10874d4f7c->leave($__internal_da43087f5454f260a3c3d74e160097695c46de98bbc098e1c7f34e10874d4f7c_prof);

        
        $__internal_bb6a67658f26ddb66374c04a021437f48a85dc37c5a191b321d00210ef9530fa->leave($__internal_bb6a67658f26ddb66374c04a021437f48a85dc37c5a191b321d00210ef9530fa_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_70bd2aa91b763135059229fba2d7136b77eaf215563652a209d242783a534aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_70bd2aa91b763135059229fba2d7136b77eaf215563652a209d242783a534aad->enter($__internal_70bd2aa91b763135059229fba2d7136b77eaf215563652a209d242783a534aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_f9473bf0c514500827ff7bb38428ecceddb21657e433fb5427985e89a540e9c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f9473bf0c514500827ff7bb38428ecceddb21657e433fb5427985e89a540e9c8->enter($__internal_f9473bf0c514500827ff7bb38428ecceddb21657e433fb5427985e89a540e9c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_f9473bf0c514500827ff7bb38428ecceddb21657e433fb5427985e89a540e9c8->leave($__internal_f9473bf0c514500827ff7bb38428ecceddb21657e433fb5427985e89a540e9c8_prof);

        
        $__internal_70bd2aa91b763135059229fba2d7136b77eaf215563652a209d242783a534aad->leave($__internal_70bd2aa91b763135059229fba2d7136b77eaf215563652a209d242783a534aad_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d98d5a743a8915a4142b41cc25c770ff85ece08182ee7e05fec18662d49c0e2e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d98d5a743a8915a4142b41cc25c770ff85ece08182ee7e05fec18662d49c0e2e->enter($__internal_d98d5a743a8915a4142b41cc25c770ff85ece08182ee7e05fec18662d49c0e2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_0e2c3adf7d4d104a1347d55ef291fb2d358431465979e1091d3682b5c848beba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0e2c3adf7d4d104a1347d55ef291fb2d358431465979e1091d3682b5c848beba->enter($__internal_0e2c3adf7d4d104a1347d55ef291fb2d358431465979e1091d3682b5c848beba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_0e2c3adf7d4d104a1347d55ef291fb2d358431465979e1091d3682b5c848beba->leave($__internal_0e2c3adf7d4d104a1347d55ef291fb2d358431465979e1091d3682b5c848beba_prof);

        
        $__internal_d98d5a743a8915a4142b41cc25c770ff85ece08182ee7e05fec18662d49c0e2e->leave($__internal_d98d5a743a8915a4142b41cc25c770ff85ece08182ee7e05fec18662d49c0e2e_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_5e009b89fb89137a3eb00b5a4be9d84143c866fb5a9ba1cb386452a0b605c191 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5e009b89fb89137a3eb00b5a4be9d84143c866fb5a9ba1cb386452a0b605c191->enter($__internal_5e009b89fb89137a3eb00b5a4be9d84143c866fb5a9ba1cb386452a0b605c191_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_b8df1b2ab48c0e7f7798bba9da307bf7258da14c72af4a3ccf3f01c2066363ea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8df1b2ab48c0e7f7798bba9da307bf7258da14c72af4a3ccf3f01c2066363ea->enter($__internal_b8df1b2ab48c0e7f7798bba9da307bf7258da14c72af4a3ccf3f01c2066363ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_b8df1b2ab48c0e7f7798bba9da307bf7258da14c72af4a3ccf3f01c2066363ea->leave($__internal_b8df1b2ab48c0e7f7798bba9da307bf7258da14c72af4a3ccf3f01c2066363ea_prof);

        
        $__internal_5e009b89fb89137a3eb00b5a4be9d84143c866fb5a9ba1cb386452a0b605c191->leave($__internal_5e009b89fb89137a3eb00b5a4be9d84143c866fb5a9ba1cb386452a0b605c191_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_0a515b283095c16cc5bd0624601a9ecb6c33d81b261ccc9877bbf93b064b946f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a515b283095c16cc5bd0624601a9ecb6c33d81b261ccc9877bbf93b064b946f->enter($__internal_0a515b283095c16cc5bd0624601a9ecb6c33d81b261ccc9877bbf93b064b946f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_cbf96ee3c7f53d40435967a9157e979b567f45b5ee2b8823a4ea6a19224b60fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cbf96ee3c7f53d40435967a9157e979b567f45b5ee2b8823a4ea6a19224b60fa->enter($__internal_cbf96ee3c7f53d40435967a9157e979b567f45b5ee2b8823a4ea6a19224b60fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_cbf96ee3c7f53d40435967a9157e979b567f45b5ee2b8823a4ea6a19224b60fa->leave($__internal_cbf96ee3c7f53d40435967a9157e979b567f45b5ee2b8823a4ea6a19224b60fa_prof);

        
        $__internal_0a515b283095c16cc5bd0624601a9ecb6c33d81b261ccc9877bbf93b064b946f->leave($__internal_0a515b283095c16cc5bd0624601a9ecb6c33d81b261ccc9877bbf93b064b946f_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_bc135ba36702a933c393966bb089214082396d97da4dd1d7d8bcb0c9a9c53ad5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc135ba36702a933c393966bb089214082396d97da4dd1d7d8bcb0c9a9c53ad5->enter($__internal_bc135ba36702a933c393966bb089214082396d97da4dd1d7d8bcb0c9a9c53ad5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_c9752431edd8d5e14074dfeef01abe4f31258e5495db1b8997454ac9613146ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c9752431edd8d5e14074dfeef01abe4f31258e5495db1b8997454ac9613146ef->enter($__internal_c9752431edd8d5e14074dfeef01abe4f31258e5495db1b8997454ac9613146ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_c9752431edd8d5e14074dfeef01abe4f31258e5495db1b8997454ac9613146ef->leave($__internal_c9752431edd8d5e14074dfeef01abe4f31258e5495db1b8997454ac9613146ef_prof);

        
        $__internal_bc135ba36702a933c393966bb089214082396d97da4dd1d7d8bcb0c9a9c53ad5->leave($__internal_bc135ba36702a933c393966bb089214082396d97da4dd1d7d8bcb0c9a9c53ad5_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_45ae211599bb2183a216a1708a2c6cacbea77ed805cdec6dd119e3f2d4e75e95 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ae211599bb2183a216a1708a2c6cacbea77ed805cdec6dd119e3f2d4e75e95->enter($__internal_45ae211599bb2183a216a1708a2c6cacbea77ed805cdec6dd119e3f2d4e75e95_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_d757457599a2cd2feacdc35c41970ecacef272b1ab6f2d167082aa890440c3bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d757457599a2cd2feacdc35c41970ecacef272b1ab6f2d167082aa890440c3bd->enter($__internal_d757457599a2cd2feacdc35c41970ecacef272b1ab6f2d167082aa890440c3bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_d757457599a2cd2feacdc35c41970ecacef272b1ab6f2d167082aa890440c3bd->leave($__internal_d757457599a2cd2feacdc35c41970ecacef272b1ab6f2d167082aa890440c3bd_prof);

        
        $__internal_45ae211599bb2183a216a1708a2c6cacbea77ed805cdec6dd119e3f2d4e75e95->leave($__internal_45ae211599bb2183a216a1708a2c6cacbea77ed805cdec6dd119e3f2d4e75e95_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_35f7fee63ee6ce4b8797a5034f0e0970e6814be7354a31ab5b9c75b88ee8a85a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_35f7fee63ee6ce4b8797a5034f0e0970e6814be7354a31ab5b9c75b88ee8a85a->enter($__internal_35f7fee63ee6ce4b8797a5034f0e0970e6814be7354a31ab5b9c75b88ee8a85a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_fbf069c9839f942f5e990f0317470e2dbd11861a8268635a6b9da9ac4dad2de0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbf069c9839f942f5e990f0317470e2dbd11861a8268635a6b9da9ac4dad2de0->enter($__internal_fbf069c9839f942f5e990f0317470e2dbd11861a8268635a6b9da9ac4dad2de0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_fbf069c9839f942f5e990f0317470e2dbd11861a8268635a6b9da9ac4dad2de0->leave($__internal_fbf069c9839f942f5e990f0317470e2dbd11861a8268635a6b9da9ac4dad2de0_prof);

        
        $__internal_35f7fee63ee6ce4b8797a5034f0e0970e6814be7354a31ab5b9c75b88ee8a85a->leave($__internal_35f7fee63ee6ce4b8797a5034f0e0970e6814be7354a31ab5b9c75b88ee8a85a_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_d5693acaba75b2a7ca266edcac5e03c01fbc3de1074141e7c4118b45d7af7fac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d5693acaba75b2a7ca266edcac5e03c01fbc3de1074141e7c4118b45d7af7fac->enter($__internal_d5693acaba75b2a7ca266edcac5e03c01fbc3de1074141e7c4118b45d7af7fac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_7b526c2872d04943ac9eb69577fcd957fb24f7637e339ba5249bdac3409cf9eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7b526c2872d04943ac9eb69577fcd957fb24f7637e339ba5249bdac3409cf9eb->enter($__internal_7b526c2872d04943ac9eb69577fcd957fb24f7637e339ba5249bdac3409cf9eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 78
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>";
        }
        
        $__internal_7b526c2872d04943ac9eb69577fcd957fb24f7637e339ba5249bdac3409cf9eb->leave($__internal_7b526c2872d04943ac9eb69577fcd957fb24f7637e339ba5249bdac3409cf9eb_prof);

        
        $__internal_d5693acaba75b2a7ca266edcac5e03c01fbc3de1074141e7c4118b45d7af7fac->leave($__internal_d5693acaba75b2a7ca266edcac5e03c01fbc3de1074141e7c4118b45d7af7fac_prof);

    }

    // line 84
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_b226cb94d2f280760cb28b393852acd6e5a1e16dd165f9f24d473b26b2eb8820 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b226cb94d2f280760cb28b393852acd6e5a1e16dd165f9f24d473b26b2eb8820->enter($__internal_b226cb94d2f280760cb28b393852acd6e5a1e16dd165f9f24d473b26b2eb8820_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_7c42f2dbc77d1ee0619a13839f7bba39e3a27d76813e0ede7171849476d77961 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c42f2dbc77d1ee0619a13839f7bba39e3a27d76813e0ede7171849476d77961->enter($__internal_7c42f2dbc77d1ee0619a13839f7bba39e3a27d76813e0ede7171849476d77961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 85
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 86
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 87
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 90
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 92
            echo "</div>";
        }
        
        $__internal_7c42f2dbc77d1ee0619a13839f7bba39e3a27d76813e0ede7171849476d77961->leave($__internal_7c42f2dbc77d1ee0619a13839f7bba39e3a27d76813e0ede7171849476d77961_prof);

        
        $__internal_b226cb94d2f280760cb28b393852acd6e5a1e16dd165f9f24d473b26b2eb8820->leave($__internal_b226cb94d2f280760cb28b393852acd6e5a1e16dd165f9f24d473b26b2eb8820_prof);

    }

    // line 96
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_f23869b07506a2c47b85f713c52cb7bad68661b1ea206b5fb0986a2d57df2451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f23869b07506a2c47b85f713c52cb7bad68661b1ea206b5fb0986a2d57df2451->enter($__internal_f23869b07506a2c47b85f713c52cb7bad68661b1ea206b5fb0986a2d57df2451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_22d9d9ec5a2ebdba54d4980c6b04246d79e4aa19bf2534820f5ff35047d218b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22d9d9ec5a2ebdba54d4980c6b04246d79e4aa19bf2534820f5ff35047d218b6->enter($__internal_22d9d9ec5a2ebdba54d4980c6b04246d79e4aa19bf2534820f5ff35047d218b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 97
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 100
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 102
($context["valid"] ?? $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 106
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                // line 107
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 109
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 111
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 112
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 113
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "</div>";
        }
        
        $__internal_22d9d9ec5a2ebdba54d4980c6b04246d79e4aa19bf2534820f5ff35047d218b6->leave($__internal_22d9d9ec5a2ebdba54d4980c6b04246d79e4aa19bf2534820f5ff35047d218b6_prof);

        
        $__internal_f23869b07506a2c47b85f713c52cb7bad68661b1ea206b5fb0986a2d57df2451->leave($__internal_f23869b07506a2c47b85f713c52cb7bad68661b1ea206b5fb0986a2d57df2451_prof);

    }

    // line 123
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d17be9864ff913b8d91d2a18d3f3c44cda7093edfcde52015288ebab548fc7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d17be9864ff913b8d91d2a18d3f3c44cda7093edfcde52015288ebab548fc7d1->enter($__internal_d17be9864ff913b8d91d2a18d3f3c44cda7093edfcde52015288ebab548fc7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_27b0b03525294a042a036c29416fc79069df68df6b54b6a26e49faf01ae077d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27b0b03525294a042a036c29416fc79069df68df6b54b6a26e49faf01ae077d4->enter($__internal_27b0b03525294a042a036c29416fc79069df68df6b54b6a26e49faf01ae077d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 124
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 125
            $context["element"] = "legend";
            // line 126
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 128
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 130
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_27b0b03525294a042a036c29416fc79069df68df6b54b6a26e49faf01ae077d4->leave($__internal_27b0b03525294a042a036c29416fc79069df68df6b54b6a26e49faf01ae077d4_prof);

        
        $__internal_d17be9864ff913b8d91d2a18d3f3c44cda7093edfcde52015288ebab548fc7d1->leave($__internal_d17be9864ff913b8d91d2a18d3f3c44cda7093edfcde52015288ebab548fc7d1_prof);

    }

    // line 133
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_2c334623324c2c39e7f819e36e7cd99c803cc452eff8bc47d27811026870b059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c334623324c2c39e7f819e36e7cd99c803cc452eff8bc47d27811026870b059->enter($__internal_2c334623324c2c39e7f819e36e7cd99c803cc452eff8bc47d27811026870b059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_4a08fe1573c9d5edbbee9d2d62c107d44e3268f082a1789dd465cc4e737e4ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4a08fe1573c9d5edbbee9d2d62c107d44e3268f082a1789dd465cc4e737e4ddf->enter($__internal_4a08fe1573c9d5edbbee9d2d62c107d44e3268f082a1789dd465cc4e737e4ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 135
        if (array_key_exists("widget", $context)) {
            // line 136
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 137
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 138
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 140
            if (array_key_exists("parent_label_class", $context)) {
                // line 141
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 143
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 144
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 145
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 146
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 147
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 150
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 153
            echo "<label";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
            foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
                echo " ";
                echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
                echo "=\"";
                echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
                echo "\"";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo ">";
            // line 154
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 155
            echo "</label>";
        }
        
        $__internal_4a08fe1573c9d5edbbee9d2d62c107d44e3268f082a1789dd465cc4e737e4ddf->leave($__internal_4a08fe1573c9d5edbbee9d2d62c107d44e3268f082a1789dd465cc4e737e4ddf_prof);

        
        $__internal_2c334623324c2c39e7f819e36e7cd99c803cc452eff8bc47d27811026870b059->leave($__internal_2c334623324c2c39e7f819e36e7cd99c803cc452eff8bc47d27811026870b059_prof);

    }

    // line 161
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_9d54167633fe08d601a7e1d48bb80e564d86745356ac120ecafaf0fafb535952 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9d54167633fe08d601a7e1d48bb80e564d86745356ac120ecafaf0fafb535952->enter($__internal_9d54167633fe08d601a7e1d48bb80e564d86745356ac120ecafaf0fafb535952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_622858d8cb547284f09118adcd4b5788073f59cc5ffd4c0beda711918028f418 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_622858d8cb547284f09118adcd4b5788073f59cc5ffd4c0beda711918028f418->enter($__internal_622858d8cb547284f09118adcd4b5788073f59cc5ffd4c0beda711918028f418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 162
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 163
            $context["element"] = "fieldset";
        }
        // line 165
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 169
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_622858d8cb547284f09118adcd4b5788073f59cc5ffd4c0beda711918028f418->leave($__internal_622858d8cb547284f09118adcd4b5788073f59cc5ffd4c0beda711918028f418_prof);

        
        $__internal_9d54167633fe08d601a7e1d48bb80e564d86745356ac120ecafaf0fafb535952->leave($__internal_9d54167633fe08d601a7e1d48bb80e564d86745356ac120ecafaf0fafb535952_prof);

    }

    // line 174
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_7e154f6be31446cccb3ab457ffb4b12ed570ef5cdb62d5a2744813d1985fce2c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e154f6be31446cccb3ab457ffb4b12ed570ef5cdb62d5a2744813d1985fce2c->enter($__internal_7e154f6be31446cccb3ab457ffb4b12ed570ef5cdb62d5a2744813d1985fce2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_9c266cc1067b955b752650a89e44a6ba2dc6191db97235e3ca2c1e1366c2a363 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c266cc1067b955b752650a89e44a6ba2dc6191db97235e3ca2c1e1366c2a363->enter($__internal_9c266cc1067b955b752650a89e44a6ba2dc6191db97235e3ca2c1e1366c2a363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 175
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 176
            echo "<div class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 179
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "</ul>
    </div>";
        }
        
        $__internal_9c266cc1067b955b752650a89e44a6ba2dc6191db97235e3ca2c1e1366c2a363->leave($__internal_9c266cc1067b955b752650a89e44a6ba2dc6191db97235e3ca2c1e1366c2a363_prof);

        
        $__internal_7e154f6be31446cccb3ab457ffb4b12ed570ef5cdb62d5a2744813d1985fce2c->leave($__internal_7e154f6be31446cccb3ab457ffb4b12ed570ef5cdb62d5a2744813d1985fce2c_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  672 => 181,  664 => 179,  660 => 178,  651 => 176,  649 => 175,  640 => 174,  628 => 169,  626 => 168,  624 => 167,  622 => 166,  618 => 165,  615 => 163,  613 => 162,  604 => 161,  593 => 155,  589 => 154,  574 => 153,  570 => 150,  567 => 147,  566 => 146,  565 => 145,  563 => 144,  561 => 143,  558 => 141,  556 => 140,  553 => 138,  551 => 137,  549 => 136,  547 => 135,  538 => 133,  528 => 130,  525 => 128,  522 => 126,  520 => 125,  518 => 124,  509 => 123,  498 => 117,  492 => 113,  491 => 112,  490 => 111,  486 => 110,  482 => 109,  479 => 107,  477 => 106,  470 => 102,  469 => 101,  468 => 100,  467 => 99,  463 => 98,  461 => 97,  452 => 96,  441 => 92,  439 => 91,  435 => 90,  432 => 88,  430 => 87,  428 => 86,  426 => 85,  417 => 84,  406 => 80,  404 => 79,  400 => 78,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 174,  134 => 173,  131 => 171,  129 => 161,  126 => 160,  123 => 158,  121 => 133,  118 => 132,  116 => 123,  113 => 122,  110 => 120,  108 => 96,  105 => 95,  103 => 84,  100 => 83,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form is not rootform %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_4_layout.html.twig");
    }
}

<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_cbc4c6d242a000431842a2df4ddee6153e03bdd45655f36c210ed33545d1ce13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff1758f23c4e4eaea9e02f768e019ee5befbd385a9937892cd7cae40918eeacc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ff1758f23c4e4eaea9e02f768e019ee5befbd385a9937892cd7cae40918eeacc->enter($__internal_ff1758f23c4e4eaea9e02f768e019ee5befbd385a9937892cd7cae40918eeacc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_69bb934b5b99e77917e3e65fea0412e041a75167edd11572699fb98ff095a986 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69bb934b5b99e77917e3e65fea0412e041a75167edd11572699fb98ff095a986->enter($__internal_69bb934b5b99e77917e3e65fea0412e041a75167edd11572699fb98ff095a986_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('date_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('time_widget', $context, $blocks);
        // line 83
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 121
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 145
        echo "
";
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('choice_label', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('radio_label', $context, $blocks);
        // line 161
        echo "
";
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('button_row', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('choice_row', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('date_row', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('time_row', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('datetime_row', $context, $blocks);
        
        $__internal_ff1758f23c4e4eaea9e02f768e019ee5befbd385a9937892cd7cae40918eeacc->leave($__internal_ff1758f23c4e4eaea9e02f768e019ee5befbd385a9937892cd7cae40918eeacc_prof);

        
        $__internal_69bb934b5b99e77917e3e65fea0412e041a75167edd11572699fb98ff095a986->leave($__internal_69bb934b5b99e77917e3e65fea0412e041a75167edd11572699fb98ff095a986_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_b83815cf747dc39ad443926fb0628ef6ceb9fbed94f5b5c0b5edcff8e35f256d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b83815cf747dc39ad443926fb0628ef6ceb9fbed94f5b5c0b5edcff8e35f256d->enter($__internal_b83815cf747dc39ad443926fb0628ef6ceb9fbed94f5b5c0b5edcff8e35f256d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_ce0ef4af3acad27c52f1f85838452ad511455372561e011301871612f62bd876 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce0ef4af3acad27c52f1f85838452ad511455372561e011301871612f62bd876->enter($__internal_ce0ef4af3acad27c52f1f85838452ad511455372561e011301871612f62bd876_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_ce0ef4af3acad27c52f1f85838452ad511455372561e011301871612f62bd876->leave($__internal_ce0ef4af3acad27c52f1f85838452ad511455372561e011301871612f62bd876_prof);

        
        $__internal_b83815cf747dc39ad443926fb0628ef6ceb9fbed94f5b5c0b5edcff8e35f256d->leave($__internal_b83815cf747dc39ad443926fb0628ef6ceb9fbed94f5b5c0b5edcff8e35f256d_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_e4ca3d6620e43ffbcc8afbd4b0156020f683777401d0c52ab07485ee257647a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e4ca3d6620e43ffbcc8afbd4b0156020f683777401d0c52ab07485ee257647a5->enter($__internal_e4ca3d6620e43ffbcc8afbd4b0156020f683777401d0c52ab07485ee257647a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_ba647310a4370954b8bd538836ddb352cdd534c1d73d243d352bcd165498f391 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ba647310a4370954b8bd538836ddb352cdd534c1d73d243d352bcd165498f391->enter($__internal_ba647310a4370954b8bd538836ddb352cdd534c1d73d243d352bcd165498f391_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        $context["prepend"] =  !(is_string($__internal_c0873888aeaa2597d495bfb67726a94c98667d8297f0ac44bdd1a6ddd72f9a0d = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_6bcf1318a9f9349c42c8041152b1201a856f7d82446c6ddf07c0e97b565ca430 = "{{") && ('' === $__internal_6bcf1318a9f9349c42c8041152b1201a856f7d82446c6ddf07c0e97b565ca430 || 0 === strpos($__internal_c0873888aeaa2597d495bfb67726a94c98667d8297f0ac44bdd1a6ddd72f9a0d, $__internal_6bcf1318a9f9349c42c8041152b1201a856f7d82446c6ddf07c0e97b565ca430)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_4558d47ad0719c5dfa43a9d3dca5636a97dce22494564f81e95b85ab0e9d1185 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_1c34b7af718495cb6968acec3de57551ab43cb60f731424d8f35af695222ea0b = "}}") && ('' === $__internal_1c34b7af718495cb6968acec3de57551ab43cb60f731424d8f35af695222ea0b || $__internal_1c34b7af718495cb6968acec3de57551ab43cb60f731424d8f35af695222ea0b === substr($__internal_4558d47ad0719c5dfa43a9d3dca5636a97dce22494564f81e95b85ab0e9d1185, -strlen($__internal_1c34b7af718495cb6968acec3de57551ab43cb60f731424d8f35af695222ea0b))));
        // line 13
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 14
            echo "        <div class=\"input-group";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter(($context["group_class"] ?? $this->getContext($context, "group_class")), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 15
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 16
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 19
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 20
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 22
            echo "        </div>
    ";
        } else {
            // line 24
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_ba647310a4370954b8bd538836ddb352cdd534c1d73d243d352bcd165498f391->leave($__internal_ba647310a4370954b8bd538836ddb352cdd534c1d73d243d352bcd165498f391_prof);

        
        $__internal_e4ca3d6620e43ffbcc8afbd4b0156020f683777401d0c52ab07485ee257647a5->leave($__internal_e4ca3d6620e43ffbcc8afbd4b0156020f683777401d0c52ab07485ee257647a5_prof);

    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_c72ac74b45ec4db1a00cbd5db781b94f4a3f4f09e30078008e7c66227dcbe1fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c72ac74b45ec4db1a00cbd5db781b94f4a3f4f09e30078008e7c66227dcbe1fd->enter($__internal_c72ac74b45ec4db1a00cbd5db781b94f4a3f4f09e30078008e7c66227dcbe1fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_32bdd92a8b17dd5cec4316fe82f21a0b5624fc4e603b50c4230a20b646461067 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32bdd92a8b17dd5cec4316fe82f21a0b5624fc4e603b50c4230a20b646461067->enter($__internal_32bdd92a8b17dd5cec4316fe82f21a0b5624fc4e603b50c4230a20b646461067_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_32bdd92a8b17dd5cec4316fe82f21a0b5624fc4e603b50c4230a20b646461067->leave($__internal_32bdd92a8b17dd5cec4316fe82f21a0b5624fc4e603b50c4230a20b646461067_prof);

        
        $__internal_c72ac74b45ec4db1a00cbd5db781b94f4a3f4f09e30078008e7c66227dcbe1fd->leave($__internal_c72ac74b45ec4db1a00cbd5db781b94f4a3f4f09e30078008e7c66227dcbe1fd_prof);

    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_7ec82b1e2a2c28d0630ea31c3d4235c063d56844e4aa67132ffa64fd122d9e4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ec82b1e2a2c28d0630ea31c3d4235c063d56844e4aa67132ffa64fd122d9e4f->enter($__internal_7ec82b1e2a2c28d0630ea31c3d4235c063d56844e4aa67132ffa64fd122d9e4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_3d2256e2c0e13151f797287bc5d9f26476a8fc100cd4e0fa1b69dd3678e902ad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d2256e2c0e13151f797287bc5d9f26476a8fc100cd4e0fa1b69dd3678e902ad->enter($__internal_3d2256e2c0e13151f797287bc5d9f26476a8fc100cd4e0fa1b69dd3678e902ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 36
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 37
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 40
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 45
            echo "</div>";
        }
        
        $__internal_3d2256e2c0e13151f797287bc5d9f26476a8fc100cd4e0fa1b69dd3678e902ad->leave($__internal_3d2256e2c0e13151f797287bc5d9f26476a8fc100cd4e0fa1b69dd3678e902ad_prof);

        
        $__internal_7ec82b1e2a2c28d0630ea31c3d4235c063d56844e4aa67132ffa64fd122d9e4f->leave($__internal_7ec82b1e2a2c28d0630ea31c3d4235c063d56844e4aa67132ffa64fd122d9e4f_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_4f5d80f06410dc32864d53423677fcd870e5a970403d04115b63f1a9fbc3d51b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f5d80f06410dc32864d53423677fcd870e5a970403d04115b63f1a9fbc3d51b->enter($__internal_4f5d80f06410dc32864d53423677fcd870e5a970403d04115b63f1a9fbc3d51b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_5ffe85c4a88f119e4c0af7f085a43043847c6037ada4c0e50e1a490d9952f17a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ffe85c4a88f119e4c0af7f085a43043847c6037ada4c0e50e1a490d9952f17a->enter($__internal_5ffe85c4a88f119e4c0af7f085a43043847c6037ada4c0e50e1a490d9952f17a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 50
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 51
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 53
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 54
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 55
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 57
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 58
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 59
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 60
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 62
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 63
                echo "</div>";
            }
        }
        
        $__internal_5ffe85c4a88f119e4c0af7f085a43043847c6037ada4c0e50e1a490d9952f17a->leave($__internal_5ffe85c4a88f119e4c0af7f085a43043847c6037ada4c0e50e1a490d9952f17a_prof);

        
        $__internal_4f5d80f06410dc32864d53423677fcd870e5a970403d04115b63f1a9fbc3d51b->leave($__internal_4f5d80f06410dc32864d53423677fcd870e5a970403d04115b63f1a9fbc3d51b_prof);

    }

    // line 68
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_1d2d96e4ec9265b3db04c9a24e00482071b0751b02022ad39214492a3c1ec866 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1d2d96e4ec9265b3db04c9a24e00482071b0751b02022ad39214492a3c1ec866->enter($__internal_1d2d96e4ec9265b3db04c9a24e00482071b0751b02022ad39214492a3c1ec866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_939263744c2236e72e30f16cf8f46836bc68a3f28e724aa8889d752539c186a1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_939263744c2236e72e30f16cf8f46836bc68a3f28e724aa8889d752539c186a1->enter($__internal_939263744c2236e72e30f16cf8f46836bc68a3f28e724aa8889d752539c186a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 69
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 70
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 72
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 73
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 74
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 77
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 78
                echo "</div>";
            }
        }
        
        $__internal_939263744c2236e72e30f16cf8f46836bc68a3f28e724aa8889d752539c186a1->leave($__internal_939263744c2236e72e30f16cf8f46836bc68a3f28e724aa8889d752539c186a1_prof);

        
        $__internal_1d2d96e4ec9265b3db04c9a24e00482071b0751b02022ad39214492a3c1ec866->leave($__internal_1d2d96e4ec9265b3db04c9a24e00482071b0751b02022ad39214492a3c1ec866_prof);

    }

    // line 83
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_9ebff456903210b24d098761ba365e7a3739e9bb18d3ae428d05535985b4c97b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ebff456903210b24d098761ba365e7a3739e9bb18d3ae428d05535985b4c97b->enter($__internal_9ebff456903210b24d098761ba365e7a3739e9bb18d3ae428d05535985b4c97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_c5fe39533794b71a0c16d8e8c03620b63a896432904b043005ad6d007595f4d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5fe39533794b71a0c16d8e8c03620b63a896432904b043005ad6d007595f4d0->enter($__internal_c5fe39533794b71a0c16d8e8c03620b63a896432904b043005ad6d007595f4d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 84
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 85
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 87
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 88
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 90
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 91
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 94
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 95
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 96
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 97
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 98
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 99
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 100
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 101
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 105
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 106
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 107
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 108
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 109
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 110
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 111
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 112
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 116
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 117
            echo "</div>";
        }
        
        $__internal_c5fe39533794b71a0c16d8e8c03620b63a896432904b043005ad6d007595f4d0->leave($__internal_c5fe39533794b71a0c16d8e8c03620b63a896432904b043005ad6d007595f4d0_prof);

        
        $__internal_9ebff456903210b24d098761ba365e7a3739e9bb18d3ae428d05535985b4c97b->leave($__internal_9ebff456903210b24d098761ba365e7a3739e9bb18d3ae428d05535985b4c97b_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_a11f1a2f3ed2624a51ea8aed3a84dfedacb2dfd7459120a33a8202d5daaf1a9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a11f1a2f3ed2624a51ea8aed3a84dfedacb2dfd7459120a33a8202d5daaf1a9a->enter($__internal_a11f1a2f3ed2624a51ea8aed3a84dfedacb2dfd7459120a33a8202d5daaf1a9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_51ff354706a339a0cd94c7d13ef04f19c66d0e2092ab0f19ee015a1d7c6319f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51ff354706a339a0cd94c7d13ef04f19c66d0e2092ab0f19ee015a1d7c6319f1->enter($__internal_51ff354706a339a0cd94c7d13ef04f19c66d0e2092ab0f19ee015a1d7c6319f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_51ff354706a339a0cd94c7d13ef04f19c66d0e2092ab0f19ee015a1d7c6319f1->leave($__internal_51ff354706a339a0cd94c7d13ef04f19c66d0e2092ab0f19ee015a1d7c6319f1_prof);

        
        $__internal_a11f1a2f3ed2624a51ea8aed3a84dfedacb2dfd7459120a33a8202d5daaf1a9a->leave($__internal_a11f1a2f3ed2624a51ea8aed3a84dfedacb2dfd7459120a33a8202d5daaf1a9a_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_20239aae0133c6cb529e04528d2e5878300096e023b13a87a853fab4df705591 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20239aae0133c6cb529e04528d2e5878300096e023b13a87a853fab4df705591->enter($__internal_20239aae0133c6cb529e04528d2e5878300096e023b13a87a853fab4df705591_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_5de7d81f149e293631b63e0146cf0145dfaff84a25ee6b19eb6a9376e4965bcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5de7d81f149e293631b63e0146cf0145dfaff84a25ee6b19eb6a9376e4965bcd->enter($__internal_5de7d81f149e293631b63e0146cf0145dfaff84a25ee6b19eb6a9376e4965bcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 127
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 129
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 130
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 131
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 135
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 137
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 138
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 139
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "</div>";
        }
        
        $__internal_5de7d81f149e293631b63e0146cf0145dfaff84a25ee6b19eb6a9376e4965bcd->leave($__internal_5de7d81f149e293631b63e0146cf0145dfaff84a25ee6b19eb6a9376e4965bcd_prof);

        
        $__internal_20239aae0133c6cb529e04528d2e5878300096e023b13a87a853fab4df705591->leave($__internal_20239aae0133c6cb529e04528d2e5878300096e023b13a87a853fab4df705591_prof);

    }

    // line 148
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_46ee50fba01812ca83a46a6e29e428ff4a19819a68f511dd069405083c0aea27 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_46ee50fba01812ca83a46a6e29e428ff4a19819a68f511dd069405083c0aea27->enter($__internal_46ee50fba01812ca83a46a6e29e428ff4a19819a68f511dd069405083c0aea27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_040c04ccddfef9a1d523073e9ea390677714e689bbad341e9fa4fe7e4a57f394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_040c04ccddfef9a1d523073e9ea390677714e689bbad341e9fa4fe7e4a57f394->enter($__internal_040c04ccddfef9a1d523073e9ea390677714e689bbad341e9fa4fe7e4a57f394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 150
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 151
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_040c04ccddfef9a1d523073e9ea390677714e689bbad341e9fa4fe7e4a57f394->leave($__internal_040c04ccddfef9a1d523073e9ea390677714e689bbad341e9fa4fe7e4a57f394_prof);

        
        $__internal_46ee50fba01812ca83a46a6e29e428ff4a19819a68f511dd069405083c0aea27->leave($__internal_46ee50fba01812ca83a46a6e29e428ff4a19819a68f511dd069405083c0aea27_prof);

    }

    // line 154
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_2d3ae228f3deb1faa0e3437c2f4e5912f3ec4257d6aaa0e10896d6cb8300deb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d3ae228f3deb1faa0e3437c2f4e5912f3ec4257d6aaa0e10896d6cb8300deb2->enter($__internal_2d3ae228f3deb1faa0e3437c2f4e5912f3ec4257d6aaa0e10896d6cb8300deb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_7bfad9ae43ec2ed67e77e73b102d788625a34a62b800ee746846ac11c3404f3e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7bfad9ae43ec2ed67e77e73b102d788625a34a62b800ee746846ac11c3404f3e->enter($__internal_7bfad9ae43ec2ed67e77e73b102d788625a34a62b800ee746846ac11c3404f3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_7bfad9ae43ec2ed67e77e73b102d788625a34a62b800ee746846ac11c3404f3e->leave($__internal_7bfad9ae43ec2ed67e77e73b102d788625a34a62b800ee746846ac11c3404f3e_prof);

        
        $__internal_2d3ae228f3deb1faa0e3437c2f4e5912f3ec4257d6aaa0e10896d6cb8300deb2->leave($__internal_2d3ae228f3deb1faa0e3437c2f4e5912f3ec4257d6aaa0e10896d6cb8300deb2_prof);

    }

    // line 158
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_dabfe380635c981fe2c113f12dd5f232f0ac11015339fc1f870b52fc356777d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dabfe380635c981fe2c113f12dd5f232f0ac11015339fc1f870b52fc356777d0->enter($__internal_dabfe380635c981fe2c113f12dd5f232f0ac11015339fc1f870b52fc356777d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_60237a29247b66f78951db9cbb6194e5cd160e3b57da1662c3040d9b470f2d67 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_60237a29247b66f78951db9cbb6194e5cd160e3b57da1662c3040d9b470f2d67->enter($__internal_60237a29247b66f78951db9cbb6194e5cd160e3b57da1662c3040d9b470f2d67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_60237a29247b66f78951db9cbb6194e5cd160e3b57da1662c3040d9b470f2d67->leave($__internal_60237a29247b66f78951db9cbb6194e5cd160e3b57da1662c3040d9b470f2d67_prof);

        
        $__internal_dabfe380635c981fe2c113f12dd5f232f0ac11015339fc1f870b52fc356777d0->leave($__internal_dabfe380635c981fe2c113f12dd5f232f0ac11015339fc1f870b52fc356777d0_prof);

    }

    // line 164
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_5fd712809de1e44663daf5550bca51e1d6afdb8dea8e89be0aaed7f2d40a5aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fd712809de1e44663daf5550bca51e1d6afdb8dea8e89be0aaed7f2d40a5aa9->enter($__internal_5fd712809de1e44663daf5550bca51e1d6afdb8dea8e89be0aaed7f2d40a5aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_0cebdcc0ae5b1035a48382f115fcfc1d8679952828e098642c40dc1a770566dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0cebdcc0ae5b1035a48382f115fcfc1d8679952828e098642c40dc1a770566dd->enter($__internal_0cebdcc0ae5b1035a48382f115fcfc1d8679952828e098642c40dc1a770566dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 165
        echo "<div class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 167
        echo "</div>";
        
        $__internal_0cebdcc0ae5b1035a48382f115fcfc1d8679952828e098642c40dc1a770566dd->leave($__internal_0cebdcc0ae5b1035a48382f115fcfc1d8679952828e098642c40dc1a770566dd_prof);

        
        $__internal_5fd712809de1e44663daf5550bca51e1d6afdb8dea8e89be0aaed7f2d40a5aa9->leave($__internal_5fd712809de1e44663daf5550bca51e1d6afdb8dea8e89be0aaed7f2d40a5aa9_prof);

    }

    // line 170
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_073ce114946b9213a1b8ab9cbcc4ba9987e12eef3174e5aca3e4dd92e72dd318 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_073ce114946b9213a1b8ab9cbcc4ba9987e12eef3174e5aca3e4dd92e72dd318->enter($__internal_073ce114946b9213a1b8ab9cbcc4ba9987e12eef3174e5aca3e4dd92e72dd318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_3fa012d4a868f37799e2e33d7fad4523fa6703f6233947bc2a7401d64c208902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa012d4a868f37799e2e33d7fad4523fa6703f6233947bc2a7401d64c208902->enter($__internal_3fa012d4a868f37799e2e33d7fad4523fa6703f6233947bc2a7401d64c208902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3fa012d4a868f37799e2e33d7fad4523fa6703f6233947bc2a7401d64c208902->leave($__internal_3fa012d4a868f37799e2e33d7fad4523fa6703f6233947bc2a7401d64c208902_prof);

        
        $__internal_073ce114946b9213a1b8ab9cbcc4ba9987e12eef3174e5aca3e4dd92e72dd318->leave($__internal_073ce114946b9213a1b8ab9cbcc4ba9987e12eef3174e5aca3e4dd92e72dd318_prof);

    }

    // line 175
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_371e08a01a95fd8025ee84e2a67f0588ff454a9c45ae3dc3105b884379b73748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_371e08a01a95fd8025ee84e2a67f0588ff454a9c45ae3dc3105b884379b73748->enter($__internal_371e08a01a95fd8025ee84e2a67f0588ff454a9c45ae3dc3105b884379b73748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_ac777983c50d0529a2efa2c8f5e4412656e82a70ea8485e4bf08bce6be093997 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac777983c50d0529a2efa2c8f5e4412656e82a70ea8485e4bf08bce6be093997->enter($__internal_ac777983c50d0529a2efa2c8f5e4412656e82a70ea8485e4bf08bce6be093997_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_ac777983c50d0529a2efa2c8f5e4412656e82a70ea8485e4bf08bce6be093997->leave($__internal_ac777983c50d0529a2efa2c8f5e4412656e82a70ea8485e4bf08bce6be093997_prof);

        
        $__internal_371e08a01a95fd8025ee84e2a67f0588ff454a9c45ae3dc3105b884379b73748->leave($__internal_371e08a01a95fd8025ee84e2a67f0588ff454a9c45ae3dc3105b884379b73748_prof);

    }

    // line 180
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_b9cf9807384c8087e17002b813b7a0fb919f464462ffb528e1a634082baf86c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b9cf9807384c8087e17002b813b7a0fb919f464462ffb528e1a634082baf86c2->enter($__internal_b9cf9807384c8087e17002b813b7a0fb919f464462ffb528e1a634082baf86c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_0b9bbf8bf69b668a8aabda888b2cf80c9633dea6f1a21681db4af87498418031 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b9bbf8bf69b668a8aabda888b2cf80c9633dea6f1a21681db4af87498418031->enter($__internal_0b9bbf8bf69b668a8aabda888b2cf80c9633dea6f1a21681db4af87498418031_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_0b9bbf8bf69b668a8aabda888b2cf80c9633dea6f1a21681db4af87498418031->leave($__internal_0b9bbf8bf69b668a8aabda888b2cf80c9633dea6f1a21681db4af87498418031_prof);

        
        $__internal_b9cf9807384c8087e17002b813b7a0fb919f464462ffb528e1a634082baf86c2->leave($__internal_b9cf9807384c8087e17002b813b7a0fb919f464462ffb528e1a634082baf86c2_prof);

    }

    // line 185
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_38077f5abc05a6a64c681d879311239aacb9f42d69a6ae927479c98974ba7e4b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38077f5abc05a6a64c681d879311239aacb9f42d69a6ae927479c98974ba7e4b->enter($__internal_38077f5abc05a6a64c681d879311239aacb9f42d69a6ae927479c98974ba7e4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_23502acf39d2a268a94b6656f61032535ddbda7aab20ff91f5f589b549b9bcd3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23502acf39d2a268a94b6656f61032535ddbda7aab20ff91f5f589b549b9bcd3->enter($__internal_23502acf39d2a268a94b6656f61032535ddbda7aab20ff91f5f589b549b9bcd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 186
        $context["force_error"] = true;
        // line 187
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_23502acf39d2a268a94b6656f61032535ddbda7aab20ff91f5f589b549b9bcd3->leave($__internal_23502acf39d2a268a94b6656f61032535ddbda7aab20ff91f5f589b549b9bcd3_prof);

        
        $__internal_38077f5abc05a6a64c681d879311239aacb9f42d69a6ae927479c98974ba7e4b->leave($__internal_38077f5abc05a6a64c681d879311239aacb9f42d69a6ae927479c98974ba7e4b_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  745 => 187,  743 => 186,  734 => 185,  724 => 182,  722 => 181,  713 => 180,  703 => 177,  701 => 176,  692 => 175,  682 => 172,  680 => 171,  671 => 170,  661 => 167,  659 => 166,  657 => 165,  648 => 164,  638 => 159,  629 => 158,  619 => 155,  610 => 154,  600 => 151,  598 => 150,  589 => 148,  578 => 142,  572 => 139,  571 => 138,  570 => 137,  566 => 136,  562 => 135,  555 => 131,  554 => 130,  553 => 129,  549 => 128,  547 => 127,  538 => 126,  528 => 123,  526 => 122,  517 => 121,  506 => 117,  502 => 116,  497 => 112,  491 => 111,  485 => 110,  479 => 109,  473 => 108,  467 => 107,  461 => 106,  455 => 105,  450 => 101,  444 => 100,  438 => 99,  432 => 98,  426 => 97,  420 => 96,  414 => 95,  408 => 94,  403 => 91,  400 => 90,  398 => 89,  394 => 88,  392 => 87,  389 => 85,  387 => 84,  378 => 83,  366 => 78,  364 => 77,  354 => 76,  349 => 74,  347 => 73,  345 => 72,  342 => 70,  340 => 69,  331 => 68,  319 => 63,  317 => 62,  315 => 60,  314 => 59,  313 => 58,  312 => 57,  307 => 55,  305 => 54,  303 => 53,  300 => 51,  298 => 50,  289 => 49,  278 => 45,  276 => 44,  274 => 43,  272 => 42,  270 => 41,  266 => 40,  264 => 39,  261 => 37,  259 => 36,  250 => 35,  239 => 31,  237 => 30,  235 => 29,  226 => 28,  215 => 24,  211 => 22,  205 => 20,  203 => 19,  201 => 18,  195 => 16,  193 => 15,  188 => 14,  185 => 13,  182 => 12,  180 => 11,  171 => 10,  161 => 7,  159 => 6,  150 => 5,  140 => 185,  137 => 184,  135 => 180,  132 => 179,  130 => 175,  127 => 174,  125 => 170,  122 => 169,  120 => 164,  117 => 163,  114 => 161,  112 => 158,  109 => 157,  107 => 154,  104 => 153,  102 => 148,  99 => 147,  96 => 145,  94 => 126,  91 => 125,  89 => 121,  87 => 83,  85 => 68,  82 => 67,  80 => 49,  77 => 48,  75 => 35,  72 => 34,  70 => 28,  67 => 27,  65 => 10,  62 => 9,  60 => 5,  57 => 4,  54 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group{{ group_class|default('') }}\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {%- if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {%- if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {{- parent() -}}
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {%- if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {%- endfor -%}
        </div>
    {%- endif -%}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{# Rows #}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock choice_row %}

{% block date_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock date_row %}

{% block time_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock time_row %}

{% block datetime_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock datetime_row %}
", "bootstrap_base_layout.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_base_layout.html.twig");
    }
}

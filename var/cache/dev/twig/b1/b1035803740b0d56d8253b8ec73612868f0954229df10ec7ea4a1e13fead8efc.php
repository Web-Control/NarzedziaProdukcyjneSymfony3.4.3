<?php

/* form_table_layout.html.twig */
class __TwigTemplate_40c922390da733fd34c5fb79fcf193d3a7f351a8b0a0a930fb5c106b58b30cda extends Twig_Template
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
        $__internal_8da453b245bc6598d753b00b0f3d11b5d31c0bb2423be9171ffb21b012d32611 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8da453b245bc6598d753b00b0f3d11b5d31c0bb2423be9171ffb21b012d32611->enter($__internal_8da453b245bc6598d753b00b0f3d11b5d31c0bb2423be9171ffb21b012d32611_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        $__internal_ee1a21e465e8af91d364fd2f577d8e7677664f22d9dd0aee3d04700913669407 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ee1a21e465e8af91d364fd2f577d8e7677664f22d9dd0aee3d04700913669407->enter($__internal_ee1a21e465e8af91d364fd2f577d8e7677664f22d9dd0aee3d04700913669407_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "form_table_layout.html.twig"));

        // line 3
        $this->displayBlock('form_row', $context, $blocks);
        // line 15
        $this->displayBlock('button_row', $context, $blocks);
        // line 24
        $this->displayBlock('hidden_row', $context, $blocks);
        // line 32
        $this->displayBlock('form_widget_compound', $context, $blocks);
        
        $__internal_8da453b245bc6598d753b00b0f3d11b5d31c0bb2423be9171ffb21b012d32611->leave($__internal_8da453b245bc6598d753b00b0f3d11b5d31c0bb2423be9171ffb21b012d32611_prof);

        
        $__internal_ee1a21e465e8af91d364fd2f577d8e7677664f22d9dd0aee3d04700913669407->leave($__internal_ee1a21e465e8af91d364fd2f577d8e7677664f22d9dd0aee3d04700913669407_prof);

    }

    // line 3
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_cdae352822a10d3f63c7769599c3408f55e720ef1b5051ce16de5c6311d6d69c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cdae352822a10d3f63c7769599c3408f55e720ef1b5051ce16de5c6311d6d69c->enter($__internal_cdae352822a10d3f63c7769599c3408f55e720ef1b5051ce16de5c6311d6d69c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d57c6688e90ef468d059cddba346a349f8145cf4ef07ef2a14e87a515087f68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d57c6688e90ef468d059cddba346a349f8145cf4ef07ef2a14e87a515087f68a->enter($__internal_d57c6688e90ef468d059cddba346a349f8145cf4ef07ef2a14e87a515087f68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 4
        echo "<tr>
        <td>";
        // line 6
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 7
        echo "</td>
        <td>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 11
        echo "</td>
    </tr>";
        
        $__internal_d57c6688e90ef468d059cddba346a349f8145cf4ef07ef2a14e87a515087f68a->leave($__internal_d57c6688e90ef468d059cddba346a349f8145cf4ef07ef2a14e87a515087f68a_prof);

        
        $__internal_cdae352822a10d3f63c7769599c3408f55e720ef1b5051ce16de5c6311d6d69c->leave($__internal_cdae352822a10d3f63c7769599c3408f55e720ef1b5051ce16de5c6311d6d69c_prof);

    }

    // line 15
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_bd1cd68c064a94ad129efdccaea192e3af1e4c40bfba998072bc24cfba034348 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd1cd68c064a94ad129efdccaea192e3af1e4c40bfba998072bc24cfba034348->enter($__internal_bd1cd68c064a94ad129efdccaea192e3af1e4c40bfba998072bc24cfba034348_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_23559f7a7b16459721922bc57ef7fecf795663238dbe73fdeea92b567294e68a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_23559f7a7b16459721922bc57ef7fecf795663238dbe73fdeea92b567294e68a->enter($__internal_23559f7a7b16459721922bc57ef7fecf795663238dbe73fdeea92b567294e68a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 16
        echo "<tr>
        <td></td>
        <td>";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 20
        echo "</td>
    </tr>";
        
        $__internal_23559f7a7b16459721922bc57ef7fecf795663238dbe73fdeea92b567294e68a->leave($__internal_23559f7a7b16459721922bc57ef7fecf795663238dbe73fdeea92b567294e68a_prof);

        
        $__internal_bd1cd68c064a94ad129efdccaea192e3af1e4c40bfba998072bc24cfba034348->leave($__internal_bd1cd68c064a94ad129efdccaea192e3af1e4c40bfba998072bc24cfba034348_prof);

    }

    // line 24
    public function block_hidden_row($context, array $blocks = array())
    {
        $__internal_3988cff63571de3efd6c8beb216bc8fd59fc7b9bd438e75bcba96b519a7834bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3988cff63571de3efd6c8beb216bc8fd59fc7b9bd438e75bcba96b519a7834bb->enter($__internal_3988cff63571de3efd6c8beb216bc8fd59fc7b9bd438e75bcba96b519a7834bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        $__internal_b331b8b851be05e8bed1a476f7e8fab4d6504f57eb982d13f66eb20325089813 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b331b8b851be05e8bed1a476f7e8fab4d6504f57eb982d13f66eb20325089813->enter($__internal_b331b8b851be05e8bed1a476f7e8fab4d6504f57eb982d13f66eb20325089813_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "hidden_row"));

        // line 25
        echo "<tr style=\"display: none\">
        <td colspan=\"2\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 28
        echo "</td>
    </tr>";
        
        $__internal_b331b8b851be05e8bed1a476f7e8fab4d6504f57eb982d13f66eb20325089813->leave($__internal_b331b8b851be05e8bed1a476f7e8fab4d6504f57eb982d13f66eb20325089813_prof);

        
        $__internal_3988cff63571de3efd6c8beb216bc8fd59fc7b9bd438e75bcba96b519a7834bb->leave($__internal_3988cff63571de3efd6c8beb216bc8fd59fc7b9bd438e75bcba96b519a7834bb_prof);

    }

    // line 32
    public function block_form_widget_compound($context, array $blocks = array())
    {
        $__internal_74bb5497788ddd16dfaf6546bae32ce7831d1eabfad373077fb8c9a46bd2a3a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_74bb5497788ddd16dfaf6546bae32ce7831d1eabfad373077fb8c9a46bd2a3a3->enter($__internal_74bb5497788ddd16dfaf6546bae32ce7831d1eabfad373077fb8c9a46bd2a3a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        $__internal_1751bfc5f726ac08508b3c041e4d3de132b3b3ee67a364a0c8f3d48948b7394b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1751bfc5f726ac08508b3c041e4d3de132b3b3ee67a364a0c8f3d48948b7394b->enter($__internal_1751bfc5f726ac08508b3c041e4d3de132b3b3ee67a364a0c8f3d48948b7394b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_compound"));

        // line 33
        echo "<table ";
        $this->displayBlock("widget_container_attributes", $context, $blocks);
        echo ">";
        // line 34
        if ((Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form"))) && (twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0))) {
            // line 35
            echo "<tr>
            <td colspan=\"2\">";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 38
            echo "</td>
        </tr>";
        }
        // line 41
        $this->displayBlock("form_rows", $context, $blocks);
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
        // line 43
        echo "</table>";
        
        $__internal_1751bfc5f726ac08508b3c041e4d3de132b3b3ee67a364a0c8f3d48948b7394b->leave($__internal_1751bfc5f726ac08508b3c041e4d3de132b3b3ee67a364a0c8f3d48948b7394b_prof);

        
        $__internal_74bb5497788ddd16dfaf6546bae32ce7831d1eabfad373077fb8c9a46bd2a3a3->leave($__internal_74bb5497788ddd16dfaf6546bae32ce7831d1eabfad373077fb8c9a46bd2a3a3_prof);

    }

    public function getTemplateName()
    {
        return "form_table_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 43,  166 => 42,  164 => 41,  160 => 38,  158 => 37,  155 => 35,  153 => 34,  149 => 33,  140 => 32,  129 => 28,  127 => 27,  124 => 25,  115 => 24,  104 => 20,  102 => 19,  98 => 16,  89 => 15,  78 => 11,  76 => 10,  74 => 9,  71 => 7,  69 => 6,  66 => 4,  57 => 3,  47 => 32,  45 => 24,  43 => 15,  41 => 3,  14 => 1,);
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
        {%- if form is rootform and errors|length > 0 -%}
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
", "form_table_layout.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\form_table_layout.html.twig");
    }
}

<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_4f0ad35677d1e5cbfc45094a81bbae495ca5b05e96e822464f68931d35231ec0 extends Twig_Template
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
        $__internal_ade6e99a362bbb59f8807dd9c95ced363bfe318316f83476698cc78df1f8f54a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ade6e99a362bbb59f8807dd9c95ced363bfe318316f83476698cc78df1f8f54a->enter($__internal_ade6e99a362bbb59f8807dd9c95ced363bfe318316f83476698cc78df1f8f54a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        $__internal_a470040b4e9f581463b3cb643834582dec04cb203b18bf729cd99cdd386184b5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a470040b4e9f581463b3cb643834582dec04cb203b18bf729cd99cdd386184b5->enter($__internal_a470040b4e9f581463b3cb643834582dec04cb203b18bf729cd99cdd386184b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_ade6e99a362bbb59f8807dd9c95ced363bfe318316f83476698cc78df1f8f54a->leave($__internal_ade6e99a362bbb59f8807dd9c95ced363bfe318316f83476698cc78df1f8f54a_prof);

        
        $__internal_a470040b4e9f581463b3cb643834582dec04cb203b18bf729cd99cdd386184b5->leave($__internal_a470040b4e9f581463b3cb643834582dec04cb203b18bf729cd99cdd386184b5_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
", "@Framework/Form/form_row.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_row.html.php");
    }
}

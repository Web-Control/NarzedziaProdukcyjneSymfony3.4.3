<?php

/* @Framework/Form/widget_container_attributes.html.php */
class __TwigTemplate_a6a8405f86b69c8a1dc44e0b590d73e8d089748347fda5733b42b530be50aa51 extends Twig_Template
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
        $__internal_71810b2c0e0bf0f7d55cb91dc142ca88b22937a26c9ee7964d6f991cc938eb80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_71810b2c0e0bf0f7d55cb91dc142ca88b22937a26c9ee7964d6f991cc938eb80->enter($__internal_71810b2c0e0bf0f7d55cb91dc142ca88b22937a26c9ee7964d6f991cc938eb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        $__internal_2c1b60f0e9728f08d1d6dbfd6e59d832064bbe255672c6b84e36ca704076b193 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c1b60f0e9728f08d1d6dbfd6e59d832064bbe255672c6b84e36ca704076b193->enter($__internal_2c1b60f0e9728f08d1d6dbfd6e59d832064bbe255672c6b84e36ca704076b193_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/widget_container_attributes.html.php"));

        // line 1
        echo "<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_71810b2c0e0bf0f7d55cb91dc142ca88b22937a26c9ee7964d6f991cc938eb80->leave($__internal_71810b2c0e0bf0f7d55cb91dc142ca88b22937a26c9ee7964d6f991cc938eb80_prof);

        
        $__internal_2c1b60f0e9728f08d1d6dbfd6e59d832064bbe255672c6b84e36ca704076b193->leave($__internal_2c1b60f0e9728f08d1d6dbfd6e59d832064bbe255672c6b84e36ca704076b193_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/widget_container_attributes.html.php";
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
        return new Twig_Source("<?php if (!empty(\$id)): ?>id=\"<?php echo \$view->escape(\$id) ?>\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/widget_container_attributes.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\widget_container_attributes.html.php");
    }
}

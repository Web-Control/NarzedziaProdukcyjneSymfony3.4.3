<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_b5834edb95961d1cf1dbffc82ab474d9c7e33d60330ccf53ebb13e9ea0f653f7 extends Twig_Template
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
        $__internal_b56cf8d37a399e4a0d74ed8f527beed086187cca0d6048e070a2339b582ce119 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b56cf8d37a399e4a0d74ed8f527beed086187cca0d6048e070a2339b582ce119->enter($__internal_b56cf8d37a399e4a0d74ed8f527beed086187cca0d6048e070a2339b582ce119_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        $__internal_5aa7143ee8433be66435ca734693ab207c5ae93c6799c581425264627952407f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5aa7143ee8433be66435ca734693ab207c5ae93c6799c581425264627952407f->enter($__internal_5aa7143ee8433be66435ca734693ab207c5ae93c6799c581425264627952407f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_b56cf8d37a399e4a0d74ed8f527beed086187cca0d6048e070a2339b582ce119->leave($__internal_b56cf8d37a399e4a0d74ed8f527beed086187cca0d6048e070a2339b582ce119_prof);

        
        $__internal_5aa7143ee8433be66435ca734693ab207c5ae93c6799c581425264627952407f->leave($__internal_5aa7143ee8433be66435ca734693ab207c5ae93c6799c581425264627952407f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
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
        return new Twig_Source("<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
", "@Framework/Form/form_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget.html.php");
    }
}

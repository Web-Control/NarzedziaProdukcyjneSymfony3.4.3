<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_3e74ffd0525fc3233db6002dbd32a6402605dad1b791f8bc0450f88f3fba53b7 extends Twig_Template
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
        $__internal_2bd56ff3848809927e5e01d235b394304afe6d9e56f3453c5d45ced5c1312482 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bd56ff3848809927e5e01d235b394304afe6d9e56f3453c5d45ced5c1312482->enter($__internal_2bd56ff3848809927e5e01d235b394304afe6d9e56f3453c5d45ced5c1312482_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        $__internal_d6cfbc1d29426bc94e3a73d9ddfc41027fbac28e002d468e4f5d67483e752296 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d6cfbc1d29426bc94e3a73d9ddfc41027fbac28e002d468e4f5d67483e752296->enter($__internal_d6cfbc1d29426bc94e3a73d9ddfc41027fbac28e002d468e4f5d67483e752296_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_2bd56ff3848809927e5e01d235b394304afe6d9e56f3453c5d45ced5c1312482->leave($__internal_2bd56ff3848809927e5e01d235b394304afe6d9e56f3453c5d45ced5c1312482_prof);

        
        $__internal_d6cfbc1d29426bc94e3a73d9ddfc41027fbac28e002d468e4f5d67483e752296->leave($__internal_d6cfbc1d29426bc94e3a73d9ddfc41027fbac28e002d468e4f5d67483e752296_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
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
        return new Twig_Source("<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
", "@Framework/Form/form_rest.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_rest.html.php");
    }
}

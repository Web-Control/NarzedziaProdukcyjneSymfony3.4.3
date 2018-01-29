<?php

/* @Framework/Form/choice_attributes.html.php */
class __TwigTemplate_4b015228be77339945d22d7c6f3c719d38972772ee6eb26443f9ad0549b54973 extends Twig_Template
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
        $__internal_64c738330a8b86dc23d08d272b3c3fa04a46669d800fdfb4a309f50560e4d029 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64c738330a8b86dc23d08d272b3c3fa04a46669d800fdfb4a309f50560e4d029->enter($__internal_64c738330a8b86dc23d08d272b3c3fa04a46669d800fdfb4a309f50560e4d029_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        $__internal_0f0d54f2ebea5ca1d237ba49502a81d1d61734a7af0f1bf4ee9d8b99211757c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f0d54f2ebea5ca1d237ba49502a81d1d61734a7af0f1bf4ee9d8b99211757c0->enter($__internal_0f0d54f2ebea5ca1d237ba49502a81d1d61734a7af0f1bf4ee9d8b99211757c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_attributes.html.php"));

        // line 1
        echo "<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
";
        
        $__internal_64c738330a8b86dc23d08d272b3c3fa04a46669d800fdfb4a309f50560e4d029->leave($__internal_64c738330a8b86dc23d08d272b3c3fa04a46669d800fdfb4a309f50560e4d029_prof);

        
        $__internal_0f0d54f2ebea5ca1d237ba49502a81d1d61734a7af0f1bf4ee9d8b99211757c0->leave($__internal_0f0d54f2ebea5ca1d237ba49502a81d1d61734a7af0f1bf4ee9d8b99211757c0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_attributes.html.php";
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
        return new Twig_Source("<?php if (\$disabled): ?>disabled=\"disabled\" <?php endif ?>
<?php foreach (\$choice_attr as \$k => \$v): ?>
<?php if (\$v === true): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$k)) ?>
<?php elseif (\$v !== false): ?>
<?php printf('%s=\"%s\" ', \$view->escape(\$k), \$view->escape(\$v)) ?>
<?php endif ?>
<?php endforeach ?>
", "@Framework/Form/choice_attributes.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_attributes.html.php");
    }
}

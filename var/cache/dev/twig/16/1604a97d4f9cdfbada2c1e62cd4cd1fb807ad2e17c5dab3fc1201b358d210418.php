<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_3096a43cef1ce004f01c5e29d7da068086df6a2e90f52d15664103c248ee1a7d extends Twig_Template
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
        $__internal_7fcb1ed034a62a27cb9fd73a1bd246c975078a823659737d9dc9fee2cb0e000c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fcb1ed034a62a27cb9fd73a1bd246c975078a823659737d9dc9fee2cb0e000c->enter($__internal_7fcb1ed034a62a27cb9fd73a1bd246c975078a823659737d9dc9fee2cb0e000c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        $__internal_9b51b8ba8423e6bc0d1669600fb7fde8138a154b587a5e65f83318cdbebab9ee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b51b8ba8423e6bc0d1669600fb7fde8138a154b587a5e65f83318cdbebab9ee->enter($__internal_9b51b8ba8423e6bc0d1669600fb7fde8138a154b587a5e65f83318cdbebab9ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_7fcb1ed034a62a27cb9fd73a1bd246c975078a823659737d9dc9fee2cb0e000c->leave($__internal_7fcb1ed034a62a27cb9fd73a1bd246c975078a823659737d9dc9fee2cb0e000c_prof);

        
        $__internal_9b51b8ba8423e6bc0d1669600fb7fde8138a154b587a5e65f83318cdbebab9ee->leave($__internal_9b51b8ba8423e6bc0d1669600fb7fde8138a154b587a5e65f83318cdbebab9ee_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
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
        return new Twig_Source("<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
", "@Framework/Form/radio_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\radio_widget.html.php");
    }
}

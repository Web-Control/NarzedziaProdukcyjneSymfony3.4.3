<?php

/* @Framework/Form/color_widget.html.php */
class __TwigTemplate_431b494b0efedd487c28b965a5270cbbf51e3cbe86a405ce8507198e5af1c839 extends Twig_Template
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
        $__internal_cf0edb4ea6e985d5878187598b5da8f63058b330415814e3e830820e254d7c34 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf0edb4ea6e985d5878187598b5da8f63058b330415814e3e830820e254d7c34->enter($__internal_cf0edb4ea6e985d5878187598b5da8f63058b330415814e3e830820e254d7c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        $__internal_1bc248e75b881ae77bab25b3dec553926a7ec7bf2654a0679c498a787e7d86ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1bc248e75b881ae77bab25b3dec553926a7ec7bf2654a0679c498a787e7d86ec->enter($__internal_1bc248e75b881ae77bab25b3dec553926a7ec7bf2654a0679c498a787e7d86ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/color_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
";
        
        $__internal_cf0edb4ea6e985d5878187598b5da8f63058b330415814e3e830820e254d7c34->leave($__internal_cf0edb4ea6e985d5878187598b5da8f63058b330415814e3e830820e254d7c34_prof);

        
        $__internal_1bc248e75b881ae77bab25b3dec553926a7ec7bf2654a0679c498a787e7d86ec->leave($__internal_1bc248e75b881ae77bab25b3dec553926a7ec7bf2654a0679c498a787e7d86ec_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/color_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'color'));
", "@Framework/Form/color_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\color_widget.html.php");
    }
}

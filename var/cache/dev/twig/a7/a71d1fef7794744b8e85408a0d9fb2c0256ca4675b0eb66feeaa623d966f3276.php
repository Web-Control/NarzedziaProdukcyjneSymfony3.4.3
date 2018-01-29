<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_9377a6ce9008e28bc2f1fc642a965ae7dd156c712d52b9d735d549cf54f234ca extends Twig_Template
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
        $__internal_980ff3bd8f68eba4d30b9bfae69f6e15a25ceb84522765a414713d4558e375cf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_980ff3bd8f68eba4d30b9bfae69f6e15a25ceb84522765a414713d4558e375cf->enter($__internal_980ff3bd8f68eba4d30b9bfae69f6e15a25ceb84522765a414713d4558e375cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        $__internal_36b81a521ea146a40ef10066b1c4e7ded77c3df8e96d0ecb7e8db7cf095c0d30 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36b81a521ea146a40ef10066b1c4e7ded77c3df8e96d0ecb7e8db7cf095c0d30->enter($__internal_36b81a521ea146a40ef10066b1c4e7ded77c3df8e96d0ecb7e8db7cf095c0d30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_980ff3bd8f68eba4d30b9bfae69f6e15a25ceb84522765a414713d4558e375cf->leave($__internal_980ff3bd8f68eba4d30b9bfae69f6e15a25ceb84522765a414713d4558e375cf_prof);

        
        $__internal_36b81a521ea146a40ef10066b1c4e7ded77c3df8e96d0ecb7e8db7cf095c0d30->leave($__internal_36b81a521ea146a40ef10066b1c4e7ded77c3df8e96d0ecb7e8db7cf095c0d30_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
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
        return new Twig_Source("<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
", "@Framework/Form/datetime_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\datetime_widget.html.php");
    }
}

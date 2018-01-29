<?php

/* @Framework/Form/collection_widget.html.php */
class __TwigTemplate_e880b5cd020890817ddd9a392ba8681e5d2cf6798d15f975e0ee63a394d72a23 extends Twig_Template
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
        $__internal_f98952a2d7d5c312496b81edfd09a2724eacc08d9c98e95b2dd15a4c302983d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f98952a2d7d5c312496b81edfd09a2724eacc08d9c98e95b2dd15a4c302983d1->enter($__internal_f98952a2d7d5c312496b81edfd09a2724eacc08d9c98e95b2dd15a4c302983d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        $__internal_ec6d383b8dcf441d38476e4b894e8559f890ec000541060481e5226cb90e1f5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ec6d383b8dcf441d38476e4b894e8559f890ec000541060481e5226cb90e1f5a->enter($__internal_ec6d383b8dcf441d38476e4b894e8559f890ec000541060481e5226cb90e1f5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/collection_widget.html.php"));

        // line 1
        echo "<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
";
        
        $__internal_f98952a2d7d5c312496b81edfd09a2724eacc08d9c98e95b2dd15a4c302983d1->leave($__internal_f98952a2d7d5c312496b81edfd09a2724eacc08d9c98e95b2dd15a4c302983d1_prof);

        
        $__internal_ec6d383b8dcf441d38476e4b894e8559f890ec000541060481e5226cb90e1f5a->leave($__internal_ec6d383b8dcf441d38476e4b894e8559f890ec000541060481e5226cb90e1f5a_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/collection_widget.html.php";
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
        return new Twig_Source("<?php if (isset(\$prototype)): ?>
    <?php \$attr['data-prototype'] = \$view->escape(\$view['form']->row(\$prototype)) ?>
<?php endif ?>
<?php echo \$view['form']->widget(\$form, array('attr' => \$attr)) ?>
", "@Framework/Form/collection_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\collection_widget.html.php");
    }
}

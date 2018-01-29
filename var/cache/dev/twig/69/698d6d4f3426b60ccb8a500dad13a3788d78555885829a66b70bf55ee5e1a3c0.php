<?php

/* @WebProfiler/Collector/twig.html.twig */
class __TwigTemplate_0ed5949bd65ac26bf57a39780efd9e25accf87996ca8bc4f29cb23cc5d4d977e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/twig.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_06e7425084b96540ba5bb6d38d7a0e099e6787a8640be3c39cef0b9f599d760d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06e7425084b96540ba5bb6d38d7a0e099e6787a8640be3c39cef0b9f599d760d->enter($__internal_06e7425084b96540ba5bb6d38d7a0e099e6787a8640be3c39cef0b9f599d760d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $__internal_8eb66666ebf7d6059aabee4b6e2d9fda161a7bb427cf2f5c7c081830ae7c52be = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8eb66666ebf7d6059aabee4b6e2d9fda161a7bb427cf2f5c7c081830ae7c52be->enter($__internal_8eb66666ebf7d6059aabee4b6e2d9fda161a7bb427cf2f5c7c081830ae7c52be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/twig.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06e7425084b96540ba5bb6d38d7a0e099e6787a8640be3c39cef0b9f599d760d->leave($__internal_06e7425084b96540ba5bb6d38d7a0e099e6787a8640be3c39cef0b9f599d760d_prof);

        
        $__internal_8eb66666ebf7d6059aabee4b6e2d9fda161a7bb427cf2f5c7c081830ae7c52be->leave($__internal_8eb66666ebf7d6059aabee4b6e2d9fda161a7bb427cf2f5c7c081830ae7c52be_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_38f774a23b164d82cb62b8076c2b4626f9630759d875addf5d876ff4211e0c7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f774a23b164d82cb62b8076c2b4626f9630759d875addf5d876ff4211e0c7e->enter($__internal_38f774a23b164d82cb62b8076c2b4626f9630759d875addf5d876ff4211e0c7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_dfcfa89be351878c5b9f7ff4ffea9509d607a9abc6b9db4f6f20e402fb96c2b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfcfa89be351878c5b9f7ff4ffea9509d607a9abc6b9db4f6f20e402fb96c2b7->enter($__internal_dfcfa89be351878c5b9f7ff4ffea9509d607a9abc6b9db4f6f20e402fb96c2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        $context["time"] = (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array())) ? (sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array()))) : ("n/a"));
        // line 5
        echo "    ";
        ob_start();
        // line 6
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 7
        echo twig_escape_filter($this->env, ($context["time"] ?? $this->getContext($context, "time")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 10
        echo "
    ";
        // line 11
        ob_start();
        // line 12
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>";
        // line 14
        echo twig_escape_filter($this->env, ($context["time"] ?? $this->getContext($context, "time")), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
        echo "</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
        echo "</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url"))));
        echo "
";
        
        $__internal_dfcfa89be351878c5b9f7ff4ffea9509d607a9abc6b9db4f6f20e402fb96c2b7->leave($__internal_dfcfa89be351878c5b9f7ff4ffea9509d607a9abc6b9db4f6f20e402fb96c2b7_prof);

        
        $__internal_38f774a23b164d82cb62b8076c2b4626f9630759d875addf5d876ff4211e0c7e->leave($__internal_38f774a23b164d82cb62b8076c2b4626f9630759d875addf5d876ff4211e0c7e_prof);

    }

    // line 33
    public function block_menu($context, array $blocks = array())
    {
        $__internal_b5dd7882e46fcd389fe6f87a0ec03934d333b5c999060980d331e9f2b9b172d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5dd7882e46fcd389fe6f87a0ec03934d333b5c999060980d331e9f2b9b172d6->enter($__internal_b5dd7882e46fcd389fe6f87a0ec03934d333b5c999060980d331e9f2b9b172d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_9b1f8e27eae6de65d4080d29b669a7b1563e16964b2b75ec7d88a993327af299 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9b1f8e27eae6de65d4080d29b669a7b1563e16964b2b75ec7d88a993327af299->enter($__internal_9b1f8e27eae6de65d4080d29b669a7b1563e16964b2b75ec7d88a993327af299_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 34
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 35
        echo twig_include($this->env, $context, "@WebProfiler/Icon/twig.svg");
        echo "</span>
        <strong>Twig</strong>
    </span>
";
        
        $__internal_9b1f8e27eae6de65d4080d29b669a7b1563e16964b2b75ec7d88a993327af299->leave($__internal_9b1f8e27eae6de65d4080d29b669a7b1563e16964b2b75ec7d88a993327af299_prof);

        
        $__internal_b5dd7882e46fcd389fe6f87a0ec03934d333b5c999060980d331e9f2b9b172d6->leave($__internal_b5dd7882e46fcd389fe6f87a0ec03934d333b5c999060980d331e9f2b9b172d6_prof);

    }

    // line 40
    public function block_panel($context, array $blocks = array())
    {
        $__internal_acff48328c554ea99df5a35e32379e7b39db2011a1bd9a9580cbeb190de2ca90 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_acff48328c554ea99df5a35e32379e7b39db2011a1bd9a9580cbeb190de2ca90->enter($__internal_acff48328c554ea99df5a35e32379e7b39db2011a1bd9a9580cbeb190de2ca90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1ac7fab8612ce04023a41958d7e2671554aa6396ce3a3f3dccce6045c6303e7c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ac7fab8612ce04023a41958d7e2671554aa6396ce3a3f3dccce6045c6303e7c->enter($__internal_1ac7fab8612ce04023a41958d7e2671554aa6396ce3a3f3dccce6045c6303e7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 41
        echo "    ";
        if (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()) == 0)) {
            // line 42
            echo "        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    ";
        } else {
            // line 48
            echo "        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">";
            // line 52
            echo twig_escape_filter($this->env, sprintf("%0.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "time", array())), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templatecount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "blockcount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "macrocount", array()), "html", null, true);
            echo "</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            ";
            // line 86
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "templates", array()));
            foreach ($context['_seq'] as $context["template"] => $context["count"]) {
                // line 87
                echo "                <tr>";
                // line 88
                $context["file"] = (($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "templatePaths", array(), "any", false, true), $context["template"], array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute(($context["collector"] ?? null), "templatePaths", array(), "any", false, true), $context["template"], array(), "array"), false)) : (false));
                // line 89
                $context["link"] = ((($context["file"] ?? $this->getContext($context, "file"))) ? ($this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->getFileLink(($context["file"] ?? $this->getContext($context, "file")), 1)) : (false));
                // line 90
                echo "<td>";
                if (($context["link"] ?? $this->getContext($context, "link"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, ($context["link"] ?? $this->getContext($context, "link")), "html", null, true);
                    echo "\" title=\"";
                    echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                    echo "</a>";
                } else {
                    echo twig_escape_filter($this->env, $context["template"], "html", null, true);
                }
                echo "</td>
                    <td class=\"font-normal\">";
                // line 91
                echo twig_escape_filter($this->env, $context["count"], "html", null, true);
                echo "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['template'], $context['count'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            ";
            // line 100
            echo twig_escape_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "htmlcallgraph", array()), "html", null, true);
            echo "
        </div>
    ";
        }
        
        $__internal_1ac7fab8612ce04023a41958d7e2671554aa6396ce3a3f3dccce6045c6303e7c->leave($__internal_1ac7fab8612ce04023a41958d7e2671554aa6396ce3a3f3dccce6045c6303e7c_prof);

        
        $__internal_acff48328c554ea99df5a35e32379e7b39db2011a1bd9a9580cbeb190de2ca90->leave($__internal_acff48328c554ea99df5a35e32379e7b39db2011a1bd9a9580cbeb190de2ca90_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/twig.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  259 => 100,  251 => 94,  242 => 91,  227 => 90,  225 => 89,  223 => 88,  221 => 87,  217 => 86,  195 => 67,  187 => 62,  179 => 57,  171 => 52,  165 => 48,  157 => 42,  154 => 41,  145 => 40,  131 => 35,  128 => 34,  119 => 33,  107 => 30,  104 => 29,  98 => 26,  91 => 22,  84 => 18,  77 => 14,  73 => 12,  71 => 11,  68 => 10,  62 => 7,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set time = collector.templatecount ? '%0.0f'|format(collector.time) : 'n/a' %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/twig.svg') }}
        <span class=\"sf-toolbar-value\">{{ time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Render Time</b>
            <span>{{ time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Template Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.templatecount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Block Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.blockcount }}</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Macro Calls</b>
            <span class=\"sf-toolbar-status\">{{ collector.macrocount }}</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/twig.svg') }}</span>
        <strong>Twig</strong>
    </span>
{% endblock %}

{% block panel %}
    {% if collector.templatecount == 0 %}
        <h2>Twig</h2>

        <div class=\"empty\">
            <p>No Twig templates were rendered for this request.</p>
        </div>
    {% else %}
        <h2>Twig Metrics</h2>

        <div class=\"metrics\">
            <div class=\"metric\">
                <span class=\"value\">{{ '%0.0f'|format(collector.time) }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Render time</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.templatecount }}</span>
                <span class=\"label\">Template calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.blockcount }}</span>
                <span class=\"label\">Block calls</span>
            </div>

            <div class=\"metric\">
                <span class=\"value\">{{ collector.macrocount }}</span>
                <span class=\"label\">Macro calls</span>
            </div>
        </div>

        <p class=\"help\">
            Render time includes sub-requests rendering time (if any).
        </p>

        <h2>Rendered Templates</h2>

        <table>
            <thead>
                <tr>
                    <th scope=\"col\">Template Name</th>
                    <th scope=\"col\">Render Count</th>
                </tr>
            </thead>
            <tbody>
            {% for template, count in collector.templates %}
                <tr>
                    {%- set file = collector.templatePaths[template]|default(false) -%}
                    {%- set link = file ? file|file_link(1) : false -%}
                    <td>{% if link %}<a href=\"{{ link }}\" title=\"{{ file }}\">{{ template }}</a>{% else %}{{ template }}{% endif %}</td>
                    <td class=\"font-normal\">{{ count }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>

        <h2>Rendering Call Graph</h2>

        <div id=\"twig-dump\">
            {{ collector.htmlcallgraph }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/twig.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\twig.html.twig");
    }
}

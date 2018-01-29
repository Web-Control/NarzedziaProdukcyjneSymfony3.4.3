<?php

/* @WebProfiler/Collector/time.html.twig */
class __TwigTemplate_1016c8a7228f4529a9fe9bfc09a7ec7e6efd97206bc32259cf05af1509070ea5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/time.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
            'panelContent' => array($this, 'block_panelContent'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_abbefdeb4c1bdb507df71a58d41a5ca849d4821748269f488d29f58faf350071 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_abbefdeb4c1bdb507df71a58d41a5ca849d4821748269f488d29f58faf350071->enter($__internal_abbefdeb4c1bdb507df71a58d41a5ca849d4821748269f488d29f58faf350071_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        $__internal_53a58c7a383215282fbf07df53a6039038fae4d6c494c13088003fe3f5ad324c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53a58c7a383215282fbf07df53a6039038fae4d6c494c13088003fe3f5ad324c->enter($__internal_53a58c7a383215282fbf07df53a6039038fae4d6c494c13088003fe3f5ad324c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/time.html.twig"));

        // line 3
        $context["helper"] = $this;
        // line 5
        if ( !array_key_exists("colors", $context)) {
            // line 6
            $context["colors"] = array("default" => "#999", "section" => "#444", "event_listener" => "#00B8F5", "event_listener_loading" => "#00B8F5", "template" => "#66CC00", "doctrine" => "#FF6633", "propel" => "#FF6633");
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_abbefdeb4c1bdb507df71a58d41a5ca849d4821748269f488d29f58faf350071->leave($__internal_abbefdeb4c1bdb507df71a58d41a5ca849d4821748269f488d29f58faf350071_prof);

        
        $__internal_53a58c7a383215282fbf07df53a6039038fae4d6c494c13088003fe3f5ad324c->leave($__internal_53a58c7a383215282fbf07df53a6039038fae4d6c494c13088003fe3f5ad324c_prof);

    }

    // line 18
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_cb8c31502af620dba947d8cf1a5a03ccb56f3a136fddd5af770147e48de92d28 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cb8c31502af620dba947d8cf1a5a03ccb56f3a136fddd5af770147e48de92d28->enter($__internal_cb8c31502af620dba947d8cf1a5a03ccb56f3a136fddd5af770147e48de92d28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_c73e750dacee92824817a7ad0fcf018867fc2f263e4b7a4b90594143f51f5498 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c73e750dacee92824817a7ad0fcf018867fc2f263e4b7a4b90594143f51f5498->enter($__internal_c73e750dacee92824817a7ad0fcf018867fc2f263e4b7a4b90594143f51f5498_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 19
        echo "    ";
        $context["has_time_events"] = (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array())) > 0);
        // line 20
        echo "
    ";
        // line 21
        $context["total_time"] = ((($context["has_time_events"] ?? $this->getContext($context, "has_time_events"))) ? (sprintf("%.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "duration", array()))) : ("n/a"));
        // line 22
        echo "    ";
        $context["initialization_time"] = ((twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()))) ? (sprintf("%.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "inittime", array()))) : ("n/a"));
        // line 23
        echo "    ";
        $context["status_color"] = (((($context["has_time_events"] ?? $this->getContext($context, "has_time_events")) && ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "duration", array()) > 1000))) ? ("yellow") : (""));
        // line 24
        echo "
    ";
        // line 25
        ob_start();
        // line 26
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "
        <span class=\"sf-toolbar-value\">";
        // line 27
        echo twig_escape_filter($this->env, ($context["total_time"] ?? $this->getContext($context, "total_time")), "html", null, true);
        echo "</span>
        <span class=\"sf-toolbar-label\">ms</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 30
        echo "
    ";
        // line 31
        ob_start();
        // line 32
        echo "        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>";
        // line 34
        echo twig_escape_filter($this->env, ($context["total_time"] ?? $this->getContext($context, "total_time")), "html", null, true);
        echo " ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>";
        // line 38
        echo twig_escape_filter($this->env, ($context["initialization_time"] ?? $this->getContext($context, "initialization_time")), "html", null, true);
        echo " ms</span>
        </div>
    ";
        $context["text"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 41
        echo "
    ";
        // line 42
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => ($context["profiler_url"] ?? $this->getContext($context, "profiler_url")), "status" => ($context["status_color"] ?? $this->getContext($context, "status_color"))));
        echo "
";
        
        $__internal_c73e750dacee92824817a7ad0fcf018867fc2f263e4b7a4b90594143f51f5498->leave($__internal_c73e750dacee92824817a7ad0fcf018867fc2f263e4b7a4b90594143f51f5498_prof);

        
        $__internal_cb8c31502af620dba947d8cf1a5a03ccb56f3a136fddd5af770147e48de92d28->leave($__internal_cb8c31502af620dba947d8cf1a5a03ccb56f3a136fddd5af770147e48de92d28_prof);

    }

    // line 45
    public function block_menu($context, array $blocks = array())
    {
        $__internal_04076df7064ad8ebf0533cb76c74ce83cffe95b9102c0d9ea8f842b2ed1b02c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04076df7064ad8ebf0533cb76c74ce83cffe95b9102c0d9ea8f842b2ed1b02c9->enter($__internal_04076df7064ad8ebf0533cb76c74ce83cffe95b9102c0d9ea8f842b2ed1b02c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_0babd32f9fbd8b5dca5054c17f79705fd67d4c89f94359a2d0ed7c9b86f743c6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0babd32f9fbd8b5dca5054c17f79705fd67d4c89f94359a2d0ed7c9b86f743c6->enter($__internal_0babd32f9fbd8b5dca5054c17f79705fd67d4c89f94359a2d0ed7c9b86f743c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 46
        echo "    <span class=\"label\">
        <span class=\"icon\">";
        // line 47
        echo twig_include($this->env, $context, "@WebProfiler/Icon/time.svg");
        echo "</span>
        <strong>Performance</strong>
    </span>
";
        
        $__internal_0babd32f9fbd8b5dca5054c17f79705fd67d4c89f94359a2d0ed7c9b86f743c6->leave($__internal_0babd32f9fbd8b5dca5054c17f79705fd67d4c89f94359a2d0ed7c9b86f743c6_prof);

        
        $__internal_04076df7064ad8ebf0533cb76c74ce83cffe95b9102c0d9ea8f842b2ed1b02c9->leave($__internal_04076df7064ad8ebf0533cb76c74ce83cffe95b9102c0d9ea8f842b2ed1b02c9_prof);

    }

    // line 52
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cbe734b9614a559d98ee6fc55ac830b93002af3c0e52872a2f2963393c19a3b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbe734b9614a559d98ee6fc55ac830b93002af3c0e52872a2f2963393c19a3b3->enter($__internal_cbe734b9614a559d98ee6fc55ac830b93002af3c0e52872a2f2963393c19a3b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_855bf91ef6d669ce9a8115797fb916644c8e36f1252297358ce75c217ceaac68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_855bf91ef6d669ce9a8115797fb916644c8e36f1252297358ce75c217ceaac68->enter($__internal_855bf91ef6d669ce9a8115797fb916644c8e36f1252297358ce75c217ceaac68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 53
        echo "    ";
        $context["has_time_events"] = (twig_length_filter($this->env, $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array())) > 0);
        // line 54
        echo "    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 58
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "duration", array())), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 63
        echo twig_escape_filter($this->env, sprintf("%.0f", $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "inittime", array())), "html", null, true);
        echo " <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        ";
        // line 67
        if ($this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "collectors", array()), "memory", array())) {
            // line 68
            echo "            <div class=\"metric\">
                <span class=\"value\">";
            // line 69
            echo twig_escape_filter($this->env, sprintf("%.2f", (($this->getAttribute($this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "collectors", array()), "memory", array()), "memory", array()) / 1024) / 1024)), "html", null, true);
            echo " <span class=\"unit\">MB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        ";
        }
        // line 73
        echo "
        ";
        // line 74
        if ((twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array())) > 0)) {
            // line 75
            echo "            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">";
            // line 78
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array())), "html", null, true);
            echo "</span>
                <span class=\"label\">Sub-Request";
            // line 79
            echo (((twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array())) > 1)) ? ("s") : (""));
            echo "</span>
            </div>

            ";
            // line 82
            if (($context["has_time_events"] ?? $this->getContext($context, "has_time_events"))) {
                // line 83
                echo "                ";
                $context["subrequests_time"] = 0;
                // line 84
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 85
                    echo "                    ";
                    $context["subrequests_time"] = (($context["subrequests_time"] ?? $this->getContext($context, "subrequests_time")) + $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array()), "__section__", array()), "duration", array()));
                    // line 86
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 87
                echo "            ";
            } else {
                // line 88
                echo "                ";
                $context["subrequests_time"] = "n/a";
                // line 89
                echo "            ";
            }
            // line 90
            echo "
            <div class=\"metric\">
                <span class=\"value\">";
            // line 92
            echo twig_escape_filter($this->env, ($context["subrequests_time"] ?? $this->getContext($context, "subrequests_time")), "html", null, true);
            echo " <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Request";
            // line 93
            echo (((twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array())) > 1)) ? ("s") : (""));
            echo " time</span>
            </div>
        ";
        }
        // line 96
        echo "    </div>

    <h2>Execution timeline</h2>

    ";
        // line 100
        if (twig_test_empty($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()))) {
            // line 101
            echo "        <div class=\"empty\">
            <p>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</p>
        </div>
    ";
        } else {
            // line 105
            echo "        ";
            $this->displayBlock("panelContent", $context, $blocks);
            echo "
    ";
        }
        
        $__internal_855bf91ef6d669ce9a8115797fb916644c8e36f1252297358ce75c217ceaac68->leave($__internal_855bf91ef6d669ce9a8115797fb916644c8e36f1252297358ce75c217ceaac68_prof);

        
        $__internal_cbe734b9614a559d98ee6fc55ac830b93002af3c0e52872a2f2963393c19a3b3->leave($__internal_cbe734b9614a559d98ee6fc55ac830b93002af3c0e52872a2f2963393c19a3b3_prof);

    }

    // line 109
    public function block_panelContent($context, array $blocks = array())
    {
        $__internal_ead4b4cb3b8717af5cada658c414da112279986c8b162f97c56e8cbcb23848b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ead4b4cb3b8717af5cada658c414da112279986c8b162f97c56e8cbcb23848b2->enter($__internal_ead4b4cb3b8717af5cada658c414da112279986c8b162f97c56e8cbcb23848b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        $__internal_8ab5138a2bf0e04f6475a442d7b869881f809e45768ebe1cf2963fdaf1e87aba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8ab5138a2bf0e04f6475a442d7b869881f809e45768ebe1cf2963fdaf1e87aba->enter($__internal_8ab5138a2bf0e04f6475a442d7b869881f809e45768ebe1cf2963fdaf1e87aba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panelContent"));

        // line 110
        echo "    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" size=\"3\" name=\"threshold\" id=\"threshold\" value=\"3\" min=\"0\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    ";
        // line 117
        if ($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", array())) {
            // line 118
            echo "        <h3 class=\"dump-inline\">
            Sub-Request ";
            // line 119
            echo call_user_func_array($this->env->getFunction('profiler_dump')->getCallable(), array($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "getcollector", array(0 => "request"), "method"), "requestattributes", array()), "get", array(0 => "_controller"), "method")));
            echo "
            <small>
                ";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), "__section__", array()), "duration", array()), "html", null, true);
            echo " ms
                <a class=\"newline\" href=\"";
            // line 122
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "parent", array()), "token", array()), "panel" => "time")), "html", null, true);
            echo "\">Return to parent request</a>
            </small>
        </h3>
    ";
        } elseif ((twig_length_filter($this->env, $this->getAttribute(        // line 125
($context["profile"] ?? $this->getContext($context, "profile")), "children", array())) > 0)) {
            // line 126
            echo "        <h3>
            Main Request <small>";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), "__section__", array()), "duration", array()), "html", null, true);
            echo " ms</small>
        </h3>
    ";
        }
        // line 130
        echo "
    ";
        // line 131
        echo $context["helper"]->getdisplay_timeline(("timeline_" . ($context["token"] ?? $this->getContext($context, "token"))), $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), ($context["colors"] ?? $this->getContext($context, "colors")));
        echo "

    ";
        // line 133
        if (twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()))) {
            // line 134
            echo "        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>(";
            // line 136
            echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array())), "html", null, true);
            echo ")</small></h3>

        ";
            // line 138
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 139
                echo "            ";
                $context["events"] = $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array());
                // line 140
                echo "            <h4>
                <a href=\"";
                // line 141
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler", array("token" => $this->getAttribute($context["child"], "token", array()), "panel" => "time")), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "request"), "method"), "identifier", array()), "html", null, true);
                echo "</a>
                <small>";
                // line 142
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "__section__", array()), "duration", array()), "html", null, true);
                echo " ms</small>
            </h4>

            ";
                // line 145
                echo $context["helper"]->getdisplay_timeline(("timeline_" . $this->getAttribute($context["child"], "token", array())), ($context["events"] ?? $this->getContext($context, "events")), ($context["colors"] ?? $this->getContext($context, "colors")));
                echo "
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 147
            echo "    ";
        }
        // line 148
        echo "
    <script>";
        // line 149
        echo "//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                };

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            };
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param {string} selector - a CSS-selector-compatible query string
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors = ";
        // line 191
        echo twig_jsonencode_filter(($context["colors"] ?? $this->getContext($context, "colors")));
        echo ",
                _storagePrefix = 'timeline/',
                _threshold = 1,
                _requests = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds)
             * @param width     the width of the canvas
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent = 38,
                    colors = _drawingColors,
                    space = 10.5,
                    ratio = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx = canvas.getContext(\"2d\"),
                    scaleRatio,
                    devicePixelRatio;

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                // For retina displays so text and boxes will be crisp
                devicePixelRatio = window.devicePixelRatio == \"undefined\" ? 1 : window.devicePixelRatio;
                scaleRatio = devicePixelRatio / 1;

                canvas.width = width * scaleRatio;
                canvas.height = canvasHeight * scaleRatio;

                canvas.style.width = width + 'px';
                canvas.style.height = canvasHeight + 'px';

                ctx.scale(scaleRatio, scaleRatio);

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#CCC\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            /* create a striped background dynamically */
                            var img = new Image();
                            img.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKBAMAAAB/HNKOAAAAIVBMVEX////w8PDd7h7d7h7d7h7d7h7w8PDw8PDw8PDw8PDw8PAOi84XAAAAKUlEQVQImWNI71zAwMBQMYuBgY0BxExnADErGEDMTgYQE8hnAKtCZwIAlcMNSR9a1OEAAAAASUVORK5CYII=';
                            var pattern = ctx.createPattern(img, 'repeat');

                            ctx.fillStyle = pattern;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return !isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if (!isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 8);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#E0E0E0\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \"  \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"13px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"11px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, _maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (null === threshold) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        }

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": ";
        // line 464
        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), "__section__", array()), "endtime", array())), "js", null, true);
        echo ",
            \"requests\": [
";
        // line 466
        echo $context["helper"]->getdump_request_data(($context["token"] ?? $this->getContext($context, "token")), ($context["profile"] ?? $this->getContext($context, "profile")), $this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), "__section__", array()), "origin", array()));
        echo "

";
        // line 468
        if (twig_length_filter($this->env, $this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()))) {
            // line 469
            echo "                ,
";
            // line 470
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["profile"] ?? $this->getContext($context, "profile")), "children", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 471
                echo $context["helper"]->getdump_request_data($this->getAttribute($context["child"], "token", array()), $context["child"], $this->getAttribute($this->getAttribute($context["child"], "getcollector", array(0 => "time"), "method"), "events", array()), $this->getAttribute($this->getAttribute($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "events", array()), "__section__", array()), "origin", array()));
                echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
                echo "
";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 474
        echo "            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]>";
        // line 506
        echo "</script>
";
        
        $__internal_8ab5138a2bf0e04f6475a442d7b869881f809e45768ebe1cf2963fdaf1e87aba->leave($__internal_8ab5138a2bf0e04f6475a442d7b869881f809e45768ebe1cf2963fdaf1e87aba_prof);

        
        $__internal_ead4b4cb3b8717af5cada658c414da112279986c8b162f97c56e8cbcb23848b2->leave($__internal_ead4b4cb3b8717af5cada658c414da112279986c8b162f97c56e8cbcb23848b2_prof);

    }

    // line 509
    public function getdump_request_data($__token__ = null, $__profile__ = null, $__events__ = null, $__origin__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "token" => $__token__,
            "profile" => $__profile__,
            "events" => $__events__,
            "origin" => $__origin__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_0f6446218f6ecafdd7feeb8c4720fe81ca84c4fc325f356d0565a937193b2a03 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_0f6446218f6ecafdd7feeb8c4720fe81ca84c4fc325f356d0565a937193b2a03->enter($__internal_0f6446218f6ecafdd7feeb8c4720fe81ca84c4fc325f356d0565a937193b2a03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_request_data"));

            $__internal_fe2f5d788947d9c6ac259bb82aa34d06dbe2086f850ebfbbc0e2632c576b094a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_fe2f5d788947d9c6ac259bb82aa34d06dbe2086f850ebfbbc0e2632c576b094a->enter($__internal_fe2f5d788947d9c6ac259bb82aa34d06dbe2086f850ebfbbc0e2632c576b094a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_request_data"));

            // line 511
            $context["__internal_5f7fe0b8f4b197f4aa3821f20455872283024f8881bd26a758d93c9ff63135f5"] = $this;
            // line 512
            echo "                {
                    \"id\": \"";
            // line 513
            echo twig_escape_filter($this->env, ($context["token"] ?? $this->getContext($context, "token")), "js", null, true);
            echo "\",
                    \"left\": ";
            // line 514
            echo twig_escape_filter($this->env, sprintf("%F", ($this->getAttribute($this->getAttribute(($context["events"] ?? $this->getContext($context, "events")), "__section__", array()), "origin", array()) - ($context["origin"] ?? $this->getContext($context, "origin")))), "js", null, true);
            echo ",
                    \"events\": [
";
            // line 516
            echo $context["__internal_5f7fe0b8f4b197f4aa3821f20455872283024f8881bd26a758d93c9ff63135f5"]->getdump_events(($context["events"] ?? $this->getContext($context, "events")));
            echo "
                    ]
                }
";
            
            $__internal_fe2f5d788947d9c6ac259bb82aa34d06dbe2086f850ebfbbc0e2632c576b094a->leave($__internal_fe2f5d788947d9c6ac259bb82aa34d06dbe2086f850ebfbbc0e2632c576b094a_prof);

            
            $__internal_0f6446218f6ecafdd7feeb8c4720fe81ca84c4fc325f356d0565a937193b2a03->leave($__internal_0f6446218f6ecafdd7feeb8c4720fe81ca84c4fc325f356d0565a937193b2a03_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 522
    public function getdump_events($__events__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "events" => $__events__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_cad159a00f855c0a53be7f8ff61eb4801264327a3a7ad1e1dae75d95e02b4c04 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_cad159a00f855c0a53be7f8ff61eb4801264327a3a7ad1e1dae75d95e02b4c04->enter($__internal_cad159a00f855c0a53be7f8ff61eb4801264327a3a7ad1e1dae75d95e02b4c04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_events"));

            $__internal_25b9c54fb3614164ba12248b20117ae5594c49a0e38cb8e79e660314fc22b28a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_25b9c54fb3614164ba12248b20117ae5594c49a0e38cb8e79e660314fc22b28a->enter($__internal_25b9c54fb3614164ba12248b20117ae5594c49a0e38cb8e79e660314fc22b28a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "dump_events"));

            // line 524
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["events"] ?? $this->getContext($context, "events")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["event"]) {
                // line 525
                if (("__section__" != $context["name"])) {
                    // line 526
                    echo "                        {
                            \"name\": \"";
                    // line 527
                    echo twig_escape_filter($this->env, $context["name"], "js", null, true);
                    echo "\",
                            \"category\": \"";
                    // line 528
                    echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "category", array()), "js", null, true);
                    echo "\",
                            \"origin\": ";
                    // line 529
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "origin", array())), "js", null, true);
                    echo ",
                            \"starttime\": ";
                    // line 530
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "starttime", array())), "js", null, true);
                    echo ",
                            \"endtime\": ";
                    // line 531
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "endtime", array())), "js", null, true);
                    echo ",
                            \"duration\": ";
                    // line 532
                    echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["event"], "duration", array())), "js", null, true);
                    echo ",
                            \"memory\": ";
                    // line 533
                    echo twig_escape_filter($this->env, sprintf("%.1F", (($this->getAttribute($context["event"], "memory", array()) / 1024) / 1024)), "js", null, true);
                    echo ",
                            \"periods\": [";
                    // line 535
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["event"], "periods", array()));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["period"]) {
                        // line 536
                        echo "{\"start\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["period"], "starttime", array())), "js", null, true);
                        echo ", \"end\": ";
                        echo twig_escape_filter($this->env, sprintf("%F", $this->getAttribute($context["period"], "endtime", array())), "js", null, true);
                        echo "}";
                        echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (", "));
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['period'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 538
                    echo "]
                        }";
                    // line 539
                    echo (($this->getAttribute($context["loop"], "last", array())) ? ("") : (","));
                    echo "
";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['event'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_25b9c54fb3614164ba12248b20117ae5594c49a0e38cb8e79e660314fc22b28a->leave($__internal_25b9c54fb3614164ba12248b20117ae5594c49a0e38cb8e79e660314fc22b28a_prof);

            
            $__internal_cad159a00f855c0a53be7f8ff61eb4801264327a3a7ad1e1dae75d95e02b4c04->leave($__internal_cad159a00f855c0a53be7f8ff61eb4801264327a3a7ad1e1dae75d95e02b4c04_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 545
    public function getdisplay_timeline($__id__ = null, $__events__ = null, $__colors__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "id" => $__id__,
            "events" => $__events__,
            "colors" => $__colors__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_c01e58bc05a315d2221dbc1190af498816fe13df50c3e225508f977814a765e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_c01e58bc05a315d2221dbc1190af498816fe13df50c3e225508f977814a765e6->enter($__internal_c01e58bc05a315d2221dbc1190af498816fe13df50c3e225508f977814a765e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_timeline"));

            $__internal_e72c732e2bc3cdfaea6d9eeea8bd1b7e1498c3dd882d1465e281d4f0fe3a46d2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_e72c732e2bc3cdfaea6d9eeea8bd1b7e1498c3dd882d1465e281d4f0fe3a46d2->enter($__internal_e72c732e2bc3cdfaea6d9eeea8bd1b7e1498c3dd882d1465e281d4f0fe3a46d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "display_timeline"));

            // line 546
            echo "    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            ";
            // line 548
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["colors"] ?? $this->getContext($context, "colors")));
            foreach ($context['_seq'] as $context["category"] => $context["color"]) {
                // line 549
                echo "                <span data-color=\"";
                echo twig_escape_filter($this->env, $context["color"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["category"], "html", null, true);
                echo "</span>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['category'], $context['color'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 551
            echo "        </div>
        <canvas width=\"680\" height=\"\" id=\"";
            // line 552
            echo twig_escape_filter($this->env, ($context["id"] ?? $this->getContext($context, "id")), "html", null, true);
            echo "\" class=\"timeline\"></canvas>
    </div>
";
            
            $__internal_e72c732e2bc3cdfaea6d9eeea8bd1b7e1498c3dd882d1465e281d4f0fe3a46d2->leave($__internal_e72c732e2bc3cdfaea6d9eeea8bd1b7e1498c3dd882d1465e281d4f0fe3a46d2_prof);

            
            $__internal_c01e58bc05a315d2221dbc1190af498816fe13df50c3e225508f977814a765e6->leave($__internal_c01e58bc05a315d2221dbc1190af498816fe13df50c3e225508f977814a765e6_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/time.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1052 => 552,  1049 => 551,  1038 => 549,  1034 => 548,  1030 => 546,  1010 => 545,  974 => 539,  971 => 538,  952 => 536,  935 => 535,  931 => 533,  927 => 532,  923 => 531,  919 => 530,  915 => 529,  911 => 528,  907 => 527,  904 => 526,  902 => 525,  885 => 524,  867 => 522,  842 => 516,  837 => 514,  833 => 513,  830 => 512,  828 => 511,  807 => 509,  796 => 506,  762 => 474,  744 => 471,  727 => 470,  724 => 469,  722 => 468,  717 => 466,  712 => 464,  436 => 191,  392 => 149,  389 => 148,  386 => 147,  378 => 145,  372 => 142,  366 => 141,  363 => 140,  360 => 139,  356 => 138,  351 => 136,  347 => 134,  345 => 133,  340 => 131,  337 => 130,  331 => 127,  328 => 126,  326 => 125,  320 => 122,  316 => 121,  311 => 119,  308 => 118,  306 => 117,  297 => 110,  288 => 109,  274 => 105,  268 => 101,  266 => 100,  260 => 96,  254 => 93,  250 => 92,  246 => 90,  243 => 89,  240 => 88,  237 => 87,  231 => 86,  228 => 85,  223 => 84,  220 => 83,  218 => 82,  212 => 79,  208 => 78,  203 => 75,  201 => 74,  198 => 73,  191 => 69,  188 => 68,  186 => 67,  179 => 63,  171 => 58,  165 => 54,  162 => 53,  153 => 52,  139 => 47,  136 => 46,  127 => 45,  115 => 42,  112 => 41,  106 => 38,  99 => 34,  95 => 32,  93 => 31,  90 => 30,  84 => 27,  79 => 26,  77 => 25,  74 => 24,  71 => 23,  68 => 22,  66 => 21,  63 => 20,  60 => 19,  51 => 18,  41 => 1,  38 => 6,  36 => 5,  34 => 3,  11 => 1,);
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

{% import _self as helper %}

{% if colors is not defined %}
    {% set colors = {
        'default':                '#999',
        'section':                '#444',
        'event_listener':         '#00B8F5',
        'event_listener_loading': '#00B8F5',
        'template':               '#66CC00',
        'doctrine':               '#FF6633',
        'propel':                 '#FF6633',
    } %}
{% endif %}


{% block toolbar %}
    {% set has_time_events = collector.events|length > 0 %}

    {% set total_time = has_time_events ? '%.0f'|format(collector.duration) : 'n/a' %}
    {% set initialization_time = collector.events|length ? '%.0f'|format(collector.inittime) : 'n/a' %}
    {% set status_color = has_time_events and collector.duration > 1000 ? 'yellow' : '' %}

    {% set icon %}
        {{ include('@WebProfiler/Icon/time.svg') }}
        <span class=\"sf-toolbar-value\">{{ total_time }}</span>
        <span class=\"sf-toolbar-label\">ms</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b>Total time</b>
            <span>{{ total_time }} ms</span>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <b>Initialization time</b>
            <span>{{ initialization_time }} ms</span>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: profiler_url, status: status_color }) }}
{% endblock %}

{% block menu %}
    <span class=\"label\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/time.svg') }}</span>
        <strong>Performance</strong>
    </span>
{% endblock %}

{% block panel %}
    {% set has_time_events = collector.events|length > 0 %}
    <h2>Performance metrics</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ '%.0f'|format(collector.duration) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Total execution time</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ '%.0f'|format(collector.inittime) }} <span class=\"unit\">ms</span></span>
            <span class=\"label\">Symfony initialization</span>
        </div>

        {% if profile.collectors.memory %}
            <div class=\"metric\">
                <span class=\"value\">{{ '%.2f'|format(profile.collectors.memory.memory / 1024 / 1024) }} <span class=\"unit\">MB</span></span>
                <span class=\"label\">Peak memory usage</span>
            </div>
        {% endif %}

        {% if profile.children|length > 0 %}
            <div class=\"metric-divider\"></div>

            <div class=\"metric\">
                <span class=\"value\">{{ profile.children|length }}</span>
                <span class=\"label\">Sub-Request{{ profile.children|length > 1 ? 's' }}</span>
            </div>

            {% if has_time_events %}
                {% set subrequests_time = 0 %}
                {% for child in profile.children %}
                    {% set subrequests_time = subrequests_time + child.getcollector('time').events.__section__.duration %}
                {% endfor %}
            {% else %}
                {% set subrequests_time = 'n/a' %}
            {% endif %}

            <div class=\"metric\">
                <span class=\"value\">{{ subrequests_time }} <span class=\"unit\">ms</span></span>
                <span class=\"label\">Sub-Request{{ profile.children|length > 1 ? 's' }} time</span>
            </div>
        {% endif %}
    </div>

    <h2>Execution timeline</h2>

    {% if collector.events is empty %}
        <div class=\"empty\">
            <p>No timing events have been recorded. Are you sure that debugging is enabled in the kernel?</p>
        </div>
    {% else %}
        {{ block('panelContent') }}
    {% endif %}
{% endblock %}

{% block panelContent %}
    <form id=\"timeline-control\" action=\"\" method=\"get\">
        <input type=\"hidden\" name=\"panel\" value=\"time\">
        <label for=\"threshold\">Threshold</label>
        <input type=\"number\" size=\"3\" name=\"threshold\" id=\"threshold\" value=\"3\" min=\"0\"> ms
        <span class=\"help\">(timeline only displays events with a duration longer than this threshold)</span>
    </form>

    {% if profile.parent %}
        <h3 class=\"dump-inline\">
            Sub-Request {{ profiler_dump(profile.getcollector('request').requestattributes.get('_controller')) }}
            <small>
                {{ collector.events.__section__.duration }} ms
                <a class=\"newline\" href=\"{{ path('_profiler', { token: profile.parent.token, panel: 'time' }) }}\">Return to parent request</a>
            </small>
        </h3>
    {% elseif profile.children|length > 0 %}
        <h3>
            Main Request <small>{{ collector.events.__section__.duration }} ms</small>
        </h3>
    {% endif %}

    {{ helper.display_timeline('timeline_' ~ token, collector.events, colors) }}

    {% if profile.children|length %}
        <p class=\"help\">Note: sections with a striped background correspond to sub-requests.</p>

        <h3>Sub-requests <small>({{ profile.children|length }})</small></h3>

        {% for child in profile.children %}
            {% set events = child.getcollector('time').events %}
            <h4>
                <a href=\"{{ path('_profiler', { token: child.token, panel: 'time' }) }}\">{{ child.getcollector('request').identifier }}</a>
                <small>{{ events.__section__.duration }} ms</small>
            </h4>

            {{ helper.display_timeline('timeline_' ~ child.token, events, colors) }}
        {% endfor %}
    {% endif %}

    <script>{% autoescape 'js' %}//<![CDATA[
        /**
         * In-memory key-value cache manager
         */
        var cache = new function() {
            \"use strict\";
            var dict = {};

            this.get = function(key) {
                return dict.hasOwnProperty(key)
                    ? dict[key]
                    : null;
                };

            this.set = function(key, value) {
                dict[key] = value;

                return value;
            };
        };

        /**
         * Query an element with a CSS selector.
         *
         * @param {string} selector - a CSS-selector-compatible query string
         *
         * @return DOMElement|null
         */
        function query(selector)
        {
            \"use strict\";
            var key = 'SELECTOR: ' + selector;

            return cache.get(key) || cache.set(key, document.querySelector(selector));
        }

        /**
         * Canvas Manager
         */
        function CanvasManager(requests, maxRequestTime) {
            \"use strict\";

            var _drawingColors = {{ colors|json_encode|raw }},
                _storagePrefix = 'timeline/',
                _threshold = 1,
                _requests = requests,
                _maxRequestTime = maxRequestTime;

            /**
             * Check whether this event is a child event.
             *
             * @return true if it is
             */
            function isChildEvent(event)
            {
                return '__section__.child' === event.name;
            }

            /**
             * Check whether this event is categorized in 'section'.
             *
             * @return true if it is
             */
            function isSectionEvent(event)
            {
                return 'section' === event.category;
            }

            /**
             * Get the width of the container.
             */
            function getContainerWidth()
            {
                return query('#collector-content h2').clientWidth;
            }

            /**
             * Draw one canvas.
             *
             * @param request   the request object
             * @param max       <subjected for removal>
             * @param threshold the threshold (lower bound) of the length of the timeline (in milliseconds)
             * @param width     the width of the canvas
             */
            this.drawOne = function(request, max, threshold, width)
            {
                \"use strict\";
                var text,
                    ms,
                    xc,
                    drawableEvents,
                    mainEvents,
                    elementId = 'timeline_' + request.id,
                    canvasHeight = 0,
                    gapPerEvent = 38,
                    colors = _drawingColors,
                    space = 10.5,
                    ratio = (width - space * 2) / max,
                    h = space,
                    x = request.left * ratio + space, // position
                    canvas = cache.get(elementId) || cache.set(elementId, document.getElementById(elementId)),
                    ctx = canvas.getContext(\"2d\"),
                    scaleRatio,
                    devicePixelRatio;

                // Filter events whose total time is below the threshold.
                drawableEvents = request.events.filter(function(event) {
                    return event.duration >= threshold;
                });

                canvasHeight += gapPerEvent * drawableEvents.length;

                // For retina displays so text and boxes will be crisp
                devicePixelRatio = window.devicePixelRatio == \"undefined\" ? 1 : window.devicePixelRatio;
                scaleRatio = devicePixelRatio / 1;

                canvas.width = width * scaleRatio;
                canvas.height = canvasHeight * scaleRatio;

                canvas.style.width = width + 'px';
                canvas.style.height = canvasHeight + 'px';

                ctx.scale(scaleRatio, scaleRatio);

                ctx.textBaseline = \"middle\";
                ctx.lineWidth = 0;

                // For each event, draw a line.
                ctx.strokeStyle = \"#CCC\";

                drawableEvents.forEach(function(event) {
                    event.periods.forEach(function(period) {
                        var timelineHeadPosition = x + period.start * ratio;

                        if (isChildEvent(event)) {
                            /* create a striped background dynamically */
                            var img = new Image();
                            img.src = 'data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKBAMAAAB/HNKOAAAAIVBMVEX////w8PDd7h7d7h7d7h7d7h7w8PDw8PDw8PDw8PDw8PAOi84XAAAAKUlEQVQImWNI71zAwMBQMYuBgY0BxExnADErGEDMTgYQE8hnAKtCZwIAlcMNSR9a1OEAAAAASUVORK5CYII=';
                            var pattern = ctx.createPattern(img, 'repeat');

                            ctx.fillStyle = pattern;
                            ctx.fillRect(timelineHeadPosition, 0, (period.end - period.start) * ratio, canvasHeight);
                        } else if (isSectionEvent(event)) {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, 0);
                            ctx.lineTo(timelineHeadPosition, canvasHeight);
                            ctx.moveTo(timelineTailPosition, 0);
                            ctx.lineTo(timelineTailPosition, canvasHeight);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });
                });

                // Filter for main events.
                mainEvents = drawableEvents.filter(function(event) {
                    return !isChildEvent(event)
                });

                // For each main event, draw the visual presentation of timelines.
                mainEvents.forEach(function(event) {

                    h += 8;

                    // For each sub event, ...
                    event.periods.forEach(function(period) {
                        // Set the drawing style.
                        ctx.fillStyle = colors['default'];
                        ctx.strokeStyle = colors['default'];

                        if (colors[event.name]) {
                            ctx.fillStyle = colors[event.name];
                            ctx.strokeStyle = colors[event.name];
                        } else if (colors[event.category]) {
                            ctx.fillStyle = colors[event.category];
                            ctx.strokeStyle = colors[event.category];
                        }

                        // Draw the timeline
                        var timelineHeadPosition = x + period.start * ratio;

                        if (!isSectionEvent(event)) {
                            ctx.fillRect(timelineHeadPosition, h + 3, 2, 8);
                            ctx.fillRect(timelineHeadPosition, h, (period.end - period.start) * ratio || 2, 6);
                        } else {
                            var timelineTailPosition = x + period.end * ratio;

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineHeadPosition, h + 11);
                            ctx.lineTo(timelineHeadPosition + 8, h);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 11);
                            ctx.lineTo(timelineTailPosition - 8, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();

                            ctx.beginPath();
                            ctx.moveTo(timelineHeadPosition, h);
                            ctx.lineTo(timelineTailPosition, h);
                            ctx.lineTo(timelineTailPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h + 2);
                            ctx.lineTo(timelineHeadPosition, h);
                            ctx.fill();
                            ctx.closePath();
                            ctx.stroke();
                        }
                    });

                    h += 30;

                    ctx.beginPath();
                    ctx.strokeStyle = \"#E0E0E0\";
                    ctx.moveTo(0, h - 10);
                    ctx.lineTo(width, h - 10);
                    ctx.closePath();
                    ctx.stroke();
                });

                h = space;

                // For each event, draw the label.
                mainEvents.forEach(function(event) {

                    ctx.fillStyle = \"#444\";
                    ctx.font = \"12px sans-serif\";
                    text = event.name;
                    ms = \"  \" + (event.duration < 1 ? event.duration : parseInt(event.duration, 10)) + \" ms / \" + event.memory + \" MB\";
                    if (x + event.starttime * ratio + ctx.measureText(text + ms).width > width) {
                        ctx.textAlign = \"end\";
                        ctx.font = \"10px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        xc = x + event.endtime * ratio - 1;
                        ctx.fillText(ms, xc, h);

                        xc -= ctx.measureText(ms).width;
                        ctx.font = \"12px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        ctx.fillText(text, xc, h);
                    } else {
                        ctx.textAlign = \"start\";
                        ctx.font = \"13px sans-serif\";
                        ctx.fillStyle = \"#222\";
                        xc = x + event.starttime * ratio + 1;
                        ctx.fillText(text, xc, h);

                        xc += ctx.measureText(text).width;
                        ctx.font = \"11px sans-serif\";
                        ctx.fillStyle = \"#777\";
                        ctx.fillText(ms, xc, h);
                    }

                    h += gapPerEvent;
                });
            };

            this.drawAll = function(width, threshold)
            {
                \"use strict\";

                width = width || getContainerWidth();
                threshold = threshold || this.getThreshold();

                var self = this;

                _requests.forEach(function(request) {
                    self.drawOne(request, _maxRequestTime, threshold, width);
                });
            };

            this.getThreshold = function() {
                var threshold = Sfjs.getPreference(_storagePrefix + 'threshold');

                if (null === threshold) {
                    return _threshold;
                }

                _threshold = parseInt(threshold);

                return _threshold;
            };

            this.setThreshold = function(threshold)
            {
                _threshold = threshold;

                Sfjs.setPreference(_storagePrefix + 'threshold', threshold);

                return this;
            };
        }

        function canvasAutoUpdateOnResizeAndSubmit(e) {
            e.preventDefault();
            canvasManager.drawAll();
        }

        function canvasAutoUpdateOnThresholdChange(e) {
            canvasManager
                .setThreshold(query('input[name=\"threshold\"]').value)
                .drawAll();
        }

        var requests_data = {
            \"max\": {{ \"%F\"|format(collector.events.__section__.endtime) }},
            \"requests\": [
{{ helper.dump_request_data(token, profile, collector.events, collector.events.__section__.origin) }}

{% if profile.children|length %}
                ,
{% for child in profile.children %}
{{ helper.dump_request_data(child.token, child, child.getcollector('time').events, collector.events.__section__.origin) }}{{ loop.last ? '' : ',' }}
{% endfor %}
{% endif %}
            ]
        };

        var canvasManager = new CanvasManager(requests_data.requests, requests_data.max);

        query('input[name=\"threshold\"]').value = canvasManager.getThreshold();
        canvasManager.drawAll();

        // Update the colors of legends.
        var timelineLegends = document.querySelectorAll('.sf-profiler-timeline > .legends > span[data-color]');

        for (var i = 0; i < timelineLegends.length; ++i) {
            var timelineLegend = timelineLegends[i];

            timelineLegend.style.borderLeftColor = timelineLegend.getAttribute('data-color');
        }

        // Bind event handlers
        var elementTimelineControl = query('#timeline-control'),
            elementThresholdControl = query('input[name=\"threshold\"]');

        window.onresize = canvasAutoUpdateOnResizeAndSubmit;
        elementTimelineControl.onsubmit = canvasAutoUpdateOnResizeAndSubmit;

        elementThresholdControl.onclick = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onchange = canvasAutoUpdateOnThresholdChange;
        elementThresholdControl.onkeyup = canvasAutoUpdateOnThresholdChange;

        window.setTimeout(function() {
            canvasAutoUpdateOnThresholdChange(null);
        }, 50);

    //]]>{% endautoescape %}</script>
{% endblock %}

{% macro dump_request_data(token, profile, events, origin) %}
{% autoescape 'js' %}
{% from _self import dump_events %}
                {
                    \"id\": \"{{ token }}\",
                    \"left\": {{ \"%F\"|format(events.__section__.origin - origin) }},
                    \"events\": [
{{ dump_events(events) }}
                    ]
                }
{% endautoescape %}
{% endmacro %}

{% macro dump_events(events) %}
{% autoescape 'js' %}
{% for name, event in events %}
{% if '__section__' != name %}
                        {
                            \"name\": \"{{ name }}\",
                            \"category\": \"{{ event.category }}\",
                            \"origin\": {{ \"%F\"|format(event.origin) }},
                            \"starttime\": {{ \"%F\"|format(event.starttime) }},
                            \"endtime\": {{ \"%F\"|format(event.endtime) }},
                            \"duration\": {{ \"%F\"|format(event.duration) }},
                            \"memory\": {{ \"%.1F\"|format(event.memory / 1024 / 1024) }},
                            \"periods\": [
                                {%- for period in event.periods -%}
                                    {\"start\": {{ \"%F\"|format(period.starttime) }}, \"end\": {{ \"%F\"|format(period.endtime) }}}{{ loop.last ? '' : ', ' }}
                                {%- endfor -%}
                            ]
                        }{{ loop.last ? '' : ',' }}
{% endif %}
{% endfor %}
{% endautoescape %}
{% endmacro %}

{% macro display_timeline(id, events, colors) %}
    <div class=\"sf-profiler-timeline\">
        <div class=\"legends\">
            {% for category, color in colors %}
                <span data-color=\"{{ color }}\">{{ category }}</span>
            {% endfor %}
        </div>
        <canvas width=\"680\" height=\"\" id=\"{{ id }}\" class=\"timeline\"></canvas>
    </div>
{% endmacro %}
", "@WebProfiler/Collector/time.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\time.html.twig");
    }
}

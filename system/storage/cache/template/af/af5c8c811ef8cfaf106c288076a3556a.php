<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* admin/view/template/common/column_left.twig */
class __TwigTemplate_835b1f46fd63d8db7c80e2b76b83e070 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "
<nav id=\"column-left\">
\t<div id=\"navigation\"><span class=\"fa-solid fa-bars\"></span> ";
        // line 3
        yield ($context["text_navigation"] ?? null);
        yield "</div>
\t<ul id=\"menu\">
\t\t";
        // line 5
        $context["i"] = 0;
        // line 6
        yield "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["menus"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
            // line 7
            yield "\t\t\t<li id=\"menu-";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "code", [], "any", false, false, false, 7);
            yield "\">
        ";
            // line 8
            if (CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 8)) {
                // line 9
                yield "\t\t\t\t\t<a href=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "href", [], "any", false, false, false, 9);
                yield "\"><i class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 9);
                yield "\"></i> ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 9);
                yield "</a>
\t\t\t\t";
            } else {
                // line 11
                yield "\t\t\t\t\t<a href=\"#collapse-";
                yield ($context["i"] ?? null);
                yield "\" data-bs-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "icon", [], "any", false, false, false, 11);
                yield "\"></i> ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "name", [], "any", false, false, false, 11);
                yield "</a>
\t\t\t\t";
            }
            // line 13
            yield "\t\t\t\t";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 13)) {
                // line 14
                yield "\t\t\t\t\t<ul id=\"collapse-";
                yield ($context["i"] ?? null);
                yield "\" class=\"collapse\">
\t\t\t\t\t\t";
                // line 15
                $context["j"] = 0;
                // line 16
                yield "\t\t\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["menu"], "children", [], "any", false, false, false, 16));
                foreach ($context['_seq'] as $context["_key"] => $context["children_1"]) {
                    // line 17
                    yield "\t\t\t\t\t\t\t<li>
                ";
                    // line 18
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 18)) {
                        // line 19
                        yield "\t\t\t\t\t\t\t\t\t<a href=\"";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "href", [], "any", false, false, false, 19);
                        yield "\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 19);
                        yield "</a>
\t\t\t\t\t\t\t\t";
                    } else {
                        // line 21
                        yield "\t\t\t\t\t\t\t\t\t<a href=\"#collapse-";
                        yield ($context["i"] ?? null);
                        yield "-";
                        yield ($context["j"] ?? null);
                        yield "\" data-bs-toggle=\"collapse\" class=\"parent collapsed\">";
                        yield CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "name", [], "any", false, false, false, 21);
                        yield "</a>
\t\t\t\t\t\t\t\t";
                    }
                    // line 23
                    yield "\t\t\t\t\t\t\t\t";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 23)) {
                        // line 24
                        yield "\t\t\t\t\t\t\t\t\t<ul id=\"collapse-";
                        yield ($context["i"] ?? null);
                        yield "-";
                        yield ($context["j"] ?? null);
                        yield "\" class=\"collapse\">
                    ";
                        // line 25
                        $context["k"] = 0;
                        // line 26
                        yield "\t\t\t\t\t\t\t\t\t\t";
                        $context['_parent'] = $context;
                        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["children_1"], "children", [], "any", false, false, false, 26));
                        foreach ($context['_seq'] as $context["_key"] => $context["children_2"]) {
                            // line 27
                            yield "\t\t\t\t\t\t\t\t\t\t\t<li>
                        ";
                            // line 28
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 28)) {
                                // line 29
                                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "href", [], "any", false, false, false, 29);
                                yield "\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 29);
                                yield "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            } else {
                                // line 31
                                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#collapse-";
                                yield ($context["i"] ?? null);
                                yield "-";
                                yield ($context["j"] ?? null);
                                yield "-";
                                yield ($context["k"] ?? null);
                                yield "\" data-bs-toggle=\"collapse\" class=\"parent collapsed\">";
                                yield CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "name", [], "any", false, false, false, 31);
                                yield "</a>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 33
                            yield "\t\t\t\t\t\t\t\t\t\t\t\t";
                            if (CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 33)) {
                                // line 34
                                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t<ul id=\"collapse-";
                                yield ($context["i"] ?? null);
                                yield "-";
                                yield ($context["j"] ?? null);
                                yield "-";
                                yield ($context["k"] ?? null);
                                yield "\" class=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                // line 35
                                $context['_parent'] = $context;
                                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["children_2"], "children", [], "any", false, false, false, 35));
                                foreach ($context['_seq'] as $context["_key"] => $context["children_3"]) {
                                    // line 36
                                    yield "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["children_3"], "href", [], "any", false, false, false, 36);
                                    yield "\">";
                                    yield CoreExtension::getAttribute($this->env, $this->source, $context["children_3"], "name", [], "any", false, false, false, 36);
                                    yield "</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                                }
                                $_parent = $context['_parent'];
                                unset($context['_seq'], $context['_key'], $context['children_3'], $context['_parent']);
                                $context = array_intersect_key($context, $_parent) + $_parent;
                                // line 38
                                yield "\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t";
                            }
                            // line 40
                            yield "                      </li>
\t\t\t\t\t\t\t\t\t\t\t";
                            // line 41
                            $context["k"] = (($context["k"] ?? null) + 1);
                            // line 42
                            yield "\t\t\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_key'], $context['children_2'], $context['_parent']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 43
                        yield "\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t";
                    }
                    // line 45
                    yield "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t";
                    // line 46
                    $context["j"] = (($context["j"] ?? null) + 1);
                    // line 47
                    yield "\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['children_1'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 48
                yield "\t\t\t\t\t</ul>
\t\t\t\t";
            }
            // line 50
            yield "\t\t\t</li>
\t\t\t";
            // line 51
            $context["i"] = (($context["i"] ?? null) + 1);
            // line 52
            yield "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['menu'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        yield "\t</ul>
\t";
        // line 54
        if (($context["statistics_status"] ?? null)) {
            // line 55
            yield "\t\t<div id=\"stats\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<div>";
            // line 58
            yield ($context["text_complete_status"] ?? null);
            yield " <span class=\"float-end\">";
            yield ($context["complete_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"";
            // line 60
            yield ($context["complete_status"] ?? null);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            yield ($context["complete_status"] ?? null);
            yield "%\"><span class=\"sr-only\">";
            yield ($context["complete_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div>";
            // line 64
            yield ($context["text_processing_status"] ?? null);
            yield " <span class=\"float-end\">";
            yield ($context["processing_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"";
            // line 66
            yield ($context["processing_status"] ?? null);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            yield ($context["processing_status"] ?? null);
            yield "%\"><span class=\"sr-only\">";
            yield ($context["processing_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div>";
            // line 70
            yield ($context["text_other_status"] ?? null);
            yield " <span class=\"float-end\">";
            yield ($context["other_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"";
            // line 72
            yield ($context["other_status"] ?? null);
            yield "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: ";
            yield ($context["other_status"] ?? null);
            yield "%\"><span class=\"sr-only\">";
            yield ($context["other_status"] ?? null);
            yield "%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t";
        }
        // line 78
        yield "</nav>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/view/template/common/column_left.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  303 => 78,  290 => 72,  283 => 70,  272 => 66,  265 => 64,  254 => 60,  247 => 58,  242 => 55,  240 => 54,  237 => 53,  231 => 52,  229 => 51,  226 => 50,  222 => 48,  216 => 47,  214 => 46,  211 => 45,  207 => 43,  201 => 42,  199 => 41,  196 => 40,  192 => 38,  181 => 36,  177 => 35,  168 => 34,  165 => 33,  153 => 31,  145 => 29,  143 => 28,  140 => 27,  135 => 26,  133 => 25,  126 => 24,  123 => 23,  113 => 21,  105 => 19,  103 => 18,  100 => 17,  95 => 16,  93 => 15,  88 => 14,  85 => 13,  75 => 11,  65 => 9,  63 => 8,  58 => 7,  53 => 6,  51 => 5,  46 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("
<nav id=\"column-left\">
\t<div id=\"navigation\"><span class=\"fa-solid fa-bars\"></span> {{ text_navigation }}</div>
\t<ul id=\"menu\">
\t\t{% set i = 0 %}
\t\t{% for menu in menus %}
\t\t\t<li id=\"menu-{{ menu.code }}\">
        {% if menu.href %}
\t\t\t\t\t<a href=\"{{ menu.href }}\"><i class=\"{{ menu.icon }}\"></i> {{ menu.name }}</a>
\t\t\t\t{% else %}
\t\t\t\t\t<a href=\"#collapse-{{ i }}\" data-bs-toggle=\"collapse\" class=\"parent collapsed\"><i class=\"{{ menu.icon }}\"></i> {{ menu.name }}</a>
\t\t\t\t{% endif %}
\t\t\t\t{% if menu.children %}
\t\t\t\t\t<ul id=\"collapse-{{ i }}\" class=\"collapse\">
\t\t\t\t\t\t{% set j = 0 %}
\t\t\t\t\t\t{% for children_1 in menu.children %}
\t\t\t\t\t\t\t<li>
                {% if children_1.href %}
\t\t\t\t\t\t\t\t\t<a href=\"{{ children_1.href }}\">{{ children_1.name }}</a>
\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t<a href=\"#collapse-{{ i }}-{{ j }}\" data-bs-toggle=\"collapse\" class=\"parent collapsed\">{{ children_1.name }}</a>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t{% if children_1.children %}
\t\t\t\t\t\t\t\t\t<ul id=\"collapse-{{ i }}-{{ j }}\" class=\"collapse\">
                    {% set k = 0 %}
\t\t\t\t\t\t\t\t\t\t{% for children_2 in children_1.children %}
\t\t\t\t\t\t\t\t\t\t\t<li>
                        {% if children_2.href %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"{{ children_2.href }}\">{{ children_2.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<a href=\"#collapse-{{ i }}-{{ j }}-{{ k }}\" data-bs-toggle=\"collapse\" class=\"parent collapsed\">{{ children_2.name }}</a>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t\t\t\t\t\t{% if children_2.children %}
\t\t\t\t\t\t\t\t\t\t\t\t\t<ul id=\"collapse-{{ i }}-{{ j }}-{{ k }}\" class=\"collapse\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% for children_3 in children_2.children %}
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<li><a href=\"{{ children_3.href }}\">{{ children_3.name }}</a></li>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t\t\t\t\t{% endif %}
                      </li>
\t\t\t\t\t\t\t\t\t\t\t{% set k = k + 1 %}
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t\t{% endif %}
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t{% set j = j + 1 %}
\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t</ul>
\t\t\t\t{% endif %}
\t\t\t</li>
\t\t\t{% set i = i + 1 %}
\t\t{% endfor %}
\t</ul>
\t{% if statistics_status %}
\t\t<div id=\"stats\">
\t\t\t<ul>
\t\t\t\t<li>
\t\t\t\t\t<div>{{ text_complete_status }} <span class=\"float-end\">{{ complete_status }}%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-success\" role=\"progressbar\" aria-valuenow=\"{{ complete_status }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ complete_status }}%\"><span class=\"sr-only\">{{ complete_status }}%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div>{{ text_processing_status }} <span class=\"float-end\">{{ processing_status }}%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-warning\" role=\"progressbar\" aria-valuenow=\"{{ processing_status }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ processing_status }}%\"><span class=\"sr-only\">{{ processing_status }}%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<div>{{ text_other_status }} <span class=\"float-end\">{{ other_status }}%</span></div>
\t\t\t\t\t<div class=\"progress\">
\t\t\t\t\t\t<div class=\"progress-bar bg-danger\" role=\"progressbar\" aria-valuenow=\"{{ other_status }}\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width: {{ other_status }}%\"><span class=\"sr-only\">{{ other_status }}%</span></div>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t</ul>
\t\t</div>
\t{% endif %}
</nav>
", "admin/view/template/common/column_left.twig", "C:\\xampp\\htdocs\\opencart\\admin\\view\\template\\common\\column_left.twig");
    }
}

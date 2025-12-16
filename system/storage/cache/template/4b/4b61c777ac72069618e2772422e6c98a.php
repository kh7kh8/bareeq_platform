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

/* catalog/view/template/common/column_right.twig */
class __TwigTemplate_6686732397ec7a6549f93d43f6a4a0da extends Template
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
        if (($context["modules"] ?? null)) {
            // line 2
            yield "<aside id=\"column-right\" class=\"col-md-4 col-lg-3 d-none d-md-block\">
  <div class=\"bareq-side-panel\">
    ";
            // line 4
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 5
                yield "      <div class=\"bareq-side-card\">
        ";
                // line 6
                yield $context["module"];
                yield "
      </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['module'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 9
            yield "  </div>
</aside>
";
        }
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/column_right.twig";
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
        return array (  64 => 9,  55 => 6,  52 => 5,  48 => 4,  44 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% if modules %}
<aside id=\"column-right\" class=\"col-md-4 col-lg-3 d-none d-md-block\">
  <div class=\"bareq-side-panel\">
    {% for module in modules %}
      <div class=\"bareq-side-card\">
        {{ module }}
      </div>
    {% endfor %}
  </div>
</aside>
{% endif %}
", "catalog/view/template/common/column_right.twig", "C:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\common\\column_right.twig");
    }
}

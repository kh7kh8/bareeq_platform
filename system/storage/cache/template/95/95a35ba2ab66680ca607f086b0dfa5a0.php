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

/* catalog/view/template/common/menu.twig */
class __TwigTemplate_002bc1eac050a1efc99c9ca9f10c5b36 extends Template
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
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/common/menu.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array ();
    }

    public function getSourceContext(): Source
    {
        return new Source("{# {% if categories %}
  <div class=\"container\">
    <nav id=\"menu\" class=\"navbar navbar-expand-lg bg-primary\">
      <div id=\"category\" class=\"d-block d-sm-block d-lg-none\">{{ text_category }}</div>
      <button type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbar-menu\" class=\"navbar-toggler d-lg-none\"><i class=\"fa-solid fa-bars\"></i></button>
      <div id=\"navbar-menu\" class=\"collapse navbar-collapse\">
        <ul class=\"nav navbar-nav\">
          {% for category in categories %}
            {% if category.children %}
              {% set total = category.children|length %}
              {% if total > 20 %}  
                {% set batch = (total / 4)|round(0, 'ceil') %}
                {% set column = 4 %}
              {% else %}
                {% set batch = 5 %}
                {% set column = (total / 5)|round(0, 'ceil') %}
              {% endif %}
              <li class=\"nav-item dropdown\"><a href=\"{{ category.href }}\" class=\"nav-link dropdown-toggle\" data-bs-toggle=\"dropdown\">{{ category.name }}</a>
                <div class=\"dropdown-menu dropdown-column-{{ column }}\">
                  <div class=\"dropdown-inner\">
                    {% for children in category.children|batch(batch) %}
                      <ul class=\"list-unstyled\">
                        {% for child in children %}
                          <li><a href=\"{{ child.href }}\" class=\"dropdown-item\">{{ child.name }}</a></li>
                        {% endfor %}
                      </ul>
                    {% endfor %}
                  </div>
                  <ul class=\"list-unstyled\">
                    <li>
                      <hr class=\"dropdown-divider\">
                    </li>
                    <li><a href=\"{{ category.href }}\" class=\"dropdown-item\">{{ text_all }} {{ category.name }}</a></li>
                  </ul>
                </div>
              </li>
            {% else %}
              <li class=\"nav-item\"><a href=\"{{ category.href }}\" class=\"dropdown-item\">{{ category.name }}</a></li>
            {% endif %}
          {% endfor %}
        </ul>
      </div>
    </nav>
  </div>
{% endif %} #}
", "catalog/view/template/common/menu.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\common\\menu.twig");
    }
}

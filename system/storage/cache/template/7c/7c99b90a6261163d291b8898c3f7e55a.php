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

/* catalog/view/template/common/search.twig */
class __TwigTemplate_3df62a08bef58071a903ff8a82b592c0 extends Template
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
        return "catalog/view/template/common/search.twig";
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
        return new Source("{# <form action=\"{{ action }}\" method=\"post\" class=\"input-group mb-3\">
\t<input type=\"text\" name=\"search\" value=\"{{ search }}\" placeholder=\"{{ text_search }}\" class=\"form-control form-control-lg\"/>
\t<button type=\"submit\" class=\"btn btn-light btn-lg\"><i class=\"fa-solid fa-magnifying-glass\"></i></button>
</form> #}
", "catalog/view/template/common/search.twig", "C:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\common\\search.twig");
    }
}

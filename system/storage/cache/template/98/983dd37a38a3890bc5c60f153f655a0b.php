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

/* catalog/view/template/account/forgotten.twig */
class __TwigTemplate_2b9b4af44e646afe3ea45ba96c06b2a5 extends Template
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
        yield ($context["header"] ?? null);
        yield "
<div id=\"account-forgotten\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            yield "      <li class=\"breadcrumb-item\"><a href=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "href", [], "any", false, false, false, 5);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["breadcrumb"], "text", [], "any", false, false, false, 5);
            yield "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['breadcrumb'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        yield "  </ul>

  <div class=\"row\">
    ";
        // line 10
        yield ($context["column_left"] ?? null);
        yield "

    <div id=\"content\" class=\"col\">
      ";
        // line 13
        yield ($context["content_top"] ?? null);
        yield "

      <div class=\"bareq-login-wrapper\">
        <!-- عنوان الصفحة ووصفها -->
        <div class=\"bareq-login-header text-center mb-4\">
          <h1 class=\"bareq-login-title\">";
        // line 18
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <p class=\"bareq-login-subtitle\">
            ";
        // line 20
        yield ($context["text_email"] ?? null);
        yield "
          </p>
        </div>

        <div class=\"row justify-content-center\">
          <div class=\"col-lg-7 col-xl-6\">
            <div class=\"bareq-login-card bareq-login-card--main\">
              <form id=\"form-forgotten\" action=\"";
        // line 27
        yield ($context["confirm"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
                <fieldset class=\"bareq-register-group\">
                  <legend class=\"bareq-register-title\">";
        // line 29
        yield ($context["text_your_email"] ?? null);
        yield "</legend>

                  <div class=\"mb-3\">
                    <label for=\"input-email\" class=\"col-form-label\">";
        // line 32
        yield ($context["entry_email"] ?? null);
        yield "</label>
                    <input type=\"text\"
                           name=\"email\"
                           value=\"\"
                           placeholder=\"";
        // line 36
        yield ($context["entry_email"] ?? null);
        yield "\"
                           id=\"input-email\"
                           class=\"form-control\"
                           required/>
                    <div id=\"error-email\" class=\"invalid-feedback\"></div>
                  </div>
                </fieldset>

                <div class=\"d-flex justify-content-between align-items-center mt-3\">
                  <a href=\"";
        // line 45
        yield ($context["back"] ?? null);
        yield "\" class=\"bareq-link-small\">
                    ";
        // line 46
        yield ($context["button_back"] ?? null);
        yield "
                  </a>

                  <button type=\"submit\" class=\"bareq-btn-main\">
                    ";
        // line 50
        yield ($context["button_continue"] ?? null);
        yield "
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

      ";
        // line 60
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>

    ";
        // line 63
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>
";
        // line 66
        yield ($context["footer"] ?? null);
        yield "
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/account/forgotten.twig";
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
        return array (  163 => 66,  157 => 63,  151 => 60,  138 => 50,  131 => 46,  127 => 45,  115 => 36,  108 => 32,  102 => 29,  97 => 27,  87 => 20,  82 => 18,  74 => 13,  68 => 10,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-forgotten\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>

  <div class=\"row\">
    {{ column_left }}

    <div id=\"content\" class=\"col\">
      {{ content_top }}

      <div class=\"bareq-login-wrapper\">
        <!-- عنوان الصفحة ووصفها -->
        <div class=\"bareq-login-header text-center mb-4\">
          <h1 class=\"bareq-login-title\">{{ heading_title }}</h1>
          <p class=\"bareq-login-subtitle\">
            {{ text_email }}
          </p>
        </div>

        <div class=\"row justify-content-center\">
          <div class=\"col-lg-7 col-xl-6\">
            <div class=\"bareq-login-card bareq-login-card--main\">
              <form id=\"form-forgotten\" action=\"{{ confirm }}\" method=\"post\" data-oc-toggle=\"ajax\">
                <fieldset class=\"bareq-register-group\">
                  <legend class=\"bareq-register-title\">{{ text_your_email }}</legend>

                  <div class=\"mb-3\">
                    <label for=\"input-email\" class=\"col-form-label\">{{ entry_email }}</label>
                    <input type=\"text\"
                           name=\"email\"
                           value=\"\"
                           placeholder=\"{{ entry_email }}\"
                           id=\"input-email\"
                           class=\"form-control\"
                           required/>
                    <div id=\"error-email\" class=\"invalid-feedback\"></div>
                  </div>
                </fieldset>

                <div class=\"d-flex justify-content-between align-items-center mt-3\">
                  <a href=\"{{ back }}\" class=\"bareq-link-small\">
                    {{ button_back }}
                  </a>

                  <button type=\"submit\" class=\"bareq-btn-main\">
                    {{ button_continue }}
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>

      </div>

      {{ content_bottom }}
    </div>

    {{ column_right }}
  </div>
</div>
{{ footer }}
", "catalog/view/template/account/forgotten.twig", "C:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\account\\forgotten.twig");
    }
}

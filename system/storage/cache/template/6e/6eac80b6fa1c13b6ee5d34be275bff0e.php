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

/* catalog/view/template/account/register.twig */
class __TwigTemplate_f3ca7f881115cacf3074b1da9b512f63 extends Template
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
<div id=\"account-register\" class=\"container\">
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

      <div class=\"bareq-login-wrapper bareq-register-wrapper\">
        <!-- رأس الصفحة -->
        <div class=\"bareq-login-header text-center mb-4\">
          <h1 class=\"bareq-login-title\">";
        // line 18
        yield ($context["heading_title"] ?? null);
        yield "</h1>
          <p class=\"bareq-login-subtitle\">
            ";
        // line 20
        yield ($context["text_account_already"] ?? null);
        yield "
          </p>
        </div>

        <div class=\"row justify-content-center\">
          <div class=\"col-lg-9 col-xl-8\">
            <div class=\"bareq-login-card bareq-login-card--main\">
              <form id=\"form-register\" action=\"";
        // line 27
        yield ($context["register"] ?? null);
        yield "\" method=\"post\" data-oc-toggle=\"ajax\">
                <!-- بياناتك الشخصية -->
                <fieldset id=\"account\" class=\"bareq-register-group\">
                  <legend class=\"bareq-register-title\">";
        // line 30
        yield ($context["text_your_details"] ?? null);
        yield "</legend>

                  ";
        // line 32
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), ($context["customer_groups"] ?? null)) > 1)) {
            // line 33
            yield "                    <div class=\"row mb-3\">
                      <label class=\"col-sm-3 col-form-label\">";
            // line 34
            yield ($context["entry_customer_group"] ?? null);
            yield "</label>
                      <div class=\"col-sm-9\">
                        <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\" required>
                          ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["customer_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
                // line 38
                yield "                            <option value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 38);
                yield "\"";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "customer_group_id", [], "any", false, false, false, 38) == ($context["customer_group_id"] ?? null))) {
                    yield " selected";
                }
                yield ">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["customer_group"], "name", [], "any", false, false, false, 38);
                yield "</option>
                          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['customer_group'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            yield "                        </select>
                      </div>
                    </div>
                  ";
        }
        // line 44
        yield "
                  <div class=\"row mb-3\">
                    <label for=\"input-firstname\" class=\"col-sm-3 col-form-label\">";
        // line 46
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 48
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-firstname\" class=\"form-control\" required/>
                      <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label for=\"input-lastname\" class=\"col-sm-3 col-form-label\">";
        // line 54
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 56
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-lastname\" class=\"form-control\" required/>
                      <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label for=\"input-email\" class=\"col-sm-3 col-form-label\">";
        // line 62
        yield ($context["entry_email"] ?? null);
        yield "</label>
                    <div class=\"col-sm-9\">
                      <input type=\"email\" name=\"email\" value=\"\" placeholder=\"";
        // line 64
        yield ($context["entry_email"] ?? null);
        yield "\" id=\"input-email\" class=\"form-control\" required/>
                      <div id=\"error-email\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>

                  ";
        // line 69
        if (($context["config_telephone_display"] ?? null)) {
            // line 70
            yield "                    <div class=\"row mb-3\">
                      <label for=\"input-telephone\" class=\"col-sm-3 col-form-label\">";
            // line 71
            yield ($context["entry_telephone"] ?? null);
            yield "</label>
                      <div class=\"col-sm-9\">
                        <input type=\"tel\" name=\"telephone\" value=\"\" placeholder=\"";
            // line 73
            yield ($context["entry_telephone"] ?? null);
            yield "\" id=\"input-telephone\" class=\"form-control\"";
            if (($context["config_telephone_required"] ?? null)) {
                yield " required";
            }
            yield "/>
                        <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  ";
        }
        // line 78
        yield "
                  ";
        // line 79
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 80
            yield "
                    ";
            // line 81
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 81) == "select")) {
                // line 82
                yield "                      <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 82);
                yield "\">
                        <label for=\"input-custom-field-";
                // line 83
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 83);
                yield "\" class=\"col-sm-3 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 83);
                yield "</label>
                        <div class=\"col-sm-9\">
                          <select name=\"custom_field[";
                // line 85
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85);
                yield "]\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85);
                yield "\" class=\"form-select\">
                            <option value=\"\">";
                // line 86
                yield ($context["text_select"] ?? null);
                yield "</option>
                            ";
                // line 87
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 87));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 88
                    yield "                              <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 88);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 88);
                    yield "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 90
                yield "                          </select>
                          <div id=\"error-custom-field-";
                // line 91
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
            }
            // line 95
            yield "
                    ";
            // line 96
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 96) == "radio")) {
                // line 97
                yield "                      <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 97);
                yield "\">
                        <label class=\"col-sm-3 col-form-label\">";
                // line 98
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 98);
                yield "</label>
                        <div class=\"col-sm-9\">
                          <div id=\"input-custom-field-";
                // line 100
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                yield "\">
                            ";
                // line 101
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 101));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 102
                    yield "                              <div class=\"form-check\">
                                <input type=\"radio\" name=\"custom_field[";
                    // line 103
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 103);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 103);
                    yield "\" id=\"input-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 103);
                    yield "\" class=\"form-check-input\"/>
                                <label for=\"input-custom-value-";
                    // line 104
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 104);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 104);
                    yield "</label>
                              </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 107
                yield "                          </div>
                          <div id=\"error-custom-field-";
                // line 108
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 108);
                yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
            }
            // line 112
            yield "
                    ";
            // line 113
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 113) == "checkbox")) {
                // line 114
                yield "                      <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                yield "\">
                        <label class=\"col-sm-3 col-form-label\">";
                // line 115
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 115);
                yield "</label>
                        <div class=\"col-sm-9\">
                          <div id=\"input-custom-field-";
                // line 117
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 117);
                yield "\">
                            ";
                // line 118
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 118));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 119
                    yield "                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"custom_field[";
                    // line 120
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                    yield "][]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 120);
                    yield "\" id=\"input-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 120);
                    yield "\" class=\"form-check-input\"/>
                                <label for=\"input-custom-value-";
                    // line 121
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 121);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 121);
                    yield "</label>
                              </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 124
                yield "                          </div>
                          <div id=\"error-custom-field-";
                // line 125
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 125);
                yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
            }
            // line 129
            yield "
                    ";
            // line 130
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 130) == "text")) {
                // line 131
                yield "                      <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                yield "\">
                        <label for=\"input-custom-field-";
                // line 132
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 132);
                yield "\" class=\"col-sm-3 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 132);
                yield "</label>
                        <div class=\"col-sm-9\">
                          <input type=\"text\" name=\"custom_field[";
                // line 134
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 134);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 134);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 134);
                yield "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                // line 135
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
            }
            // line 139
            yield "
                    ";
            // line 140
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 140) == "textarea")) {
                // line 141
                yield "                      <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                yield "\">
                        <label for=\"input-custom-field-";
                // line 142
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 142);
                yield "\" class=\"col-sm-3 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 142);
                yield "</label>
                        <div class=\"col-sm-9\">
                          <textarea name=\"custom_field[";
                // line 144
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                yield "]\" rows=\"5\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 144);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 144);
                yield "\" class=\"form-control\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 144);
                yield "</textarea>
                          <div id=\"error-custom-field-";
                // line 145
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 145);
                yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
            }
            // line 149
            yield "
                    ";
            // line 150
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 150) == "file")) {
                // line 151
                yield "                      <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 151);
                yield "\">
                        <label class=\"col-sm-3 col-form-label\">";
                // line 152
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 152);
                yield "</label>
                        <div class=\"col-sm-9\">
                          <div>
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 155
                yield ($context["upload"] ?? null);
                yield "\" data-oc-size-max=\"";
                yield ($context["config_file_max_size"] ?? null);
                yield "\" data-oc-size-error=\"";
                yield ($context["error_upload_size"] ?? null);
                yield "\" data-oc-target=\"#input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                yield "\" class=\"btn btn-light\">
                              <i class=\"fa-solid fa-upload\"></i> ";
                // line 156
                yield ($context["button_upload"] ?? null);
                yield "
                            </button>
                            <input type=\"hidden\" name=\"custom_field[";
                // line 158
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                yield "]\" value=\"\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                yield "\"/>
                          </div>
                          <div id=\"error-custom-field-";
                // line 160
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 160);
                yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
            }
            // line 164
            yield "
                    ";
            // line 165
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 165) == "date")) {
                // line 166
                yield "                      <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                yield "\">
                        <label for=\"input-custom-field-";
                // line 167
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 167);
                yield "\" class=\"col-sm-3 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 167);
                yield "</label>
                        <div class=\"col-sm-9\">
                          <input type=\"date\" name=\"custom_field[";
                // line 169
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 169);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 169);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 169);
                yield "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                // line 170
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 170);
                yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
            }
            // line 174
            yield "
                    ";
            // line 175
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 175) == "time")) {
                // line 176
                yield "                      <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 176);
                yield "\">
                        <label for=\"input-custom-field-";
                // line 177
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 177);
                yield "\" class=\"col-sm-3 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 177);
                yield "</label>
                        <div class=\"col-sm-9\">
                          <input type=\"time\" name=\"custom_field[";
                // line 179
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 179);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 179);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 179);
                yield "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                // line 180
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 180);
                yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
            }
            // line 184
            yield "
                    ";
            // line 185
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 185) == "datetime")) {
                // line 186
                yield "                      <div class=\"row mb-3 custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 186);
                yield "\">
                        <label for=\"input-custom-field-";
                // line 187
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 187);
                yield "\" class=\"col-sm-3 col-form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 187);
                yield "</label>
                        <div class=\"col-sm-9\">
                          <input type=\"datetime-local\" name=\"custom_field[";
                // line 189
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 189);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 189);
                yield "\" id=\"input-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 189);
                yield "\" class=\"form-control\"/>
                          <div id=\"error-custom-field-";
                // line 190
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 190);
                yield "\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    ";
            }
            // line 194
            yield "
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        yield "                </fieldset>

                <!-- كلمة المرور -->
                <fieldset class=\"bareq-register-group\">
                  <legend class=\"bareq-register-title\">";
        // line 200
        yield ($context["text_your_password"] ?? null);
        yield "</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-password\" class=\"col-sm-3 col-form-label\">";
        // line 202
        yield ($context["entry_password"] ?? null);
        yield "</label>
                    <div class=\"col-sm-9\">
                      <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 204
        yield ($context["entry_password"] ?? null);
        yield "\" id=\"input-password\" class=\"form-control\" required/>
                      <div id=\"error-password\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                </fieldset>

                <!-- النشرة -->
                <fieldset class=\"bareq-register-group\">
                  <legend class=\"bareq-register-title\">";
        // line 212
        yield ($context["text_newsletter"] ?? null);
        yield "</legend>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-3 col-form-label\">";
        // line 214
        yield ($context["entry_newsletter"] ?? null);
        yield "</label>
                    <div class=\"col-sm-9\">
                      <x-switch name=\"newsletter\" value=\"1\" input-id=\"input-newsletter\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    </div>
                  </div>
                </fieldset>

                ";
        // line 221
        yield ($context["captcha"] ?? null);
        yield "

                <div class=\"text-start mt-3\">
                  ";
        // line 224
        if (($context["text_agree"] ?? null)) {
            // line 225
            yield "                    <div class=\"mb-3\">
                      <label for=\"input-agree\" class=\"form-check-label me-2\">";
            // line 226
            yield ($context["text_agree"] ?? null);
            yield "</label>
                      <x-switch name=\"agree\" value=\"1\" input-id=\"input-agree\" input-class=\"form-switch form-switch-lg form-check-inline align-top\"></x-switch>
                    </div>
                  ";
        }
        // line 230
        yield "
                  <button type=\"submit\" class=\"bareq-btn-main\">
                    ";
        // line 232
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
        // line 242
        yield ($context["content_bottom"] ?? null);
        yield "
    </div>

    ";
        // line 245
        yield ($context["column_right"] ?? null);
        yield "
  </div>
</div>

<script type=\"text/javascript\"><!--
\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=account/custom_field&customer_group_id=' + this.value + '&language=";
        // line 252
        yield ($context["language"] ?? null);
        yield "',
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');
//--></script>
";
        // line 276
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
        return "catalog/view/template/account/register.twig";
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
        return array (  722 => 276,  695 => 252,  685 => 245,  679 => 242,  666 => 232,  662 => 230,  655 => 226,  652 => 225,  650 => 224,  644 => 221,  634 => 214,  629 => 212,  618 => 204,  613 => 202,  608 => 200,  602 => 196,  595 => 194,  588 => 190,  578 => 189,  571 => 187,  566 => 186,  564 => 185,  561 => 184,  554 => 180,  544 => 179,  537 => 177,  532 => 176,  530 => 175,  527 => 174,  520 => 170,  510 => 169,  503 => 167,  498 => 166,  496 => 165,  493 => 164,  486 => 160,  479 => 158,  474 => 156,  464 => 155,  458 => 152,  453 => 151,  451 => 150,  448 => 149,  441 => 145,  431 => 144,  424 => 142,  419 => 141,  417 => 140,  414 => 139,  407 => 135,  397 => 134,  390 => 132,  385 => 131,  383 => 130,  380 => 129,  373 => 125,  370 => 124,  359 => 121,  351 => 120,  348 => 119,  344 => 118,  340 => 117,  335 => 115,  330 => 114,  328 => 113,  325 => 112,  318 => 108,  315 => 107,  304 => 104,  296 => 103,  293 => 102,  289 => 101,  285 => 100,  280 => 98,  275 => 97,  273 => 96,  270 => 95,  263 => 91,  260 => 90,  249 => 88,  245 => 87,  241 => 86,  235 => 85,  228 => 83,  223 => 82,  221 => 81,  218 => 80,  214 => 79,  211 => 78,  199 => 73,  194 => 71,  191 => 70,  189 => 69,  181 => 64,  176 => 62,  167 => 56,  162 => 54,  153 => 48,  148 => 46,  144 => 44,  138 => 40,  123 => 38,  119 => 37,  113 => 34,  110 => 33,  108 => 32,  103 => 30,  97 => 27,  87 => 20,  82 => 18,  74 => 13,  68 => 10,  63 => 7,  52 => 5,  48 => 4,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ header }}
<div id=\"account-register\" class=\"container\">
  <ul class=\"breadcrumb\">
    {% for breadcrumb in breadcrumbs %}
      <li class=\"breadcrumb-item\"><a href=\"{{ breadcrumb.href }}\">{{ breadcrumb.text }}</a></li>
    {% endfor %}
  </ul>

  <div class=\"row\">
    {{ column_left }}

    <div id=\"content\" class=\"col\">
      {{ content_top }}

      <div class=\"bareq-login-wrapper bareq-register-wrapper\">
        <!-- رأس الصفحة -->
        <div class=\"bareq-login-header text-center mb-4\">
          <h1 class=\"bareq-login-title\">{{ heading_title }}</h1>
          <p class=\"bareq-login-subtitle\">
            {{ text_account_already }}
          </p>
        </div>

        <div class=\"row justify-content-center\">
          <div class=\"col-lg-9 col-xl-8\">
            <div class=\"bareq-login-card bareq-login-card--main\">
              <form id=\"form-register\" action=\"{{ register }}\" method=\"post\" data-oc-toggle=\"ajax\">
                <!-- بياناتك الشخصية -->
                <fieldset id=\"account\" class=\"bareq-register-group\">
                  <legend class=\"bareq-register-title\">{{ text_your_details }}</legend>

                  {% if customer_groups|length > 1 %}
                    <div class=\"row mb-3\">
                      <label class=\"col-sm-3 col-form-label\">{{ entry_customer_group }}</label>
                      <div class=\"col-sm-9\">
                        <select name=\"customer_group_id\" id=\"input-customer-group\" class=\"form-select\" required>
                          {% for customer_group in customer_groups %}
                            <option value=\"{{ customer_group.customer_group_id }}\"{% if customer_group.customer_group_id == customer_group_id %} selected{% endif %}>{{ customer_group.name }}</option>
                          {% endfor %}
                        </select>
                      </div>
                    </div>
                  {% endif %}

                  <div class=\"row mb-3\">
                    <label for=\"input-firstname\" class=\"col-sm-3 col-form-label\">{{ entry_firstname }}</label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"{{ entry_firstname }}\" id=\"input-firstname\" class=\"form-control\" required/>
                      <div id=\"error-firstname\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label for=\"input-lastname\" class=\"col-sm-3 col-form-label\">{{ entry_lastname }}</label>
                    <div class=\"col-sm-9\">
                      <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"{{ entry_lastname }}\" id=\"input-lastname\" class=\"form-control\" required/>
                      <div id=\"error-lastname\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>

                  <div class=\"row mb-3\">
                    <label for=\"input-email\" class=\"col-sm-3 col-form-label\">{{ entry_email }}</label>
                    <div class=\"col-sm-9\">
                      <input type=\"email\" name=\"email\" value=\"\" placeholder=\"{{ entry_email }}\" id=\"input-email\" class=\"form-control\" required/>
                      <div id=\"error-email\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>

                  {% if config_telephone_display %}
                    <div class=\"row mb-3\">
                      <label for=\"input-telephone\" class=\"col-sm-3 col-form-label\">{{ entry_telephone }}</label>
                      <div class=\"col-sm-9\">
                        <input type=\"tel\" name=\"telephone\" value=\"\" placeholder=\"{{ entry_telephone }}\" id=\"input-telephone\" class=\"form-control\"{% if config_telephone_required %} required{% endif %}/>
                        <div id=\"error-telephone\" class=\"invalid-feedback\"></div>
                      </div>
                    </div>
                  {% endif %}

                  {% for custom_field in custom_fields %}

                    {% if custom_field.type == 'select' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-9\">
                          <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                            <option value=\"\">{{ text_select }}</option>
                            {% for custom_field_value in custom_field.custom_field_value %}
                              <option value=\"{{ custom_field_value.custom_field_value_id }}\">{{ custom_field_value.name }}</option>
                            {% endfor %}
                          </select>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'radio' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-9\">
                          <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                            {% for custom_field_value in custom_field.custom_field_value %}
                              <div class=\"form-check\">
                                <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"/>
                                <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'checkbox' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-9\">
                          <div id=\"input-custom-field-{{ custom_field.custom_field_id }}\">
                            {% for custom_field_value in custom_field.custom_field_value %}
                              <div class=\"form-check\">
                                <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"/>
                                <label for=\"input-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                              </div>
                            {% endfor %}
                          </div>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'text' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-9\">
                          <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'textarea' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-9\">
                          <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ custom_field.value }}</textarea>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'file' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-9\">
                          <div>
                            <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\">
                              <i class=\"fa-solid fa-upload\"></i> {{ button_upload }}
                            </button>
                            <input type=\"hidden\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\"/>
                          </div>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'date' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-9\">
                          <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'time' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-9\">
                          <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                    {% if custom_field.type == 'datetime' %}
                      <div class=\"row mb-3 custom-field custom-field-{{ custom_field.custom_field_id }}\">
                        <label for=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"col-sm-3 col-form-label\">{{ custom_field.name }}</label>
                        <div class=\"col-sm-9\">
                          <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
                          <div id=\"error-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
                        </div>
                      </div>
                    {% endif %}

                  {% endfor %}
                </fieldset>

                <!-- كلمة المرور -->
                <fieldset class=\"bareq-register-group\">
                  <legend class=\"bareq-register-title\">{{ text_your_password }}</legend>
                  <div class=\"row mb-3\">
                    <label for=\"input-password\" class=\"col-sm-3 col-form-label\">{{ entry_password }}</label>
                    <div class=\"col-sm-9\">
                      <input type=\"password\" name=\"password\" value=\"\" placeholder=\"{{ entry_password }}\" id=\"input-password\" class=\"form-control\" required/>
                      <div id=\"error-password\" class=\"invalid-feedback\"></div>
                    </div>
                  </div>
                </fieldset>

                <!-- النشرة -->
                <fieldset class=\"bareq-register-group\">
                  <legend class=\"bareq-register-title\">{{ text_newsletter }}</legend>
                  <div class=\"row mb-3\">
                    <label class=\"col-sm-3 col-form-label\">{{ entry_newsletter }}</label>
                    <div class=\"col-sm-9\">
                      <x-switch name=\"newsletter\" value=\"1\" input-id=\"input-newsletter\" input-class=\"form-switch form-switch-lg\"></x-switch>
                    </div>
                  </div>
                </fieldset>

                {{ captcha }}

                <div class=\"text-start mt-3\">
                  {% if text_agree %}
                    <div class=\"mb-3\">
                      <label for=\"input-agree\" class=\"form-check-label me-2\">{{ text_agree }}</label>
                      <x-switch name=\"agree\" value=\"1\" input-id=\"input-agree\" input-class=\"form-switch form-switch-lg form-check-inline align-top\"></x-switch>
                    </div>
                  {% endif %}

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

<script type=\"text/javascript\"><!--
\$('#input-customer-group').on('change', function() {
    \$.ajax({
        url: 'index.php?route=account/custom_field&customer_group_id=' + this.value + '&language={{ language }}',
        dataType: 'json',
        success: function(json) {
            \$('.custom-field').hide();
            \$('.custom-field').removeClass('required');

            for (i = 0; i < json.length; i++) {
                custom_field = json[i];

                \$('.custom-field-' + custom_field['custom_field_id']).show();

                if (custom_field['required']) {
                    \$('.custom-field-' + custom_field['custom_field_id']).addClass('required');
                }
            }
        },
        error: function(xhr, ajaxOptions, thrownError) {
            console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
        }
    });
});

\$('#input-customer-group').trigger('change');
//--></script>
{{ footer }}
", "catalog/view/template/account/register.twig", "C:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\account\\register.twig");
    }
}

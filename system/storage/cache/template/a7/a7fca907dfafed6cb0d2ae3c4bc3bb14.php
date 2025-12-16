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

/* catalog/view/template/checkout/payment_address.twig */
class __TwigTemplate_a782c9afdbc1fd9ba8e5ec06b590096c extends Template
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
        yield "<fieldset>
  <legend>";
        // line 2
        yield ($context["heading_title"] ?? null);
        yield "</legend>
  <div id=\"payment-addresses\" style=\"display: ";
        // line 3
        if (($context["addresses"] ?? null)) {
            yield "block";
        } else {
            yield "none";
        }
        yield ";\">
    <div class=\"form-check\">
      <input type=\"radio\" name=\"payment_existing\" value=\"1\" id=\"input-payment-existing\" class=\"form-check-input\"";
        // line 5
        if (($context["addresses"] ?? null)) {
            yield " checked";
        }
        yield "/>
      <label for=\"input-payment-existing\" class=\"form-check-label\">";
        // line 6
        yield ($context["text_address_existing"] ?? null);
        yield "</label>
    </div>
    <div class=\"form-check\">
      <input type=\"radio\" name=\"payment_existing\" value=\"0\" id=\"input-payment-new\" class=\"form-check-input\"";
        // line 9
        if ( !($context["addresses"] ?? null)) {
            yield " checked";
        }
        yield ">
      <label for=\"input-payment-new\" class=\"form-check-label\">";
        // line 10
        yield ($context["text_address_new"] ?? null);
        yield "</label>
    </div>
  </div>
  <div id=\"payment-existing\" style=\"display: ";
        // line 13
        if (($context["addresses"] ?? null)) {
            yield "block";
        } else {
            yield "none";
        }
        yield ";\">
    <select name=\"address_id\" id=\"input-payment-address\" class=\"form-select\">
      <option value=\"\">";
        // line 15
        yield ($context["text_select"] ?? null);
        yield "</option>
      ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["addresses"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
            // line 17
            yield "        <option value=\"";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 17);
            yield "\"";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_id", [], "any", false, false, false, 17) == ($context["address_id"] ?? null))) {
                yield " selected";
            }
            yield ">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "firstname", [], "any", false, false, false, 17);
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "lastname", [], "any", false, false, false, 17);
            yield ",";
            if (CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 17)) {
                yield " ";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "company", [], "any", false, false, false, 17);
                yield ",";
            }
            yield " ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "address_1", [], "any", false, false, false, 17);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "city", [], "any", false, false, false, 17);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "zone", [], "any", false, false, false, 17);
            yield ", ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["address"], "country", [], "any", false, false, false, 17);
            yield "</option>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['address'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        yield "    </select>
    <div id=\"error-payment-address\" class=\"invalid-feedback\"></div>
  </div>
  <br/>
  <div id=\"payment-new\" style=\"display: ";
        // line 23
        if ( !($context["addresses"] ?? null)) {
            yield "block";
        } else {
            yield "none";
        }
        yield ";\">
    <form id=\"form-payment-address\">
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3\">
          <label for=\"input-payment-firstname\" class=\"form-label\">";
        // line 27
        yield ($context["entry_firstname"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 28
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-payment-firstname\" class=\"form-control\" required/>
          <div id=\"error-payment-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-lastname\" class=\"form-label\">";
        // line 32
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 33
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-payment-lastname\" class=\"form-control\" required/>
          <div id=\"error-payment-lastname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-company\" class=\"form-label\">";
        // line 37
        yield ($context["entry_company"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 38
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-payment-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-1\" class=\"form-label\">";
        // line 41
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 42
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-payment-address-1\" class=\"form-control\" required/>
          <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-2\" class=\"form-label\">";
        // line 46
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 47
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-payment-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-city\" class=\"form-label\">";
        // line 50
        yield ($context["entry_city"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 51
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-payment-city\" class=\"form-control\" required/>
          <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-postcode\" class=\"form-label\">";
        // line 55
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"postcode\" value=\"\" placeholder=\"";
        // line 56
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-payment-postcode\" class=\"form-control\" required/>
          <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-country\" class=\"form-label\">";
        // line 60
        yield ($context["entry_country"] ?? null);
        yield "</label>
          <x-country name=\"country_id\" value=\"";
        // line 61
        yield ($context["country_id"] ?? null);
        yield "\" id=\"x-payment-country\" postcode=\"1\" target=\"input-payment-postcode\" input-id=\"input-payment-country\" input-class=\"form-select\" required>
            <option value=\"0\">";
        // line 62
        yield ($context["text_select"] ?? null);
        yield "</option>
          </x-country>
          <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-zone\" class=\"form-label\">";
        // line 67
        yield ($context["entry_zone"] ?? null);
        yield "</label>
          <x-zone name=\"zone_id\" value=\"";
        // line 68
        yield ($context["zone_id"] ?? null);
        yield "\" target=\"x-payment-country\" input-id=\"input-payment-zone\" input-class=\"form-select\" required>
            <option value=\"0\">";
        // line 69
        yield ($context["text_select"] ?? null);
        yield "</option>
          </x-zone>
          <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
        </div>

        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 75
            yield "          ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 75) == "select")) {
                // line 76
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 76)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 76);
                yield "\">
              <label for=\"input-payment-custom-field-";
                // line 77
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 77);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 77);
                yield "</label>
              <select name=\"custom_field[";
                // line 78
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78);
                yield "]\" id=\"input-payment-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78);
                yield "\" class=\"form-select\">
                <option value=\"\">";
                // line 79
                yield ($context["text_select"] ?? null);
                yield "</option>
                ";
                // line 80
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 80));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 81
                    yield "                  <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 81);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 81);
                    yield "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 83
                yield "              </select>
              <div id=\"error-payment-custom-field-";
                // line 84
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 84);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 87
            yield "
          ";
            // line 88
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 88) == "radio")) {
                // line 89
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 89)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 89);
                yield "\">
              <label class=\"form-label\">";
                // line 90
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 90);
                yield "</label>
              <div id=\"input-payment-custom-field-";
                // line 91
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 91);
                yield "\">
                ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 92));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 93
                    yield "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                    // line 94
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 94);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 94);
                    yield "\" id=\"input-payment-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 94);
                    yield "\" class=\"form-check-input\"/>
                    <label for=\"input-payment-custom-value-";
                    // line 95
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 95);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 95);
                    yield "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 98
                yield "              </div>
              <div id=\"error-payment-custom-field-";
                // line 99
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 99);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 102
            yield "
          ";
            // line 103
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 103) == "checkbox")) {
                // line 104
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 104)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 104);
                yield "\">
              <label class=\"form-label\">";
                // line 105
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 105);
                yield "</label>
              <div id=\"input-payment-custom-field-";
                // line 106
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 106);
                yield "\">
                ";
                // line 107
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 107));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 108
                    yield "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                    // line 109
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 109);
                    yield "][]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 109);
                    yield "\" id=\"input-payment-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 109);
                    yield "\" class=\"form-check-input\"/>
                    <label for=\"input-payment-custom-value-";
                    // line 110
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 110);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 110);
                    yield "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                yield "              </div>
              <div id=\"error-payment-custom-field-";
                // line 114
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 114);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 117
            yield "
          ";
            // line 118
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 118) == "text")) {
                // line 119
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 119)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 119);
                yield "\">
              <label for=\"input-payment-custom-field-";
                // line 120
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 120);
                yield "</label>
              <input type=\"text\" name=\"custom_field[";
                // line 121
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 121);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 121);
                yield "\" id=\"input-payment-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                yield "\" class=\"form-control\"/>
              <div id=\"error-payment-custom-field-";
                // line 122
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 125
            yield "
          ";
            // line 126
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 126) == "textarea")) {
                // line 127
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 127)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 127);
                yield "\">
              <label for=\"input-payment-custom-field-";
                // line 128
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 128);
                yield "</label>
              <textarea name=\"custom_field[";
                // line 129
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                yield "]\" rows=\"5\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 129);
                yield "\" id=\"input-payment-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                yield "\" class=\"form-control\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 129);
                yield "</textarea>
              <div id=\"error-payment-custom-field-";
                // line 130
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 133
            yield "
          ";
            // line 134
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 134) == "file")) {
                // line 135
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 135)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 135);
                yield "\">
              <label class=\"form-label\">";
                // line 136
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 136);
                yield "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 138
                yield ($context["upload"] ?? null);
                yield "\" data-oc-size-max=\"";
                yield ($context["config_file_max_size"] ?? null);
                yield "\" data-oc-size-error=\"";
                yield ($context["error_upload_size"] ?? null);
                yield "\" data-oc-target=\"#input-payment-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 138);
                yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                yield ($context["button_upload"] ?? null);
                yield "</button>
                <input type=\"hidden\" name=\"custom_field[";
                // line 139
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                yield "]\" value=\"\" id=\"input-payment-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                yield "\"/>
              </div>
              <div id=\"error-payment-custom-field-";
                // line 141
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 144
            yield "
          ";
            // line 145
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 145) == "date")) {
                // line 146
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 146)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 146);
                yield "\">
              <label for=\"input-payment-custom-field-";
                // line 147
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 147);
                yield "</label>
              <input type=\"date\" name=\"custom_field[";
                // line 148
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 148);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 148);
                yield "\" id=\"input-payment-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                yield "\" class=\"form-control\"/>
              <div id=\"error-payment-custom-field-";
                // line 149
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 152
            yield "
          ";
            // line 153
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 153) == "time")) {
                // line 154
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 154)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 154);
                yield "\">
              <label for=\"input-payment-custom-field-";
                // line 155
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 155);
                yield "</label>
              <input type=\"time\" name=\"custom_field[";
                // line 156
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 156);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 156);
                yield "\" id=\"input-payment-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                yield "\" class=\"form-control\"/>
              <div id=\"error-payment-custom-field-";
                // line 157
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 160
            yield "
          ";
            // line 161
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 161) == "datetime")) {
                // line 162
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 162)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 162);
                yield "\">
              <label for=\"input-payment-custom-field-";
                // line 163
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 163);
                yield "</label>
              <input type=\"datetime-local\" name=\"custom_field[";
                // line 164
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 164);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 164);
                yield "\" id=\"input-payment-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                yield "\" class=\"form-control\"/>
              <div id=\"error-payment-custom-field-";
                // line 165
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 168
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 170
        yield "      </div>
      <div class=\"text-end mb-3\">
        <button type=\"submit\" id=\"button-payment-address\" class=\"btn btn-primary\">";
        // line 172
        yield ($context["button_continue"] ?? null);
        yield "</button>
      </div>
    </form>
  </div>
</fieldset>
<script type=\"text/javascript\"><!--
\$('input[name=\\'payment_existing\\']').on('change', function() {
    if (\$(this).val() == 1) {
        \$('#payment-existing').show();
        \$('#payment-new').hide();
    } else {
        \$('#payment-existing').hide();
        \$('#payment-new').show();
    }
});

// Existing Payment Address
\$('#input-payment-address').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_address.address&language=";
        // line 194
        yield ($context["language"] ?? null);
        yield "&address_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
            },
            success: function(json) {
                console.log(json);

                \$('#input-payment-address').removeClass('is-invalid');
                \$('#error-payment-address').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#input-payment-address').addClass('is-invalid');
                    \$('#error-payment-address').html(json['error']).addClass('d-block');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-shipping-method').val('');
                    \$('#input-payment-method').val('');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 223
        yield ($context["language"] ?? null);
        yield "');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// New Payment Address
\$('#form-payment-address').on('submit', function(e) {
    e.preventDefault();

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_address.save&language=";
        // line 239
        yield ($context["language"] ?? null);
        yield "',
            type: 'post',
            data: \$('#form-payment-address').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-payment-address').button('loading');
            },
            complete: function() {
                \$('#button-payment-address').button('reset');
            },
            success: function(json) {
                console.log(json);

                \$('#form-payment-address').find('.is-invalid').removeClass('is-invalid');
                \$('#form-payment-address').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (i in json['error']) {
                        for (key in json['error']) {
                            \$('#input-payment-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                            \$('#error-payment-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                        }
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#form-payment-address')[0].reset();

                    var html = '<option value=\"\">";
        // line 278
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

                    if (json['addresses']) {
                        for (i in json['addresses']) {
                            html += '<option value=\"' + json['addresses'][i]['address_id'] + '\">' + json['addresses'][i]['firstname'] + ' ' + json['addresses'][i]['lastname'] + ', ' + (json['addresses'][i]['company'] ? json['addresses'][i]['company'] + ', ' : '') + json['addresses'][i]['address_1'] + ', ' + json['addresses'][i]['city'] + ', ' + json['addresses'][i]['zone'] + ', ' + json['addresses'][i]['country'] + '</option>';
                        }
                    }

                    // Payment Address
                    \$('#input-payment-address').html(html);

                    \$('#input-payment-address').val(json['address_id']);

                    \$('#payment-addresses').css({display: 'block'});

                    \$('#input-payment-existing').trigger('click');

                    // Shipping Address
                    var shipping_address_id = \$('#input-shipping-address').val();

                    \$('#input-shipping-address').html(html);

                    if (shipping_address_id) {
                        \$('#input-shipping-address').val(shipping_address_id);
                    }

                    \$('#shipping-address').css({display: 'block'});
                    \$('#shipping-addresses').css({display: 'block'});

                    \$('#input-shipping-existing').trigger('click');

                    \$('#input-shipping-method').val('');
                    \$('#input-payment-method').val('');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 312
        yield ($context["language"] ?? null);
        yield "');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});
//--></script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "catalog/view/template/checkout/payment_address.twig";
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
        return array (  814 => 312,  777 => 278,  735 => 239,  716 => 223,  684 => 194,  659 => 172,  655 => 170,  648 => 168,  642 => 165,  632 => 164,  626 => 163,  617 => 162,  615 => 161,  612 => 160,  606 => 157,  596 => 156,  590 => 155,  581 => 154,  579 => 153,  576 => 152,  570 => 149,  560 => 148,  554 => 147,  545 => 146,  543 => 145,  540 => 144,  534 => 141,  527 => 139,  515 => 138,  510 => 136,  501 => 135,  499 => 134,  496 => 133,  490 => 130,  480 => 129,  474 => 128,  465 => 127,  463 => 126,  460 => 125,  454 => 122,  444 => 121,  438 => 120,  429 => 119,  427 => 118,  424 => 117,  418 => 114,  415 => 113,  404 => 110,  396 => 109,  393 => 108,  389 => 107,  385 => 106,  381 => 105,  372 => 104,  370 => 103,  367 => 102,  361 => 99,  358 => 98,  347 => 95,  339 => 94,  336 => 93,  332 => 92,  328 => 91,  324 => 90,  315 => 89,  313 => 88,  310 => 87,  304 => 84,  301 => 83,  290 => 81,  286 => 80,  282 => 79,  276 => 78,  270 => 77,  261 => 76,  258 => 75,  254 => 74,  246 => 69,  242 => 68,  238 => 67,  230 => 62,  226 => 61,  222 => 60,  215 => 56,  211 => 55,  204 => 51,  200 => 50,  194 => 47,  190 => 46,  183 => 42,  179 => 41,  173 => 38,  169 => 37,  162 => 33,  158 => 32,  151 => 28,  147 => 27,  136 => 23,  130 => 19,  99 => 17,  95 => 16,  91 => 15,  82 => 13,  76 => 10,  70 => 9,  64 => 6,  58 => 5,  49 => 3,  45 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<fieldset>
  <legend>{{ heading_title }}</legend>
  <div id=\"payment-addresses\" style=\"display: {% if addresses %}block{% else %}none{% endif %};\">
    <div class=\"form-check\">
      <input type=\"radio\" name=\"payment_existing\" value=\"1\" id=\"input-payment-existing\" class=\"form-check-input\"{% if addresses %} checked{% endif %}/>
      <label for=\"input-payment-existing\" class=\"form-check-label\">{{ text_address_existing }}</label>
    </div>
    <div class=\"form-check\">
      <input type=\"radio\" name=\"payment_existing\" value=\"0\" id=\"input-payment-new\" class=\"form-check-input\"{% if not addresses %} checked{% endif %}>
      <label for=\"input-payment-new\" class=\"form-check-label\">{{ text_address_new }}</label>
    </div>
  </div>
  <div id=\"payment-existing\" style=\"display: {% if addresses %}block{% else %}none{% endif %};\">
    <select name=\"address_id\" id=\"input-payment-address\" class=\"form-select\">
      <option value=\"\">{{ text_select }}</option>
      {% for address in addresses %}
        <option value=\"{{ address.address_id }}\"{% if address.address_id == address_id %} selected{% endif %}>{{ address.firstname }} {{ address.lastname }},{% if address.company %} {{ address.company }},{% endif %} {{ address.address_1 }}, {{ address.city }}, {{ address.zone }}, {{ address.country }}</option>
      {% endfor %}
    </select>
    <div id=\"error-payment-address\" class=\"invalid-feedback\"></div>
  </div>
  <br/>
  <div id=\"payment-new\" style=\"display: {% if not addresses %}block{% else %}none{% endif %};\">
    <form id=\"form-payment-address\">
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3\">
          <label for=\"input-payment-firstname\" class=\"form-label\">{{ entry_firstname }}</label>
          <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"{{ entry_firstname }}\" id=\"input-payment-firstname\" class=\"form-control\" required/>
          <div id=\"error-payment-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-lastname\" class=\"form-label\">{{ entry_lastname }}</label>
          <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"{{ entry_lastname }}\" id=\"input-payment-lastname\" class=\"form-control\" required/>
          <div id=\"error-payment-lastname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-company\" class=\"form-label\">{{ entry_company }}</label>
          <input type=\"text\" name=\"company\" value=\"\" placeholder=\"{{ entry_company }}\" id=\"input-payment-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-1\" class=\"form-label\">{{ entry_address_1 }}</label>
          <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"{{ entry_address_1 }}\" id=\"input-payment-address-1\" class=\"form-control\" required/>
          <div id=\"error-payment-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-address-2\" class=\"form-label\">{{ entry_address_2 }}</label>
          <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"{{ entry_address_2 }}\" id=\"input-payment-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-city\" class=\"form-label\">{{ entry_city }}</label>
          <input type=\"text\" name=\"city\" value=\"\" placeholder=\"{{ entry_city }}\" id=\"input-payment-city\" class=\"form-control\" required/>
          <div id=\"error-payment-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-postcode\" class=\"form-label\">{{ entry_postcode }}</label>
          <input type=\"text\" name=\"postcode\" value=\"\" placeholder=\"{{ entry_postcode }}\" id=\"input-payment-postcode\" class=\"form-control\" required/>
          <div id=\"error-payment-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-country\" class=\"form-label\">{{ entry_country }}</label>
          <x-country name=\"country_id\" value=\"{{ country_id }}\" id=\"x-payment-country\" postcode=\"1\" target=\"input-payment-postcode\" input-id=\"input-payment-country\" input-class=\"form-select\" required>
            <option value=\"0\">{{ text_select }}</option>
          </x-country>
          <div id=\"error-payment-country\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-payment-zone\" class=\"form-label\">{{ entry_zone }}</label>
          <x-zone name=\"zone_id\" value=\"{{ zone_id }}\" target=\"x-payment-country\" input-id=\"input-payment-zone\" input-class=\"form-select\" required>
            <option value=\"0\">{{ text_select }}</option>
          </x-zone>
          <div id=\"error-payment-zone\" class=\"invalid-feedback\"></div>
        </div>

        {% for custom_field in custom_fields %}
          {% if custom_field.type == 'select' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                <option value=\"\">{{ text_select }}</option>
                {% for custom_field_value in custom_field.custom_field_value %}
                  <option value=\"{{ custom_field_value.custom_field_value_id }}\">{{ custom_field_value.name }}</option>
                {% endfor %}
              </select>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'radio' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"/>
                    <label for=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'checkbox' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"/>
                    <label for=\"input-payment-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'text' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'textarea' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ custom_field.value }}</textarea>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'file' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                <input type=\"hidden\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\"/>
              </div>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'date' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'time' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'datetime' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-payment-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

        {% endfor %}
      </div>
      <div class=\"text-end mb-3\">
        <button type=\"submit\" id=\"button-payment-address\" class=\"btn btn-primary\">{{ button_continue }}</button>
      </div>
    </form>
  </div>
</fieldset>
<script type=\"text/javascript\"><!--
\$('input[name=\\'payment_existing\\']').on('change', function() {
    if (\$(this).val() == 1) {
        \$('#payment-existing').show();
        \$('#payment-new').hide();
    } else {
        \$('#payment-existing').hide();
        \$('#payment-new').show();
    }
});

// Existing Payment Address
\$('#input-payment-address').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_address.address&language={{ language }}&address_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
            },
            success: function(json) {
                console.log(json);

                \$('#input-payment-address').removeClass('is-invalid');
                \$('#error-payment-address').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#input-payment-address').addClass('is-invalid');
                    \$('#error-payment-address').html(json['error']).addClass('d-block');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-shipping-method').val('');
                    \$('#input-payment-method').val('');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language={{ language }}');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});

// New Payment Address
\$('#form-payment-address').on('submit', function(e) {
    e.preventDefault();

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/payment_address.save&language={{ language }}',
            type: 'post',
            data: \$('#form-payment-address').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-payment-address').button('loading');
            },
            complete: function() {
                \$('#button-payment-address').button('reset');
            },
            success: function(json) {
                console.log(json);

                \$('#form-payment-address').find('.is-invalid').removeClass('is-invalid');
                \$('#form-payment-address').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (i in json['error']) {
                        for (key in json['error']) {
                            \$('#input-payment-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                            \$('#error-payment-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                        }
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#form-payment-address')[0].reset();

                    var html = '<option value=\"\">{{ text_select|escape('js') }}</option>';

                    if (json['addresses']) {
                        for (i in json['addresses']) {
                            html += '<option value=\"' + json['addresses'][i]['address_id'] + '\">' + json['addresses'][i]['firstname'] + ' ' + json['addresses'][i]['lastname'] + ', ' + (json['addresses'][i]['company'] ? json['addresses'][i]['company'] + ', ' : '') + json['addresses'][i]['address_1'] + ', ' + json['addresses'][i]['city'] + ', ' + json['addresses'][i]['zone'] + ', ' + json['addresses'][i]['country'] + '</option>';
                        }
                    }

                    // Payment Address
                    \$('#input-payment-address').html(html);

                    \$('#input-payment-address').val(json['address_id']);

                    \$('#payment-addresses').css({display: 'block'});

                    \$('#input-payment-existing').trigger('click');

                    // Shipping Address
                    var shipping_address_id = \$('#input-shipping-address').val();

                    \$('#input-shipping-address').html(html);

                    if (shipping_address_id) {
                        \$('#input-shipping-address').val(shipping_address_id);
                    }

                    \$('#shipping-address').css({display: 'block'});
                    \$('#shipping-addresses').css({display: 'block'});

                    \$('#input-shipping-existing').trigger('click');

                    \$('#input-shipping-method').val('');
                    \$('#input-payment-method').val('');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language={{ language }}');
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
            }
        });
    });
});
//--></script>
", "catalog/view/template/checkout/payment_address.twig", "C:\\xampp\\htdocs\\opencart\\catalog\\view\\template\\checkout\\payment_address.twig");
    }
}

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

/* catalog/view/template/checkout/shipping_address.twig */
class __TwigTemplate_d002a913acc6c59f60ead14d494c4f4a extends Template
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
        yield "<fieldset id=\"shipping-address\" style=\"display: ";
        if ((($context["payment_address_required"] ?? null) &&  !($context["addresses"] ?? null))) {
            yield "none";
        } else {
            yield "block";
        }
        yield ";\">
  <legend>";
        // line 2
        yield ($context["heading_title"] ?? null);
        yield "</legend>
  <div id=\"shipping-addresses\" style=\"display: ";
        // line 3
        if (($context["addresses"] ?? null)) {
            yield "block";
        } else {
            yield "none";
        }
        yield ";\">
    <div class=\"form-check\">
      <input type=\"radio\" name=\"shipping_existing\" value=\"1\" id=\"input-shipping-existing\" class=\"form-check-input\"";
        // line 5
        if (($context["addresses"] ?? null)) {
            yield " checked";
        }
        yield "/>
      <label for=\"input-shipping-existing\" class=\"form-check-label\">";
        // line 6
        yield ($context["text_address_existing"] ?? null);
        yield "</label>
    </div>
    <div class=\"form-check\">
      <input type=\"radio\" name=\"shipping_existing\" value=\"0\" id=\"input-shipping-new\" class=\"form-check-input\"";
        // line 9
        if ( !($context["addresses"] ?? null)) {
            yield " checked";
        }
        yield "/>
      <label for=\"input-shipping-new\" class=\"form-check-label\">";
        // line 10
        yield ($context["text_address_new"] ?? null);
        yield "</label>
    </div>
  </div>
  <div id=\"shipping-existing\" style=\"display: ";
        // line 13
        if (($context["addresses"] ?? null)) {
            yield "block";
        } else {
            yield "none";
        }
        yield ";\">
    <select name=\"address_id\" id=\"input-shipping-address\" class=\"form-select\">
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
    <div id=\"error-shipping-address\" class=\"invalid-feedback\"></div>
  </div>
  <br/>
  <div id=\"shipping-new\" style=\"display: ";
        // line 23
        if ( !($context["addresses"] ?? null)) {
            yield "block";
        } else {
            yield "none";
        }
        yield ";\">
    <form id=\"form-shipping-address\">
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3\">
          <label for=\"input-shipping-firstname\" class=\"form-label\">";
        // line 27
        yield ($context["entry_firstname"] ?? null);
        yield "</label >
          <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 28
        yield ($context["entry_firstname"] ?? null);
        yield "\" id=\"input-shipping-firstname\" class=\"form-control\" required/>
          <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-lastname\" class=\"form-label\">";
        // line 32
        yield ($context["entry_lastname"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 33
        yield ($context["entry_lastname"] ?? null);
        yield "\" id=\"input-shipping-lastname\" class=\"form-control\" required/>
          <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-company\" class=\"form-label\">";
        // line 37
        yield ($context["entry_company"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 38
        yield ($context["entry_company"] ?? null);
        yield "\" id=\"input-shipping-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-address-1\" class=\"form-label\">";
        // line 41
        yield ($context["entry_address_1"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 42
        yield ($context["entry_address_1"] ?? null);
        yield "\" id=\"input-shipping-address-1\" class=\"form-control\" required/>
          <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-address-2\" class=\"form-label\">";
        // line 46
        yield ($context["entry_address_2"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 47
        yield ($context["entry_address_2"] ?? null);
        yield "\" id=\"input-shipping-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-city\" class=\"form-label\">";
        // line 50
        yield ($context["entry_city"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 51
        yield ($context["entry_city"] ?? null);
        yield "\" id=\"input-shipping-city\" class=\"form-control\" required/>
          <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-postcode\" class=\"form-label\">";
        // line 55
        yield ($context["entry_postcode"] ?? null);
        yield "</label>
          <input type=\"text\" name=\"postcode\" value=\"";
        // line 56
        yield ($context["postcode"] ?? null);
        yield "\" placeholder=\"";
        yield ($context["entry_postcode"] ?? null);
        yield "\" id=\"input-shipping-postcode\" class=\"form-control\" required/>
          <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-country\" class=\"form-label\">";
        // line 60
        yield ($context["entry_country"] ?? null);
        yield "</label>
          <x-country name=\"country_id\" value=\"";
        // line 61
        yield ($context["country_id"] ?? null);
        yield "\" id=\"x-shipping-country\" postcode=\"1\" target=\"input-shipping-postcode\" input-id=\"input-shipping-country\" input-class=\"form-select\" required>
            <option value=\"0\">";
        // line 62
        yield ($context["text_select"] ?? null);
        yield "</option>
          </x-country>
          <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-zone\" class=\"form-label\">";
        // line 67
        yield ($context["entry_zone"] ?? null);
        yield "</label>
          <x-zone name=\"zone_id\" value=\"";
        // line 68
        yield ($context["zone_id"] ?? null);
        yield "\" target=\"x-shipping-country\" input-id=\"input-shipping-zone\" input-class=\"form-select\" required>
            <option value=\"0\">";
        // line 69
        yield ($context["text_select"] ?? null);
        yield "</option>
          </x-zone>
          <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
        </div>

        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["custom_fields"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 75
            yield "
          ";
            // line 76
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 76) == "select")) {
                // line 77
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 77)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 77);
                yield "\">
              <label for=\"input-shipping-custom-field-";
                // line 78
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 78);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 78);
                yield "</label>
              <select name=\"custom_field[";
                // line 79
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 79);
                yield "]\" id=\"input-shipping-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 79);
                yield "\" class=\"form-select\">
                <option value=\"\">";
                // line 80
                yield ($context["text_select"] ?? null);
                yield "</option>
                ";
                // line 81
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 81));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 82
                    yield "                  <option value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 82);
                    yield "\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 82);
                    yield "</option>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 84
                yield "              </select>
              <div id=\"error-shipping-custom-field-";
                // line 85
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 85);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 88
            yield "
          ";
            // line 89
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 89) == "radio")) {
                // line 90
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 90)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 90);
                yield "\">
              <label class=\"form-label\">";
                // line 91
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 91);
                yield "</label>
              <div id=\"input-shipping-custom-field-";
                // line 92
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 92);
                yield "\">
                ";
                // line 93
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 93));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 94
                    yield "                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[";
                    // line 95
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 95);
                    yield "]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 95);
                    yield "\" id=\"input-shipping-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 95);
                    yield "\" class=\"form-check-input\"/>
                    <label for=\"input-shipping-custom-value-";
                    // line 96
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 96);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 96);
                    yield "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 99
                yield "              </div>
              <div id=\"error-shipping-custom-field-";
                // line 100
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 100);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 103
            yield "
          ";
            // line 104
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 104) == "checkbox")) {
                // line 105
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 105)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 105);
                yield "\">
              <label class=\"form-label\">";
                // line 106
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 106);
                yield "</label>
              <div id=\"input-shipping-custom-field-";
                // line 107
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 107);
                yield "\">
                ";
                // line 108
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_value", [], "any", false, false, false, 108));
                foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                    // line 109
                    yield "                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[";
                    // line 110
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 110);
                    yield "][]\" value=\"";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 110);
                    yield "\" id=\"input-shipping-custom-value-";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 110);
                    yield "\" class=\"form-check-input\"/>
                    <label for=\"input-shipping-custom-value-";
                    // line 111
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "custom_field_value_id", [], "any", false, false, false, 111);
                    yield "\" class=\"form-check-label\">";
                    yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field_value"], "name", [], "any", false, false, false, 111);
                    yield "</label>
                  </div>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_key'], $context['custom_field_value'], $context['_parent']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 114
                yield "              </div>
              <div id=\"error-shipping-custom-field-";
                // line 115
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 115);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 118
            yield "
          ";
            // line 119
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 119) == "text")) {
                // line 120
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 120)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 120);
                yield "\">
              <label for=\"input-shipping-custom-field-";
                // line 121
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 121);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 121);
                yield "</label>
              <input type=\"text\" name=\"custom_field[";
                // line 122
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 122);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 122);
                yield "\" id=\"input-shipping-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 122);
                yield "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                // line 123
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 123);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 126
            yield "
          ";
            // line 127
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 127) == "textarea")) {
                // line 128
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 128)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 128);
                yield "\">
              <label for=\"input-shipping-custom-field-";
                // line 129
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 129);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 129);
                yield "</label>
              <textarea name=\"custom_field[";
                // line 130
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                yield "]\" rows=\"5\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 130);
                yield "\" id=\"input-shipping-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 130);
                yield "\" class=\"form-control\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 130);
                yield "</textarea>
              <div id=\"error-shipping-custom-field-";
                // line 131
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 131);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 134
            yield "
          ";
            // line 135
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 135) == "file")) {
                // line 136
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 136)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 136);
                yield "\">
              <label class=\"form-label\">";
                // line 137
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 137);
                yield "</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"";
                // line 139
                yield ($context["upload"] ?? null);
                yield "\" data-oc-size-max=\"";
                yield ($context["config_file_max_size"] ?? null);
                yield "\" data-oc-size-error=\"";
                yield ($context["error_upload_size"] ?? null);
                yield "\" data-oc-target=\"#input-shipping-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 139);
                yield "\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> ";
                yield ($context["button_upload"] ?? null);
                yield "</button>
                <input type=\"hidden\" name=\"custom_field";
                // line 140
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                yield "]\" value=\"\" id=\"input-shipping-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 140);
                yield "\"/>
                <div id=\"error-shipping-custom-field-";
                // line 141
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 141);
                yield "\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          ";
            }
            // line 145
            yield "
          ";
            // line 146
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 146) == "date")) {
                // line 147
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 147)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 147);
                yield "\">
              <label for=\"input-shipping-custom-field-";
                // line 148
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 148);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 148);
                yield "</label>
              <input type=\"date\" name=\"custom_field[";
                // line 149
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 149);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 149);
                yield "\" id=\"input-shipping-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 149);
                yield "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                // line 150
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 150);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 153
            yield "
          ";
            // line 154
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 154) == "time")) {
                // line 155
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 155)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 155);
                yield "\">
              <label for=\"input-shipping-custom-field-";
                // line 156
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 156);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 156);
                yield "</label>
              <input type=\"time\" name=\"custom_field[";
                // line 157
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 157);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 157);
                yield "\" id=\"input-shipping-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 157);
                yield "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                // line 158
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 158);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 161
            yield "
          ";
            // line 162
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "type", [], "any", false, false, false, 162) == "datetime")) {
                // line 163
                yield "            <div class=\"col mb-3";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "required", [], "any", false, false, false, 163)) {
                    yield " required";
                }
                yield " custom-field custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 163);
                yield "\">
              <label for=\"input-shipping-custom-field-";
                // line 164
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 164);
                yield "\" class=\"form-label\">";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 164);
                yield "</label>
              <input type=\"datetime-local\" name=\"custom_field[";
                // line 165
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                yield "]\" value=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "value", [], "any", false, false, false, 165);
                yield "\" placeholder=\"";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "name", [], "any", false, false, false, 165);
                yield "\" id=\"input-shipping-custom-field-";
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 165);
                yield "\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-";
                // line 166
                yield CoreExtension::getAttribute($this->env, $this->source, $context["custom_field"], "custom_field_id", [], "any", false, false, false, 166);
                yield "\" class=\"invalid-feedback\"></div>
            </div>
          ";
            }
            // line 169
            yield "
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['custom_field'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 171
        yield "
      </div>
      <div class=\"text-end mb-3\">
        <button type=\"submit\" id=\"button-shipping-address\" class=\"btn btn-primary\">";
        // line 174
        yield ($context["button_continue"] ?? null);
        yield "</button>
      </div>
    </form>
  </div>
</fieldset>
<script type=\"text/javascript\"><!--
\$('input[name=\\'shipping_existing\\']').on('change', function() {
    if (\$(this).val() == 1) {
        \$('#shipping-existing').show();
        \$('#shipping-new').hide();
    } else {
        \$('#shipping-existing').hide();
        \$('#shipping-new').show();
    }
});

// Existing Shipping Address
\$('#input-shipping-address').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_address.address&language=";
        // line 196
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

                \$('#input-shipping-address').removeClass('is-invalid');
                \$('#error-shipping-address').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#input-shipping-address').addClass('is-invalid');
                    \$('#error-shipping-address').html(json['error']).addClass('d-block');
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#input-shipping-method').val('');
                    \$('#input-payment-method').val('');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 225
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

// New Shipping Address
\$('#form-shipping-address').on('submit', function(e) {
    e.preventDefault();

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_address.save&language=";
        // line 241
        yield ($context["language"] ?? null);
        yield "',
            type: 'post',
            data: \$('#form-shipping-address').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-shipping-address').button('loading');
            },
            complete: function() {
                \$('#button-shipping-address').button('reset');
            },
            success: function(json) {
                console.log(json);

                \$('#form-shipping-address').find('.is-invalid').removeClass('is-invalid');
                \$('#form-shipping-address').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (i in json['error']) {
                        for (key in json['error']) {
                            \$('#input-shipping-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                            \$('#error-shipping-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                        }
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#form-shipping-address')[0].reset();

                    var html = '<option value=\"\">";
        // line 280
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["text_select"] ?? null), "js");
        yield "</option>';

                    if (json['addresses']) {
                        for (i in json['addresses']) {
                            html += '<option value=\"' + json['addresses'][i]['address_id'] + '\">' + json['addresses'][i]['firstname'] + ' ' + json['addresses'][i]['lastname'] + ', ' + (json['addresses'][i]['company'] ? json['addresses'][i]['company'] + ', ' : '') + json['addresses'][i]['address_1'] + ', ' + json['addresses'][i]['city'] + ', ' + json['addresses'][i]['zone'] + ', ' + json['addresses'][i]['country'] + '</option>';
                        }
                    }

                    // Shipping Address
                    \$('#input-shipping-address').html(html);

                    \$('#input-shipping-address').val(json['address_id']);

                    \$('#shipping-addresses').css({display: 'block'});

                    \$('#input-shipping-existing').trigger('click');

                    // Payment Address
                    var payment_address_id = \$('#input-payment-address').val();

                    \$('#input-payment-address').html(html);

                    if (payment_address_id) {
                        \$('#input-payment-address').val(payment_address_id);
                    }

                    \$('#payment-addresses').css({display: 'block'});

                    \$('#input-payment-existing').trigger('click');

                    \$('#input-shipping-method').val('');
                    \$('#input-payment-method').val('');

                    \$('#checkout-confirm').load('index.php?route=checkout/confirm.confirm&language=";
        // line 313
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
        return "catalog/view/template/checkout/shipping_address.twig";
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
        return array (  824 => 313,  788 => 280,  746 => 241,  727 => 225,  695 => 196,  670 => 174,  665 => 171,  658 => 169,  652 => 166,  642 => 165,  636 => 164,  627 => 163,  625 => 162,  622 => 161,  616 => 158,  606 => 157,  600 => 156,  591 => 155,  589 => 154,  586 => 153,  580 => 150,  570 => 149,  564 => 148,  555 => 147,  553 => 146,  550 => 145,  543 => 141,  537 => 140,  525 => 139,  520 => 137,  511 => 136,  509 => 135,  506 => 134,  500 => 131,  490 => 130,  484 => 129,  475 => 128,  473 => 127,  470 => 126,  464 => 123,  454 => 122,  448 => 121,  439 => 120,  437 => 119,  434 => 118,  428 => 115,  425 => 114,  414 => 111,  406 => 110,  403 => 109,  399 => 108,  395 => 107,  391 => 106,  382 => 105,  380 => 104,  377 => 103,  371 => 100,  368 => 99,  357 => 96,  349 => 95,  346 => 94,  342 => 93,  338 => 92,  334 => 91,  325 => 90,  323 => 89,  320 => 88,  314 => 85,  311 => 84,  300 => 82,  296 => 81,  292 => 80,  286 => 79,  280 => 78,  271 => 77,  269 => 76,  266 => 75,  262 => 74,  254 => 69,  250 => 68,  246 => 67,  238 => 62,  234 => 61,  230 => 60,  221 => 56,  217 => 55,  210 => 51,  206 => 50,  200 => 47,  196 => 46,  189 => 42,  185 => 41,  179 => 38,  175 => 37,  168 => 33,  164 => 32,  157 => 28,  153 => 27,  142 => 23,  136 => 19,  105 => 17,  101 => 16,  97 => 15,  88 => 13,  82 => 10,  76 => 9,  70 => 6,  64 => 5,  55 => 3,  51 => 2,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<fieldset id=\"shipping-address\" style=\"display: {% if payment_address_required and not addresses %}none{% else %}block{% endif %};\">
  <legend>{{ heading_title }}</legend>
  <div id=\"shipping-addresses\" style=\"display: {% if addresses %}block{% else %}none{% endif %};\">
    <div class=\"form-check\">
      <input type=\"radio\" name=\"shipping_existing\" value=\"1\" id=\"input-shipping-existing\" class=\"form-check-input\"{% if addresses %} checked{% endif %}/>
      <label for=\"input-shipping-existing\" class=\"form-check-label\">{{ text_address_existing }}</label>
    </div>
    <div class=\"form-check\">
      <input type=\"radio\" name=\"shipping_existing\" value=\"0\" id=\"input-shipping-new\" class=\"form-check-input\"{% if not addresses %} checked{% endif %}/>
      <label for=\"input-shipping-new\" class=\"form-check-label\">{{ text_address_new }}</label>
    </div>
  </div>
  <div id=\"shipping-existing\" style=\"display: {% if addresses %}block{% else %}none{% endif %};\">
    <select name=\"address_id\" id=\"input-shipping-address\" class=\"form-select\">
      <option value=\"\">{{ text_select }}</option>
      {% for address in addresses %}
        <option value=\"{{ address.address_id }}\"{% if address.address_id == address_id %} selected{% endif %}>{{ address.firstname }} {{ address.lastname }},{% if address.company %} {{ address.company }},{% endif %} {{ address.address_1 }}, {{ address.city }}, {{ address.zone }}, {{ address.country }}</option>
      {% endfor %}
    </select>
    <div id=\"error-shipping-address\" class=\"invalid-feedback\"></div>
  </div>
  <br/>
  <div id=\"shipping-new\" style=\"display: {% if not addresses %}block{% else %}none{% endif %};\">
    <form id=\"form-shipping-address\">
      <div class=\"row row-cols-1 row-cols-md-2\">
        <div class=\"col mb-3\">
          <label for=\"input-shipping-firstname\" class=\"form-label\">{{ entry_firstname }}</label >
          <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"{{ entry_firstname }}\" id=\"input-shipping-firstname\" class=\"form-control\" required/>
          <div id=\"error-shipping-firstname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-lastname\" class=\"form-label\">{{ entry_lastname }}</label>
          <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"{{ entry_lastname }}\" id=\"input-shipping-lastname\" class=\"form-control\" required/>
          <div id=\"error-shipping-lastname\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-company\" class=\"form-label\">{{ entry_company }}</label>
          <input type=\"text\" name=\"company\" value=\"\" placeholder=\"{{ entry_company }}\" id=\"input-shipping-company\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-address-1\" class=\"form-label\">{{ entry_address_1 }}</label>
          <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"{{ entry_address_1 }}\" id=\"input-shipping-address-1\" class=\"form-control\" required/>
          <div id=\"error-shipping-address-1\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-address-2\" class=\"form-label\">{{ entry_address_2 }}</label>
          <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"{{ entry_address_2 }}\" id=\"input-shipping-address-2\" class=\"form-control\"/>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-city\" class=\"form-label\">{{ entry_city }}</label>
          <input type=\"text\" name=\"city\" value=\"\" placeholder=\"{{ entry_city }}\" id=\"input-shipping-city\" class=\"form-control\" required/>
          <div id=\"error-shipping-city\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-postcode\" class=\"form-label\">{{ entry_postcode }}</label>
          <input type=\"text\" name=\"postcode\" value=\"{{ postcode }}\" placeholder=\"{{ entry_postcode }}\" id=\"input-shipping-postcode\" class=\"form-control\" required/>
          <div id=\"error-shipping-postcode\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-country\" class=\"form-label\">{{ entry_country }}</label>
          <x-country name=\"country_id\" value=\"{{ country_id }}\" id=\"x-shipping-country\" postcode=\"1\" target=\"input-shipping-postcode\" input-id=\"input-shipping-country\" input-class=\"form-select\" required>
            <option value=\"0\">{{ text_select }}</option>
          </x-country>
          <div id=\"error-shipping-country\" class=\"invalid-feedback\"></div>
        </div>
        <div class=\"col mb-3\">
          <label for=\"input-shipping-zone\" class=\"form-label\">{{ entry_zone }}</label>
          <x-zone name=\"zone_id\" value=\"{{ zone_id }}\" target=\"x-shipping-country\" input-id=\"input-shipping-zone\" input-class=\"form-select\" required>
            <option value=\"0\">{{ text_select }}</option>
          </x-zone>
          <div id=\"error-shipping-zone\" class=\"invalid-feedback\"></div>
        </div>

        {% for custom_field in custom_fields %}

          {% if custom_field.type == 'select' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <select name=\"custom_field[{{ custom_field.custom_field_id }}]\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-select\">
                <option value=\"\">{{ text_select }}</option>
                {% for custom_field_value in custom_field.custom_field_value %}
                  <option value=\"{{ custom_field_value.custom_field_value_id }}\">{{ custom_field_value.name }}</option>
                {% endfor %}
              </select>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'radio' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"radio\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"/>
                    <label for=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'checkbox' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\">
                {% for custom_field_value in custom_field.custom_field_value %}
                  <div class=\"form-check\">
                    <input type=\"checkbox\" name=\"custom_field[{{ custom_field.custom_field_id }}][]\" value=\"{{ custom_field_value.custom_field_value_id }}\" id=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-input\"/>
                    <label for=\"input-shipping-custom-value-{{ custom_field_value.custom_field_value_id }}\" class=\"form-check-label\">{{ custom_field_value.name }}</label>
                  </div>
                {% endfor %}
              </div>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'text' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"text\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'textarea' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <textarea name=\"custom_field[{{ custom_field.custom_field_id }}]\" rows=\"5\" placeholder=\"{{ custom_field.value }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\">{{ custom_field.value }}</textarea>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'file' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label class=\"form-label\">{{ custom_field.name }}</label>
              <div>
                <button type=\"button\" data-oc-toggle=\"upload\" data-oc-url=\"{{ upload }}\" data-oc-size-max=\"{{ config_file_max_size }}\" data-oc-size-error=\"{{ error_upload_size }}\" data-oc-target=\"#input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"btn btn-light\"><i class=\"fa-solid fa-upload\"></i> {{ button_upload }}</button>
                <input type=\"hidden\" name=\"custom_field{{ custom_field.custom_field_id }}]\" value=\"\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\"/>
                <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
              </div>
            </div>
          {% endif %}

          {% if custom_field.type == 'date' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"date\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'time' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"time\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

          {% if custom_field.type == 'datetime' %}
            <div class=\"col mb-3{% if custom_field.required %} required{% endif %} custom-field custom-field-{{ custom_field.custom_field_id }}\">
              <label for=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-label\">{{ custom_field.name }}</label>
              <input type=\"datetime-local\" name=\"custom_field[{{ custom_field.custom_field_id }}]\" value=\"{{ custom_field.value }}\" placeholder=\"{{ custom_field.name }}\" id=\"input-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"form-control\"/>
              <div id=\"error-shipping-custom-field-{{ custom_field.custom_field_id }}\" class=\"invalid-feedback\"></div>
            </div>
          {% endif %}

        {% endfor %}

      </div>
      <div class=\"text-end mb-3\">
        <button type=\"submit\" id=\"button-shipping-address\" class=\"btn btn-primary\">{{ button_continue }}</button>
      </div>
    </form>
  </div>
</fieldset>
<script type=\"text/javascript\"><!--
\$('input[name=\\'shipping_existing\\']').on('change', function() {
    if (\$(this).val() == 1) {
        \$('#shipping-existing').show();
        \$('#shipping-new').hide();
    } else {
        \$('#shipping-existing').hide();
        \$('#shipping-new').show();
    }
});

// Existing Shipping Address
\$('#input-shipping-address').on('change', function() {
    var element = this;

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_address.address&language={{ language }}&address_id=' + \$(element).val(),
            dataType: 'json',
            beforeSend: function() {
                \$(element).prop('disabled', true);
            },
            complete: function() {
                \$(element).prop('disabled', false);
            },
            success: function(json) {
                console.log(json);

                \$('#input-shipping-address').removeClass('is-invalid');
                \$('#error-shipping-address').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    \$('#input-shipping-address').addClass('is-invalid');
                    \$('#error-shipping-address').html(json['error']).addClass('d-block');
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

// New Shipping Address
\$('#form-shipping-address').on('submit', function(e) {
    e.preventDefault();

    chain.attach(function() {
        return \$.ajax({
            url: 'index.php?route=checkout/shipping_address.save&language={{ language }}',
            type: 'post',
            data: \$('#form-shipping-address').serialize(),
            dataType: 'json',
            contentType: 'application/x-www-form-urlencoded',
            beforeSend: function() {
                \$('#button-shipping-address').button('loading');
            },
            complete: function() {
                \$('#button-shipping-address').button('reset');
            },
            success: function(json) {
                console.log(json);

                \$('#form-shipping-address').find('.is-invalid').removeClass('is-invalid');
                \$('#form-shipping-address').find('.invalid-feedback').removeClass('d-block');

                if (json['redirect']) {
                    location = json['redirect'];
                }

                if (json['error']) {
                    if (json['error']['warning']) {
                        \$('#alert').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa-solid fa-circle-exclamation\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');
                    }

                    for (i in json['error']) {
                        for (key in json['error']) {
                            \$('#input-shipping-' + key.replaceAll('_', '-')).addClass('is-invalid').find('.form-control, .form-select, .form-check-input, .form-check-label').addClass('is-invalid');
                            \$('#error-shipping-' + key.replaceAll('_', '-')).html(json['error'][key]).addClass('d-block');
                        }
                    }
                }

                if (json['success']) {
                    \$('#alert').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa-solid fa-circle-check\"></i> ' + json['success'] + ' <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\"></button></div>');

                    \$('#form-shipping-address')[0].reset();

                    var html = '<option value=\"\">{{ text_select|escape('js') }}</option>';

                    if (json['addresses']) {
                        for (i in json['addresses']) {
                            html += '<option value=\"' + json['addresses'][i]['address_id'] + '\">' + json['addresses'][i]['firstname'] + ' ' + json['addresses'][i]['lastname'] + ', ' + (json['addresses'][i]['company'] ? json['addresses'][i]['company'] + ', ' : '') + json['addresses'][i]['address_1'] + ', ' + json['addresses'][i]['city'] + ', ' + json['addresses'][i]['zone'] + ', ' + json['addresses'][i]['country'] + '</option>';
                        }
                    }

                    // Shipping Address
                    \$('#input-shipping-address').html(html);

                    \$('#input-shipping-address').val(json['address_id']);

                    \$('#shipping-addresses').css({display: 'block'});

                    \$('#input-shipping-existing').trigger('click');

                    // Payment Address
                    var payment_address_id = \$('#input-payment-address').val();

                    \$('#input-payment-address').html(html);

                    if (payment_address_id) {
                        \$('#input-payment-address').val(payment_address_id);
                    }

                    \$('#payment-addresses').css({display: 'block'});

                    \$('#input-payment-existing').trigger('click');

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
", "catalog/view/template/checkout/shipping_address.twig", "C:\\xampp\\htdocs\\bareeq_platform\\catalog\\view\\template\\checkout\\shipping_address.twig");
    }
}

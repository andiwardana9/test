<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* extension/opencart/admin/view/template/report/customer.twig */
class __TwigTemplate_20ab2ee4489e232baa0c9734f54849ca7ff0e6cfd35a561be2e2d0c14ba19be5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"row\">
  <div id=\"filter-report\" class=\"col-lg-3 col-md-12 order-lg-last d-none d-lg-block mb-3\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 4
        echo ($context["text_filter"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"mb-3\">
          <label for=\"input-group\" class=\"col-form-label\">";
        // line 7
        echo ($context["entry_group"] ?? null);
        echo "</label>
          <select name=\"filter_group\" id=\"input-group\" class=\"form-select\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 10
            echo "              <option value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "value", [], "any", false, false, false, 10);
            echo "\"";
            if ((twig_get_attribute($this->env, $this->source, $context["group"], "value", [], "any", false, false, false, 10) == ($context["filter_group"] ?? null))) {
                echo " selected";
            }
            echo ">";
            echo twig_get_attribute($this->env, $this->source, $context["group"], "text", [], "any", false, false, false, 10);
            echo "</option>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "          </select>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-date-start\" class=\"col-form-label\">";
        // line 15
        echo ($context["entry_date_start"] ?? null);
        echo "</label>
          <div class=\"input-group\">
            <input type=\"text\" name=\"filter_date_start\" value=\"";
        // line 17
        echo ($context["filter_date_start"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_start"] ?? null);
        echo "\" id=\"input-date-start\" class=\"form-control date\"/>
            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
          </div>
        </div>
        <div class=\"mb-3\">
          <label for=\"input-date-end\" class=\"col-form-label\">";
        // line 22
        echo ($context["entry_date_end"] ?? null);
        echo "</label>
          <div class=\"input-group\">
            <input type=\"text\" name=\"filter_date_end\" value=\"";
        // line 24
        echo ($context["filter_date_end"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_end"] ?? null);
        echo "\" id=\"input-date-end\" class=\"form-control date\"/>
            <div class=\"input-group-text\"><i class=\"fa-regular fa-calendar\"></i></div>
          </div>
        </div>
        <div class=\"text-end\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fa-solid fa-filter\"></i> ";
        // line 29
        echo ($context["button_filter"] ?? null);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col col-lg-9 col-md-12\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fa-solid fa-chart-bar\"></i> ";
        // line 36
        echo ($context["heading_title"] ?? null);
        echo "</div>
      <div id=\"customer\" class=\"card-body\">";
        // line 37
        echo ($context["list"] ?? null);
        echo "</div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#customer').on('click', '.pagination a', function (e) {
    e.preventDefault();

    \$('#customer').load(this.href);
});

\$('#button-filter').on('click', function () {
    var url = '';

    var filter_date_start = \$('#input-date-start').val();

    if (filter_date_start) {
        url += '&filter_date_start=' + encodeURIComponent(filter_date_start);
    }

    var filter_date_end = \$('#input-date-end').val();

    if (filter_date_end) {
        url += '&filter_date_end=' + encodeURIComponent(filter_date_end);
    }

    var filter_group = \$('#input-group').val();

    if (filter_group) {
        url += '&filter_group=' + encodeURIComponent(filter_group);
    }

    \$('#customer').load('index.php?route=extension/opencart/report/customer.list&user_token=";
        // line 69
        echo ($context["user_token"] ?? null);
        echo "' + url);
});
//--></script>
";
    }

    public function getTemplateName()
    {
        return "extension/opencart/admin/view/template/report/customer.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 69,  121 => 37,  117 => 36,  107 => 29,  97 => 24,  92 => 22,  82 => 17,  77 => 15,  72 => 12,  57 => 10,  53 => 9,  48 => 7,  42 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "extension/opencart/admin/view/template/report/customer.twig", "C:\\xampp\\htdocs\\upload\\extension\\opencart\\admin\\view\\template\\report\\customer.twig");
    }
}

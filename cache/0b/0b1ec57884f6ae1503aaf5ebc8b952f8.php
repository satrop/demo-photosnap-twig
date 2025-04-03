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

/* components/beta-section/beta-section.twig */
class __TwigTemplate_2ff165a9ee2f8544bd3031f7faecd486 extends Template
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
        // line 2
        yield "
<section class=\"beta-section background--black full-width\">
  <div class=\"grid-container\">
    <div class=\"container main-width\">
      <h2>We're in beta. Get your invite today!</h2>
      ";
        // line 7
        yield from $this->loadTemplate("components/button/button.twig", "components/beta-section/beta-section.twig", 7)->unwrap()->yield(CoreExtension::merge($context, ["text" => "Get an invite", "variant" => "secondary", "ariaLabel" => "Get an invite to join the beta"]));
        // line 12
        yield "    </div>
  </div>
</section>";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/beta-section/beta-section.twig";
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
        return array (  51 => 12,  49 => 7,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# BetaSection Component #}

<section class=\"beta-section background--black full-width\">
  <div class=\"grid-container\">
    <div class=\"container main-width\">
      <h2>We're in beta. Get your invite today!</h2>
      {% include 'components/button/button.twig' with {
        text: 'Get an invite',
        variant: 'secondary',
        ariaLabel: 'Get an invite to join the beta'
      } %}
    </div>
  </div>
</section>", "components/beta-section/beta-section.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/components/beta-section/beta-section.twig");
    }
}

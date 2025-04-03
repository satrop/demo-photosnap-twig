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

/* components/footer/footer.twig */
class __TwigTemplate_e8b1f7b951561c0c4c70a628697417e3 extends Template
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
        yield "<footer class=\"footer background--black grid-container\" role=\"contentinfo\">
  <div class=\"container main-width\">
    <div class=\"col\">
      <div class=\"logoSection\">
        <a href=\"/\" aria-label=\"Photosnap home\">
          ";
        // line 7
        yield from $this->loadTemplate("components/logo/logo.twig", "components/footer/footer.twig", 7)->unwrap()->yield($context);
        // line 8
        yield "        </a>
      </div>

      <nav class=\"socialLinks\" aria-label=\"Social media links\">
        <h2 class=\"visually-hidden\">Social Media Links</h2>
        <ul role=\"list\">
          <li>
            <a href=\"https://facebook.com\" 
               target=\"_blank\" 
               rel=\"noopener noreferrer\"
               aria-label=\"Visit our Facebook page (opens in new window)\">
              <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
            </a>
          </li>
          <li>
            <a href=\"https://youtube.com\" 
               target=\"_blank\" 
               rel=\"noopener noreferrer\"
               aria-label=\"Visit our YouTube channel (opens in new window)\">
              <i class=\"fa fa-youtube-play\" aria-hidden=\"true\"></i>
            </a>
          </li>
          <li>
            <a href=\"https://twitter.com\" 
               target=\"_blank\" 
               rel=\"noopener noreferrer\"
               aria-label=\"Visit our Twitter page (opens in new window)\">
              <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
            </a>
          </li>
          <li>
            <a href=\"https://pinterest.com\" 
               target=\"_blank\" 
               rel=\"noopener noreferrer\"
               aria-label=\"Visit our Pinterest page (opens in new window)\">
              <i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i>
            </a>
          </li>
          <li>
            <a href=\"https://instagram.com\" 
               target=\"_blank\" 
               rel=\"noopener noreferrer\"
               aria-label=\"Visit our Instagram page (opens in new window)\">
              <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
            </a>
          </li>
        </ul>
      </nav>

      <nav class=\"pageLinks\" aria-label=\"Site pages\">
        <h2 class=\"visually-hidden\">Site Navigation</h2>
        <ul role=\"list\">
          <li><a href=\"/\">Home</a></li>
          <li><a href=\"/stories\">Stories</a></li>
          <li><a href=\"/features\">Features</a></li>
          <li><a href=\"/pricing\">Pricing</a></li>
        </ul>
      </nav>
    </div>

    <div class=\"col\">
      ";
        // line 69
        yield from $this->loadTemplate("components/button/button.twig", "components/footer/footer.twig", 69)->unwrap()->yield(CoreExtension::merge($context, ["text" => "Get an invite", "variant" => "secondary", "ariaLabel" => "Get an invite to join Photosnap", "class" => "inviteButton"]));
        // line 75
        yield "
      <div class=\"copyright\">
        <p>Copyright ";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y"), "html", null, true);
        yield ". All Rights Reserved</p>
      </div>
    </div>
  </div>
</footer>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/footer/footer.twig";
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
        return array (  120 => 77,  116 => 75,  114 => 69,  51 => 8,  49 => 7,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Footer Component #}
<footer class=\"footer background--black grid-container\" role=\"contentinfo\">
  <div class=\"container main-width\">
    <div class=\"col\">
      <div class=\"logoSection\">
        <a href=\"/\" aria-label=\"Photosnap home\">
          {% include 'components/logo/logo.twig' %}
        </a>
      </div>

      <nav class=\"socialLinks\" aria-label=\"Social media links\">
        <h2 class=\"visually-hidden\">Social Media Links</h2>
        <ul role=\"list\">
          <li>
            <a href=\"https://facebook.com\" 
               target=\"_blank\" 
               rel=\"noopener noreferrer\"
               aria-label=\"Visit our Facebook page (opens in new window)\">
              <i class=\"fa fa-facebook\" aria-hidden=\"true\"></i>
            </a>
          </li>
          <li>
            <a href=\"https://youtube.com\" 
               target=\"_blank\" 
               rel=\"noopener noreferrer\"
               aria-label=\"Visit our YouTube channel (opens in new window)\">
              <i class=\"fa fa-youtube-play\" aria-hidden=\"true\"></i>
            </a>
          </li>
          <li>
            <a href=\"https://twitter.com\" 
               target=\"_blank\" 
               rel=\"noopener noreferrer\"
               aria-label=\"Visit our Twitter page (opens in new window)\">
              <i class=\"fa fa-twitter\" aria-hidden=\"true\"></i>
            </a>
          </li>
          <li>
            <a href=\"https://pinterest.com\" 
               target=\"_blank\" 
               rel=\"noopener noreferrer\"
               aria-label=\"Visit our Pinterest page (opens in new window)\">
              <i class=\"fa fa-pinterest\" aria-hidden=\"true\"></i>
            </a>
          </li>
          <li>
            <a href=\"https://instagram.com\" 
               target=\"_blank\" 
               rel=\"noopener noreferrer\"
               aria-label=\"Visit our Instagram page (opens in new window)\">
              <i class=\"fa fa-instagram\" aria-hidden=\"true\"></i>
            </a>
          </li>
        </ul>
      </nav>

      <nav class=\"pageLinks\" aria-label=\"Site pages\">
        <h2 class=\"visually-hidden\">Site Navigation</h2>
        <ul role=\"list\">
          <li><a href=\"/\">Home</a></li>
          <li><a href=\"/stories\">Stories</a></li>
          <li><a href=\"/features\">Features</a></li>
          <li><a href=\"/pricing\">Pricing</a></li>
        </ul>
      </nav>
    </div>

    <div class=\"col\">
      {% include 'components/button/button.twig' with {
        text: 'Get an invite',
        variant: 'secondary',
        ariaLabel: 'Get an invite to join Photosnap',
        class: 'inviteButton'
      } %}

      <div class=\"copyright\">
        <p>Copyright {{ \"now\"|date(\"Y\") }}. All Rights Reserved</p>
      </div>
    </div>
  </div>
</footer>
", "components/footer/footer.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/components/footer/footer.twig");
    }
}

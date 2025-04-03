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

/* layouts/base.twig */
class __TwigTemplate_0953a4a40e39f219b0c96f8db958248f extends Template
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
            'title' => [$this, 'block_title'],
            'head' => [$this, 'block_head'],
            'header' => [$this, 'block_header'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
            'scripts' => [$this, 'block_scripts'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\" class=\"";
        // line 2
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("font_classes", $context)) ? (Twig\Extension\CoreExtension::default(($context["font_classes"] ?? null), "")) : ("")), "html", null, true);
        yield "\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>";
        // line 6
        yield from $this->unwrap()->yieldBlock('title', $context, $blocks);
        yield "</title>
    
    ";
        // line 9
        yield "    <meta name=\"description\" content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("description", $context)) ? (Twig\Extension\CoreExtension::default(($context["description"] ?? null), "Frontend Mentor challenges help you improve your coding skills by building realistic projects. Join 1,000,000+ developers building projects, reviewing code, and helping each other get better.")) : ("Frontend Mentor challenges help you improve your coding skills by building realistic projects. Join 1,000,000+ developers building projects, reviewing code, and helping each other get better.")), "html", null, true);
        yield "\">
    
    ";
        // line 12
        yield "    <meta property=\"og:title\" content=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("title", $context)) ? (Twig\Extension\CoreExtension::default(($context["title"] ?? null), "Photosnap Website challenge on Frontend Mentor")) : ("Photosnap Website challenge on Frontend Mentor")), "html", null, true);
        yield "\">
    <meta property=\"og:description\" content=\"";
        // line 13
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("description", $context)) ? (Twig\Extension\CoreExtension::default(($context["description"] ?? null), "Frontend Mentor challenges help you improve your coding skills by building realistic projects. Join 1,000,000+ developers building projects, reviewing code, and helping each other get better.")) : ("Frontend Mentor challenges help you improve your coding skills by building realistic projects. Join 1,000,000+ developers building projects, reviewing code, and helping each other get better.")), "html", null, true);
        yield "\">
    <meta property=\"og:url\" content=\"";
        // line 14
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("url", $context)) ? (Twig\Extension\CoreExtension::default(($context["url"] ?? null), "https://demo-photosnap.vercel.app/")) : ("https://demo-photosnap.vercel.app/")), "html", null, true);
        yield "\">
    <meta property=\"og:site_name\" content=\"Photosnap\">
    <meta property=\"og:locale\" content=\"en-US\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:image\" content=\"/images/og-image.png\">
    <meta property=\"og:image:width\" content=\"1200\">
    <meta property=\"og:image:height\" content=\"630\">
    <meta property=\"og:image:alt\" content=\"Photosnap Website\">

    ";
        // line 24
        yield "    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap\" rel=\"stylesheet\" />
    
    ";
        // line 29
        yield "    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

    ";
        // line 32
        yield "    <link rel=\"stylesheet\" href=\"/css/main.css\" />

    ";
        // line 34
        yield from $this->unwrap()->yieldBlock('head', $context, $blocks);
        // line 35
        yield "  </head>
  <body>
    <a href=\"#main-content\" class=\"skip-link\">
      Skip to main content
    </a>

    ";
        // line 41
        yield from $this->unwrap()->yieldBlock('header', $context, $blocks);
        // line 44
        yield "
    <main id=\"main-content\" class=\"grid-container\" tabindex=\"-1\">
      ";
        // line 46
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 47
        yield "    </main>

    ";
        // line 49
        yield from $this->unwrap()->yieldBlock('footer', $context, $blocks);
        // line 52
        yield "
    ";
        // line 53
        yield from $this->unwrap()->yieldBlock('scripts', $context, $blocks);
        // line 54
        yield "  </body>
</html>
";
        yield from [];
    }

    // line 6
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((array_key_exists("title", $context)) ? (Twig\Extension\CoreExtension::default(($context["title"] ?? null), "Photosnap")) : ("Photosnap")), "html", null, true);
        yield from [];
    }

    // line 34
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_head(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 41
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_header(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 42
        yield "      ";
        yield from $this->loadTemplate("components/navigation/navigation.twig", "layouts/base.twig", 42)->unwrap()->yield($context);
        // line 43
        yield "    ";
        yield from [];
    }

    // line 46
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_content(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    // line 49
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_footer(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 50
        yield "      ";
        yield from $this->loadTemplate("components/footer/footer.twig", "layouts/base.twig", 50)->unwrap()->yield($context);
        // line 51
        yield "    ";
        yield from [];
    }

    // line 53
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_scripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "layouts/base.twig";
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
        return array (  201 => 53,  196 => 51,  193 => 50,  186 => 49,  176 => 46,  171 => 43,  168 => 42,  161 => 41,  151 => 34,  140 => 6,  133 => 54,  131 => 53,  128 => 52,  126 => 49,  122 => 47,  120 => 46,  116 => 44,  114 => 41,  106 => 35,  104 => 34,  100 => 32,  96 => 29,  90 => 24,  78 => 14,  74 => 13,  69 => 12,  63 => 9,  58 => 6,  51 => 2,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\" class=\"{{ font_classes|default('') }}\">
  <head>
    <meta charset=\"UTF-8\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
    <title>{% block title %}{{ title|default('Photosnap') }}{% endblock %}</title>
    
    {# Meta tags #}
    <meta name=\"description\" content=\"{{ description|default('Frontend Mentor challenges help you improve your coding skills by building realistic projects. Join 1,000,000+ developers building projects, reviewing code, and helping each other get better.') }}\">
    
    {# Open Graph tags #}
    <meta property=\"og:title\" content=\"{{ title|default('Photosnap Website challenge on Frontend Mentor') }}\">
    <meta property=\"og:description\" content=\"{{ description|default('Frontend Mentor challenges help you improve your coding skills by building realistic projects. Join 1,000,000+ developers building projects, reviewing code, and helping each other get better.') }}\">
    <meta property=\"og:url\" content=\"{{ url|default('https://demo-photosnap.vercel.app/') }}\">
    <meta property=\"og:site_name\" content=\"Photosnap\">
    <meta property=\"og:locale\" content=\"en-US\">
    <meta property=\"og:type\" content=\"website\">
    <meta property=\"og:image\" content=\"/images/og-image.png\">
    <meta property=\"og:image:width\" content=\"1200\">
    <meta property=\"og:image:height\" content=\"630\">
    <meta property=\"og:image:alt\" content=\"Photosnap Website\">

    {# Fonts #}
    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link href=\"https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap\" rel=\"stylesheet\" />
    
    {# Font Awesome for icons #}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css\">

    {# Styles #}
    <link rel=\"stylesheet\" href=\"/css/main.css\" />

    {% block head %}{% endblock %}
  </head>
  <body>
    <a href=\"#main-content\" class=\"skip-link\">
      Skip to main content
    </a>

    {% block header %}
      {% include 'components/navigation/navigation.twig' %}
    {% endblock %}

    <main id=\"main-content\" class=\"grid-container\" tabindex=\"-1\">
      {% block content %}{% endblock %}
    </main>

    {% block footer %}
      {% include 'components/footer/footer.twig' %}
    {% endblock %}

    {% block scripts %}{% endblock %}
  </body>
</html>
", "layouts/base.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/layouts/base.twig");
    }
}

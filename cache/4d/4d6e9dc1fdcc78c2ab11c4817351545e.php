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

/* components/navigation/navigation.twig */
class __TwigTemplate_397c7d699e03d37b53b519a376ed264b extends Template
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
<nav class=\"nav grid-container\" aria-label=\"Main\">
\t<div class=\"navContainer main-width\">
\t\t<a href=\"";
        // line 5
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_path"] ?? null), "html", null, true);
        yield "/\" class=\"logoLink\" aria-label=\"Photosnap home\">
\t\t\t";
        // line 6
        yield from $this->loadTemplate("components/logo/logo.twig", "components/navigation/navigation.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "\t\t</a>

\t\t<button type=\"button\" class=\"hamburger\" aria-label=\"Toggle menu\" aria-expanded=\"false\" aria-controls=\"main-menu\" data-menu-toggle>
\t\t\t<span aria-hidden=\"true\"></span>
\t\t\t<span aria-hidden=\"true\"></span>
\t\t</button>

\t\t<div id=\"main-menu\" class=\"menuContainer\" data-menu>
\t\t\t<ul class=\"menu\" role=\"list\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 17
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_path"] ?? null), "html", null, true);
        yield "/";
        yield ((($context["is_github_pages"] ?? null)) ? ("stories.html") : ("stories"));
        yield "\">Stories</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 20
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_path"] ?? null), "html", null, true);
        yield "/";
        yield ((($context["is_github_pages"] ?? null)) ? ("features.html") : ("features"));
        yield "\">Features</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["base_path"] ?? null), "html", null, true);
        yield "/";
        yield ((($context["is_github_pages"] ?? null)) ? ("pricing.html") : ("pricing"));
        yield "\">Pricing</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t";
        // line 26
        yield from $this->loadTemplate("components/button/button.twig", "components/navigation/navigation.twig", 26)->unwrap()->yield(CoreExtension::merge($context, ["text" => "Get an Invite", "variant" => "primary", "ariaLabel" => "Get an invite", "class" => "inviteButton"]));
        // line 32
        yield "\t\t</div>
\t</div>
</nav>

<script>
\tdocument.addEventListener('DOMContentLoaded', function () {
\t\tconst menuToggle = document.querySelector('[data-menu-toggle]');
\t\tconst menu = document.querySelector('[data-menu]');
\t\tconst mainContent = document.querySelector('main');
\t\tlet isOpen = false;

\t\tfunction checkMobile() {
\t\t\treturn window.innerWidth < 768;
\t\t}

\t\tfunction toggleMenu() {
\t\t\tisOpen = !isOpen;
\t\t\tmenuToggle.classList.toggle('open', isOpen);
\t\t\tmenu.classList.toggle('open', isOpen);
\t\t\tmenuToggle.setAttribute('aria-expanded', isOpen);

\t\t\tif (mainContent) {
\t\t\t\tif (isOpen) {
\t\t\t\t\tmainContent.inert = true;
\t\t\t\t\t// Focus first menu item when opening
\t\t\t\t\tsetTimeout(() => {
\t\t\t\t\t\tconst firstLink = menu.querySelector('a');
\t\t\t\t\t\tfirstLink?.focus();
\t\t\t\t\t}, 100);
\t\t\t\t} else {
\t\t\t\t\tmainContent.inert = false;
\t\t\t\t}
\t\t\t}
\t\t}

\t\tmenuToggle.addEventListener('click', toggleMenu);

\t\t// Handle escape key
\t\tmenu.addEventListener('keydown', (e) => {
\t\t\tif (e.key === 'Escape' && isOpen) {
\t\t\t\ttoggleMenu();
\t\t\t}
\t\t});

\t\t// Update mobile state on resize
\t\twindow.addEventListener('resize', () => {
\t\t\tconst isMobile = checkMobile();
\t\t\tif (!isMobile && menu) {
\t\t\t\tmenu.inert = false;
\t\t\t} else if (isMobile && menu) {
\t\t\t\tmenu.inert = !isOpen;
\t\t\t}
\t\t});
\t});
</script>
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "components/navigation/navigation.twig";
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
        return array (  91 => 32,  89 => 26,  81 => 23,  73 => 20,  65 => 17,  53 => 7,  51 => 6,  47 => 5,  42 => 2,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{# Navigation Component #}

<nav class=\"nav grid-container\" aria-label=\"Main\">
\t<div class=\"navContainer main-width\">
\t\t<a href=\"{{ base_path }}/\" class=\"logoLink\" aria-label=\"Photosnap home\">
\t\t\t{% include 'components/logo/logo.twig' %}
\t\t</a>

\t\t<button type=\"button\" class=\"hamburger\" aria-label=\"Toggle menu\" aria-expanded=\"false\" aria-controls=\"main-menu\" data-menu-toggle>
\t\t\t<span aria-hidden=\"true\"></span>
\t\t\t<span aria-hidden=\"true\"></span>
\t\t</button>

\t\t<div id=\"main-menu\" class=\"menuContainer\" data-menu>
\t\t\t<ul class=\"menu\" role=\"list\">
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ base_path }}/{{ is_github_pages ? 'stories.html' : 'stories' }}\">Stories</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ base_path }}/{{ is_github_pages ? 'features.html' : 'features' }}\">Features</a>
\t\t\t\t</li>
\t\t\t\t<li>
\t\t\t\t\t<a href=\"{{ base_path }}/{{ is_github_pages ? 'pricing.html' : 'pricing' }}\">Pricing</a>
\t\t\t\t</li>
\t\t\t</ul>
\t\t\t{% include 'components/button/button.twig' with {
        text: 'Get an Invite',
        variant: 'primary',
        ariaLabel: 'Get an invite',
        class: 'inviteButton'
      } %}
\t\t</div>
\t</div>
</nav>

<script>
\tdocument.addEventListener('DOMContentLoaded', function () {
\t\tconst menuToggle = document.querySelector('[data-menu-toggle]');
\t\tconst menu = document.querySelector('[data-menu]');
\t\tconst mainContent = document.querySelector('main');
\t\tlet isOpen = false;

\t\tfunction checkMobile() {
\t\t\treturn window.innerWidth < 768;
\t\t}

\t\tfunction toggleMenu() {
\t\t\tisOpen = !isOpen;
\t\t\tmenuToggle.classList.toggle('open', isOpen);
\t\t\tmenu.classList.toggle('open', isOpen);
\t\t\tmenuToggle.setAttribute('aria-expanded', isOpen);

\t\t\tif (mainContent) {
\t\t\t\tif (isOpen) {
\t\t\t\t\tmainContent.inert = true;
\t\t\t\t\t// Focus first menu item when opening
\t\t\t\t\tsetTimeout(() => {
\t\t\t\t\t\tconst firstLink = menu.querySelector('a');
\t\t\t\t\t\tfirstLink?.focus();
\t\t\t\t\t}, 100);
\t\t\t\t} else {
\t\t\t\t\tmainContent.inert = false;
\t\t\t\t}
\t\t\t}
\t\t}

\t\tmenuToggle.addEventListener('click', toggleMenu);

\t\t// Handle escape key
\t\tmenu.addEventListener('keydown', (e) => {
\t\t\tif (e.key === 'Escape' && isOpen) {
\t\t\t\ttoggleMenu();
\t\t\t}
\t\t});

\t\t// Update mobile state on resize
\t\twindow.addEventListener('resize', () => {
\t\t\tconst isMobile = checkMobile();
\t\t\tif (!isMobile && menu) {
\t\t\t\tmenu.inert = false;
\t\t\t} else if (isMobile && menu) {
\t\t\t\tmenu.inert = !isOpen;
\t\t\t}
\t\t});
\t});
</script>
", "components/navigation/navigation.twig", "/Users/stevenportas/WorkBox/Sites/demos/demo-photosnap-twig/src/templates/components/navigation/navigation.twig");
    }
}

<?php

/* 404.html */
class __TwigTemplate_835ad94ff2b89eeb28ababf6091f602d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("base-simple.html");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base-simple.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "\t
\t<div class=\"content-wrapper l-800 search\">

\t\t<img class=\"img-404\" src=\"/wp-content/themes/nassau/images/dev/404-tiger.jpg\" />
\t\t<h1 class=\"h1\">Oh no! Something&rsquo;s gone wrong!</h1>
\t\t<p class=\"tz-txt\">Terribly sorry about that. Perhaps this search box will help.</p>

\t    <form class=\"search-form\">
\t        <input class=\"search-input\" type=\"search\" placeholder=\"Search\" id=\"s\" name=\"s\">
\t        <input class=\"search-btn\" type=\"submit\" value=\"Search\">
\t    </form>

\t</div> <!-- /content-wrapper -->

";
    }

    public function getTemplateName()
    {
        return "404.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 4,  28 => 3,);
    }
}

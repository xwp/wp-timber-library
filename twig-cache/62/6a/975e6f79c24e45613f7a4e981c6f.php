<?php

/* footer.html */
class __TwigTemplate_626a975e6f79c24e45613f7a4e981c6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<footer class=\"ftr\">
\t<div class=\"ftr-links\">
\t\t<ul class=\"list-horiz\">
\t\t\t";
        // line 4
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["site_tools"]) ? $context["site_tools"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["tool"]) {
            // line 5
            echo "\t\t\t\t<li><a href=\"";
            echo $this->getAttribute((isset($context["tool"]) ? $context["tool"] : null), "url");
            echo "\">";
            echo $this->getAttribute((isset($context["tool"]) ? $context["tool"] : null), "title");
            echo "</a></li>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tool'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "\t\t</ul>
\t</div>

\t<div class=\"ftr-info\">
\t\t<div class=\"ftr-logo\"><a href=\"/\">The Daily Princetonian</a></div>
\t\t<div class=\"ftr-copyright\"><p class\"txt\">";
        // line 12
        echo (isset($context["footer_copyright"]) ? $context["footer_copyright"] : null);
        echo "</p></div>
\t\t";
        // line 13
        if ($this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID")) {
            // line 14
            echo "\t\t\t<input type=\"hidden\" name=\"pid\" id=\"pid\" value=\"";
            echo $this->getAttribute((isset($context["post"]) ? $context["post"] : null), "ID");
            echo "\" />
\t\t";
        }
        // line 16
        echo "\t</div>
</footer>
<script type=\"text/javascript\" src=\"/wp-content/themes/nassau/js/libs/lodash.min.js\"></script>
<script type=\"text/javascript\" src=\"/wp-content/themes/nassau/js/libs/jquery.scrollto.min.js\"></script>
<script type=\"text/javascript\" src=\"/wp-content/themes/nassau/js/libs/jquery.easytabs.min.js\"></script>
<script type=\"text/javascript\" src=\"/wp-content/themes/nassau/js/libs/jquery.iosslider.min.js\"></script>
<script type=\"text/javascript\" src=\"/wp-content/themes/nassau/js/libs/jquery.masonry.min.js\"></script>
<script type=\"text/javascript\" src=\"/wp-content/themes/nassau/js/upstatement-base.js\"></script>
<script type=\"text/javascript\" src=\"/wp-content/themes/nassau/js/libs/jquery.timeago.js\"></script>
<script type=\"text/javascript\" src=\"/wp-content/themes/nassau/js/site.js\"></script>";
    }

    public function getTemplateName()
    {
        return "footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 14,  50 => 13,  39 => 7,  24 => 4,  109 => 34,  104 => 31,  89 => 28,  79 => 24,  73 => 20,  64 => 17,  60 => 16,  46 => 12,  43 => 12,  40 => 11,  37 => 10,  110 => 56,  96 => 55,  93 => 29,  76 => 53,  44 => 24,  65 => 32,  63 => 31,  58 => 16,  38 => 12,  19 => 1,  84 => 26,  81 => 25,  77 => 3,  74 => 2,  69 => 24,  67 => 23,  62 => 21,  56 => 17,  54 => 15,  51 => 14,  45 => 12,  41 => 11,  36 => 8,  34 => 9,  30 => 6,  26 => 6,  23 => 2,  21 => 1,  31 => 8,  28 => 5,);
    }
}

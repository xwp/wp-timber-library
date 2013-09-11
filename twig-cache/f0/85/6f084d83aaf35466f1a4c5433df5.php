<?php

/* header-short.html */
class __TwigTemplate_f0856f084d83aaf35466f1a4c5433df5 extends Twig_Template
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
        echo "<div class=\"nav-wrapper nav-mini\">

    <div class=\"hdr-branding\">

        <div class=\"hdr-logo-mod\">
            <a class=\"hdr-logo\" role=\"banner\" href=\"/\">
                <img class=\"hdr-logo-img\" src=\"/wp-content/themes/nassau/images/icons/hdr-logo-reverse.png\"/>
            </a>
        </div> <!-- /hdr-logo-mod -->

        <!-- Nav Trigger | Small Screens -->
        <button id=\"nav-menu-trigger\" class=\"ear-menu-btn nav-menu-trigger\"><i class=\"nav-menu-icon\">Show Navigation</i></button>

        <!-- Search Trigger | Smaller Screens -->
        <button id=\"nav-search-trigger\" class=\"ear-search-btn nav-search-trigger\"><i class=\"nav-search-icon\">Show Search</i></button>

    </div> <!-- hdr-branding -->

    <div id=\"nav-menu-wrapper\">
        <nav id=\"access\" class=\"hdr-nav\" role=\"navigation\">
            <div class=\"navbar\">
                
                <div class=\"navlinks\">
                    ";
        // line 24
        echo (isset($context["wp_nav_menu"]) ? $context["wp_nav_menu"] : null);
        echo "

                    <!-- Search Trigger | Larger Screens -->
                    <button class=\"navbar-search-btn nav-search-trigger\"><i class=\"nav-search-icon\">Show Search</i></button>

                    <div class=\"hdr-social\">
                        <ul class=\"menu hdr-social-list\">
                            <li class=\"menu-item social-item\"><a href=\"http://www.twitter.com/princetonian\" id=\"hdr-twitter\"><i class=\"icon-twitter\" ></i> Twitter</a></li>
                            <li class=\"menu-item social-item\"><a href=\"https://www.facebook.com/DailyPrincetonian\" id=\"hdr-facebook\"><i class=\"icon-facebook-2\" ></i> Facebook</a></li>
                            <li class=\"menu-item social-item\"><a href=\"/feed\" id=\"hdr-rss\">RSS</a></li>
                            <li class=\"menu-item social-item\"><a href=\"/advertise\" id=\"hdr-advertise\">Advertise</a></li>
                        </ul>
                    </div> <!-- /hdr-social -->

                </div> <!-- /navlinks -->

            </div><!-- navbar -->
        </nav><!-- #access -->

        <div class=\"hdr-search-dd\">
            <div class=\"hdr-search\">
                <form class=\"nav-search\" role=\"search\" action=\"/\">
                    <input class=\"nav-search-input\" type=\"search\" placeholder=\"Search\" id=\"s\" name=\"s\">
                     <input class=\"nav-search-btn\" type=\"submit\" value=\"Search\">
                </form>
            </div><!-- hdr-search -->
        </div> <!-- /hdr-search-dd -->

        <nav class=\"hdr-megamenu-mod\">
            ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["main_nav"]) ? $context["main_nav"] : null));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["nav_term"]) {
            // line 54
            echo "                ";
            $this->env->loadTemplate("components/hdr-megamenu.html")->display($context);
            // line 55
            echo "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['nav_term'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "        </nav>

   </div><!-- nav-menu-wrapper --> 
</div> <!-- /nav-wrapper -->";
    }

    public function getTemplateName()
    {
        return "header-short.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 56,  96 => 55,  93 => 54,  76 => 53,  44 => 24,  19 => 1,  84 => 15,  81 => 14,  77 => 3,  74 => 2,  69 => 24,  67 => 23,  62 => 21,  56 => 17,  54 => 14,  51 => 13,  45 => 12,  41 => 11,  36 => 8,  34 => 7,  30 => 6,  26 => 4,  23 => 2,  21 => 1,);
    }
}

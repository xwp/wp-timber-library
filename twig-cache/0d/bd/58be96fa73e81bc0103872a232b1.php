<?php

/* html-header.html */
class __TwigTemplate_0dbd58be96fa73e81bc0103872a232b1 extends Twig_Template
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
        echo "<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class=\"no-js iem7\" manifest=\"default.appcache?v=1\"><![endif]-->
<!--[if lt IE 7 ]><html class=\"no-js ie6\" lang=\"en\"><![endif]-->
<!--[if IE 7 ]><html class=\"no-js ie7\" lang=\"en\"><![endif]-->
<!--[if IE 8 ]><html class=\"no-js ie8\" lang=\"en\"><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class=\"no-js\" lang=\"en\"><!--<![endif]-->
\t<head>
\t\t<title>";
        // line 8
        echo (isset($context["wp_title"]) ? $context["wp_title"] : null);
        echo "</title>
\t\t<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />

\t\t<link rel=\"shortcut icon\" href=\"";
        // line 11
        echo (isset($context["theme_path"]) ? $context["theme_path"] : null);
        echo "images/favicon.ico\">
\t\t<link rel=\"apple-touch-icon\" href=\"";
        // line 12
        echo (isset($context["theme_path"]) ? $context["theme_path"] : null);
        echo "images/apple-touch-icon-precomposed.png\"/>

\t\t<meta charset=\"UTF-8\" />
\t  \t<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
\t\t<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0 user-scalable=no\">
\t\t<link rel=\"pingback\" href=\"/xmlrpc.php\" />
\t\t<link rel=\"stylesheet\" type=\"text/css\" href=\"/wp-content/themes/nassau/style.css\" />
\t\t<script type=\"text/javascript\">
\t\t  (function() {
\t\t    var config = {
\t\t      kitId: 'hrr6tli',
\t\t      scriptTimeout: 3000
\t\t    };
\t\t    var h=document.getElementsByTagName(\"html\")[0];h.className+=\" wf-loading\";var t=setTimeout(function(){h.className=h.className.replace(/(\\s|^)wf-loading(\\s|\$)/g,\" \");h.className+=\" wf-inactive\"},config.scriptTimeout);var tk=document.createElement(\"script\"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type=\"text/javascript\";tk.async=\"true\";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!=\"complete\"&&a!=\"loaded\")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName(\"script\")[0];s.parentNode.insertBefore(tk,s)
\t\t  })();
\t\t</script>

\t\t";
        // line 29
        echo (isset($context["wp_head"]) ? $context["wp_head"] : null);
        echo "

\t\t";
        // line 31
        $this->env->loadTemplate("components/google-analytics.html")->display($context);
        // line 32
        echo "
";
    }

    public function getTemplateName()
    {
        return "html-header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  65 => 32,  63 => 31,  58 => 29,  38 => 12,  19 => 1,  84 => 15,  81 => 14,  77 => 3,  74 => 2,  69 => 24,  67 => 23,  62 => 21,  56 => 17,  54 => 14,  51 => 13,  45 => 12,  41 => 11,  36 => 8,  34 => 11,  30 => 6,  26 => 4,  23 => 2,  21 => 1,  31 => 4,  28 => 8,);
    }
}

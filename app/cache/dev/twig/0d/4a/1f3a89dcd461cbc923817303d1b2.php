<?php

/* AcmeJqueryBundle::layout.html.twig */
class __TwigTemplate_0d4a1f3a89dcd461cbc923817303d1b2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'content_header_more' => array($this, 'block_content_header_more'),
            'content_header' => array($this, 'block_content_header'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        ";
        // line 4
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <div id=\"symfony-wrapper\">
            ";
        // line 14
        if ($this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false)) {
            // line 15
            echo "            <div class=\"flash-message\">
                <em>Notice</em>: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, 'app'), "session", array(), "any", false), "flash", array("notice", ), "method", false), "html");
            echo "
            </div>
            ";
        }
        // line 19
        echo "
            ";
        // line 20
        $this->displayBlock('content_header', $context, $blocks);
        // line 29
        echo "
            <div class=\"symfony-content\">
                ";
        // line 31
        $this->displayBlock('content', $context, $blocks);
        // line 33
        echo "            </div>

            ";
        // line 35
        if (twig_test_defined("code", $context)) {
            // line 36
            echo "            <h2>Code behind this page</h2>
            <div class=\"symfony-content\">";
            // line 37
            echo $this->getContext($context, 'code');
            echo "</div>
            ";
        }
        // line 39
        echo "        </div>
    </body>
</html>
";
    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        echo "JQuery";
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "            <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
            <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmejquery/css/style.css"), "html");
        echo "\" type=\"text/css\" media=\"all\" />
            <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
            <link rel=\"shortcut icon\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html");
        echo "\" />
            <script type=\"text/javascript\" src=\" ";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/acmejquery/js/jquery-1.6.1.js"), "html");
        echo "\"></script> 
        ";
    }

    // line 22
    public function block_content_header_more($context, array $blocks = array())
    {
        // line 23
        echo "                <li><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("homepage"), "html");
        echo "\">Home</a></li>
                    ";
    }

    // line 20
    public function block_content_header($context, array $blocks = array())
    {
        // line 21
        echo "            <ul id=\"menu\">
                    ";
        // line 22
        $this->displayBlock('content_header_more', $context, $blocks);
        // line 25
        echo "            </ul>

            <div style=\"clear: both\"></div>
            ";
    }

    // line 31
    public function block_content($context, array $blocks = array())
    {
        // line 32
        echo "                ";
    }

    public function getTemplateName()
    {
        return "AcmeJqueryBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

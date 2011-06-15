<?php

/* AcmeJqueryBundle:Default:index.html.twig */
class __TwigTemplate_7a0cb18098b1f82c934a404186f4fee0 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("AcmeJqueryBundle::layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 15
        $context['code'] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1>Menu</h1>
    <ul id=\"demo-list\">
            <li><a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("basics"), "html");
        echo "\">Basics</a></li>
            <li><a href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hide"), "html");
        echo "\">Hide</a></li>
            <li><a href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("hide_parent"), "html");
        echo "\">Hide parent</a></li>
            <li><a href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("slide"), "html");
        echo "\">Slide</a></li>
            <li><a href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("fade"), "html");
        echo "\">Fade</a></li>
            <li><a href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("animate"), "html");
        echo "\">Animate</a></li>
    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeJqueryBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

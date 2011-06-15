<?php

/* AcmeJqueryBundle:Default:hide.html.twig */
class __TwigTemplate_6668d435a6cdd7f4d801fd599cbc7e5e extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'head' => array($this, 'block_head'),
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

        // line 37
        $context['code'] = $this->env->getExtension('demo')->getCode($this);
        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        echo $this->renderParentBlock("head", $context, $blocks);
        echo "
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            \$(\"p\").click(function(){
                \$(this).hide();
            });
            
            \$(\"button.hide_all_paragraphs\").click(function(){
                \$(\"p\").hide();
                \$(this).hide();
            });
            
            \$(\"button.hide_by_id\").click(function(){
                \$(\"#test\").hide();
            });
        });
    </script>        
";
    }

    // line 23
    public function block_content($context, array $blocks = array())
    {
        // line 24
        echo "    <h1>Hide</h1>
    <p>If you click on me, I will disappear.</p>
    <p>Click me away!</p>
    <p>Click me too!</p>
    
    <h2>This is a heading.</h2>
    <p>This is a paragraph.</p>
    <p>This is another paragraph.</p>
    <p id=\"test\">This is a paragraph with an id</p>
    <button class=\"hide_all_paragraphs\">Hide all paragraphs</button>
    <button class=\"hide_by_id\">Hide by id</button>
";
    }

    public function getTemplateName()
    {
        return "AcmeJqueryBundle:Default:hide.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

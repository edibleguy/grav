<?php

/* partials/modal-wizard.html.twig */
class __TwigTemplate_c31c90b1a701e1397a4160eea89d50b5f17abb486c69386f185dbdb0c572ec39 extends Twig_Template
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
        $context["settings"] = $this->getAttribute($this->getAttribute((isset($context["config"]) ? $context["config"] : null), "plugins", array()), "git-sync", array(), "array");
        // line 2
        $context["frontend_url"] = ($this->getAttribute((isset($context["uri"]) ? $context["uri"] : null), "base", array()) . (isset($context["base_url_relative_frontend"]) ? $context["base_url_relative_frontend"] : null));
        // line 3
        echo "<div class=\"remodal\" data-remodal-id=\"wizard\" data-remodal-options=\"hashTracking: false\">

    <h1>Git Sync - Wizard</h1>
    ";
        // line 6
        if ($this->getAttribute((isset($context["git_sync"]) ? $context["git_sync"] : null), "git_installed", array())) {
            // line 7
            echo "    <div class=\"step-0\">
        <div class=\"panel\">
            <p>
                This wizard will guide you through a few simple steps that will instruct you on how to set up the plugin and your <i class=\"fa fa-fw fa-git\"></i> repository.
            </p>
            <p>
                A the end of these steps your will have a bi-directional synchronization link between your site and your <i class=\"fa fa-fw fa-git\"></i> repository.
            </p>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-1\">
        <h1>Step 1 - Hosting Service</h1>
        <div class=\"panel hidden disabled\">
            <p>
                Select one of the supported <i class=\"fa fa-fw fa-git\"></i> repository hosting services you will be using for remotely store your data. Once you picked one, insert the username and password to access the service.
            </p>
            <div class=\"columns wizard-padding\">
                <div class=\"column\">
                    <label>
                        <input type=\"radio\" value=\"github\" name=\"gitsync[repository]\" ";
            // line 31
            echo ((twig_in_filter("github.com", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "repository", array()))) ? ("checked") : (""));
            echo " />
                        <img src=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://git-sync/images/repos/github.svg"), "html", null, true);
            echo "\" />
                        <a href=\"https://github.com/join?source=header-home\" target=\"_blank\">(create account)</a>
                    </label>
                    <label>
                        <input type=\"radio\" value=\"bitbucket\" name=\"gitsync[repository]\" ";
            // line 36
            echo ((twig_in_filter("bitbucket.org", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "repository", array()))) ? ("checked") : (""));
            echo " />
                        <img src=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://git-sync/images/repos/bitbucket.svg"), "html", null, true);
            echo "\" />
                        <a href=\"https://bitbucket.org/account/signup/\" target=\"_blank\">(create account)</a>
                    </label>
                    <label>
                        <input type=\"radio\" value=\"gitlab\" name=\"gitsync[repository]\" ";
            // line 41
            echo ((twig_in_filter("gitlab.com", $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "repository", array()))) ? ("checked") : (""));
            echo " />
                        <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->urlFunc("plugin://git-sync/images/repos/gitlab.svg"), "html", null, true);
            echo "\" />
                        <a href=\"https://gitlab.com/users/sign_in\" target=\"_blank\">(create account)</a>
                    </label>
                </div>
                <div class=\"column\">
                    <label>
                        Git User
                        <input type=\"text\" name=\"gitsync[repo_user]\" placeholder=\"Username, not email\" value=\"";
            // line 49
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "user", array()), "")) : ("")), "html", null, true);
            echo "\" />
                    </label>
                    <label>
                        Git Password
                        <input type=\"password\" name=\"gitsync[repo_password]\" placeholder=\"Password\" value=\"";
            // line 53
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "password", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "password", array()), "")) : ("")), "html", null, true);
            echo "\" />
                    </label>
                </div>
            </div>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-2\">
        <h1>Step 2 - Setting up the repository</h1>
        <div class=\"panel hidden disabled\">
            <p>
                If you already have a repository set up and ready to be used, you can skip this step. Otherwise please continue reading below and follow the instructions.
            </p>

            <p>If you are going to set up the repository now, please ensure you also make a commit as the service provider offers to do (whether it's the README or .gitignore). GitSync won't work unless the repository has at least one commit.</p>

            <div class=\"hidden-step-github wizard-padding hidden\">
                <h4>GitHub</h4>
                <p>
                    Follow the instructions on <a href=\"https://help.github.com/articles/creating-a-new-repository/\" target=\"_blank\">GitHub Help</a> to create a new GitHub repository.
                </p>
            </div>
            <div class=\"hidden-step-bitbucket wizard-padding hidden\">
                <h4>Bitbucket</h4>
                <p>
                    Follow the instructions on <a href=\"https://confluence.atlassian.com/bitbucket/create-a-git-repository-759857290.html\" target=\"_blank\">Atlassian Documentation</a> to create a new Bitbucket repository. Make sure you select <strong>Git</strong> as repository type.
                </p>
            </div>
            <div class=\"hidden-step-gitlab wizard-padding hidden\">
                <h4>GitLab</h4>
                <p>
                    Follow the instructions on <a href=\"https://docs.gitlab.com/ce/gitlab-basics/create-project.html\" target=\"_blank\">GitLab Documentation</a> to create a new GitLab repository.
                </p>
            </div>

            <p>
                Once you created your repository, insert below the full HTTPS URL for the repository you just created. This is the URL used to clone the repository. All services offer both SSH and HTTPS URLs but it is recommended to only use HTTPS.
            </p>

            <p>
                <label>
                    Git Repository
                    <input type=\"text\" name=\"gitsync[repo_url]\" placeholder=\"https://github.com/getgrav/grav.git\" value=\"";
            // line 99
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "repository", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "repository", array()), "")) : ("")), "html", null, true);
            echo "\" />
                </label>
            </p>

            <p class=\"center\">
                <a href=\"#\" class=\"button\" data-gitsync-action=\"test\"><i class=\"fa fa-fw fa-plug\"></i> Test Connection</a>
            </p>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-3\">
        <h1>Step 3 - Setting up the Webhook</h1>
        <div class=\"panel hidden disabled\" data-gitsync-uribase=\"";
            // line 115
            echo twig_escape_filter($this->env, (isset($context["frontend_url"]) ? $context["frontend_url"] : null), "html", null, true);
            echo "\">
            <p>
                The Webhook allows to synchronize the site every time a change happens in the repository. The Webhook is an URL that needs to be setup in the repository. By Default the Webhook is set to <code>/_git-sync</code> but you can change it to whatever name you'd like</p>

            <p>
                <label>
                    Webhook
                    <input type=\"text\" name=\"gitsync[webhook]\" placeholder=\"/_git-sync\" value=\"";
            // line 122
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "webhook", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "webhook", array()), "/_git-sync")) : ("/_git-sync")), "html", null, true);
            echo "\" />
                </label>
            </p>

            <p>
                In order to setup the Webhook in your repository, please follow the steps below. If you haven't already created a repository from the previous steps, now it's the time to do so.
            </p>

            <div class=\"hidden-step-github wizard-padding hidden\">
                <h4>GitHub</h4>
                <ol>
                    <li>Head to the repository on GitHub and click on <code>Settings</code></li>
                    <li>Click on <code>Webhooks</code> in the left sidebar</li>
                    <li>Click on the <code>Add webhook</code> button on the right</li>
                    <li>
                        Compile the form as follows
                        <ul>
                            <li><strong>Payload URL</strong>: <code>";
            // line 139
            echo twig_escape_filter($this->env, (isset($context["frontend_url"]) ? $context["frontend_url"] : null), "html", null, true);
            echo "<span class=\"gitsync-webhook\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "webhook", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "webhook", array()), "/_git-sync")) : ("/_git-sync")), "html", null, true);
            echo "</span></code></li>
                            <li><strong>Content type</strong>: <code>application/json</code></li>
                            <li><strong>Secret</strong>: <em>leave empty</em></li>
                            <li><strong>Which events would you like to trigger this webhook?</strong> <code>Just the push event.</code></li>
                            <li><strong>Active</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Add webhook</code> button</li>
                </ol>
            </div>

            <div class=\"hidden-step-bitbucket wizard-padding hidden\">
                <h4>Bitbucket</h4>
                <ol>
                    <li>Head to the repository on Bitbucket and click on <code><i class=\"fa fa-cog\"></i> Settings</code> in the sidebar (if the sidebar is collapsed, this is represented by just a <i class=\"fa fa-cog\"></i>)</li>
                    <li>Click on <code>Webhooks</code> on the left sidebar of the page that just loaded</li>
                    <li>Click on the <code>Add webhook</code> button at the top</li>
                    <li>
                        Compile the form as follows
                        <ul>
                            <li><strong>Title</strong>: <em>any title you like, ie. GitSync</em></li>
                            <li><strong>URL</strong>: <code>";
            // line 160
            echo twig_escape_filter($this->env, (isset($context["frontend_url"]) ? $context["frontend_url"] : null), "html", null, true);
            echo "<span class=\"gitsync-webhook\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "webhook", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "webhook", array()), "/_git-sync")) : ("/_git-sync")), "html", null, true);
            echo "</span></code></li>
                            <li><strong>Active</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                            <li><strong>Repository push</strong>: <i class=\"fa fa-dot-circle-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Save</code> button</li>
                </ol>
            </div>
            <div class=\"hidden-step-gitlab wizard-padding hidden\">
                <h4>GitLab</h4>
                <ol>
                    <li>Head to the repository on GitLab and click on <code><i class=\"fa fa-cog\"></i></code> dropdown button at the top right of the page</li>
                    <li>Select <code>Webhooks</code> from the list</li>
                    <li>
                        Compile the form as follows
                        <ul>
                            <li><strong>URL</strong>: <code>";
            // line 176
            echo twig_escape_filter($this->env, (isset($context["frontend_url"]) ? $context["frontend_url"] : null), "html", null, true);
            echo "<span class=\"gitsync-webhook\">";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "webhook", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "webhook", array()), "/_git-sync")) : ("/_git-sync")), "html", null, true);
            echo "</span></code></li>
                            <li><strong>Secret Token</strong>: <em>leave empty</em></li>
                            <li><strong>Push events</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Add Webhook</code> button</li>
                </ol>
            </div>

            <p>
                Press <strong>Save</strong> to complete the setup.
            </p>
        </div>
    </div>

    ";
            // line 232
            echo "
    <div class=\"button-bar\">
        <a class=\"button secondary float-left\" data-remodal-action=\"cancel\" href=\"#\">Cancel</a>
        <a class=\"button hidden\" data-gitsync-action=\"previous\" href=\"#\"><i class=\"fa fa-fw fa-chevron-left\"></i> Previous</a>
        <a class=\"button\" data-gitsync-action=\"next\" href=\"#\">Next <i class=\"fa fa-fw fa-chevron-right\"></i></a>
        <a class=\"button hidden\" data-gitsync-action=\"save\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> Save</a>
    </div>
    ";
        } else {
            // line 240
            echo "        <div class=\"step-0\">
            <div class=\"panel\">
                <p>
                    The <strong>GitSync</strong> plugin requires the <i class=\"fa fa-fw fa-git\"></i> binary to be installed and accessible in order to work.</p>

                <p>
                    If <i class=\"fa fa-fw fa-git\"></i> is missing from your hosting provider, you should open a ticket with them and request for it to be installed.
                </p>
            </div>
        </div>
        <div class=\"button-bar\">
            <a class=\"button secondary float-left\" data-remodal-action=\"cancel\" href=\"#\">Close</a>
        </div>
    ";
        }
        // line 254
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "partials/modal-wizard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 254,  274 => 240,  264 => 232,  244 => 176,  223 => 160,  197 => 139,  177 => 122,  167 => 115,  148 => 99,  99 => 53,  92 => 49,  82 => 42,  78 => 41,  71 => 37,  67 => 36,  60 => 32,  56 => 31,  30 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set settings = config.plugins['git-sync'] %}
{% set frontend_url = uri.base ~ base_url_relative_frontend %}
<div class=\"remodal\" data-remodal-id=\"wizard\" data-remodal-options=\"hashTracking: false\">

    <h1>Git Sync - Wizard</h1>
    {% if git_sync.git_installed %}
    <div class=\"step-0\">
        <div class=\"panel\">
            <p>
                This wizard will guide you through a few simple steps that will instruct you on how to set up the plugin and your <i class=\"fa fa-fw fa-git\"></i> repository.
            </p>
            <p>
                A the end of these steps your will have a bi-directional synchronization link between your site and your <i class=\"fa fa-fw fa-git\"></i> repository.
            </p>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-1\">
        <h1>Step 1 - Hosting Service</h1>
        <div class=\"panel hidden disabled\">
            <p>
                Select one of the supported <i class=\"fa fa-fw fa-git\"></i> repository hosting services you will be using for remotely store your data. Once you picked one, insert the username and password to access the service.
            </p>
            <div class=\"columns wizard-padding\">
                <div class=\"column\">
                    <label>
                        <input type=\"radio\" value=\"github\" name=\"gitsync[repository]\" {{ 'github.com' in settings.repository ? 'checked' : '' }} />
                        <img src=\"{{ url('plugin://git-sync/images/repos/github.svg') }}\" />
                        <a href=\"https://github.com/join?source=header-home\" target=\"_blank\">(create account)</a>
                    </label>
                    <label>
                        <input type=\"radio\" value=\"bitbucket\" name=\"gitsync[repository]\" {{ 'bitbucket.org' in settings.repository ? 'checked' : '' }} />
                        <img src=\"{{ url('plugin://git-sync/images/repos/bitbucket.svg') }}\" />
                        <a href=\"https://bitbucket.org/account/signup/\" target=\"_blank\">(create account)</a>
                    </label>
                    <label>
                        <input type=\"radio\" value=\"gitlab\" name=\"gitsync[repository]\" {{ 'gitlab.com' in settings.repository ? 'checked' : '' }} />
                        <img src=\"{{ url('plugin://git-sync/images/repos/gitlab.svg') }}\" />
                        <a href=\"https://gitlab.com/users/sign_in\" target=\"_blank\">(create account)</a>
                    </label>
                </div>
                <div class=\"column\">
                    <label>
                        Git User
                        <input type=\"text\" name=\"gitsync[repo_user]\" placeholder=\"Username, not email\" value=\"{{ settings.user|default('') }}\" />
                    </label>
                    <label>
                        Git Password
                        <input type=\"password\" name=\"gitsync[repo_password]\" placeholder=\"Password\" value=\"{{ settings.password|default('') }}\" />
                    </label>
                </div>
            </div>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-2\">
        <h1>Step 2 - Setting up the repository</h1>
        <div class=\"panel hidden disabled\">
            <p>
                If you already have a repository set up and ready to be used, you can skip this step. Otherwise please continue reading below and follow the instructions.
            </p>

            <p>If you are going to set up the repository now, please ensure you also make a commit as the service provider offers to do (whether it's the README or .gitignore). GitSync won't work unless the repository has at least one commit.</p>

            <div class=\"hidden-step-github wizard-padding hidden\">
                <h4>GitHub</h4>
                <p>
                    Follow the instructions on <a href=\"https://help.github.com/articles/creating-a-new-repository/\" target=\"_blank\">GitHub Help</a> to create a new GitHub repository.
                </p>
            </div>
            <div class=\"hidden-step-bitbucket wizard-padding hidden\">
                <h4>Bitbucket</h4>
                <p>
                    Follow the instructions on <a href=\"https://confluence.atlassian.com/bitbucket/create-a-git-repository-759857290.html\" target=\"_blank\">Atlassian Documentation</a> to create a new Bitbucket repository. Make sure you select <strong>Git</strong> as repository type.
                </p>
            </div>
            <div class=\"hidden-step-gitlab wizard-padding hidden\">
                <h4>GitLab</h4>
                <p>
                    Follow the instructions on <a href=\"https://docs.gitlab.com/ce/gitlab-basics/create-project.html\" target=\"_blank\">GitLab Documentation</a> to create a new GitLab repository.
                </p>
            </div>

            <p>
                Once you created your repository, insert below the full HTTPS URL for the repository you just created. This is the URL used to clone the repository. All services offer both SSH and HTTPS URLs but it is recommended to only use HTTPS.
            </p>

            <p>
                <label>
                    Git Repository
                    <input type=\"text\" name=\"gitsync[repo_url]\" placeholder=\"https://github.com/getgrav/grav.git\" value=\"{{ settings.repository|default('') }}\" />
                </label>
            </p>

            <p class=\"center\">
                <a href=\"#\" class=\"button\" data-gitsync-action=\"test\"><i class=\"fa fa-fw fa-plug\"></i> Test Connection</a>
            </p>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>

    <div class=\"step-3\">
        <h1>Step 3 - Setting up the Webhook</h1>
        <div class=\"panel hidden disabled\" data-gitsync-uribase=\"{{ frontend_url }}\">
            <p>
                The Webhook allows to synchronize the site every time a change happens in the repository. The Webhook is an URL that needs to be setup in the repository. By Default the Webhook is set to <code>/_git-sync</code> but you can change it to whatever name you'd like</p>

            <p>
                <label>
                    Webhook
                    <input type=\"text\" name=\"gitsync[webhook]\" placeholder=\"/_git-sync\" value=\"{{ settings.webhook|default('/_git-sync') }}\" />
                </label>
            </p>

            <p>
                In order to setup the Webhook in your repository, please follow the steps below. If you haven't already created a repository from the previous steps, now it's the time to do so.
            </p>

            <div class=\"hidden-step-github wizard-padding hidden\">
                <h4>GitHub</h4>
                <ol>
                    <li>Head to the repository on GitHub and click on <code>Settings</code></li>
                    <li>Click on <code>Webhooks</code> in the left sidebar</li>
                    <li>Click on the <code>Add webhook</code> button on the right</li>
                    <li>
                        Compile the form as follows
                        <ul>
                            <li><strong>Payload URL</strong>: <code>{{ frontend_url }}<span class=\"gitsync-webhook\">{{ settings.webhook|default('/_git-sync') }}</span></code></li>
                            <li><strong>Content type</strong>: <code>application/json</code></li>
                            <li><strong>Secret</strong>: <em>leave empty</em></li>
                            <li><strong>Which events would you like to trigger this webhook?</strong> <code>Just the push event.</code></li>
                            <li><strong>Active</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Add webhook</code> button</li>
                </ol>
            </div>

            <div class=\"hidden-step-bitbucket wizard-padding hidden\">
                <h4>Bitbucket</h4>
                <ol>
                    <li>Head to the repository on Bitbucket and click on <code><i class=\"fa fa-cog\"></i> Settings</code> in the sidebar (if the sidebar is collapsed, this is represented by just a <i class=\"fa fa-cog\"></i>)</li>
                    <li>Click on <code>Webhooks</code> on the left sidebar of the page that just loaded</li>
                    <li>Click on the <code>Add webhook</code> button at the top</li>
                    <li>
                        Compile the form as follows
                        <ul>
                            <li><strong>Title</strong>: <em>any title you like, ie. GitSync</em></li>
                            <li><strong>URL</strong>: <code>{{ frontend_url }}<span class=\"gitsync-webhook\">{{ settings.webhook|default('/_git-sync') }}</span></code></li>
                            <li><strong>Active</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                            <li><strong>Repository push</strong>: <i class=\"fa fa-dot-circle-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Save</code> button</li>
                </ol>
            </div>
            <div class=\"hidden-step-gitlab wizard-padding hidden\">
                <h4>GitLab</h4>
                <ol>
                    <li>Head to the repository on GitLab and click on <code><i class=\"fa fa-cog\"></i></code> dropdown button at the top right of the page</li>
                    <li>Select <code>Webhooks</code> from the list</li>
                    <li>
                        Compile the form as follows
                        <ul>
                            <li><strong>URL</strong>: <code>{{ frontend_url }}<span class=\"gitsync-webhook\">{{ settings.webhook|default('/_git-sync') }}</span></code></li>
                            <li><strong>Secret Token</strong>: <em>leave empty</em></li>
                            <li><strong>Push events</strong>: <i class=\"fa fa-check-square-o\"></i></li>
                        </ul>
                    </li>
                    <li>Click the <code>Add Webhook</code> button</li>
                </ol>
            </div>

            <p>
                Press <strong>Save</strong> to complete the setup.
            </p>
        </div>
    </div>

    {#<div class=\"step-4\">
        <h1>Step 4 - Choose what to Synchronize</h1>
        <div class=\"panel hidden disabled\">
            <p>
                You can choose to synchronize any portion of the <strong>user/</strong> folder independently. It is highly encouraged not to synchronize the <strong>config/</strong> and <strong>data/</strong> folders because they might contain sensitive data you might not realize gets shared publicly.
            </p>

            <div class=\"columns wizard-padding\">
                <div class=\"column\">
                    <label class=\"disabled\">
                        <input type=\"checkbox\" value=\"config\" name=\"gitsync[folders]\" disabled />
                        Config
                    </label>
                    <label class=\"disabled\">
                        <input type=\"checkbox\" value=\"data\" name=\"gitsync[folders]\" disabled />
                        Data
                    </label>
                    <label>
                        <input type=\"checkbox\" value=\"pages\" name=\"gitsync[folders]\" {{ not settings.folders or 'pages' in settings.folders ? 'checked' : '' }} />
                        Pages
                    </label>
                    <label class=\"disabled\">
                        <input type=\"checkbox\" value=\"plugins\" name=\"gitsync[folders]\" disabled />
                        Plugins
                    </label>
                    <label>
                        <input type=\"checkbox\" value=\"themes\" name=\"gitsync[folders]\" disabled />
                        Themes
                    </label>
                </div>
                <div class=\"column\">
                    <p>Description when hovering over one of the Items on left</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores aut cupiditate dolorem, exercitationem hic illo in modi nisi nobis nostrum nulla quae quaerat quas, quo repellendus sapiente sed suscipit vero?</p>
                </div>
            </div>

            <p>
                Press <strong>Next</strong> to continue.
            </p>
        </div>
    </div>#}

    <div class=\"button-bar\">
        <a class=\"button secondary float-left\" data-remodal-action=\"cancel\" href=\"#\">Cancel</a>
        <a class=\"button hidden\" data-gitsync-action=\"previous\" href=\"#\"><i class=\"fa fa-fw fa-chevron-left\"></i> Previous</a>
        <a class=\"button\" data-gitsync-action=\"next\" href=\"#\">Next <i class=\"fa fa-fw fa-chevron-right\"></i></a>
        <a class=\"button hidden\" data-gitsync-action=\"save\" href=\"#\"><i class=\"fa fa-fw fa-check\"></i> Save</a>
    </div>
    {% else %}
        <div class=\"step-0\">
            <div class=\"panel\">
                <p>
                    The <strong>GitSync</strong> plugin requires the <i class=\"fa fa-fw fa-git\"></i> binary to be installed and accessible in order to work.</p>

                <p>
                    If <i class=\"fa fa-fw fa-git\"></i> is missing from your hosting provider, you should open a ticket with them and request for it to be installed.
                </p>
            </div>
        </div>
        <div class=\"button-bar\">
            <a class=\"button secondary float-left\" data-remodal-action=\"cancel\" href=\"#\">Close</a>
        </div>
    {% endif %}
</div>
", "partials/modal-wizard.html.twig", "/var/www/html/grav/user/plugins/git-sync/templates/partials/modal-wizard.html.twig");
    }
}

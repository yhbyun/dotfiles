





<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
  <link rel="dns-prefetch" href="https://assets-cdn.github.com">
  <link rel="dns-prefetch" href="https://avatars0.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars1.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars2.githubusercontent.com">
  <link rel="dns-prefetch" href="https://avatars3.githubusercontent.com">
  <link rel="dns-prefetch" href="https://github-cloud.s3.amazonaws.com">
  <link rel="dns-prefetch" href="https://user-images.githubusercontent.com/">



  <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/frameworks-bedfc518345498ab3204d330c1727cde7e733526a09cd7df6867f6a231565091.css" media="all" rel="stylesheet" />
  <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/github-980cd404854e87ee88b12c7281a0875365a8f966c834dc30f3f656011f7f4df6.css" media="all" rel="stylesheet" />
  
  
  <link crossorigin="anonymous" href="https://assets-cdn.github.com/assets/site-877643c520258c4fa15ac8d1664d84efd0e3db56f5e544ccac58da0e50489904.css" media="all" rel="stylesheet" />
  

  <meta name="viewport" content="width=device-width">
  
  <title>dotfiles/vim/skeletons/skeleton.php at master · pgilad/dotfiles · GitHub</title>
  <link rel="search" type="application/opensearchdescription+xml" href="/opensearch.xml" title="GitHub">
  <link rel="fluid-icon" href="https://github.com/fluidicon.png" title="GitHub">
  <meta property="fb:app_id" content="1401488693436528">

    
    <meta content="https://avatars2.githubusercontent.com/u/4533329?v=4&amp;s=400" property="og:image" /><meta content="GitHub" property="og:site_name" /><meta content="object" property="og:type" /><meta content="pgilad/dotfiles" property="og:title" /><meta content="https://github.com/pgilad/dotfiles" property="og:url" /><meta content="dotfiles - Zsh managed by Zplug, Vim managed by NeoBundle" property="og:description" />

  <link rel="assets" href="https://assets-cdn.github.com/">
  
  <meta name="pjax-timeout" content="1000">
  
  <meta name="request-id" content="88F6:884F:D0FC2B:13FDE0D:59B4DC80" data-pjax-transient>
  

  <meta name="selected-link" value="repo_source" data-pjax-transient>

  <meta name="google-site-verification" content="KT5gs8h0wvaagLKAVWq8bbeNwnZZK1r1XQysX3xurLU">
<meta name="google-site-verification" content="ZzhVyEFwb7w3e0-uOTltm8Jsck2F5StVihD0exw2fsA">
    <meta name="google-analytics" content="UA-3769691-2">

<meta content="collector.githubapp.com" name="octolytics-host" /><meta content="github" name="octolytics-app-id" /><meta content="https://collector.githubapp.com/github-external/browser_event" name="octolytics-event-url" /><meta content="88F6:884F:D0FC2B:13FDE0D:59B4DC80" name="octolytics-dimension-request_id" /><meta content="sea" name="octolytics-dimension-region_edge" /><meta content="iad" name="octolytics-dimension-region_render" />
<meta content="/&lt;user-name&gt;/&lt;repo-name&gt;/blob/blame" data-pjax-transient="true" name="analytics-location" />




  <meta class="js-ga-set" name="dimension1" content="Logged Out">


  

      <meta name="hostname" content="github.com">
  <meta name="user-login" content="">

      <meta name="expected-hostname" content="github.com">
    <meta name="js-proxy-site-detection-payload" content="ZDA3MmZhZjQ0ODJlODBkYTBiODJjNGVjYWU2ODI2ZWFjZjQ1YTA5MGJjZGQ3NWIzMDEzMDIxZTA1YmNmYWM0Znx7InJlbW90ZV9hZGRyZXNzIjoiMTE0LjIwNC4xMS41NyIsInJlcXVlc3RfaWQiOiI4OEY2Ojg4NEY6RDBGQzJCOjEzRkRFMEQ6NTlCNERDODAiLCJ0aW1lc3RhbXAiOjE1MDUwMjUxNTMsImhvc3QiOiJnaXRodWIuY29tIn0=">


  <meta name="html-safe-nonce" content="b4afeba71fc48883b6c273b9106c9f8c24174fc6">

  <meta http-equiv="x-pjax-version" content="374d3000b7ab48f823a919af6164f269">
  

      <link href="https://github.com/pgilad/dotfiles/commits/master.atom" rel="alternate" title="Recent Commits to dotfiles:master" type="application/atom+xml">

  <meta name="description" content="dotfiles - Zsh managed by Zplug, Vim managed by NeoBundle">
  <meta name="go-import" content="github.com/pgilad/dotfiles git https://github.com/pgilad/dotfiles.git">

  <meta content="4533329" name="octolytics-dimension-user_id" /><meta content="pgilad" name="octolytics-dimension-user_login" /><meta content="15008956" name="octolytics-dimension-repository_id" /><meta content="pgilad/dotfiles" name="octolytics-dimension-repository_nwo" /><meta content="true" name="octolytics-dimension-repository_public" /><meta content="false" name="octolytics-dimension-repository_is_fork" /><meta content="15008956" name="octolytics-dimension-repository_network_root_id" /><meta content="pgilad/dotfiles" name="octolytics-dimension-repository_network_root_nwo" /><meta content="false" name="octolytics-dimension-repository_explore_github_marketplace_ci_cta_shown" />




  <meta name="browser-stats-url" content="https://api.github.com/_private/browser/stats">

  <meta name="browser-errors-url" content="https://api.github.com/_private/browser/errors">

  <link rel="mask-icon" href="https://assets-cdn.github.com/pinned-octocat.svg" color="#000000">
  <link rel="icon" type="image/x-icon" href="https://assets-cdn.github.com/favicon.ico">

<meta name="theme-color" content="#1e2327">



  </head>

  <body class="logged-out env-production full-width">
    

  <div class="position-relative js-header-wrapper ">
    <a href="#start-of-content" tabindex="1" class="px-2 py-4 show-on-focus js-skip-to-content">Skip to content</a>
    <div id="js-pjax-loader-bar" class="pjax-loader-bar"><div class="progress"></div></div>

    
    
    



        <header class="Header header-logged-out  position-relative f4 py-3" role="banner">
  <div class="container-lg d-flex px-3">
    <div class="d-flex flex-justify-between flex-items-center">
      <a class="header-logo-invertocat my-0" href="https://github.com/" aria-label="Homepage" data-ga-click="(Logged out) Header, go to homepage, icon:logo-wordmark">
        <svg aria-hidden="true" class="octicon octicon-mark-github" height="32" version="1.1" viewBox="0 0 16 16" width="32"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"/></svg>
      </a>

    </div>

    <div class="HeaderMenu HeaderMenu--bright d-flex flex-justify-between flex-auto">
        <nav class="mt-0">
          <ul class="d-flex list-style-none">
              <li class="ml-2">
                <a href="/features" class="js-selected-navigation-item HeaderNavlink px-0 py-2 m-0" data-ga-click="Header, click, Nav menu - item:features" data-selected-links="/features /features/project-management /features/code-review /features/project-management /features/integrations /features">
                  Features
</a>              </li>
              <li class="ml-4">
                <a href="/business" class="js-selected-navigation-item HeaderNavlink px-0 py-2 m-0" data-ga-click="Header, click, Nav menu - item:business" data-selected-links="/business /business/security /business/customers /business">
                  Business
</a>              </li>

              <li class="ml-4">
                <a href="/explore" class="js-selected-navigation-item HeaderNavlink px-0 py-2 m-0" data-ga-click="Header, click, Nav menu - item:explore" data-selected-links="/explore /trending /trending/developers /integrations /integrations/feature/code /integrations/feature/collaborate /integrations/feature/ship showcases showcases_search showcases_landing /explore">
                  Explore
</a>              </li>

              <li class="ml-4">
                    <a href="/marketplace" class="js-selected-navigation-item HeaderNavlink px-0 py-2 m-0" data-ga-click="Header, click, Nav menu - item:marketplace" data-selected-links=" /marketplace">
                      Marketplace
</a>              </li>
              <li class="ml-4">
                <a href="/pricing" class="js-selected-navigation-item HeaderNavlink px-0 py-2 m-0" data-ga-click="Header, click, Nav menu - item:pricing" data-selected-links="/pricing /pricing/developer /pricing/team /pricing/business-hosted /pricing/business-enterprise /pricing">
                  Pricing
</a>              </li>
          </ul>
        </nav>

      <div class="d-flex">
          <div class="d-lg-flex flex-items-center mr-3">
            <div class="header-search scoped-search site-scoped-search js-site-search" role="search">
  <!-- '"` --><!-- </textarea></xmp> --></option></form><form accept-charset="UTF-8" action="/pgilad/dotfiles/search" class="js-site-search-form" data-scoped-search-url="/pgilad/dotfiles/search" data-unscoped-search-url="/search" method="get"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /></div>
    <label class="form-control header-search-wrapper js-chromeless-input-container">
        <a href="/pgilad/dotfiles/blame/master/vim/skeletons/skeleton.php" class="header-search-scope no-underline">This repository</a>
      <input type="text"
        class="form-control header-search-input js-site-search-focus js-site-search-field is-clearable"
        data-hotkey="s"
        name="q"
        value=""
        placeholder="Search"
        aria-label="Search this repository"
        data-unscoped-placeholder="Search GitHub"
        data-scoped-placeholder="Search"
        autocapitalize="off">
        <input type="hidden" class="js-site-search-type-field" name="type" >
    </label>
</form></div>

          </div>

        <span class="d-inline-block">
            <div class="HeaderNavlink px-0 py-2 m-0">
              <a class="text-bold text-white no-underline" href="/login?return_to=%2Fpgilad%2Fdotfiles%2Fblame%2Fmaster%2Fvim%2Fskeletons%2Fskeleton.php" data-ga-click="(Logged out) Header, clicked Sign in, text:sign-in">Sign in</a>
                <span class="text-gray">or</span>
                <a class="text-bold text-white no-underline" href="/join?source=header-repo" data-ga-click="(Logged out) Header, clicked Sign up, text:sign-up">Sign up</a>
            </div>
        </span>
      </div>
    </div>
  </div>
</header>


  </div>

  <div id="start-of-content" class="show-on-focus"></div>

    <div id="js-flash-container">
</div>



  <div role="main">
        <div itemscope itemtype="http://schema.org/SoftwareSourceCode">
    <div id="js-repo-pjax-container" data-pjax-container>
      




    <div class="pagehead repohead instapaper_ignore readability-menu experiment-repo-nav">
      <div class="container repohead-details-container">

        <ul class="pagehead-actions">
  <li>
      <a href="/login?return_to=%2Fpgilad%2Fdotfiles"
    class="btn btn-sm btn-with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to watch a repository" rel="nofollow">
    <svg aria-hidden="true" class="octicon octicon-eye" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.06 2C3 2 0 8 0 8s3 6 8.06 6C13 14 16 8 16 8s-3-6-7.94-6zM8 12c-2.2 0-4-1.78-4-4 0-2.2 1.8-4 4-4 2.22 0 4 1.8 4 4 0 2.22-1.78 4-4 4zm2-4c0 1.11-.89 2-2 2-1.11 0-2-.89-2-2 0-1.11.89-2 2-2 1.11 0 2 .89 2 2z"/></svg>
    Watch
  </a>
  <a class="social-count" href="/pgilad/dotfiles/watchers"
     aria-label="1 user is watching this repository">
    1
  </a>

  </li>

  <li>
      <a href="/login?return_to=%2Fpgilad%2Fdotfiles"
    class="btn btn-sm btn-with-count tooltipped tooltipped-n"
    aria-label="You must be signed in to star a repository" rel="nofollow">
    <svg aria-hidden="true" class="octicon octicon-star" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M14 6l-4.9-.64L7 1 4.9 5.36 0 6l3.6 3.26L2.67 14 7 11.67 11.33 14l-.93-4.74z"/></svg>
    Star
  </a>

    <a class="social-count js-social-count" href="/pgilad/dotfiles/stargazers"
      aria-label="19 users starred this repository">
      19
    </a>

  </li>

  <li>
      <a href="/login?return_to=%2Fpgilad%2Fdotfiles"
        class="btn btn-sm btn-with-count tooltipped tooltipped-n"
        aria-label="You must be signed in to fork a repository" rel="nofollow">
        <svg aria-hidden="true" class="octicon octicon-repo-forked" height="16" version="1.1" viewBox="0 0 10 16" width="10"><path fill-rule="evenodd" d="M8 1a1.993 1.993 0 0 0-1 3.72V6L5 8 3 6V4.72A1.993 1.993 0 0 0 2 1a1.993 1.993 0 0 0-1 3.72V6.5l3 3v1.78A1.993 1.993 0 0 0 5 15a1.993 1.993 0 0 0 1-3.72V9.5l3-3V4.72A1.993 1.993 0 0 0 8 1zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3 10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zm3-10c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg>
        Fork
      </a>

    <a href="/pgilad/dotfiles/network" class="social-count"
       aria-label="6 users forked this repository">
      6
    </a>
  </li>
</ul>

        <h1 class="public ">
  <svg aria-hidden="true" class="octicon octicon-repo" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M4 9H3V8h1v1zm0-3H3v1h1V6zm0-2H3v1h1V4zm0-2H3v1h1V2zm8-1v12c0 .55-.45 1-1 1H6v2l-1.5-1.5L3 16v-2H1c-.55 0-1-.45-1-1V1c0-.55.45-1 1-1h10c.55 0 1 .45 1 1zm-1 10H1v2h2v-1h3v1h5v-2zm0-10H2v9h9V1z"/></svg>
  <span class="author" itemprop="author"><a href="/pgilad" class="url fn" rel="author">pgilad</a></span><!--
--><span class="path-divider">/</span><!--
--><strong itemprop="name"><a href="/pgilad/dotfiles" data-pjax="#js-repo-pjax-container">dotfiles</a></strong>

</h1>

      </div>
      <div class="container">
        
<nav class="reponav js-repo-nav js-sidenav-container-pjax"
     itemscope
     itemtype="http://schema.org/BreadcrumbList"
     role="navigation"
     data-pjax="#js-repo-pjax-container">

  <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a href="/pgilad/dotfiles" class="js-selected-navigation-item selected reponav-item" data-hotkey="g c" data-selected-links="repo_source repo_downloads repo_commits repo_releases repo_tags repo_branches /pgilad/dotfiles" itemprop="url">
      <svg aria-hidden="true" class="octicon octicon-code" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M9.5 3L8 4.5 11.5 8 8 11.5 9.5 13 14 8 9.5 3zm-5 0L0 8l4.5 5L6 11.5 2.5 8 6 4.5 4.5 3z"/></svg>
      <span itemprop="name">Code</span>
      <meta itemprop="position" content="1">
</a>  </span>

    <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
      <a href="/pgilad/dotfiles/issues" class="js-selected-navigation-item reponav-item" data-hotkey="g i" data-selected-links="repo_issues repo_labels repo_milestones /pgilad/dotfiles/issues" itemprop="url">
        <svg aria-hidden="true" class="octicon octicon-issue-opened" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M7 2.3c3.14 0 5.7 2.56 5.7 5.7s-2.56 5.7-5.7 5.7A5.71 5.71 0 0 1 1.3 8c0-3.14 2.56-5.7 5.7-5.7zM7 1C3.14 1 0 4.14 0 8s3.14 7 7 7 7-3.14 7-7-3.14-7-7-7zm1 3H6v5h2V4zm0 6H6v2h2v-2z"/></svg>
        <span itemprop="name">Issues</span>
        <span class="Counter">0</span>
        <meta itemprop="position" content="2">
</a>    </span>

  <span itemscope itemtype="http://schema.org/ListItem" itemprop="itemListElement">
    <a href="/pgilad/dotfiles/pulls" class="js-selected-navigation-item reponav-item" data-hotkey="g p" data-selected-links="repo_pulls /pgilad/dotfiles/pulls" itemprop="url">
      <svg aria-hidden="true" class="octicon octicon-git-pull-request" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M11 11.28V5c-.03-.78-.34-1.47-.94-2.06C9.46 2.35 8.78 2.03 8 2H7V0L4 3l3 3V4h1c.27.02.48.11.69.31.21.2.3.42.31.69v6.28A1.993 1.993 0 0 0 10 15a1.993 1.993 0 0 0 1-3.72zm-1 2.92c-.66 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2zM4 3c0-1.11-.89-2-2-2a1.993 1.993 0 0 0-1 3.72v6.56A1.993 1.993 0 0 0 2 15a1.993 1.993 0 0 0 1-3.72V4.72c.59-.34 1-.98 1-1.72zm-.8 10c0 .66-.55 1.2-1.2 1.2-.65 0-1.2-.55-1.2-1.2 0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2zM2 4.2C1.34 4.2.8 3.65.8 3c0-.65.55-1.2 1.2-1.2.65 0 1.2.55 1.2 1.2 0 .65-.55 1.2-1.2 1.2z"/></svg>
      <span itemprop="name">Pull requests</span>
      <span class="Counter">0</span>
      <meta itemprop="position" content="3">
</a>  </span>

    <a href="/pgilad/dotfiles/projects" class="js-selected-navigation-item reponav-item" data-selected-links="repo_projects new_repo_project repo_project /pgilad/dotfiles/projects">
      <svg aria-hidden="true" class="octicon octicon-project" height="16" version="1.1" viewBox="0 0 15 16" width="15"><path fill-rule="evenodd" d="M10 12h3V2h-3v10zm-4-2h3V2H6v8zm-4 4h3V2H2v12zm-1 1h13V1H1v14zM14 0H1a1 1 0 0 0-1 1v14a1 1 0 0 0 1 1h13a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1z"/></svg>
      Projects
      <span class="Counter" >0</span>
</a>


    <div class="reponav-dropdown js-menu-container">
      <button type="button" class="btn-link reponav-item reponav-dropdown js-menu-target " data-no-toggle aria-expanded="false" aria-haspopup="true">
        Insights
        <svg aria-hidden="true" class="octicon octicon-triangle-down v-align-middle text-gray" height="11" version="1.1" viewBox="0 0 12 16" width="8"><path fill-rule="evenodd" d="M0 5l6 6 6-6z"/></svg>
      </button>
      <div class="dropdown-menu-content js-menu-content">
        <div class="dropdown-menu dropdown-menu-sw">
          <a class="dropdown-item" href="/pgilad/dotfiles/pulse" data-skip-pjax>
            <svg aria-hidden="true" class="octicon octicon-pulse" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M11.5 8L8.8 5.4 6.6 8.5 5.5 1.6 2.38 8H0v2h3.6l.9-1.8.9 5.4L9 8.5l1.6 1.5H14V8z"/></svg>
            Pulse
          </a>
          <a class="dropdown-item" href="/pgilad/dotfiles/graphs" data-skip-pjax>
            <svg aria-hidden="true" class="octicon octicon-graph" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M16 14v1H0V0h1v14h15zM5 13H3V8h2v5zm4 0H7V3h2v10zm4 0h-2V6h2v7z"/></svg>
            Graphs
          </a>
        </div>
      </div>
    </div>
</nav>

      </div>
    </div>

<div class="container new-discussion-timeline experiment-repo-nav">
  <div class="repository-content">

    

  <div class="wants-full-width-container"></div>

  <a href="/pgilad/dotfiles/blame/518e1cc10461e9758d44067d0f1078e6fd91332e/vim/skeletons/skeleton.php" class="d-none js-permalink-shortcut" data-hotkey="y">Permalink</a>

  <div class="breadcrumb css-truncate blame-breadcrumb js-zeroclipboard-container">
    <span class="css-truncate-target js-zeroclipboard-target"><span class="repo-root js-repo-root"><span class="js-path-segment"><a href="/pgilad/dotfiles"><span>dotfiles</span></a></span></span><span class="separator">/</span><span class="js-path-segment"><a href="/pgilad/dotfiles/tree/master/vim"><span>vim</span></a></span><span class="separator">/</span><span class="js-path-segment"><a href="/pgilad/dotfiles/tree/master/vim/skeletons"><span>skeletons</span></a></span><span class="separator">/</span><strong class="final-path">skeleton.php</strong></span>
    <button aria-label="Copy file path to clipboard" class="js-zeroclipboard btn btn-sm zeroclipboard-button tooltipped tooltipped-s" data-copied-hint="Copied!" type="button"><svg aria-hidden="true" class="octicon octicon-clippy" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M2 13h4v1H2v-1zm5-6H2v1h5V7zm2 3V8l-3 3 3 3v-2h5v-2H9zM4.5 9H2v1h2.5V9zM2 12h2.5v-1H2v1zm9 1h1v2c-.02.28-.11.52-.3.7-.19.18-.42.28-.7.3H1c-.55 0-1-.45-1-1V4c0-.55.45-1 1-1h3c0-1.11.89-2 2-2 1.11 0 2 .89 2 2h3c.55 0 1 .45 1 1v5h-1V6H1v9h10v-2zM2 5h8c0-.55-.45-1-1-1H8c-.55 0-1-.45-1-1s-.45-1-1-1-1 .45-1 1-.45 1-1 1H3c-.55 0-1 .45-1 1z"/></svg></button>
  </div>

  <div class="line-age-legend">
    <span>Newer</span>
    <ol>
        <li class="heat" data-heat="1"></li>
        <li class="heat" data-heat="2"></li>
        <li class="heat" data-heat="3"></li>
        <li class="heat" data-heat="4"></li>
        <li class="heat" data-heat="5"></li>
        <li class="heat" data-heat="6"></li>
        <li class="heat" data-heat="7"></li>
        <li class="heat" data-heat="8"></li>
        <li class="heat" data-heat="9"></li>
        <li class="heat" data-heat="10"></li>
    </ol>
    <span>Older</span>
  </div>

  <div class="file">
    <div class="file-header">
      <div class="file-actions">
        <div class="BtnGroup">
          <a href="/pgilad/dotfiles/raw/master/vim/skeletons/skeleton.php" class="btn btn-sm BtnGroup-item" id="raw-url">Raw</a>
          <a href="/pgilad/dotfiles/blob/master/vim/skeletons/skeleton.php" class="btn btn-sm js-update-url-with-hash BtnGroup-item">Normal view</a>
          <a href="/pgilad/dotfiles/commits/master/vim/skeletons/skeleton.php" class="btn btn-sm BtnGroup-item" rel="nofollow">History</a>
        </div>
      </div>

  

      <div class="file-info">
        <svg aria-hidden="true" class="octicon octicon-file-text" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path d="M6 5H2V4h4v1zM2 8h7V7H2v1zm0 2h7V9H2v1zm0 2h7v-1H2v1zm10-7.5V14c0 .55-.45 1-1 1H1c-.55 0-1-.45-1-1V2c0-.55.45-1 1-1h7.5L12 4.5zM11 5L8 2H1v12h10V5z"/></svg>
        <span class="file-mode" title="File Mode">100644</span>
        <span class="file-info-divider"></span>
          6 lines (4 sloc)
          <span class="file-info-divider"></span>
        50 Bytes
      </div>
    </div>

    <div class="blob-wrapper">
      <table class="blame-container highlight data js-file-line-container tab-size" data-tab-size="8">
          <tbody class="blame-hunk">
            <tr class="blame-commit">
              <td class="blame-commit-info" rowspan="3">
                <span class="blame-commit-date" data-heat="10"><time-ago datetime="2014-05-10T12:26:33Z">May 10, 2014</time-ago></span>
                <a href="/pgilad" aria-label="pgilad" class="tooltipped tooltipped-e">
                  <img alt="@pgilad" class="avatar blame-commit-avatar" height="16" src="https://avatars2.githubusercontent.com/u/4533329?v=4&amp;s=32" width="16" />
</a>                <span class="blame-commit-title">
                    <a href="/pgilad/dotfiles/commit/84d28c769dd97dcd23c68ddef4998221fa040d54" class="message" data-pjax="true" title="minor">minor</a>
                </span>
              </td>
              <td class="blob-reblame" rowspan="3">
              </td>
            </tr>

              <tr class="blame-line">
                <td class="line-age heat" data-heat="10"></td>
                <td class="blob-num blame-blob-num js-line-number" id="L1">1</td>
                <td class="blob-code blob-code-inner js-file-line" id="LC1"><span class="pl-pse">&lt;?php</span><span class="pl-s1"></span></td>
              </tr>
              <tr class="blame-line">
                <td class="line-age heat" data-heat="10"></td>
                <td class="blob-num blame-blob-num js-line-number" id="L2">2</td>
                <td class="blob-code blob-code-inner js-file-line" id="LC2"><span class="pl-s1"></span></td>
              </tr>
          </tbody>
          <tbody class="blame-hunk">
            <tr class="blame-commit">
              <td class="blame-commit-info" rowspan="2">
                <span class="blame-commit-date" data-heat="10"><time-ago datetime="2015-07-09T09:39:06Z">Jul 9, 2015</time-ago></span>
                <a href="/pgilad" aria-label="pgilad" class="tooltipped tooltipped-e">
                  <img alt="@pgilad" class="avatar blame-commit-avatar" height="16" src="https://avatars2.githubusercontent.com/u/4533329?v=4&amp;s=32" width="16" />
</a>                <span class="blame-commit-title">
                    <a href="/pgilad/dotfiles/commit/2e8de8641970f33e31fcb21af0ca775fe06f5d4e" class="message" data-pjax="true" title="Updates">Updates</a>
                </span>
              </td>
              <td class="blob-reblame" rowspan="2">
                  <a href="/pgilad/dotfiles/blame/9843f53cf120db85ac972792e82eae0683e7efbd/vim/skeletons/skeleton.php"
                    aria-label="View blame prior to this change" class="reblame-link tooltipped tooltipped-w">
                    <svg aria-hidden="true" class="octicon octicon-versions" height="16" version="1.1" viewBox="0 0 14 16" width="14"><path fill-rule="evenodd" d="M13 3H7c-.55 0-1 .45-1 1v8c0 .55.45 1 1 1h6c.55 0 1-.45 1-1V4c0-.55-.45-1-1-1zm-1 8H8V5h4v6zM4 4h1v1H4v6h1v1H4c-.55 0-1-.45-1-1V5c0-.55.45-1 1-1zM1 5h1v1H1v4h1v1H1c-.55 0-1-.45-1-1V6c0-.55.45-1 1-1z"/></svg>
                  </a>
              </td>
            </tr>

              <tr class="blame-line">
                <td class="line-age heat" data-heat="10"></td>
                <td class="blob-num blame-blob-num js-line-number" id="L3">3</td>
                <td class="blob-code blob-code-inner js-file-line" id="LC3"><span class="pl-s1"><span class="pl-k">class</span> ${<span class="pl-c1">2</span>:<span class="pl-s"><span class="pl-pds">`</span>!v expand(&quot;%:t:r&quot;)<span class="pl-pds">`</span></span>} {</span></td>
              </tr>
          </tbody>
          <tbody class="blame-hunk">
            <tr class="blame-commit">
              <td class="blame-commit-info" rowspan="3">
                <span class="blame-commit-date" data-heat="10"><time-ago datetime="2014-05-10T12:26:33Z">May 10, 2014</time-ago></span>
                <a href="/pgilad" aria-label="pgilad" class="tooltipped tooltipped-e">
                  <img alt="@pgilad" class="avatar blame-commit-avatar" height="16" src="https://avatars2.githubusercontent.com/u/4533329?v=4&amp;s=32" width="16" />
</a>                <span class="blame-commit-title">
                    <a href="/pgilad/dotfiles/commit/84d28c769dd97dcd23c68ddef4998221fa040d54" class="message" data-pjax="true" title="minor">minor</a>
                </span>
              </td>
              <td class="blob-reblame" rowspan="3">
              </td>
            </tr>

              <tr class="blame-line">
                <td class="line-age heat" data-heat="10"></td>
                <td class="blob-num blame-blob-num js-line-number" id="L4">4</td>
                <td class="blob-code blob-code-inner js-file-line" id="LC4"><span class="pl-s1">    $<span class="pl-c1">0</span></span></td>
              </tr>
              <tr class="blame-line">
                <td class="line-age heat" data-heat="10"></td>
                <td class="blob-num blame-blob-num js-line-number" id="L5">5</td>
                <td class="blob-code blob-code-inner js-file-line" id="LC5"><span class="pl-s1">}</span></td>
              </tr>
          </tbody>
      </table>
    </div>

  </div>


  </div>
  <div class="modal-backdrop js-touch-events"></div>
</div>

    </div>
  </div>

  </div>

      
<div class="footer container-lg px-3" role="contentinfo">
  <div class="position-relative d-flex flex-justify-between py-6 mt-6 f6 text-gray border-top border-gray-light ">
    <ul class="list-style-none d-flex flex-wrap ">
      <li class="mr-3">&copy; 2017 <span title="0.11217s from unicorn-837911874-tbl61">GitHub</span>, Inc.</li>
        <li class="mr-3"><a href="https://github.com/site/terms" data-ga-click="Footer, go to terms, text:terms">Terms</a></li>
        <li class="mr-3"><a href="https://github.com/site/privacy" data-ga-click="Footer, go to privacy, text:privacy">Privacy</a></li>
        <li class="mr-3"><a href="https://github.com/security" data-ga-click="Footer, go to security, text:security">Security</a></li>
        <li class="mr-3"><a href="https://status.github.com/" data-ga-click="Footer, go to status, text:status">Status</a></li>
        <li><a href="https://help.github.com" data-ga-click="Footer, go to help, text:help">Help</a></li>
    </ul>

    <a href="https://github.com" aria-label="Homepage" class="footer-octicon" title="GitHub">
      <svg aria-hidden="true" class="octicon octicon-mark-github" height="24" version="1.1" viewBox="0 0 16 16" width="24"><path fill-rule="evenodd" d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.013 8.013 0 0 0 16 8c0-4.42-3.58-8-8-8z"/></svg>
</a>
    <ul class="list-style-none d-flex flex-wrap ">
        <li class="mr-3"><a href="https://github.com/contact" data-ga-click="Footer, go to contact, text:contact">Contact GitHub</a></li>
      <li class="mr-3"><a href="https://developer.github.com" data-ga-click="Footer, go to api, text:api">API</a></li>
      <li class="mr-3"><a href="https://training.github.com" data-ga-click="Footer, go to training, text:training">Training</a></li>
      <li class="mr-3"><a href="https://shop.github.com" data-ga-click="Footer, go to shop, text:shop">Shop</a></li>
        <li class="mr-3"><a href="https://github.com/blog" data-ga-click="Footer, go to blog, text:blog">Blog</a></li>
        <li><a href="https://github.com/about" data-ga-click="Footer, go to about, text:about">About</a></li>

    </ul>
  </div>
</div>



  <div id="ajax-error-message" class="ajax-error-message flash flash-error">
    <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"/></svg>
    <button type="button" class="flash-close js-flash-close js-ajax-error-dismiss" aria-label="Dismiss error">
      <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
    </button>
    You can't perform that action at this time.
  </div>


    <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/compat-91f98c37fc84eac24836eec2567e9912742094369a04c4eba6e3cd1fa18902d9.js"></script>
    <script crossorigin="anonymous" src="https://assets-cdn.github.com/assets/frameworks-d3f8e3cb05c4495afc78c37af32e877f99d47cb06a8158efafa2aebf5567c830.js"></script>
    
    <script async="async" crossorigin="anonymous" src="https://assets-cdn.github.com/assets/github-8a662586ed50ce5d122edec0eca4c2db052b63588ab3fc192b418f261d2d0b53.js"></script>
    
    
    
    
  <div class="js-stale-session-flash stale-session-flash flash flash-warn flash-banner d-none">
    <svg aria-hidden="true" class="octicon octicon-alert" height="16" version="1.1" viewBox="0 0 16 16" width="16"><path fill-rule="evenodd" d="M8.865 1.52c-.18-.31-.51-.5-.87-.5s-.69.19-.87.5L.275 13.5c-.18.31-.18.69 0 1 .19.31.52.5.87.5h13.7c.36 0 .69-.19.86-.5.17-.31.18-.69.01-1L8.865 1.52zM8.995 13h-2v-2h2v2zm0-3h-2V6h2v4z"/></svg>
    <span class="signed-in-tab-flash">You signed in with another tab or window. <a href="">Reload</a> to refresh your session.</span>
    <span class="signed-out-tab-flash">You signed out in another tab or window. <a href="">Reload</a> to refresh your session.</span>
  </div>
  <div class="facebox" id="facebox" style="display:none;">
  <div class="facebox-popup">
    <div class="facebox-content" role="dialog" aria-labelledby="facebox-header" aria-describedby="facebox-description">
    </div>
    <button type="button" class="facebox-close js-facebox-close" aria-label="Close modal">
      <svg aria-hidden="true" class="octicon octicon-x" height="16" version="1.1" viewBox="0 0 12 16" width="12"><path fill-rule="evenodd" d="M7.48 8l3.75 3.75-1.48 1.48L6 9.48l-3.75 3.75-1.48-1.48L4.52 8 .77 4.25l1.48-1.48L6 6.52l3.75-3.75 1.48 1.48z"/></svg>
    </button>
  </div>
</div>


  </body>
</html>


<?php
if (!isset($navbarStyle)) {
    $navbarStyle = 'default';
}

$menuItems = array(
    'home' => array(
        'url' => '/',
        'title' => 'Home'
    ),
    'about' => array(
        'url' => '/about.php',
        'title' => 'About'
    ),
    'team' => array(
        'url' => '/team.php',
        'title' => 'Team'
    ),
    'sponsors' => array(
        'url' => '/sponsors.php',
        'title' => 'Sponsors'
    ),
    'contact' => array(
        'url' => '/contact.php',
        'title' => 'Contact'
    )
);
?>
<div class="container">
    <div class="navbar navbar-<?php echo $navbarStyle; ?>" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="/"><img src="/img/logo-masthead.png" alt="Team Zuura"></a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                <?php foreach ($menuItems as $k => $v): ?>
                    <li <?php if ($currentPage == $k): ?>class="active"<?php endif; ?>>
                        <a href="<?php echo $v['url']; ?>" title="<?php echo $v['title']; ?>">
                            <?php echo $v['title']; ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</div>

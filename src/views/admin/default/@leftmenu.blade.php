<ul class="nav nav-pills flex-column">
    <li class="nav-item">
        <a href="{{ route('pages.index') }}" class="nav-link {{ Request()->route()->named('pages.*') ? ' active' : '' }}"><span class="fas fa-file-alt"></span>&nbsp;&nbsp;Pages</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('articles.index') }}" class="nav-link {{ Request()->route()->named('articles.*') ? ' active' : '' }}"><span class="far fa-file-alt"></span>&nbsp;&nbsp;Articles</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.tweets') }}" class="text-muted nav-link {{ Request()->route()->named('admin.tweets') ? ' active' : '' }}"><span class="fab fa-twitter"></span>&nbsp;&nbsp;Tweets</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.content') }}" class="text-muted nav-link {{ Request()->route()->named('admin.content') ? ' active' : '' }}"><span class="fas fa-th"></span>&nbsp;&nbsp;Content</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.comment') }}" class="text-muted nav-link {{ Request()->route()->named('admin.comment') ? ' active' : '' }}"><span class="far fa-comment-alt"></span>&nbsp;&nbsp;Comments</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('tags.index') }}" class="nav-link {{ Request()->route()->named('tags.*') ? ' active' : '' }}"><span class="fas fa-tag"></span>&nbsp;&nbsp;Tags</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.category') }}" class="text-muted nav-link {{ Request()->route()->named('admin.category') ? ' active' : '' }}"><span class="fas fa-sitemap"></span>&nbsp;&nbsp;Categories</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.file') }}" class="text-muted nav-link {{ Request()->route()->named('admin.file') ? ' active' : '' }}"><span class="far fa-file"></span>&nbsp;&nbsp;Files</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.gallery') }}" class="text-muted nav-link {{ Request()->route()->named('admin.gallery') ? ' active' : '' }}"><span class="far fa-image"></span>&nbsp;&nbsp;Galleries</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.menu') }}" class="text-muted nav-link {{ Request()->route()->named('admin.menu') ? ' active' : '' }}"><span class="fas fa-bars"></span>&nbsp;&nbsp;Menus</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.user') }}" class="text-muted nav-link {{ Request()->route()->named('admin.user') ? ' active' : '' }}"><span class="far fa-user"></span>&nbsp;&nbsp;Users</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.maillist') }}" class="text-muted nav-link {{ Request()->route()->named('admin.maillist') ? ' active' : '' }}"><span class="far fa-envelope"></span>&nbsp;&nbsp;MailList</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('admin.setting') }}" class="text-muted nav-link {{ Request()->route()->named('admin.setting') ? ' active' : '' }}"><span class="fas fa-cog"></span>&nbsp;&nbsp;Settings</a>
    </li>
    <li class="nav-item">
        <a href="{{ route('translates.index') }}" class="nav-link {{ Request()->route()->named('translates.*') ? ' active' : '' }}"><span class="fas fa-globe"></span>&nbsp;&nbsp;Translates</a>
    </li>
</ul>
<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('Creative Tim') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('home') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
        <li class="nav-item {{ ($activePage == 'category' || $activePage == 'category-create') ? ' active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#categories" aria-expanded="true">
                <i class="material-icons">category</i>
                <p>{{ __('Categories') }}
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse show" id="categories">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'category' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('category.index') }}">
                            <i class="material-icons">format_list_numbered</i>
                            <span class="sidebar-normal">{{ __('Category List') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'category-create' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('category.create') }}">
                            <i class="material-icons">add</i>
                            <span class="sidebar-normal">{{ __('Category Create') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item {{ ($activePage == 'blog' || $activePage == 'blog-create') ? ' active' : '' }}">
            <a class="nav-link" data-toggle="collapse" href="#blogs" aria-expanded="true">
                <i class="material-icons">rss_feed</i>
                <p>{{ __('Blogs') }}
                    <b class="caret"></b>
                </p>
            </a>
            <div class="collapse show" id="blogs">
                <ul class="nav">
                    <li class="nav-item{{ $activePage == 'blog' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('blog.index') }}">
                            <i class="material-icons">format_list_numbered</i>
                            <span class="sidebar-normal">{{ __('Blog List') }} </span>
                        </a>
                    </li>
                    <li class="nav-item{{ $activePage == 'blog-create' ? ' active' : '' }}">
                        <a class="nav-link" href="{{ route('blog.create') }}">
                            <i class="material-icons">add</i>
                            <span class="sidebar-normal">{{ __('Blog Create') }} </span>
                        </a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="nav-item{{ $activePage == 'comment' ? ' active' : '' }}">
        <a class="nav-link" href="/comment">
          <i class="material-icons">comment</i>
            <p>{{ __('Comments') }}</p>
        </a>
      </li>
        <li class="nav-item{{ $activePage == 'typography' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('typography') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Typography') }}</p>
        </a>
      </li>
        <li class="nav-item{{ $activePage == 'icons' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('icons') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Icons') }}</p>
        </a>
      </li>
        <li class="nav-item{{ $activePage == 'map' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('map') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Maps') }}</p>
        </a>
      </li>
        <li class="nav-item{{ $activePage == 'notifications' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('notifications') }}">
          <i class="material-icons">notifications</i>
          <p>{{ __('Notifications') }}</p>
        </a>
      </li>
        <li class="nav-item{{ $activePage == 'language' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('language') }}">
          <i class="material-icons">language</i>
          <p>{{ __('RTL Support') }}</p>
        </a>
      </li>
        <li class="nav-item active-pro{{ $activePage == 'upgrade' ? ' active' : '' }}">
        <a class="nav-link text-white bg-danger" href="{{ route('upgrade') }}">
          <i class="material-icons text-white">unarchive</i>
          <p>{{ __('Upgrade to PRO') }}</p>
        </a>
      </li>
    </ul>
  </div>
</div>

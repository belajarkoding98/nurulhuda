<div class="fixed-navbar">
    <div class="pull-left">
        <button type="button"
            class="menu-mobile-button glyphicon glyphicon-menu-hamburger js__menu_mobile"></button>
        <h1 class="page-title">@yield('title')</h1>
        <!-- /.page-title -->
    </div>
    <!-- /.pull-left -->
    <div class="pull-right">
        <!-- /.ico-item -->
        <div class="ico-item fa fa-arrows-alt js__full_screen"></div>
        <a href="#" class="ico-item pulse"><span class="ico-item fa fa-bell notice-alarm js__toggle_open"
                data-target="#notification-popup"></span></a>
        <a href="#" class="ico-item fa fa-power-off js__logout"></a>
    </div>
    <!-- /.pull-right -->
</div>

<div id="message-popup" class="notice-popup js__toggle" data-space="75">
    <h2 class="popup-title">Recent Messages<a href="#" class="pull-right text-danger">New message</a></h2>
    <!-- /.popup-title -->
    <div class="content">
        <ul class="notice-list">
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                    <span class="name">John Doe</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                        repellat voluptates.</span>
                    <span class="time">10 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                    <span class="name">Harry Halen</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                        repellat voluptates.</span>
                    <span class="time">15 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                    <span class="name">Thomas Taylor</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                        repellat voluptates.</span>
                    <span class="time">30 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                    <span class="name">Jennifer</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                        repellat voluptates.</span>
                    <span class="time">45 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/80x80" alt=""></span>
                    <span class="name">Helen Candy</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                        repellat voluptates.</span>
                    <span class="time">45 min</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                    <span class="name">Anna Cavan</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                        repellat voluptates.</span>
                    <span class="time">1 hour ago</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar bg-success"><i class="fa fa-user"></i></span>
                    <span class="name">Jenny Betty</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                        repellat voluptates.</span>
                    <spazn class="time">1 day ago</spazn>
                </a>
            </li>
            <li>
                <a href="#">
                    <span class="avatar"><img src="http://placehold.it/128x128" alt=""></span>
                    <span class="name">Denise Peterson</span>
                    <span class="desc">Amet odio neque nobis consequuntur consequatur a quae, impedit facere
                        repellat voluptates.</span>
                    <span class="time">1 year ago</span>
                </a>
            </li>
        </ul>
        <!-- /.notice-list -->
        <a href="#" class="notice-read-more">See more messages <i class="fa fa-angle-down"></i></a>
    </div>
    <!-- /.content -->
</div>
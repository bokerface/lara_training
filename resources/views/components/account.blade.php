<div class="account-item clearfix js-item-menu">
    <div class="image">
        <img src={{ URL::asset('images/icon/avatar-01.jpg') }} alt="John Doe" />
    </div>
    <div class="content">
        <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
    </div>
    <div class="account-dropdown js-dropdown">
        <div class="info clearfix">
            <div class="image">
                <a href="#">
                    <img src={{ URL::asset('images/icon/avatar-01.jpg') }} alt="John Doe" />
                </a>
            </div>
            <div class="content">
                <h5 class="name">
                    <a href="#">{{ Auth::user()->name }}</a>
                </h5>
                <span class="email">{{ Auth::user()->email }}
            </div>
        </div>
        <div class="account-dropdown__body">
            <div class="account-dropdown__item">
                <a href="#">
                    <i class="zmdi zmdi-account"></i>Account</a>
            </div>
            <div class="account-dropdown__item">
                <a href="#">
                    <i class="zmdi zmdi-settings"></i>Setting</a>
            </div>
            <div class="account-dropdown__item">
                <a class="" href="#">
                    <i class="zmdi zmdi-money-box"></i>Billing</a>
            </div>
        </div>
        <div class="account-dropdown__footer">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="zmdi zmdi-power"></i>{{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST"
                style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>

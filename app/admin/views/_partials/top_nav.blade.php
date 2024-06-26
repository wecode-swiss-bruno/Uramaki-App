@if(AdminAuth::isLogged())
    <nav class="navbar navbar-top navbar-expand navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-brand">
                <a class="logo" href="{{ admin_url('dashboard') }}">
                <img src="https://app.uramaki-store.com/assets/media/uploads/logo-uramaki-noir-1.png" alt="Uramaki Noir" style="width: 60px; height: auto;">

                </a>
            </div>

            <div class="page-title">
                <span>{!! Template::getHeading() !!}</span>
            </div>

            <div class="navbar navbar-right">
                <button
                    type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navSidebar"
                    aria-controls="navSidebar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="fa fa-bars"></span>
                </button>

                {!! $this->widgets['mainmenu']->render() !!}
            </div>
        </div>
    </nav>
@endif

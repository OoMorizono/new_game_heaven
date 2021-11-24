<nav class="navbar navbar-expand-lg navbar-light bg-light shadow border-b border-gray-100 mb-3">
    <a class="navbar-brand logo text-danger"  href="{{ route('womens.index') }}">GameHeaven</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link text-secondary" href="{{ route('womens.index') }}">Woman女の子と一緒にゲームをしよう<span
                        class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link text-secondary" href="http://localhost/dashboard">登録・ログイン<span
                        class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link text-secondary" href="http://localhost/logout">ログアウト<span
                        class="sr-only">(current)</span></a>
            </li>
        </ul>
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link text-secondary" href="{{ route('chatroom') }}">チャット<span
                        class="sr-only">(current)</span></a>
            </li>
        </ul>

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <div class="content">
                    <form action="{{ asset('charge') }}" method="POST">
                        {{ csrf_field() }}
                        <script src="https://checkout.stripe.com/checkout.js" class="stripe-button" data-key="{{ env('STRIPE_KEY') }}"
                            data-amount="1000" data-name="Stripe Demo" data-label="コインを購入する"
                            data-description="Online course about integrating Stripe"
                            data-image="https://stripe.com/img/documentation/checkout/marketplace.png" data-locale="auto"
                            data-currency="JPY">
                        </script>
                    </form>
                </div>
            </li>
        </ul>

        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="ゲームカテゴリー">
            <input class="form-control mr-sm-2" type="search" placeholder="フレンド名">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
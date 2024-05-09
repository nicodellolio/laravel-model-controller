<footer class=" border-top-4 border-top bg-dark border-warning text-light">

    <div class="disclaimer fs-3 p-5 text-center">
        <p>
            "The information presented on this page is derived from a private movie database and is intended for
            personal use only. Unauthorized duplication or distribution is strictly prohibited. The ratings and titles
            are subjective and reflect the opinions of the database's contributors."
        </p>
    </div>
    <div class="container">
        <div class="row-cols-3 d-flex flex-row fs-4 text-secondary">
            <div class="col">
                <ul class="list-unstyled text-center">
                    @foreach ($footer_items as $item)
                        <li>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <ul class="list-unstyled text-center">
                    @foreach ($footer_items as $item)
                        <li>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col">
                <ul class="list-unstyled text-center">
                    @foreach ($footer_items as $item)
                        <li>
                            {{ $item }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</footer>

@php
    $cars = [
        1 => 'Audi A6',
        2 => 'Suzuki Swift',
        3 => 'Suzuki Ignis',
    ];
@endphp
<nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Autók</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    @php $url = route("home") @endphp
                    @if (request()->routeIs('home'))
                        <a class="nav-link active" href="{{ $url }}" aria-current="page">Főoldal</a>
                    @else
                        <a class="nav-link" href="{{ $url }}">Főoldal</a>
                    @endif
                </li>

                @foreach ($cars as $id => $name)
                    <li class="nav-item">
                        @php
                            $url = route("show",["id" => $id])
                        @endphp

                        @if (request()->routeIs('show') && request()->route('id') == $id)
                            <a class="nav-link active" href="{{ $url }}"
                                aria-current="page">{{ $name }}</a>
                        @else
                            <a class="nav-link" href="{{ $url }}">{{ $name }}</a>
                        @endif
                    </li>
                @endforeach

            </ul>
        </div>
    </div>
</nav>

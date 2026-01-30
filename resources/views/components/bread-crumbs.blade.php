<nav {{ $attributes }}>
    <ul class="flex space-x-1">
        <li>
            <a href="/" class="underline">Home</a>
        </li>

        @foreach ($links as $label => $link)
            <li>👉</li>
            <li>
                <a href="{{ $link }}" class="underline">{{ $label }}</a>
            </li>
        @endforeach
    </ul>
</nav>

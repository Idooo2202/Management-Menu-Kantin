<li class="nav-item">
    <a
        class="nav-link {{ $active ? 'active fw-semibold text-black' : 'text-black' }}"
        href="{{ $href }}"
        style="color: #000 !important;"
    >
        {{ $slot }}
    </a>
</li>

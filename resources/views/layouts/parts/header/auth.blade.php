@auth
    <form
        method="POST"
        action="{{ route('logout') }}"
    >
        @csrf
        <button
            type="submit"
            class="header-desktop-menu-text-style"
        >Log out</button>
    </form>
@else
    <a
        href="{{ route('login') }}"
        class="header-desktop-menu-text-style"
    >Log In</a>
@endauth

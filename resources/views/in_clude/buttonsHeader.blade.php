{{-- @each('buttonsHeader', $_heder, '_headerButton') - используется в 'in_clude/header.blade.php' --}}

<li class="header-actions_link">
   <div class="header-actions__component">
      {{-- <a href="/login" class="header__button" title="Войти">Login</a> --}}
      {{-- <a href="{{ route('lo_gin', ['abc']) }}" class="header__button"> --}}
      <a href="{{ $_headerButton->href }}" class="header__button">
         {{-- Login --}}
         {{ $_headerButton->title }}
      </a>
   </div>
</li>
<footer class="content-info">
  <div class="cookie__notification">
    <p>This site uses cookies to provide a great user experience. By using LiveJoeDreamz.org, you agree to our use of cookies.</p>
    <button>Decline</button>
    <button>Accept</button>
  </div>
  <div class="container">
    {{-- @php dynamic_sidebar('sidebar-footer') @endphp --}}
      <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
     <p>&copy;  @php echo date("Y"); @endphp  JoeDreamz | Site developed by <a href="https://mrstevedev.io/" target="_blank">SP</a></p>
  </div>
</footer>

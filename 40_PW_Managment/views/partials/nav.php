<nav class="bg-gray-800">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
    <div class="flex h-16 items-center justify-between">
      <div class="hidden md:block">
        <div class="ml-10 flex items-baseline space-x-4">
          <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
          <a href="/" class="
          <?php 
            echo urlIs('/') ? 
              "bg-gray-900 text-white" : 
              "text-gray-300 hover:bg-gray-700 hover:text-white";
          ?> 
            rounded-md px-3 py-2 text-sm font-medium" aria-current="page">Home</a>
          <a href="/about" class="
          <?php 
            echo urlIs('/about') ? 
              "bg-gray-900 text-white" : 
              "text-gray-300 hover:bg-gray-700 hover:text-white";
          ?>
            rounded-md px-3 py-2 text-sm font-medium">About Us</a>
          <?php if($_SESSION['logged_in'] ?? false) : ?>
            <a href="/notes" class="
            <?php 
              echo urlIs('/notes') ? 
                "bg-gray-900 text-white" : 
                "text-gray-300 hover:bg-gray-700 hover:text-white";
            ?>
              rounded-md px-3 py-2 text-sm font-medium">Notes</a>
          <?php endif; ?>
          <a href="/contact" class="
          <?php 
            echo urlIs('/contact') ? 
              "bg-gray-900 text-white" : 
              "text-gray-300 hover:bg-gray-700 hover:text-white";
          ?>
            rounded-md px-3 py-2 text-sm font-medium">Contact</a>
        </div>
      </div>
      <div class="flex">
        <?php if(isset($_SESSION['logged_in'])) : ?>
          <p class="text-white">Hello <?= $_SESSION['user_email'] ?> </p>
          &nbsp;|&nbsp;
          <form action='/logout' method='POST'>
            <input type="hidden" name="_method" value="DELETE"/>
            <button type='submit' class="underline text-white">Log Out</button>
          </form>
        <?php else : ?>
          <a href='/login' class="underline text-white">Login</a>&nbsp;or&nbsp;
          <a href="/register" class="underline text-white">Register New Account</a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</nav>
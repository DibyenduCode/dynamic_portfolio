<!-- TOP NAVBAR -->
    <header
      class="h-20 border-b border-slate-800 bg-slate-950/80 backdrop-blur-xl flex items-center justify-between px-4 lg:px-8">

      <!-- LEFT -->
      <div class="flex items-center gap-4">

        <button id="menuBtn"
          class="lg:hidden w-11 h-11 rounded-xl glass">
          <i class="fa-solid fa-bars"></i>
        </button>

        <div>
          <h2 class="text-2xl font-bold">
            Portfolio Dashboard
          </h2>

          <p class="text-slate-400 text-sm">
            Manage your personal portfolio
          </p>
        </div>

      </div>

      <!-- RIGHT -->
      <div class="flex items-center gap-4">

        <!-- Search -->
        <div class="hidden md:flex items-center glass h-12 px-4 rounded-2xl w-72">

          <i class="fa-solid fa-magnifying-glass text-slate-400"></i>

          <input
            type="text"
            placeholder="Search..."
            class="bg-transparent outline-none px-3 text-sm w-full"
          />

        </div>

        <!-- Notification -->
        <button class="glass w-12 h-12 rounded-2xl relative">
          <i class="fa-regular fa-bell"></i>

          <span class="absolute top-2 right-2 w-2 h-2 bg-cyan-400 rounded-full"></span>
        </button>

        <!-- Profile -->
        <img
          src="https://i.pravatar.cc/150"
          class="w-12 h-12 rounded-2xl object-cover border border-slate-700"
        />

      </div>

    </header>
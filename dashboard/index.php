<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio Dashboard</title>

  <!-- Tailwind CSS -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Icons -->
  <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"/>

 <?php 
 include("addcss.php");
 
 ?>
</head>

<body class="text-white overflow-hidden">

<div class="flex h-screen">

 <?php 
 
 include("sidebar.php");
 ?>

  <!-- MAIN -->
  <div class="flex-1 flex flex-col overflow-hidden">

    <?php 
    include("header.php");
    ?>

    <!-- CONTENT -->
    <main class="flex-1 overflow-y-auto p-4 lg:p-8">

      <!-- HERO -->
      <div
        class="relative overflow-hidden rounded-[30px] p-8 bg-gradient-to-r from-blue-600 via-cyan-600 to-indigo-700">

        <div class="relative z-10">

          <p class="uppercase tracking-widest text-sm text-white/70">
            Welcome Back
          </p>

          <h1 class="text-4xl lg:text-5xl font-bold mt-3 leading-tight">
            Build Your <br/>
            Creative Portfolio
          </h1>

          <p class="text-white/80 mt-4 max-w-2xl">
            Showcase your projects, skills, achievements,
            and experience with a modern developer dashboard.
          </p>

          <button
            class="mt-6 bg-white text-slate-900 px-6 py-3 rounded-2xl font-semibold hover:scale-105 transition">
            Edit Portfolio
          </button>

        </div>

        <!-- Glow -->
        <div class="absolute -right-20 -top-20 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>

      </div>

      <!-- STATS -->
      <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mt-8">

        <!-- Card -->
        <div class="glass rounded-3xl p-6 card-hover">

          <div class="flex items-center justify-between">

            <div>
              <p class="text-slate-400 text-sm">
                Total Projects
              </p>

              <h2 class="text-4xl font-bold mt-2">
                24
              </h2>
            </div>

            <div class="w-14 h-14 rounded-2xl bg-blue-500/15 text-blue-400 flex items-center justify-center text-xl">
              <i class="fa-solid fa-code"></i>
            </div>

          </div>

        </div>

        <!-- Card -->
        <div class="glass rounded-3xl p-6 card-hover">

          <div class="flex items-center justify-between">

            <div>
              <p class="text-slate-400 text-sm">
                Clients
              </p>

              <h2 class="text-4xl font-bold mt-2">
                18
              </h2>
            </div>

            <div class="w-14 h-14 rounded-2xl bg-cyan-500/15 text-cyan-400 flex items-center justify-center text-xl">
              <i class="fa-solid fa-users"></i>
            </div>

          </div>

        </div>

        <!-- Card -->
        <div class="glass rounded-3xl p-6 card-hover">

          <div class="flex items-center justify-between">

            <div>
              <p class="text-slate-400 text-sm">
                Messages
              </p>

              <h2 class="text-4xl font-bold mt-2">
                42
              </h2>
            </div>

            <div class="w-14 h-14 rounded-2xl bg-purple-500/15 text-purple-400 flex items-center justify-center text-xl">
              <i class="fa-solid fa-envelope"></i>
            </div>

          </div>

        </div>

        <!-- Card -->
        <div class="glass rounded-3xl p-6 card-hover">

          <div class="flex items-center justify-between">

            <div>
              <p class="text-slate-400 text-sm">
                Profile Views
              </p>

              <h2 class="text-4xl font-bold mt-2">
                12K
              </h2>
            </div>

            <div class="w-14 h-14 rounded-2xl bg-pink-500/15 text-pink-400 flex items-center justify-center text-xl">
              <i class="fa-solid fa-eye"></i>
            </div>

          </div>

        </div>

      </div>

      <!-- CONTENT GRID -->
      <div class="grid grid-cols-1 xl:grid-cols-3 gap-6 mt-8">

        <!-- PROJECTS -->
        <div class="xl:col-span-2 glass rounded-3xl p-6">

          <div class="flex items-center justify-between mb-6">

            <div>
              <h3 class="text-2xl font-bold">
                Latest Projects
              </h3>

              <p class="text-slate-400 text-sm">
                Recently added portfolio works
              </p>
            </div>

            <button
              class="bg-blue-600 hover:bg-blue-700 transition px-5 py-2 rounded-xl">
              View All
            </button>

          </div>

          <div class="space-y-5">

            <!-- Project -->
            <div class="bg-slate-900/60 border border-slate-800 rounded-3xl p-5 flex flex-col lg:flex-row lg:items-center gap-5">

              <div class="w-full lg:w-32 h-28 rounded-2xl bg-gradient-to-r from-blue-500 to-cyan-500"></div>

              <div class="flex-1">

                <div class="flex items-center justify-between flex-wrap gap-3">

                  <div>
                    <h4 class="text-xl font-semibold">
                      AI SaaS Platform
                    </h4>

                    <p class="text-slate-400 text-sm mt-1">
                      React • PHP • TailwindCSS
                    </p>
                  </div>

                  <span class="px-4 py-2 rounded-full bg-green-500/15 text-green-400 text-sm">
                    Completed
                  </span>

                </div>

                <p class="text-slate-400 mt-4 text-sm">
                  Modern AI automation platform with beautiful UI and dashboard system.
                </p>

              </div>

            </div>

            <!-- Project -->
            <div class="bg-slate-900/60 border border-slate-800 rounded-3xl p-5 flex flex-col lg:flex-row lg:items-center gap-5">

              <div class="w-full lg:w-32 h-28 rounded-2xl bg-gradient-to-r from-purple-500 to-pink-500"></div>

              <div class="flex-1">

                <div class="flex items-center justify-between flex-wrap gap-3">

                  <div>
                    <h4 class="text-xl font-semibold">
                      Hosting Dashboard
                    </h4>

                    <p class="text-slate-400 text-sm mt-1">
                      PHP • MySQL • Tailwind
                    </p>
                  </div>

                  <span class="px-4 py-2 rounded-full bg-yellow-500/15 text-yellow-400 text-sm">
                    Running
                  </span>

                </div>

                <p class="text-slate-400 mt-4 text-sm">
                  Web hosting management panel with analytics and user controls.
                </p>

              </div>

            </div>

          </div>

        </div>

        <!-- RIGHT SIDE -->
        <div class="space-y-6">

          <!-- Skills -->
          <div class="glass rounded-3xl p-6">

            <h3 class="text-xl font-bold mb-5">
              Top Skills
            </h3>

            <div class="space-y-4">

              <div>
                <div class="flex justify-between text-sm mb-2">
                  <span>PHP</span>
                  <span>90%</span>
                </div>

                <div class="h-3 bg-slate-800 rounded-full overflow-hidden">
                  <div class="h-full w-[90%] bg-blue-500 rounded-full"></div>
                </div>
              </div>

              <div>
                <div class="flex justify-between text-sm mb-2">
                  <span>TailwindCSS</span>
                  <span>85%</span>
                </div>

                <div class="h-3 bg-slate-800 rounded-full overflow-hidden">
                  <div class="h-full w-[85%] bg-cyan-500 rounded-full"></div>
                </div>
              </div>

              <div>
                <div class="flex justify-between text-sm mb-2">
                  <span>JavaScript</span>
                  <span>75%</span>
                </div>

                <div class="h-3 bg-slate-800 rounded-full overflow-hidden">
                  <div class="h-full w-[75%] bg-purple-500 rounded-full"></div>
                </div>
              </div>

            </div>

          </div>

          <!-- Contact -->
          <div class="glass rounded-3xl p-6">

            <h3 class="text-xl font-bold mb-5">
              Quick Contact
            </h3>

            <div class="space-y-4">

              <button class="w-full bg-blue-600 hover:bg-blue-700 transition p-4 rounded-2xl text-left">
                <i class="fa-solid fa-envelope mr-2"></i>
                Send Message
              </button>

              <button class="w-full glass p-4 rounded-2xl hover:bg-white/5 transition text-left">
                <i class="fa-brands fa-github mr-2"></i>
                GitHub Profile
              </button>

              <button class="w-full glass p-4 rounded-2xl hover:bg-white/5 transition text-left">
                <i class="fa-brands fa-linkedin mr-2"></i>
                LinkedIn
              </button>

            </div>

          </div>

        </div>

      </div>

    </main>

  </div>

</div>

<!-- Overlay -->
<div id="overlay"
  class="fixed inset-0 bg-black/50 z-40 hidden lg:hidden"></div>

<?php 
include("addjs.php");

?>

</body>
</html>
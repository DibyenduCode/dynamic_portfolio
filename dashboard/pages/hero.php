<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Portfolio Dashboard</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />

    <?php
    include("../addcss.php");

    ?>
</head>

<body class="text-white overflow-hidden">

    <div class="flex h-screen">

        <?php

        include("../sidebar.php");
        ?>

        <!-- MAIN -->
        <div class="flex-1 flex flex-col overflow-hidden">

            <?php
            include("../header.php");
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
                            Build Your <br />
                            Creative Portfolio
                        </h1>

                        <p class="text-white/80 mt-4 max-w-2xl">
                            Showcase your projects, skills, achievements,
                            and experience with a modern developer dashboard.
                        </p>



                    </div>

                    <!-- Glow -->
                    <div class="absolute -right-20 -top-20 w-72 h-72 bg-white/10 rounded-full blur-3xl"></div>

                </div>

                <!-- STATS -->
                <!-- <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-6 mt-8">

      </div> -->

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

                            <!-- <button
              class="bg-blue-600 hover:bg-blue-700 transition px-5 py-2 rounded-xl">
              View All
            </button> -->

                        </div>

                        <div class="space-y-5">

                            <!-- FORM SECTION -->
                            <div class="w-full flex justify-center mt-8">

                                <div class="glass rounded-3xl p-6 md:p-8 lg:p-10 w-full max-w-6xl">

                                    <!-- HEADER -->
                                    <div class="mb-10 text-center">

                                        <h3 class="text-3xl font-bold">
                                            Portfolio Settings
                                        </h3>

                                        <p class="text-slate-400 text-sm mt-2">
                                            Update your profile information
                                        </p>

                                    </div>

                                    <!-- FORM -->
                                    <form class="space-y-8 w-full">

                                        <!-- GRID -->
                                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                                            <!-- NAME -->
                                            <div>
                                                <label class="block text-sm font-medium text-slate-300 mb-3">
                                                    Full Name
                                                </label>

                                                <input
                                                    type="text"
                                                    placeholder="Enter your name"
                                                    class="w-full h-16 px-6 rounded-2xl bg-slate-900/70 border border-slate-700 text-white placeholder:text-slate-500 outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-500/20 transition" />
                                            </div>

                                            <!-- EMAIL -->
                                            <div>
                                                <label class="block text-sm font-medium text-slate-300 mb-3">
                                                    Email Address
                                                </label>

                                                <input
                                                    type="email"
                                                    placeholder="Enter your email"
                                                    class="w-full h-16 px-6 rounded-2xl bg-slate-900/70 border border-slate-700 text-white placeholder:text-slate-500 outline-none focus:border-cyan-500 focus:ring-2 focus:ring-cyan-500/20 transition" />
                                            </div>

                                        </div>

                                        <!-- USERNAME -->
                                        <div>

                                            <label class="block text-sm font-medium text-slate-300 mb-3">
                                                Username
                                            </label>

                                            <div class="relative">

                                                <span class="absolute left-5 top-1/2 -translate-y-1/2 text-slate-500">
                                                    <i class="fa-solid fa-user"></i>
                                                </span>

                                                <input
                                                    type="text"
                                                    placeholder="@username"
                                                    class="w-full h-16 pl-14 pr-6 rounded-2xl bg-slate-900/70 border border-slate-700 text-white placeholder:text-slate-500 outline-none focus:border-purple-500 focus:ring-2 focus:ring-purple-500/20 transition" />

                                            </div>

                                        </div>


                                        <!-- TOGGLE -->
                                        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-5 glass rounded-3xl p-6">


                                        <!-- BUTTONS -->
                                        <div class="flex flex-col sm:flex-row justify-center gap-5 pt-4">

                                            <button
                                                type="submit"
                                                class="h-16 px-10 rounded-2xl bg-gradient-to-r from-blue-500 to-cyan-500 font-semibold text-lg hover:scale-[1.02] transition">

                                                Save Changes

                                            </button>

                                            <button
                                                type="button"
                                                class="h-16 px-10 rounded-2xl border border-slate-700 hover:bg-white/5 transition text-lg">

                                                Cancel

                                            </button>

                                        </div>

                                    </form>

                                </div>

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
    include("../addjs.php");

    ?>

</body>

</html>
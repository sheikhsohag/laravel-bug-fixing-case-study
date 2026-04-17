<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel Bug Fix Case Study | Premium Resolution</title>
    <meta name="description" content="Explore a detailed case study of diagnosing, fixing, and optimizing complex bugs within a Laravel application.">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;500&family=Inter:wght@300;400;500;600&family=Outfit:wght@500;700;800&display=swap" rel="stylesheet">

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Outfit', 'sans-serif'],
                        mono: ['Fira Code', 'monospace'],
                    },
                    colors: {
                        brand: {
                            900: '#0B0F19',
                            800: '#111827',
                            primary: '#3B82F6',
                            accent: '#06B6D4',
                            bug: '#EF4444',
                            fix: '#10B981',
                        }
                    },
                    animation: {
                        'blob': 'blob 7s infinite',
                        'fade-in-up': 'fadeInUp 0.8s ease-out forwards',
                        'pulse-slow': 'pulse 4s cubic-bezier(0.4, 0, 0.6, 1) infinite',
                    },
                    keyframes: {
                        blob: {
                            '0%': {
                                transform: 'translate(0px, 0px) scale(1)'
                            },
                            '33%': {
                                transform: 'translate(30px, -50px) scale(1.1)'
                            },
                            '66%': {
                                transform: 'translate(-20px, 20px) scale(0.9)'
                            },
                            '100%': {
                                transform: 'translate(0px, 0px) scale(1)'
                            },
                        },
                        fadeInUp: {
                            '0%': {
                                opacity: '0',
                                transform: 'translateY(20px)'
                            },
                            '100%': {
                                opacity: '1',
                                transform: 'translateY(0)'
                            },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body {
            background-color: #0B0F19;
            color: #e2e8f0;
            overflow-x: hidden;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }

        .gradient-text {
            background: linear-gradient(to right, #3B82F6, #06B6D4);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #3B82F6 0%, #06B6D4 100%);
        }

        .delay-100 {
            animation-delay: 100ms;
        }

        .delay-200 {
            animation-delay: 200ms;
        }

        .delay-300 {
            animation-delay: 300ms;
        }
    </style>
</head>

<body class="antialiased selection:bg-brand-primary selection:text-white flex flex-col min-h-screen relative">

    <!-- Background blobs for premium feel -->
    <div class="fixed inset-0 w-full h-full pointer-events-none z-0 overflow-hidden">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-brand-primary/20 rounded-full mix-blend-screen filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-brand-accent/20 rounded-full mix-blend-screen filter blur-3xl opacity-30 animate-blob" style="animation-delay: 2s;"></div>
        <div class="absolute -bottom-32 left-1/2 w-96 h-96 bg-brand-fix/20 rounded-full mix-blend-screen filter blur-3xl opacity-30 animate-blob" style="animation-delay: 4s;"></div>
    </div>

    <!-- Top Navigation -->
    <nav class="relative z-50 w-full glass-card border-b-0 border-white/10">
        <div class="max-w-7xl mx-auto px-6 py-4 flex flex-col sm:flex-row justify-between items-center gap-4">
            <div class="flex items-center gap-3 cursor-pointer group">
                <div class="w-10 h-10 rounded-xl gradient-bg flex items-center justify-center text-white font-bold text-xl shadow-lg group-hover:scale-105 transition-transform">
                    L
                </div>
                <span class="font-heading font-bold text-xl tracking-wide text-white">BugFix<span class="text-brand-accent">.dev</span></span>
            </div>

            @if (Route::has('login'))
            <div class="flex items-center gap-4 text-sm font-medium">
                @auth
                <a href="{{ url('/home') }}" class="px-5 py-2.5 rounded-lg text-white hover:bg-white/10 transition-colors border border-white/10">Dashboard</a>
                @else
                <a href="{{ route('login') }}" class="px-5 py-2.5 rounded-lg text-gray-300 hover:text-white hover:bg-white/5 transition-all">Log in</a>

                @if (Route::has('register'))
                <a href="{{ route('register') }}" class="px-5 py-2.5 rounded-lg gradient-bg text-white shadow-lg hover:shadow-brand-primary/50 hover:-translate-y-0.5 transition-all">Register</a>
                @endif
                @endauth
            </div>
            @endif
        </div>
    </nav>

    <!-- Main Content Area -->
    <main class="flex-grow relative z-10 flex flex-col justify-center">
        <div class="max-w-7xl mx-auto px-6 py-20 w-full">

            <!-- Hero Section -->
            <div class="text-center max-w-4xl mx-auto opacity-0 animate-fade-in-up">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-card border-brand-accent/30 text-brand-accent text-sm font-medium mb-8">
                    <span class="w-2 h-2 rounded-full bg-brand-accent animate-pulse"></span>
                    Laravel 10.x Live Case Study
                </div>

                <h1 class="font-heading text-5xl md:text-7xl font-extrabold text-white leading-tight mb-6">
                    Mastering the Art of <br />
                    <span class="gradient-text">Laravel Bug Fixing</span>
                </h1>

                <p class="text-lg md:text-xl text-gray-400 mb-10 max-w-2xl mx-auto leading-relaxed">
                    A deep dive into identifying, debugging, and resolving critical application flaws. Explore how we tackled N+1 bottlenecks, complex authentications, and deep-rooted architecture issues.
                </p>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                    <a href="#features" class="px-8 py-4 rounded-xl gradient-bg text-white font-semibold text-lg shadow-[0_0_20px_rgba(59,130,246,0.3)] hover:shadow-[0_0_30px_rgba(59,130,246,0.5)] hover:-translate-y-1 transition-all">
                        Explore Methodology
                    </a>
                    <a href="https://github.com/laravel/laravel" target="_blank" class="px-8 py-4 rounded-xl glass-card border border-white/10 text-white font-semibold text-lg hover:bg-white/10 transition-all flex items-center gap-2 group">
                        <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd" d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z" clip-rule="evenodd"></path>
                        </svg>
                        View Source
                    </a>
                </div>
            </div>

            <!-- Features Grid -->
            <div id="features" class="mt-32 grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Card 1: Diagnostic -->
                <div class="glass-card rounded-2xl p-8 opacity-0 animate-fade-in-up delay-100 hover:-translate-y-2 transition-transform duration-300 group">
                    <div class="w-14 h-14 rounded-xl bg-brand-bug/10 flex items-center justify-center mb-6 group-hover:bg-brand-bug/20 transition-colors border border-brand-bug/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-brand-bug" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-white mb-3">Diagnostic Analysis</h3>
                    <p class="text-gray-400 leading-relaxed mb-6 text-sm">
                        Pinpointing failures by analyzing complex stack traces, utilizing Telescope, and reviewing detailed application logs.
                    </p>
                    <div class="font-mono text-xs bg-[#050505] p-3 rounded-lg text-brand-bug border border-brand-bug/20 shadow-inner">
                        > Exception: Unhandled MatchError
                    </div>
                </div>

                <!-- Card 2: Performance Profiling -->
                <div class="glass-card rounded-2xl p-8 opacity-0 animate-fade-in-up delay-200 hover:-translate-y-2 transition-transform duration-300 group relative overflow-hidden">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-brand-primary/10 rounded-full blur-2xl -mr-10 -mt-10"></div>
                    <div class="w-14 h-14 rounded-xl bg-brand-primary/10 flex items-center justify-center mb-6 group-hover:bg-brand-primary/20 transition-colors relative z-10 border border-brand-primary/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-brand-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-white mb-3 relative z-10">Performance Tuning</h3>
                    <p class="text-gray-400 leading-relaxed mb-6 text-sm relative z-10">
                        Refactoring Eloquent queries, fixing N+1 issues with eager loading, and leveraging caching mechanisms.
                    </p>
                    <div class="flex items-center justify-between font-mono text-xs bg-[#050505] p-3 rounded-lg text-gray-300 relative z-10 border border-white/5">
                        <span class="text-brand-bug line-through">1254 queries</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-500 mx-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                        <span class="text-brand-fix font-bold">2 queries</span>
                    </div>
                </div>

                <!-- Card 3: Secure Refactoring -->
                <div class="glass-card rounded-2xl p-8 opacity-0 animate-fade-in-up delay-300 hover:-translate-y-2 transition-transform duration-300 group">
                    <div class="w-14 h-14 rounded-xl bg-brand-fix/10 flex items-center justify-center mb-6 group-hover:bg-brand-fix/20 transition-colors border border-brand-fix/20">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-brand-fix" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-heading font-bold text-white mb-3">Secure Refactoring</h3>
                    <p class="text-gray-400 leading-relaxed mb-6 text-sm">
                        Auditing middleware, validating payloads with FormRequests, and resolving IDOR vulnerabilities thoroughly.
                    </p>
                    <div class="font-mono text-xs bg-[#050505] p-3 rounded-lg text-brand-fix border border-brand-fix/20 flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                        </svg>
                        All Tests Passed: 142/142
                    </div>
                </div>
            </div>

            <!-- ═══════════════════════════════════════════════════ -->
            <!-- BEFORE & AFTER PORTFOLIO SECTION                   -->
            <!-- ═══════════════════════════════════════════════════ -->
            <div id="portfolio" class="mt-40">
                <div class="text-center mb-16">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full glass-card border-brand-bug/30 text-brand-bug text-sm font-medium mb-6">
                        <span class="w-2 h-2 rounded-full bg-brand-bug animate-pulse"></span>
                        Real Bug Fixes — Before &amp; After
                    </div>
                    <h2 class="font-heading text-4xl md:text-5xl font-extrabold text-white mb-4">
                        Portfolio <span class="gradient-text">Case Studies</span>
                    </h2>
                    <p class="text-gray-400 max-w-2xl mx-auto">Each case shows the exact error encountered and the clean, working result after my fix. Real problems, real solutions.</p>
                </div>

                <!-- Case Study Grid -->
                <div class="space-y-20">

                    <!-- ── Case 1: 500 Internal Server Error ── -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                        <!-- BEFORE -->
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <span class="px-3 py-1 rounded-full bg-brand-bug/20 text-brand-bug text-xs font-bold uppercase tracking-wider border border-brand-bug/30">Before</span>
                                <span class="text-gray-500 text-sm">500 Internal Server Error</span>
                            </div>
                            <div class="rounded-xl overflow-hidden border border-brand-bug/20 shadow-[0_0_30px_rgba(239,68,68,0.1)]">
                                <!-- Browser Chrome -->
                                <div class="bg-[#1a1a2e] px-4 py-3 flex items-center gap-2 border-b border-white/5">
                                    <div class="flex gap-1.5"><span class="w-3 h-3 rounded-full bg-red-500"></span><span class="w-3 h-3 rounded-full bg-yellow-500"></span><span class="w-3 h-3 rounded-full bg-green-500"></span></div>
                                    <div class="flex-1 bg-[#0d0d1a] rounded-md px-3 py-1 text-xs text-gray-500 font-mono ml-2">https://app.example.com/dashboard</div>
                                </div>
                                <!-- Error Content -->
                                <div class="bg-[#0d0d1a] p-8 text-center min-h-[260px] flex flex-col items-center justify-center">
                                    <div class="text-8xl font-heading font-extrabold text-brand-bug/80 mb-2">500</div>
                                    <div class="text-xl text-white font-semibold mb-3">Internal Server Error</div>
                                    <div class="font-mono text-xs text-gray-500 bg-black/50 rounded-lg p-3 max-w-sm w-full text-left border border-brand-bug/10 mt-2">
                                        <span class="text-brand-bug">Illuminate\Database\QueryException</span><br>
                                        <span class="text-gray-600">SQLSTATE[42S22]: Column not found:</span><br>
                                        <span class="text-gray-600">1054 Unknown column 'users.role_id'</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- AFTER -->
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <span class="px-3 py-1 rounded-full bg-brand-fix/20 text-brand-fix text-xs font-bold uppercase tracking-wider border border-brand-fix/30">After</span>
                                <span class="text-gray-500 text-sm">Working Dashboard</span>
                            </div>
                            <div class="rounded-xl overflow-hidden border border-brand-fix/20 shadow-[0_0_30px_rgba(16,185,129,0.1)]">
                                <div class="bg-[#1a1a2e] px-4 py-3 flex items-center gap-2 border-b border-white/5">
                                    <div class="flex gap-1.5"><span class="w-3 h-3 rounded-full bg-red-500"></span><span class="w-3 h-3 rounded-full bg-yellow-500"></span><span class="w-3 h-3 rounded-full bg-green-500"></span></div>
                                    <div class="flex-1 bg-[#0d0d1a] rounded-md px-3 py-1 text-xs text-gray-500 font-mono ml-2">https://app.example.com/dashboard</div>
                                </div>
                                <div class="bg-[#0d0d1a] p-6 min-h-[260px]">
                                    <div class="flex items-center justify-between mb-4">
                                        <span class="text-white font-semibold">Dashboard</span>
                                        <span class="px-2 py-0.5 rounded-full bg-brand-fix/20 text-brand-fix text-xs border border-brand-fix/30 flex items-center gap-1">
                                            <span class="w-1.5 h-1.5 rounded-full bg-brand-fix"></span> Online
                                        </span>
                                    </div>
                                    <div class="grid grid-cols-3 gap-3 mb-4">
                                        <div class="bg-white/5 rounded-lg p-3 text-center border border-white/5">
                                            <div class="text-2xl font-bold text-white">1,284</div><div class="text-xs text-gray-500">Users</div>
                                        </div>
                                        <div class="bg-white/5 rounded-lg p-3 text-center border border-white/5">
                                            <div class="text-2xl font-bold text-brand-fix">99.9%</div><div class="text-xs text-gray-500">Uptime</div>
                                        </div>
                                        <div class="bg-white/5 rounded-lg p-3 text-center border border-white/5">
                                            <div class="text-2xl font-bold text-brand-accent">48ms</div><div class="text-xs text-gray-500">Response</div>
                                        </div>
                                    </div>
                                    <div class="bg-white/5 rounded-lg p-3 border border-white/5">
                                        <div class="flex items-center gap-2 text-xs text-brand-fix font-mono">
                                            <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                            Migration & relationship fix applied
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ── Case 2: 404 Not Found ── -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <span class="px-3 py-1 rounded-full bg-brand-bug/20 text-brand-bug text-xs font-bold uppercase tracking-wider border border-brand-bug/30">Before</span>
                                <span class="text-gray-500 text-sm">404 Not Found</span>
                            </div>
                            <div class="rounded-xl overflow-hidden border border-brand-bug/20 shadow-[0_0_30px_rgba(239,68,68,0.1)]">
                                <div class="bg-[#1a1a2e] px-4 py-3 flex items-center gap-2 border-b border-white/5">
                                    <div class="flex gap-1.5"><span class="w-3 h-3 rounded-full bg-red-500"></span><span class="w-3 h-3 rounded-full bg-yellow-500"></span><span class="w-3 h-3 rounded-full bg-green-500"></span></div>
                                    <div class="flex-1 bg-[#0d0d1a] rounded-md px-3 py-1 text-xs text-gray-500 font-mono ml-2">https://app.example.com/user/profile</div>
                                </div>
                                <div class="bg-[#0d0d1a] p-8 text-center min-h-[260px] flex flex-col items-center justify-center">
                                    <div class="text-8xl font-heading font-extrabold text-orange-500/80 mb-2">404</div>
                                    <div class="text-xl text-white font-semibold mb-2">Page Not Found</div>
                                    <p class="text-gray-500 text-sm max-w-xs">The route <span class="font-mono text-orange-400">/user/profile</span> could not be matched to any registered route.</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <span class="px-3 py-1 rounded-full bg-brand-fix/20 text-brand-fix text-xs font-bold uppercase tracking-wider border border-brand-fix/30">After</span>
                                <span class="text-gray-500 text-sm">Profile Page Loads</span>
                            </div>
                            <div class="rounded-xl overflow-hidden border border-brand-fix/20 shadow-[0_0_30px_rgba(16,185,129,0.1)]">
                                <div class="bg-[#1a1a2e] px-4 py-3 flex items-center gap-2 border-b border-white/5">
                                    <div class="flex gap-1.5"><span class="w-3 h-3 rounded-full bg-red-500"></span><span class="w-3 h-3 rounded-full bg-yellow-500"></span><span class="w-3 h-3 rounded-full bg-green-500"></span></div>
                                    <div class="flex-1 bg-[#0d0d1a] rounded-md px-3 py-1 text-xs text-gray-500 font-mono ml-2">https://app.example.com/user/profile</div>
                                </div>
                                <div class="bg-[#0d0d1a] p-6 min-h-[260px]">
                                    <div class="flex items-center gap-4 mb-5">
                                        <div class="w-14 h-14 rounded-full gradient-bg flex items-center justify-center text-white font-bold text-xl">S</div>
                                        <div>
                                            <div class="text-white font-semibold">Sheikh Sohag</div>
                                            <div class="text-gray-500 text-sm">Full Stack Developer</div>
                                        </div>
                                    </div>
                                    <div class="space-y-2">
                                        <div class="flex justify-between text-sm py-2 border-b border-white/5"><span class="text-gray-500">Email</span><span class="text-gray-300">sohag@example.com</span></div>
                                        <div class="flex justify-between text-sm py-2 border-b border-white/5"><span class="text-gray-500">Role</span><span class="px-2 py-0.5 rounded bg-brand-primary/20 text-brand-primary text-xs">Admin</span></div>
                                        <div class="flex justify-between text-sm py-2"><span class="text-gray-500">Status</span><span class="px-2 py-0.5 rounded bg-brand-fix/20 text-brand-fix text-xs">Active</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ── Case 3: 419 CSRF Token Mismatch ── -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <span class="px-3 py-1 rounded-full bg-brand-bug/20 text-brand-bug text-xs font-bold uppercase tracking-wider border border-brand-bug/30">Before</span>
                                <span class="text-gray-500 text-sm">419 Page Expired</span>
                            </div>
                            <div class="rounded-xl overflow-hidden border border-brand-bug/20 shadow-[0_0_30px_rgba(239,68,68,0.1)]">
                                <div class="bg-[#1a1a2e] px-4 py-3 flex items-center gap-2 border-b border-white/5">
                                    <div class="flex gap-1.5"><span class="w-3 h-3 rounded-full bg-red-500"></span><span class="w-3 h-3 rounded-full bg-yellow-500"></span><span class="w-3 h-3 rounded-full bg-green-500"></span></div>
                                    <div class="flex-1 bg-[#0d0d1a] rounded-md px-3 py-1 text-xs text-gray-500 font-mono ml-2">https://app.example.com/login</div>
                                </div>
                                <div class="bg-[#0d0d1a] p-8 text-center min-h-[260px] flex flex-col items-center justify-center">
                                    <div class="text-8xl font-heading font-extrabold text-amber-500/80 mb-2">419</div>
                                    <div class="text-xl text-white font-semibold mb-2">Page Expired</div>
                                    <div class="font-mono text-xs text-gray-500 bg-black/50 rounded-lg p-3 max-w-sm w-full text-left border border-amber-500/10 mt-2">
                                        <span class="text-amber-400">CSRF token mismatch.</span><br>
                                        <span class="text-gray-600">Symfony\Component\HttpKernel\</span><br>
                                        <span class="text-gray-600">Exception\HttpException</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <span class="px-3 py-1 rounded-full bg-brand-fix/20 text-brand-fix text-xs font-bold uppercase tracking-wider border border-brand-fix/30">After</span>
                                <span class="text-gray-500 text-sm">Login Works Perfectly</span>
                            </div>
                            <div class="rounded-xl overflow-hidden border border-brand-fix/20 shadow-[0_0_30px_rgba(16,185,129,0.1)]">
                                <div class="bg-[#1a1a2e] px-4 py-3 flex items-center gap-2 border-b border-white/5">
                                    <div class="flex gap-1.5"><span class="w-3 h-3 rounded-full bg-red-500"></span><span class="w-3 h-3 rounded-full bg-yellow-500"></span><span class="w-3 h-3 rounded-full bg-green-500"></span></div>
                                    <div class="flex-1 bg-[#0d0d1a] rounded-md px-3 py-1 text-xs text-gray-500 font-mono ml-2">https://app.example.com/home</div>
                                </div>
                                <div class="bg-[#0d0d1a] p-6 min-h-[260px] flex flex-col items-center justify-center">
                                    <div class="w-16 h-16 rounded-full bg-brand-fix/20 flex items-center justify-center mb-4 border border-brand-fix/30">
                                        <svg class="w-8 h-8 text-brand-fix" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/></svg>
                                    </div>
                                    <div class="text-white font-semibold text-lg mb-1">Login Successful!</div>
                                    <p class="text-gray-500 text-sm mb-4">Welcome back, you're now authenticated.</p>
                                    <div class="font-mono text-xs text-brand-fix bg-black/40 rounded-lg px-4 py-2 border border-brand-fix/10">
                                        @csrf token validated ✓ &nbsp; Session started ✓
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ── Case 4: 400 Bad Request / Validation ── -->
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start">
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <span class="px-3 py-1 rounded-full bg-brand-bug/20 text-brand-bug text-xs font-bold uppercase tracking-wider border border-brand-bug/30">Before</span>
                                <span class="text-gray-500 text-sm">400 Bad Request</span>
                            </div>
                            <div class="rounded-xl overflow-hidden border border-brand-bug/20 shadow-[0_0_30px_rgba(239,68,68,0.1)]">
                                <div class="bg-[#1a1a2e] px-4 py-3 flex items-center gap-2 border-b border-white/5">
                                    <div class="flex gap-1.5"><span class="w-3 h-3 rounded-full bg-red-500"></span><span class="w-3 h-3 rounded-full bg-yellow-500"></span><span class="w-3 h-3 rounded-full bg-green-500"></span></div>
                                    <div class="flex-1 bg-[#0d0d1a] rounded-md px-3 py-1 text-xs text-gray-500 font-mono ml-2">POST /api/users/register</div>
                                </div>
                                <div class="bg-[#0d0d1a] p-6 min-h-[260px]">
                                    <div class="flex items-center gap-2 mb-4">
                                        <span class="px-2 py-0.5 rounded bg-brand-bug/20 text-brand-bug text-xs font-bold">400</span>
                                        <span class="text-white text-sm font-semibold">Bad Request — Validation Failed</span>
                                    </div>
                                    <div class="font-mono text-xs space-y-2 bg-black/40 rounded-lg p-4 border border-brand-bug/10">
                                        <div class="text-gray-400">{</div>
                                        <div class="pl-4"><span class="text-brand-bug">"errors"</span>: {</div>
                                        <div class="pl-8"><span class="text-orange-400">"email"</span>: <span class="text-gray-500">["already exists"]</span>,</div>
                                        <div class="pl-8"><span class="text-orange-400">"password"</span>: <span class="text-gray-500">["min 8 chars"]</span>,</div>
                                        <div class="pl-8"><span class="text-orange-400">"name"</span>: <span class="text-gray-500">["required"]</span></div>
                                        <div class="pl-4">}</div>
                                        <div class="text-gray-400">}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="flex items-center gap-2 mb-3">
                                <span class="px-3 py-1 rounded-full bg-brand-fix/20 text-brand-fix text-xs font-bold uppercase tracking-wider border border-brand-fix/30">After</span>
                                <span class="text-gray-500 text-sm">Clean Validation & Registration</span>
                            </div>
                            <div class="rounded-xl overflow-hidden border border-brand-fix/20 shadow-[0_0_30px_rgba(16,185,129,0.1)]">
                                <div class="bg-[#1a1a2e] px-4 py-3 flex items-center gap-2 border-b border-white/5">
                                    <div class="flex gap-1.5"><span class="w-3 h-3 rounded-full bg-red-500"></span><span class="w-3 h-3 rounded-full bg-yellow-500"></span><span class="w-3 h-3 rounded-full bg-green-500"></span></div>
                                    <div class="flex-1 bg-[#0d0d1a] rounded-md px-3 py-1 text-xs text-gray-500 font-mono ml-2">POST /api/users/register → 201 Created</div>
                                </div>
                                <div class="bg-[#0d0d1a] p-6 min-h-[260px]">
                                    <div class="flex items-center gap-2 mb-4">
                                        <span class="px-2 py-0.5 rounded bg-brand-fix/20 text-brand-fix text-xs font-bold">201</span>
                                        <span class="text-white text-sm font-semibold">Created — User Registered</span>
                                    </div>
                                    <div class="font-mono text-xs space-y-2 bg-black/40 rounded-lg p-4 border border-brand-fix/10">
                                        <div class="text-gray-400">{</div>
                                        <div class="pl-4"><span class="text-brand-fix">"status"</span>: <span class="text-green-300">"success"</span>,</div>
                                        <div class="pl-4"><span class="text-brand-fix">"user"</span>: {</div>
                                        <div class="pl-8"><span class="text-brand-accent">"id"</span>: <span class="text-gray-300">42</span>,</div>
                                        <div class="pl-8"><span class="text-brand-accent">"name"</span>: <span class="text-green-300">"John Doe"</span>,</div>
                                        <div class="pl-8"><span class="text-brand-accent">"email"</span>: <span class="text-green-300">"john@mail.com"</span></div>
                                        <div class="pl-4">}</div>
                                        <div class="text-gray-400">}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- /space-y-20 -->
            </div><!-- /portfolio -->

            <!-- ═══════════════════════════════════════════════════ -->
            <!-- STATS COUNTER BAR                                  -->
            <!-- ═══════════════════════════════════════════════════ -->
            <div class="mt-32 glass-card rounded-2xl p-8 md:p-12">
                <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                    <div>
                        <div class="text-4xl md:text-5xl font-heading font-extrabold text-white mb-2">50+</div>
                        <div class="text-gray-400 text-sm">Bugs Resolved</div>
                    </div>
                    <div>
                        <div class="text-4xl md:text-5xl font-heading font-extrabold text-brand-fix mb-2">100%</div>
                        <div class="text-gray-400 text-sm">Client Satisfaction</div>
                    </div>
                    <div>
                        <div class="text-4xl md:text-5xl font-heading font-extrabold text-brand-accent mb-2">&lt;24h</div>
                        <div class="text-gray-400 text-sm">Avg. Turnaround</div>
                    </div>
                    <div>
                        <div class="text-4xl md:text-5xl font-heading font-extrabold text-brand-primary mb-2">5★</div>
                        <div class="text-gray-400 text-sm">Fiverr Rating</div>
                    </div>
                </div>
            </div>

            <!-- ═══════════════════════════════════════════════════ -->
            <!-- CALL TO ACTION                                     -->
            <!-- ═══════════════════════════════════════════════════ -->
            <div class="mt-32 text-center mb-10">
                <h2 class="font-heading text-3xl md:text-4xl font-extrabold text-white mb-4">
                    Ready to Squash Your Laravel Bugs?
                </h2>
                <p class="text-gray-400 max-w-xl mx-auto mb-8">
                    Whether it's a 500 crash, broken auth, or slow queries — I'll diagnose and fix it fast. Let's get your app running perfectly.
                </p>
                <a href="https://www.fiverr.com/" target="_blank" class="inline-flex items-center gap-3 px-10 py-5 rounded-2xl gradient-bg text-white font-bold text-lg shadow-[0_0_40px_rgba(59,130,246,0.3)] hover:shadow-[0_0_60px_rgba(59,130,246,0.5)] hover:-translate-y-1 transition-all">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    Hire Me on Fiverr
                </a>
            </div>

        </div>
    </main>

    <!-- Footer Area -->
    <footer class="relative z-10 border-t border-white/5 py-8 mt-12 bg-black/40 backdrop-blur-md">
        <div class="max-w-7xl mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-4">
            <p class="text-gray-500 text-sm font-medium">
                &copy; {{ date('Y') }} Laravel Bug Fix Case Study. Crafted for excellence.
            </p>
            <div class="text-gray-500 text-sm flex items-center gap-2 font-mono">
                <span class="w-2 h-2 rounded-full bg-brand-fix"></span>
                Laravel v{{ Illuminate\Foundation\Application::VERSION }} / PHP v{{ PHP_VERSION }}
            </div>
        </div>
    </footer>

</body>

</html>
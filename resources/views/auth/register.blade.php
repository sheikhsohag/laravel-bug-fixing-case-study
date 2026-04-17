<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | BugFix.dev</title>

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
                    },
                    keyframes: {
                        blob: {
                            '0%': { transform: 'translate(0px, 0px) scale(1)' },
                            '33%': { transform: 'translate(30px, -50px) scale(1.1)' },
                            '66%': { transform: 'translate(-20px, 20px) scale(0.9)' },
                            '100%': { transform: 'translate(0px, 0px) scale(1)' },
                        },
                        fadeInUp: {
                            '0%': { opacity: '0', transform: 'translateY(20px)' },
                            '100%': { opacity: '1', transform: 'translateY(0)' },
                        }
                    }
                }
            }
        }
    </script>

    <style>
        body { background-color: #0B0F19; color: #e2e8f0; overflow-x: hidden; }
        .glass-card {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
        .gradient-bg { background: linear-gradient(135deg, #3B82F6 0%, #06B6D4 100%); }
        .input-glass {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
        }
        .input-glass:focus {
            outline: none;
            border-color: #3B82F6;
            box-shadow: 0 0 15px rgba(59, 130, 246, 0.3);
        }
    </style>
</head>
<body class="antialiased selection:bg-brand-primary selection:text-white flex items-center justify-center min-h-screen relative py-12">

    <!-- Background blobs -->
    <div class="fixed inset-0 w-full h-full pointer-events-none z-0 overflow-hidden">
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-brand-primary/20 rounded-full mix-blend-screen filter blur-3xl opacity-30 animate-blob"></div>
        <div class="absolute top-0 right-1/4 w-96 h-96 bg-brand-accent/20 rounded-full mix-blend-screen filter blur-3xl opacity-30 animate-blob" style="animation-delay: 2s;"></div>
        <div class="absolute -bottom-32 left-1/2 w-96 h-96 bg-brand-fix/20 rounded-full mix-blend-screen filter blur-3xl opacity-30 animate-blob" style="animation-delay: 4s;"></div>
    </div>

    <!-- Register Form -->
    <div class="relative z-10 w-full max-w-md px-6 animate-fade-in-up">
        
        <div class="text-center mb-8">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-3 cursor-pointer group mb-6">
                <div class="w-12 h-12 rounded-xl gradient-bg flex items-center justify-center text-white font-bold text-2xl shadow-lg group-hover:scale-105 transition-transform">
                    L
                </div>
                <span class="font-heading font-bold text-3xl tracking-wide text-white">BugFix<span class="text-brand-accent">.dev</span></span>
            </a>
            <h2 class="text-2xl font-bold text-white mb-2">Create an Account</h2>
            <p class="text-gray-400 text-sm">Join the community to fix bugs together</p>
        </div>

        <div class="glass-card rounded-2xl p-8 shadow-2xl border-t border-l border-white/10">
            @if($errors->any())
                <div class="mb-6 p-4 rounded-lg bg-brand-bug/10 border border-brand-bug/20 text-brand-bug text-sm font-medium">
                    {{ $errors->first() }}
                </div>
            @endif

            <form method="POST" action="{{ route('register') }}" class="space-y-5">
                @csrf
                
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-300 mb-2">Full Name</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/></svg>
                        </div>
                        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus class="input-glass w-full pl-10 pr-4 py-3 rounded-xl transition-all" placeholder="John Doe">
                    </div>
                </div>

                <div>
                    <label for="email" class="block text-sm font-medium text-gray-300 mb-2">Email Address</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                        </div>
                        <input id="email" type="email" name="email" value="{{ old('email') }}" required class="input-glass w-full pl-10 pr-4 py-3 rounded-xl transition-all" placeholder="you@example.com">
                    </div>
                </div>

                <div>
                    <label for="password" class="block text-sm font-medium text-gray-300 mb-2">Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/></svg>
                        </div>
                        <input id="password" type="password" name="password" required class="input-glass w-full pl-10 pr-4 py-3 rounded-xl transition-all" placeholder="••••••••">
                    </div>
                </div>

                <div>
                    <label for="password_confirmation" class="block text-sm font-medium text-gray-300 mb-2">Confirm Password</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                            <svg class="h-5 w-5 text-gray-500" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        </div>
                        <input id="password_confirmation" type="password" name="password_confirmation" required class="input-glass w-full pl-10 pr-4 py-3 rounded-xl transition-all" placeholder="••••••••">
                    </div>
                </div>

                <button type="submit" class="w-full flex justify-center py-3 px-4 rounded-xl gradient-bg text-white font-bold shadow-lg hover:shadow-brand-primary/50 hover:-translate-y-0.5 transition-all mt-6">
                    Create Account
                </button>
            </form>
        </div>

        <p class="mt-8 text-center text-sm text-gray-400">
            Already have an account? 
            <a href="{{ route('login') }}" class="font-medium text-brand-primary hover:text-brand-accent transition-colors">Sign in</a>
        </p>
    </div>

</body>
</html>

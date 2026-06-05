<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 text-emerald-400 font-medium text-sm" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <label for="email" class="block font-semibold text-sm text-slate-300">Email Address</label>
            <input id="email" 
                   class="block mt-2 w-full bg-slate-950/70 border border-slate-800 text-white placeholder-slate-500 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-cyan-500/20 focus:border-cyan-500 transition-all duration-200" 
                   type="email" 
                   name="email" 
                   value="{{ old('email') }}" 
                   placeholder="admin@tripanca.com"
                   required 
                   autofocus 
                   autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-rose-400 text-xs" />
        </div>

        <!-- Password -->
        <div class="mt-5">
            <label for="password" class="block font-semibold text-sm text-slate-300">Password</label>
            <input id="password" 
                   class="block mt-2 w-full bg-slate-950/70 border border-slate-800 text-white placeholder-slate-500 rounded-xl px-4 py-3 focus:outline-none focus:ring-2 focus:ring-cyan-500/20 focus:border-cyan-500 transition-all duration-200" 
                   type="password" 
                   name="password" 
                   placeholder="••••••••"
                   required 
                   autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-rose-400 text-xs" />
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex items-center justify-between mt-5">
            <label for="remember_me" class="inline-flex items-center cursor-pointer select-none">
                <input id="remember_me" 
                       type="checkbox" 
                       class="rounded bg-slate-950/70 border-slate-800 text-cyan-500 focus:ring-cyan-500/20 focus:ring-offset-slate-950" 
                       name="remember">
                <span class="ms-2 text-sm text-slate-400 hover:text-slate-300 transition-colors">Remember me</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-sm text-slate-400 hover:text-cyan-400 transition-colors" href="{{ route('password.request') }}">
                    Forgot password?
                </a>
            @endif
        </div>

        <!-- Submit Button -->
        <div class="mt-6">
            <button type="submit" 
                    class="w-full py-3 bg-gradient-to-r from-blue-600 to-cyan-500 text-white font-bold rounded-xl shadow-[0_4px_15px_rgba(25,64,154,0.3)] hover:shadow-[0_6px_20px_rgba(0,209,249,0.4)] hover:brightness-110 active:scale-[0.98] transition-all duration-200">
                Sign In
            </button>
        </div>
    </form>
</x-guest-layout>


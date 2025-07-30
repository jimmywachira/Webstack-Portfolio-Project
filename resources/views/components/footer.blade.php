<footer class="mt-10 border-t border-blue-900/30 bg-gradient-to-r from-blue-900/80 via-blue-800/80 to-blue-900/80 backdrop-blur py-12">
    <div class="max-w-7xl mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-8 mb-8">
            <!-- Logo & Description -->
            <div class="md:col-span-2">
                <div class="flex items-center gap-3 mb-4">
                    <ion-icon name="rocket-outline" class="text-blue text-3xl"></ion-icon>
                    <span class="text-2xl font-bold text-white">JobsLink</span>
                </div>

                <p class="text-white-300 text-sm leading-relaxed max-w-md">
                    Connect with top employers and discover your next career opportunity.
                    We make job searching simple, fast, and effective.
                </p>
            </div>

            <!-- Quick Links -->
            <div>
                <h3 class="text-white font-semibold mb-4">Quick Links</h3>
                <ul class="space-y-2">
                    <li><a href="/" class="text-white-300 hover:text-blue transition-colors text-sm">Home</a></li>
                    <li><a href="/jobs" class="text-white-300 hover:text-blue transition-colors text-sm">Browse Jobs</a></li>
                    <li><a href="/search" class="text-white-300 hover:text-blue transition-colors text-sm">Search</a></li>
                    <li><a href="/about" class="text-white-300 hover:text-blue transition-colors text-sm">About Us</a></li>
                </ul>
            </div>

            <!-- Social Links -->
            <div>
                <h3 class="text-white font-semibold mb-4">Follow Us</h3>
                <div class="flex gap-4">
                    <a href="#" class="p-2 rounded-full transition-colors group">
                        <ion-icon name="logo-facebook" class="text-blue group-hover:text-white text-xl"></ion-icon>
                    </a>
                    <a href="#" class="p-2 rounded-full transition-colors group">
                        <ion-icon name="logo-twitter" class="text-blue group-hover:text-white text-xl"></ion-icon>
                    </a>
                    <a href="#" class="p-2 rounded-full transition-colors group">
                        <ion-icon name="logo-linkedin" class="text-blue group-hover:text-white text-xl"></ion-icon>
                    </a>
                    <a href="#" class="p-2 rounded-full transition-colors group">
                        <ion-icon name="logo-instagram" class="text-blue group-hover:text-white text-xl"></ion-icon>
                    </a>
                </div>
            </div>
        </div>

        <!-- Bottom Bar -->
        <div class="pt-3 flex flex-col md:flex-row justify-between items-center gap-4">
            <div class="text-black text-sm">
                © {{ date('Y') }} JobsLink. All rights reserved.
            </div>
            <div class="flex gap-6 text-sm">
                <a href="#" class="text-black hover:text-blue-400 transition-colors">Privacy Policy</a>
                <a href="#" class="text-black hover:text-blue-400 transition-colors">Terms of Service</a>
                <a href="#" class="text-black hover:text-blue-400 transition-colors">Contact</a>
            </div>
        </div>
    </div>
</footer>

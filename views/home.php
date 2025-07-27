<div class="space-y-6">
    <!-- Welcome Card -->
    <div class="bg-card border rounded-lg p-8">
        <h1 class="text-3xl font-bold text-foreground mb-4">Welcome to the Store</h1>
        <p class="text-lg text-muted-foreground mb-4">You have successfully created your first root route!</p>
        <p class="text-muted-foreground">The current time in Ho Chi Minh City is <span class="font-mono text-primary"><?php echo date('h:i:s A'); ?></span>.</p>
    </div>

    <!-- Feature Cards Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <div class="bg-card border rounded-lg p-6">
            <h3 class="text-lg font-semibold text-foreground mb-2">Fast Performance</h3>
            <p class="text-muted-foreground">Built with PHP and optimized for speed.</p>
        </div>
        
        <div class="bg-card border rounded-lg p-6">
            <h3 class="text-lg font-semibold text-foreground mb-2">Modern Design</h3>
            <p class="text-muted-foreground">Styled with Tailwind CSS and shadcn theme.</p>
        </div>
        
        <div class="bg-card border rounded-lg p-6">
            <h3 class="text-lg font-semibold text-foreground mb-2">Easy Setup</h3>
            <p class="text-muted-foreground">Simple installation with Composer and npm.</p>
        </div>
    </div>

    <!-- Action Buttons -->
    <div class="flex gap-4">
        <button class="px-6 py-2 bg-primary text-primary-foreground rounded-md hover:bg-primary/90 transition-colors">
            Get Started
        </button>
        <button class="px-6 py-2 bg-secondary text-secondary-foreground rounded-md hover:bg-secondary/80 transition-colors">
            Learn More
        </button>
    </div>

    <section class="accordion">
        <details class="group border-b last:border-b-0">
            <summary class="w-full focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] transition-all outline-none rounded-md">
                <h2 class="flex flex-1 items-start justify-between gap-4 py-4 text-left text-sm font-medium hover:underline">
                    Is it accessible?
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180"><path d="m6 9 6 6 6-6" /></svg>
                </h2>
            </summary>
            <section class="pb-4">
                <p class="text-sm">Yes. It adheres to the WAI-ARIA design pattern.</p>
            </section>
        </details>
        <details class="group border-b last:border-b-0">
            <summary class="w-full focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] transition-all outline-none rounded-md">
                <h2 class="flex flex-1 items-start justify-between gap-4 py-4 text-left text-sm font-medium hover:underline">
                    Is it styled?
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180"><path d="m6 9 6 6 6-6" /></svg>
                </h2>
            </summary>
            <section class="pb-4">
                <p class="text-sm">Yes. It comes with default styles that matches the other components' aesthetic.</p>
            </section>
        </details>
        <details class="group border-b last:border-b-0">
            <summary class="w-full focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] transition-all outline-none rounded-md">
                <h2 class="flex flex-1 items-start justify-between gap-4 py-4 text-left text-sm font-medium hover:underline">
                    Is it animated?
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-muted-foreground pointer-events-none size-4 shrink-0 translate-y-0.5 transition-transform duration-200 group-open:rotate-180"><path d="m6 9 6 6 6-6" /></svg>
                </h2>
            </summary>
            <section>
                <p class="text-sm whitespace-pre-wrap">Yes. It's animated by default, but you can disable it if you prefer.</p>
            </section>
        </details>
    </section>
</div>
